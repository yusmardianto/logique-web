﻿ <?php 
require_once("form/fgcontact_dokodemo.php");

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
			<nav class="navbar navbar-default navbar-dokdem">
				<div class="container">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img src="img/dokodemo-kerja/dokodemo-logo.png" alt="" class="img-responsive center-block">
					</a>
					<div class="pull-left visible-xs">
						<ul class="nav-lang">
							<li class="pull-left">IND</li>
							<li class="pull-left active">ENG</li>
							<li class="pull-left"><a href="/jp/product/dokodemo-kerja.php">JPN</a></li>
						</ul>
					</div>
				  </div>
				  <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
					<ul class="nav navbar-nav">
					  <li><a href="#introduction" class="smooth">Perkenalan</a></li>
					  <li><a href="#about" class="smooth">About Dokodemo-Kerja</a></li>
					  <li><a href="#fitur" class="smooth">Features</a></li>　
					  <li><a href="#benefits" class="smooth li-mt">Keuntungan</a></li>　
					  <li><a href="#price" class="smooth li-mt">Price</a></li>　
					  <li><a href="#divForm" class="smooth li-mt">Contact Me</a></li>
					</ul>
					<a href="/" target="_blank"><img class="pull-right img-responsive center-block logo-logique-header" src="img/dokodemo-kerja/logo_logique.png"/></a>
					<div class="pull-right hidden-xs">
						<ul class="nav-lang">
							<li class="pull-left"><a href="/produk/dokodemo-kerja.php">IND</a></li>
							<li class="pull-left active">ENG</li>
							<li class="pull-left"><a href="/jp/product/dokodemo-kerja.php">JPN</a></li>
						</ul>
					</div>
				  </div><!--/.nav-collapse -->  
				</div><!--/.container-fluid -->
			</nav>
			<div class="container" id="introduction">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="div-top">
							<h1 class="anton title">Solution For Working Flexibly and Be More Productive</h1>
							<hr/>
							<p class="text-center">
								Every morning on weekdays, most workers in Indonesia face a painful trip to office; traffic jam, delayed public transportations, and crowded commuting. It’s all very stressful. Not to mention if it’s rainy season, being late becomes a thing that has to be understood by companies. The result? Productivity decreases and target companies have to be postponed. If only employees could work without the need to be bound of time and place, then productivity could be more increasing and all things above wouldn’t be problems, right?
							</p>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="bg-black" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="title">
							<span class="blue">Dokodemo-Kerja?</span><br/>
							<div class="quote">“</div>Dokodemo-Kerja is an IT solution that can solve it.
						</div>
						<br/>
						<div class="hidden-xs"><br/><br/></div>
						<video width="100%" height="300" controls>
						   <source src="/produk/img/dokodemo-kerja/dokodemo-kerja.webm" type="video/webm" />
						</video><br/><br/>						
					</div>
					<div class="col-md-6 text-justify">
						<h2 class="title2">What is <span class="blue">Dokodemo-Kerja?</span></h2>
						<span class="blue">Dokodemo-Kerja</span> is a professional work system created to help increasing productivity for independent and flexible workers. Your company can now implement remote work system for employees anywhere and anytime. Employees are freed from the saturation and tight working atmosphere in the office. In addition to facilitate remote-work system, <span class="blue">Dokodemo-Kerja</span> can also be used to monitor productivity of employees in the office. Always track time your employees spent. Find out if they get their tasks done efficiently. See the performance of all employees in detail. With this, managers and HR can determine and evaluate the performance of each employee.
						<br/><br/><br/>
						<div class="text-center">
							<a href="#divForm" class="smooth btn btn-coba">Try Now</a>
						</div>
						<br/><br/>
					</div>
				</div>
			</div>
		</div>
		
		<div class="bg-yellow" id="fitur">
			<img src="img/dokodemo-kerja/image-fitur.png" class="image-fitur img-responsive"/>
			<div class="container-fluid">
				<div class="bg-old-yellow">
					<div class="row" style="margin:0">
						<div class="col-md-6 col-md-offset-6">
							<div class="bg-one-fitur">
								<div class="one-fitur" style="margin-bottom: 0;">
									<img src="img/dokodemo-kerja/fitur1.png" class="img-responsive"/>
									Track time and monitor tasks.<br/>
									Takes a screen capture of the employee's work activity on their computer screen in random times and directly sends it to the management team.
								</div>
							</div>
						</div>				
					</div>
				</div>				
				<div class="row" style="margin:0">
					<div class="col-md-6" style="padding: 0;">
						<div class="title-fitur anton">
							<span class="anton">Dokodemo-Kerja</span><br/> Features
						</div>
						<div class="dengan-fitur">
							<div class="quote">“</div>With these features, Dokodemo-Kerja can be a new work system revolution for your company and employees.
						</div>
					</div>
					<div class="col-md-6 one-fitur-btm">
						<div class="bg-one-fitur visible-sm visible-xs">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur1.png" class="img-responsive"/>
								Melacak dan memantau tugas karyawan hanya dalam satu klik.<br/>
								<strong>Dokodemo-Kerja</strong> mengambil cuplikan layar (screen capture) aktivitas kerja karyawan pada layar perangkat komputernya dalam waktu yang acak (random) dan mengirimnya pada tim manajemen (administrator).
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur2.png" class="img-responsive"/>
								Get the accurate time reports<br/>
								Accurately calculates the total working hours of employees, including break times, based on employee’s real work activities. All with just one easy click.
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur3.png" class="img-responsive"/>
								Manage employees man-hours<br/>
								Manages the total man-hours spent by employees to do a particular project, so companies are able to predict a proper deadline or target time that can be generally done by employees.
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur4.png" class="img-responsive"/>
								All on one screen<br/>
								Displays the total working hours of all employees in a single screen display, making it more efficient for the company to determine the performance of all employees transparently.
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
		<div class="bg-masalah1" id="benefits">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="pl-25">
							<div class="anton title-masalah1">Dokodemo-Kerja</div>
							<div class="kami-siap">Increase Productivity Now</div>
							<div class="desc-bantu">
								<div class="quote">“</div>
								<strong>Dokodemo-Kerja</strong> is a profitable work system solution for both employees and companies. With an efficient work system, <strong>Dokodemo-Kerja</strong> can help companies concentrate on increasing productivity while at the same time, providing flexibility to their employees.<br><br>
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
							<div class="blue2 font18"><strong class="font18">Why Dokodemo-Kerja?</strong></div>
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Help monitoring the productivity of remote workers (freelance, remote systems, etc.).</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Help employees work flexibly and more productive without having to leave home.</li>
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
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Prevent employees from filling out work reports that do not fit the reality.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Help recording and managing employee’s proper work activities and hours.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Help encouraging employees to be more passionate of working with the flexibility of their time.</li>
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
						<div class="title anton">Dokodemo-Kerja is the right solution.</div>
						<hr/>
						<ul>
							<li><i class="fa fa-check"></i> For companies that are considering remote work systems (freelancers, remote workers, etc.)</li>
							<li><i class="fa fa-check"></i> For companies that want to increase productivity as well as employee’s happiness.</li>
							<li><i class="fa fa-check"></i> For companies that want to limit the use of inefficient working hours, such as smoking breaks</li>
							<li><i class="fa fa-check"></i> And rest after prayers, watch excessive entertainment videos, up to checking out social media.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="harga" id="price">
			<div class="container">
				<div class="title anton">Dokodemo-Kerja Price</div><br/>
				<div class="text-center"><strong>Dokodemo-Kerja</strong> Dokodemo-Kerja is created for companies to monitor and track the working time of their employees, freelancers, or remote workers so that the company's productivity increases. Here are the plans offered by Dokodemo-Kerja.</div><br/>
				<br/>
				<div class="row">
					<div class="col-md-4">
						<div class="card-harga">
							<div class="title-card text-center">Basic Plan</div>
							<div style="padding:30px 0;border-bottom: 1px solid #fff;">
								<div class="price"><strong>Rp 1 Million</strong></div>
								<div class="price" style="font-size: 15px;">/ Month</div>
							</div>
							<div class="plan-list">
								<ul class="fa-ul">
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Time tracking</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot monitoring</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>1 screenshot per 10 minutes</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot saved for 2 months</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>
									For 10 users *<br/>
									<div style="font-size: 12px;color: #da0101;margin-top: 10px;font-style: italic;">&gt; 10 users, then each user is extra charged for Rp 50.000 / bulan</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card-harga">
							<div class="title-card text-center">Standard Plan</div>
							<div style="padding:30px 0;border-bottom: 1px solid #fff;">
								<div class="price"><strong>Rp 3 Million</strong></div>
								<div class="price" style="font-size: 15px;">/ Month</div>
							</div>
							<div class="plan-list">
								<ul class="fa-ul">
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Time tracking</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot monitoring</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>1 screenshot per minute</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshots saved for 6 months</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>
									For 10 users *<br/>
									<div style="font-size: 12px;color: #da0101;margin-top: 10px;font-style: italic;">&gt; 10 users, then each user is extra charged for Rp 75.000 / bulan</div>
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
							Please contact us for detail information.<br>
							* There are no additional charges
								<div class="text-center">
									<a href="#divForm" class="smooth btn btn-coba">Contact Me</a>
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
							<span class="blue2">For more information about Dokodemo-Kerja, please contact us by filling out the form below.
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
								<input type="text" class="form-control" name="name" placeholder="Name" value='<?php echo $formproc->SafeDisplay('name') ?>'/>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="company" placeholder="Company" value='<?php echo $formproc->SafeDisplay('company') ?>'/>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<input type="number" class="form-control" name="phone" placeholder="Phone Number" value='<?php echo $formproc->SafeDisplay('phone') ?>'/>
							</div>
							<div class="col-md-5">
								<input type="email" class="form-control" name="email" placeholder="Email" value='<?php echo $formproc->SafeDisplay('email') ?>'/>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<div style="padding:10px;background:#fff">
									<span class="blue fw-300">Types of specific needs</span>
									<div class="radiobuttons">
										<div class="rdio">
										  <input name="needs" value="Cara menggunakan Dokodemo-Kerja" id="radio2" type="radio" checked>
										  <label for="radio2">Tentang cara dan penggunaan <strong>Dokodemo-Kerja</strong></label>
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
								<textarea name="message" class="form-control" placeholder="Description"><?php echo $formproc->SafeDisplay('message') ?></textarea>
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
							<button type="submit" href="#" class="btn btn-coba">Send</button>
						</center>
					</div>
				</form>
			</div>
		</div>
		<div class="div-faq">
			<div class="anton title yellow">FAQ:</div>
			<br/>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<span class="blue2 fw-500">Bagaimana <strong>Dokodemo-Kerja</strong> merekam jam kerja karyawan?</span><br/>
						<strong>Dokodemo-Kerja</strong> merekam aktivitas dan jam kerja untuk setiap proyek yang dikerjakan karyawan pada layar perangkat komputernya. Perhitungan akan dimulai dan dihentikan dengan perintah <i>start/stop</i>.<br/><br/>
						 
						<span class="blue2 fw-500">Apakah <strong>Dokodemo-Kerja</strong> memerlukan akses internet?</span><br/>
						Akses internet diperlukan untuk mengaktifkan dan mengelola akun <strong>Dokodemo-Kerja</strong>, serta mengirim data rekaman aktivitas dan jam kerja ke database.<br/><br/>
						 
						<span class="blue2 fw-500">Bagaimana jika akses internet saya putus saat <strong>Dokodemo-Kerja</strong> berjalan?</span><br/>
						Tidak masalah. Akses internet tidak dibutuhkan selama proses penghitungan. Namun, Anda membutuhkan koneksi internet saat tombol stop diklik untuk mengirim data ke database.<br/><br/>
						 
						<span class="blue2 fw-500">Berapa jumlah pengguna yang didukung oleh <strong>Dokodemo-Kerja</strong>?</span><br/>
						Jumlah pengguna bisa disesuaikan menurut kebutuhan perusahaan.<br/><br/>
						 
						<span class="blue2 fw-500">Apakah <strong>Dokodemo-Kerja</strong> bisa diakses lewat perangkat seluler?</span><br/>
						Untuk saat ini, perangkat seluler hanya bisa mengakses <strong>Dokodemo-Kerja</strong> melalui browser.<br/><br/>
						
						<span class="blue2 fw-500">Bagaimana cara menyiapkan layanan <strong>Dokodemo-Kerja</strong>? </span><br/>
						Kami akan menyediakan panduan menyiapkan layanan <strong>Dokodemo-Kerja</strong> langkah demi langkah. Mulai dari cara mengakses akun master, mengakses aplikasi dan menginstalnya, hingga penggunaannya bagi karyawan.<br/><br/>
						
						<span class="blue2 fw-500">Bagaimana cara mengetahui apakah PC atau Mac saya dapat menjalankan <strong>Dokodemo-Kerja</strong>? </span><br/>
						<strong>Dokodemo-Kerja</strong> mendukung PC yang menjalankan sistem operasi Windows, Linux, dan Macintosh.<br/><br/>
					</div>
					<div class="col-md-6">
						<span class="blue2 fw-500">Bahasa apa saja yang tersedia untuk <strong>Dokodemo-Kerja</strong>?</span><br/>
						Untuk saat ini, <strong>Dokodemo-Kerja</strong> tersedia dalam Bahasa Indonesia dan Inggris.<br/><br/> 
						 
						<span class="blue2 fw-500">Dapatkah saya melakukan uji coba <strong>Dokodemo-Kerja</strong> terlebih dahulu sebelum membelinya?</span><br/>
						Tentu saja. Untuk mendapatkan layanan uji coba, silakan hubungi kami.<br/><br/>
						
						<span class="blue2 fw-500">Bagaimana jika saya punya masalah dalam menggunakan <strong>Dokodemo-Kerja</strong>?</span><br/>
						Jangan khawatir. Jika Anda mengalami masalah dalam menggunakan <strong>Dokodemo-Kerja</strong>, Anda dapat langsung menghubungi kami. Kami akan membantu Anda dengan senang hati.<br/><br/>
						
						<span class="blue2 fw-500">Saya tertarik menggunakan <strong>Dokodemo-Kerja</strong> untuk perusahaan saya. Bagaimana saya bisa mendapatkannya?</span><br/>
						Anda hanya perlu menghubungi kami dengan mengisi formulir yang kami sediakan. Kami siap melayani Anda.<br/><br/>
						
						<span class="blue2 fw-500">Seberapa efektifkah <strong>Dokodemo-Kerja</strong> pada produktivitas karyawan?</span><br/>
						Sangat efektif, karena <strong>Dokodemo-Kerja</strong> mampu mengkalkulasikan total jam kerja karyawan secara real time dan transparan.<br/><br/>
						
						<span class="blue2 fw-500">Untuk siapakah <strong>Dokodemo-Kerja</strong> dibuat?</span><br/>
						<strong>Dokodemo-Kerja</strong> dibuat untuk para perusahaan yang menggunakan karyawan dengan sistem kerja remote dan independen agar meningkatkan produktifitas perusahaan.<br/><br/>
						
						<span class="blue2 fw-500">Apa keuntungan yang didapatkan oleh perusahaan yang menerapkan <strong>Dokodemo-Kerja</strong>?</span><br/>
						Dengan <strong>Dokodemo-Kerja</strong>, perusahaan akan diuntungkan dengan produktifitas karyawan yang meningkat sehingga perusahaan dapat membuat target untuk para karyawan sesuai dengan kinerjanya masing-masing.<br/><br/>
						
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div style="padding:10px;border:1px solid #edb41a">
							<div class="div-above-footer">
								<strong>Dokodemo-Kerja</strong> is a professional work system created to help increasing productivity for independent and flexible workers.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="#" class="scrollToTop">Back to Top</a>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-push-6">
						<img src="img/dokodemo-kerja/dokodemo-logo.png" alt="Logo">
						<p>
							<strong>Dokodemo-Kerja</strong> is a professional work system created to help increasing productivity for independent and flexible workers.
						</p>
						<br/><br/>
						<div class="cr">© 2018<a href="/" class="yellow"> PT. Logique Digital Indonesia.</a> All Rights Reserved.</div>
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
							<li>
								Other Products:<br/>
								<ul style="list-style-type:disc;padding-left: 2em;">
									<li style="margin-bottom: 5px;margin-top: 5px;"><a href="/produk/nippo.php" target="_blank">Nippo</a></li>
									<li><a href="/produk/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a></li>
								</ul>
							</li>
						</ul>
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
			
			$(document).ready(function(){
				
				//Check to see if the window is top if not then display button
				$(window).scroll(function(){
					if ($(this).scrollTop() > 100) {
						$('.scrollToTop').fadeIn();
					} else {
						$('.scrollToTop').fadeOut();
					}
				});

				
			});
			
			//Click event to scroll to top
			$('.scrollToTop').click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
			$('.navbar-dokdem .navbar-brand>img').click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
		</script>
	</body>
</html>