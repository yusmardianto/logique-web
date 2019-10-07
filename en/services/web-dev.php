 <?php
require_once("assets/form/fgcontact_webdev.php");

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
    <meta name="description" content="As one of the best website developers in Indonesia, LOGIQUE Digital Indonesia has their own mechanism in providing clients with the best web development service. Here are simple explanations of each step that we take to create a website.">
	<meta name="keywords" content="As one of the best website developers in Indonesia, LOGIQUE Digital Indonesia has their own mechanism in providing clients with the best web development service. Here are simple explanations of each step that we take to create a website.">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
  <meta itemprop="name" content="PT. Logique Digital Indonesia">
	<meta property="og:title" content="Web Development Service | LOGIQUE Digital Indonesia">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Logique">
	<meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
	<meta property="og:description" content="As one of the best website developers in Indonesia, LOGIQUE Digital Indonesia has their own mechanism in providing clients with the best web development service. Here are simple explanations of each step that we take to create a website.">

  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Web Development Service | LOGIQUE Digital Indonesia</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style-webdev.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
		<header>

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
							<div class="text-center active">
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
							<div class="text-center">
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

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="/en/" target="_blank">
							<div class="logo-header">
								<img src="assets/img/img-webdev/logo.png" alt="Fitur Perusahaan" class="img-responsive">
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div style="position:relative">
						<div class="language-btn">
							<ul class="list-inline">
								<li><a href="/layanan/web-dev.php">ID</a></li>
								<li class="active"><a href="#">EN</a></li>
								<li><a href="/jp/services/web-dev.php">JP</a></li>
							</ul>
						</div>
					</div>
					<ol id="services-breadcrumb" class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="../index.php">
								<span itemprop="name">Home</span>
							</a>
							<meta itemprop="position" content="1" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="../services.php">
								<span itemprop="name">Services</span>
							</a>
							<meta itemprop="position" content="2">
						</li>
						<li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="#">
								<span itemprop="name">Web Dev</span>
							</a>
							<meta itemprop="position" content="3">
						</li>
					</ol>

					<!-- <br class="hidden-xs"> -->
					<!-- <span class="underline"> </span>-->
					<div id="heading-service-web-dev" class="col-sm-offset-3 col-sm-7 m-t-7em">
						<h1 class="text-left">
							<p>
								<span class="c-logique">LOGIQUE Web</span> / <br class="hidden-xs">Website Creation Service
							</p>
							<p>
								<span class="underline">Ready to Create Your Website</span>
							</p>
						</h1>
						<div class="subtitle-header">
							<p class="p-padding-v-15">
							LOGIQUE is a website development company that strives to raise your business. It is important
							to know how an efficient website, beautifully designed, can improve your site’s prestige,
							thereby establishing a well-built identity for you, further affecting your brand.
							</p>
							<p class="p-padding-v-15">
							LOGIQUE was founded by a Japanese entrepreneur and is ranked among the top web development companies in Jakarta, with a variety of achievements.
							</p>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="about" style="padding-bottom: 0">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="panel text-center custom-1">
							<h1><b>If you seek to develop a high quality website, contact LOGIQUE for our professional web design and development services.</b></h1>
							<br>
							<p class="p-b-20">
								LOGIQUE has developed over 200 websites spanning various fields throughout Indonesia; from
								government organizations, to financial institutions, many of which require high levels of
								security. Such are made in regards to a client’s specific and creative demands, methods of
								programming, etc. We are trusted for the emphasis we put on business growth in regards to
								the digital world, which ultimately means greater profits for your company.
							</p>
							<p class="p-b-20">
								As a professional web development company, we work to create the maximum quality of
								output for a reasonable price, through our team, consisting of experienced web developers,
								designers and content writers; all of whom constitute 40 hardworking and experienced
								individuals in total. Further, although we are an international company, we have extensive
								knowledge of the digital world’s applicability on a local level. Therefore, if you are looking for
								an Indonesian-built high quality website, feel free to consult LOGIQUE anytime.
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="row">
							<div class="col-md-4">
								<div class="new-box min-h">
									<h4>A one-stop web production operation.</h4>
									<p>
										If you require web pages in Indonesian, English and Japanese, LOGIQUE seeks help you through
										SEO implementation and can further assist you through applying production design, inquiry
										form, and even with post publication maintenance, in addition to any digital marketing matters
										you may have.
									</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="new-box min-h">
									<h4>Maximum Quality, Latest technology, and Reliable security.</h4>
									<p>
										We utilize reliable security systems of the highest quality through the latest digital technology
										available. We are also experienced in implementing PWA, AMP and other complex functions for
										websites which can be delivered after security checks by experts.
									</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="new-box min-h">
									<h4>Speed and flexibility.</h4>
									<p>
										We value the ability to produce high quality work in a rapid and efficient manner, as we are
										aware of the time constraints you might possibly have. Therefore, our timeframe is flexible and
										can be adjusted into your schedule
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-layout web-service-flow">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="analysis-part flow-part">
							<img src="assets/img/img-webdev/writing.png" alt="Analysis and Evaluation">
							<h3>Analysis and Evaluation</h3>
							<p>
								If you already have a website, we will be able to analyze and evaluate its progress through
								services which include examining the rate of traffic and also by interpreting the overall
								structure of your website, among other things. Our team is experienced in retrieving a highly
								accurate analysis of your website and examining the issues within it in order to improve its
								overall user experience.
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="plan-part flow-part">
							<img src="assets/img/img-webdev/intelligent.png" alt="Planning">
							<h3>Planning</h3>
							<p>
								In order to achieve the set goals desired for your website, we aim to show you what a
								professionally designed site should look like, as well as offer suggestions for potential
								improvements required for continual results. Such advice varies depending on your site’s
								internal system.
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="seo-part flow-part">
							<img src="assets/img/img-webdev/analysis.png" alt="SEO / SEM">
							<h3>SEO/SEM</h3>
							<p>
								A website is unlikely to receive much traffic simply through having an online presence. Our
								experts are familiar with SEO measures specified for Indonesia. We strive to create websites
								that are highly visible through organic search methods when relevant queries are entered into
								the search engine. We are also able to conduct an SEM strategy in order to ensure a quick rise
								in traffic through the use of effective keywords.
							</p>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-4">
						<div class="info-part flow-part">
							<img src="assets/img/img-webdev/ux.png" alt="Restructuring and Improvement">
							<h3>Restructuring and Improvement</h3>
							<p>
								As performance issues are commonly found through a thorough scan, your website doesn’t
								necessarily need to be recreated from scratch, as occasionally, the cost and work involved can
								exceed a specified budget. In this case, we offer practical solutions for organizing, collecting and
								improving the website according to your specified budget, within the timeframe you require
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="multiligual-part flow-part">
							<img src="assets/img/img-webdev/language.png" alt="Multilingual Website Production and& Operation">
							<h3>Multilingual Website Production and Operation</h3>
							<p>
								We can facilitate web development in Indonesian, English and Japanese, as we understand that
								creating unique and multi-paged content is important to reach and engage as large an audience
								as possible
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="sosmed-part flow-part">
							<img src="assets/img/img-webdev/customer.png" alt="Social Media Operation">
							<h3>Social Media Operation</h3>
							<p>
								Social media can be a powerful tool to increase the level of interaction with your customers. It
								can also facilitate web traffic by directing frequenters of social media to your website. We
								operate on several Social Media platforms such as Facebook and Instagram in the Indonesian,
								English and Japanese languages.
							</p>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-4">
						<div class="design-part flow-part">
							<img src="assets/img/img-webdev/graphic-design.png" alt="Design Production">
							<h3>Design Production</h3>
							<p>
								We aim to design a user and conversion friendly UI for your website. Our web design team will
								suggest different design styles according to your specific requirements.
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="markup-part flow-part">
							<img src="assets/img/img-webdev/website.png" alt="Markup Coding">
							<h3>Markup Coding</h3>
							<p>
								You can also request simple HTML/CSS coding for your website, as our team is always up to
								date in regards to the latest JavaScript-based front-end coding technology.
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="responsive-part flow-part">
							<img src="assets/img/img-webdev/devices.png" alt="Multi-device Support">
							<h3>Multi-device Support</h3>
							<p>
								We aim to create an optimized and responsive site for smartphones and tablets. We have
								ample experience on the subject and have created many AMP and mobile friendly websites.
							</p>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-4">
						<div class="programing-part flow-part">
							<img src="assets/img/img-webdev/programming.png" alt="Special Programming Features">
							<h3>Special Programming Features</h3>
							<p>
								You can add various features such as Motion Parallax to your website, which can be developed
								by using JavaScript, HTML5, CSS3, etc. We propose developing a website that attracts users
								according to their specified needs.
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="system-part flow-part">
							<img src="assets/img/img-webdev/engineering.png" alt="System Construction">
							<h3>System Construction</h3>
							<p>
								We aim to develop and operate various systems compatible with your website, such as CMS,
								web and business systems. Our services are effective, practical and are developed through PHP
								frameworks.
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="apps-part flow-part">
							<img src="assets/img/img-webdev/smartphone.png" alt="PWA as Mobile Apps">
							<h3>PWA as Mobile Apps</h3>
							<p>
								We are able to develop mobile and web applications through PWA. Creating push notifications
								and offline operations is also possible.
							</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="link-page-price-and-portfolio">
					<a class="link-yellow-white" href="/en/services/webdev-price-range.php">See the price of Website production and operation</a>
					<a class="link-yellow-white" href="/en/portfolio.php">See our Website production results</a>
				</div>
			</div>
		</section>
		<section class="obstacle" style="padding-top: 20px">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-7 border-l text-right">
						<h2 class="text-right">Website Production Flow in LOGIQUE</h2>
						<p class="text-right">
								LOGIQUE’s website design strategy puts an emphasis on the collaboration of speed and quality.
								Our professionals are involved in each step of the site’s development. We begin by thoroughly
								planning and proposing a design, before developing it. The aforementioned stages may vary
								depending on the type of project being implemented, and takes into account the website’s size,
								CMS necessity, and the level of difficulty regarding the system’s development.
						</p>
					</div>
					<div class="col-md-3 text-center hidden-xs hidden-sm">
						<a href="/en/" target="_blank"><img src="assets/img/img-webdev/logo.png" alt="Fitur Perusahaan" class="custom-2"></a>
					</div>
				</div>
			</div>
		</section>

		<section class="tahap-pemesanan">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-6 col-md-6">
						<div class="card">
								<div class="row">
									<div class="col-xs-2 col-sm-2 col-md-2 text-right">
										<span class="title-custom">1</span>
									</div>
									<div class="col-xs-10 col-sm-10 col-md-10">
										<p class="title-custom-p"><b>Contact Us</b></p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-offset-2 col-md-10 m-t-10">
										<p>
											Our team is ready to get your message anytime.
											You can immediately place an order and explain to us the initial description of the website as you want, from website creation, operation, CMS configuration, web system development, etc.
											Contact us via email <a style="color:#333" href="mailto:info@logique.co.id"><u>info@logique.co.id</u></a> or please fill in the available Order Form <a style="color:#333" target="_blank" href="/en/contact.php"><u>here</u></a>. You can also ask us anything regarding the web development, website design, or even the price.
											Feel free to talk to us in Indonesian, English, or Japanese.
											We will contact you immediately for further discussion.
										</p>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan-2">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card2">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom">2</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>Hearing</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>
										You may have a specific vision and target, whether to increase the profit of your business through the website, improve your image and branding, IR activities, recruitments, etc.
										We would like to hear everything from you. We don’t have to meet up.
										If you want, we can reach you through Skype or other communication apps so we can talk further about your business.
										Then, we will give you some suggestions about the website that might suit your interest, also the most effective approach based on your needs.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card2">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom">3</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>Planning/Proposal Submission</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>
										After understanding everything, we will propose the website creation and utilization to solve the problem.
										If necessary, we will also conduct research, including about competitors and heuristic task analysis of the current website.
										Even until the submission of the proposal, we are cherishing the sense of speed and keeping in mind the prompt proposal.
										In the proposal, we will also provide optional services, such as photography, videography, and content creation as necessary.
										You can freely consult us if you have something in mind.
										The proposal will also include the price service as well as how long the time needed in the website creation.
										It’s all based on our transparency method, the difficulty level, and the number of team members needed to complete it.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card2">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom">4</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>Contract Signing</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>
										If you’re down to what we offer, the next process is the contract signing and the payment of 50% in advance.
										Soon after it’s all done, our team can start to operate the website production for you.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan-3">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card3">
							<div class="row">
								<div class="col-xs-2 text-right">
									<span class="custom-p-1">5</span>
								</div>
								<div class="col-xs-10">
									<p class="custom-p-2"><b>Confirmation</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<div class="border-right-custom"></div>
									<p>
										First, we will confirm all the details of your website structure and requirements.
										This is to ensure that there are no missed points and cause obstacles in the future.
										In addition, we will also show the website framework (wireframe) that we have made for you as an initial description.
										Then, the concept, design, domain, and web server will be confirmed and decided.
										If you already have a website, you can share with us the access to Google Analytics.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="border-top-custom hidden-xs hidden-sm"></div>
						<div class="card3">
							<div class="row">
								<div class="col-xs-2 text-right">
									<span class="custom-p-1">6</span>
								</div>
								<div class="col-xs-10">
									<p class="custom-p-2"><b>Website Design Creation</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<div class="border-right-custom"></div>
									<p>
										At this stage, the homepage concept will be created and designed according to the references you provide.
										Our website design team will also provide several alternatives for which you can then approve or revise.
										After your approval, we will then create the rest of the pages based on the main website design.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card3">
							<div class="row">
								<div class="col-xs-2 text-right">
									<span class="custom-p-1">7</span>
								</div>
								<div class="col-xs-10">
									<p class="custom-p-2"><b>Implementation, Coding, & Programming</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>
										Here, we will execute a programming function from various features that have been planned, including the CMS.
										This stage also includes implementing SEO that follows the UI/UX design, and eliminating the security vulnerability of the web.
										We will ensure that the entire data architecture and features in the website are running and functioning properly.
										This concept is to ensure that the website is well structured for your targeted audience experience.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan-2">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card2">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom">8</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>Testing and Verification</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>
										After we create the website, we will perform appropriate tests according to the contents and website design.
										We make sure that there is no HTML syntax error, the website is fully mobile friendly, each page is loading quickly, and SEO countermeasure is done effectively.
										For security needs, we also conduct tests and security checks based on many test scenarios.
										Then, we will periodically demonstrate the features to you, where you will be able to directly provide us feedbacks for each feature.
										When the project has entered the finalization stage, you can perform test too as a proof that all functions have been confirmed and are running well.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="border-top-custom hidden-xs hidden-sm"></div>
						<div class="card2">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom">9</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>Website Launching</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>
										At this stage, your website will be deployed to the web server and made public.
										We can help move data from your old website if needed.
										After publication, we will do index registration on Google and setting up Google Analytics for further maintenance.
										You can also immediately pay off the remaining payments and your website can be used immediately.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card2">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom no-10">10</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>Improvement & Maintenance</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>
										After the website is launched, we don't leave you just yet.
										Every website requires long-term management, including yours.
										We will continue to maintain your website system in order to keep the results you want.
										LOGIQUE provides variety of management services, starting from observing the system, carrying out daily operations, even regular content creation, Social Media operation, up to digital advertisement operation.
										All for the maximum results from your website.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="layanan p-t-10-m" style=" margin-top: 0; ">
			<div class="container">
				<div class="row hidden-md hidden-lg">
					<div class="col-md-12">
						<h2 class="m-m-10">NEED OTHER SERVICES?</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2 class="custom-3">Mobile (smartphone) Apps Development</h2>
						<p class="min-h">
							We can also develop Android apps, iOS apps, and hybrid apps.
							We have extensive experience with mobile related solutions such as PWA and AMP Production, so we can support a wide range.
							With API development and infrastructure construction such as AWS, we develop highly maintainable apps with one-stop support.
						</p>
						<div>
							<a href="/en/services/mobile-app-dev.php" target="_blank" class="btn btn-logic btn-md">Learn more</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="border-top-custom-2 hidden-xs hidden-sm">NEED OTHER SERVICES?</div>
						<h2 class="custom-3">HR Related Solution/Recruitment</h2>
						<p class="min-h">
							To help your company find suitable candidates, we provide structured, dynamic, professional, and well-optimized career website pages.
							For HR solutions, we also provide activity management system, daily report management system, work situation management, and telework management system for productivity improvement.
						</p>
						<div>
							<a href="/en/services/recruitment-web-dev.php" target="_blank" class="btn btn-logic btn-md">Learn more</a>
						</div>
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">Web Security Assessment/Vulnerability Inspection</h2>
						<p class="min-h">
							We conduct inspections to check for vulnerabilities in website security holes.
							There are various security risks such as hijacking and falsification on the web site.
							We will search for any gaps and potential infiltration, and then take precautions, such as SQL injection, cross-site scripting, session jacking etc.
						</p>
						<div>
							<a href="/en/services/penetration-test.php" target="_blank" class="btn btn-logic btn-md">Learn more</a>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-md-4">
						<h2 class="custom-3">Website Management</h2>
						<p class="min-h">Not only website creation, LOGIQUE also provides maintenance services or website management. Starting from maintenance, content creation with SEO, to digital marketing. All progress and strategies for increasing traffic will be reported directly to you periodically. During this management, we will ensure your website gets as many potential visitors as possible according to your business target.</p>
						<div>
							<a href="/en/services/pembuatan-aplikasi-mobile/" target="_blank" class="btn btn-logic btn-md">See More</a>
						</div>
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">Digital Business Consultation</h2>
						<p class="min-h">LOGIQUE has 6 years of experience in handling digital issues and helping various companies building businesses in the digital world, both on a national and international scale. If you have doubts or have problems related to your digital business, LOGIQUE provides consulting services that can provide solutions for you.<br>If you are interested in LOGIQUE services above, contact us immediately. </p>
						<div>
							<a href="/en/services/pembuatan-aplikasi-mobile/" target="_blank" class="btn btn-logic btn-md">See More</a>
						</div>
					</div>
				</div> -->
				<!-- <div class="row">
					<div class="col-md-12">
						<h3><b># FAQ</b></h3>
						<p>Frequently Asked Questions</p>
						<br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					  <div class="custom-faq">
						<p><b>What is the price to create a website at LOGIQUE?</b><br>
						LOGIQUE serves website creation at prices tailored to your needs. For more details, you can directly contact us by email to info@LOGIQUE.co.id, call at (021) 227 089 35/36, or order via WhatsApp on 0812 9656 0380.</p>
						<p><b>What does LOGIQUE require from clients to create a website?</b><br>
						To create a website, clients only need to explain the business process that will be carried out on the website that will be created. Other supporting data can be submitted if necessary.</p>
						<p><b>How long does it take for LOGIQUE to create a website?</b><br>
						Usually, standard website creation only takes 3 weeks. More than that depends on the level of difficulty and the various additional features that you have requested.</p>
						<p><b>Can LOGIQUE create an e-commerce website?</b><br>
						Certainly. LOGIQUE has long experience in developing e-commerce websites in various forms and tools. To find out what e-commerce websites we have done, you can see our portfolio here.</p>
						<p><b>What about the cost of maintaining a website at LOGIQUE?</b><br>
						LOGIQUE serves website management in a professional and planned manner. To find out the price of maintaining a website at LOGIQUE, you can directly contact us by email to info@LOGIQUE.co.id, call at (021) 227 089 35/36, or via WhatsApp on 0812 9656 0380.</p>
						<p><b>What programming language does LOGIQUE use to create a website?</b><br>
						LOGIQUE uses a variety of the latest and functional programming languages ​​such as PHP, HTML, CSS, and JavaScript, so the resulting website is dynamic, effective, and flexible. We are also always updated with the latest programming technology and its use can be customized to your liking.</p>
						<p><b>What are the features obtained in website creation by LOGIQUE?</b><br>
						In website creation, we will provide a standard feature package that is commonly found on the website. However, these features can be adjusted as you like.</p>
						<p><b>If I want to add features outside the standard package, are there additional costs?</b><br>
						If you want to add additional features to the existing standard features, you will be charged additional fees according to the difficulty level.</p>
					  </div>
					</div>
				</div> -->
			</div>
		</section>
		<section class="tahap-pemesanan-list">
			<div class="border-top-list hidden-xs hidden-sm"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-6 col-md-6">
						<h4><b>We are ready to assist you in creating a website, and also:</b></h4>
						<ul>
							<li class="m-b-5">Make and/or operate the website</li>
							<li class="m-b-5">Rebuild and optimize it for mobile/smartphones</li>
							<li class="m-b-5">Develop an Android/iOS application</li>
							<li class="m-b-5">Operate an in-house management system</li>
							<li class="m-b-5">Manage IT infrastructure</li>
							<li class="m-b-5">Audit IT security, even if it’s already structured from Japan</li>
							<li class="m-b-5">Increase awareness of your company/brand through digital marketing</li>
							<li class="m-b-5">Achieve online marketing targets with online advertising</li>
							<li class="m-b-5">Design and print company promotional materials for distribution</li>
							<li class="m-b-5">Manage the operation of SNS (Facebook, Instagram, Twitter, Youtube)</li>
							<li class="m-b-5">Update the content and operation of your website</li>
							<li class="m-b-5">Create and install chatbots online for your website</li>
						</ul>
					</div>
				</div>
				<div class="text-center link-long-text" style="margin-top: 70px;">
					<a href="/en/contact.php" target="_blank" class="btn-contact-us-black">
						Please contact LOGIQUE about web production operation in Indonesia
					</a>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
		<footer class="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2 style="margin-top: 0">Contact LOGIQUE</h2>
						<a href="/en/" target="_blank"><img src="assets/img/img-webdev/logo.png" alt="Fitur Perusahaan" class="cs-custom"></a>
						<div class="m-t-10 text-left">LOGIQUE DIGITAL INDONESIA<br>
						Ad Premier Building 19th Floor. <br>
						Jalan Tb. Simatupang No. 5 Ragunan, <br>
						Ps. Minggu, Jakarta Selatan, <br>Indonesia 12550</div>
						<div>021) 22708935 / 36 <br>0811870321</div>
						<br/>
						<div class="row">
							<div class="col-xs-6">
								<div class="link-footer-webdev">
									<a href="/en/index.php" target="_blank">Home</a>
									<a href="/en/logique.php" target="_blank">About Us</a>
									<a href="/en/portfolio.php" target="_blank">Portfolio</a>
									<a href="/en/services.php" target="_blank">Services</a>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="link-footer-webdev">
									<a href="/en/joinus.php" target="_blank">Career</a>
									<a href="/career/" target="_blank">Join LOGIQUE</a>
									<a href="/en/contact.php" target="_blank">Contact Us</a>
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
									<div style="margin-bottom:8px"><b>LOGIQUE's Products</b></div>
									<a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer">Dokodemo-Kerja</a>
									<a href="/en/product/nippo.php" target="_blank">Nippo</a>
									<a href="/en/product/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a>
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
										<textarea style="resize:none" name="" id="" cols="30" rows="6" class="form-control" placeholder="Message" name="message" aria-label="Message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
									</div>
									<div class="form-group">
										<div class="g-recaptcha captcha-custom" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
									</div>
									<div class="form-group text-right">
											<br>
											<button type="submit" class="btn btn-logic btn-sm">Submit</button>
									</div>
							</div>
						</form>
					</div>
					<div class="col-md-4 hidden-xs hidden-sm">
						<p>LOGIQUE provides the best solution, optimised for your business, as a professional team in web consulting, website creation, Smartphone website creation, responsive web design creation, system development, and graphic creation. We develop structured creative websites thoughtfully from large-scale corporate websites to smartphone websites with the combination of art direction and information architecture design.</p>
						<div class="row">
							<div class="col-sm-6">
								<div class="link-footer-webdev" style="padding-left:30px">
									<br/>
									<div style="margin-bottom:8px"><b>LOGIQUE's Products</b></div>
									<a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer">Dokodemo-Kerja</a>
									<a href="/en/product/nippo.php" target="_blank">Nippo</a>
									<a href="/en/product/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a>
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
