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
        <div class="row other-position">
          <?php if ($cat_vacancy !== 'it-generalist'): ?>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/it-generalist.php" class="other-position__item bg--generalist">
              <div class="other-position__overlay"></div>
              <h3 class="section-title">IT Generalist</h3>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'programmer'): ?>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/programmer.php" class="other-position__item bg--op-programmer">
              <div class="other-position__overlay"></div>
              <h3 class="section-title">Programmer</h3>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'designer-dm'): ?>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/designer-dm.php" class="other-position__item bg--op-designer">
              <div class="other-position__overlay"></div>
              <span class="other-position__urgent">Urgently Needed</span>
              <h3 class="section-title">Desainer / Digital Marketing</h3>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'other-it-specialist'): ?>
          <div class="col-md-6 col-lg-4">
            <a href="/career/lowongan/other-it-specialist.php" class="other-position__item bg--op-specialist">
              <div class="other-position__overlay"></div>
              <h3 class="section-title">IT Specialist</h3>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'sales-back-office'): ?>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="other-position__item bg--op-sales">
              <div class="other-position__overlay"></div>
              <span class="other-position__urgent">Urgently Needed</span>
              <h3 class="section-title">Sales / Back Office</h3>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'internship'): ?>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="other-position__item bg--op-internship">
              <div class="other-position__overlay"></div>
              <h3 class="section-title">Internship</h3>
            </a>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>