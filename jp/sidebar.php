<button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle" data-toggle="collapse"
    data-target="#myNavbar">
    <span class="icon-bar first"></span>
    <span class="icon-bar second"></span>
    <span class="icon-bar third"></span>
</button>
<div class="collapse navbar-collapse" id="myNavbar">
    <div class="backdrop-test"></div>
    <div class="logique-nav logique-nav--update in-jp">
        <div class="margin-for-nav">
            <div class="text-center <?php if ($active === 'home') echo 'active' ?>">
                <a href="/jp/">
                    <div class="img-home"></div>
                    家
                </a>
            </div>
            <div class="text-center <?php if ($active === 'about') echo 'active' ?>">
                <a href="/jp/logique.php">
                    <div class="img-about"></div>
                    会社概要
                </a>
            </div>
            <div class="text-center <?php if ($active === 'portfolio') echo 'active' ?>">
                <a href="/jp/portfolio.php">
                    <div class="img-portfolio"></div>
                    制作実績
                </a>
            </div>
            <div class="text-center <?php if ($active === 'services') echo 'active' ?>">
                <a href="/jp/services.php">
                    <div class="img-services"></div>
                    サービス
                </a>
            </div>
            <div class="text-center <?php if ($active === 'product') echo 'active' ?>">
                <a href="/jp/product.php">
                    <div class="img-product"></div>
                    プロダクト
                </a>
            </div>
            <div class="text-center <?php if ($active === 'career') echo 'active' ?>">
                <a href="/career/">
                    <div class="img-career"></div>
                    採用/<br>パートナー
                </a>
            </div>
            <div class="text-center <?php if ($active === 'contact') echo 'active' ?>">
                <a href="/jp/contact.php">
                    <div class="img-contact"></div>
                    お問い合わせ
                </a>
            </div>
            <div class="text-center">
                <a href="https://www.logique.co.id/blog/ja" target="_blank" rel="noreferrer">
                    <div class="img-blog"></div>
                    ブログ
                </a>
            </div>
        </div>
    </div>
</div>