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
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" itemprop="description" content="Anda mempunyai kebutuhan terkait pembuatan website dan aplikasi atau percetakan kartu nama, pembuatan profile perusahaan dan brosur? Silakan hubungi LOGIQUE, kami siap membantu Anda.">
	<meta name="keywords" content="konsultasi website, pembuatan website, pembuatan aplikasi, hubungi kami, hubungi logique, logique">
	<meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Konsultasi atau Buat Website Anda | Hubungi Kami | LOGIQUE digital indonesia">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Logique">
	<meta property="og:url" content="https://www.logique.co.id/contact.php">
	<meta property="og:image" content="https://www.logique.co.id/img/logo.png">
	<meta property="og:description" content="Anda mempunyai kebutuhan terkait pembuatan website dan aplikasi atau percetakan kartu nama, pembuatan profile perusahaan dan brosur? Silakan hubungi LOGIQUE, kami siap membantu Anda.">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>Konsultasi atau Buat Website Anda | Hubungi Kami | LOGIQUE digital indonesia</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<script src="https://use.fontawesome.com/df558bb4a1.js"></script>
    
    </head>
	<body>
		<div class="wrapper">
		
			<!-- NAVIGATION -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar first"></span>
				<span class="icon-bar second"></span>
				<span class="icon-bar third"></span> 
			</button>
			<div class="collapse navbar-collapse" id="myNavbar">
			<div class="backdrop-test"></div>
				<div class="logique-nav">
					<div class="margin-for-nav">
						<div class="text-center">
							<a href="index.php">
								<div class="img-home"></div>
								Beranda
							</a>
						</div>
						<div class="text-center">
							<a href="about.php">
								<div class="img-about"></div>
								Tentang Kami
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
								Layanan
							</a>
						</div>
						<div class="text-center">
							<a href="joinus.php">
								<div class="img-career"></div>
								Karir
							</a>
						</div>
						<div class="text-center active">
							<a href="contact.php">
								<div class="img-contact"></div>
								Hubungi Kami
							</a>
						</div>
						<div class="text-center">
							<a href="https://www.logique.co.id/blog/" target="_blank">
								<div class="img-blog"></div>
								Blog
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- NAVIGATION -->
			
			<!-- <div id="bgImg" class="others"><div class="img"></div></div> -->
			<div class="contain-video">
				<video poster="img/video-img.png" id="bgvid" playsinline autoplay muted loop>
					<source src="img/12377093.mp4" type="video/mp4">
				</video>
			</div>
			<div class="bg-white-opacity"></div>
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="lang-logo">
							<ul class="list-inline">
								<li><a href="en/contact.php">EN</a></li>
								<li class="active"><a href="#">ID</a></li>
								<li><a href="jp/contact.php">JP</a></li>
							</ul>
							<a href="index.php"><img src="img/logo.png" alt="Logo" class="img-responsive logo"/></a>
							<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
							  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="index.php"><span itemprop="name">Beranda</span></a><meta itemprop="position" content="1" /></li>
							  <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" ><a itemprop="item" ><span itemprop="name">Hubungi Kami</span></a><meta itemprop="position" content="2" /></li>
							</ol>
							<h1 class="tagline">Anda punya kebutuhan terkait jasa pembuatan website, aplikasi, desain, profil perusahaan, dan brosur? LOGIQUE siap membantu Anda.</h1>
						</div>
					</div>
				</div>
			</div>			
			
			<br/>
			
			<div id="contentsArea">
				<div id="contents">
					<div class="map-container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.8748090433066!2d106.82702104991579!3d-6.296598097694437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f206effdebf1%3A0xca2d9403de2bfbe1!2sAD+Premier+Office+Park!5e0!3m2!1sen!2sid!4v1499330296225" allowfullscreen></iframe>
					</div>
					<div class="title"><b>Hubungi</b><span class="yellow">Kami</span></div>
					<div class="form-container">
						“Jika Anda merasa perlu mengembangkan Website sebagai salah satu alat penjualan terpenting.”<br/>
						“Jika Anda ingin membuat perbedaan dari para pesaing dengan memanfaatkan Website sebagai alat pemasaran.”<br/>
						“Jika Anda ingin mengembangkan usaha dengan Website sebagai kunci utama bisnis Anda.”<br/><br/>
						
						LOGIQUE telah membantu pemasaran Web klien kami yang tersebar di seluruh Asia Tenggara hingga mencapai kesuksesan lewat pengembangan website, pengembangan sistem website, pembuatan aplikasi seluler, peningkatan SEO, dan menganalisa lalu lintas website.<br/>
						Kami dapat membantu bisnis Anda, jika Anda menganggap bahwa Web merupakan kunci dari kesuksesan bisnis Anda.<br/><br/>
						
						<b>Sebelum menghubungi kami, berikut adalah beberapa informasi yang dapat kami bagikan.</b><br/>
						Kami merupakan sebuah tim yang terdiri dari orang-orang yang berasal dari Jepang dan Indonesia. Anda dapat berkomunikasi dengan kami menggunakan Bahasa Indonesia, Inggris dan Jepang.<br/>
						Banyak klien yang bertanya kepada kami “Berapa biaya untuk mengembangkan sebuah website?” Ini merupakan pertanyaan yang sangat sulit.<br/>
						Kami berpengalaman mengembangkan website sederhana seharga Rp.15.000.000 namun sulit bagi kami untuk mengatakan bahwa website sederhana seperti itu akan memberikan dampak bagi bisnis Anda. Jika Anda membandingkan, tentu ada banyak perusahaan pengembang web yang mempunyai harga lebih murah dibandingkan kami. Namun, kami yakin bahwa kami dapat memberikan Anda nilai tersediri jika Anda mencari web developer yang dapat diandalkan yang mampu membawa Anda menuju kesuksesan bisnis.<br/>
						Kami juga siap membantu Anda dalam mengembangkan website berskala kecil dengan anggaran yang terbatas.<br/><br/>
					
						Silakan menghubungi kami untuk pembuatan website, media sosial, konsultasi seputar web, atau desain.<br/><br/>
	                    <?php if(isset($msg))
	                    {
	                    echo $msg;
	                    }
	                    ?>
						<div class="row">
							<div class="col-lg-7">
			                      <form class="contactform" id="moresco-contactform" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
			                      <input type='hidden' name='submitted' id='submitted' value='1'/>
			                      <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
			                      <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
								  <div class="form-group">
									<input type="text" class="form-control" id="companyname" name="companyname" value='<?php echo $formproc->SafeDisplay('companyname') ?>' placeholder="NAMA PERUSAHAAN">
								  </div>
								  <div class="form-group">
									<input type="text" class="form-control" id="name" name="name" value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="NAMA">
								  </div>
								  <div class="form-group">
									<input type="number" class="form-control" id="phone" name="phone" value='<?php echo $formproc->SafeDisplay('phone') ?>' placeholder="NOMOR TELEPON">
								  </div>
								  <div class="form-group">
									<input type="email" class="form-control" id="email" name="email" value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="E-MAIL">
								  </div>
								  <div class="form-group">
									<textarea class="form-control" name="message" placeholder="PESAN"><?php echo $formproc->SafeDisplay('message') ?></textarea>
								  </div>
								  <div class="row">
									  <div class="col-sm-9">
											<div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
											<br/>
									  </div>
									  <div class="col-sm-3 paddingleft">
										<button type="submit" class="btn btn-submit btn-block">Kirim</button>
									  </div>
								  </div>
								</form>
							</div>
							<div class="col-lg-5">
								<span class="yellow">Alamat :</span><br/>
								Ad Premier Building 19th Floor, <br/>
								Jalan Tb. Simatupang No. 5,  Pasar Minggu, <br/>
								Jakarta 12540.  INDONESIA<br/><br/>
								<div class="row">
									<div class="col-xs-6">
										<span class="yellow">Nomor Telepon :</span><br/>
										+62 (21) 2270 8935 <br/>
										+62 (21) 2270 8936
									</div>
									<div class="col-xs-6">
										<span class="yellow">Email :</span><br/>
										info@logique.co.id
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="bg-grey">
						<div class="title-bg-grey">Prosedur Permintaan Informasi</span></div><br/><br/>
						<div class="klien-flow contact-flow row">
							<div class="col-sm-3">
								<div class="div-for-workflow">
								  <div class="valign-center">
										Kami akan menghubungi Anda dalam 2 hari kerja.
								  </div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="div-for-workflow">
									<div class="valign-center">
										Kami akan mengkonfirmasi beberapa hal dengan Anda.
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="div-for-workflow">
									<div class="valign-center">
										Kami akan mendetilkan kebutuhan serta membuatkan proposal proyek untuk Anda. 
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="div-for-workflow">
									<div class="valign-center">
										Pembuatan kontrak dan memulai pengerjaan proyek.
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<!--<div class="form-container">	
							<br/>
							<span class="characteristic-title">Contoh Permintaan</span><br/><br/>
							<ul class="joinus-ul">
								<li>Kami ingin mengembangkan sebuah website</li>
								<li>Kami ingin memperbaharui atau mengupdate website kami</li>
								<li>Kami ingin mengembangkan halaman kampanye / landing page</li>
								<li>Kami ingin melakukan outsourcing untuk operasional website kami</li>
								<li>Kami mencari penyewaan web server dan perusahaan untuk mengelolanya.</li>
								<li>Kami ingin mengembangkan sistem web</li>
								<li>Kami ingin membuat aplikasi Android atau iOS (iPhone)</li>
								<li>Kami ingin meningkatkan SEO dari website yang kami miliki</li>
								<li>Kami ingin memasang atau mengoperasikan iklan di Internet</li>
								<li>Kami ingin menganalisa trafik yang terjadi pada website kami</li>
								<li>Kami mencari sebuah perusahaan untuk konsultasi bisnis internet kami</li>
								<li>Kami ingin melakukan pemasaran konten</li>
								<li>Kami ingin melakukan pemotretan dan pembuatan video</li>
								<li>Kami mencari perusahaan yang dapat mendesain profil perusahaan atau hasil cetakan lainnya untuk pameran</li>
							</ul>
						</div>-->
						<br/><br class="hidden-xs"/><div class="label-questions">Pertanyaan yang sering diajukan:</div><br/>
						<div class="question">Apakah memungkinkan bagi Anda untuk memproses proyek menggunakan Bahasa Inggris?</div>
						<div class="answer">Pada umumnya bisa saja, tapi mungkin akan ada beberapa kesulitan ketika memprosesnya dalam bahasa Inggris. Namun, Anda tidak perlu khawatir sebab kebanyakan dari staff kamu mampu berkomunikasi dengan bahasa Inggris cukup untuk memproses proyek tersebut. Kami juga menerima proyek yang berasal dari perusahaan di luar negeri.</div>
						<br/>
						<div class="question">Dapatkah Anda mengadakan pertemuan di luar negeri?</div>
						<div class="answer">Terkait hal ini kami akan mendiskusikannya dengan Anda terlebih dahulu. Biasanya kami menawarkan percakapan via video seperti Skype untuk melakukan hal tersebut, tapi kami juga dapat bersikap fleksibel tergantung dari kondisi dan kasus yang dihadapi.</div><br/>

						<div class="question">Kami berpikir untuk mengganti outsourcer sistem atau website kami dan dengan tim Anda.</div>
						<div class="answer">Silahkan hubungi kami jika Anda berpikir seperti itu, jangan ragu dan khawatir perihal dokumentasi dan sebagainya. Sebab, pada beberapa kasus yang telah kami alami, kami dapat mengelola dan mengoperasikan web / sistem meskipun dengan dokumentasi yang minim selama outsourcer sebelumnya menggunakan teknologi yang pada umumnya telah dipakai.</div><br/>

						<div class="question">Kami mencari developer untuk membangun sebuah sistem manajemen untuk bisnis kami.</div>
						<div class="answer">Dengan pengalaman kami sebagai pengembang sistem, kami dapat mengembangkan berbagai macam sistem, seperti sistem manajemen pelanggan, sistem manajemen peminjaman, sistem rekrutmen, sistem penunjuk, e-commerce, sistem manajemen konten, dan lain-lain. Kami juga ahli dalam pengembangan sistem dengan teknologi website yang umumnya digunakan. Silahkan hubungi kami untuk berdiskusi dan menanyakan hal ini lebih lanjut.</div><br/>

						<div class="question">Kami ingin bermitra atau menjadi distributor LOGIQUE.</div>
						<div class="answer">Mari kita bicarakan hal ini secara rinci. Silahkan kunjungi kantor kami jika Anda mempunyai rencana ke Jakarta.</div><br/>
						
						<div class="question">Kami ingin membuat aplikasi Android atau iOS (iPhone).</div>
						<div class="answer">Kami mampu mengembangkan aplikasi Android dan iOS untuk Anda. Jika Anda inginkan, kami dapat merencanakan pembuatan aplikasi tersebut untuk Anda.</div><br/>
						
						<div class="question">Kami ingin mencetak alat pemasaran tapi apakah Anda juga menyediakan layanan pencetakan selain desain?</div>
						<div class="answer">Tentu saja kami dapat membantu mendesain dan mencetak pamflet sekaligus untuk Anda. Selain itu, kami juga bisa mendesain dan mencetak produk lainnya seperti kaos. Namun, jika Anda ingin mencetak sesuatu yang sangat sulit, lebih baik Anda mencari perusahaan percetakan khusus. Kami juga dapat memperkenalkan kepada Anda perusahaan yang kami tahu jika Anda menginginkannya.</div><br/>
						
						<div class="question">Apakah Anda mampu mengimplementasikan SEO dalam bahasa Indonesia?</div>
						<div class="answer">Ya, kami mempunyai keahlian SEO yang kami tunjukkan di berbagai situs yang telah berada di deretan paling atas pada berbagai industri, seperti keuangan, perjalanan, pendidikan, dan lain-lain. Tim kami terdiri dari penulis konten dan pemasaran yang berasal dari Indonesia yang akan memberikan hasil terbaik untuk pelayanan SEO bagi Anda. Selain itu, kami juga dapat menerapkan SEO dalam bahasa Inggris dan Jepang dengan baik.</div><br/>						
					</div>
				</div>
			</div>
			
			<?php include 'footer.php';?>
			
		</div>
	</body>
</html>