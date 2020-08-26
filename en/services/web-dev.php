<?php

require_once("assets/form/fgcontact_webdev.php");

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
<html lang="ja">

<head>
<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
     <meta name="description"
         content="As one of the best website developers in Indonesia, LOGIQUE Digital Indonesia has their own mechanism in providing clients with the best web development service. Here are simple explanations of each step that we take to create a website.">
     <meta name="keywords"
         content="As one of the best website developers in Indonesia, LOGIQUE Digital Indonesia has their own mechanism in providing clients with the best web development service. Here are simple explanations of each step that we take to create a website.">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
     <meta itemprop="name" content="PT. Logique Digital Indonesia">
     <meta property="og:title" content="Web Development Service | LOGIQUE Digital Indonesia">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
     <meta property="og:description"
         content="As one of the best website developers in Indonesia, LOGIQUE Digital Indonesia has their own mechanism in providing clients with the best web development service. Here are simple explanations of each step that we take to create a website.">

     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <title>Web Development Service | LOGIQUE Digital Indonesia</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="assets/css/style-webdev-new.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
    <style>
    @media only screen (max-width: 414px) {
        .breadcrumb {
            padding-left: 15px;
        }
    }
    </style>
    <div class="side-container"></div>
    <div>

        <!-- NAVIGATION -->
        <div class="nav-lp">
            <button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle"
                data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar first"></span>
                <span class="icon-bar second"></span>
                <span class="icon-bar third"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
                <div class="backdrop-test"></div>
                <div class="logique-nav logique-nav--update in-jp">
                <div class="margin-for-nav">
                         <div class="text-center">
                             <a href="/en/">
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
                             <a href="/career/">
                                 <div class="img-career"></div>
                                 Career
                             </a>
                         </div>
                         <div class="text-center">
                             <a href="/en/contact.php">
                                 <div class="img-contact"></div>
                                 Contact us
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
        <!-- NAVIGATION -->

        <!-- HEADER -->
        <div class="container-fluid">
            <div class="row lang-logo--update-design">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                <ul class="list-inline">
                                    <li class="active"><a href="/en/services/web-dev.php">EN</a></li>
                                    <li><a href="/layanan/web-dev.php">ID</a></li>
                                    <li><a href="/jp/services/web-dev.php">JP</a></li>
                                </ul>
                                <a href="/index.php"><img src="/../img/logo.png" alt="Logo"
                                        class="img-responsive logo--update-design" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>disini
        <!-- END HEADER -->

        <header class="content-wrapper__">
            
            <div class="text-left --top">
                <div class="container-fluid">
                    <div class="row bg-section">
                        <div class="col-md-12">
                            <img src="assets/img/img-webdev/webdev-bg.png" alt="">
                        </div>
                        <div class="col-sm-12 breadcrumb-section">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="/index.php"><span itemprop="name">Beranda</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item" href="/services.php"><span itemprop="name">Services</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">Web Development</span></a>
                                    <meta itemprop="position" content="3" />
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12 m-t-2em main-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-lg-6"></div>
                                    <div class="col-md-7 col-sm-7 col-lg-6">
                                        <h1 class="title">
                                            <span>LOGIQUE Web / Homepage Production Service</span>
                                        </h1>
                                        <div class="content">
                                            <p>
                                            A web/homepage created by LOGIQUE is of high value and can help to increase your conversions, acquire new customers, gain inquiries, and attract more prospective applicants for employment.
                                            </p>

                                            <p>
                                            If you aim to use WEB channels for efficient sales, distinguish your enterprise from other companies, streamline customer service, or to strengthen your methods of recruitment, among other things, please leave it to LOGIQUE.     
                                            </p>
                                            <p>
                                            We are the No. 1 web production company in Indonesia with a long history of achievement.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <p class="about-title">If you seek to develop a high quality website, contact LOGIQUE for our professional web design and development services.</p>
                    <p class="about-content">
                    LOGIQUE has developed over 200 websites spanning various fields throughout Indonesia; from government organizations, to financial institutions, many of which require high levels of security. Such are made in regards to a client’s specific and creative demands, methods of programming, etc. We are trusted for the emphasis we put on business growth in regards to the digital world, which ultimately means greater profits for your company.

