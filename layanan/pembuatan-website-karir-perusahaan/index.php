<?php
// require_once("form/fgcontactform.php");

// $formproc = new FGContactForm();

// //1. Add your email address here.
// //You can add more than one receipients.
// $formproc->AddRecipient(['info@logique.co.id']); //<<---Put your email address here

// //2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// // and put it here
// $formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');

// //$formproc->AddFileUploadField('photo','jpg,jpeg,pdf,doc,docx',40960);

// if(isset($_POST['submitted']))
// {
//     if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
//         $secret = '6LcuHywUAAAAAEfJ-sZem8CzGVYIUMcxoT0jRhtW';
//         // $secret = '6Lf3pA8UAAAAAEECs5-RC010LQ3ehBt76aKv8Rxb';
//         $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
//         // print_r($verifyResponse); exit;
//         $responseData = json_decode($verifyResponse);
//         if ($responseData->success) {
//             if ($formproc->ProcessForm()) {
//                 $msg = "<div class='alert alert-success' id='msg' role='alert'>Thank you for sending us inquiry!</div>";
//             }
//         } else {
//             $msg = "<div class='alert alert-warning' id='msg' role='alert'>reCAPTCHA verification failed, please try again.</div>";
//         }
//     } else {
//         $msg = "<div class='alert alert-warning' id='msg' role='alert'>Please click the reCAPTCHA box.</div>";
//     }
// }

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content=" ">
	<meta name="keywords" content="  ">
	<meta name="author" content=" ">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>Pembuatan website karir perusahaan</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" />
	<script src="https://use.fontawesome.com/df558bb4a1.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
</head>
	<body class="careerpage">
		<div class="wrapper">
			<header class="head-banner">
				<div class="container">
					<div class="banner-text">
						<h1>
							<span>Sulit Menemukan</span><br>
							<span class="ytext">Karyawan Potensial</span> <br>
							<span>untuk Perusahaan Anda?</span>
						</h1>
						<div class="banner-subt">
							Situs lowongan kerja kurang dapat diandalkan?<br>
