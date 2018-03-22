 <?php 
require_once("form/fgcontactform.php");

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

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="LOGIQUE menyediakan layanan pembuatan website bagi Dokter Gigi atau Klinik Dental untuk memudahkan para dokter gigi dan klinik mempromosikan klinik atau dokter gigi.">
	<meta name="keywords" content="website dental, dokter gigi, klinik gigi, jasa website dental dan klinik dental, logique">
	<meta name="author" content="Logique Digital Indonesia">
	<!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->
    <title>Layanan Website Dental dan Klinik Dental | Logique Digital Indonesia</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" />
	<script src="https://use.fontawesome.com/df558bb4a1.js"></script>

	<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-105878648-1', 'auto');
ga('send', 'pageview');

</script>
</head>
	<body class="dentalpage">
		<div class="wrapper">
			<header class="head-banner">
				<div class="container">
					<div class="logo-logique">
						<a href="https://www.logique.co.id/"><img src="images/logo_logique.png" alt="" class="img-responsive"></a>
					</div>
					<div class="banner-text text-center">
						<h1 class="text-center avenirblack-text">
							<span>Desain <span class="yel">Website</span> Menarik</span> <br>
							<span>dan Pemasaran Efektif</span><br>
							<span>untuk <span class="yel">Klinik Gigi</span></span>

						</h1>
				 
					</div>
				</div>
			<div class="arraw-down text-center">
				<a href="#masalah"><img src="images/arrowdown.png"></a>
			</div>	
			</header>
			<section id="masalah" class="masalah-section">
				<div class="container">
					<h2 class="text-center">Masalah <span class="white-text">yang sering dihadapi</span> Klinik Gigi</h2>
					<div class="tooth-cont">
								<img src="images/tooth2.png" class="img-responsive">
							</div>
					<div class="row ">
						<div class="col-md-6 col-sm-5">
							
						</div>

						<div class="problem-list col-md-5 col-sm-6">
							<ul>
								<li>Tidak mempunyai website yang bagus</li>
								<li>Sulit mendapatkan pasien baru</li>
								<li>Tingginya persaingan antar Klinik</li>
								<li>Fasilitas Klinik kurang dikenal</li>
								<li>Lokasi sulit ditemukan</li>
								<li>Promosi melalui iklan, mahal</li>
								<li>Pasien sulit menentukan janji konsultasi karena tidak tahu informasi jadwal praktek dokter</li>
							</ul>
						</div>
					</div>

				</div>
			</section>
			<section id="solution" class="solution-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<h2><span class="yellow-text">LOGIQUE</span> siap
								memberikan solusi
								untuk klinik gigi
								Anda!</h2>
								<span class="title-desc">Berikut <strong>layanan solusi</strong> yang kami tawarkan</span>
						</div>
						<div class="col-sm-4 solutionfeature-item">
							<img src="images/screen.png" class="solution-feature-icon">
							<h3>EFFECTIVE<br/>PROMOTION
								<div class="yellowbar"></div>
							</h3>
							<div class="solution-desc">
								Dengan SEO kami membantu
								klinik Gigi untuk lebih mudah
								ditemukan dan tentu saja ini
								membuat informasi lebih mudah
								diteruskan dan tersebar.
							</div>
						</div>
						<div class="col-sm-4 solutionfeature-item">
							<img src="images/social-media.png" class="solution-feature-icon">
							<h3>ONLINE REPUTATION <br>MANAGEMENT
								<div class="yellowbar"></div>
							</h3>
							<div class="solution-desc">
								Kami membantu anda
								membangun reputasi Klinik Gigi
								melalui website dan sosial
								media platform lainnya.
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 solutionfeature-item">
							<img src="images/domain-registration.png" class="solution-feature-icon">
							<h3>EXCLUSIVE DESIGN<br>& DOMAIN NAME
								<div class="yellowbar"></div>
							</h3>
							<div class="solution-desc">
								Kami paham setiap klinik Gigi
								mempunyai teknologi dan
								layanan kenyamanan yang
								berbeda. Nilai-nilai pelayanan
								klinik Gigi anda akan tercermin
								dalam desain yang khusus
								dipersiapkan.
							</div>
						</div>
						<div class="col-sm-4 solutionfeature-item">
							<img src="images/blogging.png" class="solution-feature-icon">
							<h3>EASY CONSULTATION <br>APPOINTMENT
								<div class="yellowbar"></div>
							</h3>
							<div class="solution-desc">
								Kami bisa menghubungkan CS
								Klinik Gigi Anda dengan Pasien,
								sehingga pasien lebih mudah
								mengatur jadwal konsultasi.
							</div>
						</div>
						<div class="col-sm-4 solutionfeature-item">
							<img src="images/viral-marketing.png" class="solution-feature-icon">
							<h3>NON-STOP EFFORTLESS<br>MARKETING
								<div class="yellowbar"></div>
							</h3>
							<div class="solution-desc">
								Website menjadi media promosi
								ke seluruh dunia dan setiap hari,
								setiap saat, bahkan saat Klinik
								Anda tutup.
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="priceandfeature" class="priceandfeature-section">
				
				<div class="priceandfeature-banner">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-6">
								<img src="images/priceandfeature-banner.png" class="img-responsive">
							</div>
							<div class="col-md-4 col-sm-5">
								<div class="price-cont">
									<p>mulai dari</p> 
									<p class="realprice">
									10<span>juta</span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="priceandfeature-content">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12"> 
								<h2>Harga Terjangkau<br> Fitur Lengkap</h2>
							</div>
							<div class="col-md-4 col-sm-6"> 
								<ul class="feature-item">
									<li>Domain unik & hosting klinik gigi</li>
									<li>Mudah dan efektif</li>
									<li>Responsive & lintas platform digital</li>
									<li>Mudah diakses dengan ponsel</li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-6"> 
								<ul class="feature-item">
									<li>Design eksklusif</li>
									<li>Konten berorientasi SEO</li>
									<li>Terhubung dengan jaringan medsos</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="plusfeature" class="plusfeature-section">
				<div class="container">
					<div class="plusfeature-cont">
					<div class="section-title"><h2>Fitur Tambahan</h2></div>
					<div class="plusfeature-list">
						<ul>
							<li>Pengaturan jadwal konsultasi online</li>
							<li>Content Management System</li>
							<li>Photo Shooting</li>
						</ul>
					</div>
				</div>
				</div>
			</section>
			<section id="contactbtn" class="contactbtn-section">
				<div class="container text-center">
					<div class="btn-container"><a class="btn contactbtn" href="https://www.logique.co.id/hubungi-kami.php" target="_blank"> Hubungi Kami </a></div>
				</div>
			</section>
			<section id="testimonial" class="testimonial-section hidden">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-md-offset-1">
							<h2>Testimonial</h2>
						</div>
						<div class="col-md-7 col-sm-8">
							<div class="testimonial-content">
								  Website yang kami bangun ini dapat memperkenalkan klinik kami pada masyarakat luas, sehingga klinik kami lebih di kenal. Website ini juga menjadi media penghubung antara klinik kami dengan pasien. Bekerja sama dengan PT.Logique adalah pilihan yang tepat karena  mereka sangat mengerti apa yang klink kami butuhkan dari sebuah website. PT.Logique memberikan paket lengkap sehingga kami dapat mengunakan website ini dengan baik. Terima kasih Logique.
							</div>
							<div class="testimonial-sender text-right">
								Dr. Edward Deseta<br>Klinik Gigi Sehat Selalu

							</div>
						</div>
					</div>
					 
				</div>
			</section>
			<section id="contact-form" class="contactform-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<h2>Punya pertanyaan dan perlu informasi lebih lanjut ?</h2>
							<div class="contactform-container">
							<?php if(isset($msg))
		                    {
		                    echo $msg;
		                    } 
		                    ?>
							<form id="contact-form-dental"  class="contactform-dental" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
								<input type='hidden' name='submitted' id='submitted' value='1'/>
								<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
								<fieldset><div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div></fieldset>
								<fieldset>
									<input type="text" name="name" id="name" class="input-name form-control"  value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="Nama">
								</fieldset>
								<fieldset>
									<input type="text" name="email" id=" email" class="input-email form-control" value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="Alamat Email">
								</fieldset>
								<fieldset>
		 
									<textarea class="textarea-message form-control" name="message" placeholder="Pesan"><?php echo $formproc->SafeDisplay('message') ?></textarea>
								</fieldset>
								<fieldset>
									 
									<div class="g-recaptcha pull-right" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
									<div class="clearfix"></div>
									 
								</fieldset>  
								<fieldset class="text-right">
							 
									<button type="submit" class="btn btn-submit submit-button">Kirim</button>
								</fieldset>

							</form>  
							<!-- <form>
								<fieldset>
									<input type="text" name="name" id="name" class="input-name form-control"  placeholder="Nama">
								</fieldset>
								<fieldset>
									<input type="text" name="email" id=" email" class="input-email form-control"  placeholder="Alamat Email">
								</fieldset>
								<fieldset>
									<input type="text" name="phone" id=" phone" class="input-phone form-control" placeholder="Nomor Hp">
								</fieldset>
								<fieldset>
									<textarea class="textarea-message form-control" name="message" placeholder="Pesan"></textarea>
								</fieldset>
								<fieldset class="text-right">
									<button type="submit" class="btn btn-submit submit-button">Kirim</button>
								</fieldset>
							</form> -->
							</div>
						</div>
					</div>
				
				</div> 
			</section>
			<footer>
				<div class="footer-container">
					<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-8  col-md-offset-1">
							<h2>Tentang Kami </h2>
							<p style="line-height: 24px; text-align: justify;">
							Sebagai tim yang profesional dalam bidang jasa pembuatan website, LOGIQUE
							menyediakan solusi terbaik yang teroptimasi untuk bisnis Anda. Selain jasa pembuatan
							website, LOGIQUE juga menyediakan jasa lainnya seperti jasa konsultasi digital, jasa
							pembuatan aplikasi, desain web, pengembangan web system, jasa SEO dan percetakan.
							Kami memberikan rancangan terstruktur secara detil baik untuk pembuatan website
							perusahaan, aplikasi, maupun pembuatan website atau sistem berskala besar dengan
							kombinasi desain yang terarah dan arsitektur sistem yang baik.</p>
						</div>
						 
						<div class="col-md-3 col-sm-4">
							
							<a href="https://www.logique.co.id/" target="_blank"><img src="images/logo_logique.png" alt="logo-footer" class="img-responsive"></a>
							<div class="addres-footer">
								<p > 	
								Ad Premier Building 19th Floor.<br> Jalan Tb. Simatupang No. 5, <br>
								Ragunan Ps. Minggu,<br> Jakarta Selatan, Indonesia 12550</p>
								<img src="images/email.png" style="width: 30px;">
							</div>
						</div>
						 
						
					</div>
					</div>
				</div>
				<div class="copyright-container">
					<div class="container text-center">
						&copy; 2017 Logique Digital Indonesia
					</div>
				</div>
			</footer>
		</div>
		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script>
		$(function() {
		    $('a[href*="#"]:not([href="#"])').click(function() {
		      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		        var target = $(this.hash);
		        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
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