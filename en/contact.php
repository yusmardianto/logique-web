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
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" itemprop="description" content="Please feel free to contact us and ask anything about website creation, web-system development, web-marketing, designing, mobile application development etc, in Indonesia.">
	<meta name="keywords" content="Inquiries, contact us, website creation, web-system development, web marketing, pamphlet, mobile application">
	<meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Inquiry about website / web-system and maintenance in Jakarta | LOGIQUE Digital Indonesia">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Logique">
	<meta property="og:url" content="https://www.logique.co.id/en/contact.php">
	<meta property="og:image" content="https://www.logique.co.id/img/logo.png">
	<meta property="og:description" content="Please feel free to contact us and ask anything about website creation, web-system development, web-marketing, designing, mobile application development etc, in Indonesia.">
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <title>Inquiry about website / web-system and maintenance in Jakarta | LOGIQUE Digital Indonesia</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<script src="https://use.fontawesome.com/df558bb4a1.js"></script>
    
    </head>
	<body>
		<div class="wrapper">
		
			<!-- NAVIGATION -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
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
							<a href="about.php">
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
							<a href="joinus.php">
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
							<a href="https://www.logique.co.id/blog/" target="_blank">
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
								<li><a href="../contact.php">ID</a></li>
								<li><a href="../jp/contact.php">JP</a></li>
							</ul>
							<a href="index.php"><img src="../img/logo.png" alt="Logo" class="img-responsive logo"/></a>
							<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
							  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="index.php"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li>
							  <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" ><a itemprop="item" ><span itemprop="name">Contact Us</span></a><meta itemprop="position" content="2" /></li>
							</ol>
							<h1 class="tagline">Contact us and ask us anything about website development, internet marketing, application development, and designing.</h1>							
						</div>
					</div>
				</div>
			</div>			
			
			<br/>
			
			<div id="contentsArea">
				<div id="contents">
					<div class="map-container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.8748090433066!2d106.82702104991579!3d-6.296598097694437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f206effdebf1%3A0xca2d9403de2bfbe1!2sAD+Premier+Office+Park!5e0!3m2!1sen!2sid!4v1499330296225" allowfullscreen></iframe>
					</div>
					<div class="title"><b>Contact</b><span class="yellow">Us</span></div>
					<div class="form-container"  style="padding-top: 10px;">
						<div class="box-jika">
							<div class="row">
								<div class="col-lg-2">
									<div class="jika-title"><span>"</span>&nbsp;If</div>
								</div>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-sm-4">
											<div class="contact-copies">
												You would like to grow your <span class="yellow">Website</span> as one of <b>the most important sales channels</b>.
											</div>
										</div>
										<div class="col-sm-4">
											<div class="contact-copies">
												You would like <b>to make a difference</b> from competitors in marketing by utilizing <span class="yellow">Website</span>.
											</div>
										</div>
										<div class="col-sm-4">
											<div class="contact-copies">
												You would like <b>to develop your business</b> using <span class="yellow">Website</span> as the key.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><br/>	
						LOGIQUE has led our clients' web-marketing in all over south east Asia to successes in their business by developing websites, developing web systems, building mobile apps, improving SEO, and analyzing traffics.<br/>
					</div>
					<div class="highlights-contact">We can contribute to your business if you think Web is the key to the success for your business.</div>
					<div class="form-container">	
					<br/>					
						<b>Before contacting us.</b><br/>
						We are consist of Japanese and Indonesian team. You can contact us either in Indonesian, English, or Japanese.<br/>
						Many customers ask us “How much does it cost to develop a website?“ That is a very difficult question.<br/>
						We have experienced developing a simple website with around 15,000,000 IDR, but it is hard to tell you that the website is going to bring you any results. If you compare web developers in Indonesia there are a lot of companies that are much cheaper than us. We are sure that we can deliver a value in case you are looking for a reliable web developer that leads you to the goal and success for your business.<br/>
						Of course we also will help you as well in case you would like to develop a minimum-scaled website with limited budget.<br/><br/>
						
						<div class="highlights2-contact">
							Feel free to contact LOGIQUE about website creation, social media, inquiry about web-related consultation, or designing.
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
										<input type="text" class="form-control" id="companyname" name="companyname" value='<?php echo $formproc->SafeDisplay('companyname') ?>' placeholder="COMPANY NAME">
									</div>
								</div> 
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="NAME">
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="number" class="form-control" id="phone" name="phone" value='<?php echo $formproc->SafeDisplay('phone') ?>' placeholder="PHONE NUMBER">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
									  <input type="email" class="form-control" id="email" name="email" value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="E-MAIL">
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
									  <label><input type="checkbox" name="inquiry[]" value="We are looking for consultant to start a business in Indonesia">We are looking for consultant to start a business in Indonesia</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="We would like to visit your office when we are going to Jakarta for a business trip">We would like to visit your office when we are going to Jakarta for a business trip</label>
									</div>
								</div>
								<div class="clearfix"></div><br/>
								<div class="col-lg-12">
									<div class="form-group">
										<textarea class="form-control" name="message" placeholder="MESSAGE"><?php echo $formproc->SafeDisplay('message') ?></textarea>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-sm-10">
									<div class="g-recaptcha pull-right" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
									<div class="clearfix"></div><br/>
								</div>
								<div class="col-sm-2 paddingleft">
									<button type="submit" class="btn btn-submit btn-block">Submit</button>
								</div>
							</form>
						</div>
					</div>
					<div class="bg-grey">
						<div class="title-bg-grey">Procedure from inquiry</span></div><br/><br/>
						<div class="klien-flow contact-flow row">
							<div class="col-sm-3">
								<div class="div-for-workflow">
								  <div class="valign-center">
										We will reach you within 2 working day.
								  </div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="div-for-workflow">
									<div class="valign-center">
										We will confirm several things with you.
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="div-for-workflow">
									<div class="valign-center">
										Deeper hearing, proposal, and quotation. 
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="div-for-workflow">
									<div class="valign-center">
										Contract and Start the Project.
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
						
						<br/><br class="hidden-xs"/><div class="label-questions">Frequently asked questions:</div><br/>
						<div class="question">Is it possible for you to proceed the project communicating in English?</div>
						<div class="answer">It is basically possible, thought there might be some difficult cases to proceed in English. Most of our staffs are able to communicate in English enough to proceed the projects. We are also open to the projects with companies in overseas.</div>
						<br/>
						<div class="question">Is it possible for you to have meetings overseas?</div>
						<div class="answer">Let us discuss about it with you first. Mostly we are offering video conference, but we might be able to go flexible depending on the case.</div><br/>

						<div class="question">We are thinking to change our current web / system outsourcer and replace them with you.</div>
						<div class="answer">Please contact us without any hesitation first and you do not need to worry too much about documentation and so on. In most of the cases we experienced, we are able to manage and operate the web / system even when there is not much handover documents, as long as the previous outsourcer was using general technologies.</div><br/>

						<div class="question">We are looking for a developer to build a management system for our business.</div>
						<div class="answer">We are capable of developing various kinds of system with experiences of system developing such as customer management system, loan management system, recruitment system, pointing system, e-Commerce, contents management system, and more. We are expertized in system-developing with open web technologies. Please contact us to discuss more details with us.</div><br/>

						<div class="question">We want to have a partnership / distributor contract with LOGIQUE.</div>
						<div class="answer">Let us talk about it with you in detail. Please feel free to visit our office if your planning any trips to Jakarta.</div><br/>
						
						<div class="question">We want to build an mobile application.</div>
						<div class="answer">We are capable of developing both Android and iOS applications for you. We will conduct planning of the mobile application as well if you would like us to.</div><br/>
						
						<div class="question">We would like to print a marketing tool but are you providing printing service other than designing?</div>
						<div class="answer">We can of course both design and print pamphlets. And we are also able to design and print other products such as T-shirts. In case you need to print something extremely difficult, you might better look for other company. We can also introduce you to the companies that we know if you would like us to.</div><br/>
						
						<div class="question">Are you capable of implementing SEO in Indonesian language?</div>
						<div class="answer">Yes. We have proved our SEO skills showing various website on the upper ranks in many industries such as finance, travel, education, etc. Our team that consist of Indonesian contents writers and Indonesian marketer will provide you the best result in SEO. We are also able to implement SEO in English and Japanese as well.</div><br/>
					</div>
				</div>
			</div>
			
			<?php include 'footer.php';?>
			
		</div>
	</body>
</html>