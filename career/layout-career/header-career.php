<?php 
  if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') {
    echo '<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQJRS4V"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->';
  }
?>
<?php 
    $baseFileName = basename($_SERVER['PHP_SELF']);
?>
<!-- NAVIGATION -->
<button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle"
  data-toggle="collapse" data-target="#myNavbar">
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
      <div class="text-center">
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
      <div class="text-center active">
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
<div class="container-fluid">
  <div class="row lang-logo--update-design">
    <div class="container--max-width" style="padding: 0">
      <div class="">
        <div class="col-sm-offset-1 col-sm-10">
          <div class="row">
            <div class="col-sm-8 col-md-3">
              <a href="/career/">
                <img src="/img/career/logo-karir.png" alt="Jasa Pembuatan Website Logique Digital Indonesia"
                  class="img-responsive logo--update-design" />
              </a>
            </div>
            <div class="col-md-5 col-lg-6 hidden-xs hidden-sm">
              <div class="row navbar--career">
                <div class="col-md-5 text-center no-gap">
                  <div class="dropdown">
                    <a href="" class="dropdown-toggle navbar-link" data-toggle="dropdown" role="button"
                      aria-haspopup="true" aria-expanded="true">
                      Kerja di LOGIQUE
                      <span class="caret --sm"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="/career/visi-budaya/">Visi dan Budaya Kerja</a></li>
                      <li><a href="/career/pengembangan-karir/">Pengembangan Karir</a></li>
                      <li><a href="/career/aktivitas-kerja/">Aktivitas Kami</a></li>
                      <li><a href="/career/pedoman-hr/">Pedoman HR</a></li>
                      <li><a href="/career/pesan-untuk-kandidat/">Pesan Untuk Kandidat</a></li>
                      <li><a href="/career/faq/">FAQ</a></li>
                    </ul>
                    <div class="clear"></div>
                  </div>
                </div>
                <div class="col-md-5 text-center no-gap">
                  <!-- <a href="/career/lowongan.php" class="navbar-link">Lowongan Kerja</a> -->

                  <div class="dropdown megamenu-btn">
                    <a href="" class="dropdown-toggle navbar-link" data-toggle="dropdown" role="button"
                      aria-haspopup="true" aria-expanded="true">
                      Lowongan Kerja
                      <span class="caret --sm"></span>
                    </a>
                    <!-- <ul class="dropdown-menu">
                      <li class="dropdown-submenu">
                        <a class="dropdown-submenu__item" tabindex="-1" href="/career/lowongan/programmer/">Programmer <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a tabindex="-1" href="/career/lowongan/programmer/frontend-developer.php">Frontend Developer</a></li>
                          <li><a tabindex="-1" href="/career/lowongan/programmer/mobile-app-developer.php">Mobile App Developer</a></li>
                          <li><a tabindex="-1" href="/career/lowongan/programmer/product-developer.php">Product Developer</a></li>
                          <li><a tabindex="-1" href="/career/lowongan/programmer/react-native-developer.php">React Native Developer</a></li>
                          <li><a tabindex="-1" href="/career/lowongan/programmer/reactjs-developer.php">React JS Developer</a></li>
                          <li><a tabindex="-1" href="/career/lowongan/programmer/web-developer.php">Web Developer</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu">
                        <a class="dropdown-submenu__item" tabindex="-1" href="/career/lowongan/it-generalist/">IT Generalist <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a tabindex="-1" href="/career/lowongan/it-generalist/business-analyst.php">Business Analyst</a></li>
                          <li><a tabindex="-1" href="/career/lowongan/it-generalist/consultant.php">Consultant</a></li>
                          <li><a tabindex="-1" href="/career/lowongan/it-generalist/product-manager.php">Product Manager</a></li>
                          <li><a tabindex="-1" href="/career/lowongan/it-generalist/project-manager.php">Project Manager</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu">
                        <a class="dropdown-submenu__item" tabindex="-1" href="/career/lowongan/specialist/">Others IT Specialist <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a tabindex="-1" href="/career/lowongan/specialist/devops.php">Devops</a></li>
                          <li><a tabindex="-1" href="/career/lowongan/specialist/it-security-specialist.php">IT Security Specialist</a></li>
                          <li><a tabindex="-1" href="/career/lowongan/specialist/quality-assurance.php">Quality Assurance</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu">
                        <a class="dropdown-submenu__item" tabindex="-1" href="/career/lowongan/digitalmarketing/">Designer / Digital Marketing <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a tabindex="-1" href="/career/lowongan/digitalmarketing/digital-marketing-specialist.php">Digital Marketing Specialist</a></li>
                          <li><a tabindex="-1" href="/career/lowongan/digitalmarketing/ui-ux-designer.php">UI/UX Designer</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu">
                        <a class="dropdown-submenu__item" tabindex="-1" href="/career/lowongan/backoffice/">Back Office <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a tabindex="-1" href="/career/lowongan/backoffice/accounting-finance.php">Accounting & Finance</a></li>
                          <li><a tabindex="-1" href="/career/lowongan/backoffice/hr-recruitment.php">HR Recruitment</a></li>
                        </ul>
                      </li>
                    </ul> -->
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-3">
              <a href="/career/lowongan/" class="link-header-lamar-lowongan">
                Melamar Lowongan Sekarang
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END HEADER -->