As a professional web development company, we work to create the maximum quality of output for a reasonable price, through our team, consisting of experienced web developers, designers and content writers; all of whom constitute 40 hardworking and experienced individuals in total. Further, although we are an international company, we have extensive knowledge of the digital world’s applicability on a local level. Therefore, if you are looking for an Indonesian-built high quality website, feel free to consult LOGIQUE anytime.
                    </p>
                </div>
                <div class="col-md-5 col-sm-6">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                         <!-- Wrapper for slides -->
                         <div class="carousel-inner">
                             <div class="item active">
                                 <img src="assets/img/img-webdev/carousel.png" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div>
                             <!-- <div class="item">
                                 <img src="assets/img/img-webdev/carousel.png" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div>
                             <div class="item">
                                 <img src="assets/img/img-webdev/carousel.png" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div> -->
                         </div>
                         <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li> -->
                        </ol>
                     </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flow">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-5">
                    <img src="assets/img/img-webdev/flow.png" alt="">
                </div>
                <div class="col-sm-7 col-md-7">
                    <p class="flow-title">Building the Ideal Website depends on the expectations set for your site, your budget, and the structure that can be prepared for it.</p>
                    <p class="flow-content">
                    We have prepared four basic service plans to meet the various homepage, website production and operation needs of our customers.

We aim to create the best possible website within the predefined scope regardless of our budget.

