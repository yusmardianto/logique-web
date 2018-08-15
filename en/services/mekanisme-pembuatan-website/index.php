 <?php 
require_once("form/fgcontact_webdev.php");

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
    <meta name="description" content="As one of the best website developers in Indonesia, Logique has their own mechanism in website creation, website development, application development, and web design. Here are simple explanations of each step that Logique takes to create a website.">
	<meta name="keywords" content="create a website, website creation, web creation, website design, web builder, web developer, web development, website development, website developer, application development, web security, web design, web programming, logique digital indonesia.">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Mechanism of Creating a Website in LOGIQUE | LOGIQUE Digital Indonesia</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style_webdev.css" rel="stylesheet">
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
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="/en/" target="_blank">
							<div class="logo-header">
								<img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="img-responsive">
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div style="position:relative">
						<div class="language-btn">
							<ul class="list-inline">
								<li><a href="/layanan/mekanisme-pembuatan-website">ID</a></li>
								<li class="active"><a href="#">EN</a></li>
								<li><a href="/jp/services/mekanisme-pembuatan-website">JP</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-offset-3 col-md-7 m-t-7em">
						<h1 class="text-right">
							Mechanism of Creating a Websi<span class="underline">te in <span class="c-logique">Logique</span></span>
						</h1>
						<div class="subtitle-header">
							As one of the finest website developers in Indonesia, Logique has everything that it takes to build a website that is not only well maintained, but also user-friendly, responsive, attractive designed, and search engine optimized for your business.
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
							<h1><b>Why Logique?</b></h1>
							<br>
							<p class="p-b-20">
								For years, Logique has been trusted in website creation, website development, and web design in Indonesia. We’ve been working with clients from local and international level with various fields. They are the ones who believe in the great functionality of digital world as we live in now, and your business can be brought to it with our help, too.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="obstacle" style="padding-top: 20px">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-7 border-l text-right">
						<h2 class="text-right">Steps of website creation in Logique</h2>
						<p class="text-right">
							Logique has its own way to build a great quality website that suits the needs of your business. Creating a website with a content management support (CMS) usually needs 1-3 months from its first scratch to launch time. In terms to create a website, website development, application development, and web design, Logique has its own mechanism. Here are simple explanations of each step that Logique takes to create a website.
						</p>
					</div>
					<div class="col-md-3 text-center hidden-xs hidden-sm">
						<a href="/en/" target="_blank"><img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="custom-2"></a>
					</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-6 col-md-6">
						<div class="card">
							<section>
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom">1</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>Booking</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>
									Our team is ready to get your message anytime to create a website based on your desires. If you currently need a high optimized website, or further explanation about how creating a website can help your business, you can directly contact us through email <a style="color:#333" href="mailto:info@logique.co.id"><u>info@logique.co.id</u></a> or simply fill the form <a style="color:#333" target="_blank" href="/hubungi-kami.php"><u>here</u></a>. After hearing from you, we will immediately take a process.</p>
								</div>
							</div>
							</section>
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
									<p class="title-custom-p"><b>Understanding your need</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>
										Every business, whether it is small or big, must have their own characteristic and needs. Thus, to create a website that suits your business, a targeted approach is needed to actualize your vision. In this phase, we will focus on listening and understanding your needs, so we can give you offers of what kind of an effective website that can help you.
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
									<p class="title-custom-p"><b>Proposal Submission</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>After understanding everything, we will create a plan framework in a form of a proposal. The proposal will also include the price service as well as how long the time needed in the website creation. It’s all based on our transparency method, the difficulty level, and the number of team members needed to complete it. This certainly makes the budget more effective. In addition, we will also provide optional services, such as photography, videography, and content creation.</p>
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
									<p class="title-custom-p"><b>Contract Procession</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>If you’re down to what we offer, the next process is the contract signing and the payment of 50% in advance. Soon after it’s all done, our team can start to create a website for you.</p>
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
									<p>Before starting the website creation, we need to confirm all the details with you so there are no missed points that cause obstacles in the future. In this phase, we need to collaborate and discuss about each feature point listed in our document with you. Next, we will create a wireframe that can be used as a reference.</p>
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
									<p class="custom-p-2"><b>Working on the web design</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<div class="border-right-custom"></div>
									<p>We start working on the web design by creating a concept for your homepage based on your company design or any reference you provide. Our designer team will then provide several web design alternatives for you to choose and revise if needed. If you approve, we will create the rest of the pages based on the main web design. </p>
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
									<p class="custom-p-2"><b>Next, the functional work</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>While the web design is being processed, we start preparing the functional project which includes the data architecture and the website creation itself. After the architectural basis has been formed, we will get to the functional work for each feature. This concept is to ensure that the website we create is well structured for your targeted audience experience.</p>
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
									<p class="title-custom-p"><b>Testing</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>At this website creation stage, we do several tests, which are internal testing, demonstration, and test by clients. We do internal testing when every feature has been done by our web developer, to make sure the website is running well before being handed to the client. After that, we will periodically demonstrate the features to the client, where the client will be able to directly provide us feedbacks for each feature. When the project has entered the finalization stage, it will be tested by the client as a proof that all functions have been confirmed and are running well.</p>
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
									<p>This is the most awaited phase by our clients, where the website is ready to launch on a date that we’ve both agreed before. If you have some data on your old website, transferring them to the new one will take 1-3 days. This certainly needs to be taken into account before determining the website launch date. The rest of your 50% payment is also will be collected at this stage.</p>
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
									<p class="title-custom-p"><b>Maintenance Phase</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>The launching is not the end of everything, but rather the beginning, because you need to constantly manage the website well in order to provide maximum results. Logique provides management services, starting from observing the system or carrying out daily operations to make it easier for you. Our clients have been working with us for more than 3 years and we still continue to provide them maximum service to create long-term cooperative relationships.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="layanan p-t-10-m">
			<div class="container">
				<div class="row hidden-md hidden-lg">
					<div class="col-md-12">
						<h2 class="m-m-10">LOGIQUE's Services</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2 class="custom-3">Mobile Application Development</h2>
						<p class="min-h">We are able to develop Android / iOS Apps that suit Indonesian market. We just not plan or use new technologies, but we use the plan into UI and UX, design, application development, and register the apps to provide you comprehensive service. Boasting a dedicated and experienced team of mobile app developers, specializing in iOS and Android apps, we have delivered mobile apps development services for numbers of clients in Indonesia.</p>
						<div>
							<a href="/en/services/pembuatan-aplikasi-mobile/" target="_blank" class="btn btn-logic btn-md">See More</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="border-top-custom-2 hidden-xs hidden-sm">LOGIQUE's Services</div>
						<h2 class="custom-3">Recruitment Website Creation</h2>
						<p class="min-h">Nowadays, it is getting harder for companies to hire an ideal human resource for their business. To have your own recruitment website is the key to succeed in hiring. It will be the key to tell the visitors about your company, employees, and human resources that you are looking for with clear message (e.g. utilizing interview video).</p>
						<div>
							<a href="/en/services/pembuatan-website-karir-perusahaan/" target="_blank" class="btn btn-logic btn-md">See More</a>
						</div>
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">WEB Security Assesment</h2>
						<p class="min-h">We test and report the vulnerability of your web-application. With the scanning, you can protect your web-application from being attacked by SQL injection, cross-site scripting, session-jacking, etc. Our expert will conduct the test utilizing scanning tools. We can conduct the vulnerability test and reporting starting from 10,000,000 IDR.</p>
						<div>
							<a href="/en/services/penetration-testing/" target="_blank" class="btn btn-logic btn-md">See More</a>
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
						<h4><b>We are ready to assist you in creating a website, and also:</b></h4>
						<ul>
							<li class="m-b-5">Make and/or operate the website</li>
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
						<h2 style="margin-top: 0">Contact LOGIQUE</h2>
						<a href="/en/" target="_blank"><img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="cs-custom"></a>
						<div class="m-t-10 text-left">LOGIQUE DIGITAL INDONESIA<br>
						Ad Premier Building 19th Floor. <br>
						Jalan Tb. Simatupang No. 5 Ragunan, <br>
						Ps. Minggu, Jakarta Selatan, <br>Indonesia 12550</div>
						<div>021) 22708935 / 36 <br>081296560380</div>
						<br/>
						<div class="row">
							<div class="col-xs-6">
								<div class="link-footer-webdev">
									<a href="/en/index.php" target="_blank">Home</a>
									<a href="/en/about.php" target="_blank">About Us</a>
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
					</div>
					<div class="col-md-4 hidden-md hidden-lg">
						<span><hr>LOGIQUE provides the best solution, optimised for your business, as a professional team in web consulting, website creation, Smartphone website creation, responsive web design creation, system development, and graphic creation. We develop structured creative websites thoughtfully from large-scale corporate websites to smartphone websites with the combination of art direction and information architecture design.</span>
						<div class="row">
							<div class="col-sm-12">
								<div class="link-footer-webdev">
									<br/>
									<div style="margin-bottom:8px"><b>LOGIQUE's Products</b></div>
									<a href="/en/product/dokodemo-kerja.php" target="_blank">Dokodemo-Kerja</a>
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
							<div class="row">
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
										<textarea style="resize:none" name="" id="" cols="30" rows="6" class="form-control" placeholder="Message" name="message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
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
							<div class="col-sm-12">
								<div class="link-footer-webdev" style="padding-left:30px">
									<br/>
									<div style="margin-bottom:8px"><b>LOGIQUE's Products</b></div>
									<a href="/en/product/dokodemo-kerja.php" target="_blank">Dokodemo-Kerja</a>
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