<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description"
        content="LOGIQUE menyediakan jasa Penetration Testing (Pentest) untuk membantu meningkatkan sistem keamanan Website & Aplikasi. Layanan Security Assessment terbaik di Indonesia.">
    <meta name="keywords"
        content="penetration test, penetration testing, jasa penetration test, jasa penetration testing, logique, pen test Jakarta, penetration test Indonesia, security assessment Indonesia">
    <meta name="author" content="Logique Digital Indonesia">
    <meta property="og:title" content="Jasa Penetration Testing (Pentest) & Keamanan Website | LOGIQUE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/layanan/penetration-test.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
    <meta property="og:description"
        content="LOGIQUE menyediakan jasa Penetration Testing (Pentest) untuk membantu meningkatkan sistem keamanan Website & Aplikasi. Layanan Security Assessment terbaik di Indonesia.">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Jasa Penetration Testing (Pentest) & Keamanan Website | LOGIQUE</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">  

    <link rel="stylesheet" href="/css/sidebar-update.css" >
    <link rel="stylesheet" href="/css/newstyle.css" >
    <link rel="stylesheet" href="/css/style-revamp.css" >    
    <link href="assets/css/style-pentest.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    
    <link rel="canonical" href="https://www.logique.co.id/layanan/penetration-test.php"/>  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
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

