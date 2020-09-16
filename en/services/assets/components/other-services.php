<style>
.dm__other-service .other-service__list {
    margin-top: 30px;
    margin-bottom: 30px;
}

.dm__other-service .other-service__list .list__item {
    color: #000;
}

.dm__other-service .other-service__list .list__item > img {
    width: 100%;
    position: relative;
    bottom: 0;
    box-shadow: none;
    border-radius: 10px;
    transition: all .2s;
}

.dm__other-service .other-service__list .list__item:hover > img {
    bottom: 10px;
    box-shadow: 0px 29px 19px -16px rgba(0, 0, 0, 0.25)
}

.dm__other-service .other-service__list .list__item:hover h4 {
    color: #ffc911;
}

.dm__other-service .other-service__list h4 {
    font-size: 22px;
    font-weight: 800 !important;
    margin-top: 10px;
    margin-bottom: 10px;
}

.dm__other-service .other-service__list p {
    font-size: 16px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

@media (max-width: 991.98px) {
    .dm__other-service .other-service__list h4 {
        font-size: 20px;
    }
}

@media (max-width: 767.98px) {
    .dm__other-service .other-service__list > div {
        margin-bottom: 20px;
    }
}
</style>

<section class="dm__other-service">
    <div class="container__">
        <h3 class="text-center">Other services</h3>
        <div class="row other-service__list">
            <div class="col-sm-3">
                <a href="/en/services/web-dev.php" class="list__item">
                    <!-- <img src="/en/services/assets/img/img-digital-marketing/other-web-dev.jpg" alt="" class="img-responsive"> -->
                    <h4>Website Production Service</h4>
                    <p><strong>LOGIQUE</strong> is a website development company that strives to raise your business.</p>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="/en/services/mobile-app-dev.php" class="list__item">
                    <!-- <img src="/en/services/assets/img/img-digital-marketing/other-mobile.jpg" alt="" class="img-responsive"> -->
                    <h4>Apps Development Service</h4>
                    <p><strong>LOGIQUE</strong> provide efficient solutions to your Mobile App for iOS & Android.</p>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="/en/services/system-dev.php" class="list__item">
                    <!-- <img src="/en/services/assets/img/img-digital-marketing/other-system-dev.jpg" alt="" class="img-responsive"> -->
                    <h4>Web System Development Service</h4>
                    <p><strong>LOGIQUE</strong> assist business goals through latest advance in web base technology.</p>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="/en/services/penetration-test.php" class="list__item">
                    <!-- <img src="/en/services/assets/img/img-digital-marketing/other-pentest.jpg" alt="" class="img-responsive"> -->
                    <h4>Penetration Testing Service</h4>
                    <p><strong>LOGIQUE</strong> will perform various security assessment to your website.</p>
                </a>
            </div>
        </div>
    </div>
</section>