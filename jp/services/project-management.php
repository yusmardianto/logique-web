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
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" content="LOGIQUEインドネシアはPMP保有のプロジェクトマネージャがプロジェクト管理をしてIT/DXプロジェクトを成功に導きます。Webシステム開発、ITシステム導入による業務改善プロジェクト、デジタルマーケティング運用などで失敗のない、より成果のでるプロジェクトマネジメントを行います。">
    <meta name="keywords" content="penetration test, penetration testing, jasa penetration test, jasa penetration testing, logique, pen test Jakarta, penetration test Indonesia, security assessment Indonesia">
    <meta name="author" content="Logique Digital Indonesia">
    <meta property="og:title" content="プロジェクトマネジメント | LOGIQUE DIGITAL INDONESIA">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/en/services/project-management.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
    <meta property="og:description" content="LOGIQUEインドネシアはPMP保有のプロジェクトマネージャがプロジェクト管理をしてIT/DXプロジェクトを成功に導きます。Webシステム開発、ITシステム導入による業務改善プロジェクト、デジタルマーケティング運用などで失敗のない、より成果のでるプロジェクトマネジメントを行います。">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>プロジェクトマネジメント | LOGIQUE DIGITAL INDONESIA</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="/css/style-pm.css?v=1.0.4" rel="stylesheet">
    <link rel="canonical" href="https://www.logique.co.id/en/services/project-management.php" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet"> -->    
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

