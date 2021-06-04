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
    <meta name="description" content="Kami menyediakan layanan konstruksi dan operasi sistem pada AWS, GCP, Alibaba Cloud kepada pelanggan di Indonesia. Silahkan hubungi kami jika ada pertanyaan mengenai migrasi ke server cloud, pengembangan sistem baru, agen operasi, agen penagihan, dll. LOGIQUE Digital Indonesia">
    <meta name="keywords" content=" ">
    <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Operasi Struktur Server Cloud | DevOps | Perusahaan Pengembangan Sistem di Jakarta, LOGIQUE Digital Indonesia</title>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="assets/css/style_devops.css" rel="stylesheet">    
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="canonical" href="https://www.logique.co.id/layanan/devops.php"/>      
    <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-105878648-1', 'auto');
	ga('send', 'pageview');

	</script>
    <?php 
        if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') {
            echo "<!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-KQJRS4V');</script>
            <!-- End Google Tag Manager -->";
        }
    ?>

    
    <style>               
        /* Centering image */
        .centering-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        .right-image {
            display: block;
            margin-left: auto;            
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
            background-image: url(assets/img/img-devops/bg-aws-partner.webp); 
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
        }
        
        /* Medium (md) */
        @media (max-width: 768px){
            .carousel-indicators {
                bottom: -32px;
            }        
        }
        
        /* Large (lg) */
        @media (min-width: 1024px) { /* ... */ }
        
        /* Extra Large (xl) */
        @media (min-width: 1280px) { /* ... */ }

        </style>
</head>

