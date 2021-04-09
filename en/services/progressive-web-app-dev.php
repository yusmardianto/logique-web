<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description"
        content="LOGIQUE is a pioneer company in Indonesian PWA development, having developed PWAs as for E-Commerce and E-Learning. The Best Progressive Web App (PWA) Development Service in Jakarta. Looking for the best PWA Developer? Contact LOGIQUE. Experienced & Professional.">
    <meta name="keywords"
        content="web developer jakarta, web development service, web developer company">
    <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
    <meta itemprop="name" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Indonesia's Best Progressive Web App (PWA) Development Service｜LOGIQUE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/en/services/progressive-web-app-dev.php">
    <meta property="og:image" content="https://www.logique.co.id/layanan/assets/img/img-pwa/img-banner-header.png">
    <meta property="og:description"
        content="LOGIQUE is a pioneer company in Indonesian PWA development, having developed PWAs as for E-Commerce and E-Learning. The Best Progressive Web App (PWA) Development Service in Jakarta. Looking for the best PWA Developer? Contact LOGIQUE. Experienced & Professional.">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="canonical" href="https://www.logique.co.id/en/services/web-dev.php" />  
    <title>Indonesia's Best Progressive Web App (PWA) Development Service｜LOGIQUE</title>
    
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- <link href="/css/style.css" rel="stylesheet"> -->
    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="/layanan/assets/css/style-pwa.css" rel="stylesheet">

    <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-105878648-1', 'auto');
	ga('send', 'pageview');

	</script>
</head>

