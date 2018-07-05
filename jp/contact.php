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
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" itemprop="description" content="LOGIQUEはインドネシア、他の東南アジアの国でクライアントのWEBマーケティングをWEBサイト制作、WEBシステム開発、モバイルアプリ開発、SEO対策、アクセス解析などで成功に導いてきました。インドネシアでWEBを成功のキーとお考えであれば、LOGIQUEにご相談ください。">
	<meta name="keywords" content="お問い合わせ, WEBサイト制作, ホームページ制作,ウェブシステム構築, WEBマーケティング, パンフレット, モバイルアプリ構築">
	<meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="インドネシアのウェブ/ホームページの制作、運用に関するお問い合わせ | LOGIQUE デジタルインドネシア">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Logique">
	<meta property="og:url" content="https://www.logique.co.id/jp/contact.php">
	<meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
	<meta property="og:description" content="LOGIQUEはインドネシア、他の東南アジアの国でクライアントのWEBマーケティングをWEBサイト制作、WEBシステム開発、モバイルアプリ開発、SEO対策、アクセス解析などで成功に導いてきました。インドネシアでWEBを成功のキーとお考えであれば、LOGIQUEにご相談ください。">
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <title>インドネシアのウェブ/ホームページの制作、運用に関するお問い合わせ | LOGIQUE デジタルインドネシア</title>

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
				<div class="logique-nav in-jp">
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
								会社概要
							</a>
						</div>
						<div class="text-center">
							<a href="portfolio.php">
								<div class="img-portfolio"></div>
								制作実績
							</a>
						</div>
						<div class="text-center">
							<a href="services.php">
								<div class="img-services"></div>
								サービス
							</a>
						</div>
						<div class="text-center">
							<a href="joinus.php">
								<div class="img-career"></div>
								採用/<br>パートナー
							</a>
						</div>
						<div class="text-center active">
							<a href="contact.php">
								<div class="img-contact"></div>
								お問い合わせ
							</a>
						</div>
						<div class="text-center">
							<a href="https://www.logique.co.id/blog/ja" target="_blank">
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
								<li><a href="../en/contact.php">EN</a></li>
								<li><a href="../hubungi-kami.php">ID</a></li>
								<li class="active"><a href="#">JP</a></li>
							</ul>
							<a href="index.php"><img src="../img/logo.png" alt="Logo" class="img-responsive logo"/></a>
							<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
							  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="index.php"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li>
							  <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" ><a itemprop="item" ><span itemprop="name">お問い合わせ</span></a><meta itemprop="position" content="2" /></li>
							</ol>
							<h1 class="tagline">WEBシステム開発、ホームページ制作、インターネットマーケティング、モバイル開発から印刷物のデザインまでお気軽にご相談ください。
							</h1>
						</div>
					</div>
				</div>
			</div>			
			
			<br/>
			
			<div id="contentsArea">
				<div id="contents">
					<div class="title"><b>Contact</b><span class="yellow">Us</span></div>
					<div class="form-container" style="padding-top: 10px;">
					<style>
						.box-jika.jap-page .jika-title:before {
							left: 50px;
							margin: 0;
						}
					</style>
						<div class="box-jika jap-page">
							<div class="row">
								<div class="col-lg-12">
									<div class="jika-title"><span>"</span>&nbsp;こんな事でお困りであれば</div>
								</div>
								<div class="col-lg-12">
									<div class="contact-copies">
										<span class="yellow">WEB</span>を営業の重要な１チャネルとして、集客力のあるWEBに改良したい.
									</div>
									<div class="contact-copies">
										インターネットテクノロジーやAIなど先進技術を活用した新ビジネスを立ち上げたい.
									</div>
									<div class="contact-copies">
										社内管理システムが必要、パッケージ導入ではなく、要件にあったシステムを構築したい.
									</div>
								</div>
							</div>
						</div><br/>	
						
						LOGIQUEはインドネシア、他の東南アジアの国でクライアントのWEBマーケティングをWEBサイト制作、WEBシステム開発、モバイルアプリ開発、SEO対策、アクセス解析などで成功に導いてきました。<br/>
					</div>
					<img class="img-responsive" src="../img/kontak-img.jpg" alt="Kontak Kami"/>
					<div class="highlights-contact">
						インドネシアにてWEBやIT関連で課題があれば、LOGIQUEにご相談ください。
					</div>
					<div class="form-container">	
					<br/>
						<b>お問い合わせ前に。</b><br/>
						弊社は日本人とインドネシア人の混成チームです。インドネシア語、英語、日本語のいずれでもお気軽にお問合せください。<br/>
						WEB制作の費用は？とご質問いただくことが多くあります。難しい質問です。<br/>
						簡易に制作する場合ですと15,000,000 IDR で制作した実績もありますが、これで本当に効果のでる良いWEBサイトが作れるかというと難しいところです。値段だけで比較するともっと安い制作会社があります。なかなかインドネシアの現地プロダクションでは実施が難しいケース、ビジネスの成功に貢献できるようなWEBを作りたい場合、信頼できる制作会社に任せたい、一緒に成功に向けて協業できる会社と組みたい、などにおいては弊社にご相談ください。LOGIQUEにしか出せないValueが出せると確信しています。<br/>
						もちろん限られた予算でまずは最低限のWEBサイトを作りたいというご要望にもお応えいたします。<br/><br/>
						
						<div class="highlights2-contact">
						ホームページ制作やソーシャルメディア等、ウェブ関連のご相談事または印刷物デザインに関する事も、お気軽にロギクまでお問い合わせください。
						</div>
						<br/>
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
									<b>お問合せ項目:</b>  <i>（複数回答可）</i>
								</div>
								<div class="clearfix"></div>  
								<div class="col-lg-6">
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="ホームページに関して">WEB/ホームページに関して</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="WEBシステム開発や運用に関する相談">WEBシステム開発や運用に関する相談</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="WEBマーケティング・SEO対策に関して">WEBマーケティング・SEO対策に関して</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="インターネット広告に関して">インターネット広告に関して</label>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="会社案内・パンフレットの制作・印刷について">会社案内・パンフレットの制作・印刷について</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="入札参加企業を探している">入札参加企業を探している</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="インドネシア進出に関して相談したい">インドネシア進出に関して相談したい</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="inquiry[]" value="ジャカルタ視察旅行時に会社訪問したい">ジャカルタ視察旅行時に会社訪問したい</label>
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
									<button type="submit" class="btn btn-submit btn-block" onclick="ga('send', 'event', 'Button-Kirim-JP', 'Action-Click', 'Button-Kirim-JP-Label');">Submit</button>
								</div>
							</form>
						</div>
						<br/>
						<div class="row">
							<div class="col-md-12 text-center sosmed-contact">
								<a href="https://www.facebook.com/logique.id/" target="_blank"><i class="fa fa-facebook-official" style="color:#3b5999"></i></a>
								<a href="https://twitter.com/LogiqueDigital" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="color:#0084ff"></i></a>
								<a href="https://www.instagram.com/logiquedigital/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="color:#e4405f"></i></a>
								<a href="https://www.linkedin.com/company/13420656" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true" style="color:#0077B5"></i></a>
							</div>
						</div>
					</div>
					<div class="bg-grey">
						<div class="title-bg-grey">お問合せからの流れ</span></div><br/><br/>
						<div class="klien-flow contact-flow row">
							<div class="col-sm-3">
								<div class="div-for-workflow">
								  <div class="valign-center">
										お問合せ後、通常1営業日以内に返信いたします。
								  </div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="div-for-workflow">
									<div class="valign-center">
										簡易な、確認・ご提案をさせていただきます。
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="div-for-workflow">
									<div class="valign-center">
										ヒアリング＆ご提案 
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="div-for-workflow">
									<div class="valign-center">
										ご成約〜プロジェクト開始
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<!--<div class="form-container">	
							<br/>
							<span class="characteristic-title">お問い合わせ例</span><br/><br/>
							<ul class="joinus-ul">
								<li>WEBサイトを制作したい</li>
								<li>WEBサイトをリニューアル・変更したい</li>
								<li>キャンペーンページ、ランディングページを作りたい</li>
								<li>WEBサイトの運用を委託したい</li>
								<li>WEBサーバーを探している、レンタルしたい、運用してもらいたい</li>
								<li>WEBシステムを開発してもらいたい</li>
								<li>モバイルアプリを開発したい</li>
								<li>SEO対策をしたい</li>
								<li>ネット広告を出稿、運用委託したい</li>
								<li> WEBアクセス解析を依頼したい</li>
								<li>ネットビジネスコンサルティングを依頼したい</li>
								<li>コンテンツマーケティングを行いたい</li>
								<li>写真撮影、映像制作してほしい</li>
								<li>会社案内や展示会用の印刷物をデザインできる会社を探している</li>
							</ul>
						</div>-->
						<br/><br class="hidden-xs"/><div class="label-questions">よくあるご質問・ご相談</div><br/>
						<div class="question">日本人同士で日本語で相談・プロジェクト進行できるのか？</div>
						<div class="answer">案件の内容によりますが、可能です。インドネシアでのプロジェクトを日本の部署の日本人担当者さまと、弊社日本人がやり取りさせていただきながらの進行も可能です。オフショア案件のご相談も受け付けております。</div>
						<br/>
						<div class="question">日本で打ち合わせすることは可能ですか？</div>
						<div class="answer">まずはご相談ください。原則、SKYPEミーティングなどをお願いしておりますが、ご相談内容により検討いたします。</div><br/>

						<div class="question">いま委託しているWEB・システム会社から乗り換えを検討している.</div>
						<div class="answer">ドキュメントが無いなどで運用会社の変更を躊躇されるお客様が多いのですが、十分な引継ぎがなくても一般的なテクノロジーで作られたWEB/システムであれば、引継ぎ、修正、運用が可能なケースがほとんどです。お気軽にご相談ください。</div><br/>

						<div class="question">○☓管理システムを開発できる会社を探しているのだが</div>
						<div class="answer">インドネシアで顧客管理システム、債権管理、販売管理、採用管理、ポイント管理、e-Commerce、コンテンツ管理システムなど様々なシステムを構築運用してきました。オープンなWEBシステム技術を使ったシステム開発が得意です。柔軟に早く開発することが可能ですので、まずはご相談ください。</div><br/>

						<div class="question">インドネシアでの制作パートナーとして検討したい.</div>
						<div class="answer">ぜひ詳細をご相談させてください。ジャカルタ視察旅行の機会には是非ともお立ち寄りください。.</div><br/>
						
						<div class="question">モバイルアプリ開発を検討している.</div>
						<div class="answer">アンドロイドアプリ、iOSアプリ開発のどちらも可能です。企画の段階から関与する形態も可能ですのでご相談ください。</div><br/>
						
						<div class="question">販促物を作りたいのだがデザインだけじゃなくて印刷や製作まで可能なのか？</div>
						<div class="answer">パンフレット、リーフレットなど通常の印刷物はもちろん可能です。うちわやTシャツなどであれば、こういったものへの印刷も可能ですが、大きな製作物や複雑なものだと専門業者に委託されたほうが良いかもしれません。いずれにしろご相談いただければ、弊社にて専門業者をご紹介することも可能です。</div><br/>
						
						<div class="question">インドネシア語のSEO対策が可能ですか？</div>
						<div class="answer">可能です。金融系キーワードや旅行（訪日旅行）キーワード、教育系でSEO対策の経験があり、ビッグキーワードで上位表示を獲得しました。インドネシア人コンテンツライターとマーケッターがチームを組んで対策しますのでインドネシア語SEO対策が一番得意です。英語、日本語も可能です。</div><br/>
					</div>
					<div class="map-container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.8748090433066!2d106.82702104991579!3d-6.296598097694437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f206effdebf1%3A0xca2d9403de2bfbe1!2sAD+Premier+Office+Park!5e0!3m2!1sen!2sid!4v1499330296225" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			
			<?php include 'footer.php';?>
			
		</div>
	</body>
</html>