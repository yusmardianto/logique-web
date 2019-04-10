 <?php
require_once("assets/form/fgcontact_mobileapps.php");

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
    <meta name="description" content="LOGIQUE is the top mobile app developer in Jakarta, has been trusted to develop the highly responsive mobile app, Android and iOS, with native / hybrid app and PWA builder for enterprise clients. We develop apps, strategic plan, design, QA, user testing, etc. Contact us to create yours now.">
	<meta name="keywords" content="jasa pengembangan aplikasi mobile, jasa pengembangan mobile app, jasa pembuatan aplikasi mobile, pengembangan aplikasi mobile">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
  <meta property="og:title" content="Mobile App Developer | Native / Hybrid App, PWA Builder Jakarta | LOGIQUE DIGITAL INDONESIA">
  <meta property="og:type" content="website">
	<meta property="og:site_name" content="Logique">
  <meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
  <meta property="og:description" content="LOGIQUE is the top mobile app developer in Jakarta, has been trusted to develop the highly responsive mobile app, Android and iOS, with native / hybrid app and PWA builder for enterprise clients. We develop apps, strategic plan, design, QA, user testing, etc. Contact us to create yours now">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Mobile App Developer | Native / Hybrid App, PWA Builder Jakarta | LOGIQUE DIGITAL INDONESIA</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style-mobileapps.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" />
	<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-105878648-1', 'auto');
	ga('send', 'pageview');

	</script>
