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
    font-size: 20px;
    font-weight: 800 !important;
    margin-top: 10px;
    margin-bottom: 10px;
}

.dm__other-service .other-service__list p {
    font-size: 15px;
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
        <h3 class="text-center">その他のサービス</h3>
        <div class="row other-service__list">
            <div class="col-sm-3">
                <a href="/jp/services/web-dev.php" class="list__item">
                    <img src="/en/services/assets/img/img-digital-marketing/other-web-dev.jpg" alt="" class="img-responsive">
                    <h4>Webサイト制作</h4>
                    <p>インドネシア市場でコンバージョンの出る効果的なWebサイトを制作運用しています。</p>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="/jp/services/mobile-app-dev.php" class="list__item">
                    <img src="/en/services/assets/img/img-digital-marketing/other-mobile.jpg" alt="" class="img-responsive">
                    <h4>スマホアプリ開発</h4>
                    <p>iOS、Androidアプリの開発の他にPWAの開発も得意にしています。</p>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="/jp/services/system-dev.php" class="list__item">
                    <img src="/en/services/assets/img/img-digital-marketing/other-system-dev.jpg" alt="" class="img-responsive">
                    <h4>システム構築運用</h4>
                    <p>CRM、予約管理システム、ECサイト構築など様々なWebシステム開発が可能です。</p>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="/jp/services/penetration-test.php" class="list__item">
                    <img src="/en/services/assets/img/img-digital-marketing/other-pentest.jpg" alt="" class="img-responsive">
                    <h4>セキュリティ脆弱性検査</h4>
                    <p>WebサイトやWeb・モバイルAppのセキュリティテストを行い、脆弱性をレポートします。</p>
                </a>
            </div>
        </div>
    </div>
</section>