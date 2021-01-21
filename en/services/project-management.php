<?php
require_once("../../form/fgcontactform.php");

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
    <meta name="description" content="Jasa Pembuatan Progressive Web App (PWA) Terbaik Di Indonesia. LOGIQUE berpengalaman dalam mengembangkan PWA untuk E-Commerce, E-Learning, dll. Hubungi Kami!">
    <meta name="keywords" content="penetration test, penetration testing, jasa penetration test, jasa penetration testing, logique, pen test Jakarta, penetration test Indonesia, security assessment Indonesia">
    <meta name="author" content="Logique Digital Indonesia">
    <meta property="og:title" content="Project Management | LOGIQUE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/en/services/project-management.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
    <meta property="og:description" content="Jasa Pembuatan Progressive Web App (PWA) Terbaik Di Indonesia. LOGIQUE berpengalaman dalam mengembangkan PWA untuk E-Commerce, E-Learning, dll. Hubungi Kami!">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Project Management | LOGIQUE</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="/css/style-pm.css?v=1.0.4" rel="stylesheet">
    <link rel="canonical" href="https://www.logique.co.id/en/services/project-management.php" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <?php if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') { ?>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KQJRS4V');</script>
        <!-- End Google Tag Manager -->
    <?php } ?>
</head>

<body class="wrapper wrapper--update-design">
    <?php if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') { ?> 
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQJRS4V"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php } ?>

    <!-- NAVIGATION -->
    <?php 
        // $active option are home, about, portfolio, services, product, career, contact
        $active = 'services';
        include($_SERVER['DOCUMENT_ROOT'].'/sidebar.php'); 
    ?>

    <!-- HEADER -->

    <?php 
      $lang = 'en';
      $en_link = '#';
      $id_link = '/layanan/project-management.php';
      $jp_link = '/jp/services/project-management.php';
      include($_SERVER['DOCUMENT_ROOT'].'/header.php'); 
    ?>

    <!-- END HEADER -->
    <div class="pm-wrapper mb--60px">
      <section class="pb--20px pm-header">
            <div class="content-wrapper__">
                <div class="header-top">
                    <section class="--top">
                        <div class="container__" style="padding-top:0">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ol class="breadcrumb breadcrumb--update-design" itemscope itemtype="http://schema.org/BreadcrumbList">
                                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                            <a itemprop="item" href="/en/"><span itemprop="name">Home</span></a>
                                            <meta itemprop="position" content="1" />
                                        </li>
                                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                                itemprop="item" href="/en/services.php"><span itemprop="name">&nbsp; Services</span></a>
                                            <meta itemprop="position" content="2" />
                                        </li>
                                        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                            <a itemprop="item"><span itemprop="name">Project Management</span></a>
                                            <meta itemprop="position" content="3" />
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="container__">
                    <div class="row">
                        <div class="col-md-12 header__title">
                            <h1>
                              <span class="fs--26px fw--800">Success through </span>
                              <br>
                              <span class="fs--28px fw--800">PROFESSIONAL PROJECT MANAGEMENT</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="mb--60px">
        <div class="content-wrapper__">
          <div class="container__">
            <div class="row">
              <div class="col-md-12">
                <p>To ensure the success of a project in its ability to yield results in accordance with its business objectives, some important factors need to be considered, such as the implemented work scope, the targeted timeframe and the set budget during the beginning of the project. These three factors have often been mentioned as among the main parameters used for measuring the success of a project. Indeed, these “triple constraints” have now become part of what is commonly measured in Project Management, so much so that the goal of efficient project management is so that the project yields much better results.</p>
                <p>The significance of efficient project management is its ability to determine the final outcome of a project; as such, it is necessary to standardize all aspects and possibilities that can occur within the target project so as to minimize the risk of failure. Currently, there are many organizations operating on both global and local levels that are coordinating with each other and conducting research so as to create a comprehensive standard model that can be used as a foundation for future projects throughout all industries. </p>
                <p>One such organization deeply involved in project management which is currently the largest organization globally in this respect is PMI (the Project Management Institute), which is headquartered in Pennsylvania, U.S.A. and has been established within the industry for 51 years since 1969. PMI itself is also commonly known for the release of the PMBOK (Project Management Body of Knowledge), a set guideline compilation book acting as somewhat of a bible to project managers around the world. PMI itself provides PMP certifications for those who have passed the comprehension examination from the PMBOK. Currently, more than 1 million people worldwide are PMP holders. In Indonesia, there are currently very few active PMP certification holders compared to project lead positions, specifically only ~ 1000 PMP holders compared to neighboring countries such as Singapore and Malaysia, which have ~ 1500. Indeed, Project Managers with proper PMP certifications are a resource still very much in demand within Indonesia.</p>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="mb--60px pm-contact">
      <div class="content-wrapper__">
        <div class="container__">
          <div class="row">
            <div class="col-md-12">
              <div class="banner-contact">
                <div class="row row--flex align-items-center">
                  <div class="col-xs-12 col-md-8 d-flex">
                    <picture>
                      <source srcset="/img/pm/icon-pm-contact.svg">
                      <img src="/img/pm/icon-pm-contact.png" class="pr--10px" alt="contact">
                    </picture>
                    <div class="banner-contact-text">
                      <p class="mb--0px">We are ready to help you to manage</p>
                      <p class="mb--0px fw--800">PROJECT PROFESSIONALLY</p>
                    </div>
                  </div>
                  <div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-3 d-flex align-items-center">
                        <a href="/en/contact.php" class="form-control btn btn--yellow">
                          CONTACT US
                        </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mb--60px pm-expert-team">
        <div class="content-wrapper__ py--60px">
            <div class="container__">
                <div class="row row--flex expert-team-wrapper">
                    <div class="col-xs-12 col-md-7 col-lg-8">
                        <div class="expert-team-box">
                            <h3 class="mb--25px main-title main-title--white main-title--with-square-point">Our Expert Team</h3>
                            <h5 class="main-subtitle">Profile</h5>
                            <p>We have several project managers who are PMP certified. One of them is Mr. Meiriando Teja, who is the current consultant lead. Having experience within IT for more than 10 years in various industries such as banking, transportation, telco, Mr. Teja is well versed in the implementation of ERP products, CRM, HCM as well as mobile and web applications. Currently, he possesses a global Project Management certification, namely PMP, which provides a solid foundation in his ability to manage projects.</p>

                            <p class="expert-team-second-paragraph">
                            <img src="/img/pm/quote-yellow.png" class="img-expert-team-quote" width="50" height="50" alt="quote">
                            Regarding the ideal implementation of successful project management within <span class="logo-font">LOGIQUE</span>, there are several factors that need to be considered, including 2 central priorities. The first is transparency, in regards to the work process and the stakeholders involved in any given project. The maximum level of transparency within a project should be presented to all stakeholders involved, as this is a requirement that provides awareness as to the status of the project, increasing the ownership of each stakeholder. Transparency also improves the level of mutual trust within the project. The second central priority is commitment. The commitment of each stakeholder to their given role within the project will help to curtail any obstacles from other stakeholders, thus smoothing the process from upstream to downstream.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 col-lg-4 d-flex align-items-end justify-content-center"></div>
                </div>
            </div>
            
        </div>
        <div class="consultant-lead-wrapper">
            <img src="/img/pm/consultant-lead-meiriando.png" class="img-responsive mx--auto" alt="Meiriando Teja">
        </div>
    </section>

    <section class="mb--60px">
        <div class="content-wrapper__">
            <div class="container__">
                <h3 class="main-title main-title--with-square-point mb--30px mt--40px">
                Project Management at <span class="logo-font fs--24px">LOGIQUE</span>
                </h3>
                <div class="row">
                    <div class="col-md-5">
                        <picture>
                            <source srcset="/img/pm/pm-illustration.webp">
                            <img src="/img/pm/pm-illustration.jpg" class="img-responsive mb--20px mx--auto" alt="pm-illustration">
                        </picture>
                    </div>
                    <div class="col-md-7">
                        <p class="mb--20px">Unlike conventional companies which generally utilize the Waterfall methodology, in which the comprehensive scope of work is locked before implementation, we utilize the Agile - Scrum method. The Agile - Scrum method can help cover the rapidly changing business needs so as to respond to any rapidly changing market needs, without incurring major consequences throughout the ongoing project.</p>
                        <p>In general, the scrum method divides the development phase into several so called “Sprints”, where each sprint consists of 5 ceremonies, namely Backlog Grooming, Sprint Planning, Daily Scrum, Sprint Review and Sprint Retrospective. Each of these ceremonies are comprised of interrelated work processes so as to ensure that each sprint will be able to meet expectations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb--60px">
        <div class="content-wrapper__">
            <div class="container__">
                <div class="row mb--40px">
                    <div class="col-md-3">
                        <div class="img-ceremonies-wrapper">
                            <picture>
                                <source srcset="/img/pm/backlog.webp">
                                <img src="/img/pm/backlog.png" class="img-responsive" alt="backlog">
                            </picture>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <p>1. Backlog Grooming / Backlog Refinement</p>
                        <p>Backlog Grooming is the process of breaking down the “stories” within the backlog so as to reveal more detail and clarity to make the work within the sprint easier. From each story that has been broken down, an estimation will also be given in regards to the work efforts of each of our developers involved. From the total estimate, the total time required to work on each feature will be thereby be obtained.</p>
                    </div>
                </div>
                <div class="row mb--40px">
                    <div class="col-md-3">
                        <div class="img-ceremonies-wrapper">
                            <picture>
                                <source srcset="/img/pm/sprint.webp">
                                <img src="/img/pm/sprint.png" class="img-responsive" alt="sprint">
                            </picture>                        
                        </div>
                    </div>
                    <div class="col-md-9">
                        <p>2. Sprint planning</p>
                        <p>Sprint Planning is a process that prepares which stories are to be worked on during the next sprint. Based on the stories garnered from the Backlog grooming results, divided by the velocity of each developer, one can receive an accurate estimation of stories that can be focused on within the upcoming sprints. Each scrum team will be committed to completing the work agreed upon during the sprint planning phase.</p>
                    </div>
                </div>
                <div class="row mb--40px">
                    <div class="col-md-3">
                        <div class="img-ceremonies-wrapper">
                            <picture>
                                <source srcset="/img/pm/scrum.webp">
                                <img src="/img/pm/scrum.png" class="img-responsive" alt="scrum">
                            </picture>                        
                        </div>
                    </div>
                    <div class="col-md-9">
                        <p>3. Daily Scrum</p>
                        <p>The daily scrum is a daily event conducted by the team and the scrum master so as to update the work routines of their respective teams. To maintain a level of effectiveness within the daily scrum process, this event is time boxed in accordance to a 15-30 minutes range depending on the needs of the team itself. Each member who participates in the daily scrum will have a turn to explain 3 main things within the daily scrum in regards to the following:</p>
                        <div class="ceremonies-box-wrapper">
                            <span class="ceremonies-box">The work that was done yesterday</span>
                            <span class="ceremonies-box">The work to be done today</span>
                            <span class="ceremonies-box">Any obstacles affecting the team's work on any given day</span>
                        </div>
                    </div>
                </div>
                <div class="row mb--40px">
                    <div class="col-md-3">
                        <div class="img-ceremonies-wrapper">
                            <picture>
                                <source srcset="/img/pm/transparency.webp">
                                <img src="/img/pm/transparency.png" class="img-responsive" alt="transparency">
                            </picture>                        
                        </div>
                    </div>
                    <div class="col-md-9">
                        <p>4. Sprint Review</p>
                        <p>The Sprint review phase is held at the end of a sprint so as to review all the deliveries that have been conducted in front of the Product owner and project sponsors. Each sprint review will filter back feedback to be implemented as practical improvements during the next sprint. </p>
                    </div>
                </div>
                <div class="row mb--40px">
                    <div class="col-md-3">
                        <div class="img-ceremonies-wrapper">
                            <picture>
                                <source srcset="/img/pm/scrum.webp">
                                <img src="/img/pm/scrum.png" class="img-responsive" alt="scrum">
                            </picture>                        
                        </div>
                    </div>
                    <div class="col-md-9">
                        <p>5. Sprint Retrospective</p>
                        <p>The sprint retrospective is an event that is held during the end of a sprint so as to review the process for 1 sprint and to decide on the necessary “action items” to be taken during the next sprint so as to make for a better sprint process. The Sprint Retrospective itself will discuss 3 things, namely:</p>
                        <div class="ceremonies-box-wrapper">
                          <span class="ceremonies-box">What didn't go well during the sprint</span>
                          <span class="ceremonies-box">What went well during the sprint</span>
                          <span class="ceremonies-box">What's still unclear in regards to the sprint</span>
                        </div>
                        <p>Out of these 3 things, the discussion will continue in regards to the action items that need to be conducted during the next sprint. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb--60px">
        <div class="content-wrapper__">
            <div class="container__">
                <p class="mb--20px">Through implementing the Agile - Scrum method, we also apply the standard implementation used in the PMP / PMI so as to improve the fundamentals of each Agile - Scrum process, such as in regards to the following examples:</p>
                <div class="row mb--40px">
                    <div class="col-md-5">
                        <picture>
                            <source srcset="/img/pm/evm.webp">
                            <img src="/img/pm/evm.jpg" class="img-responsive mb--10px" alt="evm">
                        </picture>
                    </div>
                    <div class="col-md-7">
                        <p><strong>EVM (Earned Value Management)</strong></p>
                        <p>Earned value management is a project management tool which integrates timeline, budget and performance into the same graphic presentation. Using a graphic that takes into account a comprehensive range of existing data, it is hoped that Project Managers will be able to predict future events so that they can make quick and effective decisions earlier on so as to make the project run according to its established timeframe. EVM is conducted every week in the weekly report which we use to be able to transparently view the conditions of a project. </p>
                    </div>
                </div>
                <div class="row mb--40px">
                    <div class="col-md-5">
                        <picture>
                            <source srcset="/img/pm/risk-management.webp">
                            <img src="/img/pm/risk-management.jpg" class="img-responsive mb--10px" alt="risk-management">
                        </picture>
                    </div>
                    <div class="col-md-7">
                        <p><strong>Risk Management</strong></p>
                        <p>Through a comprehensive analysis gained from the EVM process, we can create a risk register and collect data of all possible risks that could potentially arise within a given project, so as to quickly respond in order to minimize the impact of such risks.</p>
                    </div>
                </div>
                <div class="row mb--40px">
                    <div class="col-md-5">
                        <picture>
                            <source srcset="/img/pm/wbs.webp">
                            <img src="/img/pm/wbs.jpg" class="img-responsive mb--10px" alt="wbs">
                        </picture>
                    </div>
                    <div class="col-md-7">
                        <p><strong>WBS (Work Breakdown Structure)</strong></p>
                        <p>We put details of the scope into the WBS so as to define the delivery scope guidelines of the project. This WBS will be shared with the client in order to align the knowledge held by all stakeholders with the expected product specifications. We also develop each WBS so as to record the progress of the team, revealing the project’s progress percentage growth per week.</p>
                    </div>
                </div>
                <p class="mb--20px">From an internal perspective, we carry out a strict management process in regards to any project costs and also review the effectiveness of work carried out by our employees through the <strong>Nippo</strong> application, which allows for the viewing and review of detailed daily work reports from those in our employ.</p>
                <p>Though all of the above mentioned factors, the completion of a project becomes much more transparent, making the monitoring and control process easier, especially in regards to accelerating the decision making process. Therefore, the projects we take on can be completed quickly and in accordance with the expectations of all key stakeholders.</p>
            </div>
        </div>
    </section>

    <section class="mb--60px">
        <div class="content-wrapper__">
            <div class="container__">
                <h3 class="main-title main-title--with-square-point">Dynamic System Development at <span class="logo-font">LOGIQUE</span></h3>
                <p class="mb--20px">Unlike previous years, when working on a project it is currently necessary to define the overall scope first, which cannot be divided. </p>
                <p class="mb--20px">Through the use of dynamic and efficient project management and the implementation of the agile methodology, Logique utilizes a more flexible approach in the development of its systems and work contracts. Therefore, in comparison to previous years, when conducting a project the landscape firstly needs to be defined and cannot be divided. Logique can help you develop in this regard through a dynamic work system so as to see to the completion of a project as defined by the client. In this system of work, you can jointly determine the composition of the team that can thusly be deployed and replaced as needed during the project. This allows you to receive optimally fast results through the right team composition. </p>
                <p>To facilitate the collaboration process between the two parties and speed up the delivery of documentation with a given project, we utilize cloud tools that can be accessed by both parties.</p>
            </div>
        </div>
    </section>

    <section class="mb--60px">
        <div class="content-wrapper__">
            <div class="container__">
                <h3 class="main-title main-title--with-square-point">Contact us</h3>
                <p>Gain success with your digital projects with <span class="logo-font">LOGIQUE</span> now! Please fill out the form below, we are ready to assist you.</p>
                <div class="contact-form-wrapper">
                    <h3 class="text-center mb--40px">Contact Us to get the best offer</h3>
                    <form role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                        <input type='hidden' name='submitted' id='submitted' value='1' />
                        <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>'
                            value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                        <fieldset>
                            <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text"  name="name" aria-label="Name"  class="form-control" placeholder="Name" value='<?php echo $formproc->SafeDisplay('name') ?>'>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" aria-label="Email"  class="form-control" placeholder="E-mail Address" value='<?php echo $formproc->SafeDisplay('email') ?>'>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="phone" aria-label="Phone"  class="form-control" placeholder="Contact Number" value='<?php echo $formproc->SafeDisplay('phone') ?>' >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" aria-label="Message" class="form-control" rows="10" placeholder="Message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6" style="display:flex; margin-bottom:1em">
                                <div class="g-recaptcha pull-right"
                                    data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
                                <div class="clearfix"></div><br>
                            </div>
                            <div class="col-md-6 text-right">
                                <button class="btn btn--yellow">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include '../footer.php'; ?>
    <script async defer src='https://www.google.com/recaptcha/api.js'></script>

</body>

</html>