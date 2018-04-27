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
    <meta name="description" content="LOGIQUE menyediakan layanan pembuatan website karir perusahaan untuk memudahkan pekerjaan HRD dan meningkatkan kualitas dalam rekrutmen.">
	<meta name="keywords" content="website karir, karir perusahaan, jasa website karir, logique">
	<meta name="author" content="Logique Digital Indonesia">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Layanan Website Karir Perusahaan | Logique Digital Indonesia</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" />
	<script src="https://use.fontawesome.com/df558bb4a1.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
	<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-105878648-1', 'auto');
ga('send', 'pageview');

</script>
</head>
	<body class="careerpage">
		<div class="wrapper">
			<header class="head-banner">
				<div class="container">
					<div class="banner-text">
						<h1>
							<span>Anda seorang HRD namun sulit untuk mendapatkan</span><br>
							<span class="ytext">karyawan yang berkualitas</span> <br>
							<span>untuk perusahaan Anda?</span>

						</h1>
						<div class="banner-subt">
							<div class="row">
								<div class="col-md-10">
									Mari Buat Website Perekrutan Karyawan Anda Sendiri<br><br>
									Sebuah Website perekrutan karyawan yang efektif dan mempunyai biaya yang rendah! <br><br>
									Kami sadar dan memahami bahwa menggunakan situs lowongan kerja mempunyai biaya yang mahal serta sulit untuk melakukan pemilihan karyawan yang Anda inginkan.
									<br><br>
									Karena itu, mari kita sedikit lebih bijak dengan mengeluarkan biaya yang rendah namun mempunyai efektivitas yang cukup tinggi sehingga membuat waktu Anda sebagai HRD menjadi lebih efisien dengan membuat sebuah website perekrutan karyawan yang sesuai dengan keinginan Anda.
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</header>
			<div class="offering-part">
					<div class="container">
						<div class="row">
							<div class="col-sm-8">
								<h2 style="padding-top: 15px;">Kami siap memberikan solusi sesuai keinginan Anda!</h2>
							</div>
							<div class="col-sm-4 text-right">
								 <a href="https://www.logique.co.id/hubungi-kami.php" target="_blank"" target="_blank"><img class="logo-logique img-responsive" src="images/logo-y-logique.png" alt="" style="float: right; margin-top:10px;"></a>
							</div>
						</div>
					</div>
				</div>
			<section>
				<div  class="problem-container">
					<div class="container">
						<div class="problem-content row">
							<div class="col-md-v col-sm-8">
								<h3 style="text-align: left;">Masalah-masalah yang seringkali dialami oleh HRD dalam melakukan proses perekrutan karyawan, yaitu:</h3>
								 <div class="row">
								 	
								 	<div class="col-sm-4">
								 		<img src="images/img-problem2.png" class="img-responsive" >
								 		<div>Menggunakan layanan situs pencari kerja namun hasilnya tidak menentu, terkadang jumlah pencari kerja banyak, tapi kualitasnya tidak bagus atau sebaliknya.</div>
								 	</div>
								 	<div class="col-sm-4">
								 		<img src="images/img-problem3.png" class="img-responsive">
								 		<div>Menggunakan jasa agen penyalur tenaga kerja, tapi harganya sangat mahal dan terkadang kualitas karyawan tidak bagus.</div>
								 	</div>
								 	<div class="col-sm-4">
								 		<center><img src="images/img-problem1.png" class="img-responsive"  ></center>
								 		<div>Tidak mempunyai media untuk memberikan informasi kepada para pelamar kerja tentang informasi rekrutmen sehingga antara efektivitas waktu dan biaya tidak seimbang.</div>
								 	</div>
								 </div>
							 
							</div>
						</div>
					</div>
				</div>
				<div class="text-center problem-text">
					
					<div class="arrow-up"></div>
					<div class="container">
						
					<h3><span class="custom-text">Banyak Perusahaan dan HRD yang Menderita dengan Kendala-kendala seperti ini,</span>
					Karena itu, Logique memberikan solusi pembuatan website karir perusahaan dengan berbagai keuntungan, seperti:
					 </h3>
					 <div class="row">
							<div class="col-sm-12">
					<div class="text-left solution-text">
					<div class="row">
						<div class="col-sm-4"> <div>Website karir yang mampu memberikan informasi mengenai budaya, atmosfer serta manfaat bekerja di perusahaan Anda dengan menggunakan media foto dan video yang tidak dimiliki oleh situs layanan pencari kerja.</div></div>
						<div class="col-sm-4"> <div>Website karir yang dikelola sendiri oleh Anda sehingga Anda dapat memperbarui jenis pekerjaan serta syarat-syarat pelamar yang Anda inginkan dengan bebas sesuai keinginan Anda.</div></div>
						<div class="col-sm-4"> <div>Anda dapat melakukan screening secara ketat dan otomatis kepada para pelamar yang Anda cari dengan memberikan tes sederhana melalui form aplikasi yang disediakan untuk mencegah perusahaan mendapatkan pekerja dengan kualitas rendah.</div></div>
					<div class="col-sm-12">
						 
						<center>Kami dapat membuat halaman WEB yang efektif sehingga meningkatkan efektivitas Anda dalam melakukan proses kegiatan rekrutmen lainnya. Selain itu, pada Website karir page tersebut, Anda juga dapat melakukan iklan lowongan kerja secara digital agar mendapatkan lebih banyak kandidat atau mengarahkan halaman situs pencari kerja ke halaman ini sehingga Anda dapat menjelaskan berbagai hal yang tidak dapat dijelaskan di dalam situs pencari kerja tersebut.
						<br><br>
						Anda juga dapat menuliskan persyaratan secara detail di halaman website perekrutan dengan menjelaskan secara tegas bahwa “Saya tidak ingin pekerja dengan kriteria seperti di bawah ini” agar mendapatkan pelamar yang sesuai dengan kriteria yang Anda dan perusahaan inginkan.
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
							<center><h4>Melalui Situs Lowongan Kerja</h4></center>
							<img src="images/simulation1.png" class="img-responsive center-block">
						</div>
						<div class="visible-xs"><br/><br/></div>
						<div class="col-sm-6 simul-3">
							<center><h4>Melalui Agen Penyalur Tenaga Kerja</h4></center>
							<img src="images/simulation2.png" class="img-responsive center-block">
						</div>
					</div>
					<div class="col-sm-12 simul-description">
					 <center>
						Jika pelamar ternyata tidak sesuai dengan kriteria perusahaan, maka biaya serta tenaga yang Anda keluarkan akan menjadi sia-sia. Bahkan bisa saja menimbulkan potensi masalah lain di kemudian hari, seperti pengunduran diri karyawan dalam waktu dekat karena tidak mampu beradaptasi dengan lingkungan kerja sehingga membuat Anda harus mengulang proses rekrutmen karyawan dari awal. Hal ini tentu membuang-buang waktu Anda.
					 </center>
					</div>
					</div>
				</div>
				<div class="text-center simul-text">
					<div class="arrow-up"></div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3 class="ytext"><span>Hindari semua hal tersebut dengan membuat sebuah situs web rekrutmen karyawan.
 </span>Logique menyediakan layanan pembuatan situs web rekrutmen karyawan untuk mengatasi kesulitan para HRD perusahaan dalam mencari pekerja berkualitas di Indonesia.
