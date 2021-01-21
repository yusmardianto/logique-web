<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description" content="インドネシアでWebシステム、モバイルアプリ、デジタルマーケティング運用、Webセキュリティ検査などのサービス提供をしているLOGIQUEのサービス紹介ページ。ジャカルタに本社をもちジョグジャカルタに制作運用センターをもつ10年近いインドネシアでの経験をもつ制作開発会社です。">
    <meta name="keywords" content="WEBサイト制作, ホームページ制作, ウェブシステム構築, マーケティング, SEO, メンテナンス, モバイルアプリ, デザイン, 印刷">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="インドネシアのITコンサルティング会社LOGIQUEのサービス紹介">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/jp/services.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
    <meta property="og:description"
        content="インドネシアでWebシステム、モバイルアプリ、デジタルマーケティング運用、Webセキュリティ検査などのサービス提供をしているLOGIQUEのサービス紹介ページ。ジャカルタに本社をもちジョグジャカルタに制作運用センターをもつ10年近いインドネシアでの経験をもつ制作開発会社です。">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="canonical" href="https://www.logique.co.id/jp/services.php"/>
    <title>インドネシアのITコンサルティング会社LOGIQUEのサービス紹介</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- <link href="../css/style.css" rel="stylesheet"> -->
    
    <link href="/css/sidebar-update.css" rel="stylesheet"> 
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="/css/style-revamp.css" rel="stylesheet">
    <link href="/css/style-services.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet">
    <link href="../css/jpstyle.css" rel="stylesheet">
</head>

