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
.lds-ellipsis {
  margin: 0 auto;
  display: block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-ellipsis div {
  position: absolute;
  top: 33px;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  background: #ffca13;
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
}
.lds-ellipsis div:nth-child(1) {
  left: 8px;
  animation: lds-ellipsis1 0.6s infinite;
}
.lds-ellipsis div:nth-child(2) {
  left: 8px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(3) {
  left: 32px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(4) {
  left: 56px;
  animation: lds-ellipsis3 0.6s infinite;
}
@keyframes lds-ellipsis1 {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes lds-ellipsis3 {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes lds-ellipsis2 {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(24px, 0);
  }
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
<li id="news-item-base" class="row" style="display: none;">
  <div class="col-sm-offset-1 col-sm-10">
    <div class="news-list__body">
      <div class="news-list__content">
        <span class="news-list__news-date">
        </span>
        <p class="news-list__news-title"></p>
      </div>
      <a class="news-list__news-link" href="#" target="_blank" rel="noreferrer">Masuk ke detail ></a>
    </div>
  </div>
</li>
<script>
  function loadRecruitment(){
    if(window.jQuery){
      var newsItemBase = $("#news-item-base");
      $.ajax({
        url: "https://www.logique.co.id/blog/wp-json/wp/v2/posts?categories=1832&per_page=5",
        beforeSend: function(){
          $("#loading-news").show();
        },
        complete: function(){
          $("#loading-news").hide();
        },
        success: function(lowongan){
          lowongan.map(function(list){
            var newsItemClone = newsItemBase.clone();
            newsItemClone.css('display', '');
            newsItemClone.find(".news-list__news-title").text(list.title.rendered);
            newsItemClone.find(".news-list__news-date").text(new Date(list.date).toLocaleString('id-ID', {dateStyle: 'long'}));
            newsItemClone.find(".news-list__news-link").prop('href', list.link);
            $(".news-list").append(newsItemClone);
          })
        }
      })
    }
  }
</script>

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
          <div id="loading-news" class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>        
        </ul>
      </div>
    </div>
  </div>
</section>

