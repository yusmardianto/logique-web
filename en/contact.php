<?php
require_once("../form/fgcontactform.php");

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
    <meta name="description" itemprop="description"
        content="Maximize and increase your business profits through digital growth with LOGIQUE Digital Indonesia, the top Web Development/Design, Digital Marketing and IT consultancy in Jakarta. Contact us to ask more about digital marketing in Indonesia, and how we can help grow your company.">
    <meta name="keywords"
        content="Inquiries, contact us, website creation, web-system development, web marketing, pamphlet, mobile application">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Contact about Digital Marketing Indonesia | LOGIQUE Digital Indonesia">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/en/contact.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/contact-us.png">
    <meta property="og:description"
        content="Grow and increase your business profit through digital with LOGIQUE Digital Indonesia, the top Web Developer / Design, Digital Maketing, & IT Consultant in Jakarta. Contact us to ask more about digital marketing in Indonesia and how we can help your business.Maximize and increase your business profits through digital growth with LOGIQUE Digital Indonesia, the top Web Development/Design, Digital Marketing and IT consultancy in Jakarta. Contact us to ask more about digital marketing in Indonesia, and how we can help grow your company.">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    
    <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0096/6080.js" async="async"></script>
    <title>Contact about Digital Marketing Indonesia | LOGIQUE Digital Indonesia</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>
<style>
/* div.row {
    width: 100%;
} */

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
    /* margin: -35px 50px 0 auto; */
    /* padding: 40px 0; */
    /* margin-left: 95px; */
    /* padding-right: 50px; */
    /* padding-left: 95px; */
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