<body class="wrapper wrapper--update-design wrapper--update-design-font">
    <!-- NAVIGATION -->
    <?php 
        // $active option are home, about, portfolio, services, product, career, contact
        $active = 'services';
        include($_SERVER['DOCUMENT_ROOT'].'/en/sidebar.php'); 
    ?>

    <?php 
        $lang = 'en';
        $en_link = '#';
        $id_link = '/layanan/pembuatan-progressive-web-app.php';
        $jp_link = '/jp/services/progressive-web-app-dev.php';
        include($_SERVER['DOCUMENT_ROOT'].'/en/header.php'); 
    ?>

    <div class="service service-pwa">

        <section class="pb--70px service-pwa__header">
            <div class="content-wrapper__">
                <div class="header-top">
                    <section class="--top">
                        <div class="container__" style="padding-top:0">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ol class="breadcrumb breadcrumb--update-design" itemscope itemtype="http://schema.org/BreadcrumbList">
                                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                            <a itemprop="item" href="/en/"><span itemprop="name">Home</span></a>
                                            <meta itemprop="position" content="1" />
                                        </li> 
                                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                            <a itemprop="item" href="/en/services.php"><span itemprop="name">&nbsp;Services</span></a>
                                            <meta itemprop="position" content="2" />
                                        </li>
                                        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                            <a itemprop="item"><span itemprop="name">&nbsp;Progressive Web App Development</span></a>
                                            <meta itemprop="position" content="3" />
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="container__">
                    <div class="row">
                        <div class="col-md-7 header__title">
                            <h1 class="fs--32px">PWA (Progressive Web Application) Development Service</h1>
                            <p><span class="ff--novocento-bold">LOGIQUE</span> is a pioneer in PWA development in Indonesia with the most experience in developing E-Commerce and E-Learning PWAs. Every project we have been engaged in has been completed in accordance with sufficient knowledge, experience and professional skill regarding PWA. </p>
                        </div>
                        <div class="col-md-5 header__img">
                            <picture>
                                <source srcset="/layanan/assets/img/img-pwa/img-banner-header.webp" type="image/webp">
                                <img src="/layanan/assets/img/img-pwa/img-banner-header.png" alt="" class="img-responsive">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb--60px service-pwa__contact">
            <div class="py--20px content-wrapper__">
                <div class="container__">
                    <div class="row row--flex align-items-center contact__content">
                        <div class="col-xs-12 col-md-6 content__image">
                            <div class="d-flex align-items-center">
                                <picture>
                                    <source srcset="/layanan/assets/img/img-pwa/icon/icon-contact.svg">
                                    <img src="/layanan/assets/img/img-pwa/icon/icon-contact.png" alt="hubungi kami" class="img-responsive ml--30px">
                                </picture>
                                <p class="pl--10px">Request a free consultation on PWA (Progressive Web App) development here</p>        
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="row row--flex justify-content-center">
                                <div class="col-sm-4 col-md-6">
                                    <a href="/en/contact.php" class="form-control btn btn--yellow">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="mb--60px">
            <div class="content-wrapper__">
                <div class="container__">
                    <p class="mb--60px">We have years of experience in developing and maintaining our customers’ websites, web systems and mobile applications within Indonesia. In recent years, we have been particularly focused on our services in PWA development. PWA is a type of technology that can greatly benefit both users and operators, making up for the shortcomings of mobile apps through the application of new web technologies. PWA is a type of web application that allows you to perform push notifications and install a home button on your smartphone.</p>

                    <div class="row row--flex">
                        <div class="col-xs-12 col-md-6">
                            <h3 class="main-title main-title--with-border-line">What is a PWA (Progressive Web App)?</h3>
                            <p class="mb--10px">A PWA (Progressive Web Application) is a web application that works like a Mobile (smartphone) native application but can be used by a web browser. It can run on multiple OS platforms, and the same code can be utilized as an app that runs on desktops, smartphones, and tablets. With the expansion of the Web browser function, APIs for accessing the terminal camera and GPS have also become available. The result is the development of a high-speed performance app that can be used offline as well as utilizing the ability to send push notifications without having to worry about any app store’s review approval.</p>
                            <p class="mb--20px">Since Google can crawl the contents in the web application, a PWA can be listed on a better position on the search result and get more visitors from search engines than a native mobile app.  </p>
                        </div>
                        <div class="col-xs-12 col-md-6 align-self-center">
                            <picture>
                                <source srcset="/layanan/assets/img/img-pwa/img-what-is-pwa.webp" type="image/webp">
                                <img src="/layanan/assets/img/img-pwa/img-what-is-pwa.jpg" alt="what is pwa" class="img-responsive mx--auto">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py--60px bg--l-gray service-pwa__character">
            <div class="content-wrapper__">
                <div class="container__">
                    <div class="">
                        <h3 class="mb--40px main-title main-title--with-square-point">PWA Features</h3>
                        <div class="mb--60px row row--flex align-items-center character__character-list">
                            <div class="col-xs-12 col-md-8">

                                <ul class="nav list-unstyled character-list__list" role="tablist">
                                    <li class="active">
                                        <a href="#character_discoverable" data-toggle="tab" data-illustration="discoverable" aria-selected="true">
                                            <h4 class="fs--16px fw--900">Discoverable</h4>
                                            <p class="fs--14px">In-app content will be indexed and targeted by search engines, so you can expect an influx of new visitors.</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#character_linkable" data-toggle="tab" data-illustration="linkable">
                                            <h4 class="fs--16px fw--900">Linkable</h4>
                                            <p class="fs--14px">Direct external links to in-app content.</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#character_independent" data-toggle="tab" data-illustration="independent">
                                            <h4 class="fs--16px fw--900">Network independent</h4>
                                            <p class="fs--14px">It utilizes abundant cache management functions and can be operated offline.</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#character_installable" data-toggle="tab" data-illustration="installable">
                                            <h4 class="fs--16px fw--900">Installable</h4>
                                            <p class="fs--14px">Can be installed directly from the website without going through the app store.</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#character_re_engageable" data-toggle="tab" data-illustration="re-engageable">
                                            <h4 class="fs--16px fw--900">Re-engageable</h4>
                                            <p class="fs--14px">You can incentivize users to return by clicking an icon on home screen and through push-notification.</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#character_responsive" data-toggle="tab" data-illustration="responsive">
                                            <h4 class="fs--16px fw--900">Responsive </h4>
                                            <p class="fs--14px">As long as using compatible browser, the size of device will not be an issue.</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#character_safe" data-toggle="tab" data-illustration="safe">
                                            <h4 class="fs--16px fw--900">Safe</h4>
                                            <p class="fs--14px">Through using an HTTPS protocol, access from unauthorized parties can be avoided.</p>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-xs-12 col-md-4 character-list__image">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="character_discoverable" role="tabpanel">
                                        <div class="image__illustration mx--auto" id="lottie"></div>
                                        <div class="mx--auto loader"></div>
                                    </div>
                                    <div class="tab-pane fade" id="character_linkable" role="tabpanel">
                                        <div class="image__illustration mx--auto" id="lottie2"></div>
                                        <div class="mx--auto loader"></div>
                                    </div>
                                    <div class="tab-pane fade" id="character_independent" role="tabpanel">
                                        <div class="image__illustration mx--auto" id="lottie3"></div>
                                        <div class="mx--auto loader"></div>
                                    </div>
                                    <div class="tab-pane fade" id="character_installable" role="tabpanel">
                                        <div class="image__illustration mx--auto" id="lottie4"></div>
                                        <div class="mx--auto loader"></div>
                                    </div>
                                    <div class="tab-pane fade" id="character_re_engageable" role="tabpanel">
                                        <div class="image__illustration mx--auto" id="lottie5"></div>
                                        <div class="mx--auto loader"></div>
                                    </div>
                                    <div class="overflow-hidden tab-pane fade" id="character_responsive" role="tabpanel">
                                        <div class="image__illustration mx--auto" id="lottie6"></div>
                                        <div class="mx--auto loader"></div>
                                    </div>
                                    <div class="overflow-hidden tab-pane fade" id="character_safe" role="tabpanel">
                                        <div class="image__illustration mx--auto" id="lottie7"></div>
                                        <div class="mx--auto loader"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <h3 class="mb--40px main-title main-title--with-square-point">The benefits of developing a Progressive Web App</h3>

                        <ul class="list-unstyled character__list-benefit">
                            <li>To increase visitors / users</li>
                            <li>Implementing an appropriately designed UX</li>
                            <li>To Increase engagement with users</li>
                            <li>Multi-platform</li>
                            <li>Installation barrier can be lowered</li>
                            <li>It is possible to reduce the maintenance cost</li>
                            <li>Highly compatible with many devices</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="my--40px pt--20px">
            <div class="content-wrapper__">
                <div class="container__">
                    <div class="mb--60px">
                        <h3 class="main-title main-title--with-border-line">Why Choose <span class="ff--novocento-bold">LOGIQUE</span> For Your PWA Development?</h3>
                        <p class="pb--20px">LOGIQUE has been focusing on PWA development from early on, becoming one of the only two Google-certified PWA developers in Indonesia in 2019. Specifically, the Company has experience with PWA development for E-Commerce and E-Learning. We have experienced many projects of re-developing from native apps to PWA. Employing many PWA specialists with abundant experience, So, you can confidently be assured and leave it all to us when it comes to PWA development; from the planning stage to operations. We carry out the development process first through utilizing a minimum viable product (MVP) as well as the application of Lean and Agile development methods.</p>
                    </div>

                    <div class="mb--40px">
                        <h3 class="main-title main-title--with-border-line"><span class="ff--novocento-bold">LOGIQUE</span>'s PWA Development</h3>
                        <p class="">We have chosen the agile development method in order to develop our products in a speedy and lean manner, and so as to be able to quickly listen to users, and to update products effectively, wherever appropriate. We don't want it to take months just to simply define requirements. We also have experience in development contracts where we charge according to the man-month resources put in, without the prior defining of the scope of development.</p>
                    </div>

                    <div class="mb--60px">
                        <div class="row row--flex">
                            <div class="col-xs-12 col-md-6">
                                <h3 class="my--20px fs--30px fw--900 text-center">Agile Development Process</h3>
                                <picture>
                                    <!-- <source srcset="/layanan/assets/img/img-pwa/img-agile.svg"> -->
                                    <img src="/layanan/assets/img/img-pwa/img-agile.png" alt="" class="img-responsive mx--auto mb--30px">
                                </picture>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <h3 class="mb--20px main-title main-title--with-square-point"><span class="ff--novocento-bold">LOGIQUE</span>'s PWA development method</h3>
                                
                                <ul class="pl--20px">
                                    <li class="mb--10px">Agile method from design to development</li>
                                    <li class="mb--10px">Speed is the most important</li>
                                    <li class="mb--10px">Manage the schedule and scope by running sprints properly</li>
                                    <li class="mb--10px">Create a prototype speedy from an idea and perform PoC</li>
                                    <li class="mb--10px">Create an MVP and run PDCA</li>
                                    <li class="mb--10px">Lean Improvement & growth hack</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mb--60px">
                        <h3 class="main-title main-title--with-border-line">Technical Approach</h3>
                        <p>PWA front-end development using JavaScript frameworks such as ReactJS, Angular, and Vue.js. The number of projects developed by Vue.js is getting more and more. Server-side development with Node.js and Express.js.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt--40px pb--80px bg--l-gray service-pwa__project">
            <div class="content-wrapper__">
                <div class="container__">
                    <div class="pb--60px">
                        <h3 class="main-title main-title--with-border-line">PWA Case Studies</h3>
                    </div>

                    <div class="mb--80px row row--flex project__item">
                        <div class="col-xs-12 col-sm-5 col-md-6">
                            <picture>
                                <source srcset="/layanan/assets/img/img-pwa/img-project-vip-plaza.webp" type="image/webp">
                                <img src="/layanan/assets/img/img-pwa/img-project-vip-plaza.png" alt="vip plaza" class="img-responsive mx--auto item__image">
                            </picture>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-6">
                            <h3 class="my--20px main-title main-title--with-square-point">VIP PLAZA</h3>
                            <p class="mb--20px">VIP Plaza is one of the leading players in Indonesian fashion e-commerce. The company sought to implement PWA technology so as to make searching for products such as clothing, shoes, watches and accessories easier, thereby improving the convenience of customers making purchases. They chose <span class="ff--novocento-bold">LOGIQUE</span> to take on the project. So, through the introduction of the Progressive Web App, VIP Plaza’s customers can now easily shop from their desktops, mobile devices, tablets, Android and iOS. Indeed, the new PWA has been shown to function much faster than the old E-Commerce system, allowing customers to enjoy a comfortable shopping experience, with the PWA system seeing significant improvements through an increased number of visitor and numerous other overall benefits.</p>
                        </div>
                    </div>

                    <div class="row row--flex project__item">
                        <div class="col-xs-12 col-sm-7 col-md-6">
                            <h3 class="my--20px main-title main-title--with-square-point">Klikhoreca</h3>

                            <p class="mb--20px">Klikhoreca is an E-Commerce platform that handles daily necessities (especially fresh foods such as seafood, vegetables, fruits, herbs, bread and meat). Previously operating offline, it recognized the potential to be had in developing one’s digital assets and thereby adapted to market trends through the use of PWAs regarding their online shopping services.</p>
                            <p class="mb--20px">The Klikhoreca PWA system is not only used to facilitate convenient shopping, but is also used in reaching a wider target market. By being easily accessed through one’s mobile device or desktop, anyone can buy fresh food from Klikhoreca at any time. With the development of a PWA, Klikhoreca have essentially started a new business (online sales) through sufficient access, gaining a high conversion rate in the process.</p>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-6">
                            <picture>
                                <source srcset="/layanan/assets/img/img-pwa/img-project-klikhoreca.webp" type="image/webp">
                                <img src="/layanan/assets/img/img-pwa/img-project-klikhoreca.png" alt="klikhoreca" class="img-responsive mx--auto item__image">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py--20px mb--60px service-pwa__portfolio">
            <div class="content-wrapper__">
                <div class="container__">
                    <div class="row row--flex justify-content-center">
                        <div class="col-md-3">
                            <a href="/en/portfolio.php" class="form-control btn btn--yellow">More Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb--60px service-pwa__other">
            <div class="content-wrapper__">
                <div class="container__">
                    <h3 class="main-title main-title--with-border-line">Other Services</h3>

                    <div class="row row--flex justify-content-center other__service">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <picture>
                                <source srcset="/layanan/assets/img/img-pwa/img-others-web.webp" type="image/webp">
                                <img src="/layanan/assets/img/img-pwa/img-others-web.png" alt="Website Production Service" class="img-responsive mb--25px">
                            </picture>
                            <a href="/en/services/web-dev.php" class="form-control btn btn--yellow">Website Production Service</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <picture>
                                <source srcset="/layanan/assets/img/img-pwa/img-others-system.webp" type="image/webp">
                                <img src="/layanan/assets/img/img-pwa/img-others-system.png" alt="Web System Development Service" class="img-responsive mb--25px">
                            </picture>
                            <a href="/en/services/system-dev.php" class="form-control btn btn--yellow">Web System Development Service</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <picture>
                                <source srcset="/layanan/assets/img/img-pwa/img-others-mobile.webp" type="image/webp">
                                <img src="/layanan/assets/img/img-pwa/img-others-mobile.png" alt="Apps Development Service" class="img-responsive mb--25px">
                            </picture>
                            <a href="/en/services/mobile-app-dev.php" class="form-control btn btn--yellow">Apps Development Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb--60px service-pwa__contact-form">
            <div class="content-wrapper__">
                <div class="container__">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <a href="/en/contact.php" class="form-control btn btn-contact-us-black">                            
                            Please contact LOGIQUE to know more about PWA Development                            
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?php include '../footer.php'; ?>

    <!-- <script src="//code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
    <script>
        // load js only when needed
        function lazyLoadJs(src) {
            const document = window.document;
            const body = document.body;
            const el = document.createElement("script");

            el.async = true;
            el.src = src;
            body.appendChild(el);
        }

        // trigger scrip lazyload
        $(".character-list__list a[data-toggle='tab']").on("show.bs.tab", function() {
            const animation_name = $(this).data("illustration");
            const animation_src = `/layanan/assets/js/js-pwa-${animation_name}.js`;

            const check_script = $('script').filter(function () {
                return ($(this).attr('src') == animation_src);
            }).length;

            // check whether the needed script is loaded
            if (check_script === 0) {
                lazyLoadJs(animation_src);
            }
        })
    </script>
    <script src="/layanan/assets/js/js-pwa-discoverable.js"></script>
</html>
