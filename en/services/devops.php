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
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="assets/css/style_devops.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet">
    <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-105878648-1', 'auto');
	ga('send', 'pageview');

	</script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>

<body>
    <style>
    @media only screen (max-width: 414px) {
        .breadcrumb {
            padding-left: 15px;
        }
    }
    </style>
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
                <div class="collapse navbar-collapse" id="myNavbar">
                 <div class="backdrop-test"></div>
                 <div class="logique-nav logique-nav--update">
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
        </div>
        <!-- NAVIGATION -->

        <!-- HEADER -->
        <div class="container-fluid">
            <div class="row lang-logo--update-design">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-11">
                            <div class="container">
                                <ul class="list-inline">
                                    <li class="active"><a href="/en/services/devops.php">EN</a></li>
                                    <li ><a href="/layanan/devops.php">ID</a></li>
                                    <li ><a href="/jp/services/devops.php">JP</a></li>
                                </ul>
                                <a href="/jp/index.php"><img src="/../img/logo.png" alt="Logo"
                                        class="img-responsive logo--update-design" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER -->

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
                    <div class="col-md-offset-1 col-md-10 m-t-2em">
                        <h1 class="text-center title-text"> Server Cloud Management Service<span>AWS / GCP / Alibaba Cloud</span></h1>
                        <div class="subtitle-header text-center">
                            <div class="line-title"></div>
                            <p>LOGIQUE provides fully managed DevOps services on Cloud Servers and<br> have plenty of experiences with companies in Indonesia
                            </p>

                            <p style="color: #ffca00"><strong>LOGIQUE is a certified AWS partner in Indonesia</strong></p>
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
                        <h3>Billing Service</h3>
                        <p>
                            We issue an invoice to you with Faktur Pajak in Indonesian Rupiah instead of paying directly to AWS in USD.
                        </p>
                       <!--  <img src="assets/img/img-devops/icon-arrow-right.svg" class="small-icon"> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-development-service.svg">
                        <h3>Layanan Pengembangan</h3>
                        <p>
                             We provide services to build a cloud-based environment and migrate your system from on-premise servers to cloud server. 
                        </p>
                        <!-- <img src="assets/img/img-devops/icon-arrow-right.svg" class="small-icon"> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-operation-maintenance-service.svg">
                        <h3>Development Service</h3>
                        <p>
                            You do not need to have your own IT support resources. We provide 24/7 monitoring, technical support and troubleshooting.
                        </p>
                       <!--  <img src="assets/img/img-devops/icon-arrow-right.svg" class="small-icon"> -->
                    </div>
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
