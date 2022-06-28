<?php
require_once("./form/fgcontactform.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient(['info@logique.co.id']); //<<---Put your email address here

//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');

//$formproc->AddFileUploadField('photo','jpg,jpeg,pdf,doc,docx',40960);

if (isset($_POST['submitted'])) {
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $secret = '6LcuHywUAAAAAEfJ-sZem8CzGVYIUMcxoT0jRhtW';
        // $secret = '6Lf3pA8UAAAAAEECs5-RC010LQ3ehBt76aKv8Rxb';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        // print_r($verifyResponse); exit;
        $responseData = json_decode($verifyResponse);
        if ($responseData->success) {
            if ($formproc->ProcessForm()) {
                $msg = "<div class='alert alert-success' id='msg' role='alert'>Thank you for sending us inquiry!</div>";
            }
        } else {
            $msg = "<div class='alert alert-warning' id='msg' role='alert'>reCAPTCHA verification failed, please try again.</div>";
        }
    } else {
        $msg = "<div class='alert alert-warning' id='msg' role='alert'>Please click the reCAPTCHA box.</div>";
    }
}

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description" content="Tertarik untuk pengembangan website, aplikasi web & mobile app, jasa digital marketing, seo atau hanya ingin berkonsultasi terkait bisnis digital? Hubungi Kami.">
    <meta name="keywords" content="pengembangan sistem web, digital marketing, pembuatan aplikasi android, media sosial, sistem aplikasi, hubungi kami, pembuatan website, konten, pemasaran, konsultasi, seo">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Hubungi Kami Untuk Kebutuhan Bisnis Digital Anda | LOGIQUE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/hubungi-kami.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/contact-us.png">
    <meta property="og:description" content="Tertarik untuk pengembangan website, aplikasi web & mobile app, jasa digital marketing, seo atau hanya ingin berkonsultasi terkait bisnis digital? Hubungi Kami.">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>Hubungi Kami Untuk Kebutuhan Bisnis Digital Anda | LOGIQUE</title>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/css/sidebar-update.css">
    <link rel="stylesheet" href="/css/newstyle.css">
    <link rel="stylesheet" href="/css/style-contact.css">
    <link href="/css/style-revamp.css" rel="stylesheet">

    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link rel="canonical" href="https://www.logique.co.id/hubungi-kami.php" />

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
<style>
    .breadcrumb-position {
        position: relative;
        left: -8em;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

    .breadcrumb>li,
    .breadcrumb li a {
        color: #ffd02a;
        font-size: medium;
    }

    .breadcrumb>.active,
    .breadcrumb li.active a {
        color: #000;
    }

    .text-left {
        text-align: left;
    }

    #contentsArea {
        z-index: 4;
        width: 100%;
        max-width: unset !important;
        min-height: 100%;
    }

    .d-title {
        font-size: x-large;
    }

    .d-description {
        font-size: large;
        margin-top: 5%;
        margin-bottom: 1em;
    }

    .c-label {
        font-weight: 500;
    }

    .contact-us-cont {
        font-size: large;
        margin-bottom: 1em;
        padding: 1em;
    }

    .img-vector {
        width: 100%;
        height: 200px;
        object-fit: scale-down;
        margin-top: 5%;
    }

    .panel-heading {
        cursor: pointer;
    }

    .panel-body {
        padding: 1em 2em;
    }

    .box-link {
        color: #000;
    }

    .box-link:hover {
        opacity: 1;
        color: #000;
    }

    .yellow-box:hover {
        background: #ffc6007a;
    }

    /* Custom Checkbox */
    .checkbox label {
        padding-left: 0;
    }

    .checkbox label:after {
        content: '';
        display: table;
        clear: both;
    }

    .checkbox .cr {
        position: relative;
        display: inline-block;
        border: 1px solid #a9a9a9;
        border-radius: .25em;
        width: 1.7em;
        height: 1.7em;
        float: left;
        margin-right: .5em;
    }

    .checkbox .cr .cr-icon {
        position: absolute;
        font-size: .8em;
        line-height: 0;
        top: 50%;
        left: 15%;
    }

    .checkbox label input[type="checkbox"] {
        display: none;
    }

    .checkbox label input[type="checkbox"]+.cr>.cr-icon {
        opacity: 0;
    }

    .checkbox label input[type="checkbox"]:checked+.cr>.cr-icon {
        opacity: 1;
    }

    .checkbox label input[type="checkbox"]:disabled+.cr {
        opacity: .5;
    }

    .contact-title-copies {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        background: #f4f4f4;
        padding: 10px 25%;
        line-height: 1.3;
    }

    .form-container {
        padding-left: 95px;
    }

    .yellow-box {
        padding: 24px 0;
        background: #f4ce58;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        border: 2px solid black;
        border-radius: 10%;
    }

    .img-box {
        width: 100%;
        height: 150px;
        object-fit: scale-down;
    }

    .float-box {
        position: relative;
        top: -150px;
    }

    .panel-group .panel {
        margin-bottom: 0;
        border-radius: 0;
        border: none;
    }

    .panel-default>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #fff;
    }

    /* Timeline */
    .timeline,
    .timeline-horizontal {
        list-style: none;
        padding: 20px;
        position: relative;
    }

    .timeline:before {
        top: 40px;
        bottom: 0;
        position: absolute;
        content: "";
        width: 3px;
        background-color: #000;
        left: 50%;
        margin-left: -1.5px;
    }

    .timeline .timeline-item {
        margin-bottom: 20px;
        position: relative;
    }

    .timeline .timeline-item:before,
    .timeline .timeline-item:after {
        content: "";
        display: table;
    }

    .timeline .timeline-item:after {
        clear: both;
    }

    .timeline .timeline-item .timeline-badge {
        color: #fff;
        /* width: 54px;
            height: 54px; */
        content: '';
        padding: 6px;
        line-height: 52px;
        font-size: 22px;
        text-align: center;
        position: absolute;
        top: 18px;
        left: 50%;
        margin-left: -25px;
        background-color: #7c7c7c;
        border: 3px solid #000;
        z-index: 2;
        border-top-right-radius: 50%;
        border-top-left-radius: 50%;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 50%;
    }

    .timeline .timeline-item .timeline-badge i,
    .timeline .timeline-item .timeline-badge .fa,
    .timeline .timeline-item .timeline-badge .glyphicon {
        top: 2px;
        left: 0px;
    }

    .timeline .timeline-item .timeline-badge.primary {
        background-color: #000;
    }

    .timeline .timeline-item .timeline-badge.info {
        background-color: #000;
    }

    .timeline .timeline-item .timeline-badge.success {
        background-color: #000;
    }

    .timeline .timeline-item .timeline-badge.warning {
        background-color: #000;
    }

    .timeline .timeline-item .timeline-badge.danger {
        background-color: #000;
    }

    .timeline .timeline-item .timeline-panel {
        position: relative;
        width: 46%;
        height: 60%;
        float: left;
        right: 16px;
        border: 1px solid #000;
        background: #ffffff;
        border-radius: 10px;
        padding: 20px;
        -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    }

    .timeline .timeline-item .timeline-panel:before {
        position: absolute;
        top: 26px;
        right: -16px;
        display: inline-block;
        border-top: 16px solid transparent;
        border-left: 16px solid transparent;
        border-right: 0 solid #c0c0c0;
        border-bottom: 16px solid transparent;
        content: " ";
    }

    .timeline .timeline-item .timeline-panel .timeline-title {
        margin-top: 0;
        color: inherit;
    }

    .timeline .timeline-item .timeline-panel .timeline-body>p,
    .timeline .timeline-item .timeline-panel .timeline-body>ul {
        margin-bottom: 0;
    }

    .timeline .timeline-item .timeline-panel .timeline-body>p+p {
        margin-top: 5px;
    }

    .timeline .timeline-item:last-child:nth-child(even) {
        float: right;
    }

    .timeline .timeline-item:nth-child(even) .timeline-panel {
        float: right;
        left: 16px;
    }

    .timeline .timeline-item:nth-child(even) .timeline-panel:before {
        border-left-width: 0;
        border-right-width: 14px;
        left: -14px;
        right: auto;
    }

    .timeline-horizontal {
        list-style: none;
        position: relative;
        padding: 20px 0px 20px 0px;
        display: inline-block;
    }

    .timeline-horizontal:before {
        height: 3px;
        top: auto;
        bottom: 26px;
        left: 0;
        right: 0;
        width: 100%;
        margin-bottom: 20px;
    }

    .timeline-horizontal .timeline-item {
        display: table-cell;
        height: 400px;
        width: 20%;
        min-width: 260px;
        float: none !important;
        padding-left: 0px;
        padding-right: 20px;
        margin: 0 auto;
        vertical-align: bottom;
    }

    .timeline-horizontal .timeline-item .timeline-panel {
        top: auto;
        bottom: 64px;
        display: inline-block;
        float: none !important;
        left: 0 !important;
        right: 0 !important;
        width: 100%;
        margin-bottom: 20px;
    }

    .timeline-horizontal .timeline-item .timeline-panel:before {
        top: auto;
        bottom: -16px;
        left: 28px !important;
        right: auto;
        border-right: 16px solid transparent !important;
        border-top: 16px solid #000 !important;
        border-bottom: 0 solid #000 !important;
        border-left: 16px solid transparent !important;
    }

    .timeline-horizontal .timeline-item:before,
    .timeline-horizontal .timeline-item:after {
        display: none;
    }

    .timeline-horizontal .timeline-item .timeline-badge {
        top: auto;
        bottom: 18px;
        left: 60px;
    }

    .abs-box {
        background: #000;
        color: #fff;
        border-radius: 10px;
        padding: 15px 20px;
        position: absolute;
        bottom: 6px;
        right: -12px;
        left: 24px;
        height: 130px;
        font-size: 14px;
    }

    .lang-logo {
        float: right;
        position: unset;
    }

    @media (max-width: 1024px) {
        .breadcrumb-position {
            left: -6em;
        }

        .contact-us-cont {
            width: 100%;
        }

        .contact-title-copies {
            margin-left: 70px;
        }

        .form-container {
            padding-left: 95px;
        }

        .float-box {
            top: -120px;
        }
    }

    @media screen and (max-width: 979px) {
        #contentsArea {
            width: auto;
            max-width: none;
            margin: -18px 0 0 80px;
            padding: 0
        }

        .contact-title-copies {
            margin-left: 0;
        }

        .form-container {
            padding: 0 15px 30px;
        }

        .img-box {
            height: 50px;
            padding: 0 12px;
        }

        .float-box {
            top: -95px;
        }

        .lang-logo {
            margin-top: 0;
        }
    }

    .overflow-auto {
        display: inline-block;
        width: 100%;
        overflow-y: auto;
    }

    .overflow-auto::-webkit-scrollbar {
        height: 6px;
        /* background: transparent; make scrollbar transparent */
    }

    .overflow-auto::-webkit-scrollbar-thumb {
        background: #f4ce58;
    }

    .overflow-auto::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.5);
    }

    @media only screen and (max-width: 768px) {
        .breadcrumb-position {
            left: -5em;
        }

        .d-title {
            font-size: small;
        }

        .d-description {
            font-size: 12px;
        }

        .img-vector {
            height: 150px;
        }

        .contact-us-cont {
            width: 100%;
        }

        .d-title-large {
            font-size: larger;
        }
    }

    @media (max-width: 767px) {
        #contentsArea {
            margin: unset;
        }

        .breadcrumb-position {
            left: -4em;
        }

        .collapse.in .logique-nav {
            margin-right: 0;
            padding-top: 1.2em;
        }

        .wrapper .navbar-toggle {
            margin-top: 1.2em;
        }
    }

    @media screen and (max-width: 480px) {
        .wrapper .navbar-toggle {
            margin-top: 0;
        }

        #contentsArea {
            margin: unset;
        }

        .breadcrumb-position {
            left: -85px;
            top: -15px;
        }

        .float-box {
            top: -80px;
        }

        .lang-logo {
            float: left;
        }

        .checkbox label {
            font-size: small;
            font-weight: 500;
        }

        .checkbox .cr {
            width: 1.7em;
            height: 1.7em;
        }
    }
