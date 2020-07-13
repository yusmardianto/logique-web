 <?php
require_once("form/fgcontact_dokodemo.php");

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
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
     <meta name="description"
         content="Dokodemo-Kerja, a remote work / tele-work management system to improve your company's productivity with flexible working hours. Created by LOGIQUE Digital Indonesia to help managers and HR monitor employees work hours and project progress. Contact us for a free trial!">
     <meta name="keywords"
         content="productivity, increase productivity, time tracker, productivity measurement, remote work, work from home, remote jobs, flexible working, dokodemo kerja, logique digital indonesia">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
     <meta itemprop="name" content="PT. Logique Digital Indonesia">
     <meta property="og:title"
         content="Remote Work / Tele-work Management System | Dokodemo-Kerja | LOGIQUE Digital Indonesia">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:url" content="https://www.logique.co.id/en/product/dokodemo-kerja.php">
     <meta property="og:image" content="https://www.logique.co.id/img/ogimg/product.png">
     <meta property="og:description"
         content="Dokodemo-Kerja, a remote work / tele-work management system to improve your company's productivity with flexible working hours. Created by LOGIQUE Digital Indonesia to help managers and HR monitor employees work hours and project progress. Contact us for a free trial!">

     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     
    <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0096/6080.js" async="async"></script>
    <title>Remote Work / Tele-work Management System | Dokodemo-Kerja | LOGIQUE Digital Indonesia</title>
     <link href="/css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style_dokodemo.css" rel="stylesheet">
     <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <script>
     (function(i, s, o, g, r, a, m) {
         i['GoogleAnalyticsObject'] = r;
         i[r] = i[r] || function() {
             (i[r].q = i[r].q || []).push(arguments)
         }, i[r].l = 1 * new Date();
         a = s.createElement(o),
             m = s.getElementsByTagName(o)[0];
         a.async = 1;
         a.src = g;
         m.parentNode.insertBefore(a, m)
     })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

     ga('create', 'UA-105878648-1', 'auto');
     ga('send', 'pageview');
     </script>

     <!-- Google Tag Manager -->
     <script>
     (function(w, d, s, l, i) {
         w[l] = w[l] || [];
         w[l].push({
             'gtm.start': new Date().getTime(),
             event: 'gtm.js'
         });
         var f = d.getElementsByTagName(s)[0],
             j = d.createElement(s),
             dl = l != 'dataLayer' ? '&l=' + l : '';
         j.async = true;
         j.src =
             'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
         f.parentNode.insertBefore(j, f);
     })(window, document, 'script', 'dataLayer', 'GTM-KT7GBKC');
     </script>
     <!-- End Google Tag Manager -->
 </head>

 <body class="dokodemo">
     <!-- Google Tag Manager (noscript) -->
     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KT7GBKC" height="0" width="0"
             style="display:none;visibility:hidden"></iframe></noscript>
     <!-- End Google Tag Manager (noscript) -->
     <header>
         <div class="nav-lp">
             <button type="button" class="navbar-toggle collapsed" aria-label="navbar-toggle" data-toggle="collapse"
                 data-target="#myNavbar">
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
                             <a href="/career/">
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
         <nav class="navbar navbar-default navbar-dokdem">
             <div class="container">
                 <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" aria-label="navbar-toggle"
                         data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" href="#" aria-label="Dokodemo Kerja Logo">
                         <img src="img/dokodemo-kerja/dokodemo-logo.svg" alt="Dokodemo Kerja Logo"
                             class="img-responsive center-block">
                     </a>
                     <div class="pull-left visible-xs">
                         <ul class="nav-lang">
                             <li class="pull-left"><a href="/produk/dokodemo-kerja.php">IND</a></li>
                             <li class="pull-left active">ENG</li>
                             <li class="pull-left"><a href="/jp/product/dokodemo-kerja.php">JPN</a></li>
                         </ul>
                     </div>
                 </div>
                 <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                     <ul class="nav navbar-nav">
                         <li><a href="#introduction" class="smooth">Home</a></li>
                         <li><a href="#about" class="smooth">About Dokodemo-Kerja</a></li>
                         <li><a href="#fitur" class="smooth">Features</a></li>　
                         <li><a href="#benefits" class="smooth li-mt">Profit</a></li>　
                         <li><a href="#price" class="smooth li-mt">Price</a></li>　
                         <li><a href="#divForm" class="smooth li-mt">Contact Me</a></li>
                     </ul>
                     <a class="logique-logo-link" href="/en/" target="_blank" aria-label="Logique Logo"><img
                             class="pull-right img-responsive center-block logo-logique-header"
                             src="img/dokodemo-kerja/logo_logique.png" alt="Logo Logique" /></a>
                     <div class="pull-right btn-lang">
                         <ul class="nav-lang hidden-xs">
                             <li class="pull-left"><a href="/produk/dokodemo-kerja.php">IND</a></li>
                             <li class="pull-left active">ENG</li>
                             <li class="pull-left"><a href="/jp/product/dokodemo-kerja.php">JPN</a></li>
                         </ul>
                     </div>
                 </div>
                 <!--/.nav-collapse -->
             </div>
             <!--/.container-fluid -->
         </nav>
         <div class="container" id="introduction">
             <div class="row">
                 <div class="col-md-10 col-md-offset-1">
                     <div class="div-top">
                         <h1 class="anton title">Solution For Working Flexibly and Be More Productive</h1>
                         <hr />
                         <p class="text-center">
                             Every morning on weekdays, most workers in Indonesia face a painful trip to office; traffic
                             jam, delayed public transportations, and crowded commuting. It’s all very stressful. Not to
                             mention if it’s rainy season, being late becomes a thing that has to be understood by
                             companies. The result? Productivity decreases and target companies have to be postponed. If
                             only employees could work without the need to be bound of time and place, then productivity
                             could be more increasing and all things above wouldn’t be problems, right?
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </header>
     <div class="bg-black" id="about">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <div class="title">
                         <span class="blue">Dokodemo-Kerja?</span><br />
                         <div class="quote">“</div>Dokodemo-Kerja is an IT solution that can solve it.
                     </div>
                     <br />
                     <div class="hidden-xs"><br /><br /></div>
                     <!-- <video width="100%" height="300" controls
                         poster="/en/product/img/dokodemo-kerja/thumb-dokodemo.png">
                         <source src="/en/product/img/dokodemo-kerja/dokodemo-kerja.webm" type="video/webm" />
                     </video> -->
                     <div class="embed-responsive embed-responsive-16by9 feature-video">
                        <iframe class="embed-responsive-item" width="811" height="417" title="Dokodemo Youtube Video"
                            src="https://www.youtube.com/embed/OWmF48Cq_fA" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                     <br /><br />
                 </div>
                 <div class="col-md-6 text-justify">
                     <h2 class="title2">What is <span class="blue">Dokodemo-Kerja?</span></h2>
                     <span class="blue">Dokodemo-Kerja</span> is a professional work system created to help increasing
                     productivity for independent and flexible workers. Your company can now implement remote work
                     system for employees anywhere and anytime. Employees are freed from the saturation and tight
                     working atmosphere in the office. In addition to facilitate remote-work system, <span
                         class="blue">Dokodemo-Kerja</span> can also be used to monitor productivity of employees in the
                     office. Always track time your employees spent. Find out if they get their tasks done efficiently.
                     See the performance of all employees in detail. With this, managers and HR can determine and
                     evaluate the performance of each employee.
                     <br /><br />
                     <div class="text-center">
                         <a style="margin-top: 10px;" href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer"
                             class="btn-learn-more">
                             Learn More
                         </a>
                     </div>
                     <br />
                 </div>
             </div>
             <br />
             <div class="row visible-lg">
                 <div class="col-md-12">
                     <div class="poster-main screenshot-slide ">
                         <div class="poster-btn poster-prev-btn"></div>
                         <ul class="poster-list">
                             <li class="poster-item"><img src="/produk/img/dokodemo-kerja/ss1.jpg" alt="Dokodemo Kerja"></li>
                             <li class="poster-item"><img src="/produk/img/dokodemo-kerja/ss2.jpg" alt="Dokodemo Kerja"></li>
                             <li class="poster-item"><img src="/produk/img/dokodemo-kerja/ss3.jpg" alt="Dokodemo Kerja"></li>
                             <li class="poster-item"><img src="/produk/img/dokodemo-kerja/ss4.jpg" alt="Dokodemo Kerja"></li>
                             <li class="poster-item"><img src="/produk/img/dokodemo-kerja/ss5.jpg" alt="Dokodemo Kerja"></li>
                         </ul>
                         <div class="poster-btn poster-next-btn"></div>
                     </div>
                 </div>
             </div>
             <div class="row hidden-lg">
                 <div class="col-md-12">
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                         <!-- Wrapper for slides -->
                         <div class="carousel-inner">
                             <div class="item active">
                                 <img src="/produk/img/dokodemo-kerja/ss4.jpg" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div>
                             <div class="item">
                                 <img src="/produk/img/dokodemo-kerja/ss1.jpg" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div>
                             <div class="item">
                                 <img src="/produk/img/dokodemo-kerja/ss2.jpg" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div>
                             <div class="item">
                                 <img src="/produk/img/dokodemo-kerja/ss3.jpg" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div>
                             <div class="item">
                                 <img src="/produk/img/dokodemo-kerja/ss5.jpg" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div>
                         </div>
                         <!-- Left and right controls -->
                         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                             <span class="glyphicon glyphicon-chevron-left"></span>
                             <span class="sr-only">Previous</span>
                         </a>
                         <a class="right carousel-control" href="#myCarousel" data-slide="next">
                             <span class="glyphicon glyphicon-chevron-right"></span>
                             <span class="sr-only">Next</span>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="visible-lg"><br /><br /></div>
         </div>
     </div>

     <div class="bg-yellow" id="fitur">
         <img src="img/dokodemo-kerja/image-fitur.png" alt="Fitur" class="image-fitur img-responsive" />
         <div class="container-fluid">
             <div class="bg-old-yellow">
                 <div class="row" style="margin:0">
                     <div class="col-md-6 col-md-offset-6">
                         <div class="bg-one-fitur">
                             <div class="one-fitur" style="margin-bottom: 0;">
                                 <img src="img/dokodemo-kerja/fitur1.png" alt="Fitur" class="img-responsive" />
                                 Track time and monitor tasks.<br />
                                 Takes a screen capture of the employee's work activity on their computer screen in
                                 random times and directly sends it to the management team.
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row" style="margin:0">
                 <div class="col-md-6" style="padding: 0;">
                     <div class="title-fitur anton">
                         <span class="anton">Dokodemo-Kerja</span><br /> Features
                     </div>
                     <div class="dengan-fitur">
                         <div class="quote">“</div>With these features, Dokodemo-Kerja can be a new work system
                         revolution for your company and employees.
                     </div>
                 </div>
                 <div class="col-md-6 one-fitur-btm">
                     <div class="bg-one-fitur visible-sm visible-xs">
                         <div class="one-fitur">
                             <img src="img/dokodemo-kerja/fitur1.png" alt="Fitur" class="img-responsive" />
                             Melacak dan memantau tugas karyawan hanya dalam satu klik.<br />
                             <strong>Dokodemo-Kerja</strong> mengambil cuplikan layar (screen capture) aktivitas kerja
                             karyawan pada layar perangkat komputernya dalam waktu yang acak (random) dan mengirimnya
                             pada tim manajemen (administrator).
                         </div>
                     </div>
                     <div class="bg-one-fitur">
                         <div class="one-fitur">
                             <img src="img/dokodemo-kerja/fitur2.png" alt="Fitur" class="img-responsive" />
                             Get the accurate time reports<br />
                             Accurately calculates the total working hours of employees, including break times, based on
                             employee’s real work activities. All with just one easy click.
                         </div>
                     </div>
                     <div class="bg-one-fitur">
                         <div class="one-fitur">
                             <img src="img/dokodemo-kerja/fitur3.png" alt="Fitur" class="img-responsive" />
                             Manage employees man-hours<br />
                             Manages the total man-hours spent by employees to do a particular project, so companies are
                             able to predict a proper deadline or target time that can be generally done by employees.
                         </div>
                     </div>
                     <div class="bg-one-fitur">
                         <div class="one-fitur">
                             <img src="img/dokodemo-kerja/fitur4.png" alt="Fitur" class="img-responsive" />
                             All on one screen<br />
                             Displays the total working hours of all employees in a single screen display, making it
                             more efficient for the company to determine the performance of all employees transparently.
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- <div class="bg-why">
			<h2 class="title">Mengapa Memakai Dokodemo-Kerja?</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Saat ini, cukup banyak karyawan yang bekerja sebagai freelance untuk menghemat waktu. Dokodemo-Kerja dapat membantu Anda mencatat jam kerja karyawan remote secara efektif dan efisien.</li>
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dokodemo-Kerja dapat mempermudah Anda dalam memantau produktifitas karyawan yang bekerja dari jarak jauh.</li>
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dokodemo-Kerja dapat membantu Anda dalam mengelola dan mengatur masalah kehadiran karyawan.</li>
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dengan Dokodemo-Kerja, perusahaan dapat mendorong karyawan untuk lebih bersemangat dan produktif dalam bekerja.</li>
						</ul>
						<div class="text-center">
							<a href="#divForm" class="smooth btn btn-coba">Butuh Solusi yang Nyata?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<h2 class="title-masalah anton">Masalah yang Sering Dihadapi</h2> -->
     <div class="bg-masalah1" id="benefits">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6">
                     <div class="pl-25">
                         <div class="anton title-masalah1">Dokodemo-Kerja</div>
                         <div class="kami-siap">Increase Productivity Now</div>
                         <div class="desc-bantu">
                             <div class="quote">“</div>
                             <strong>Dokodemo-Kerja</strong> is a profitable work system solution for both employees and
                             companies. With an efficient work system, <strong>Dokodemo-Kerja</strong> can help
                             companies concentrate on increasing productivity while at the same time, providing
                             flexibility to their employees.<br><br>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="bg-masalah2">
         <div class="container">
             <div class="row">
                 <div class="col-lg-offset-6 col-lg-6">
                     <div class="pr-25" style="min-height: 185px;">
                         <br />
                         <div class="blue2 font18"><strong class="font18">Why Dokodemo-Kerja?</strong></div>
                         <ul class="fa-ul">
                             <li><span class="fa-li"><i class="fa fa-circle"></i></span>Help monitoring the productivity
                                 of remote workers (freelance, remote systems, etc.).</li>
                             <li><span class="fa-li"><i class="fa fa-circle"></i></span>Help employees work flexibly and
                                 more productive without having to leave home.</li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="bg-masalah3">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6">
                     <div class="pl-25" style="min-height: 169px">
                         <ul class="fa-ul">
                             <li><span class="fa-li"><i class="fa fa-circle"></i></span>Prevent employees from filling
                                 out work reports that do not fit the reality.</li>
                             <li><span class="fa-li"><i class="fa fa-circle"></i></span>Help recording and managing
                                 employee’s proper work activities and hours.</li>
                             <li><span class="fa-li"><i class="fa fa-circle"></i></span>Help encouraging employees to be
                                 more passionate of working with the flexibility of their time.</li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- <div class="div-masalah">
			<div class="container">
				<div class="border-white">
					<div class="row">
						<div class="col-md-6">
							<img class="masalah2 hidden-sm hidden-xs" alt="Masalah 2" src="img/dokodemo-kerja/masalah2.png"/>
						</div>
						<div class="col-md-6">
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Divisi HR terlalu lelah untuk memperingati karyawan yang seringkali terlambat dan kurang produktif.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Perusahaan sulit dalam memantau karyawan yang bekerja secara jarak jauh.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="div-masalah last">
			<div class="container">
				<div class="border-white">
					<div class="row">
						<div class="col-md-6">
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Karyawan keliru dalam mengisi laporan pekerjaan.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Karyawan perusahaan tidak mengisi jam kerja sesuai dengan kenyataannya.</li>
							</ul>
						</div>
						<div class="col-md-6">
							<img class="masalah3 hidden-sm hidden-xs" alt="Masalah 3" src="img/dokodemo-kerja/masalah3.png"/>
						</div>
					</div>
				</div>
			</div>
		</div> -->
     <div class="bg-blue text-center">
         <div class="container">
             <div class="row">
                 <div class="col-md-offset-1 col-md-10">
                     <img class="img-responsive center-block" src="img/dokodemo-kerja/dokodemo-logo.svg" style="max-width: 170px" alt="Dokodemo-Kerja Logo" />
                     <br />
                     <div class="title anton">Dokodemo-Kerja is the right solution.</div>
                     <hr />
                     <ul>
                         <li><i class="fa fa-check"></i> For companies that are considering remote work systems
                             (freelancers, remote workers, etc.)</li>
                         <li><i class="fa fa-check"></i> For companies that want to increase productivity as well as
                             employee’s happiness.</li>
                         <li><i class="fa fa-check"></i> For companies that want to limit the use of inefficient working
                             hours, such as smoking breaks</li>
                         <li><i class="fa fa-check"></i> And rest after prayers, watch excessive entertainment videos,
                             up to checking out social media.</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>

     <div class="div-masalah-new">
         <div class="container">
             <div class="row">
                 <div class="col-md-offset-1 col-md-5">
                     <a href="/pdf/manual-guide.pdf" target="_blank" aria-label="Manual Guide" class="dl-guide"><img
                             src="/img/manual.png" alt="Manual Guide" style="width:100%" /></a>
                 </div>
                 <div class="col-md-5">
                     <a href="/pdf/install-guide.pdf" target="_blank" aria-label="Manual Guide" class="dl-guide"><img
                             src="/img/install.png" alt="Install Guide" style="width:100%" /></a>
                 </div>
             </div>
         </div>
     </div>

     <div class="harga" id="price">
         <div class="container">
             <div class="title anton">Dokodemo-Kerja Price</div><br />
             <div class="text-center"><strong>Dokodemo-Kerja</strong> is created for companies to monitor and track the
                 working time of their employees, freelancers, or remote workers so that the company's productivity
                 increases. Here are the plans offered by <strong>Dokodemo-Kerja</strong>.</div><br />
             <br />
             <div class="row">
                 <div class="col-md-offset-2 col-md-4">
                     <div class="card-harga">
                         <div class="title-card text-center">Light Plan</div>
                         <div style="padding:30px 0;border-bottom: 1px solid #fff;">
                             <div class="price"><strong>Rp 1 Million</strong></div>
                             <div class="price" style="font-size: 15px;">/ Month</div>
                         </div>
                         <div class="plan-list">
                             <ul class="fa-ul">
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>Time tracking</li>
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot monitoring</li>
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>1 screenshot per 10 minutes
                                 </li>
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot saved for 2
                                     months</li>
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>
                                     <b>For 10 users *</b><br />
                                     <div style="font-size: 12px;color: #da0101;margin-top: 10px;font-style: italic;">
                                         &gt; 10 users, then each user is extra charged for Rp 50.000 / month</div>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <!-- <div class="col-md-4">
                     <div class="card-harga">
                         <div class="title-card text-center">Standard Plan</div>
                         <div style="padding:30px 0;border-bottom: 1px solid #fff;">
                             <div class="price"><strong>Rp 3 Million</strong></div>
                             <div class="price" style="font-size: 15px;">/ Month</div>
                         </div>
                         <div class="plan-list">
                             <ul class="fa-ul">
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>Time tracking</li>
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot monitoring</li>
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>1 screenshot per 3 minutes
                                 </li>
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshots saved for 6
                                     months</li>
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>
                                     <b>For 20 users *</b><br />
                                     <div style="font-size: 12px;color: #da0101;margin-top: 10px;font-style: italic;">
                                         &gt; 20 users, then each user is extra charged for Rp 75.000 / month
                                     </div>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div> -->
                 <div class="col-md-4">
                     <div class="card-harga">
                         <div class="title-card text-center">Enterprise Plan</div>

                         <!-- <div class="text-center heightauto" style="padding:15px;">
                             <div class="valign-center">
                                 Silahkan hubungi kami untuk mendapatkan informasi secara detail.
                                 <div class="text-center">
                                     <a href="#divForm" class="smooth btn btn-coba">Hubungi Kami</a>
                                 </div>
                             </div>
                         </div> -->

                         <div class="text-center" style="padding:26px 0;border-bottom: 1px solid #fff;">
                             Please contact us for detail information.<br>
                             * There are no additional charges
                             <div class="text-center">
                                 <a href="#divForm" class="smooth btn btn-coba">Contact Me</a>
                             </div>
                         </div>

                         <div class="plan-list">
                             <ul class="fa-ul">
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>Time Tracking</li>
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot M onitoring
                                 </li>
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>1 Screenhot per (#)
                                     minutes</li>
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot saved for (#)
                                     months</li>
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>
                                     For (#) users<br />
                                 <li><span class="fa-li"><i class="fa fa-circle"></i></span>
                                     <b>+ Custom features</b><br />
                                     <div class="text-center"
                                         style="font-size: 12px;color: #da0101;margin-top: 10px;font-style: italic;">
                                         (#): Set upon request
                                     </div>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="text-center">
             <a style="margin: 50px 0 35px 0;" href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer"
                 class="btn-learn-more">
                 Learn More
             </a>
         </div>
     </div>
     </div>

     <div class="testi-div">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="anton title yellow text-center">Testimonial Dokodemo-Kerja</div>
                 </div>
             </div>
             <br />
             <div class="row">
                 <div class="col-md-4">
                     <div class="testi-content">
                         <div class="anton quotes-mark">“</div>
                         <p>
                             The traffic jam to my office is quite stressful. My house is so far from the office and I
                             have to take a very crowded bus. Every day I spend about 4 hours on the road, constantly
                             like that. I’m so grateful when my company finally use Dokodemo-Kerja and implemented a
                             remote work system in the office. With Dokodemo-Kerja, I can work anywhere I want now. I
                             also can use the 4 hours road to do something more productive.
                         </p>
                         <div class="text-center"><span class="fs-16"><strong>Rafid</strong></span> - <span
                                 class="fs-14">Front End Developer</span></div>
                     </div>
                     <br />
                 </div>
                 <div class="col-md-4">
                     <div class="testi-content">
                         <div class="anton quotes-mark">“</div>
                         <p>
                             It used to be so difficult for me to ask employees to stop spending too much time on social
                             media, orYoutube, or playing games on working hours. Dokodemo-Kerja helps me so much with
                             it. Its feature of capturing each employee’s computer screen at certain times makes them
                             able to manage their working time. Now, everyone stops Dokodemo-Kerja if they want to check
                             their social media or playing games, because those activities aren’t counted as their
                             working hours.
                         </p>
                         <div class="text-center"><span class="fs-16"><strong>Kevin</strong></span> - <span
                                 class="fs-14">HR Staff</span></div>
                     </div>
                     <br />
                 </div>
                 <div class="col-md-4">
                     <div class="testi-content">
                         <div class="anton quotes-mark">“</div>
                         <p>
                             Sometimes I noticed my staffs were having a break too long on prayer time. I just want
                             everyone to have fair working hours, no matter what religion they believe in, but it’s
                             difficult for me to discuss about it. Since we use Dokodemo-Kerja, all employees have fair
                             working hours. If it’s time to have a praying break, they always stop the record and start
                             again when they get back to work. Dokodemo-Kerja helps our company so much to stay
                             productive.
                         </p>
                         <div class="text-center"><span class="fs-16"><strong>Mizuho Yamada</strong></span> - <span
                                 class="fs-14">Manager of Back Office</span></div>
                     </div>
                     <br />
                 </div>
                 <div class="clearfix"></div>
                 <hr class="hidden-sm hidden-xs" />
                 <div class="col-md-4">
                     <div class="testi-content">
                         <div class="anton quotes-mark">“</div>
                         <p>
                             I’ve always wanted to go back to university to finish my degree. With Dokodemo-Kerja, I can
                             prove my manager that I’m still able to work 8 hours every day. Some days, I work in the
                             morning, and the other days, I work at night. Now, I can continue my study and still be
                             able to work. Dokodemo-Kerja has helped me increasing the quality of my life. Thank you.
                         </p>
                         <div class="text-center"><span class="fs-16"><strong>Angga</strong></span> - <span
                                 class="fs-14">Designer</span></div>
                     </div>
                     <br />
                 </div>
                 <div class="col-md-4">
                     <div class="testi-content">
                         <div class="anton quotes-mark">“</div>
                         <p>
                             I used to think that working full time remotely was absurd. I mean, if everyone is working
                             remotely, how do we know if they are working fairly on working hours? But since we use
                             Dokodemo-Kerja, we never worry about it anymore. This smart system makes it possible for us
                             to monitor the working hours spent by all employees and how they spent it. Dokodemo-Kerja
                             is indeed helping our company.
                         </p>
                         <div class="text-center"><span class="fs-16"><strong>Arie</strong></span> - <span
                                 class="fs-14">HR Staff</span></div>
                     </div>
                     <br />
                 </div>
                 <div class="col-md-4">
                     <div class="testi-content">
                         <div class="anton quotes-mark">“</div>
                         <p>
                             Dokodemo-Kerja has changed the way I work in the most productive way possible. I’m a new
                             mom and I don’t think I can trust my newborn son with some kind of a babysitter while I
                             work at the office. I’m really happy because with Dokodemo-Kerja, the company lets me work
                             at home. Now I can still work and be with my baby 24 hours every day.
                         </p>
                         <div class="text-center"><span class="fs-16"><strong>Sisca</strong></span> - <span
                                 class="fs-14">Programmer</span></div>
                     </div>
                     <br />
                 </div>
                 <div class="clearfix"></div>
                 <hr class="hidden-sm hidden-xs" />
                 <div class="col-md-4">
                     <div class="testi-content">
                         <div class="anton quotes-mark">“</div>
                         <p>
                             I often reprimand employees who go out too long to smoke. The reason is that they don’t
                             work according to working hours that should apply. I just want fair working hours to apply
                             to all employees. After using the Dokodemo-Kerja, there are no more employees using the
                             time to smoke too long. I can easily calculate employee work hours too.
                         </p>
                         <div class="text-center"><span class="fs-16"><strong>Tiara</strong></span> - <span
                                 class="fs-14">HR Staff</span></div>
                     </div>
                     <br />
                 </div>
                 <div class="col-md-4">
                     <div class="testi-content">
                         <div class="anton quotes-mark">“</div>
                         <p>
                             My mother is ill, and I thought I had to give up my job because I needed to stay home to
                             take care of her. But, I’m very grateful now, Dokodemo-Kerja has made it possible for me to
                             work remotely from home. I can still be there for my mother while also working
                             professionally at the same time.
                         </p>
                         <div class="text-center"><span class="fs-16"><strong>Bobby Susanto</strong></span> - <span
                                 class="fs-14">Programmer</span></div>
                     </div>
                     <br />
                 </div>
                 <div class="clearfix"></div>
             </div>
         </div>
     </div>

     <div class="div-faq">
         <div class="anton title yellow">FAQ:</div>
         <br />
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <h3 class="blue2 fw-500">Q. On what OS <strong>Dokodemo-Kerja</strong> can operate? What should be
                         prepared to run it?</h3>
                     <p>
                         A. <strong>Dokodemo-Kerja</strong> can operate on any popular OS, such as Windows, Macintosh,
                         and Linux. You don’t have to prepare a server. All you have to do is simply install
                         <strong>Dokodemo-Kerja</strong>, and you can start using it right away. The administrator can
                         access the management screen through browser.
                     </p>
                     <h3 class="blue2 fw-500">Q. Can <strong>Dokodemo-Kerja</strong> operate on mobile devices?</h3>
                     <p>
                         A. <strong>Dokodemo-Kerja</strong> doesn’t yet cover staffs who work on mobile device. It is
                         still out of our service.
                     </p>
                     <h3 class="blue2 fw-500">Q. How does <strong>Dokodemo-Kerja</strong> manage staffs who work outside
                         of office?</h3>
                     <p>
                         A. Work hours can be edited later when staffs use computers again.
                         <strong>Dokodemo-Kerja</strong> is fundamentally targeted for employees who mainly do desk
                         work.
                     </p>
                     <h3 class="blue2 fw-500">Q. Can <strong>Dokodemo-Kerja</strong> be used outside Indonesia?</h3>
                     <p>
                         A. You can use it with no problem. If you use <strong>Dokodemo-Kerja</strong> while moving to a
                         place with different time zone during the same day, there will be no problem but the monitoring
                         process will be a little bit complicated.
                     </p>
                 </div>
                 <div class="col-md-6">
                     <h3 class="blue2 fw-500">Q. Can I change the frequency of capturing and sending screenshots in
                         <strong>Dokodemo-Kerja?</strong></h3>
                     <p>
                         A. In Light version, the screenshot will be captured randomly every 10 minutes. In Standard
                         version, one screenshot per 1 minute. Those screenshots will be captured at random time,
                         therefore users can’t know when it will be captured and sent.
                     </p>
                     <h3 class="blue2 fw-500">Q. What about the resolution of screenshot image used by
                         <strong>Dokodemo-Kerja?</strong></h3>
                     <p>
                         A. <strong>Dokodemo-Kerja</strong> uses image resolution that considers privacy. You can see
                         what the image is, but you can’t see the small detail within it. For instance, you can see a
                         user has opened a client’s email, but you can’t see the content clearly. Also, if a user opens
                         a chat tool, you can’t see what kind of message they have.
                     </p>
                     <h3 class="blue2 fw-500">Q. Is there a minimum contract period needed to use
                         <strong>Dokodemo-Kerja?</strong> And how do I purchase it?</h3>
                     <p>
                         A. There is no minimum contract period. <strong>Dokodemo-Kerja</strong> is available from the
                         first month of contract. At the end of the month, we will count the number of users and issue
                         an invoice. You can pay it via bank transfer until the end of next month.
                     </p>
                 </div>
             </div>
             <br />
             <div class="row">
                 <div class="col-md-offset-1 col-md-10">
                     <div style="padding:10px;border:1px solid #edb41a">
                         <div class="div-above-footer">
                             <strong>Dokodemo-Kerja</strong> is a professional work system created to help increasing
                             productivity for independent and flexible workers.
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="div-form" id="divForm">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="title text-center">
                         <span class="blue2">For more information about Dokodemo-Kerja, please contact us by filling out
                             the form below.
                     </div>
                 </div>
             </div>
             <br />
             <?php if(isset($msg))
				{
				echo $msg;
				}
				?>
             <form class="form-dokodemo" role="form" name='myForm' onsubmit='return validateForm()'
                 action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                 <input type='hidden' name='submitted' id='submitted' value='1' />
                 <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>'
                     value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                 <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                 <div class="row">
                     <div class="form-group">
                         <div class="col-md-offset-1 col-md-5">
                             <input required type="text" class="form-control" name="name" aria-label="Name"
                                 placeholder="Name" value='<?php echo $formproc->SafeDisplay('name') ?>' />
                         </div>
                         <div class="col-md-5">
                             <input required type="text" class="form-control" name="company" aria-label="Company"
                                 placeholder="Company" value='<?php echo $formproc->SafeDisplay('company') ?>' />
                         </div>
                         <div class="clearfix"></div>
                     </div>
                     <div class="form-group">
                         <div class="col-md-offset-1 col-md-5">
                             <input required type="number" class="form-control" name="phone" aria-label="Phone"
                                 placeholder="Phone Number" value='<?php echo $formproc->SafeDisplay('phone') ?>' />
                         </div>
                         <div class="col-md-5">
                             <input required type="email" class="form-control" name="email" aria-label="Email"
                                 placeholder="Email" value='<?php echo $formproc->SafeDisplay('email') ?>' />
                         </div>
                         <div class="clearfix"></div>
                     </div>
                     <div class="form-group">
                         <div class="col-md-offset-1 col-md-5">
                             <div style="padding:10px;background:#fff">
                                 <span class="blue fw-300">What do you want to know from Dokodemo-Kerja?</span>
                                 <div class="radiobuttons">
                                     <!-- <div class="rdio">
										  <input name="needs" value="About Dokodemo-Kerja free trial" id="radio2" type="radio" required>
										  <label class="highlight-radio" for="radio2">About Dokodemo-Kerja free trial</label>
										</div> -->
                                     <div class="rdio">
                                         <input name="needs" value="About Dokodemo-Kerja purchase" id="radio3"
                                             type="radio" required>
                                         <label class="highlight-radio" for="radio3">About Dokodemo-Kerja
                                             purchase</label>
                                     </div>
                                     <div class="rdio">
                                         <input name="needs" value="About Dokodemo-Kerja operation" id="radio4"
                                             type="radio" required>
                                         <label for="radio4">About Dokodemo-Kerja operation</label>
                                     </div>
                                     <div class="rdio">
                                         <input name="needs" value="About remote work system with Dokodemo-Kerja"
                                             id="radio5" type="radio" required>
                                         <label for="radio5">About remote work system with Dokodemo-Kerja</label>
                                     </div>
                                     <div class="rdio">
                                         <input name="needs" value="About increased productivity with Dokodemo-Kerja"
                                             id="radio6" type="radio" required>
                                         <label for="radio6">About increased productivity with Dokodemo-Kerja</label>
                                     </div>
                                     <div class="rdio">
                                         <input name="needs"
                                             value="About monitor employee working hours with Dokodemo-Kerja"
                                             id="radio7" type="radio" required>
                                         <label for="radio7">About monitor employee working hours with
                                             Dokodemo-Kerja</label>
                                     </div>
                                 </div>
                             </div>
                             <br />
                         </div>
                         <div class="col-md-5">
                             <textarea required name="message" class="form-control" aria-label="Message"
                                 placeholder="Description"><?php echo $formproc->SafeDisplay('message') ?></textarea>
                         </div>
                         <div class="clearfix"></div>
                     </div>
                     <div class="form-group">
                         <div class="col-md-offset-1 col-md-5">
                             <div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
                         </div>
                         <div class="clearfix"></div>
                     </div>
                     <center>
                         <button type="submit" href="#" class="btn btn-coba">Send</button>
                     </center>
                 </div>
             </form>
         </div>
     </div>

     <a href="#" class="scrollToTop">Back to Top</a>
     <footer>
         <!--<script type="text/javascript">!function(t,e){t.artibotApi={l:[],t:[],on:function(){this.l.push(arguments)},trigger:function(){this.t.push(arguments)}};var a=!1,i=e.createElement("script");i.async=!0,i.type="text/javascript",i.src="https://app.artibot.ai/loader.js",e.getElementsByTagName("head").item(0).appendChild(i),i.onreadystatechange=i.onload=function(){if(!(a||this.readyState&&"loaded"!=this.readyState&&"complete"!=this.readyState)){new window.ArtiBot({i:"ffce07da-cb7b-4dd0-be97-171190ab7c25"});a=!0}}}(window,document);</script>-->
         <script type='text/javascript' data-cfasync='false'>
         window.purechatApi = {
             l: [],
             t: [],
             on: function() {
                 this.l.push(arguments);
             }
         };
         (function() {
             var done = false;
             var script = document.createElement('script');
             script.async = true;
             script.type = 'text/javascript';
             script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';
             document.getElementsByTagName('HEAD').item(0).appendChild(script);
             script.onreadystatechange = script.onload = function(e) {
                 if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState ==
                         'complete')) {
                     var w = new PCWidget({
                         c: '4c745242-66c8-4931-9b56-3c3bdcc5cbe6',
                         f: true
                     });
                     done = true;
                 }
             };
         })();
         </script>
         <div class="container">
             <div class="row">
                 <div class="col-sm-9 col-sm-push-3">
                     <div class="row">
                         <div class="col-sm-4 link-footer-nav">
                             <ul>
                                 <li><a href="/en/index.php">Home</a></li>
                                 <li><a href="/en/logique.php">About Us</a></li>

                                 <li class="have-submenu"><a href="/en/services.php">Service</a>
                                     <ul>
                                         <li class="have-submenu"><a href="/en/services/web-dev.php" target="_blank">Web
                                                 Development</a>
                                             <ul>
                                                 <li><a href="/en/services/recruitment-web-dev.php" target="_blank">
                                                         Recruitment Website Creation</a></li>
                                                 <li><a href="/layanan/pembuatan-web-klinik-gigi.php" target="_blank">
                                                         Dentist Website Creation</a></li>
                                                 <!-- <a href="/layanan/pembuatan-website-restoran/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Restaurant Website Creation</a> -->
                                             </ul>
                                         </li>
                                         <li><a href="/en/services/system-dev.php" target="_blank">Web System
                                                 Development</a></li>
                                         <li><a href="/en/services/mobile-app-dev.php">Mobile App Development</a></li>
                                         <li><a href="/en/services/penetration-test.php">WEB Security Assesment
                                                 (Pentest)</a></li>
                                         <li><a href="/en/services/digital-marketing.php" target="_blank">Digital
                                                 Marketing </a></li>
                                     </ul>
                                 </li>

                             </ul>
                         </div>
                         <div class="col-sm-4 link-footer-nav">
                             <ul>
                                 <li class="have-submenu"><a href="/en/product.php">Products</a>
                                     <ul>
                                         <li>
                                             <a href="https://dokodemo-kerja.com" target="_blank"
                                                 rel="noreferrer">Dokodemo-Kerja <span style="font-size: 12px;">(Remote
                                                     Working Tool)</span> </a></li>
                                         <li><a href="/en/product/nippo.php" target="_blank">Nippo<span
                                                     style="font-size: 12px;">(Daily Report Tool)</span> </a></li>
                                         <li><a href="/en/product/sugoi-saiyo.php" target="_blank">Sugoi Saiyo<span
                                                     style="font-size: 12px;"> (Employee Recruitment System)</span> </a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li><a href="/en/portfolio.php">Portfolio</a></li>
                                 <li class="have-submenu"><a href="/career/">Career</a>
                                     <ul>
                                         <li><a href="/career/">Join LOGIQUE</a></li>
                                     </ul>
                                 </li>

                                 <li><a href="/en/contact.php">Contact Us</a></li>
                             </ul>

                         </div>

                         <div class="col-sm-4 link-footer">
                             <img src="img/dokodemo-kerja/dokodemo-logo.svg" alt="Logo">
                             <p style="padding-bottom: 0px; padding-top: 0px;">
                                 <strong>Dokodemo-Kerja</strong> is a tool that makes your employees able to work
                                 remotely, improves productivity by removing unnecessary work that wastes a lot of time
                                 and energy, and decreases HR's workload in monitoring employees' work. You can also
                                 customize Dokodemo-Kerja to your company's needs. Feel free to contact us.
                             </p>
                         </div>
                     </div>
                     <br />
                 </div>
                 <div class="col-sm-3 col-sm-pull-9">
                     <div itemscope itemtype="http://schema.org/Organization">
                         <div class="footer-title"><span itemprop="name">LOGIQUE DIGITAL INDONESIA</span></div>
                         <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                             <span itemprop="streetAddress"> Ad Premier Building 19th Floor.<br> Jalan Tb. Simatupang
                                 No. 5 <br />
                                 Ragunan, Ps. Minggu, Jakarta Selatan, <br>Indonesia </span><span
                                 itemprop="postalCode">12550</span>
                             <br><br>
                             &nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;(021) 22708935 / 36
                             <br>
                             <a href="https://api.whatsapp.com/send?phone=62811870321" target="_blank"
                                 rel="noreferrer">&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile"
                                     style="font-size: 18px;vertical-align: -1px;"></i>&nbsp;&nbsp;<i
                                     class="fa fa-whatsapp"></i>&nbsp;&nbsp;&nbsp;0811-870-321</a>
                             <br><br>
                         </div>
                     </div>

                     <div class="provacy-policy-container">
                         <a href="/en/privacy-policy.php" target="_blank">Privacy Policy</a>
                     </div>
                     <div class="footer-title" style="margin-top: 20px; margin-bottom: 0;">Social Media</div>
                     <ul class=" medsos-new" sty>
                         <li><a href="https://www.facebook.com/logique.id/" target="_blank" rel="noreferrer"
                                 aria-label="Facebook"><i class="fa fa-facebook-official"></i></a></li>
                         <li><a href="https://twitter.com/LogiqueDigital" target="_blank" rel="noreferrer"
                                 aria-label="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                         <li><a href="https://www.instagram.com/logiquedigital/" target="_blank" rel="noreferrer"
                                 aria-label="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                         <li><a href="https://www.linkedin.com/company/13420656" target="_blank" rel="noreferrer"
                                 aria-label="LinkedIn"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                     </ul>

                 </div>
             </div>
             <div class="row">
                 <div class="col-sm-12">
                     <div itemscope itemtype="http://schema.org/CreativeWork">
                         <div class="copyright">&copy; <span itemprop="copyrightYear">2017</span>
                             <span itemprop="copyrightHolder" itemtype="http://schema.org/Organization"><span
                                     itemprop="name">Logique Digital Indonesia. All Rights Reserved.</span></span></div>
                     </div>
                 </div>
             </div>
         </div>
     </footer>

     <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
     <script src="/js/bootstrap.min.js"></script>
     <script src="/produk/js/PicCarousel.min.js"></script>
     <script>
     $(".screenshot-slide").PicCarousel("init");
     </script>
     <script src='https://www.google.com/recaptcha/api.js'></script>
     <script type="text/javascript">
     $(function() {
         $('.smooth').click(function() {
             if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location
                 .hostname == this.hostname) {
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
     });

     $(document).ready(function() {

         //Check to see if the window is top if not then display button
         $(window).scroll(function() {
             if ($(this).scrollTop() > 100) {
                 $('.scrollToTop').fadeIn();
             } else {
                 $('.scrollToTop').fadeOut();
             }
         });

         $('.form-dokodemo').on('submit', function() {
             if (grecaptcha.getResponse() == '') {
                 alert("Please verify that you are not a robot");
                 return false;
             }
         });
     });

     //Click event to scroll to top
     $('.scrollToTop').click(function() {
         $('html, body').animate({
             scrollTop: 0
         }, 800);
         return false;
     });
     $('.navbar-dokdem .navbar-brand>img').click(function() {
         $('html, body').animate({
             scrollTop: 0
         }, 800);
         return false;
     });
     </script>
 </body>

 </html>