If you are still uncertain about which service menu fits your needs, please feel free to contact us. In the case that your requirements do not currently apply to any of our plans, we will provide a flexible estimation for you.     
                    </p>
                    <a href="./webdev-price-range.php" target="_blank">
                        <div class="flow-button">
                        See Web Production Service Plans
                        <img src="assets/img/img-webdev/arrow.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="discuss">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <p class="discuss-title">LOGIQUE's Web Production Principle</p>
                    <div class="discuss-content">
                        <p>
                            LOGIQUE ingin menghasilkan Website yang bermanfaat untuk Anda!
                        </p>
                        <p>
                            For an investment made by your valuable capital, we thereby seek to create a website that procures the maximum ROI.
                        </p>
                        <p>
                            Through clear communication and the exchanging of ideas, we aim to create high quality websites (Of course, for customers who are looking for simpler results quickly and easily, we will prioritize development speed).
                        </p>
                        <p>
                            As a professional Website Development & Digital Marketing company, we can develop your website while at the same time offer advice as a Digital Marketing consultant. We also seek the opportunity to support the operation even after production, so as to continue working together in improving the PDCA cycle.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    <img src="assets/img/img-webdev/discuss.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="announce">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-10 col-sm-offset-1 col-md-offset-0 announce-content">
                                <p class="announce-title">We Aim to Create a Website Worth Investing In</p>
                                <p class="announce-p">
                                Have you ever felt that a majority web production projects are completed with a variety of problems that have not been 100% rooted out? By following an exceptional standard, we differentiate ourselves from other companies by engaging with our customers, and through creating Websites that generate profits. In this regard, customer cooperation is essential, such as through securing a considerable budget and an effective plan. Thus, achieving great results through low costs & a hasty development process rarely happens.     
                                </p>
                                <p class="announce-p mb-0">
                                We recommend selecting the Strategic Web Creation Plan along with a sufficient structure and budget. We, in turn, will produce a website that is well worth the investment, and will not disappoint you for putting your trust in LOGIQUE.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="division">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="division-title">Web Production Services at Logique</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="division-container">
                        <p class="title">A one-stop web production operation.</p>
                        <p class="content">If you require web pages in Indonesian, English and Japanese, LOGIQUE seeks help you through SEO implementation and can further assist you through applying production design, inquiry form, and even with post publication maintenance, in addition to any digital marketing matters you may have.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="division-container">
                        <p class="title">Maximum Quality, Latest technology, and Reliable security.</p>
                        <p class="content">
                        We utilize reliable security systems of the highest quality through the latest digital technology available. We are also experienced in implementing PWA, AMP and other complex functions for websites which can be delivered after security checks by experts.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="division-container">
                        <p class="title">Speed and flexibility.</p>
                        <p class="content">We value the ability to produce high quality work in a rapid and efficient manner, as we are aware of the time constraints you might possibly have. Therefore, our timeframe is flexible and can be adjusted into your schedule</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-layout web-service-flow">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="analysis-part flow-part">
                        <img src="assets/img/img-webdev/feature/authentication.svg" alt="アクセス解析・課題抽出">
                        <h3>Analysis and Evaluation</h3>
                        <p>If you already have a website, we will be able to analyze and evaluate its progress through services which include examining the rate of traffic and also by interpreting the overall structure of your website, among other things. Our team is experienced in retrieving a highly accurate analysis of your website and examining the issues within it in order to improve its overall user experience.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="plan-part flow-part">
                        <img src="assets/img/img-webdev/feature/web-development.png" alt="プランニング">
                        <h3>Planning</h3>
                        <p>In order to achieve the set goals desired for your website, we aim to show you what a professionally designed site should look like, as well as offer suggestions for potential improvements required for continual results. Such advice varies depending on your site’s internal system.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="seo-part flow-part">
                        <img src="assets/img/img-webdev/feature/searchseo.png" alt="SEO / SEM">
                        <h3>SEO / SEM</h3>
                        <p>A website is unlikely to receive much traffic simply through having an online presence. Our experts are familiar with SEO measures specified for Indonesia. We strive to create websites that are highly visible through organic search methods when relevant queries are entered into the search engine. We are also able to conduct an SEM strategy in order to ensure a quick rise in traffic through the use of effective keywords.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="info-part flow-part">
                        <img src="assets/img/img-webdev/feature/learning.png" alt="情報再構成・改善">
                        <h3>Restructuring and Improvement</h3>
                        <p>As performance issues are commonly found through a thorough scan, your website doesn’t necessarily need to be recreated from scratch, as occasionally, the cost and work involved can exceed a specified budget. In this case, we offer practical solutions for organizing, collecting and improving the website according to your specified budget, within the timeframe you require</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="multiligual-part flow-part">
                        <img src="assets/img/img-webdev/feature/interpreter.png" alt="多言語Webサイト制作運用">
                        <h3>Multilingual Website Production and Operation</h3>
                        <p>We can facilitate web development in Indonesian, English and Japanese, as we understand that creating unique and multi-paged content is important to reach and engage as large an audience as possible</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="sosmed-part flow-part">
                        <img src="assets/img/img-webdev/feature/social-media.png" alt="SNS運用">
                        <h3>Social Media Operation</h3>
                        <p>Social media can be a powerful tool to increase the level of interaction with your customers. It can also facilitate web traffic by directing frequenters of social media to your website. We operate on several Social Media platforms such as Facebook and Instagram in the Indonesian, English and Japanese languages.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="design-part flow-part">
                        <img src="assets/img/img-webdev/feature/graphic-design.png" alt="デザイン制作">
                        <h3>Design Production</h3>
                        <p>We aim to design a user and conversion friendly UI for your website. Our web design team will suggest different design styles according to your specific requirements.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="markup-part flow-part">
                        <img src="assets/img/img-webdev/feature/css.png" alt="マークアップ・コーディング">
                        <h3>Markup Coding</h3>
                        <p>You can also request simple HTML/CSS coding for your website, as our team is always up to date in regards to the latest JavaScript-based front-end coding technology.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="responsive-part flow-part">
                        <img src="assets/img/img-webdev/feature/responsive.png" alt="マルチデバイス対応">
                        <h3>Multi-device Support</h3>
                        <p>We aim to create an optimized and responsive site for smartphones and tablets. We have ample experience on the subject and have created many AMP and mobile friendly websites.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="programing-part flow-part">
                        <img src="assets/img/img-webdev/feature/web-programming.png" alt="プログラミング">
                        <h3>Special Programming Features</h3>
                        <p>You can add various features such as Motion Parallax to your website, which can be developed by using JavaScript, HTML5, CSS3, etc. We propose developing a website that attracts users according to their specified needs.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="system-part flow-part">
                        <img src="assets/img/img-webdev/feature/control-panel.png" alt="システム構築">
                        <h3>System Construction</h3>
                        <p>We aim to develop and operate various systems compatible with your website, such as CMS, web and business systems. Our services are effective, practical and are developed through PHP frameworks.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="apps-part flow-part">
                        <img src="assets/img/img-webdev/feature/application.png" alt="モバイルアプリ対応">
                        <h3>PWA as Mobile Apps</h3>
                        We are able to develop mobile and web applications through PWA. Creating push notifications and offline operations is also possible.</p>
                    </div>
                </div>
            </div>
            <!-- <div class="link-page-price-and-portfolio">
                <a class="link-yellow-white" href="/services/webdev-price-range.php">Webサイト制作運用の費用について</a>
                <a class="link-yellow-white" href="/portfolio.php">Webサイト制作実績</a>
            </div> -->
        </div>
    </section>

    <section class="portofolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Website Production Results</p>
                    <p class="content">
                    We would like to showcase a few websites that have been developed by LOGIQUE.