<!-- MEGA MENU -->
<div class="mega-menu">
  <div class="mega-menu__item">
    <a href="/career/lowongan/programmer/" class="mega-menu__title">
      <img class="mega-menu__img" src="/img/career/icon/web-dev.png" alt="Web Developer">
      <h4>Programmer</h4>
    </a>
    <ul class="mega-menu__list">
      <a href="/career/lowongan/programmer/frontend-developer.php"><li>Frontend Developer</li></a>
      <a href="/career/lowongan/programmer/mobile-app-developer.php"><li>Mobile App Developer</li></a>
      <a href="/career/lowongan/programmer/product-developer.php"><li>Product Developer</li></a>
      <a href="/career/lowongan/programmer/react-native-developer.php"><li>React Native Developer</li></a>
      <a href="/career/lowongan/programmer/reactjs-developer.php"><li>React JS Developer</li></a>
      <a href="/career/lowongan/programmer/web-developer.php"><li>Web Developer</li></a>
    </ul>
  </div>
  <div class="mega-menu__item">
    <a href="/career/lowongan/it-generalist/" class="mega-menu__title">
      <img class="mega-menu__img" src="/img/career/icon/server.png" alt="Server">
      <h4>IT Generalist</h4>
    </a>
    <ul class="mega-menu__list">
      <a href="/career/lowongan/it-generalist/business-analyst.php"><li>Business Analyst</li></a>
      <!-- <a href="/career/lowongan/it-generalist/consultant.php"><li>Consultant</li></a> --> 
      <a href="/career/lowongan/it-generalist/project-manager.php"><li>Consultant / Project Manager</li></a>
      <a href="/career/lowongan/it-generalist/product-manager.php"><li>Product Manager</li></a>
    </ul>
  </div><div class="mega-menu__item">
    <a href="/career/lowongan/specialist/" class="mega-menu__title">
      <img class="mega-menu__img" src="/img/career/icon/webmaster.png" alt="Web Master">
      <h4>Others IT Specialist</h4>
    </a>
    <ul class="mega-menu__list">
      <a href="/career/lowongan/specialist/devops.php"><li>Devops Engineer</li></a>
      <a href="/career/lowongan/specialist/it-security-specialist.php"><li>IT Security Specialist</li></a>
      <a href="/career/lowongan/specialist/quality-assurance.php"><li>Quality Assurance Engineer (Software)</li></a>
    </ul>
  </div><div class="mega-menu__item">
    <a href="/career/lowongan/digitalmarketing/" class="mega-menu__title">
      <img class="mega-menu__img" src="/img/career/icon/ux.png" alt="Designer">
      <h4>Designer / Digital Marketing</h4>
    </a>
    <ul class="mega-menu__list">
      <a href="/career/lowongan/digitalmarketing/digital-marketing-specialist.php"><li>Digital Marketing Specialist</li></a>
      <a href="/career/lowongan/digitalmarketing/ui-ux-designer.php"><li>UI/UX Designer</li></a>
    </ul>
  </div><div class="mega-menu__item">
    <a href="/career/lowongan/backoffice/" class="mega-menu__title">
      <img class="mega-menu__img" src="/img/career/icon/content.png" alt="Back Office">
      <h4>Back Office</h4>
    </a>
    <ul class="mega-menu__list">
      <a href="/career/lowongan/backoffice/accounting-finance.php"><li>Accounting & Finance</li></a>
      <a href="/career/lowongan/backoffice/hr-recruitment.php"><li>HR Recruitment</li></a>
    </ul>
  </div>
</div>
<!-- END MEGA MENU -->