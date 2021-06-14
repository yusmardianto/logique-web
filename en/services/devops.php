<?php

require_once("assets/form/fgcontact_webdev.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient(['info@logique.co.id']); //<<---Put your email address here

//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');

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
    <meta name="description" content="We provide AWS, GCP, Alibaba Cloud environment  construction and operation services to Indonesian customers. Please feel free to contact us for enquiries regarding migration to cloud server, new system development, operation agency, billing agency, etc. LOGIQUE Digital Indonesia">
    <meta name="keywords" content=" ">
    <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
    <meta property="og:title" content="Cloud Server Structure Operation | DevOps | System Development Company in Jakarta, LOGIQUE Digital Indonesia">
     <meta property="og:type" content="website">
     <meta itemprop="name" content="PT. Logique Digital Indonesia">
     <meta property="og:site_name" content="Logique">
     <meta property="og:url" content="https://www.logique.co.id/en/services/devops.php">
     <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
     <meta property="og:description" content="LOGIQUE aims to provide DevOps services for the management of cloud servers in Indonesia from AWS, GCP, and Alibaba. Please click here for more info!">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Indonesian Based Cloud Server DevOps Services | LOGIQUE</title>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/newstyle.css" rel="stylesheet">
    <!-- <link href="/css/style_devops.css" rel="stylesheet"> -->
    <link href="../../layanan/assets/css/style_devops.css" rel="stylesheet">
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
        /* Centering image */
        .centering-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .centering-image-icon {
            display: block;
            margin-left: auto;
            margin-right: auto;            
        }
        
        .right-image {
            display: block;
            margin-left: auto;            
            width: 50%;
        }

        .left-image {
            display: block;
            margin-right: auto;            
            width: 50%;
        }
        /* CAROUSEL */
        .carousel-control.left {
            background-image: none; 
            margin: 0;
            position: absolute;
            top: 25%;           
        }

        .carousel-control.right {
            background-image: none;    
            margin: 0;
            position: absolute;
            top: 25%;          
        }

        .custom__card-why-logique{                    
            background-color: white;
            padding: 4px;
            border-radius: 10px;         
        }
        
        .carousel-indicators li {           
            background-color: grey;
        }
        .carousel-indicators .active {           
            background-color: #ffca13;
        }

        .carousel-caption {
            text-shadow: none;
        }

        .custom__bg-image-partner-aws{
            background-image: url(../../layanan/assets/img/img-devops/bg-aws-partner.webp); 
            background-repeat: no-repeat; 
            background-position: top right; 
        }
    
        @media only screen and (max-width: 414px) {
            .breadcrumb {
                padding-left: 15px;
            }
        }
                
        /* 
            TAILWIND RESPONSIVE REFERENCE : https://v1.tailwindcss.com/docs/responsive-design#app
        */

        /* Small (sm) */
        @media (max-width: 640px) {    
            
            .custom_section-cta-mobile {
                background-image: url(../../layanan/assets/img/img-devops/bg-section-cta-mobile.webp);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                width: auto;
                height: 200px; 
                text-align: center;
                padding-top: 0px;
                padding-bottom: 90px;
            }
            
            .text-4xl-sm {
                font-size: 2.25rem;
                line-height: 2.5rem;
            }

            .text-5xl-sm {
                font-size: 3rem;
                line-height: 1;
            }

            .bg-sm-none {
                background-image: none  
            }
            
            .font-sm-normal{
                font-weight: 400;
            }

            .font-sm-light{

                font-weight: 300;
            } 
            
            .text-sm-left{
                text-align: left;
            }

            .mt-2-sm{
                margin-top: 8px !important;
            }
            .mt-3-sm {
                margin-top: 12px !important;
            }

            .mt-6-sm {
                margin-top: 24px !important;
            }

            .-ml-6-sm {
                margin-left: -24px !important;
            }
            .-mt-12-sm {
                margin-top: -48px !important;
            }
            .h-20-sm {
                height: 20%;
            }	
            .h-40-sm {
                height: 40%;
            }	

            .h-50-sm {
                height: 50%;
            }	

            .h-60-sm {
                height: 60%;
            }

            .h-65-sm {
                height: 65%;
            }

            .h-75-sm {
                height: 75%;
            }

            .h-80-sm {
                height: 80%;
            }    
            .h-90-sm {
                height: 91%;
            }
            .h-full-sm {
                height: 100%;
            }

            .w-full-sm {
                width: 100%;
            }
        }
        
        /* Medium (md) */
        @media (max-width: 768px){
            .carousel-indicators {
                bottom: -32px;
            }    
        
            .pb-60-md{
                padding-bottom: 15rem;
            }   
            
          
        }
        
        /* Large (lg) */
        @media (min-width: 1024px) { 
            .pb-60-lg{
                padding-bottom: 15rem;
            }   

            .ml-72-lg{
                margin-left: 18rem;
            }

            .mr-72-lg{
                margin-right: 18rem;
            }
         }
        
        /* Extra Large (xl) */
        @media (min-width: 1280px) { /* ... */ }

    </style>
    <div class="wrapper wrapper--update-design wrapper--update-design-font"> 
        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'services';
            include($_SERVER['DOCUMENT_ROOT'].'/en/sidebar.php'); 
        ?>

        <?php 
            $lang = 'en';
            $en_link = '#';
            $id_link = '/layanan/devops.php';
            $jp_link = '/jp/services/devops.php';
            include($_SERVER['DOCUMENT_ROOT'].'/en/header.php'); 
        ?>

        <header class="content-wrapper__">
            <div class="text-left --top">
                <div class="container" style="padding:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="/jp/index.php"><span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item" href="/en/services.php"><span itemprop="name">&nbsp;Service</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;DevOps / AWS</span></a>
                                    <meta itemprop="position" content="3" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>      
            <div class="container__">
                <div class="row">
                        <div class="col-md-8 text-left ">
                            <h1 class="text-6xl font-black mt-12 leading-normal text-5xl-sm">Layanan Manajemen <br /> Cloud Server</h1>
                            <h3 class="font-black text-color-primary-main mt-2 ">
                                AWS / GCP / Alibaba Cloud
                            </h3>    
                            <span style="border-bottom: 2px solid white; color : transparent">123456789</span>                                                  
                        </div>
                        <div class="col-md-4">
                    </div>
                </div>
            </div>
        </header>
    </div>       
    
    <!-- Section Description AWS Partner Network -->
    <section class="custom__bg-image-partner-aws bg-sm-none -mt-12-sm">
        <div class="container__ mt-12" >
            <div class="row" >
                <div class="col-md-4">
                    <span style="border-bottom: 2px solid black; color : transparent">123456789</span>    
                    <a href="/"><img src="/img/logo.png" alt="Jasa Pembuatan Website Logique Digital Indonesia" class="img-responsive logo--update-design mt-7"></a>
                    <p class="font-black text-4xl leading-normal mt-4">
                        is a certified AWS partner operating out of IndonesiaEntrust the management of your cloud server with us!
                    </p>
                    <img class="mt-7" src="../../layanan/assets/img/img-devops/logo-aws.webp" alt="AWS badge">
                    <img class="mt-4 hidden-xs hidden-sm" src="../../layanan/assets/img/img-devops/images-dots.webp" alt="Dots">
                </div>
                <div class="col-md-8" >
                    <p class="mt-4 mt-6-sm font-black font-sm-normal ">
                        LOGIQUE provides a complete range of DevOps services for managing Indonesian cloud servers in order to facilitate and increase business agility in bringing products into the market. LOGIQUE is highly experienced in managing cloud servers for a variety of businesses operating out of Indonesia, be it in regards to cloud servers from AWS, GCP, or Alibaba.        
                    </p>
                    <p class=" mt-4 font-black font-sm-normal">
                        We aim to provide DevOps services for your business, seeing to the optimal management of various cloud servers. DevOps (Development and Operations) itself combines aspects of work culture and the appropriate tools that, when combined, serve to improve a company's ability to deliver an application or website at high speeds. Thus, the product development process, be it a website or an application, can be done in a quick and efficient manner.
                    </p>

                    <img class="mt-6 visible-xs visible-sm" src="../../layanan/assets/img/img-devops/images-dots.webp" alt="Dots">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-black text-4xl-sm ">
                        LOGIQUE Provides Cloud Computing Devops Services
                    </h2>
                    <p class="font-black font-sm-normal mt-4">
                        If you are currently building or developing a website, e-commerce platform, or website application that demands reliability, agility, centralized collaboration, stability, business data security, then optimal cloud server services would be highly desired. LOGIQUE aims to assist in providing comprehensive DevOps solutions regarding Indonesian cloud server management for your business.
                    </p>
                    <p  class="font-black font-sm-normal mt-4">
                        Cloud servers are those that are virtually based, hosted, and provided by cloud computing platforms throughout the internet. By using cloud servers, your data or other valuable resources can be sent and accessed easily in a fluid manner from various devices within different locations or even remotely.
                    </p>
                    <p  class="font-black font-sm-normal mt-4 mb-6">
                        LOGIQUE aims to help empower your website, e-commerce platform, or website application, providing much needed support in order to make it compatible with our cloud server management services. Through the professionalism and dedication of whole team, LOGIQUE will provide cloud server management through the best cloud computing service providers, namely:
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section TABS Cloud Server Providers -->
    <?php include './devops-cloud-provider-section.php';?>

     <!-- SECTION SERVICE LIST OF LOGIQUE -->
     <section >
        <div class="container__">
            <div class="row">
                <div class="col-md-12">
                    <img class="mt-7" style="width: 100%; border-radius: 10px;" src="../../layanan/assets/img/img-devops/image-temukan-solusi.webp" alt="Solution">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-7 font-black text-4xl-sm">Find the Best Solutions and Services from LOGIQUE</h2>
                    <p class="mb-6 font-black font-sm-normal  mt-3-sm">
                        In providing DevOps services for the management of Indonesian cloud serves, LOGIQUE is able to offer several solutions for you, namely:
                    </p>
                </div>
            </div>

            <div class="row hidden-xs hidden-sm" >
                <div class="col-sm-4 text-sm-center">
                    <div class="new-box">                        
                        <img src="assets/img/img-devops/icon-billing-service.svg" >                        
                        <h3 class="text-left">Billing Services</h3>
                        <p class="text-left">
                            We issue invoices with taxes in rupiah taken into account so that you no longer need to pay for cloud server services in USD.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-development-service.svg">
                        <h3>Development Services</h3>
                        <p>
                            We provide services in order to build cloud-based systems that are able to help you migrate your system from on-premise servers into cloud servers. 
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-operation-maintenance-service.svg">
                        <h3>Operation and Maintenance Service</h3>
                        <p>
                            You don't need to have in-house IT Support as we provide 24/7 monitoring, technical support, and troubleshooting.
                        </p>
                    </div>
                </div>
            </div>

            <?php include './devops-service-list-mobile.php';?>  

        </div>
    </section>

    <!-- SECTION WHY LOGIQUE ? (CAROUSEL) -->
    <?php include './devops-why-logique-section.php';?>  
    <?php include './devops-why-logique-mobile-section.php';?>   

    <!-- SECTION (CAROUSEL WITH ARROW) --> 
    <?php include './devops-portofolio-section.php';?> 

    <!-- SECTION CALL TO ACTION -->
    <section class="custom_section-cta hidden-xs hidden-sm">    
        <div class="container">
                <div class="row">
                    <div class="col-md-8 text-left ">
                        <p class="text-white mt-4 leading-normal tracking-widest">Contact Us</p>
                        <h3 class="font-black text-white mt-2 ">
                            We’re here to serve you.
                        </h3>    
                    </div>
                    <div class="col-md-4 text-right text-sm-left">
                        <button type="button" class="mt-7 btn custom__button-contact-us" style="background-image: url(../../layanan/assets/img-devops/icon-arrow-right.svg)">
                            <a href="/hubungi-kami.php">
                                <span class="glyphicon glyphicon-arrow-right text-color-black-main mt-1" aria-hidden="true"></span>
                                <span class="font-black text-color-black-main"> &nbsp; Contact Us Now</span>
                            </a>
                        </button>                        
                    </div>
                </div>
            </div>
        </section>
    <a href="/hubungi-kami.php">
        <section class="custom_section-cta-mobile hidden-md hidden-lg"></section>
    </a>
   
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

    //*Feat: Tab
    function openProvider(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
  


    </script>
</body>
</html>
