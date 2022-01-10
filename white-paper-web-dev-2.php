<?php
require_once("./form/fgwhitepaperform.php");
require './conf.php';

$formproc = new Fgwhitepaperform();

$formproc->AddRecipient(['info@logique.co.id']); 

$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');

if(isset($_POST['submitted']))
{
	if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
		$secret = '6LcuHywUAAAAAEfJ-sZem8CzGVYIUMcxoT0jRhtW';
		// $secret = '6Lf3pA8UAAAAAEECs5-RC010LQ3ehBt76aKv8Rxb';
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
		// print_r($verifyResponse); exit;
		$responseData = json_decode($verifyResponse);
		if ($responseData->success) {
			
			$privacy    = $_POST['privacy'];
			if($privacy){
			$white_paper_type    = $_POST['white_paper_type'];
			$typecompany            = $_POST['typecompany'];
			$company_name            = $_POST['typecompany'].".".$_POST['company_name'];
			$department_name        = $_POST['department_name'];
			$url_social_media            = $_POST['url_social_media'];
			$position        = $_POST['position'];
			$name        = $_POST['name'];
			$email        = $_POST['email'];
			$phone        = $_POST['phone'];
			$verifikasi_code =  $_POST['verifikasi_code'];
			$type_dokumen =  $_POST['type_dokumen'];
            $whitepaper_regdate = date('Y-m-d H:i:s');
            $approvalsumbit =  $_POST['approvalsumbit'];
			//validasi data data kosong
			if (empty($_POST['white_paper_type'])||empty($_POST['company_name'])||empty($_POST['url_social_media'])||empty($_POST['position'])||empty($_POST['email'])||empty($_POST['phone'])) {
				$msg = "<div class='alert alert-success' id='msg' role='alert'>Data Harap Dilengkapi</div>";
			}
			else {
			mysqli_select_db($mysqli,$customerDBName);
            $input = mysqli_query($mysqli,"INSERT INTO al_white_papers (white_paper_id,white_paper_type,company_name,department_name,url_social_media,position,name,email,phone,verifikasi_code,verifikasi_type,whitepaper_regdate) VALUES('','$white_paper_type','$company_name','$department_name','$url_social_media','$position','$name','$email','$phone','$verifikasi_code','$type_dokumen','$whitepaper_regdate')");	
			
			}
				if ($formproc->ProcessForm()) {
						$msg = "<div class='alert alert-success' id='msg' role='alert'>Terima kasih telah melakukan pengisian formulir kami, silakan cek email Anda untuk mendapatkan link download Whitepaper. [<a href='".$base_url."layanan/web-dev.php'>Klik Disini</a>] untuk kembali ke halaman Layanan Pembuatan Website LOGIQUE.</div>";
						$co = "1";
					}
				
			}else{
			$msg = "<div class='alert alert-success' id='msg' role='alert'>Pengisian formulir Gagal</div>";
			}
			
		} else {
			$msg = "<div class='alert alert-warning' id='msg' role='alert'>reCAPTCHA verification failed, please try again.</div>";
		}
	} else {
		$msg = "<div class='alert alert-warning' id='msg' role='alert'>Please click the reCAPTCHA box.</div>";
	}
}

$text = 'abcdefghijklmnopqrstuvwxyz123457890';
$panj = 50;
$txtl = strlen($text)-1;
$result = '';
for($i=1; $i<=$panj; $i++){
 $result .= $text[rand(0, $txtl)];
}

$kodeBarang = $result;


?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description"
        content="Download panduan lengkap mengenai cara membangun & mengembangkan website e-commerce yang menarik dan efektif untuk bisnis online yang Anda miliki | LOGIQUE">
    <meta name="keywords"
        content="pengembangan sistem web, digital marketing, pembuatan aplikasi android, media sosial, sistem aplikasi, hubungi kami, pembuatan website, konten, pemasaran, konsultasi, seo">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="White Paper Download | Pengembangan Website E-Commerce">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/hubungi-kami.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/contact-us.png">
    <meta property="og:description"
        content="Download panduan lengkap mengenai cara membangun & mengembangkan website e-commerce yang menarik dan efektif untuk bisnis online yang Anda miliki | LOGIQUE">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>White Paper Download | Pengembangan Website E-Commerce</title>

    <link rel="canonical" href="https://www.logique.co.id/white-paper-web-dev-2.php" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/whitepaper.css" rel="stylesheet">
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />

