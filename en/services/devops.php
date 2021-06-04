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
     <meta property="og:description" content="We provide AWS, GCP, Alibaba Cloud environment  construction and operation services to Indonesian customers. Please feel free to contact us for enquiries regarding migration to cloud server, new system development, operation agency, billing agency, etc. LOGIQUE Digital Indonesia">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Cloud Server Structure Operation | DevOps | System Development Company in Jakarta, LOGIQUE Digital Indonesia</title>

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
    @media only screen (max-width: 414px) {
        .breadcrumb {
            padding-left: 15px;
        }
    }
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
                        <h1 class="text-6xl font-black mt-12 leading-normal">Layanan Manajemen <br /> Cloud Server</h1>
                        <h3 class="font-black text-color-primary-main mt-2 ">
                            AWS / GCP / Alibaba Cloud
                        </h3>    
                        <span style="border-bottom: 2px solid white; color : transparent">123456789</span>                                                  
                    </div>
                    <div class="col-md-4">
                </div>
            </div>
        </header>
    </div> 
     <!-- Section Description AWS Partner Network -->
     <section style="background-image: url(assets/img/img-devops/bg-aws-partner.webp); background-repeat: no-repeat; background-position: top right; ">
        <div class="container__ mt-12" >
            <div class="row" >
                <div class="col-md-4">

                    <span style="border-bottom: 2px solid black; color : transparent">123456789</span>    
                    <a href="/"><img src="/img/logo.png" alt="Jasa Pembuatan Website Logique Digital Indonesia" class="img-responsive logo--update-design mt-7"></a>
                    <p class="font-black text-4xl leading-normal mt-2">
                        telah disertifikasi sebagai mitra AWS di Indonesia Percayakan pengelolaan cloud server Anda bersama kami!
                    </p>
                    <img class="mt-7" src="../../layanan/assets/img/img-devops/logo-aws.webp" alt="AWS badge">
                    <img class="mt-4" src="../../layanan/assets/img/img-devops/images-dots.webp" alt="Dots">
                </div>
                <div class="col-md-8" >
                    <p class="mt-4 font-black">
                        LOGIQUE menyediakan layanan lengkap DevOps pada manajemen cloud server Indonesia untuk memudahkan dan meningkatkan ketangkasan bisnis dalam membawa produk ke pasar. LOGIQUE sudah sangat berpengalaman dalam mengelola cloud server untuk berbagai jenis bisnis di Indonesia baik itu dengan cloud server dari AWS, GCP, ataupun Alibaba.                
                    </p>
                    <p class=" mt-4 font-black">
                        Untuk pengelolaan cloud server yang optimal, kami memberikan layanan DevOps untuk bisnis Anda. DevOps (Development dan Operations) sendiri merupakan kombinasi dari culture, praktik, dan alat yang digabungkan untuk meningkatkan kemampuan sebuah perusahaan untuk proses delivery aplikasi ataupun website dengan kecepatan yang tinggi. Dengan demikian, proses pengembangan produk baru baik itu website ataupun aplikasi memungkinkan untuk dilakukan dengan cepat.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-black">
                        Layanan Devops untuk Cloud Computing yang Disediakan LOGIQUE
                    </h2>
                    <p class="font-black mt-4">
                        Jika saat ini Anda sedang membangun atau mengembangkan situs website, e-commerce, ataupun aplikasi website yang menuntut keandalan, ketangkasan, kolaborasi terpusat, stabilitas, dan keamanan data bisnis, maka Anda membutuhkan layanan cloud server yang bekerja secara optimal. LOGIQUE hadir untuk membantu menyediakan solusi DevOps secara lengkap untuk manajemen cloud server Indonesia bagi bisnis Anda. 
                    </p>
                    <p  class="font-black mt-4">
                        Cloud server adalah server berbentuk virtual yang dibangun, dihosting, dan dikirimkan oleh platform komputasi awan melalui internet. Dengan menggunakan cloud server, maka data ataupun sumber daya lain dapat tersebar dan dapat diakses dengan mudah dari berbagai perangkat di lokasi berbeda ataupun dari jarak jauh.
                    </p>
                    <p  class="font-black mt-4 mb-6">
                        LOGIQUE dapat membantu Anda untuk memberdayakan website, e-commerce, ataupun aplikasi website Anda dan memberikan dukungan yang sangat dibutuhkan untuk dapat menjalankannya dengan layanan manajemen cloud server yang kami miliki. Dengan profesionalitas dan pengalaman tim, LOGIQUE menyediakan pengelolaan cloud server dari penyedia layanan cloud computing terbaik yaitu:
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="our-devops-works">
        <div class="container">
            <h2 class="text-center" >Cloud Server DevOps Works</h2>
            <div class="devops-list-container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="devops-work-item">
                            <div class="img-container">
                                <img src="assets/img/img-devops/jba-logo.png" class="img-responsive">
                            </div>
                            <div class="devops-desc">
                                We have provided services for JBA since their system was migrated to the cloud servers in 2013 and we have been operating without any major problems.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="devops-work-item">
                            <div class="img-container">
                                <img src="assets/img/img-devops/confidential-img.png" class="img-responsive">
                            </div>
                            <div class="devops-desc">
                               We have built and maintained a system on Alibaba Cloud server for a leading foreign-owned insurance company. Alibaba Cloud in Indonesia meets the requirement of OJK.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="devops-work-item">
                            <div class="img-container">
                                <img src="assets/img/img-devops/confidential-img.png" class="img-responsive">
                            </div>
                            <div class="devops-desc">
                                We developed a Marketplace on AWS for an automotive industry. We have been optimizing the configurations and performance of the server.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-container text-center">
                <a href="../contact.php" class="btn-contact">Contact Us Now</a>
            </div>
        </div>
    </section>
    
   <!--  <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section> -->
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
</body>
</html>
