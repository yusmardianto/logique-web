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
			<div class="valign-center">
				<img class="img-responsive center-block" src="img/dokodemo-kerja/dokodemo-logo.png" alt="Dokodemo-Kerja Logo"/>
				<br/>
				<h1 class="anton title">Cara Bekerja <br class="hidden-xs"/> Lebih fleksibel & produktif</h1>
				<hr/>
			</div>
		</header>
		<div class="bg-black">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="title">Apa Itu <span class="blue">Dokodemo-Kerja?</span></h2>
					</div>
					<div class="col-md-6 text-justify">
						<span class="blue">Dokodemo-Kerja</span> adalah solusi terbaik untuk para pekerja professional dengan waktu yang fleksibel dan independen, sehingga membuat perusahaan dan karyawan menjadi senang.
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="#divForm" class="smooth btn btn-coba">Coba Sekarang</a>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-why">
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
		<h2 class="title-masalah anton">Masalah yang Sering Dihadapi</h2>
		<div class="div-masalah first">
			<div class="container">
				<div class="border-white">
					<div class="row">
						<div class="col-md-6">
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Karyawan yang merokok dan mengambil waktu istirahat yang berlebihan.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dokodemo-Kerja dapat mencegah karyawan untuk beristirahat kerja lebih lama, nonton video dan membuka sosial media disaat jam kerja.</li>
							</ul>
						</div>
						<div class="col-md-6">
							<img class="masalah1 hidden-sm hidden-xs" alt="Masalah 1" src="img/dokodemo-kerja/laptop1.png"/>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="div-masalah">
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
		</div>
		<div class="bg-blue text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<img class="img-responsive center-block" src="img/dokodemo-kerja/dokodemo-logo.png" alt="Dokodemo-Kerja Logo"/>
						<br/>
						<div class="title anton">Kami Siap Membantu Anda</div>
						<br/>
						<p>
							Dokodemo-Kerja adalah solusi produksi yang menguntungkan kedua belah pihak yaitu karyawan dan perusahaan.<br/><br/>
							Dengan fitur - fitur Dokodemo-Kerja ini, Kami dapat membantu Anda dalam mencatat jam kerja karyawan secara efektif dan efisien seperti mengetahui jam kerja - pulang, jam istirahat dan jam solat.
						</p>
					</div>
				</div>
			</div>
		</div>
		<img style="width:100%" src="img/dokodemo-kerja/gambar1.png" alt="Dokodemo-Kerja image"/>
		<div class="bg-yellow">
			<center><h2 class="title">Fitur Dokodemo-Kerja</h2></center>
			<br/>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Fitur start dan stop yang dapat mengkalkulasikan jam kerja karyawan secara akurat</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Mencatat jam kerja beserta screen capture layar karyawan</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Melihat jumlah jam kerja seluruh karyawan di dalam satu tampilan</li>
						</ul>
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-12">
						<img src="img/dokodemo-kerja/screens.png" class="img-responsive center-block screens" alt="Screens"/>
					</div>
				</div>
			</div>
		</div>
		<div class="div-dokodemo">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="title">Dokodemo-Kerja</div>
						<p>Direkomendasikan bagi perusahaan yang mempertimbangkan pekerja jarak jauh (freelencer, remote worker,etc), perusahaan yang ingin meningkatkan produktifitas karyawan, perusahaan yang ingin membatasi penggunaan waktu kerja yang tidak efisien (merokok, istirahat setelah solat, etc)</p>
					</div>
				</div>
			</div>
		</div>
		<div class="div-form" id="divForm">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title">
							<span class="blue2">Untuk informasi Dokodemo-Kerja, </span><br/>
							Silahkan Hubungi kami dengan mengisi form dibawah ini!
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
								<span class="blue fw-300">Jenis Kebutuhan yang spesifik</span>
								<div class="radiobuttons">
									<div class="rdio"> <input name="needs" value="Pengenalan Dokodemo-Kerja" id="radio1" type="radio" checked>
									  <label for="radio1">Pengenalan Dokodemo-Kerja</label>
									</div>
									<div class="rdio">
									  <input name="needs" value="Cara menggunakan Dokodemo-Kerja" id="radio2" type="radio">
									  <label for="radio2">Cara menggunakan Dokodemo-Kerja</label>
									</div>
									<div class="rdio">
									  <input name="needs" value="Untuk kerja jarak jauh" id="radio3" type="radio">
									  <label for="radio3">Untuk kerja jarak jauh</label>
									</div>
									<div class="rdio">
									  <input name="needs" value="Untuk meningkatkan produktivitas karyawan" id="radio4" type="radio">
									  <label for="radio4">Untuk meningkatkan produktivitas karyawan</label>
									</div>
									<div class="rdio">
									  <input name="needs" value="Untuk kontrol jam kerja karyawan" id="radio5" type="radio">
									  <label for="radio5">Untuk kontrol jam kerja karyawan</label>
									</div>
								</div>
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
						<span class="blue2 fw-500">Bagaimana Dokodemo-Kerja merekam jam kerja karyawan remote?</span><br/>
						Dokodemo-Kerja mampu merekam jam kerja karyawan sejak dimulai hingga selesai, serta menampilkan total jam kerja yang dihabiskan.<br/><br/>
						 
						<span class="blue2 fw-500">Bagaimana Dokodemo-Kerja dapat membantu manager dan staf HR?</span><br/>
						Manajer dapat memonitor jam kerja para karyawannya tanpa harus tatap muka. Sementara HR tidak perlu lagi susah payah mengakumulasi jam kerja karyawan remote.<br/><br/>
						 
						<span class="blue2 fw-500">Pekerja seperti apa yang membutuhkan Dokodemo-Kerja?</span><br/>
						Pekerja yang ingin bekerja dengan cara dan waktu yang fleksibel namun tetap produktif. Pekerja yang tidak ingin menghadapi kemacetan ketika berangkat dan pulang kerja. Bisa juga pekerja yang ingin memiliki keseimbangan hidup antara bekerja dan kehidupan sosial dan rumah tangganya. Misalnya freelancer, part-timer, ibu rumah tangga, dan lain-lain.<br/><br/>
						 
						<span class="blue2 fw-500">Dokodemo-Kerja bisa dioperasikan di komputer dengan sistem operasi apa saja?</span><br/>
						Aplikasi desktop Dokodemo-Kerja dapat dijalankan di komputer dengan sistem operasi Windows, Linux (Ubuntu), dan Mac OS.<br/><br/>
						 
						<span class="blue2 fw-500">Dokodemo-Kerja tersedia dalam bahasa apa saja?</span><br/>
						Untuk saat ini, Dokodemo-Kerja tersedia dalam bahasa Indonesia dan Inggris.<br/><br/>
					</div>
					<div class="col-md-6">
						<span class="blue2 fw-500">Sepertinya saya akan membutuhkan panduan yang lebih jelas dalam menggunakan Dokodemo-Kerja. Apa saya akan mendapatkannya?</span><br/>
						Jangan khawatir. Kami menyediakan panduan penggunaannya untuk Anda. Jika Anda masih menemukan kesulitan, Anda bisa langsung menghubungi kami.<br/><br/>
						 
						<span class="blue2 fw-500">Setelah mendapatkan aplikasi Dokodemo-Kerja, apakah ada hal yang harus dilakukan perusahaan sebelum menerapkannya pada karyawan remote kami?</span><br/>
						Anda cukup menambahkan daftar karyawan remote ke sistem Dokodemo-Kerja. Untuk informasi rincinya, silahkan hubungi kami.<br/><br/>
						 
						<span class="blue2 fw-500">Kami tertarik menggunakan Dokodemo-Kerja untuk perusahaan kami. Bagaimana kami bisa mendapatkannya?</span><br/>
						Untuk bisa menggunakan Dokodemo-Kerja, Anda cukup mengisi formulir kontak untuk menghubungi kami. Kami akan membantu Anda dengan senang hati.<br/><br/> 
						 
						<span class="blue2 fw-500">Setelah mendapatkan aplikasi Dokodemo-Kerja, bagaimana cara karyawan mengakses aplikasi desktopnya?</span><br/>
						Karyawan diharuskan log in di situs Dokodemo-Kerja menggunakan username dan password yang dimiliki, kemudian mengunduh aplikasinya. Setelah itu, karyawan kembali log in di aplikasi Dokodemo-Kerja yang telah diinstal di komputer pribadinya. Dokodemo-Kerja langsung dapat digunakan.<br/><br/>						 
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
							Dokodemo-Kerja adalah aplikasi yang dapat mencatat dan menghitung waktu kerja karyawan secara rinci untuk setiap proyek yang dikerjakan.
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
						<div class="cr">Copyright  © 2018  <a href="/" class="yellow">Logique</a></div>
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