.lang-logo {
    margin-top: 0;
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
    width: 1.5em;
    height: 1.5em;
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
    z-index: 100;
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
    height: 320px;
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
    padding: 1em;
    position: absolute;
    bottom: 6px;
    right: -12px;
    left: 24px;
    height: 100px;
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

    .checkbox .cr {
        width: 1.7em;
        height: 1.7em;
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

    .checkbox .cr {
        width: 1.8em;
        height: 1.8em;
    }

    .checkbox label {
        font-size: smaller;
    }
}
</style>

<body>
    <div class="wrapper wrapper--update-design">

        <!-- NAVIGATION -->
        <div>
            <button type="button" class="navbar-toggle navbar-toggle--update-design collapsed" aria-label="navbar-toggle"
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
                            <a href="index.php">
                                <div class="img-home"></div>
                                Home
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="logique.php">
                                <div class="img-about"></div>
                                About Us
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="portfolio.php">
                                <div class="img-portfolio"></div>
                                Portfolio
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="services.php">
                                <div class="img-services"></div>
                                Services
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="product.php">
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
                        <div class="text-center active">
                            <a href="contact.php">
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
        <!-- END NAVIGATION -->

        <div class="container-fluid">
            <div class="row lang-logo--update-design">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-11">
                            <div class="container">
                                <ul class="list-inline">
                                    <li class="active"><a href="#">EN</a></li>
                                    <li><a href="../hubungi-kami.php">ID</a></li>
                                    <li><a href="../jp/contact.php">JP</a></li>
                                </ul>
                                <a href="index.php"><img src="/img/logo.png" alt="Logo"
                                        class="img-responsive logo--update-design" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper__" id="contents">

            <section class="--top" style="background-color: #f4f4f4;">
                <div class="container__" style="padding:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="index.php"><span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemprop="item"><span itemprop="name">&nbsp;Contact Us</span></a>
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
                        Contact Us
                    </h1>
                    <!-- <hr class="title__yellow-line--center"> -->
                    <div class="bg-grey" style="padding-top: 10px;">
                        <div class="contact-us-cont">
                            Thank you for showing interest in our products. If you wish to obtain further information about
                            our
                            services in regards to web creation/development,
                            SEO optimization and in other IT related matters, please contact us and ask us about anything by
                            clicking
                            the button below
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--black">
                <div class="container__" style="padding-top:0;padding-bottom:0">
                    <div class="row" style="height: fit-content;">
                        <div class="col-sm-6 col-xs-4">
                            <img class="img-vector" src="../img/vector_smart_object.png" alt="" style="">
                        </div>
                        <div class="col-md-4 col-sm-5" style="padding: 32px 0;">
                            <dt class="d-title" style="color: #fff; text-align: left;">
                                Offers solutions for your digital business problems, anytime and anywhere
                            </dt>
                            <br>
                            <a class="btn btn-hubungi smooth" href="#anchorForm" style="font-size: medium; font-weight: 600;">
                                Contact Us Now
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container__">
                    <div class="clearfix">
                        <div class="contact-us-cont" style="padding:0;">
                            <div class="col-sm-6" style="padding: 1em 0;">
                                <img class="" src="../img/kontak-img.jpg" alt="Hubungi Kami Logique"
                                    style="width: 100%; height: auto; max-width: 500px; object-fit: scale-down; border: 2px solid black; padding: 2%;" />
                            </div>
                            <div class="col-sm-6" style="padding-top: 5%;">
                                <dt class="d-title" style="background: #ffd02a; padding:1em;">
                                    If you feel that improving your website is the key to your business’s success, we are
                                    ready to
                                    help
                                </dt>
                                <p class="d-description">
                                    With 7 years of experience, LOGIQUE is trusted by various companies at both the national
                                    and
                                    international levels.
                                    In addition, through our professional team, we will be able to offer you with the highest
                                    quality of
                                    service for all of your projects
                                </p>
                            </div>
                            <br>
                            <div class="col-sm-10 col-sm-offset-1 text-center">
                                <dt class="d-title" style="margin-top: 3%;">
                                    Feel free to contact LOGIQUE about creating a website, or inquire about any SEO, social
                                    media,
                                    web or
                                    design related questions you may have
                                </dt>
                                <hr class="col-sm-4 col-sm-offset-4 bar-yellow" style="padding: 5px 0; border: none;">
                            </div>

                            <div class="col-sm-8 col-sm-offset-2 text-center sosmed-contact">
                                <a href="https://www.facebook.com/logique.id/" target="_blank" aria-label="Facebook"
                                    rel="noreferrer"><i class="fa fa-facebook-official"
                                        style="color:#777; font-size: xx-large;"></i></a>
                                <a href="https://twitter.com/LogiqueDigital" target="_blank" aria-label="Twitter"
                                    rel="noreferrer"><i class="fa fa-twitter" style="color:#777; font-size: xx-large;"></i></a>
                                <a href="https://www.instagram.com/logiquedigital/" target="_blank" aria-label="Instagram"
                                    rel="noreferrer"><i class="fa fa-instagram" style="color:#777; font-size: xx-large;"></i></a>
                                <a href="https://www.linkedin.com/company/13420656" target="_blank" aria-label="LinkedIn"
                                    rel="noreferrer"><i class="fa fa-linkedin-square"
                                        style="color:#777; font-size: xx-large;"></i></a>
                                <a href="https://api.whatsapp.com/send?phone=62811870321" target="_blank" aria-label="WhatsApp"
                                    rel="noreferrer"><i class="fa fa-whatsapp" style="color:#777; font-size: xx-large;"></i></a>
                            </div>
                            <br>
                            <?php if(isset($msg))
						{
							echo $msg;
						}
						?>
                            <br>
                            <div class="" style="margin-top: 3%;">
                                <form class="contactform" id="moresco-contactform" role="form" name='myForm'
                                    onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>'
                                    method='post' accept-charset='UTF-8'>
                                    <input type='hidden' name='submitted' id='submitted' value='1' />
                                    <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>'
                                        value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                                    <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10" id="anchorForm">
                                        <label for="companyname" class="c-label">Company Name</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="companyname" name="companyname"
                                                aria-label="Company Name"
                                                value='<?php echo $formproc->SafeDisplay('companyname') ?>'
                                                placeholder="COMPANY NAME">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="name" class="c-label">Name</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" aria-label="Name"
                                                value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="NAME">
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="phone" class="c-label">Phone Number</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="phone" name="phone" aria-label="Phone"
                                                value='<?php echo $formproc->SafeDisplay('phone') ?>' placeholder="PHONE NUMBER">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="email" class="c-label">Email</label>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" aria-label="Email"
                                                value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="E-MAIL">
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="message" class="c-label">Message</label>
                                        <div class="form-group" style="margin-top: 10px;">
                                            <textarea class="form-control" name="message" aria-label="Message"
                                                placeholder="MESSAGE"><?php echo $formproc->SafeDisplay('message') ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <b>Inquiry item:</b> <i>(Multiple answers allowed)</i>
                                    </div>

                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]" value="About website creation">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>About
                                                website
                                                creation
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]"
                                                    value="About web-system development / maintenance">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>About
                                                web-system
                                                development / maintenance
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]" value="About web marketing / SEO">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>About
                                                web
                                                marketing
                                                / SEO
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]" value="About internet advertisement">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>About
                                                internet
                                                advertisement
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]"
                                                    value="About company profile, pamphlet, and other printings">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>About
                                                company
                                                profile, pamphlet, and other printings
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]"
                                                    value="We are looking for companies that would join the tender">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>We are
                                                looking for
                                                companies that would join the tender
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]"
                                                    value="We are looking for consultants to start a business in Indonesia">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>We are
                                                looking for
                                                consultants to start a business in Indonesia
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="inquiry[]"
                                                    value="We would like to visit your office the next time you are in Jakarta for a business trip">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>We would
                                                like to
                                                visit your office the next time you are in Jakarta for a business trip
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" style="display:flex;justify-content:center; margin-bottom:1em">
                                        <div class="g-recaptcha pull-right"
                                            data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
                                        <div class="clearfix"></div><br>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-4 paddingleft">
                                        <button type="submit" class="btn btn-block"
                                            onclick="ga('send', 'event', 'Button-Kirim-EN', 'Action-Click', 'Button-Kirim-EN-Label');"
                                            style="background: #f4ce58;">Submit</button>
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
                        <div class="d-title-large title-bg-grey">
                            If you are seeking further information about various matters related to our company, please select
                            one of
                            the options below
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
                            <a class="box-link" href="services.php">
                                <div class="yellow-box">
                                    <img class="img-box" src="../img/global_1.png" alt="">
                                    <dt>Services</dt>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6" style="margin-bottom: 12px;">
                            <a class="box-link" href="product.php">
                                <div class="yellow-box">
                                    <img class="img-box" src="../img/hr.png" alt="">
                                    <dt>Product</dt>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6" style="margin-bottom: 12px;">
                            <a class="box-link" href="logique.php">
                                <div class="yellow-box">
                                    <img class="img-box" src="../img/group_3.png" alt="">
                                    <dt>About Us</dt>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6" style="margin-bottom: 12px;">
                            <a class="box-link" href="../career">
                                <div class="yellow-box">
                                    <img class="img-box" class="" src="../img/promotion_1.png" alt="">
                                    <dt>Career</dt>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <div class="clearfix"></div> -->
            <section class="clearfix">
                <div class="container__" style="padding-top: 0">
                    <div class="d-title-large title-bg-grey text-center"><b>Procedure of Inquiry Forms</b></div>
                    <div class="col-sm-12">
                        <hr class="col-sm-2 col-sm-offset-5 bar-yellow" style="padding: 5px 0; border: none;">
                    </div>
                    <div class="overflow-auto">
                        <ul class="timeline timeline-horizontal">

                            <li class="timeline-item">
                                <div class="timeline-badge primary"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <img src="../img/call_center.png" alt="">
                                    </div>
                                    <div class="timeline-body">
                                        <p class="abs-box">
                                            We will reach you within 2 working days
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge success"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <img src="../img/employee.png" alt="">
                                    </div>
                                    <div class="timeline-body">
                                        <p class="abs-box">
                                            We will confirm with you
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge info"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <img src="../img/confidential.png" alt="">
                                    </div>
                                    <div class="timeline-body">
                                        <p class="abs-box">
                                            A more in-depth hearing, a proposal and quotation
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge danger"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <img src="../img/contract.png" alt="">
                                    </div>
                                    <div class="timeline-body">
                                        <p class="abs-box">
                                            Contract signing and project initiation
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
                            <dt class="d-title-large title-bg-grey" style="text-align: left;">Frequently asked questions:</dt>
                            <hr class="col-sm-1 col-xs-2 bar-yellow" style="padding: 5px 0; border: none;">
                        </div>
                        <div class="mt-12" id="accordion" style="width:100%;">

                            <div class="panel-group" id="accordion">

                                <div class="panel panel-default">
                                    <div class="panel-heading" type="button" data-toggle="collapse" data-parent="#accordion"
                                        data-target="#collapse1">
                                        <dt class="panel-title">
                                            <i class="fa fa-question-circle">&nbsp;</i><a>Is it possible to proceed with a
                                                project
                                                using the English language?</a>
                                        </dt>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            It is possible, though there may be some difficulties.
                                            Most of our staff is able to communicate in English at a practical level. We have
                                            also
                                            ventured to start projects with overseas companies.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion"
                                            data-target="#collapse2">
                                            <i class="fa fa-question-circle">&nbsp;</i><a>Is it possible for you to have a
                                                meeting
                                                overseas?</a>
                                        </dt>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Let us discuss the matter with you first. Mostly, we offer video conference calls,
                                            but
                                            we
                                            might be able to be flexible depending on the case.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion"
                                            data-target="#collapse3">
                                            <i class="fa fa-question-circle">&nbsp;</i><a>
                                                We are thinking about changing our current web/system outsourcer and seek to
                                                replace
                                                them with you.
                                            </a>
                                        </dt>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Please contact us without any further hesitation. There is no need to worry too
                                            much
                                            about
                                            documentation, etc.
                                            In most cases, We are able to develop a wide range of digital products through
                                            years
                                            of
                                            experience in the field
                                            of customer management systems development. We are also capable of developing
                                            systems
                                            to
                                            improve recruitment, e-commerce,
                                            pointing, and content and loan management, among many other things. We are experts
                                            in
                                            systems development, further utilizing
                                            open web technologies to their highest utility. Please contact us for further
                                            details.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion"
                                            data-target="#collapse4">
                                            <i class="fa fa-question-circle">&nbsp;</i><a>
                                                We are seeking a developer to build a management system for our business.
                                            </a>
                                        </dt>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            We are capable of developing various kinds of systems through previous experience
                                            in
                                            the
                                            field of customer management systems development,
                                            as well as developing systems for improved recruitment, e-commerce, pointing, and
                                            content
                                            and loan management, among many others. We are experts
                                            in system development, utilizing open web technologies. Please contact us for
                                            further
                                            details.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion"
                                            data-target="#collapse5">
                                            <i class="fa fa-question-circle">&nbsp;</i><a>
                                                We want to have a partnership / distributor contract with LOGIQUE.
                                            </a>
                                        </dt>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Let us talk about it with you in further detail. Please feel free to visit our
                                            office
                                            if
                                            you are planning any trips to Jakarta.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion"
                                            data-target="#collapse6">
                                            <i class="fa fa-question-circle">&nbsp;</i><a>
                                                We want to build a mobile application.
                                            </a>
                                        </dt>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            We are capable of developing both Android and iOS applications for you. We can
                                            begin
                                            planning the development of the mobile app as well, if you require it.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion"
                                            data-target="#collapse7">
                                            <i class="fa fa-question-circle">&nbsp;</i><a>
                                                We would like to print a marketing tool, are you able to offer printing as
                                                well as
                                                designing services?
                                            </a>
                                        </dt>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            We can of course both design and print pamphlets. And we are also able to design
                                            and
                                            print
                                            other products such as T-shirts.
                                            In case you need to print something extremely difficult, you might better look for
                                            other
                                            company. We can also introduce you
                                            to the companies that we know if you would like us to.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion"
                                            data-target="#collapse8">
                                            <i class="fa fa-question-circle">&nbsp;</i><a>
                                                Are you capable of implementing SEO in the Indonesian Language?
                                            </a>
                                        </dt>
                                    </div>
                                    <div id="collapse8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Yes, and we have a proven track record of excellence in that area; helping many
                                            industries
                                            in the finance,
                                            travel and education fields promote their website so that it’s found in the upper
                                            ranks of
                                            the search results.
                                            Our team, consisting of many Indonesian content writers and marketers, will help
                                            provide
                                            you with the best SEO results.
                                            We are also able to implement SEO in the English and Japanese languages, as well.
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="map-container">
                                <iframe title="Office Map"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7931.5295224445435!2d106.81845993380738!3d-6.294614997607123!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x941fcbe3ecc8c368!2sPT.%20LOGIQUE%20DIGITAL%20INDONESIA!5e0!3m2!1sen!2sid!4v1575185803719!5m2!1sen!2sid"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <?php include 'footer.php';?>
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