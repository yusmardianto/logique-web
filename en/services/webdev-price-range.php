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

if (isset($_POST['submitted'])) {
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $secret = '6LcuHywUAAAAAEfJ-sZem8CzGVYIUMcxoT0jRhtW';
        // $secret = '6Lf3pA8UAAAAAEECs5-RC010LQ3ehBt76aKv8Rxb';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
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
    <meta name="description" content="LOGIQUE is a highly ranked web development company in Jakarta offering a range of prices and platforms for developing a Website or web Application.">
    <meta name="keywords" content="web development price list, web development price list in jakarta">
    <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <meta itemprop="name" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Complete Web Development Price List Jakarta | LOGIQUE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/en/services/webdev-price-range.php">
    <meta property="og:image" content="https://www.logique.co.id/jp/services/assets/img/img-webdev/webdev-service/22.png">
    <meta property="og:description" content="LOGIQUE is a highly ranked web development company in Jakarta offering a range of prices and platforms for developing a Website or web Application.">
    <link rel="canonical" href="https://www.logique.co.id/en/services/webdev-price-range.php" />
    <title>Complete Web Development Price List Jakarta | LOGIQUE</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- FAST Font load Formula -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" media="print" onload="this.media='all'" />


    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/style-services.css" rel="stylesheet">
    <link href="/css/epicstyle.css" rel="stylesheet">
    <link href="/layanan/assets/css/styles-web-dev-services/styles_webdev_service.css" rel="stylesheet">


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
        include($_SERVER['DOCUMENT_ROOT'] . '/sidebar.php');
        ?>

        <?php
        $lang = 'en';
        $en_link = '#';
        $id_link = '/layanan/webdev-price-range.php';
        $jp_link = '/jp/services/web-dev-price-range.php';
        include($_SERVER['DOCUMENT_ROOT'] . '/header.php');
        ?>

        <div class="content-cont">
            <section class="header-wrapper">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb-list" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="../index.php"><span itemprop="name">Home</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="../layanan.php"><span itemprop="name">&nbsp;Services</span></a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="web-dev.php" itemprop="item"><span itemprop="name">&nbsp;Website Production</span></a>
                            <meta itemprop="position" content="3" />
                        </li>
                        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"><span itemprop="name">&nbsp;Dev Plans</span></a>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>


                <header class="header-cont">
                    <div class="left-header">
                    </div>

                    <div class="right-header">
                        <h1 class="title-header">
                            Web Production Service Plans
                        </h1>

                        <p>
                            We have prepared four basic service plans to meet our customers' various homepage, website production and operation needs.
                        </p>

                        <p>
                            Since there are those who may want to know the price range before a consultation, the information below can be used a reference. While the work scope itself will vary depending on the available budget, we will do our best to work on any project according to the outlined scope of work.
                        </p>

                        <p>
                            If you are uncertain of which service menu fits your requirements, please feel free to contact us.
                        </p>

                    </div>
                </header>
            </section>


            <!-- CSS ATOMIC IMPORT for Load Performance -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/styles_price_plan_320.css" media="(min-width: 320px)">
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/styles_price_plan_425.css" media="(min-width: 425px)">
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/styles_price_plan_768.css" media="(min-width: 768px)">
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/styles_price_plan_1024.css" media="(min-width: 1024px)">

            <!-- MINIPLAN Section -->
            <section class="plan plan-gap-100">
                <div class="image-plan-cont">
                    <img class="plan-image" loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/miniplan-image.webp" alt="miniplan price">
                </div>

                <div class="desc-plan-cont">
                    <h2 class="plan-title">
                        Quick Production Plan
                    </h2>
                    <p class="plan-desc">
                        Simple Web or Landing Page
                    </p>

                    <!-- Kontainer Deskripsi Waktu -->
                    <div class="desc-waktu">
                        <!-- Masa Produksi -->
                        <div class="sub-container-desc">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-masa-produksi">
                                <h3 class="desc-title">Production Period</h3>
                                <p class="desc-value">~ 1 Month</p>
                            </div>

                        </div>

                        <!-- Jumlah Halaman -->
                        <div class="sub-container-desc extra-width">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-jumlah-halaman">
                                <h3 class="desc-title">Number of Pages</h3>
                                <p class="desc-value">Up to 5 pages</p>
                            </div>

                        </div>

                    </div>


                    <!-- Kontainer Cakupan Pekerjaan -->
                    <div class="cakupan-pekerjaan">
                        <div class="sub-cakupan-pekerjaan">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-cakupan-pekerjaan">
                                <h3 class="desc-title">Work Content</h3>
                                <ul class="cakupan-pekerjaan-list">
                                    <li>
                                        Design, HTML Coding, Standard SEO Measures, Adjustment & Tests, Release Work
                                    </li>

                                    <li>
                                        Clients will provide all the materials
                                    </li>

                                    <li>
                                        Mainly for static web content
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Biaya Kontainer -->
                    <div class="desc-biaya">
                        <!-- Biaya -->
                        <div class="sub-container-biaya">
                            <h3 class="biaya-title">Production Price</h3>
                            <p class="biaya-value">15 - 30 Million IDR</p>
                        </div>

                        <!-- Button Container -->
                        <div class="sub-container-biaya">
                            <a target="_blank" href="/contact.php">
                                <div class="button-biaya">
                                    Contacts Us
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- STANDART Section -->
            <section class="plan plan-reverse plan-gap">
                <div class="image-plan-cont">
                    <img class="plan-image" loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/standart-image.webp" alt="Standart price">
                </div>

                <div class="desc-plan-cont">
                    <h2 class="plan-title standar-color">Standard Production Plan</h2>
                    <p class="plan-desc">Standard Corporate Web or Web Service</p>

                    <!-- Kontainer Deskripsi Waktu -->
                    <div class="desc-waktu">
                        <!-- Masa Produksi -->
                        <div class="sub-container-desc">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-masa-produksi">
                                <h3 class="desc-title">Production Period</h3>
                                <p class="desc-value">1 ~ 2.5 Months (Depending on the materials used for preparation)</p>
                            </div>

                        </div>

                        <!-- Jumlah Halaman -->
                        <div class="sub-container-desc extra-width">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-jumlah-halaman">
                                <h3 class="desc-title">Number of Pages</h3>
                                <p class="desc-value">Up to 20 Pages</p>
                            </div>

                        </div>

                    </div>


                    <!-- Kontainer Cakupan Pekerjaan -->
                    <div class="cakupan-pekerjaan">
                        <div class="sub-cakupan-pekerjaan">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-cakupan-pekerjaan">
                                <h3 class="desc-title">Work Content</h3>
                                <ul class="cakupan-pekerjaan-list">
                                    <li>
                                        Design, HTML Coding, CMS Fitting, Standard SEO Measures, Adjustment & Tests, Release Work
                                    </li>

                                    <li>
                                        Static Web or Wordpress or Our Original CMS
                                    </li>

                                    <li>
                                        In general, Our Company will provide the materials
                                    </li>

                                    <li>
                                        There may be cases where additional costs will be required if the period exceeds 4 months due to customer related circumstances.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Biaya Kontainer -->
                    <div class="desc-biaya">
                        <!-- Biaya -->
                        <div class="sub-container-biaya">
                            <h3 class="biaya-title">
                                Production Price
                            </h3>
                            <p class="biaya-value">
                                30 - 60 Million IDR
                            </p>
                        </div>

                        <!-- Button Container -->
                        <div class="sub-container-biaya">
                            <a target="_blank" href="/contact.php">
                                <div class="button-biaya">
                                    Contacts Us
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SKALA BESAR Section -->
            <section class="plan plan-gap">
                <div class="image-plan-cont">
                    <img class="plan-image" loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/skala-besar.webp" alt="large scale price">
                </div>

                <div class="desc-plan-cont">
                    <h2 class="plan-title skala-besar-color">Large Scale Web Production Plan</h2>
                    <p class="plan-desc">Large Scale Corporate Web or Web Service</p>

                    <!-- Kontainer Deskripsi Waktu -->
                    <div class="desc-waktu">
                        <!-- Masa Produksi -->
                        <div class="sub-container-desc">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-masa-produksi">
                                <h3 class="desc-title">Production Period</h3>
                                <p class="desc-value">2.5 ~ 4 Months</p>
                            </div>

                        </div>

                        <!-- Jumlah Halaman -->
                        <div class="sub-container-desc extra-width">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-jumlah-halaman">
                                <h3 class="desc-title">Number of Pages</h3>
                                <p class="desc-value">More than 50 pages</p>
                            </div>

                        </div>

                    </div>


                    <!-- Kontainer Cakupan Pekerjaan -->
                    <div class="cakupan-pekerjaan">
                        <div class="sub-cakupan-pekerjaan">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-cakupan-pekerjaan">
                                <h3 class="desc-title">Work Content</h3>
                                <ul class="cakupan-pekerjaan-list">
                                    <li>
                                        Design, HTML Coding, Standard SEO Measures, CMS System, QA, Infrastructure Setting, Security Assessment (*Detailed Pentest will have extra charge ), Release Work
                                    </li>

                                    <li>
                                        Open Source CMS or Our Original CMS or System with PHP framework
                                    </li>

                                    <li>
                                        In general, Our Company will provide the materials
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Biaya Kontainer -->
                    <div class="desc-biaya">
                        <!-- Biaya -->
                        <div class="sub-container-biaya">
                            <h3 class="biaya-title">
                                Production Price
                            </h3>
                            <p class="biaya-value">80 - 150 Million IDR</p>
                        </div>

                        <!-- Button Container -->
                        <div class="sub-container-biaya">
                            <a target="_blank" href="/contact.php">
                                <div class="button-biaya">
                                    Contacts Us
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </section>


            <!-- Produk Strategis Section -->
            <section class="plan plan-reverse plan-gap">
                <div class="image-plan-cont">
                    <img class="plan-image" loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/strategicimg.webp" alt="Strategic plan price">
                </div>

                <div class="desc-plan-cont">
                    <h2 class="plan-title skala-strategis-color">Strategic Web Creation Plan</h2>
                    <p class="plan-desc">
                        After formulating a strategy, we will then create a website in line with said strategy.
                    </p>

                    <!-- Kontainer Deskripsi Waktu -->
                    <div class="desc-waktu">
                        <!-- Masa Produksi -->
                        <div class="sub-container-desc">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-masa-produksi">
                                <h3 class="desc-title">Production Period</h3>
                                <p class="desc-value">3 ~ 5 Months</p>
                            </div>

                        </div>
                    </div>


                    <!-- Kontainer Cakupan Pekerjaan -->
                    <div class="cakupan-pekerjaan">
                        <div class="sub-cakupan-pekerjaan">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-cakupan-pekerjaan">
                                <h3 class="desc-title">Work Content</h3>
                                <ul class="cakupan-pekerjaan-list">
                                    <li>
                                        There is no limit to the work scope, which can also include animation. We will help you build your system according to your requests and apply whatever is needed to distinguish yourself from your competitors.
                                    </li>

                                    <li>
                                        Our consultant will manage the project alongside your marketing department, advertising department, etc.
                                    </li>

                                    <li>
                                        First, we will carry out the planning and requirement definition phase (about one month). During this, we will propose the scope, period and amount required for production.
                                    </li>

                                    <li>
                                        Develop strategies during the process of several consulting sessions.
                                    </li>

                                    <li>
                                        The deliverables during the planning/strategy development phase are as follows: customer journey, persona analysis, current access analysis, brand concept proposal, brand message proposal, site map, content design document, wireframe, design guideline, etc. (Varies according to each project)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Biaya Kontainer -->
                    <div class="desc-biaya">
                        <!-- Biaya -->
                        <div class="sub-container-biaya">
                            <h3 class="biaya-title">Production Price</h3>
                            <p class="biaya-value">200 - 500 Million IDR</p>
                        </div>

                        <!-- Button Container -->
                        <div class="sub-container-biaya">
                            <a target="_blank" href="/contact.php">
                                <div class="button-biaya">
                                    Contacts Us
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>



            <!-- PROSES ALUR KERJA BLOCK -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/alur-kerja-style.css" media="all">
            <section class="alur-kerja-cont">
                <h3 class="title-alur-kerja">The Work Flow, from hearing to the first proposal, and the standart web production price</h3>
            </section>


            <!-- Table Schedule -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/table-schedule.css" media="all">
            <section class="plan-schedule">
                <div class="schedule-cont bg-cream">
                    <div class="title-schedule-cont">
                        <p class="schedule-title">
                            Hearing - First Proposal
                        </p>
                    </div>

                    <div class="desc-schedule-cont">
                        <p class="schedule-desc">
                            Includes interactions and meetings; suggestions are free of charge. Normally, we do not draft a design during the proposal stage. If there is a case where a rough design is absolutely needed, you may be charged with a design production proposal cost.
                        </p>
                    </div>
                </div>

                <div class="schedule-cont bg-grey">
                    <div class="title-schedule-cont">
                        <p class="schedule-title">
                            Other guidelines for developer costs
                        </p>
                    </div>

                    <div class="desc-schedule-cont">
                        <p class="schedule-desc">
                            Our price varies depending on the difficulty of the project and the urgency of the schedule; greater detail regarding costs of individual work requests are as follows. Please use it only as a guideline.
                        </p>
                    </div>
                </div>
            </section>



        </div>
    </div>
</body>


</html>