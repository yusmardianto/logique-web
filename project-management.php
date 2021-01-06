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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" content="Jasa Pembuatan Progressive Web App (PWA) Terbaik Di Indonesia. LOGIQUE berpengalaman dalam mengembangkan PWA untuk E-Commerce, E-Learning, dll. Hubungi Kami!">
    <meta name="keywords" content="penetration test, penetration testing, jasa penetration test, jasa penetration testing, logique, pen test Jakarta, penetration test Indonesia, security assessment Indonesia">
    <meta name="author" content="Logique Digital Indonesia">
    <meta property="og:title" content="Jasa Pembuatan Progressive Web App (PWA) Terbaik | LOGIQUE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/layanan/pembuatan-progressive-web-app.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
    <meta property="og:description" content="Jasa Pembuatan Progressive Web App (PWA) Terbaik Di Indonesia. LOGIQUE berpengalaman dalam mengembangkan PWA untuk E-Commerce, E-Learning, dll. Hubungi Kami!">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Jasa Pembuatan Progressive Web App (PWA) Terbaik | LOGIQUE</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="/css/style-pm.css?v=1.0.2" rel="stylesheet">
    <link rel="canonical" href="https://www.logique.co.id/layanan/pembuatan-progressive-web-app.php" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <?php if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') { ?>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KQJRS4V');</script>
        <!-- End Google Tag Manager -->
    <?php } ?>
</head>