Komisi untuk agen penyalur tenaga kerja mahal?
						</div>
					</div>
				</div>
				
			</header>
			<div class="offering-part">
					<div class="container">
						<div class="row">
							<div class="col-sm-8">
								<h2 style="padding-top: 15px;">KAMI HADIR UNTUK MEMBANTU ANDA!</h2>
							</div>
							<div class="col-sm-4 text-right">
								 <img class="logo-logique img-responsive" src="images/logo-y-logique.png" alt="" style="float: right; margin-top:10px;">
							</div>
						</div>
					</div>
				</div>
			<section>
				<div  class="problem-container">
					<div class="container">
						<div class="problem-content row">
							<div class="col-md-v col-sm-8">
								<h3>Mungkin Anda sebagai HRD sering menghadapi <br> masalah-masalah ini dalam proses perekrutan karyawan?</h3>
								 <div class="row">
								 	<div class="col-sm-4">
								 		<center><img src="images/img-problem1.png" class="img-responsive"  ></center>
								 		<div>Melakukan pendekatan kepada relasi jaringan sosial, namun mereka menolak Anda pada komunikasi pertama</div>
								 	</div>
								 	<div class="col-sm-4">
								 		<img src="images/img-problem2.png" class="img-responsive" >
								 		<div  >Menggunakan layanan situs pencari kerja berbayar namun jumlah pelamar sedikit, bahkan cenderung menurun pada iklan berikutnya </div>
								 	</div>
								 	<div class="col-sm-4">
								 		<img src="images/img-problem3.png" class="img-responsive">
								 		<div >Menggunakan agen penyalur tenaga kerja namun kualitas serta ketertarikan mereka terhadap peusahaan anda kurang</div>
								 	</div>
								 </div>
							 
							</div>
						</div>
					</div>
				</div>
				<div class="text-center problem-text">
					
					<div class="arrow-up"></div>
					<div class="container">
						
					<h3><span class="custom-text">Banyak perusahaan yang menghadapi kendala-kendala ini</span>
					Logique memberikan solusi pembuatan website karir perusahaan yang dapat:
					 </h3>
					 <div class="row">
							<div class="col-sm-12">
					<div class="text-left solution-text">
					<div class="row">
						<div class="col-sm-4"> <div>Mengenalkan kembali visi dan misi perusahaan Anda, serta tantangan menarik bekerja diperusahaan Anda.</div></div>
						<div class="col-sm-4"> <div> Menginformasikan banyak benefit yang disediakan perusahaan Anda bagi para pekerja.</div></div>
						<div class="col-sm-4"> <div>Memposting lowongan yang tersedia di perusahaan Anda sehingga kandidat baik yang tertarik bekerja di perusahaan Anda bisa melihat lowongan yang cocok.</div></div>
					 
 
					<div class="col-sm-12">
						 
						<center>Dengan ketiga hal tersebut, akan lebih banyak kandidat potensial yang mengetahui tentang perusahaan anda dan juga lowongan yang dibuka. Terlebih lagi dengan menampilkan poin-poin penting dan menarik dari perusahaan dapat membuat kandidat berkemampuan baik tertarik bergabung dengan perusahaan Anda.
			 			 </center>
					</div>
					</div>
				</div>
				</div>
				</div>
			</section>
			<section class="simulation-container">
				<img src="images/img-simulation2.png" class="img-responsive " style="width: 100%;">
				<div class="container">
					<h2 class="text-center">
						Mari Kita lihat Simulasi Biaya Perekrutan dibawah ini
					</h2>
					<div class="simul-cont1">
						<div class="simul-1">Jika Anda ingin merekrut</div>
						<div class="simul-2">
							<img src="images/img-simulation1.png" alt="" class="img-responsive">
						10 karyawan baru</div>
						<div class="simul-3">untuk 10 posisi berbeda,</div>
					</div>
					<center>
						<img src="images/simulation-dot.png" class="img-responsive" style="margin-top: 10px;">
					</center>
				</div>
				<div class="simul-container">
					<div class="container">
					<div class="row">
						<div class="col-sm-6 simul-2">
							<center><h4>Melalui Situs Lowongan Kerja</h4>
							<img src="images/simulation1.png" class="img-responsive"></center>
						</div>
						<div class="col-sm-6 simul-3">
							<center><h4>Melalui Agen Penyalur Tenaga Kerja</h4>
							<img src="images/simulation2.png" class="img-responsive"></center>
						</div>
					</div>
					<div class="col-sm-12 simul-description">
					 Jika dilihat banyak dana dan tenaga yang Anda habiskan di atas, bila pada akhirnya kandidat yang masuk tidak sesuai dengan kriteria atau budaya perusahaan Anda, maka hal ini akan menjadi sia-sia dan mungkin malah menimbulkan masalah yang lain. Misalnya yang cukup ekstrim baru bekerja 1-2 hari langsung mengajukan pengunduran diri yang membuat Anda harus mengulang proses rekrutmen dari awal.
					</div>
					</div>
				</div>
				<div class="text-center simul-text">
					<div class="arrow-up"></div>
					<h3 class="ytext"><span>Untuk menghidari hal-hal tersebut, kombinasikan langkah rekrutmen  yang telah</span>Anda lakukan dengan pembuatan halaman karir dari Logique</h3>
				</div>
			</section>
			<section >
				<div class="solution-container">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-6 col-sm-6 "><img src="images/buble-text.png" class="img-responsive"></div>
							<div class="col-lg-5 col-md-6 col-sm-6 price-tag">
								<div class="price-tag-text">
									<div style="font-size: 30px; font-weight: 900;line-height: 30px">Lebih </div>
									<div class="big-text"  style="font-size: 60px; font-weight: 900; line-height: 50px">Murah & Efektif</div> 
									<div class="custom-text" >Mulai dari</div>
									<div style="">
										<center>
											<span style="font-size: 16px; vertical-align: middle;">IDR</span>
											<span class="price-number" style="font-size: 100px; font-weight: 900; vertical-align: middle;line-height: 90px">30</span>
											<span style="font-size: 32px;vertical-align: middle;font-weight: bold;">Juta*</span>
										</center>
									</div>
									<div class="price-term" style="font-size: 16px; color:#111; margin-top: 10px;">
										(*Initial Cost, dengan biaya maintenance Rp 1 juta/bulan)

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="forwho-container">
				<div class="container hidden">
					<div class="logo-logique2"><center><span class=""><img src="images/logo-y-logique.png"></span> </center></div>
					<h3 class="custom-text">
						<center>Teruntuk staf dan divisi HRD, <br>
						<span  class="custom-text">merasa familiar dengan berbagai permasalahan ini?</span></center>
					</h3>
					<center><div class="list-why">
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
					<div class="container"><h3>LOGIQUE menawarkan solusi bagi segala permasalahan rekrutmen Anda <br>
