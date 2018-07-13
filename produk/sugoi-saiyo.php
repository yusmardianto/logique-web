 <?php 
require_once("form/fgcontact_sugoi.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient(['info@sugoi-saiyo.co.id']); //<<---Put your email address here

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
    <meta name="description" content="Sugoi Saiyo adalah sistem rekrutmen yang membantu proses rekrutmen menjadi mudah dan terkelola, baik bagi HR maupun kandidat.">
	<meta name="keywords" content="lowongan kerja, rekrutmen, seleksi sdm, hr tools, proses rekrutmen, perekrutan, metode rekrutmen, rekrutmen online, rekrutmen pegawai, logique digital indonesia sugoi saiyo">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Sugoi Saiyo | Logique Digital Indonesia</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style_sugoisaiyo.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
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
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<img src="img/sugoi-saiyo/logo.png" alt="Sugoi Saiyo Logo" class="img-responsive center-block"> 
						<h1>Sistem Perekrutan Karyawan</h1>
						<div class="text-center desc-first">
							Pernahkah Anda kesulitan dalam menyaring dan berkomunikasi dengan para pencari kerja? Sekarang hal itu sudah tidak Anda temui lagi. Dengan Sugoi Saiyo, <b>proses rekrutmen</b> dapat dilakukan semudah memilih menu makanan.
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="about">
			<div class="container">
				<h2>Apa Itu Sugoi Saiyo?</h2>
				<p>SUGOI SAIYO adalah sistem IT untuk para staf departemen sumber daya manusia di Indonesia dalam merekrut calon karyawan. Banyak kendala yang biasa mereka hadapi dalam proses <b>seleksi SDM</b>, seperti menyaring terlalu banyak CV yang tidak memenuhi persyaratan, kesulitan dalam melakukan komunikasi dengan pelamar, banyaknya pelamar yang tidak menghadiri <i>interview</i>, dan lain-lain. Hal ini bisa membuang terlalu banyak waktu dan tenaga.</p>
				<h3>SUGOI SAIYO merupakan solusi dari masalah tersebut.</h3>
				<p>Selain bisa membantu staf HR, sistem ini juga bermanfaat untuk para pelamar. Mereka bisa langsung mengajukan lamaran pada posisi tertentu dan dengan mudah mengetahui status lamaran mereka, mulai dari hasil tahap pengujian, konfirmasi status diterima atau tidak, hingga surat penawaran kerja dari perusahaan yang dikirimkan melalui <i>website</i>.</p>
			</div>
		</section>
		<section class="obstacle">
			<div class="container">
				<div class="row">
					<div class="col-md-4 obstacle-title">
						<h2>Kendala yang <br> sering <br> dihadapi <br> perusahaan <br> dalam <br> merekrut <br> karyawan.</h2>
						<a href="#contact" class="smooth btn-ss">Coba Sugoi Saiyo</a>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-1.png" alt="Kendala" class="img-responsive center-block">
								<p>Mendapatkan banyak lamaran kerja tapi tidak memenuhi persyaratan yang dibutuhkan oleh perusahaan, sehingga membuat tahap <b>seleksi SDM</b> menjadi tidak efisien.</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-2.png" alt="Kendala" class="img-responsive center-block">
								<p>Staf HR tidak dapat menghubungi pelamar untuk memberikan informasi terbaru mengenai statusnya, begitu pun sebaliknya, pelamar tidak mengetahui informasi terbaru mengenai status lamaran yang telah dikirimkan.</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-3.png" alt="Kendala" class="img-responsive center-block">
								<p>Pelamar tidak datang <i>interview</i> atau datang terlambat dari waktu <i>interview</i> yang telah ditentukan.</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-4.png" alt="Kendala" class="img-responsive center-block">
								<p>Staf HR harus mendapatkan kandidat yang sesuai dengan kebutuhan perusahaan dalam waktu yang singkat.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="line-title">Fitur Sugoi Saiyo</div>
		<section class="feature-company">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 text-center">
						<img src="img/sugoi-saiyo/fitur-p.png" alt="Fitur Perusahaan" class="img-feature">
						<hr>
						<h2>Untuk Perusahaan</h2>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">1</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-1.png" alt="Fitur Perusahaan"></div>
							<p>Sistem Sugoi Saiyo mampu menampilkan daftar CV yang telah diterima sehingga dapat dikelola dengan sangat mudah.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">2</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-2.png" alt="Fitur Perusahaan"></div>
							<p>Perusahaan dapat membuat jadwal <i>interview</i> dengan para kandidat secara fleksibel dan transparan.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">3</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-3.png" alt="Fitur Perusahaan"></div>
							<p>Membuat laporan digital dari hasil <i>interview</i> dengan masing-masing kandidat.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">4</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-4.png" alt="Fitur Perusahaan"></div>
							<p>Mengirim dan menerima dokumen yang berkaitan dengan proses seleksi pada kandidat, seperti <i>technical test, offering letter</i>, dan lain-lain dapat dilakukan dengan mudah, semudah mengirimkan email.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">5</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-5.png" alt="Fitur Perusahaan"></div>
							<p>Dapat melakukan input, edit dan delete data serta informasi mengenai posisi atau pekerjaan yang tersedia dengan sangat mudah oleh manajemen sumber daya.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">6</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-6.png" alt="Fitur Perusahaan"></div>
							<p>Memberikan skor pada setiap <b>proses rekrutmen</b> dari masing-masing kandidat secara transparan sehingga para kandidat mampu mengetahui hasilnya secara real time kapan pun dan dimana pun.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">7</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-7.png" alt="Fitur Perusahaan"></div>
							<p>Mengelola proses <b>seleksi SDM</b> di setiap tahap hanya dengan satu klik (<i>process/reject</i>).</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">8</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-8.png" alt="Fitur Perusahaan"></div>
							<p>Menampilkan total setiap tahap <b>seleksi SDM</b> yang sedang diproses, mulai dari <i>screening CV</i>, jadwal <i>interview</i>, hingga total status <i>offering letter</i> dalam satu laman <i>dashboard</i>.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">9</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-9.png" alt="Fitur Perusahaan"></div>
							<p>Mengelola daftar <i>person in charge user</i> untuk masing-masing posisi dengan sangat mudah.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">10</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-10.png" alt="Fitur Perusahaan"></div>
							<p>Membuat <i>offering letter</i> untuk kandidat secara otomatis.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">11</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-11.png" alt="Fitur Perusahaan"></div>
							<p>Memberikan notifikasi via <i>email</i> untuk setiap perkembangan tahap rekrutmen dari kandidat.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="feature-candidate">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 text-center">
						<img src="img/sugoi-saiyo/fitur-k.png" alt="Fitur Perusahaan" class="img-feature">
						<hr>
						<h2>Untuk Kandidat</h2>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-candidate">
							<div class="number">1</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-1.png" alt="Fitur Perusahaan"></div>
							<p>Melakukan registrasi dan mengirim dokumen yang berkaitan dengan proses <b>seleksi SDM</b>, seperti CV, foto, sertifikat, hingga <i>technical test</i> pada posisi yang diinginkan. Semua dilakukan secara digital tanpa perlu repot-repot membawa semua itu ke tempat seleksi.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-candidate">
							<div class="number">2</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-2.png" alt="Fitur Perusahaan"></div>
							<p>Menampilkan informasi waktu tahap <b>proses rekrutmen</b> yang dilalui atau akan dilakukan kandidat, mulai dari <i>screening CV</i> sampai <i>interview</i> secara transparan dan real time.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-candidate">
							<div class="number">3</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-3.png" alt="Fitur Perusahaan"></div>
							<p>Sistem Sugoi Saiyo akan menampilkan jadwal <i>interview</i> yang akan dilaksanakan oleh kandidat, baik <i>interview</i> dengan HR, maupun dengan <i>person in charge</i> setiap posisi (manajer) dan direktur.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="feature f-candidate-2">
							<div class="number">4</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-4.png" alt="Fitur Perusahaan"></div>
							<p>Menampilkan status lolos atau tidaknya kandidat dari setiap tahap <b>proses rekrutmen</b> dalam satu tampilan <i>dashboard</i>.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="feature f-candidate-2">
							<div class="number">5</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-5.png" alt="Fitur Perusahaan"></div>
							<p>Memberikan notifikasi via <i>email</i> akan hasil setiap tahap seleksi dan konfirmasi jadwal <i>interview</i>.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="line-title">Keuntungan Menggunakan Sugoi Saiyo</div>
		<section class="benefit-company">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Bagi Perusahaan</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9 col-md-offset-3 col-sm-12">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Dapat memiliki standar penilaian kandidat berdasarkan <i>scoring</i> setiap tahap <b>seleksi SDM</b>.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Mudah mengatur jadwal <i>interview</i> dengan kandidat, baik dengan staf HR maupun dengan manajer.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Referensi kandidat yang diterima menjadi lebih banyak dan variatif.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Mudah untuk mengontrol, mengawasi, dan melakukan filtrasi kandidat.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Dapat menjamin data kandidat tersimpan dengan aman (<i>secure</i>) dalam sistem.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Informasi mengenai kandidat ditampilkan secara akurat dan mendetil.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="benefit-candidate">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Bagi Kandidat</h2>
					</div>
				</div>
				<div class="row m-50">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							Mengikuti tes secara <i>online</i> tanpa harus datang ke perusahaan yang dituju.
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							Mengetahui status dari setiap tahap <b>proses rekrutmen</b> secara langsung.
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							Mempermudah proses lamaran kerja hanya dengan langkah registrasi dan mengisi formulir secara <i>online</i>.
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							Menghemat biaya dan waktu dengan proses yang singkat dan sederhana. 
						</div>
					</div>
				</div>
			</div>
		</section>
		<div>
			<img src="img/sugoi-saiyo/bg-middle.png" alt="Sugoi Saiyo" class="img-fluid">
		</div>
		<section class="why-ss">
			<div class="container">
				<h2>MENGAPA HARUS MENGGUNAKAN SUGOI SAIYO?</h2>
				<div class="row m-50">
					<div class="col-md-4">
						<div class="img-why-ss"><img src="img/sugoi-saiyo/kenapa-1.png" alt="Kenapa Sugoi Saiyo"></div>
						<p>Mudah diakses dan digunakan, baik oleh staf HR maupun oleh kandidat</p>
					</div>
					<div class="col-md-4">
						<div class="img-why-ss"><img src="img/sugoi-saiyo/kenapa-2.png" alt="Kenapa Sugoi Saiyo"></div>
						<p>Memiliki <i>user interface</i> yang sederhana</p>
					</div>
					<div class="col-md-4">
						<div class="img-why-ss"><img src="img/sugoi-saiyo/kenapa-3.png" alt="Kenapa Sugoi Saiyo"></div>
						<p>Proses rekrutmen dapat dipantau, mulai dari registrasi kandidat hingga status lolos</p>
					</div>
				</div>
			</div>
		</section>
		<section class="qna">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<img src="img/sugoi-saiyo/qna.png" alt="Sugoi Saiyo">
					</div>
					<div class="col-md-9">
						<h2>PERTANYAAN YANG SERING DIAJUKAN</h2>
					</div>
				</div>
				<div class="row m-50">
					<div class="col-sm-6">
						<h3>Bagaimana cara kerja SUGOI SAIYO? </h3>
						<p>SUGOI SAIYO mempertemukan tim rekrutmen dengan kandidat yang sesuai secara terarah dengan menyediakan proses rekrutmen yang singkat dan mudah dikelola oleh kedua belah pihak.</p>
						<h3>Bagaimana tim rekrutmen tahu jika seorang kandidat mengajukan lamaran?</h3>
						<p>Staf HR akan dikirimkan notifikasi melalui <i>email</i>. <i>Email</i> tersebut akan menyebutkan nama kandidat dan staf HR bisa langsung memeriksa detil data dirinya.</p>
						<h3>Apakah ada batasan jumlah lowongan yang bisa dipos oleh tim rekrutmen di SUGOI SAIYO? </h3>
						<p>Tidak ada. Staf HR bisa membuat daftar lowongan posisi yang tersedia sebanyak mungkin.</p>
						<h3>Apakah SUGOI SAIYO hanya diperuntukkan bagi departemen SDM perusahaan? </h3>
						<p>SUGOI SAIYO menyediakan laman kelola yang berbeda untuk level departemen SDM (tim rekrutmen) dan level manajer (<i>person in charge</i>).</p>
						<h3>Apa perbedaan laman kelola untuk tim rekrutmen dengan manajer?</h3>
						<p>Laman kelola untuk level manajer hanya menampilkan hasil <i>technical test</i>, jadwal <i>interview</i>, dan laporan hasil <i>interview</i>.</p>
						<h3>Bagaimana standar tahapan rekrutmen yang diadopsi SUGOI SAIYO? </h3>
						<p>SUGOI SAIYO mengadopsi standar seleksi SDM perusahaan pada umumnya. Namun, standar tahapan ini bisa dimodifikasi dan disesuaikan dengan permintaan Anda.</p>
					</div>
					<div class="col-sm-6">
						<h3>Apakah ada batasan jumlah kandidat yang bisa saya terima untuk setiap posisi?</h3>
						<p>Tidak ada. Setiap posisi bisa menerima sebanyak mungkin kandidat. Begitu juga sebaliknya, kandidat bisa mengajukan lamaran ke lebih dari satu posisi.</p>
						<h3>Bagaimana cara kandidat mengajukan lamaran untuk posisi yang tersedia? </h3>
						<p>Cukup dengan memilih posisi yang ingin dilamar, lalu mengisi data diri di formulir yang disediakan.</p>
						<h3>Bagaimana cara kandidat mendapatkan informasi lanjutan dari tahap seleksi lamarannya? </h3>
						<p>Informasi hasil dari setiap proses rekrutmen selalu diperbarui oleh staf HR, dan kandidat dapat melihat pembaharuan tersebut, baik di laman dashboard-nya sendiri maupun melalui email notifikasi otomatis.</p>
						<h3>Apakah SUGOI SAIYO bisa diakses oleh <i>browser</i> apa pun?</h3>
						<p>Situs kami bisa diakses oleh <i>browser</i> mana pun, termasuk oleh <i>browser</i> bawaan perangkat seluler. Jika Anda mengalami masalah, silakan hubungi kami untuk bantuan.</p>
						<h3>Saya tertarik menggunakan SUGOI SAIYO untuk perusahaan saya. Bagaimana cara saya bisa mulai menggunakannya? </h3>
						<p>Anda bisa langsung menghubungi kami lewat salah satu kontak yang kami sediakan. Kami siap melayani Anda dengan senang hati. </p>
					</div>
				</div>
			</div>
		</section>
		<section class="contact" id="contact">
			<div class="container">
				<div class="box">
					<h2>Punya pertanyaan dan perlu informasi lebih lanjut ?</h2>
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
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Nama" name="name" value='<?php echo $formproc->SafeDisplay('name') ?>'>
								</div>
								<div class="form-group">
									<input type="number" class="form-control" placeholder="No Ponsel" name="phone" value='<?php echo $formproc->SafeDisplay('phone') ?>'>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Perusahaan" name="company" value='<?php echo $formproc->SafeDisplay('company') ?>'>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email" name="email" value='<?php echo $formproc->SafeDisplay('email') ?>'>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="6" class="form-control" placeholder="Pesan" name="message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
								</div>
								<div class="form-group">
									<div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
								</div>
							</div>
							<div class="col-md-12 text-center m-50">
								<button type="submit" class="btn-ss2">Kirim</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img src="img/sugoi-saiyo/logo.png" alt="Sugoi Saiyo Logo" class="img-responsive">
					</div>
					<div class="col-md-4">
						<p class="address">
							Jalan Tb. Simatupang no. 1. Ragunan, <br>Pasar Minggu, Kota Jakarta Selatan, <br>DKI Jakarta 12540
						</p>
					</div>
					<div class="col-md-4">
						<p class="phone"><a href="tel:+62216505656">+62 21 6505656</a></p>
						<p class="email"><a href="mailto:info@sugoi-saiyo.co.id">info@sugoi-saiyo.co.id</a></p>
					</div>
				</div>
			</div>
		</footer>
		
		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
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

			$('.feature-company .img-feature-o').matchHeight({
				byRow: false
			});
			$('.feature-candidate .img-feature-o').matchHeight({
				byRow: false
			});
			$('.f-company').matchHeight({
				byRow: false
			});
			$('.f-candidate').matchHeight({
				byRow: false
			});
			$('.f-candidate-2').matchHeight({
				byRow: false
			});
			$('.benefit').matchHeight({
				byRow: false
			});
			$('.img-why-ss').matchHeight({
				byRow: false
			});
		</script>
	</body>
</html>