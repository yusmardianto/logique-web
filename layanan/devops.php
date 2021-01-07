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
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> -->
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="canonical" href="https://www.logique.co.id/layanan/devops.php"/>  
    <!-- <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet"> -->
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
    <style>
        @media only screen (max-width: 414px) {
            .breadcrumb {
                padding-left: 15px;
            }
        }
    </style>
    <div class="wrapper wrapper--update-design wrapper--update-design-font"> 
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
                 <div class="logique-nav logique-nav--update">
                     <div class="margin-for-nav">
                         <div class="text-center">
                             <a href="/">
                                 <div class="img-home"></div>
                                 Beranda
                             </a>
                         </div>
                         <div class="text-center">
                             <a href="/logique.php">
                                 <div class="img-about"></div>
                                 Tentang Kami
                             </a>
                         </div>
                         <div class="text-center">
                             <a href="/portofolio.php">
                                 <div class="img-portfolio"></div>
                                 Portfolio
                             </a>
                         </div>
                         <div class="text-center active">
                             <a href="/layanan.php">
                                 <div class="img-services"></div>
                                 Layanan
                             </a>
                         </div>
                         <div class="text-center">
                             <a href="/produk.php">
                                 <div class="img-product"></div>
                                 Produk
                             </a>
                         </div>
                         <div class="text-center">
                             <a href="/career/">
                                 <div class="img-career"></div>
                                 Karir
                             </a>
                         </div>
                         <div class="text-center">
                             <a href="/hubungi-kami.php">
                                 <div class="img-contact"></div>
                                 Hubungi Kami
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
                    <div class="col-md-offset-1 col-md-10 m-t-2em">
                        <h1 class="text-center title-text"> Layanan Manajemen Server Cloud<span>AWS / GCP / Alibaba Cloud</span></h1>
                        <div class="subtitle-header text-center">
                            <div class="line-title"></div>
                            <p>LOGIQUE Menyediakan layanan penuh DevOps pada Server Cloud dan <br>mempunyai banyak pengalaman dengan perusahaan di Indonesia
                            </p>

                            <p style="color: #ffca00"><strong>LOGIQUE disertifikasi sebagai mitra AWS di Indonesia</strong></p>
                             <div class="badge-container text-center">
                                <img src="assets/img/img-devops//aws-badge.svg" alt="AWS badge">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div> 
    <section class="service-list"  >
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-billing-service.svg">
                        <h3>Layanan Penagihan</h3>
                        <p>
                            Kami mengeluarkan tagihan bersama Faktur Pajak dalam Rupiah sehingga Anda tidak perlu membayar ke AWS dalam USD.
                        </p>
                        <!-- <img src="assets/img/img-devops/icon-arrow-right.svg" class="small-icon"> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-development-service.svg">
                        <h3>Layanan Pengembangan</h3>
                        <p>
                            Kami menyediakan layanan untuk membangun sistem berbasis cloud dan memigrasikan sistem Anda dari server on-premise ke server cloud.
                        </p>
                        <!-- <img src="assets/img/img-devops/icon-arrow-right.svg" class="small-icon"> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-operation-maintenance-service.svg">
                        <h3>Layanan Operasi dan Pemeliharaan</h3>
                        <p>
                            Anda tidak perlu memiliki IT Support internal. Kami menyediakan pemantauan 24/7, dukungan teknis, dan troubleshooting.
                        </p>
                        <!-- <img src="assets/img/img-devops/icon-arrow-right.svg" class="small-icon"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-devops-works">
        <div class="container">
            <h2 class="text-center" >Contoh Operasi Server Cloud DevOps</h2>
            <div class="devops-list-container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="devops-work-item">
                            <div class="img-container">
                                <img src="assets/img/img-devops/jba-logo.png" class="img-responsive">
                            </div>
                            <div class="devops-desc">
                                Kami telah menyediakan layanan untuk JBA sejak sistem mereka dimigrasikan ke server cloud pada tahun 2013 dan kami telah beroperasi tanpa ada masalah besar.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="devops-work-item">
                            <div class="img-container">
                                <img src="assets/img/img-devops/confidential-img.png" class="img-responsive">
                            </div>
                            <div class="devops-desc">
                                Kami telah membangun serta mengelola sistem pada server Alibaba Cloud untuk perusahaan asuransi asing terkemuka dan Alibaba Cloud di Indonesia sudah memenuhi persyaratan OJK.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="devops-work-item">
                            <div class="img-container">
                                <img src="assets/img/img-devops/confidential-img.png" class="img-responsive">
                            </div>
                            <div class="devops-desc">
                                Kami mengembangkan Marketplace pada AWS untuk industri otomotif dan kami terus mengoptimalkan konfigurasi dan kinerja server.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-container text-center">
                <a href="../contact.php" class="btn-contact">Hubungi Kami Sekarang </a>
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
