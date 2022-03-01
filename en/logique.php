<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description"
        content="About Us | A Jakarta based IT development company, offering digital services such as systems & website dev, digital marketing & SEO services.">
    <meta name="keywords"
        content="Logique About Us, IT developer Jakarta, IT developer Indonesia, IT development company">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="About Us | We Offer IT Development & Digital Services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/en/logique.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/logique-about.png">
    <meta property="og:description"
        content="About Us | A Jakarta based IT development company, offering digital services such as systems & website dev, digital marketing & SEO services.">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <title>About Us | We Offer IT Development & Digital Services</title>

    <link rel="canonical" href="https://www.logique.co.id/en/logique.php" />  

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/sidebar-update.css" >
    <link rel="stylesheet" href="/css/newstyle.css" >
    <link rel="stylesheet" href="/css/style-logique.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper wrapper--update-design wrapper--update-design-font">

        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'about';
            include($_SERVER['DOCUMENT_ROOT'].'/en/sidebar.php'); 
        ?>

        <!-- <div id="bgImg" class="others"><div class="img"></div></div> -->
        <!-- <div class="contain-video">
            <video poster="../img/video-img.png" id="bgvid" playsinline autoplay muted loop>
                <source src="../img/12377093.mp4" type="video/mp4">
            </video>
        </div>
        <div class="bg-white-opacity"></div> -->

        <?php 
            $lang = 'en';
            $en_link = '#';
            $id_link = '/logique.php';
            $jp_link = '/jp/logique.php';
            include($_SERVER['DOCUMENT_ROOT'].'/en/header.php'); 
        ?>

        <div class="content-wrapper__">
            <section class="--top">
                <div class="container__" style="padding:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="index.php"><span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp; About Us</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <h1 class="title-index">About Us</h1>
                                <hr class="title__yellow-line--center">
                                <p class="title__description">
                                LOGIQUE DIGITAL INDONESIA is a top Indonesian IT developer that aims to design, develop & manage a variety of high quality digital assets for your company, specialising in creating web-apps, digital systems, mobile applications and much more, catering to both a local and international clientele. We also provide digital marketing and SEO services for clients, among other IT / DX services and products.<br>
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-md-offset-2 col-md-8">
                                    <!-- SLIDER -->
                                    <div class="custombox__slider">

                                        <div class="custombox__custom-slider">
                                            <div id="profile" class="carousel slide" data-ride="carousel" data-interval="3000">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src="/img/slider5.jpg" alt="Web Developer LOGIQUE 5">
                                                        <div class="custombox__slider-text-wrapper">
                                                            <p class="custombox__slider-text">With over 7 years of experience in Indonesia, our team is ready to solve your IT problems.</p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img style="object-position:0 0" src="/img/banner-all-member.jpg"
                                                            alt="logique member">
                                                        <div class="custombox__slider-text-wrapper">
                                                            <p class="custombox__slider-text">We provide employee monitoring software so as to improve productivity. </p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img src="/img/slider4.jpg" alt="Web Developer LOGIQUE 4">
                                                        <div class="custombox__slider-text-wrapper">
                                                            <p class="custombox__slider-text">Our software conforms to a Japanese / International standard of quality, and services a wide range of global clients. 
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img style="object-position:0 0" src="/img/slider1.jpg"
                                                            alt="Web Developer LOGIQUE 1">
                                                        <div class="custombox__slider-text-wrapper">
                                                            <p class="custombox__slider-text">Consult with us, we can be your
                                                                partner and digital specialist to help improve your business.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#profile" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#profile" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="custombox__slider-btn">
                                            Providing one-stop IT services and Digital Marketing
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="principle">
                <div class="container__">
                    <div class="row">
                        <div class="col-md-3">
                            <h1 class="title-index">Principles of LOGIQUE</h1>
                            <hr class="title__yellow-line">
                            <br>
                            <a class="career-section__btn" href="portfolio.php">See Portfolio</a>
                        </div>

                        <div class="col-md-9">
                            <div class="principle">
                                <div class="principle__illus">
                                    <img src="../img/principle/bullseye.png" alt="bullseye">
                                    <img src="../img/principle/gear.png" alt="gear">
                                    <img src="../img/principle/shield.png" alt="shield">
                                    <img src="../img/principle/idea.png" alt="idea">
                                    <img src="../img/principle/maintenance.png" alt="maintenance">
                                </div>

                                <div class="principle__content">
                                    <p>LOGIQUE is a high quality System / Web Development Company located in Jakarta and Yogyakarta, and was founded by a Japanese entrepreneur. With a proven track record in dealing with large-scale enterprises, LOGIQUE guarantees the delivery of high quality IT solutions that fit our customer's requirements.<br><br>
                                    In an era where speed is essential, LOGIQUE values efficiency and agility, especially in Indonesia, a country of constant change and rapid growth. We strive to support our customers in meeting project deadlines and helping them achieve their business goals.<br><br>
                                    LOGIQUE provides one-stop IT / Digital marketing services for website design to developing complex enterprise systems and mobile apps. LOGIQUE frequently takes on new challenges without fearing change. <br><br>
                                    Our trustworthy development team is versatile, and can adapt their methods in order to develop systems / apps based on our client’s requirements. Therefore, we can adjust our style so as to provide you with a product of the highest value.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--gray" id="missionStatement">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="title-index">Mission Statement</h1>
                            <h1 class="title-index">Individual Support Leads to Overall Growth</h1>
                            <hr class="title__yellow-line"><br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="title-index--bold">Individual Support</h4><br>
                                    <p>LOGIQUE aims to assist the growth & digitization of our valued clientele. We do this by providing top quality IT & Digital Solutions, such as Web Development & Digital Marketing Services, for a variety of different businesses operating within Indonesia, both start-ups & successful well established companies.</p>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="title-index--bold">Overall Growth</h4><br>
                                    <p>We emphasise the individual success of our clients, and by doing so, seek to raise the overall growth of Indonesia’s expanding IT/DX development industry. By cultivating an IT friendly environment & through offering opportunities for entrepreneurial web & app developers to maximise their potential, we will succeed in contributing to Indonesia’s upward digital growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="career-section" id="careerOpportunity">
                <a class="career-section__btn" href="../career/">See Career Opportunity</a>
            </section>

            <section id="companyOverview">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="../img/company-overview.png" alt="company overview" style="width: 100%">
                        </div>
                        <div class="col-sm-8">
                            <h1 class="title-index">Company Overview</h1>
                            <hr class="title__yellow-line">
                            <ul class="company__content">
                                <li>Company Name</li>
                                <li class="company__bold">PT. LOGIQUE Digital Indonesia</li>
                                <hr class="company__divider">

                                <li>Service</li>
                                <li class="company__bold">IT Consultation, Website Creation, Design Making, System
                                    Development, Mobile App
                                    Development,
                                    Digital Marketing Consulting</li>
                                <hr class="company__divider">

                                <li>Director</li>
                                <li class="company__bold">Takashi Yoshitsugu</li>
                                <hr class="company__divider">

                                <li>Number of employees</li>
                                <li class="company__bold">80 (as of Nov 2020)</li>
                                <hr class="company__divider">

                                <li>Head Office Address</li>
                                <li class="company__bold">Ad Premier Building 19th Floor, Jalan Tb. Simatupang No. 5,
                                    Pasar Minggu, Jakarta
                                    12550,
                                    INDONESIA</li>
                                <hr class="company__divider">

                                <li>Phone</li>
                                <li class="company__bold">
                                    <i class="fa fa-phone"></i>&nbsp; +62(21) 2270 8935 / 36 <br>
                                    <i class="fa fa-whatsapp"></i>&nbsp; +62 811 870 321
                                </li>
                                <hr class="company__divider">

                                <li>Development Center</li>
                                <li class="company__bold">Yogyakarta ( Kledokan, Kota Yogyakarta )</li>
                                <hr class="company__divider">
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--black" id="directorMessage">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1 class="title-index--white">Director's Profile </h1>
                                    <hr class="title__yellow-line">
                                    <div class="director">
                                        <div class="director__img">
                                            <img src="/img/yoshi-2020.jpg" alt="Takashi Yoshitsugu" class="img-responsive" />
                                        </div>
                                        <div class="director__content">
                                            <hr class="title__white-line">
                                            <div>
                                                <h5>TAKASHI YOSHITSUGU, <span class="yellow">Director</span></h5><br>
                                                <p style="text-align: justify">Takashi Yoshitsugu was born in Tokyo, Japan in 1976. In 1999, he graduated from the Department of Management Science at Waseda University in Tokyo and possesses a wide range of experience in entrepreneurship and business, starting from the Japan Research Institute Inc. to consulting firms, among others. <br><br>
                                                In 2005, he founded his own e-commerce business and went on to establish a trading company and consultancy in Japan. Upon moving to Indonesia, he founded LOGIQUE in 2012.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h1 class="title-index--white">Message</h1>
                                    <hr class="title__yellow-line">
                                    <p class="director__message" style="text-align: justify">The name ‘LOGIQUE’ is derived from the Indonesian word ‘logika-ku’, which means ‘Our Logic.’ The idea is rooted in the basic principle of accomplishing our goals through the strength of our faiths, beliefs, and most importantly, our logic. Through this basic principal, we seek to maximize the mid and long term benefits of both parties, taking into account the dramatically evolving IT landscape in Southeast Asia. <br><br>
                                    Since 2012, we have assisted our clients in the fields of Web, SI and Digital Marketing within Indonesia through utilizing various IT and Web Technologies. Through these means, our sales have continued to grow every year. <br><br>
                                    In order to contribute more to Indonesia’s IT / Digital market, we are constantly striving to incorporate flexible working styles, such as remote working and shorter hours, thus accounting for overall employee happiness and efficiency.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="lgqDoes">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <h1 class="title-index">What LOGIQUE Does</h1>
                                <hr class="title__yellow-line--center">
                                <p class="title__description">We provide a wide array of IT centered services, ranging from web design and system / application development, to digital marketing. We have also created a Cloud HR management Tool to solve business problems in Indonesia. Feel free to contact us if you are interested in our services and products!
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="custombox__product-wrapper">
                                        <div class="custombox__product-list">
                                            <img class="custombox__product-list-img" src="/img/servicelist.png" alt="servicelist">
                                            <a href="services.php" class="custombox__btn-product">See Service
                                                List</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custombox__product-wrapper">
                                        <div class="custombox__product-list">
                                            <img class="custombox__product-list-img" src="/img/productlist.png" alt="productlist">
                                            <a href="product.php" class="custombox__btn-product">See Product
                                                List</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-5">
                            <h1 class="title-index" style="margin-bottom:0">Contact Logique</h1>
                            <p>if you need help with:</p>
                            <br>
                            <hr class="title__yellow-line">
                            <img src="../img/contact.png" style="width:100%" alt="contact">
                        </div>
                        <div class="col-sm-7">
                            <ul class="lgq-does__list">
                                <li>Developing a website / web system / mobile app</li>
                                <li>Changing an outsourcer / IT vendor / Digital Marketing</li>
                                <li>Outsourcing a website / system operations.</li>
                                <li>Increasing access to your website through SEO.</li>
                                <li>Organizing and running an online promotional strategy.</li>
                                <li>Searching for web server leasing and companies to manage them.</li>
                                <li>Implementing cloud HR management tools</li>
                                <li>Planning an IT / Digital strategy for your business</li>
                            </ul>
                            <a href="contact.php" class="btn btn-contact-us-black" style="width: auto">Contact Us Now</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <?php include 'footer.php';?>

    </div>
</body>

</html>