dengan membuat halaman karir perusahaan Anda semenarik mungkin</h3></div>
					</div>
				</div>
			</section>
			<section class="reason-container">
				<div class="container">
					<center><img src="images/shadow1.png" alt="" class="img-responsive"></center>
					<div class="row">
						<div class="col-sm-4">
							<center>
								<img src="images/icon-design.png" alt=""  class="img-responsive">
								<div>Desain yang bagus memberikan impresi yang baik bagi para pelamar dibandingkan dengan halaman milik kompetitor Anda</div>
							</center>
						</div>
						<div class="col-sm-4">
							<center>
								<img src="images/icon-seo.png" alt=""  class="img-responsive">
								<div>Website yang menarik dan ditunjang dengan implementasi standar SEO yang baik, akan menjadikan web efektif dan menggugah kandidat melamar ke perusahaan Anda</div>
							</center>
						</div>
						<div class="col-sm-4">
							<center>
								<img src="images/icon-complete.png" alt=""  class="img-responsive">
								<div>Informasi lengkap di halaman karir perusahaan Anda membuat Anda yakin akan kriteria yang Anda cari dari seorang pelamar (mencegah adanya ketidakcocokan)</div>
							</center>
						</div>
					</div>
				</div>
			</section>
			<section class="step-container">
				<div class="container">
					<h3><center>Langkah-Langkah Membuat Halaman Karir</center></h3>
					<div class="stepbystep">
						<div class="row">
							<div class="col-md-3 col-sm-6 step step1">
									<div class="step-number-cont"><span>1</span></div>
									<img src="images/img-step1.jpg" class="img-responsive">
									<h4>Diskusi</h4>
									<div class="step-text">Kami akan berdiskusi dengan Anda mengenai preferensi dan gambaran Anda dalam membuat halaman karir ini. <br>&nbsp;
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step2">
									<div class="step-number-cont"><span>2</span></div>
									<img src="images/img-step2.jpg" class="img-responsive">
									<h4>Perencanaan</h4>
									<div class="step-text">Setelah berdiskusi, kami akan mulai merencanakan konsep dari halaman karir perusahaan Anda nantinya. <br>&nbsp;
									</div>
							</div>
							<div class="col-md-3 col-sm-6  step step3">
									<div class="step-number-cont"><span>3</span></div>
									<img src="images/img-step3.jpg" class="img-responsive">
									<h4>Desain</h4>
									<div class="step-text">Halaman karir yang baik didukung dengan desain yang menarik. Pemilihan desain merupakan komponen penting dari halaman karir Anda. 
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step4">
									<div class="step-number-cont"><span>4</span></div>
									<img src="images/img-step4.jpg" class="img-responsive">
									<h4>Sesi Foto</h4>
									<div class="step-text">Akan ada sesi foto atau video yang dilakukan secara profesional mengenai materi dari halaman karir perusahaan yang membuat orang tertarik.
									</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-6 step step5">
									<div class="step-number-cont"><span>5</span></div>
									<img src="images/img-step5.jpg" class="img-responsive">
									<h4>Penulisan</h4>
									<div class="step-text">Konten dari halaman karir Anda haruslah singkat, padat, dan jelas untuk memudahkan pengunjung menangkap isi dalaman karis Anda.
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step6">
									<div class="step-number-cont"><span>6</span></div>
									<img src="images/img-step6.jpg" class="img-responsive">
									<h4>Coding</h4>
									<div class="step-text">Setelah desain dikerjakan, akan dilakukan coding oleh programmer terbaik kami supaya halaman Anda dapat dengan mudah diakses.
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step7">
									<div class="step-number-cont"><span>7</span></div>
									<img src="images/img-step7.jpg" class="img-responsive">
									<h4>QA/Adjust</h4>
									<div class="step-text">Setelah semua poin di atas terpenuhi, akan ada pengetesan dan penyesuaian atas halaman karir Anda di berbagai platform dan aspek.
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step8">
									<div class="step-number-cont"><span>8</span></div>
									<img src="images/img-step8.jpg" class="img-responsive">
									<h4>Halaman karir selesai!</h4>
									<div class="step-text">Setelah berkonsultasi dengan kami, akhirnya jadilah halaman karir perusahaan Anda yang siap digunakan.
									</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="testimonial-container">
					<div class="container">
					<div class="row">
						<div class="col-sm-3 testimonial-title">
							<h3 class="custom-text">Testimoni</h3>
						</div>
						<div class="col-sm-9">
							<div class="testi-container">
								<div class="testi-box">
									<div class="quoteicon quote-icon1">"</div>
									<div class="testi-text">
										Setelah menggunakan konsultasi dan hasil halaman karir yang diberikan oleh Logique, kuantitas dan kualitas pelamar kerja perusahaan kami meningkat. Hal ini membuat kami bisa mengefisiensikan kinerja staff HR dalam hal rekrutmen.  
									</div>
									<div class="quoteicon quote-icon2 pull-right">"</div>
									<div class="arrow-diagonal"></div>
								</div>
								<div class="testi-owner-container pull-right">
									Setyo Hadibuwono<br>
									<span style="font-style: italic;">HR Manager, Inti Media Kencana</span>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</section>

			<footer>
				<div class="footer-container">
					<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4">
							<h3>HUBUNGI KAMI </h3>
							<img src="images/logo-y-logique.png" alt="logo-footer" class="img-responsive">
							<p>LOGIQUE DIGITAL INDONESIA<br>