<body class="wrapper wrapper--update-design --jp">
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
      $lang = 'jp';
      $en_link = '/en/services/project-management.php';
      $id_link = '/layanan/project-management.php';
      $jp_link = '#';
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
                                            <a itemprop="item" href="/en/"><span itemprop="name">ホーム</span></a>
                                            <meta itemprop="position" content="1" />
                                        </li>
                                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                                itemprop="item" href="/en/services.php"><span itemprop="name">&nbsp; サービス</span></a>
                                            <meta itemprop="position" content="2" />
                                        </li>
                                        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                            <a itemprop="item"><span itemprop="name">プロジェクト管理</span></a>
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
                              <!-- <span class="fs--26px fw--800">Success through </span> -->
                              <br>
                              <span class="fs--28px fw--800">プロフェッショナルなプロジェクト管理</span>
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
                <p>適切なプロジェクト管理はプロジェクト成功のために非常に重要です。スコープ、スケジュール、予算の管理をはじめとして、いくつかのプロジェクトの成功の鍵を握る重要な要素を切々にコントロールする必要があります。上記3つの要素は、「Triple Constraints」として、プロジェクトの成功を測定するために使用される主なパラメータの1つとしてよく知られています。どのような指標を用いるにしても、プロジェクト管理の目標は、プロジェクトを計画通りに進め、より良い結果をもって終われるようにすることです。</p>
                <p>効率的なプロジェクト管理はプロジェクトの最終結果を決めます。プロジェクト管理の良し悪しが結果に大きな影響を与えます。そのため、失敗のリスクを最小限に抑えるために、プロジェクト中に起こるすべてのリスクに対する備えを標準化する必要があります。 現在、すべての業界で将来のプロジェクトの基盤として使用できる包括的な標準モデルを作成するために多くの研究がなされています。</p>
                <p>現在世界最大のプロジェクト管理をリードしている組織は、米国ペンシルベニア州に本社を置き、1969年に設立されたPMI（プロジェクトマネジメント協会）です。PMBOK（Project Management Body of Knowledge）のリリースでも一般的に知られており、世界中のプロジェクトマネージャーにとってバイブルの役割を果たしています。 PMIは、PMBOKの試験に合格した人にPMP認定を提供します。現在、世界中で100万人以上のPMP保有者がいます。インドネシアでは、現在、プロジェクトリーダーのポジションと比較してアクティブなPMP認定保有者は非常に少なく、約1,000人のPMP保有者しかいません。PMP認定されているプロジェクトマネージャーはインドネシア国内で貴重だと言って良いと思います。LOGIQUEにはPMP保有プロジェクトマネージャがいます。</p>
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
                        <a href="/jp/contact.php" class="form-control btn btn--yellow">
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
                            <h3 class="mb--25px main-title main-title--white main-title--with-square-point"><span class="logo-font">LOGIQUE</span>のPMチーム</h3>
                            <h5 class="main-subtitle">プロフィール</h5>
                            <p><span class="logo-font">LOGIQUE</span>にはPMP認定を受けたプロジェクトマネージャーが在籍しています。 そのうちの一人は、現在のコンサルタンティングTeamリーダーであるMeiriandoTejaです。 PMP資格保持者です。銀行、運輸、電話会社などのさまざまな業界で10年以上ITプロジェクトを管理した経験があり、ERP製品、CRM、HCM、モバイルおよびWebアプリケーションの実装に精通しています。</p>

                            <p class="expert-team-second-paragraph">
                            <img src="/img/pm/quote-yellow.png" class="img-expert-team-quote" width="50" height="50" alt="quote">
                            <span class="logo-font">LOGIQUE</span>では、プロジェクト管理をする上で2つの優先事項を定めています。1つ目は、プロジェクト状況の透明性です。作業プロセス、作業ステータス、作業内容、作業量をプロジェクト利害関係者に透明性をもって共有します。透明性はプロジェクト内の相互信頼レベルを向上させます。信頼し、相互にリスペクトしながらプロジェクト運用することが重要であると考えています。２つ目はプロジェクトメンバー、利害関係者のコミットメントです。 全員が高いコミットメント意識をもってプロジェクトに臨むことが重要だと考えています。プロジェクト利害関係者のコミットメントは、他の利害関係者にも影響し、プロジェクト内のコミュニケーションを活性化し各プロセスをスムーズにします。
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
                <span class="logo-font fs--24px">LOGIQUE</span>のプロジェクト管理
                </h3>
                <div class="row">
                    <div class="col-md-5">
                        <picture>
                            <source srcset="/img/pm/pm-illustration.webp">
                            <img src="/img/pm/pm-illustration.jpg" class="img-responsive mb--20px mx--auto" alt="pm-illustration">
                        </picture>
                    </div>
                    <div class="col-md-7">
                        <p class="mb--20px">コンベンショナルな会社が通常採用するウォーターフォール手法を使用することは稀で、アジャイル-スクラム手法を利用します。 アジャイル-スクラム方式は、進行中のプロジェクト全体に大きな影響を与えることなく、急速に頻繁に変化するマーケットニーズやプロジェクトOwnerの状況変化にフレキシブルに対応することを可能にします。</p>
                        <p>一般に、スクラム方式は、開発フェーズをいくつかの「スプリント」に分割します。各スプリントは、バックロググルーミング、スプリントプランニング、デイリースクラム、スプリントレビュー、スプリントレトロスペクティブの5つのセレモニーで構成されます。 </p>
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
                        <p>1. バックロググルーミング/バックログの詳細化</p>
                        <p>バックロググルーミングは、バックログ内の「ストーリー」を分解して、スプリントでの作業を詳細に明確にするプロセスです。分解された各ストーリーから、関係する各作業者の作業量や難易度についても見積もりが行われます。作業に必要な合計時間が導きだされます。</p>
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
                        <p>2. スプリント計画</p>
                        <p>スプリント計画は、次のスプリント中にどのストーリーに取り組むかを準備するプロセスです。 バックロググルーミングの結果から得られたストーリーを各メンバーの作業スピードなどに基づいて、スプリントに割り当てられる人員と時間を決めます。各スクラムチームは、スプリント計画フェーズで合意された作業を完了することを約束します。</p>
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
                        <p>3. デイリースクラム</p>
                        <p>デイリースクラムは、チームメンバーとスクラムマスターがそれぞれの作業状況をアップデートするために実施する毎日のイベントです。デイリースクラムを効果的なものにするために、このイベントは、15〜30分に限って行うことが推奨されています。デイリースクラムに参加する各メンバーは、以下に関して報告共有することが求められます。</p>
                        <div class="ceremonies-box-wrapper">
                            <span class="ceremonies-box">a. 昨日行った作業</span>
                            <span class="ceremonies-box">b. 今日行う仕事</span>
                            <span class="ceremonies-box">c. チームの作業に影響を与える障害/問題</span>
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
                        <p>4. スプリントレビュー</p>
                        <p>スプリントレビューフェーズは、スプリントの最後に開催され、プロジェクトオーナーの前で、プロジェクトをレビューします。 各スプリントレビューは、次のスプリントでの改善として活かされるべきです。</p>
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
                        <p>5. スプリントレトロスペクティブ</p>
                        <p>スプリントレトロスペクティブは、スプリントの終了時に開催されるイベントで、1つのスプリントのプロセスを確認し、次のスプリントで実行する必要のある「アクションアイテム」を決め、より良いスプリントプロセスを実現します。次の3つのことについて確認します。</p>
                        <div class="ceremonies-box-wrapper">
                          <span class="ceremonies-box">スプリント中にうまくいかなかったこと</span>
                          <span class="ceremonies-box">スプリント中にうまくいったこと</span>
                          <span class="ceremonies-box">スプリントに関してまだ不明な点</span>
                        </div>
                        <p>これら3つのことのうち、次のスプリントで実行する必要のあるアクションアイテムについては引き続き議論します。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb--60px">
        <div class="content-wrapper__">
            <div class="container__">
                <p class="mb--20px">これら3つのことのうち、次のスプリントで実行する必要のあるアクションアイテムについては引き続き議論します。</p>
                <div class="row mb--40px">
                    <div class="col-md-5">
                        <picture>
                            <source srcset="/img/pm/evm.webp">
                            <img src="/img/pm/evm.jpg" class="img-responsive mb--10px" alt="evm">
                        </picture>
                    </div>
                    <div class="col-md-7">
                        <p><strong>EVM（アーンドバリューマネジメント）</strong></p>
                        <p>アーンドバリューマネジメントは、タイムライン、予算、パフォーマンスを同じグラフィックプレゼンテーションに統合するプロジェクト管理ツールです。 プロジェクトマネージャーは、既存のデータの包括的な範囲を考慮したグラフィックを使用して、将来のイベントを予測し、確立された時間枠に従ってプロジェクトを実行するために、早期に迅速かつ効果的な意思決定を行えるようになることが期待されます。EVMは、プロジェクトの状況を網羅的に表示できるようにするために使用する週次レポートで毎週実行されます。</p>
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
                        <p><strong>リスク管理</strong></p>
                        <p>EVMプロセスから得られた包括的な分析を通じて、リスクレジスターを作成し、特定のプロジェクト内で発生する可能性のあるすべてのリスクのデータを収集して、そのような影響を最小限に抑えるために迅速に対応できます。</p>
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
                        <p>プロジェクトスコープを詳細に管理するためWBSを利用します。 WBSは、すべての利害関係者が同じ認識をもつために常に進捗状況を更新して、共有されます。</p>
                    </div>
                </div>
                <p class="mb--20px">LOGIQUEでは、プロジェクトの原価管理を厳密に行っています。当社独自開発のNippoアプリケーションを使用して、実際に従業員が作業した時間を正確に把握しています。これにより、誰がどの作業に何時間費やしたのかがクライアント別、プロジェクト別、タスク別に管理可能となっています。</p>
                <p>このように詳細なプロジェクト原価管理を行っているので、私たちのプロジェクト管理はクライアントにとってもフェアで透明度の高いものとなっています。</p>
            </div>
        </div>
    </section>

    <section class="mb--60px">
        <div class="content-wrapper__">
            <div class="container__">
                <h3 class="main-title main-title--with-square-point"><span class="logo-font">LOGIQUE</span>のシステム開発</h3>
                <p class="mb--20px">マーケットや技術の変化のスピードが速くなっているため、以前のように、要件を最初に詳細に定義してから開発をスタートするやり方ではマーケットやユーザーのニーズに沿うものを開発して提供することはできません。</p>
                <p>より動的で効率的、柔軟なプロジェクト管理とシステム開発が求められています。アジャイル手法の実装に加えて、<span class="logo-font">LOGIQUE</span>ではシステム開発に関するお客様との契約にも柔軟なアプローチをとっています。契約締結時、またプロジェクトスタート時には、全てを詳細に定義することはできません。作業内容を決めてしまうのではなく、作業量を定義してそれに対する契約を合意することで早くスタートし、プロジェクト中に柔軟に作業内容を変えることができます。動的に適切なチーム編成をし続けてプロジェクトをスピーディーに成功に導きます。</p>
            </div>
        </div>
    </section>

    <section class="mb--60px">
        <div class="content-wrapper__">
            <div class="container__">
                <h3 class="main-title main-title--with-square-point">お問い合わせ</h3>
                <p><span class="logo-font">LOGIQUE</span>が適切なプロジェクト管理で貴社のIT/DXプロジェクトを成功させます！ 以下のフォームにご記入のうえご連絡ください。お問い合わせお待ちしています。</p>
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