We have further posted many of our results here for reference.
                    </p>
                </div>
            </div>
            <div class="row portofolio-section">
               <!-- <div class="col-md-6 col-lg-4 col-sm-4" data-toggle="modal" data-target="#exampleModalLong"> -->
               <div class="col-md-6 col-lg-4 col-sm-4">
                    <a href="https://aiapremieracademy.co.id/en/home" target="_blank">
                        <img src="assets/img/img-webdev/AIA.png" alt="">
                        <p class="portofolio-title text-center">AIA</p>
                    </a>
                    <!-- <p class="portofolio-subtitle">Lihat Detil</p> -->
                </div>
                <div class="col-md-6 col-lg-4 col-sm-4">
                    <a href="http://bekalhidup.com/" target="_blank">
                        <img src="assets/img/img-webdev/panin.png" alt="">
                        <p class="portofolio-title text-center">Panin Life Dai - Ichi</p>
                        <!-- <p class="portofolio-subtitle">Lihat Detil</p> -->
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-4">
                    <a href="https://jba.co.id/" target="_blank">
                        <img src="assets/img/img-webdev/JBA.png" alt="">
                        <p class="portofolio-title text-center">JBA</p>
                    </a>
                    <!-- <p class="portofolio-subtitle">Lihat Detil</p> -->
                </div>
            </div>
        </div>
    </section>

    <section class="strategic">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Strategic Web Create Plan's Deliverable Examples</p> 
                </div>
            </div>
            <div class="row strategic-list">
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/1.png" alt="">
                    <p class="strategic-title">Customer Journey</p>
                    <p class="strategic-content">It is possible to create a website that leads to greater conversions through providing web functions and content that meet the customer's needs, </p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/2.png" alt="">
                    <p class="strategic-title">Persona Analysis</p>
                    <p class="strategic-content">Actualizing and visualizing the needs of targeted customers leads to producing a website that they will find appealing.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/3.png" alt="">
                    <p class="strategic-title">SEO Keyword List</p>
                    <p class="strategic-content">Targeted keywords are selected by analyzing the number of searches and each keyword's degree of competition. The selected keywords will form basis of any SEO measures and content creation.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/4.png" alt="">
                    <p class="strategic-title">Brand Concept Formulation</p>
                    <p class="strategic-content">Convey the right messages to your customers by defining the service, product concept, and your brand's values.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/5.png" alt="">
                    <p class="strategic-title">Brand Message Proposal</p>
                    <p class="strategic-content">The proposition of a brand concept, statement, mission, and defining a brand message that will be conveyed to targeted users on your website.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/6.png" alt="">
                    <p class="strategic-title">Design Guideline</p>
                    <p class="strategic-content">Create a design guide to ensure a level of consistency for your design's overall aesthetic. Here, we will define the colors, fonts and margins used.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/7.png" alt="">
                    <p class="strategic-title">Access Analysis</p>
                    <p class="strategic-content">Analyse the current access status and clarify any issues. A Detailed analysis is the key to setting concrete and realistic KPIs.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/8.png" alt="">
                    <p class="strategic-title">Sitemap</p>
                    <p class="strategic-content">This details the content and overall page structure of your website. This is required to create a proper means of navigation & an internal link structure design for your website.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/9.png" alt="">
                    <p class="strategic-title">Wireframe</p>
                    <p class="strategic-content">This is a document that determines the layout and components of each web page. Based on this, we will then proceed to designing the production.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 strategic-exp">
                    <p>The points mentioned above are just some of the documentation examples, We also create and deliver the necessary documents for each project. It is to formulate strategy and documentation in order to publish and operate a better Website.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Other Services related to Web Production Provided by LOGIQUE</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="link-page-price-and-portfolio">
                        <a class="link-yellow-white" href="./devops.php">Cloud Server Operation Management Service</a>
                        <a class="link-yellow-white" href="./penetration-test.php">Web Security Assessment/Vulnerability Inspection Service</a>
                    </div>
                    <div class="link-page-price-and-portfolio">
                        <a class="link-yellow-white" href="./web-dev.php">Websystem Development Service</a>
                        <a class="link-yellow-white" href="./pembuatan-aplikasi-mobile">Mobile Application Development Service</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-article">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Web Production Related Article</p>
                </div>
            </div>
            <div class="row">
