 <?php
require_once("form/fgcontact_sugoi.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient(['info@sugoi-saiyo.co.id']); //<<---Put your email address here

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
    <meta name="description" content="SugoiSaiyo, efficient and effective recruitment management system for HR, created by LOGIQUE Digital Indonesia to help you recruit, select, and score the perfect candidates based on your company needs, with less time and less energy. Contact us to try now.">
	<meta name="keywords" content="recruitment, human resources, recruitment online, recruitment process, tool hire, employment services,
staffing solutions, recruitment tools, sugoi saiyo, logique digital Indonesia">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
  <meta itemprop="name" content="PT. Logique Digital Indonesia">
	<meta property="og:title" content="Recruitment Management System | Online Recruitment Tool | LOGIQUE Digital Indonesia">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Logique">
	<meta property="og:url" content="https://www.logique.co.id/en/product/sugoi-saiyo.php">
	<meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
	<meta property="og:description" content="SugoiSaiyo, efficient and effective recruitment management system for HR, created by LOGIQUE Digital Indonesia to help you recruit, select, and score the perfect candidates based on your company needs, with less time and less energy. Contact us to try now.">

  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Recruitment Management System | Online Recruitment Tool | LOGIQUE Digital Indonesia</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_sugoisaiyo.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
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
						<div class="text-center">
							<a href="/en/index.php">
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
					 	<div class="text-center active">
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
		</div>
		<header>
			<div class="container">
				<div class="row">
					<div class="language-btn">
						<ul class="list-inline">
							<li class="active"><a href="/../en/product/sugoi-saiyo.php">EN</a></li>
							<li><a href="/produk/sugoi-saiyo.php">ID</a></li>
							<li><a href="/../jp/product/sugoi-saiyo.php">JP</a></li>
						</ul>
					</div>
					<div class="col-md-offset-1 col-md-10">
						<img src="img/sugoi-saiyo/logo.png" alt="Sugoi Saiyo Logo" class="img-responsive center-block">
						<h1>Employee Recruitment System</h1>
						<div class="text-center desc-first">
							Are you tired of sifting through too many CV’s and communicating with too many unqualified job seekers? Now, you do not have to be anymore. With SUGOI SAIYO, the <b>recruitment process</b> can be done as efficient as selecting the best food from the menu.
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="about">
			<div class="container">
				<a href="/"><img src="img/sugoi-saiyo/logo_logique.png" alt="Sugoi Saiyo Logo" style="position:absolute;top: 0;"></a>
				<h2>What is SUGOI SAIYO?</h2>
				<p>SUGOI SAIYO is an IT Cloud system for <b>human resources</b> department in Indonesia in recruiting prospective employees. There are many obstacles they usually face in the HR selection process, such as filtering out too many CVs that do not meet the requirements, difficulty in communicating with applicants, applicants who bail on interview schedules, and many more. All of these can waste too much time and effort.</p>
				<h3>SUGOI SAIYO is the solution of the problem.</h3>
				<p>In addition to helping human resources department, SUGOI SAIYO is also useful for applicants. They can apply directly to certain positions and can easily find out the status of their application, starting from the testing stage, confirmation of the accepted status, up to the offering letter from the company submitted through the website.</p>
			</div>
		</section>
		<section class="obstacle">
			<div class="container">
				<div class="row">
					<div class="col-md-4 obstacle-title">
						<h2>OBSTACLES COMPANIES OFTEN FACE IN RECRUITMENT PROCESS</h2>
						<a href="#contact" class="smooth btn-ss">Try Sugoi Saiyo</a>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-1.png" alt="Kendala" class="img-responsive center-block">
								<p>Get a lot of job applications but not meet the requirements required by the company, thus making the selection phase of HR becomes inefficient.</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-2.png" alt="Kendala" class="img-responsive center-block">
								<p>Human resources staff can’t contact applicants to provide updated information on their status, and vice versa, applicants are not aware of the latest information regarding the status of applications that have been submitted.</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-3.png" alt="Kendala" class="img-responsive center-block">
								<p>Applicants arrive late from the specified interview time, or don’t even show up.</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-4.png" alt="Kendala" class="img-responsive center-block">
								<p>Human resources staff should get candidates that meet the requirements in a short time.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="line-title">SUGOI SAIYO FEATURES</div>
		<section class="feature-company">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 text-center">
						<img src="img/sugoi-saiyo/fitur-p.png" alt="Fitur Perusahaan" class="img-feature">
						<hr>
						<h2>For Companies</h2>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">1</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-1.png" alt="Fitur Perusahaan"></div>
							<p>SUGOI SAIYO is able to display the list of CVs that have been accepted so they can be managed very easily.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">2</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-2.png" alt="Fitur Perusahaan"></div>
							<p>Companies can schedule interviews with candidates in a flexible and transparent way.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">3</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-3.png" alt="Fitur Perusahaan"></div>
							<p>Create a digital report with numeric scoring of each interview with candidates so that HRD can decide the selection logically.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">4</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-4.png" alt="Fitur Perusahaan"></div>
							<p>Sending and receiving documents related to the selection process of candidates, such as technical test, offering letter, etc. can be done as easy as sending an email.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">5</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-5.png" alt="Fitur Perusahaan"></div>
							<p>Can perform input, edit, and delete data and information about the position available very easily by human resources staff.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">6</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-6.png" alt="Fitur Perusahaan"></div>
							<p>Give scores to each recruitment process of each candidate in a transparent way so that candidates are able to know the results real time and anywhere.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">7</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-7.png" alt="Fitur Perusahaan"></div>
							<p>Manage every stage of HR selection process with just one click (process/reject).</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">8</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-8.png" alt="Fitur Perusahaan"></div>
							<p>Displays the total of each stage of HR selection that is being processed, from CV screening, interview schedule, to total offering letter status in one dashboard page.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">9</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-9.png" alt="Fitur Perusahaan"></div>
							<p>Manage the list of person in charge (PIC) users for each position very easily.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">10</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-10.png" alt="Fitur Perusahaan"></div>
							<p>Create offering letters for qualified candidates automatically.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">11</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-11.png" alt="Fitur Perusahaan"></div>
							<p>Notify via email for every progress of the selection stage of the candidate.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="feature-candidate">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 text-center">
						<img src="img/sugoi-saiyo/fitur-k.png" alt="Fitur Perusahaan" class="img-feature">
						<hr>
						<h2>For Candidates</h2>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-candidate">
							<div class="number">1</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-1.png" alt="Fitur Perusahaan"></div>
							<p>Register and submit documents related to HR selection process, such as CV, photo, certificate, to technical test at the desired position. All done digitally without the hassle of bringing it all to the selection site.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-candidate">
							<div class="number">2</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-2.png" alt="Fitur Perusahaan"></div>
							<p>Display the history time of every process that candidates have passed or will be done, ranging from the CV screening to the interview in a transparent and real time.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-candidate">
							<div class="number">3</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-3.png" alt="Fitur Perusahaan"></div>
							<p>Display the interview schedule which will be executed by candidate, either interview with human resources staff, or with PIC user of every position (manager) and director.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="feature f-candidate-2">
							<div class="number">4</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-4.png" alt="Fitur Perusahaan"></div>
							<p>Display the pass status of candidates from each stage of the recruitment process in a dashboard view.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="feature f-candidate-2">
							<div class="number">5</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-5.png" alt="Fitur Perusahaan"></div>
							<p>Notify via email of every selection process results and confirmation of interview schedule.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="line-title">BENEFITS OF USING SUGOI SAIYO</div>
		<section class="benefit-company">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>For Companies</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9 col-md-offset-3 col-sm-12">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Can have candidates assessment standards based on scoring each stage of HR selection.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Easily arrange interview schedules with candidates, either with human resources staff or with managers.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									References of qualified candidates become more numerous and varied.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Easy to control, supervise, visualize, and perform candidate filtration.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Candidates data are guaranteed stored safely (secure) in the system.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Information about the candidate is accurate and detailed.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="benefit-candidate">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>For Candidate</h2>
					</div>
				</div>
				<div class="row m-50">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							Take the test online without having to come to the company.
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							Know the status of each stage of the recruitment process directly.
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							Simplify the job application process only by registration step and fill out the form online.
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							Save cost and time with a short and simple process.
						</div>
					</div>
				</div>
			</div>
		</section>
		<div>
			<img src="img/sugoi-saiyo/bg-middle.png" alt="Sugoi Saiyo" class="img-fluid">
		</div>
		<section class="why-ss">
			<div class="container">
				<h2>WHY SUGOI SAIYO?</h2>
				<div class="row m-50">
					<div class="col-md-4">
						<div class="img-why-ss"><img src="img/sugoi-saiyo/kenapa-1.png" alt="Kenapa Sugoi Saiyo"></div>
						<p>Extremely accessible and easy to use, by both HR staff and candidates.</p>
					</div>
					<div class="col-md-4">
						<div class="img-why-ss"><img src="img/sugoi-saiyo/kenapa-2.png" alt="Kenapa Sugoi Saiyo"></div>
						<p>Very simple user interface.</p>
					</div>
					<div class="col-md-4">
						<div class="img-why-ss"><img src="img/sugoi-saiyo/kenapa-3.png" alt="Kenapa Sugoi Saiyo"></div>
						<p>Recruitment process can be monitored, from registration to pass status.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="qna">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<img src="img/sugoi-saiyo/qna.png" alt="Sugoi Saiyo">
					</div>
					<div class="col-md-9">
						<h2>FREQUENTLY ASKED QUESTIONS</h2>
					</div>
				</div>
				<div class="row m-50">
					<div class="col-sm-6">
						<h3>How does SUGOI SAIYO work?</h3>
						<p>SUGOI SAIYO brings recruitment teams with the right targeted candidates together by providing a simple and manageable recruitment process by both parties.</p>
						<h3>How does the recruitment team know if a candidate submits an application?</h3>
						<p>Human resources staff will be notified via email. The email will mention the names of candidates and HR staff can directly check the details of his data.</p>
						<h3>Is there a limit on the number of vacancies that can be posted by the recruitment team at SUGOI SAIYO?</h3>
						<p>Of course not! Human resources staff can list available vacancy positions as many as possible.</p>
						<h3>Is SUGOI SAIYO only for the company’s HR department?</h3>
						<p>SUGOI SAIYO provides different management pages for human resources department level (recruitment team) and manager level (person in charge).</p>
						<h3>What’s the difference between managing pages for recruitment teams with managers?</h3>
						<p>Managers page for manager level only shows the results of technical test, interview schedule, and interview report.</p>
						<h3>What is the standard of recruitment stages adopted by SUGOI SAIYO?</h3>
						<p>SUGOI SAIYO adopts standard HR selection in general. However, the standard of this stage can be modified and adjusted to your request.</p>
					</div>
					<div class="col-sm-6">
						<h3>Is there a limit on the number of candidates I can receive for each position?</h3>
						<p>Nope. Each position can receive as many candidates as possible. Vice versa, candidates can apply to more than one position.</p>
						<h3>How does the candidate apply for an available position?</h3>
						<p>Simply by choosing the position you want to apply, then fill in the data in the form provided.</p>
						<h3>How does the candidate obtain further information from the selection stage of his application?</h3>
						<p>Result information of each recruitment process is always updated by human resources staff, and candidates can see the updates, either on their own dashboard page or via automated notification email.</p>
						<h3>Is SUGOI SAIYO accessible by any browser?</h3>
						<p>Our site can be accessed by any browser, including by the mobile device&#39;s built-in browser. If you have any problem, you can contact us for assistance.</p>
						<h3>I am interested in using SUGOI SAIYO for my company. How can I start using it?</h3>
						<p>You can contact us directly through one of the contacts we provide. We are ready to serve you gladly.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="contact" id="contact">
			<div class="container">
				<div class="box">
					<h2>Contact Us</h2>
					<?php if(isset($msg))
					{
					echo $msg;
					}
					?>
					<form role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
						<input type='hidden' name='submitted' id='submitted' value='1'/>
						<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
						<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Name" name="name" aria-label="Name" value='<?php echo $formproc->SafeDisplay('name') ?>'>
								</div>
								<div class="form-group">
									<input type="number" class="form-control" placeholder="Phone" name="phone" aria-label="Phone" value='<?php echo $formproc->SafeDisplay('phone') ?>'>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Company" name="company" aria-label="Company" value='<?php echo $formproc->SafeDisplay('company') ?>'>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email" name="email" aria-label="Email" value='<?php echo $formproc->SafeDisplay('email') ?>'>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="6" class="form-control" placeholder="Message" name="message" aria-label="Message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
								</div>
								<div class="form-group">
									<div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
								</div>
							</div>
							<div class="col-md-12 text-center m-50">
								<button type="submit" class="btn-ss2">Send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<?php include '../footer.php'; ?>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
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

			$('.feature-company .img-feature-o').matchHeight({
				byRow: false
			});
			$('.feature-candidate .img-feature-o').matchHeight({
				byRow: false
			});
			$('.f-company').matchHeight({
				byRow: false
			});
			$('.f-candidate').matchHeight({
				byRow: false
			});
			$('.f-candidate-2').matchHeight({
				byRow: false
			});
			$('.benefit').matchHeight({
				byRow: false
			});
			$('.img-why-ss').matchHeight({
				byRow: false
			});
		</script>
	</body>
</html>
