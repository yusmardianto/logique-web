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
        include($_SERVER['DOCUMENT_ROOT'] . '/en/sidebar.php');
        ?>

        <?php
        $lang = 'en';
        $en_link = '#';
        $id_link = '/layanan/webdev-price-range.php';
        $jp_link = '/jp/services/web-dev-price-range.php';

        include($_SERVER['DOCUMENT_ROOT'] . '/en/header.php');
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
                            <a target="_blank" href="/en/contact.php">
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
                            <a target="_blank" href="/en/contact.php">
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
                            <a target="_blank" href="/en/contact.php">
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
                            <a target="_blank" href="/en/contact.php">
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


            <!-- Table Price -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/table-price.css" media="all">
            <section class="table-container">
                <table class="table=price-x">
                    <tr>
                        <th>Service</th>
                        <th>Price </th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>HTML/CSS Coding (1 Website)</td>
                        <td>15,000,000 IDR 〜</td>
                        <td>Depending on the configuration of the website, it is possible to mark up the previous page HTML / CSS with 15,000,000 IDR if it is a normal corporate web (up to about 10 pages in total). We will do standard coding, install Google Analytics tags, and write your specified meta tags.</td>
                    </tr>
                    <tr>
                        <td>HTML/CSS Coding (Per 1 Page)</td>
                        <td>500,000 IDR ~</td>
                        <td>Although it may differ depending on the volume and configuration of the content in the page, please note that 500,000 IDR per page is the standard estimation. If all design and contents of the 10-page website are ready, it is possible to code all with 5,000,000 IDR.</td>
                    </tr>
                    <tr>
                        <td>Motion Coding</td>
                        <td>5,000,000 IDR 〜</td>
                        <td>Implement visual programming such as motion with parallax effect using jQuery, HTML5, etc.</td>
                    </tr>
                    <tr>
                        <td>Logo and Illustration Creation</td>
                        <td>10,000,000 IDR 〜</td>
                        <td>If your company does not have a logo yet, we can help you create one. We will help you get close to the ideal logo and create multiple patterns of illustrations.</td>
                    </tr>
                    <tr>
                        <td>Online Chat Function</td>
                        <td>5,000,000 IDR ~</td>
                        <td>Implement an online chat tool on your website either for easier and instant customer support or even to increase your sales.</td>
                    </tr>
                    <tr>
                        <td>Inquiry page optimization</td>
                        <td>15,000,000 IDR 〜</td>
                        <td>By optimizing the content of the inquiry page and the form, you can maximize the number of queries/leads and minimize the drop rate from users who visit your website.</td>
                    </tr>
                    <tr>
                        <td>Recruitment page optimization</td>
                        <td>15,000,000 IDR 〜</td>
                        <td>Optimize the content on the recruiting page to increase the number of submissions through the website. It is also possible to build a hiring site as a special site.
                            <a href="/recruitment-web-dev.php">
                                <span style="color: #1985D6;">Click here for details.</span>
                            </a>
                            We also sell cloud tools for efficient hiring operations, Sugoi Saiyo.
                        </td>
                    </tr>
                    <tr>
                        <td>Create shopping cart function</td>
                        <td>20,000,000 IDR 〜</td>
                        <td>We can use the e-commerce framework to grant shopping capabilities to your web. There is a wide range of this feature depending on the requirements, so please contact us for details.</td>
                    </tr>
                    <tr>
                        <td>Payment gateway cooperation</td>
                        <td>15,000,000 IDR 〜</td>
                        <td>We have a track record of establishing linkage functions with the payment gateway service for notable companies in Indonesia. Please contact us as subscription settlement is also possible.</td>
                    </tr>
                    <tr>
                        <td>API Creation</td>
                        <td>15,000,000 IDR 〜</td>
                        <td>We will create an API for linking functions/information with other systems, other websites, mobile apps, and services. We develop the system according to the data format (XML, HTML, JSON, etc.) to be sent and received.</td>
                    </tr>
                    <tr>
                        <td>Content Creation</td>
                        <td>Please contact us for price.</td>
                        <td>Regular content creation operation or one-time content creation (content creation at the time of website creation) is also possible. There is a range of price depending on the volume, the peculiarity of the content to be created, the language of the created content, etc. Please consult us first.</td>
                    </tr>
                    <tr>
                        <td>Photography</td>
                        <td>5,000,000 IDR 〜</td>
                        <td>The price includes shooting in 1 location, 5 to 10 cuts, and 4 hours shooting time. Please contact us for details on shooting outdoors and in the factory.</td>
                    </tr>
                    <tr>
                        <td>Drone shooting</td>
                        <td>5,000,000 IDR 〜</td>
                        <td>1 shooting location, 1 flight, up to 15 minutes shooting time, deliverable animation data. It doesn’t include the acquisition of flight permits.</td>
                    </tr>
                    <tr>
                        <td>Movie shooting editing</td>
                        <td>20,000,000 IDR 〜</td>
                        <td>We create movies with various needs, from videos created with graphics/animation only to full movie shooting and productions.</td>
                    </tr>
                </table>
            </section>

            <!-- Detail Contacts -->
            <a class="landing-contact" target="_blank" href="/en/contact.php">
                <section class="contact-detail-cont">
                    <h3 class="title-contact-detail">Click here to contact us for more detailed quote</h3>
                </section>
            </a>


            <!-- Table Price -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/sosmed-section.css" media="all">
            <section class="sosmed-section">
                <div class="facebook-section">
                    <img loading="lazy" src="/layanan/assets/img/img-webdev/facebookads.png" alt="facebook banner">
                </div>
                <div class="linkedin-section">
                    <img loading="lazy" src="/layanan/assets/img/img-webdev/linkedinads.png" alt="linkedin banner">
                </div>
            </section>

            <section class="plan">
                <div class="container__">
                    <div style="margin-top: 1em;">
                        <div class="clearfix">
                            <dt class="title-header d-title-large title-bg-grey" style="text-align: left;">Frequently asked questions:</dt>
                            <hr class="col-sm-1 col-xs-2 bar-yellow" style="padding: 5px 0; border: none;">
                        </div>
                        <div class="mt-12" id="accordion" style="width:100%;">

                            <?php include '../FAQ.php';?>
                           
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [{
                    "@type": "Question",
                    "name": "Is it possible to proceed with a project using the English language?",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "It is possible, though there may be some difficulties. Most of our staff is able to communicate in English at a practical level. We have also ventured to start projects with overseas companies."
                    }
                },{
                    "@type": "Question",
                    "name": "Is it possible for you to have a meeting overseas?",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Let us discuss the matter with you first. Mostly, we offer video conference calls, but we might be able to be flexible depending on the case."
                    }
                },{
                    "@type": "Question",
                    "name": "We are thinking about changing our current web/system outsourcer and seek to replace them with you.",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Please contact us without any further hesitation. There is no need to worry too much about documentation, etc. In most cases, We are able to develop a wide range of digital products through years of experience in the field of customer management systems development."
                    }
                },{
                    "@type": "Question",
                    "name": "We are seeking a developer to build a management system for our business.",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We are capable of developing various kinds of systems through previous experience in the field of customer management systems development, as well as developing systems for improved recruitment, e-commerce, pointing, and content and loan management, among many others. We are experts in system development, utilizing open web technologies."
                    }
                },{
                    "@type": "Question",
                    "name": "We want to have a partnership / distributor contract with LOGIQUE.",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Let us talk about it with you in further detail. Please feel free to visit our office if you are planning any trips to Jakarta."
                    }
                },{
                    "@type": "Question",
                    "name": "We want to build a mobile application.",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We are capable of developing both Android and iOS applications for you. We can begin planning the development of the mobile app as well, if you require it."
                    }
                },{
                    "@type": "Question",
                    "name": "We would like to print a marketing tool, are you able to offer printing as well as designing services?",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We can of course both design and print pamphlets. And we are also able to design and print other products such as T-shirts. In case you need to print something extremely difficult, you might better look for other company. We can also introduce you to the companies that we know if you would like us to."
                    }
                },{
                    "@type": "Question",
                    "name": "Are you capable of implementing SEO in the Indonesian Language?",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, and we have a proven track record of excellence in that area; helping many industries in the finance, travel and education fields promote their website so that it’s found in the upper ranks of the search results. Our team, consisting of many Indonesian content writers and marketers, will help provide you with the best SEO results. We are also able to implement SEO in the English and Japanese languages, as well."
                    }
                }]
            }
        </script>


        <?php include '../footer.php'; ?>

    </div>
</body>


</html>