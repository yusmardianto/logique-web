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
    <meta name="description" content="As one of the top leading web developers in Indonesia, LOGIQUE has their own mechanism in terms of web systems creation, which includes the usage of latest technology, infrastructure planning, system security, and speed. Learn more about our web system development service here.">
	<meta name="keywords" content="web systems, web developer, web design, mobile app, mobile applications, web development, web services, web development services, web security, logique digital Indonesia">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
  <meta itemprop="name" content="PT. Logique Digital Indonesia">
	<meta property="og:title" content="Web System Development Service | LOGIQUE Digital Indonesia">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Logique">
	<meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
	<meta property="og:description" content="As one of the top leading web developers in Indonesia, LOGIQUE has their own mechanism in terms of web systems creation, which includes the usage of latest technology, infrastructure planning, system security, and speed. Learn more about our web system development service here.">

	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Web System Development Service | LOGIQUE Digital Indonesia</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
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
		<header class="header">

			<!-- NAVIGATION -->
			<div class="nav-lp">
				<button type="button" class="navbar-toggle collapsed" aria-label="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
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
								<a href="/en/joinus.php">
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
			<!-- NAVIGATION -->

			<div class="container" style="position:relative">
				<div class="row">
					<!-- <div class="col-md-12">
						<a href="/" target="_blank">
							<div class="logo-header">
								<img src="assets/img/img-systemdev/webdev/logo.png" alt="Fitur Perusahaan" class="img-responsive">
							</div>
						</a>
					</div> -->
				</div>
				<div class="row">
					<div class="language-btn">
						<ul class="list-inline">
							<li class="active"><a href="#">EN</a></li>
							<li><a href="/layanan/pembuatan-sistem-web.php">ID</a></li>
							<li><a href="/jp/services/system-dev.php">JP</a></li>
						</ul>
					</div>
					<div class="col-md-offset-7 col-md-5 m-t-10em">
						<h1 class="text-left m-new">Need Web Systems Development? LOGIQUE is at your service!</h1>
					</div>
				</div>
			</div>
		</header>
		<section class="style-1" style="padding-bottom: 0;padding-top:20px;">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h2>
							LOGIQUE has been known as the reputable IT/Web System Developer in Indonesia, helping clients reach their business target and goals through the latest and advanced web technology. 
							We can build your web system faster, more efficient, and at reasonable cost. 
							Feel free to contact us.
						</h2>
					</div>
				</div>
			</div>
		</section>
		<section class="style-2">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-7 col-md-5">
						<h2 class="new5">LOGIQUE’s System & Web Application Development Service</h2>
					</div>
				</div>
			</div>
		</section>
		<section class="style-3">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h3 class="new1">[The Use of Latest & Cutting-Edge Technology]</h3>
						<p class="new4">
							We can deal with wide range of system development fields from work systems such as Financial Management & HR Management, to CMS, E-Commerce Site Creation, Survey System Development, Servers, Infrastructure, etc. 
							We build a system that is fast, flexible, and high on long term performance by incorporating new and fully developed technologies into every step of the process.
						</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Infrastructure Design & Construction]</h3>
						<p class="new4">
							We design and build cloud servers in Indonesia and abroad. 
							We have abundant results such as AWS in Singapore Region and Ali Cloud in Indonesia. 
							We also provide server maintenance application, and performance & tuning services. 
							There are also many successful migrations from on-premises servers to cloud servers.
						</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Secure System Construction]</h3>
						<p class="new4">
							It is recommended to conduct security vulnerability testing in addition to regular testing prior to delivery. 
							We perform penetration tests such as SQL injection, path traversal, cross site scripting, etc., to minimize risk.
						</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Quick, Precise, & Flexible Development]</h3>
						<p class="new4">
							Our progress is based on agile development. 
							We always strive to provide optimal service as efficient as possible without reducing quality. 
							We build trust with our clients and lead our company to develop with speed & flexibility to any request or change that you want. 
							You will obtain results just as you desire in a short time.
						</p>
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
										JBA is the largest car & motorcycle auction house in Indonesia. 
										We have supported a number of system construction projects such as web development & application, auction conductor system, bidding application, online auction, mobile application inspection, financial system, and so on. 
										As a critical system, it requires error-free development, but at the same time we have experienced many challenging projects that require speed. 
										We have regular meetings and constantly improving the existing system.
									</p>
								</div>
							</div>
							<div class="row">
								<div class="box-2">Main Technology: PHP, NodeJS, SocketIO, Android Native</div>
							</div>
						</div>
						<div class="text-center btn-container-contact"  >
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
					<div class="col-sm-4">
						<div class="osc-item">
							<div class="">
								<img src="assets/img/img-systemdev/logo-caroline.png" alt="Caroline Logo">
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
					<div class="col-sm-4">
						<div class="osc-item">
							<div class="">
								<img src="assets/img/img-systemdev/logo-zutto.png" alt="Zutto Logo">
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
					<div class="col-sm-4">
						<div class="osc-item">
							<div class="">
								<img src="assets/img/img-systemdev/logo-vip.png" alt="VIP Plaza Logo">
							</div>
							<h4>Rebuild e-Commerce with PWA</h4>
							<div class="osc-desc">
								We’ve also rebuilt E-Commerce with PWA system. Succeeded in leading users visit directly into buying with dynamic UI. 
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
						      	<h4>Beneficial Point Management & E-Commerce System Development.</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	A web-based system used to organize incentive points programs for employees of client companies. 
						        	This system consists of several integrated sub-systems, namely: supplier systems (suppliers), user systems (users), and service providers admins.
						        </p>
						        <p class="p-padding-v-5-modal">
						        	The development of this system takes 6 months. 
						        	By bringing PHP platform with chosen frameworks, MySQL database, and hosting on Linux server on AWS cloud service, this system has proven to accommodate the business needs of incentive point program for company employees.
						        </p>
						        <p class="p-padding-v-5-modal">
						        	To produce a system with high performance and stability, we developed an efficient approach to the application layer and database layer. 
						        	Then on the server infrastructure side, we have implemented a modern server architecture and utilize the AWS autoscaling and loadbalancing features. 
						        	So even though there are currently more than 10,000 active users spread across 3 sub-systems, system performance remains stable and maintained.
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
						      	<h4>E-Commerce Development for MLM company.</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	MLM E-Commerce System with web-based technology. 
						        	Consists of 3 modules, namely: admin management module, distributor module, and customer module. 
						        	This system is equipped with features of postage calculations, profit margin calculation of distributors, distributors and users balance management, online registration, and purchase credit online.
						        </p>
						        <p class="p-padding-v-5-modal">
						        	With the support of integration with payment gateway service, customer can do transaction with credit card and virtual account. 
						        	This system is quite complex. 
						        	A series of development process takes 6 months.
						        </p>
						      </div>
						    </div>
						  </div>
						</div>
						<li>
							Automobil Auction Mission Critical System Development.<br>
							<small class="text-muted">6months, AWS, Linux, MySQL, PHP Framework, Node.js  | 
								<a data-toggle="modal" data-target="#pop3" href="#">See More</a>
							</small>
						</li>
						<!-- modal 3 -->
						<div id="pop3" class="modal fade" role="dialog">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button type="button" class="close" data-dismiss="modal">&times;</button>
						      	<h4>Automobil Auction Mission Critical System Development.</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	Is an automotive auction system with a high level of complexity. 
						        	It consists of an integrated online auction system, an auction object inventory management system, a financial system, and integrated mobile inspection based vehicle inspection systems, and mobile apps-based bidding applications. 
						        	This system is integrated with core system and other support systems, so that customers can enjoy the experience of auction in realtime, either through PC browser or via mobile apps. 
						        </p>
						        <p class="p-padding-v-5-modal">
						        	The system was developed with PHP platform with chosen frameworks, integrated with node.js technology, and using MySQL database. 
						        	With an effective project management method, we successfully developed this application within 6 months. Performance of this system is quite critical. 
						        	With a good application architecture design, as well as advanced server architecture design, the performance of this system is very stable, although the current user activity on this system is very active.
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
						      	<h4>Mobile Application Development (Auction Bidding Android).</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	Android based application that we designed to facilitate the customers of auction companies in the online auction in realtime. 
						        	The integration of android platform with node.js, as well as good UI/UX design, brings experience like auctioning directly at the auction location. 
						        	With the support of high-performance APIs design, and Linux server hosting servers, as well as server architectures that have adopted the AWS autoscaling and loadbalancing features, the performance of these bidding applications is unquestionable.
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
						      	<h4>Mobile Application (Vehicle Inspection / Scoring System).</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	The system we developed is an android-based applications used for vehicle inspection activities before it is auctioned. 
						        	More than 900 vehicle parts are inspected through this application. 
						        	With the help of the application, the inspection and recording of the results can be done very efficiently. 
						        	The results are stored directly in the core system in realtime. 
						        </p>
						        <p class="p-padding-v-5-modal">
						        	With a good UI/UX design, users of this application can easily perform the inspection process, no matter how many vehicle parts it involves. 
						        	In terms of performance, this application is very stable. 
						        	In addition to the android API designed with a good performance approach, this system is also supported by a good server architecture design and has taken advantage of AWS autoscaling and loadbalancing features.
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
						      	<h4>CRM System for Motor-Bike Road Servicer.</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	What we developed and are still keep developing is a CRM system for motor insurance. 
						        	With this system, admin team can easily manage customer data, manage insurance period extensions, manage policy payments, manage dealer partners, manage policy prices, and manage insurance claim data from customers. 
						        	While for customers, this system provides easiness in terms of demand for insurance extension, insurance planning by simulating the premium price based on the price of the vehicle.
						        </p>
						        <p class="p-padding-v-5-modal">
						        	This system is built with PHP technology with chosen platforms, HTML-CSS3, Javascript, JQuery/Ajax, and MySQL database. 
						        	This system is integrated with gateway payment service from leading service providers, making it easier for customers to transact using credit card and electronic money.
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
						      	<h4>CRM System for Auction Buyers.</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	CRM system for auction company's customers (Buyers), that through this system, customers can check bills, get important information such as history of auction participation, and manage the reward points they get from purchase transactions that have been done.
						        </p>
						        <p class="p-padding-v-5-modal">
						        	This system is developed with PHP platform with chosen frameworks, and using MySQL database. Customer can get real time information, because this system is connected to a real time core system via secured-API.
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
						      	<h4>Component / Layout management Cloud System for Magazine Publisher.</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	Web-based layout management system for setting the layout of advertising columns for print media from leading Japanese Free-paper publisher. 
						        	With good UI/UX design support, this web application is very easy to use (user-friendly). 
						        	With drag-and-drop feature, the user can set the ad layout as desired. 
						        	This system also features export and import layout settings in the form of csv files. 
						        </p>
						        <p class="p-padding-v-5-modal">
						        	The system was developed with PHP technology with chosen framework, JQuery, and HTML5-CSS3. 
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
						      	<h4>Used car market place development and operation.</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	Used car marketplace system used by many second-hand car dealers in Jakarta and outside Jakarta. 
						        	The system is developed with PHP technology with chosen frameworks and runs on Linux platform on AWS server. 
						        	The development process of this web-based marketplace application takes 3 months.
						        </p>
						        <p class="p-padding-v-5-modal">
						        	The user's response to this service continues to increase over time. 
						        	Currently the system serves more than 30,000 visitors every day. 
						        	Although traffic is quite solid, the system is very stable.
						        </p>
						        <p class="p-padding-v-5-modal">
						        	In addition to web-based technology, the system is also integrated with mobile apps based on Android (Native) and IOS (Swift).
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
						      	<h4>Development system of a digital map.</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	Development system of a digital map. 
						        	The system is used for mapping the progress of projects implemented in ASEAN countries. 
						        	The system was developed with PHP technology with chosen framework, Google Maps API, HTML5-CSS3, and MySQL database. 
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
						      	<h4>Vehicle C2C Auction System.</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	C2C auction system. 
						        	There are about 2,000 vehicles auctioned and divided into 4 auctions, followed by about 300 users each month. 
						        	The system is developed with PHP technology with chosen frameworks, JQuery/Ajax, HTML5-CSS3, and MySQL database. 
						        	The development of this system takes 2 months.
						        </p>
						      </div>
						    </div>
						  </div>
						</div>
						<li>
							Secure CMS Development for public organization.<br>
							<small class="text-muted">2 months, PHP Framework, MySQL | <a data-toggle="modal" data-target="#pop12" href="#">See More</a></small>
						</li>
						<!-- modal 12 -->
						<div id="pop12" class="modal fade" role="dialog">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button type="button" class="close" data-dismiss="modal">&times;</button>
						      	<h4>Secure CMS Development for public organization.</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	CMS web system for public organizations: The system was developed to manage the content of public organizations websites. 
						        	With this system a web admin can easily manage the website content. 
						        	This CMS web system is developed with PHP technology with chosen framework, HTML5-CSS3, javascript, JQuery, and MySQL database. 
						        	This CMS web development process takes 2 months.
						        </p>
						      </div>
						    </div>
						  </div>
						</div>
						<li>
							E-commerce (e-book) CMS development.<br>
							<small class="text-muted">2months, PHP Framework, HTML5/CSS3,MySQL | <a data-toggle="modal" data-target="#pop13" href="#">See More</a></small>
						</li>
						<!-- modal 13 -->
						<div id="pop13" class="modal fade" role="dialog">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button type="button" class="close" data-dismiss="modal">&times;</button>
						      	<h4>E-commerce (e-book) CMS development.</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	E-Commerce CMS system used by a distributor of books from Japan. 
						        	This system is developed with PHP technology with chosen framework, HTML5-CSS3, and MySQL database. 
						        	With this web CMS, website administrator can easily manage the company's website content. 
						        	This web development CMS takes 2 months.
						        </p>
						      </div>
						    </div>
						  </div>
						</div>
						<li>
							Job Portal System Development.<br>
							<small class="text-muted">2 months, PHP Framework, MySQL | <a data-toggle="modal" data-target="#pop14" href="#">See More</a></small>
						</li>
						<!-- modal 14 -->
						<div id="pop14" class="modal fade" role="dialog">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-body">
						      	<button type="button" class="close" data-dismiss="modal">&times;</button>
						      	<h4>Job Portal System Development.</h4><hr>
						        <p class="p-padding-v-5-modal">
						        	Job portal system built with PHP technology, HTML5-CSS3, and MySQL database. 
						        	This job portal is hosted on the AWS Linux server. Companies can search and find job seekers and job seekers can see vacant and open jobs on the website. 
						        	Candidates can apply for the position directly. 
						        	The percentage of users of this service is the majority of Japanese companies in Indonesia.
						        </p>
						      </div>
						    </div>
						  </div>
						</div>
						<li>
							Hiring (recruitment) Management System.<br>
							<small class="text-muted">3months, PHP Framework, HTML5/CSS3,MySQL | <a data-toggle="modal" data-target="#pop15" href="#">See More</a></small>
						</li>
						<!-- modal 15 -->
						<div id="pop15" class="modal fade" role="dialog">
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
						</div>
					</ul>
				</div>
			</div>
		</section>
		<section class="style-6">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1 class="new6"><span class="underline2">Client</span><br>Testimonial</h1>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: How did the creation of this system begin?</h4>
								<p>Client: We used to do a lot of things manually. With many vehicles that we have to auction at various branches in Indonesia and the high interest from customers, it’s certainly becoming more difficult for us to handle. It crossed our mind that there was a need for an IT system that helped our business as a whole so as to increase company profits.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: What is the impact that is directly felt after using the system made by LOGIQUE?</h4>
								<p>Client: The impact is enormous, when everything is well-automated, we feel that the work we do is far more effective and efficient. In terms of risk, recording on books that may be damaged or lost can be avoided by the current system. In addition, we also make a positive contribution to the surrounding environment by reducing the use of paper that we have been doing so far.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: What is your collaboration experience with LOGIQUE in making this system?</h4>
								<p>Client: We think the LOGIQUE team is really filled with people who are experts and experienced in their fields. I cannot imagine how our complex business processes can be made into a comprehensive system including small processes that cannot be missed so that everything can be fulfilled. We are very satisfied with LOGIQUE's performance with the team and recommend their services to all parties in need.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="style-7">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-4 col-md-7">
						<div class="row">
							<div class="col-md-9">
								<h2 class="new2">Key Points for Successful Web Systems Developments</h2>
								<div class="new2-div">LOGIQUE always provides optimal service by prioritizing the best quality for all of our clients. That is because LOGIQUE has 3 key points which are the main essences in the success of a project:</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Experiences</h4>
								<p>
									LOGIQUE has handled more than 200 projects from various industries in Indonesia. 
									This experience applies to each process, such as scheduling, requirement definition, infrastructure design, deploy, and user training.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Speed & Flexibility</h4>
								<p>
									The speed of business keeps getting faster and faster. 
									If it takes 6 months or 1 year to develop a system, the business can’t keep up with the environmental changes. 
									LOGIQUE places importance on speed. 
									Consensus requirements often take time but will lead you to move forward.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Quality & Security</h4>
								<p>
									With high speed, quality shouldn’t be sacrificed. 
									There will be few problems and programming will have high maintainability with standardized development. 
									We make sure the system developed will be delivered after we minimize the risk of security vulnerabilities.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center btn-container-contact" >
					<a href="/en/contact.php" class="btn btn-contact-us-black">
						Please feel free to contact us if you need system developments and operations in Indonesia
					</a>
				</div>
			</div>
		</section>

		<section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
		<footer class="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2 style="margin-top: 0">Contact Logique</h2>
						<a href="/" target="_blank"><img src="assets/img/img-systemdev/logo.png" alt="Fitur Perusahaan" class="cs-custom"></a>
						<div class="m-t-10 text-left">LOGIQUE DIGITAL INDONESIA<br>
						Ad Premier Building 19th Floor. <br>
						Jalan Tb. Simatupang No. 5 Ragunan, <br>
						Ps. Minggu, Jakarta Selatan, <br>Indonesia 12550</div>
						<div><i class="fa fa-phone fa-lg" style="padding-right: 5px"></i> 021) 22708935 / 36 <br><i class="fa fa-whatsapp fa-lg" style="padding-right: 5px"></i> 0811870321</div>
						<br/>
						<div class="row">
							<div class="col-xs-6">
								<div class="link-footer-webdev">
									<a href="/index.php" target="_blank">Beranda</a>
									<a href="/tentang-kami.php" target="_blank">About Me</a>
									<a href="/portofolio.php" target="_blank">Portofolio</a>
									<a href="/layanan.php" target="_blank">Services</a>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="link-footer-webdev">
									<a href="/karir.php" target="_blank">Carreer</a>
									<a href="/career/" target="_blank">Join LOGIQUE</a>
									<a href="/hubungi-kami.php" target="_blank">Contact Me</a>
								</div>
							</div>
						</div>
						<div class="link-footer-webdev">
							<br/>
							<div style="margin-bottom:8px"><b>Social Media</b></div>
							<div class="row medsos-new">
								<div class="col-xs-3">
									<a href="https://www.facebook.com/logique.id/" target="_blank" aria-label="Facebook" rel="noreferrer"><i class="fa fa-facebook-official" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
								<div class="col-xs-3">
									<a href="https://twitter.com/LogiqueDigital" target="_blank" aria-label="Twitter" rel="noreferrer"><i class="fa fa-twitter" aria-hidden="true" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
								<div class="col-xs-3">
									<a href="https://www.instagram.com/logiquedigital/" target="_blank" aria-label="Instagram" rel="noreferrer"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
								<div class="col-xs-3">
									<a href="https://www.linkedin.com/company/13420656" target="_blank" aria-label="LinkedIn" rel="noreferrer"><i class="fa fa-linkedin-square" aria-hidden="true" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 hidden-md hidden-lg">
						<span><hr>LOGIQUE provides the best solution, optimised for your business, as a professional team in web consulting, website creation, Smartphone website creation, responsive web design creation, system development, and graphic creation. We develop structured creative websites thoughtfully from large-scale corporate websites to smartphone websites with the combination of art direction and information architecture design.</span>
						<div class="row">
							<div class="col-sm-12">
								<div class="link-footer-webdev">
									<br/>
									<div style="margin-bottom:8px"><b>Produk LOGIQUE</b></div>
									<a href="/produk/dokodemo-kerja.php" target="_blank">Dokodemo-Kerja</a>
									<a href="/produk/nippo.php" target="_blank">Nippo</a>
									<a href="/produk/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<?php if(isset($msg)) { echo $msg; } ?>
						<form role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
							<input type='hidden' name='submitted' id='submitted' value='1'/>
							<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
							<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
							<div class="">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" name="name" aria-label="Name" value='<?php echo $formproc->SafeDisplay('name') ?>'>
									</div>
									<!-- <div class="form-group">
										<input type="number" class="form-control" placeholder="No Ponsel" name="phone" value='<?php echo $formproc->SafeDisplay('phone') ?>'>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Perusahaan" name="company" value='<?php echo $formproc->SafeDisplay('company') ?>'>
									</div> -->
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email" name="email" aria-label="Email" value='<?php echo $formproc->SafeDisplay('email') ?>'>
									</div>
									<div class="form-group">
										<textarea name="" id="" cols="30" rows="6" class="form-control" placeholder="Message" name="message" aria-label="Message" style="resize:vertical;"><?php echo $formproc->SafeDisplay('message') ?></textarea>
									</div>
									<div class="form-group">
										<div class="g-recaptcha captcha-custom" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
									</div>
									<div class="form-group btn-submit text-right text-L">
										<br>
										<button type="submit" class="btn btn-logic btn-sm">Submit</button>
									</div>
							</div>
						</form>
					</div>
					<div class="col-md-4 hidden-xs hidden-sm">
						<p>LOGIQUE provides the best solution, optimised for your business, as a professional team in web consulting, website creation, Smartphone website creation, responsive web design creation, system development, and graphic creation. We develop structured creative websites thoughtfully from large-scale corporate websites to smartphone websites with the combination of art direction and information architecture design.</p>
						<div class="row">
							<div class="col-sm-12">
								<div class="link-footer-webdev" style="padding-left:30px">
									<br/>
									<div style="margin-bottom:8px"><b>LOGIQUE Product</b></div>
									<a href="/produk/dokodemo-kerja.php" target="_blank">Dokodemo-Kerja</a>
									<a href="/produk/nippo.php" target="_blank">Nippo</a>
									<a href="/produk/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<section class="tahap-pemesanan-2 text-center hidden-md hidden-lg" style="padding: 2em">Copyright 2018 Logique</section>

		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script type="text/javascript">
			$(function() {
				$('.smooth').click(function() {
				  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
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
