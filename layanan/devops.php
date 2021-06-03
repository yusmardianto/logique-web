<?php
require_once("assets/form/fgcontact_webdev.php");

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
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" content="Kami menyediakan layanan konstruksi dan operasi sistem pada AWS, GCP, Alibaba Cloud kepada pelanggan di Indonesia. Silahkan hubungi kami jika ada pertanyaan mengenai migrasi ke server cloud, pengembangan sistem baru, agen operasi, agen penagihan, dll. LOGIQUE Digital Indonesia">
    <meta name="keywords" content=" ">
    <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Operasi Struktur Server Cloud | DevOps | Perusahaan Pengembangan Sistem di Jakarta, LOGIQUE Digital Indonesia</title>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="assets/css/style_devops.css" rel="stylesheet">    
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="canonical" href="https://www.logique.co.id/layanan/devops.php"/>      
    <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-105878648-1', 'auto');
	ga('send', 'pageview');

	</script>
    <?php 
        if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') {
            echo "<!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-KQJRS4V');</script>
            <!-- End Google Tag Manager -->";
        }
    ?>

    
    <style>               
        /* Centering image */
        .centering-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        .right-image {
            display: block;
            margin-left: auto;            
            width: 50%;
        }
        /* CAROUSEL */
        .carousel-control.left {
            background-image: none; 
            margin: 0;
            position: absolute;
            top: 25%;           
        }

        .carousel-control.right {
            background-image: none;    
            margin: 0;
            position: absolute;
            top: 25%;          
        }

        .custom__card-why-logique{                    
            background-color: white;
            padding: 14px;
            border-radius: 10px;
            border: 1px solid #d2d2d2;
        }
        
        .carousel-indicators li {           
            background-color: grey;
        }
        .carousel-indicators .active {           
            background-color: #ffca13;
        }
 
        </style>
</head>

