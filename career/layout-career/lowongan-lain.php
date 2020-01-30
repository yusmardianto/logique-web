<?php 
    $current_url = $_SERVER['REQUEST_URI'];
    $arr_url = preg_split('/[\/.]/',$current_url);
    $cat_vacancy = $arr_url[3]; //category vacancy
?>
<section class="container-fluid ">
  <div class="container--max-width">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-10 no-gap">
        <h2 class="section-title">Lowongan Lain</h2>
        <div class="row see-position">
          <?php if ($cat_vacancy !== 'it-generalist'): ?>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/it-generalist/" class="see-position__item bg--sub-it-generalist">
              <div class="see-position__overlay"></div>
              <div class="section-title__wrapper">
                <h3 class="section-title">IT Generalist</h3>
              </div>
              <p>
                Project Manager, Product Manager, IT Consultant, Business Analyst, etc,.
              </p>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'programmer'): ?>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/programmer/" class="see-position__item bg--sub-programmer">
              <div class="see-position__overlay"></div>
              <div class="section-title__wrapper">
                <h3 class="section-title">Programmer</h3>
              </div>
              <p>
                PHP Programmer, Front-End Programmer, Mobile App Developer, etc.,
              </p>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'digitalmarketing'): ?>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/digitalmarketing/" class="see-position__item bg--sub-designer-dm">
              <div class="see-position__overlay"></div>
              <div class="section-title__wrapper">
                <h3 style="font-size: 28px;" class="section-title">Designer / <br>Digital Marketing</h3>
              </div>
              <p>
                Designer, SEO / Ad Specialist, Content Writer, etc.,
              </p>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'specialist'): ?>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/specialist/" class="see-position__item bg--sub-other-it-specialist">
              <div class="see-position__overlay"></div>
              <div class="section-title__wrapper">
                <h3 class="section-title">Others IT Specialist</h3>
              </div>
              <p>
                Security Specialist, DevOps, QA Specialist, etc.,
              </p>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'sales'): ?>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/sales/" class="see-position__item bg--sub-sales-marketing">
              <div class="see-position__overlay"></div>
              <div class="section-title__wrapper">
                <h3 class="section-title">Sales & Marketing</h3>
              </div>
              <p>
                Sales, Inside Sales staff, Marketing
              </p>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'backoffice'): ?>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/backoffice/" class="see-position__item bg--sub-back-office">
              <div class="see-position__overlay"></div>
              <div class="section-title__wrapper">
                <h3 class="section-title">Back Office</h3>
              </div>
              <p>
                GA, HR, Accounting
              </p>
            </a>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>