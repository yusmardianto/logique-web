<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description"
        content="LOGIQUE menawarkan berbagai produk digital untuk meningkatkan profit bisnis Anda, mulai dari software kerja remote, sistem laporan kerja karyawan, hingga sistem rekrutmen karyawan untuk HR. Hubungi sekarang juga jika Anda tertarik untuk mendapatkan layanan kami.">
    <meta name="keywords"
        content="sistem laporan harian, sugoi saiyo sistem, sistem manajemen sdm, produk digital, kerja remote, kerja fleksibel, laporan kerja, sistem aplikasi, proses rekrutmen, sugoi saiyo">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Produk Digital | Sistem Rekrutmen, Kerja Remote, Laporan Kerja | LOGIQUE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/produk.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/product.png">
    <meta property="og:description"
        content="LOGIQUE menawarkan berbagai produk digital untuk meningkatkan profit bisnis Anda, mulai dari software kerja remote, sistem laporan kerja karyawan, hingga sistem rekrutmen karyawan untuk HR. Hubungi sekarang juga jika Anda tertarik untuk mendapatkan layanan kami.">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>Produk Digital | Sistem Rekrutmen, Kerja Remote, Laporan Kerja | LOGIQUE</title>
    
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/css/sidebar-update.css" >
    <link rel="stylesheet" href="/css/newstyle.css">
    <link rel="stylesheet" href="/css/style-product.css">

    <link rel="canonical" href="https://www.logique.co.id/produk.php"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

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

    <?//php include './popup.php'; ?>
    <div class="wrapper wrapper--update-design wrapper--update-design-font">
        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'product';
            include($_SERVER['DOCUMENT_ROOT'].'/sidebar.php'); 
        ?>

        <!-- <div class="contain-video">
            <video poster="img/video-img.png" id="bgvid" playsinline autoplay muted loop>
                <source src="img/12377093.mp4" type="video/mp4">
            </video>
        </div>
        <div class="bg-white-opacity"></div> -->

        <?php 
            $lang = 'id';
            $en_link = '/en/product.php';
            $id_link = '#';
            $jp_link = '/jp/product.php';
            include($_SERVER['DOCUMENT_ROOT'].'/header.php'); 
        ?>

        <!-- CONTENT -->
        <div class="content-wrapper__">

            <section class="bg--gray --top">
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
                                        itemprop="item"><span itemprop="name">&nbsp;Produk</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--gray">
                <div class="container__">
                    <div class="text-center">
                        <h1 class="title-index">Produk Kami</h1>
                        <hr class="title__yellow-line--center">
                        <p class="title__description">Untuk membantu perusahaan tumbuh dan beradaptasi dalam era digital, LOGIQUE mengembangkan dan menyediakan produk digital, seperti sistem manajemen SDM, untuk meningkatkan operasi SDM, produktivitas, dan potensi keuntungan dalam organisasi.</p>
                        <div class="product-list">
                            <img class="product-list__img" src="/img/top/i-dokodemo.svg" alt="dokodemo">
                            <img class="product-list__img" src="/img/top/i-nippo-update.png" alt="nippo">
                            <img class="product-list__img" src="/img/top/i-sugoi-saiyo.png" alt="sugoi saiyo">
                        </div>
                        <p class="title__description">Kami menyediakan solusi yang bertujuan untuk meningkatkan kinerja melalui jam kerja yang fleksibel dan peningkatan manajemen biaya melalui laporan harian, hingga sistem rekrutmen yang sangat membantu dalam menemukan karyawan yang paling berkualitas dengan cara yang seefisien mungkin.</p>
                    </div>
                </div>
            </section>

            <section class="bg--black" style="margin-bottom: 4%;">
                <div class="container__">
                    <div class="product-slogan">
                        <img class="product-slogan__img" src="/img/product/product.png" alt="product">
                        <p class="product-slogan__text">"Kami menciptakan berbagai produk digital yang fungsional, terutama
                            Sistem
                            Manajemen SDM untuk meningkatkan produktivitas perusahaan."</p>
                    </div>
                </div>
            </section>

            <section>
                <div class="container__">
                    <h1 class="title-index">DOKODEMO KERJA</h1>
                    <hr class="title__yellow-line">
                    <h4 class="title-index__sub">Solusi Kerja Fleksibel Untuk Menjadi Lebih Produktif</h4>
                    <p class="title__description--full">
                        Apakah Anda mengalami kesulitan untuk memantau produktivitas karyawan Anda? Jika iya, maka sistem ini
                        menjadi solusi untuk memantau kinerja karyawan Anda. Selain itu, sistem ini juga dapat meningkatkan
                        produktivitas karyawan dengan melihat bagaimana karyawan menghabiskan jam kerja mereka melalui fitur
                        auto-screencapture yang tersedia.</p>

                    <div class="product-snap-shot dokodemo-ss">
                        <div class="product-snap-shot__item mb10">
                            <img class="product-snap-shot__img--3-col" src="img/product/dokodemo/dokodemo_1.jpg" alt="dokodemo_1">
                            <p class="product-snap-shot__text">Analisa waktu kerja berdasarkan project </p>
                        </div>

                        <div class="product-snap-shot__item">
                            <img class="product-snap-shot__img--3-col" src="img/product/dokodemo/dokodemo_2.jpg" alt="dokodemo_2">
                            <p class="product-snap-shot__text">Melacak kegiatan dengan screenshot</p>
                        </div>

                        <div class="product-snap-shot__item">
                            <img class="product-snap-shot__img--3-col" src="img/product/dokodemo/dokodemo_3.jpg" alt="dokodemo_3">
                            <p class="product-snap-shot__text">Melacak jam kerja dan jam istirahat</p>
                        </div>

                        <div class="product-snap-shot__item">
                            <img class="product-snap-shot__img--3-col" src="img/product/dokodemo/cuti-karyawan.jpg" alt="dokodemo_2">
                            <p class="product-snap-shot__text">Lihat Riwayat Absensi, Cuti, dan Liburan</p>
                        </div>

                        <div class="product-snap-shot__item">
                            <img class="product-snap-shot__img--3-col" src="img/product/dokodemo/employee-gps-tracker.jpg" alt="dokodemo_3">
                            <p class="product-snap-shot__text">Lacak Lokasi Karyawan dengan GPS</p>
                        </div>
                    </div>

                    <p class="title__description--full">Dokodemo-Kerja membantu Anda dalam mengimplementasikan aturan-aturan SDM yang lebih efektif dan fleksibel, yang dapat disesuaikan dengan kebutuhan. Program ini membantu Manajer mengatur jam kerja karyawan, melacak pekerjaan mereka, dan menangkap tangkapan layar secara acak setiap 10 menit. Dengan ini, staf akan bebas untuk bekerja di mana saja kapan saja dengan catatan kerja yang akurat, meningkatkan produktivitas secara signifikan.</p><br>

                    <div class="text-center">
                        <a class="btn--yellow" href="https://dokodemo-kerja.com/ind/">Learn More</a>
                    </div>
                </div>
            </section>

            <section  class="bg--gray">
                <div class="container__">
                    <h1 class="title-index">NIPPO</h1>
                    <hr class="title__yellow-line">
                    <h4 class="title-index__sub">Sistem laporan kerja karyawan dan Sistem Manajemen Jam Kerja</h4>
                    <p class="title__description--full">Nippo adalah alat manajemen cloud laporan harian. Melalui Nippo, manajer SDM dan supervisor di setiap departemen dapat memeriksa bagaimana karyawan menghabiskan jam kerjanya. Mengizinkan rekan kerja untuk saling menandai dan mengevaluasi pekerjaan satu sama lain, sehingga membuat komunikasi internal menjadi lebih aktif.</p>

                    <div class="product-snap-shot">
                        <div class="product-snap-shot__item">
                            <img class="product-snap-shot__img--2-col" src="img/product/nippo/nippo_1.jpg" alt="nippo 1">
                            <p class="product-snap-shot__text">Daily reporting semua karyawan </p>
                        </div>

                        <div class="product-snap-shot__item">
                            <img class="product-snap-shot__img--2-col" src="img/product/nippo/man-hour-analyze.jpg" alt="nippo 2">
                            <p class="product-snap-shot__text">Statistik kerja per proyek</p>
                        </div>
                    </div>
                    <div class="product-snap-shot">
                        <div class="product-snap-shot__item">
                            <img class="product-snap-shot__img--2-col" src="img/product/nippo/nippo_3.jpg" alt="nippo 3">
                            <p class="product-snap-shot__text">Statistik kerja secara keseluruhan </p>
                        </div>

                        <div class="product-snap-shot__item">
                            <img class="product-snap-shot__img--2-col" src="img/product/nippo/nippo_4.jpg" alt="nippo 4">
                            <p class="product-snap-shot__text">Laporan individual </p>
                        </div>
                    </div>

                    <p class="title__description--full">
                    Alat ini berguna untuk SDM untuk menghitung biaya jam kerja dari setiap tugas yang dilakukan oleh setiap karyawan. Melalui Nippo, evaluasi dan penilaian mandiri dapat dilakukan secara metodis setiap hari.</p><br>

                    <div class="text-center">
                        <a class="btn--yellow" href="produk/nippo.php"  target="_blank">Learn More</a>
                    </div>
                </div>
            </section>

            <section>
                <div class="container__">
                    <h1 class="title-index">SUGOI SAIYO</h1>
                    <hr class="title__yellow-line">
                    <h4 class="title-index__sub">Sistem Manajamen Rekrutmen Untuk Proses Rekrutmen Yang Lebih Mudah</h4>
                    <p class="title__description--full">Sugoi Saiyo merupakan solusi yang berguna untuk masalah yang dihadapi oleh tim rekrutmen Indonesia. Apakah Anda bosan memeriksa dan menyaring banyak lamaran pekerjaan yang tidak memenuhi syarat, mengatur wawancara, dan menangani orang yang tidak hadir di hari wawancara? Anda dapat mengurangi sakit kepala dengan Sugoi Saiyo. Software pencari kerja yang dapat melamar, mengkonfirmasi status kandidat, mengatur tanggal wawancara dan mendapatkan surat penawaran, semua melalui Sugoi Saiyo.</p>

                    <div class="product-snap-shot">
                        <div class="product-snap-shot__item">
                            <img class="product-snap-shot__img--3-col" src="../img/product/sugoi_saiyo/sugoi_saiyo_1.png"
                                alt="sugoi saiyo 1">
                            <p class="product-snap-shot__text">Create account untuk masing-masing kandidat </p>
                        </div>

                        <div class="product-snap-shot__item">
                            <img class="product-snap-shot__img--3-col" src="../img/product/sugoi_saiyo/sugoi_saiyo_2.png"
                                alt="sugoi saiyo 2">
                            <p class="product-snap-shot__text">Lamar beberapa pekerjaan secara bersamaan </p>
                        </div>

                        <div class="product-snap-shot__item">
                            <img class="product-snap-shot__img--3-col" src="../img/product/sugoi_saiyo/sugoi_saiyo_3.png"
                                alt="sugoi saiyo 3">
                            <p class="product-snap-shot__text">Upload CV, sertifikat, dan dokumen-dokumen penting</p>
                        </div>
                        
                    </div>
                    

                    <p class="title__description--full">Sistem ini mencakup semua proses perekrutan dasar. Dari resepsi CV, penyaringan, pengujian dan penjadwalan wawancara, hingga mengirim surat penawaran; semua kegiatan ini bisa dilakukan melalui Sugoi Saiyo.
                    </p><br>

                    <div class="text-center">
                        <a class="btn--yellow" href="produk/sugoi-saiyo.php">Learn More</a>
                    </div>
                </div>
            </section>

            <!-- <section id="contact">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-5">
                            <h1 class="title-index" style="margin-bottom:0">Hubungi Logique</h1>
                            <p>LOGIQUE siap membantu Anda.</p>
                            <br>
                            <hr class="title__yellow-line">
                            <img src="../img/contact.png" style="width:100%" alt="contact">
                        </div>

                        <div class="col-sm-7">
                            <ul class="lgq-does__list">
                                <li>Pengembangan Website | Operasi Web | Meningkatkan Website | Menjalankan Website</li>
                                <li>Maintenance Website | Sistem Web</li>
                                <li>Pengembangan Web Sistem | Re-develop (Pengembangan Ulang) Sistem Web</li>
                                <li>Membuat desain halaman dari suatu kampanye atau landing page website</li>
                                <li>Outsourcing untuk mengoperasikan situs</li>
                                <li>Meningkatkan akses menuju situs Anda dengan SEO</li>
                                <li>Menyusun strategi promosi online</li>
                                <li>Mencari penyewaan web server dan perusahaan yang mampu untuk mengelolanya.</li>
                                <li>Mencari layanan printing untuk company profiles atau brosur</li>
                                <li>dll.</li>
                            </ul>
                            <a href="hubungi-kami.php" class="btn btn-contact-us-black" style="width: auto">Hubungi
                                LOGIQUE</a>
                        </div>
                    </div>
                </div>
            </section> -->
            <?php include "./contact-logique-section.php"; ?>

        </div>
        <!-- END CONTENT -->

        <?php include 'footer.php'; ?>
    </div>
</body>

</html>