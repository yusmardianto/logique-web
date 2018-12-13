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
							Ready to Create <br class="hidden-xs"><span class="underline">Your Website</span>
						</h1>
						<div class="subtitle-header">
							Having a website can bring numerous benefits for your business. Attract customers, bring more inquiries, and increase conversions. All happens efficiently. And, if your website is great and beautifully designed, it can give class to your customers, higher branding, and well-built identity. But, how do you create a website with such advantages? Leave it all to LOGIQUE, the number one website creation company in Indonesia with variety of well-known achievements.
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
							<h1><b>LOGIQUE, the number one choice to website creation in Indonesia</b></h1>
							<br>
							<p class="p-b-20">
								LOGIQUE consists of developers, designers, and content writers who are professionals and experts in their fields. We guarantee that you will have a high quality website with international standards based on your needs and desires. We thoroughly understand how web works in Indonesia. It’s all very diverse, and we have handled many kinds of website in many fields, including government organizations and financial institutions. Those are made with variety of requests, from secure to miss-allowable websites, webs that require high creative demands, and complicated programming. It’s all taken care of with flexibility and speed. And, even though we are an international company, we have extensive knowledge of how digital business can work well in Indonesia. Therefore, if you need a great-built website in Indonesia, please consult LOGIQUE anytime.
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
						<h2 class="text-right">More Than 6 Years of Experience</h2>
						<p class="text-right">
							LOGIQUE has more than 6 years of experience in the digital world, especially in relation to creating high quality websites with variety of requests, ranging from website creation, website development, maintenance, SEO implementation, and other various digital works. During that time, we have proven our ability and sincerity in realizing the desires of our clients.
						</p>
					</div>
					<div class="col-md-3 text-center hidden-xs hidden-sm">
						<a href="/en/" target="_blank"><img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="custom-2"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-7 border-l text-right">
						<h2 class="text-right">Trusted by Many Companies from Local and International</h2>
						<p class="text-right">
							Made by the team who are professional in their fields, making our clients feel happy with the service and the results we provide. We have succeeded—and still keep on—working on major projects from national and international companies in various fields, from manufacturing, government, finance, to insurance.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-7 border-l text-right">
						<h2 class="text-right">Quick, Efficient, & Flexible</h2>
						<p class="text-right">
							We value speed. We are used to working quickly because we know how time matters the most to you. With a smart team and a planned and efficient workflow, we can ensure that you will receive the desired results in the time you set. We are also very flexible and open to all forms of change. If you want adjustments, we can help you right away.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-7 border-l text-right">
						<h2 class="text-right">Quality, Technology, & Security</h2>
						<p class="text-right">
							Need web pages in Indonesian, English, and Japanese? LOGIQUE can create all three with SEO implementation. And not only made with beautiful designs and high quality, we also incorporate the latest technology of programming to your website and deliver it after conducting vulnerability inspection by security experts. It works crisply and creates webs with high security robustness.
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="about" style="padding: 0;background-color: #fef5cc;">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="text-center custom-1">
							<h1><b>The flow of website creation in LOGIQUE</b></h1>
							<br>
							<p class="p-b-20">
								The website creation by LOGIQUE always focuses on the compatibility of speed and quality. Our professionals and experts are in charge of every step. The flow when we create a website is highly structured, starting from planning and proposing to design, development, and operation, to actualize the best of a website. The stages LOGIQUE takes to create a website may vary depending on the type of the project (size of the website, CMS necessity, difficulty of system development, etc). Here are the general flow of web creation in LOGIQUE.
							</p>
						</div>
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
									<p class="title-custom-p"><b>Contact Us</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>
									Our team is ready to get your message anytime. You can immediately place an order and explain to us the initial description of the website as you want. Contact us via email <a style="color:#333" href="mailto:info@logique.co.id"><u>info@logique.co.id</u></a> or please fill in the available Order Form <a style="color:#333" target="_blank" href="/hubungi-kami.php"><u>here</u></a>. You can also ask us anything regarding the web development, website design, or even the price. Feel free to talk to us in Indonesian, English, or Japanese. We will contact you immediately for further discussion.</p>
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
									<p class="title-custom-p"><b>Hearing</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>
										You may have a specific vision and target to increase the profit of your business through the website. We would like to hear everything from you. We don’t have to meet up. If you want, we can reach you through Skype or other communication apps so we can talk further about your business. Then, we will give you some suggestions about the website that might suit your interest, also the most effective approach based on your needs.
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
									<p>After understanding everything, we will propose the website creation and utilization to solve the problem. If necessary, we will also conduct research, including about competitors and heuristic task analysis of the current website. Even until the submission of the proposal, we are cherishing the sense of speed and keeping in mind the prompt proposal. In the proposal, we will also provide optional services, such as photography, videography, and content creation as necessary. You can freely consult us if you have something in mind. The proposal will also include the price service as well as how long the time needed in the website creation. It’s all based on our transparency method, the difficulty level, and the number of team members needed to complete it.</p>
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
									<p>If you’re down to what we offer, the next process is the contract signing and the payment of 50% in advance. Soon after it’s all done, our team can start to operate the website creation for you.</p>
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
									<p>Before we create the website, we will confirm all the details of your website structure and requirements. This is to ensure that there are no missed points and cause obstacles in the future. In addition, we will also show the website framework (wireframe) that we have made for you as an initial description. Then, the concept, design, domain, and web server will be confirmed and decided. We will also decide on production schedule. We will ask you to prepare web content materials such as company logos and photos.</p>
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
									<p>At this stage, the homepage concept will be created and designed according to the references you provide. Our website design team will also provide several alternatives for which you can then approve or revise. After your approval, we will then create the rest of the pages based on the main website design.</p>
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
									<p>Here, we will execute a programming function from various features that have been planned, including the CMS. This stage also includes implementing SEO that follows the UI/UX design, and eliminating the security vulnerability of the web. We will ensure that the entire data architecture and features in the website are running and functioning properly. This concept is to ensure that the website is well structured for your targeted audience experience.</p>
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
									<p>After we create the website, we will perform appropriate tests according to the contents and website design. We make sure that there is no HTML syntax error, the website is fully mobile friendly, each page is loading quickly, and SEO countermeasure is done effectively. For security needs, we also conduct tests and security checks based on many test scenarios. Then, we will periodically demonstrate the features to you, where you will be able to directly provide us feedbacks for each feature. When the project has entered the finalization stage, you can perform test too as a proof that all functions have been confirmed and are running well.</p>
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
									<p>At this stage, your website will be deployed to the web server and made public. We can help move data from your old website if needed. After publication, we will do index registration on Google and setting up Google Analytics for further maintenance. You can also immediately pay off the remaining payments and your website can be used immediately. </p>
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
									<p>After the website is launched, we don't leave you just yet. Every website requires long-term management, including yours. We will continue to maintain your website system in order to keep the results you want. LOGIQUE provides variety of management services, starting from observing the system, carrying out daily operations, even regular content creation, SNS operation, up to digital advertisement operation. All for the maximum results from your website.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="layanan p-t-10-m" style=" margin-top: 0; ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3><b># NEED OTHER SERVICE FROM LOGIQUE OTHER THAN WEB CREATION?</b></h3>
						<p>Not only create a website, LOGIQUE also provides a variety of other services that can be a solution to optimize your digital business.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2 class="custom-3">Mobile Apps Development</h2>
						<p class="min-h">LOGIQUE also develops mobile apps for Android and iOS with UI/UX that are user-friendly, stable, and easy to use. This includes designing, implementing new technologies, optimizing UI/UX, and registering to Google Play/App Store. We also provide a lot of mobile related solutions, such as Progressive Web Apps (PWA) and Accelerated Mobile Pages (AMP). We have developed highly maintainable applications for numbers of clients in Indonesia.</p>
						<!-- <div>
							<a href="/en/services/pembuatan-aplikasi-mobile/" target="_blank" class="btn btn-logic btn-md">See More</a>
						</div> -->
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">Website Creation for HR Related Solution/Recruitment</h2>
						<p class="min-h">To help your company find suitable candidates, we provide structured, dynamic, and well-optimized career website pages. This page will show the professionalism of your company, so that there will be many prospective workers who are interested in working in your company. For HR solutions, we also provide activity management system, daily report management system, work situation management, & telework management system for productivity improvement.</p>
						<!-- <div>
							<a href="/en/services/pembuatan-website-karir-perusahaan/" target="_blank" class="btn btn-logic btn-md">See More</a>
						</div> -->
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">Web Security Assessment/Vulnerability Inspection</h2>
						<p class="min-h">The security protection of your website is very necessary so that it is not easily infiltrated by irresponsible people. For this reason, LOGIQUE provides website security testing services. With this service, we will search for any gaps and potential infiltration, and then take precautions, such as SQL injection, cross-site scripting, session jacking, and others. We offer this service with prices starting from IDR 10 million.</p>
						<!-- <div>
							<a href="/en/services/penetration-testing/" target="_blank" class="btn btn-logic btn-md">See More</a>
						</div> -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2 class="custom-3">Website Management</h2>
						<p class="min-h">Not only website creation, LOGIQUE also provides maintenance services or website management. Starting from maintenance, content creation with SEO, to digital marketing. All progress and strategies for increasing traffic will be reported directly to you periodically. During this management, we will ensure your website gets as many potential visitors as possible according to your business target.</p>
						<!-- <div>
							<a href="/en/services/pembuatan-aplikasi-mobile/" target="_blank" class="btn btn-logic btn-md">See More</a>
						</div> -->
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">Digital Business Consultation</h2>
						<p class="min-h">LOGIQUE has 6 years of experience in handling digital issues and helping various companies building businesses in the digital world, both on a national and international scale. If you have doubts or have problems related to your digital business, LOGIQUE provides consulting services that can provide solutions for you.<br>If you are interested in LOGIQUE services above, contact us immediately. </p>
						<!-- <div>
							<a href="/en/services/pembuatan-aplikasi-mobile/" target="_blank" class="btn btn-logic btn-md">See More</a>
						</div> -->
					</div>
				</div>
				<hr>
				<div class="row">
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
						<div>021) 22708935 / 36 <br>0811870321</div>
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
							<div class="col-sm-6">
								<div class="link-footer-webdev" style="padding-left:30px">
									<br/>
									<div style="margin-bottom:8px"><b>LOGIQUE's Products</b></div>
									<a href="/en/product/dokodemo-kerja.php" target="_blank">Dokodemo-Kerja</a>
									<a href="/en/product/nippo.php" target="_blank">Nippo</a>
									<a href="/en/product/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="link-footer-webdev" style="padding-left:30px">
									<br/>
									<div style="margin-bottom:8px"><b>Social Media</b></div>
									<a href="https://www.facebook.com/logique.id/" target="_blank"><i class="fa fa-facebook-official"></i> Facebook</a>
									<a href="https://twitter.com/LogiqueDigital" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
									<a href="https://www.instagram.com/logiquedigital/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
									<a href="https://www.linkedin.com/company/13420656" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i> Linkedin</a>
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