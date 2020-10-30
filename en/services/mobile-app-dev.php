 <?php
require_once("assets/form/fgcontact_mobileapps.php");

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
         content="LOGIQUE is a mobile app developer in Jakarta, providing Mobile App development & design services, for Android, iOS or Hybrid Mobile Apps.">
     <meta name="keywords"
         content="Android Application Development, iOS Application Development, Mobile Application development, Mobile app design, Andriod Application Development">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
     <meta property="og:title"
         content="LOGIQUE | Mobile App Developer & Design For Android, iOS or Hybrid">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
     <meta property="og:description"
         content="LOGIQUE is a mobile app developer in Jakarta, providing Mobile App development & design services, for Android, iOS or Hybrid Mobile Apps.">
     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <title>LOGIQUE | Mobile App Developer & Design For Android, iOS or Hybrid</title>
     <link href="/css/bootstrap.min.css" rel="stylesheet">
     <link href="../../css/style.css" rel="stylesheet">
     <link href="assets/css/style-mobileapps.css" rel="stylesheet">
     <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" />
     <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Rokkitt:300,400,600,700" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
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

 <body class="wrapper wrapper--update-design mobileapp-page"  style="overflow-y:auto">
     <style>
     .container__ {
         padding-top: 0;
         padding-bottom: 0;
     }

     .logique-nav {
         left: 0;
     }

     .title {
         background-color: transparent;
         padding: 0;
     }

     .copyright {
         background-color: transparent;
         text-align: left;
         border: none;
         color: inherit;
     }

     footer {
         padding: 30px 0 10px;
     }
     </style>
     <!-- NAVIGATION -->
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
                 <div class="text-center active">
                     <a href="/en/services.php">
                         <div class="img-services"></div>
                         Services
                     </a>
                 </div>
                 <div class="text-center">
                     <a href="/en/product.php">
                         <div class="img-product"></div>
                         Product
                     </a>
                 </div>
                 <div class="text-center">
                     <a href="/en/career/">
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
     <!-- NAVIGATION -->

     <!-- HEADER -->
     <div class="container-fluid">
         <div class="  lang-logo--update-design">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-offset-1 col-sm-11">
                         <div class="container">
                             <ul class="list-inline">
                                 <li class="active"><a href="">EN</a></li>
                                 <li><a href="/layanan/pembuatan-aplikasi-mobile.php">ID</a></li>
                                 <li><a href="/jp/services/mobile-app-dev.php">JP</a></li>
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
         <header>
             <section class="--top">
                 <div class="container__" style="padding:0">
                     <div class="row">
                         <div class="col-sm-12">
                             <ol class="breadcrumb breadcrumb--update-design" itemscope
                                 itemtype="http://schema.org/BreadcrumbList">
                                 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                         href="/en/"><span itemprop="name">Home</span></a>
                                     <meta itemprop="position" content="1" />
                                 </li>
                                 <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                         itemprop="item" href="/en/services.php"><span itemprop="name">&nbsp;Services</span></a>
                                     <meta itemprop="position" content="2" />
                                 </li>
                                 <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                         itemprop="item"><span itemprop="name">&nbsp;Mobile Application Development</span></a>
                                     <meta itemprop="position" content="3" />
                                 </li>
                             </ol>
                         </div>
                     </div>
                 </div>
             </section>
             <div class="container__">
                 <div class="row">
                     <div class="col-md-7">
                         <br /><br /><br />
                         <h1 style="font-size: 30px">TRUST THE DEVELOPMENT OF YOUR <span class="yellow">MOBILE APPLICATION
                                 (ANDROID |
                                 iOS | HYBRID)</span> WITH <span class="yellow">LOGIQUE</span></h1>
                         <p>
                         Our services aim to provide efficient solutions that further promote your Mobile App for iOS & Android Smartphone/Tablet, while keeping to the end goal of raising your overall enterprise.
                         </p>
                         <div class="visible-md visible-lg">
                             <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                         </div>
                     </div>
                     <div class="col-md-5">
                         <img alt="Mobile" src="assets/img/img-mobileapps/hp-header.png"
                             class="hp-header img-responsive center-block" />
                     </div>
                 </div>
             </div>
         </header>

         <section class="hubungi-kami-top">
             <div class="container__">
                 <div class="row">
                     <div class="col-lg-12">
                         <a href="/en/contact.php" target="_blank"><span class="purple">Contact us</span></a> for further
                         information.
                     </div>
                 </div>
             </div>
         </section>

         <section>
             <div class="container__">
                 <br /><br />
                 <div class="row">
                     <div class="col-md-5">
                         <h2 class="first">User-Oriented <span>Mobile Application</span> Development</h2>
                         <br />
                         <img alt="Pengembangan Aplikasi Mobile Berorientasi Pengguna"
                             src="assets/img/img-mobileapps/mobile-phone.png" class="img-responsive center-block mobile-phone" />
                     </div>
                     <div class="col-md-7">
                         <p>
                             The Mobile Applications that we develop are created in line with our philosophy: “the right
                             person in the right position has the potential to grow.” Therefore, our team is dedicated to
                             focusing their abilities in delivering user orientated mobile applications, so as to provide you
                             with the optimum digital experience. <br /><br />
                             We are also aware that, in today’s digitalized era, technology is evolving at a rapid pace.
                             Therefore, we aim to provide concepts and solutions compatible to the most contemporary
                             forms of technology, in the service of our client’s continual success in the digital
                             world.<br /><br />
                             Our designers and application developers will not only assist you in creating a great product, but
                             also are ready to help ensure that the finalized product is running according to your
                             standard.<br /><br />
                             Further, if there are any problems during the development process, it is part of our policy to
                             notify you. Our team is comprised of competent and experienced specialists who seek to
                             provide you with the best digital technology applicable to your business.
                         </p>
                     </div>
                 </div>
                 <br /><br />
             </div>
         </section>

         <section class="solusi">
             <div class="container__">
                 <br /><br />
                 <div class="row">
                     <div class="col-md-4">
                         <h2 class="title">LOGIQUE is a leading <b>Mobile App Development</b> Company based in Indonesia</h2>
                     </div>
                     <div class="col-md-8">
                         <ul class="fa-ul">
                             <li><span class="fa-li"><i class="fa fa-check-square"></i></span>LOGIQUE aims to customize a client’s
                                 requirements with the latest digital technology available in order to create iOS and Android apps
                                 of
                                 international quality.</li>
                             <li><span class="fa-li"><i class="fa fa-check-square"></i></span>The iOS and Android apps we have
                                 developed have been designed by UI/UX designers so the resulting look is very user friendly.</li>
                             <li><span class="fa-li"><i class="fa fa-check-square"></i></span>We security, optimization and
                                 scalability of the applications we creates are always taken into detailed account by our
                                 technical
                                 experts, so as to deliver the maximum level of results to our users.</li>
                             <li><span class="fa-li"><i class="fa fa-check-square"></i></span>With more than five years of
                                 experience,
                                 the ability of LOGIQUE’s team has been tested through a wide variety of clients; locally and
                                 internationally. </li>
                         </ul>
                     </div>
                 </div>
                 <br /><br />
             </div>
         </section>

         <section class="container__ logique-help">
             <br /><br /><br>
             <div class="row">
                 <div class="col-md-12">
                     <h2 class="font-28 text-center">How <span class="purple"><b>LOGIQUE</b></span> Can Help You</h2>
                 </div>
                 <div class="clearfix"></div>
                 <br /><br /><br>
                 <div class="col-md-4">
                     <div class="div-help">
                         <h3 class="div-title"><span class="title purple"><b>Innovative Application Ideas</b></span></h3>
                         <div class="">
                             <img alt="Ide Aplikasi Inovatif" class="img-responsive center-block"
                                 src="assets/img/img-mobileapps/inovatif.png" /><br />
                             By adhering to our confidentiality agreement, we can make sure millions of dollars’ worth of mobile
                             app
                             data is kept secure; thereby further helping you realize your ideas in potentially creating the
                             highest-quality, multi-million dollar project, in the same vein as Go-Jek, Traveloka or Tokopedia.
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="div-help">
                         <h3 class="div-title"><span class="title purple"><b>Provide Additional Values</b></span></h3>
                         <div class="">
                             <img alt="Memberikan Nilai Tambahan" class="img-responsive center-block"
                                 src="assets/img/img-mobileapps/nilai-tambah.png" /><br />
                             If you are currently providing your customers with your services, we can assist through appbased
                             technology so as to further add value to your business, as the wide reaching capabilities of
                             smartphones
                             make it an ideal platform to add additional value to your business. </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="div-help">
                         <h3 class="div-title"><span class="title purple"><b>Improving your Business’s Work Flow</b></span></h3>
                         <div class="">
                             <img alt="Meningkatkan Proses Bisnis" class="img-responsive center-block"
                                 src="assets/img/img-mobileapps/proses-bisnis.png" /><br />
                             Consider streamlining your business by utilizing mobile app technology. Applications provide an
                             enormous
                             opportunity to empower your staff and improve overall efficiency. Mobile App based solutions with a
                             company centered strategy have shown to increase the output of those in your employ, hence increasing
                             your company’s general levels of productivity</div>
                     </div>
                 </div>
             </div>
             <br /><br /><br />
         </section>

         <section class="solusi revision" id="solusi-section">
             <div class="container__">
                 <br /><br />
                 <div class="row row-center-md">
                     <div class="col-md-offset-1 col-md-4">
                         <h2 class="title"><span><b>A Mobile App</b></span> can provide application-based solutions for a variety of office-based problems, such as:</h2>
                     </div>
                     <div class="col-md-7">
                         <ul class="fa-ul">
                             <li><span class="fa-li"><i class="fa fa-check-square"></i></span>Enhancing office culture through clearer communication between staffs and employers.
                             </li>
                             <li><span class="fa-li"><i class="fa fa-check-square"></i></span>A tool used to market your products and services.</li>
                             <li><span class="fa-li"><i class="fa fa-check-square"></i></span>A tool supporting the functionality of currently used products.</li>
                             <!-- <li><span class="fa-li"><i class="fa fa-check-square"></i></span>As a tool to support your product’s
                                 functionality.</li> -->
                         </ul>
                     </div>
                 </div>
                 <br />
                 <hr /><br />
                 <h2 class="font-28 text-center">Our Services</h2><br />
                 <div class="row">
                     <div class="col-md-10 col-md-offset-1 text-center">
                         We offer a comprehensive range of IT services, from App development and creation to the sustainable
                         management of your application. All of our services are aimed at building apps which maximize user
                         experience
                         and produce great business transformation results.
                     </div>
                 </div>
                 <br />
                 <div class="row">
                     <div class="col-md-4">
                         <div class="layanan-kami">
                             <h3 class="title">iOS Application development for iPhone/iPad</h3>
                             <br />
                             <img alt="Pengembangan Aplikasi iOS untuk iPhone / iPad" src="assets/img/img-mobileapps/apple.png"
                                 class="img-responsive center-block" /><br />
                             We are highly experienced in developing apps with a compatibility with different iOS versions using
                             various Swift languages ranging from swift 1 to 4, which are trending today.
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="layanan-kami">
                             <h3 class="title">Android Application Development</h3>
                             <br />
                             <img alt="Pengembangan Aplikasi Android" src="assets/img/img-mobileapps/android.png"
                                 class="img-responsive center-block" /><br />
                             We provide a wide range of native Java-based Android applications ranging from the most basic, with
                             multi
                             lingual features, up to apps which utilize the highest levels of complexity
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="layanan-kami">
                             <h3 class="title">Hybrid Application Development</h3>
                             <br />
                             <img alt="Pengembangan Aplikasi Hybrid" src="assets/img/img-mobileapps/hybrid.png"
                                 class="img-responsive center-block" /><br />
                             If you are seeking apps that can be utilized across both Android and iOS platforms, we also offer the
                             development of hybrid apps through the use of technologies such as Ionic, Adobe PhoneGap, Apache
                             Cordova,
                             Xamgrin, AngularJS, and so on.
                         </div>
                     </div>
                 </div>
                 <div class="hidden-xs hidden-sm"><br /></div>
                 <div class="row">
                     <div class="col-md-4 col-md-offset-2">
                         <div class="layanan-kami">
                             <h3 class="title">UI/UX Mobile Application Design</h3>
                             <br />
                             <img alt="Desain UI/UX Aplikasi Mobile" src="assets/img/img-mobileapps/ux.png"
                                 class="img-responsive center-block" /><br />
                             All of our mobile apps have been designed using the appropriate aesthetics befitting to their
                             function.
                             By upholding high standards of design, we seek to ensure that our customers enjoy ongoing
                             interaction.
                             Additionally, implementing responsive designs further maximizes the experience of our users.
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="layanan-kami">
                             <h3 class="title">Developing CMS/API</h3>
                             <br />
                             <img alt="Pengembangan CMS / API" src="assets/img/img-mobileapps/cms.png"
                                 class="img-responsive center-block" /><br />
                             To support the development of Mobile Apps, we also provide CMS and API supported through various
                             platforms, especially PHP.
                         </div>
                     </div>
                 </div>
                 <br /><br />
             </div>
         </section>

         <section class="portofolio" id="portfolio-section">
             <div class="container__">
                 <div class="row">
                     <div class="col-md-5">
                         <h2 class="font-28">Client Portfolio</h2>
                         <br />
                         <div>We are highly experienced in working with clients from various industries and have helped develop
                             certain mobile applications in order to solve operation problems, empower sales and maintain customer
                             relationships.
                         </div>
                         <br /><br />
                     </div>
                     <div class="col-md-7">
                         <div class="portfolio-slider">
                            <div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img alt="Frangipani" class="img-responsive center-block"
                                            src="assets/img/img-mobileapps/jba-bike-inspection-app-1.png" />
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="caption-portfolio">
                                            <div class="arrow-left"></div>
                                            <h2 class="font-28">Category: Automotive</h2><br />
                                            <div>
                                                <!-- Application that helps international spa managers to improve services and
                                                relationships with customers. -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img alt="Frangipani" class="img-responsive center-block"
                                            src="assets/img/img-mobileapps/weeo-hino-connect-2.png" />
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="caption-portfolio">
                                            <div class="arrow-left"></div>
                                            <h2 class="font-28">Category: Automotive</h2><br />
                                            <div>
                                                <!-- Application that helps international spa managers to improve services and
                                                relationships with customers. -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img alt="Frangipani" class="img-responsive center-block"
                                            src="assets/img/img-mobileapps/weeo-testing-app-1.jpg" />
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="caption-portfolio">
                                            <div class="arrow-left"></div>
                                            <h2 class="font-28">Category: Automotive</h2><br />
                                            <div>
                                                <!-- Application that helps international spa managers to improve services and
                                                relationships with customers. -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img alt="Frangipani" class="img-responsive center-block"
                                            src="assets/img/img-mobileapps/wantjp1.png" />
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="caption-portfolio">
                                            <div class="arrow-left"></div>
                                            <h2 class="font-28">Category: E-Commerce</h2><br />
                                            <div>
                                                <!-- Application that helps international spa managers to improve services and
                                                relationships with customers. -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div>
                                 <div class="row">
                                     <div class="col-sm-5">
                                         <img alt="Sunlife" class="img-responsive center-block"
                                             src="assets/img/img-mobileapps/sunlife.png" />
                                     </div>
                                     <div class="col-sm-7">
                                         <div class="caption-portfolio">
                                             <div class="arrow-left"></div>
                                             <h2 class="font-28">Category: Financial</h2><br />
                                             <div>
                                                 Application that helps customers get information about insurance policies and
                                                 interact with agents that is one of the largest insurance companies in Indonesia.
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div>
                                 <div class="row">
                                     <div class="col-sm-5">
                                         <img alt="Otomart" class="img-responsive center-block"
                                             src="assets/img/img-mobileapps/otomart.png" />
                                     </div>
                                     <div class="col-sm-7">
                                         <div class="caption-portfolio">
                                             <div class="arrow-left"></div>
                                             <h2 class="font-28">Category: Automotive</h2><br />
                                             <div>
                                                 Application that helps dealers manage car ads on one of the largest secondhand
                                                 car
                                                 portals in Indonesia.
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div>
                                 <div class="row">
                                     <div class="col-sm-5">
                                         <img alt="Frangipani" class="img-responsive center-block"
                                             src="assets/img/img-mobileapps/frangipani.png" />
                                     </div>
                                     <div class="col-sm-7">
                                         <div class="caption-portfolio">
                                             <div class="arrow-left"></div>
                                             <h2 class="font-28">Category: Service</h2><br />
                                             <div>
                                                 Application that helps international spa managers to improve services and
                                                 relationships with customers.
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <section class="bg-grey">
             <div class="container__">
                 <div class="row">
                     <div class="col-lg-12">
                         <h2 class="font-28 text-center">How LOGIQUE Works</h2>
                         <br />
                         <p class="text-center">
                             Whether for a B2C, B2B, startup or an enterprise operation solution, we always make time to
                             thoroughly
                             understand your business, as well as its products and the needs of its users. The way results show
                             through our works is highly transparent, as we are committed to working with the involvement of our
                             clients.
                         </p>
                     </div>
                 </div>
                 <br /><br />
                 <div class="row">
                     <div class="col-md-5ths">
                         <div class="contain-img">
                             <img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja1.png"
                                 alt="Perencanaan" />
                             <div class="text-center title">Planning</div>
                         </div>
                         <p>
                             At the beginning of a project, we will seek to ensure that the application focuses on the specific
                             needs
                             of the company, service or user as a top priority. We will provide the concept in the form of a
                             wireframe
                             draft as the final result.
                         </p>
                     </div>
                     <div class="col-md-5ths">
                         <div class="contain-img">
                             <img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja2.png"
                                 alt="Desain" />
                             <div class="text-center title">Design</div>
                         </div>
                         <p>
                             From the initially drafted concept, our designers will begin to create the page’s main design. We can
                             provide several templates for the main page which you can choose from. A specific design requirement
                             will
                             be reflected on while we proceed with the designs for the following pages.
                         </p>
                     </div>
                     <div class="col-md-5ths">
                         <div class="contain-img">
                             <img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja3.png"
                                 alt="Pengembangan" />
                             <div class="text-center title">Development</div>
                         </div>
                         <p>
                             Based on the function of existing concepts, our technical team will begin developing mobile
                             applications
                             which have proved more efficient than the standard levels of security commonly used for applications.
                         </p>
                     </div>
                     <div class="col-md-5ths">
                         <div class="contain-img">
                             <img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja4.png"
                                 alt="Testing" />
                             <div class="text-center title">Testing</div>
                         </div>
                         <p>
                             Our QA team will ensure that the features developed by our technical experts are running
                             appropriately so
                             that the overall quality of the applications provided is transparent and trustable.
                         </p>
                     </div>
                     <div class="col-md-5ths">
                         <div class="contain-img">
                             <img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja5.png"
                                 alt="Peluncuran Aplikasi" />
                             <div class="text-center title">Launch Application</div>
                         </div>
                         <p>
                             Congratulations! The development process has been completed, and your android/iOS app is ready to
                             launch
                             through the App Store/Google Play Store
                         </p>
                     </div>
                 </div>
             </div>
         </section>
         <!--<div class="slider-mobile">
				   <div class="container">
					   <div class="row">
						   <div class="col-md-12">
							   <img src="assets/img/img-mobileapps/device.png" class="device hidden-xs"/>
							   <img src="assets/img/img-mobileapps/device-m.png" class="device visible-xs"/>
							   <div class="slider-app">
								 <div><img src="assets/img/img-mobileapps/sunlife.png" class="img-responsive center-block"/></div>
								 <div><img src="assets/img/img-mobileapps/frangipani.png" class="img-responsive center-block"/></div>
								 <div><img src="assets/img/img-mobileapps/otomart.png" class="img-responsive center-block"/></div>
								 <div><img src="assets/img/img-mobileapps/otomart.png" class="img-responsive center-block"/></div>
							   </div>
						   </div>
					   </div>
				   </div>
			   </div>-->
         <section class="div-form">
             <div class="container__">
                 <div class="row">
                     <div class="col-md-offset-2 col-md-8">
                         Contact us to get the best <b>offer</b>
                         <br />
                         <?php if(isset($msg))
							   {
							   echo $msg;
							   }
							   ?>
                         <form id="contact-form-mobile" class="contactform-mobile" role="form" name='myForm'
                             onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post'
                             accept-charset='UTF-8'>
                             <input type='hidden' name='submitted' id='submitted' value='1' />
                             <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>'
                                 value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                             <fieldset>
                                 <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                             </fieldset>
                             <div class="form-group">
                                 <div class="row">
                                     <div class="col-md-12">
                                         <input type="text" name="name" aria-label="Name" placeholder="Your Name"
                                             class="form-control name-input"
                                             value='<?php echo $formproc->SafeDisplay('name') ?>' />
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <input type="email" name="email" aria-label="Email" placeholder="Email Address"
                                             class="form-control" value='<?php echo $formproc->SafeDisplay('email') ?>' />
                                     </div>
                                     <div class="col-md-6">
                                         <input type="number" name="phone" aria-label="Phone" placeholder="Telephone Number"
                                             class="form-control" value='<?php echo $formproc->SafeDisplay('phone') ?>' />
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="row">
                                     <div class="col-md-12">
                                         <textarea class="form-control" placeholder="Question" name="message"
                                             aria-label="Message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="sr-only">Recaptcha</div>
                                         <div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
                                     </div>
                                     <div class="col-md-6">
                                         <button type="submit" class="pull-right btn btn-submit">Send</button>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </section>

         <section class="buat-sekarang">
             <div class="container__">
                 <div class="row row-center-md">
                     <div class="col-md-6 font20">
                         Have questions and need more information?
                         <div class="hidden-lg hidden-md"><br /></div>
                     </div>
                     <div class="col-md-6">
                         <a href="/en/contact.php" target="_blank" class="btn btn-buat-sekarang">Find Solutions</a>
                     </div>
                 </div>
             </div>
         </section>
     </div>

     <?php include '../footer.php' ?>

     <script src="/js/jquery.matchHeight.js"></script>
     <script src="/js/slick.min.js"></script>
     <script src='https://www.google.com/recaptcha/api.js'></script>
     <script type="text/javascript">
     $(function() {
         $('.div-help').matchHeight();
         $('.layanan-kami').matchHeight();
     });

     $('.portfolio-slider').slick({
         dots: true,
         infinite: true,
         speed: 500,
         fade: true,
         arrows: false,
         autoplay: true,
         cssEase: 'linear'
     });
     </script>
 </body>

 </html>