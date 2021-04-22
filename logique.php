<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description"
        content="Perusahaan Web Developer, Designer & Konsultan IT terbaik di Jakarta. LOGIQUE Digital Indonesia, Solusi untuk pengembangan Website, Web Sistem & Mobile App">
    <meta name="keywords"
        content="jasa pembuatan website, digital marketing, web developer, pengembangan aplikasi mobile, sistem aplikasi">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Web / Mobile App Developer & Konsultan IT Terbaik di Jakarta">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/logique.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/logique-about.png">
    <meta property="og:description"
        content="Perusahaan Web Developer, Designer & Konsultan IT terbaik di Jakarta. LOGIQUE Digital Indonesia, Solusi untuk pengembangan Website, Web Sistem & Mobile App">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>Web / Mobile App Developer & Konsultan IT Terbaik di Jakarta</title>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- <link href="/css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/css/sidebar-update.css" >
    <link rel="stylesheet" href="/css/newstyle.css" >
    <link rel="stylesheet" href="/css/style-logique.css">
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="canonical" href="https://www.logique.co.id/logique.php"/>  

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
    
    <div class="wrapper wrapper--update-design wrapper--update-design-font">

        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'about';
            include($_SERVER['DOCUMENT_ROOT'].'/sidebar.php'); 
        ?>

        <?php 
            $lang = 'id';
            $en_link = '/en/logique.php';
            $id_link = '#';
            $jp_link = '/jp/logique.php';
            include($_SERVER['DOCUMENT_ROOT'].'/header.php'); 
        ?>

        <div class="content-wrapper__">

            <section class="--top">
                <div class="container__" style="padding:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="index.php"><span itemprop="name">Beranda</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp; Tentang Kami</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about">
                <div class="container__">
                    <div class="text-center">
                        <div class="text-center">
                            <h1 class="title-index">Tentang Kami</h1>
                            <hr class="title__yellow-line--center">
                            <p class="title__description">LOGIQUE Digital Indonesia adalah konsultan IT dan perusahaan pengembang sistem terkemuka yang dipimpin oleh seorang pengusaha Jepang di Jakarta. <br><br>
                            Sebagai client-oriented developer, kami melayani klien yang percaya pada efektivitas pemasaran digital berkualitas tinggi; berkontribusi pada perkembangan teknologi informasi terdepan dengan memberdayakan perusahaan Anda melalui berbagai layanan web dan apapun yang berkaitan dengan teknologi informasi, seperti pengembangan aplikasi mobile, Aplikasi Web Progresif (PWA), pengembangan web dan sistem, SEO, dan berbagai layanan digital lainnya.</p>
                        </div>

                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">
                                <!-- SLIDER -->
                                <div class="custombox__slider">
                                    <div class="custombox__custom-slider">
                                        <div id="profile" class="carousel slide" data-ride="carousel" data-interval="3000">
                                            <div class="carousel-inner">
                                                <!-- <div class="item ">
                                                    <img src="/img/banner-logo-logique.jpg" alt="Web Developer LOGIQUE 5">
                                                    <div class="custombox__slider-text-wrapper">
                                                        <p class="custombox__slider-text">Dengan pengalaman lebih dari 7
                                                            tahun
                                                            di Indonesia, kami dapat memecahkan masalah yang pada umumnya
                                                            terjadi di Indonesia.</p>
                                                    </div>
                                                </div> -->
                                                <div class="item active">
                                                    <img style="object-position:0 0" src="/img/slider1.jpg"
                                                        alt="Web Developer LOGIQUE 1">
                                                    <div class="custombox__slider-text-wrapper">
                                                        <p class="custombox__slider-text">Konsultasi dengan kami agar kami dapat membantu mengembangkan bisnis Anda.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img src="/img/slider5.jpg" alt="Web Developer LOGIQUE 5">
                                                    <div class="custombox__slider-text-wrapper">
                                                        <p class="custombox__slider-text">Dengan lebih dari 7 tahun pengalaman di Indonesia, tim kami siap untuk menyelesaikan berbagai permasalahan IT Anda.</p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img style="object-position:0 0" src="/img/banner-all-member.jpg"
                                                        alt="logique member">
                                                    <div class="custombox__slider-text-wrapper">
                                                        <p class="custombox__slider-text">Kami menyediakan software monitoring sebagai solusi untuk meningkatkan produktivitas.</p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img src="/img/slider4.jpg" alt="Web Developer LOGIQUE 4">
                                                    <div class="custombox__slider-text-wrapper">
                                                        <p class="custombox__slider-text">Kami menghasilkan software berkualitas yang mengikuti standar jepang / internasional, untuk memenuhi permintaan klien secara global. 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#profile" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#profile" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>

                                    <p class="custombox__slider-btn">
                                        Menyediakan layanan IT dan Digital Marketing
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="principle">
                <div class="container__">
                    <div class="row">
                        <div class="col-md-3">
                            <h1 class="title-index">Karakteristik LOGIQUE</h1>
                            <hr class="title__yellow-line">
                            <br>
                            <a class="career-section__btn" href="portofolio.php">Lihat Portofolio</a>
                        </div>

                        <div class="col-md-9">
                            <div class="principle">
                                <div class="principle__illus">
                                    <img src="../img/principle/bullseye.png" alt="bullseye">
                                    <img src="../img/principle/gear.png" alt="gear">
                                    <img src="../img/principle/shield.png" alt="shield">
                                    <img src="../img/principle/idea.png" alt="idea">
                                    <img src="../img/principle/maintenance.png" alt="maintenance">
                                </div>

                                <div class="principle__content">
                                    <p>LOGIQUE adalah pengembang sistem / web berkualitas di Jakarta dan Yogyakarta, yang didirikan oleh pengusaha Jepang. Dengan pengalaman kami melayani perusahaan besar, kami menjamin solusi IT terbaik. LOGIQUE berupaya memberikan layanan berkualitas tinggi untuk memenuhi kebutuhan pelanggan.<br><br>
                                    Pada era di mana kecepatan sangat penting, LOGIQUE menghargai efisiensi dan ketangkasan terutama di Indonesia di mana segala sesuatu selalu berubah dan berkembang pesat. Kami akan mendukung pelanggan kami untuk memenuhi deadline proyek dan mencapai tujuan bisnis mereka.<br><br>
                                    LOGIQUE menyediakan layanan terpadu di bidang IT / Pemasaran Digital mulai dari perancangan situs web hingga pengembangan sistem perusahaan yang kompleks dan aplikasi mobile. LOGIQUE sering menghadapi tantangan baru tanpa takut akan perubahan.<br><br>
                                    Tim developer kami fleksibel dalam menggunakan berbagai metode terbaik untuk mengembangkan sistem / aplikasi berdasarkan kebutuhan klien. Karena itu, kami dapat menyesuaikan metode kami untuk memberi Anda yang terbaik.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--gray" id="missionStatement">
                <div class="container__">
                    <h1 class="title-index">Misi LOGIQUE</h1>
                    <hr class="title__yellow-line"><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Mendukung sebanyak mungkin perusahaan di Indonesia dalam mencapai tujuannya dengan memberikan solusi IT / pemasaran digital terbaik</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Berkontribusi pada pertumbuhan industri pembuatan dan pengembangan web / aplikasi mobile di Indonesia, serta memberikan peluang yang lebih baik bagi para pengembang web / aplikasi di Indonesia.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="career-section">
                <a class="career-section__btn" href="career/">Lihat Lowongan di Logique</a>
            </section>

            <section id="companyOverview">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="../img/company-overview.png" alt="company overview" style="width: 100%">
                        </div>
                        <div class="col-sm-8">
                            <h1 class="title-index">Profil Perusahaan</h1>
                            <hr class="title__yellow-line">
                            <ul class="company__content">
                                <li>Nama Perusahaan</li>
                                <li class="company__bold">PT. LOGIQUE Digital Indonesia</li>
                                <hr class="company__divider">

                                <li>Bidang Usaha</li>
                                <li class="company__bold">Konsultasi IT, Pembuatan Website, Pembuatan Desain,
                                    Pengembangan
                                    Sistem, Pengembangan Aplikasi Mobile, Digital Marketing Consulting</li>
                                <hr class="company__divider">

                                <li>Direktur</li>
                                <li class="company__bold">Takashi Yoshitsugu</li>
                                <hr class="company__divider">

                                <li>Jumlah Karyawan</li>
                                <li class="company__bold">80 (hingga Nov 2020)</li>
                                <hr class="company__divider">

                                <li>Alamat Kantor Pusat</li>
                                <li class="company__bold">Ad Premier Building 19th Floor, Jalan Tb. Simatupang No. 5,
                                    Pasar Minggu, Jakarta
                                    12550,
                                    INDONESIA</li>
                                <hr class="company__divider">

                                <li>Phone</li>
                                <li class="company__bold">
                                    <i class="fa fa-phone"></i>&nbsp; +62(21) 2270 8935 / 36 <br>
                                    <i class="fa fa-whatsapp"></i>&nbsp; +62 811 870 321
                                </li>
                                <hr class="company__divider">

                                <li>Development Center</li>
                                <li class="company__bold">Yogyakarta ( Kledokan, Kota Yogyakarta )</li>
                                <hr class="company__divider">
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--black" id="directorMessage">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="title-index--white">Profil Direktur </h1>
                            <hr class="title__yellow-line">
                            <div class="director">
                                <div class="director__img">
                                    <img src="/img/yoshi-2020.jpg" alt="Takashi Yoshitsugu" class="img-responsive" />
                                </div>
                                <div class="director__content">
                                    <hr class="title__white-line">
                                    <div>
                                        <h5>TAKASHI YOSHITSUGU, <span class="yellow">Direktur</span></h5><br>
                                        <p style="text-align: justify"> Takashi Yoshitsugu lahir di Tokyo pada tahun 1976. Pada tahun 1999, Ia lulus dari Departemen Teknik Sistem Manajemen, Waseda University di Tokyo. Ia memiliki cukup banyak pengalaman wirausaha dimulai dari Japan Research Institute, Inc., perusahaan konsultan CRM, dll. <br><br>
                                        Hingga pada tahun 2005, Ia mulai mendirikan bisnis e-commerce, perusahaan perdagangan impor, dan perusahaan konsultan sendiri di Jepang. Ia mendirikan dan mengelola LOGIQUE di Indonesia sejak tahun 2012.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="title-index--white">Pesan</h1>
                            <hr class="title__yellow-line">
                            <p class="director__message" style="text-align: justify">Nama LOGIQUE berasal dari bahasa Indonesia yaitu “logika-ku”, yang artinya adalah “logika saya”. Ide dibalik pemilihan nama itu adalah prinsip pencapaian tujuan dengan kuatnya keyakinan, kepercayaan, dan yang paling utama adalah logika. Melalui prinsip dasar ini, kami berupaya untuk memaksimalkan manfaat jangka menengah dan panjang dari kedua belah pihak, dengan mempertimbangkan lingkungan TI yang berkembang secara dramatis di Asia Tenggara. <br><br>
                            Sejak tahun 2012, kami telah membimbing klien kami di bidang web, SI, dan digital marketing di Indonesia dengan memaksimalkan teknologi IT dan web. Untuk berkontribusi lebih banyak ke pasar IT / Digital Indonesia, kami terus berupaya untuk menggabungkan gaya kerja yang fleksibel, seperti kerja jarak jauh dan jam kerja yang lebih pendek, karena kebahagiaan dan efisiensi karyawan kami. <br><br>
                            Kami menyediakan langganan untuk layanan dan produk internal kami, yang telah dikembangkan dan diuji, yang kami gunakan untuk mengoperasikan bisnis kami secara efisien. Kami akan terus tumbuh dan berkontribusi pada pengembangan teknologi di Indonesia, kepuasan klien kami, dan peningkatan kualitas tim kami.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="lgqDoes">
                <div class="container__">
                    <div class="text-center">
                        <h1 class="title-index">Layanan LOGIQUE</h1>
                        <hr class="title__yellow-line--center">
                        <p class="title__description">Kami menyediakan beragam layanan seputar website dan Internet, mulai dari desain dan pembuatan website, pengembangan sistem / aplikasi, hingga pemasaran digital. Kami juga telah menciptakan berbagai sistem HR berbasis cloud untuk menyelesaikan masalah perusahaan di Indonesia. Jangan ragu untuk menghubungi kami jika Anda tertarik dengan layanan dan produk kami.
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="custombox__product-wrapper">
                                <div class="custombox__product-list">
                                    <img class="custombox__product-list-img" src="/img/servicelist.png" alt="servicelist">
                                    <a href="layanan.php" class="custombox__btn-product">See Service
                                        List</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="custombox__product-wrapper">
                                <div class="custombox__product-list">
                                    <img class="custombox__product-list-img" src="/img/productlist.png" alt="productlist">
                                    <a href="produk.php" class="custombox__btn-product">See Product
                                        List</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php include "./contact-logique-section.php"; ?>

        </div>

        <?php include 'footer.php';?>

    </div>
</body>

</html>