</style>

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
        $active = 'contact';
        include($_SERVER['DOCUMENT_ROOT'] . '/sidebar.php');
        ?>

        <?php
        $lang = 'id';
        $en_link = '/en/contact.php';
        $id_link = '#';
        $jp_link = '/jp/contact.php';
        include($_SERVER['DOCUMENT_ROOT'] . '/header.php');
        ?>

        <!-- <br /> -->

        <div class="content-wrapper__" id="contents">

            <section class="--top" style="background-color: #f4f4f4;">
                <div class="container__" style="padding:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="index.php"><span itemprop="name">Beranda</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"><span itemprop="name">&nbsp;Hubungi Kami</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section style="background-color: #f4f4f4;">
                <div class="container__ text-center" style="padding-bottom:0">
                    <h1 class="title-index" style="border-bottom: 12px solid #f4ce58; padding-bottom: 3px; width: max-content; margin: auto;">
                        Hubungi Kami
                    </h1>
                    <div class="bg-grey" style="padding-top: 10px;">
                        <div class="contact-us-cont">
                            Kami berupaya meningkatkan kualitas setiap website agar dapat menjadi channel pemasaran yang mampu memikat pelanggan dan meningkatkan penjualan.<br>
                            Kami telah memiliki keberhasilan dalam meluncurkan bisnis baru dengan memanfaatkan teknologi terkini berbasis internet & AI. Sistem manajemen internal menjadi faktor kunci dan kami selalu berusaha untuk membangun sistem internal yang memenuhi standar kualifikasi yang dibutuhkan.<br>
                            Disamping itu, optimasi digital marketing yang efisien pun kami lakukan guna meningkatkan daya saing pada semua bidang bisnis di Indonesia.<br>
                            Kami ingin menerapkan setiap pengelolaan dan pemeliharaan sistem web yang kami miliki pada setiap perusahaan di Indonesia.<br>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--black">
                <div class="container__" style="padding-top:0;padding-bottom:0">
                    <div class="row" style="height: fit-content; background: #000; padding: 0 15px 30px">
                        <div class="col-md-4 col-sm-4 col-xs-12 clearfix" style="margin-bottom: 1em;"><br>
                            <img class="img-vector" src="img/vector_smart_object.png" alt="">
                        </div>
                        <div class="col-md-8 col-sm-8 clearfix" style="padding: 32px 0;">
                            <dt class="d-title-2" style="color: #fff; text-align: left; padding-top: 1em;">
                                LOGIQUE telah membawa banyak keberhasilan dalam mengelola pemasaran web perusahaan-perusahaan di Indonesia maupun di negara-negara ASEAN. Kami menyediakan layanan IT/DX terpadu untuk pengembangan web dan sistem web, aplikasi seluler dan PWA, optimasi digital marketing dan SEO, serta layanan keamanan website. Kami juga memiliki layanan outsourcing tenaga spesialis IT melalui anak perusahaan KAZOKKU.<br><br>
                                Jangan ragu untuk menghubungi kami dan dapatkan informsi layanan yang lebih lengkap. 
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="#anchorForm" style="font-weight: bold; padding:10px">
                                        <div class="main-btn --yellow" align="center"><b>Hubungi LOGIQUE</b></div>
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <a href="https://kazokku.com/" target="_blank" style="font-weight: bold; padding:10px">
                                        <div class="main-btn --yellow" align="center"><b>Dapatkan Layanan Outsourcing IT</b></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container__">
                    <div class="row flex__row no-gutters justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <a href="/white-paper.php">
                                <picture>
                                    <source srcset="/img/contact/banner-link-whitepaper.webp" type="image/webp">
                                    <img src="/img/contact/banner-link-whitepaper.png" alt="" class="img-responsive">
                                </picture>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <a href="/case-study/">
                                <picture>
                                    <source srcset="/img/contact/banner-link-case-study.webp" type="image/webp">
                                    <img src="/img/contact/banner-link-case-study.png" alt="" class="img-responsive">
                                </picture>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <a href="/layanan/dx-dm-service.php">
                                <picture>
                                    <source srcset="/img/contact/banner-link-dx-dm.webp" type="image/webp">
                                    <img src="/img/contact/banner-link-dx-dm.png" alt="" class="img-responsive">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container__">
                    <div class="clearfix">
                        <div class="contact-us-cont">
                            <div class="col-sm-6" style="padding: 1em 0;">
                                <img class="" src="img/kontak-img.jpg" alt="Hubungi Kami Logique" style="width: 100%; height: auto; max-width: 500px; object-fit: scale-down; border: 2px solid black; padding: 2%;" />
                            </div>
                            <div class="col-sm-6" style="padding-top: 5%;">
                                <dt class="d-title" style="background: #ffd02a; padding:1em;">
                                    Kami dapat membantu bisnis Anda, jika Anda menganggap bahwa Web merupakan kunci dari
                                    kesuksesan bisnis
                                    Anda
                                </dt>
                                <p class="d-description">
                                    Dengan pengalaman selama lebih dari 5 tahun, membuat Logique banyak dipercaya oleh
                                    berbagai perusahaan baik ditingkat nasional maupun internasional. Selain itu, dengan
                                    tenaga profesional yang kami miliki, kami dapat memberikan layanan berkualitas tinggi
                                    bagi seluruh proyek Anda.
                                </p>
                            </div>
                            <br>
                            <div class="col-sm-10 col-sm-offset-1 text-center">
                                <dt class="d-title" style="margin-top: 3%;">Silahkan menghubungi kami untuk pembuatan website,
                                    media
                                    sosial, konsultasi seputar web, atau design</dt>
                                <hr class="col-sm-4 col-sm-offset-4 bar-yellow" style="padding: 5px 0; border: none;">
                            </div>

                            <div class="col-sm-8 col-sm-offset-2 text-center sosmed-contact">
                                <a href="https://www.facebook.com/logique.id/" target="_blank" aria-label="Facebook" rel="noreferrer"><i class="fa fa-facebook-official" style="color:#777; font-size: xx-large;"></i></a>
                                <a href="https://twitter.com/LogiqueDigital" target="_blank" aria-label="Twitter" rel="noreferrer"><i class="fa fa-twitter" style="color:#777; font-size: xx-large;"></i></a>
                                <a href="https://www.instagram.com/logiquedigital/" target="_blank" aria-label="Instagram" rel="noreferrer"><i class="fa fa-instagram" style="color:#777; font-size: xx-large;"></i></a>
                                <a href="https://www.linkedin.com/company/13420656" target="_blank" aria-label="LinkedIn" rel="noreferrer"><i class="fa fa-linkedin-square" style="color:#777; font-size: xx-large;"></i></a>
                                <a href="https://api.whatsapp.com/send?phone=62811870321" target="_blank" aria-label="WhatsApp" rel="noreferrer"><i class="fa fa-whatsapp" style="color:#777; font-size: xx-large;"></i></a>
                            </div>
                            <br>
                            <div class="col-sm-8 col-sm-offset-2" style="margin-top: 10px;">
                                <?php if(isset($msg))
                                    {
                                        echo $msg;
                                    }
                                ?>
                            </div>
                            <div class="col-xs-12">
                                <form class="contactform" id="moresco-contactform" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                                    <input type='hidden' name='submitted' id='submitted' value='1' />
                                    <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                                    <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10" id="anchorForm">
                                        <label for="companyname" class="c-label">Nama Perusahaan</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="companyname" name="companyname" aria-label="Company Name" value='<?php echo $formproc->SafeDisplay('companyname') ?>' placeholder="NAMA PERUSAHAAN">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="name" class="c-label">Nama</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" aria-label="Name" value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="NAMA">
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="phone" class="c-label">Nomor Telepon</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="phone" name="phone" aria-label="Phone" value='<?php echo $formproc->SafeDisplay('phone') ?>' placeholder="NOMOR TELEPON">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="email" class="c-label">Email</label> <small class="text-danger">Mohon masukkan alamat email perusahaan Anda</small>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" aria-label="Email" value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="E-MAIL">
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="message" class="c-label">Message</label>
                                        <div class="form-group" style="margin-top: 10px;">
                                            <textarea class="form-control" name="message" aria-label="Message" placeholder="PESAN"><?php echo $formproc->SafeDisplay('message') ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <b>Anda butuh bantuan LOGIQUE untuk:</b> <i>(Anda boleh memilih lebih dari satu)</i>
                                    </div>

                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]" value="Mengembangkan sebuah website">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>mengembangkan sebuah
                                                website
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]" value="Mengembangkan sistem web / maintenance">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>mengembangkan sistem
                                                web / maintenance
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]" value="Memasarkan Web / SEO">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>memasarkan
                                                Web / SEO
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]" value="Memasang atau mengoperasikan iklan di Internet">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>memasang
                                                atau
                                                mengoperasikan iklan di Internet
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]" value="Mendesain profil perusahaan atau hasil cetakan lainnya untuk pameran">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>mendesain
                                                profil
                                                perusahaan atau hasil cetakan lainnya untuk pameran
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]" value="Kami mencari perusahaan yang ikut tender">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Kami mencari
                                                perusahaan yang ikut tender
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]" value="Kami mencari konsultan untuk memulai bisnis di indonesia">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Kami mencari
                                                konsultan untuk memulai bisnis di indonesia
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]" value="Kami ingin mengunjungi kantor Anda saat kami ke Jakarta untuk melakukan perjalanan bisnis">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Kami ingin
                                                mengunjungi kantor Anda saat kami ke Jakarta untuk melakukan perjalanan bisnis
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" style="display:flex;justify-content:center; margin-bottom:1em">
                                        <div class="g-recaptcha pull-right" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
                                        <div class="clearfix"></div><br>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-4 paddingleft">
                                        <button type="submit" class="btn btn-block" onclick="ga('send', 'event', 'Button-Kirim', 'Action-Click', 'Button-Kirim-Label');" style="background: #f4ce58;">Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--gray">
                <div class="container__">
                    <div class="clearfix" style="padding-bottom: 10%;">
                        <div class="d-title-large title-bg-grey col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1">
                            Jika Anda ingin mendapatkan informasi lebih lanjut mengenai berbagai hal yang berkaitan dengan
                            Logique,
                            Silahkan
                            pilih salah satu opsi di bawah ini
                            <div class="col-sm-12">
                                <hr class="col-sm-4 col-sm-offset-4 bar-yellow" style="padding: 5px 0; border: none;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="clearfix">
                <div class="container__">
                    <div class="float-box" style="position: relative;">
                        <div class="col-md-3 col-sm-3 col-xs-6" style="margin-bottom: 12px;">
                            <a class="box-link" href="layanan.php">
                                <div class="yellow-box">
                                    <img class="img-box" src="img/global_1.png" alt="">
                                    <dt>Layanan</dt>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6" style="margin-bottom: 12px;">
                            <a class="box-link" href="produk.php">
                                <div class="yellow-box">
                                    <img class="img-box" src="img/hr.png" alt="">
                                    <dt>Produk</dt>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6" style="margin-bottom: 12px;">
                            <a class="box-link" href="logique.php">
                                <div class="yellow-box">
                                    <img class="img-box" src="img/group_3.png" alt="">
                                    <dt>Tentang Kami</dt>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6" style="margin-bottom: 12px;">
                            <a class="box-link" href="/career/">
                                <div class="yellow-box">
                                    <img class="img-box" class="" src="img/promotion_1.png" alt="">
                                    <dt>Karir</dt>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="clearfix">
                <div class="container__" style="padding-top: 0">
                    <div class="d-title-large title-bg-grey text-center"><b>Prosedur Permintaan Informasi</b></div>
                    <div class="col-sm-12">
                        <hr class="col-sm-2 col-sm-offset-5 bar-yellow" style="padding: 5px 0; border: none;">
                    </div>
                    <div class="overflow-auto">
                        <ul class="timeline timeline-horizontal" style="padding-left: 1em;">

                            <li class="timeline-item">
                                <div class="timeline-badge primary"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <img src="img/call_center.png" alt="">
                                    </div>
                                    <div class="timeline-body">
                                        <p class="abs-box">
                                            Kami akan menghubungi anda dalam 2 hari kerja
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge success"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <img src="img/employee.png" alt="">
                                    </div>
                                    <div class="timeline-body">
                                        <p class="abs-box">
                                            Kami akan mengkonfirmasi beberapa hal dengan Anda
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge info"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <img src="img/confidential.png" alt="">
                                    </div>
                                    <div class="timeline-body">
                                        <p class="abs-box">
                                            Kami akan memperdetil kebutuhan serta membuat proposal proyek untuk Anda
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge danger"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <img src="img/contract.png" alt="">
                                    </div>
                                    <div class="timeline-body">
                                        <p class="abs-box">
                                            Pembuatan kontrak dan memulai pengerjaan proyek
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="clearfix">
                <div class="container__">
                    <div style="margin-top: 1em;">
                        <div class="clearfix">
                            <dt class="d-title-large title-bg-grey" style="text-align: left;">Pertanyaan yang sering diajukan:
                            </dt>
                            <hr class="col-sm-1 col-xs-2 bar-yellow" style="padding: 5px 0; border: none;">
                        </div>
                        <div class="mt-12" id="accordion" style="width:100%;">

                            <div class="panel-group" id="accordion">

                                <?php include 'FAQ.php'; ?>

                            </div>

                            <div class="map-container">
                                <iframe title="Office Map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7931.5295224445435!2d106.81845993380738!3d-6.294614997607123!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x941fcbe3ecc8c368!2sPT.%20LOGIQUE%20DIGITAL%20INDONESIA!5e0!3m2!1sen!2sid!4v1575185803719!5m2!1sen!2sid" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <?php include 'footer.php'; ?>
        <script async defer src='https://www.google.com/recaptcha/api.js'></script>
        <script>
            $(function() {
                $('.smooth').click(function() {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location
                        .hostname == this.hostname) {
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
    </div>
</body>

</html>