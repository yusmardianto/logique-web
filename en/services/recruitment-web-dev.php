<?php
require_once("assets/form/fgcontact_recruitment.php");

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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description"
        content="Have trouble hiring the right employee your company needs? LOGIQUE can help you create an effective recruitment web to ease you with online recruitment, with a built-in inquiry form, also easy-to-navigate and attractive design that appeal to all of your potential target candidates. Contact us to create yours now.">
    <meta name="keywords" content="website karir, karir perusahaan, jasa website karir, logique">
    <meta name="author" content="Logique Digital Indonesia">
     <meta itemprop="name" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Recruitment Web Creation | Online Recruitment | LOGIQUE DIGITAL INDONESIA">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/en/services/recruitment-web-dev.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
    <meta property="og:description"
        content="Have trouble hiring the right employee your company needs? LOGIQUE can help you create an effective recruitment web to ease you with online recruitment, with a built-in inquiry form, also easy-to-navigate and attractive design that appeal to all of your potential target candidates. Contact us to create yours now.">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    
    <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0096/6080.js" async="async"></script>
    <title>Recruitment Web Creation | Online Recruitment | LOGIQUE DIGITAL INDONESIA</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="assets/css/style-recruitment-website.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet"> -->
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
<style>
.container__ {
    padding-top: 0;
    padding-bottom: 0;
}

.reason-container {
    margin-top: -15px;
    margin-bottom: -35px;
}

.col-sm-12.link-footer {
    margin-bottom: 2em;
}

footer {
    top: 35px;
}

.tahap-pemesanan-2 {
    position: relative;
    top: 35px;
}
</style>

