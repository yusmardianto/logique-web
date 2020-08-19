<?php

require_once("assets/form/fgcontact_webdev.php");

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
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" content="LOGIQUEがインドネシアで作るWeb / ホームページは、集客ができる、お問い合わせが増える、採用応募者が増える、などコンバージョンが増える価値のあるWebです。WEBチャネルを活用して営業を効率的に行いたい、他社と差別化したい、カスタマーサービスを効率化したい、採用を強化したい、
場合はLOGIQUEにお任せください。LOGIQUEのWeb制作サービス詳細。">
    <meta name="keywords" content="効果のある、コンバージョンのでる、意味のある、WEBサイトを予算内で、素早く、効率的に、先進テクノロジーを用い、セキュアに、作ります">
    <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <meta itemprop="name" content="PT. Logique Digital Indonesia">
     <meta property="og:title" content="Web Development Service | LOGIQUE Digital Indonesia">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:url" content="https://www.logique.co.id/jp/services/web-dev.php">
     <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
     <meta property="og:description"
         content="As one of the best website developers in Indonesia, LOGIQUE Digital Indonesia has their own mechanism in providing clients with the best web development service. Here are simple explanations of each step that we take to create a website.">
    <title>Web Development Price | LOGIQUE Digital Indonesia</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="assets/css/style_webdev_service_new.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet">
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
    <style>
    @media only screen (max-width: 414px) {
        .breadcrumb {
            padding-left: 15px;
        }
    }
    </style>
    <div class="side-container"></div>
    <div>

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
        <!-- NAVIGATION -->

        <!-- HEADER -->
        <div class="container-fluid">
            <div class="row lang-logo--update-design">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                <ul class="list-inline">
                                    <li class="active"><a href="/en/services/webdev-price-range.php">EN</a></li>
                                    <li><a href="/layanan/webdev-price-range.php">ID</a></li>
                                    <li><a href="/jp/services/web-dev-price-range.php">JP</a></li>
                                </ul>
                                <a href="/jp/index.php"><img src="/../img/logo.png" alt="Logo"
                                        class="img-responsive logo--update-design" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER -->

        <header class="content-wrapper__">
            <div class="text-left --top">
                <div class="container-fluid">
                    <div class="row bg-section">
                        <div class="col-md-12">
                            <img src="assets/img/img-webdev/webdev-service/mainbg.png" alt="">
                        </div>
                        <div class="col-sm-12 breadcrumb-section">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="../index.php"><span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item" href="../services.php"><span itemprop="name">&nbsp;Services</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                       href="web-dev.php" itemprop="item"><span itemprop="name">&nbsp;Website Production</span></a>
                                    <meta itemprop="position" content="3" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;Web Price Range</span></a>
                                    <meta itemprop="position" content="3" />
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12 m-t-2em main-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <h1 class="title">
                                            <span><span>Web and Home Page Production Service Plans</span></span>
                                        </h1>
                                        <div class="content">
                                            <p>
                                            We have prepared four basic service plans to meet our customers' various homepage, website production and operation needs.
                                            </p>
                                            <p>
                                            Since there are those who may want to know the price range before a consultation, the information below can be used a reference.
                                            While the work scope itself will vary depending on the available budget, we will do our best to work on any project according to the outlined scope of work.
                                            </p>
                                            <p>
                                            If you are uncertain of which service menu fits your requirements, please feel free to contact us.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <section class="miniplan">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img-container">
                    <img src="assets/img/img-webdev/webdev-service/11.png" alt="">
                </div>
                <div class="col-md-6 content-container">
                    <div class="title-container">
                        <p>Quick Production Plan</p>
                    </div>
                    <p class="content">Simple Web or Landing Page</p>
                    <div class="detail-container">
                        <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                        <div class="detail-title">
                            <span>Production Period</span>
                        </div>
                        <div class="detail-content">
                            <span>~ 1 Month</span>
                        </div>
                    </div>
                    <div class="detail-container">
                        <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                        <div class="detail-title">
                            <span>Number of Pages</span>
                        </div>
                        <div class="detail-content">
                            <span>Up to 5 pages</span>
                        </div>
                    </div>
                    <div class="detail-container detail-margin">
                        <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                        <div class="detail-title">
                            <span>Work Content</span>
                        </div>
                        <div class="detail-content detail-list">
                            <p>• Design, HTML Coding, Standard SEO Measures, Adjustment & Tests, Release Work</p>
                            <p>• Clients will provide all the materials</p>
                            <p>• Mainly for static web content</p>
                        </div>
                    </div>
                    <div class="price-container">
                        <p class="title">Production Price </p>
                        <p class="price">15 juta 〜 30 juta IDR</p>
                    </div>
                    <div class="button-container">
                        <a href="/jp/contact.php">
                            <p>Contact Us</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="standardplan">
        <div class="container">
            <div class="row">
                <div class="col-md-6 content-container">
                    <div class="title-container">
                        <p>Standard Production Plan</p>
                    </div>
                    <p class="content">Standard Corporate Web or Web Service</p>
                    <div class="detail-container">
                        <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                        <div class="detail-title">
                            <span>Production Period</span>
                        </div>
                        <div class="detail-content">
                            <span>1 ~ 2.5 Months (Depending on the materials used for preparation)</span>
                        </div>
                    </div>
                    <div class="detail-container">
                        <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                        <div class="detail-title">
                            <span>Number of Pages</span>
                        </div>
                        <div class="detail-content">
                            <span>Up to 20 Pages</span>
                        </div>
                    </div>
                    <div class="detail-container detail-margin">
                        <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                        <div class="detail-title">
                            <span>Work Content</span>
                        </div>
                        <div class="detail-content detail-list">
                            <p>•	Design, HTML Coding, CMS Fitting, Standard SEO Measures, Adjustment & Tests, Release Work</p>
                            <p>•	Static Web or Wordpress or Our Original CMS</p>
                            <p>•	In general, Our Company will provide the materials</p>
                            <p>	*There may be cases where additional costs will be required if the period exceeds 4 months due to customer related circumstances.</p>
                        </div>
                    </div>
                    <div class="price-container">
                        <p class="title">Production Price</p>
                        <p class="price">30 juta 〜 60 juta IDR</p>
                    </div>
                    <div class="button-container">
                        <a href="/jp/contact.php">
                            <p>Contact Us</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 img-container">
                    <img src="assets/img/img-webdev/webdev-service/22.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="largeplan">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img-container">
                    <img src="assets/img/img-webdev/webdev-service/33.png" alt="">
                </div>
                <div class="col-md-6 content-container">
                    <div class="title-container">
                        <p>Large Scale Web Production Plan</p>
                    </div>
                    <p class="content">Large Scale Corporate Web or Web Service</p>
                    <div class="detail-container">
                        <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                        <div class="detail-title">
                            <span>Production Period</span>
                        </div>
                        <div class="detail-content">
                            <span>2.5 ~ 4 Months</span>
                        </div>
                    </div>
                    <div class="detail-container">
                        <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                        <div class="detail-title">
                            <span>Number of Pages</span>
                        </div>
                        <div class="detail-content">
                            <span>More than 50 pages</span>
                        </div>
                    </div>
                    <div class="detail-container detail-margin">
                        <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                        <div class="detail-title">
                            <span>Work Content</span>
                        </div>
                        <div class="detail-content detail-list">
                            <p>•	Design, HTML Coding, Standard SEO Measures, CMS System, QA, Infrastructure Setting, Security Assessment (*Detailed Pentest will have extra charge ), Release Work</p>
                            <p>•	Open Source CMS or Our Original CMS or System with PHP framework</p>
                            <p>•	In general, Our Company will provide the materials</p>
                        </div>
                    </div>
                    <div class="price-container">
                        <p class="title">Production Price</p>
                        <p class="price">80 juta 〜 150 juta IDR</p>
                    </div>
                    <div class="button-container">
                        <a href="/jp/contact.php">
                            <p>Contact Us</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="strategicplan">
        <div class="container">
            <div class="row">
                <div class="col-md-6 content-container">
                    <div class="title-container">
                        <p>Strategic Web Creation Plan</p>
                    </div>
                    <p class="content">After formulating a strategy, we will then create a website in line with said strategy.</p>
                    <div class="detail-container">
                        <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                        <div class="detail-title">
                            <span>Production Period</span>
                        </div>
                        <div class="detail-content">
                            <span> 3 ~ 5 Months</span>
                        </div>
                    </div>
                    <div class="detail-container detail-margin">
                        <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                        <div class="detail-title">
                            <span>Work Content</span>
                        </div>
                        <div class="detail-content detail-list">
                            <p>•	There is no limit to the work scope, which can also include animation. We will help you build your system according to your requests and apply whatever is needed to distinguish yourself from your competitors.</p>
                            <p>•	Our consultant will manage the project alongside your marketing department, advertising department, etc.</p>
                            <p>•	First, we will carry out the planning and requirement definition phase (about one month). During this, we will propose the scope, period and amount required for production.</p>
                            <p>•	Develop strategies during the process of several consulting sessions.</p>
                            <p>•	The deliverables during the planning/strategy development phase are as follows: customer journey, persona analysis, current access analysis, brand concept proposal, brand message proposal, site map, content design document, wireframe, design guideline, etc. (Varies according to each project)</p>
                        </div>
                    </div>
                    <div class="price-container">
                        <p class="title">Production Price </p>
                        <p class="price">200 juta 〜 500 juta</p>
                    </div>
                    <div class="button-container">
                        <a href="/jp/contact.php">
                            <p>Contact Us</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 img-container">
                    <img src="assets/img/img-webdev/webdev-service/44.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="promo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-container">
                        <img src="assets/img/img-webdev/webdev-service/promo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-list promo-odd">
                        <div class="promo-title">
                            <p>Hearing - First Proposal</p>
                        </div>
                        <div class="promo-content">
                            <p>Includes interactions and meetings; suggestions are free of charge. Normally, we do not draft a design during the proposal stage. If there is a case where a rough design is absolutely needed, you may be charged with a design production proposal cost.</p>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-list">
                        <div class="promo-title">
                            <p>Other guidelines for developer costs</p>
                        </div>
                        <div class="promo-content">
                            <p>Our price varies depending on the difficulty of the project and the urgency of the schedule; greater detail regarding costs of individual work requests are as follows. Please use it only as a guideline.</p>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="row" style="display: none;">
                <div class="col-md-12">
                    <div class="promo-list promo-odd">
                        <div class="promo-title">
                            <p>ヒアリング・初回ご提案</p>
                        </div>
                        <div class="promo-content">
                            <p>無料ご提案するためのやりとりや打ち合わせを含みます。通常、ご提案段階でのデザイン制作はしておりません。どうしてもラフデザインの制作が必要な場合、提案デザイン制作費をいただく場合があります。</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <section class="datatable">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive table-data">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Service</th>
                                    <th scope="col">Price </th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HTML/CSS Coding (1 Website)</td>
                                    <td>15,000,000 IDR 〜</td>
                                    <td>Depending on the configuration of the website, it is possible to mark up the previous page HTML / CSS with 15,000,000 IDR if it is a normal corporate web (up to about 10 pages in total). We will do standard coding, install Google Analytics tags, and write your specified meta tags.</td>
                                </tr>
                                <tr>
                                    <td>HTML/CSS Coding (Per 1 Page)</td>
                                    <td>500,000 IDR ~</td>
                                    <td>Although it may differ depending on the volume and configuration of the content in the page, please note that 500,000 IDR per page is the standard estimation. If all design and contents of the 10-page website are ready, it is possible to code all with 5,000,000 IDR.</td>
                                </tr>
                                <tr>
                                    <td>Motion Coding</td>
                                    <td>5,000,000 IDR 〜</td>
                                    <td>Implement visual programming such as motion with parallax effect using jQuery, HTML5, etc.</td>
                                </tr>
                                <tr>
                                    <td>Logo and Illustration Creation</td>
                                    <td>10,000,000 IDR 〜</td>
                                    <td>If your company does not have a logo yet, we can help you create one. We will help you get close to the ideal logo and create multiple patterns of illustrations.</td>
                                </tr>
                                <tr>
                                    <td>Online Chat Function</td>
                                    <td>5,000,000 IDR ~</td>
                                    <td>Implement an online chat tool on your website either for easier and instant customer support or even to increase your sales.</td>
                                </tr>
                                <tr>
                                    <td>Inquiry page optimization</td>
                                    <td>15,000,000 IDR 〜</td>
                                    <td>By optimizing the content of the inquiry page and the form, you can maximize the number of queries/leads and minimize the drop rate from users who visit your website.</td>
                                </tr>
                                <tr>
                                    <td>Recruitment page optimization</td>
                                    <td>15,000,000 IDR 〜</td>
                                    <td>Optimize the content on the recruiting page to increase the number of submissions through the website. It is also possible to build a hiring site as a special site. 
                                        <a href="/recruitment-web-dev.php">
                                        <span style="color: #1985D6;">Click here for details.</span>    
                                        </a>
                                        We also sell cloud tools for efficient hiring operations, Sugoi Saiyo.
                                    </td>
                                </tr>
                                <tr>
                                    <td>Create shopping cart function</td>
                                    <td>20,000,000 IDR 〜</td>
                                    <td>We can use the e-commerce framework to grant shopping capabilities to your web. There is a wide range of this feature depending on the requirements, so please contact us for details.</td>
                                </tr>
                                <tr>
                                    <td>Payment gateway cooperation</td>
                                    <td>15,000,000 IDR 〜</td>
                                    <td>We have a track record of establishing linkage functions with the payment gateway service for notable companies in Indonesia. Please contact us as subscription settlement is also possible.</td>
                                </tr>
                                <tr>
                                    <td>API Creation</td>
                                    <td>15,000,000 IDR 〜</td>
                                    <td>We will create an API for linking functions/information with other systems, other websites, mobile apps, and services. We develop the system according to the data format (XML, HTML, JSON, etc.) to be sent and received.</td>
                                </tr>
                                <tr>
                                    <td>Content Creation</td>
                                    <td>Please contact us for price.</td>
                                    <td>Regular content creation operation or one-time content creation (content creation at the time of website creation) is also possible. There is a range of price depending on the volume, the peculiarity of the content to be created, the language of the created content, etc. Please consult us first.</td>
                                </tr>
                                <tr>
                                    <td>Photography</td>
                                    <td>5,000,000 IDR 〜</td>
                                    <td>The price includes shooting in 1 location, 5 to 10 cuts, and 4 hours shooting time. Please contact us for details on shooting outdoors and in the factory.</td>
                                </tr>
                                <tr>
                                    <td>Drone shooting</td>
                                    <td>5,000,000 IDR 〜</td>
                                    <td>1 shooting location, 1 flight, up to 15 minutes shooting time, deliverable animation data. It doesn’t include the acquisition of flight permits.</td>
                                </tr>
                                <tr>
                                    <td>Movie shooting editing</td>
                                    <td>20,000,000 IDR 〜</td>
                                    <td>We create movies with various needs, from videos created with graphics/animation only to full movie shooting and productions.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="/jp/contact.php">
                        <div class="slogan-container">
                            <p>
                                Click here to contact us for more detailed quote
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="container">
            <div class="row ads-container">
                <div class="col-md-6 col-sm-6">
                    <a href="https://www.facebook.com/logique.id/" target="_blank">
                        <img src="assets/img/img-webdev/facebookads.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-6">
                     <a href="https://www.linkedin.com/company/13420656" target="_blank">
                        <img src="assets/img/img-webdev/linkedinads.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
    <?php include '../footer.php'; ?>

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
    });
    </script>
    <script type="text/javascript">
        // Instantiate the Bootstrap carousel
        $('.multi-item-carousel').carousel({
        interval: false
        });

        // for every slide in carousel, copy the next slide's item in the slide.
        // Do the same for the next, next item.
        $('.multi-item-carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        // if (next.next().length>0) {
        //     next.next().children(':first-child').clone().appendTo($(this));
        // } else {
        //     $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        // }
        });
    </script>
</html>
