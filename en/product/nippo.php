 <?php 
require_once("form/fgcontact_nippo.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient(['info@logique.co.id']); //<<---Put your email address here

//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');

//$formproc->AddFileUploadField('photo','jpg,jpeg,pdf,doc,docx',40960);

if(isset($_POST['submitted']))
{
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $secret = '6LcuHywUAAAAAEfJ-sZem8CzGVYIUMcxoT0jRhtW';
        // $secret = '6Lf3pA8UAAAAAEECs5-RC010LQ3ehBt76aKv8Rxb';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        // print_r($verifyResponse); exit;
        $responseData = json_decode($verifyResponse);
        if ($responseData->success) {
            if ($formproc->ProcessForm()) {
                $msg = "<div class='alert alert-success' style='font-size: 18px;margin-top: 10px;' id='msg' role='alert'>Thank you for sending us inquiry!</div>";
            }
        } else {
            $msg = "<div class='alert alert-warning' style='font-size: 18px;margin-top: 10px;' id='msg' role='alert'>reCAPTCHA verification failed, please try again.</div>";
        }
    } else {
        $msg = "<div class='alert alert-warning' style='font-size: 18px;margin-top: 10px;' id='msg' role='alert'>Please click the reCAPTCHA box.</div>";
   }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="description" content="Do you have trouble in calculating man-hours cost or monitoring employees’ performance? Nippo is here to help you. Nippo is a web-based system that can manage, monitor, and evaluate employees’ productivity through daily reports. Increase your company’s productivity now!">
  <meta name="keywords" content="assessment, performance, evaluation, self assessment, daily report, performance management, performance review, employee performance, performance evaluation, increase productivity, nippo system, logique digital indonesia">
  <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <title>Daily Report Tool | Nippo</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style_nippo.css">
  <style type="text/css">
  @font-face {
    font-family: HelveticaThin;
    src: url(font/HelveticaThin.ttf);
  }
  @font-face {
    font-family: HelveticaBold;
    src: url(font/helveticabold.ttf);
  }
  @font-face {
    font-family: HelveticaNeue;
    src: url(font/helvetica.ttf);
  }
  @font-face {
    font-family: Allerta;
    src: url(font/allerta_medium.ttf);
  }
  @font-face {
    font-family: Avenir;
    src: url(font/avenirbook.ttf);
  }
  </style>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-105878648-1', 'auto');
  ga('send', 'pageview');
  </script>
</head>
<body>

<div class="div-one">
  <div class="container">
    <div class="language-btn">
      <ul class="list-inline">
        <li class="active"><a href="/../en/product/nippo.php">EN</a></li>
        <li><a href="/produk/nippo.php">ID</a></li>
        <li><a href="/../jp/product/nippo.php">JP</a></li>
      </ul>
    </div>
    <div class="row" style="margin-right:0;margin-left:0;">
      <div class="col-md-12 text-center p-top-50" style=" padding-top: 18%; ">
        <img src="img/nippo/LogoNippo.png" alt="nippo" class="fade-in logo m-logo">
        <p class="SISTEM-LAPORAN-KERJA fade-in">Daily report tool that can perform man-hour cost management 
          <br>and employee evaluation through daily reports</p>
      </div>
    </div>
  </div>
</div>

<div class="Mask">
  <div class="container">
  <div class="Rectangle-2">
    <span class="APA-ITU">What Is Nippo?</span>
  </div>
  <div class="col-md-11 hidden-xs hidden-sm lg-1">
      <span class="NIPPO-SYSTEM">NIPPO SYSTEM</span> 
      <span class="layer">?</span>
  </div>
  <section class="hidden-xs hidden-sm">  <!-- For Desktop -->
  <div class="col-md-push-3 col-md-8 col-md-pull-1">
    <p class="Nippo-adalah-aplikas"><b>Nippo</b> is a web-based system that can manage, monitor, and evaluate employees’ productivity through daily reports. Nippo provides systemized daily reports that can be customized to show tasks, projects, cost management, and employees’ <b>assessment.</b><br><br>
    With Nippo, managers and HRD can grasp the work content, determine quantity and quality of staff, and promote communication among staff. Therefore, <b>evaluation</b> can be done fairly.</p>
  </div>
  </section>
  <section class="hidden-md hidden-lg">  <!-- For Mobile -->
  <div class="col-md-12">
    <br>
    <span class="NIPPO-SYSTEM">NIPPO SYSTEM ?</span>
    <p class="Nippo-adalah-aplikas"><b>Nippo</b> adalah aplikasi berbasis web yang dapat membantu para manajer dalam memantau produktivitas dan manajemen kerja stafnya. Aplikasi ini merupakan solusi tepat bagi perusahaan untuk mengetahui <b>manajemen kerja</b> karyawan secara detail.<br><br>
    Dengan Nippo, perusahaan dapat mengetahui laporan harian kerja karyawan secara komprehensif sehingga manajer dapat menggunakannya sebagai bahan pertimbangan untuk melakukan <b>evaluasi kinerja</b> para karyawan.</p>
  </div>
  </section>
  </div>
</div>

<div class="Rectangle-3">
  <div class="container">
  <div class="col-md-12 text-center" style="padding: 45px 0">
  <span class="Kenapa-Harus-Menggun">Why Nippo?</span><br>
  <img src="img/nippo/LogoNippo-kecil.png" style="padding: 10px">
  </div>
  <div class="col-md-3 text-center">
    <img src="img/nippo/kenapa-1.png" width="204px" height="206px">
    <div class="Dapat-diakses-melalu">Accessible and easy input through desktop and mobile</div>
  </div>
  <div class="col-md-3 text-center">
    <img src="img/nippo/kenapa-2.png" width="204px" height="206px">
    <div class="Dapat-diakses-melalu">Very simple and responsive UI</div>
  </div>
  <div class="col-md-3 text-center">
    <img src="img/nippo/kenapa-3.png" width="204px" height="206px">
    <div class="Dapat-diakses-melalu">Man-hour cost management can be summed up and is possible for each project, task, and person</div>
  </div>
  <div class="col-md-3 text-center">
    <img src="img/nippo/kenapa-4.png" width="204px" height="206px">
    <div class="Dapat-diakses-melalu">Evaluation and self assessment can be done every day</div>
  </div>
  </div>
</div>

<div class="OPSA3E0">
  <div class="container">
  <div class="Rectangle-2-Copy">
    <span class="Masalah-yang-sering">Problems That Companies Often Face</span>
  </div>
  <section class="hidden-xs hidden-sm">  <!-- For Desktop -->
  <div class="col-md-12" style=" padding-top: 7em; ">
    <div class="col-md-6 text-right">
      <div class="col-md-10"><span class="Evaluasi-kinerja-sel">Appropriate and fair personnel evaluation hasn’t been done. Managers and HRD need objective numerical values to conduct this.</span></div>
      <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png" width="77px" height="77px"></div>
    </div>
    <div class="col-md-6 text-left">
      <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png" width="77px" height="77px"></div>
      <div class="col-md-10"><span class="Evaluasi-kinerja-sel">Managers and HRD can’t track what the staff is doing every day. Their work content, quantity, and quality are surreptitiously insufficient.</span></div>
    </div>
  </div>
  <div class="col-md-12" style=" padding-top: 2em; ">
    <div class="col-md-6 text-right">
      <div class="col-md-10"><span class="Evaluasi-kinerja-sel">Internal communication is in short supply, whereas employees themselves need to evaluate each other so managers and HRD can raise them.</span></div>
      <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png" width="77px" height="77px"></div>
    </div>
    <div class="col-md-6 text-left">
      <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png" width="77px" height="77px"></div>
      <div class="col-md-10"><span class="Evaluasi-kinerja-sel">Task/projects are done inefficiently. Managers can’t even figure out who is spending time on them.</span></div>
    </div>
  </div>
  </section>
  <section class="hidden-md hidden-lg">  <!-- For Mobile -->
  <div class="col-md-12" style=" padding-top: 2em; ">
    <div class="col-md-6">
      <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" style="padding: 10px;height: 50px"></div>
      <div class="col-xs-9"><span class="Evaluasi-kinerja-sel">Appropriate and fair personnel evaluation hasn’t been done. Managers and HRD need objective numerical values to conduct this.</span></div>
    </div>
    <div class="col-md-6">
      <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" style="padding: 10px;height: 50px"></div>
      <div class="col-xs-9"><span class="Evaluasi-kinerja-sel">Managers and HRD can’t track what the staff is doing every day. Their work content, quantity, and quality are surreptitiously insufficient.</span></div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="col-md-6">
      <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" style="padding: 10px;height: 50px"></div>
      <div class="col-xs-9"><span class="Evaluasi-kinerja-sel">Internal communication is in short supply, whereas employees themselves need to evaluate each other so managers and HRD can raise them.</span></div>
    </div>
    <div class="col-md-6">
      <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" style="padding: 10px;height: 50px"></div>
      <div class="col-xs-9"><span class="Evaluasi-kinerja-sel">Task/projects are done inefficiently. Managers can’t even figure out who is spending time on them.</span></div>
    </div>
    <div class="clearfix"></div>
  </div>
  <br><br>
  </section>
  </div>
</div>

<div class="laptop">
  <div class="Rectangle-2-Copy-2">
    <span class="Fitur">Features of Nippo</span>
  </div>
  <div class="row row-fix">
    <div class="col-md-offset-2 col-md-8 text-center">
      <div class="col-md-push-2 col-md-10 div-fitur">
        <span class="NIPPO-SYSTEM-Copy">NIPPO SYSTEM</span>
      </div>
    </div>
  </div>
  <div class="row row-fix-3">
    <div class="col-md-offset-2 col-md-8 text-center">
      <div class="col-md-2 text-center">
          <img src="img/nippo/fitur-1.png">
      </div>
      <div class="col-md-4 text-left" style="padding:0;">
          <p class="Basis-Data-Karyawan">Employee Management</p>
          <p class="NIPPO-system-menyedi">Create and manage employee and organization information, associations with supervisors, and many more.</p>
      </div>
      <div class="col-md-2 text-center">
          <img src="img/nippo/fitur-4.png">
      </div>
      <div class="col-md-4 text-left" style="padding:0;">
          <p class="Basis-Data-Karyawan" style="font-size: 17px">Project/Task Management</p>
          <p class="NIPPO-system-menyedi">Register and manage project information, task types, and details of the tasks.</p>
      </div>
    </div>
  </div>
  <div class="row row-fix-3">
    <div class="col-md-offset-2 col-md-8 text-center">
      <div class="col-md-2 text-center">
          <img src="img/nippo/fitur-2.png">
      </div>
      <div class="col-md-4 text-left" style="padding:0;">
          <p class="Basis-Data-Karyawan">Tag People</p>
          <p class="NIPPO-system-menyedi">By tagging colleagues who employees collaborated with, managers can check the daily report mutually. If there’s something different, the tagged person can confirm.</p>
      </div>
      <div class="col-md-2 text-center">
          <img src="img/nippo/fitur-3.png">
      </div>
      <div class="col-md-4 text-left" style="padding:0;">
          <p class="Basis-Data-Karyawan">Man-hour Cost Management</p>
          <p class="NIPPO-system-menyedi">Work hours can be calculated for each project/task. The report is provided with calculations of each hour spent. Analyze who works more productive than expected and has the best performance.</p>
      </div>
    </div>
  </div>
  <div class="row row-fix-3">
    <div class="col-md-offset-2 col-md-8 text-center">
      <div class="col-md-2 text-center">
          <img src="img/nippo/fitur-5.png">
      </div>
      <div class="col-md-4 text-left" style="padding:0;">
          <p class="Basis-Data-Karyawan">Personnel Assessment</p>
          <p class="NIPPO-system-menyedi">Manage self assessment from other people’s evaluation. It is also possible to compile monthly and annual evaluations.</p>
      </div>
      <div class="col-md-2 text-center">
          <img src="img/nippo/fitur-6.png">
      </div>
      <div class="col-md-4 text-left" style="padding:0;">
          <p class="Basis-Data-Karyawan">Engage Each Other</p>
          <p class="NIPPO-system-menyedi">Leave a like and comment on people’s reports. Give a thumb up on each task/project performance. Motivate each other.</p>
      </div>
    </div>
  </div>
</div>

<div class="Mask-Copy">
  <div class="container">
  <div class="row" style=" margin-right: 0; ">
    <div class="col-md-4 text-left p-t-9">
        <span class="Keuntungan-Perusahaa">Benefits of<br>
            <span class="text-style-1">Using Nippo</span>
            <div class="Rectangle-6"></div>
        </span>
    </div>
    <div class="col-md-4 text-center">
        <div class="OH1E290">
          <img src="img/nippo/keuntungan-1.png" alt="San Francisco" width="100%" height="300">
          <div class="Rectangle">Managers can easily grasp work contents done by employees.</div>
        </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="OH1E290">
        <img src="img/nippo/keuntungan-2.png" alt="San Francisco" width="100%" height="300">
        <div class="Rectangle"><b>Assessment</b> becomes practical and fair among employees. It can be done daily by managers.</div>
      </div>
    </div>
  </div>
  <div class="row m-top-0" style=" margin-right: 0; margin-top: 4em">
    <div class="col-md-4 text-center">
        <div class="OH1E290">
          <img src="img/nippo/keuntungan-3.png" alt="San Francisco" width="100%" height="300">
          <div class="Rectangle">Since both <b>self assessment</b> and supervisor’s <b>assessment</b> are managed, HRD can give a clear explanation of evaluation to the staff.</div>
        </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="OH1E290">
        <img src="img/nippo/keuntungan-4.png" alt="San Francisco" width="100%" height="300">
        <div class="Rectangle">Internal communication will be revitalized. Likes or comments on the report will create a sense of being recognized and evaluated by others.</div>
      </div>
    </div>
    <div class="col-md-4 text-center">
        <div class="OH1E290">
          <img src="img/nippo/keuntungan-5.png" alt="San Francisco" width="100%" height="300">
          <div class="Rectangle">Remote workers get the chance of improvement and assessment just the same as regular employees.</div>
        </div>
    </div>
  </div>
  </div>
</div>

<div class="Rectangle-7">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="Rectangle-2-Copy-4">
        <span class="Pertanyaan-Yang-Seri">Frequently Asked Questions</span>
      </div>
      <img src="img/nippo/question.png" class="question">
    </div>
  </div>

  <div class="row row-fix-2">
    <div class="col-md-offset-1 col-md-10">
    <ol>
      <li class="-Bagaimana-cara-ke">How does Nippo work?</li>
      <p class="Nippo-merupakan-sist">Nippo provides a daily report master and calculates man-hour cost of each employee so managers and HRD can acknowledge the daily performance of employees.</p>
      <li class="-Bagaimana-cara-ke">How can Nippo help managers and HRD?</li>
      <p class="Nippo-merupakan-sist">With Nippo’s features, managers and HRD can monitor how productive each employee is for the day. Therefore, they can immediately evaluate them and eliminate wasteful works.</p>
      <li class="-Bagaimana-cara-ke">I might need a clearer guide in using Nippo. Will I get it?</li>
      <p class="Nippo-merupakan-sist">Don’t worry. We provide usage guidelines for you. If you still find it difficult, you can contact us directly.</p>
      <li class="-Bagaimana-cara-ke">We are interested in using Nippo for our company. How can we get it?</li>
      <p class="Nippo-merupakan-sist">You can contact us directly through one of the contacts we provide. We are ready to serve you.</p>
      <li class="-Bagaimana-cara-ke">What’s the different between managing page for staff and for managers?</li>
      <p class="Nippo-merupakan-sist">Managers page has an evaluation function so they can give evaluation scores to the staff instantly. Staff page only has a daily report function.</p>
      <li class="-Bagaimana-cara-ke">Is Nippo accessible to any browser?</li>
      <p class="Nippo-merupakan-sist">Yes, Nippo can be accessed by any browser, including by browsers on mobile devices. If you have a problem and need assistance, please do not hesitate to contact us.</p>
      <li class="-Bagaimana-cara-ke">Is Nippo only for certain types of companies?</li>
      <p class="Nippo-merupakan-sist">No. Nippo is designed to meet the needs of any type of company.</p>
      <li class="-Bagaimana-cara-ke">Is Nippo accessible on mobile phones?</li>
      <p class="Nippo-merupakan-sist">Yes, Nippo works well on mobile platforms.</p>
      <br>
    </ol>
    </div>
  </div>
  </div>
</div>

<div class="Rectangle-8 text-center">
  <div class="container">
  <div class="row" style=" margin: 0;padding: 4em 0 2em 0">
    <div class="col-md-4">
      <p class="KONTAK-KAMI p-l-25">CONTACT</p>
    </div>
    <div class="col-md-7">
      <?php if(isset($msg))
        {
        echo $msg;
        } 
        ?>
      <form role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
      <input type='hidden' name='submitted' id='submitted' value='1'/>
      <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
      <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
      <div class="row">
          <div class="col-sm-6 form-group">
            <input type="text" class="form-control Rectangle-9" name="name" placeholder="Name" value='<?php echo $formproc->SafeDisplay('name') ?>' >
          </div>
          <div class="col-sm-6 form-group">
            <input type="text" class="form-control Rectangle-9" name="company" placeholder="Company" value='<?php echo $formproc->SafeDisplay('company') ?>' >
          </div>
      </div>
      <div class="row">
          <div class="col-sm-6 form-group">
            <input type="email" class="form-control Rectangle-9" name="email" placeholder="Email" value='<?php echo $formproc->SafeDisplay('email') ?>'>
          </div>
          <div class="col-sm-6 form-group">
            <input type="number" class="form-control Rectangle-9" name="phone" placeholder="Telp" value='<?php echo $formproc->SafeDisplay('phone') ?>'>
          </div>
      </div>
      <div class="row">
          <div class="col-sm-12 form-group">
            <textarea class="form-control Rectangle-9" name="message" rows="8" placeholder="Message" style="width: 100%;padding:  1em;"><?php echo $formproc->SafeDisplay('message') ?></textarea>
          </div>
      </div>

      <div class="row">
          <div class="col-md-6 text-left">
              <div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
              <div class="clearfix"></div>
          </div>
          <div class="col-md-6 text-right">
            <button type="submit" href="#" class="Rectangle-10 btn-coba"><span class="KIRIM">SUBMIT</span></button>
          </div>
      </div>
      </form> <!-- end form contact -->
    </div>
  </div>
  </div>
</div>

<div class="Rectangle-11">
  <div class="container">
  <div class="row" style="margin: 0">
    <div class="col-md-12 text-center">
      <div class="col-md-12">
        <img src="img/nippo/logo-nippo-footer.png" style="padding-top: 49.2px">
        <p class="Nippo-adalah-aplikas2">Nippo is a web-based system that can manage, monitor, and evaluate employees’ productivity through daily reports. Nippo provides systemized daily reports that can be customized to show tasks, projects, cost management, and employees’ assessment.</p>
      </div>
    </div>
  </div>
  <div class="row text-center" style="margin: 0">
    <div class="col-md-4" style="margin-top: 3em">
      <img src="img/nippo/placeholder.png">
      <p class="Nippo-adalah-aplikas2">Ad Premier Building 19th Floor Jalan Tb. Simatupang No. 5 Ragunan, Ps. Minggu, Jakarta Selatan, Indonesia 12550</p>
    </div>
    <div class="col-md-4" style="margin-top: 3em">
      <img src="img/nippo/email.png">
      <p class="Nippo-adalah-aplikas2">info@logique.co.id</p>
      <p>Others Product :</p>
      <p><a target="_blank" href="/en/product/sugoi-saiyo.php">SUGOI-SAIYO</a> | <a target="_blank" href="/en/product/dokodemo-kerja.php">DOKODEMO KERJA</a></p>
    </div>
    <div class="col-md-4" style="margin-top: 3em">
      <img src="img/nippo/phone-call.png">
      <p class="Nippo-adalah-aplikas2">+62(21) 2270 8935 / 36</p>
    </div>
  </div>
  </div>
</div>

<div class="Rectangle-11-Copy">
  <div class="container">
  <div class="row text-center" style="margin: 0;padding-top: 1em">
    <div class="col-md-12">
      <img src="img/nippo/logo-Logique.png" class="FA-Logique">
    </div>
  </div>
  </div>
</div>

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

</body>
</html>
