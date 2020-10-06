<?php 
    $current_url = $_SERVER['REQUEST_URI'];
    $arr_url = preg_split('/[\/.]/',$current_url);
    $cat_vacancy = $arr_url[3]; //category vacancy
?>
<section class="container-fluid ">
  <div class="container--max-width">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-10 no-gap">
        <?php if ($cat_vacancy === 'it-generalist'): ?>
        <h2 class="section-title">Lowongan IT Generalist</h2>
        <div class="row lowongan-position">
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/it-generalist/project-manager.php"
              class="lowongan-position__item bg--sub-project-manager">
              <div class="lowongan-position__overlay"></div>
              <span class="other-position__urgent">Urgently Needed</span>
              <h3 class="section-title">Consultant / <br>Project Manager</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/it-generalist/business-analyst.php"
              class="lowongan-position__item bg--sub-business-analyst">
              <div class="lowongan-position__overlay"></div>
              <span class="other-position__urgent">Urgently Needed</span>
              <h3 class="section-title">Business Analyst</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/it-generalist/product-manager.php"
              class="lowongan-position__item bg--sub-product-manager">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">Product Manager</h3>
            </a>
          </div>
          <!-- <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/it-generalist/consultant.php" class="lowongan-position__item bg--sub-consultant">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">Consultant</h3>
            </a>
          </div> -->
        </div>
        <?php endif; ?>

        <?php if ($cat_vacancy === 'digitalmarketing'): ?>
        <h2 class="section-title">Lowongan Designer / Digital Marketing</h2>
        <div class="row lowongan-position">
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/digitalmarketing/digital-marketing-specialist.php"
              class="lowongan-position__item bg--sub-dm-specialist">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">Digital Marketing Specialist</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/digitalmarketing/ui-ux-designer.php"
              class="lowongan-position__item bg--sub-ui-ux-designer">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">UI/UX Designer</h3>
            </a>
          </div>
        </div>
        <?php endif; ?>

        <?php if ($cat_vacancy === 'specialist'): ?>
        <h2 class="section-title">Lowongan Others IT Specialist</h2>
        <div class="row lowongan-position">
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/specialist/quality-assurance.php" class="lowongan-position__item bg--sub-qa">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">Quality Assurance Engineer (Software)</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/specialist/it-security-specialist.php"
              class="lowongan-position__item bg--sub-security-specialist">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">IT Security Specialist</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/specialist/devops.php" class="lowongan-position__item bg--sub-devops">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">DevOps Engineer</h3>
            </a>
          </div>
        </div>
        <?php endif; ?>

        <?php if ($cat_vacancy === 'programmer'): ?>
        <h2 class="section-title">Lowongan Programmer</h2>
        <div class="row lowongan-position">
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/programmer/product-developer.php"
              class="lowongan-position__item bg--sub-product-dev">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">Product Developer</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/programmer/web-developer.php" class="lowongan-position__item bg--sub-web-dev">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">Web Developer</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/programmer/frontend-developer.php"
              class="lowongan-position__item bg--sub-front-end-dev">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">Front End Developer</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/programmer/reactjs-developer.php"
              class="lowongan-position__item bg--sub-senior-react-js-dev">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">React JS Developer</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/programmer/react-native-developer.php"
              class="lowongan-position__item bg--sub-react-native-dev">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">React Native Developer</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/programmer/mobile-app-developer.php"
              class="lowongan-position__item bg--sub-mobile-app-dev">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">Mobile App Developer</h3>
            </a>
          </div>
          <!-- <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/programmer/senior-reactjs-developer.php"
              class="lowongan-position__item bg--sub-senior-react-js-dev ">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">Senior React JS Developer</h3>
            </a>
          </div> -->
        </div>
        <?php endif; ?>

        <?php if ($cat_vacancy === 'backoffice'): ?>
        <h2 class="section-title">Lowongan Back Office</h2>
        <div class="row lowongan-position">
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/backoffice/hr-recruitment.php"
              class="lowongan-position__item bg--sub-back-office">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">HR Recruitment</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/backoffice/accounting-finance.php"
              class="lowongan-position__item bg--sub-back-office">
              <div class="lowongan-position__overlay"></div>
              <h3 class="section-title">Akunting & Finance</h3>
            </a>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>