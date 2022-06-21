﻿<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_error', 0);
?>
<!DOCTYPE html>
<html lang="id" style="overflow-x: hidden;">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
  <meta name="description" itemprop="description" content="LOGIQUE Digital Indonesia | Agensi Jasa Pengembangan Sistem Web (Web System Development) untuk e-commerce & lainnya | Lokasi: Jl.Simatupang Jakarta Selatan">
  <meta name="keywords" content="web system development, web system development jakarta, web system development jakarta selatan">
  <meta name="author" content="PT. Logique Digital Indonesia">
  <meta itemprop="name" content="PT. Logique Digital Indonesia">
  <meta property="og:title" content="Web System Development Jakarta | Solusi Digital Bisnis Anda | LOGIQUE">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Logique">
  <meta property="og:url" content="https://www.logique.co.id/">
  <meta property="og:image" content="https://www.logique.co.id/img/ogimg/web-system.png">
  <meta property="og:description" content="LOGIQUE Digital Indonesia | Agensi Jasa Pengembangan Sistem Web (Web System Development) untuk e-commerce & lainnya | Lokasi: Jl.Simatupang Jakarta Selatan">
  <!-- <link rel="amphtml" href="https://www.logique.co.id/amp/index.html"> -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link rel="canonical" href="https://www.logique.co.id/" />
  <!-- Facebook Pixel Code -->
  <link rel="preload" as="script" href="https://connect.facebook.net/en_US/fbevents.js">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '713777762291663');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=713777762291663&ev=PageView&noscript=1" /></noscript>

  <meta name="google-site-verification" content="dE5cRf5TFJueiDoWgkLj40B58g95oZXRn84Ol1Fr1hc" />
  <title>Web System Development Jakarta | Solusi Digital Bisnis Anda | LOGIQUE</title>

  </noscript>

  <link rel="stylesheet  " href="css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="stylesheet" href="css/sidebar-update.css">
  <link rel="stylesheet" href="css/newstyle.css">
  <link rel="stylesheet " href="css/slick.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

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