</head>
	<body class="mobileapp-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<a href="/en"><img alt="logo" class="img-responsive" src="assets/img/img-mobileapps/logo_logique.png"/></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<br/><br/><br/>
						<h1 style="font-size: 30px">TRUST YOUR <span class="yellow">MOBILE APPLICATION (Android | iOS | Hybrid)</span> DEVELOPMENT FUTURE IN <span class="yellow">LOGIQUE</span></h1>
						<p>
						We provide the best services and solutions in developing enterprise-scale or consumer-based mobile applications for iOS and Android smartphones/tablets.
						</p>
						<div class="visible-md visible-lg"><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>
					</div>
					<div class="col-md-5">
						<img alt="Mobile" src="assets/img/img-mobileapps/hp-header.png" class="hp-header img-responsive center-block"/>
					</div>
				</div>
			</div>
		</header>
		<div class="hubungi-kami-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<a href="/en/contact.php" target="_blank"><span class="purple">Contact us</span></a> for further information.
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<br/><br/>
			<div class="row">
				<div class="col-md-5">
					<h2 class="first">User-Oriented <span>Mobile Application</span> Development</h2>
					<br/>
					<img alt="Pengembangan Aplikasi Mobile Berorientasi Pengguna" src="assets/img/img-mobileapps/mobile-phone.png" class="img-responsive center-block mobile-phone"/>
				</div>
				<div class="col-md-7">
					<p>
						The mobile applications that we create are designed with the philosophy which is information that is in the right person has great ability in a change. We focus on delivering user-oriented mobile applications to deliver maximum experience of digital changes in their lives.<br/><br/>
						We are also aware that, in today's digital era, technology continues to develop and evolve. Therefore, we always try to help providing concepts that are in line with the latest technology so that mobile applications that we create can be able to experience growth and success. <br/><br/>
						Our designers and application developers will not only help creating great products, we are also ready to help you to ensure that the final results we provide are the best.<br/><br/>
						If anything goes wrong during the development, we will notify you. We want your product to be successful just like you are. With an efficient process, our team knows what works the best with mobile application development.
					</p>
				</div>
			</div>
			<br/><br/>
		</div>
		<div class="solusi">
			<div class="container">
				<br/><br/>
				<div class="row">
					<div class="col-md-4">
						<h2 class="title">LOGIQUE is One of the Best <b>Mobile Application</b> Developers in Indonesia</h2>
					</div>
					<div class="col-md-8">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>LOGIQUE can customize the client's needs and wants with the latest technology to produce iOS and Android apps at the forefront and international scale.</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>The iOS and Android apps we developed have gone through a thorough design planning process by experienced UI/UX Designers so the resulting look is very user friendly.</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>The security, optimization, and scalability of the application are taken into account with details by our technical experts in order to deliver the maximum usable results to users.</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>With more than five years of experience, LOGIQUE team's ability and expertise have been tested on a variety of clients and projects coming from local and abroad.</li>
						</ul>
					</div>
				</div>
				<br/><br/>
			</div>
		</div>
		<div class="container logique-help">
			<br/><br/><br>
			<div class="row">
				<div class="col-md-12">
					<h2 class="font-28 text-center">How <span class="purple"><b>LOGIQUE</b></span> Can Help You</h2>
				</div>
				<div class="clearfix"></div>
				<br/><br/><br>
				<div class="col-md-4">
					<div class="div-help">
						<h3 class="div-title"><span class="title purple"><b>Innovative Application Ideas</b></span></h3>
						<div class="">
						<img alt="Ide Aplikasi Inovatif" class="img-responsive center-block" src="assets/img/img-mobileapps/inovatif.png"/><br/>
						Have you come up with ideas for developing millions of dollars worth of mobile apps like Go-Jek, Traveloka, or Tokopedia? With the security of information through our Confidential Agreement, we can help analyzing your idea and make it happen. We will help you to become the next great App-Enterpreneur in this rapidly growing industry.</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="div-help">
						<h3 class="div-title"><span class="title purple"><b>Provide Additional Values</b></span></h3>
						<div class="">
						<img alt="Memberikan Nilai Tambahan" class="img-responsive center-block" src="assets/img/img-mobileapps/nilai-tambah.png"/><br/>
						Already providing products and services to your customers? We can help you use application-based technology to deliver additional values on your business. The convenience, capabilities, and connectivity of smartphones make it an ideal platform to bring additional values to your current services.</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="div-help">
						<h3 class="div-title"><span class="title purple"><b>Improve Business Process</b></span></h3>
						<div class="">
						<img alt="Meningkatkan Proses Bisnis" class="img-responsive center-block" src="assets/img/img-mobileapps/proses-bisnis.png"/><br/>
						Have you ever considered how you can streamline your business or company using mobile app technology? Applications provide an enormous opportunity to empower staff and improve efficiency. Mobile application solutions with a company-centric planning have proven to increase daily work activities that enable better performance than your business competitors.</div>
					</div>
				</div>
			</div>
			<br/><br/><br/>
		</div>
		<div class="solusi revision">
			<div class="container">
				<br/><br/>
				<div class="row row-center-md">
					<div class="col-md-offset-1 col-md-3">
						<h2 class="title">Solutions gained from <span><b>Mobile Application</b></span> development</h2>
					</div>
					<div class="col-md-8">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>Mobile applications as your own products and assets.</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>Mobile applications as a communication tool between employers and employees.</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>Mobile applications as a marketing tool of your products and services.</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>Mobile applications as a supportive tool of your product usage.</li>
						</ul>
					</div>
				</div>
				<br/><hr/><br/>
				<h2 class="font-28 text-center">Our Services</h2><br/>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						We offer complete services ranging from application development concept, creation, launch, up to sustainable management for your application. All of our services are aimed at building applications that offer the maximum user experience and great business transformation results.
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-4">
						<div class="layanan-kami">
							<h3 class="title">iOS Application Development for iPhone/iPad</h3>
							<br/>
							<img alt="Pengembangan Aplikasi iOS untuk iPhone / iPad" src="assets/img/img-mobileapps/apple.png" class="img-responsive center-block"/><br/>
							We are experienced in developing apps that have compatibility on different iOS versions using Swift languages ranging from Swift 1 to 4 which are trending today.
						</div>
					</div>
					<div class="col-md-4">
						<div class="layanan-kami">
							<h3 class="title">Android Application Development</h3>
							<br/>
							<img alt="Pengembangan Aplikasi Android" src="assets/img/img-mobileapps/android.png" class="img-responsive center-block"/><br/>
							A wide range of native Java-based Android applications ranging from simple, multi-lingual, up to the high complexity.
						</div>
					</div>
					<div class="col-md-4">
						<div class="layanan-kami">
							<h3 class="title">Hybrid Application Development</h3>
							<br/>
							<img alt="Pengembangan Aplikasi Hybrid" src="assets/img/img-mobileapps/hybrid.png" class="img-responsive center-block"/><br/>
							If you want to have apps for both Android and iOS, we can also develop hybrid apps by utilizing technologies such as Ionic, Adobe PhoneGap, Apache Cordova, Xamarin, AngularJS, and so on.
						</div>
					</div>
				</div>
				<div class="hidden-xs hidden-sm"><br/></div>
				<div class="row">
					<div class="col-md-4 col-md-offset-2">
						<div class="layanan-kami">
							<h3 class="title">UI/UX Mobile Application Design</h3>
							<br/>
							<img alt="Desain UI/UX Aplikasi Mobile" src="assets/img/img-mobileapps/ux.png" class="img-responsive center-block"/><br/>
							All of our mobile apps are developed with design aesthetics that fit their function. With high design standards, we ensure that customers will love the ongoing interaction. In addition, the implementation of responsive design that we do also provides maximum experience for users.
						</div>
					</div>
					<div class="col-md-4">
						<div class="layanan-kami">
							<h3 class="title">Development of CMS/API</h3>
							<br/>
							<img alt="Pengembangan CMS / API" src="assets/img/img-mobileapps/cms.png" class="img-responsive center-block"/><br/>
							To support mobile application development, we also provide CMS and API in various platforms, especially PHP.
						</div>
					</div>
				</div>
				<br/><br/>
			</div>
		</div>
		<div class="portofolio">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h2 class="font-28">Client/Portfolio</h2>
						<br/>
						<div>We have experiences in working with clients from various industries and have helped developing mobile applications that solve operation problems, empower sales, and maintain customer relationships.
						</div>
						<br/><br/>
					</div>
					<div class="col-md-7">
					 <div class="portfolio-slider">
						<div>
							<div class="row">
								<div class="col-sm-5">
									<img alt="Sunlife" class="img-responsive center-block" src="assets/img/img-mobileapps/sunlife.png"/>
								</div>
								<div class="col-sm-7">
									<div class="caption-portfolio">
										<div class="arrow-left"></div>
										<h2 class="font-28">Category: Financial</h2><br/>
										<div>
										Application that helps customers get information about insurance policies and interact with agents that is one of the largest insurance companies in Indonesia.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div>
							<div class="row">
								<div class="col-sm-5">
									<img alt="Otomart" class="img-responsive center-block" src="assets/img/img-mobileapps/otomart.png"/>
								</div>
								<div class="col-sm-7">
									<div class="caption-portfolio">
										<div class="arrow-left"></div>
										<h2 class="font-28">Category: Automotive</h2><br/>
										<div>
										Application that helps dealers manage car ads on one of the largest secondhand car portals in Indonesia.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div>
							<div class="row">
								<div class="col-sm-5">
									<img alt="Frangipani" class="img-responsive center-block" src="assets/img/img-mobileapps/frangipani.png"/>
								</div>
								<div class="col-sm-7">
									<div class="caption-portfolio">
										<div class="arrow-left"></div>
										<h2 class="font-28">Category: Service</h2><br/>
										<div>
										Application that helps international spa managers to improve services and relationships with customers.
										</div>
									</div>
								</div>
							</div>
						</div>
					 </div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-grey">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="font-28 text-center">How LOGIQUE Works</h2>
						<br/>
						<p class="text-center">
							Whether for a B2C, B2B, startup, or enterprise operations solution, first of all, we'll take the time to understand your business, the products and the needs of the users. The way of committing the results on our works is highly reviewed by users and clients because we are able to create applications that are optimal and provide additional values in terms of business.
						</p>
					</div>
				</div>
				<br/><br/>
				<div class="row">
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja1.png" alt="Perencanaan"/>
							<div class="text-center title">Planning</div>
						</div>
						<p>
							At the beginning of the project, we will discuss with you and ensure that all the needs of the company, service, or user have entered the scope of the application. We will provide the concept in a form of a wireframe draft as the final result.
						</p>
					</div>
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja2.png" alt="Desain"/>
							<div class="text-center title">Design</div>
						</div>
						<p>
							From the concept that has been generated, our designers will start to create the page design. We can provide several options for the main page design that you can choose. A specific design requirements will be reflected in while we proceed the designs for other pages.
						</p>
					</div>
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja3.png" alt="Pengembangan"/>
							<div class="text-center title">Development</div>
						</div>
						<p>
							Based on functional concepts, our technical team will start developing mobile apps that work better than the existing development and security standard of applications.
						</p>
					</div>
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja4.png" alt="Testing"/>
							<div class="text-center title">Testing</div>
						</div>
						<p>
							Our QA team will ensure that the features developed by the technical team are running as it should be so that you can see & trust the quality of apps.
						</p>
					</div>
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja5.png" alt="Peluncuran Aplikasi"/>
							<div class="text-center title">Launch Application</div>
						</div>
						<p>
							Congratulations! After all the processes have finished, your Android or iOS app is ready to launch on the App Store or Google Play Store.
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--<div class="slider-mobile">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<img src="assets/img/img-mobileapps/device.png" class="device hidden-xs"/>
						<img src="assets/img/img-mobileapps/device-m.png" class="device visible-xs"/>
						<div class="slider-app">
						  <div><img src="assets/img/img-mobileapps/sunlife.png" class="img-responsive center-block"/></div>
						  <div><img src="assets/img/img-mobileapps/frangipani.png" class="img-responsive center-block"/></div>
						  <div><img src="assets/img/img-mobileapps/otomart.png" class="img-responsive center-block"/></div>
						  <div><img src="assets/img/img-mobileapps/otomart.png" class="img-responsive center-block"/></div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<div class="div-form">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						Contact us to get the best <b>offer</b>
						<br/>
						<?php if(isset($msg))
						{
						echo $msg;
						}
						?>
						<form id="contact-form-mobile"  class="contactform-mobile" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
						<input type='hidden' name='submitted' id='submitted' value='1'/>
						<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
						<fieldset><div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div></fieldset>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<input type="text" name="name" placeholder="Your Name" class="form-control name-input" value='<?php echo $formproc->SafeDisplay('name') ?>'/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<input type="email" name="email" placeholder="Email Address" class="form-control" value='<?php echo $formproc->SafeDisplay('email') ?>' />
									</div>
									<div class="col-md-6">
										<input type="number" name="phone" placeholder="Telephone Number" class="form-control" value='<?php echo $formproc->SafeDisplay('phone') ?>' />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" placeholder="Question" name="message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<div class="sr-only">Recaptcha</div>
										<div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
									</div>
									<div class="col-md-6">
										<button type="submit" class="pull-right btn btn-submit">Send</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="buat-sekarang">
			<div class="container">
				<div class="row row-center-md">
					<div class="col-md-6 font20">
						Have questions and need more information?
						<div class="hidden-lg hidden-md"><br/></div>
					</div>
					<div class="col-md-6">
						<a href="/en/contact.php" target="_blank" class="btn btn-buat-sekarang">Find Solutions</a>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="title">About Us</div>
						<br/>
						As a professional team in website creation services, LOGIQUE provides the best optimized solution for your business. In addition to website creation services, LOGIQUE also provides other services such as digital consulting services, application creation services, web design, web system development, SEO services, and printing. We provide detailed structured designs for the creation of corporate websites, applications, as well as the creation of large-scale websites or systems with a combination of targeted design and good system architecture.<br/>
						<div class="visible-sm visible-xs"><br/></div>
					</div>
					<div class="col-md-4">
						<div class="title">Contact Us</div>
						<a href="/en/contact.php" target="_blank"><img alt="Logo" src="assets/img/img-mobileapps/logo_logique_footer.png" class="img-responsive"/></a>
						Ad Premier Building 19th Floor. <br/>
						Jalan Tb. Simatupang No. 5 <br/>
						Ragunan, Ps. Minggu, <br/>
						Jakarta Selatan, Indonesia 12550 <br/>
					</div>
				</div>
			</div>
		</footer>
		<div class="copyright">
			© 2018 Logique Digital Indonesia. All Rights Reserved.
		</div>
		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/jquery.matchHeight.js"></script>
		<script src="/js/slick.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script type="text/javascript">
			$(function() {
				$('.div-help').matchHeight();
				$('.layanan-kami').matchHeight();
			});

			$('.portfolio-slider').slick({
			  dots: true,
			  infinite: true,
			  speed: 500,
			  fade: true,
			  arrows: false,
			  autoplay: true,
			  cssEase: 'linear'
			});
		</script>
	</body>
</html>