</h3>
						</div>
					</div>
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
											<span class="price-number" style="font-size: 100px; font-weight: 900; vertical-align: middle;line-height: 90px">20</span>
											<span style="font-size: 32px;vertical-align: middle;font-weight: bold;">Juta</span>
										</center>
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
					<div class="container"><h3>Bagi perusahaan yang merasa kesulitan dalam melakukan kegiatan rekrutmen, maka Logique menawarkan solusinya dengan memberikan layanan pembuatan halaman karir perusahaan yang efektif dan bermanfaat bagi perusahaan.
</h3></div>
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
								<div>Kami memproduksi desain yang bagus sehingga informasi mengenai perusahaan dapat diketahui dengan baik. Selain itu, Anda juga dapat memberikan gambar dan video sesuai kebutuhan serta menjadikan desain website yang responsif untuk digunakan di seluler.</div>
							</center>
						</div>
						<div class="col-sm-4">
							<center>
								<img src="images/icon-seo.png" alt=""  class="img-responsive">
								<div>Kami menggunakan SEO untuk optimisasi konten. Namun sebelumnya kami akan melakukan wawancara terlebih dahulu dengan Divisi HRD dalam pembuatan konten website. Setelah itu, kami akan membuat konten yang relevan sehingga para kandidat mudah untuk memahaminya.</div>
							</center>
						</div>
						<div class="col-sm-4">
							<center>
								<img src="images/icon-complete.png" alt=""  class="img-responsive">
								<div>Kami akan menerapkan formulir aplikasi yang jika diperlukan dapat dihubungkan dengan sistem kepegawaian perusahaan sehingga antara sistem dengan portal perekrutan dapat terbangun suatu sistem koordinasi yang baik bagi perusahaan.</div>
							</center>
						</div>
					</div>
				</div>
			</section>
			<section class="step-container ">
				<div class="container">
					<h3><center>Langkah-Langkah Membuat Halaman Karir</center></h3>
					<div class="stepbystep">
						<div class="row">
							 
							<div class="col-md-3 col-sm-6 step step2">
									<div class="step-number-cont"><span>1</span></div>
									<img src="images/img-step2.jpg" class="img-responsive">
									<h4>Perencanaan</h4>
									<div class="step-text">Kami akan berdiskusi dengan Anda mengenai preferensi dan konsep halaman karir. <br>&nbsp;
									</div>
							</div>
							<div class="col-md-3 col-sm-6  step step3">
									<div class="step-number-cont"><span>2</span></div>
									<img src="images/img-step3.jpg" class="img-responsive">
									<h4>Desain</h4>
									<div class="step-text">Pembuatan desain yang menarik dan pengambilan foto akan dilakukan sebagai komponen penting dari halaman karir tersebut. 
									</div>
							</div>
							 
						 
							<div class="col-md-3 col-sm-6 step step5">
									<div class="step-number-cont"><span>3</span></div>
									<img src="images/img-step5.jpg" class="img-responsive">
									<h4>Penulisan</h4>
									<div class="step-text">Kami membantu Anda merangkum dan menampilkan konten yang mudah dimengerti oleh pengunjung.
									</div>
							</div>
							 
							<div class="col-md-3 col-sm-6 step step8">
									<div class="step-number-cont"><span>4</span></div>
									<img src="images/img-step8.jpg" class="img-responsive">
									<h4>Halaman karir selesai!</h4>
									<div class="step-text">Halaman karir siap digunakan untuk membantu proses rekrutmen perusahaan Anda.
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
									<img src="images/img-step1.jpg" class="img-responsive">
									<h4>Diskusi</h4>
									<div class="step-text">Kami akan berdiskusi dengan Anda mengenai preferensi dan gambaran Anda dalam membuat halaman karir ini. <br>&nbsp;
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step2">
									<div class="step-number-cont"><span>2</span></div>
									<img src="images/img-step2.jpg" class="img-responsive">
									<h4>Perencanaan</h4>
									<div class="step-text">Kami akan berdiskusi dengan Anda mengenai preferensi dan konsep halaman karir. <br>&nbsp;
									</div>
							</div>
							<div class="col-md-3 col-sm-6  step step3">
									<div class="step-number-cont"><span>3</span></div>
									<img src="images/img-step3.jpg" class="img-responsive">
									<h4>Desain</h4>
									<div class="step-text">Pembuatan desain yang menarik dan pengambilan foto akan dilakukan sebagai komponen penting dari halaman karir tersebut. 
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
									<div class="step-text">Kami membantu Anda merangkum dan menampilkan konten yang mudah dimengerti oleh pengunjung.
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
									<div class="step-text">Halaman Karir Selesai!: Halaman karir siap digunakan untuk membantu proses rekrutmen perusahaan Anda.
									</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<section>
				<div class="testimonial-container">
					<div class="container">
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
											Setelah menggunakan konsultasi dan hasil halaman karir yang diberikan oleh Logique, kuantitas dan kualitas pelamar kerja perusahaan kami meningkat. Hal ini membuat kami bisa mengefisiensikan kinerja staff HR dalam hal rekrutmen.  
										</div>
										<div class="quoteicon quote-icon2 pull-right">"</div>
										<div class="arrow-diagonal"></div>
									</div>
									<div class="testi-owner-container pull-right">
										Mr. Tatsuya Miyoshi<br>
										<span style="font-style: italic;">TrendPot </span><a style="color:#000" href="http://trendpot-recruit.asia/" target="_blank"><u>(http://trendpot-recruit.asia/)</u></a>
									</div>
								</div>
								<div class="testi-container">
									<div class="testi-box">
										<div class="quoteicon quote-icon1">"</div>
										<div class="testi-text">
											Solusi HR yang diberikan oleh LOGIQUE berhasil membuat perusahaan kami  berjalan lebih efektif, kami sangat puas dapat bekerjasama dengan LOGIQUE. 
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
											Dulu kami sangat bergantung dengan agen dalam merekrut karyawan baru, hal ini membuat biaya operasional yang kami keluarkan sangat besar. Setelah menggunakan solusi yang diberikan oleh LOGIQUE kami berhasil mengefektifkan pengeluaran kami dan mendapatkan karyawan sesuai kriteria yang diinginkan perusahaan.
	 
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
											Kami sempat kesulitan untuk mendapatkan karyawan yang berkualitas dan sesuai dengan kriteria yang kami inginkan. Padahal, kami telah menggunakan situs pencari kerja serta mengeluarkan biaya yang cukup mahal, namun tetap kesulitan dalam mendapatkan yang kami mau. Namun, setelah kami mencoba penawaran yang diberikan oleh Logique, kami berhasil mendapatkan karyawan yang kami inginkan tanpa perlu mengeluarkan biaya yang cukup mahal dan efektif. 
	 
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
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3 class="ytext" style="margin-top: 0"><span>Perlu Solusi Lain Untuk Mempermudah Pekerjaan HR Anda?
							 </span>Setelah Anda mendapatkan kandidat berkualitas yang lebih banyak mungkin Anda perlu bantuan lain dari sisi HR, LOGIQUE menyediakan layanan tambahan yang dapat memberikan solusi bagi kebutuhan Anda:
							</h3>
						</div>
					</div>
				</div>
			</section>
			<section class="reason-container">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 ">
							<center>
								<img src="images/sugoisaiyo-logo.png" alt=""  class="img-responsive">
								<div>Jalankan proses rekrutmen dengan mudah dan efektif secara online. Kandidat dapat memasukkan data mereka via sistem dan Anda dapat melakukan proses rekrutmen mulai dari pemeriksaan CV, psikotes, tes teknikal, pengaturan jadwal interview, hingga memberikan surat penawaran. Semuanya dapat di monitor dengan mudah melalui satu sistem terintegrasi.</div>
								<br>
								<!-- <a href="#" class="btn btn-lg btn-yellow">Lihat Informasi Lebih Lanjut</a> -->
							</center>
						</div>
						<div class="col-sm-6 ">
							<center>
								<img src="images/dokodemo-logo.png" alt=""  class="img-responsive">
								<div>Masalah dan waktu yang kurang efektif ketika karyawan Anda tinggal jauh dari kantor mungkin membuat Anda berpikir untuk menerapkan sistem kerja remote. Namun tentu saja sistem kerja seperti ini dikhawatirkan akan membuat karyawan tidak efisien dalam bekerja. Dengan Dokodemo Kerja, Anda tidak perlu khawatir karena sistem ini akan membantu menciptakan kondisi kerja yang profesional antara perusahaan dan karyawan. Karyawan dapat mencatat waktu mulai, istirahat, dan berhenti kerja untuk perhitungan pembayaran, disisi lain perusahaan juga dapat menerima informasi tambahan berupa screenshot yang diambil pada waktu acak untuk memonitor tingkat efisiensi karyawan.</div>
								<br>
								<a href="https://www.logique.co.id/produk/dokodemo-kerja.php" class="btn btn-lg btn-yellow">Lihat Informasi Lebih Lanjut</a>
							</center>
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
							<a href="https://www.logique.co.id/" target="_blank"><img src="images/logo-y-logique.png" alt="logo-footer" class="img-responsive"></a>
							<p>LOGIQUE DIGITAL INDONESIA<br>
							Ad Premier Building 19th Floor.<br> Jalan Tb. Simatupang No. 5 
							Ragunan, <br>Ps. Minggu, Jakarta Selatan,<br> Indonesia 12550

							<br>
							&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;(021) 22708935 / 36 
							<br>
							<i class="fa fa-mobile-phone"></i>&nbsp;&nbsp;<i class="fa fa-whatsapp"></i>&nbsp;&nbsp;081296560380
						</p>

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
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/slick.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script>
			$('.testimoni-slick').slick({
				dots: true,
				prevArrow: false,
				nextArrow: false
			});
		</script>
	</body>
</html>