<body>
	<?php 
		if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') {
			echo '<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQJRS4V"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->';
		}
	?>
    <style>
        @media only screen (max-width: 414px) {
            .breadcrumb {
                padding-left: 15px;
            }
        }
    </style>
    <div class="wrapper wrapper--update-design wrapper--update-design-font"> 
        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'services';
            include($_SERVER['DOCUMENT_ROOT'].'/sidebar.php'); 
        ?>

        <?php 
            $lang = 'id';
            $en_link = '/en/services/devops.php';
            $id_link = '#';
            $jp_link = '/jp/services/devops.php';
            include($_SERVER['DOCUMENT_ROOT'].'/header.php'); 
        ?>

        <header class="content-wrapper__">
            <div class="text-left --top">
                <div class="container" style="padding:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="/jp/index.php"><span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item" href="/layanan/services.php"><span itemprop="name">&nbsp;layanan</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;DevOps / AWS</span></a>
                                    <meta itemprop="position" content="3" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container__">
                <div class="row">
                    <div class="col-md-8 text-left ">
                        <h1 class="text-6xl font-black mt-12 leading-normal">Layanan Manajemen <br /> Cloud Server</h1>
                        <h3 class="font-black text-color-primary-main mt-2 ">
                            AWS / GCP / Alibaba Cloud
                        </h3>    
                        <span style="border-bottom: 2px solid white; color : transparent">123456789</span>                                                  
                    </div>
                    <div class="col-md-4">
                </div>
            </div>
        </header>
    </div> 

    <!-- Section Description AWS Partner Network -->
    <section>
        <div class="container mt-12">
            <div class="row">
                <div class="col-md-4">

                    <span style="border-bottom: 2px solid black; color : transparent">123456789</span>    
                    <a href="/"><img src="/img/logo.png" alt="Jasa Pembuatan Website Logique Digital Indonesia" class="img-responsive logo--update-design mt-7"></a>
                    <p class="font-black text-4xl leading-normal mt-2">
                        telah disertifikasi sebagai mitra AWS di Indonesia Percayakan pengelolaan cloud server Anda bersama kami!
                    </p>
                    <img class="mt-7" src="assets/img/img-devops/logo-aws.webp" alt="AWS badge">
                    <img class="mt-4" src="assets/img/img-devops/images-dots.webp" alt="Dots">
                </div>
                <div class="col-md-8">
                    <p class="mt-4 font-black">
                        LOGIQUE menyediakan layanan lengkap DevOps pada manajemen cloud server Indonesia untuk memudahkan dan meningkatkan ketangkasan bisnis dalam membawa produk ke pasar. LOGIQUE sudah sangat berpengalaman dalam mengelola cloud server untuk berbagai jenis bisnis di Indonesia baik itu dengan cloud server dari AWS, GCP, ataupun Alibaba.                
                    </p>
                    <p class=" mt-4 font-black">
                        Untuk pengelolaan cloud server yang optimal, kami memberikan layanan DevOps untuk bisnis Anda. DevOps (Development dan Operations) sendiri merupakan kombinasi dari culture, praktik, dan alat yang digabungkan untuk meningkatkan kemampuan sebuah perusahaan untuk proses delivery aplikasi ataupun website dengan kecepatan yang tinggi. Dengan demikian, proses pengembangan produk baru baik itu website ataupun aplikasi memungkinkan untuk dilakukan dengan cepat.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-black">
                        Layanan Devops untuk Cloud Computing yang Disediakan LOGIQUE
                    </h2>
                    <p class="font-black mt-4">
                        Jika saat ini Anda sedang membangun atau mengembangkan situs website, e-commerce, ataupun aplikasi website yang menuntut keandalan, ketangkasan, kolaborasi terpusat, stabilitas, dan keamanan data bisnis, maka Anda membutuhkan layanan cloud server yang bekerja secara optimal. LOGIQUE hadir untuk membantu menyediakan solusi DevOps secara lengkap untuk manajemen cloud server Indonesia bagi bisnis Anda. 
                    </p>
                    <p  class="font-black mt-4">
                        Cloud server adalah server berbentuk virtual yang dibangun, dihosting, dan dikirimkan oleh platform komputasi awan melalui internet. Dengan menggunakan cloud server, maka data ataupun sumber daya lain dapat tersebar dan dapat diakses dengan mudah dari berbagai perangkat di lokasi berbeda ataupun dari jarak jauh.
                    </p>
                    <p  class="font-black mt-4 mb-6">
                        LOGIQUE dapat membantu Anda untuk memberdayakan website, e-commerce, ataupun aplikasi website Anda dan memberikan dukungan yang sangat dibutuhkan untuk dapat menjalankannya dengan layanan manajemen cloud server yang kami miliki. Dengan profesionalitas dan pengalaman tim, LOGIQUE menyediakan pengelolaan cloud server dari penyedia layanan cloud computing terbaik yaitu:
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section TABS Cloud Server Providers -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tabcontainer" style="width: 100%">
                        <div class="tab">
                            <button class="tablinks font-black" onclick="openCity(event, 'Amazon')">
                                Amazon Web Services                            
                            </button>
                            <button class="tablinks font-black" onclick="openCity(event, 'Google')">                                
                                Google Cloud Platform
                            </button>
                            <button class="tablinks font-black" onclick="openCity(event, 'Alibaba')">
                                Alibaba Cloud
                            </button>
                        </div>

                        <!-- TAB CONTENT AMAZON WEB SERVICES -->
                        <div id="Amazon" class="tabcontent">
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="mt-7 " src="assets/img/img-devops/amazon-logo-description.webp" alt="AWS badge">
                                </div>
                                <div class="col-md-7">
                                    <h3 class="mt-7 font-black">1. Amazon Web Services (AWS)</h3>
                                    <p>
                                        Amazon Web Services (AWS) menjadi salah satu penyedia cloud terbesar dan terkemuka di pasar. Banyak klien kami yang memilih untuk menggunakan cloud server dari AWS karena kemampuannya dalam menghadirkan solusi cloud computing yang fleksibel, andal, dapat diskalakan, mudah digunakan, serta hemat biaya. Sampai saat ini, AWS sudah dipercaya oleh berbagai jenis bisnis untuk mendukung kebutuhan mereka dalam menjalankan aplikasi-aplikasi penting yang membutuhkan high availability. LOGIQUE sendiri, saat ini sudah tersertifikasi sebagai mitra AWS di Indonesia.
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="assets/img/img-devops/cloud-data.webp" alt="Amazon Elastic Compute Cloud (Amazon EC2)">                                    
                                </div>
                                <div class="col-md-10">
                                    <h4 class="font-black">Amazon Elastic Compute Cloud (Amazon EC2)</h4>
                                    <p>
                                        Merupakan layanan web yang menyediakan keamanan serta komputasi yang dapat diubah ukurannya (resizable) di dalam cloud. Amazon EC2 ini juga menawarkan platform komputasi terluas dan terdalam dengan beragam pilihan prosesor, storage, networking, serta sistem operasi. Kelebihan lain dari produk ini adalah tersedianya prosesor tercepat di cloud dan mereka memiliki jaringan ethernet sebesar 400 Gbps.
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="assets/img/img-devops/database-storage.webp" alt="Amazon Relational Database Service (RDS)">                                    
                                </div>
                                <div class="col-md-10">
                                    <h4  class="font-black">Amazon Relational Database Service (RDS)</h4>
                                    <p>
                                        Merupakan layanan website untuk mempermudah proses penyiapan, pengoperasian, sera penskalaan database relasional di dalam AWS cloud. Layanan ini menawarkan kapasitas yang hemat biaya serta resizable untuk mengelola database relasional standar. RDS juga dapat digunakan untuk mengelola tugas administrasi database umum.
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="assets/img/img-devops/apploadbalancer.webp" alt="Load Balancer">                                    
                                </div>
                                <div class="col-md-10">
                                    <h4  class="font-black">Application Load Balancer (ALB)</h4>
                                    <p>
                                        Application Load Balancer (ALB) dapat menyederhanakan dan meningkatkan keamanan aplikasi Anda. ALB dapat memastikan bahwa cipher dan protokol SSL / TLS terbaru akan digunakan setiap saat.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="assets/img/img-devops/firewall.webp" alt="Firewall">                                    
                                </div>
                                <div class="col-md-10">
                                    <h4  class="font-black">Web Application Firewall (WAF)</h4>
                                    <p>
                                        AWS Web Application Firewall adalah web application firewall yang dapat membantu melindungi aplikasi web atau API Anda dari eksploitasi web umum serta bot yang dapat mempengaruhi availability aplikasi, membahayakan keamanan, atau mengonsumsi sumber daya yang berlebihan. AWS WAF ini akan memberikan Anda kendali atas bagaimana lalu lintas dapat mencapai aplikasi serta memungkinkan Anda untuk dapat membuat aturan keamanan yang mengontrol lalu lintas bot dan memblokir pola serangan seperti injeksi SQL atau cross-site scripting.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="assets/img/img-devops/vpn.webp" alt="VPN">                                    
                                </div>
                                <div class="col-md-10">
                                    <h4  class="font-black">Virtual Private Network (VPN)</h4>
                                    <p>
                                        AWS Virtual Private Network dapat digunakan untuk membangun koneksi yang aman antara jaringan on-premises, remote offices, client devices, serta jaringan global AWS. Jika Anda tertarik untuk menggunakan VPN, AWS menyediakan dua layanan untuk Anda yaitu AWS Site-to-Site VPN dan AWS Client VPN. Masing-masing dari layanan tersebut sama-sama menawarkan solusi cloud VPN yang aman untuk melindungi lalu lintas jaringan Anda.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="assets/img/img-devops/servers.webp" alt="Server">                                    
                                </div>
                                <div class="col-md-10">
                                    <h4  class="font-black">Amazon Simple Storage Service (Amazon S3)</h4>
                                    <p>
                                        Amazon S3 merupakan layanan AWS untuk penyimpanan objek yang menawarkan skalabilitas, data availability, keamanan, dan kinerja yang tinggi. Layanan ini dapat digunakan oleh pelanggan dari berbagai industri untuk menyimpan dan melindungi sejumlah data untuk berbagai keperluan seperti data lake, situs web, aplikasi seluler, pencadangan dan pemulihan, pengarsipan, aplikasi perusahaan, dan lain-lain.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <!-- TAB CONTENT GOOGLE CLOUD PLATFORM -->
                        <div id="Google" class="tabcontent">
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="mt-7 " src="assets/img/img-devops/gcp-logo.webp" alt="GCP Logo">
                                </div>
                                <div class="col-md-7">                                  
                                    <h3 class="mt-7 font-black">2. Google Cloud Platform (GCP)</h3>
                                    <p>
                                        Google Cloud Platform merupakan layanan cloud computing yang disediakan oleh Google. GCP menawarkan solusi cloud yang memungkinkan bisnis Anda untuk dapat dimodernisasi serta proses pengembangan yang lebih cepat di lingkungan apa pun.
                                    </p> 
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="assets/img/img-devops/gcp-cloud-storage.webp" alt="GCP Cloud Storage">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black">Cloud Storage</h4>
                                    <p>
                                        Merupakan tempat penyimpanan objek yang aman, tahan lama, serta dapat diskalakan. Cloud storage memungkinkan bisnis Anda untuk dapat menyimpan berbagai jenis data dalam berbagai ukuran.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="assets/img/img-devops/gcp-compute-engine.webp" alt="GCP Compute engine">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black">Compute Engine</h4>
                                    <p>
                                        Merupakan layanan komputasi dari GCP yang aman dan dapat disesuaikan serta memungkinkan Anda untuk bisa membuat dan menjalankan mesin virtual di dalam infrastruktur Google. Beberapa tipe mesin virtual tersebut seperti E2, N2, N2D, N1, M2, M1, dan lain-lain.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="assets/img/img-devops/gcp-cloud-server.webp" alt="GCP cloud server">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black">Cloud SDK</h4>
                                    <p>
                                        Merupakan alat dan pustaka untuk berinteraksi dengan produk dan layanan Google Cloud.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="assets/img/img-devops/gcp-cloud-sql.webp" alt="GCP cloud sql">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black">Cloud SQL</h4>
                                    <p>
                                        Layanan yang mengelola database relasional untuk MySQL, PostgreSQL, dan SQL Server. Cloud SQL dapat bekerja secara otomatis untuk memastikan bahwa database Anda dapat diandalkan, aman, serta dapat diskalakan sehingga bisnis Anda dapat terus berjalan tanpa gangguan.
                                    </p>
                                </div>
                            </div>
                                                       
                        </div>

                        <!-- TAB CONTENT ALIBABA CLOUD-->
                        <div id="Alibaba" class="tabcontent">
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="mt-7 " src="assets/img/img-devops/alibaba-logo-description.webp" alt="Alibaba Logo">
                                </div>
                                <div class="col-md-7">                                  
                                    <h3 class="mt-7 font-black">3. Alibaba Cloud</h3>
                                    <p>
                                        Layanan dari Alibaba Cloud juga disediakan oleh LOGIQUE untuk memenuhi kebutuhan cloud server Indonesia. Alibaba Cloud menyediakan komputasi awan dan kemampuan pemrosesan data yang andal dan aman untuk ribuan perusahaan, pengembang, dan organisasi pemerintah di lebih dari 200 negara dan wilayah. Selain memiliki performa dan keandalan yang terbukti, Alibaba Cloud juga memiliki kehadiran yang kuat di Asia.
                                    </p> 
                                </div>
                            </div>       
                            
                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="assets/img/img-devops/alibaba-elastic.webp" alt="alibaba-elastic">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black">Elastic Compute Service (ECS)</h4>
                                    <p>
                                        Alibaba Elastic Compute Service (ECS) menyediakan memori yang bekerja dengan cepat dan CPU Intel terbaru untuk membantu Anda dalam menjalankan aplikasi. ECS ini juga akan memberikan result secara cepat dengan latency yang rendah.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="assets/img/img-devops/alibaba-sas.webp" alt="alibaba-sas">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black">Simple Application Server (SAS)</h4>
                                    <p>
                                        Layanan ini memungkinkan proses deployment dengan mudah dan mendukung layanan all-in-one seperti domain name resolution, penerbitan situs web, keamanan, O&M, serta manajemen aplikasi.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="assets/img/img-devops/alibaba-balancer.webp" alt="alibaba-balancer">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black">Server Load Balancer (SLB)</h4>
                                    <p>
                                        Merupakan produk atau layanan dari Alibaba Cloud untuk mendistribusikan lalu lintas jaringan di seluruh grup server backend serta meningkatkan kapabilitas layanan dan ketersediaan aplikasi. SLB ini mampu memberikan load balancing yang berkinerja tinggi.
                                    </p>
                                </div>
                            </div>                                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- SECTION SERVICE LIST OF LOGIQUE -->
    <section >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="mt-7" src="assets/img/img-devops/image-temukan-solusi.webp" alt="Solution">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-7 font-black">Temukan Solusi dan Layanan Terbaik dari LOGIQUE</h2>
                    <p class="mb-6 font-black">
                        Dalam memberikan layanan DevOps untuk pengelolaan cloud server Indonesia, LOGIQUE menawarkan beberapa solusi untuk Anda, yaitu:
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-billing-service.svg">
                        <h3>Layanan Penagihan</h3>
                        <p>
                            Kami mengeluarkan tagihan bersama Faktur Pajak dalam Rupiah sehingga Anda tidak perlu membayar ke AWS dalam USD.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-development-service.svg">
                        <h3>Layanan Pengembangan</h3>
                        <p>
                            Kami menyediakan layanan untuk membangun sistem berbasis cloud dan memigrasikan sistem Anda dari server on-premise ke server cloud.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="new-box">
                        <img src="assets/img/img-devops/icon-operation-maintenance-service.svg">
                        <h3>Layanan Operasi dan Pemeliharaan</h3>
                        <p>
                            Anda tidak perlu memiliki IT Support internal. Kami menyediakan pemantauan 24/7, dukungan teknis, dan troubleshooting.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION WHY LOGIQUE ? (CAROUSEL) -->
    <section>   
        <div class="container">
            <div style="margin-bottom: -124px;">
                <span style="border-bottom: 2px solid black; color : transparent">123456789</span>    
                <h2 class="mt-7 font-black left">Kenapa Memilih </h2>  
                <a href="/"><img src="/img/logo.png" alt="Jasa Pembuatan Website Logique Digital Indonesia" class="img-responsive logo--update-design"></a> 
                <img class="mt-4" src="assets/img/img-devops/images-dots.webp" alt="Dots">
            </div>

            <div id="why-logique" class="carousel slide" data-ride="carousel">        
                <ol class="carousel-indicators">
                    <li data-target="#why-logique" data-slide-to="0" class="active"></li>
                    <li data-target="#why-logique" data-slide-to="1"></li>
                    <li data-target="#why-logique" data-slide-to="2"></li>
                </ol>
                
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="right-image" src="assets/img/img-devops/bg-why-logique-1.webp" alt="Demo 1">
                        <div class="carousel-caption" style="margin-left: -200px; margin-right: 124px">     
                            <div class="custom__card-why-logique">
                                <h3 class="text-color-black-main text-left">
                                    Memberikan solusi lengkap dan terbaik
                                </h3>                       
                                <p class="text-color-black-main text-left mt-2">
                                    LOGIQUE menyediakan layanan penuh DevOps pada cloud server. Kami juga mampu memberikan beragam solusi terbaik mulai dari pengelolaan cloud server, pengembangan aplikasi dan website, keamanan cyber, dan lain-lain. Bersama LOGIQUE, Anda akan mendapatkan One Stop Solution untuk mengembangkan bisnis dengan mudah dan sukses di era digital.  
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img class="right-image" src="assets/img/img-devops/bg-why-logique-2.webp" alt="Demo 2">
                        <div class="carousel-caption" style="margin-left: -200px; margin-right: 124px">     
                            <div class="custom__card-why-logique">
                                <h3 class="text-color-black-main text-left">
                                    Profesional dan berpengalaman
                                </h3>                       
                                <p class="text-color-black-main text-left mt-2">
                                    LOGIQUE adalah mitra AWS yang sudah tersertifikasi di Indonesia. Selain itu, LOGIQUE juga memiliki tim ahli di bidang pengelolaan cloud server yang sudah sangat berpengalaman dalam membantu berbagai jenis bisnis di Indonesia. Oleh karena itu, Anda tidak perlu meragukan keahlian teknis yang kami miliki.
                                </p>
                            </div>
                            </div>
                    </div>
    
                    <div class="item">
                        <img class="right-image" src="assets/img/img-devops/bg-why-logique-3.webp" alt="Demo 2">
                        <div class="carousel-caption" style="margin-left: -200px; margin-right: 124px">     
                            <div class="custom__card-why-logique">
                                <h3 class="text-color-black-main text-left">
                                    Mampu memberikan respon yang cepat
                                </h3>                       
                                <p class="text-color-black-main text-left mt-2">
                                    LOGIQUE memberikan layanan DevOps yang fast respon untuk kebutuhan cloud server Anda. Kami juga akan memberikan dukungan teknis dan trouble shooting 24/7 jika terjadi masalah yang tidak diinginkan pada cloud server Anda.
                                </p>
                            </div>
                            </div>
                    </div>
                    
                       
    
                </div>
            </div>
        </div>
    </section> 
   


    <!-- SECTION (CAROUSEL WITH ARROW) --> 
    <?php include './devops-portofolio-section.php';?>


     <!-- SECTION CALL TO ACTION -->
    <section class="custom_section-cta">
        <div class="container__">
                <div class="row">
                    <div class="col-md-8 text-left ">
                        <p class="text-white mt-4 leading-normal tracking-widest">Contact Us</p>
                        <h3 class="font-black text-white mt-2 ">
                            We’re here to serve you.
                        </h3>    
                    </div>
                    <div class="col-md-4 text-right">
                        <button type="button" class="mt-7 btn custom__button-contact-us">
                            <a href="/hubungi-kami.php">
                                <p class="font-black text-color-black-main">➡ &nbsp; Contact Us Now</p>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
    </section>

    
    <?php include '../footer.php'; ?>    
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
    $(function() {
        $('.smooth').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname ==
                this.hostname) {
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

    $(document).ready(function(event){        
        openCity(event, 'Amazon')
        // $('#Amazon').addClass("button.active")
    })


    //*Feat: Tab
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
  
    </script>
</body>
</html>
