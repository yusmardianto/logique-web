<div class="container-fluid">
    <div class="lang-logo--update-design">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-11 col-sm-offset-2 col-sm-9">
                    <a href="/en/"><img src="/img/logo.png" alt="Logo" class="img-responsive logo--update-design" /></a>
                    <div class="lang-logo__contact">
                        <a href="https://wa.me/62811870321" target="_blank" class="contact__banner">
                            <picture>
                                <source media="(min-width: 992px)" srcset="/img/contact-header-whatsapp.webp" type="image/webp">
                                <source media="(min-width: 992px)" srcset="/img/contact-header-whatsapp.png">
                                <source media="(min-width: 768px)" srcset="/img/contact-header-whatsapp-icon.webp" type="image/webp">
                                <source media="(min-width: 768px)" srcset="/img/contact-header-whatsapp-icon.png">
                                <source srcset="/img/contact-header-whatsapp.webp" type="image/webp">
                                <img src="/img/contact-header-whatsapp.png" alt="whatsapp" class="img-responsive">
                            </picture>
                        </a>
                        <a href="https://dokodemo-kerja.com/" target="_blank" class="contact__banner">
                            <picture>
                                <source media="(min-width: 992px)" srcset="/img/contact-header-dokodemo.webp" type="image/webp">
                                <source media="(min-width: 992px)" srcset="/img/contact-header-dokodemo.png">
                                <source media="(min-width: 768px)" srcset="/img/contact-header-dokodemo-icon.webp" type="image/webp">
                                <source media="(min-width: 768px)" srcset="/img/contact-header-dokodemo-icon.png">
                                <source srcset="/img/contact-header-dokodemo.webp" type="image/webp">
                                <img src="/img/contact-header-dokodemo.png" alt="dokodemo" class="img-responsive">
                            </picture>
                        </a>
                    </div>
                    <ul class="list-inline">
                        <li class="<?php if ($lang === "en") echo 'active' ?>"><a href="<?php echo $en_link ?>">EN</a></li>
                        <li class="<?php if ($lang === "id") echo 'active' ?>"><a href="<?php echo $id_link ?>">ID</a></li>
                        <li class="<?php if ($lang === "jp") echo 'active' ?>"><a href="<?php echo $jp_link ?>">JP</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>