Ad Premier Building 19th Floor.<br> Jalan Tb. Simatupang No. 5 
Ragunan, <br>Ps. Minggu, Jakarta Selatan,<br> Indonesia 12550</p>

						</div>
						<div class="col-md-6 col-sm-8 mesage-alert ">
							<?php if(isset($msg))
		                    {
		                    echo $msg;
		                    }
		                    ?>
							<form id="contact-form-career" class="contact-form-container" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
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
		 
									<textarea class="textarea-message form-control" name="message" placeholder="PESAN"><?php echo $formproc->SafeDisplay('message') ?></textarea>
								</fieldset>
								<fieldset>
									 
									<div class="g-recaptcha pull-right" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
									<div class="clearfix"></div>
									 
								</fieldset>
								<fieldset class="text-right">
							 
									<button type="submit" class="btn btn-submit submit-button">Kirim</button>
								</fieldset>

							</form>

						</div>
						<div class="col-md-3">
							<p style="line-height: 18px; text-align: justify;">Sebagai tim yang profesional dalam bidang jasa pembuatan website, LOGIQUE menyediakan solusi terbaik yang teroptimasi untuk bisnis Anda. Selain jasa pembuatan website, LOGIQUE juga menyediakan jasa lainnya seperti jasa konsultasi digital, jasa pembuatan aplikasi, desain web, pengembangan web system, jasa SEO dan percetakan. Kami memberikan rancangan terstruktur secara detil baik untuk pembuatan website perusahaan, aplikasi, maupun pembuatan website atau sistem berskala besar dengan kombinasi desain yang terarah dan arsitektur sistem yang baik.</p>
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
		
	</body>
</html>