<?PHP
/*
    Contact Form from HTML Form Guide

    This program is free software published under the
    terms of the GNU Lesser General Public License.

This program is distributed in the hope that it will
be useful - WITHOUT ANY WARRANTY; without even the
implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.

@copyright html-form-guide.com 2010
*/
require $_SERVER['DOCUMENT_ROOT'] . '/PHPMailerAutoload.php';

/*
Interface to Captcha handler
*/
class FG_CaptchaHandler
{
    function Validate() { return false;}
    function GetError(){ return '';}
}
/*
FGContactForm is a general purpose contact form class
It supports Captcha, HTML Emails, sending emails
conditionally, File atachments and more.
*/
class FGContactForm
{
    var $receipients;
    var $errors;
    var $error_message;
    var $name;
    var $email;
    var $message;
    var $from_address;
    var $form_random_key;
    var $conditional_field;
    var $captcha_handler;
    var $sender;

    var $mailer;

    function FGContactForm()
    {
        $this->receipients = array();
        $this->errors = array();
        $this->form_random_key = 'HTgsjhartag';
        $this->conditional_field='';
    }

    function EnableCaptcha($captcha_handler)
    {
        $this->captcha_handler = $captcha_handler;
        session_start();
    }

    function AddRecipient($email = array())
    {
        $this->receipent = $email;
    }

    function SetFromAddress($email)
    {
        $this->from_address = $email;
    }
    function SetFormRandomKey($key)
    {
        $this->form_random_key = $key;
    }
    function GetSpamTrapInputName()
    {
        return 'sp'.md5('KHGdnbvsgst'.$this->GetKey());
    }
    function SafeDisplay($value_name)
    {
        if(empty($_POST[$value_name]))
        {
            return'';
        }
        return htmlspecialchars($_POST[$value_name], ENT_QUOTES);
    }
    function GetFormIDInputName()
    {
        $rand = md5('TygshRt'.$this->GetKey());

        $rand = substr($rand,0,20);
        return 'id'.$rand;
    }


    function GetFormIDInputValue()
    {
        return md5('jhgahTsajhg'.$this->GetKey());
    }

    function SetConditionalField($field)
    {
        $this->conditional_field = $field;
    }

    function ProcessForm()
    {
        if(!isset($_POST['submitted']))
        {
           return false;
        }
        if(!$this->Validate())
        {
            $this->error_message = implode('<br/>',$this->errors);
            return false;
        }
        $this->CollectData();

        $ret = $this->SendFormSubmission();

        return $ret;
    }

    function RedirectToURL($url)
    {
        header("Location: $url");
        exit;
    }

    function GetErrorMessage()
    {
        return $this->error_message;
    }
    function GetSelfScript()
    {
        return htmlentities($_SERVER['PHP_SELF']);
    }

    function GetName()
    {
        return $this->name;
    }
    function GetEmail()
    {
        return $this->email;
    }
    function GetMessage()
    {
        return htmlentities($this->message,ENT_QUOTES,"UTF-8");
    }

/*--------  Private (Internal) Functions -------- */


    function SendFormSubmission()
    {
        $this->mailer = new PHPMailer();
        $this->mailer->CharSet = 'utf-8';

        // $this->mailer->SMTPDebug = 3;                               // Enable verbose debug output

        // $this->mailer->isSMTP();                                      // Set mailer to use SMTP
        // $this->mailer->Host = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
        // $this->mailer->SMTPAuth = true;                               // Enable SMTP authentication
        // $this->mailer->Username = '5cacef86d45cf4';                 // SMTP username
        // $this->mailer->Password = '416a563d057d48';                           // SMTP password
        // $this->mailer->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        // $this->mailer->Port = 465;                                   // TCP port to connect to
        // $this->mailer->SMTPOptions = array(
        //    'ssl' => array(
        //        'verify_peer' => false,
        //        'verify_peer_name' => false,
        //        'allow_self_signed' => true
        //    )
        // );

        $status = array(
            'message' => array(
                'subject' => 'Message From Logique.co.id Website',
                'header' => 'Submission from \'contact us\' form:',
            ),
            'notification' => array(
                'subject' => 'Notification Message From Logique.co.id Website',
                'header' => 'Below are the data you\'ve sent through our website:',
            ),
        );

        foreach ($status as $key => $data) {
            if ($key == 'message') {
                foreach ($this->receipent as $key => $value) {
                    $this->mailer->addAddress($value);
                    $this->mailer->From = $this->email;
                    $this->mailer->FromName = $this->email;
                }
            } else {
                $this->mailer->addAddress($this->email, $this->name);
                $this->mailer->From = $this->receipent;
                $this->mailer->FromName = $this->receipent;
            }

            $this->mailer->Subject = $data['subject'];
            $message = $this->ComposeFormtoEmail($data['header']);

            $textMsg = trim(strip_tags(preg_replace('/<(head|title|style|script)[^>]*>.*?<\/\\1>/s','',$message)));
            $this->mailer->AltBody = @html_entity_decode($textMsg,ENT_QUOTES,"UTF-8");
            $this->mailer->MsgHTML($message);

            if(!$this->mailer->Send())
            {
                echo '<pre>Mailer Error: ' . $this->mailer->ErrorInfo;
                exit;
            }
        }

        return true;
    }

