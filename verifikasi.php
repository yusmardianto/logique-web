

<?php

require 'conf.php';

$code 	= $mysqli->real_escape_string($_GET['code']);
$type 	= $mysqli->real_escape_string($_GET['type']);

$query = mysqli_query($mysqli, "SELECT count(a.verifikasi_code) as kodeTerbesar FROM al_white_papers a
		WHERE a.verifikasi_code = '{$code}' AND DATE_ADD(NOW(), INTERVAL -24 HOUR) < a.whitepaper_regdate");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];

if($kodeBarang == 0)
{
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description"
        content="LOGIQUE merupakan perusahaan web developer, web design, digital marketing terbaik di Jakarta yang menawarkan berbagai pelayanan serta produk digital untuk perkembangan bisnis Anda. Tertarik untuk mendapatkan layanan dan produk kami. Hubungi kami sekarang juga!">
    <meta name="keywords"
        content="pengembangan sistem web, digital marketing, pembuatan aplikasi android, media sosial, sistem aplikasi, hubungi kami, pembuatan website, konten, pemasaran, konsultasi, seo">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Hubungi Kami | Web Developer, Designer, Digital Marketing | LOGIQUE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/hubungi-kami.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/contact-us.png">
    <meta property="og:description"
        content="LOGIQUE merupakan perusahaan web developer, web design, digital marketing terbaik di Jakarta yang menawarkan berbagai pelayanan serta produk digital untuk perkembangan bisnis Anda. Tertarik untuk mendapatkan layanan dan produk kami. Hubungi kami sekarang juga!">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>White Paper Download | LOGIQUE</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
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
                            <a href="#">
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
		 <div class="content-wrapper__" id="contents">

					<section>
						<div class="container__">
							<div class="clearfix">
								<div class="contact-us-cont">
								 <div class="" style="margin-top: 3%;">
	<div class="message"><center>Download gagal karena link salah<br/>atau masa berlaku-nya telah habis.</center></div>';
	</div>
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
<?php
}else{
	//echo '<div class="message"><center>Download berhasil.</center></div>';
	if($type == 1){
		$filename  = "white-paper-web-dev-1.pdf";
	}else if($type == 2){
		$filename  = "white-paper-commerce.pdf";
	}else if($type == 3){
		$filename  = "white-paper-security.pdf";
	}
		$jasper_path     = '/home/dev/public_html/static/logique-web/whitepaper/';
		$back_dir    ="whitepaper/";
		$file = $back_dir.$filename;
		 
			if (file_exists($file)) {
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename='.basename($file));
				header('Content-Transfer-Encoding: binary');
				header('Expires: 0');
				header('Cache-Control: private');
				header('Pragma: private');
				header('Content-Length: ' . filesize($file));
				ob_clean();
				flush();
				readfile($file);
			}
			exit;
}

?>
						
