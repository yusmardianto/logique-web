<style>
.bg--f5f5f5 {
  background-color: #f5f5f5;
}

ul.news-list {
  list-style: none;
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
  text-align: center;
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
  font-size: 13px;
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
    max-width: 150px;
  }
}
</style>
<?php
$rss = new DOMDocument();
 
$rss->load('http://www.logique.co.id/blog/category/recruitment/feed/');
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
   

  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
 
if (!empty($feed)){
  $count =  count($feed);
  if ($limit >= $count ) {
     $limit = $count;
  }  
?>

<section class="container-fluid">
  <div class="container--max-width --no-padding">
    <div class="row">
      <div class="col-sm-12 bg--f5f5f5 py--2-5em">
        <div class="row">
          <div class="col-sm-offset-1 col-sm-10">
            <h2 class="section-title mb--40 --black">
              HR / Recruitment Info
            </h2>
          </div>
        </div>
        <ul class="news-list">
          <?php
            //Tidak langsung integrasi dengan blog
            
            for($x=0;$x<$limit;$x++) {
            $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
            $link = $feed[$x]['link'];
            $description = $feed[$x]['desc'];
            $date = date('F d, Y', strtotime($feed[$x]['date']));
          ?>
          <li class="row">
            <div class="col-sm-offset-1 col-sm-10">
              <div class="news-list__body">
                <div class="news-list__content">
                  <span class="news-list__news-date">
                    <?php echo tgl_indo(date('Y-m-d', strtotime($feed[$x]['date']))) ;?>
                  </span>
                  <p><?php echo $title ?></p>
                </div>
                <a href="<?php echo $link ?>" target="_blank" rel="noreferrer">Masuk ke detail ></a>
              </div>
            </div>
          </li>
          <?php }   ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php } ?>
