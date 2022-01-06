<style>
.dm__links .links__item {
    position: relative;
    display: flex;
    flex-direction: column;
    background-size: cover;
    height: 425px;
    overflow: hidden;
    border-radius: 8px;
    padding: 25px;
    color: #000;
    box-shadow: none;
    transition: all ease-in-out .25s;
}

.dm__links .links__item:hover {
    box-shadow: 0px 29px 19px -16px rgba(0, 0, 0, 0.25)
}

.dm__links .links__item::before {
    content: "";
    position: absolute;
    bottom: -50px;
    left: 50%;
    background-color: rgba(255, 202, 0, .6);
    width: calc(100% + 50px);
    height: 240px;
    z-index: 0;
    transform: rotate(8deg) translateX(-50%);
}

.dm__links .links__item::after {
    content: "";
    position: absolute;
    bottom: 13px;
    right: -20px;
    background-color: #000;
    width: 58px;
    height: 58px;
    border-radius: 100%;
}

.dm__links .links__item > div {
    z-index: 0;
    padding-top: 65%;
}

.dm__links .links__item h3 {
    position: relative;
    width: max-content;
    font-weight: 800 !important;
}

.dm__links .links__item h3:after {
    position: absolute;
    content: "";
    height: 100%;
    width: 22px;
    top: 50%;
    left: calc(100% + 20px);
    transform: translateY(-45%);
    background: url('/../img/top/right-arrow.svg') center/contain no-repeat;
}

.dm__links .links__item  p {
    font-size: 14px;
}

@media (max-width: 1199.98px) {
    .dm__links .links__item::before {
        height: 280px;
    }
}

@media (max-width: 991.98px) {
    .dm__links .links__item h3 {
        font-size: 20px;
    }
    .dm__links .links__item  p {
        font-size: 14px;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .dm__links .links__item {
        height: 320px;
        padding: 10px;
    }
    .dm__links .links__item::after {
        width: 48px;
        height: 48px;
    }
    .dm__links .links__item::before {
        bottom: -150px;
    }
    .dm__links .links__item {
        justify-content: flex-end;
    }
    .dm__links .links__item > div {
        padding-top: unset;
        min-height: 125px;
    } 
}

@media (max-width: 767.98px) {
    .dm__links .links__item {
        margin-bottom: 20px;
    }
    .dm__links .links__item {
        padding: 25px;
    }
    .dm__links .links__item::before {
        bottom: -140px;
        transform: rotate(4deg) translateX(-50%);
    }
}
</style>

<section class="dm__links">
    <div class="container__">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <a href="/en/logique.php" class="links__item" style="background-image: url('/en/services/digital-marketing/img/img-seo-optimization/links-about.jpg')">
                    <div>
                        <h3>About Us</h3>
                        <p>
                            <strong>LOGIQUE</strong> Digital Indonesia is a leading IT consulting and Systems Development Company led by a Japanese entrepreneur based in Jakarta.

                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 col-xs-12">
                <a href="/en/portfolio.php" class="links__item" style="background-image: url('/en/services/digital-marketing/img/img-seo-optimization/links-ourwork.jpg')">
                    <div>
                        <h3>Our Work</h3>
                        <p><strong>LOGIQUE</strong> has developed a variety of Websites, Systems and Applications, as well as Digital Marketing Campaigns which have been proven successful in responding to the needs of our clients.
                    </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 col-xs-12">
                <a href="/en/contact.php" class="links__item" style="background-image: url('/en/services/digital-marketing/img/img-seo-optimization/links-contact.jpg')">
                    <div>
                        <h3>Contact Us</h3>
                        <p>Contact us now; we aim to provide you with only the best solutions.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>