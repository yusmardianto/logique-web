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
 <html lang="ja">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
     <meta name="description"
         content="LOGIQUEは、E-Commerceシステム、CRMシステム、会計管理システムなど各種システム開発運用やアプリ開発、システムコンサルティングをインドネシアで行っています。クライアントの新規事業をデジタル・IT面で幅広くご支援しています。お気軽に日本語でご連絡ください。">
     <meta name="keywords"
         content="As one of the top leading web developers in Indonesia, LOGIQUE has their own mechanism in terms of web systems creation, which includes the usage of latest technology, infrastructure planning, system security, and speed. Learn more about our web system development service here.">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"> 
     <meta itemprop="name" content="PT. Logique Digital Indonesia">

     <meta property="og:title" content="Web System Development Service | LOGIQUE Digital Indonesia">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:url" content="https://www.logique.co.id/jp/services/system-dev.php">
     <meta property="og:image" content="https://www.logique.co.id/layanan/assets/img/img-systemdev/newlayout/skemaproyek.png">
     <meta property="og:description"
         content="LOGIQUEは、E-Commerceシステム、CRMシステム、会計管理システムなど各種システム開発運用やアプリ開発、システムコンサルティングをインドネシアで行っています。クライアントの新規事業をデジタル・IT面で幅広くご支援しています。お気軽に日本語でご連絡ください。">
     <title>システム開発運用・アプリ開発 | LOGIQUE デジタルインドネシア</title>
     <link rel="canonical" href="https://www.logique.co.id/jp/services/system-dev.php"/>
     
     <link href="/css/bootstrap.min.css" rel="stylesheet">
     <link href="/css/slick.css" rel="stylesheet"> 
     <link href="/css/sidebar-update.css" rel="stylesheet">
     <link href="/css/newstyle.css" rel="stylesheet">
     <link href="assets/css/style-systemdev.css" rel="stylesheet">  

     <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet">
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
 
     <div class="wrapper wrapper--update-design wrapper--update-design-font --jp">
        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'services';
            include($_SERVER['DOCUMENT_ROOT'].'/jp/sidebar.php'); 
        ?>

        <?php 
            $lang = 'jp';
            $en_link = '/en/services/system-dev.php';
            $id_link = '/layanan/pembuatan-sistem-web.php';
            $jp_link = '#';
            include($_SERVER['DOCUMENT_ROOT'].'/jp/header.php'); 
        ?>

     </div>

     <!-- <header class="content-wrapper__ header">
         <div class="text-left --top">
             <div class="container" style="padding:0">
                 <div class="row">
                     <div class="col-sm-12">
                         <ol class="breadcrumb breadcrumb--update-design" itemscope itemtype="http://schema.org/BreadcrumbList">
                             <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                     href="/jp/index.php"><span itemprop="name">Home</span></a>
                                 <meta itemprop="position" content="1" />
                             </li>
                             <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                     itemprop="item" href="/jp/services.php"><span itemprop="name">&nbsp;サービス</span></a>
                                 <meta itemprop="position" content="2" />
                             </li>
                             <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                     itemprop="item"><span itemprop="name">&nbsp;Webシステム開発</span></a>
                                 <meta itemprop="position" content="3" />
                             </li>
                         </ol>
                     </div>
                 </div>
             </div>
         </div>
         <div class="container__" style="position:relative">
             <div class="row">
                 <div class="col-lg-offset-5 col-lg-7 col-sm-offset-6 col-sm-6 bg-header-txt">
                     <h1 class="text-left m-new">インドネシアでシステム開発が必要ならLOGIQUEにご相談ください</h1>
                     <h3 class="text-left m-new">豊富な実績をベースに、<br> 早い、安い、でもクオリティは高いシステムを開発します。</h3>
                 </div>
             </div>
         </div>
     </header> -->
     <header class="content-wrapper__ header"> 
         <div class="container__" style="position:relative">
             <div class="row">
                 <div class="col-md-offset-1 col-md-10 text-center bg-header-txt text-center">
                     <h1 class="m-new">
                     豊富な実績をベースに、早い、安い、でもクオリティは高いシステムを開発します。
                     </h1>
                     <h3 class="m-new">  
                        システム開発が必要なのに、コストが高いから、時間かかるから、難しいからと諦めていませんか？インドネシアでのIT/Webシステム開発は<span class="logofont">LOGIQUE</span>にお任せください。柔軟にスピーディーにリーズナブルなコストで開発します。
                     </h3>
                     <a href="/jp/contact.php" class="btn-yellow">いますぐお問い合わせ <span class="icon"> <img src="assets/img/img-systemdev/newlayout/arrow-right.svg"></span></a>
                 </div>
             </div>
         </div>
    </header>
     <div class="breadcrumb-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb breadcrumb--update-design" itemscope itemtype="http://schema.org/BreadcrumbList">
                             <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                     href="/jp/index.php"><span itemprop="name">Home</span></a>
                                 <meta itemprop="position" content="1" />
                             </li>
                             <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                     itemprop="item" href="/jp/services.php"><span itemprop="name">&nbsp;サービス</span></a>
                                 <meta itemprop="position" content="2" />
                             </li>
                             <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                     itemprop="item"><span itemprop="name">&nbsp;Webシステム開発</span></a>
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
                     効果的なDXのためのシステム開発＆運用は、コンサルティング能力が高く、システム企画から開発まで全行程を高い能力で遂行できるITコンサルティング会社が行う必要があります。<span class="logofont">LOGIQUE</span>はインドネシアで、自動車産業、金融機関、政府系団体向けに大規模システムの企画コンサルティングから開発、導入まで豊富な経験があります。
                     </div> 
                 </div>
             </div>
             <div class="sec-content-part whyour-systemdev">
                 <h2 class="sub-section-title text-center"><span class="logofont">LOGIQUE</span>のシステム開発</h2>
                 <div class="page-content">
                     <ul class="nav nav-pills">
                         <li class="active"><a data-toggle="pill" href="#fast">スピーディーで柔軟な開発</a></li>
                         <li><a  data-toggle="pill" href="#save">高品質でセキュアなシステム</a></li>
                         <li><a  data-toggle="pill" href="#expert">インドネシアでの豊富な経験</a></li>
                         <li><a  data-toggle="pill" href="#infra">インフラ設計・構築</a></li>
                     </ul>
                     <div class="tab-content">
                       <div id="fast" class="tab-pane fade in active">
                          <div class="row">
                             <div class="col-sm-6">
                                 <p>アジャイル開発を基本としています。スピード感こそが最も大事だと思います。当社がリードして柔軟でスピーディに開発していきます。ニーズに合わせた開発体制を敷きます。ラボ型開発サービスも提供しています。</p>
                             </div>
                             <div class="col-sm-6 text-center">
                                 <img src="assets/img/img-systemdev/newlayout/laptop.jpg">
                             </div>
                          </div>
                       </div>
                       <div id="save" class="tab-pane fade">
                         <div class="row">
                             <div class="col-sm-6">
                                 <p style="padding-bottom: 5px;">高品質なシステム構築を行います。通常のテストに加えセキュリティ脆弱性テストを実施することをお奨めしています。SQLインジェクション、パストラバーサル、クロスサイトスクリプティングなどPenetrationテストを行いリスクを最小限にします</p> 
                                 <a href="/jp/services/penetration-test.php" class="btn-yellow">セキュリティ脆弱性診断はこちら</a>
                             </div>
                             <div class="col-sm-6 text-center">
                                 <img src="assets/img/img-systemdev/newlayout/laptop-secure.jpg">
                             </div>
                          </div>
                       </div>
                       <div id="expert" class="tab-pane fade">
                         <div class="row">
                             <div class="col-sm-6">
                                 <p>自動車産業、金融、政府系団体など向けにインドネシアで多くのシステム開発を行ってきました。E-Commerceを構築するなかでインドネシアの決済連携事情なども熟知しています。業務理解が早く、要件定義コンサルティングもいたします。</p>
                             </div>
                             <div class="col-sm-6 text-center">
                                 <img src="assets/img/img-systemdev/newlayout/laptop-experienced.jpg">
                             </div>
                          </div>
                       </div>
                       <div id="infra" class="tab-pane fade">
                        <div class="row">
                             <div class="col-sm-6">
                                 <p>インドネシア国内外のクラウドサーバーの設計構築を行います。AWSやGCP、Alibabaクラウドなどの環境構築＆雲鷹経験が豊富です。オンプレミスサーバーからクラウドサーバーへのマイグレーションも多数実績あります。</p>
                                 <a href="/jp/services/devops.php" class="btn-yellow text-center">クラウドサーバー構築運用サービス</a>
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
                 <h2 class="sub-section-title text-center">ご要望に応じて柔軟な開発体制 / 開発メソッドでサポートいたします</h2>
                 <div class="page-content skema-list">
                     <div class="row rowflex">
                         <div class="col-sm-6">
                             <div class="skema-content">
                                 <h3><span class="number">1.</span> 通常の請負開発</h3>
                                 <p>一般的で当社でも一番多い契約形態がこのパターンです。通常はアジャイル（スクラム）開発をお奨めしています。要件が明確であるプロジェクトで有効。当社ではプロジェクト途中での要件の変更にできる限り柔軟にお応えしています。</p>
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
                             <h3><span class="number">2.</span> ラボ型受託開発（稼働したリソースベースでご請求します）</h3> 
                             <p>要件 / 作業スコープが決まりきっていないが早期にスタートしたいケース、開発しながら柔軟にスコープを変えていきたいプロジェクトで有効。稼働した工数を毎月末に計算し、工数に応じた費用をご請求します。</p>
                             </div>
                         </div>
                     </div>
                     <div class="row rowflex">
                         <div class="col-sm-6">
                             <div class="skema-content">
                             <h3><span class="number">3.</span> 定額制開発</h3>
                             <p>月額費用を固定し、優先度高く必要なものから順に規定の作業工数の範囲内で毎月作業していきます。 メンテナンスや機能拡張プロジェクトに合っています。 従来であれば追加費用が必要かどうかで揉めるような場面でも、月額定額の中で出来るところまで対応し、 出来ない分は翌月以降に持ち越しになるだけなのでフェアです。</p>
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
                             <h3><span class="number">4.</span> 開発者派遣型開発</h3>
                             <p>関連会社より開発者、デザイナー、テスター等を派遣して、オンサイトで作業することも可能です。</p>
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
                            <span class="number">1.</span> 開発チームのチーム力</a>
                          </h4>
                        </div>
                        <div id="proteam" class="panel-collapse collapse in">
                          <div class="panel-body">個人のスキルはもちろん高いのですが、チームとして最高のパフォーマンスを出すため最適なチーム編成をしてチームワークします。。2020年6月現在60人超の社員がおり、開発チームは、ソフトウェアテストチーム、セキュリティスペシャリスト、デザイナー、SEO、コンテンツライターやSocialメディアスペシャリストなどDigitalマーケティングスタッフなどとも必要に応じて協業して最高の結果を出します。ほとんどのケースで外注することなくプロジェクトを内製化していますが、必要であれば外部のスペシャリスト集団と協業することも可能です。</div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#komunikatif">
                            <span class="number">2.</span>  コミュニケーション能力</a>
                          </h4>
                        </div>
                        <div id="komunikatif" class="panel-collapse collapse">
                            <div class="panel-body">コンサルティングチームがお客様のプロジェクトマネージャーやプロジェクト担当者様とのコミュニーケーションを担当します。お客様のビジネスを理解し、的を得た指摘やアドバイスをいたします。わかりやすい言葉でシステム活用のメリットを納得いくまで説明します。</div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#suggestion">
                             <span class="number">3.</span> 提案力・改善力</a>
                          </h4>
                        </div>
                        <div id="suggestion" class="panel-collapse collapse">
                            <div class="panel-body"><p>システムを開発したり活用したりするのはビジネスを改善、発展させるためです。そのビジネスを正しく理解しペインポイントのソリューションとなる解を見出だす力、それをシステム化する能力が重要になってきます。もちろんお客様の中でこれらを企画することができる場合もありますが、<span class="logofont">LOGIQUE</span>では、その課題に対し、どのような機能を盛り込み、どのように運用をすればよいか。どんな問題が発生しやすいか等を豊富な経験に基づいてアドバイス＆ご提案いたします。クライアントの立場でビジネスを考え、より有効なシステム活用を促す提案をすることを心掛けています。</p>
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
                <h2 class="sub-section-title text-center"><span class="logofont">LOGIQUE</span>があまり得意としていないこと。。</h2>
                <div class="page-content">
                    <div class="row rowflex">
                        <div class="col-sm-6">
                            <div class="unsupport1 unsupport-content">
                                <h3><div>パッケージ導入型プロジェクト</div></h3>
                                <div class="unsupport-icon  text-center">
                                     <img src="assets/img/img-systemdev/newlayout/unsupport-1.svg">
                                </div>
                                <div  class="unsupport-info">
                                Order-Made開発が得意です。お客様のビジネスゴールやご要件に合わせて最適なシステム開発をすることを得意としています。オープンソースのFrameworkを利用することで、高額なパッケージソフトウェアを利用しなくても、短納期で開発できます。SAP、Microsoft Dynamics、SalesForceなどのプロジェクトは得意ではありません。。
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="unsupport2 unsupport-content">
                                <h3><div>大規模プロジェクトへの部分参加</div></h3>
                                <div class="unsupport-icon text-center">
                                     <img src="assets/img/img-systemdev/newlayout/unsupport-2.svg">
                                </div>
                                <div class="unsupport-info">
                                    プロジェクトマネジメント、開発後の運用保守や改善を得意としているので、特定一部分の開発のみだと強みが発揮しにくいです。大規模プロジェクトだとオンサイトの開発場所が指定されていることが多いなども当社が考える効率的な働き方とコンフリクトします。プロジェクトマネジメントを<span class="logofont">LOGIQUE</span>が行えれば柔軟にスピーディーにプロジェクトを成功に導きます。
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="text-center unsupport-desc"> 
                    <span class="logofont">LOGIQUE</span>にプロジェクト企画段階からご相談いただければ、最適なプロジェクト形態でのプロジェクト運営を提案いたします。                       
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
                                    JBAインドネシアはインドネシア最大の車・バイクのオークションハウスです。当社では、Webサイトの制作運用、JBAのオークションコンダクターシステム、Biddingアプリ、オンラインオークション、検査モバイルアプリ、Financialシステムなど多くのシステム構築プロジェクトを通してご支援してきました。クリティカルなシステムなのでエラーのない開発が必要ですが、同時にスピードも求められるチャレンジングなプロジェクトを多く経験できています。定例でミーティングをしていて既存システムの改善も常に行っています。
                                    </div>
                                    <div class="slider2-item">
                                    7ヶ月の開発期間でシナルマスランド様向けにWebベースのオンライン採用管理システムを構築しました。選考プロセスを効率化＆スピードUPし心理テストもシステム化することでミスマッチを防ぐことを可能にしました。大量の個人情報を取り扱うのでセキュリティも堅牢に設計開発しました。
                                    </div>
                                    <div class="slider2-item">
                                    テレマティクス技術とコネクトしたリアルタイム位置情報管理＆車両状態管理システムを開発しました。車両オーナーがアンドロイドAppを通じて車両状態を把握＆分析可能です。複数フェーズにわたり改善開発しています。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="see-more-studycase-wrapper">
                    <a href="/case-study/" class="btn-yellow">See More Case Studies</a>
                </div>
            </div>
            <div class="sec-content-part success-service">
                <h2 class="sub-section-title text-center">その他のシステム開発実績</h2>
                <div class="page-content">
                    <div class="success-service-list">
                        <div class="row rowflex col10">
                            <div class="col-sm-3">
                                <div class="modal fade modal-achivement" id="achievementmodal1" tabindex="-1" role="dialog" aria-labelledby="achievementLabel1" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel1">会員向けポイント管理＆交換システム構築.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          6 months, AWS, Linux, MySQL, PHP Framework
                                      </div>
                                      <div class="modal-body">
                                        <p>ポイント付与＆交換をキーとしたE-Commerceを構築。マルチドメインで複数店舗を管理可能な高機能基幹システムをスクラッチ開発。クライアント企業の従業員を対象に付与されたポイントを管理、E-Commerceから利用できるクライアント用サブシステム、サプライヤー向けサブシステム、クライアント企業の管理を行うサブシステムなどからなるシステムを構築。</p>

                                        <p>E-Commerce、決済、在庫管理、配送管理、承認ワークフロー、マルチドメイン。約6ヶ月かけてLAMP環境にてスクラッチ開発を行った。24時間止められないシステムであるためAWSにて冗長性の高い構成を組んでいる。</p>
                                      </div>                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem1.svg"></div>
                                    <div class="scitem-content">
                                        <h3>会員向けポイント管理＆交換システム構築.</h3>
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
                                        <h4 class="modal-title text-center" id="achievementLabel2">マルチレベルE-Commerceシステム開発.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                         6 months, AWS, Linux, MySQL, PHP Framework
                                      </div>
                                      <div class="modal-body">
                                        <p>マルチレベルマーケティング会社が代理店経由の販売をコントロール可能なE-Commerceシステムの開発。Admin向け管理、ディストリビュータ管理、顧客管理の３つのモジュールでなる大規模ECサイトの構築。E-Commerce、決済（Virtualアカウント、クレジットカード）、商品在庫管理、請求管理、など複雑なシステムであったが約6ヶ月で開発した。</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem2.svg"></div>
                                    <div class="scitem-content">
                                        <h3>マルチレベルE-Commerceシステム開発.</h3>
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
                                        <h4 class="modal-title text-center" id="achievementLabel3">自動車＆バイクオークションマネジメント基幹システム構築.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          6 months, AWS, Linux, MySQL, PHP Framework, Node.js
                                      </div>
                                      <div class="modal-body">
                                        <p>オークション業務の基幹システムを構築。オークションコンダクターから在庫管理、オンラインオークションまで様々なシステムを開発＆統合してきた。ユーザーはWEBサイトからオークションに出品される車両情報を閲覧することができ、オンサイトでもオンラインでもオークション入札が可能。在庫管理や検品＆グレード管理、オークション、請求管理などが複雑に関連している、またトラフィックも多いことから難易度の高いシステムであるが、安定稼働を実現している。</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>自動車＆バイクオークションマネジメント基幹システム構築.</h3>
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
                                        <h4 class="modal-title text-center" id="achievementLabel4">モバイルアプリ開発（オークション入札アンドロイドアプリ）.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2 months, Android, node.js, JAVA, AWS
                                      </div>
                                      <div class="modal-body">
                                        <p>車オークション会社向けにAndroidのオークション入札モバイルアプリの開発を行った。約600ユーザーが同時接続＆入札するシステムなので高いRealtime性とセキュリティ堅牢性、シンプルで使いやすいUIなどが求められたが、node.jsによる開発で実現した。ユーザー特定や請求情報など周辺機能との繋ぎ込み開発も。AWSサーバーの構成デザインやハイパフォーマンスなAPIの開発なども含めて全て開発し、安定稼働している.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem4.svg"></div>
                                    <div class="scitem-content">
                                        <h3>モバイルアプリ開発（オークション入札アンドロイドアプリ）.</h3>
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
                                        <h4 class="modal-title text-center" id="achievementLabel5">モバイルアプリ開発（検品＆品質スコアリングシステム）.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          4 months, Android, node.js, JAVA, AWS
                                      </div>
                                      <div class="modal-body">
                                        <p>900もの検査項目を網羅して、検査受け入れ/スコアリングを検査官の熟練度に依存せず業務可能にするモAndroidモバイル・アプリケーションを開発した。車、バイクごとに検査アプリを開発、複数の車のタイプに対応している（検査項目が異なる）。入力された検査結果に応じて自動で該当車両のスコアリングを行い、検査証を印刷することを実現した。検査質問項目数はかなり多いが、中程度のスペックのスマホで十分にサクサク動くように軽量化に努めた。バックエンドとの連携APIなども全て開発。</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem5.svg"></div>
                                    <div class="scitem-content">
                                        <h3>モバイルアプリ開発（検品＆品質スコアリングシステム）.</h3>
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
                                        <h4 class="modal-title text-center" id="achievementLabel6">ロードサービス事業者向けWEB-CRMシステム開発.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          3 months, PHP Framework, Payment Gateway, AWS
                                      </div>
                                      <div class="modal-body">
                                        <p>バイクのロードサービス、バイク保険の会員向けCRMシステムを開発・運用している。会員に会員証を発行するところから、会員自身がWEBから更新し、決済を行えるところまでシステム化。インドネシアの有力な決済代行システムと接続した。長期間に渡って機能追加、システム改善を継続している。AWSサーバーで運用.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem2.svg"></div>
                                    <div class="scitem-content">
                                        <h3>ロードサービス事業者向けWEB-CRMシステム開発.</h3>
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
                                        <h4 class="modal-title text-center" id="achievementLabel7">バイヤーズMypage機能の開発、CRMシステム開発.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2 months, PHP Framework, MySQL, AWS
                                      </div>
                                      <div class="modal-body">
                                        <p>オークションに参加するバイヤーにRewardポイントを付与している。このポイントを管理、特典に交換すること等ができるマイページ機能を開発。これに合わせ、ログイン後、参加したオークション履歴や請求情報も確認できるように実装した。LAMP環境でシステム構築を行った。付与されるポイントなどは基幹システム連携し動的にデータ連携される。短期間で不具合のないシステムの開発に成功した。</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>バイヤーズMypage機能の開発、CRMシステム開発.</h3>
                                        <p>2 months, PHP Framework, MySQL, AWS</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal7" class="more-icon">See more details</a>
                                </div>
                            </div>
                        <!--     <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal7" tabindex="-1" role="dialog" aria-labelledby="achievementLabel7" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">出版社向け広告台割管理システム.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2.5 months, JQuery, HTML5, PHP Framework, MySQL
                                      </div>
                                      <div class="modal-body">
                                        <p>東南アジア一帯で、またハワイで、フリーペーパーを発行する出版社向けに、コンテンツ（特に広告コンテンツ）の台割管理システムを構築した。他システムから広告契約一覧データを取り込む。それをドラッグ＆ドロップで各ページのレイアウトに視覚的に配置し、漏れや重複がないように容易に管理することを可能にした。</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>出版社向け広告台割管理システム.</h3>
                                        <p>2.5 months, JQuery, HTML5, PHP Framework, MySQL</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal7" class="more-icon"> See more details </a>
                                </div>
                            </div> -->
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal9" tabindex="-1" role="dialog" aria-labelledby="achievementLabel9" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">中古車マーケットプレイス構築、ディーラー向けアプリ開発、など.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2.5 months, JQuery, HTML5, PHP Framework, MySQL
                                      </div>
                                      <div class="modal-body">
                                        <p>中古車ディーラーと購入者をマッチングする中古車マーケットプレイスの構築を3ヶ月で行い。その後、プレミアムディーラー機能、ディーラー向け管理モバイル・アプリケーションなど、様々な追加機能を開発＆運用している。毎日3万を超えるユーザーに使われているサービスだが適切に負荷分散・冗長化されたAWSで運用していて安定稼働を実現している。</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>中古車マーケットプレイス構築、ディーラー向けアプリ開発、など.</h3>
                                        <p>2.5 months, JQuery, HTML5, PHP Framework, MySQL</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal9" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal10" tabindex="-1" role="dialog" aria-labelledby="achievementLabel10" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">デジタルマップシステム開発.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          3 months, PHP Framework, MySQL, Google map API, Java Script
                                      </div>
                                      <div class="modal-body">
                                        <p>デジタルマップを開発。ASEANの9カ国の地図上に各地でのインフラ開発プロジェクトをマッピング、検索やフィルターをかけて地図上でプロジェクト状況を確認できるようにした。Google mapを活用。</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>デジタルマップシステム開発.</h3>
                                        <p>3 months, PHP Framework, MySQL, Google map API, Java Script</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal10" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal11" tabindex="-1" role="dialog" aria-labelledby="achievementLabel11" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">C2C自動車オークションシステム開発.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2 months, PHP Framework, MySQL, JQuery/Ajax, HTML5/CSS3 
                                      </div>
                                      <div class="modal-body">
                                        <p>自動車のC2Cオークション事業を行うスタートアップのシステム・モバイルアプリを短期集中開発。Ajail型でスピード開発に成功。ロゴの制作から基幹システム構築までトータルにサポート。</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>  
                                <div class="success-item scitem1 ">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>C2C自動車オークションシステム開発.</h3>
                                        <p>2 months, PHP Framework, MySQL, JQuery/Ajax, HTML5/CSS3 </p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal11" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal12" tabindex="-1" role="dialog" aria-labelledby="achievementLabel12" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">公共団体向けセキュアなCMS開発.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2 months, PHP Framework, MySQL
                                      </div>
                                      <div class="modal-body">
                                        <p>公共団体向けにセキュアなCMSの構築。インドネシアの公共団体がセキュアなCMSを構築する必要があった。管理ユーザー数が多いため、ユーザー管理や権限管理に工夫を凝らし、セキュリティ脆弱性を潰したシステムを構築した。再構築前はWordpress上で動いていたが、Laravelフレームワークを使いスクラッチ開発を行った。</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>公共団体向けセキュアなCMS開発.</h3>
                                        <p>2 months, PHP Framework, MySQL</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal12" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal13" tabindex="-1" role="dialog" aria-labelledby="achievementLabel13" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">デジタルBook販売WEBサービス向けCMS構築.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                         2 months, PHP Framework, HTML5/CSS3,MySQL
                                      </div>
                                      <div class="modal-body">
                                        <p>インドネシアでE-Book販売をしている会社のオンラインBook販売サイトのCMSを構築した。販売商品の管理＆更新が容易になり販売数の向上に寄与した。キャンペーンページのデザイン制作とCMSへのインテグレーションなども複数回行った。</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>デジタルBook販売WEBサービス向けCMS構築.</h3>
                                        <p>2 months, PHP Framework, HTML5/CSS3,MySQL</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal13" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal14" tabindex="-1" role="dialog" aria-labelledby="achievementLabel14" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">求人・求職マッチングポータルWEBの構築.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                         2 months, PHP Framework, MySQL
                                      </div>
                                      <div class="modal-body">
                                        <p>人材紹介会社向けにJOBポータルWEBの構築をした。求人情報を掲載し、求職者からの応募を受け付けるWEBサイト。求職者はWEBサイトに会員登録することで直接該当ポジションに応募することができる。PHPフレームワークでスクラッチ開発した。開発期間は約3ヶ月。デザインから構築まで全てを行った。</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>求人・求職マッチングポータルWEBの構築.</h3>
                                        <p>2 months, PHP Framework, MySQL</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal14" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal15" tabindex="-1" role="dialog" aria-labelledby="achievementLabel15" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">金融機関向け採用管理システムの構築.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="assets/img/img-systemdev/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                         3 months, PHP Framework, HTML5/CSS3,MySQL
                                      </div>
                                      <div class="modal-body">
                                        <p>金融機関向けに採用管理WEBシステムを構築した。採用サイトの制作に合わせ、バックエンドで面談管理や承認フローを管理するシステムを構築した。納品前に外部のセキュリティ診断会社と協業し、セキュリティ脆弱性検査を行うなど個人情報を扱う金融機関のセキュリティ基準に見合うシステムを構築した。PHPフレームワークを使いスクラッチ開発で、約3ヶ月間。</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="assets/img/img-systemdev/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>金融機関向け採用管理システムの構築.</h3>
                                        <p>3 months, PHP Framework, HTML5/CSS3,MySQL</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal15" class="more-icon"> See more details </a>
                                </div>
                            </div>
                            <div class="col-sm-3 more">
                                <div class="modal fade modal-achivement" id="achievementmodal16" tabindex="-1" role="dialog" aria-labelledby="achievementLabel16" aria-hidden="true">
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
                                        <h3>レンタカー会社向け フリートManagementシステム開発</h3>
                                        <p>6 Months, AWS, Linux, MySQL, SAP Connection, PHP Framework</p>
                                    </div>
                                    <!-- <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal16" class="more-icon">Detail</a> -->
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
            <h2 class="sub-section-title text-center">お客様の声</h2>
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
                            IT Department Headとして今まで数多くのシステム開発プロジェクトを経験したが、<span class="logofont">LOGIQUE</span>ほど、柔軟に対応してくれて、しかもそのクオリティーが高い開発会社はなかった。どうしてもユーザー部門から開発後期になってからの変更要望が出てしまったが、素早く対応して貰ったことに大変満足している。システム保守についてもお願いし、変わらずタイムリーで間違いのない対応をしてもらっており感謝している。
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
                            前開発会社と契約解消することになったために、<span class="logofont">LOGIQUE</span>に引き継ぎ開発や既存システムの保守依頼をすることになった。ドキュメントや十分な情報がないなかで柔軟に効果的な仕事をしてくれて感謝している。私達も把握していなかった仕様上の問題点などを指摘していただき、依頼されたことだけをやるのとは真逆のことをしていただいた。
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
                                毎月決まった人日分だけ作業していただく定額制開発をお願いしている。作業が早いので、結果としてコスト効率の良い開発ができていて非常に満足している。次の大きな開発案件では、ラボ型開発でお願いしようと考えています。
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
                <h2 class="sub-section-title text-center">システム開発を成功させるためのキーポイント</h2>
                <div class="page-content importantpoint-list">
                    <div class="row rowflex col10">
                        <div class="col-sm-4">
                            <div class="importantpoint-item text-center">
                                <h3>経験</h3>
                                <div class="icon-container">
                                    <img src="assets/img/img-systemdev/newlayout/icon-point1.svg">
                                </div>
                                <div class="point-desc">
                                    <span class="logofont">LOGIQUE</span>はインドネシアで豊富なシステム開発経験をもっています。スケジューリング、要件定義、システム開発、テスト、インフラ設計、Deploy、ユーザートレーニングなど、各工程でこの経験を活かします。
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="importantpoint-item text-center">
                                <h3>スピード・柔軟性</h3>
                                <div class="icon-container">
                                    <img src="assets/img/img-systemdev/newlayout/icon-point2.svg">
                                </div>
                                <div class="point-desc">
                                    ビジネスのスピードは日に日に早くなっています。システム開発に6ヶ月以上もかけていては、環境変化についていけません。<span class="logofont">LOGIQUE</span>ではスピードを最重要視しています。アジャイル開発で迅速に、要件の変更などにも柔軟に対応します。
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="importantpoint-item text-center">
                                <h3>品質・セキュリティ</h3>
                                <div class="icon-container">
                                    <img src="assets/img/img-systemdev/newlayout/icon-point3.svg">
                                </div>
                                <div class="point-desc">
                                クオリティは犠牲にはできません。標準化された開発を行うことで不具合が少ない、メンテナンス性の高い開発をします。セキュリティ脆弱性のリスクも最小化した上で納品します。
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
                    <li class="text-left">インドネシアでシステム開発や運用が必要でしたらお気軽にご相談ください <li>
                    <li>
                        <a href="/jp/contact.php" class="btn-yellow">いますぐお問い合わせ <span class="icon"> <img src="assets/img/img-systemdev/newlayout/arrow-right.svg"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="content-section seventh-part">
        <div class="container">
            <div class="sec-content-part usedtechnology">
                <h2 class="sub-section-title text-center">特に得意にしている開発言語</h2>
                <div class="page-content ">
                    <div class="row">
                        <div class="col-sm-6">Laravel, SymphonyやCakePHPなどのPHPフレームワークを使用したWebシステム開発を得意としています。
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
                            のレポートでは世界の <br>
                               <img src="assets/img/img-systemdev/newlayout/w3tech.png" alt="w3tech">
                            </li>
                            <li>
                                <img src="assets/img/img-systemdev/newlayout/arrow-right.svg" alt=">">
                            </li>
                            <li>
                                <img src="assets/img/img-systemdev/newlayout/percentage.png" alt="83.5%"><br>
                                のWeb
                            </li>
                        </ul>
                        がPHPで動いているとされています。
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
                PHPはもう古いという声もありますが、既存のWebとの親和性や運用可用性を考慮するとWebシステムを構築する際、PHPはいまだに上位選択肢となります。
                    <div class="img-container">
                        <img src="assets/img/img-systemdev/newlayout/web-img.svg">
                    </div>
                    <p>Wordpressなど多くのCMSもPHPで動いています。</p>
                    <div class="jsfw-container">
                        <p><b>JS Framework</b></p>
                            <div class="js-desc-continer">
                            <div class="row">
                                <div class=" col-md-3  col-sm-4 text-center">
                                    <img src="assets/img/img-systemdev/newlayout/logo-js.png"><br> 
                                    JavaScript
                                </div>
                                <div class="col-md-9  col-sm-8 text-left js-desc">
                                を用いた開発。PHPよりもWebサイトにて使われているプログラム言語がJavaScriptです。 
                                </div>
                            </div>
                        </div>
                        

                        <p>
                        ユーザビリティを高めるためにJavaScriptは不可欠なのですが、PHP+JavaScript型開発のほかに<span class="logofont">LOGIQUE</span>ではJS Framework (React, Angular, Vue.js)をベースとしてPWA開発を行うことも得意としています。
                        </p>
                        <ul class="jsframework framework-list">
                            <li><img src="assets/img/img-systemdev/newlayout/logo-react.png"> <br> React</li>
                            <li><img src="assets/img/img-systemdev/newlayout/logo-angular.png"> <br> Angular</li>
                            <li><img src="assets/img/img-systemdev/newlayout/logo-vue.png"> <br> Vue.js</li>
                        </ul>
                        <p>
                        Node.jsやExpress.jsと組み合わせて大規模システムを構築することも可能です。
                        </p>

                        <!-- New Section -->
                        <p class="class-jamstack-1">LOGIQUEはJAMstackアーキテクチャのWeb開発もできます</p>
                        <section class="class-jamstack-3">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-2 col-sm-4 text-center">
                                    <picture>
                                        <source srcset="assets/img/img-systemdev/newlayout/Jamstackicon.webp" type="image/webp">
                                        <img loading="lazy" src="assets/img/img-systemdev/newlayout/Jamstackicon.png">
                                    </picture>
                                </div>
                                <div class="col-md-7  col-sm-8 text-left">
                                    JAMstack技術で開発されたWebアプリやWebサイトは高パフォーマンスでセキュアなものとなりえます。Webの運用コスト低減にも繋がります。
                                </div>
                            </div>
                        </section>
                        <p class="class-jamstack-2">
                            JAMstackのメリット
                        </p>
                        <section class="class-jamstack-4">
                            <div class="row">
                                <div class="col-xs-12 col-md-3">
                                    <picture>
                                        <source srcset="assets/img/img-systemdev/newlayout/stopwatch.svg" type="image/svg">
                                        <img loading="lazy" src="assets/img/img-systemdev/newlayout/stopwatch.png">
                                    </picture>
                                    <p>高いパフォーマンス</p>
                                </div>
                                <div class="col-xs-12 col-md-3">
                                    <picture>
                                        <source srcset="assets/img/img-systemdev/newlayout/dollars-money.svg" type="image/svg">
                                        <img loading="lazy" src="assets/img/img-systemdev/newlayout/dollars-money.png">
                                    </picture>
                                    <p>低い運用コスト</p>
                                </div>
                                <div class="col-xs-12 col-md-3">
                                    <picture>
                                        <source srcset="assets/img/img-systemdev/newlayout/folder.svg" type="image/svg">
                                        <img loading="lazy" src="assets/img/img-systemdev/newlayout/folder.png">
                                    </picture>
                                    <p>高セキュリティ</p>
                                </div>
                                <div class="col-xs-12 col-md-3">
                                    <picture>
                                        <source srcset="assets/img/img-systemdev/newlayout/idea.svg" type="image/svg">
                                        <img loading="lazy" src="assets/img/img-systemdev/newlayout/idea.png">
                                    </picture>
                                    <p>高スケーラビリティ</p>
                                </div>
                            </div>
                        </section>
                        <p class="class-teknologi">
                            JAMstackテクノロジー
                        </p>
                        <div class="sec-content-part success-service class-jamstack-5">
                            <div class="page-content">
                                <div class="success-service-list">
                                    <div class="row rowflex col10">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="success-item scitem1">
                                                <div class="circle--"></div>
                                                <div class="scitem-content">
                                                    <h3>静的サイトジェネレーター</h3>
                                                    <p>Gatsby.js</p>
                                                    <p>Next.js</p>
                                                    <p>Hugo</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="success-item scitem1 center">
                                                <div class="circle--"></div>
                                                <div class="scitem-content">
                                                    <h3>ヘッドレスCMS</h3>
                                                    <p>Ghost</p>
                                                    <p>Strapi</p>
                                                    <p>Netlify cms</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="success-item scitem1">
                                                <div class="circle--"></div>
                                                <div class="scitem-content">
                                                    <h3>ホスティング</h3>
                                                    <p>Netlify</p>
                                                    <p>Vercel</p>
                                                    <p>AWS Amplify</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New Section -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section sixth-part class-jamstack-6">
        <div class="sec-content-part contact-banner">
            <div class="page-content">
                <ul>
                    <li class="text-left">インドネシアでシステム開発や運用が必要でしたらお気軽にご相談ください <li>
                    <li>
                        <a href="/jp/contact.php" class="btn-yellow">いますぐお問い合わせ <span class="icon"> <img src="assets/img/img-systemdev/newlayout/arrow-right.svg"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="content-wrapper__">
        <?php include './assets/components/dm-links.php' ?>
        <?php include './assets/components/other-services.php' ?>
    </div>
     <?php /*<section class="tahap-pemesanan-list">
				<div class="border-top-list hidden-xs hidden-sm"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-offset-6 col-md-6">
							<h4><b>システム開発、WEBアプリ開発、システム保守運用などで以下のようなお悩みないですか？LOGIQUEがご支援します。</b></h4>
							<ul style="list-style-type: square;">
								<li class="m-b-5">社内システムが必要だがIT部門がなく進め方すら分からない</li>
								<li class="m-b-5">現行システムの保守契約がなく、変更したいのだが、協力会社が不在</li>
								<li class="m-b-5">パッケージシステムを導入すべきかスクラッチ開発すべきか分からない</li>
								<li class="m-b-5">IT部門があり内製できるのだがリソースが不足している</li>
								<li class="m-b-5">必要なシステム開発プロジェクトのRFPを作ってもらいたい</li>
								<li class="m-b-5">委託業者から納品されたシステムがバグだらけで困っている</li>
								<li class="m-b-5">OSやブラウザのバージョンに合わせてシステムもバージョンUPしたい</li>
								<li class="m-b-5">日本本社で使っている社内システムをインドネシアローカライズしたい</li>
								<li class="m-b-5">インドネシア国内のデータセンターにシステムを配置したい</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="border-top-list-2 hidden-xs hidden-sm"></div>
			</section> */ ?>
     <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
     <?php include '../footer.php'; ?>

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
    });

        $('.min-h').matchHeight({
            byRow: false
        });
        $('.osc-desc').matchHeight({
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
     </script>
 </body>

 </html>