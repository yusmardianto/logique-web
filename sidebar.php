<!-- NAVIGATION -->
<button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle" data-toggle="collapse"
    data-target="#myNavbar">
    <span class="icon-bar first"></span>
    <span class="icon-bar second"></span>
    <span class="icon-bar third"></span>
</button>
<div class="collapse navbar-collapse" id="myNavbar">
    <div class="backdrop-test"></div>
    <div class="logique-nav logique-nav--update logique-nav--update">
        <div class="margin-for-nav">
            <div class="text-center <?php if ($active === 'home') echo 'active' ?>">
                <a href="/">
                    <div class="img-home"></div>
                    Beranda
                </a>
            </div>
            <div class="text-center <?php if ($active === 'about') echo 'active' ?>">
                <a href="/logique.php">
                    <div class="img-about"></div>
                    Tentang Kami
                </a>
            </div>
            <div class="text-center <?php if ($active === 'portfolio') echo 'active' ?>">
                <a href="/portofolio.php">
                    <div class="img-portfolio"></div>
                    Portfolio
                </a>
            </div>
            <div class="text-center <?php if ($active === 'services') echo 'active' ?>">
                <a href="/layanan.php">
                    <div class="img-services"></div>
                    Layanan
                </a>
            </div>
            <div class="text-center <?php if ($active === 'product') echo 'active' ?>">
                <a href="/produk.php">
                    <div class="img-product"></div>
                    Produk
                </a>
            </div>
            <div class="text-center <?php if ($active === 'career') echo 'active' ?>">
                <a href="/career/">
                    <div class="img-career"></div>
                    Karir
                </a>
            </div>
            <div class="text-center <?php if ($active === 'contact') echo 'active' ?>">
                <a href="/hubungi-kami.php">
                    <div class="img-contact"></div>
                    Hubungi Kami
                </a>
            </div>
            <div class="text-center">
                <a href="https://www.logique.co.id/blog/" target="_blank" rel="noreferrer">
                    <div class="img-blog"></div>
                    Blog
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END NAVIGATION -->