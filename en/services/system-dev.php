 <?php
 require_once("assets/form/fgcontact_systemdev.php");

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
 <html lang="id">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
     <meta name="description"
         content="As one of the top leading web developers in Indonesia, LOGIQUE has their own mechanism in terms of web systems creation, which includes the usage of latest technology, infrastructure planning, system security, and speed. Learn more about our web system development service here.">
     <meta name="keywords"
         content="web systems, web developer, web design, mobile app, mobile applications, web development, web services, web development services, web security, logique digital Indonesia">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
     <meta itemprop="name" content="PT. Logique Digital Indonesia">
     <meta property="og:title" content="Web System Development Service | LOGIQUE Digital Indonesia">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
     <meta property="og:description"
         content="As one of the top leading web developers in Indonesia, LOGIQUE has their own mechanism in terms of web systems creation, which includes the usage of latest technology, infrastructure planning, system security, and speed. Learn more about our web system development service here.">

     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <title>Web System Development Service | LOGIQUE Digital Indonesia</title>
     <link href="/css/bootstrap.min.css" rel="stylesheet">
     <link href="/css/slick.css" rel="stylesheet">
     <link href="/css/style.css" rel="stylesheet">
     <link href="assets/css/style-systemdev.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600;900&display=swap" rel="stylesheet">
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

 <body class="systedev-page">
 
     <div class="wrapper">
         <!-- NAVIGATION -->
          <div class="nav-lp">
             <button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle"
                 data-toggle="collapse" data-target="#myNavbar">
                 <span class="icon-bar first"></span>
                 <span class="icon-bar second"></span>
                 <span class="icon-bar third"></span>
             </button>
             <div class="collapse navbar-collapse" id="myNavbar">
                 <div class="backdrop-test"></div>
                 <div class="logique-nav logique-nav--update">
                     <div class="margin-for-nav">
                         <div class="text-center ">
                             <a href="/en/">
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
                         <div class="text-center active">
                             <a href="/en/services.php">
                                 <div class="img-services"></div>
                                 Services
                             </a>
                         </div>
                         <div class="text-center">
                             <a href="/en/product.php">
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
                         <div class="text-center">
                             <a href="/en/contact.php">
                                 <div class="img-contact"></div>
                                 Contact us
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
         <!-- END NAVIGATION -->
         <!-- HEADER -->

     
         <!-- NAVIGATION -->

         <!-- HEADER -->
                 <div class="container-fluid">
             <div class="row lang-logo--update-design">
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-offset-1 col-sm-11">
                             
                                 <a href="/en/"><img src="/../img/logo.png" alt="Logo"
                                         class="img-responsive logo--update-design" /></a>
                                 <ul class="list-inline">
                                     <li class="active"><a href="">EN</a></li>
                                     <li><a href="/layanan/pembuatan-sistem-web.php">ID</a></li>
                                     <li><a href="/jp/services/system-dev.php">JP</a></li>
                                 </ul>
                                
                            
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- END HEADER -->
         <!-- END HEADER -->
     </div>
     <header class="content-wrapper__ header"> 
         <div class="container__" style="position:relative">
             <div class="row">
                 <div class="col-md-offset-1 col-md-10 text-center bg-header-txt text-center">
                     <h1 class="m-new">
                         Professional Web Based System Development Services

                     </h1>
                     <h3 class="  m-new">  
                        <span class="logofont">LOGIQUE</span>  is the right partner for you, which provides the best web-based system development and project management services with international standard quality and security. We can help you develop quality web based systems with competitive prices.


                        <p>Consult your business needs with <span class="logofont">LOGIQUE</span>  now! </p>

                     </h3>
                     <a href="/en/contact.php" class="btn-yellow">Contact Us <span class="icon"> <img src="assets/img/img-systemdev/newlayout/arrow-right.svg"></span></a>
                 </div>
             </div>
         </div>
     </header>
     <div class="breadcrumb-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ol class="breadcrumb breadcrumb--update-design" itemscope
                            itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                    href="/index.php"><span itemprop="name">Beranda</span></a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                 <a itemprop="item" href="/en/services.php"><span itemprop="name">&nbsp;Services</span></a>
                                 <meta itemprop="position" content="2" />
                             </li>
                             <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                     itemprop="item"><span itemprop="name">&nbsp;Web
                                         System</span></a>
                                 <meta itemprop="position" content="3" />
                             </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
     
    <section class="content-section first-part">
        <div class="container">
            <div class="section-desc">
                <div class="row">
                    <div class="ol-md-12 text-center"> 
                     A good web-based system development requires the right development company partner to ensure that a designed and developed system is according to the expected target. <span class="logofont">LOGIQUE</span> is committed to providing the best service with international standards and building long-term relationships with each client.
                    </div>

                </div>
            </div>
            <div class="sec-content-part whyour-systemdev">
                <h2 class="sub-section-title text-center">Web Based System Development at  <span class="logofont">LOGIQUE</span></h2>
                <div class="page-content">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#fast">Fast and Flexible</a></li>
                        <li><a  data-toggle="pill" href="#save">Safe and Quality</a></li>
                        <li><a  data-toggle="pill" href="#expert">Experienced</a></li>
                        <li><a  data-toggle="pill" href="#infra">Covering infrastructure</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="fast" class="tab-pane fade in active">
                         <div class="row">
                            <div class="col-sm-6">
                                <p>In the process of developing a web-based system, we use flexible and fast agile development methods. Our development team can adapt to changes so that the system being developed remains high quality and in accordance with dynamic needs.</p>
                            </div>
                            <div class="col-sm-6 text-center">
                                <img src="assets/img/img-systemdev/newlayout/laptop.jpg">
                            </div>
                         </div>
                      </div>
                      <div id="save" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <p style="padding-bottom: 5px;">All web-based systems that we produce are developed with high quality and international standard safety that have been tested including our clients from the financial industry. Technically, we will perform a number of security tests before the system is delivered to the client which includes penetration testing to reduce the risk of cyber attacks such as SQL injection, path traversal, and x-site scripting.</p> 
                                <a href="/en/services/penetration-test.php" class="btn-yellow">Learn Penetration Testing Services</a>
                            </div>
                            <div class="col-sm-6 text-center">
                                <img src="assets/img/img-systemdev/newlayout/laptop-secure.jpg">
                            </div>
                         </div>
                      </div>
                      <div id="expert" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>We are experienced in providing web-based system development services for many large-scale international and local clients especially in the automotive, auction, and e-commerce industries. But overall we have also helped various other industries such as insurance, finance, tourism, manufacturing, and digital startups both in making web-based systems or other services such as mobile application development or digital marketing. With this experience, we quickly understand the client's business needs and provide the best solution for you.</p>
                            </div>
                            <div class="col-sm-6 text-center">
                                <img src="assets/img/img-systemdev/newlayout/laptop-experienced.jpg">
                            </div>
                         </div>
                      </div>
                      <div id="infra" class="tab-pane fade">
                       <div class="row">
                            <div class="col-sm-6">
                                <p>We can help you build and design cloud-based server architectures both in Indonesia and abroad. We are an official partner of AWS and have experience in setting up and implementing cloud servers for AWS, GCP, and Alibaba. Especially in recent times, we have also succeeded in helping to perform many system and database migrations from on-premise servers to cloud servers.</p>
                                 <a href="/en/services/devops.php" class="btn-yellow text-center">Cloud Sever DevOps</a>
                            </div>
                            <div class="col-sm-6 text-center">
                                <img src="assets/img/img-systemdev/newlayout/laptop-infra.jpg">
                            </div>
                         </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="sec-content-part  service-opt">
                <h2 class="sub-section-title text-center"> We have a choice of web-based system development services <br>to suit your needs</h2>
                <div class="page-content skema-list">
                    <div class="row rowflex">
                        <div class="col-sm-6">
                            <div class="skema-content">
                                <h3><span class="number">1.</span> Project Scheme</h3>
                                <p>The web-based system development process will run according to the agreed contract. This type is suitable for website development projects with clear needs. Usually we will recommend the Agile Development method in the process.</p>
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="skema-img">
                                <img src="assets/img/img-systemdev/newlayout/skemaproyek.png">
                            </div>
                        </div>
                    </div>
                    <div class="row rowflex">
                        <div class="col-sm-6">
                            <div class="skema-img">
                                <img src="assets/img/img-systemdev/newlayout/skemaresources.png">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="skema-content">
                            <h3><span class="number">2.</span> Resource Based Scheme</h3>

                            <p>This type can be selected if you want to run the system development process immediately but the work space, concept, or other requirements are still not defined. You can start by hiring a Business Analyst followed by a Designer and Developer during the web-based system development process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row rowflex">
                        <div class="col-sm-6">
                            <div class="skema-content">
                            <h3><span class="number">3.</span> Development Schemes with Fixed Rates</h3>
                            <p>Every month we will work on priority tasks in accordance with a predetermined number of workdays. This type of development is suitable for maintenance projects (website / system maintenance) or advanced development projects for existing systems.</p>
                            </div>
                        </div> 
                        <div class="col-sm-6">
                             <div class="skema-img">
                                <img src="assets/img/img-systemdev/newlayout/skemapengembangan.png">
                            </div>
                        </div>
                    </div>
                    <div class="row rowflex">
                        <div class="col-sm-6">
                            <div class="skema-img">
                                <img src="assets/img/img-systemdev/newlayout/skemaoutsource.png">
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="skema-content">
                            <h3><span class="number">4.</span> Outsource Scheme</h3>
                            <p>We can also provide outsourced services for developers, designers or testers who can work directly at your place if your company has special needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section class="content-section second-part whyus-section">
        <div class="container">
            <div class="sec-content-part">
                <h2 class="text-center sub-section-title">Why should you choose <span class="logofont">LOGIQUE</span> ?</h2>
                <div class="page-content whyus-accordion">
                    <div class="panel-group" id="accordion">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#proteam" class="actives">
                            <span class="number">1.</span> Have a professional team</a>
                          </h4>
                        </div>
                        <div id="proteam" class="panel-collapse collapse in">
                          <div class="panel-body">To produce the best performance, we form a team with high abilities and skills in each field. As of June 2020, we have more than 60 employees consisting of developers, software testers, security specialists, designers, SEOs, content writers, social media specialists, and digital marketing staff. Our team will work together to provide the best results for you. Most of the projects we handle are done without outsourcing, but if necessary we can work with third-party specialists.</div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#komunikatif">
                            <span class="number">2.</span>  A communicative and easy-to-reach team</a>
                          </h4>
                        </div>
                        <div id="komunikatif" class="panel-collapse collapse">
                            <div class="panel-body">Our consulting team is responsible for staying in touch with your project manager. We will explore what your business needs are so that the solutions we provide can be appropriate and right on target. You don't need to worry about complicated technical terms because we will explain them simply until you really understand them.</div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#suggestion">
                             <span class="number">3.</span> Provide suggestions and added value for your company</a>
                          </h4>
                        </div>
                        <div id="suggestion" class="panel-collapse collapse">
                            <div class="panel-body"><p>The purpose of utilizing and developing web-based systems is to support and improve existing businesses. Sometimes, companies have difficulty understanding problems in their business so they don't find the right solution. With the experience we have, we can help solve it. </p>
                            <p>We'll find the source of the problem and share the best suggestions for how to solve it. We will think from the client's point of view when giving suggestions for optimal use and utilization of the web system.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="content-section third-part">
        <div class="container">
             <div class="sec-content-part unsupport-service">
                <h2 class="sub-section-title text-center">Services that we don't support at this time</h2>
                <div class="page-content">
                    <div class="row rowflex">
                        <div class="col-sm-6">
                            <div class="unsupport1 unsupport-content">
                                <h3><div>Implementation of Software Packages</div></h3>
                                <div class="unsupport-icon  text-center">
                                     <img src="assets/img/img-systemdev/newlayout/unsupport-1.svg">
                                </div>
                                <div  class="unsupport-info">
                                    We prioritize the development of web-based systems from the optimal start in accordance with your business goals and needs. By using our services which are based on the open source framework, you will get a web-based system in no time without having to use expensive software packages such as SAP, Microsoft Dynamics, and SalesForce.
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="unsupport2 unsupport-content">
                                <h3>Only develop a specific part of a large-scale project</h3>
                                <div class="unsupport-icon text-center">
                                     <img src="assets/img/img-systemdev/newlayout/unsupport-2.svg">
                                </div>
                                <div class="unsupport-info">
                                    We have capabilities in project management, system maintenance and repair. Therefore, it is difficult for us to focus only on developing certain parts of a project. In large-scale projects, usually the location for system development has also been determined so that it is contrary to our way of working which prioritizes time and place efficiency.
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="text-center unsupport-desc"> 
                        If you entrust overall project management to <span class="logofont">LOGIQUE</span>, <span class="logofont">LOGIQUE</span> can help you be more successful in the project in a fast and flexible way.                         
                    </div>                   
                </div>
            </div>
             <div class="sec-content-part studycase">
                <h2 class="sub-section-title text-center">Case study</h2>
                <div class="page-content">
                    <div class="row rowflex nogutter">
                        <div class="col-sm-6 ">
                            <div class="img-slide-content">
                            <div class="sliderimg-studycase">
                                <div class="slider-item" style="background-image: url(assets/img/img-systemdev/newlayout/jba-img.jpg);">
                                    <div class="company-studycase">
                                        <h3>JBA Indonesia <br>Auction Management System</h3>
                                     JBA is the largest car and motorcycle auction company in Indonesia.
                                    </div>
                                    <div class="technology-studycase">
                                        <strong>Programming languages used : </strong><br>
                                     PHP, NodeJS, SocketIO, Android Native
                                    </div>

                                    <a href="/en/case-study/jba-auction-system/" class="btn-yellow">
                                        Learn more
                                    </a>
                                </div>
                                <div class="slider-item" style="background: url(assets/img/img-systemdev/newlayout/sinarmas-img.jpg);">
                                    <div class="company-studycase">
                                        <h3>Sinarmas Land</h3>
                                        <div>Online Recruitment system</div>
                                    </div>
                                    <div class="technology-studycase">
                                        <strong>Main technologies :</strong><br>
                                     HTML5/CSS3, .Net Framework, SQL Server, Integrasi LDAP dan SAP
                                    </div>                                    
                                </div>
                                <div class="slider-item" style="background: url(assets/img/img-systemdev/newlayout/weeo-img.jpg);">
                                    <div class="company-studycase">
                                        <h3>Weeo</h3>
                                        <div>Real time vehicle monitoring mobile apps</div>
                                    </div>
                                    <div class="technology-studycase">
                                        <strong>Key Technologies: </strong><br>
                                       Android Kotlin, IoT, Integrasi API
                                    </div> 
                                </div>
                            </div>
                            </div> 
                        </div>
                        <div class="col-sm-6  ">
                            <div class="studycase-content text-slide-content">
                                <div class="slidertext-studycase">
                                    <div class="slider2-item">
                                    JBA is the largest car and motorcycle auction company in Indonesia. For JBA, we have been trusted in developing almost all systems used which include the main systems related to vehicle inventory, company websites, online auction applications, inspection applications, financial systems, and many more. Because the JBA system has a very important function, the development of the system must be error free and have a very high level of security. According to the expectations given, we are able to complete projects in good quality and on time through a rigorous and professional project management process and the support of an experienced technical team.
                                    </div>
                                    <div class="slider2-item">
                                    Within 7 months, we succeeded in developing a web-based system for Sinar Mas Land. This system functions as an online recruitment and psychological test system to simplify the employee selection process. The system is also developed with a high level of security to protect the applicant's personal data.
                                    </div>
                                    <div class="slider2-item">
                                    We developed a mobile application for monitoring vehicles in real time. Equipped with digital maps, vehicle owners, dealers, or clients can monitor vehicle conditions and speed directly from their mobile device.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-content-part success-service">
                <h2 class="sub-section-title text-center">Our Other System Development Achievements</h2>
                <div class="page-content">
                    <div class="success-service-list">
                        <div class="row rowflex col10">
                            <div class="col-sm-3">
                                <div class="modal fade modal-achivement" id="achievementmodal1" tabindex="-1" role="dialog" aria-labelledby="achievementLabel1" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel1">Points Management & E-Commerce System Development.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          6 months, AWS, Linux, MySQL, PHP Framework
                                      </div>
                                      <div class="modal-body">
                                        <p>A web-based system used to organize incentive points programs for employees of client companies. This system consists of several integrated sub-systems, namely: supplier systems (suppliers), user systems (users), and service providers admins.</p>

                                        <p>The development of this system takes 6 months. By bringing PHP platform with chosen frameworks, MySQL database, and hosting on Linux server on AWS cloud service, this system has proven to accommodate the business needs of incentive point program for company employees.</p>

                                        <p>To produce a system with high performance and stability, we developed an efficient approach to the application layer and database layer. Then on the server infrastructure side, we have implemented a modern server architecture and utilize the AWS autoscaling and loadbalancing features. So even though there are currently more than 10,000 active users spread across 3 sub-systems, system performance remains stable and maintained.</p>
                                      </div>                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem1.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Points Management & <br>E-Commerce System Development.</h3>
                                        <p>6 months, AWS, Linux, MySQL, PHP Framework</p>
                                    </div>
                                    <a href="javascript:void(0)" class="more-icon" data-toggle="modal" data-target="#achievementmodal1"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="modal fade modal-achivement" id="achievementmodal2" tabindex="-1" role="dialog" aria-labelledby="achievementLabel2" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel2">E-Commerce Development for MLM Companies.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                         6 months, AWS, Linux, MySQL, PHP Framework
                                      </div>
                                      <div class="modal-body">
                                        <p>MLM E-Commerce System with web-based technology. Consists of 3 modules, namely: admin management module, distributor module, and customer module. This system is equipped with features of postage calculations, profit margin calculation of distributors, distributors and users balance management, online registration, and purchase credit online.</p> 
                                        <p>With the support of integration with payment gateway service, customer can do transaction with credit card and virtual account. This system is quite complex. A series of development process takes 6 months.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem2.svg"></div>
                                    <div class="scitem-content">
                                        <h3>E-Commerce Development for MLM Companies.</h3>
                                        <p>6 months, AWS, Linux, MySQL, PHP Framework</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal2" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="modal fade modal-achivement" id="achievementmodal3" tabindex="-1" role="dialog" aria-labelledby="achievementLabel3" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel3">Vehicle Auction Management Development System.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          6 months, AWS, Linux, MySQL, PHP Framework, Node.js
                                      </div>
                                      <div class="modal-body">
                                        <p>Is an automotive auction system with a high level of complexity. It consists of an integrated online auction system, an auction object inventory management system, a financial system, and integrated mobile inspection based vehicle inspection systems, and mobile apps-based bidding applications. This system is integrated with core system and other support systems, so that customers can enjoy the experience of auction in realtime, either through PC browser or via mobile apps.<p>

                                        <p>The system was developed with PHP platform with chosen frameworks, integrated with node.js technology, and using MySQL database. With an effective project management method, we successfully developed this application within 6 months. Performance of this system is quite critical. With a good application architecture design, as well as advanced server architecture design, the performance of this system is very stable, although the current user activity on this system is very active.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Vehicle Auction Management Development System.</h3>
                                        <p>6 months, AWS, Linux, MySQL, PHP Framework, Node.js</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal3" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="modal fade modal-achivement" id="achievementmodal4" tabindex="-1" role="dialog" aria-labelledby="achievementLabel4" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel4">Mobile Application Development (Bid Auction / Bidding on Android).</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2 months, Android, node.js, JAVA, AWS
                                      </div>
                                      <div class="modal-body">
                                        <p>Android based application that we designed to facilitate the customers of auction companies in the online auction in realtime. The integration of android platform with node.js, as well as good UI/UX design, brings experience like auctioning directly at the auction location. With the support of high-performance APIs design, and Linux server hosting servers, as well as server architectures that have adopted the AWS autoscaling and loadbalancing features, the performance of these bidding applications is unquestionable.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem4.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Mobile Application Development (Bid Auction / Bidding on Android).</h3>
                                        <p>2 months, Android, node.js, JAVA, AWS</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal4"  class="more-icon"> See more details </a>
                                </div>
                            </div>
                        </div>
                        <div class="row rowflex col10">
                            <div class="col-sm-3">
                                 <div class="modal fade modal-achivement" id="achievementmodal5" tabindex="-1" role="dialog" aria-labelledby="achievementLabel5" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel5">Mobile Application (Vehicle Inspection / Assessment System).</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          4 months, Android, node.js, JAVA, AWS
                                      </div>
                                      <div class="modal-body">
                                        <p>The system we developed is an android-based applications used for vehicle inspection activities before it is auctioned. More than 900 vehicle parts are inspected through this application. With the help of the application, the inspection and recording of the results can be done very efficiently. The results are stored directly in the core system in realtime.</p>

                                        <p>With a good UI/UX design, users of this application can easily perform the inspection process, no matter how many vehicle parts it involves. In terms of performance, this application is very stable. In addition to the android API designed with a good performance approach, this system is also supported by a good server architecture design and has taken advantage of AWS autoscaling and loadbalancing features.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem5.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Mobile Application (Vehicle Inspection / Assessment System).</h3>
                                        <p>4 months, Android, node.js, JAVA, AWS</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal5"  class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="modal fade modal-achivement" id="achievementmodal6" tabindex="-1" role="dialog" aria-labelledby="achievementLabel6" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel6">CRM System for Motorized Vehicle Road Services.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          3 months, PHP Framework, Payment Gateway, AWS
                                      </div>
                                      <div class="modal-body">
                                        <p>What we developed and are still keep developing is a CRM system for motor insurance. With this system, admin team can easily manage customer data, manage insurance period extensions, manage policy payments, manage dealer partners, manage policy prices, and manage insurance claim data from customers. While for customers, this system provides easiness in terms of demand for insurance extension, insurance planning by simulating the premium price based on the price of the vehicle.</p>

                                        <p>This system is built with PHP technology with chosen platforms, HTML-CSS3, Javascript, JQuery/Ajax, and MySQL database. This system is integrated with gateway payment service from leading service providers, making it easier for customers to transact using credit card and electronic money.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem2.svg"></div>
                                    <div class="scitem-content">
                                        <h3>CRM System for Motorized Vehicle Road Services.</h3>
                                        <p>3 months, PHP Framework, Payment Gateway, AWS</p>
                                    </div>
                                    <a  href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal6"  class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3 ">
                                <div class="modal fade modal-achivement" id="achievementmodal7" tabindex="-1" role="dialog" aria-labelledby="achievementLabel7" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">CRM System for Auction Buyers.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2 months, PHP Framework, MySQL, AWS
                                      </div>
                                      <div class="modal-body">
                                        <p>CRM system for auction company's customers (Buyers), that through this system, customers can check bills, get important information such as history of auction participation, and manage the reward points they get from purchase transactions that have been done.</p>

                                        <p>This system is developed with PHP platform with chosen frameworks, and using MySQL database. Customer can get real time information, because this system is connected to a real time core system via secured-API.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>CRM System for Auction Buyers.</h3>
                                        <p>2 months, PHP Framework, MySQL, AWS</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal7" class="more-icon">Detail</a>
                                </div>
                            </div>
                            <!-- <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal7" tabindex="-1" role="dialog" aria-labelledby="achievementLabel7" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">Cloud Based Component / Layout Management for Magazine Publishers.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2.5 months, JQuery, HTML5, PHP Framework, MySQL
                                      </div>
                                      <div class="modal-body">
                                        <p>Web-based layout management system for setting the layout of advertising columns for print media from leading Japanese Free-paper publisher. With good UI/UX design support, this web application is very easy to use (user-friendly). With drag-and-drop feature, the user can set the ad layout as desired. This system also features export and import layout settings in the form of csv files.</p>

                                        <p>The system was developed with PHP technology with chosen framework, JQuery, and HTML5-CSS3. The process of developing this web application takes 3 months.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Cloud Based Component / Layout Management for Magazine Publishers.</h3>
                                        <p>2.5 months, JQuery, HTML5, PHP Framework, MySQL</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal7" class="more-icon"> See more details </a>
                                </div>
                            </div> -->
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal7" tabindex="-1" role="dialog" aria-labelledby="achievementLabel7" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">Development and Operation of Used Car Market Sites.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2.5 months, JQuery, HTML5, PHP Framework, MySQL
                                      </div>
                                      <div class="modal-body">
                                        <p>Used car marketplace system used by many second-hand car dealers in Jakarta and outside Jakarta. The system is developed with PHP technology with chosen frameworks and runs on Linux platform on AWS server. The development process of this web-based marketplace application takes 3 months.</p>

                                        <p>The user's response to this service continues to increase over time. Currently the system serves more than 30,000 visitors every day. Although traffic is quite solid, the system is very stable.</p>

                                        <p>In addition to web-based technology, the system is also integrated with mobile apps based on Android (Native) and IOS (Swift).</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Development and Operation of Used Car Market Sites.</h3>
                                        <p>2.5 months, JQuery, HTML5, PHP Framework, MySQL</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal7" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal7" tabindex="-1" role="dialog" aria-labelledby="achievementLabel7" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">Digital Map System Development.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          3 months, PHP Framework, MySQL, Google map API, Java Script
                                      </div>
                                      <div class="modal-body">
                                        <p>Development system of a digital map. The system is used for mapping the progress of projects implemented in ASEAN countries. The system was developed with PHP technology with chosen framework, Google Maps API, HTML5-CSS3, and MySQL database. The process of this system development takes 3 months.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Digital Map System Development.</h3>
                                        <p>3 months, PHP Framework, MySQL, Google map API, Java Script</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal7" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal7" tabindex="-1" role="dialog" aria-labelledby="achievementLabel7" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">Development of C2C Auction Systems.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2 months, PHP Framework, MySQL, JQuery/Ajax, HTML5/CSS3 
                                      </div>
                                      <div class="modal-body">
                                        <p>C2C auction system. There are about 2,000 vehicles auctioned and divided into 4 auctions, followed by about 300 users each month. The system is developed with PHP technology with chosen frameworks, JQuery/Ajax, HTML5-CSS3, and MySQL database. The development of this system takes 2 months.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>  
                                <div class="success-item scitem1 ">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Development of C2C Auction Systems.</h3>
                                        <p>2 months, PHP Framework, MySQL, JQuery/Ajax, HTML5/CSS3 </p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal7" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal7" tabindex="-1" role="dialog" aria-labelledby="achievementLabel7" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">Development of CMS Web Systems for Public Organizations.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2 months, PHP Framework, MySQL
                                      </div>
                                      <div class="modal-body">
                                        <p>CMS web system for public organizations: The system was developed to manage the content of public organizations websites. With this system a web admin can easily manage the website content. This CMS web system is developed with PHP technology with chosen framework, HTML5-CSS3, javascript, JQuery, and MySQL database. This CMS web development process takes 2 months.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Development of CMS Web Systems for Public Organizations.</h3>
                                        <p>2 months, PHP Framework, MySQL</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal7" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal7" tabindex="-1" role="dialog" aria-labelledby="achievementLabel7" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">CMS web development for e-book commerce.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                         2 months, PHP Framework, HTML5/CSS3,MySQL
                                      </div>
                                      <div class="modal-body">
                                        <p>E-Commerce CMS system used by a distributor of books from Japan. This system is developed with PHP technology with chosen framework, HTML5-CSS3, and MySQL database. With this web CMS, website administrator can easily manage the company's website content. This web development CMS takes 2 months.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>CMS web development for e-book commerce.</h3>
                                        <p>2 months, PHP Framework, HTML5/CSS3,MySQL</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal7" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal7" tabindex="-1" role="dialog" aria-labelledby="achievementLabel7" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">Job Vacancy Portal System.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                         2 months, PHP Framework, MySQL
                                      </div>
                                      <div class="modal-body">
                                        <p>Job portal system built with PHP technology, HTML5-CSS3, and MySQL database. This job portal is hosted on the AWS Linux server. Companies can search and find job seekers and job seekers can see vacant and open jobs on the website. Candidates can apply for the position directly. The percentage of users of this service is the majority of Japanese companies in Indonesia.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Job Vacancy Portal System.</h3>
                                        <p>2 months, PHP Framework, MySQL</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal7" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal7" tabindex="-1" role="dialog" aria-labelledby="achievementLabel7" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">Web With Recruitment System.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                         2 months, PHP Framework, HTML5/CSS3,MySQL
                                      </div>
                                      <div class="modal-body">
                                        <p>Corporate website equipped with a recruitment system. Job seekers who are interested in working at this company can apply directly through the website. With a high level of security, the confidentiality of the applicant's data is more assured. The system is built with PHP technology, and uses the chosen frameworks, HTML5-CSS3, as well as the Ms. SQL Server database. The development process takes 3 months.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Web With Recruitment System.</h3>
                                        <p>3 months, PHP Framework, HTML5/CSS3,MySQL</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal7" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal7" tabindex="-1" role="dialog" aria-labelledby="achievementLabel7" aria-hidden="true">
                                 <!--  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">Vehicle Management System for car rental companies.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                         2 months, PHP Framework, HTML5/CSS3,MySQL
                                      </div>
                                      <div class="modal-body">
                                        <p>Merupakan sistem CMS yang digunakan oleh sebuah distributor buku asal Jepang. Sistem ini dikembangkan dengan teknologi PHP dengan framework pilihan, HTML5-CSS3, serta database MySQL. Dengan web CMS ini, administrator website dapat dengan mudah mengelola konten website perusahaan. Pengembangan web CMS ini memerlukan waktu selama 2 months.</p>
                                      </div>
                                       
                                    </div>
                                  </div> -->
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Vehicle Management System for car rental companies.</h3>
                                        <p>6 Months, AWS, Linux, MySQL, SAP Connection, PHP Framework</p>
                                    </div>
                                    <!-- <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal7" class="more-icon">Detail</a> -->
                                </div>
                            </div>
                            
                            <div class="col-sm-3 showmore">
                                <a href="javascript:void(0)" class="">
                                <div class="success-item sc-seeall text-center"> 
                                    <div class="center-btn" style=""> 
                                        <span class="other-success-item">  <img src="assets/img/img-systemdev/newlayout/arrow-forward-yellow.svg"> </span><br>
                                        <span class="btntext">See More</span>
                                    </div>    
                                </div>
                                </a>
                            </div>
                            <div class="col-sm-3 showless" style="display: none;">
                                <a href="javascript:void(0)" class="">
                                <div class="success-item sc-seeall text-center"> 
                                    <div class="center-btn" style=""> 
                                        <span class="other-success-item">  <img src="assets/img/img-systemdev/newlayout/arrow-forward-yellow.svg"> </span><br>
                                        <span class="btntext">See Less</span>
                                    </div>    
                                </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section fourth-part">
         <div class="sec-content-part testimonial">
            <h2 class="sub-section-title text-center">Our Clients Testimony</h2>
            <div class="page-content">
                <div class="testimonial-slider">
                    <div class="testislider-item">
                        <div class="client-container">
                            <!-- <ul class="clientinfo">
                                <li class="client-photo">
                                    <img src="assets/img/img-systemdev/newlayout/sample-clinetphoto.png">
                                </li>
                                <li class="client-desc">
                                    <span class="client-name">Axel, 27</span>
                                    <span class="client-title">Project Manager</span>
                                </li>
                            </ul> -->
                            <div class="client-testimoni">
                                As head of the IT department, I have been involved in various systems development projects. But so far I have never found a flexible and dynamic development company like <span class="logofont">LOGIQUE</span> that is able to adapt to the changing needs of users without neglecting the quality provided. I have also asked <span class="logofont">LOGIQUE</span> for maintenance services, and I am very grateful for the information updates that are carried out regularly and on time. 
                            </div>
                            <a href="#" class="more-icon">  <img src="assets/img/img-systemdev/newlayout/arrow-right.svg"> </a>
                        </div>
                    </div>
                    <div class="testislider-item">
                         <div class="client-container">
                           <!--  <ul class="clientinfo">
                                <li class="client-photo">
                                    <img src="assets/img/img-systemdev/newlayout/sample-clinetphoto.png">
                                </li>
                                <li class="client-desc">
                                    <span class="client-name">Axel, 27</span>
                                    <span class="client-title">Project Manager</span>
                                </li>
                            </ul> -->
                            <div class="client-testimoni">
                                Due to the many problems that occurred, I decided to cancel the contract with the previous development company and chose <span class="logofont">LOGIQUE</span> to do further development and manage our system. I am very happy that <span class="logofont">LOGIQUE</span> has succeeded in continuing the development of the web-based system flexibly and effectively even without adequate documentation and information. We only show some problems that we don't really understand, but <span class="logofont">LOGIQUE</span> can actually understand the problems that occur and provide the best solutions for the development of our system.

                            </div>
                            <a href="#" class="more-icon">  <img src="assets/img/img-systemdev/newlayout/arrow-right.svg"> </a>
                        </div>
                    </div>
                    <div class="testislider-item">
                         <div class="client-container">
                           <!--  <ul class="clientinfo">
                                <li class="client-photo">
                                    <img src="assets/img/img-systemdev/newlayout/sample-clinetphoto.png">
                                </li>
                                <li class="client-desc">
                                    <span class="client-name">Axel, 27</span>
                                    <span class="client-title">Project Manager</span>
                                </li>
                            </ul> -->
                            <div class="client-testimoni">
                                We develop a web-based system with a fixed monthly rate which allows the process to be carried out only on certain days. I am very happy with this type of development because the system works well but is still cost effective. For the next project, maybe we will ask for development with dynamic resource-based schema.

                            </div>
                            <a href="#" class="more-icon">  <img src="assets/img/img-systemdev/newlayout/arrow-right.svg"> </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>   
    </section>
    <section class="content-section fifth-part">
        <div class="container">
            <div class="sec-content-part important-point">
                <h2 class="sub-section-title text-center">Important points for successful web system development!</h2>
                <div class="page-content importantpoint-list">
                    <div class="row rowflex col10">
                        <div class="col-sm-4">
                            <div class="importantpoint-item text-center">
                                <h3>Experience</h3>
                                <div class="icon-container">
                                    <img src="assets/img/img-systemdev/newlayout/icon-point1.svg">
                                </div>
                                <div class="point-desc">
                                    <span class="logofont">LOGIQUE</span> has a lot of experience in web-based system development. We will utilize this experience for every development process, from analyzing client needs, formulating solutions, designing systems and infrastructure, developing system functionality, deploying, to training for users.

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="importantpoint-item text-center">
                                <h3>Speed ​​/ Flexibility</h3>
                                <div class="icon-container">
                                    <img src="assets/img/img-systemdev/newlayout/icon-point2.svg">
                                </div>
                                <div class="point-desc">
                                    Business competition is moving faster every day. If web-based system development takes more than 6 months, it will be difficult for you to keep up with ongoing business developments. At <span class="logofont">LOGIQUE</span>, speed is the most important thing. With the agile development method, we can respond quickly and flexibly to any changes.

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="importantpoint-item text-center">
                                <h3>Quality / Safety</h3>
                                <div class="icon-container">
                                    <img src="assets/img/img-systemdev/newlayout/icon-point3.svg">
                                </div>
                                <div class="point-desc">
                                   Quality must still come first. By developing according to international standards both in terms of quality and proven safety, we will always minimize errors and optimize system maintenance.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section sixth-part">
        <div class="sec-content-part contact-banner">
            <div class="page-content">
                <ul>
                    <li class="text-left">Contact us now for optimal web based system development!<li>
                    <li>
                        <a href="/en/contact.php" class="btn-yellow">Contact Us <span class="icon"> <img src="assets/img/img-systemdev/newlayout/arrow-right.svg"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="content-section seventh-part">
        <div class="container">
            <div class="sec-content-part usedtechnology">
                <h2 class="sub-section-title text-center">The programming language we use</h2>
                <div class="page-content ">
                    <div class="row">
                        <div class="col-sm-6">Web development using the PHP framework. We are very good at developing systems using PHP frameworks like Laravel, Symphony, CakePHP  
                        </div>
                        <div class="col-sm-6">
                            <ul class="techlist text-center">
                                <li>
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/laravel.png"></div>
                                    Laravel
                                </li>
                                <li>
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/symphony.png"></div>
                                    Symphony
                                </li>
                                <li>
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/cakephp.png"></div>
                                    CakePHP
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="whyphp">
            <div class="container">
                <div class="sec-content-part "> 
                     
                    <div class="page-content  text-center">
                        <p> We have a lot of experienced PHP programmers so we have a lot of achievements that are very good.  
                        </p>
                        <ul class="w3tech-info">
                            <li>
                               According to the <br>
                               <img src="assets/img/img-systemdev/newlayout/w3tech.png" alt="w3tech">
                            </li>
                            <li>
                                <img src="assets/img/img-systemdev/newlayout/arrow-right.svg" alt=">">
                            </li>
                            <li>
                                <img src="assets/img/img-systemdev/newlayout/percentage.png" alt="83.5%"><br>
                                 of websites in the world
                            </li>
                        </ul>
                        are built using the PHP programming language
                        <div class="img-contianer">
                            <img src="assets/img/img-systemdev/newlayout/phplogo.png">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="othertech">
            <div class="container">
                <div class="sec-content-part ">
                 
                <div class="page-content text-center"> 
                    Although some people think that PHP is old, this programming language <b>is still the main choice</b> for developing web-based systems because of its compatibility with many websites and operational availability. 
                    <div class="img-container">
                        <img src="assets/img/img-systemdev/newlayout/web-img.svg">
                    </div>
                    <p> In addition, currently many CMS such as WordPress also run using the PHP programming language.</p>
                    <div class="jsfw-container">
                        <p><b>Web development using JavaScript framework.</b></p>
                            <div class="js-desc-continer">
                            <div class="row">
                                <div class=" col-md-3  col-sm-4 text-center">
                                    <img src="assets/img/img-systemdev/newlayout/logo-js.png"><br> 
                                    JavaScript
                                </div>
                                <div class="col-md-9  col-sm-8 text-left js-desc">
                                    Web development using JavaScript framework. JavaScript is a programming language that is also used in websites. 
                                </div>
                            </div>
                        </div>
                        

                        <p>
                           This programming language is needed to increase the usability of a website. Besides being proficient in web development using PHP and JavaScript, <span class="logofont">LOGIQUE</span> is also very good at developing PWAs using JavaScript frameworks such as React, Angular, and Vue.js.
                        </p>
                        <ul class="jsframework framework-list">
                            <li><img src="assets/img/img-systemdev/newlayout/logo-react.png"> <br> React</li>
                            <li><img src="assets/img/img-systemdev/newlayout/logo-angular.png"> <br> Angular</li>
                            <li><img src="assets/img/img-systemdev/newlayout/logo-vue.png"> <br> Vue.js</li>
                        </ul>
                        <p>
                             <span class="logofont">LOGIQUE</span> also has the ability to build large-scale systems by combining Node.js and Express.js.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="content-wrapper__">
    <?php include './assets/components/dm-links.php' ?>
        <?php include './assets/components/other-services.php' ?>
    </div>
