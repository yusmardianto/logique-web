<?php
require_once("assets/form/fgcontact_dentist.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient(['info@logique.co.id']); //<<---Put your email address here

//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');

// $formproc->AddFileUploadField('photo','jpg,jpeg,pdf,doc,docx',40960);

if (isset($_POST['submitted'])) {
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $secret = '6LcuHywUAAAAAEfJ-sZem8CzGVYIUMcxoT0jRhtW';
        // $secret = '6Lf3pA8UAAAAAEECs5-RC010LQ3ehBt76aKv8Rxb';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        // print_r($verifyResponse); exit;
        $responseData = json_decode($verifyResponse);
        if ($responseData->success) {
            if ($formproc->ProcessForm()) {
                $msg = "<div class='alert alert-success' id='msg' role='alert'>Thank you for sending us an inquiry!</div>";
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
<html lang="en">

<head>
    <?php include '../google/tag-head.php' ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" content="LOGIQUE bisa membantu Anda dalam pembuatan website untuk bisnis klinik gigi dengan tampilan yang user friendly, unik dan modern. Raih pelanggan Anda dengan teknologi digital. Untuk lebih lengkapnya, segera hubungi LOGIQUE!">
    <meta name="keywords" content="klinik dokter gigi, klinik gigi jakarta, dental klinik, website klinik gigi, website templates, template design, pembuatan website klinik gigi, family dental clinic">
    <meta name="title" content="Jasa Pembuatan Website Klinik Gigi | LOGIQUE Digital Indonesia">
    <meta name="author" content="Logique Digital Indonesia">
    <meta itemprop="name" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Jasa Pembuatan Website Klinik Gigi | LOGIQUE Digital Indonesia">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/layanan/pembuatan-web-klinik-gigi.php">
    <meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
    <meta property="og:description" content="LOGIQUE bisa membantu Anda dalam pembuatan website untuk bisnis klinik gigi dengan tampilan yang user friendly, unik dan modern. Raih pelanggan Anda dengan teknologi digital. Untuk lebih lengkapnya, segera hubungi LOGIQUE!">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->
    <title>Jasa Pembuatan Website Klinik Gigi | LOGIQUE Digital Indonesia</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style-new-dentist.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.6.0/slick/slick.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.6.0/slick/slick-theme.css" rel="stylesheet" type="text/css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <script>
        function recaptcha_callback() {
            $('#kirim-form-klinik-gigi').removeAttr('disabled');
        };
    </script>

    <!-- Twitter universal website tag code -->
    <script>
        ! function(e, t, n, s, u, a) {
            e.twq || (s = e.twq = function() {
                    s.exe ? s.exe.apply(s, arguments) : s.queue.push(arguments);
                }, s.version = '1.1', s.queue = [], u = t.createElement(n), u.async = !0, u.src = '//static.ads-twitter.com/uwt.js',
                a = t.getElementsByTagName(n)[0], a.parentNode.insertBefore(u, a))
        }(window, document, 'script');
        // Insert Twitter Pixel ID and Standard Event data below
        twq('init', 'o0xru');
        twq('track', 'PageView');
    </script>
    <!-- End Twitter universal website tag code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105878648-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-105878648-1', {
            'optimize_id': 'GTM-PMV6V9D'
        });
    </script>
</head>

<!-- Google Analytics Content Experiment code -->
<script>
    function utmx_section() {}

    function utmx() {}(function() {
        var
            k = '159506621-0',
            d = document,
            l = d.location,
            c = d.cookie;
        if (l.search.indexOf('utm_expid=' + k) > 0) return;

        function f(n) {
            if (c) {
                var i = c.indexOf(n + '=');
                if (i > -1) {
                    var j = c.
                    indexOf(';', i);
                    return escape(c.substring(i + n.length + 1, j < 0 ? c.length : j))
                }
            }
        }
        var x = f('__utmx'),
            xx = f('__utmxx'),
            h = l.hash;
        d.write(
            '<sc' + 'ript src="' + 'http' + (l.protocol == 'https:' ? 's://ssl' :
                '://www') + '.google-analytics.com/ga_exp.js?' + 'utmxkey=' + k +
            '&utmx=' + (x ? x : '') + '&utmxx=' + (xx ? xx : '') + '&utmxtime=' + new Date().valueOf() + (h ? '&utmxhash=' + escape(h.substr(1)) : '') +
            '" type="text/javascript" charset="utf-8"><\/sc' + 'ript>')
    })();
</script>
<script>
    utmx('url', 'A/B');
</script>
<!-- End of Google Analytics Content Experiment code -->

<body class="dentalpage">
    <?php include '../google/tag-body.php' ?>
    <div class="wrapper">
        <header class="head-banner">
            <button type="button" class="navbar-toggle collapsed" aria-label="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar first"></span>
                <span class="icon-bar second"></span>
                <span class="icon-bar third"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
                <div class="backdrop-test"></div>
                <div class="logique-nav">
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
        </header>
        <div class="sticky-menu">
            <a href="tel:022708935">
                <div class="sticky-phone">
                    <i class="fa fa-phone"></i>
                </div>
            </a>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=62811870321&text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20layanan%20website%20dental%20Logique">
                <div class="sticky-whatsapp">
                    <i class="fa fa-whatsapp"></i>
                </div>
            </a>
            <a href="mailto:info@logique.co.id">
                <div class="sticky-mail">
                    <i class="fa fa-envelope"></i>
                </div>
            </a>
        </div>
        <div class="content-area">
            <div class="logo-top">
                <div class="row">
                    <div class="col-md-8 col-sm-offset-1">
                        <img src="assets/img/img-new-dentist/logo_logique.png" alt="logo">
                    </div>
                </div>
            </div>

            <div class="banner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="text-box">
                                <span class="large-text">DENTISTS!</span>
                                <p>
                                    Build your website <strong>HERE</strong> and <strong>NOW</strong>
                                </p>
                                <div class="price-box">
                                    <span>Start<br>from</span>
                                    <span><strong>Rp 500.000</strong> / month </span>
                                </div>
                            </div>
                            <a href="#message-form" class="contact-us-btn">CONTACT US</a>
                        </div>
                        <img src="assets/img/img-new-dentist/drg.png" class="img-doc img-responsive" alt="img-banner" />
                    </div>
                </div>
            </div>
            <div class="ready-to-use">
                <div class="container">
                    <h3 class="text-center">Ready-to-use dental website with templates of your choice!</h3>
                    <img src="assets/img/img-new-dentist/3_people.png" class="img-3-people img-center img-responsive" alt="3-people" />
                    <div class="can-help">
                        <img src="assets/img/img-new-dentist/logo_logique.png" alt="logo">
                        <span>CAN HELP YOU</span>
                    </div>
                </div>

            </div>
            <div class="three-steps-away">
                <div class="section-header">
                    <h4>You are 3 steps away from your website!</h4>
                    <div class="steps">Choose Template - Choose Plan - Consult</div>
                </div>
                <div class="step-one">
                    <div class="step-description">
                        <span class="step-number">01</span>
                        <h5>TEMPLATE</h5>
                        <p>Choose the best template for your dental clinic, with guaranteed delivery within 5-7 working days.</p>
                        <small>Website Optimization in Mobile and SEO included. Photo / Video Retrieval, Professional Content Making are optional.</small>
                    </div>
                    <div class="template-slide">
                        <div>
                            <img onclick="openModalTemplate(this)" alt="template-teenager" src="assets/img/img-new-dentist/dental-for-teenager-sample.jpg" />
                        </div>
                        <div>
                            <img onclick="openModalTemplate(this)" alt="template-premium" src="assets/img/img-new-dentist/4-premium-sample.jpg" />
                        </div>
                        <div>
                            <img onclick="openModalTemplate(this)" alt="template-kids" src="assets/img/img-new-dentist/5-kids-sample.jpg" />
                        </div>
                        <div>
                            <img onclick="openModalTemplate(this)" alt="template-general" src="assets/img/img-new-dentist/2-GeneralDentalClinic-sample.jpg" />
                        </div>
                        <div>
                            <img onclick="openModalTemplate(this)" alt="template-beauty" src="assets/img/img-new-dentist/4-Beauty_Dental_-sample.jpg" />
                        </div>
                    </div>
                    <small>*Click to view template in full screen</small>
                    <!-- <a href="#" class="more-template-btn">MORE TEMPLATE</a> -->
                </div>
                <div class="modal" id="modal">
                    <span class="close-btn" onclick="closeModalTemplate()">×</span>
                    <div class="modal-content">
                        <div id="slides">

                        </div>
                    </div>
                </div>
                <div class="step-two">
                    <div class="step-description">
                        <span class="step-number">02</span>
                        <h5>PLAN</h5>
                        <p>Take a quick overview of our website fee before proceeding. No hidden fees!</p>
                        <ul>
                            <li><small>Subscribe to the website for at least 6 months</small></li>
                            <li><small>Website Setup includes domain (.com / .co.id / .id) and templates</small></li>
                            <li><small>Marketing includes advertising, SEO, and social media</small></li>
                            <li><small>Maintenance and Marketing is paid monthly after the first 6/12 months have passed, depending on the chosen plan</small></li>

                        </ul>
                    </div>
                    <div class="plans">
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-1 col-xs-12 table-1">
                                <div class="plan-item">
                                    <h5>Basic Plan</h5>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Setup</td>
                                                <td>Rp. 3.000.000</td>
                                            </tr>
                                            <tr>
                                                <td>Recurring</td>
                                                <td colspan="2">Rp. 500.000/month</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">6 Months</th>
                                            </tr>
                                            <tr>
                                                <td>Setup</td>
                                                <td colspan="2">Rp. 3.000.000</td>

                                            </tr>
                                            <tr>
                                                <td>Recurring</td>
                                                <td>Rp. 500.000 x 6</td>
                                                <td>+</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2">Rp. 6.000.000</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">12 Months</th>
                                            </tr>
                                            <tr>
                                                <td>Setup</td>
                                                <td colspan="2">Rp. 3.000.000</td>

                                            </tr>
                                            <tr>
                                                <td>Recurring</td>
                                                <td>Rp. 500.000 x 12</td>
                                                <td>+</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2"><s>Rp. 9.000.000</s></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2"><strong>Rp. 8.500.000</strong></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" align="center">save (500k)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-5 col-xs-12 table-2">
                                <div class="plan-item">
                                    <h5>Blog Plan</h5>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Setup</td>
                                                <td>Rp. 5.000.000</td>
                                            </tr>
                                            <tr>
                                                <td>Recurring</td>
                                                <td colspan="2">Rp. 900.000/month</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">6 Months</th>
                                            </tr>
                                            <tr>
                                                <td>Setup</td>
                                                <td colspan="2">Rp. 5.000.000</td>

                                            </tr>
                                            <tr>
                                                <td>Recurring</td>
                                                <td>Rp. 900.000 x 6</td>
                                                <td>+</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2">Rp. 10.400.000</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">12 Months</th>
                                            </tr>
                                            <tr>
                                                <td>Setup</td>
                                                <td colspan="2">Rp. 5.000.000</td>

                                            </tr>
                                            <tr>
                                                <td>Recurring</td>
                                                <td>Rp. 900.000 x 12</td>
                                                <td>+</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2"><s>Rp. 15.800.000</s></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2"><strong>Rp. 15.000.000</strong></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" align="center">save (800k)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="marketing-fee col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 px-2">
                                Marketing Fee (Optional) : Rp. 1.000.000 - Rp. 3.000.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-three">
                    <div class="step-description">
                        <span class="step-number">03</span>
                        <h5>CONSULT</h5>
                        <p>If you have these problems, you probably need a website.</p>
                        <ul>
                            <li><small>It's hard to get new patients</small></li>
                            <li><small>High competition among dental clinics</small></li>
                            <li><small>Inadequate clinical facilities</small></li>
                            <li><small>Location that is hard to find</small></li>
                            <li><small>Promotion through expensive and ineffective advertisements</small></li>
                            <li><small>Patients find it difficult to make an appointment because they don't know the doctor's practice schedule</small></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="message-form" id="message-form">
                <h5>Leave us a message or a question if you have any</h5>
                <div class="message-alert">
                    <?php if (isset($msg)) {
                        echo $msg;
                    }
                    ?>
                </div>

                <div class="contact-info-mobile">
                    <a href="tel:022708935">
                        <span><i class="fa fa-phone"></i></span>
                    </a>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=62811870321&text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20layanan%20website%20dental%20Logique">
                        <span><i class="fa fa-whatsapp"></i></span>
                    </a>
                    <a href="mailto:info@logique.co.id">
                        <span><i class="fa fa-envelope"></i></span>
                    </a>
                </div>
                <div class="row">
                    <img src="assets/img/img-new-dentist/group_50.png" class="img-responsive img-form-left hide-mobile" alt="img-form" />
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <form class="form-horizontal" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                            <input type='hidden' name='submitted' id='submitted' value='1' />
                            <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                            <fieldset>
                                <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                            </fieldset>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 label-item">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-item" id="name" aria-label="Name" value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 label-item">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-item" id="email" aria-label="Email" value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-sm-2 label-item">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-item" id="message" name="message" placeholder="Your Message" rows="3" aria-label="Message" required><?php echo $formproc->SafeDisplay('message') ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp" data-callback="enableSubmitMsg"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" id="submit-msg" class="submit-btn disabled" disabled>SEND MESSAGE</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <img src="assets/img/img-new-dentist/group_69.png" class="img-responsive img-form-right hide-mobile" class="img-form" />
                </div>
            </div>
        </div>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-sm-push-3">
                        <div class="row">
                            <div class="col-sm-4 link-footer-nav">
                                <ul>
                                    <li><a href="/index.php">Beranda</a></li>
                                    <li><a href="/logique.php">Tentang Kami</a> </li>
                                    <li class="have-submenu"><a href="/layanan.php">Layanan</a>
                                        <ul>
                                            <li class="have-submenu"><a href="/layanan/web-dev.php" target="_blank">Jasa Pembuatan Website</a>
                                                <ul>
                                                    <li><a href="/layanan/pembuatan-web-karir.php" target="_blank"> Pembuatan Website Career</a> </li>
                                                    <li><a href="/layanan/pembuatan-web-klinik-gigi-2.php" target="_blank"> Website Klinik Gigi </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/layanan/pembuatan-sistem-web.php" target="_blank">Jasa Pengembangan Sistem Web</a></li>
                                            <li><a href="/layanan/pembuatan-aplikasi-mobile.php" target="_blank">Pengembangan Aplikasi Mobile </a></li>
                                            <li class="text-left"><a href="/layanan/penetration-test.php" target="_blank">Pengetesan Keamanan Website (Pentest) </a></li>
                                            <li class="have-submenu"><a href="/layanan/digital-marketing.php" target="_blank">Jasa Digital Marketing </a>
                                                <ul>
                                                    <li><a href="/layanan/digital-marketing/jasa-seo.php" target="_blank"> Jasa SEO </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>


                            </div>
                            <div class="col-sm-4 link-footer-nav">
                                <ul>
                                    <li class="have-submenu">
                                        <a href="/produk.php">Produk Kami</a>
                                        <ul>
                                            <li><a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer">
                                                    Dokodemo-Kerja <br><span style="font-size: 11px;">(Sistem aplikasi bagi pekerja remote) </span> </a>
                                            </li>
                                            <li>
                                                <a href="/produk/nippo.php" target="_blank"> Nippo <br> <span style="font-size: 11px;">(Sistem aplikasi laporan pegawai harian)</span> </a>
                                            </li>
                                            <li>
                                                <a href="/produk/sugoi-saiyo.php" target="_blank"> Sugoi Saiyo <br> <span style="font-size: 11px;">(Sistem aplikasi perekrutan pegawai)</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="/portofolio.php">Portofolio</a></li>
                                    <li class="have-submenu"><a href="/career/">Karir</a>
                                        <ul>
                                            <li><a href="/career/">Join LOGIQUE</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/hubungi-kami.php">Hubungi Kami</a></li>
                                </ul>

                                <!-- <h6><a href="/layanan/pembuatan-website-restoran/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Website Restoran </a></h6> -->

                            </div>
                            <div class="col-sm-4 link-footer">
                                <p>Sebagai tim yang profesional dalam bidang jasa pembuatan website, LOGIQUE menyediakan solusi terbaik yang teroptimasi untuk bisnis Anda. Selain <a href="/layanan/web-dev.php" target="_blank"><b>jasa pembuatan website</b></a>, LOGIQUE juga menyediakan jasa lainnya seperti jasa konsultasi digital, jasa pembuatan aplikasi, desain web, pengembangan web system, jasa SEO dan percetakan. Kami memberikan rancangan terstruktur secara detil baik untuk pembuatan website perusahaan, aplikasi, maupun pembuatan website atau sistem berskala besar dengan kombinasi desain yang terarah dan arsitektur sistem yang baik.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-3 col-sm-pull-9">
                        <div itemscope itemtype="https://schema.org/Organization">
                            <div class="footer-title"><span itemprop="name">LOGIQUE DIGITAL INDONESIA</span></div>
                            <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                <span itemprop="streetAddress"> Ad Premier Building 19th Floor. <br>Jalan Tb. Simatupang No. 5 <br />
                                    Ragunan, Ps. Minggu, Jakarta Selatan, <br>Indonesia </span><span itemprop="postalCode">12550</span>
                                <br><br>
                                &nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;(021) 22708935 / 36
                                <br>
                                <a href="https://api.whatsapp.com/send?phone=62811870321" target="_blank" rel="noreferrer">&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile" style="font-size: 18px;vertical-align: -1px;"></i>&nbsp;&nbsp;<i class="fa fa-whatsapp"></i>&nbsp;&nbsp;&nbsp;0811-870-321</a>
                                <br><br>
                            </div>
                        </div>
                        <div class="provacy-policy-container">
                            <a href="/en/privacy-policy.php" target="_blank">Privacy Policy</a>
                        </div>
                        <div class="footer-title" style="margin-top: 20px; margin-bottom: 0;">Media Sosial</div>
                        <ul class="medsos-new">
                            <li><a href="https://www.facebook.com/logique.id/" target="_blank" rel="noreferrer" aria-label="Facebook"><i class="fa fa-facebook-official"></i></a></li>
                            <li><a href="https://twitter.com/LogiqueDigital" target="_blank" rel="noreferrer" aria-label="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/logiquedigital/" target="_blank" rel="noreferrer" aria-label="Instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/13420656" target="_blank" rel="noreferrer" aria-label="LinkedIn"><i class="fa fa-linkedin-square"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div itemscope itemtype="https://schema.org/CreativeWork">
                            <div class="copyright">&copy; <span itemprop="copyrightYear">2017</span>
                                <span itemprop="copyrightHolder" itemtype="https://schema.org/Organization"><span itemprop="name">Logique Digital Indonesia. All Rights Reserved.</span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="/js/jquery-3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        $('.map-container')
            .click(function() {
                $(this).find('iframe').addClass('clicked')
            })
            .mouseleave(function() {
                $(this).find('iframe').removeClass('clicked')
            });
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Jakarta, Indonesia",
                "postalCode": "12550",
                "streetAddress": "Ad Premier Building 19th Floor. Jalan Tb. Simatupang No. 5, Ragunan, Ps. Minggu,  Jakarta Selatan"
            },
            "logo": "https://www.logique.co.id/img/logo.png",
            "email": "info(at)logique.co.id",
            "telephone": "+62 (21) 2270 8935/36"
        }
    </script>
    <script>
        function enableSubmitMsg() {
            $('#submit-msg').prop("disabled", false);
            $('#submit-msg').removeClass("disabled");
        }

        function openModalTemplate(event) {
            var imgUrl = $(event).attr("src").replace("-sample", "");
            $("#slides").append('<img alt="template" src="' + imgUrl + '" />');
            $(".modal").css('display', 'block');
            $(".modal-content").show().scrollTop(0);
        }

        function closeModalTemplate() {
            $(".modal").css('display', 'none');
            $("#slides").empty();
        }

        window.onclick = function(event) {
            if (event.target === document.getElementById('modal')) {
                closeModalTemplate();
            }
        }

        $(document).ready(function() {
            $(".template-slide").slick({
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 3,
                dots: true,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '0px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '0px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>