<body class="jp-page">
    <div class="wrapper wrapper--update-design wrapper--update-design-font --jp">

        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'services';
            include($_SERVER['DOCUMENT_ROOT'].'/jp/sidebar.php'); 
        ?>

        <!-- <div id="bgImg" class="others"><div class="img"></div></div> -->
        <!-- <div class="contain-video">
				<video poster="../img/video-img.png" id="bgvid" playsinline autoplay muted loop>
					<source src="../img/12377093.mp4" type="video/mp4">
				</video>
			</div>
			<div class="bg-white-opacity"></div> -->

        <?php 
            $lang = 'jp';
            $en_link = '/en/services.php';
            $id_link = '/layanan.php';
            $jp_link = '#';
            include($_SERVER['DOCUMENT_ROOT'].'/jp/header.php'); 
        ?>

        <div class="content-wrapper__">

            <section class="bg--gray --top">
                <div class="container__" style="padding:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="index.php"><span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;LOGIQUEのサービス</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--gray">
                <div class="container__">
                    <div class="text-center">
                        <h1 class="title-index">LOGIQUEのサービス</h1>
                        <hr class="title__yellow-line--center">
                        <p class="title__description" style="">
                            世の中の変化のスピードは非常に速く、そのスピードは益々上がってきているように思います。スピードは現代においてはビジネスの成否を分ける最も重要なキーポイントと言っても良いと考えています。
                        </p>
                        <p class="title__description" style="margin-bottom:20px">
                            お客様のビジネスを成功に導くため、制作開発もスピーディーにまた柔軟に対応できる体制でありたいと考えていることから、当社ではアジャイル型の開発体制を敷いています。変化を受け入れ、目に見えるものを早く作ります。クライアントと当社プロジェクトメンバーは１つのTeamです。細かくリリースし改善していくことが肝要だと考えます。
                        </p>
                        <div class="our-service__btn-wrapper">
                            <a href="portfolio.php">
                                <div class="main-btn --black">See Portfolio</div>
                            </a>
                            <a href="/jp/services/project-management.php">
                                <div class="main-btn --yellow">Our Project Management</div>
                            </a>
                            <a href="contact.php"
                                onclick="ga('send', 'event', 'Button-Hubungi-Logique-Layanan-1', 'Action-Click', 'Button-Hubungi-Logique-Layanan-1-Label');">
                                <div class="main-btn --yellow">Contact Us</div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="serviceNavigation">
                <div class="container__">
                    <div class="row">
                        <div class="col-md-offset-1 col-sm-offset-1 col-md-5 col-sm-10">
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/jasaweb.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#webCreate_">
                                        <p class="service-list__title"> Web・ホームページ制作運用</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <a href="#webCreate_revamp">
                                            <li>コーポレート・ブランドWeb制作</li>
                                        </a>
                                        <a href="#webCreate_multi">
                                            <li>多言語サイト制作</li>
                                        </a>
                                        <a href="#webCreate_webService">
                                            <li>サービスWEB構築</li>
                                        </a>
                                        <a href="#webCreate_recruit">
                                            <li>採用サイト制作</li>
                                        </a>
                                        <a href="#webCreate_blog">
                                            <li>ワードプレス</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/sisweb.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#sysDev_">
                                        <p class="service-list__title">IT・Webシステム開発・運用</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <a href="#sysDev_ecommerce">
                                            <li>E-Commerce（ECサイト)構築運用</li>
                                        </a>
                                        <a href="#sysDev_automotive">
                                            <li>Automotive業界向けシステム開発</li>
                                        </a>
                                        <a href="#sysDev_cms">
                                            <li>CMS構築・運用</li>
                                        </a>
                                        <a href="#sysDev_member">
                                            <li>会員管理・契約管理システム</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/mobi.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#mobile_">
                                        <p class="service-list__title">モバイルソリューション | アプリ開発</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <a href="#mobile_pwa">
                                            <li>PWA（ウェブアプリ）開発</li>
                                        </a>
                                        <a href="#mobile_appDev">
                                            <li>モバイル（スマホ）アプリ開発</li>
                                        </a>
                                        <a href="#mobile_appCreate">
                                            <li>モバイル（レスポンシブ）WEB制作</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-offset-0 col-sm-offset-1 col-md-5 col-sm-10">
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/digital.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#dm_">
                                        <p class="service-list__title">デジタルマーケティング | ITコンサルティング</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <a href="#dm_seo">
                                            <li>SEO対策 / SEM</li>
                                        </a>
                                        <a href="#dm_digiMarket">
                                            <li>インターネット広告 / デジタルマーケティング支援</li>
                                        </a>
                                        <a href="#dm_contentCreate">
                                            <li>コンテンツ制作</li>
                                        </a>
                                        <a href="#dm_itConsult">
                                            <li>ランディングページ最適化</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/security.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#webSecurity_">
                                        <p class="service-list__title">セキュリティー・サービス</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <a href="#webSecurity_va">
                                            <li>Webセキュリティ診断（脆弱性診断・検査）</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/lain.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#othersService_">
                                        <p class="service-list__title">その他のサービス</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <a href="#othersService_graphic">
                                            <li>グラフィックデザイン</li>
                                        </a>
                                        <a href="#otherService_server">
                                            <li>クラウドサーバー運用（AWS / Alibaba Cloud）</li>
                                        </a>
                                        <a href="#otherService_itConsultant">
                                            <li>IT/DXコンサルティング</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row container__">
                        <div class="col-md-12">
                            <div class="web-solution__btn-wrapper">
                                <a href="services/web-dev.php">
                                    <div class="main-btn --ws --white">
                                        <div>
                                            <div class="web-solution__half-bg--round"></div>
                                            <img class="web-solution__img" src="../img/service/button/web.png" alt="">
                                        </div>
                                        Web制作
                                    </div>
                                </a>
                                <a href="services/system-dev.php">
                                    <div class="main-btn --ws --white">
                                        <div>
                                            <div class="web-solution__half-bg--round"></div>
                                            <img class="web-solution__img" src="../img/service/button/repair.png" alt="">
                                        </div>
                                        システム開発
                                    </div>
                                </a>
                                <a href="services/mobile-app-dev.php">
                                    <div class="main-btn --ws --white">
                                        <div>
                                            <div class="web-solution__half-bg--round"></div>
                                            <img class="web-solution__img" src="../img/service/button/mobi.png" alt="">
                                        </div>
                                        モバイルアプリ開発
                                    </div>
                                </a>
                                <a href="/jp/services/progressive-web-app-dev.php">
                                    <div class="main-btn --ws --white">
                                        <div>
                                            <div class="web-solution__half-bg--round"></div>
                                            <img class="web-solution__img" src="../img/service/button/pwa.png" alt="">
                                        </div>
                                        PWA（ウェブApp)開発
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--black">
                <div class="container__">
                    <div class="product-slogan --center-img">
                        <img class="product-slogan__img" src="../img/service/service.png" alt="product">
                        <p class="product-slogan__text">
                            デジタルマーケティング関連の様々なサービスをインドネシアでワンストップでご提供しています。Webサイト・ホームページ制作から、システム開発、モバイルアプリ開発までインドネシアで戦うためのご支援をしています。

                        </p>
                    </div>
                </div>
            </section>

            <section>
                <div class="container__">
                    <div class="text-center">
                        <h1 class="title-index">制作・開発の流れ</h1>
                        <hr class="title__yellow-line--center" style="margin-bottom:10px">
                        <p class="title-index--bold">私たちはアジャイル型開発体制で、素早く、柔軟に 制作開発します。
                        </p>
                        <div class="workflow">
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/planning.png" alt="">
                                    <div class="workflow__text">要件定義</div>
                                </div>
                            </div>
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/design.png" alt="">
                                    <div class="workflow__text">デザイン</div>
                                </div>
                            </div>
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/development.png" alt="">
                                    <div class="workflow__text">開発</div>
                                </div>
                            </div>
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/test.png" alt="">
                                    <div class="workflow__text">テスト& 調整</div>
                                </div>
                            </div>
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/launching.png" alt="">
                                    <div class="workflow__text" style="transform: translateX(0)">ローンチ</div>
                                </div>
                            </div>
                        </div>
                        <p class="title__description">世の中の変化のスピードは非常に速く、そのスピードは益々上がってきている ように思います。スピードは現代においてはビジネスの成否を分ける最も重要
                            なキーポイントと言っても良いと考えています。 <br><br>
                            お客様のビジネスを成功に導 くため、制作開発もスピーディーにまた柔軟に対応できる体制でありたいと考 えていることから、当社ではアジャイル型の開発体制を敷いています。変化を
                            受け入れ、目に見えるものを早く作ります。クライアントと当社プロジェクト メンバーは１つの Team です。細かくリリースし改善していくことが肝要だと 考えます。</p>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="webCreate_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center">
                            <h1 class="title-index --yellow"> Web・ホームページ制作運用</h1>
                            <hr class="title__yellow-line--center">
                        </div>
                    </div>
                </div>
                <div class="container__">
                    <div class="row">
                        <div class="col-md-8">
                            <section id="webCreate_revamp">
                                <div class="service-detail">
                                    <div class="service-detail__line-wrapper">
                                        <hr class="title__yellow-line">
                                    </div>
                                    <div class="service-detail__content">
                                        <h3 class="service-detail__title">コーポレート・ブランドWeb制作</h4>
                                            <p>会社の信頼感・ブランド価値を伝えるコーポレートWeb、ブランドWebを制作します。多言語での制作やコンテンツ制作や写真・動画撮影も含めたホームページ制作などご要望に柔軟に応じます。ドメインやWebサーバーの手配、SSL購入もご支援いたします。企画から運用まで纏めてお任せください。スムーズに進められれば1ヶ月程度で公開可能です。コンバージョンのでる、価値の高いWebを作ります。
                                            </p>
                                            <div class="service-detail__btn-wrapper">
                                                <a target="_blank" class="main-btn --yellow" href="/jp/services/web-dev.php"><span
                                                        class="hidden-xs">Web制作サービスについて詳しくみる</span><span
                                                        class="hidden-sm hidden-md hidden-lg">もっと見る</span></a>
                                            </div>
                                    </div>
                                </div>
                            </section>
                            <section id="webCreate_multi">
                                <div class="service-detail">
                                    <div class="service-detail__line-wrapper">
                                        <hr class="title__yellow-line">
                                    </div>
                                    <div class="service-detail__content">
                                        <h3 class="service-detail__title">多言語サイト制作</h4>
                                            <p>英語、インドネシア語、日本語の多言語サイトの制作・実装経験を豊富にもっております。翻訳・校正体制についてもお気軽にご相談ください。インドネシア人にアピールできるデザインで、インドネシアの回線スピードでもストレスなく閲覧できるWEBページを制作いたします。日本やインドネシアから世界に向けた製品・サービスを提供している会社さまのWEB運営もご支援しています。
                                            </p>
                                    </div>
                                </div>
                            </section>
                            <section id="webCreate_webService">
                                <div class="service-detail">
                                    <div class="service-detail__line-wrapper">
                                        <hr class="title__yellow-line">
                                    </div>
                                    <div class="service-detail__content">
                                        <h3 class="service-detail__title">サービスWEB構築</h4>
                                            <p>中古車売買マーケットプレイス、ポイント管理サイト、人材マッチングサイト、E-Commerce、クローズドコミュニティ、会員管理CRMウェブなど、インターネットを活用した新ビジネス/新サービスを開始される際、ビジネス企画からデザイン制作、システム・サイト構築、運用、デジタルマーケティングの実行までトータルでご支援可能です。適切なPhase分けや柔軟なスコープ調整などでサービスが軌道に乗るまでご支援します。
                                            </p>
                                    </div>
                                </div>
                            </section>
                            <section id="webCreate_recruit">
                                <div class="service-detail">
                                    <div class="service-detail__line-wrapper">
                                        <hr class="title__yellow-line">
                                    </div>
                                    <div class="service-detail__content">
                                        <h3 class="service-detail__title">採用サイト制作</h4>
                                            <p>ジャカルタにて、ミスマッチングとならない良い人材の採用の難易度は非常に高くなっています。自社で採用サイトをもち、これを受け皿としてデジタルを活用した採用活動をすることが一つの解決策となります。会社について、人について、求めている人材について、インタビュー動画なども交えて伝えることで効果的な採用が可能となります。求人ページ・サイトと採用管理システムを連動させる案件の実績も豊富にもっています。.
                                            </p>
                                            <div class="service-detail__btn-wrapper">
                                                <a class="main-btn --yellow" href="services/recruitment-web-dev.php"><span
                                                        class="hidden-xs">採用サイト制作サービスを詳しくみる</span><span
                                                        class="hidden-sm hidden-md hidden-lg">もっと見る</span></a>
                                            </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-4 hidden-sm hidden-xs">
                            <div class="service-detail__side-img">
                                <img class="service-detail__side-img--left" src="../img/service/service-detail-1.png" alt="">
                                <img class="service-detail__side-img--right" src="../img/service/service-detail-2.png" alt="">
                                <img class="service-detail__side-img--center" src="../img/service/service-detail-3.png" alt="">
                                <img class="service-detail__side-img--left" src="../img/service/service-detail-4.png" alt="">
                                <img class="service-detail__side-img--right" src="../img/service/service-detail-2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <section id="webCreate_blog">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Wordpressサイト制作</h4>
                                    <p>
                                        Wordpressのインストール・カスタマイズ、デザインの制作とインプリを行います。
                                        最初は自社内でできていたものが担当者不在で運用ができなくなってしまった、バージョンUPやセキュリティ対策ができていない、
                                        等のケースが散見されます。運用更新の委託、カスタマイズやセキュリティ向上のためのセットアップなどご相談ください。
                                        セキュリティに問題のあるWordpress Web・ブログが多くあります。問題起こる前に早めにご相談ください。
                                    </p>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="portfolio.php#webDev">
                            <div class="main-btn --black">See Portfolio</div>
                        </a>
                        <a href="#serviceNavigation">
                            <div class="main-btn">Back to Top</div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="sysDev_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center">
                            <h1 class="title-index --yellow">IT・Webシステム開発・運用</h1>
                            <hr class="title__yellow-line--center">
                        </div>
                    </div>
                </div>
                <div class="container__">
                    <section id="sysDev_ecommerce">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">E-Commerce（EC）構築・運用</h3>
                                <p>
                                    インドネシアで数多くECサイトを構築運用するご支援をして参りました。
                                    単純なECだけでなく、MLM型ECや、フラッシュセール型、マーケットプレイスの構築など、
                                    複雑なご用件のECサイトの構築も成功させてきました。
                                    PWAとして構築するなど現在よくあるニーズにもしっかりお応えしています。
                                    構築後の運用サポートも差し上げていますのでECビジネス関連でお困りのことがあればご相談ください。
                                </p>
                            </div>
                        </div>
                    </section>
                    <section id="sysDev_automotive">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Automotive業界向けシステム開発</h3>
                                <p>
                                    インドネシアの自動車産業向けのシステム開発を数多く経験しています。
                                    自動車メーカー、販売会社、買取サービス、オークション会社など様々なプレイヤー向けに多くのシステムを開発運用して参りました。
                                    業界知識もあり、システム企画の段階からご支援可能です。自動車検査・鑑定アプリ、インターネットオークションシステム、
                                    中古車マーケットプレイスの開発などの経験をご紹介可能です。
                                </p>
                            </div>
                        </div>
                    </section>
                    <section id="sysDev_cms">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">CMS構築・運用</h3>
                                <p>自由度が高く運用性の高い、かつセキュアなCMSを構築します。最適な製品の選定からご支援いたします。当社にて御社の特別な要望を満たすためスクラッチ開発することも可能です。CMSの保守運用もお任せください。金融機関など大手企業の大規模なCMS運用も行っております。
                                </p>
                            </div>
                        </div>
                    </section>
                    <section id="sysDev_member">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">会員管理・契約管理システム</h4>
                                    <p>CRMシステム、会員の契約を管理してマイページから更新費用の決済を行えるようなシステムなど大規模な会員管理システムの構築も可能です。
                                        金融機関の会員管理システム構築の実績もありますのでセキュリティや品質管理は徹底しています。</p>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="/jp/services/system-dev.php">
                            <div class="main-btn --black">システム開発サービスの詳細をみる</div>
                        </a>
                        <a href="#serviceNavigation">
                            <div class="main-btn">Back to Top</div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="mobile_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center">
                            <h1 class="title-index --yellow">モバイルソリューション | アプリ開発</h1>
                            <hr class="title__yellow-line--center">
                        </div>
                    </div>
                </div>
                <div class="container__">
                    <section id="mobile_pwa">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">PWAの開発</h3>
                                <p>インドネシアで多くのモバイルアプリ、ハイブリッドアプリの開発を行ってきました。モバイル・ソリューションの活用でインドネシア市場で発展する企業をご支援しています。モバイルアプリと他システムとの連携などが必要になるケースがほとんどです。インフラの設計設定から、他システムとのデータ連携、バックエンドシステムの開発まで幅広く対応可能です。
                                </p>
                                <div class="service-detail__btn-wrapper">
                                    <a target="_blank" class="main-btn --yellow"
                                        href="/jp/services/progressive-web-app-dev.php">もっと見る</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="mobile_appDev">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">モバイルアプリケーション制作</h4>
                                    <p>アンドロイドApp、iOSアプリをインドネシアマーケットに合わせて開発できます。
                                        企画や技術だけでなく、企画をUI、UXに落とし込み、デザイン制作からアプリケーション開発までワンストップで行い、申請登録、運用までしっかりご支援します。PWA開発も豊富にあります。
                                    </p>
                                    <div class="service-detail__btn-wrapper">
                                        <a target="_blank" class="main-btn --yellow"
                                            href="/jp/services/mobile-app-dev.php">もっと見る</a>
                                    </div>
                            </div>
                        </div>
                    </section>
                    <section id="mobile_appCreate">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">モバイルWEB制作</h4>
                                    <p>
                                        インドネシアはモバイルからの閲覧比率が高くモバイル利用ユーザーに適切な対応をすることが重要です。
                                        スマートフォン、タブレットで閲覧されたときにも最適化されたUIで表示するレスポンシブWEBを制作します。AMP制作やモバイルSEOの実績も豊富です。
                                    </p>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="portfolio.php#PWA">
                            <div class="main-btn --black">Portfolio</div>
                        </a>
                        <a href="#serviceNavigation">
                            <div class="main-btn">Back to Top</div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="dm_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center" style="position: relative">
                            <h1 class="title-index --yellow">デジタルマーケティング | ITコンサルティング</h1>
                            <hr class="title__yellow-line--center">
                            <img class="google-badge --ja" src="/img/google-badge.png" alt="Google Badge">
                        </div>
                    </div>
                </div>
                <div class="container__">
                    <section id="dm_seo">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">SEO対策 / SEM</h4>
                                    <p>
                                        SEOコンサルティングだけで終わらずWebページへの施策の実装まで責任をもって行うことで、結果にコミットします。
                                        日本語、インドネシア語、英語でのSEO対策実績豊富にあります。
                                        インドネシア語で金融系ビッグキーワードや車系ビッグキーワードで1位を長く維持した実績あります。 SEMもお任せください。
                                    </p>
                                    <div class="service-detail__btn-wrapper">
                                        <a target="_blank" class="main-btn --yellow"
                                            href="/jp/services/digital-marketing/seo-service.php">もっと見る</a>
                                    </div>
                            </div>
                        </div>
                    </section>
                    <section id="dm_digiMarket">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">インターネット広告 / デジタルマーケティング支援</h4>
                                    <p>インターネット広告、オンラインPR施策、SNSを活用したマーケティングなど、ネットを活用した集客やコンバージョン増のための施策、OtoOなどご相談ください。
                                        パートナーと協業して効果の高いソリューションをご提供します。</p>
                                    <div class="service-detail__btn-wrapper">
                                        <a target="_blank" class="main-btn --yellow"
                                            href="/jp/services/digital-marketing.php">もっと見る</a>
                                    </div>
                            </div>
                        </div>
                    </section>
                    <section id="dm_contentCreate">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">コンテンツ制作</h4>
                                    <p>WEBに必要な写真・動画・テキストコンテンツの制作を行います。 翻訳もお請けすることが可能です。 外部パートナーと協業した写真撮影やドローン撮影も可能です。
                                        コンテンツ制作は企画からSEOを考慮したライティングまで日本人、インドネシア人の制作チームが行います。</p>
                            </div>
                        </div>
                    </section>
                    <section id="dm_itConsult">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">ランディングページ最適化</h4>
                                    <p>
                                        プロモーションのランディングページやキャンペーンページの制作もお気軽にご相談ください。
                                        1ページの制作でもお請けしております。広告バナーの制作なども可能です。
                                        複数制作してA/Bテストするなどコンバージョンに繋がるページの制作をいたします。
                                        AMPの実装、HTML5バナーの制作などもお気軽にご相談ください。問い合わせ数が増えるように、
                                        問い合わせページだけをリニューアルしたい、というご要望にもお応えしています。
                                    </p>
                            </div>
                        </div>
                    </section>

                    <div class="text-center --back-top">
                        <a href="portfolio.php#others">
                            <div class="main-btn --black">Portfolio</div>
                        </a>
                        <a href="#serviceNavigation">
                            <div class="main-btn">Back to Top</div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="webSecurity_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center">
                            <h1 class="title-index --yellow">セキュリティー・サービス</h1>
                            <hr class="title__yellow-line--center">
                        </div>
                    </div>
                </div>
                <div class="container__">
                    <section id="webSecurity_va">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Webセキュリティ診断（脆弱性診断・検査）</h3>
                                <p>
                                    Webサイトやアプリケーションの脆弱性を診断・レポートします。SQLインジェクション、クロスサイトスクリプティング、セッションハイジャックなどの攻撃による被害の発生を未然に防ぐことができます。診断ツール、経験豊富な担当者による診断の両方を併用して診断します。診断項目などによりますが15,000,000
                                    IDRから診断可能です。
                                </p>
                                <div class="service-detail__btn-wrapper">
                                    <a class="main-btn --yellow" href="/jp/services/penetration-test.php"><span
                                            class="hidden-xs">Webセキュリティ診断サービスについて詳しくみる</span><span
                                            class="hidden-sm hidden-md hidden-lg">もっと見る</span></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="#serviceNavigation">
                            <div class="main-btn">Back to Top</div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="othersService_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center">
                            <h1 class="title-index --yellow">その他のサービス</h1>
                            <hr class="title__yellow-line--center">
                        </div>
                    </div>
                </div>
                <div class="container__">
                    <section id="othersService_graphic">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">グラフィックデザイン</h4>
                                    <p>
                                        商談時に使用する紙ものから、バッグやTシャツなど各種販促物までデザイン制作します。
                                        またパートナー印刷事業者をコントロールして印刷物の納品まで行うことも可能です。
                                        会社案内、各種チラシ、展示会配布物、その他販促物など、まずはご相談ください。
                                    </p>
                                    <div class="service-detail__btn-wrapper">
                                        <a class="main-btn --yellow" href="portfolio.php#others">もっと見る</a>
                                    </div>
                            </div>
                        </div>
                    </section>
                    <section id="otherService_server">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">クラウドサーバー管理</h4>
                                    <p>
                                        AWSの構築運用は数多く経験しており、得意としています。AWSのパートナーシッププログラムAPNにも属しています。
                                        GCPやAlibabaクラウドの構築運用経験もあります。インドネシアのドメインの取得管理、DNSの設定、SSLの購入設定、
                                        AWSの請求代行なども可能です。
                                    </p>
                                    <div class="service-detail__btn-wrapper">
                                        <a class="main-btn --yellow" href="services/devops.php">もっと見る</a>
                                    </div>
                            </div>
                        </div>
                    </section>
                    <section id="otherService_itConsultant">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">IT/DXコンサルティング</h4>
                                    <p>
                                        ITの導入による業務改善コンサルティング、ITツール選定アドバイザリー、ITセキュリティ診断、DX推進支援、インターネットビジネスの新規事業立ち上げ支援など ”インドネシア × IT” 領域で様々なコンサルティングやアドバイザリーサービスを行っています。
                                    </p>
                                    <br>
                                    <p>
                                        インターネットを活用した新規事業の立ち上げ支援、既存ビジネスをDXにより強化するための戦略策定など、お客様のアドバイザーとなり一緒にビジネスを作っていきます。
                                    </p>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="portfolio.php#others">
                            <div class="main-btn --black">Portfolio</div>
                        </a>
                        <a href="#serviceNavigation">
                            <div class="main-btn">Back to Top</div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="othersService_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center">
                            <h1 class="title-index --yellow">クライアントからのコメント</h1>
                            <hr class="title__yellow-line--center">
                        </div>
                    </div>
                </div>
                <section id="testimonials" class="slider--update-design">
                    <div class="container__">
                        <div class="text-center">

                            <!-- SLIDER -->
                            <div class="row">
                                <div class="col-xs-offset-1 col-xs-10">
                                    <div class="custombox__slider">
                                        <div class="custombox__custom-slider">
                                            <div id="profile" class="carousel slide" data-ride="carousel" data-interval="3000">
                                                <div class="carousel-inner">
                                                    <div class="item">
                                                        <blockquote class="client-testi">
                                                            <p>Sun Lifeは急成長している保険会社で、デジタルを重要なチャネルと考えています。LOGIQUEには、My Sun Life
                                                                IndonesiaアプリのUI/UXデザインや改善で協業しています。結果として、このアプリは保険会社のアプリの中で最も評価されているうちの1つとなることができました。短納期での仕事の依頼も多くなっていますが、常にベストを尽くして要求を叶えてくれています。いつもご支援ありがとうございます。
                                                            </p>
                                                            <br><br>
                                                            <div class="client-testi__person">
                                                                <div class="client-testi__line-wrapper">
                                                                    <hr class="title__yellow-line">
                                                                </div>
                                                                <div class="client-testi__p-name">
                                                                    <b>Mr. Jodie Pratomo,</b><br>
                                                                    Head of the Digital Experience for Sun Life
                                                                    Financial.
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <div class="item">
                                                        <blockquote class="client-testi">
                                                            <p>LOGIQUE has a firm grasp of its client’s requirements and needs.
                                                                Its
                                                                approach to
                                                                delivering its service
                                                                is collaborative, and thus results in the shared ownership of the
                                                                project it is
                                                                helping to develop</p>
                                                            <br><br>
                                                            <div class="client-testi__person">
                                                                <div class="client-testi__line-wrapper">
                                                                    <hr class="title__yellow-line">
                                                                </div>
                                                                <div class="client-testi__p-name">
                                                                    <b>Armiliza Cruz Magno, </b><br>
                                                                    JAIF.
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>

                                                    <div class="item active">
                                                        <blockquote class="client-testi">
                                                            <p>We have been cooperating with Logique, who developed our website of
                                                                &quot;the 60th
                                                                Anniversary of Japan-Indonesia Diplomatic Relation&quot; and who
                                                                has
                                                                been
                                                                maintaining the site for us. Logique is meeting our requirements
                                                                which
                                                                are
                                                                detailed and complex. Furthermore, Logique is giving us
                                                                comprehensive
                                                                support in
                                                                the fields of website development as well as SNS operation and
                                                                digital
                                                                marketing.
                                                                Logique’s punctual, flexible and precise work always helps us to
                                                                fulfil our
                                                                mission.
                                                            </p>
                                                            <br><br>
                                                            <div class="client-testi__person">
                                                                <div class="client-testi__line-wrapper">
                                                                    <hr class="title__yellow-line">
                                                                </div>
                                                                <div class="client-testi__p-name">
                                                                    <b>Steering Committee,</b><br>
                                                                    The Commemorative Events of the 60th Anniversary of Japan –
                                                                    Indonesia Diplomatic
                                                                    Relations.
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <div class="item">
                                                        <blockquote class="client-testi">
                                                            <p>当社のビジネスは車・バイクのオークションです。特殊性が高く通常のパッケージシステムでは対応が難しいため、LOGIQUEに大小様々なシステム構築をお願いしています。取引量も多く、求めるセキュリティ堅牢性も高いですが、確実に、かつ柔軟に運営してもらっており感謝しています。
                                                            </p>
                                                            <br><br>
                                                            <div class="client-testi__person">
                                                                <div class="client-testi__line-wrapper">
                                                                    <hr class="title__yellow-line">
                                                                </div>
                                                                <div class="client-testi__p-name">
                                                                    <b>Mr. Kazuhiro Shioyama,</b><br>
                                                                    President Director, PT. JBA Indonesia
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#profile" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#profile" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="client-testi__btn-wrapper --back-top">
                                <a href="portfolio.php">
                                    <div class="main-btn --black">See Portfolio</div>
                                </a>
                                <a href="#serviceNavigation">
                                    <div class="main-btn">Back to Top</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </section>

            <section id="contact">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-5">
                            <h1 class="title-index" style="margin-bottom:0">お問い合わせ</h1>
                            <p>LOGIQUEのサービスについて、製品について、またインドネシアでの協業についてなど、お気軽にご連絡ください。</p>
                            <br>
                            <hr class="title__yellow-line">
                            <img src="../img/contact.png" style="width:100%" alt="contact">
                        </div>

                        <div class="col-sm-7">
                            <ul class="lgq-does__list">
                                <li>社内システムをスクラッチ開発したい</li>
                                <li>新規事業に必要なシステム、Webなど全て整備したい</li>
                                <li>既存システムの運用をアウトソースして改善していきたい</li>
                                <li>既存システムが古くて使いづらい。改修すべきか作り直すべきか分からない。</li>
                                <li>AndroidアプリをPWAとして作り直したい</li>
                                <li>オンプレサーバーをクラウドサーバーに移行したい</li>
                                <li>インドネシア法人にリモートワーク制度を導入したい</li>
                                <li>社員の勤怠をより可視化したい</li>
                                <li>従業員（オフィスワーカー）の生産性を向上したい</li>
                                <li>インドネシア語でSEO対策したい</li>
                                <li>FacebookやInstagramを活用して集客したい</li>
                                <li>Webサイトやアプリにセキュリティ脆弱性がないか検査したい。</li>                                
                            </ul>
                            <a href="contact.php" class="btn btn-contact-us-black" style="width: auto">お問い合わせ</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <?php include 'footer.php';?>
        <script>
        $(function() {
            $('#vacancy').on('shown.bs.collapse', function(e) {
                var offset = $(this).find('.collapse.in').prev('.panel-heading');
                if (offset) {
                    $('html,body').animate({
                        scrollTop: $(offset).offset().top - 10
                    }, 500);
                }
            });
        });
        </script>
    </div>
</body>

</html>