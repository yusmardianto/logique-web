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
						<h1 class="text-left m-new">The Making of Web Systems In Logique</h1>
					</div>
				</div>
			</div>
		</header>
		<section class="style-1" style="padding-bottom: 0;padding-top:20px;">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1>“The definitive use of the latest technology for maximum service to clients and customers.”</h1>
					</div>
				</div>
			</div>
		</section>
		<section class="style-2">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-7 col-md-5">
						<h1 class="new5">The <span class="underline">Technical</span> Summary</h1>
					</div>
				</div>
			</div>
		</section>
		<section class="style-3">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h3 class="new1">[Technology Usage]</h3>
						<p class="new4">Technology is growing very rapidly. The proper use and methods of technology can provide maximum benefits for your system. As one of the top leading web development companies, Logique has been implementing the latest technology and programming language in web development, web systems, and mobile applications. Some of our implementations include AngularJS, Node.JS, Socket.IO, and Ionic Framework.</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Infrastructure Planning]</h3>
						<p class="new4">Amazon Web Service (AWS) has been widely recognized as a global standard of powerful server infrastructure cloud services. Both large and startup companies have used AWS services because they are able to provide high levels of security and availability as well as flexible scalability. In Indonesia, there are still very few companies that are able to make the most of AWS services. Logique comes with strong experience in designing and managing AWS-based infrastructure for companies in Indonesia.</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[System Security]</h3>
						<p class="new4">Security is one of the important factors in web systems development, especially if the system covers financial transactions such as e-commerce or storing important company data. As one of the most trusted developers in Indonesia, Logique provides a high level of security check services for websites and web systems.</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Development Speed]</h3>
						<p class="new4">We understand the importance of your time and business. Therefore, we always try our best to produce the system in the most effective and efficient time without reducing the quality of the system.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
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
									<p>JBA is one of the largest auction companies in Indonesia from Japan and currently located in Meruya. For JBA, we develop a comprehensive system for auction purposes that has a direct impact on their business. The system coverage that we make is from up to downstream, which includes registration, inspection, auction planning and administration, offline and online auction support, and reporting and accounting modules. Our work on this system is carried out with intensive communication and extreme details with each user according to their fields. This system continues to be developed over the past three years in the form of web systems and mobile applications.</p>
								</div>
							</div>
							<div class="row">
								<div class="box-2">Main Technology: NodeJS, SocketIO, Android Native</div>
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
						<h1 class="new6"><span class="underline2">Q&A with</span><br>our clients</h1>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: How did you initially have the need to make this system?</h4>
								<p>Client: At first we did a lot of things manually. With the number of vehicles that we had to auction in various branches in Indonesia, as well as the high interest of the customers, it made us difficult. There, we began to think about the need for an IT system that helps our business as a whole.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: What changes are felt after using the system created by Logique?</h4>
								<p>Client: The impact is enormous. When everything is automated, the work we are doing becomes more effective and efficient. In terms of the risk of recording on books that may be damaged or lost, it is also avoided by the existing system. They also added a contribution to the environment by reducing paper use.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: How is the experience of your collaboration with Logique in making this system?</h4>
								<p>Client: We think that Logique team is really filled with competent people. I cannot imagine how our complex business processes can be made into a comprehensive system including small processes that cannot be missed, all can be fulfilled. We are satisfied with Logique&#39;s performance and recommend their services to all those in need.</p>
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
								<h1 class="new2">The main keys to success of Logique’s system creation:</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Experience</h4>
								<p>We have handled more than 200 projects from various industries in Indonesia, in terms of creating a website, web system, or mobile applications.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Acceleration</h4>
								<p>Timeliness is very important to us. We always try to deliver results quickly so that the work we produce have an immediate impact on the client&#39;s business.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Quality</h4>
								<p>We apply the best analysis and application methods in every development to produce high quality web systems and mobile applications, in functional, performance, and security aspects.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Flexibility</h4>
								<p>If you have a technical team, we are open for discussion about the details of the implementation, tools, or scheme that you want to use on a website, web system, or mobile application development.</p>
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
							<li class="m-b-5">Make and/or operate the homepage</li>
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