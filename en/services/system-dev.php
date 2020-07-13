 <?php
 require_once("assets/form/fgcontact_systemdev.php");
 
 $formproc = new FGContactForm();
 
 //1. Add your email address here.
 //You can add more than one receipients.
 $formproc->AddRecipient(['info@logique.co.id']); //<<---Put your email address here
 
 //2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
 // and put it here
 $formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');
 
 //$formproc->AddFileUploadField('photo','jpg,jpeg,pdf,doc,docx',40960);
 
 if(isset($_POST['submitted']))
 {
	if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
		$secret = '6LcuHywUAAAAAEfJ-sZem8CzGVYIUMcxoT0jRhtW';
		// $secret = '6Lf3pA8UAAAAAEECs5-RC010LQ3ehBt76aKv8Rxb';
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
		// print_r($verifyResponse); exit;
		$responseData = json_decode($verifyResponse);
		if ($responseData->success) {
			if ($formproc->ProcessForm()) {
				$msg = "<div class='alert alert-success' style='font-size: 18px;margin-top: 10px;' id='msg' role='alert'>Thank you for sending us inquiry!</div>";
			}
		} else {
			$msg = "<div class='alert alert-warning' style='font-size: 18px;margin-top: 10px;' id='msg' role='alert'>reCAPTCHA verification failed, please try again.</div>";
		}
	} else {
		$msg = "<div class='alert alert-warning' style='font-size: 18px;margin-top: 10px;' id='msg' role='alert'>Please click the reCAPTCHA box.</div>";
	}
}
?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
     <meta name="description"
         content="As one of the top leading web developers in Indonesia, LOGIQUE has their own mechanism in terms of web systems creation, which includes the usage of latest technology, infrastructure planning, system security, and speed. Learn more about our web system development service here.">
     <meta name="keywords"
         content="web systems, web developer, web design, mobile app, mobile applications, web development, web services, web development services, web security, logique digital Indonesia">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
     <meta itemprop="name" content="PT. Logique Digital Indonesia">
     <meta property="og:title" content="Web System Development Service | LOGIQUE Digital Indonesia">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
     <meta property="og:description"
         content="As one of the top leading web developers in Indonesia, LOGIQUE has their own mechanism in terms of web systems creation, which includes the usage of latest technology, infrastructure planning, system security, and speed. Learn more about our web system development service here.">

     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     
    <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0096/6080.js" async="async"></script>
    <title>Web System Development Service | LOGIQUE Digital Indonesia</title>
     <link href="/css/bootstrap.min.css" rel="stylesheet">
     <link href="/css/style.css" rel="stylesheet">
     <link href="assets/css/style-systemdev.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
     <script src="https://use.fontawesome.com/df558bb4a1.js"></script>
     <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-105878648-1', 'auto');
		ga('send', 'pageview');
		
	</script>
 </head>

 <body>
     <style>
     .breadcrumb--update-design li.active a {
         color: #f5f5f5;
     }

     .breadcrumb--update-design {
         padding: 1em 15px;
     }

     @media only screen and (max-width: 414px) {
         .content-wrapper__ .--top {
             margin-top: 0 !important;
         }

         .breadcrumb--update-design li.active a {
             color: #000;
         }
     }
     </style>
     <div>
         <!-- NAVIGATION -->
         <div class="nav-lp">
             <button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle"
                 data-toggle="collapse" data-target="#myNavbar">
                 <span class="icon-bar first"></span>
                 <span class="icon-bar second"></span>
                 <span class="icon-bar third"></span>
             </button>
             <div class="collapse navbar-collapse" id="myNavbar">
                 <div class="backdrop-test"></div>
                 <div class="logique-nav">
                     <div class="margin-for-nav">
                         <div class="text-center ">
                             <a href="/en/">
                                 <div class="img-home"></div>
                                 Home
                             </a>
                         </div>
                         <div class="text-center">
                             <a href="/en/logique.php">
                                 <div class="img-about"></div>
                                 About Us
                             </a>
                         </div>
                         <div class="text-center">
                             <a href="/en/portfolio.php">
                                 <div class="img-portfolio"></div>
                                 Portfolio
                             </a>
                         </div>
                         <div class="text-center active">
                             <a href="/en/services.php">
                                 <div class="img-services"></div>
                                 Services
                             </a>
                         </div>
                         <div class="text-center">
                             <a href="/en/product.php">
                                 <div class="img-product"></div>
                                 Product
                             </a>
                         </div>
                         <div class="text-center">
                             <a href="/career/">
                                 <div class="img-career"></div>
                                 Career
                             </a>
                         </div>
                         <div class="text-center">
                             <a href="/en/contact.php">
                                 <div class="img-contact"></div>
                                 Contact us
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
         </div>
         <!-- END NAVIGATION -->
         <!-- HEADER -->
         <div class="container-fluid">
             <div class="row lang-logo--update-design">
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-offset-1 col-sm-11">
                             <div class="container">
                                 <ul class="list-inline">
                                     <li class="active"><a href="">EN</a></li>
                                     <li><a href="/layanan/pembuatan-sistem-web.php">ID</a></li>
                                     <li><a href="/jp/services/system-dev.php">JP</a></li>
                                 </ul>
                                 <a href="/en/"><img src="/../img/logo.png" alt="Logo"
                                         class="img-responsive logo--update-design" /></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- END HEADER -->
     </div>

     <header class="content-wrapper__ header">
         <div class="text-left --top">
             <div class="container" style="padding:0">
                 <div class="row">
                     <div class="col-sm-12">
                         <ol class="breadcrumb breadcrumb--update-design" itemscope itemtype="http://schema.org/BreadcrumbList">
                             <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                     href="/en/"><span itemprop="name">Home</span></a>
                                 <meta itemprop="position" content="1" />
                             </li>
                             <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                 <a itemprop="item" href="/en/services.php"><span itemprop="name">&nbsp;Services</span></a>
                                 <meta itemprop="position" content="2" />
                             </li>
                             <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                     itemprop="item"><span itemprop="name">&nbsp;Web
                                         System</span></a>
                                 <meta itemprop="position" content="3" />
                             </li>
                         </ol>
                     </div>
                 </div>
             </div>
         </div>

         <div class="container__" style="position:relative">
             <div class="row">
                 <div class="col-lg-offset-6 col-lg-6 col-sm-offset-6 col-sm-6 bg-header-txt">
                     <h1 class="text-left m-new">
                         Do you require professional expertise in System Design & App Development?
                     </h1>
                     <h3 class="text-left m-new">
                         Look no further: Logique is at your service!
                         We develop IT systems to an international standard with Japanese quality and
                         Indonesian speed and cost efficiency.
                     </h3>
                 </div>
             </div>
         </div>
     </header>

     <section class="style-1 mb-1" style="padding-bottom: 0;padding-top:20px;">
         <div class="container">
             <div class="row">
                 <div class="col-md-offset-1 col-md-10 text-center">
                     <h3>
                         LOGIQUE is a reputable Indonesian IT/Web Development company that aims to assist its clients
                         in directly reaching their targeted business goals through the latest advancements in web based
                         technology. We can build faster, more efficient web systems at a reasonable cost.
                     </h3>
                 </div>
             </div>
         </div>
     </section>
     <section class="style-2">
         <div class="container">
             <div class="row">
                 <div
                     class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-offset-2 col-sm-10 col-xs-offset-2 col-xs-10 text-right">
                     <div class="new5">
                         <h2 class="sect-3-txt mb-1">LOGIQUE’s System & Web Application Development Service</h2>
                         <hr class="gold-bar">
                         <h2 class="sect-3-txt mt-2">
                             We have extensive experience in developing systems for an Indonesian market,
                             from enterprise system development for automotive, financial & government organizations, to Agile
                             development for startup companies.
                         </h2>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="style-3">
         <div class="container">
             <div class="row">
                 <div class="col-md-3 justify-content-center">
                     <h3 class="new1 clearfix">Speedy & Flexible System Development</h3>
                     <img class="img img-responsive yellow-stripes" src="assets/img/img-systemdev/yellow-stripes.png" alt="">
                     <p class="new4">
                         Speed is a key factor in this current digital era. Using Agile,

                         we develop IT systems in a fast and flexible manner, without diminishing its overall quality. We organize
                         our development team based on your required preferences. Lab-type development is also available.
                     </p>
                 </div>
                 <div class="col-md-3 justify-content-center">
                     <h3 class="new1">High quality & Secure System</h3>
                     <img class="img img-responsive yellow-stripes" src="assets/img/img-systemdev/yellow-stripes.png" alt="">
                     <p class="new4">
                         We develop high quality systems. It is recommended to conduct security vulnerability testing prior to
                         delivery.
                         We can perform penetration tests, such as SQL injection,path traversal,
                         x-site scripting (among other services) in order to minimize cyber security risk.
                     </p>
                     <a href="../services/penetration-test.php" class="btn-contact-us-black-pent" style="margin: 12px 0">See more details about Security
                         Test</a>
                 </div>
                 <div class="col-md-3 justify-content-center">
                     <h3 class="new1">Extensive Indonesian Based Experience</h3>
                     <img class="img img-responsive yellow-stripes" src="assets/img/img-systemdev/yellow-stripes.png" alt="">
                     <p class="new4">
                         We develop systems for a wide range of Indonesian clientele within the Automobile,
                         Financial & Government sectors. With our experience in E-commerce, we understand Indonesia’s digital
                         business.
                         As such, we can easily grasp specific requirements you may have, and provide consulting with such
                         matters.
                     </p>
                 </div>
                 <div class="col-md-3 justify-content-center">
                     <h3 class="new1">Digital Infrastructure Design</h3>
                     <img class="img img-responsive yellow-stripes" src="assets/img/img-systemdev/yellow-stripes.png" alt="">
                     <p class="new4">
                         We design and build cloud servers both locally and internationally. Our professional
                         profile includes AWS, GCP and Alibaba Cloud in Indonesia.
                         Importantly, it should be noted that there have been many successful migrations to cloud
                         servers currently, in this digital era.
                     </p>
                 </div>
             </div>
         </div>
     </section>
     <section class="supposedly-style4">
         <div class="container">
             <div class="row">
                 <div class="container">
                     <div class="row" style="display: flex; flex-wrap: wrap;">
                         <div class="col-md-4">
                             <h2 class="new7" style="font-weight: 500!important;">Supporting Your Company through System and App
                                 Development upon Request.</h2>
                             <br>
                             <div class="justify-content-center">
                                 <img src="assets/img/img-systemdev/laptop-img.png" alt="" class="img img-responsive">
                             </div>
                         </div>
                         <div class="col-md-8">
                             <div class="row">
                                 <div class="col-md-12">
                                     <h4 class="dark-gold-title">Contract Based Development</h4>
                                     <div>
                                         <p class="h4">
                                             This method is effective for projects with clearly defined
                                             requirements. <br>
                                             We usually recommend working with Agile (Scrum) Development methods. </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <h4 class="dark-gold-title">Lab Type Outsourcing Development (Charge Based on Man-Days
                                         Worked)</h4>
                                     <div>
                                         <p class="h4">
                                             Effective in cases where the requirements / work scope has
                                             not yet been determined, but should start early on. Also effective in cases where
                                             the time-frame needs to be changed flexibly while in development. </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <h4 class="dark-gold-title">Monthly Flat-Rate Development</h4>
                                     <div>
                                         <p class="h4">
                                             In this case, the monthly fee is fixed. Every month we work
                                             according to the specifically set priorities within a predefined number of man-days.
                                             Suitable for maintenance and expansion projects, as conventionally,
                                             disagreements may arise about whether additional costs are necessary or not. This
                                             arrangement is often suitable, as the developer works based on a predefined
                                             monthly fee.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <h4 class="dark-gold-title">On-Site Development (Developer Dispatching)</h4>
                                     <div>
                                         <p class="h4">
                                             Through LOGIQUE’s affiliate company, we are able to dispatch
                                             developers, designers and testers (Among other specialists) to your location,
                                             so they can work on-site with your team.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
     <section class="style-4">
         <div class="container">
             <div class="row">
                 <div class="col-md-offset-4 col-md-4 text-center">
                     <div class="box-1">Case Study</div>
                 </div>
                 <div class="col-md-offset-5 col-md-7">
                     <div class="card">
                         <div class="row">
                             <div class="col-md-offset-1 col-md-10 m-t-10">
                                 <h4><b>JBA Indonesia | Auction Management System</b></h4>
                                 <p>
                                     JBA is the largest car and motorcycle auction house in Indonesia, supporting various system
                                     construction projects relating to web development and application, auction conduction,
                                     bidding
                                     application, online auctioning, mobile app inspection, and so on. As a complex system, it
                                     requires a systematic process of development, but nonetheless can always be efficiently and
                                     speedily produced
                                 </p>
                             </div>
                         </div>
                         <div class="row">
                             <div class="box-2">Main Technology: PHP, NodeJS, SocketIO, Android Native</div>
                         </div>
                     </div>
                     <div class="text-center btn-container-contact">
                         <a href="../case-study/jba-auction-system/" class="btn btn-contact-us-black">
                             See more details
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="other-stydycase section-style">
         <div class="container">
             <div class="row">
                 <div class="col-md-4 col-sm-12">
                     <div class="osc-item">
                         <div class="">
                             <img src="assets/img/img-systemdev/logo-caroline.png" alt="Caroline Logo" class="img img-responsive">
                         </div>
                         <h4>Rapid Development</h4>
                         <div class="osc-desc">
                             Built a core business system from scratch in just three months.
                             We built a market place to buy and sell used cars online.
                             <a href="../case-study/caroline-bidding-system/">
                                 See More
                             </a>
                         </div>
                         <div class="osc-worktodo">
                             Caroline-id.com, Marketplace Construction, Used Car For Sale, PHP, Laravel, HTML5
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-12">
                     <div class="osc-item">
                         <div class="">
                             <img src="assets/img/img-systemdev/logo-zutto.png" alt="Zutto Logo" class="img img-responsive">
                         </div>
                         <h4>Long-term PDCA Improvement System</h4>
                         <div class="osc-desc">
                             For about 5 years, ZuttoRide's CRM system has been developed from scratch with PDCA cycle.
                             The system building is now entering the 14<sup>th</sup> phase of improvement.
                             <a href="../case-study/zuttoride-customer-management-system/">
                                 See More
                             </a>
                         </div>
                         <div class="osc-worktodo">
                             ZuttoRide Indonesia, CRM System, Motorcycle Road Services, Motorcycle Insurance, PHP, CakePHP, HTML5
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-12">
                     <div class="osc-item">
                         <div class="">
                             <img src="assets/img/img-systemdev/logo-vip.png" alt="VIP Plaza Logo" class="img img-responsive">
                         </div>
                         <h4>Rebuild e-Commerce with PWA</h4>
                         <div class="osc-desc">
                             We’ve also rebuilt E-Commerce with PWA system. Succeeded in leading users visit directly into buying
                             with dynamic UI.
                             Supported using resource-based agile development.
                             <a href="../case-study/vip-plaza-progressive-web-app/">
                                 See More
                             </a>
                         </div>
                         <div class="osc-worktodo">
                             https://m.vipplaza.co.id/ e-Commerce website construction, e-Commerce Indonesia, PWA, NodeJS, ReactJS
                         </div>
                     </div>
                 </div>
             </div>
             <div class="list-study-container">
                 <h3>Our Other System Development Achievements</h3>
                 <ul class="circle-list">
                     <li>
                         Beneficial Point Management & E-Commerce System Development.<br>
                         <small class="text-muted">6months, AWS, Linux, MySQL, PHP Framework |
                             <a data-toggle="modal" data-target="#pop1" href="#">See More</a>
                         </small>
                     </li>
                     <!-- modal 1 -->
                     <div id="pop1" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Beneficial Point Management & E-Commerce System Development.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         A web-based system used to organize incentive points programs for employees of client
                                         companies.
                                         This system consists of several integrated sub-systems, namely: supplier systems
                                         (suppliers), user systems (users), and service providers admins.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         The development of this system takes 6 months.
                                         By bringing PHP platform with chosen frameworks, MySQL database, and hosting on Linux
                                         server on AWS cloud service, this system has proven to accommodate the business needs of
                                         incentive point program for company employees.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         To produce a system with high performance and stability, we developed an efficient
                                         approach to the application layer and database layer.
                                         Then on the server infrastructure side, we have implemented a modern server architecture
                                         and utilize the AWS autoscaling and loadbalancing features.
                                         So even though there are currently more than 10,000 active users spread across 3
                                         sub-systems, system performance remains stable and maintained.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         E-Commerce Development for MLM company.<br>
                         <small class="text-muted">6months, AWS, Linux, MySQL, PHP Framework |
                             <a data-toggle="modal" data-target="#pop2" href="#">See More</a>
                         </small>
                     </li>
                     <!-- modal 2 -->
                     <div id="pop2" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>E-Commerce Development for MLM company.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         MLM E-Commerce System with web-based technology.
                                         Consists of 3 modules, namely: admin management module, distributor module, and customer
                                         module.
                                         This system is equipped with features of postage calculations, profit margin calculation
                                         of distributors, distributors and users balance management, online registration, and
                                         purchase credit online.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         With the support of integration with payment gateway service, customer can do transaction
                                         with credit card and virtual account.
                                         This system is quite complex.
                                         A series of development process takes 6 months.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Automobil Auction Mission Critical System Development.<br>
                         <small class="text-muted">6months, AWS, Linux, MySQL, PHP Framework, Node.js |
                             <a data-toggle="modal" data-target="#pop3" href="#">See More</a>
                         </small>
                     </li>
                     <!-- modal 3 -->
                     <div id="pop3" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Automobil Auction Mission Critical System Development.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Is an automotive auction system with a high level of complexity.
                                         It consists of an integrated online auction system, an auction object inventory
                                         management system, a financial system, and integrated mobile inspection based vehicle
                                         inspection systems, and mobile apps-based bidding applications.
                                         This system is integrated with core system and other support systems, so that customers
                                         can enjoy the experience of auction in realtime, either through PC browser or via mobile
                                         apps.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         The system was developed with PHP platform with chosen frameworks, integrated with
                                         node.js technology, and using MySQL database.
                                         With an effective project management method, we successfully developed this application
                                         within 6 months. Performance of this system is quite critical.
                                         With a good application architecture design, as well as advanced server architecture
                                         design, the performance of this system is very stable, although the current user activity
                                         on this system is very active.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Mobile Application Development (Auction Bidding Android).<br>
                         <small class="text-muted">2months, Android, node.js, JAVA, AWS |
                             <a data-toggle="modal" data-target="#pop4" href="#">See More</a>
                         </small>
                     </li>
                     <!-- modal 4 -->
                     <div id="pop4" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Mobile Application Development (Auction Bidding Android).</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Android based application that we designed to facilitate the customers of auction
                                         companies in the online auction in realtime.
                                         The integration of android platform with node.js, as well as good UI/UX design, brings
                                         experience like auctioning directly at the auction location.
                                         With the support of high-performance APIs design, and Linux server hosting servers, as
                                         well as server architectures that have adopted the AWS autoscaling and loadbalancing
                                         features, the performance of these bidding applications is unquestionable.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Mobile Application (Vehicle Inspection / Scoring System).<br>
                         <small class="text-muted">4months, Android, node.js, JAVA, AWS |
                             <a data-toggle="modal" data-target="#pop5" href="#">See More</a>
                         </small>
                     </li>
                     <!-- modal 5 -->
                     <div id="pop5" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Mobile Application (Vehicle Inspection / Scoring System).</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         The system we developed is an android-based applications used for vehicle inspection
                                         activities before it is auctioned.
                                         More than 900 vehicle parts are inspected through this application.
                                         With the help of the application, the inspection and recording of the results can be done
                                         very efficiently.
                                         The results are stored directly in the core system in realtime.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         With a good UI/UX design, users of this application can easily perform the inspection
                                         process, no matter how many vehicle parts it involves.
                                         In terms of performance, this application is very stable.
                                         In addition to the android API designed with a good performance approach, this system is
                                         also supported by a good server architecture design and has taken advantage of AWS
                                         autoscaling and loadbalancing features.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         CRM System for Motor-Bike Road Servicer.<br>
                         <small class="text-muted">3months, PHP Framework, Payment Gateway, AWS |
                             <a data-toggle="modal" data-target="#pop6" href="#">See More</a>
                         </small>
                     </li>
                     <!-- modal 6 -->
                     <div id="pop6" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>CRM System for Motor-Bike Road Servicer.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         What we developed and are still keep developing is a CRM system for motor insurance.
                                         With this system, admin team can easily manage customer data, manage insurance period
                                         extensions, manage policy payments, manage dealer partners, manage policy prices, and
                                         manage insurance claim data from customers.
                                         While for customers, this system provides easiness in terms of demand for insurance
                                         extension, insurance planning by simulating the premium price based on the price of the
                                         vehicle.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         This system is built with PHP technology with chosen platforms, HTML-CSS3, Javascript,
                                         JQuery/Ajax, and MySQL database.
                                         This system is integrated with gateway payment service from leading service providers,
                                         making it easier for customers to transact using credit card and electronic money.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         CRM System for Auction Buyers.<br>
                         <small class="text-muted">2months, PHP Framework, MySQL, AWS |
                             <a data-toggle="modal" data-target="#pop7" href="#">See More</a>
                         </small>
                     </li>
                     <!-- modal 7 -->
                     <div id="pop7" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>CRM System for Auction Buyers.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         CRM system for auction company's customers (Buyers), that through this system, customers
                                         can check bills, get important information such as history of auction participation, and
                                         manage the reward points they get from purchase transactions that have been done.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         This system is developed with PHP platform with chosen frameworks, and using MySQL
                                         database. Customer can get real time information, because this system is connected to a
                                         real time core system via secured-API.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Component / Layout management Cloud System for Magazine Publisher.<br>
                         <small class="text-muted">2.5 months, JQuery, HTML5, PHP Framework, MySQL |
                             <a data-toggle="modal" data-target="#pop8" href="#">See More</a>
                         </small>
                     </li>
                     <!-- modal 8 -->
                     <div id="pop8" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Component / Layout management Cloud System for Magazine Publisher.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Web-based layout management system for setting the layout of advertising columns for
                                         print media from leading Japanese Free-paper publisher.
                                         With good UI/UX design support, this web application is very easy to use (user-friendly).
                                         With drag-and-drop feature, the user can set the ad layout as desired.
                                         This system also features export and import layout settings in the form of csv files.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         The system was developed with PHP technology with chosen framework, JQuery, and
                                         HTML5-CSS3.
                                         The process of developing this web application takes 3 months.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Used car market place development and operation.<br>
                         <small class="text-muted">2.5 months, JQuery, HTML5, PHP Framework, MySQL |
                             <a data-toggle="modal" data-target="#pop9" href="#">See More</a>
                         </small>
                     </li>
                     <!-- modal 9 -->
                     <div id="pop9" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Used car market place development and operation.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Used car marketplace system used by many second-hand car dealers in Jakarta and outside
                                         Jakarta.
                                         The system is developed with PHP technology with chosen frameworks and runs on Linux
                                         platform on AWS server.
                                         The development process of this web-based marketplace application takes 3 months.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         The user's response to this service continues to increase over time.
                                         Currently the system serves more than 30,000 visitors every day.
                                         Although traffic is quite solid, the system is very stable.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         In addition to web-based technology, the system is also integrated with mobile apps based
                                         on Android (Native) and IOS (Swift).
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Development system of a digital map.<br>
                         <small class="text-muted">3 months, PHP Framework, MySQL, Google map API, Java Script |
                             <a data-toggle="modal" data-target="#pop10" href="#">See More</a>
                         </small>
                     </li>
                     <!-- modal 10 -->
                     <div id="pop10" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Development system of a digital map.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Development system of a digital map.
                                         The system is used for mapping the progress of projects implemented in ASEAN countries.
                                         The system was developed with PHP technology with chosen framework, Google Maps API,
                                         HTML5-CSS3, and MySQL database.
                                         The process of this system development takes 3 months.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Vehicle C2C Auction System.<br>
                         <small class="text-muted">2 months, PHP Framework, MySQL, JQuery/Ajax, HTML5/CSS3 |
                             <a data-toggle="modal" data-target="#pop11" href="#">See More</a>
                         </small>
                     </li>
                     <!-- modal 11 -->
                     <div id="pop11" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Vehicle C2C Auction System.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         C2C auction system.
                                         There are about 2,000 vehicles auctioned and divided into 4 auctions, followed by about
                                         300 users each month.
                                         The system is developed with PHP technology with chosen frameworks, JQuery/Ajax,
                                         HTML5-CSS3, and MySQL database.
                                         The development of this system takes 2 months.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Secure CMS Development for public organization.<br>
                         <small class="text-muted">2 months, PHP Framework, MySQL | <a data-toggle="modal" data-target="#pop12"
                                 href="#">See More</a></small>
                     </li>
                     <!-- modal 12 -->
                     <div id="pop12" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Secure CMS Development for public organization.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         CMS web system for public organizations: The system was developed to manage the content
                                         of public organizations websites.
                                         With this system a web admin can easily manage the website content.
                                         This CMS web system is developed with PHP technology with chosen framework, HTML5-CSS3,
                                         javascript, JQuery, and MySQL database.
                                         This CMS web development process takes 2 months.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         E-commerce (e-book) CMS development.<br>
                         <small class="text-muted">2months, PHP Framework, HTML5/CSS3,MySQL | <a data-toggle="modal"
                                 data-target="#pop13" href="#">See More</a></small>
                     </li>
                     <!-- modal 13 -->
                     <div id="pop13" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>E-commerce (e-book) CMS development.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         E-Commerce CMS system used by a distributor of books from Japan.
                                         This system is developed with PHP technology with chosen framework, HTML5-CSS3, and MySQL
                                         database.
                                         With this web CMS, website administrator can easily manage the company's website content.
                                         This web development CMS takes 2 months.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Job Portal System Development.<br>
                         <small class="text-muted">2 months, PHP Framework, MySQL | <a data-toggle="modal" data-target="#pop14"
                                 href="#">See More</a></small>
                     </li>
                     <!-- modal 14 -->
                     <div id="pop14" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Job Portal System Development.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Job portal system built with PHP technology, HTML5-CSS3, and MySQL database.
                                         This job portal is hosted on the AWS Linux server. Companies can search and find job
                                         seekers and job seekers can see vacant and open jobs on the website.
                                         Candidates can apply for the position directly.
                                         The percentage of users of this service is the majority of Japanese companies in
                                         Indonesia.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Hiring (recruitment) Management System.<br>
                         <small class="text-muted">3months, PHP Framework, HTML5/CSS3,MySQL | <a data-toggle="modal"
                                 data-target="#pop15" href="#">See More</a></small>
                     </li>
                     <!-- modal 15 -->
                     <div id="pop15" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Hiring (recruitment) Management System.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Corporate website equipped with a recruitment system.
                                         Job seekers who are interested in working at this company can apply directly through the
                                         website.
                                         With a high level of security, the confidentiality of the applicant's data is more
                                         assured.
                                         The system is built with PHP technology, and uses the chosen frameworks, HTML5-CSS3, as
                                         well as the Ms.
                                         SQL Server database. The development process takes 3 months.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         A Fleet Management System for a Rent-a-car company.<br>
                         <small class="text-muted">6 Months, AWS, Linux, MySQL, SAP Connection, PHP Framework</small>
                     </li>
                     <!-- modal 16 -->
                     <!-- <div id="pop16" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-body">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>Hiring (recruitment) Management System.</h4><hr>
											<p class="p-padding-v-5-modal">
												Corporate website equipped with a recruitment system.
												Job seekers who are interested in working at this company can apply directly through the website.
												With a high level of security, the confidentiality of the applicant's data is more assured.
												The system is built with PHP technology, and uses the chosen frameworks, HTML5-CSS3, as well as the Ms.
												SQL Server database. The development process takes 3 months.
											</p>
										</div>
									</div>
								</div>
							</div> -->
                 </ul>
             </div>
         </div>
     </section>
     <section class="style-6">
         <div class="container">
             <div class="row">
                 <div class="col-md-5">
                     <h2 class="new6"><span class="underline2">Client</span><br>Testimonial</h2>
                 </div>
                 <div class="col-md-7">
                     <div class="row">
                         <div class="col-md-12">
                             <ol class="ol-position">
                                 <li class="new3 h4 mb-1">
                                     <h4 class="mt-2">
                                         As head of an IT department, I have supervised many system development projects. So far,
                                         there hasn’t been a company as flexible and capable as LOGIQUE. Although requests for
                                         alterations from the user department were frequent and inevitable, I was very satisfied
                                         with LOGIQUE’s ability to respond quickly in delivering high quality digital products.
                                         I’ve also asked LOGIQUE for system design and maintenance services, and am grateful for
                                         their punctual and error free response.
                                     </h4>
                                 </li>
                                 <li class="new3 h4 mb-1">
                                     <h4 class="mt-2">
                                         Since the termination of our contract with a previous system development company, LOGIQUE
                                         had taken over the growth and maintenance of our existing IT infrastructures. I like the
                                         flexibility and effective work they have done for us, as they have taken the initiative
                                         to improve our digital systems; including bringing to light various problems we were
                                         previously unaware of.
                                     </h4>
                                 </li>
                                 <li class="new3 h4 mb-1">
                                     <h4 class="mt-2">
                                         Through the current monthly flat-rate agreement we have with LOGIQUE, the work they have
                                         done so far has been speedy and efficient. Suffice to say, we are extremely happy with
                                         the high quality and cost effective results gained from their efforts. During our
                                         upcoming large-scale development project, I am seeking to implement the Lab Type
                                         development method on offer.
                                     </h4>
                                 </li>
                             </ol>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="style-7">
         <div class="row">
             <div class="container">
                 <div class="row" style="display: flex; flex-wrap: wrap;">
                     <div class="col-md-4">
                         <div class="justify-content-center">
                             <img src="assets/img/img-systemdev/key.png" alt="" class="img img-responsive">
                         </div>
                     </div>
                     <div class="col-md-8">
                         <div class="row">
                             <div class="col-md-12 mb-1">
                                 <h2 class="new2">Key Points for Successfully Developing a Website</h2>
                                 <h4>LOGIQUE aims to provide optimal services through delivering the best quality service for all
                                     of our clients. This is because LOGIQUE follows 3 key procedures which lead to the success of
                                     a project: </h4>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12 mb-1">
                                 <h4 class="bold">Experience</h4>
                                 <h4 class="">
                                     LOGIQUE has handled over 200 projects from various industries across Indonesia. Such
                                     experience is applied to each of the processes we take; which includes scheduling,
                                     requirement
                                     definition, infrastructure, design, deployment, and user training.
                                 </h4>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12 mb-1">
                                 <h4 class="bold">Speed and Flexibility</h4>
                                 <h4 class="">
                                     The pace at which businesses develop keeps getting faster. If it took a year, or even half a
                                     year
                                     to develop a system, the business still would struggle keeping up with environmental changes.
                                     LOGIQUE places a certain importance on speed.
                                 </h4>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12 mb-1">
                                 <h4 class="bold">Quality and Security</h4>
                                 <h4 class="">
                                     Through conducting our work with speed, quality should not be sacrificed. Any potential risks
                                     will be minimized and programming with have a high level of maintainability. We make sure
                                     that systems we develop will be delivered only after any risk to of security vulnerabilities
                                     have
                                     been taken care of.
                                 </h4>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <div class="text-center btn-container-contact">
                             <a href="/en/contact.php" class="btn btn-contact-us-black">
                                 Please feel free to contact us if you need system developments and operations in Indonesia
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
     <?php include '../footer.php' ?>
     <section class="tahap-pemesanan-2 text-center hidden-md hidden-lg" style="padding: 2em">Copyright 2018 Logique</section>

     <!-- <script src="//code.jquery.com/jquery-3.2.1.min.js"></script> -->
     <script src="/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
     <script src='https://www.google.com/recaptcha/api.js'></script>
     <script type="text/javascript">
     $(function() {
         $('.smooth').click(function() {
             if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname ==
                 this.hostname) {
                 var target = $(this.hash);
                 target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                 if (target.length) {
                     $('html, body').animate({
                         scrollTop: target.offset().top
                     }, 1000);
                     return false;
                 }
             }
         });
     });

     $('.min-h').matchHeight({
         byRow: false
     });
     </script>
 </body>

 </html>