<!--         <section class="content-section sixth-part">
        <div class="sec-content-part contact-banner">
            <div class="page-content">
                <ul>
                    <li class="text-left">Hubungi kami sekarang untuk <br>pengembangan sistem yang optimal!<li>
                    <li>
                        <a href="/hubungi-kami.php" class="btn-yellow">Contact Us <span class="icon"> <img src="assets/img/img-systemdev/newlayout/arrow-right.svg"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="content-section eighth-part">
        <div class="container">
            <div class="sec-content-part  "> 
                <div class="page-content otherinfo-list">
                    <div class="row rowflex col10">
                        <div class="col-sm-4">
                            <div class="otherinfo-item  ">
                                <a href="/logique.php">
                                <img src="assets/img/img-systemdev/newlayout/img-about.jpg">
                                <div class="otherinfo-desc">
                                    <h3>About  <span class="icon"> <img src="assets/img/img-systemdev/newlayout/arrow-right.svg"></span></h3>
                                    <p><span class="logofont">LOGIQUE Digital Indonesia</span> adalah konsultan IT dan perusahaan pengembang sistem terkemuka Jakarta. </p>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                             <div class="otherinfo-item  ">
                                <a href="/portofolio.php">
                                <img src="assets/img/img-systemdev/newlayout/img-ourwork.jpg">
                                <div class="otherinfo-desc">
                                    <h3>Our Work  <span class="icon"> <img src="assets/img/img-systemdev/newlayout/arrow-right.svg"></span></h3>
                                    <p><span class="logofont">LOGIQUE</span> telah mengembangkan banyak Website, Aplikasi Berbasis Web dan Mobile App, serta memberikan  </p>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                             <div class="otherinfo-item  ">
                                <a href="#">
                                <img src="assets/img/img-systemdev/newlayout/img-faq.jpg">
                                <div class="otherinfo-desc">
                                    <h3>FAQ  <span class="icon"> <img src="assets/img/img-systemdev/newlayout/arrow-right.svg"></span></h3>
                                    <p>A streamlined web app that helps you create and collaborate in real-time on wireframes, mockups, diagrams and prototypes. </p>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-content-part"> 
                 <h2 class="sub-section-title text-center">Other services</h2>
                <div class="page-content otherservice-list">
                    <div class="row col10">
                        <div class="col-sm-3">
                            <a href="/layanan/web-dev.php">
                                <img src="assets/img/img-systemdev/newlayout/img-febe.jpg">
                                <h3 class="text-center">Pengembangan / Pembaharuan Website</h3>
                                <p>
                                    Work remotely in the Cloud - anytime and on any device - without the hassle 
                                </p>
                            </a>
                        </div>
                        <div class="col-sm-3">
                             <a href="/layanan.php#dm_">
                               <img src="assets/img/img-systemdev/newlayout/img-webdis.jpg">
                                <h3 class="text-center">Digital Marketing</h3>
                                <p>
                                    Kami akan melakukan pemasaan website anda melalui berbagai platform marketing
                                </p>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="/layanan.php#otherService_itConsultant">
                                <img src="assets/img/img-systemdev/newlayout/img-consultant.jpg">
                                <h3 class="text-center">Consultant</h3>
                                <p>
                                   Kami dapat menyediakan berbagai layanan konsultasi melalui "Indonesia x IT" 
                                </p>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="/layanan/pembuatan-aplikasi-mobile.php">
                                <img src="assets/img/img-systemdev/newlayout/img-mobileapp.jpg">
                                <h3 class="text-center">Mobile Apps</h3>
                                <p>
                                    Kami menyediakan jasa pengembangan aplikasi Android/iOS secara komprehensif
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
     <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
     <?php include '../footer.php'; ?>

     <section class="tahap-pemesanan-2 text-center hidden-md hidden-lg" style="padding: 2em">Copyright 2018 <span class="logofont">Logique</span></section>
     <style type="text/css">
         .more{
            display: none;
         }
     </style>
     <!-- <script src="//code.jquery.com/jquery-3.2.1.min.js"></script> -->
     <script src="/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
     <script src='https://www.google.com/recaptcha/api.js'></script>
     <script type="text/javascript">
     $(function() {
         $('.smooth').click(function() {
             if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname ==
                 this.hostname) {
                 var target = $(this.hash);
                 target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                 if (target.length) {
                     $('html, body').animate({
                         scrollTop: target.offset().top
                     }, 1000);
                     return false;
                 }
             }
         });
         $('a[data-toggle="collapse"]').on('click', function () {   
            $('a[data-toggle="collapse"]').removeClass('actives');
            $(this).addClass('actives');
         });


     $('.min-h').matchHeight({
         byRow: false
     });
      $('.unsupport-content h3, .scitem-content h3').matchHeight({
         byRow: false
     });

     $('.slidertext-studycase').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      adaptiveHeight : true,
      asNavFor: '.sliderimg-studycase'
    });
    $('.sliderimg-studycase').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.slidertext-studycase',
      dots: true, 
      nextArrow :'<button type="button" class="slick-next"><img src="assets/img/img-systemdev/newlayout/arrow-right.svg"></button>' ,
      prevArrow : '<button type="button" class="slick-prev"><img src="assets/img/img-systemdev/newlayout/arrow-left.svg"></button>'
    });

    $('.testimonial-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1, 
          dots: false,
          arrows:true,
          centerMode: true,
          focusOnSelect: true,
          variableWidth: true, 
          autoplay: true,
          autoplaySpeed: 2000,
          nextArrow :'<button type="button" class="slick-next"><img src="assets/img/img-systemdev/newlayout/arrow-right.svg"></button>' ,
         prevArrow : '<button type="button" class="slick-prev"><img src="assets/img/img-systemdev/newlayout/arrow-left.svg"></button>',
          responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: false, 
            centerMode: false,
            focusOnSelect:false,
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
        });


    $('.showmore').click(function(){
         $('.more').css('display','inline-block');
         $('.showmore').css('display','none'); 
         $('.showless').css('display','inline-block');   
        })

    $('.showless').click(function(){
         $('.more').css('display','none');
         $('.showless').css('display','none'); 
         $('.showmore').css('display','inline-block');  
        })
     });

     </script>
 </body>

 </html>