<div class="col-md-12">
                    <div class="carousel slide multi-item-carousel" id="theCarousel">
                        <div class="carousel-inner">
                             
                             <?php  
                                    function shorten_string($string, $wordsreturned)
                                {
                                  $retval = $string;
                                  $string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
                                  $string = str_replace("\n", " ", $string);
                                  $array = explode(" ", $string);
                                  if (count($array)<=$wordsreturned)
                                  {
                                    $retval = $string;
                                  }
                                  else
                                  {
                                    array_splice($array, $wordsreturned);
                                    $retval = implode(" ", $array)." ...";
                                  }
                                  return $retval;
                                }
                                function tgl_indo($tanggal){
                                    $bulan = array (
                                        1 =>   'Januari',
                                        'Februari',
                                        'Maret',
                                        'April',
                                        'Mei',
                                        'Juni',
                                        'Juli',
                                        'Agustus',
                                        'September',
                                        'Oktober',
                                        'November',
                                        'Desember'
                                    );
                                    $pecahkan = explode('-', $tanggal);
                                    
                                    // variabel pecahkan 0 = tanggal
                                    // variabel pecahkan 1 = bulan
                                    // variabel pecahkan 2 = tahun
                                 
                                    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                }
                                    $url = file_get_contents('https://www.logique.co.id/blog/wp-json/wp/v2/posts/?tags=108&per_page=5&_embed');
                                
                                        $x = 0;

                                       $remote_posts = json_decode( $url ); 
                                       // printf('<pre>'); 
                                       //  var_dump($url);
                                       // printf('</pre>');
                                        foreach( $remote_posts as $remote_post ) { 
                                            $thumb_full_url = '';
                                            $thumb_url = '';

                                            if ( ! empty( $remote_post->featured_media ) && isset( $remote_post->_embedded ) ) {
                                                $thumb_full_url = $remote_post->_embedded->{'wp:featuredmedia'}[0]->source_url;
                                                $thumb_url = $remote_post->_embedded->{'wp:featuredmedia'}[0]->media_details->sizes->medium->source_url;
                                            }
                                            if($x==0) { 
                                            ?>
                                            <div class="item active ">
                                             <?php } else{
                                                echo ' <div class="item ">';
                                             }

                                             ?> 
                                                    <div class="col-xs-12 col-sm-6 col-md-6 article-container">
                                                        <div class="img-container">
                                                            <img src="<?=$thumb_full_url?>" class="img-responsive">
                                                        </div>
                                                        <div class="content-container">
                                                            <a href="<?=$remote_post->link?>" target="_blank">
                                                                <p class="title"><?=$remote_post->title->rendered?></p>
                                                            </a>
                                                            <p class="content"><?php 
                                                            $array = preg_replace("/<.+>/sU", "", $remote_post->excerpt->rendered);
                                                             $array =  shorten_string($array, 25); 
                                                            echo $array;
                                                             ?></p>
                                                            <p class="date"><?php 
                                                            $tanggal = date(' Y-m-d', strtotime($remote_post->date));
                                                            $idtanggal = tgl_indo($tanggal);
                                                            echo $idtanggal  ;  ?> | By <?php 
                                                              echo $remote_post->_embedded->author[0]->name;
                                                            ?></p>
                                                        </div>
                                                    </div>
                                               
                                            </div>
                                             
                                       <?php  $x++;
                                   }
                                     
                                ?> 
                        
                        <!--  Example item end -->
                        </div>
                        <ol class="carousel-indicators article-indicators">
                            <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#theCarousel" data-slide-to="1"></li>
                            <li data-target="#theCarousel" data-slide-to="2"></li>
                            <li data-target="#theCarousel" data-slide-to="3"></li>
                        </ol>
                    </div>
                </div>
            </div>
                
            </div>
        </div>
    </section>

    <section class="obstacle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Website Production Flow in LOGIQUE</h2>
                    <p>
                    LOGIQUE’s website design strategy puts an emphasis on the collaboration of speed and quality. Our professionals are involved in each step of the site’s development. We begin by thoroughly planning and proposing a design, before developing it. The aforementioned stages may vary depending on the type of project being implemented, and takes into account the website’s size, CMS necessity, and the level of difficulty regarding the system’s development.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <a href="/" target="_blank"><img src="assets/img/img-webdev/logo.png" alt="Fitur Perusahaan"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="tahap-pemesanan">
        <div class="container tahap-pemesanan-bg">
            <div class="row">
                <div class="col-md-offset-6 col-md-6">
                    <div class="card" style="height: fit-content;">
                        <section class="card-container" style="padding: 1em 0;">
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                    <span class="title-custom">1</span>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-10">
                                    <p class="title-custom-p"><b>Contact Us</b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10 m-t-10">
                                    <p class="title-content-p">
                                    Our team is ready to get your message anytime. You can immediately place an order and explain to us the initial description of the website as you want, from website creation, operation, CMS configuration, web system development, etc. Contact us via email info@logique.co.id or please fill in the available Order Form here. You can also ask us anything regarding the web development, website design, or even the price. Feel free to talk to us in Indonesian, English, or Japanese. We will contact you immediately for further discussion.
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tahap-pemesanan-2 first-row">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">2</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Hearing</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                You may have a specific vision and target, whether to increase the profit of your business through the website, improve your image and branding, IR activities, recruitments, etc. We would like to hear everything from you. We don’t have to meet up. If you want, we can reach you through Skype or other communication apps so we can talk further about your business. Then, we will give you some suggestions about the website that might suit your interest, also the most effective approach based on your needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">3</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Planning/Proposal Submission</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                After understanding everything, we will propose the website creation and utilization to solve the problem. If necessary, we will also conduct research, including about competitors and heuristic task analysis of the current website. Even until the submission of the proposal, we are cherishing the sense of speed and keeping in mind the prompt proposal. In the proposal, we will also provide optional services, such as photography, videography, and content creation as necessary. You can freely consult us if you have something in mind. The proposal will also include the price service as well as how long the time needed in the website creation. It’s all based on our transparency method, the difficulty level, and the number of team members needed to complete it.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">4</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>
                                Contract Signing
                                </b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                If you’re down to what we offer, the next process is the contract signing and the payment of 50% in advance. Soon after it’s all done, our team can start to operate the website production for you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="tahap-pemesanan-2 second-row">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">5</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Confirmation</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                First, we will confirm all the details of your website structure and requirements. This is to ensure that there are no missed points and cause obstacles in the future. In addition, we will also show the website framework (wireframe) that we have made for you as an initial description. Then, the concept, design, domain, and web server will be confirmed and decided. If you already have a website, you can share with us the access to Google Analytics.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">6</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Website Design Creation</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                At this stage, the homepage concept will be created and designed according to the references you provide. Our website design team will also provide several alternatives for which you can then approve or revise. After your approval, we will then create the rest of the pages based on the main website design.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">7</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Implementation, Coding, & Programming</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                Here, we will execute a programming function from various features that have been planned, including the CMS. This stage also includes implementing SEO that follows the UI/UX design, and eliminating the security vulnerability of the web. We will ensure that the entire data architecture and features in the website are running and functioning properly. This concept is to ensure that the website is well structured for your targeted audience experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tahap-pemesanan-2 third-row">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">8</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Testing and Verification</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                After we create the website, we will perform appropriate tests according to the contents and website design. We make sure that there is no HTML syntax error, the website is fully mobile friendly, each page is loading quickly, and SEO countermeasure is done effectively. For security needs, we also conduct tests and security checks based on many test scenarios. Then, we will periodically demonstrate the features to you, where you will be able to directly provide us feedbacks for each feature. When the project has entered the finalization stage, you can perform test too as a proof that all functions have been confirmed and are running well.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">9</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Website Launching</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                At this stage, your website will be deployed to the web server and made public. We can help move data from your old website if needed. After publication, we will do index registration on Google and setting up Google Analytics for further maintenance. You can also immediately pay off the remaining payments and your website can be used immediately.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom no-10">10</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Improvement & Maintenance</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                After the website is launched, we don't leave you just yet. Every website requires long-term management, including yours. We will continue to maintain your website system in order to keep the results you want. LOGIQUE provides variety of management services, starting from observing the system, carrying out daily operations, even regular content creation, Social Media operation, up to digital advertisement operation. All for the maximum results from your website.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="domore">
        <div class="container">
            <div class="row img-container">
                <div class="col-md-12">
                    <img src="assets/img/img-webdev/domore.png" alt="">
                </div>
                <div class="col-md-12 col-lg-8 content-container">
                    <p class="title">We are ready to assist you in creating a website, and also:</p>
                    <p class="list">
                        • 	Make and/or operate the website
                    </p>
                    <p class="list">
                        • 	Rebuild and optimize it for mobile/smartphones
                    </p>
                    <p class="list">
                        • 	Develop an Android/iOS application
                    </p>
                    <p class="list">
                        • 	Operate an in-house management system
                    </p>
                    <p class="list">
                        • 	Manage IT infrastructure
                    </p>
                    <p class="list">
                        • 	Audit IT security, even if it’s already structured from Japan
                    </p>
                    <p class="list">
                        • 	Increase awareness of your company/brand through digital marketing
                    </p>
                    <p class="list">
                        • 	Achieve online marketing targets with online advertising
                    </p>
                    <p class="list">
                        • 	Design and print company promotional materials for distribution
                    </p>
                    <p class="list">
                        • 	Update the content and operation of your website
                    </p>
                    <p class="list">
                        •   Manage the operation of SNS (Facebook, Instagram, Twitter, Youtube)
                    </p>
                    <p class="list">
                        • 	Create and install chatbots online for your website
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="../contact.php">
                        <div class="button-container">
                            <p>
                            Please contact LOGIQUE about web production operation in Indonesia
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">White Paper About Web Development in Indonesia</p>
                </div>
            </div>
            <div class="row gallery-container">
                <div class="col-xs-12 col-sm-4 col-md-4 article-container">
                    <div class="img-container">
                        <img src="assets/img/img-webdev/gallery1.png" class="img-responsive">
                        <a href="/white-paper-web-dev-1.php" target="_blank">
                            <p class="gallery-content">Download</p>
                        </a>
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-4 col-md-4 article-container">
                    <div class="img-container">
                        <img src="assets/img/img-webdev/gallery2.png" class="img-responsive">
                        <a href="/white-paper-web-dev-2.php" target="_blank">
                            <p class="gallery-content">Download</p>
                        </a>
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-4 col-md-4 article-container">
                    <div class="img-container">
                        <img src="assets/img/img-webdev/gallery3.png" class="img-responsive">
                        <a href="/white-paper-web-dev-3.php" target="_blank">
                            <p class="gallery-content">Download</p>
                        </a>
                    </div>
                </div>  
                <!-- <div class="col-md-4 col-lg-4 col-sm-4">
                    <img src="assets/img/img-webdev/gallery1.png" alt="">
                    <p class="gallery-title">ホワイトペーパー１</p>
                    <p class="gallery-content">ダウンロード</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4">
                    <img src="assets/img/img-webdev/gallery2.png" alt="">
                    <p class="gallery-title">ホワイトペーパー２</p>
                    <p class="gallery-content">ダウンロード</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4">
                    <img src="assets/img/img-webdev/gallery3.png" alt="">
                    <p class="gallery-title">ホワイトペーパー３</p>
                    <p class="gallery-content">ダウンロード</p>
                </div> -->
            </div>
            <div class="row ads-container">
                <div class="col-md-6 col-sm-6">
                    <a href="https://www.facebook.com/logique.id/" target="_blank">
                        <img src="assets/img/img-webdev/facebookads.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <a href="https://www.linkedin.com/company/13420656" target="_blank">
                        <img src="assets/img/img-webdev/linkedinads.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>

    <section id="modal">
        <div class="modal fade modal-section" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body aia-section">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="title-section">
                            <p class="title">AIA Group</p>
                            <p class="content">We have been entrusted with the production of the insurance company AIA’s campaign site and microsite.</p>
                            <!-- <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem architecto ipsam ut fugit mollitia autem esse obcaecati nesciunt voluptates odit nemo qui, aspernatur provident iste deleniti sit, corrupti consequatur incidunt.</p> -->
                        </div>
                        <div class="content-section">
                            <div class="content-container">
                                <div class="content-title">
                                    <p>URL</p>
                                </div>
                                <div class="content-desc">
                                    <a href="https://aiapremieracademy.co.id/en/home" target="_blank">
                                        <p>https://aiapremieracademy.co.id/en/home</p>
                                    </a>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Industry/Industry</p>
                                </div>
                                <div class="content-desc">
                                    <p>Insurance</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Genre</p>
                                </div>
                                <div class="content-desc">
                                    <p>Microsite</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Project Period</p>
                                </div>
                                <div class="content-desc">
                                    <p>2 Months</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Scope</p>
                                </div>
                                <div class="content-desc">
                                    <p>Design／HTML Coding／Parallax Programming／Infrastructure Management／Project Management</p>
                                </div>
                            </div>
                            <!-- <div class="content-container scope-container">
                                <div class="content-title">
                                    <p>Scope/person in charge</p>
                                </div>
                                <div class="content-desc">
                                    <p>Strategic design</p>
                                    <p>
                                        Information design
                                    </p>
                                    <p>
                                        direction
                                    </p>
                                    <p>
                                        Lead design
                                    </p>
                                    <p>
                                        design
                                    </p>
                                    <p>
                                        Copywriting
                                    </p>
                                    <p>
                                        Front mounting
                                    </p>
                                    <p>
                                        Server-side implementation
                                    </p>
                                    <p>
                                        Illustration production
                                    </p>
                                    	
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                </div>
                            </div> -->
                        </div>
                        <div class="img-section">
                            <img src="assets/img/aia.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-section" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong2Title" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body aia-section">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="title-section">
                            <p class="title">Panin Dai-ichi Life Asuransi Indonesia</p>
                        </div>
                        <div class="content-section">
                            <div class="content-container">
                                <div class="content-title">
                                    <p>URL</p>
                                </div>
                                <div class="content-desc">
                                    <a href="https://www.bekalhidup.com/" target="_blank">
                                        <p>https://www.bekalhidup.com/</p>
                                    </a>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Industry/Industry</p>
                                </div>
                                <div class="content-desc">
                                    <p>Insurance</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Genre</p>
                                </div>
                                <div class="content-desc">
                                    <p>E-Commerce</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Project Period</p>
                                </div>
                                <div class="content-desc">
                                    <p>4 Months</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Scope</p>
                                </div>
                                <div class="content-desc">
                                    <p>Web Design／Design／HTML Coding／Infrastructure Design／System Requirements Definition／System Development／Project Management</p>
                                </div>
                            </div>
                            <!-- <div class="content-container scope-container">
                                <div class="content-title">
                                    <p>Scope/person in charge</p>
                                </div>
                                <div class="content-desc">
                                    <p>Strategic design</p>
                                    <p>
                                        Information design
                                    </p>
                                    <p>
                                        direction
                                    </p>
                                    <p>
                                        Lead design
                                    </p>
                                    <p>
                                        design
                                    </p>
                                    <p>
                                        Copywriting
                                    </p>
                                    <p>
                                        Front mounting
                                    </p>
                                    <p>
                                        Server-side implementation
                                    </p>
                                    <p>
                                        Illustration production
                                    </p>
                                    	
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                </div>
                            </div> -->
                        </div>
                        <div class="img-section">
                            <img src="assets/img/panin.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-section" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong3Title" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body aia-section">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="title-section">
                            <p class="title">JBA</p>
                            <!-- <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quidem ratione optio aliquid quae vitae, molestiae maiores sed vero iste quasi, odio eligendi accusamus. Quia non aliquam laudantium cumque nam!</p> -->
                            <p class="content">We have been producing and operating the JBA corporate & auction service website for a long time. The website has also been completely renewed in line with the new CI in 2019. Many repeating users frequently visit  and browse pages, so we focused our efforts on improving the readability of the cars on sale at the auction.</p>
                        </div>
                        <div class="content-section">
                            <div class="content-container">
                                <div class="content-title">
                                    <p>URL</p>
                                </div>
                                <div class="content-desc">
                                    <a href=" https://jba.co.id/" target="_blank">
                                        <p>https://jba.co.id/</p>
                                    </a>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Industry/Industry</p>
                                </div>
                                <div class="content-desc">
                                    <p>Automotive, Car & Bike Auction</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Genre</p>
                                </div>
                                <div class="content-desc">
                                    <p>Corporate & Web Service</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Project Period</p>
                                </div>
                                <div class="content-desc">
                                    <p>2 Months</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Scope</p>
                                </div>
                                <div class="content-desc">
                                    <p>Web Design／Information Plan／Art Direction／Design／HTML Coding／Banner Production／System Requirements Definition／System Development／Project Management／Infrastructure Design</p>
                                </div>
                            </div>
                            <!-- <div class="content-container scope-container">
                                <div class="content-title">
                                    <p>Scope/person in charge</p>
                                </div>
                                <div class="content-desc">
                                    <p>Strategic design</p>
                                    <p>
                                        Information design
                                    </p>
                                    <p>
                                        direction
                                    </p>
                                    <p>
                                        Lead design
                                    </p>
                                    <p>
                                        design
                                    </p>
                                    <p>
                                        Copywriting
                                    </p>
                                    <p>
                                        Front mounting
                                    </p>
                                    <p>
                                        Server-side implementation
                                    </p>
                                    <p>
                                        Illustration production
                                    </p>
                                    	
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                </div>
                            </div> -->
                        </div>
                        <div class="img-section">
                            <img src="assets/img/jba.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include '../footer.php'; ?>

    <!-- <script src="//code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
    $(function() {
        $('.smooth').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname ==
                this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
    <script type="text/javascript">
        // Instantiate the Bootstrap carousel
        $('.multi-item-carousel').carousel({
        interval: false
        });

        // for every slide in carousel, copy the next slide's item in the slide.
        // Do the same for the next, next item.
        $('.multi-item-carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        // if (next.next().length>0) {
        //     next.next().children(':first-child').clone().appendTo($(this));
        // } else {
        //     $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        // }
        });
    </script>
</html>
