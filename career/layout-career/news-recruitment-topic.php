<style>
.bg--f5f5f5 {
  background-color: #f5f5f5;
}

ul.news-list {
  list-style: none;
  font-family: 'Open Sans', sans-serif;
}

ul.news-list li {
  background-color: #fff;
  padding: 20px 0;
  box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.11);
}

ul.news-list li:not(:last-child) {
  margin-bottom: 30px;
}

.news-list__body .news-list__news-date {
  display: inline-block;
  min-width: 150px;
  font-weight: 600;
  margin-right: 40px;
  background: linear-gradient(-135deg, rgb(255, 231, 43) 0%, rgb(255, 202, 19) 100%);
  padding: 6px 18px;
  border-radius: 8px;
  border: 1px solid rgb(255, 224, 9);
  line-height: 25px;
  font-size: 16px;
}

.news-list__body p {
  font-size: 18px;
  color: rgb(53, 53, 53);
  line-height: 25px;
  margin-bottom: 20px;
  margin-top: 20px;
}

.news-list__body a {
  display: inline-block;
  color: rgb(205, 7, 7);
  font-size: 16px;
  font-style: italic;
  letter-spacing: 0.25px;
  line-height: 25px;
  text-align: right;
}

ul.news-list li a:hover {
  text-decoration: underline;
  color: rgb(140, 4, 4);
}

@media (min-width: 992px) {
  ul.news-list li {
    padding: 12px 0;
  }

  .news-list__body {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .news-list__body p {
    margin: 0;
  }

  .news-list__content {
    display: flex;
    align-items: center;
  }

  .news-list__body .news-list__news-date {
    display: inline-block;
  }

  .news-list__body a {
    margin-left: 15px;
    min-width: 110px;
    max-width: 110px;
  }
}
</style>
<?php
$rss = new DOMDocument();
$rss->load('https://www.logique.co.id/blog/feed/?tag=logique-digital-indonesia-id');
$feed = array();
foreach ($rss->getElementsByTagName('item') as $node) {
$item = array ( 
'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
);
array_push($feed, $item);
}
$limit = 5; 
?>
<section class="container-fluid">
  <div class="container--max-width --no-padding">
    <div class="row">
      <div class="col-sm-12 bg--f5f5f5 py--2-5em">
        <div class="row">
          <div class="col-sm-offset-1 col-sm-10">
            <h2 class="section-title mb--40">
              Kabar LOGIQUE
            </h2>
          </div>
        </div>
        <ul class="news-list">
          <?php
            
            for($x=0;$x<$limit;$x++) {
            $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
            $link = $feed[$x]['link'];
            $description = $feed[$x]['desc'];
            $date = date('d F Y', strtotime($feed[$x]['date']));
            // echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
            // echo '<small><em>Posted on '.$date.'</em></small></p>';
            // echo '<p>'.$description.'</p>';
           
          ?>
          <li class="row">
            <div class="col-sm-offset-1 col-sm-10">
              <div class="news-list__body">
                <div class="news-list__content">
                  <span class="news-list__news-date">
                    <?php echo $date ;?>
                  </span>
                  <p><?php echo $title ?></p>
                </div>
                <a href="<?php echo $link ?>" target="_blank" rel="noreferrer">Read more ></a>
              </div>
            </div>
          </li>
          <?php  } ?>
        </ul>
        <!-- <ul class="news-list">
          <li class="row">
            <div class="col-sm-offset-1 col-sm-10">
              <div class="news-list__body">
                <div class="news-list__content">
                  <span class="news-list__news-date">
                    21st Dec 2019
                  </span>
                  <p>Kami sedang mencari QA Lead. Segera daftarkan diri Anda sekarang.</p>
                </div>
                <a href="#" target="_blank" rel="noreferrer">Read more ></a>
              </div>
            </div>
          </li>
          <li class="row">
            <div class="col-sm-offset-1 col-sm-10">
              <div class="news-list__body">
                <div class="news-list__content">
                  <span class="news-list__news-date">
                    18th Dec 2019
                  </span>
                  <p>
                  Kami akan bergabung dengan event pencari kerja di Universitas presiden pada 2 Maret.
                  </p>
                </div>
                <a href="#" target="_blank" rel="noreferrer">Read more ></a>
              </div>
            </div>
          </li>
          <li class="row">
            <div class="col-sm-offset-1 col-sm-10">
              <div class="news-list__body">
                <div class="news-list__content">
                  <span class="news-list__news-date">
                    13th Dec 2019
                  </span>
                  <p>
                  Kami sedang membutuhkan dengan cepat lowongan kerja sebagai php programmer senior.
                  </p>
                </div>
                <a href="#" target="_blank" rel="noreferrer">Read more ></a>
              </div>
            </div>
          </li>
          <li class="row">
            <div class="col-sm-offset-1 col-sm-10">
              <div class="news-list__body">
                <div class="news-list__content">
                  <span class="news-list__news-date">
                    15th Nov 2019
                  </span>
                  <p>
                    We opened the urgent hiring of Senior PHP programmer position.
                  </p>
                </div>
                <a href="#" target="_blank" rel="noreferrer">Read more ></a>
              </div>
            </div>
          </li>
        </ul> -->
      </div>
    </div>
  </div>
</section>