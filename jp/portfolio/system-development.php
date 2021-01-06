<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description"
        content="LOGIQUEのシステム構築・開発実績を紹介。LOGIQUEはジャカルタのWeb制作・システム開発会社。様々なITシステム開発を行ってきました。CMS、CRM、E-Commerce、自動車関係管理システムの開発など多く経験しています。">
    <meta name="keywords" content="WEBサイト制作, ホームページ制作, ウェブシステム構築, デザイン, 印刷, コーポレートサイト, ランディングページ">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="LOGIQUEのシステム開発実績">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/jp/portfolio.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/portfolio.png">
    <meta property="og:description"
        content="LOGIQUEのシステム構築実績を紹介。ホームページ制作、Webシステム構築、モバイルアプリ開発で豊富な実績があります。">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>ITシステム開発実績 | LOGIQUEデジタルインドネシア</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet"> 
    
    <!-- <link href="/css/style.css" rel="stylesheet"> -->
    <link href="/css/sidebar-update.css" rel="stylesheet"> 
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="/css/style-revamp.css" rel="stylesheet">
    <link href="/css/style-portfolio.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet">
    <link href="/css/jpstyle.css" rel="stylesheet">
</head>

<body style="overflow-x: hidden">
    <div class="wrapper wrapper--update-design wrapper--update-design-font --jp">

        <!-- NAVIGATION -->
        <button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle" data-toggle="collapse"
            data-target="#myNavbar">
            <span class="icon-bar first"></span>
            <span class="icon-bar second"></span>
            <span class="icon-bar third"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="backdrop-test"></div>
            <div class="logique-nav logique-nav--update in-jp">
                <div class="margin-for-nav">
                    <div class="text-center">
                        <a href="/jp/">
                            <div class="img-home"></div>
                            Home
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="/jp/logique.php">
                            <div class="img-about"></div>
                            会社概要
                        </a>
                    </div>
                    <div class="text-center active">
                        <a href="/jp/portfolio.php">
                            <div class="img-portfolio"></div>
                            制作実績
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="/jp/services.php">
                            <div class="img-services"></div>
                            サービス
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="/jp/product.php">
                            <div class="img-product"></div>
                            プロダクト
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="/career/">
                            <div class="img-career"></div>
                            採用/<br>パートナー
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="/jp/contact.php">
                            <div class="img-contact"></div>
                            お問い合わせ
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="https://www.logique.co.id/blog/ja" target="_blank" rel="noreferrer">
                            <div class="img-blog"></div>
                            Blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- NAVIGATION -->

        <!-- <div id="bgImg" class="others"><div class="img"></div></div> -->
        <!-- <div class="contain-video">
            <video poster="../img/video-img.png" id="bgvid" playsinline autoplay muted loop>
                <source src="../img/12377093.mp4" type="video/mp4">
            </video>
        </div>
        <div class="bg-white-opacity"></div> -->

        <?php 
            $lang = 'jp';
            $en_link = '/en/portfolio/system-development.php';
            $id_link = '/portofolio/system-development.php';
            $jp_link = '#';
            include($_SERVER['DOCUMENT_ROOT'].'/jp/header.php'); 
        ?>

        <style>
        html {
            scroll-behavior: smooth;
        }

        .addition-desc {
            font-size: 12px
        }

        .grey-clr {
            color: grey
        }

        .circle-list>li {
            padding-bottom: 7px
        }

        .modal-backdrop {
            display: none !important
        }
        </style>

        <div class="portfolio-update content-wrapper__">

            <section class="--top portfolio__banner portfolio__banner-detail">
                <div class="container__" style="padding:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="index.php"><span itemprop="name">ホーム</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/jp/portfolio.php"
                                        itemprop="item"><span itemprop="name">&nbsp;制作・開発実績</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;システム開発実績</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container__ banner-detail__content">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-7">
                            <div class="title"><h1>システム開発実績</h1></div>
                            <p class="title__description" style="margin-left: 0;"><strong>LOGIQUE</strong>が開発したシステムを紹介します。インドネシアで様々なシステム開発・運用を行ってきました。個別にお問い合わせいただければ、詳細をご紹介できる案件もございます。Automotive産業向けシステム開発、E-Commerceシステム開発、保険、PHP開発、Javascriptフレームワーク、PWAなどが得意な領域を表すキーワードになります。</p>
                            <img src="/img/portfolio/bg-portfolio-detail-mobile.png" alt="" class="img-responsive visible-md visible-lg">
                        </div>
                    </div>
                </div>
            </section>

            <section id="portfolio_sys" class="portfolio-update__content">
                <div class="container__">
                    <h2 class="text-center">System Development</h2>
                    <div class="content__wrapper">
                        <div class="flex__row">
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <img src="/img/portfolio/update/sys-jba.png" alt="">
                                </div>
                                <h3>JBA Indonesia; Online Car Auction System Development</h3>
                                <p>モバイルアプリ開発 (検品＆品質スコアリングシステム).</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <img src="/img/portfolio/update/sys-assa.png" alt="">
                                </div>
                                <h3>Assa <br>System Development</h3>
                            </div>
                            <div class="clearfix visible-sm"></div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <img src="/img/portfolio/update/sys-zuttoride.png" alt="">
                                </div>
                                <h3>ZuttoRide Indonesia; CRM DevOps</h3>
                                <p>ロードサービス事業者向けWEB-CRMシステム開発.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <img src="/img/portfolio/update/sys-sinarmas.png" alt="">
                                </div>
                                <h3>シナールマスランド</h3>
                                <p>不動産開発業者向け採用管理システム構築.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop1" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>会員向けポイント管理＆交換システム構築.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop2" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>マルチレベルE-Commerceシステム開発.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop3" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>自動車＆バイクオークションマネジメント基幹システム構築.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop4" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>モバイルアプリ開発（オークション入札アンドロイドアプリ）.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop5" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>モバイルアプリ開発（検品＆品質スコアリングシステム）.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop6" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>ロードサービス事業者向けWEB-CRMシステム開発.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop7" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>バイヤーズMypage機能の開発、CRMシステム開発.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop8" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>出版社向け広告台割管理システム.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop9" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>中古車マーケットプレイス構築、ディーラー向けアプリ開発、など.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop10" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>デジタルマップシステム開発.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop11" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>C2C自動車オークションシステム開発.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop12" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>公共団体向けセキュアなCMS開発.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop13" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>デジタルBook販売WEBサービス向けCMS構築.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop14" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>求人・求職マッチングポータルWEBの構築.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                <div class="item__img">
                                    <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                    <div class="portfolio-sec-system__see-details">
                                        <a data-toggle="modal" data-target="#pop15" href="#">
                                            <h3>View Details</h3>
                                            <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                <p>金融機関向け採用管理システムの構築.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <div class="container__">
                <div class="text-center our-portfolio">
                    <p class="title__description" style="margin-bottom: 15px; margin-top: 25px;">Contact us and we will
                        present to
                        you our previous portfolios
                        regarding development,
                        maintenance and operation. You can contact us from here:</p>
                    <a href="contact.php" class="btn btn-contact-us-black"
                        onclick="ga('send', 'event', 'Button-Hubungi-Logique-Portofolio', 'Action-Click', 'Button-Hubungi-Logique-Portofolio-Label');">
                        Contact us for LOGIQUE's portfolio
                    </a>
                </div>
            </div> -->

            <?php include './portfolio-links.php';?>

            <!-- modal popup -->
            <!-- modal 1 -->
            <div id="pop1" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>会員向けポイント管理＆交換システム構築.</h4>
                            <hr>
                            <p>ポイント付与＆交換をキーとしたE-Commerceを構築。マルチドメインで複数店舗を管理可能な高機能基幹システムをスクラッチ開発。クライアント企業の従業員を対象に付与されたポイントを管理、E-Commerceから利用できるクライアント用サブシステム、サプライヤー向けサブシステム、クライアント企業の管理を行うサブシステムなどからなるシステムを構築。<br><br>
                                E-Commerce、決済、在庫管理、配送管理、承認ワークフロー、マルチドメイン。約6ヶ月かけてLAMP環境にてスクラッチ開発を行った。24時間止められないシステムであるためAWSにて冗長性の高い構成を組んでいる。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 2 -->
            <div id="pop2" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>マルチレベルE-Commerceシステム開発.</h4>
                            <hr>
                            <p>マルチレベルマーケティング会社が代理店経由の販売をコントロール可能なE-Commerceシステムの開発。Admin向け管理、ディストリビュータ管理、顧客管理の３つのモジュールでなる大規模ECサイトの構築。E-Commerce、決済（Virtualアカウント、クレジットカード）、商品在庫管理、請求管理、など複雑なシステムであったが約6ヶ月で開発した。.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 3 -->
            <div id="pop3" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>自動車＆バイクオークションマネジメント基幹システム構築.</h4>
                            <hr>
                            <p>オークション業務の基幹システムを構築。オークションコンダクターから在庫管理、オンラインオークションまで様々なシステムを開発＆統合してきた。ユーザーはWEBサイトからオークションに出品される車両情報を閲覧することができ、オンサイトでもオンラインでもオークション入札が可能。在庫管理や検品＆グレード管理、オークション、請求管理などが複雑に関連している、またトラフィックも多いことから難易度の高いシステムであるが、安定稼働を実現している。.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 4 -->
            <div id="pop4" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>モバイルアプリ開発（オークション入札アンドロイドアプリ）.</h4>
                            <hr>
                            <p>車オークション会社向けにAndroidのオークション入札モバイルアプリの開発を行った。約600ユーザーが同時接続＆入札するシステムなので高いRealtime性とセキュリティ堅牢性、シンプルで使いやすいUIなどが求められたが、node.jsによる開発で実現した。ユーザー特定や請求情報など周辺機能との繋ぎ込み開発も。AWSサーバーの構成デザインやハイパフォーマンスなAPIの開発なども含めて全て開発し、安定稼働している.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 5 -->
            <div id="pop5" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>モバイルアプリ開発（検品＆品質スコアリングシステム）.</h4>
                            <hr>
                            <p>900もの検査項目を網羅して、検査受け入れ/スコアリングを検査官の熟練度に依存せず業務可能にするモAndroidモバイル・アプリケーションを開発した。車、バイクごとに検査アプリを開発、複数の車のタイプに対応している（検査項目が異なる）。入力された検査結果に応じて自動で該当車両のスコアリングを行い、検査証を印刷することを実現した。検査質問項目数はかなり多いが、中程度のスペックのスマホで十分にサクサク動くように軽量化に努めた。バックエンドとの連携APIなども全て開発。.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 6 -->
            <div id="pop6" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>ロードサービス事業者向けWEB-CRMシステム開発.</h4>
                            <hr>
                            <p>バイクのロードサービス、バイク保険の会員向けCRMシステムを開発・運用している。会員に会員証を発行するところから、会員自身がWEBから更新し、決済を行えるところまでシステム化。インドネシアの有力な決済代行システムと接続した。長期間に渡って機能追加、システム改善を継続している。AWSサーバーで運用.
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 7 -->
            <div id="pop7" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>バイヤーズMypage機能の開発、CRMシステム開発.</h4>
                            <hr>
                            <p>オークションに参加するバイヤーにRewardポイントを付与している。このポイントを管理、特典に交換すること等ができるマイページ機能を開発。これに合わせ、ログイン後、参加したオークション履歴や請求情報も確認できるように実装した。LAMP環境でシステム構築を行った。付与されるポイントなどは基幹システム連携し動的にデータ連携される。短期間で不具合のないシステムの開発に成功した。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 8 -->
            <div id="pop8" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>出版社向け広告台割管理システム.</h4>
                            <hr>
                            <p>東南アジア一帯で、またハワイで、フリーペーパーを発行する出版社向けに、コンテンツ（特に広告コンテンツ）の台割管理システムを構築した。他システムから広告契約一覧データを取り込む。それをドラッグ＆ドロップで各ページのレイアウトに視覚的に配置し、漏れや重複がないように容易に管理することを可能にした。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 9 -->
            <div id="pop9" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>中古車マーケットプレイス構築、ディーラー向けアプリ開発、など.</h4>
                            <hr>
                            <p>中古車ディーラーと購入者をマッチングする中古車マーケットプレイスの構築を3ヶ月で行い。その後、プレミアムディーラー機能、ディーラー向け管理モバイル・アプリケーションなど、様々な追加機能を開発＆運用している。毎日3万を超えるユーザーに使われているサービスだが適切に負荷分散・冗長化されたAWSで運用していて安定稼働を実現している。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 10 -->
            <div id="pop10" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>デジタルマップシステム開発.</h4>
                            <hr>
                            <p>デジタルマップを開発。ASEANの9カ国の地図上に各地でのインフラ開発プロジェクトをマッピング、検索やフィルターをかけて地図上でプロジェクト状況を確認できるようにした。Google
                                mapを活用。</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 11 -->
            <div id="pop11" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>C2C自動車オークションシステム開発.</h4>
                            <hr>
                            <p>自動車のC2Cオークション事業を行うスタートアップのシステム・モバイルアプリを短期集中開発。Ajail型でスピード開発に成功。ロゴの制作から基幹システム構築までトータルにサポート。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 12 -->
            <div id="pop12" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>公共団体向けセキュアなCMS開発.</h4>
                            <hr>
                            <p>公共団体向けにセキュアなCMSの構築。インドネシアの公共団体がセキュアなCMSを構築する必要があった。管理ユーザー数が多いため、ユーザー管理や権限管理に工夫を凝らし、セキュリティ脆弱性を潰したシステムを構築した。再構築前はWordpress上で動いていたが、Laravelフレームワークを使いスクラッチ開発を行った。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 13 -->
            <div id="pop13" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>デジタルBook販売WEBサービス向けCMS構築.</h4>
                            <hr>
                            <p>インドネシアでE-Book販売をしている会社のオンラインBook販売サイトのCMSを構築した。販売商品の管理＆更新が容易になり販売数の向上に寄与した。キャンペーンページのデザイン制作とCMSへのインテグレーションなども複数回行った。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 14 -->
            <div id="pop14" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>求人・求職マッチングポータルWEBの構築.</h4>
                            <hr>
                            <p>人材紹介会社向けにJOBポータルWEBの構築をした。求人情報を掲載し、求職者からの応募を受け付けるWEBサイト。求職者はWEBサイトに会員登録することで直接該当ポジションに応募することができる。PHPフレームワークでスクラッチ開発した。開発期間は約3ヶ月。デザインから構築まで全てを行った。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 15 -->
            <div id="pop15" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>金融機関向け採用管理システムの構築.</h4>
                            <hr>
                            <p>金融機関向けに採用管理WEBシステムを構築した。採用サイトの制作に合わせ、バックエンドで面談管理や承認フローを管理するシステムを構築した。納品前に外部のセキュリティ診断会社と協業し、セキュリティ脆弱性検査を行うなど個人情報を扱う金融機関のセキュリティ基準に見合うシステムを構築した。PHPフレームワークを使いスクラッチ開発で、約3ヶ月間。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal popup -->

        </div>

    </div>   
    <?php include '../footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js">
    </script>
    <script>
    $('.same-height').matchHeight();
    $('.col-md-4.col-xs-6').matchHeight();


    $('.slider-other-client-container').slick({
        dots: false,
        infinite: true,
        speed: 300,

        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    // dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    adaptiveHeight: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: true
                }
            }
        ]
    });
    $('.mobile-app-container').slick({
        dots: true,
        infinite: false,
        speed: 300,
        arrows: false,
        arrows: false,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        slickSetOption: true,
    });
    $('#PWA .btn-more-portfolio').on('click', function() {
        $('.mobile-app-container').resize();
    });
    </script>
</body>

</html>