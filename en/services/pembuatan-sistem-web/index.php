 <?php 
require_once("form/fgcontact_systemdev.php");

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
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="As one of the top leading web developers in Indonesia, Logique has their own mechanism in terms of web systems creation, which includes the usage of latest technology, infrastructure planning, system security, and speed.">
	<meta name="keywords" content="web systems, web developer, web design, mobile app, mobile applications, web development, web services, web development services, web security, logique digital Indonesia">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>The Making of Web Systems In Logique</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style_systemdev.css" rel="stylesheet">
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
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
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
								<a href="/en/about.php">
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
								<a href="https://www.logique.co.id/blog/" target="_blank">
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
								<img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="img-responsive">
							</div>
						</a>
					</div> -->
				</div>
				<div class="row">
					<div class="language-btn">
						<ul class="list-inline">
							<li class="active"><a href="#">EN</a></li>
							<li><a href="/layanan/pembuatan-sistem-web/">ID</a></li>
							<li><a href="/jp/services/pembuatan-sistem-web/">JP</a></li>
						</ul>
					</div>
					<div class="col-md-offset-7 col-md-5 m-t-10em">
						<h1 class="text-left m-new">Looking for a Web System Development Company? LOGIQUE is at your service!</h1>
					</div>
				</div>
			</div>
		</header>
		<section class="style-1" style="padding-bottom: 0;padding-top:20px;">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1>"Utilizing the latest technology to increase your business profit."</h1>
					</div>
				</div>
			</div>
		</section>
		<section class="style-2">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-7 col-md-5">
						<h1 class="new5">Components of Web System Development at <span class="underline">LOGIQUE</span></h1>
					</div>
				</div>
			</div>
		</section>
		<section class="style-3">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h4 class="style-3-h1">
						<span class="tambah-lg hidden-sm hidden-md hidden-lg">Komponen Pengembangan Sistem Web di LOGIQUE<br><br></span>
						Sebagai web developer berkualitas di Indonesia, kami memberikan layanan yang terbaik dan maksimal kepada para klien kami, terutama dalam memberikan berbagai komponen untuk pengembangan sistem web. Berikut ini adalah beberapa komponen pengembangan sistem web yang kami berikan kepada klien kami, antara lain yaitu:
						</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h3 class="new1">[Advanced Technology]</h3>
						<p class="new4">With the development of technology nowadays, especially in the world of web development, it certainly encourages us to keep updating, studying, and applying it to the web system in order to provide maximum results so that it affects the level of website visits and your business profits. Some of the latest technologies that we have applied to our clients include AngularJS, Node.JS, Socket.IO, and Ionic Framework.</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Planned Infrastructure]</h3>
						<p class="new4">Infrastructure planning is one of the most important things before developing a web system. Therefore, in order to guarantee the sustainability of your business from time to time, LOGIQUE provides you with top-class services in terms of designing and managing web systems, where the infrastructure we use is based on AWS (Amazon Web Service) which is a standard global cloud infrastructure service server famous and has been used in various large companies and other well-known startup companies.</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Controlled Security System]</h3>
						<p class="new4">As the best web developer in Indonesia, LOGIQUE is aware that security is an important factor in the creation and development of web systems. Therefore, LOGIQUE provides security services on your web system optimally and thoroughly, especially for e-commerce websites or websites that are used to store various important data of the company so that it is not easy to be infiltrated by irresponsible people.</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Quick & Precise]</h3>
						<p class="new4">We understand the importance of time for your business. Therefore, we always strive to provide the best and optimal service for you by reducing the time in developing a web system efficiently and effectively as possible without reducing the quality of the system so that the results obtained are in accordance with what is desired in a predetermined period of time.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em">
			<h3>LOGIQUE has been proven to help clients in achieving their business targets</h3>
			<p>We have worked on national and international projects, one of which is the development of JBA auction system. Here's the case study.</p>
		</section>
		<section class="style-4">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-4 col-md-4 text-center">
						<div class="box-1">CASE STUDY</div>
					</div>
					<div class="col-md-offset-5 col-md-7">
						<div class="card">
							<div class="row">
								<div class="col-md-offset-1 col-md-10 m-t-10">
									<h4><b>JBA Auction System</b></h4>
									<p>BA is one of the largest Japanese car and motorcycle auction companies in Indonesia. The company is located in Meruya, West Jakarta and has collaborated with LOGIQUE in creating websites and developing a comprehensive web system for auction purposes, and the positive impact has been directly increasing to their business. That’s why we made a number of coverage systems that they wanted, starting from the registration, inspection, planning and administration process, auction support through offline and online, to the reporting process and the accounting module. The execution of this web system is carried out massively and intensively by communicating directly to users in accordance with their fields. In the last three years, this system has continued to be developed in the form of web systems and mobile applications.</p>
								</div>
							</div>
							<div class="row">
								<div class="box-2">Some of the technologies that we use in the JBA auction system include NodeJS, SocketIO, and Android Native.</div>
							</div>
						</div>
					</div>
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
								<h1 class="new2">Improve your business with LOGIQUE</h2>
								<div class="new2-div">LOGIQUE always provides optimal service by prioritizing the best quality for all of our clients. That is because LOGIQUE has 4 important things which are the main keys in the success of a project, which are:</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Experience</h4>
								<p>We have handled more than 200 projects from various industries in Indonesia, both in terms of website creation, web system development, and the creation and development of mobile applications.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Speed</h4>
								<p>For us, time is the most important thing we cannot just leave aside. Therefore, LOGIQUE always strives to work as effectively and efficiently as possible without reducing the quality of the project results.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Quality</h4>
								<p>We apply analytical methods in order to be able to do the best application in every development and management of a project so that quality is maintained, both in the functional, performance, and safety aspects.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Flexibility</h4>
								<p>We have a technical team that is always open to discuss with you, both in terms of details of the implementation, tools, or schemes that you want to use on the website, web system, or mobile application that you want to develop.</p>
							</div>
						</div>
				</div>
			</div>
		</section>

		<section class="layanan" style="margin-top: 0;padding-top: 1.5em;">
			<div class="container">
				<hr>
					<h3 class="text-center"><b>Resource-Based System Developing Service</b></h3>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<p class="text-justify custom-faq" style="background: white;border: dotted 2px;padding: 1em;">In addition to providing project-based services, LOGIQUE also provides resource-based services, especially for those of you who have projects with dynamic needs. With this service, you can rent our resources, such as Web Developers, Web Designers, and Mobile Application Developers with a number that is tailored to your needs in a certain period of time. Within the specified timeframe, our resources will be dedicated to working on your entire project professionally to get the best results for your business. For complete information, you can contact us by email to info@logique.co.id or via the telephone number at (021) 22708935/36. Feel free to talk to us in English, Indonesian, or Japanese.</p>
					</div>
				</div>
				<hr>
					<h3 class="text-center"><b>NEED OTHER SERVICES?</b></h3>
				<hr>
				<div style="background: white;border: dotted 2px;padding: 1em;">In addition to serving the creation and development of web systems, LOGIQUE also provides a variety of other services that you can choose to address all your digital business problems.</div>
				<div class="row">
					<div class="col-md-4">
						<h2 class="custom-3">Creating a <br>Recruitment System</h2>
						<p class="min-h">To make it easier for you to filter and communicate with job seekers, LOGIQUE provides a web-based recruitment system for your company. Through this system, you can do the recruitment process very easily and efficiently, because the system we create can be accessed and understood easily.</p>
						<!-- <div>
							<a href="/layanan/pembuatan-aplikasi-mobile/" target="_blank" class="btn btn-logic btn-md">Info lebih lanjut</a>
						</div> -->
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">Creating Employee <br>Evaluation System</h2>
						<p class="min-h">If you are a manager who oversees many employees in a company, of course it will be difficult to evaluate the performance of its staff. Therefore, LOGIQUE offers you an application system that is able to assist you in evaluating the performance of staff, so that you can know and provide a detailed and transparent assessment of the performance of your employees.</p>
						<!-- <div>
							<a href="/layanan/pembuatan-website-karir-perusahaan/" target="_blank" class="btn btn-logic btn-md">Info lebih lanjut</a>
						</div> -->
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">Creating Applications to Increase Employee Productivity</h2>
						<p class="min-h">Employee productivity is one of the determinants for a company to move forward and develop. Therefore, LOGIQUE gives you a smart solution that can increase your employee productivity, which is an application creation service that can increase employee productivity in detail and transparently, even though the employee works with a remote system (freelance, remote worker, etc.). We provide this service starting from Rp1 million per month.</p>
						<!-- <div>
							<a href="/layanan/penetration-testing/" target="_blank" class="btn btn-logic btn-md">Info lebih lanjut</a>
						</div> -->
					</div>
				</div>
				<br class="hidden-xs">
				<div class="row" style="background: rgba(255, 255, 255, 0.4);border: dotted 4px #ededed;">
					<div class="col-md-12">
					  <div class="custom-faq">
						<h3 class="text-center"><b>Frequently Asked Questions (FAQ)</b></h3>
						<hr>
						<h2 class="custom-3">What is the price of creating a web system at LOGIQUE?</h2>
						<p>
						LOGIQUE serves creating web systems at customized prices according to your needs. For more details, you can contact us by email to info@logique.co.id or through the telephone number at (021) 227 089 35/36, or you can also via WhatsApp on the number 0812 9656 0380. You can talk to us in English, Indonesian, or Japanese.</p>
						<h2 class="custom-3">What does LOGIQUE need from clients for the creation of web systems?</h2>
						<p>
						In creating a web system, clients need to provide business concepts or features that are desired in the web system. If needed, you can also submit various other supporting data to us.</p>
						<h2 class="custom-3">How long does it take to create a web system?</h2>
						<p>
						Making a web system is very dependent on the level of complexity and the many features provided by you. For a simple web system it usually requires a start of 1 month.</p>
						<h2 class="custom-3">Can LOGIQUE create an e-commerce website?</h2>
						<p>
						Of course, LOGIQUE has a lot of experience working on various e-commerce websites in various forms and tools. To find out what e-commerce websites we have done, you can see them in our portfolio.</p>
						<h2 class="custom-3">How does LOGIQUE secure a web system?</h2>
						<p>
						LOGIQUE is aware that the security of a web system is the most important thing, especially if the website is an e-commerce website or website that is used to store various important data of the company. Therefore, LOGIQUE provides a full and comprehensive web system security service to all of our clients' web systems.</p>
					  </div>
					</div>
				</div>
			</div>
		</section>

		<section class="tahap-pemesanan-list">
			<div class="border-top-list hidden-xs hidden-sm"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-6 col-md-6">
						<h4><b>We are ready to assist you in creating web systems, and also:</b></h4>
						<ul style="list-style-type: square;">
							<li class="m-b-5">Make and/or operate a homepage</li>
							<li class="m-b-5">Rebuild and optimize it for mobile/smartphones</li>
							<li class="m-b-5">Develop an Android/iOS application</li>
							<li class="m-b-5">Operate an in-house management system</li>
							<li class="m-b-5">Manage IT infrastructure</li>
							<li class="m-b-5">Audit IT security, but is already structured from Japan</li>
							<li class="m-b-5">Increase awareness of your company/brand through digital marketing</li>
							<li class="m-b-5">Achieve online marketing targets with online advertising</li>
							<li class="m-b-5">Design and print company promotional materials for distribution</li>
							<li class="m-b-5">Manage the operation of SNS (Facebook, Instagram, Twitter, Youtube)</li>
							<li class="m-b-5">Update the content and operation of your website</li>
							<li class="m-b-5">Create and install chatbots online for your website</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="border-top-list-2 hidden-xs hidden-sm"></div>
		</section>
		<section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
		<footer class="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2 style="margin-top: 0">Contact Logique</h2>
						<a href="/" target="_blank"><img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="cs-custom"></a>
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
									<a href="https://www.facebook.com/logique.id/" target="_blank"><i class="fa fa-facebook-official" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
								<div class="col-xs-3">
									<a href="https://twitter.com/LogiqueDigital" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
								<div class="col-xs-3">
									<a href="https://www.instagram.com/logiquedigital/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
								<div class="col-xs-3">
									<a href="https://www.linkedin.com/company/13420656" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true" style="font-size: 35px;margin-top: 10px;"></i></a>
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
										<input type="text" class="form-control" placeholder="Name" name="name" value='<?php echo $formproc->SafeDisplay('name') ?>'>
									</div>
									<!-- <div class="form-group">
										<input type="number" class="form-control" placeholder="No Ponsel" name="phone" value='<?php echo $formproc->SafeDisplay('phone') ?>'>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Perusahaan" name="company" value='<?php echo $formproc->SafeDisplay('company') ?>'>
									</div> -->
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email" name="email" value='<?php echo $formproc->SafeDisplay('email') ?>'>
									</div>
									<div class="form-group">
										<textarea name="" id="" cols="30" rows="6" class="form-control" placeholder="Message" name="message" style="resize:vertical;"><?php echo $formproc->SafeDisplay('message') ?></textarea>
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