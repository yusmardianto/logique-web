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
						<h1>A Better Employee Recruitment System</h1>
						<div class="text-center desc-first">
							Are you tired of sifting through bundles of CVs, only to communicate with unqualified job seekers? Now, you don’t have to be anymore. With SUGOI SAIYO, therecruitment process is as easy as picking out the best food from a buffet.
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="about">
			<div class="container">
				<a href="/"><img src="img/sugoi-saiyo/logo_logique.png" alt="Sugoi Saiyo Logo" style="position:absolute;top: 0;"></a>
				<h2>What is SUGOI SAIYO?</h2>
				<p>Sugoi Saiyo is an IT Cloud System built for <b>human resources</b> to recruit prospective employees efficiently. There are many obstacles that HR must face during the selection process, including filtering out the many CVs that don’t meet the standard requirement, a difficulty in communicating with applicants, and applicants who bail on planned interviews. Such issues can waste your company’s time and effort. </p>
				<h3>SUGOI SAIYO is an Effective Management Solution to your Recruitment Problem</h3>
				<p>In addition to helping reduce the strain on the human resources department, SUGOI SAIYO is also convenient for candidates on the other end, as its interface can manage the entire application process: from CV submission, status confirmation, testing, right up to the presentation of the company’s final offering letter through the designated MY PAGE feature.</p>
			</div>
		</section>
		<section class="obstacle">
			<div class="container">
				<div class="row">
					<div class="col-md-4 obstacle-title">
						<h2>Difficulties Faced During the Recruitment Process in Indonesia / Challenges for Recruiters</h2>
						<a href="#contact" class="smooth btn-ss">Apply for a trial now</a>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-1.png" alt="Kendala" class="img-responsive center-block">
								<p>Receive many job applications that don’t fit the standard requirements of the position, thereby making the selection process more inefficient.</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-2.png" alt="Kendala" class="img-responsive center-block">
								<p>The Human Resources Department is unable to contact applicants to update them as to their potential employment. Therefore, candidates will be left unaware about their current application status throughout the process.</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-3.png" alt="Kendala" class="img-responsive center-block">
								<p>Applicants arrive late during the interview, or fail to even show up.</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-4.png" alt="Kendala" class="img-responsive center-block">
								<p>Human recourses staff should get candidates who meet the requirements, quickly and efficiently.</p>
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
							<p>Sugoi Saiyo is able to display the CV list in a comprehensible and easy to read manner, making sorting through the pile an easy task.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">2</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-2.png" alt="Fitur Perusahaan"></div>
							<p>Companies are now able to schedule interviews with candidates in a flexible and transparent way.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">3</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-3.png" alt="Fitur Perusahaan"></div>
							<p>Create a digital report with a numerically based scoring system regarding the selection process so that HRD can logically proceed with the selection process.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">4</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-4.png" alt="Fitur Perusahaan"></div>
							<p>Sending and receiving documents related to each step of the selection process, (technical tests, the offering , etc.) is as easy as sending an email. </p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">5</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-5.png" alt="Fitur Perusahaan"></div>
							<p>SUGOI SAIYO can perform inputting, editing and data deletion functions regarding each potential candidate’s position. Such options will be readily accessible to the human resources staff.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">6</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-6.png" alt="Fitur Perusahaan"></div>
							<p>Score each step of the recruitment process in a transparent way so that each candidate will be able to know the results anywhere and in real time.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">7</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-7.png" alt="Fitur Perusahaan"></div>
							<p>Manage every stage of the HR selection process through just one click (Process/Reject).</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">8</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-8.png" alt="Fitur Perusahaan"></div>
							<p>Display the overall progress regarding each candidate on one dashboard page for activities such as CV screening, interview schedule, and the status of the offering letter.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">9</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-9.png" alt="Fitur Perusahaan"></div>
							<p>Manages and lists the person in charge of each position in a user friendly manner.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">10</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-10.png" alt="Fitur Perusahaan"></div>
							<p>Automatically creates offering letters for qualified candidates.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">11</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-11.png" alt="Fitur Perusahaan"></div>
							<p>Each progressive stage of the application process is notified via email. </p>
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
							<p>Submit documents appropriate to the HR selection process, such as your CV, photo, certificates and technical tests in regards to the desired position. Everything is donedigitally without the hassle of brining everything to the selection site.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-candidate">
							<div class="number">2</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-2.png" alt="Fitur Perusahaan"></div>
							<p>Display the progress of each candidate in a fluid and easy to read manner, in regards to their current application stage and those yet to be completed. </p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-candidate">
							<div class="number">3</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-3.png" alt="Fitur Perusahaan"></div>
							<p>Better employer-candidate coordination through conveniently displaying the interview schedule, which can then be conducted through a human resources staff or with a Person In Charge of a managerial or directorial position.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="feature f-candidate-2">
							<div class="number">4</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-4.png" alt="Fitur Perusahaan"></div>
							<p>Display the pass/fail status of each candidate throughout each stage of the recruitment process through the dashboard view.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="feature f-candidate-2">
							<div class="number">5</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-5.png" alt="Fitur Perusahaan"></div>
							<p>Notifications via Email are sent after every stage passed as well as confirmations about interview schedules.</p>
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
									Candidate assessment standards based off of scores received during each stage of the HR selection process.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Easily arrange interview schedules with candidates, either with human resources staff or with managers.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									References of qualified candidates are more numerous and varied.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Easy to control, supervise and perform candidate filtration.
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									The personal data of each candidate is stored safety and securely within the system. 
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Information about each candidate is accurate and detailed.
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
							Take the test online without having to be present at an interview location.
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							Receive direct information about the status of each stage of the recruitment process. 
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							A Simplified Application Process.
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							Save time and money through a short and simple process
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
						<h3>Q. Is Sugoi Saiyo a cloud system?</h3>
						<p>
							Sugoi Saiyo runs on our managed cloud server. There is no need for you to prepare any type of server and you can start using it immediately after the completion of your contract. However, you can also install it and use it in your managed server. Please feel free to contact us in regards to further information.
						</p>
						<h3>Q. Are there any restrictions regarding the user’s side? </h3>
						<p>
							You can use the latest version of the main browser, such as Chrome, Firefox, Safari and Edge. 
						</p>
						<h3>Q. It’s possible to buy the system in a single purchase payment, right?</h3>
						<p>
							We charge a monthly fee without any initial cost. However, you can customize the system so as to have it delivered to your company’s server. 
							<br>
							Please contact us so as to make a batch request
						</p>
						<h3>Q. Is there a minimum contract term?</h3>
						<p>
							There are presently no time restrictions. Without customization, you will be able to use it for one month.
						</p>
						<h3>Q. What type of company is this software targeted to?</h3>
						<p>
							We think that it can be used by a wide range of enterprises, though it would be more effective for companies seeking to recruit more than 2 or 3 people a month. Sugoi Saiyo is a powerful tool as it utilizes multiple branch offices that can all be managed at once.
						</p>
						<h3>Q. Does it come with a psychological test?</h3>
						<p>
							Our system is compatible with external psychological tests, of which the results can be saved. Additionally, you can conduct your own customized psychological test. 
						</p>
					</div>
					<div class="col-sm-6">
						<h3>Q. Would it be possible to collaborate with JobStreet?</h3>
						<p>
							We recommend that you post the entrance URL of your company in Sugoi Saiyo on Jobstreet. If you do so, you won’t have to manage anything from Jobstreet, as everything can collectively be managed through SugoiSaiyo.
						</p>
						<h3>Q. You can manage the schedule of interviews, but can you cooperate with the reservation of the interview meeting room?</h3>
						<p>
							Yes, we can cooperate the reservation if you request for customization
						</p>
						<h3>Q. Does it include AI functions?</h3>
						<p>
							This has not been implemented yet, but we can include a customization if requested.
						</p>
						<h3>Q. Is it possible to receive notifications about new applications?</h3>
						<p>
							Users registered as recruiters can notify through email that new applications have been submitted
						</p>
						<h3>Q. Is there any limit on the number of jobs, job types, positions, etc. available?</h3>
						<p>
							There is no limit. You can open up as many positions at the same time.
						</p>
						<h3>Q. Is Sugoi Saiyo only for the recruiter or company’s HR department?</h3>
						<p>
							You can authorize complex management settings. Recruiting staff, interviewers in each department, and management are able to become users of Sugoi Saiyo, and it is possible to grasp the progress of their hiring, manage the schedule of interviews, and view detailed information on candidate information.
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="contact" id="contact">
			<div class="container">
				<div class="box">
					<div class="box-title">
						<h2>Contact Us</h2>
						<p>Please feel free to contact us regarding inquiries about recruitment management system, trial request, and development of a recruitment management system or anything from Sugoi Saiyo.</p>
					</div>
					
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
