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
    <meta name="description" content="インドネシアのお客様にAWS、GCP、Alibabaクラウド環境を構築運用サービスを提供しています。クラウドサーバーへの移行、新規システムの開発、運用代行、請求代行などお気軽にご相談ください。LOGIQUE Digital Indonesia">
    <meta name="keywords" content=" ">
    <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
       <meta property="og:title" content="クラウドサーバー構築運用 | DevOps | ジャカルタのシステム開発会社LOGIQUEデジタルインドネシア">
     <meta property="og:type" content="website">
     <meta itemprop="name" content="PT. Logique Digital Indonesia">
     <meta property="og:site_name" content="Logique">
     <meta property="og:url" content="https://www.logique.co.id/jp/services/devops.php">
     <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
     <meta property="og:description" content="インドネシアのお客様にAWS、GCP、Alibabaクラウド環境を構築運用サービスを提供しています。クラウドサーバーへの移行、新規システムの開発、運用代行、請求代行などお気軽にご相談ください。LOGIQUE Digital Indonesia">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="canonical" href="https://www.logique.co.id/jp/services/devops.php"/>
    <title>クラウドサーバー構築運用 | DevOps | ジャカルタのシステム開発会社LOGIQUEデジタルインドネシア</title>

    <link rel="preconnect" href="https://ajax.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://www.google-analytics.com">

    <link href="/fonts/Novecentosanswide-Medium.otf" rel="preload" as="font" crossorigin/>

    <!-- bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="assets/css/style_devops.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> -->
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
</head>

<body>
    <style>
    @media only screen (max-width: 414px) {
        .breadcrumb {
            padding-left: 15px;
        }
    }
    </style>
    <div class="wrapper wrapper--update-design wrapper--update-design-font --jp"> 
        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'services';
            include($_SERVER['DOCUMENT_ROOT'].'/jp/sidebar.php'); 
        ?>

        <?php 
            $lang = 'jp';
            $en_link = '/en/services/devops.php';
            $id_link = '/layanan/devops.php';
            $jp_link = '#';
            include($_SERVER['DOCUMENT_ROOT'].'/jp/header.php'); 
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
                                        itemprop="item" href="/jp/services.php"><span itemprop="name">&nbsp;サービス</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;クラウドサーバー構築運用 / AWS</span></a>
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
                        <h1 class="text-center title-text"> クラウドサーバー構築運用サービス <span>AWS / GCP / Alibaba Cloud</span></h1>
                        <div class="subtitle-header text-center">
                            <div class="line-title"></div>
                            <p>豊富な導入実績があります。設計・構築から運用保守まで、インドネシア法人がク<br>ラウドサーバーを利用するあらゆるニーズに対応するフルマネージド・サービス。
                            </p>

                            <p style="color: #ffca00"><strong>LOGIQUEはAWSのインドネシアでのパートナーとして認定されています。</strong></p>
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
                        <h3>請求代行サービス</h3>
                        <p>
                            インドネシアルピア建てでFaktur Pajakと併せた請求書の発行をいたします。
                        </p>
                        <!-- <img src="assets/img/img-devops/icon-arrow-right.svg" class="small-icon"> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-development-service.svg">
                        <h3>構築サービス</h3>
                        <p>
                            オンプレミス環境で動いているシステムのクラウドサーバーへの移行など、クラウド環境を構築します。
                        </p>
                        <!-- <img src="assets/img/img-devops/icon-arrow-right.svg" class="small-icon"> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-operation-maintenance-service.svg">
                        <h3>運用保守サービス</h3>
                        <p>
                            お客様社内で運用保守リソースをもつ必要がありません。障害発生時も24時間365日のフルサポート。
                        </p>
                        <!-- <img src="assets/img/img-devops/icon-arrow-right.svg" class="small-icon"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-devops-works">
        <div class="container">
            <h2 class="text-center" >クラウドサーバー構築運用事例</h2>
            <div class="devops-list-container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="devops-work-item">
                            <div class="img-container">
                                <picture>
                                    <source srcset="assets/img/img-devops/jba-logo.webp">
                                    <img src="assets/img/img-devops/jba-logo.png" class="img-responsive mx-auto">
                                </picture>
                            </div>
                            <div class="devops-desc">
                                2013年にクラウドサーバーを構築して移行して以来保守運用、請求代行サービスを行っています。大きなトラブルなく運用できています。
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="devops-work-item">
                            <div class="img-container">
                                <picture>
                                    <source srcset="assets/img/img-devops/confidential-img.webp">
                                    <img src="assets/img/img-devops/confidential-img.png" class="img-responsive mx-auto">                                
                                </picture>
                            </div>
                            <div class="devops-desc">
                                某大手保険会社のWebサーバーをAlibabaクラウド内に構築運用しています。インドネシア国内でサーバーを運用するルールに則ったものです。
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="devops-work-item">
                            <div class="img-container">
                                <picture>
                                    <source srcset="assets/img/img-devops/confidential-img.webp">
                                    <img src="assets/img/img-devops/confidential-img.png" class="img-responsive mx-auto">                                
                                </picture>
                            </div>
                            <div class="devops-desc">
                                マーケットプレイスをAWSに構築。サイトの成長に合わせサーバー構成をチューニングしながら保守運用している。
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-container text-center">
                <a href="../contact.php" class="btn-contact">お問い合わせ </a>
            </div>
        </div>
    </section>

    
    <!-- <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section> -->
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
