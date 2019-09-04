<?php
require_once("../form/fgcontactform.php");

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
        $responseData = json_decode($verifyResponse);
        if ($responseData->success) {
            if ($formproc->ProcessForm()) {
                $msg = "<div class='alert alert-success' id='msg' role='alert'>Thank you for sending us inquiry!</div>";
            }
        } else {
            $msg = "<div class='alert alert-warning' id='msg' role='alert'>reCAPTCHA verification failed, please try again.</div>";
        }
    } else {
        $msg = "<div class='alert alert-warning' id='msg' role='alert'>Please click the reCAPTCHA box.</div>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description" content="Maximize and increase your business profits through digital growth with LOGIQUE Digital Indonesia, the top Web Development/Design, Digital Marketing and IT consultancy in Jakarta. Contact us to ask more about digital marketing in Indonesia, and how we can help grow your company.">
	<meta name="keywords" content="Inquiries, contact us, website creation, web-system development, web marketing, pamphlet, mobile application">
	<meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Contact about Digital Marketing Indonesia | LOGIQUE Digital Indonesia">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Logique">
	<meta property="og:url" content="https://www.logique.co.id/en/contact.php">
	<meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
	<meta property="og:description" content="Grow and increase your business profit through digital with LOGIQUE Digital Indonesia, the top Web Developer / Design, Digital Maketing, & IT Consultant in Jakarta. Contact us to ask more about digital marketing in Indonesia and how we can help your business.Maximize and increase your business profits through digital growth with LOGIQUE Digital Indonesia, the top Web Development/Design, Digital Marketing and IT consultancy in Jakarta. Contact us to ask more about digital marketing in Indonesia, and how we can help grow your company.">
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <title>Contact about Digital Marketing Indonesia | LOGIQUE Digital Indonesia</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    </head>
	<body>
		<div class="wrapper">

			<!-- NAVIGATION -->
			<button type="button" class="navbar-toggle collapsed" aria-label="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar first"></span>
				<span class="icon-bar second"></span>
				<span class="icon-bar third"></span>
			</button>

			<div class="collapse navbar-collapse" id="myNavbar">
			<div class="backdrop-test"></div>
				<div class="logique-nav">
					<div class="margin-for-nav">
						<div class="text-center">
							<a href="index.php">
								<div class="img-home"></div>
								Home
							</a>
						</div>
						<div class="text-center">
							<a href="logique.php">
								<div class="img-about"></div>
								About Us
							</a>
						</div>
						<div class="text-center">
							<a href="portfolio.php">
								<div class="img-portfolio"></div>
								Portfolio
							</a>
						</div>
						<div class="text-center">
							<a href="services.php">
								<div class="img-services"></div>
								Services
							</a>
						</div>
            <div class="text-center">
							<a href="product.php">
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
						<div class="text-center active">
							<a href="contact.php">
								<div class="img-contact"></div>
								Contact Us
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
			<!-- NAVIGATION -->

			<!-- <div id="bgImg" class="others"><div class="img"></div></div> -->
			<div class="contain-video">
				<video poster="../img/video-img.png" id="bgvid" playsinline autoplay muted loop>
					<source src="../img/12377093.mp4" type="video/mp4">
				</video>
			</div>
			<div class="bg-white-opacity"></div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="lang-logo">
							<ul class="list-inline">
								<li class="active"><a href="#">EN</a></li>
								<li><a href="../hubungi-kami.php">ID</a></li>
								<li><a href="../jp/contact.php">JP</a></li>
							</ul>
							<a href="index.php"><img src="../img/logo.png" alt="Logo" class="img-responsive logo"/></a>
							<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
							  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="index.php"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li>
							  <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" ><a itemprop="item" ><span itemprop="name">Contact Us</span></a><meta itemprop="position" content="2" /></li>
							</ol>
							<h1 class="tagline">Contact us and ask us about anything to do with Web Creation/Development, Internet Marketing, Design, and anything else related to the digital world.</h1>
						</div>
					</div>
				</div>
			</div>

			<br/>

			<div id="contentsArea">
				<div id="contents">
					<div class="contact-title-copies"><span class="yellow">LOGIQUE DIGITAL INDONESIA</span> offers solutions for your digital business problems, anytime and anywhere.</div>
					<div class="form-container"  style="padding-top: 10px;">
						<!--<div class="box-jika">
							<div class="row">
								<div class="col-lg-2">
									<div class="jika-title"><span>"</span>&nbsp;If</div>
								</div>
								<div class="col-lg-10">
									<div class="contact-copies">
										You would like to grow your <span class="yellow">Website</span> as one of <b>the most important sales channels</b>.
									</div>
									<div class="contact-copies">
										You would like <b>to make a difference</b> from competitors in marketing by utilizing <span class="yellow">Website</span>.
									</div>
									<div class="contact-copies">
										You would like <b>to develop your business</b> using <span class="yellow">Website</span> as the key.
									</div>
								</div>
							</div>
						</div><br/>	-->
						<div>
					Thank you for showing interest in our products. If you wish to obtain further information about our services in regards to web creation/development, SEO optimization and in other IT related matters, please contact us and ask us about anything by clicking the button below.						</div>
						<div class="text-center">
							<a class="btn btn-hubungi smooth" href="#anchorForm">
								Contact Us Now
							</a>
						</div>
					</div>
					<img class="img-responsive kontak-img" src="../img/kontak-img.jpg" alt="Kontak Kami"/>
					<div class="highlights-contact">If you feel that improving your website is the key to your business’s success, we are ready to help you.</div>
					<div class="form-container">
					<br/>
						<!--<b>Before contacting us.</b><br/>
						We are consist of Japanese and Indonesian team. You can contact us either in Indonesian, English, or Japanese.<br/>
						Many customers ask us “How much does it cost to develop a website?“ That is a very difficult question.<br/>
						We have experienced developing a simple website with around 15,000,000 IDR, but it is hard to tell you that the website is going to bring you any results. If you compare web developers in Indonesia there are a lot of companies that are much cheaper than us. We are sure that we can deliver a value in case you are looking for a reliable web developer that leads you to the goal and success for your business.<br/>
						Of course we also will help you as well in case you would like to develop a minimum-scaled website with limited budget.<br/><br/>-->
						<div>With 7 years of experience, LOGIQUE is trusted by various companies at both the national and international levels. In addition, through our professional team, we will be able to offer you with the highest quality of service for all of your projects.</div>
						<div class="highlights2-contact" id="anchorForm">
						Feel free to contact LOGIQUE about creating a website, or inquire about any SEO, social media, web or design related questions you may have.
						</div><br/>
	                    <?php if(isset($msg))
	                    {
	                    echo $msg;
	                    }
	                    ?>
						<div class="row">
							<form class="contactform" id="moresco-contactform" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
								<input type='hidden' name='submitted' id='submitted' value='1'/>
								<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
								<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" id="companyname" name="companyname" aria-label="Company Name" value='<?php echo $formproc->SafeDisplay('companyname') ?>' placeholder="COMPANY NAME">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" aria-label="Name" value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="NAME">
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="number" class="form-control" id="phone" name="phone" aria-label="Phone" value='<?php echo $formproc->SafeDisplay('phone') ?>' placeholder="PHONE NUMBER">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
									  <input type="email" class="form-control" id="email" name="email" aria-label="Email" value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="E-MAIL">
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12">
									<b>Inquiry item:</b>  <i>(Multiple answers allowed)</i>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-5">
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="About website creation">About website creation</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="About web-system development / maintenance">About web-system development / maintenance</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="About web marketing / SEO">About web marketing / SEO</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="About internet advertisement">About internet advertisement</label>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="About company profile, pamphlet, and other printings">About company profile, pamphlet, and other printings</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="We are looking for companies that would join the tender">We are looking for companies that would join the tender</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="We are looking for consultants to start a business in Indonesia">We are looking for consultants to start a business in Indonesia</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="We would like to visit your office when visiting Jakarta for a business trip">We would like to visit your office the next time you are in Jakarta for a business trip.</label>
									</div>
								</div>
								<div class="clearfix"></div><br/>
								<div class="col-lg-12">
									<div class="form-group">
										<textarea class="form-control" name="message" aria-label="Message" placeholder="MESSAGE"><?php echo $formproc->SafeDisplay('message') ?></textarea>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-sm-10">
									<div class="g-recaptcha pull-right" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
									<div class="clearfix"></div><br/>
								</div>
								<div class="col-sm-2 paddingleft">
									<button type="submit" class="btn btn-submit btn-block" onclick="ga('send', 'event', 'Button-Kirim-ENG', 'Action-Click', 'Button-Kirim-ENG-Label');">Submit</button>
								</div>
							</form>
						</div>
						<br/>
						<div class="row">
							<div class="col-md-12 text-center sosmed-contact">
								<a href="https://www.facebook.com/logique.id/" target="_blank" aria-label="Facebook" rel="noreferrer"><i class="fa fa-facebook-official" style="color:#3b5999"></i></a>
								<a href="https://twitter.com/LogiqueDigital" target="_blank" aria-label="Twitter" rel="noreferrer"><i class="fa fa-twitter" aria-hidden="true" style="color:#0084ff"></i></a>
								<a href="https://www.instagram.com/logiquedigital/" target="_blank" aria-label="Instagram" rel="noreferrer"><i class="fa fa-instagram" aria-hidden="true" style="color:#e4405f"></i></a>
								<a href="https://www.linkedin.com/company/13420656" target="_blank" aria-label="LinkedIn" rel="noreferrer"><i class="fa fa-linkedin-square" aria-hidden="true" style="color:#0077B5"></i></a>
								<a href="https://api.whatsapp.com/send?phone=62811870321" target="_blank" aria-label="WhatsApp" rel="noreferrer"><i class="fa fa-whatsapp" style="color:#25D366"></i></a>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-md-12">
								If you are seeking further information about various matters related to our company, please select one of the options below:
							</div>
							<div class="col-md-4">
								<a target="_blank" href="services.php" class="btn btn-hubungi btn-block">LOGIQUE Services</a>
							</div>
							<div class="col-md-4">
								<a target="_blank" href="logique.php" class="btn btn-hubungi btn-block">About LOGIQUE</a>
							</div>
							<div class="col-md-4">
								<a target="_blank" href="/career/" class="btn btn-hubungi btn-block">LOGIQUE Career</a>
							</div>
						</div>
					</div>
					<div class="bg-grey">
						<div class="title-bg-grey">Procedure of inquiry forms</span></div><br/><br/>
						<div class="klien-flow contact-flow row">
							<div class="col-sm-3">
								<div class="div-for-workflow">
								  <div class="valign-center">
										We will reach you within 2 working days.
								  </div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="div-for-workflow">
									<div class="valign-center">
										We will confirm with you.
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="div-for-workflow">
									<div class="valign-center">
										A more in-depth hearing, a proposal and quotation
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="div-for-workflow">
									<div class="valign-center">
										Contract signing and project initiation
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					<!--<div class="form-container">
						<br/>
						<span class="characteristic-title">Inquiry example</span><br/><br/>
						<ul class="joinus-ul">
							<li>We would like to develop a website.</li>
							<li>We would like to renew / update our website.</li>
							<li>We would like to develop campaign page / landing page.</li>
							<li>We would like to outsource our website operation.</li>
							<li>We are looking for web server to rent and a company to maintain it.</li>
							<li>We would like to develop web system.</li>
							<li>We would like to build mobile apps.</li>
							<li>We would like to improve SEO on our website.</li>
							<li>We would like to post / operate internet advertisement.</li>
							<li>We would like to analyze the traffics on our website.</li>
							<li>We would like a company to consult our internet business.</li>
							<li>We would like to conduct contents marketing.</li>
							<li>We would like to conduct photo shooting and video creation.</li>
							<li>We are looking for a company that can design company profile or other printings for exhibition.</li>
						</ul>
					</div>-->

						<br/><br class="hidden-xs"/><div class="label-questions">Frequently asked questions:</div>
						<h3 style=" line-height: 1; padding: 15px 0 20px;">Contact us regarding anything about web creation, system development, online marketing, design or various other topics related to the digital world.</h3>
						<div class="question">Is it possible to proceed with a project using the English language?</div>
						<div class="answer">It is possible, though there may be some difficulties. Most of our staff is able to communicate in English at a practical level. We have also ventured to start projects with overseas companies.</div>
						<br/>
						<div class="question">Is it possible for you to have a meeting overseas?</div>
						<div class="answer">Let us discuss the matter with you first. Mostly, we offer video conference calls, but we might be able to be flexible depending on the case.</div><br/>

						<div class="question">We are thinking about changing our current web/system outsourcer and seek to replace them with you.</div>
						<div class="answer">Please contact us without any further hesitation. There is no need to worry too much about documentation, etc. In most cases, We are able to develop a wide range of digital products through years of experience in the field of customer management systems development. We are also capable of developing systems to improve recruitment, e-commerce, pointing, and content and loan management, among many other things. We are experts in systems development, further utilizing open web technologies to their highest utility. Please contact us for further details.</div><br/>

						<div class="question">We are seeking a developer to build a management system for our business.</div>
						<div class="answer">We are capable of developing various kinds of systems through previous experience in the field of customer management systems development, as well as developing systems for improved recruitment, e-commerce, pointing, and content and loan management, among many others. We are experts in system development, utilizing open web technologies. Please contact us for further details.</div><br/>

						<div class="question">We want to have a partnership / distributor contract with LOGIQUE.</div>
						<div class="answer">Let us talk about it with you in further detail. Please feel free to visit our office if you are planning any trips to Jakarta.</div><br/>

						<div class="question">We want to build a mobile application.</div>
						<div class="answer">We are capable of developing both Android and iOS applications for you. We can begin planning the development of the mobile app as well, if you require it.</div><br/>

						<div class="question">We would like to print a marketing tool, are you able to offer printing as well as designing services?</div>
						<div class="answer">We can of course both design and print pamphlets. And we are also able to design and print other products such as T-shirts. In case you need to print something extremely difficult, you might better look for other company. We can also introduce you to the companies that we know if you would like us to.</div><br/>

						<div class="question">Are you capable of implementing SEO in the Indonesian Language?</div>
						<div class="answer">Yes, and we have a proven track record of excellence in that area; helping many industries in the finance, travel and education fields promote their website so that it’s found in the upper ranks of the search results. Our team, consisting of many Indonesian content writers and marketers, will help provide you with the best SEO results. We are also able to implement SEO in the English and Japanese languages, as well.</div><br/>
					</div>
					<div class="map-container">
						<iframe title="Office Map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.8748090433066!2d106.82702104991579!3d-6.296598097694437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f206effdebf1%3A0xca2d9403de2bfbe1!2sAD+Premier+Office+Park!5e0!3m2!1sen!2sid!4v1499330296225" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<?php include 'footer.php';?>
			<script>
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
			</script>
		</div>
	</body>
</html>