<body class="wrapper wrapper--update-design">
    <?php if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') { ?> 
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQJRS4V"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php } ?>

    <!-- NAVIGATION -->
    <button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar first"></span>
        <span class="icon-bar second"></span>
        <span class="icon-bar third"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <div class="backdrop-test"></div>
        <div class="logique-nav logique-nav--update">
            <div class="margin-for-nav">
                <div class="text-center">
                    <a href="/index.php">
                        <div class="img-home"></div>
                        Beranda
                    </a>
                </div>
                <div class="text-center">
                    <a href="/logique.php">
                        <div class="img-about"></div>
                        Tentang Kami
                    </a>
                </div>
                <div class="text-center">
                    <a href="/portofolio.php">
                        <div class="img-portfolio"></div>
                        Portfolio
                    </a>
                </div>
                <div class="text-center active">
                    <a href="/layanan.php">
                        <div class="img-services"></div>
                        Layanan
                    </a>
                </div>
                <div class="text-center">
                    <a href="/produk.php">
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
                    <a href="/hubungi-kami.php">
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
    <!-- NAVIGATION -->

    <!-- HEADER -->

    <?php 
      $lang = 'id';
      $en_link = '/en/';
      $id_link = '#';
      $jp_link = '/jp/';
      include($_SERVER['DOCUMENT_ROOT'].'/header.php'); 
    ?>

    <!-- END HEADER -->
    <div class="pm-wrapper mb--60px">
      <section class="pb--20px pm-header">
            <div class="content-wrapper__">
                <div class="header-top">
                    <section class="--top">
                        <div class="container__" style="padding-top:0">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ol class="breadcrumb breadcrumb--update-design" itemscope itemtype="http://schema.org/BreadcrumbList">
                                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                            <a itemprop="item" href="/index.php"><span itemprop="name">Beranda</span></a>
                                            <meta itemprop="position" content="1" />
                                        </li>
                                        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                            <a itemprop="item"><span itemprop="name">Manajemen Proyek</span></a>
                                            <meta itemprop="position" content="3" />
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="container__">
                    <div class="row">
                        <div class="col-md-12 header__title">
                            <h1>
                              <span class="fs--26px fw--800">Sukses dengan</span>
                              <br>
                              <span class="fs--28px fw--800">PROJECT MANAGEMENT PROFESSIONAL</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="mb--60px">
        <div class="content-wrapper__">
          <div class="container__">
            <div class="row">
              <div class="col-md-12">
                <p>Terdapat faktor-faktor penting yang perlu diperhatikan oleh <em>stakeholder</em> / pemangku kepentingan untuk memastikan sebuah proyek dapat selesai dengan baik dan mampu memberikan hasil sesuai dengan tujuan proyek dari sisi bisnis, yaitu lingkup pekerjaan yang diimplementasikan, waktu target yang ditentukan serta budget yang telah diatur diawal proyek. Tiga hal ini sudah sering disebutkan sebagai triple constraint dan menjadi salah satu parameter ukuran keberhasilan sebuah proyek. Triple constraint saat ini sudah menjadi bagian yang diukur dan di manage dalam sebuah Manajemen Proyek. Sehingga pentingnya sebuah managemen proyek yang baik untuk  menghasilkan akhir sebuah proyek menjadi jauh lebih baik.</p>
                <p>Dengan pentingnya sebuah managemen proyek dalam menentukan hasil akhir sebuah proyek, maka diperlukan standarisasi dari semua aspek yang bisa terjadi dalam proyek untuk mengecilkan risiko proyek itu gagal. Saat ini ada banyak sekali organisasi maupun institusi secara global maupun lokal yang melakukan research maupun diskusi untuk membuat standarisasi yang comprehensif untuk dapat dijadikan pondasi untuk berbagai project dalam berbagai industri. Dari standarisasi yang baik itu di implementasikan di dalam proyek, diharapkan dapat menambah kepercayaan sebuah proyek itu berhasil</p>
                <p>Salah satu organisasi dalam proyek management yang saat ini menjadi organisasi terbesar secara global adalah PMI (Project Management Institute) yang bermarkas di Pennsylvania, U.S. dan sudah 51 tahun berdiri sejak 1969. PMI sendiri terkenal dengan PMBOK (Project Management Book of Knowledge) dimana menjadi Kitab Suci para Project manager di seluruh dunia. PMI sendiri menyediakan sertifikasi PMP bagi yang telah lulus dari Ujian pemahaman dari PMBOK tersebut. Saat ini PMP holder sudah lebih dari 1 juta orang di seluruh dunia. Di Indonesia saat ini pemilik aktif sertifikasi PMP dibandingkan posisi project lead sangat sedikit, saat ini hanya ~1000 orang pemegang PMP dibanding dengan negara tetangga seperti Singapura dan Malaysia yang sudah ~1500. Kebutuhan Indonesia untuk Project Manager dengan sertifikasi PMP masih sangat dibutuhkan.</p>   
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="mb--60px pm-contact">
      <div class="content-wrapper__">
        <div class="container__">
          <div class="row">
            <div class="col-md-12">
              <div class="banner-contact">
                <div class="row row--flex align-items-center">
                  <div class="col-xs-12 col-md-8 d-flex">
                    <picture>
                      <source srcset="/img/pm/icon-pm-contact.svg">
                      <img src="/img/pm/icon-pm-contact.png" class="pr--10px" alt="contact">
                    </picture>
                    <div class="banner-contact-text">
                      <p class="mb--0px">Kami siap membantu Anda untuk mengelola</p>
                      <p class="mb--0px fw--800">PROJECT SECARA PROFESIONAL</p>
                    </div>
                  </div>
                  <div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-3 d-flex align-items-center">
                        <a href="/hubungi-kami.php" class="form-control btn btn--yellow">
                          KONTAK KAMI
                        </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mb--60px pm-expert-team">
        <div class="content-wrapper__">
            <div class="container__">
                <div class="row row--flex expert-team-wrapper">
                    <div class="col-xs-12 col-md-6">
                        <div class="expert-team-box">
                            <h3 class="mb--25px main-title main-title--white main-title--with-square-point">Tim Ahli Kami</h3>
                            <h5 class="main-subtitle">Profile</h5>
                            <p>Kami memiliki beberapa manajer proyek yang tersertifikasi PMP, salah satunya Meiriando Teja yang berposisi sebagai Consultant Lead. Memiliki pengalaman terjun didalam dunia IT selama lebih dari 10 tahun di berbagai industri seperti Banking, Transportation, Telco dan memiliki pengalaman mengimplementasi product ERP, CRM, HCM hingga mobile dan web application. Saat ini memiliki sertifikasi Project Management  yang diakui secara global yaitu PMP, memperkuat pondasi dalam memanage proyek yang dijalankan.</p>

                            <p class="expert-team-second-paragraph">
                            <img src="/img/pm/quote-yellow.png" class="img-expert-team-quote" width="50" height="50" alt="quote">
                            Didalam mengimplementasikan manajemen proyek yang ideal di <span class="logique-text">LOGIQUE</span>, ada beberapa hal yg perlu di perhatikan, diantaranya terdapat 2 hal yang menjadi prioritas. Yang pertama adalah transparansi, transaparansi berbicara mengenai proses kerja diantara stakeholder dalam proyek. Transparansi didalam proyek terhadap semua stakeholder diperlukan untuk memberikan awareness mengenai status proyek dan mampu meningkatkan ownership setiap stakeholder atas keberhasilan proyek. Transparansi juga meningkatkan kepercayaan satu sama lain dalam bekerja. Yang kedua adalah komitmen. Komitmen setiap stakeholder terhadap perannya di dalam proyek akan menghindari blocker atau obstacle dari kepada stakeholder lainnya sehingga mempermulus proses proyek dari Hulu hingga hilir.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 d-flex align-items-end justify-content-center">
                        <div class="consultant-lead-wrapper">
                            <img src="/img/pm/consultant-lead-meiriando.png" class="img-responsive mx--auto" alt="Meiriando Teja">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb--60px">
        <div class="content-wrapper__">
            <div class="container__">
                <h3 class="main-title main-title--with-square-point mb--30px">
                    Manajemen Proyek di <span class="logique-text fs--24px">LOGIQUE</span>
                </h3>
                <div class="row">
                    <div class="col-md-5">
                        <picture>
                            <source srcset="/img/pm/pm-illustration.webp">
                            <img src="/img/pm/pm-illustration.jpg" class="img-responsive mb--20px mx--auto" alt="pm-illustration">
                        </picture>
                    </div>
                    <div class="col-md-7">
                        <p class="mb--20px">Tidak seperti perusahaan konvensional pada umumnya dimana menggunakan metodology Waterfall dimana semua lingkup pekerjaan akan di kunci sebelum implementasi,kami mengimplementasikan metode Agile – Scrum didalam setiap proyek kami. Dimana metode Agile - Scrum ini dapat membantu mengcover kebutuhan bisnis yang cepat berubah untuk menanggapi kebutuhan pasar yang juga cepat tanpa harus memberikan konsekuensi besar di dalam project yang telah berjalan.</p>
                        <p>Secara umum metode scrum akan membagi fase pengembangan ke dalam beberapa Sprint yang dimana setiap sprint terdiri dari 5 ceremonies yaitu Backlog Grooming, Sprint Planning, Daily Scrum, Sprint Review dan Sprint Retrospective. Setiap ceremonies ini merupakan proses pekerjaan yang saling terkait untuk memastikan setiap sprint akan bisa memberikan delivery yang sesuai ekspektasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb--60px">
        <div class="content-wrapper__">
            <div class="container__">
                <div class="row mb--40px">
                    <div class="col-md-3">
                        <div class="img-ceremonies-wrapper">
                            <picture>
                                <source srcset="/img/pm/backlog.webp">
                                <img src="/img/pm/backlog.png" class="img-responsive" alt="backlog">
                            </picture>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <p>1. Backlog Grooming</p>
                        <p>Backlog Grooming merupakan proses mem-breakdown story yang ada di backlog untuk lebih detail dan lebih jelas sehingga mempermudah pekerjaan di dalam sprint. Dari setiap story yang telah di breakdown ini juga akan di berikan estimasi dari setiap developer kami effort pengerjaannya. Dari total estimasi tersebut akan didapatkan total waktu yang dibutuhkan untuk pengerjaan setiap featurenya.</p>
                    </div>
                </div>
                <div class="row mb--40px">
                    <div class="col-md-3">
                        <div class="img-ceremonies-wrapper">
                            <picture>
                                <source srcset="/img/pm/sprint.webp">
                                <img src="/img/pm/sprint.png" class="img-responsive" alt="sprint">
                            </picture>                        
                        </div>
                    </div>
                    <div class="col-md-9">
                        <p>2. Sprint planning</p>
                        <p>Sprint Planning merupakan proses perencanaan untuk menyiapkan story-story mana saja yang akan di kerjakan dalam sprint di depan. Berdasarkan story-story dari hasil Backlog grooming tersebut dimana dibagi dengan velocity dari setiap developer, maka bisa didapat jumlah story yang bisa dikerjakan dalam setiap sprint tersebut. Setiap scrum team akan berkomitmen untuk menyelesaikan pekerjaan yang disepakati saat sprint planning tersebut.</p>
                    </div>
                </div>
                <div class="row mb--40px">
                    <div class="col-md-3">
                        <div class="img-ceremonies-wrapper">
                            <picture>
                                <source srcset="/img/pm/scrum.webp">
                                <img src="/img/pm/scrum.png" class="img-responsive" alt="scrum">
                            </picture>                        
                        </div>
                    </div>
                    <div class="col-md-9">
                        <p>3. Daily Scrum</p>
                        <p>Daily scrum merupakan event harian yang dilakukan oleh Tim dan scrum master untuk update pekerjaan dari Tim masing-masing. Untuk menjaga ke efektifan dalam proses daily scrum, event ini di timeboxing dalam 15 - 30 menit tergantung dengan kebutuhan di dalam tim sendiri. Setiap member yang ikut dalam daily scrum akan memiliki giliran untuk menjelaskan 3 hal utama dalam daily scrum seperti berikut : </p>
                        <div class="ceremonies-box-wrapper">
                            <span class="ceremonies-box">Pekerjaan yang dilakukan kemarin</span>
                            <span class="ceremonies-box">Pekerjaan yang akan dilakukan hari ini</span>
                            <span class="ceremonies-box">Blocker atau hambatan yang mempengaruhi pekerjaan Tim hari itu</span>
                        </div>
                    </div>
                </div>
                <div class="row mb--40px">
                    <div class="col-md-3">
                        <div class="img-ceremonies-wrapper">
                            <picture>
                                <source srcset="/img/pm/transparency.webp">
                                <img src="/img/pm/transparency.png" class="img-responsive" alt="transparency">
                            </picture>                        
                        </div>
                    </div>
                    <div class="col-md-9">
                        <p>4. Sprint Review</p>
                        <p>Sprint review merupakan event yang dilakukan di akhir dari sprint untuk mereview kembali semua delivery yang telah dikerjakan didepan Product owner maupun project sponsor. Setiap feedback sprint review ini akan filter kembali untuk dapat menjadi improvement di sprint selanjutnya atau akan di hold.</p>
                    </div>
                </div>
                <div class="row mb--40px">
                    <div class="col-md-3">
                        <div class="img-ceremonies-wrapper">
                            <picture>
                                <source srcset="/img/pm/scrum.webp">
                                <img src="/img/pm/scrum.png" class="img-responsive" alt="scrum">
                            </picture>                        
                        </div>
                    </div>
                    <div class="col-md-9">
                        <p>5. Sprint Retrospective</p>
                        <p>Sprint retrospective merupakan event yg dilakukan di akhir sprint untuk me review kembali proses selama 1 sprint dan memutuskan action item yg akan dilakukan di sprint depan untuk proses sprint yang lebih baik. Sprint retrospective sendiri akan mendiskusikan 3 hal yaitu: </p>
                        <div class="ceremonies-box-wrapper">
                            <span class="ceremonies-box">Apa yang kurang berjalan baik selama sprint</span>
                            <span class="ceremonies-box">Apa yang sudah berjalan baik selama sprint</span>
                            <span class="ceremonies-box">Apa yang masih membingungkan didalam sprint</span>
                        </div>
                        <p>Dari 3 hal diskusi tersebut akan di lanjutkan action item yang perlu dilakukan di sprint depan mengcover 3 hal tersebut.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb--60px">
        <div class="content-wrapper__">
            <div class="container__">
                <p class="mb--20px">Didalam implementasi metodi Agile - Scrum ini, kami juga menerapkan  implementasi standar dari PMP / PMI untuk meningkatkan fundamental dan landasan didalam setiap proses Agile - Scrum seperti contoh berikut: </p>
                <div class="row mb--40px">
                    <div class="col-md-5">
                        <picture>
                            <source srcset="/img/pm/evm.webp">
                            <img src="/img/pm/evm.jpg" class="img-responsive mb--10px" alt="evm">
                        </picture>
                    </div>
                    <div class="col-md-7">
                        <p><strong>EVM (Earned Value Management)</strong></p>
                        <p>Earned value management merupakan salah satu project management tools Dimana mengintegrasikan timeline, budget dan perfomance menjadi satu presentasi graphic yang sama. Dengan graphic yang di bentuk dari data yang ada, diharapkan PM  mampu memprediksikan kejadian didepan sehingga PM dapat mengambil keputusan lebih awal untuk membuat project kembali Berjalan sesuai tracknya. EVM ini kita lakukan setiap minggu di dalam weekly report yang kita gunakan untuk dapat melihat kondisi proyek secara transparan.</p>
                    </div>
                </div>
                <div class="row mb--40px">
                    <div class="col-md-5">
                        <picture>
                            <source srcset="/img/pm/risk-management.webp">
                            <img src="/img/pm/risk-management.jpg" class="img-responsive mb--10px" alt="risk-management">
                        </picture>
                    </div>
                    <div class="col-md-7">
                        <p><strong>Risk Management</strong></p>
                        <p>Dengan analisa yang komprehensif juga dari EVM kami dapat membuat risk register dan mengumpulkan semua risiko yang muncul dalam proyek untuk cepat merespon untuk meminimalisir impact risiko-risiko yang ada di proyek. </p>
                    </div>
                </div>
                <div class="row mb--40px">
                    <div class="col-md-5">
                        <picture>
                            <source srcset="/img/pm/wbs.webp">
                            <img src="/img/pm/wbs.jpg" class="img-responsive mb--10px" alt="wbs">
                        </picture>
                    </div>
                    <div class="col-md-7">
                        <p><strong>WBS (Work Breakdown Structure)</strong></p>
                        <p>Pendetailan ruang lingkup kami tuangkan kedalam WBS untuk dapat menjadikan panduan guideline deliver scope didalam project. Dan WBS ini akan di share ke client untuk dapat me-align pengetahuan dari semua stake holder terhadap spesifikasi produk yang diharapkan. Kami juga mengembangkan setiap WBS ini menjadi tempat pencatatan progress dari team untuk dapat melihat persentasi pertumbuhan progress project per minggu nya.</p>
                    </div>
                </div>
                <p class="mb--20px">Dari sisi internal, kami melakukan manajemen ketat terhadap project cost dan efektivitas pengerjaan yang dilakukan oleh karyawan kami melalui aplikasi Nippo, yang dapat melihat laporan pekerjaan yang dilakukan harian secara mendetil.</p>
                <p>Dengan mengkombinasikan semua itu, proses proyek semakin transparan dan semakin mempermudah proses monitoring dan controlling terutama dalam percepatan pengambilan keputusan yang diperlukan didalam proyek. karena itu proyek yang kami kelola dapat selesai dengan cepat dan sesuai dengan ekspektasi dari semua key stakeholder.</p>
            </div>
        </div>
    </section>

    <section class="mb--60px">
        <div class="content-wrapper__">
            <div class="container__">
                <h3 class="main-title main-title--with-square-point">Pengembangan Sistem Secara Dinamis di <span class="logique-text fs--30px">LOGIQUE</span></h3>
                <p class="mb--20px">Sejalan dengan manajemen proyek yang lebih dinamis dan cepat menggunakan metodologi Agile, <span class="logique-text">LOGIQUE</span> melakukan pendekatan yang lebih fleksibel terhadap cara pengembangan sistem dan kontrak kerja. Sehingga, berbeda dengan beberapa tahun sebelumnya saat pengerjaan sebuah proyek perlu dilakukan pendefinisian ruang lingkup secara menyeluruh terlebih dahulu dan tidak dapat dibagi-bagi, <span class="logique-text">LOGIQUE</span> dapat membantu Anda melakukan pengembangan per bagian dengan sistem kerja yang dinamis untuk penyelesaian proyek sesuai kebutuhan. Pada sistem kerja ini, Anda dapat bersama-sama menentukan komposisi tim yang perlu diturunkan dan menggantinya sesuai dengan kebutuhan selama jalannya proyek. Hal ini memungkinkan Anda untuk mendapatkan hasil yang optimal dan cepat dengan komposisi tim yang tepat dengan fleksibilitas kebutuhan bisnis yang cepat didalam perusahaan.</p>
                <p>Untuk mempermudah proses kolaborasi antara kedua belah pihak dan mempercepat delivery dokumentasi didalam proyek, kami menggunakan tools cloud yang bisa di akses oleh kedua belah pihak.</p>
            </div>
        </div>
    </section>

    <section class="mb--60px">
        <div class="content-wrapper__">
            <div class="container__">
                <h3 class="main-title main-title--with-square-point">Hubungi Kami</h3>
                <p>Sukseskan proyek digital Anda bersama <span class="logique-text">LOGIQUE</span> sekarang! Silakan isi form dibawah ini. Kami siap membantu Anda!</p>
                <div class="contact-form-wrapper">
                    <h3 class="text-center mb--40px">Hubungi Kami untuk mendapatkan penawaran terbaik</h3>
                    <form role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                        <input type='hidden' name='submitted' id='submitted' value='1' />
                        <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>'
                            value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                        <fieldset>
                            <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text"  name="name" aria-label="Name"  class="form-control" placeholder="Nama Anda" value='<?php echo $formproc->SafeDisplay('name') ?>'>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" aria-label="Email"  class="form-control" placeholder="Alamat E-mail" value='<?php echo $formproc->SafeDisplay('email') ?>'>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="phone" aria-label="Phone"  class="form-control" placeholder="Nomor Telepon" value='<?php echo $formproc->SafeDisplay('phone') ?>' >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" aria-label="Message" class="form-control" rows="10" placeholder="Pertanyaan"><?php echo $formproc->SafeDisplay('message') ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6" style="display:flex; margin-bottom:1em">
                                <div class="g-recaptcha pull-right"
                                    data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
                                <div class="clearfix"></div><br>
                            </div>
                            <div class="col-md-6 text-right">
                                <button class="btn btn--yellow">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script async defer src='https://www.google.com/recaptcha/api.js'></script>

</body>

</html>