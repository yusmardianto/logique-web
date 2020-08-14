<?php 
    $current_url = $_SERVER['REQUEST_URI'];
    $arr_url = preg_split('/[\/.]/',$current_url);
    $name = $arr_url[3];
?>
<section>
  <div class="container--max-width interview-lain">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-10">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title --black" style="font-size: 26px;">Lihat lainnya</h3>
          </div>
          <?php if ($name !== 'yoshi'): ?>
          <div class="col-md-4">
            <a href="/career/interview/yoshi.php" class="interview-link">
              <div class="panel panel-default">
                <div class="panel-body" style="background: url(/img/career/yoshi.jpg)no-repeat;">
                  <h3>Yoshi, CEO / Founder</h3>
                </div>
              </div>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($name !== 'ghitta'): ?>
          <div class="col-md-4">
            <a href="/career/interview/ghitta.php" class="interview-link">
              <div class="panel panel-default">
                <div class="panel-body" style="background: url(/img/career/ghitta.jpg)no-repeat;">
                  <h3>Ghitta, HRD</h3>
                </div>
              </div>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($name !== 'taufik'): ?>
          <div class="col-md-4">
            <a href="/career/interview/taufik.php" class="interview-link">
              <div class="panel panel-default">
                <div class="panel-body" style="background: url(/img/career/taufik.jpg)no-repeat;">
                  <h3>Taufik, Senior Front End Developer</h3>
                </div>
              </div>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($name !== 'muklis'): ?>
          <div class="col-md-4">
            <a href="/career/interview/muklis.php" class="interview-link">
              <div class="panel panel-default">
                <div class="panel-body" style="background: url(/img/career/muklis.jpg)no-repeat;">
                  <h3>Muklis, Senior Back End Developer</h3>
                </div>
              </div>
            </a>
          </div>
          <?php endif; ?>
          <?php if ($name !== 'aprillian'): ?>
          <div class="col-md-4">
            <a href="/career/interview/aprillian.php" class="interview-link">
              <div class="panel panel-default">
                <div class="panel-body" style="background: url(/img/career/aprillian.jpg)no-repeat;">
                  <h3>Aprillian, Leader Digital Marketing Team</h3>
                </div>
              </div>
            </a>
          </div>
          <?php endif; ?>
          <!-- <div class="col-md-3">
                  <div class="seemore_">
                    <h3><a href="/career">See More >></a></h3>
                  </div>
                </div> -->
        </div>
      </div>
    </div>
  </div>
</section>