<body>
	<?php 
		if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') {
			echo '<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQJRS4V"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->';
		}
	?>  
    <div class="wrapper wrapper--update-design wrapper--update-design-font"> 
        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'services';
            include($_SERVER['DOCUMENT_ROOT'].'/sidebar.php'); 
        ?>

        <?php 
            $lang = 'id';
            $en_link = '/en/services/devops.php';
            $id_link = '#';
            $jp_link = '/jp/services/devops.php';
            include($_SERVER['DOCUMENT_ROOT'].'/header.php'); 
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
                                        itemprop="item" href="/layanan/services.php"><span itemprop="name">&nbsp;layanan</span></a>
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
    <section class="custom__bg-image-partner-aws bg-sm-none -mt-12-sm">
        <div class="container__ mt-12" >
            <div class="row" >
                <div class="col-md-4">

                    <span style="border-bottom: 2px solid black; color : transparent">123456789</span>    
                    <a href="/"><img src="/img/logo.png" alt="Jasa Pembuatan Website Logique Digital Indonesia" class="img-responsive logo--update-design mt-7"></a>
                    <p class="font-black text-4xl leading-normal mt-2">
                        telah disertifikasi sebagai mitra AWS di Indonesia Percayakan pengelolaan cloud server Anda bersama kami!
                    </p>
                    <img class="mt-7" src="assets/img/img-devops/logo-aws.webp" alt="AWS badge">
                    <img class="mt-4 hidden-xs hidden-sm" src="assets/img/img-devops/images-dots.webp" alt="Dots">
                </div>
                <div class="col-md-8" >
                    <p class="mt-4 font-black">
                        LOGIQUE menyediakan layanan lengkap DevOps pada manajemen cloud server Indonesia untuk memudahkan dan meningkatkan ketangkasan bisnis dalam membawa produk ke pasar. LOGIQUE sudah sangat berpengalaman dalam mengelola cloud server untuk berbagai jenis bisnis di Indonesia baik itu dengan cloud server dari AWS, GCP, ataupun Alibaba.                
                    </p>
                    <p class=" mt-4 font-black">
                        Untuk pengelolaan cloud server yang optimal, kami memberikan layanan DevOps untuk bisnis Anda. DevOps (Development dan Operations) sendiri merupakan kombinasi dari culture, praktik, dan alat yang digabungkan untuk meningkatkan kemampuan sebuah perusahaan untuk proses delivery aplikasi ataupun website dengan kecepatan yang tinggi. Dengan demikian, proses pengembangan produk baru baik itu website ataupun aplikasi memungkinkan untuk dilakukan dengan cepat.
                    </p>

                    <img class="mt-4 visible-xs visible-sm" src="assets/img/img-devops/images-dots.webp" alt="Dots">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-black">
                        Layanan Devops untuk Cloud Computing yang Disediakan LOGIQUE
                    </h2>
                    <p class="font-black font-sm-normal mt-4">
                        Jika saat ini Anda sedang membangun atau mengembangkan situs website, e-commerce, ataupun aplikasi website yang menuntut keandalan, ketangkasan, kolaborasi terpusat, stabilitas, dan keamanan data bisnis, maka Anda membutuhkan layanan cloud server yang bekerja secara optimal. LOGIQUE hadir untuk membantu menyediakan solusi DevOps secara lengkap untuk manajemen cloud server Indonesia bagi bisnis Anda. 
                    </p>
                    <p  class="font-black font-sm-normal mt-4">
                        Cloud server adalah server berbentuk virtual yang dibangun, dihosting, dan dikirimkan oleh platform komputasi awan melalui internet. Dengan menggunakan cloud server, maka data ataupun sumber daya lain dapat tersebar dan dapat diakses dengan mudah dari berbagai perangkat di lokasi berbeda ataupun dari jarak jauh.
                    </p>
                    <p  class="font-black font-sm-normal mt-4 mb-6">
                        LOGIQUE dapat membantu Anda untuk memberdayakan website, e-commerce, ataupun aplikasi website Anda dan memberikan dukungan yang sangat dibutuhkan untuk dapat menjalankannya dengan layanan manajemen cloud server yang kami miliki. Dengan profesionalitas dan pengalaman tim, LOGIQUE menyediakan pengelolaan cloud server dari penyedia layanan cloud computing terbaik yaitu:
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
                    <img class="mt-7" style="width: 100%; border-radius: 10px;" src="assets/img/img-devops/image-temukan-solusi.webp" alt="Solution">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-7 font-black">Temukan Solusi dan Layanan Terbaik dari LOGIQUE</h2>
                    <p class="mb-6 font-black">
                        Dalam memberikan layanan DevOps untuk pengelolaan cloud server Indonesia, LOGIQUE menawarkan beberapa solusi untuk Anda, yaitu:
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 text-sm-center">
                    <div class="new-box">                        
                        <img src="assets/img/img-devops/icon-billing-service.svg" >                        
                        <h3 class="text-left">Layanan Penagihan</h3>
                        <p class="text-left">
                            Kami mengeluarkan tagihan bersama Faktur Pajak dalam Rupiah sehingga Anda tidak perlu membayar ke AWS dalam USD.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-development-service.svg">
                        <h3>Layanan Pengembangan</h3>
                        <p>
                            Kami menyediakan layanan untuk membangun sistem berbasis cloud dan memigrasikan sistem Anda dari server on-premise ke server cloud.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-operation-maintenance-service.svg">
                        <h3>Layanan Operasi dan Pemeliharaan</h3>
                        <p>
                            Anda tidak perlu memiliki IT Support internal. Kami menyediakan pemantauan 24/7, dukungan teknis, dan troubleshooting.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION WHY LOGIQUE ? (CAROUSEL) -->
    <?php include './devops-why-logique-section.php';?>  
    <?php include './devops-why-logique-mobile-section.php';?>    

   
    <!-- SECTION (CAROUSEL WITH ARROW) --> 
    <?php include './devops-portofolio-section.php';?>

     <!-- SECTION CALL TO ACTION -->
    <section class="custom_section-cta">
        <div class="container">
                <div class="row">
                    <div class="col-md-8 text-left ">
                        <p class="text-white mt-4 leading-normal tracking-widest">Contact Us</p>
                        <h3 class="font-black text-white mt-2 ">
                            We’re here to serve you.
                        </h3>    
                    </div>
                    <div class="col-md-4 text-right text-sm-left">
                        <button type="button" class="mt-7 btn custom__button-contact-us" style="background-image: url(assets/img-devops/icon-arrow-right.svg)">
                            <a href="/hubungi-kami.php">
                                <span class="glyphicon glyphicon-arrow-right text-color-black-main mt-1" aria-hidden="true"></span>
                                <span class="font-black text-color-black-main"> &nbsp; Contact Us Now</span>
                            </a>
                        </button>                        
                    </div>
                </div>
            </div>
    </section>
    
    <?php include '../footer.php'; ?>    
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
