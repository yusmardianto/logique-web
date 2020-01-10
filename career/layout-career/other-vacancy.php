<?php 
    $current_url = $_SERVER['REQUEST_URI'];
    $arr_url = preg_split('/[\/.]/',$current_url);
    $cat_vacancy = $arr_url[3]; //category vacancy
?>
<section class="container-fluid ">
  <div class="container--max-width">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-10 no-gap">
        <h2 class="section-title">Other Position</h2>
        <div class="row other-position">
          <?php if ($cat_vacancy !== 'it-generalist'): ?>
          <div class="col-sm-6 col-md-4">
            <a href="#" class="other-position__item bg--generalist">
              <h3 class="section-title">IT Generalist</h3>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'programmer'): ?>
          <div class="col-sm-6 col-md-4">
            <a href="#" class="other-position__item bg--programmer">
              <h3 class="section-title">Programmer</h3>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'desainer-marketing'): ?>
          <div class="col-sm-6 col-md-4">
            <a href="#" class="other-position__item bg--design">
              <h3 class="section-title">Desainer / Digital Marketing</h3>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'it-specialist'): ?>
          <div class="col-sm-6 col-md-4">
            <a href="#" class="other-position__item bg--specialist">
              <h3 class="section-title">IT Specialist</h3>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'sales-back-office'): ?>
          <div class="col-sm-6 col-md-4">
            <a href="#" class="other-position__item bg--sales">
              <h3 class="section-title">Sales / Back Office</h3>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($cat_vacancy !== 'internship'): ?>
          <div class="col-sm-6 col-md-4">
            <a href="#" class="other-position__item bg--generalist">
              <h3 class="section-title">Internship</h3>
            </a>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>