<body class="frontpage">
  <?php
  if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') {
    echo '<!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQJRS4V"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->';
  }
  ?>
  <style>
    .bg--white {
      position: relative;
    }

    section.visible-xs.visible-sm.--top {
      position: relative;
      z-index: 5;
    }

    @media (max-width: 768px) and (min-width: 415px) {
      .custombox__product-wrapper {
        margin-bottom: 2em;
      }
    }

    @media (max-width: 768px) {
      .col-sm-8 .custombox__btn-product {
        font-size: 11px;
      }
    }
  </style>
  <?//php include './popup.php'; ?>
  <div class="wrapper wrapper--update-design wrapper--update-design-font o-wrapper top-only ">

    <!-- NAVIGATION -->
    <?php
    // $active option are home, about, portfolio, services, product, career, contact
    $active = 'home';
    include($_SERVER['DOCUMENT_ROOT'] . '/sidebar.php');
    ?>

    <!-- HEADER -->
    <?php
    $lang = 'id';
    $en_link = '/en/';
    $id_link = '#';
    $jp_link = '/jp/';
    include($_SERVER['DOCUMENT_ROOT'] . '/header.php');
    ?>

    <div class="content-wrapper__">

      <div class="contain-video wrapper--update-design" id='bgvideo'>
        <video poster="img/video-img-min.jpg" id="bgvid" playsinline autoplay muted loop style="display:block!important">
          <source data-src="img/mainbanner-video.webm" type='video/webm;codecs="vp8, vorbis"' />
          <source data-src="img/12377093.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
        </video>

      </div>

      <div class="bg-white-opacity"></div>

      <div id="bgImg" style="height: auto; margin-left: auto; margin-right: auto; overflow: visible">
        <div class="img homepage-hero">
          <div class="title-container  ">
            <div class="container__">
              <div class="row">
                <div class="col-md-offset-1 col-md-10 text-center">
                  <h1 class="title-index" style="margin-top: 50px;">Pengembang Sistem Web Terbaik di Jakarta, <br>Menyediakan Solusi Digital
                    untuk Bisnis Anda</h1>
                  <p><strong>LOGIQUE DIGITAL INDONESIA</strong> adalah Perusahaan Pengembang Sistem & Aplikasi (System & Application Development) berbasis Web maupun Mobile yang memiliki profesionalitas tinggi. Spesialisasi dalam pembuatan dan perancangan WebApp dengan penekanan pada Pemasaran Digital (Digital Marketing) untuk meningkatkan dan memaksimalkan keuntungan bisnis Anda. <br>
                    Kami telah bekerja dengan banyak perusahaan ternama baik lokal maupun internasional, memenuhi berbagai permintaan, seperti pembuatan sistem lelang online, E-commerce, sistem rekrutmen karyawan, e-money, berbagai aplikasi internal perusahaan dan pengoperasian iklan digital.</p>
                </div>
              </div>
              <div class="row flex__row homepage-hero__card">
                <div class="col-md-3 col-xs-6" align="center">
                  <a href="/layanan/pembuatan-progressive-web-app.php" class="div-service-cat">
                    <img src="img/home/apk-web.png" alt="Jasa Pembuatan Website" class="img-responsive" />
                    <h2>Jasa Pembuatan <br />Aplikasi Web</h2><br>
                    <div style="background: #ffca13; border-radius: 8px; padding: 7px 20px; width:120px; color: #111;">
                      <p style="color:black; margin-left:-30px">Detail</p> <img style="margin-top:-20px; margin-left:60px" src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
                    </div>
                  </a>
                </div>
                <div class="col-md-3 col-xs-6" align="center">
                  <a href="/layanan/pembuatan-aplikasi-mobile.php" class="div-service-cat">
                    <img src="img/home/apk.png" alt="Jasa Pembuatan Aplikasi" class="img-responsive" />
                    <h2>Jasa Pembuatan <br />Aplikasi</h2><br>
                    <div style="background: #ffca13; border-radius: 8px; padding: 7px 20px; width:120px; color: #111;">
                      <p style="color:black; margin-left:-30px">Detail</p> <img style="margin-top:-20px; margin-left:60px" src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
                    </div>
                  </a>
                </div>
                <div class="col-md-3 col-xs-6" align="center">
                  <a href="/layanan/pembuatan-sistem-web.php" class="div-service-cat">
                    <img src="img/home/sistem-web.png" alt="Jasa Pembuatan Sistem Web" class="img-responsive" />
                    <h2>Jasa Pembuatan<br />Sistem Web</h2><br>
                    <div style="background: #ffca13; border-radius: 8px; padding: 7px 20px; width:120px; color: #111;">
                      <p style="color:black; margin-left:-30px">Detail</p> <img style="margin-top:-20px; margin-left:60px" src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
                    </div>
                  </a>
                </div>
                <div class="col-md-3 col-xs-6" align="center">
                  <a href="/layanan/penetration-test.php" class="div-service-cat">
                    <img src="img/home/pentest.png" alt="Jasa Penetration Testing" class="img-responsive" />
                    <h2>Jasa Penetration<br />Testing</h2><br>
                    <div style="background: #ffca13; border-radius: 8px; padding: 7px 20px; width:120px; color: #111;">
                      <p style="color:black; margin-left:-30px">Detail</p> <img style="margin-top:-20px; margin-left:60px" src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="bg--white">
        <div class="container__">
          <a href="/layanan/dx-dm-service.php">
            <img srcset="/img/home/IDBanner.jpg 576w" sizes="(max-width: 576px) 576px" src="/img/home/ENBanner.jpg" alt="" class="img-responsive" style="width: 100%;">
          </a>
        </div>
      </section>

      <section class="portfolio bg--white">
        <div class="container__">
          <h3 class="section-title">Portofolio Kami</h3>
          <div class="row">
            <div class="col-md-6">
              <p><strong>LOGIQUE DIGITAL INDONESIA</strong> adalah Developer Web Application / Aplikasi Mobile profesional yang memiliki spesialisasi dalam pembuatan dan perancangan WebApp, dengan penekanan pada Pemasaran Digital (Digital Marketing), untuk meningkatkan dan memaksimalkan keuntungan bisnis Anda.
                <br><br>
                Kami telah bekerja dengan banyak perusahaan internasional maupun lokal ternama, memenuhi berbagai permintaan, seperti pembuatan sistem lelang online, E-commerce, sistem rekrutmen karyawan, e-money, berbagai aplikasi internal perusahaan, dan pengoperasian iklan digital.
              </p>
              <a href="porofolio.php">
                <div style="background: #ffca13; border-radius: 8px; padding: 15px 20px; width:150px; color: #111;">
                  <p style="margin-top:-10px; color:black">Detail</p> <img style="margin-top:-40px; margin-left:90px" src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <picture>
                <source srcset="/img/our-portfolio-min.webp" type="image/webp">
                <source srcset="/img/our-portfolio-min.jpg">
                <img loading="lazy" src="/img/our-portfolio-min.jpg" class="portfolio__img img-responsive" alt="">
              </picture>

            </div>
          </div>
        </div>
      </section>

      <section class="solution bg--white">
        <div class="container__">
          <!-- <p><strong>LOGIQUE</strong> berkomitmen untuk berkontribusi pada industri TI di Indonesia (SI, pengembangan sistem Web, pemasaran digital, dll.). Kami telah mengembangkan tiga sistem internal untuk membantu meningkatkan produktivitas dan efisiensi karyawan, serta untuk menyederhanakan proses rekrutmen dan memudahkan evaluasi kandidat. Kami telah mengaplikasikan produk-produk ini di perusahaan kami sendiri, hasilnya terjadi peningkatan yang sangat nyata dan drastis sehingga kami memutuskan untuk menjual produk-produk ini</p> -->

          <!-- <div class="flex__row">
            <div class="col-md-4 row__item">
              <div class="item__img">
                <img src="/img/top/i-dokodemo.svg" alt="" loading="lazy">
              </div>
              <div class="item__text">
                <h4>Dokodemo Kerja</h4>
                <p><strong>LOGIQUE</strong> menawarkan kepada Anda sebuah sistem web untuk bekerja remote bernama Dokodemo-Kerja. Sistem ini mampu memonitor dan mengkalkulasi jam kerja karyawan secara akurat.</p>
                <a href="https://dokodemo-kerja.com/ind/"><img src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow"></a>
              </div>
            </div>
            <div class="col-md-4 row__item">
              <div class="item__img nippo">
                <picture>
                  <source srcset="/img/top/i-nippo-update.webp" type="image/webp">
                  <img src="/img/top/i-nippo-update.png" alt="" loading="lazy" class="img-responsive">
                </picture>

              </div>
              <div class="item__text">
                <h4>Nippo</h4>
                <p><strong>LOGIQUE</strong> menawarkan sistem manajemen pelaporan harian untuk karyawan yang bernama Nippo. Sistem ini memberikan solusi bagi perusahaan, dimana perusahaan dapat dengan mudah melakukan monitoring, penilaian, dan evaluasi kinerja karyawan setiap bulan.</p>
                <a href="/produk/nippo.php" target="_blank"><img src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow"></a>
              </div>
            </div>
            <div class="col-md-4 row__item">
              <div class="item__img">
                <picture>
                  <source srcset="/img/top/i-sugoi-saiyo-update.webp" type="image/webp">
                  <img src="/img/top/i-sugoi-saiyo-update.png" alt="" loading="lazy">
                </picture>
              </div>
              <div class="item__text">
                <h4>Sugoi Saiyo</h4>
                <p>Sugoi Saiyo adalah sebuah sistem manajemen yang dapat membantu aktivitas rekrutmen menjadi lebih efektif dan efisien bagi tim HRD atau para pencari kerja. Sistem ini akan menentukan kapan dan dimana proses interview akan dilaksanakan.</p>
                <a href="/produk/sugoi-saiyo.php"><img src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow"></a>
              </div>
            </div>
          </div> -->

          <section class="see-list bg--white">
            <div class="container__">
              <div class="flex__row">
                <div class="col-sm-6 col-xs-12 row__item">
                  <h3 class="section-title">Kami Menyediakan <b>Solusi HR-Tech</b> di Indonesia</h3><br><br>
                  <a href="layanan.php">
                    <picture>
                      <source srcset="/img/home/HRProvide.webp" width="100%" type="image/webp">
                      <img src="/img/home/HRProvide.jpg" alt="" width="100%" loading="lazy">
                    </picture>
                  </a><br><br>
                  <p>LOGIQUE berkomitmen untuk berkontribusi pada industri TI di Indonesia (SI, pengembangan sistem Web, pemasaran digital, dll.). Kami telah mengembangkan tiga sistem internal untuk membantu meningkatkan produktivitas dan efisiensi karyawan, serta untuk menyederhanakan proses rekrutmen dan memudahkan evaluasi kandidat. Kami telah mengaplikasikan produk-produk ini di perusahaan kami sendiri, hasilnya terjadi peningkatan yang sangat nyata dan drastis sehingga kami memutuskan untuk menjual produk-produk ini</p>
                  <br><br>
                  <a href="layanan.php">
                    <div class="col-sm-4" style="background: #ffca13; border-radius: 8px; padding: 15px 20px; color: #111;">
                      <p style="margin-top:-10px; color:black">Detail</p> <img style="margin-top:-20px; margin-left:90px" src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-xs-12 row__item">
                  <h3 class="section-title">Kami Menyediakan <b>Solusi DX</b> yang Komprehensif</h3><br><br>
                  <a href="produk.php">
                    <picture>
                      <source srcset="/img/home/DXProvide.webp" width="100%" type="image/webp">
                      <img src="/img/home/DXProvide.jpg" alt="" width="100%" loading="lazy">
                    </picture>
                  </a><br><br>
                  <p>LOGIQUE adalah perusahaan konsultan transformasi Digital. Kami akan mendukung Anda untuk meningkatkan layanan yang Anda miliki saat ini serta mengembangkan layanan baru dengan mengubah Bisnis Anda menjadi bisnis yang terdigitalisasi dan produktif. Kami dapat mendukung Anda mulai dari konsultasi, pengembangan, pengelolaan dan pemeliharaan, hingga menyediakan sumber daya manusia dalam bidang digital yang profesional. Kami juga memiliki solusi agar Anda bisa memiliki tenaga kerja DX internal yang handal.</p>
                  <br><br>
                  <a href="produk.php">
                    <div class="col-sm-4" style="background: #ffca13; border-radius: 8px; padding: 15px 20px; color: #111;">
                      <p style="margin-top:-10px; color:black">Detail</p> <img style="margin-top:-20px; margin-left:90px" src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>

      <section class="bg--white">
        <div class="container__">
          <a href="https://dokodemo-kerja.com/">
            <picture>
              <!-- webp -->
              <source media="(max-width: 576px)" srcset="/img/home/DokodemoBanner.webp" type="image/webp">
              <source media="(min-width: 576px)" srcset="/img/home/DokodemoBanner.webp" type="webp">

              <!-- jpeg -->
              <source media="(max-width: 576px)" srcset="/img/home/DokodemoBanner.png" type="image/jpeg">
              <source media="(min-width: 576px)" srcset="/img/home/DokodemoBanner.png" type="image/jpeg">
              <img srcset="/img/home/DokodemoBanner.png 576w" sizes="(max-width: 576px) 576px" src="/img/home/DokodemoBanner.png" alt="" class="img-responsive" style="width: 100%;">
            </picture>
          </a>
        </div>
      </section>

      <section class="case-study bg--white">
        <div class="container__">
          <h3 class="section-title">Studi Kasus</h3>
          <p>Selama lebih dari 7 tahun, <strong>LOGIQUE</strong> telah membantu berbagai klien ternama, dari startup lokal sampai dengan perusahaan internasional untuk mengembangkan Website, Sistem, Web App dan Aplikasi Mobile.</p>

          <div class="flex__row case-study__slide case-study__case-item">
            <div class="col-md-4 col-xs-12">
              <a href="/case-study/jba-bastk" class="case-item" data-card-category="WEB SYSTEM & MOBILE APP">
                <picture>
                  <source srcset="/case-study/assets/img/card/9.webp" type="image/webp">
                  <img src="/case-study/assets/img/card/9.png" class="img-responsive case-item__img" alt="JBA EBASTK" loading="lazy">
                </picture>
                <h6>JBA eBASTK</h6>
                <h4>LOGIQUE mengembangkan aplikasi Berita Acara Serah Terima Kendaraan (eBASTK) untuk JBA Indonesia sehingga mampu meningkatkan akurasi data serah terima kendaraan</h4>
                <br>
                <img src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
              </a>
            </div>
            <div class="col-md-4 col-xs-12">
              <a href="/case-study/aia-surrender/" class="case-item" data-card-category="WEBSITE">
                <picture>
                  <source srcset="/case-study/assets/img/card/10.webp" type="image/webp" style=" filter: contrast(0.9); "> 
                  <img src="/case-study/assets/img/card/10.png" class="img-responsive case-item__img" alt="AIA FINANCIAL" loading="lazy" style=" filter: contrast(0.9); ">
                </picture>
                <h6>PT. AIA FINANCIAL</h6>
                <h4>PT. AIA Financial bekerja sama dengan LOGIQUE mengembangkan sistem pembatalan polis berbasis website bernama "AIA Surrender" yang mudah diakses untuk semua kalangan usia</h4>
                <br>
                <img src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
              </a>
            </div>
            <div class="col-md-4 col-xs-12">
              <a target="_blank" href="https://www.logique.co.id/blog/2020/11/13/interview-jba-standardisasi-dan-dx-dalam-industri-lelang-mobil/" class="case-item" data-card-category="INTERVIEW">
                <picture>
                  <source srcset="/img/case-study-jba-interview.webp" type="image/webp">
                  <img src="/img/case-study-jba-interview.jpg" class="img-responsive case-item__img" alt="JBA Interview" loading="lazy">
                </picture>
                <h6>INTERVIEW</h6>
                <h4>PT JBA Indonesia: Standardisasi dan DX dalam industri lelang mobil</h4>
                <br>
                <img src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
              </a>
            </div>
          </div>

          <div class="case-study-btn-container text-center ">
            <a href="/case-study/" class="showcase showmore">
              Lihat lebih banyak
            </a>
            <!-- <a href="javascript:void(0)" class=" showcase showless" style="display: none;">
               Lihat lebih sedikit 
            </a> -->
          </div>
          <div class="casestudy-text">
            <p><strong>LOGIQUE</strong> berkomitmen untuk memberikan solusi terbaik untuk klien-klien kami; berdasarkan pengalaman kami dalam e-commerce, sistem management pelelangan mobil/motor, pengembangan CRM, aplikasi e-learning, PWA, sistem rekrutmen dan lainnya.</p>
          </div>

        </div>
      </section>

      <section class="see-list bg--white">
        <div class="container__">
          <div class="flex__row">
            <div class="col-sm-6 col-xs-12 row__item">
              <a href="layanan.php" class="item item--service">
                <picture>
                  <source srcset="/img/home/service.webp" width="20%" type="image/webp">
                  <img src="/img/home/service.png" alt="" width="20%" loading="lazy">
                </picture>

                <h3 style="margin-top:20px">See Service List</h3>
                <div style="background: #ffca13; border-radius: 8px; padding: 15px 20px; width:120px; color: #111;">
                  <p style="margin-top:-10px; color:black">Detail</p> <img style="margin-top:-20px; margin-left:60px" src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-xs-12 row__item">
              <a href="produk.php" class="item item--product">
                <picture>
                  <source srcset="/img/home/product.webp" width="20%" type="image/webp">
                  <img src="/img/home/product.png" alt="" width="20%" loading="lazy">
                </picture>

                <h3 style="margin-top:20px">See Product List</h3>
                <div style="background: #ffca13; border-radius: 8px; padding: 15px 20px; width:120px; color: #111;">
                  <p style="margin-top:-10px; color:black">Detail</p> <img style="margin-top:-20px; margin-left:60px" src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-xs-12 row__item">
              <a href="hubungi-kami.php" class="item item--contact">
                <picture>
                  <source srcset="/img/home/texting.webp" width="20%" type="image/webp">
                  <img src="/img/home/texting.png" alt="" width="20%" loading="lazy">
                </picture>

                <h3 style="margin-top:20px">Contact Us</h3>
                <div style="background: #ffca13; border-radius: 8px; padding: 15px 20px; width:120px; color: #111;">
                  <p style="margin-top:-10px; color:black">Detail</p> <img style="margin-top:-20px; margin-left:60px" src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-xs-12 row__item">
              <a href="career/" class="item item--career">
                <picture>
                  <source srcset="/img/home/career.webp" width="20%" type="image/webp">
                  <img src="/img/home/career.png" alt="" width="20%" loading="lazy">
                </picture>
                <h3 style="margin-top:20px">Career</h3>
                <div style="background: #ffca13; border-radius: 8px; padding: 15px 20px; width:120px; color: #111;">
                  <p style="margin-top:-10px; color:black">Detail</p> <img style="margin-top:-20px; margin-left:60px" src="/img/top/right-arrow.svg" width="18px" alt="" class="img-responsive right-arrow">
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="content-article  bg--white">
        <div class="container__">
          <div class="row">
            <div class="col-md-12">
              <p class="title">Artikel Terkait Pembuatan Website</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="carousel slide multi-item-carousel" id="newsCarousel">
                <div class="carousel-inner">

                  <?php
                  function shorten_string($string, $wordsreturned)
                  {
                    $retval = $string;
                    $string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
                    $string = str_replace("\n", " ", $string);
                    $array = explode(" ", $string);
                    if (count($array) <= $wordsreturned) {
                      $retval = $string;
                    } else {
                      array_splice($array, $wordsreturned);
                      $retval = implode(" ", $array) . " ...";
                    }
                    return $retval;
                  }
                  function tgl_indo($tanggal)
                  {
                    $bulan = array(
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

                    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
                  }
                  $url = file_get_contents('https://www.logique.co.id/blog/wp-json/wp/v2/posts/?tags=108&per_page=5&_embed');

                  $x = 0;

                  $remote_posts = json_decode($url);
                  // printf('<pre>'); 
                  //  var_dump($url);
                  // printf('</pre>');
                  foreach ($remote_posts as $remote_post) {
                    $thumb_full_url = '';
                    $thumb_url = '';

                    if (!empty($remote_post->featured_media) && isset($remote_post->_embedded)) {
                      $thumb_full_url = $remote_post->_embedded->{'wp:featuredmedia'}[0]->source_url;
                      $thumb_url = $remote_post->_embedded->{'wp:featuredmedia'}[0]->media_details->sizes->medium->source_url;
                    }
                    //echo  $thumb_url ;
                    if ($x == 0) {
                  ?>
                      <div class="item active ">
                      <?php } else {
                      echo ' <div class="item ">';
                    }

                      ?>
                      <div class="col-xs-12 col-sm-6 col-md-6 article-container">
                        <div class="img-container">
                          <img src="<?= $thumb_url ?>" class="img-responsive" loading="lazy" v>
                        </div>
                        <div class="content-container">
                          <a href="<?= $remote_post->link ?>" target="_blank">
                            <p class="title"><?= $remote_post->title->rendered ?></p>
                          </a>
                          <p class="content"><?php
                                              $array = preg_replace("/<.+>/sU", "", $remote_post->excerpt->rendered);
                                              $array =  shorten_string($array, 25);
                                              echo $array;
                                              ?></p>
                          <p class="date"><?php
                                          $tanggal = date(' Y-m-d', strtotime($remote_post->date));
                                          $idtanggal = tgl_indo($tanggal);
                                          echo $idtanggal;  ?> | By <?php
                                                                                        echo $remote_post->_embedded->author[0]->name;
                                                                                        ?></p>
                        </div>
                      </div>

                      </div>

                    <?php $x++;
                  }

                    ?>

                    <!--  Example item end -->
                </div>
                <ol class="carousel-indicators article-indicators">
                  <li data-target="#newsCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#newsCarousel" data-slide-to="1"></li>
                  <li data-target="#newsCarousel" data-slide-to="2"></li>
                  <li data-target="#newsCarousel" data-slide-to="3"></li>
                </ol>
              </div>
            </div>
          </div>

        </div>
    </div>
    </section>
  </div>
  <div class="content-wrapper__">
    <section class="content-article  bg--white">
      <?php include 'layanan/assets/components/dm-links.php' ?>
      <?php include 'layanan/assets/components/other-services.php' ?>
    </section>
  </div>


  </div>
  <?php include 'footer.php'; ?>
  <script>
    if ($.browser) {
      var sources = document.querySelectorAll('video#bgvid source');
      // Define the video object this source is contained inside
      var video = document.querySelector('video#bgvid');
      for (var i = 0; i < sources.length; i++) {
        sources[i].setAttribute('src', sources[i].getAttribute('data-src'));
      }
      video.load();

    } else {

    }
  </script>
  <script>
    $(document).ready(function() {
      $slick_slider = $('.case-study__slide');
      settings_slider = {
        slidesToShow: 2,
        slidesToScroll: 2,
        arrow: true,
        infinite: true,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrow: true
          }
        }, ]
        // more settings
      }
      slick_on_mobile($slick_slider, settings_slider);

      // slick on mobile
      function slick_on_mobile(slider, settings) {
        $(window).on('load resize', function() {
          if ($(window).width() > 1100) {
            if (slider.hasClass('slick-initialized')) {
              slider.slick('unslick');
            }
            return
          }
          if (!slider.hasClass('slick-initialized')) {
            return slider.slick(settings);
          }
        });
      };

      // $('.showmore').click(function(){
      //      $('.morecs').css('display','inline-block');
      //      $('.showmore').css('display','none'); 
      //      $('.showless').css('display','inline-block');   
      //     })

      // $('.showless').click(function(){
      //      $('.morecs').css('display','none');
      //      $('.showless').css('display','none'); 
      //      $('.showmore').css('display','inline-block');  
      //     })

      // Instantiate the Bootstrap carousel
      $('#newsCarousel').carousel({
        interval: false
      });

      // for every slide in carousel, copy the next slide's item in the slide.
      // Do the same for the next, next item.
      $('#newsCarousel .item').each(function() {
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
    });
  </script>

</body>

</html>