<body class="careerpage">
    <div class="wrapper wrapper--update-design">

        <!-- NAVIGATION -->
        <div>
            <button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle" data-toggle="collapse"
                data-target="#myNavbar">
                <span class="icon-bar first"></span>
                <span class="icon-bar second"></span>
                <span class="icon-bar third"></span>
            </button>

            <div class="collapse navbar-collapse" id="myNavbar">
                <div class="backdrop-test"></div>
                <div class="logique-nav logique-nav--update">
                    <div class="margin-for-nav">
                        <div class="text-center">
                            <a href="/en/index.php">
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
                            <a href="/en/career/">
                                <div class="img-career"></div>
                                Career
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="/en/contact.php">
                                <div class="img-contact"></div>
                                Contact Us
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

        <!-- HEADER -->
        <div class="container-fluid">
            <div class="row lang-logo--update-design">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-11">
                            <div class="container">
                                <ul class="list-inline">
                                    <li class="active"><a href="">EN</a></li>
                                    <li><a href="/layanan/pembuatan-web-karir.php">ID</a></li>
                                    <li><a href="/jp/services/recruitment-web-dev.php">JP</a></li>
                                </ul>
                                <a href="/en/"><img src="/../img/logo.png" alt="Logo" class="img-responsive logo--update-design" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER -->

        <div class="content-wrapper__">

            <header class="head-banner">
                <section class="--top">
                    <div class="container__" style="padding:0">
                        <div class="row">
                            <div class="col-sm-12">
                                <ol class="breadcrumb breadcrumb--update-design" itemscope itemtype="http://schema.org/BreadcrumbList">
                                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                            href="/en/"><span itemprop="name">Home</span></a>
                                        <meta itemprop="position" content="1" />
                                    </li>
                                    <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                            href="/en/services.php"><span itemprop="name">&nbsp;Services</span></a>
                                        <meta itemprop="position" content="2" />
                                    </li>
                                    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                        <a itemprop="item"><span itemprop="name">&nbsp;Recruitment Website Creation</span></a>
                                        <meta itemprop="position" content="3" />
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container__">
                    <div class="banner-text">
                        <h1>
                            <span>Are you facing a challenge</span><br>
                            <span class="ytext">in recruitment activities</span><br>
                            <span>in Indonesia?</span><br>
                        </h1>
                        <div class="banner-subt">
                            <div class="row">
                                <div class="col-md-10">
                                    It costs so much recruit employees from recruitment agent service<br>
                                    and also JobStreet gives you quite rough CVs that consume your time<br>
                                    and energy to filter them. Your own recruitment website can be<br>
                                    the key to make it effective and efficient!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="offering-part">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2 style="padding-top: 15px;">We support your hiring activity utilizing recruitment website</h2>
                        </div>
                        <div class="col-sm-4 text-right">
                            <a href="/en/contact.php" target="_blank" aria-label="Contact Us" rel="noreferrer"><img
                                    class="logo-logique img-responsive" src="assets/img/img-recruitment-website/logo-y-logique.png" alt=""
                                    style="float: right; margin-top:10px;"></a>
                        </div>
                    </div>
                </div>
            </div>

            <section>
                <div class="problem-container">
                    <div class="container__">
                        <div class="problem-content row">
                            <div class="col-lg-8 col-md-12">
                                <h3 style="text-align: left;">If you are an HR staff, you are probably struggling to hire a right
                                    person in Jakarta.</h3>
                                <div class="row">

                                    <div class="col-sm-4">
                                        <img src="assets/img/img-recruitment-website/img-problem2.png" alt="HRD's Problem" class="img-responsive">
                                        <div>It is quite challenging to get enough candidates, to inform your job vacancy, or to
                                            find
                                            a recruitment agent service that is not expensive.</div>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="assets/img/img-recruitment-website/img-problem3.png" alt="HRD's Problem" class="img-responsive">
                                        <div>Hiring a skilled employee from recruitment agents is too expensive for a long-term
                                            contract.</div>
                                    </div>
                                    <div class="col-sm-4">
                                        <center><img src="assets/img/img-recruitment-website/img-problem1.png" alt="HRD's Problem"
                                                class="img-responsive"></center>
                                        <div>It takes too much time and cost to filter the massive candidates from JobStreet.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center problem-text">

                    <div class="arrow-up"></div>
                    <div class="container__">

                        <h3><span class="custom-text">There are so many recruiters like you in Indonesia who are facing the same
                                problems. LOGIQUE can help you solve the problems by creating a recruitment website for your
                                company!
                        </h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-left solution-text">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div>You can appeal your company culture and benefit of working in your company by
                                                using
                                                photos and videos that cannot be used in recruitment portal site.</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>Your website can be effectively found by job seekers who are looking for jobs in
                                                their professions by describing your requirements in detail.</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>You prevent the applications from candidates that do not match your requirement
                                                and
                                                can cut your cost for filtering the candidates by clearly describing your
                                                requirement
                                                and adding a simple test on your recruitment website.</div>
                                        </div>
                                        <div class="col-sm-12">
                                            <center>We will utilize the Web technology and make your recruitment activity more
                                                effective. It is also possible to lead the candidates to your website utilizing
                                                internet ads. You can also describe more about your requirements by adding the
                                                link of
                                                your website on Jobstreet. You can avoid irrelevant candidates from applying to
                                                your
                                                job vacancy by telling them exactly who you want.
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="simulation-container">
                <img src="assets/img/img-recruitment-website/img-simulation2.png" alt="Cost Simulation" class="img-responsive " style="width: 100%;">
                <div class="container__">
                    <h2 class="text-center">
                        Let’s simulate the recruitment cost below.
                    </h2>
                    <div class="simul-cont1">
                        <div class="simul-1">If you want to recruit</div>
                        <div class="simul-2">
                            <img src="assets/img/img-recruitment-website/img-simulation1.png" alt="Cost Simulation" class="img-responsive">
                            10 new employees</div>
                        <div class="simul-3">for 10 different positions,</div>
                    </div>
                    <center>
                        <img src="assets/img/img-recruitment-website/simulation-dot.png" alt="Cost Simulation" class="img-responsive"
                            style="margin-top: 10px;">
                    </center>
                </div>
                <div class="simul-container">
                    <div class="container__">
                        <div class="row">
                            <div class="col-sm-6 simul-2">
                                <center>
                                    <h4>Using recruitment portals</h4>
                                </center>
                                <img src="assets/img/img-recruitment-website/simulation1.png" alt="Cost Simulation"
                                    class="img-responsive center-block">
                            </div>
                            <div class="visible-xs"><br /><br /></div>
                            <div class="col-sm-6 simul-3">
                                <center>
                                    <h4>Using recruitment agent services</h4>
                                </center>
                                <img src="assets/img/img-recruitment-website/simulation2.png" alt="Cost Simulation"
                                    class="img-responsive center-block">
                            </div>
                            <div class="col-sm-12 simul-description">
                                <center>
                                    Many companies must be facing those problems though they are using both recruitment agents and
                                    portal
                                    sites. We suggest you to have If in the end the chosen candidate does not match the criteria or
                                    culture of your company, then the cost and energy you’re going to spend surely will be a waste.
                                    Also,
                                    there is a possibility of resignation submission in the near future that makes you need to repeat
                                    the
                                    recruitment process from the beginning.
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center simul-text">
                    <div class="arrow-up"></div>
                    <div class="container__">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h3 class="ytext"><span>Leave it to LOGIQUE to develop your recruitment website!
                                    </span>And your recruitment activities will be much easier and more effective in Indonesia.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="solution-container">
                    <div class="container__">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-sm-6 "><img src="assets/img/img-recruitment-website/buble-text.png" alt="Bubble Text"
                                    class="img-responsive"></div>
                            <div class="col-lg-5 col-md-6 col-sm-6 price-tag">
                                <div class="price-tag-text">
                                    <div style="font-size: 30px; font-weight: 900;line-height: 30px">Low </div>
                                    <div class="big-text" style="font-size: 60px; font-weight: 900; line-height: 50px">Price</div>
                                    <div class="custom-text">Starting from:</div>
                                    <div style="">
                                        <center>
                                            <span style="font-size: 16px; vertical-align: middle;">IDR</span>
                                            <span class="price-number"
                                                style="font-size: 100px; font-weight: 900; vertical-align: middle;line-height: 90px">20</span>
                                            <span style="font-size: 32px;vertical-align: middle;font-weight: bold;">M</span>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="forwho-container">
                <div class="container__ hidden">
                    <div class="logo-logique2">
                        <center><span class=""><img src="assets/img/img-recruitment-website/logo-y-logique.png"></span> </center>
                    </div>
                    <h3 class="custom-text">
                        <center>Teruntuk staf dan divisi HRD, <br>
                            <span class="custom-text">merasa familiar dengan berbagai permasalahan ini?</span></center>
                    </h3>
                    <center>
                        <div class="list-why">
                            <ul>
                                <li>Karyawan yang sudah direkrut tidak sesuai dengan kriteria perusahaan</li>
                                <li>Ada karyawan baru/lama yang bersikap tidak profesional</li>
                                <li>Dana dan waktu yang dihabiskan hanya untuk merekrut karyawan baru tidak sedikit</li>
                                <li>Sulit menemukan karyawan freelance atau paruh waktu</li>
                                <li>Karyawan yang tidak loyal pada perusahaan</li>
                            </ul>
                        </div>
                    </center>
                </div>
                <div class="text-center forwho-text">
                    <div class="forwho-cont">
                        <div class="container__">
                            <h3>If your company is facing the challenges in recruitment activities in Indonesia, do not hesitate
                                to
                                consult with LOGIQUE. We will support your effective recruitment activities by utilizing your own
                                recruitment website.
                            </h3>
                        </div>
                    </div>
                </div>
            </section>

            <section class="reason-container">
                <div class="container__">
                    <center><img src="assets/img/img-recruitment-website/shadow1.png" alt="" class="img-responsive"></center>
                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img src="assets/img/img-recruitment-website/icon-design.png" alt="" class="img-responsive">
                                <div>We will develop your website with a design that describes your company well. We will use
                                    images
                                    and videos if necessary and also make your website mobile-friendly.</div>
                            </center>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img src="assets/img/img-recruitment-website/icon-seo.png" alt="" class="img-responsive">
                                <div>We will plant our SEO technics into your website. We can also interview your HR team and
                                    create
                                    contents based on it. Our contents are friendly to the candidates, and also to Google.</div>
                            </center>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img src="assets/img/img-recruitment-website/icon-complete.png" alt="" class="img-responsive">
                                <div>We will develop an inquiry form on your website. As options, we can also integrate your
                                    website
                                    with your ERP system or recruitment portal website.</div>
                            </center>
                        </div>
                    </div>
                </div>
            </section>

            <section class="step-container ">
                <div class="container__">
                    <h3>
                        <center>Langkah-Langkah Membuat Halaman Karir</center>
                    </h3>
                    <div class="stepbystep">
                        <div class="row">

                            <div class="col-md-3 col-sm-6 step step2">
                                <div class="step-number-cont"><span>1</span></div>
                                <img src="assets/img/img-recruitment-website/img-step2.jpg" alt="Image Step" class="img-responsive">
                                <h4>Perencanaan</h4>
                                <div class="step-text">Kami akan berdiskusi dengan Anda mengenai preferensi dan konsep halaman
                                    karir.
                                    <br>&nbsp;
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6  step step3">
                                <div class="step-number-cont"><span>2</span></div>
                                <img src="assets/img/img-recruitment-website/img-step3.jpg" alt="Image Step" class="img-responsive">
                                <h4>Desain</h4>
                                <div class="step-text">Pembuatan desain yang menarik dan pengambilan foto akan dilakukan sebagai
                                    komponen penting dari halaman karir tersebut.
                                </div>
                            </div>


                            <div class="col-md-3 col-sm-6 step step5">
                                <div class="step-number-cont"><span>3</span></div>
                                <img src="assets/img/img-recruitment-website/img-step5.jpg" alt="Image Step" class="img-responsive">
                                <h4>Penulisan</h4>
                                <div class="step-text">Kami membantu Anda merangkum dan menampilkan konten yang mudah dimengerti
                                    oleh
                                    pengunjung.
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 step step8">
                                <div class="step-number-cont"><span>4</span></div>
                                <img src="assets/img/img-recruitment-website/img-step8.jpg" alt="Image Step" class="img-responsive">
                                <h4>Halaman karir selesai!</h4>
                                <div class="step-text">Halaman karir siap digunakan untuk membantu proses rekrutmen perusahaan
                                    Anda.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <section class="step-container hidden">
				<div class="container">
					<h3><center>Langkah-Langkah Membuat Halaman Karir</center></h3>
					<div class="stepbystep">
						<div class="row">
							<div class="col-md-3 col-sm-6 step step1">
									<div class="step-number-cont"><span>1</span></div>
									<img src="assets/img/img-recruitment-website/img-step1.jpg" alt="Image Step" class="img-responsive">
									<h4>Diskusi</h4>
									<div class="step-text">Kami akan berdiskusi dengan Anda mengenai preferensi dan gambaran Anda dalam membuat halaman karir ini. <br>&nbsp;
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step2">
									<div class="step-number-cont"><span>2</span></div>
									<img src="assets/img/img-recruitment-website/img-step2.jpg" alt="Image Step" class="img-responsive">
									<h4>Perencanaan</h4>
									<div class="step-text">Kami akan berdiskusi dengan Anda mengenai preferensi dan konsep halaman karir. <br>&nbsp;
									</div>
							</div>
							<div class="col-md-3 col-sm-6  step step3">
									<div class="step-number-cont"><span>3</span></div>
									<img src="assets/img/img-recruitment-website/img-step3.jpg" alt="Image Step" class="img-responsive">
									<h4>Desain</h4>
									<div class="step-text">Pembuatan desain yang menarik dan pengambilan foto akan dilakukan sebagai komponen penting dari halaman karir tersebut.
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step4">
									<div class="step-number-cont"><span>4</span></div>
									<img src="assets/img/img-recruitment-website/img-step4.jpg" alt="Image Step" class="img-responsive">
									<h4>Sesi Foto</h4>
									<div class="step-text">Akan ada sesi foto atau video yang dilakukan secara profesional mengenai materi dari halaman karir perusahaan yang membuat orang tertarik.
									</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-6 step step5">
									<div class="step-number-cont"><span>5</span></div>
									<img src="assets/img/img-recruitment-website/img-step5.jpg" alt="Image Step" class="img-responsive">
									<h4>Penulisan</h4>
									<div class="step-text">Kami membantu Anda merangkum dan menampilkan konten yang mudah dimengerti oleh pengunjung.
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step6">
									<div class="step-number-cont"><span>6</span></div>
									<img src="assets/img/img-recruitment-website/img-step6.jpg" alt="Image Step" class="img-responsive">
									<h4>Coding</h4>
									<div class="step-text">Setelah desain dikerjakan, akan dilakukan coding oleh programmer terbaik kami supaya halaman Anda dapat dengan mudah diakses.
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step7">
									<div class="step-number-cont"><span>7</span></div>
									<img src="assets/img/img-recruitment-website/img-step7.jpg" alt="Image Step" class="img-responsive">
									<h4>QA/Adjust</h4>
									<div class="step-text">Setelah semua poin di atas terpenuhi, akan ada pengetesan dan penyesuaian atas halaman karir Anda di berbagai platform dan aspek.
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step8">
									<div class="step-number-cont"><span>8</span></div>
									<img src="assets/img/img-recruitment-website/img-step8.jpg" alt="Image Step" class="img-responsive">
									<h4>Halaman karir selesai!</h4>
									<div class="step-text">Halaman Karir Selesai!: Halaman karir siap digunakan untuk membantu proses rekrutmen perusahaan Anda.
									</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->

            <section>
                <div class="testimonial-container">
                    <div class="container__">
                        <div class="row">
                            <div class="col-sm-3 testimonial-title">
                                <h3 class="custom-text">Testimoni</h3>
                            </div>
                            <div class="col-sm-9">
                                <div class="testimoni-slick">
                                    <div class="testi-container">
                                        <div class="testi-box">
                                            <div class="quoteicon quote-icon1">"</div>
                                            <div class="testi-text">
                                                Setelah menggunakan konsultasi dan hasil halaman karir yang diberikan oleh
                                                Logique,
                                                kuantitas dan kualitas pelamar kerja perusahaan kami meningkat. Hal ini membuat
                                                kami
                                                bisa mengefisiensikan kinerja staff HR dalam hal rekrutmen.
                                            </div>
                                            <div class="quoteicon quote-icon2 pull-right">"</div>
                                            <div class="arrow-diagonal"></div>
                                        </div>
                                        <div class="testi-owner-container pull-right">
                                            Mr. Tatsuya Miyoshi<br>
                                            <span style="font-style: italic;">TrendPot </span><a style="color:#000"
                                                href="http://trendpot-recruit.asia/" target="_blank"
                                                rel="noreferrer"><u>(http://trendpot-recruit.asia/)</u></a>
                                        </div>
                                    </div>
                                    <div class="testi-container">
                                        <div class="testi-box">
                                            <div class="quoteicon quote-icon1">"</div>
                                            <div class="testi-text">
                                                Solusi HR yang diberikan oleh LOGIQUE berhasil membuat perusahaan kami berjalan
                                                lebih
                                                efektif, kami sangat puas dapat bekerjasama dengan LOGIQUE.
                                            </div>
                                            <div class="quoteicon quote-icon2 pull-right">"</div>
                                            <div class="arrow-diagonal"></div>
                                        </div>
                                        <div class="testi-owner-container pull-right">
                                            Satya Handana <br>
                                            <span style="font-style: italic;">Pemilik Bisnis Konveksi Bandung </span>
                                        </div>
                                    </div>
                                    <div class="testi-container">
                                        <div class="testi-box">
                                            <div class="quoteicon quote-icon1">"</div>
                                            <div class="testi-text">
                                                Dulu kami sangat bergantung dengan agen dalam merekrut karyawan baru, hal ini
                                                membuat
                                                biaya operasional yang kami keluarkan sangat besar. Setelah menggunakan solusi
                                                yang
                                                diberikan oleh LOGIQUE kami berhasil mengefektifkan pengeluaran kami dan
                                                mendapatkan
                                                karyawan sesuai kriteria yang diinginkan perusahaan.

                                            </div>
                                            <div class="quoteicon quote-icon2 pull-right">"</div>
                                            <div class="arrow-diagonal"></div>
                                        </div>
                                        <div class="testi-owner-container pull-right">
                                            Jessy Veronika <br>
                                            <span style="font-style: italic;">Manajer HR Perusahaan Manufaktur </span>
                                        </div>
                                    </div>
                                    <div class="testi-container">
                                        <div class="testi-box">
                                            <div class="quoteicon quote-icon1">"</div>
                                            <div class="testi-text">
                                                Kami sempat kesulitan untuk mendapatkan karyawan yang berkualitas dan sesuai
                                                dengan
                                                kriteria yang kami inginkan. Padahal, kami telah menggunakan situs pencari kerja
                                                serta
                                                mengeluarkan biaya yang cukup mahal, namun tetap kesulitan dalam mendapatkan yang
                                                kami
                                                mau. Namun, setelah kami mencoba penawaran yang diberikan oleh Logique, kami
                                                berhasil
                                                mendapatkan karyawan yang kami inginkan tanpa perlu mengeluarkan biaya yang cukup
                                                mahal dan efektif.

                                            </div>
                                            <div class="quoteicon quote-icon2 pull-right">"</div>
                                            <div class="arrow-diagonal"></div>
                                        </div>
                                        <div class="testi-owner-container pull-right">
                                            Anwar Lubis <br>
                                            <span style="font-style: italic;">Supervisor HR Perusahaan Jasa Transportasi.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="forwho-container">
                <div class="text-center simul-text">
                    <div class="container__">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h3 class="ytext" style="margin-top: 0"><span>Perlu Solusi Lain Untuk Mempermudah Pekerjaan HR
                                        Anda?
                                    </span>Setelah Anda mendapatkan kandidat berkualitas yang lebih banyak mungkin Anda perlu
                                    bantuan
                                    lain dari sisi HR, LOGIQUE menyediakan layanan tambahan yang dapat memberikan solusi bagi
                                    kebutuhan Anda:
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="reason-container">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <center>
                                <img src="assets/img/img-recruitment-website/sugoisaiyo-logo.png" alt="" class="img-responsive">
                                <div class="produk">Jalankan proses rekrutmen dengan mudah dan efektif secara online. Kandidat
                                    dapat
                                    memasukkan data mereka via sistem dan Anda dapat melakukan proses rekrutmen mulai dari
                                    pemeriksaan
                                    CV, psikotes, tes teknikal, pengaturan jadwal interview, hingga memberikan surat penawaran.
                                    Semuanya dapat di monitor dengan mudah melalui satu sistem terintegrasi.</div>
                                <br>
                                <a href="/en/product/sugoi-saiyo.php" class="btn btn-lg btn-yellow">More Detail...</a>
                            </center>
                        </div>
                        <div class="col-sm-6 ">
                            <center>
                                <img src="assets/img/img-recruitment-website/dokodemo-logo.png" alt="" class="img-responsive">
                                <div class="produk">Masalah dan waktu yang kurang efektif ketika karyawan Anda tinggal jauh dari
                                    kantor mungkin membuat Anda berpikir untuk menerapkan sistem kerja remote. Namun tentu saja
                                    sistem
                                    kerja seperti ini dikhawatirkan akan membuat karyawan tidak efisien dalam bekerja. Dengan
                                    Dokodemo
                                    Kerja, Anda tidak perlu khawatir karena sistem ini akan membantu menciptakan kondisi kerja
                                    yang
                                    profesional antara perusahaan dan karyawan. Karyawan dapat mencatat waktu mulai, istirahat,
                                    dan
                                    berhenti kerja untuk perhitungan pembayaran, disisi lain perusahaan juga dapat menerima
                                    informasi
                                    tambahan berupa screenshot yang diambil pada waktu acak untuk memonitor tingkat efisiensi
                                    karyawan.</div>
                                <br>
                                <a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer" class="btn btn-lg btn-yellow">More Detail...</a>
                            </center>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <?php include '../footer.php'; ?>

    </div>
    <!-- <script src="//code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="/js/bootstrap.min.js"></script> -->
    <script src="/js/slick.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
    <script>
    $('.testimoni-slick').slick({
        dots: true,
        prevArrow: false,
        nextArrow: false
    });
    $('.produk').matchHeight({
        byRow: false
    });
    </script>
</body>

</html>