</head>
<style>
/* div.row{
		width: 100%;
	} */

/* .breadcrumb {
    padding: 0;
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
    <div class="wrapper wrapper--update-design">
        <!-- NAVIGATION -->
        <div>
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
                            <a href="index.php">
                                <div class="img-home"></div>
                                Beranda
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="logique.php">
                                <div class="img-about"></div>
                                Tentang Kami
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="portofolio.php">
                                <div class="img-portfolio"></div>
                                Portfolio
                            </a>
                        </div>
                        <div class="text-center active">
                            <a href="layanan.php">
                                <div class="img-services"></div>
                                Layanan
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="produk.php">
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
                            <a href="hubungi-kami.php">
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
        <!-- END NAVIGATION -->

        <!-- HEADER -->
        <div class="container-fluid">
            <div class="row lang-logo--update-design">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-11">
                            <div class="container">
                                <ul class="list-inline">
                                    <li><a href="../en/contact.php">EN</a></li>
                                    <li class="active"><a href="#">ID</a></li>
                                    <li><a href="../jp/contact.php">JP</a></li>
                                </ul>
                                <a href="index.php"><img src="img/logo.png" alt="Jasa Pembuatan Website Logique Digital Indonesia"
                                        class="img-responsive logo--update-design" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER -->

        <!-- <br /> -->

        <div class="content-wrapper__" id="contents">

        <section>
                <div class="container__">
                    <div class="clearfix">
					<form class="contactform" id="moresco-contactform" role="form" name='myForm'
                                    onsubmit='return validasi_form(this)' action='<?php echo $formproc->GetSelfScript(); ?>'
                                    method='post' accept-charset='UTF-8'>
                        <div class="contact-us-cont">
						
						<table style="border: 10px solid">
							
                            <div class="" style="margin-top: 3%;">
								 <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <p class="form-title">
                                            <b>Unduh Formulir</b>
                                        </p>
										<p class="form-subtitle">
                                            <!-- Submit the form below to download our whitepaper -->
                                            Harap isi formulir dibawah ini untuk mengunduh whitepaper kami
                                        </p>
										<p>
											<?php if(isset($msg))
											{
												echo $msg;
											}
											?>
										</p>
                                    </div>
									
                                    <input type='hidden' name='approvalsumbit' id='approvalsumbit' value='1' />
                                    <input type='hidden' name='submitted' id='submitted' value='1' />
                                    <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>'
                                        value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                                    <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="name" class="c-label">Dokumen yang dipilih</label>
                                        <div class="form-group">
                                        <select name="white_paper_type" id="white_paper_type" class="form-control">
												<option value="Membangun Website E-Commerce yang Menarik">Membangun Website E-Commerce yang Menarik</option>
										   </select>
                                        </div>
                                    </div>
									<div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="name" class="c-label">Nama<span style="color: red;">*</span></label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" aria-label="name"
                                                value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="Nama" required>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10" id="anchorForm">
                                        <label for="company_name" class="c-label">Nama Perusahaan<span style="color: red;">*</span></label>
                                    </div>
                                    <div class="col-md-1 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <!-- <label for="name" class="c-label"></label> -->
                                        <div class="form-group">
                                           <select name="typecompany" id="typecompany" class="form-control">
												<option value="PT">PT</option>
												<option value="CV">CV</option>
										   </select>
                                        </div>
                                    </div>
                                    <div class="col-md-7 company-section">
                                        <!-- <label for="company_name" class="c-label"></label> -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="company_name" name="company_name" aria-label="company_name"
                                                value='<?php echo $formproc->SafeDisplay('company_name') ?>' placeholder="Nama Perusahaan" required>
                                        </div>
                                    </div>
									<div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="department_name" class="c-label">Nama Departemen</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="department_name" name="department_name" aria-label="department_name"
                                                value='<?php echo $formproc->SafeDisplay('department_name') ?>' placeholder="Nama Departemen">
                                        </div>
                                    </div>
									<div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="url_social_media" class="c-label">URL / Media Sosial<span style="color: red;">*</span></label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="url_social_media" name="url_social_media" aria-label="url_social_media"
                                                value='<?php echo $formproc->SafeDisplay('url_social_media') ?>' placeholder="URL / Media Sosial" required>
                                        </div>
                                    </div>
									 <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="position" class="c-label">Posisi Anda<span style="color: red;">*</span></label>
                                        <div class="form-group">
                                           <select name="position" id="position" class="form-control" required>
												<option disabled selected value="">Pilih Posisi</option>
												<option value="BOD">BOD</option>
												<option value="Manager">Manager</option>
												<option value="Staff">Staff</option>
												<option value="Other">Other</option>
										   </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="email" class="c-label">Alamat Email<span style="color: red;">*</span></label>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" aria-label="Email"
                                                value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="Alamat Email" required>
												<input class="form-control" type="hidden" name="message" aria-label="Message"
                                                placeholder="Pesan" value="Web Development Market Price 2020"/>
												<input class="form-control" type="hidden" name="verifikasi_code" id="verifikasi_code" value="<?php echo $kodeBarang ?>"/>
												<input class="form-control" type="hidden" name="type_dokumen" id="type_dokumen" value="2"/>
												<input class="form-control" type="hidden" name="base_url" id="base_url" value="<?php echo $base_url ?>"/>
                                        </div>
                                    </div>
									
									<div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <label for="phone" class="c-label">No. Telpon<span style="color: red;">*</span></label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" name="phone" aria-label="Phone"
                                                value='<?php echo $formproc->SafeDisplay('phone') ?>' placeholder="No Telpon" required>
                                        </div>
                                    </div>
									
									 <div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10">
                                        <div class="form-group">
											 <label>
                                                <input type="checkbox" name="privacy" value="1" required>
                                                <span class="pr-style">Dengan mengisi ini, saya telah membaca <a href="/en/privacy-policy.php" target="_blank">Privacy Policy</a></span>
                                            </label>
                                        </div>
                                    </div>

                                    
                                </div>
								</table>
									<div class="col-sm-12" style="display:flex;justify-content:center; margin-bottom:1em">
                                        <div class="g-recaptcha pull-right"
                                            data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
                                        <div class="clearfix"></div><br>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-4 paddingleft">
                                        <button type="submit" class="btn btn-block btn-submit"
                                            onclick="ga('send', 'event', 'Button-Kirim', 'Action-Click', 'Button-Kirim-Label');"
                                            >Kirim</button>
                                    </div>
                            </div>
							 </form>
                        </div>
                    </div>
                </div>
            </section>

            

        </div>

        <?php include 'footer.php';?>
        <script async  src='https://www.google.com/recaptcha/api.js'></script>
        <script>
        $(function() {
			<?php if($co=='1'){ ?>
			$("#name").val('');
			 $("#company_name").val('');
			  $("#department_name").val('');
			  $("#url_social_media").val('');
			  $("#email").val('');
			  $("#phone").val('');
			<?php } ?>
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
		
		function validasi_form(form){
		  var  pola_url=/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/|www\.)[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
		   var pola_email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
		   var pola_tel=/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
		   
		   if (!pola_url.test(form.url_social_media.value)){
			  alert ('Format Penulisan URL Salah');
			  form.url_social_media.focus();
			  return false;
		   } 
		   
		  if (!pola_email.test(form.email.value)){
			  alert ('Format Penulisan Email Salah');
			  form.email.focus();
			  return false;
		   } 
		   
		    if (!pola_tel.test(form.phone.value)){
			  alert ('Format Penulisan No.Telpon Salah');
			  form.phone.focus();
			  return false;
		   } 
		   
		return (true);
		}
        </script>
    </div>
</body>

</html>