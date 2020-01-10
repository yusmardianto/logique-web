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
          <div class="col-sm-6 col-md-4">
            <a href="#" class="lowongan-position__item bg--project-manager">
              <h3 class="section-title">Project Manager</h3>
            </a>
          </div>
          <div class="col-sm-6 col-md-4">
            <a href="#" class="lowongan-position__item bg--programmer">
              <h3 class="section-title">Business Analyst</h3>
            </a>
          </div>
          <div class="col-sm-6 col-md-4">
            <a href="#" class="lowongan-position__item bg--product-manager">
              <h3 class="section-title">Product Manager</h3>
            </a>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>