<body class="wrapper wrapper--update-design wrapper--update-design-font" style="overflow-y: auto;">
	<?php 
		if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') {
			echo '<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQJRS4V"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->';
		}
	?> 
    <style>
    .container__ {
        padding-top: 0;
        padding-bottom: 0;
    }

    .logique-nav {
        left: 0;
    }

    .breadcrumb--update-design a {
        color: #f5f5f5;
    }

    .title {
        background: transparent;
        padding: 0;
    }

    .tahapan .title {
        font-size: 15px;
    }

    @media only screen and (min-width: 1024px) {
        .content-wrapper__ .--top {
            margin-bottom: 2.5em
        }
    }

 
    /* 
        ``````````````````````````````````````````````````````````````````````
        Reference for below class : https://tailwindcss.com/docs/utility-first

        ``````````````````````````````````````````````````````````````````````
    */   
    
    .absolute {
        position: absolute;
    }

    .border-white {
        border-color: white;
    }

    .border-1{
        border-width: 1px;
    }

    .border-solid {
        border-style: solid;
    }

    .bg-transparent{
        background-color: transparent;
    }

    .pt-4{
        padding-top: 1rem;
    }

    .pb-4{
        padding-bottom: 1rem;
    }

    .pb-8{
        padding-bottom: 2rem;
    }
    .rounded-2xl{
        border-radius: 1rem;
    }

    @media (max-width: 640px) {
        .sm-relative {
            position: relative;
        }

        .mt-4-sm {
            margin-top: 1rem;
        }
        .mt-8-sm {
            margin-top: 2rem;
        }
    }
    @media (min-width: 1024px) {}
    @media (min-width: 1280px) {}   
 
    </style>

    <!-- NAVIGATION -->
    <?php 
        // $active option are home, about, portfolio, services, product, career, contact
        $active = 'services';
        include($_SERVER['DOCUMENT_ROOT'].'/sidebar.php'); 
    ?>

    <?php 
        $lang = 'id';
        $en_link = '/en/services/penetration-test.php';
        $id_link = '#';
        $jp_link = '/jp/services/penetration-test.php';
        include($_SERVER['DOCUMENT_ROOT'].'/header.php'); 
    ?>

    <div class="content-wrapper__">
        <div class="header-top">
            <section class="--top">
                <div class="container__" style="padding-top:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="/index.php"><span itemprop="name">Beranda</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="/layanan.php"><span itemprop="name">&nbsp;Layanan</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;Jasa Penetration Test (Pentest)</span></a>
                                    <meta itemprop="position" content="3" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container__">                
                <div class="row">
                    <div class="col-md-12">                                            
                        <h1 class="text-center">
                            Jasa Penetration Testing (Pentest) dan Keamanan Website Terbaik Di Indonesia
                        </h1>
                        <div class="absolute sm-relative" style="bottom: 5%; background-color: white; padding : 28px; border-radius: 10px; opacity: 0.9;">
                            <p style="color: black">
                                <b>LOGIQUE Digital Indonesia Memiliki Standar Operasional Pentest Kelas Dunia.</b>                                 
                            </p>
                            <p style="color: black">
                                Dalam menjalankan proses penetration testing (pentest), Logique didukung oleh Pentester berpengalaman yang telah memiliki sertifikasi <b>CEH</b> (Certified Ethical Hacker) dan <b>CSCU</b> (Certified Secure Computer User) dari <b>EC- Council</b>, sehingga kemampuan Kami tidak perlu Anda ragukan lagi. 
                            </p>
                            <p style="color: black">
                                <b>Mengapa Perlu Melakukan Pentest Pada Sistem Yang Anda Miliki? </b>
                            </p>
                            <p style="color: black">
                                Karena dengan melakukan proses penetration testing (pentest), Anda akan mendapatkan gambaran mengenai seberapa kuat sistem pertahanan website, aplikasi atau jaringan yang Anda miliki dalam menghadapi kejahatan cyber dan berbagai gangguan lainnya.                                
                            </p>
                            <p style="color: black">
                                Keamanan cyber menjadi salah satu upaya yang perlu ditingkatkan setiap saat terutama jika Anda memiliki bisnis yang berjalan menggunakan media digital. Serangan cyber sudah menjadi ancaman terbesar bagi setiap perusahaan di dunia. Sebuah studi yang dilakukan di University of Maryland menyatakan bahwa serangan hacker rata-rata terjadi setiap 39 detik. 
                            </p>
                            <p style="color: black">
                                Jangan tunda untuk meningkatkan keamanan Website & Aplikasi Anda guna menghindari resiko serangan cyber yang merugikan. 
                                <a href="/hubungi-kami.php">Hubungi Kami Sekarang!</a>
                            </p>
                        </div>
                        <picture> 
                            <source media="(max-width: 468px)" srcset="assets/img/img-pentest/top-banner-mobile.png" type="image/png">
                            <source media="(min-width: 469px)" srcset="assets/img/img-pentest/top-banner.png" type="image/png">
                            <img src="assets/img/img-pentest/top-banner-mobile.png"  loading="lazy"  class="img-responsive center-block top-banner" alt="Top Banner">
                        </picture>                       
                    </div>
                </div>  
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="div-question-top">
                                <div class="inside">
                                    <div class="row">
                                        <div class="col-md-offset-2 col-md-4">
                                            <ul class="dashed left">
                                                <li class="wow bounceInUp" data-wow-delay="1s">Apa itu CyberSecurity?</li>
                                                <li class="wow fadeInDown" data-wow-delay="1.8s">Apakah itu penting?</li>
                                                <li class="wow zoomInLeft" data-wow-delay="2.6s">Seberapa bahaya ancaman siber
                                                    tersebut?</li>
                                                <li class="wow fadeInRight" data-wow-delay="3.4s">Apakah saya sudah terlindungi?
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="dashed">
                                                <li class="wow rotateInDownLeft" data-wow-delay="4.2s">Bisakah para peretas
                                                    mencuri data atau informasi saya?</li>
                                                <li class="wow bounceInLeft" data-wow-delay="5s">Bagaimana pengaruhnya terhadap
                                                    bisnis saya?</li>
                                                <li class="wow flipInY" data-wow-delay="5.8s">Bagaimana cara melindungi bisnis
                                                    dan data saya?</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><br /><br />
                        </div>
                    </div>
            </div>          
        </div>

        <br />
        <section>
            <div class="container__">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <h2 class="tahukah-title">Tahukah Anda tentang Cyber Security Risk ?</h2><br />
                        <p>Keamanan cyber menjadi salah satu upaya yang perlu ditingkatkan setiap hari terutama jika Anda
                            memiliki bisnis yang berjalan menggunakan media digital. Serangan cyber sudah menjadi ancaman
                            terbesar bagi setiap perusahaan di dunia. Sebuah studi yang dilakukan di University of Maryland
                            menyatakan bahwa serangan hacker rata-rata terjadi setiap 39 detik. Menurut ENISA Threat Landscape
                            Report yang dibuat tahun 2018, jenis serangan yang paling populer adalah SQL injections ( 51% ),
                            Local File Inclusion (34%), dan Cross-site scripting (8%).</p>
                        <p>Serangan cyber saat ini sudah semakin meningkat, namun sayangnya masih banyak perusahaan yang tidak
                            mempedulikan keamanan website. Bahkan, penelitian menunjukkan bahwa sekitar 77% perusahaan belum
                            memiliki rencana untuk menerapkan cyber security untuk melindungi data mereka. Hal ini tentu membuat
                            perusahaan rentan untuk diretas dan kehilangan data sensitif tanpa mereka ketahui.</p>
                    </div>
                </div>
            </div>
        </section>

        <br /><br />
        <section class="header-top">
            <div class="container__">
                <br /><br />
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="kasus">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <div class="text-center">
                                        <div class="kasus-title">Kasus Yang Pernah Terjadi</div>
                                    </div>
                                    <br />
                                    <div class="kasus-subtitle">Pelanggaran Data Berdasarkan Angka</div>
                                    <div class="div-kasus">
                                        Setiap hari terdapat 24.000 jenis aplikasi seluler yang diblokir karena berpotensi
                                        terjadi pelanggaran data di dalamnya. Di sisi lain, serangan terhadap seluruh
                                        perangkat yang terhubung ke internet juga terus mengalami peningkatan. <br /><br />
                                        Bahkan di tahun 2017, angka ini naik sebanyak 600 persen. Bukan hanya itu saja,
                                        setiap tahunnya serangan ransomware juga terus mengalami pertumbuhan hingga lebih
                                        dari 350 persen setiap tahunnya. Ransomware merupakan jenis malware yang dapat
                                        mengambil alih komputer dan mencegah pengguna sah untuk mengakses data sampai
                                        tebusan yang diminta dibayarkan. Hacker juga akan mengancam untuk mempublikasikan
                                        data-data sensitif korban jika tebusan tidak dibayar.<br /><br />
                                        Indonesia Security Incident Response Team on Internet Infrastructure (ID-SIRTII) di
                                        bawah naungan BSSN juga mengungkapkan bahwa selama 10 bulan pertama di tahun 2018
                                        telah terdeteksi lebih dari 200 juta serangan cyber ke Indonesia.<br /><br />
                                        Berdasarkan data statistik dan berbagai kasus yang telah terjadi di seluruh dunia,
                                        peningkatan pelanggaran data terus terjadi dalam skala yang besar. Hal ini terjadi
                                        karena sistem keamanan yang lemah serta kurangnya security awareness dari
                                        penggunanya. Perlu Anda ketahui, sebanyak 95 persen pelanggaran keamanan cyber yang
                                        terjadi juga disebabkan karena faktor kesalahan manusia.<br /><br />
                                        Di Indonesia sendiri, sudah banyak kasus serangan cyber yang pernah terjadi dan
                                        sebagian besar korbannya adalah perusahaan. Sepanjang tahun 2018, telah terjadi
                                        sekitar 4000 laporan terkait kasus kejahatan cyber, dan dari jumlah tersebut kasus
                                        serangan cyber paling banyak terjadi di wilayah Jakarta.<br /><br />

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                           <img   loading="lazy" alt="Sekitar 24.000 aplikasi seluler berbahaya diblokir setiap hari"
                                                src="assets/img/img-pentest/kasus1-1.png" class="img-responsive center-block" /> 
                                               
                                        </div>
                                        <div class="col-sm-4">
                                            <img  loading="lazy" alt="Serangan IoT meningkat 600% pada 2017"
                                                src="assets/img/img-pentest/kasus1-2.png" class="img-responsive center-block" />
                                        </div>
                                        <div class="col-sm-4">
                                            <img  loading="lazy" alt="serangan ransomware tumbuh lebih dari 350% setiap tahun"
                                                src="assets/img/img-pentest/kasus1-3.png" class="img-responsive center-block" />
                                        </div>
                                    </div>

                                    <br /><br />
                                    <div class="kasus-subtitle">CONTOH INSIDEN CYBER SECURITY</div>
                                    <div class="div-kasus">
                                        Sebuah maskapai penerbangan di Indonesia pernah menjadi korban dari serang cyber
                                        yang mengakibatkan bocornya data penumpang. Data yang bocor berasal dari dua
                                        database. Database pertama berisi 21 juta dan lainnya berisi 14 juta. Perusahaan
                                        telekomunikasi di Indonesia juga pernah menjadi korban serangan cyber dengan teknik
                                        web deface. Web deface merupakan kegiatan merubah tampilan suatu website, mulai dari
                                        halaman utama, index file, atau halaman lain yang masih terikat dengan url website
                                        tersebut. <br /><br />
                                        Beberapa insiden cyber security yang pernah terjadi, tidak hanya menyerang
                                        perusahaan namun juga lembaga pemerintahan. Berdasarkan data yang diperoleh dari
                                        CSIS ( Center for Strategic & International Studies ) terdapat beberapa lembaga
                                        negara di dunia yang pernah mengalami serangan cyber. Peretas pernah menargetkan
                                        lembaga kanker AS untuk mengambil informasi terkait penelitian kanker yang mutakhir.
                                        Peretas Korea Utara juga pernah melakukan serangan phishing terhadap pejabat urusan
                                        luar negeri dengan tujuan untuk mempelajari upaya nuklir yang dilakukan oleh Korea
                                        Utara. Komisi Pemilihan Umum Indonesia juga pernah melaporkan bahwa peretas dari
                                        Cina dan Rusia telah memeriksa basis data pemilih Indonesia sebelum pemilihan
                                        presiden dan legislatif dilakukan.
                                    </div><br>
                                    <div class="kasus-subtitle">Dari Mana Serangan-Serangan Tersebut Berasal?</div>
                                    <div class="div-kasus">
                                        Pelanggaran atau serangan-serangan cyber biasanya terjadi pada berbagai data yang
                                        sering Anda jumpai, seperti format Microsoft Office (Word, PowerPoint, dan Excel)
                                        yang membentuk file ekstensi. Jumlahnya pun cukup banyak, yaitu mencapai 38 persen.
                                        <br /><br />
                                        Berdasarkan data yang dirilis oleh Symantec, selama tahun 2017, serangan cyber
                                        paling banyak berasal dari China, yaitu sekitar 20 persen, disusul oleh AS sebesar
                                        11 persen dan Rusia sebesar 6 persen. Dimana 71% nya menggunakan email
                                        spear-phishing untuk melakukan serangan cyber tersebut.
                                    </div>
                                    <img loading="lazy"  class="img-responsive center-block" src="assets/img/img-pentest/line-serangan.png"
                                        alt="Line Serangan" /><br />
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="border-serangan">
                                                <img  loading="lazy"  class="img-responsive center-block"
                                                    src="assets/img/img-pentest/serangan1.png" alt="Serangan 1" />
                                                Format Microsoft Office (<i>Ppt, Word, dan Excel</i>) membuat,
                                                <span>38%</span>
                                                ekstensi file berbahaya
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="border-serangan cyber-attack">
                                                Sumber serangan cyber pada <b>2017</b>
                                            </div>
                                            <div class="border-serangan cyber-attack">
                                                <table class="cyber-table">
                                                    <tr>
                                                        <td>China</td>
                                                        <td>20%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>USA</td>
                                                        <td>11%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rusia</td>
                                                        <td>6%</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="border-serangan phishing">
                                                <img loading="lazy"  class="img-responsive center-block"
                                                    src="assets/img/img-pentest/serangan2.png" alt="Serangan 2" />
                                                <span>71%</span>
                                                serangan cyber dimulai dengan email <strong>spear-phishing</strong>
                                            </div>
                                        </div>
                                    </div>

                                    <br /><br />
                                    <div class="kasus-subtitle">Siapa Yang Akan Terpengaruh dari serangan cyber ini?</div>
                                    <div class="div-kasus">
                                        Serangan cyber yang terjadi tentunya mempengaruhi banyak pihak. Situs Verizon
                                        mencatat, sebanyak 61 persen korban dari serangan cyber ini adalah perusahaan bisnis
                                        yang mempunyai karyawan kurang dari 100 orang.<br /><br />
                                        Amerika Serikat menjadi negara paling tinggi dari negara-negara dengan jumlah
                                        populasi yang terhubung dengan Internet, yaitu sebanyak 18,2 persen dari semua
                                        serangan ransomware yang ada.<br /><br />
                                        Industri yang paling banyak mendapatkan serangan dari ransomware adalah industri
                                        kesehatan, dan disinyalir serangan tersebut akan meningkat jumlahnya sebanyak empat
                                        kali lipat pada tahun 2020 mendatang.<br /><br />
                                        Namun, dari seluruh serangan tersebut, industri jasa keuangan menjadi salah satu
                                        industri yang paling dirugikan dari kejahatan cyber ini dengan rata-rata kerugian
                                        mencapai angka $ 18,3 juta per perusahaan.
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mt-2m">
                                            <img  loading="lazy" alt="Sekitar 24.000 aplikasi seluler berbahaya diblokir setiap hari"
                                                src="assets/img/img-pentest/dampak1.png" class="img-responsive center-block" />
                                        </div>
                                        <div class="col-sm-4 mt-2m">
                                            <img  loading="lazy" alt="Serangan IoT meningkat 600% pada 2017"
                                                src="assets/img/img-pentest/dampak2.png" class="img-responsive center-block" />
                                        </div>
                                        <div class="col-sm-4 mt-2m">
                                            <img  loading="lazy" alt="serangan ransomware tumbuh lebih dari 350% setiap tahun"
                                                src="assets/img/img-pentest/dampak3.png" class="img-responsive center-block" />
                                        </div>
                                    </div>
                                    <img class="img-responsive left-block" src="assets/img/img-pentest/garis-dampak4.png" />
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img  loading="lazy" class="img-responsive center-block" src="assets/img/img-pentest/rumah-dampak.png"
                                                alt="Rumah Dampak" />
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="border-serangan cyber-attack mt-0">
                                                <b>INDUSTRI JASA KEUANGAN</b>
                                            </div>
                                            <div class="border-serangan cyber-attack">
                                                <p class="text-center">Melihat Kejahatan tertinggi dari kejahatan dunia
                                                    maya, biayanya rata-rata</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <img  loading="lazy" class="img-responsive center-block" src="assets/img/img-pentest/dampak-ratio.png"
                                                alt="Dampak Ratio" />
                                        </div>
                                    </div>
                                    <br /><br />
                                    <div class="kasus-subtitle">Berapa Biaya Kerugian yang Terjadi?</div>
                                    <div class="div-kasus">
                                        Situs Accenture mencatat jika rata-rata serangan malware menyebabkan kerugian
                                        terhadap perusahaan sebesar $ 2,4 juta. Selain itu, berdasarkan studi yang dilakukan
                                        oleh Ponemon Institute’s pada tahun 2017 mengatakan jika rata-rata biaya yang hilang
                                        atau dicuri dari masing-masing individu adalah sebesar $ 141. Biaya ini bervariasi
                                        di tiap negara, dimana biaya pelanggaran paling mahal berada di wilayah Amerika
                                        Serikat ($ 225) dan Kanada ($ 190).<br /><br />
                                        Sebanyak 43 persen biaya dikeluarkan akibat dari serangan cyber yang menghilangkan
                                        informasi. Selain itu, kerusakan yang terjadi terkait dengan kejahatan cyber ini
                                        diproyeksikan mencapai angka $ 6 triliun per tahun pada 2021 mendatang.
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mt-2m">
                                            <img  loading="lazy" alt="Sekitar 24.000 aplikasi seluler berbahaya diblokir setiap hari"
                                                src="assets/img/img-pentest/kerugian1.png" class="img-responsive center-block" />
                                        </div>
                                        <div class="col-sm-4 mt-2m">
                                            <img  loading="lazy" alt="Serangan IoT meningkat 600% pada 2017"
                                                src="assets/img/img-pentest/kerugian2.png" class="img-responsive center-block" />
                                        </div>
                                        <div class="col-sm-4 mt-2m">
                                            <img  loading="lazy" alt="serangan ransomware tumbuh lebih dari 350% setiap tahun"
                                                src="assets/img/img-pentest/kerugian3.png" class="img-responsive center-block" />
                                        </div>
                                    </div>
                                    <div class="row mt-2m p-special-grid">
                                        <div style="background-color:black;color:white;">Kerusakan yang terkait dengan
                                            cybercrime diproyeksikan akan mencapai</div>
                                        <div style="background-color:black;color:white;margin: 0 1px;">
                                            <p class="six-billion"><span>USD 6</span> Trilliun<br />per tahun pada 2021</p>
                                        </div>
                                        <div style="background-color:black;color:white;">
                                        <img loading="lazy"   alt="Serangan IoT meningkat 600% pada 2017" src="assets/img/img-pentest/image-risk-cmputer.png" class="img-responsive center-block" /></div>
                                    </div>

                                    <br /><br />
                                    <div class="kasus-subtitle">Apakah Perusahaan Anda Dapat Mengalami Serangan Ini?</div>
                                    <div class="div-kasus">
                                        Saat ini, sebanyak 74% perusahaan mempunyai lebih dari 1.000 arsip yang sangat
                                        sensitif, dimana 21 persennya tidak diberikan perlindungan yang baik dan mumpuni.
                                        Selain itu, 41% perusahaan juga mempunyai lebih dari 1.000 file yang sensitif,
                                        termasuk nomor kartu kredit serta catatan keuangan lainnya yang tidak terlindungi
                                        dengan baik.<br /><br />
                                        Bukan hanya itu saja, berdasarkan data Varonis, 65% perusahaan mempunyai 500
                                        pengguna yang tidak pernah mengubah kata sandi mereka. Bahkan, berdasarkan studi
                                        yang dilakukan oleh Ponemon Institute’s pada tahun 2017 mengatakan sebanyak 69%
                                        organisasi tidak percaya jika ancaman yang terjadi dapat diblokir oleh perangkat
                                        anti-virus milik mereka.
                                    </div>

                                    <div class="row text-center attact-type">
                                        <div class="col-sm-3 mt-2m img-centered img-up"> 
                                                <div class="yellow-box" >
                                                   <span style="font-size:22px; font-weight:bold;">74%</span> perusahaan memiliki lebih dari <b>1000 file sensitif</b>     
                                                </div>
                                        </div>
                                        <div class="col-sm-3 mt-2m img-centered img-up">
                                           
                                                <div class="yellow-box">
                                                   <span style="font-size:22px; font-weight:bold;">21%</span> dari semua file <b>tidak di lindungi</b> dalam cara apapun     
                                                </div>
                                        </div>
                                        <div class="col-sm-3 mt-2m img-centered img-up">
                                        <div class="yellow-box" style="padding: 15px 13px 15px; line-height: 13px; font-size: 9px; ">
                                                   <span style="font-size:22px; font-weight:bold;">41%</span> perusahaan memiliki <b>1000 file sensitif</b> termasuk nomor kartu kredit serta catatan kesehatan yang tidak dilindungi    
                                                </div>
                                        </div>
                                        <div class="col-sm-3 mt-2m img-centered">
                                            <div class="yellow-box" style="padding:  15px 13px 15px; line-height: 13px; font-size: 9px; ">
                                                <span style="font-size:22px; font-weight:bold;">65%</span> perusahaan memiliki <b>lebih dari 500 pengguna</b> yang tidak pernah diminta mengubah kata sandi   
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mt-2m img-centered">
                                        <div class="yellow-box" style="padding:  15px 13px 15px; line-height: 13px; font-size: 9px; ">
                                                <span style="font-size:22px; font-weight:bold;">69%</span>  organisasi <b>tidak percaya  </b>  ancaman yang mereka lihat dapat diblockir oleh perangkat lunak anti virus mereka 
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br /><br />
                <div class="row">
                    <div class="col-md-12">
                        <div class="what-is">
                            <span class="apakah">Apa Itu</span><br />
                            <div class="title">Penetration Testing?</div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-11">
                                    <p><br />
                                        <b>Penetration testing</b> atau sering disingkat menjadi pentest, merupakan istilah
                                        yang
                                        digunakan saat seseorang melakukan pengujian keamanan sebuah sistem, aplikasi, atau
                                        jaringan.<br /><br />
                                        Kegiatan pengujian ini dilakukan untuk mengetahui apakah keamanan yang terdapat pada
                                        sistem atau aplikasi mempunyai celah sehingga dapat segera diperbaiki dengan
                                        melakukan patch atau penambalan. Hal ini dilakukan agar keamanan yang terdapat pada
                                        suatu sistem atau aplikasi yang diuji menjadi semakin kuat. Selain melakukan
                                        pengujian, jasa pentest juga mendokumentasi tingkat keamanan dari sistem atau
                                        aplikasi yang akan diuji untuk selanjutnya dibuatkan laporan atau report kepada
                                        perusahaan / pelanggan.<br /><br />
                                        Sebelum melakukan penetration testing, biasanya akan terjadi kontrak antara auditor/
                                        pentester dengan perusahaan yang ingin aplikasi atau sistemnya diuji. Hal ini dalam
                                        konteks hukum merupakan kegiatan yang legal karena sebelumnya telah terjadi kontrak
                                        antara kedua belah pihak. <br /><br />
                                    </p>
                                </div>
                            </div>
                            <br /><br />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="target-umum-bg">
            <div class="container__">
                <div class="row">
                    <div class="col-md-7">
                        <div class="title fw-300">Adapun <span class="yellow">target umum</span> untuk melakukan <span
                                class="yellow">penetrasi testing</span>, yaitu meliputi:</div>
                        <br />
                        <ul>
                            <li><span class="yellow">Layanan yang menggunakan koneksi internet (website, VPN endpoint,
                                    infrastruktur e-mail, extranet, dan lain-lain).</span></li>
                            <li><span class="yellow">Sistem internal atau servis yang terdapat di dalam jaringan (<i>Active
                                        Directory</i>, <i>Exchange</i>, dan lain-lain).</li>
                            <li><span class="yellow">Aplikasi mobile (iOs & Android ), web, dan desktop.</span></li>
                            <li><span class="yellow">Jaringan internal.</span></li>
                            <li><span class="yellow">Karyawan perusahaan.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
                <picture> 
                    <source media="(max-width: 468px)" srcset="assets/img/img-pentest/typing-mobile.jpg" type="image/png">
                    <source media="(min-width: 469px)" srcset="assets/img/img-pentest/typing.jpg" type="image/png">
                    <img src="assets/img/img-pentest/typing.jpg"  loading="lazy"  width="100%" alt="Top Banner">
                </picture>
        

        <section class="plus-minus-bg">
            <div class="container__">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center lh-30">
                            <span class="title fw-300">Mengapa <b>pentest</b> diperlukan?</span><br />
                            Penetration test dilakukan untuk mengidentifikasi apakah sebuah aplikasi, sistem komputer, atau
                            suatu jaringan memiliki kelemahan keamanan. Jika celah kelemahan ditemukan dan dapat dibuktikan
                            dengan beberapa analisa resikonya, maka Anda akan mempunyai waktu untuk dapat memperbaiki sistem
                            tersebut sebelum seseorang yang tidak bertanggung jawab mengambil kesempatan dari celah
                            kelemahan yang ditemukan. Dengan sistem keamanan yang baik, data-data sensitif perusahaan dapat
                            terlindungi sehingga perusahaan dapat terhindar dari sejumlah kerugian.
                        </div>
                        <br /><br />
                        <div class="text-center lh-30">
                            <span class="title fw-300">Apa saja kelebihan pentest?</span><br />
                            Teknik penetration testing mempunyai beberapa kelebihan, antara lain yaitu:
                        </div>
                    </div>
                    <div class="clearfix"></div><br />
                    <div class="col-md-12">
                        <hr />
                        <div class="each-plus-minus">
                            <div class="title-each"><img  loading="lazy"  src="assets/img/img-pentest/kelebihan.png" alt="Kelebihan" />KELEBIHAN
                            </div>
                            <ul>
                                <li><span>Dapat dilakukan secara cepat dengan sedikit waktu sehingga harganya murah</span>
                                </li>
                                <li><span>Keterampilan yang dibutuhkan untuk melakukan teknik pengujian pentest relative
                                        lebih rendah jika dibandingkan dengan melakukan teknik pengujian menggunakan
                                        pemeriksaan source code</span></li>
                                <li><span>Pengujian langsung dilakukan pada kode yang digunakan (exposed)</span></li>
                            </ul>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
        </section>
        <br />

        <div class="mengapa-harus">Mengapa harus memilih <a href="/" target="_blank"><b>Logique Digital Indonesia</b></a>
            untuk melakukan pentest?</div>
        <br />

        <section class="metode">
            <div class="container__">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <p>
                            Logique Digital Indonesia mempunyai pentester yang telah berpengalaman dalam menemukan celah
                            keamanan yang terdapat pada beberapa website dan aplikasi. Dalam menjalankan pengujian keamanan,
                            pentester Logique Digital Indonesia selalu menerapkan standar operasional yang digunakan oleh
                            semua pentester di seluruh dunia. Jika diperlukan, Logique Digital Indonesia juga dapat
                            melakukan penetration test on the spot, dimana tim security akan datang ke perusahaan dan
                            melakukan pengujian secara langsung. Seluruh tim security di Logique juga sudah memiliki
                            sertifikasi CEH (Certified Ethical Hacker) dan CSCU (Certified Secure Computer User) dari EC-
                            Council sehingga kemampuannya tidak perlu diragukan lagi.
                        </p>

                        <div class="title">Metode apa yang digunakan Logique Digital Indonesia dalam melakukan pentest?
                        </div>
                        <div class="text-center">Dalam melakukan pentest, Logique Digital Indonesia mempunyai 3 metode yang dapat digunakan,
                            antara lain yaitu:</div>
                        <br />
                        <div class="row row-center">
                            <div class="col-sm-2">
                                <img  loading="lazy"  alt="Black Box" src="assets/img/img-pentest/black-box.png"
                                    class="img-responsive center-block" />
                            </div>
                            <div class="col-sm-10">
                                <div class="subtitle fs-18"><b>Black Box Testing</b></div>
                                <div>
                                    Merupakan pengujian yang dilakukan berdasarkan detail aplikasi, seperti tampilan
                                    aplikasi, fungsi-fungsi yang terdapat pada aplikasi, serta penyesuaian alur fungsi pada
                                    aplikasi dengan bisnis yang diinginkan oleh pelanggan. Pengujian ini dilakukan tanpa
                                    melihat dan menguji source code program yang ada pada aplikasi.
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row row-center">
                            <div class="col-sm-2">
                                <img alt="White Box" loading="lazy"  src="assets/img/img-pentest/white-box.png"
                                    class="img-responsive center-block" />
                            </div>
                            <div class="col-sm-10">
                                <div class="subtitle fs-18"><b>White Box Testing</b></div>
                                <div>
                                    Merupakan pengujian yang dilakukan berdasarkan detail prosedur serta alur logika dari
                                    sebuah kode program. Pada metode ini, tester akan melihat keseluruhan source code sebuah
                                    program untuk menemukan bugs dari kode program tersebut.
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row row-center">
                            <div class="col-sm-2">
                                <img  loading="lazy" alt="Grey Box" src="assets/img/img-pentest/grey-box.png"
                                    class="img-responsive center-block" />
                            </div>
                            <div class="col-sm-10">
                                <div class="subtitle fs-18"><b>Grey Box Testing</b></div>
                                <div>
                                    Merupakan metode pengujian yang berasal dari kombinasi Black Box dan White Box. Dimana
                                    pentester melakukan pengujian aplikasi berdasarkan spesifikasi namun menggunakan cara
                                    kerja dari dalam aplikasi tersebut alias source code program.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div><br /><br />

        <section class="tahapan-title">
        <div class="container__">
            <div class="question">
                Apa saja tahapan-tahapan yang dilakukan <b>Logique</b> dalam melakukan penetration testing?
            </div>
            <div class="answer">
                <b>Logique Digital Indonesia </b> menggunakan standar penetration testing international sebagai acuan
                pelaksanaan dalam melakukan pengujian, antara lain yaitu:
            </div>
        </div>
        </section>
        <br /><br />

        <section class="tahapan">
            <div class="container__">
                <div class="row fs-15">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <img alt="Step 1" src="assets/img/img-pentest/step1.png"
                                    class="img-responsive center-block" /><br />
                            </div>
                            <div class="col-sm-8 text-justify">
                                <div class="title"><span>1</span> <b>Reconnaissance</b></div>
                                Yaitu tahapan dimana pentester Logique akan mengumpulkan data awal atau beberapa hal yang
                                diperlukan untuk klien. Setelah data dikumpulkan, maka pentester akan dapat dengan mudah
                                merencanakan serangan secara lebih baik. Pengintaian ini dapat dilakukan dengan dua cara,
                                yaitu secara aktif (secara langsung menyentuh target yang ditentukan) dan secara pasif
                                (pengintaian dilakukan melalui perantara).<br /><br />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <img loading="lazy"  alt="Step 2" src="assets/img/img-pentest/step2.png"
                                    class="img-responsive center-block" /><br />
                            </div>
                            <div class="col-sm-8 text-justify">
                                <div class="title"><span>2</span> <b>Scanning</b></div>
                                Pada tahapan ini diperlukan sebuah aplikasi sebagai alat teknis untuk mengumpulkan berbagai
                                data lanjutan pada target yang telah kita tentukan. Pada tahapan ini data yang dicari lebih
                                umum, yaitu mengenai sistem yang mereka miliki.<br /><br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs"><br /></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <img  loading="lazy" alt="Step 3" src="assets/img/img-pentest/step3.png"
                                    class="img-responsive center-block" /><br />
                            </div>
                            <div class="col-sm-8 text-justify">
                                <div class="title"><span>3</span> <b>Gaining Access</b></div>
                                Pada fase ini, pentester perlu untuk mendapatkan akses untuk mengambil alih kendali dari
                                satu atau lebih perangkat jaringan untuk selanjutnya mengekstrak data dari target, untuk
                                selanjutnya menggunakan perangkat tersebut untuk meluncurkan serangan pada target lainnya.
                                <br /><br />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <img  loading="lazy" alt="Step 4" src="assets/img/img-pentest/step4.png"
                                    class="img-responsive center-block" /><br />
                            </div>
                            <div class="col-sm-8 text-justify">
                                <div class="title"><span>4</span> <b>Maintaining Access</b></div>
                                Yaitu tahapan dimana pentester akan membuat beberapa langkah-langkah yang diperlukan agar
                                tetap berada di lingkungan target dengan tujuan untuk mengumpulkan data sebanyak mungkin.
                                Pada fase ini, penyerang harus tetap dalam kondisi diam agar tidak dapat tertangkap ketika
                                sedang menggunakan lingkungan host.<br /><br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs"><br /></div>
                <div class="hidden-xs"><br /></div>
                <div class="row">
                    <div class="bg-yellow">
                        <div class="row">
                            <div class="col-sm-2">
                                <img  loading="lazy" alt="Step 6" src="assets/img/img-pentest/report.png" class="img-responsive center-block" />
                            </div>
                            <div class="col-sm-10 text-justify">
                                <div class="title"><span>5</span> <b>Covering Tracks</b></div>
                                Yaitu tahapan terakhir dimana pentester akan menutupi track sehingga memaksa penyerang untuk
                                mengambil langkah-langkah yang diperlukan untuk menghapus semua kemiripan saat dilakukan
                                pendeteksian. Setiap perubahan yang telah dilakukan, otorisasi yang telah ditingkatkan dan
                                lain-lain. Semuanya harus kembali dalam keadaan non-recognition (tidak diakui) oleh seorang
                                host administrator jaringan.
                            </div>
                        </div>
                    </div>
                </div>
                <br /><br />

                

            </div>
        </section>
        <section class="experience" style="padding-bottom:20px">
            <div class="container__" style=" padding-bottom:0">
                <div class="kasus-subtitle">Pengalaman Logique Digital Indonesia dalam Melakukan Penetration Testing</div>  
             
            <div class="div-kasus">
                
                    Logique Digital Indonesia sudah sangat berpengalaman dalam melakukan security assessment. Kami telah
                    melakukan penetration test untuk situs web pemerintah dan sejumlah perusahaan di berbagai bidang
                    industri mulai dari fintech, e-commerce, otomotif, dan masih banyak lagi.<br /><br />
                    Selama melakukan penetration testing untuk berbagai perusahaan, kami telah menemukan beberapa celah
                    keamanan atau bug sehingga patch atau penambalan dapat segera dilakukan. Beberapa bugs yang telah kami
                    temukan seperti:
                    <ol>
                        <li>1. Injection</li>
                        <li>2. Cross-Site Scripting (XSS)</li>
                        <li>3. Sensitif data exposure</li>
                        <li>4. Security misconfiguration</li>
                        <li>5. Broken access control, dan lain-lain.</li>
                    </ol>
                </div>
            </div> 
        </section>

        <section class="harga">
            <div class="container__">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="title">Lalu berapakah harga layanan yang ditawarkan oleh Logique untuk melakukan Pentest
                            tersebut?</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img  loading="lazy" alt="10 juta" src="assets/img/img-pentest/15-juta.png" class="img-responsive center-block" />
                    </div>
                </div><br />
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="subtitle">Dalam melakukan kegiatan pentest mulai dari tahapan awal (preparation),
                            tahapan pengujian (assessment) dan tahapan pelaporan (reporting), Logique Digital Indonesia
                            menawarkan harga mulai dari Rp 15 juta tergantung dari jenis aplikasi atau sistem yang akan
                            diuji.</div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <br>
            <!-- <div class="mengapa-harus"><b></b>Logique Works 2019</div> -->
            <div class="container__">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="assessment-flow-title text-center"><span class="logo-font">LOGIQUE  ASSESSMENT FLOW</span></h2>
                        <a href="#sampleReport">
                            <picture>
                                <source srcset="assets/img/img-pentest/webp/assesment-flow.webp" type="image/webp">
                                <img  loading="lazy" alt="Assesment Flow" src="assets/img/img-pentest/assesment-flow.jpg" class="img-responsive center-block">
                            </picture>  
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <br />
            <div class="mengapa-harus"><a href="/en/" target="_blank"><b class="logo-font">LOGIQUE</b></a> Works 2019 - 2020</div>
            <div class="container__">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="work-logique__table table table-striped ">
                                <thead>
                                    <tr>
                                        <th rowspan="2" scope="col">Time</th>
                                        <th rowspan="2" scope="col">Industry</th>
                                        <th rowspan="2" scope="col">Object of Assesment</th>
                                        <th colspan="3" scope="col">Found Problems (Risk Level)</th>
                                    </tr>
                                    <tr>
                                        <th class="table__head--high" scope="col">High</th>
                                        <th class="table__head--middle" scope="col">Middle</th>
                                        <th class="table__head--low" scope="col">Low</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sep - Oct 2019</td>
                                        <td>Travel</td>
                                        <td>Web app</td>
                                        <td><span class="table__round --high">5</span></td>
                                        <td><span class="table__round --middle">4</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sep - Oct 2019</td>
                                        <td>Media</td>
                                        <td>Online Media</td>
                                        <td><span class="table__round --high">8</span></td>
                                        <td><span class="table__round --middle">0</span></td>
                                        <td><span class="table__round --low">3</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sep - Oct 2019</td>
                                        <td>Entrainment</td>
                                        <td>Network infrastructure</td>
                                        <td><span class="table__round --high">4</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">1</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sep - Oct 2019</td>
                                        <td>E-commerce</td>
                                        <td>Market Place Web</td>
                                        <td><span class="table__round --high">8</span></td>
                                        <td><span class="table__round --middle">4</span></td>
                                        <td><span class="table__round --low">4</span></td>
                                    </tr>
                                    <tr>
                                        <td>Oct 2019 </td>
                                        <td>E-commerce</td>
                                        <td>PWA</td>
                                        <td><span class="table__round --high">4</span></td>
                                        <td><span class="table__round --middle">3</span></td>
                                        <td><span class="table__round --low">0</span></td>
                                    </tr>
                                    <tr>
                                        <td>Oct - Nov 2019</td>
                                        <td>Forwarding</td>
                                        <td>Website company profile</td>
                                        <td><span class="table__round --high">5</span></td>
                                        <td><span class="table__round --middle">5</span></td>
                                        <td><span class="table__round --low">3</span></td>
                                    </tr>
                                    <tr>
                                        <td>Oct - Nov 2019</td>
                                        <td>E-commerce</td>
                                        <td>Web app</td>
                                        <td><span class="table__round --high">6</span></td>
                                        <td><span class="table__round --middle">0</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Oct - Nov 2019</td>
                                        <td>E-commerce</td>
                                        <td>Web app</td>
                                        <td><span class="table__round --high">2</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">1</span></td>
                                    </tr>
                                    <tr>
                                        <td>Oct - Dec 2019</td>
                                        <td>E-commerce</td>
                                        <td>Web app</td>
                                        <td><span class="table__round --high">53</span></td>
                                        <td><span class="table__round --middle">1</span></td>
                                        <td><span class="table__round --low">0</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov - Dec 2019</td>
                                        <td>E-commerce</td>
                                        <td>Mobile app for Android</td>
                                        <td><span class="table__round --high">2</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov - Dec 2019</td>
                                        <td>E-commerce</td>
                                        <td>E-commerce</td>
                                        <td><span class="table__round --high">3</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov - Dec 2019</td>
                                        <td>E-commerce</td>
                                        <td>E-commerce</td>
                                        <td><span class="table__round --high">2</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">1</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 2019 </td>
                                        <td>Fintech</td>
                                        <td>Web app</td>
                                        <td><span class="table__round --high">1</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">3</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 2019 </td>
                                        <td>Fintech</td>
                                        <td>Mobile app for IOS and Android</td>
                                        <td><span class="table__round --high">2</span></td>
                                        <td><span class="table__round --middle">4</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Dec 2019 </td>
                                        <td>Finance</td>
                                        <td>Corporate Web</td>
                                        <td><span class="table__round --high">2</span></td>
                                        <td><span class="table__round --middle">1</span></td>
                                        <td><span class="table__round --low">4</span></td>
                                    </tr>
                                    <tr>
                                        <td>Dec 2019 </td>
                                        <td>Automotive</td>
                                        <td>Corporate Web</td>
                                        <td><span class="table__round --high">4</span></td>
                                        <td><span class="table__round --middle">0</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Dec 2019 </td>
                                        <td>Service</td>
                                        <td>Member web</td>
                                        <td><span class="table__round --high">3</span></td>
                                        <td><span class="table__round --middle">4</span></td>
                                        <td><span class="table__round --low">3</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jan 2020</td>
                                        <td>Fintech</td>
                                        <td>Web App</td>
                                        <td><span class="table__round --high">0</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">0</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jan 2020</td>
                                        <td>Fintech</td>
                                        <td>Mobile App</td>
                                        <td><span class="table__round --high">1</span></td>
                                        <td><span class="table__round --middle">8</span></td>
                                        <td><span class="table__round --low">1</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jan 2020</td>
                                        <td>Fintech</td>
                                        <td>Network Infrastructure</td>
                                        <td><span class="table__round --high">0</span></td>
                                        <td><span class="table__round --middle">3</span></td>
                                        <td><span class="table__round --low">0</span></td>
                                    </tr>
                                    <tr>
                                        <td>Feb 2020</td>
                                        <td>Automotive</td>
                                        <td>Network Infrastructure</td>
                                        <td><span class="table__round --high">0</span></td>
                                        <td><span class="table__round --middle">0</span></td>
                                        <td><span class="table__round --low">1</span></td>
                                    </tr>
                                    <tr>
                                        <td>Feb 2020</td>
                                        <td>Service</td>
                                        <td>Web App</td>
                                        <td><span class="table__round --high">0</span></td>
                                        <td><span class="table__round --middle">4</span></td>
                                        <td><span class="table__round --low">1</span></td>
                                    </tr>
                                    <tr>
                                        <td>Feb 2020</td>
                                        <td>Mobilephone Provider</td>
                                        <td>Web App</td>
                                        <td><span class="table__round --high">1</span></td>
                                        <td><span class="table__round --middle">10</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Mar 2020</td>
                                        <td>Airline</td>
                                        <td>Web App</td>
                                        <td><span class="table__round --high">0</span></td>
                                        <td><span class="table__round --middle">4</span></td>
                                        <td><span class="table__round --low">1</span></td>
                                    </tr>
                                    <tr>
                                        <td>Mar 2020</td>
                                        <td>Financial Planner</td>
                                        <td>Web App</td>
                                        <td><span class="table__round --high">4</span></td>
                                        <td><span class="table__round --middle">1</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Mar 2020</td>
                                        <td>Travel</td>
                                        <td>Web App</td>
                                        <td><span class="table__round --high">5</span></td>
                                        <td><span class="table__round --middle">4</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Apr 2020</td>
                                        <td>Service</td>
                                        <td>Network Infrastructure</td>
                                        <td><span class="table__round --high">0</span></td>
                                        <td><span class="table__round --middle">1</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Apr 2020</td>
                                        <td>Service</td>
                                        <td>Web App</td>
                                        <td><span class="table__round --high">0</span></td>
                                        <td><span class="table__round --middle">1</span></td>
                                        <td><span class="table__round --low">3</span></td>
                                    </tr>
                                    <tr>
                                        <td>May 2020</td>
                                        <td>Insurance</td>
                                        <td>Web App</td>
                                        <td><span class="table__round --high">4</span></td>
                                        <td><span class="table__round --middle">4</span></td>
                                        <td><span class="table__round --low">1</span></td>
                                    </tr>
                                    <tr>
                                        <td>May 2020</td>
                                        <td>Insurance</td>
                                        <td>Network Infrastructure</td>
                                        <td><span class="table__round --high">0</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">3</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jun 2020</td>
                                        <td>Pharmacies</td>
                                        <td>Web App</td>
                                        <td><span class="table__round --high">0</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">0</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jun 2020</td>
                                        <td>Fintech</td>
                                        <td>Web App</td>
                                        <td><span class="table__round --high">5</span></td>
                                        <td><span class="table__round --middle">0</span></td>
                                        <td><span class="table__round --low">0</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sep 2020</td>
                                        <td>Fintech</td>
                                        <td>Web App</td>
                                        <td><span class="table__round --high">0</span></td>
                                        <td><span class="table__round --middle">4</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Oct 2020</td>
                                        <td>Agriculture</td>
                                        <td>Network Infrastructure</td>
                                        <td><span class="table__round --high">0</span></td>
                                        <td><span class="table__round --middle">5</span></td>
                                        <td><span class="table__round --low">1</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id=sampleReport>
            <br />
            <div class="mengapa-harus">Sample Report</div>
            <div class="container__">
                <div class="row sample-report">
                    <div class="col-sm-4">
                        <a href="assets/img/img-pentest/sample-report-sql.jpg" data-toggle="lightbox" data-title="SQL Injection">                             
                            <picture>
                                <source srcset="assets/img/img-pentest/webp/thumb-sample-report-sql.webp" type="image/webp">
                                <img loading="lazy" src="assets/img/img-pentest/thumb-sample-report-sql.jpg" class="img-responsive" alt="SQL Injection">
                            </picture>
                            <div class="sample-report__text text-center">SQL Injection</div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="assets/img/img-pentest/sample-report-missing.jpg" data-toggle="lightbox"  data-title="Missing Authorization Mechanism">
                            <picture>
                                <source srcset="assets/img/img-pentest/webp/thumb-sample-report-missing.webp" type="image/webp">
                                <img  loading="lazy" src="assets/img/img-pentest/thumb-sample-report-missing.jpg" class="img-responsive" alt="Missing Authorization Mechanism">
                            </picture> 
                            <div class="sample-report__text text-center">Missing Authorization Mechanism</div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="assets/img/img-pentest/sample-report-bypass.jpg" data-toggle="lightbox" data-title="Bypassing Unrestricted File Upload"> 
                            <picture>
                                <source srcset="assets/img/img-pentest/webp/thumb-sample-report-missing.webp" type="image/webp">
                                <img  loading="lazy" src="assets/img/img-pentest/thumb-sample-report-bypass.jpg" class="img-responsive" alt="Bypassing Unrestricted File Upload">
                            </picture> 
                            <div class="sample-report__text text-center">Bypassing Unrestricted File Upload</div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-4" >
                        <a href="assets/img/img-pentest/sample-report-bug-finding.jpg" data-toggle="lightbox" data-title="Table Bug of Finding">
                            <picture>
                                <source srcset="assets/img/img-pentest/webp/thumb-sample-report-bug-finding.webp" type="image/webp">
                                <img  loading="lazy" src="assets/img/img-pentest/thumb-sample-report-bug-finding.jpg" class="img-responsive" alt="Table Bug of Finding" style="border: solid 1px">
                            </picture> 
                            <div class="sample-report__text text-center">Table Bug of Finding</div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="assets/img/img-pentest/sample-report-local-storage.jpg" data-toggle="lightbox" data-title="Unencrypted Local Storage"> 
                            <picture>
                                <source srcset="assets/img/img-pentest/webp/thumb-sample-report-local-storage.webp" type="image/webp">
                                <img  loading="lazy" src="assets/img/img-pentest/thumb-sample-report-local-storage.jpg" class="img-responsive" alt="Unencrypted Local Storage">
                            </picture> 
                            <div class="sample-report__text text-center">Unencrypted Local Storage</div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="assets/img/img-pentest/sample-report-telnet.jpg" data-toggle="lightbox" data-title="Telnet Service Externally Available">
                            <picture>
                                <source srcset="assets/img/img-pentest/webp/thumb-sample-report-telnet.webp" type="image/webp">
                                <img  loading="lazy" src="assets/img/img-pentest/thumb-sample-report-telnet.jpg" class="img-responsive" alt="Telnet Service Externally Available">
                            </picture> 
                            <div class="sample-report__text text-center">Telnet Service Externally Available</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-article">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="title">Artikel Terkait Cyber Security</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel slide multi-item-carousel" id="theCarousel">
                            <div class="carousel-inner">
                                    
                                    <?php  
                                        function shorten_string($string, $wordsreturned)
                                    {
                                        $retval = $string;
                                        $string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
                                        $string = str_replace("\n", " ", $string);
                                        $array = explode(" ", $string);
                                        if (count($array)<=$wordsreturned)
                                        {
                                        $retval = $string;
                                        }
                                        else
                                        {
                                        array_splice($array, $wordsreturned);
                                        $retval = implode(" ", $array)." ...";
                                        }
                                        return $retval;
                                    }
                                    function tgl_indo($tanggal){
                                        $bulan = array (
                                            1 =>   'Januari',
                                            'Februari',
                                            'Maret',
                                            'April',
                                            'Mei',
                                            'Juni',
                                            'Juli',
                                            'Agustus',
                                            'September',
                                            'Oktober',
                                            'November',
                                            'Desember'
                                        );
                                        $pecahkan = explode('-', $tanggal);
                                        
                                        // variabel pecahkan 0 = tanggal
                                        // variabel pecahkan 1 = bulan
                                        // variabel pecahkan 2 = tahun
                                        
                                        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                    }
                                        $url = file_get_contents('https://www.logique.co.id/blog/wp-json/wp/v2/posts/?categories=959&per_page=5&_embed');
                                    
                                            $x = 0;

                                            $remote_posts = json_decode( $url ); 
                                            // printf('<pre>'); 
                                            //  var_dump($url);
                                            // printf('</pre>');
                                            foreach( $remote_posts as $remote_post ) { 
                                                $thumb_full_url = '';
                                                $thumb_url = '';

                                                if ( ! empty( $remote_post->featured_media ) && isset( $remote_post->_embedded ) ) {
                                                    $thumb_full_url = $remote_post->_embedded->{'wp:featuredmedia'}[0]->source_url;
                                                    $thumb_url = $remote_post->_embedded->{'wp:featuredmedia'}[0]->media_details->sizes->medium->source_url;
                                                }
                                                if($x==0) { 
                                                ?>
                                                <div class="item active ">
                                                    <?php } else{
                                                    echo ' <div class="item ">';
                                                    }

                                                    ?> 
                                                        <div class="col-xs-12 col-sm-6 col-md-6 article-container">
                                                            <div class="img-container">
                                                                <img loading="lazy" src="<?=$thumb_full_url?>" class="img-responsive">
                                                            </div>
                                                            <div class="content-container">
                                                                <a href="<?=$remote_post->link?>" target="_blank">
                                                                    <p class="title"><?=$remote_post->title->rendered?></p>
                                                                </a>
                                                                <p class="content"><?php 
                                                                $array = preg_replace("/<.+>/sU", "", $remote_post->excerpt->rendered);
                                                                    $array =  shorten_string($array, 25); 
                                                                echo $array;
                                                                    ?></p>
                                                                <p class="date"><?php 
                                                                $tanggal = date(' Y-m-d', strtotime($remote_post->date));
                                                                $idtanggal = tgl_indo($tanggal);
                                                                echo $idtanggal  ;  ?> | By <?php 
                                                                    echo $remote_post->_embedded->author[0]->name;
                                                                ?></p>
                                                            </div>
                                                        </div>
                                                    
                                                </div>                                            
                                            <?php  $x++;
                                        }                                    
                                    ?> 
                            
                            <!--  Example item end -->
                            </div>
                            <ol class="carousel-indicators article-indicators">
                                <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#theCarousel" data-slide-to="1"></li>
                                <li data-target="#theCarousel" data-slide-to="2"></li>
                                <li data-target="#theCarousel" data-slide-to="3"></li>
                            </ol>
                        </div>
                    </div>
                </div> 
            </div>
        </section><br/><br/>

        <section>
            <div class="container__">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="tahukah-title">Layanan LOGIQUE Lainnya </h2>
                        <p>
                            Disamping memiliki tenaga spesialis yang bersertifikasi dan berpengalaman dalam bidang Penetration Testing (Pentest) dan Security Assessment, kami juga memiliki tenaga spesialis yang tak kalah handal untuk layanan lain seperti Digital Marketing. LOGIQUE dapat membantu perusahaan Anda yang ingin melakukan kampanye digital seperti Search Engine Marketing (SEM), Content Marketing, Search Engine Optimization (SEO), optimasi Social Media dan yang lainnya.
                        </p>
                        <p>
                            Tim kami dapat membantu setiap perusahaan untuk mencapai performa maksimal pada setiap channel yang digunakan dalam kampanye digital yang dilakukan. Kami dapat memaksimalkan angka konversi yang diinginkan melalui layanan SEM, meningkatkan kunjungan organik melalui <a href="/layanan/digital-marketing/jasa-seo.php">jasa SEO</a> atau mencapai engagement yang optimal melalui optimasi media sosial. Jadi, tunggu apa lagi? Segera konsultasikan kebutuhan bisnis Anda dan tim digital marketing kami akan merancang strategi terbaik untuk Anda.
                        </p>
                        <div class="row row--flex justify-content-center">
                            <div class="col-md-3">
                                <a href="/layanan/digital-marketing.php" class="form-control btn btn--yellow">Pelajari Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br/><br/>
 
        <section class="gallery content-article">
            <div class="container__">
                <div class="row">
                    <div class="col-md-12">
                        <p class="title">White Paper Tentang Pengetesan Keamanan Website  </p>
                    </div>
                </div>
                <div class="row gallery-container">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-sm-offset-2 article-container">
                        <div class="img-container">
                            <picture>
                                <source srcset="assets/img/img-pentest/webp/gly3.webp" type="image/webp">
                                <img loading="lazy" src="assets/img/img-pentest/gly3.jpg" class="img-responsive">
                            </picture>
                            
                            <a href="/white-paper-web-dev-3.php" target="_blank">
                                <p class="gallery-title">Peran dan Pentingnya Pengujian Penetrasi dalam Proses Bisnis Perusahaan</p>
                                <p class="gallery-content">Download</p>
                            </a>
                        </div>
                    </div>  
                    <div class="col-xs-12 col-sm-4 col-md-4 article-container">
                        <div class="img-container">
                            <picture>
                                <source srcset="assets/img/img-webdev/gly4.webp" type="image/webp">
                                <img loading="lazy" src="assets/img/img-webdev/gly4.jpg" class="img-responsive">
                            </picture>
                            <a href="/white-paper-ancaman-serangan-web-application.php" target="_blank">
                                <p class="gallery-title">Ancaman Serangan pada Web Application</p>
                                <p class="gallery-content">Download</p>
                            </a>
                        </div>
                    </div>  
                </div>
            </div>
        </section> 

        <!-- CLIENT PENTEST -->
        <hr />
        <section>            
            <div class="container__">                               
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="text-center" >Klien kami</h2>
                        <p class="text-center">Berikut sebagian daftar perusahaan yang telah mempercayakan LOGIQUE Digital Indonesia dalam proses penetration testing:</p>
                    </div> 
                </div>  

                <div class="row mt-5">
                    <div class=" col-md-3 text-center">
                        <img style="margin-top: 54px" src="assets/img/img-pentest/alodokter.png" width="124px" height="auto" alt="Alo dokter"/>                                              
                    </div>
                    <div class=" col-md-3 text-center">
                        <img src="assets/img/img-pentest/assa.jpeg" width="124px" height="auto"  alt="assa"/>                                              
                    </div>
                    <div class=" col-md-3 text-center">
                        <img src="assets/img/img-pentest/migo.png" width="124px" height="auto"  alt="migo"/>                                              
                    </div>
                    <div class=" col-md-3 text-center">
                        <img style="margin-top: 40px" src="assets/img/img-pentest/pacto.png" width="124px" height="auto"  alt="pacto"/>    
                    </div>
                </div>

                <div class="row mt-5" style="margin-top: 32px;">
                    <div class=" col-md-3 text-center">
                        <img src="assets/img/img-pentest/indokoala.png" width="124px" height="auto" alt="indokoala"/>                                              
                    </div>
                    <div class=" col-md-3 text-center">
                        <img class="mt-4-sm " src="assets/img/img-pentest/ptgasi.png" width="224px" height="auto" alt="ptgasi"/>                                              
                    </div>
                    <div class="  col-md-3 text-center">
                        <img class="mt-8-sm" src="assets/img/img-pentest/softorb.png" width="124px" height="auto" alt="softorb"/>                                              
                    </div>
                    <div class=" col-md-3 text-center">
                        <img class="mt-8-sm " src="assets/img/img-pentest/yamaha.png" width="124px" height="auto" alt="yamaha"/>                                              
                    </div>
                </div>


            </div>                       
        </section>            



        <section class="faq">
            <div class="container-fluid" style="max-width: 1345px">
                <h2 class="faq-title">FAQ</h2>
            </div>
            <div class="container__">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="faq-list">
                            <li>
                                <h3>Sertifikat apakah yang dimiliki oleh team security dari LOGIQUE?</h3>
                                <p>Seluruh tim security LOGIQUE telah bersertifikasi CEH (Certified Ethical Hacker) dan CSCU
                                    (Certified Secure Computer User) dari EC-Coucil.</p>
                            </li>
                            <li>
                                <h3>Dalam melakukan pengetesan sistem, standar apakah yang digunakan oleh security team dari
                                    LOGIQUE?</h3>
                                <p>Standar yang digunakan oleh security team LOGIQUE dalam melakukan pengetesan sistem pada
                                    setiap project testing kami adalah OWASP (Open Web Application Security Project).</p>
                            </li>
                            <li>
                                <h3>Berapakah harga layanan pengetesan sistem keamanan dari LOGIQUE?</h3>
                                <p>Dalam melakukan pengetesan sistem mulai dari tahapan awal (preparation), tahapan
                                    pengujian (assessment) dan tahapan pelaporan (reporting), LOGIQUE menawarkan harga mulai
                                    dari Rp 15 juta, tergantung dari jenis aplikasi serta sistem yang akan diuji. Untuk
                                    mengetahui informasi lebih lanjut, Anda dapat langsung menghubungi kami melalui email ke
                                    info@logique.co.id atau di nomor telepon (021) 227 089 35/36 atau melalui pesan WhatsApp
                                    di nomor 0811-870-321.</p>
                            </li>
                            <li>
                                <h3>Dalam melakukan pengetesan, apakah security team LOGIQUE hanya mengandalkan automated
                                    tools?</h3>
                                <p>Tidak, automated tools hanya kami gunakan saat melakukan scanning. Sedangkan, untuk
                                    penetration testing, security team LOGIQUE menggunakan metode manual saat proses
                                    pengetesannya.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="faq-list">
                            <li>
                                <h3>Berapa lama waktu yang dibutuhkan tim LOGIQUE dalam melakukan pengetesan sistem?</h3>
                                <p>Dalam melakukan pengetesan sistem, tergantung dari ruang lingkupnya. Namun, pada umumnya
                                    memakan waktu 1 minggu.</p>
                            </li>
                            <li>
                                <h3>Mengapa perlu dilakukan pentest pada sebuah sistem?</h3>
                                <p>Dengan melakukan pentest, Anda akan mendapatkan gambaran mengenai seberapa kuat
                                    pertahanan sistem Anda dalam menghadapi kejahatan cyber dan berbagai gangguan lainnya.
                                </p>
                            </li>
                            <li>
                                <h3>Apa saja yang dibutuhkan sebelum melakukan pentest?</h3>
                                <p>Sebelum melakukan pengetesan sistem, klien hanya perlu menjelaskan proses sistem yang
                                    terjadi. Data-data pendukung lainnya juga dapat Anda serahkan jika diperlukan.</p>
                            </li>
                            <li>
                                <h3>Apa perbedaan antara VA test dan Pentest?</h3>
                                <p>VA test hanya mengandalkan automated tools dalam melakukan scanning terhadap “well-known”
                                    vulnerability dan seringkali tools tersebut sifatnya general sehingga tidak dapat
                                    menemukan case-case yang sifatnya lebih spesifik.</p>
                            </li>
                            <li>
                                <h3>Apa perbedaan antara whitebox dan blackbox?</h3>
                                <p>Dalam testing whitebox, pentester akan mendapatkan akses secara penuh ke dalam sistem
                                    yang diuji sehingga bisa melakukan static analisis terhadap berbagai hal, seperti kode,
                                    architecture analysis dan lain-lain. Sedangkan untuk blackbox, pentester akan berperan
                                    layaknya hacker yang akan menyerang dari luar dan berusaha masuk ke dalam sistem
                                    menggunakan informasi awal seminimal mungkin.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="container__">
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6">
                        Untuk informasi lengkapnya, Anda dapat menghubungi <b>Logique Digital Indonesia</b> melalui email di
                        <a href="mailto:info@logique.co.id">info@logique.co.id</a> atau mendaftar melalui form yang ada di
                        link berikut ini <br /><br />
                        <div class="row">
                            <div class="col">
                                <img  loading="lazy" alt="Form" src="assets/img/img-pentest/form-footer-text.png" class="img-responsive center-block" />
                            </div>
                        </div>

                        <div class="info-contact-icon">
                            <div class="row">
                                <div class="info-column">
                                    <a href="/hubungi-kami.php" target="_blank">
                                    <img  loading="lazy" alt="Form" src="assets/img/img-pentest/form-footer-icon.png" class="center-block" />
                                    </a>
                                </div>
                                <div class="info-column">
                                    <a href="https://api.whatsapp.com/send?phone=62811870321" target="_blank"
                                        aria-label="WhatsApp" class="" rel="noreferrer"><i class="fa fa-whatsapp"></i>
                                    </a>
                                    <div>
                                        <b>+62811870321</b>
                                    </div>
                                </div>
                            </div>
                        </div>

                        Layanan Kami lainnya:<br />
                        <a target="_blank" href="/layanan/pembuatan-web-karir.php">Pembuatan Website Karir Perusahaan</a>
                        <div class="garis">&nbsp;&nbsp;|&nbsp;&nbsp;</div>
                        <a target="_blank" href="/layanan/pembuatan-aplikasi-mobile.php">Pembuatan Aplikasi Mobile</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="hidden contact-us">
            <div class="container">
                <h2 class="contact-title">
                    <img  loading="lazy"  src="assets/img/img-pentest/i-contact.png" alt="contact">Contact Us
                </h2>
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label for="">Company Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label for="">Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label for="">E-mail</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label for="">Type of Services</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="service-1"><input type="checkbox" id="service-1"> Pentest
                                                Aplikasi</label>
                                            <div class="radio-group">
                                                <label for="radio-1"><input type="radio" id="radio-1" name="service-1">
                                                    Web</label>
                                                <label for="radio-2"><input type="radio" id="radio-2" name="service-1">
                                                    Aplikasi Seluler</label>
                                                <label for="radio-3"><input type="radio" id="radio-3" name="service-1">
                                                    Aplikasi Desktop</label>
                                            </div>
                                            <label for="service-5"><input type="checkbox" id="service-5"> Pentest
                                                Jaringan</label>
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="service-2"><input type="checkbox" id="service-2"> Peninjauan
                                                Kode</label>
                                            <label for="service-3"><input type="checkbox" id="service-3"> Pelatihan Mengenai
                                                Pentingnya Keamanan Siber</label>
                                            <label for="service-4"><input type="checkbox" id="service-4"> Konsultasi
                                                Keamanan Siber</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label for="">Messages</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea name="" id="" cols="30" rows="10" class="form-control"
                                        placeholder="write your text here..."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-contact">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include '../footer.php'; ?> 
    <script src="/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.matchHeight.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.3.0/ekko-lightbox.js"></script>

    <script>
         $('.multi-item-carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        // if (next.next().length>0) {
        //     next.next().children(':first-child').clone().appendTo($(this));
        // } else {
        //     $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        // }
        });
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
           
        });
    </script>
</body>
<script>
new WOW().init();
$(function() {
    $('.each-plus-minus').matchHeight();
});
</script>

</html>