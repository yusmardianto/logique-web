<style>
.mb--60 {
  margin-bottom: 60px;
}

.btn-banner-pattern {
  display: inline-block;
  color: #000;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  position: relative;
  font-size: 20px;
  border-radius: 10px;
  box-shadow: 0px 6px 14px 0px rgba(0, 0, 0, 0.14);
}

.btn-banner-pattern__wrapper {
  border: solid;
  display: inline-block;
  padding: 5px 5px 0 5px;
  border-radius: 10px;
}
@media (max-width: 767px) {
  .btn-banner-pattern {
    max-width: 300px;
    font-size: 18px;
  }
}

.btn-banner-pattern span {
  font-weight: 800 !important;
  width: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.btn-banner-pattern:hover {
  color: #000;
}
.contact__img-wrapper {
  position: relative;
  border-radius: 10px;
  overflow: hidden;
}
.contact__img {
  width: 100%;
}
.contact__text-wrapper {
  position: absolute;
  bottom: 25px;
  left: 25px;
  display: flex;
  align-items: center;
}
.contact__text {
  font-size: 20px;
  font-weight: 800;
  color: #000;
  margin-left: 15px;
  line-height: 30px;
}
.contact__icn {
  max-width: 40px;
  max-height: 40px;
}

</style>

<section class="container-fluid ">
  <div class="container__ container--max-width">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-10">
        <div class="row">
          <div class="col-md-6">
            <div class="text-center">
              <a class="btn-banner-pattern mb--60" style="max-width: 350px;" href="/case-study/">
                <img class="img-responsive" src="/img/career/bg-img/bg-contact.png" alt="Kontak Kami">
                <span>Lihat Studi Kasus</span>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-center">
              <a class="btn-banner-pattern mb--60" style="max-width: 350px;" href="/hubungi-kami.php"
                target="_blank" rel="noreferrer" onclick="ga('send', 'event', 'Button-Hubungi-Logique-Portofolio', 'Action-Click', 'Button-Hubungi-Logique-Portofolio-Label');">
                <img class="img-responsive" src="/img/career/bg-img/bg-lowongan.png" alt="Lamar Pekerjaan Sekarang">
                <span>Hubungi Kami</span>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="contact__img-wrapper mb--60">
              <a href="https://www.facebook.com/logique.id/" target="_blank" rel="noreferrer" aria-label="Facebook">
                <img class="contact__img" src="/img/career/bg-img/fb.jpg" alt="FB Page Logique">
                <div class="contact__text-wrapper">
                  <img class="contact__icn" src="/img/career/icon/fb-logo.png" alt="Facebook Logo">
                  <span class="contact__text">Logique Digital Indonesia</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact__img-wrapper mb--60">
              <a href="https://www.instagram.com/logiquedigital/" target="_blank" rel="noreferrer"
                aria-label="Instagram">
                <img class="contact__img" src="/img/career/bg-img/ig.jpg" alt="Instagram Page Logique">
                <div class="contact__text-wrapper">
                  <img class="contact__icn" src="/img/career/icon/ig-logo.png" alt="Instagram Logo">
                  <span class="contact__text">Logique Digital Indonesia</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact__img-wrapper mb--60">
              <a href="https://www.linkedin.com/company/13420656" target="_blank" rel="noreferrer"
                aria-label="LinkedIn">
                <img class="contact__img" src="/img/career/bg-img/linkedin.jpg" alt="Linkedin Page Logique">
                <div class="contact__text-wrapper">
                  <img class="contact__icn" src="/img/career/icon/linkedin-logo.png" alt="LinkedIn Logo">
                  <span class="contact__text">Logique Digital Indonesia</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>