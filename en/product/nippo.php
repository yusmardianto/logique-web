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
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
     <meta name="description"
         content="NIPPO, a daily report, evaluation, work time management system that provides you with quantity, quality, and contents of employees detailed works. Created by LOGIQUE Digital Indonesia to make monitoring and evaluating employee's daily works easier. Contact us to try now!">
     <meta name="keywords"
         content="assessment, performance, evaluation, self assessment, daily report, performance management, performance review, employee performance, performance evaluation, increase productivity, nippo system, logique digital indonesia">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA">
     <meta itemprop="name" content="PT. Logique Digital Indonesia">
     <meta property="og:title"
         content="Daily Report, Evaluation, Work Time Management System | NIPPO | LOGIQUE Digital Indonesia">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:url" content="https://www.logique.co.id/en/product/nippo.php">
     <meta property="og:image" content="https://www.logique.co.id/img/ogimg/product.png">
     <meta property="og:description"
         content="NIPPO, a daily report, evaluation, work time management system that provides you with quantity, quality, and contents of employees detailed works. Created by LOGIQUE Digital Indonesia to make monitoring and evaluating employee's daily works easier. Contact us to try now!">

     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <title>Daily Report, Evaluation, Work Time Management System | NIPPO | LOGIQUE Digital Indonesia</title>
     <link rel="stylesheet" href="/css/bootstrap.min.css">
     <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link rel="stylesheet" href="/css/style.css">
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
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-105878648-1', 'auto');
        ga('send', 'pageview');
   </script>
 </head>

 <body class="wrapper">
     <style>
     .logique-nav {
         left: 0;
     }

     .container__ {
         padding-top: 0;
         padding-bottom: 0;
     }
     @media only screen and (max-width: 500px) {
         .container__ {
            padding: 2.5em 0;
         }
         .row-fix-2 {
             padding: 0 2em;
         }
     }
     </style>
     <div class="nav-lp">
         <button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle"
             data-toggle="collapse" data-target="#myNavbar">
             <span class="icon-bar first"></span>
             <span class="icon-bar second"></span>
             <span class="icon-bar third"></span>
         </button>
         <div class="collapse navbar-collapse" id="myNavbar">
             <div class="backdrop-test"></div>
             <div class="logique-nav logique-nav--update">
                 <div class="margin-for-nav">
                     <div class="text-center">
                         <a href="/en/index.php">
                             <div class="img-home"></div>
                             Home
                         </a>
                     </div>
                     <div class="text-center">
                         <a href="/en/logique.php">
                             <div class="img-about"></div>
                             About Us
                         </a>
                     </div>
                     <div class="text-center">
                         <a href="/en/portfolio.php">
                             <div class="img-portfolio"></div>
                             Portfolio
                         </a>
                     </div>
                     <div class="text-center">
                         <a href="/en/services.php">
                             <div class="img-services"></div>
                             Services
                         </a>
                     </div>
                     <div class="text-center active">
                         <a href="/en/product.php">
                             <div class="img-product"></div>
                             Product
                         </a>
                     </div>
                     <div class="text-center">
                         <a href="/career/">
                             <div class="img-career"></div>
                             Career
                         </a>
                     </div>
                     <div class="text-center">
                         <a href="/en/contact.php">
                             <div class="img-contact"></div>
                             Contact Us
                         </a>
                     </div>
                     <div class="text-center">
                         <a href="https://www.logique.co.id/blog/" target="_blank" rel="noreferrer">
                             <div class="img-blog"></div>
                             Blog
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- HEADER -->
     <div class="container-fluid">
         <div class="row lang-logo--update-design">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-offset-1 col-sm-11">
                         <div class="container">
                             <ul class="list-inline">
                                 <li class="active"><a href="#">EN</a></li>
                                 <li><a href="/produk/nippo.php">ID</a></li>
                                 <li><a href="/jp/product/nippo.php">JP</a></li>
                             </ul>
                             <a href="/en/"><img src="/../img/logo.png" alt="Logo"
                                     class="img-responsive logo--update-design" /></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- END HEADER -->

     <div class="content-wrapper__">
         <div class="div-one">
             <section class="--top">
                 <div class="container__" style="padding:0; padding-top: 1em;">
                     <div class="row">
                         <div class="col-sm-12">
                             <ol class="breadcrumb breadcrumb--update-design" itemscope
                                 itemtype="http://schema.org/BreadcrumbList">
                                 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                         href="/en/"><span itemprop="name">Home</span></a>
                                     <meta itemprop="position" content="1" />
                                 </li>
                                 <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                         itemprop="item" href="/en/product.php"><span itemprop="name">&nbsp;Product</span></a>
                                     <meta itemprop="position" content="2" />
                                 </li>
                                 <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                         itemprop="item"><span itemprop="name">&nbsp;Nippo</span></a>
                                     <meta itemprop="position" content="3" />
                                 </li>
                             </ol>
                         </div>
                     </div>
                 </div>
             </section>
             <div class="container__">
                 <div class="row" style="margin-right:0;margin-left:0;">
                     <div class="col-md-12 text-center p-top-25" style=" padding-top: 15%; ">
                         <img src="img/nippo/LogoNippo.png" alt="nippo" class="fade-in logo m-logo">
                         <h1 class="SISTEM-LAPORAN-KERJA fade-in">A Daily Reporting Tool that manages man-hour cost effectiveness
                             <br>and conducts employee evaluations through daily reports.</h1>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Mask">
             <div class="container__">
                 <div class="Rectangle-2">
                     <span class="APA-ITU">What Is Nippo?</span>
                 </div>
                 <div class="col-md-11 hidden-xs hidden-sm lg-1">
                     <span class="NIPPO-SYSTEM">NIPPO SYSTEM</span>
                     <span class="layer">?</span>
                 </div>
                 <section class="hidden-xs hidden-sm">
                     <!-- For Desktop -->
                     <div class="col-md-push-3 col-md-8 col-md-pull-1">
                         <p class="Nippo-adalah-aplikas"><b>Nippo</b> is a web-based application that assists managers in
                             monitoring
                             the overall productivity of
                             their workers. This application is the perfect solution for conducting detailed <b>staff-oriented</b>
                             managerial work.</p>
                         <p class="Nippo-adalah-aplikas">
                             Through Nippo, the company can increase its knowledge of each employee’s daily work
                             routines in a comprehensive manner, so that managers will then be able to use these reports in
                             evaluating staff performance.
                         </p>
                     </div>
                 </section>
                 <section class="hidden-md hidden-lg">
                     <!-- For Mobile -->
                     <div class="col-md-12">
                         <br>
                         <span class="NIPPO-SYSTEM">NIPPO SYSTEM ?</span>
                         <p class="Nippo-adalah-aplikas"><b>Nippo</b> is a web-based application that assists managers in
                             monitoring
                             the overall productivity of
                             their workers. This application is the perfect solution for conducting detailed <b>staff-oriented</b>
                             managerial work.</p>
                     </div>
                 </section>
             </div>
         </div>

         <div class="Rectangle-3">
             <div class="container__">
                 <div class="col-lg-12 text-center" style="padding: 45px 0">
                     <span class="Kenapa-Harus-Menggun">Why Nippo?</span><br>
                     <img src="img/nippo/LogoNippo-kecil.png" alt="Nippo Logo" style="padding: 10px">
                 </div>
                 <div class="col-lg-3 col-md-6 text-center">
                     <img src="img/nippo/kenapa-1.png" alt="Why Nippo?">
                     <div class="Dapat-diakses-melalu">Accessible and User Friendly with both Desktop and Mobile Platforms</div>
                 </div>
                 <div class="col-lg-3 col-md-6 text-center">
                     <img src="img/nippo/kenapa-2.png" alt="Why Nippo?">
                     <div class="Dapat-diakses-melalu">Simple and Responsive UI <br><br></div>
                 </div>
                 <div class="col-lg-3 col-md-6 text-center">
                     <img src="img/nippo/kenapa-3.png" alt="Why Nippo?">
                     <div class="Dapat-diakses-melalu">Man-Hour cost management can be summarized for each project conducted by
                         every employee.</div>
                 </div>
                 <div class="col-lg-3 col-md-6 text-center">
                     <img src="img/nippo/kenapa-4.png" alt="Why Nippo?">
                     <div class="Dapat-diakses-melalu">Evaluation and Self-Assessment can be conducted on a daily basis.</div>
                 </div>
             </div>
         </div>

         <div class="OPSA3E0">
             <div class="container__">
                 <div class="Rectangle-2-Copy">
                     <span class="Masalah-yang-sering">Problems That Companies Often Face</span>
                 </div>
                 <section class="hidden-xs hidden-sm">
                     <!-- For Desktop -->
                     <div class="col-md-12" style=" padding-top: 7em; ">
                         <div class="col-md-6 text-right">
                             <div class="col-md-10"><span class="Evaluasi-kinerja-sel">A lack of objective and fair employee
                                     evaluation.
                                     To conduct this, numerically based assessments are needed.</span></div>
                             <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png"
                                     alt="Company Problems" width="77px" height="77px"></div>
                         </div>
                         <div class="col-md-6 text-left">
                             <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png"
                                     alt="Company Problems" width="77px" height="77px"></div>
                             <div class="col-md-10"><span class="Evaluasi-kinerja-sel">Managers are unable to constantly regulate
                                     the
                                     activities of those in their employ. Therefore, the quantity and quality of their work can
                                     remain
                                     surreptitiously inefficient for long periods of
                                     time.</span></div>
                         </div>
                     </div>
                     <div class="col-md-12" style=" padding-top: 2em; ">
                         <div class="col-md-6 text-right">
                             <div class="col-md-10"><span class="Evaluasi-kinerja-sel">Where internal communication is lacking,
                                     employees themselves must find ways to evaluate
                                     each other so that HRD and Managers can advance their positions.</span></div>
                             <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png"
                                     alt="Company Problems" width="77px" height="77px"></div>
                         </div>
                         <div class="col-md-6 text-left">
                             <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png"
                                     alt="Company Problems" width="77px" height="77px"></div>
                             <div class="col-md-10"><span class="Evaluasi-kinerja-sel">Tasks are done in an inefficient manner.
                                     Managers
                                     will be unable to figure out who is spending
                                     time on them.</span></div>
                         </div>
                     </div>
                 </section>
                 <section class="hidden-md hidden-lg">
                     <!-- For Mobile -->
                     <div class="col-md-12" style=" padding-top: 2em; ">
                         <div class="col-md-6">
                             <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" alt="Company Problems"
                                     style="padding: 10px;height: 50px"></div>
                             <div class="col-xs-9"><span class="Evaluasi-kinerja-sel">A lack of objective and fair employee
                                     evaluation.
                                     To conduct this, numerically based assessments are needed.</span></div>
                         </div>
                         <div class="col-md-6">
                             <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" alt="Company Problems"
                                     style="padding: 10px;height: 50px"></div>
                             <div class="col-xs-9"><span class="Evaluasi-kinerja-sel">Managers are unable to constantly regulate
                                     the
                                     activities of those in their employ. Therefore, the quantity and quality of their work can
                                     remain
                                     surreptitiously inefficient for long periods of
                                     time.</span></div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <div class="col-md-6">
                             <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" alt="Company Problems"
                                     style="padding: 10px;height: 50px"></div>
                             <div class="col-xs-9"><span class="Evaluasi-kinerja-sel">Where internal communication is lacking,
                                     employees
                                     themselves must find ways to evaluate
                                     each other so that HRD and Managers can advance their positions.</span></div>
                         </div>
                         <div class="col-md-6">
                             <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" alt="Company Problems"
                                     style="padding: 10px;height: 50px"></div>
                             <div class="col-xs-9"><span class="Evaluasi-kinerja-sel">Tasks are done in an inefficient manner.
                                     Managers
                                     will be unable to figure out who is spending
                                     time on them.</span></div>
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
                     <div class="col-lg-push-2 col-lg-10 div-fitur">
                         <span class="NIPPO-SYSTEM-Copy">NIPPO SYSTEM</span>
                     </div>
                 </div>
             </div>
             <div class="row row-fix-3">
                 <div class="col-md-offset-2 col-md-8 text-center">
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-1.png" alt="Features of Nippo">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">Employee Management</p>
                         <p class="NIPPO-system-menyedi">Create and organize employee information and data, associations with
                             supervisors and many more.</p>
                     </div>
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-4.png" alt="Features of Nippo">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan" style="font-size: 17px">Project/Task Management</p>
                         <p class="NIPPO-system-menyedi">Register and manage project information, task types and the specific
                             details
                             of each task.</p>
                     </div>
                 </div>
             </div>
             <div class="row row-fix-3">
                 <div class="col-md-offset-2 col-md-8 text-center">
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-2.png" alt="Features of Nippo">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">Tag People</p>
                         <p class="NIPPO-system-menyedi">Through tagging the colleagues each employee has collaborated with on
                             every
                             individual task,
                             managers are able to check if there is a mismatch, and take the appropriate steps to confirm
                             the duties of the individual in question.</p>
                     </div>
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-3.png" alt="Features of Nippo">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">Man-hour Cost Management</p>
                         <p class="NIPPO-system-menyedi">The total number of working hours can be summarized for each task, and is
                             supported with a calculation of the number of hours spent on each task.</p>
                     </div>
                 </div>
             </div>
             <div class="row row-fix-3">
                 <div class="col-md-offset-2 col-md-8 text-center">
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-5.png" alt="Features of Nippo">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">Personnel Assessment</p>
                         <p class="NIPPO-system-menyedi">Manage your employee’s self-assessment evaluation score. It is also
                             possible
                             to compile and analyze monthly and annual evaluations.</p>
                     </div>
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-6.png" alt="Features of Nippo">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">Engage Each Other</p>
                         <p class="NIPPO-system-menyedi">Leave a like and comment on people’s work. You can also give a thumbs-up
                             in
                             regards to each
                             task/project performance, so as to motivate one another.</p>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Mask-Copy">
             <div class="container__">
                 <div class="row" style=" margin-right: 0; ">
                     <div class="col-md-4 col-xs-12 text-left p-t-9">
                         <span class="Keuntungan-Perusahaa">Benefits of<br>
                             <span class="text-style-1">Using Nippo</span>
                             <div class="Rectangle-6"></div>
                         </span>
                     </div>
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                             <img src="img/nippo/keuntungan-1.png" alt="San Francisco">
                             <div class="Rectangle">Through this format, managers can easily keep tabs on and track the work
                                 content
                                 done by each employee.</div>
                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                             <img src="img/nippo/keuntungan-2.png" alt="San Francisco">
                             <div class="Rectangle">Through Nippo, assessment is done in a <b>fair</b> and <b>practical
                                     manner</b>,
                                 and
                                 can be conducted in this way on a daily basis by mangers.</div>
                         </div>
                     </div>
                 </div>
                 <div class="row m-top-0" style=" margin-right: 0; margin-top: 4em">
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                             <img src="img/nippo/keuntungan-3.png" alt="San Francisco">
                             <div class="Rectangle">Since both <b>self assessment</b> and supervisor <b>evaluations</b> are
                                 managed
                                 through the interface, HRD is able to bring up any problems in a clear way to staff.</div>
                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                             <img src="img/nippo/keuntungan-4.png" alt="San Francisco">
                             <div class="Rectangle">Internal communication is revitalized through a more interactive interface
                                 scheme.
                                 The ability to leave likes and comments will create a sense of comradery and recognition between
                                 team
                                 members.</div>
                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                             <img src="img/nippo/keuntungan-5.png" alt="San Francisco">
                             <div class="Rectangle">Remote workers get a chance to assess their skills based on the same criteria
                                 as
                                 regular workers.</div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Rectangle-7">
             <div class="container__">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="Rectangle-2-Copy-4">
                             <span class="Pertanyaan-Yang-Seri">Frequently Asked Questions</span>
                         </div>
                         <img src="img/nippo/question.png" alt="Frequently Asked Questions" class="question">
                     </div>
                 </div>

                 <div class="row row-fix-2">
                     <div class="col-md-offset-1 col-md-10">
                         <ol>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>How does NIPPO work?</h3>
                                 <p class="Nippo-merupakan-sist">Nippo provides a daily reporting mechanism which calculates the
                                     man-hour
                                     cost of each
                                     employee so that managers and HRD can have a better grasp of the daily performances of each
                                     staff member.</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>How can Nippo help managers and HRD</h3>
                                 <p class="Nippo-merupakan-sist">With Nippo’s features, managers and HRD can accurately monitor
                                     the
                                     productivity of each
                                     employee on a day-by-day basis, therefore allowing them to immediately evaluate their work
                                     and bring to light any wasteful or unnecessary tasks within each of their routines.</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>I might require clearer guidelines in regards to the application. Will this be possible?</h3>
                                 <p class="Nippo-merupakan-sist">Don’t worry, we provide user guidelines along with the
                                     application.
                                     If
                                     you are still uncertain about some features, then you can contact us directly.</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>Our company is interested in using the Nippo System. How do we proceed?</h3>
                                 <p class="Nippo-merupakan-sist">Thank you for using our services. You can inform us directly
                                     through
                                     one
                                     of the contacts we have provided.</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>What’s the difference in interface options available to staff and managers?</h3>
                                 <p class="Nippo-merupakan-sist">Managers are able to evaluate each employee based on their
                                     overall
                                     working performance in
                                     the form of a score. Staff, on the other hand, can only input their daily report.</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>Is Nippo compatible with any browser?</h3>
                                 <p class="Nippo-merupakan-sist">Yes, Nippo can be accessed through any browser, including mobile
                                     device
                                     based browsers. If
                                     you have a problem and require assistance, please do not hesitate to contact us.</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>Is Nippo only compatible with certain types of companies?</h3>
                                 <p class="Nippo-merupakan-sist">No. Nippo is designed to meet the needs of any type of company.
                                 </p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>Is Nippo accessible on mobile phones?</h3>
                                 <p class="Nippo-merupakan-sist">Yes, Nippo can function on mobile platforms.</p>
                             </li>
                         </ol>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Rectangle-8 text-center">
             <div class="container__">
                 <div class="row" style=" margin: 0;padding: 4em 0 2em 0">
                     <div class="col-lg-4">
                         <p class="KONTAK-KAMI p-l-25">CONTACT</p>
                     </div>
                     <div class="col-lg-7">
                         <?php if(isset($msg))
            {
            echo $msg;
            }
            ?>
                         <form role="form" name='myForm' onsubmit='return validateForm()'
                             action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                             <input type='hidden' name='submitted' id='submitted' value='1' />
                             <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>'
                                 value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                             <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                             <div class="row">
                                 <div class="col-sm-6 form-group">
                                     <input type="text" class="form-control Rectangle-9" name="name" aria-label="Name"
                                         placeholder="Name" value='<?php echo $formproc->SafeDisplay('name') ?>'>
                                 </div>
                                 <div class="col-sm-6 form-group">
                                     <input type="text" class="form-control Rectangle-9" name="company" aria-label="Company"
                                         placeholder="Company" value='<?php echo $formproc->SafeDisplay('company') ?>'>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-6 form-group">
                                     <input type="email" class="form-control Rectangle-9" name="email" aria-label="Email"
                                         placeholder="Email" value='<?php echo $formproc->SafeDisplay('email') ?>'>
                                 </div>
                                 <div class="col-sm-6 form-group">
                                     <input type="number" class="form-control Rectangle-9" name="phone" aria-label="Phone"
                                         placeholder="Telp" value='<?php echo $formproc->SafeDisplay('phone') ?>'>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12 form-group">
                                     <textarea class="form-control Rectangle-9" name="message" aria-label="Message" rows="8"
                                         placeholder="Message"
                                         style="width: 100%;padding:  1em;"><?php echo $formproc->SafeDisplay('message') ?></textarea>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-6 text-left">
                                     <div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
                                     <div class="clearfix"></div>
                                 </div>
                                 <div class="col-md-6 text-right">
                                     <button type="submit" href="#" class="Rectangle-10 btn-coba"><span
                                             class="KIRIM">SUBMIT</span></button>
                                 </div>
                             </div>
                         </form> <!-- end form contact -->
                     </div>
                 </div>
             </div>
         </div>

         <div class="Rectangle-11" style="height:auto!important;padding:15px 0">
             <div class="container__">
                 <div class="row" style="margin: 0">
                     <div class="col-md-12 text-center">
                         <div class="col-md-12">
                             <img src="img/nippo/logo-nippo-footer.png" alt="Nippo Logo" style="padding-top: 49.2px">
                             <p class="Nippo-adalah-aplikas2">Nippo is a web-based system that can manage, monitor and evaluate
                                 each
                                 employee’s
                                 productivity through the use of daily reports. Nippo provides a systemized daily reporting
                                 system that can be customized to fit individual employee’s tasks and work assessment.</p>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-12 text-center">
                         <br />
                         <p style="color:#9b9b9b;font-family: Avenir;font-size: 18px;">Other Products:</p>
                         <p>
                             <a target="_blank" href="/en/product/sugoi-saiyo.php"
                                 style="color:#fff;font-family: Avenir;font-size: 18px;">SUGOI-SAIYO</a> |
                             <a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer"
                                 style="color:#fff;font-family: Avenir;font-size: 18px;">DOKODEMO KERJA</a></p>
                     </div>
                 </div>
                 <div class="row text-center" style="margin: 0">
                     <div class="col-md-4" style="margin-top: 3em">
                         <img src="img/nippo/placeholder.png" alt="Location">
                         <p class="Nippo-adalah-aplikas2">Ad Premier Building 19th Floor Jalan Tb. Simatupang No. 5 Ragunan, Ps.
                             Minggu, Jakarta Selatan, Indonesia 12550</p>
                     </div>
                     <div class="col-md-4" style="margin-top: 3em">
                         <img src="img/nippo/email.png" alt="Email">
                         <p class="Nippo-adalah-aplikas2">info@logique.co.id</p>
                     </div>
                     <div class="col-md-4" style="margin-top: 3em">
                         <img src="img/nippo/phone-call.png" alt="Phone">
                         <p class="Nippo-adalah-aplikas2">+62(21) 2270 8935 / 36</p>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Rectangle-11-Copy">
             <div class="container__" style="padding: 0">
                 <div class="row text-center" style="margin: 0;padding-top: 1em">
                     <div class="col-md-12">
                         <a href="https://www.logique.co.id/en/" target="_blank" rel="noreferrer" aria-label="Logo Logique"><img
                                 src="img/nippo/logo-Logique.png" alt="Logo Logique" class="FA-Logique"></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <?php include '../footer.php'; ?>

     <script src="/js/bootstrap.min.js"></script>
     <script src='https://www.google.com/recaptcha/api.js'></script>

 </body>

 </html>