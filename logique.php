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
    <link href="/css/style-revamp.css" rel="stylesheet">
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

        <div class="logique-update content-wrapper__">

            <section class="logique__banner --top">
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
                    <section id="about">
                        <div class="container__" align="center">
                            <h1 class="title-index">Tentang Kami</h1>
                            <hr class="title__yellow-line--center">
                            <div class="row" align="left">
                                <div class="col-sm-12">
                                    <p><b>LOGIQUE</b> adalah nama yang berasal dari istilah Bahasa Indonesia “logika-ku”. Dengan menjunjung tinggi standar yang sangat logis dalam segala hal yang kami lakukan kami memberikan layanan terbaik kepada klien kami dan tanpa ragu-ragu beralih dari cara atau metode yang sudah ketinggalan zaman.</p><br>
                                    <p>Kami adalah Agile Developer dan Konsultan DX profesional yang sejak tahun 2012 telah membantu banyak klien mendigitalisasikan ide dan bisnis mereka.</p><br>
                                    <p>LOGIQUE adalah Konsultan, Pengembang Sistem, dan Agen Pemasaran Digital dengan pemahaman yang mendalam tentang pasar Indonesia serta memiliki banyak pengalaman dengan proyek-proyek Internasional.</p><br>
                                    <p>Kami memiliki grup perusahaan yakni <a href="https://www.kazokku.com/"><b>KAZOKKU</b></a> yang menyediakan layanan outsourcing IT untuk memenuhi tenaga IT profesional bagi perusahaan yang membutuhkan.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>

            <section id="principle">
                <div class="container__">
                    <div class="row">
                        <div class="col-md-4"><br><br>
                            <h1 class="title-index"><b>Kenali LOGIQUE Lebih Dekat</b></h1>
                            <hr class="title__yellow-line">
                            <br>
                            <div class="row">
                                <a style="margin-left:15px" class="career-section__btn" href="download/Company_Profile_ID.pdf"><img src="/img/logique/download.png"/>Unduh Profil Perusahaan</a>
                            </div>
                        </div>

                        <div class="col-md-8"><br><br>
                            <div class="principle">
                                <div class="principle__content">
                                    <p>
                                        <b>LOGIQUE merupakan pengembang web dan sistem web berkualitas yang didukung oleh tim developer terbaik dan profesional dibidangnya masing-masing. Hadir di Indonesia sejak tahun 2012, kami telah memiliki banyak pengalaman dalam menyelesaikan proyek-proyek besar dibidang IT untuk perusahaan berskala nasional maupun internasional. Misi kami adalah untuk mendukung sebanyak mungkin perusahaan di Indonesia dengan solusi IT dan pemasaran digital terbaik. Download Company Profile kami dan dapatkan informasi lebih lengkap mengenai LOGIQUE.</b>
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
                        <div class="col-md-6">
                            <div class="custombox__custom-slider">
                                <div id="profile" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div id="imgCarousel" class="carousel-inner">
                                        <div class="item active">
                                            <img style="object-position:0 0" src="/img/slider1.jpg" alt="Web Developer LOGIQUE 1">
                                        </div>
                                        <div class="item">
                                            <img src="/img/slider5.jpg" alt="Web Developer LOGIQUE 5">
                                        </div>
                                        <div class="item">
                                            <img style="object-position:0 0" src="/img/banner-all-member.jpg" alt="logique member">
                                        </div>
                                        <div class="item">
                                            <img src="/img/slider4.jpg" alt="Web Developer LOGIQUE 4">
                                        </div>
                                    </div>
                                    <div class="mobile-wrapper-carousel">
                                        <div class="left carousel-control" href="[id^=profile]" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </div>
                                        <div class="right carousel-control" href="[id^=profile]" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custombox__custom-slider">
                                <div id="profile" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="bg--dark">
                                        <p align="center">Menyediakan layanan IT dan Digital Marketing</p>
                                    </div><br>
                                        <div id="txtCarousel" class="carousel-inner">
                                            <div class="item active">
                                                <p style="margin-left:20px"><b>Konsultasi dengan kami agar kami dapat membantu mengembangkan bisnis Anda.<div style="color: rgba(0, 0, 0, 0.001); -moz-user-select: none;">kami dapat membantu </div></b></p>
                                            </div>
                                            <div class="item">
                                                <p style="margin-left:20px"><b>Dengan lebih dari 7 tahun pengalaman di Indonesia, tim kami siap untuk menyelesaikan
                                                        berbagai permasalahan IT Anda.</b></p>
                                            </div>
                                            <div class="item">
                                                <p style="margin-left:20px"><b>Kami menyediakan software monitoring sebagai solusi untuk meningkatkan
                                                        produktivitas.<div style="color: rgba(0, 0, 0, 0.001); -moz-user-select: none;">kami dapat membantu </div></b></p>
                                            </div>
                                            <div class="item">
                                                <p style="margin-left:20px"><b>Kami menghasilkan software berkualitas yang mengikuti standar jepang / internasional,
                                                        untuk memenuhi permintaan klien secara global.</b></p>
                                            </div>
                                        </div>
                                        <div class="desktop-wrapper-carousel">
                                            <div class="row" style="margin-top:145px">
                                                <div class="col-xs-1">
                                                    <div class="bg--button">
                                                        <a href="[id^=profile]" data-slide="prev">
                                                            <img src="/img/logique/arrowleft.png"/>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-1"></div>
                                                <div class="col-xs-1">
                                                    <div class="bg--button">
                                                        <a href="[id^=profile]" data-slide="next">
                                                            <img src="/img/logique/arrowright.png"/>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="principle">
                <div class="container__">
                    <h1 class="title-index"><b>Karakteristik LOGIQUE</b></h1>
                    <hr class="title__yellow-line">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/img/logique/Karakteristik1.png"/><br><br>
                            <p>LOGIQUE adalah pengembang sistem / web berkualitas di Jakarta dan Yogyakarta, yang didirikan oleh pengusaha Jepang. Dengan pengalaman kami melayani perusahaan besar, kami menjamin solusi IT terbaik. LOGIQUE berupaya memberikan layanan berkualitas tinggi untuk memenuhi kebutuhan pelanggan.</p><br><br>
                        </div>
                        <div class="col-md-6">
                            <img src="/img/logique/Karakteristik2.png"/><br><br>
                            <p>Pada era di mana kecepatan sangat penting, LOGIQUE menghargai efisiensi dan ketangkasan terutama di Indonesia di mana segala sesuatu selalu berubah dan berkembang pesat. Kami akan mendukung pelanggan kami untuk memenuhi deadline proyek dan mencapai tujuan bisnis mereka.</p><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/img/logique/Karakteristik3.png"/><br><br>
                            <p>LOGIQUE menyediakan layanan terpadu di bidang IT / Pemasaran Digital mulai dari perancangan situs web hingga pengembangan sistem perusahaan yang kompleks dan aplikasi mobile. LOGIQUE sering menghadapi tantangan baru tanpa takut akan perubahan.</p><br><br>
                        </div>
                        <div class="col-md-6">
                            <img src="/img/logique/Karakteristik4.png" width="14%"/><br><br>
                            <p>Tim developer kami fleksibel dalam menggunakan berbagai metode terbaik untuk mengembangkan sistem / aplikasi berdasarkan kebutuhan klien. Karena itu, kami dapat menyesuaikan metode kami untuk memberi Anda yang terbaik.</p><br><br>
                        </div>
                    </div>
                    <div align="center">
                        <a class="career-section__btn" href="portofolio.php"><b>Lihat Portofolio</b></a>
                    </div>
                </div>
            </section>

            <section class="bg--black" id="missionStatement">
                <div class="container__">
                    <h1 class="title-index" style="color:white"><b>Misi LOGIQUE</b></h1>
                    <hr class="title__yellow-line"><br>
                    <div class="row" style="margin-top:-100px">
                        <div class="col-sm-6"><br>
                            <img src="/img/logique/misi.png" class="img-responsive"/>
                        </div>
                        <div class="col-sm-6">
                            <p><b>Mendukung sebanyak mungkin perusahaan di Indonesia dalam mencapai tujuannya dengan memberikan solusi IT / pemasaran digital terbaik</b></p><br>
                            <p>Berkontribusi pada pertumbuhan industri pembuatan dan pengembangan web / aplikasi mobile di Indonesia, serta memberikan peluang yang lebih baik bagi para pengembang web / aplikasi di Indonesia.</p><br><br>
                        </div>
                    </div>
                </div>
            </section>

            <section class="career-section" style="margin-top:-40px">
                <a class="career-section__btn" href="career/">Lihat Lowongan di Logique</a>
            </section>

            <section id="companyOverview">
                <div class="container__">
                    <h1 class="title-index" align="center"><b>Profil Perusahaan</b></h1>
                    <hr class="title__yellow-line--center">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="company__content">
                                <li><b>Nama Perusahaan</b></li>
                                <li class="company__bold">PT. LOGIQUE Digital Indonesia</li>
                                <hr class="company__divider" style="margin-top:12px; margin-bottom:12px">
                                
                                <li><b>Bidang Usaha</b></li>
                                <li class="company__bold">Konsultasi IT/DX, Pembuatan Website, Pembuatan Desain, Pengembangan Sistem, Pengembangan Aplikasi Mobile, Konsultasi Digital Marketing</li>
                                <hr class="company__divider" style="margin-top:12px; margin-bottom:12px">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <li><b>Direktur</b></li>
                                        <li class="company__bold">Takashi Yoshitsugu</li>
                                    </div>
                                    <div class="col-sm-6">
                                        <li><b>Jumlah Karyawan</b></li>
                                        <li class="company__bold">83 (hingga Mei 2022)</li>
                                    </div>
                                </div>
                                <hr class="company__divider" style="margin-top:12px; margin-bottom:12px">

                                <li><b>Alamat Kantor Pusat</b></li>
                                <li class="company__bold">Ad Premier Building 19th Floor, Jalan Tb. Simatupang No. 5, Pasar Minggu, Jakarta 12550, INDONESIA</li>
                                <hr class="company__divider" style="margin-top:12px; margin-bottom:12px">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <li><b>Phone</b></li>
                                        <li class="company__bold"><img src="/img/logique/phone.png"/> +62(21) 2270 8935 / 36</li>
                                        <li class="company__bold"><img src="/img/logique/wa.png"/> +62 811 870 321</li>
                                    </div>
                                    <div class="col-sm-6">
                                        <li><b>Email</b></li>
                                        <li class="company__bold"><img src="/img/logique/email.png"/> info@logique.co.id</li>
                                    </div>
                                </div>
                                <hr class="company__divider" style="margin-top:12px; margin-bottom:12px">

                                <li><b>Development Center</b></li>
                                <li class="company__bold">Yogyakarta</li>
                                <hr class="company__divider" style="margin-top:12px; margin-bottom:12px">

                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <img src="/img/logique/company.png" class="img-responsive"/>
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
                                    <br><br><img src="/img/logique/direktur.jpg" alt="Takashi Yoshitsugu" class="img-responsive" />
                                </div>
                                <div class="director__content">
                                    <hr class="title__white-line">
                                    <div>
                                        <p>Takashi Yoshitsugu lahir di Tokyo pada tahun 1976. Pada tahun 1999, Ia lulus dari Departemen Teknik Sistem Manajemen, Waseda University di Tokyo. Ia memiliki cukup banyak pengalaman wirausaha dimulai dari Japan Research Institute, Inc., perusahaan konsultan CRM, dll.</p><br>
                                        <p>Hingga pada tahun 2005, Ia mulai mendirikan bisnis e-commerce, perusahaan perdagangan impor, dan perusahaan konsultan sendiri di Jepang. Ia mendirikan dan mengelola LOGIQUE di Indonesia sejak tahun 2012.</p>
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

            <section id="principle">
                <div class="container__">
                    <h1 class="title-index"><b>Layanan Konsultasi IT / DX LOGIQUE</b></h1>
                    <hr class="title__yellow-line">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Selain pengembangan sistem web, aplikasi web dan seluler, manajemen server cloud, konsultasi transformasi digital (DX), inspeksi kerentanan keamanan website, optimasi SEO, media sosial, periklanan internet dan lainnya, kami juga menyediakan layanan pengiriman tenaga TI profesional untuk mendukung kebutuhan tenaga internal DX perusahaan Anda melalui perusahaan Outsorcing IT yang kami miliki. Kami telah memiliki portofolio terbaik dari berbagai perusahaan di Indonesia. Jadi, jangan ragu untuk menghubungi kami.</p><br><br>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5 bg--grey" align="center">
                                <img src="/img/logique/TentangKami1.png" width="112px" class="img-responsive"/><br>
                                <a class="career-section__btn" href="/layanan.php" style="padding:10px; font-size:16px;"><b>See Service List</b></a>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5 bg--grey" align="center">
                                <img src="/img/logique/TentangKami2.png" width="138px" class="img-responsive"/><br>
                                <a class="career-section__btn" href="/produk.php" style="padding:10px; font-size:16px;"><b>See Product List</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding:10px"><br>
                        <div class="bg--gradient col-md-5">
                            <div class="row">
                                <a href="/layanan/penetration-test.php">
                                    <div class="col-md-2">
                                        <img src="/img/logique/Group301@2x.png" style="margin-top:25px; margin-left:5px"/>
                                    </div>
                                    <div class="col-md-10">
                                        <p style="font-size:16px; color:black"><b>Layanan Inspeksi Keamanan Website/Aplikasi</b></p>
                                        <p style="font-size:14px; color:black">Layanan bersertifikasi CEH untuk memeriksa dan melaporkan kerentanan keamanan website/aplikasi</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="bg--gradient col-md-5">
                            <div class="row" style="margin-top:15px; margin-bottom:15px">
                                <a href="/layanan/digital-marketing/jasa-seo.php">
                                    <div class="col-md-2">
                                        <img src="/img/logique/Group333.png" style="margin-left:10px; margin-top:15px;"/>
                                    </div>
                                    <div class="col-md-10">
                                        <p style="font-size:16px; color:black;"><b>Layanan Optimasi SEO</b></p>
                                        <p style="font-size:14px; color:black;">Berpengalaman lebih dari 10 tahun dalam optimasi website bahasa Indonesia, Inggris & Jepang</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding:10px"><br>
                        <div class="bg--gradient col-md-5" style="margin-top:-10px">
                            <div class="row">
                                <a href="/layanan/pembuatan-sistem-web.php">
                                    <div class="col-md-2">
                                        <img src="/img/logique/Group311.png" style="margin-top:25px; margin-left:10px"/>
                                    </div>
                                    <div class="col-md-10">
                                        <p style="font-size:16px; color:black;"><b>Layanan Pengembangan Sistem/Aplikasi Website</b></p>
                                        <p style="font-size:14px; color:black;">Pengembangan dengan metode Agile untuk sistem yang fleksibel dan berkualitas</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="bg--gradient col-md-5" style="margin-top:-10px">
                                <div class="row" style="margin-top:15px; margin-bottom:15px">
                                    <a href="https://kazokku.com/" target="_blank">
                                    <div class="col-md-2">
                                        <img src="/img/logique/Group125@2x.png" style="margin-left:15px"/>
                                    </div>
                                    <div class="col-md-10">
                                        <p style="font-size:16px; color:black"><b>Layanan Outsourcing IT Profesional</b></p>
                                        <p style="font-size:14px; color:black">Layanan Outsourcing tenaga IT profesional oleh KAZOKKU</p>
                                    </div>
                                </a>
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

<scipt>

</scipt>
</html>