    /*
    Internal variables, that you donot want to appear in the email
    Add those variables in this array.
    */
    function IsInternalVariable($varname)
    {
        $arr_interanl_vars = array('scaptcha',
                            'submitted',
                            $this->GetSpamTrapInputName(),
                            $this->GetFormIDInputName()
                            );
        if(in_array($varname,$arr_interanl_vars))
        {
            return true;
        }
        return false;
    }

    function FormSubmissionToMail()
    {
        $ret_str='';
        foreach($_POST as $key=>$value) {
            if (!$this->IsInternalVariable($key)) {
                if (in_array($key, array('companyname', 'name', 'phone', 'email', 'message'))) {
                    $value = htmlentities($value,ENT_QUOTES,"UTF-8");
                    $value = nl2br($value);
                    $key = ucfirst($key);
                    $ret_str .= "<div class='label'>$key :</div><div class='value'>$value </div>\n";
                }
            }
        }
        return $ret_str;
    }

    function ExtraInfoToMail()
    {
        $ret_str='';

        $ip = $_SERVER['REMOTE_ADDR'];
        $ret_str = "<div class='label'>IP address of the submitter:</div><div class='value'>$ip</div>\n";

        return $ret_str;
    }

    function GetMailStyle()
    {
        $retstr = "\n<style>".
        "body,.label,.value { font-family:Arial,Verdana; } ".
        ".label {font-weight:bold; margin-top:5px; font-size:1em; color:#333;} ".
        ".value {margin-bottom:15px;font-size:0.8em;padding-left:5px;} ".
        "</style>\n";

        return $retstr;
    }
    function GetHTMLHeaderPart()
    {
         $retstr = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">'."\n".
                   '<html><head><title></title>'.
                   '<meta http-equiv=Content-Type content="text/html; charset=utf-8">';
         $retstr .= $this->GetMailStyle();
         $retstr .= '</head><body>';
         return $retstr;
    }
    function GetHTMLFooterPart()
    {
        $retstr ='</body></html>';
        return $retstr ;
    }

    function ComposeFormtoEmail($header_message)
    {
        $header = $this->GetHTMLHeaderPart();
        $formsubmission = $this->FormSubmissionToMail();
        $extra_info = $this->ExtraInfoToMail();
        $footer = $this->GetHTMLFooterPart();

        $message = $header.$header_message."<p>{$formsubmission}</p><hr/>".$extra_info.$footer;

        return $message;
    }

    function GetFromAddress()
    {
        if(!empty($this->from_address))
        {
            return $this->from_address;
        }

        $host = $_SERVER['SERVER_NAME'];

        $from ="nobody@$host";
        return $from;
    }

    function Validate()
    {
        $ret = true;
        //security validations
        if(empty($_POST[$this->GetFormIDInputName()]) ||
          $_POST[$this->GetFormIDInputName()] != $this->GetFormIDInputValue() )
        {
            //The proper error is not given intentionally
            $this->add_error("Automated submission prevention: case 1 failed");
            $ret = false;
        }

        //This is a hidden input field. Humans won't fill this field.
        if(!empty($_POST[$this->GetSpamTrapInputName()]) )
        {
            //The proper error is not given intentionally
            $this->add_error("Automated submission prevention: case 2 failed");
            $ret = false;
        }

        //email validations
        if(empty($_POST['email']))
        {
            $this->add_error("Please provide your email address");
            $ret = false;
        }
        else
        if(strlen($_POST['email'])>50)
        {
            $this->add_error("Email address is too big!");
            $ret = false;
        }
        else
        if(!$this->validate_email($_POST['email']))
        {
            $this->add_error("Please provide a valid email address");
            $ret = false;
        }
        elseif (strlen($_POST['phone'])> 16) {
            $this->add_error("Phone number can not more then 16 characters");
            $ret = false;
        }
        //message validaions
        if(strlen($_POST['message'])>2048)
        {
            $this->add_error("Message is too big!");
            $ret = false;
        }

        //captcha validaions
        if(isset($this->captcha_handler))
        {
            if(!$this->captcha_handler->Validate())
            {
                $this->add_error($this->captcha_handler->GetError());
                $ret = false;
            }
        }
        return $ret;
    }

    function StripSlashes($str)
    {
        if(get_magic_quotes_gpc())
        {
            $str = stripslashes($str);
        }
        return $str;
    }
    /*
    Sanitize() function removes any potential threat from the
    data submitted. Prevents email injections or any other hacker attempts.
    if $remove_nl is true, newline chracters are removed from the input.
    */
    function Sanitize($str,$remove_nl=true)
    {
        $str = $this->StripSlashes($str);

        if($remove_nl)
        {
            $injections = array('/(\n+)/i',
                '/(\r+)/i',
                '/(\t+)/i',
                '/(%0A+)/i',
                '/(%0D+)/i',
                '/(%08+)/i',
                '/(%09+)/i'
                );
            $str = preg_replace($injections,'',$str);
        }

        return $str;
    }

    /*Collects clean data from the $_POST array and keeps in internal variables.*/
    function CollectData()
    {
        $this->name = $this->Sanitize($_POST['name']);
        $this->email = $this->Sanitize($_POST['email']);
        $this->phone = $this->Sanitize($_POST['phone']);

        /*newline is OK in the message.*/
        $this->message = $this->StripSlashes($_POST['message']);
    }

    function add_error($error)
    {
        array_push($this->errors,$error);
    }
    function validate_email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function GetKey()
    {
        return $this->form_random_key.$_SERVER['SERVER_NAME'].$_SERVER['REMOTE_ADDR'];
    }

}

?>