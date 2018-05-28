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
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Dokodemo-Kerja adalah solusi terbaik untuk para pekerja professional dengan waktu yang fleksibel dan independen, sehingga membuat perusahaan dan karyawan menjadi senang.">
	<meta name="keywords" content="">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Dokodemo-Kerja | Logique Digital Indonesia</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style_dokodemo.css" rel="stylesheet">
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
	<body class="dokodemo">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="height100vh">
							<div class="valign-center">
								<img class="img-responsive center-block" src="img/dokodemo-kerja/dokodemo-logo.png" alt="Dokodemo-Kerja Logo"/>
								<br/>
								<h1 class="anton title"> Solusi Kerja Fleksibel<br class="hidden-xs"/> yang Lebih Produktif</h1>
								<hr/>
								<p class="text-center">
									Setiap hari, kemacetan dan lamanya perjalanan menuju kantor menjadi salah satu penyebab stres bagi sebagian besar pekerja. Belum lagi jika sedang musim hujan, keterlambatan pun menjadi hal yang terpaksa dimaklumi. Akibatnya, produktivitas jadi menurun. Target perusahaan pun terpaksa ditunda. Jika saja karyawan bisa bekerja tanpa keterikatan waktu dan tempat, bukankah produktivitas akan meningkat, dan hal-hal di atas tidak perlu dipermasalahkan?
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="bg-black">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="title">
							<span class="blue">Dokodemo-Kerja?</span><br/>
							<div class="quote">“</div>adalah solusi IT yang mampu mengatasinya.
						</div>
						<br/>
						<img src="img/dokodemo-kerja/bg-black.png" alt="Apa itu Dokodemo-Kerja?" class="img-responsive"/>
					</div>
					<div class="col-md-6 text-justify">
						<h2 class="title2">Apa Itu <span class="blue">Dokodemo-Kerja?</span></h2>
						<span class="blue">Dokodemo-Kerja</span> adalah sistem kerja profesional yang dibuat untuk para pekerja independen dan fleksibel, namun tetap ingin lebih dalam hal produktivitas kerja. Sistem kerja ini merupakan solusi terbaik bagi perusahaan agar dapat mengetahui secara detail kinerja dari seluruh karyawannya.<br/><br/>
						Dengan menggunakan sistem teknologi ini, perusahaan dapat menerapkan sistem kerja remote bagi karyawannya di mana pun dan kapan pun. Karyawan pun dibebaskan dari kejenuhan dan ketatnya suasana kerja dalam kantor.<br/><br/>
						Selain untuk karyawan dengan sistem <i>remote</i>, <span class="blue">Dokodemo-Kerja</span> ternyata juga dapat Anda pergunakan untuk memantau produktivitas karyawan di kantor. Selain untuk memantau pekerjaan, <span class="blue">Dokodemo-Kerja</span> juga dapat digunakan oleh HR dan Manajer sebagai salah satu syarat untuk menentukan kinerja para karyawan.
						<br/><br/><br/>
						<div class="text-center">
							<a href="#divForm" class="smooth btn btn-coba">Coba Sekarang</a>
						</div>
						<br/><br/>
					</div>
				</div>
			</div>
		</div>
		
		<div class="bg-yellow">
			<img src="img/dokodemo-kerja/image-fitur.png" class="image-fitur img-responsive"/>
			<div class="container-fluid">
				<div class="bg-old-yellow">
					<div class="row" style="margin:0">
						<div class="col-md-6 col-md-offset-6">
							<div class="bg-one-fitur">
								<div class="one-fitur" style="margin-bottom: 0;">
									<img src="img/dokodemo-kerja/fitur1.png" class="img-responsive"/>
									Melacak dan memantau tugas karyawan hanya dalam satu klik.<br/>
									Dokodemo-kerja mengambil cuplikan layar (screen capture) aktivitas kerja karyawan pada layar perangkat komputernya dalam waktu yang acak (random) dan mengirimnya pada tim manajemen (administrator).
								</div>
							</div>
						</div>				
					</div>
				</div>				
				<div class="row" style="margin:0">
					<div class="col-md-6" style="padding: 0;">
						<div class="title-fitur anton">
							<span class="anton">Fitur</span><br/> Dokodemo-Kerja
						</div>
						<div class="dengan-fitur">
							<div class="quote">“</div>Dengan fitur-fitur tersebut, Dokodemo-Kerja dapat menjadi revolusi sistem kerja baru bagi perusahaan dan karyawan Anda. 
						</div>
					</div>
					<div class="col-md-6 one-fitur-btm">
						<div class="bg-one-fitur visible-sm visible-xs">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur1.png" class="img-responsive"/>
								Melacak dan memantau tugas karyawan hanya dalam satu klik.<br/>
								Dokodemo-kerja mengambil cuplikan layar (screen capture) aktivitas kerja karyawan pada layar perangkat komputernya dalam waktu yang acak (random) dan mengirimnya pada tim manajemen (administrator).
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur2.png" class="img-responsive"/>
								Mendapatkan laporan waktu kerja karyawan secara mudah<br/>
								Mengkalkulasi total jam kerja para karyawan, termasuk penghitungan jam istirahat, secara akurat hanya dengan satu klik secara mudah karena semua berjalan sesuai dengan real time yang dilakukan oleh karyawan.
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur3.png" class="img-responsive"/>
								Mengelola jam kerja karyawan<br/>
								Mengelola total jam kerja serta proyek atau konten yang dikerjakan oleh karyawan, sehingga mampu membuat perusahaan dapat menentukan target waktu yang bisa dicapai oleh para karyawannya.
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur4.png" class="img-responsive"/>
								Melihat waktu kerja karyawan hanya dalam satu tampilan layar<br/>
								Menampilkan total jam kerja seluruh karyawan dalam satu tampilan layar, sehingga memudahkan perusahaan untuk menentukan kinerja dari seluruh karyawan yang ada di perusahaannya secara jujur dan transparan.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- <div class="bg-why">
			<h2 class="title">Mengapa Memakai Dokodemo-Kerja?</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Saat ini, cukup banyak karyawan yang bekerja sebagai freelance untuk menghemat waktu. Dokodemo-Kerja dapat membantu Anda mencatat jam kerja karyawan remote secara efektif dan efisien.</li>
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dokodemo-Kerja dapat mempermudah Anda dalam memantau produktifitas karyawan yang bekerja dari jarak jauh.</li>
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dokodemo-Kerja dapat membantu Anda dalam mengelola dan mengatur masalah kehadiran karyawan.</li>
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dengan Dokodemo-Kerja, perusahaan dapat mendorong karyawan untuk lebih bersemangat dan produktif dalam bekerja.</li>
						</ul>
						<div class="text-center">
							<a href="#divForm" class="smooth btn btn-coba">Butuh Solusi yang Nyata?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<h2 class="title-masalah anton">Masalah yang Sering Dihadapi</h2> -->
		<div class="bg-masalah1">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="pl-25">
							<div class="anton title-masalah1">Dokodemo-Kerja</div>
							<div class="kami-siap">Kami Siap Membantu Anda</div>
							<div class="desc-bantu">
								<div class="quote">“</div>
								<strong>Dokodemo-Kerja</strong> merupakan solusi sistem kerja yang menguntungkan, baik bagi karyawan maupun perusahaan. Dengan sistem kerja efisien, <strong>Dokodemo-Kerja</strong> bisa membantu perusahaan berkonsentrasi pada peningkatan produktivitas sekaligus memberikan fleksibilitas pada karyawannya.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-masalah2">
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-6 col-lg-6">
						<div class="pr-25" style="min-height: 185px;">
						<br/>
							<div class="blue2 font18"><strong class="font18">Mengapa harus Dokodemo-Kerja?</strong></div>
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Mempermudah perusahaan dalam memantau produktivitas karyawan yang bekerja dengan sistem jarak jauh (<i>freelance</i>, <i>sistem remote</i>, dsb).</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Membantu karyawan bekerja dengan fleksibel dan lebih produktif tanpa harus meninggalkan rumah.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-masalah3">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="pl-25" style="min-height: 169px">
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Mencegah karyawan mengisi laporan kerja yang tidak sesuai dengan kenyataannya.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Mempermudah pencatatan dan pengelolaan aktivitas dan jam kerja karyawan secara tepat.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Membantu mendorong karyawan untuk lebih bersemangat dalam bekerja dengan fleksibilitas waktu yang dimiliki.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="div-masalah">
			<div class="container">
				<div class="border-white">
					<div class="row">
						<div class="col-md-6">
							<img class="masalah2 hidden-sm hidden-xs" alt="Masalah 2" src="img/dokodemo-kerja/masalah2.png"/>
						</div>
						<div class="col-md-6">
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Divisi HR terlalu lelah untuk memperingati karyawan yang seringkali terlambat dan kurang produktif.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Perusahaan sulit dalam memantau karyawan yang bekerja secara jarak jauh.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="div-masalah last">
			<div class="container">
				<div class="border-white">
					<div class="row">
						<div class="col-md-6">
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Karyawan keliru dalam mengisi laporan pekerjaan.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Karyawan perusahaan tidak mengisi jam kerja sesuai dengan kenyataannya.</li>
							</ul>
						</div>
						<div class="col-md-6">
							<img class="masalah3 hidden-sm hidden-xs" alt="Masalah 3" src="img/dokodemo-kerja/masalah3.png"/>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="bg-blue text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<img class="img-responsive center-block" src="img/dokodemo-kerja/dokodemo-logo.png" alt="Dokodemo-Kerja Logo"/>
						<br/>
						<div class="title anton">Dokodemo-Kerja merupakan solusi yang tepat.</div>
						<hr/>
						<p>
							Bagi perusahaan yang sedang mempertimbangkan sistem kerja jarak jauh (freelance, pekerja remote, dsb). Bagi perusahaan yang ingin meningkatkan produktivitas sekaligus kebahagiaan karyawan. Bagi perusahaan yang ingin membatasi penggunaan jam kerja yang tidak efisien, seperti jeda merokok dan istirahat setelah beribadah, menonton video  hiburan yang berlebihan, hingga membuka media sosial pribadi.
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="harga">
			<div class="container">
				<div class="title anton">Harga Dokodemo-Kerja</div><br/>
				<div class="text-center">Dokodemo-Kerja diciptakan bagi perusahaan untuk memantau dan melacak waktu kerja karyawan mereka, para freelancer atau pekerja remote sehingga produktivitas perusahaan meningkat. Berikut ini rincian kategori dari Dokodemo-Kerja. Semua harga paket ini tidak dikenakan biaya tambahan.</div><br/>
				<br/>
				<div class="row">
					<div class="col-md-4">
						<div class="card-harga">
							<div class="title-card text-center">Basic Plan</div>
							<div style="padding:30px 0;border-bottom: 1px solid #fff;">
								<div class="price"><strong>1 JUTA</strong></div>
								<div class="price" style="font-size: 15px;">PER BULAN</div>
							</div>
							<div class="plan-list">
								<ul class="fa-ul">
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Pelacakan waktu</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot monitoring</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>1 tangkapan layar per 10 menit</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot disimpan selama 2 bulan</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>
									Untuk 10 orang pengguna*<br/>
									<div style="font-size: 12px;color: #da0101;margin-top: 10px;font-style: italic;">Jika lebih dari 10 orang pengguna, maka setiap pengguna dikenakan biaya Rp 50.000/ bulan</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card-harga">
							<div class="title-card text-center">Pro Plan</div>
							<div style="padding:30px 0;border-bottom: 1px solid #fff;">
								<div class="price"><strong>3 JUTA</strong></div>
								<div class="price" style="font-size: 15px;">PER BULAN</div>
							</div>
							<div class="plan-list">
								<ul class="fa-ul">
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Pelacakan waktu</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot monitoring</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>1 tangkapan layar per menit</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot disimpan selama 6 bulan</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>
									Untuk 10 orang pengguna*<br/>
									<div style="font-size: 12px;color: #da0101;margin-top: 10px;font-style: italic;">Jika lebih dari 10 orang pengguna, maka setiap pengguna dikenakan biaya Rp 75.000/ bulan</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card-harga">
							<div class="title-card text-center">Enterprise Plan</div>
							
							<div class="text-center heightauto" style="padding:15px;">
							<div class="valign-center">
							Silahkan hubungi kami untuk mendapatkan informasi secara detail.
								<div class="text-center">
									<a href="#divForm" class="smooth btn btn-coba">Hubungi Kami</a>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br/>
		
		<!--<div class="div-dokodemo">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="title">Dokodemo-Kerja</div>
						<p>Direkomendasikan bagi perusahaan yang mempertimbangkan pekerja jarak jauh (freelencer, remote worker,etc), perusahaan yang ingin meningkatkan produktifitas karyawan, perusahaan yang ingin membatasi penggunaan waktu kerja yang tidak efisien (merokok, istirahat setelah solat, etc)</p>
					</div>
				</div>
			</div>
		</div>-->
		<div class="div-form" id="divForm">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title text-center">
							<span class="blue2">Untuk informasi lebih lanjut mengenai </strong>Dokodemo-kerja</strong>, </span><br/>
							silahkan hubungi kami dengan mengisi form dibawah ini!
						</div>
					</div>
				</div>
				<br/>
				<?php if(isset($msg))
				{
				echo $msg;
				} 
				?>
				<form role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
					<input type='hidden' name='submitted' id='submitted' value='1'/>
					<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
					<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<input type="text" class="form-control" name="name" placeholder="Nama" value='<?php echo $formproc->SafeDisplay('name') ?>'/>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="company" placeholder="Perusahaan" value='<?php echo $formproc->SafeDisplay('company') ?>'/>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<input type="number" class="form-control" name="phone" placeholder="Nomor Ponsel" value='<?php echo $formproc->SafeDisplay('phone') ?>'/>
							</div>
							<div class="col-md-5">
								<input type="email" class="form-control" name="email" placeholder="Email" value='<?php echo $formproc->SafeDisplay('email') ?>'/>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<div style="padding:10px;background:#fff">
									<span class="blue fw-300">Jenis Kebutuhan yang spesifik</span>
									<div class="radiobuttons">
										<div class="rdio"> <input name="needs" value="Pengenalan Dokodemo-Kerja" id="radio1" type="radio" checked>
										  <label for="radio1">Tentang pengenalan Dokodemo-Kerja</label>
										</div>
										<div class="rdio">
										  <input name="needs" value="Cara menggunakan Dokodemo-Kerja" id="radio2" type="radio">
										  <label for="radio2">Tentang cara dan penggunaan Dokodemo-Kerja</label>
										</div>
										<div class="rdio">
										  <input name="needs" value="Untuk kerja jarak jauh" id="radio3" type="radio">
										  <label for="radio3">Tentang sistem kerja jarak jauh</label>
										</div>
										<div class="rdio">
										  <input name="needs" value="Untuk meningkatkan produktivitas karyawan" id="radio4" type="radio">
										  <label for="radio4">Tentang produktivitas karyawan</label>
										</div>
										<div class="rdio">
										  <input name="needs" value="Untuk kontrol jam kerja karyawan" id="radio5" type="radio">
										  <label for="radio5">Tentang kontrol jam kerja karyawan</label>
										</div>
									</div>
								</div>
								<br/>
							</div>
							<div class="col-md-5">
								<textarea name="message" class="form-control" placeholder="Deskripsi"><?php echo $formproc->SafeDisplay('message') ?></textarea>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
							</div>
							<div class="clearfix"></div>
						</div>
						<center>
							<button type="submit" href="#" class="btn btn-coba">Kirim</button>
						</center>
					</div>
				</form>
			</div>
		</div>
		<div class="div-faq">
			<div class="anton title yellow">Pertanyaan yang sering diajukan:</div>
			<br/>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<span class="blue2 fw-500">Bagaimana <strong>Dokodemo-Kerja</strong> merekam jam kerja karyawan?</span><br/>
						Dokodemo-Kerja merekam aktivitas dan jam kerja untuk setiap proyek yang dikerjakan karyawan pada layar perangkat komputernya. Perhitungan akan dimulai dan dihentikan dengan perintah <i>start/stop</i>.<br/><br/>
						 
						<span class="blue2 fw-500">Apakah <strong>Dokodemo-Kerja</strong> memerlukan akses internet?</span><br/>
						Akses internet diperlukan untuk mengaktifkan dan mengelola akun Dokodemo-Kerja, serta mengirim data rekaman aktivitas dan jam kerja ke database.<br/><br/>
						 
						<span class="blue2 fw-500">Bagaimana jika akses internet saya putus saat <strong>Dokodemo-Kerja</strong> berjalan?</span><br/>
						Tidak masalah. Akses internet tidak dibutuhkan selama proses penghitungan. Namun, Anda membutuhkan koneksi internet saat tombol stop diklik untuk mengirim data ke database.<br/><br/>
						 
						<span class="blue2 fw-500">Berapa jumlah pengguna yang didukung oleh <strong>Dokodemo-Kerja</strong>?</span><br/>
						Jumlah pengguna bisa disesuaikan menurut kebutuhan perusahaan.<br/><br/>
						 
						<span class="blue2 fw-500">Apakah <strong>Dokodemo-Kerja</strong> bisa diakses lewat perangkat seluler?</span><br/>
						Untuk saat ini, perangkat seluler hanya bisa mengakses Dokodemo-Kerja melalui browser.<br/><br/>
						
						<span class="blue2 fw-500">Bagaimana cara menyiapkan layanan <strong>Dokodemo-Kerja</strong>? </span><br/>
						Kami akan menyediakan panduan menyiapkan layanan Dokodemo-Kerja langkah demi langkah. Mulai dari cara mengakses akun master, mengakses aplikasi dan menginstalnya, hingga penggunaannya bagi karyawan.<br/><br/>
						
						<span class="blue2 fw-500">Bagaimana cara mengetahui apakah PC atau Mac saya dapat menjalankan <strong>Dokodemo-Kerja</strong>? </span><br/>
						Dokodemo-Kerja mendukung PC yang menjalankan sistem operasi Windows, Linux, dan Macintosh.<br/><br/>
					</div>
					<div class="col-md-6">
						<span class="blue2 fw-500">Bahasa apa saja yang tersedia untuk <strong>Dokodemo-Kerja</strong>?</span><br/>
						Untuk saat ini, Dokodemo-Kerja tersedia dalam Bahasa Indonesia dan Inggris.<br/><br/> 
						 
						<span class="blue2 fw-500">Dapatkah saya melakukan uji coba <strong>Dokodemo-Kerja</strong> terlebih dahulu sebelum membelinya?</span><br/>
						Tentu saja. Untuk mendapatkan layanan uji coba, silakan hubungi kami.<br/><br/>
						
						<span class="blue2 fw-500">Bagaimana jika saya punya masalah dalam menggunakan <strong>Dokodemo-Kerja</strong>?</span><br/>
						Jangan khawatir. Jika Anda mengalami masalah dalam menggunakan Dokodemo-Kerja, Anda dapat langsung menghubungi kami. Kami akan membantu Anda dengan senang hati.<br/><br/>
						
						<span class="blue2 fw-500">Saya tertarik menggunakan <strong>Dokodemo-Kerja</strong> untuk perusahaan saya. Bagaimana saya bisa mendapatkannya?</span><br/>
						Anda hanya perlu menghubungi kami dengan mengisi formulir yang kami sediakan. Kami siap melayani Anda.<br/><br/>
						
						<span class="blue2 fw-500">Seberapa efektifkah <strong>Dokodemo-Kerja</strong> pada produktivitas karyawan?</span><br/>
						Sangat efektif, karena Dokodemo-Kerja mampu mengkalkulasikan total jam kerja karyawan secara real time dan transparan.<br/><br/>
						
						<span class="blue2 fw-500">Untuk siapakah <strong>Dokodemo-Kerja</strong> dibuat?</span><br/>
						Dokodemo-Kerja dibuat untuk para perusahaan yang menggunakan karyawan dengan sistem kerja remote dan independen agar meningkatkan produktifitas perusahaan.<br/><br/>
						
						<span class="blue2 fw-500">Apa keuntungan yang didapatkan oleh perusahaan yang menerapkan <strong>Dokodemo-Kerja</strong>?</span><br/>
						Dengan Dokodemo-Kerja, perusahaan akan diuntungkan dengan produktifitas karyawan yang meningkat sehingga perusahaan dapat membuat target untuk para karyawan sesuai dengan kinerjanya masing-masing.<br/><br/>
						
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div style="padding:10px;border:1px solid #edb41a">
							<div class="div-above-footer">
								Dokodemo-Kerja adalah solusi sistem kerja berupa aplikasi yang mampu merekam, menghitung, serta mengelola aktivitas dan jam kerja karyawan guna meningkatkan produktivitas perusahaan.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-push-6">
						<img src="img/dokodemo-kerja/dokodemo-logo.png" alt="Logo">
						<p>
							Dokodemo-Kerja adalah solusi sistem kerja berupa aplikasi yang mampu merekam, menghitung, serta mengelola aktivitas dan jam kerja karyawan guna meningkatkan produktivitas perusahaan.
						</p>
					</div>
					<div class="col-md-6 col-md-pull-6">
						<ul class="fa-ul">
							<li>
								<span class="fa-li"><i class="fa fa-map-marker"></i></span>
								Ad Premier Building 19th Floor <br/>
								Jalan Tb. Simatupang No. 5 Ragunan, <br/>
								Ps. Minggu, Jakarta Selatan, Indonesia 12550
							</li>
							<li>
								<span class="fa-li"><i class="fa fa-phone"></i></span>
								+62(21) 2270 8935 / 36
							</li>
							<li>
								<span class="fa-li"><i class="fa fa-envelope"></i></span>
								info@logique.co.id
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-6 col-md-6">
						<div class="cr">Copyright  © 2018<a href="/" class="yellow"> Logique</a></div>
					</div>
				</div>
			</div>
		</footer>
		
		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script type="text/javascript">			
			$(function() {
				$('.smooth').click(function() {
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