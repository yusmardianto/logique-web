<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description"
        content="LOGIQUEのWebサイト・ホームページ制作実績を紹介。LOGIQUEはジャカルタのWeb制作・システム開発会社。インドネシアで効果のでる多くのWebを制作運用してきました。インドネシア語、英語、日本語のWebを制作運用可能です。">
    <meta name="keywords" content="WEBサイト制作, ホームページ制作, ウェブシステム構築, デザイン, 印刷, コーポレートサイト, ランディングページ">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="LOGIQUEのWebサイト制作実績">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/jp/portfolio.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/portfolio.png">
    <meta property="og:description"
        content="LOGIQUEのWebサイト制作実績を紹介。ホームページ制作、Webデザイン、Webシステム開発で豊富な実績があります。">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="canonical" href="https://www.logique.co.id/jp/portfolio/website.php"/>
    <title>Web・ホームページ制作実績 | LOGIQUEデジタルインドネシア</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://prod.purechatcdn.com">
    <link rel="preconnect" href="https://app.purechat.com">
    

    <link rel="preload" href="/fonts/Novecentosanswide-Medium.otf" as="font" crossorigin>
    <link rel="preload" href="/fonts/M_PLUS_1p/MPLUS1p-Bold.ttf" as="font" crossorigin>
    <link rel="preload" href="/fonts/M_PLUS_1p/MPLUS1p-Regular.ttf" as="font" crossorigin>


    <!-- font -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet"> -->

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet"> 
    
    <!-- <link href="/css/style.css" rel="stylesheet"> -->
    <link href="/css/sidebar-update.css" rel="stylesheet"> 
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="/css/style-revamp.css" rel="stylesheet">
    <link href="/css/style-portfolio.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet"> -->
    <link href="/css/jpstyle.css" rel="stylesheet">
</head>

<body style="overflow-x: hidden">
    <div class="wrapper wrapper--update-design wrapper--update-design-font --jp">

        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'portfolio';
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
            $en_link = '/en/portfolio/website.php';
            $id_link = '/portofolio/website.php';
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
                                        href="/index.php"><span itemprop="name">ホーム</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/jp/portfolio.php"
                                        itemprop="item"><span itemprop="name">&nbsp;制作・開発実績</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;Web制作実績</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container__ banner-detail__content">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-7">
                            <div class="title"><h1>LOGIQUEのWeb制作実績</h1></div>
                            <p class="title__description" style="margin-left: 0;">幾つかの公開可能なWeb制作実績を掲載します。制作した後のRevampやページ追加制作なども多く行っていますので、制作数としてはここに掲載しているものよりもずっと多くなります。より詳細な情報をお求めの場合はお気軽にお問い合わせください。</p>
                            <picture>
                                <source srcset="/img/portfolio/bg-portfolio-detail-website.webp" type="image/webp">
                                <img src="/img/portfolio/bg-portfolio-detail-website.png" alt="" class="img-responsive visible-md visible-lg">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>

            <section id="portofolio_website" class="portfolio-update__content">
                <div class="container__">
                    <div class="content__wrapper">
                        <div class="flex__row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="#" data-toggle="modal" data-target="#modal_aia" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-aia-premiere.jpg" class="img-responsive" alt="AIA Premier Academy">
                                    <h3>AIA Premier Academy</h3>
                                    <ul class="list-unstyled">
                                        <li>Webページ制作 (デザイン | コーディング | ホスティング)</li>
                                        <li>モバイル最適化, キャンペーンページ, 保険</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="#" data-toggle="modal" data-target="#modal_panin" rel="noreferrer">
                                    <img src="/img/portfolio/update/panin.jpg" class="img-responsive" alt="Panin Life Dai-ichi">
                                    <h3>Panin Life Dai-ichi</h3>
                                    <ul class="list-unstyled">
                                        <li>保険EC開発制作 (デザイン | プログラミング | CMS | 決済連携）</li>
                                        <li>CMS, 保険Eコマース, 金融, 保険</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="#" data-toggle="modal" data-target="#modal_jba" rel="noreferrer">
                                    <img src="/img/portfolio/update/jba.jpg" class="img-responsive" alt="">
                                    <h3>JBA INDONESIA</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB構築＆運用 (デザイン | CMS | システム構築｜運用 | AWS運用)</li>
                                        <li>オンラインオークション,高アクセスWEB,DB-WEB,セキュアなWEB,自動車,バイク,金融</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.jtrustbank.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/j-trust.jpg" class="img-responsive" alt="">
                                    <h3>JTrust Bank (Re-design)</h3>
                                    <ul class="list-unstyled">
                                        <li>キャンペーンページ制作 (デザイン | コーディング | CMS開発)</li>
                                        <li>多言語,モバイル対応, キャンペーンページ,CMS,金融,銀行</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://mobirent.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/mobirent.jpg" class="img-responsive" alt="">
                                    <h3>Mobirent</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB構築＆運用 (デザイン | CMS |コンテンツ制作 | 運用)</li>
                                        <li>CMS,ポータル, Mobile,不動産,WEBサービス</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.jnto.or.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/jnto.jpg" class="img-responsive" alt="">
                                    <h3>JNTO Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>HTML/CSSコーディング (コーディング)</li>
                                        <li>モバイル最適化, キャンペーンページ<</li>
                                    </ul>
                                </a>
                            </div>
                            
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://jcinema2018.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-film.jpg" class="img-responsive" alt="Film Festival">
                                    <h3>Film Festival</h3>
                                    <ul class="list-unstyled">
                                        <li>ランディングページ制作 (デザイン | マークアップ)</li>
                                        <li>モバイル最適化, 多言語, イベント</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.otomart.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-otomart.jpg" class="img-responsive" alt="OTOmart (used-car market place)">
                                    <h3>OTOmart (used-car market place)</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB構築＆運用 (デザイン | CMS | システム構築｜コンテンツ制作 | 運用 | AWS運用)</li>
                                        <li>CMS,マーケットプレイス,会員WEB,Mobile, WEBサービス,車</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://jaif.asean.org/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jaif.jpg" class="img-responsive" alt="Japan Asean Integration Fund">
                                    <h3>Japan Asean Integration Fund</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB制作＆運用 (デザイン | コーディング | 運用)</li>
                                        <li>モバイル,セキュアなWEB,公共</li>
                                    </ul>
                                </a>
                            </div>
                            
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-shinoken.jpg" class="img-responsive" alt="Shinoken Asset Management">
                                    <h3>Shinoken Asset Management</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB制作 (デザイン | コーディング | AWS運用)</li>
                                        <li>多言語,モバイル対応,コーポレートWEB,AWS,不動産投資</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://sentraya.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-sentraya.jpg" class="img-responsive" alt="Menara Sentraya">
                                    <h3>Menara Sentraya</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBサイト制作 (デザイン| コーディング |CMS)</li>
                                        <li>モバイル最適化, CMS構築, 不動産</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://bisnissaya.com" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-bisnissaya.jpg" class="img-responsive" alt="BisnisSaya.com (MLM E-Commerce)">
                                    <h3>BisnisSaya.com (MLM E-Commerce)</h3>
                                    <ul class="list-unstyled">
                                        <li>ECサイト構築 (デザイン| EC構築 | CMS構築 | 運用)</li>
                                        <li>EC,CMS,決済連携,マルチレベルマーケティング</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://frangipanibalispa.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-frangipani-amp.jpg" class="img-responsive" alt="Frangipani">
                                    <h3>Frangipani</h3>
                                    <ul class="list-unstyled">
                                        <li>AMP制作 (デザイン | AMPプログラミング）</li>
                                        <li>AMP, モバイル,高速ページ,バリ島SPA</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://warasahalal.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-warasa.jpg" class="img-responsive" alt="WARASA">
                                    <h3>WARASA</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBリニューアル制作 (デザイン| コーディング | AWS)</li>
                                        <li>モバイル最適化, 多言語, 食品</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://hoyu.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-hoyu.jpg" class="img-responsive" alt="Hoyu Indonesia">
                                    <h3>Hoyu Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBサイト制作 (デザイン | コーディング |運用)</li>
                                        <li>多言語,モバイル最適化,製造販売,美容</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-arf.jpg" class="img-responsive" alt="ASEAN (ARF)">
                                    <h3>ASEAN (ARF)</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBサイト制作 (デザイン| コーディング |CMS)</li>
                                        <li>モバイル最適化, Wordpress, 公共</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-caroline.jpg" class="img-responsive" alt="Caroline">
                                    <h3>Caroline</h3>
                                    <ul class="list-unstyled">
                                        <li>車マーケットプレイス開発運用 (デザイン | プログラミング | システム開発）</li>
                                        <li>車売買マッチングWEB, 車Eコマース, WEBサービス</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://jualbeliweb.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jualbeliweb.jpg" class="img-responsive" alt="JualBeliWEB.id (Website market place)">
                                    <h3>JualBeliWEB.id (Website market place)</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB構築＆運用 (デザイン | CMS | システム構築｜コンテンツ制作 | 運用)</li>
                                        <li>CMS,マーケットプレイス,DB,Mobile,セキュアなWEB,WEBサービス</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-ajapan.jpg" class="img-responsive" alt="aJapan Campaign Page">
                                    <h3>aJapan Campaign Page</h3>
                                    <ul class="list-unstyled">
                                        <li>キャンペーンサイト制作＆運用 (デザイン | コーディング | Operation)</li>
                                        <li>多言語,モバイル,キャンペーン</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.jtrustbank.co.id/id/moe" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-moe.jpg" class="img-responsive" alt="JTrust Bank Indonesia">
                                    <h3>JTrust Bank Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>キャンペーンページ制作 (デザイン | コーディング | CMS開発)</li>
                                        <li>多言語,モバイル対応, キャンペーンページ,CMS,金融,銀行</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://frangipanibalispa.com/contact.php" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-frangipani.jpg" class="img-responsive" alt="Frangipani Esthetics Bali">
                                    <h3>Frangipani Esthetics Bali</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBサイト制作 (デザイン | コーディング | 運用)</li>
                                        <li>多言語,モバイル最適化,LPO,A/Bテスト,美容・エステ</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-otosiap.jpg" class="img-responsive" alt="OTO Siap!">
                                    <h3>OTO Siap!</h3>
                                    <ul class="list-unstyled">
                                        <li>ランディングページ制作 (デザイン | コーディング）</li>
                                        <li>キャンペーンページ, モバイル最適化,与信モバイルアプリ,クレジット</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-oto-isuzu.jpg" class="img-responsive" alt="">
                                    <h3></h3>
                                    <ul class="list-unstyled">
                                        <li>ランディングページ制作 (デザイン | コーディング）</li>
                                        <li>ランディングページ, モバイル最適化,車メーカー</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-oto-conc.jpg" class="img-responsive" alt="OTOmart Concierge LP">
                                    <h3>OTOmart Concierge LP</h3>
                                    <ul class="list-unstyled">
                                        <li>ランディングページ制作 (デザイン | コーディング）</li>
                                        <li>キャンペーンページ, モバイル最適化,コンサルティングサービス,四輪</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-oto-garansi.jpg" class="img-responsive" alt="">
                                    <h3></h3>
                                    <ul class="list-unstyled">
                                        <li>保証サービスランディングページ (デザイン | コーディング）</li>
                                        <li>ランディングページ制作, モバイル, 車両保証</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-eccj.jpg" class="img-responsive" alt="ECCJ">
                                    <h3>ECCJ</h3>
                                    <ul class="list-unstyled">
                                        <li>LP制作、申込みフォーム制作 (デザイン | プログラミング)</li>
                                        <li>モバイル最適化, 申込フォーム, イベント</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-sfi.jpg" class="img-responsive" alt="Sumitomo Forestry LP">
                                    <h3>Sumitomo Forestry LP</h3>
                                    <ul class="list-unstyled">
                                        <li>ランディングページ制作 (デザイン | コーディング)</li>
                                        <li>モバイル,キャンペーンページ</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://hajime-indonesia.co.id/about/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-hajime.jpg" class="img-responsive" alt="Hajime Indonesia">
                                    <h3>Hajime Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBサイト制作 (デザイン | コーディング | 運用 | WEBサーバー運用)</li>
                                        <li>多言語,モバイル,AWS,不動産</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://maisonderes.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-mdr.jpg" class="img-responsive" alt="Maison de Res (Condominium Portal)">
                                    <h3>Maison de Res (Condominium Portal)</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB構築＆運用 (デザイン | CMS |コンテンツ制作 | 運用)</li>
                                        <li>CMS,ポータル, Mobile,不動産,WEBサービス</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.zuttoride.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-zutto.jpg" class="img-responsive" alt="ZuttoRide Indonesia">
                                    <h3>ZuttoRide Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBサイト制作 (デザイン | コーディング | 保守 | WEBサーバー運用)</li>
                                        <li>多言語,モバイル,バイクサービス</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://jjs.or.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jjs.jpg" class="img-responsive" alt="Jakarta Japanese School">
                                    <h3>Jakarta Japanese School</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB構築＆運用 (デザイン | Coding | Wordpress | 運用)</li>
                                        <li>日本語WEB,ブログ,モバイル最適化,願書受付,学校</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://cikarang-japanese-school.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-cjs.jpg" class="img-responsive" alt="Cikarang Japanese School">
                                    <h3>Cikarang Japanese School</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB構築＆運用 (デザイン | Coding | Wordpress | AWS運用)</li>
                                        <li>日本語WEB,ブログ,モバイル最適化,願書受付,学校</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.60jpid.com/symposium.php" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-symposium.jpg" class="img-responsive" alt="Symposium Application LP">
                                    <h3>Symposium Application LP</h3>
                                    <ul class="list-unstyled">
                                        <li>参加申込フォーム (デザイン | PHPフォーム)</li>
                                        <li>多言語,モバイル, 申込フォーム開発,公共</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.ikeuchi.id/lp/eng/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-ikeuchi.jpg" class="img-responsive" alt="Ikeuchi Indonesia">
                                    <h3>Ikeuchi Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBサイト制作 (デザイン | コーディング)</li>
                                        <li>多言語,モバイル,製造業</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.moresco.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-moresco.jpg" class="img-responsive" alt="MORESCO INDONESIA">
                                    <h3>MORESCO INDONESIA</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBサイト制作 (デザイン | コーディング | 保守 | WEBサーバー運用)</li>
                                        <li>多言語,モバイル,製造業</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://trendpot-recruit.asia/index.php" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-trendpot.jpg" alt="Digital Marketing Indonesia" class="img-responsive center-block">
                                    <h3>TRENDPOT</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB制作＆運用 (デザイン | コーディング | 運用)</li>
                                        <li>モバイル,セキュアなWEB,公共</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.digitalmarketingindonesia.co.id/index_id.php" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-dmi.jpg" alt="Digital Marketing Indonesia" class="img-responsive center-block">
                                    <h3>Digital Marketing Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB制作 (デザイン | コーディング)</li>
                                        <li>多言語,モバイル最適化,ITサービス</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-salon-de-res.jpg" alt="Salon De Res" class="img-responsive center-block">
                                    <h3>Salon De Res</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB制作 (デザイン | コーディング)</li>
                                        <li>モバイル最適化,多言語,美容</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.kumomiland.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-kumomiland.jpg" alt="KUMOMI LAND INDONESIA"
                                        class="img-responsive center-block">
                                    <h3>KUMOMI LAND INDONESIA</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB制作 (デザイン | コーディング | 保守)</li>
                                        <li>モバイル,多言語,Wordpress,ブログ,不動産</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://4dentist.jp/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-4dentist.jpg" class="img-responsive" alt="4Dentist.jp">
                                    <h3>4Dentist.jp (Dentist Portal)</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB構築＆運用 (デザイン | CMS | 運用)</li>
                                        <li>Wordpress,モバイル最適化,会員専用Web,医療</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://omc.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-omc.jpg" class="img-responsive" alt="Onitsuka Management Consulting">
                                    <h3>Onitsuka Management Consulting</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBリデザイン(デザイン | コーディング)</li>
                                        <li>多言語,モバイル,AWS,コンサルティング,会計税務</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://j-golfacademy.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-golfjkt.jpg" class="img-responsive" alt="Jakarta Golf Academy">
                                    <h3>Jakarta Golf Academy</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBサイト制作 (デザイン| コーディング |運用)</li>
                                        <li>モバイル最適化,オンラインブッキング,スポーツ</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.60jpid.com/music-festival.php" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-music-festival.jpg" class="img-responsive" alt="Music Festival Landing Page">
                                    <h3>Music Festival Landing Page</h3>
                                    <ul class="list-unstyled">
                                        <li>ランディングページ制作 (デザイン | マークアップ | 広告)</li>
                                        <li>モバイル最適化, 多言語, イベント</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://promokreditbprks.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-bprks.jpg" class="img-responsive" alt="BPR KS">
                                    <h3>BPR KS</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB再制作 & 改善ワーク(デザイン | コーディング | コンテンツ制作 | 運用)</li>
                                        <li>CMS, モバイル, セキュアなWEB, 金融, 自動車ローン</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.vipplaza.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-vipplaza.jpg" class="img-responsive" alt="VIP Plaza">
                                    <h3>VIP Plaza</h3>
                                    <ul class="list-unstyled">
                                        <li>スマホページ再制作 (PWAとして再開発)</li>
                                        <li>モバイル, Eコマース</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://opuspark.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-opus-park.jpg" class="img-responsive" alt="Opus Park">
                                    <h3>Opus Park</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBリニューアル制作 (PDCA | SEO | AWS)</li>
                                        <li>モバイル最適化, O2O, 不動産</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://nlecnihongo.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-nlec.jpg" class="img-responsive" alt="NLEC">
                                    <h3>NLEC</h3>
                                    <ul class="list-unstyled">
                                        <li>EラーニングWEB開発 (デザイン | CMS | PWA開発）</li>
                                        <li>システム開発, PWA開発, モバイル最適化,Eラーニング,教育</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-jfe.jpg" class="img-responsive" alt="JFE">
                                    <h3>JFE</h3>
                                    <ul class="list-unstyled">
                                        <li>コーポレートWEB制作 (デザイン | コーディング）</li>
                                        <li>レスポンシブ制作, 多言語WEB, コーポレート動画制作, 鉄鋼商社</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.jjs.or.id/50thanniversary" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jjs50.jpg" class="img-responsive" alt="JJS 50 years special LP">
                                    <h3>JJS 50 years special LP</h3>
                                    <ul class="list-unstyled">
                                        <li>LP制作（Bootstrap | コンテンツ企画）</li>
                                        <li>LP, スマホ最適化,教育, スクール</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.jba.co.id/id/hasil-harga-lelang" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jba-hasil-lelang.jpg" class="img-responsive" alt="JBA Hasil Lelang">
                                    <h3>JBA Hasil Lelang</h3>
                                    <ul class="list-unstyled">
                                        <li>AMP制作（AMP | DB連動ダイナミックページ）</li>
                                        <li>AMP, モバイルSEO,オークション</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://webdev-id.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-wdi.jpg" class="img-responsive" alt="WDI">
                                    <h3>WDI</h3>
                                    <ul class="list-unstyled">
                                        <li>クリエイターズマーケットプレイス開発（デザイン制作 | WEBシステム開発 | セキュリティアセスメント）</li>
                                        <li>WEBシステム, 検索システム,スマホ最適, マーケットプレイス</li>
                                    </ul>
                                </a>
                            </div>           

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://lifenesia.com" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-lifenesia.jpg" class="img-responsive" alt="Lifenesia">
                                    <h3>Lifenesia</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBホスティング (コーディング | CMSフィッティング)</li>
                                        <li>モバイル最適化, CMS, ニュースポータル</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.jnto.or.id/berpetualangdihokkaido" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jnto-campaign.jpg" class="img-responsive" alt="JNTO Campaign Page">
                                    <h3>JNTO Campaign Page</h3>
                                    <ul class="list-unstyled">
                                        <li>HTML/CSSコーディング (コーディング)</li>
                                        <li>モバイル最適化, キャンペーンページ</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-jba-redesign.jpg" class="img-responsive" alt="JBA Re-design">
                                    <h3>JBA Re-design</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB構築＆運用 (デザイン | CMS | システム構築｜運用 | AWS運用)</li>
                                        <li>オンラインオークション,高アクセスWEB,DB-WEB,セキュアなWEB,自動車,バイク,金融</li>
                                    </ul>
                                </div>
                            </div>                            

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.60jpid.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-60jpid.jpg" class="img-responsive" alt="60th Anniversary Japan-Indonesia">
                                    <h3>60<sup>th</sup> Anniversary Japan-Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB制作＆運用 (デザイン | コーディング | コンテンツ制作 | 運用)</li>
                                        <li>CMS, multi-bahasa, Mobile, Keamanan WEB, Publik</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-wantjp.jpg" class="img-responsive" alt="Want.jp">
                                    <h3>Want.jp</h3>
                                    <ul class="list-unstyled">
                                        <li>Eコマース (PWA | ReactJS | NodeJS)</li>
                                        <li>モバイル最適化EC, 越境EC</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://banzaihobby.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-banzai-hobby.jpg" class="img-responsive" alt="Banzai Hobby">
                                    <h3>Banzai Hobby</h3>
                                    <ul class="list-unstyled">
                                        <li>WEBサーバー＆データ移行 (移行 | ホスティング | AWS)</li>
                                        <li>Eコマース, Zenカート</li>
                                    </ul>
                                </a>
                            </div>    

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://jjc.or.id/hojin/annai/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jjc-hojin.jpg" class="img-responsive" alt="JJC Hojin">
                                    <h3>JJC Hojin</h3>
                                    <ul class="list-unstyled">
                                        <li>Web再制作（デザイン制作 | CMS | コーディング）</li>
                                        <li>WordPress, スマホ最適, 会員専用Web</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://jjc.or.id/kojin/tosho/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jjc-kojin.jpg" class="img-responsive" alt="JJC Kojin">
                                    <h3>JJC Kojin</h3>
                                    <ul class="list-unstyled">
                                        <li>Web再制作（デザイン制作 | CMS | コーディング）</li>
                                        <li>WordPress, スマホ最適化, クラブ会員Web, 会議室予約</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.jba.co.id/id/poin-rewards" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jba-lp.jpg" class="img-responsive" alt="JBA LP">
                                    <h3>JBA LP</h3>
                                    <ul class="list-unstyled">
                                        <li>Webページ制作 (デザイン | コーディング | CMS)</li>
                                        <li>モバイル最適化, CMS, キャンペーンページ</li>
                                    </ul>
                                </a>
                            </div>  

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://prolinefinance.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-proline.jpg" class="img-responsive" alt="PROLINE FINANCE">
                                    <h3>PROLINE FINANCE</h3>
                                    <ul class="list-unstyled">
                                        <li>CMS WEBサイト制作 (デザイン | コーディング | CMS)</li>
                                        <li>CMS,モバイル対応,金融</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://aiaberbagi.com" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-aia.jpg" class="img-responsive" alt="AIA">
                                    <h3>AIA</h3>
                                    <ul class="list-unstyled">
                                        <li>Webページ制作 (コーディング | ホスティング)</li>
                                        <li>モバイル最適化, キャンペーンページ, 保険</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.kbrprime.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-kbr-id.jpg" class="img-responsive" alt="KBR_ID">
                                    <h3>KBR</h3>
                                    <ul class="list-unstyled">
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </a>
                            </div>        

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://unitedconcepts.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-royal-amanda.jpg" class="img-responsive" alt="Royal Armada">
                                    <h3>Royal Armada</h3>
                                    <ul class="list-unstyled">
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://premium-garansi.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-premiumgaransi.jpg" class="img-responsive" alt="Premium Garansi">
                                    <h3>Premium-Garansi.co.id</h3>
                                    <ul class="list-unstyled">
                                        <li>Webページ制作 (コーディング | CMS)</li>
                                        <li>モバイル最適化, CMS, コーポレートWeb</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-ligohome.jpg" class="img-responsive" alt="LIGO Home">
                                    <h3>LIGO-Home</h3>
                                    <ul class="list-unstyled">
                                        <li>Webページ制作 (デザイン | コーディング | CMS)</li>
                                        <li>モバイル最適化, CMS, コーポレートWeb</li>
                                    </ul>
                                </div>
                            </div>   

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.otomart.id/oto-garansi.html" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-otogaransi.jpg" class="img-responsive" alt="OTO-Garansi Campaign Page">
                                    <h3>OTO-Garansi Campaign Page</h3>
                                    <ul class="list-unstyled">
                                        <li>Webページ制作 (デザイン | コーディング)</li>
                                        <li>モバイル最適化, CMS, キャンペーンページ</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://timscorp.co.id/en" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-timscorp.jpg" class="img-responsive" alt="Timscorp">
                                    <h3>PT. TOYOTA ENTERPRISE INDONESIA MANAGEMENT SERVICE</h3>
                                    <ul class="list-unstyled">
                                        <li>Web 構築（デザイン制作 | CMS | コーディング）</li>
                                        <li>独自CMS, スマホ最適, カンパニーWeb, 不動産情報Web</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.bambootajur.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-bambootajur.jpg" class="img-responsive" alt="Green Bamboo Terace">
                                    <h3>Green Bamboo Terace</h3>
                                    <ul class="list-unstyled">
                                        <li>Web 再制作（デザイン制作 | CMS | コーディング）</li>
                                        <li>WordPress, スマホ最適, 不動産</li>
                                    </ul>
                                </a>
                            </div>                            

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://hmw-rehab.com/en" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-hmw.jpg" class="img-responsive" alt="HMW Rehabilitation Clinic">
                                    <h3>HMW Rehabilitation Clinic</h3>
                                    <ul class="list-unstyled">
                                        <li>Web 構築（デザイン制作 | CMS | コーディング）</li>
                                        <li>独自CMS, スマホ最適, カンパニーWeb, 医療サービス</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://weeo.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-weeo.jpg" class="img-responsive" alt="Weeo">
                                    <h3>Weeo</h3>
                                    <ul class="list-unstyled">
                                        <li>Web制作（デザイン制作 | コーディング | 運用）</li>
                                        <li>モバイル最適, サービスWeb, IoTサービス</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://scskidn.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-scsk.jpg" class="img-responsive" alt="SCSK">
                                    <h3>SCSK</h3>
                                    <ul class="list-unstyled">
                                        <li>Web制作（デザイン制作 | コーディング | メンテナンス）</li>
                                        <li>短納期制作, コーポレートWeb, ITサービス</li>
                                    </ul>
                                </a>
                            </div>                            

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://grahamirai.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-graha-mirai.jpg" class="img-responsive" alt="Graha Mirai">
                                    <h3>Graha Mirai</h3>
                                    <ul class="list-unstyled">
                                        <li>Web制作（デザイン制作 | コーディング | 運用）</li>
                                        <li>モバイル最適, サービスWeb, 不動産</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://swara.tunaiku.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-amar-bank.jpg" class="img-responsive" alt="Amar Bank">
                                    <h3>Amar Bank</h3>
                                    <ul class="list-unstyled">
                                        <li>Webリニューアル制作 (デザイン | コーディング | CMS)</li>
                                        <li>Wordpress, コーポレートWeb, 銀行, 金融</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://m-pas.org/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-mpas.jpg" class="img-responsive" alt="MPAS">
                                    <h3>MPAS</h3>
                                    <ul class="list-unstyled">
                                        <li>WebフロントエンドDev (デザイン | コーディング | CMS)</li>
                                        <li>検索Web, CMS, 医療情報</li>
                                    </ul>
                                </a>
                            </div>                            

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-pertamina.jpg" class="img-responsive" alt="Pertamina">
                                    <h3>Pertamina</h3>
                                    <ul class="list-unstyled">
                                        <li>UI/UXデザイン (デザイン | HTML/CSSコーディング)</li>
                                        <li>eラーニング, トレーニング, 資源ビジネス</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://lifenesia.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-lifenesia-bulletin-board.jpg" class="img-responsive" alt="Lifenesia">
                                    <h3>Lifenesia</h3>
                                    <ul class="list-unstyled">
                                        <li>Media 掲示板制作（デザイン制作 | コーディング | ディプロイ）</li>
                                        <li>オンライン掲示板, CtoCサービス, メディア</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://shi-indonesia.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-shi.jpg" class="img-responsive" alt="Sumitomo Heavy">
                                    <h3>Sumitomo Heavy</h3>
                                    <ul class="list-unstyled">
                                        <li>Heavy Industry Web制作 (デザイン｜コーディング | CMS)</li>
                                        <li>モバイル最適化, CMS, コーポレートWeb, 重工業</li>
                                    </ul>
                                </a>
                            </div>  

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-asean-legal.jpg" class="img-responsive" alt="ASEAN Legal">
                                    <h3>ASEAN (Legal)</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Remake Development (Design | Coding | CMS Integration)</li>
                                        <li>Public & Private Document Access, Custom Wordpress, International Organisation</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://afcwp.asean.org/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-asean-afcwp.jpg" class="img-responsive" alt="ASEAN Finance">
                                    <h3>ASEAN (Financial)</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Remake Development (Design | Coding | CMS Integration)</li>
                                        <li>Custom Wordpress, Public & Private Document Access, Multi Level Authors, International Organisation</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.tsubame-jltc.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-tsubame-lpk.jpg" class="img-responsive" alt="Tsubame JLTC">
                                    <h3>LPK Tsubame Japanese Learning Center</h3>
                                    <ul class="list-unstyled">
                                        <li>Web改善 (リデザイン｜コーディング | CMS)</li>
                                        <li>モバイル最適化, サービスWeb, 教育</li>
                                    </ul>
                                </a>
                            </div>     

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://wkvetter.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-vetter-bulletin.jpg" class="img-responsive" alt="Vetter Bulletin Board">
                                    <h3>Vetter</h3>
                                    <ul class="list-unstyled">
                                        <li>Web掲示板制作 (デザイン | コーディング | CMS)</li>
                                        <li>掲示板, CMS, コミュニティWeb, メディア, ベトナム</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-kki.jpg" class="img-responsive" alt="KKI New Pages">
                                    <h3>KKI</h3>
                                    <ul class="list-unstyled">
                                        <li>ECサイト構築 (デザイン | コーディング | APIインテグレーション)</li>
                                        <li>配送業者API連携, 配送予約機能, トラッキング, Tiki, Lion Parcel</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://sibad.id/id" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-sibad.jpg" class="img-responsive" alt="Siti Badriah">
                                    <h3>Sibad.id</h3>
                                    <ul class="list-unstyled">
                                        <li>Web再構築（クラウド移行 | 再構築＆改善 | 決済機能構築）</li>
                                        <li>有料会員, サブスクWeb, ファンクラブ運営, エンターテイメント</li>
                                    </ul>
                                </a>
                            </div>      

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-ishida.jpg" class="img-responsive" alt="Ishida">
                                    <h3>Ishida</h3>
                                    <ul class="list-unstyled">
                                        <li>Web構築（デザイン制作 | CMS | コーディング</li>
                                        <li>BtoB, 製品検索Web, 製造業</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-sumitomo-kenki.jpg" class="img-responsive" alt="Sumitomo Kenki">
                                    <h3>Sumitomo Kenki</h3>
                                    <ul class="list-unstyled">
                                        <li>WebフロントエンドDev (コーディング | CMS)</li>
                                        <li>モバイル最適化, CMS, コーポレートWeb, 建機</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-aia-berbagi.jpg" class="img-responsive" alt="AIA Berbagi">
                                    <h3>AIA Berbagi</h3>
                                    <ul class="list-unstyled">
                                        <li>Web制作 (コーディング | API連携)</li>
                                        <li>フォーム開発, マイクロサイト, 保険, CSR</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-aia-conservation.jpg" class="img-responsive" alt="AIA Conservation">
                                    <h3>AIA Conservation</h3>
                                    <ul class="list-unstyled">
                                        <li>Web制作 (デザイン | コーディング)</li>
                                        <li>フォーム開発, マルチユーザージャーニー, マイクロサイト, Adobe Forms, 保険</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://gakken-jakarta.com/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/web-gakken.jpg" class="img-responsive" alt="Gakken Jakata">
                                    <h3>Gakken Jakarta</h3>
                                    <ul class="list-unstyled">
                                        <li>(コーディング | 運用 | サーバー運用）</li>
                                        <li>コーポレート＆サービスWeb、教育</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://indonesea.id/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/web-indonesea.jpg" class="img-responsive" alt="Indonesea">
                                    <h3>Indonesea</h3>
                                    <ul class="list-unstyled">
                                        <li>Web構築（デザイン制作 | CMS | コーディング）</li>
                                        <li>予約管理システム, CMS, レジャー, BtoCサービス</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://www.bambootajur.com/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/web-kbj.jpg" class="img-responsive" alt="Green Bamboo Terrace">
                                    <h3>Green Bamboo Terrace</h3>
                                    <ul class="list-unstyled">
                                        <li>Web制作（デザイン制作 | コーディング | デジタルマーケティング）</li>
                                        <li>コンバージョン獲得, 不動産</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://benefit-one.co.id/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/web-benefit-one.jpg" class="img-responsive" alt="Green Bamboo Terrace">
                                    <h3>Benefit One Website Remake</h3>
                                    <ul class="list-unstyled">
                                        <li>制作（デザイン制作 | CMS | コーディング）</li>
                                        <li>ブログ, スマホ最適, BtoBサービス</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://klikhoreca.com/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/web-klikhoreca.jpg" class="img-responsive" alt="Klikhoreca">
                                    <h3>Klikhoreca</h3>
                                    <ul class="list-unstyled">
                                        <li>ECサイト構築 (デザイン | システム開発 | 決済連携) </li>
                                        <li>PWA開発, NextJSフレームワーク, 小売EC, 日用品食品EC</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <picture>
                                        <source srcset="/img/portfolio/update/web-panin.webp" type="image/webp">
                                        <img src="/img/portfolio/update/web-panin.jpg" class="img-responsive" alt="Panin Dai-ichi">
                                    </picture>
                                    <h3>Panin Dai-ichi</h3>
                                    <ul class="list-unstyled">
                                        <li>保険E-Commerce  (CMS開発 | 動的な保険商品の生成)</li>
                                        <li>Laravel開発, 保険, EC</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn--full">コンバージョンが出るホームページが必要ではないですか？</a>
                    </div>
                </div>
            </section>

            <section class="portfolio__modal">
                <div class="modal fade modal-section" id="modal_aia" tabindex="-1" role="dialog" aria-labelledby="modal_aia" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body aia-section">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="title-section">
                                    <p class="title">AIA - Premier Academy</p>
                                    <p class="content">Merupakan situs website yang membantu AIA dalam menyediakan informasi yang dibutuhkan oleh agen dan calon agen mengenai AIA Premier Academy.</p>
                                    <p class="content">
                                        Berdasarkan kebutuhan dan materi yang diberikan user kami merancang website tersebut mulai dari desain, pengembangan kode, dan implementasi pada cloud server. 
                                    </p>
                                    <p class="content">
                                        Pembuatan desain disesuaikan dengan konsep Formula 1 yang dikombinasikan dengan animasi sehingga website terlihat lebih menarik tanpa mengurangi fungsionalitas dan tetap memperhatikan konsep responsif desain yang diperlukan saat ini. 
                                    </p>
                                    <p class="content">
                                        Pada website juga terdapat implementasi Income Calculator berdasarkan formula perhitungan yang komprehensif dengan variasi output yang mencakup grafik. Hasil akhir website ini kemudian di implementasi pada infrastruktur AWS. 
                                    </p>
                                    <p class="content">
                                        Salah satu tantangan dalam proyek ini adalah kebutuhan AIA untuk merilis versi awal hanya dalam 2 minggu, dan LOGIQUE mampu menjawab ekspektasi tersebut dengan baik. 
                                    </p>
                                    <p class="content">
                                        Setelah versi awal dirilis, pengembangan berlanjut dengan peningkatan fungsi termasuk implementasi fungsi kalkulator dengan total waktu pengembangan dari awal sampai akhir sekitar 5 minggu.
                                    </p>
                                </div>
                                <div class="content-section">
                                    <div class="content-container">
                                        <div class="content-title">
                                            <p>URL</p>
                                        </div>
                                        <div class="content-desc">
                                            <a href="https://aiapremieracademy.co.id/en/home" target="_blank">
                                                <p>https://aiapremieracademy.co.id/en/home</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content-title">
                                            <p>Industry/Industry</p>
                                        </div>
                                        <div class="content-desc">
                                            <p>Asuransi</p>
                                        </div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content-title">
                                            <p>Tipe</p>
                                        </div>
                                        <div class="content-desc">
                                            <p>Website Statis (Responsif) dan Fungsi Kalkulator</p>
                                        </div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content-title">
                                            <p>Durasi</p>
                                        </div>
                                        <div class="content-desc">
                                            <p>5 Minggu</p>
                                        </div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content-title">
                                            <p>Ruang Lingkup</p>
                                        </div>
                                        <div class="content-desc">
                                            <p>Manajemen Proyek (PM), Perencanaan Layout / Desain, HTML Coding dan Animasi, Fungsional, Implementasi Cloud Server</p>
                                        </div>
                                    </div>
                                    <div class="content-container scope-container">
                                        <div class="content-title">
                                            <p>Tim</p>
                                        </div>
                                        <div class="content-desc">
                                            <p>Pengarah Proyek (PM)</p>
                                            <p>
                                            Desainer Kreatif
                                            </p>
                                            <p>
                                            Implementasi HTML dan Animasi
                                            </p>
                                            <p>
                                            Fungsional
                                            </p>
                                            <p>
                                            Testing
                                            </p>
                                            <p>
                                            Infrastruktur
                                            </p>
                                                
                                        </div>
                                        <div class="content-desc">
                                            <p>Nico</p>
                                            <p>
                                            Adit/Angel
                                            </p>
                                            <p>
                                            Fahmi, Bagas
                                            </p>
                                            <p>
                                            Andre
                                            </p>
                                            <p>
                                            Angga
                                            </p>
                                            <p>
                                            Wisya
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-section">
                                    <img loading="lazy" src="/img/portfolio/update/modal-aia.jpg" alt="">
                                    <br/>
                                    <img loading="lazy" src="/img/portfolio/update/modal-aia2.jpg" alt="">
                                    <br/>
                                    <img loading="lazy" src="/img/portfolio/update/modal-aia3.jpg" alt="">
                                    <br/>
                                    <img loading="lazy" src="/img/portfolio/update/modal-aia4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade modal-section" id="modal_panin" tabindex="-1" role="dialog" aria-labelledby="modal_panin" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body aia-section">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="title-section">
                                    <p class="title">Panin Dai-ichi Life – Bekal Hidup</p>
                                    <p class="content">
                                        Merupakan suatu terobosan dari Panin Dai-ichi Life dalam bentuk produk-produk asuransi digital yang dapat dibeli langsung secara online melalui website E-Commerce. 
                                    </p>
                                    <p class="content">
                                        Berangkat dari pengalaman LOGIQUE yang telah banyak menangani proyek E-Commerce baik untuk industri asuransi maupun barang retail, kami membantu merancang konsep e-commerce Panin Dai-ichi Life mulai dari tahap perencanaan, desain, pengembangan kode, dan implementasi pada server yang telah disediakan. 
                                    </p>
                                    <p class="content">
                                        Pembuatan desain disesuaikan dengan konsep branding ‘Bekal Hidup’ yang dikombinasikan dengan animasi sehingga website terlihat lebih menarik, termasuk sangat memperhatikan User Experience untuk memudahkan Customer dalam melakukan pembelian produk asuransi yang ada. 
                                    </p>
                                    <p class="content">
                                        Dalam website e-commerce ini, Customer dapat melakukan pembelian beberapa produk asuransi sejenis untuk menerima keuntungan ganda; sistem secara otomatis melakukan verifikasi apakah Customer tersebut masih dapat melakukan pembelian produk dengan kriteria-kriteria yang telah ditentukan. 
                                    </p>
                                    <p class="content">
                                        Website E-Commerce ini juga terintegrasi dengan sistem pembayaran Midtrans yang mencakup pembelian awal dan recurring serta integrasi dengan sistem inti dari Panin Dai-ichi Life itu sendiri. 
                                    </p>
                                    <p class="content">
                                        Dalam pelaksanaannya, LOGIQUE membantu Panin Dai-ichi memiliki sebuah website E-Commerce yang dapat digunakan dalam waktu 3 bulan (fase 1), yang kemudian berlanjut dengan peningkatan fungsi untuk memenuhi cakupan tipe produk asuransi baru yang akan disediakan secara online di fase 2.
                                    </p>
                                </div>
                                <div class="content-section">
                                    <div class="content-container">
                                        <div class="content-title">
                                            <p>URL</p>
                                        </div>
                                        <div class="content-desc">
                                            <a href="https://www.bekalhidup.com/" target="_blank">
                                                <p>https://www.bekalhidup.com/</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content-title">
                                            <p>Industri</p>
                                        </div>
                                        <div class="content-desc">
                                            <p>Asuransi</p>
                                        </div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content-title">
                                            <p>Tipe</p>
                                        </div>
                                        <div class="content-desc">
                                            <p>E-Commerce</p>
                                        </div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content-title">
                                            <p>Durasi</p>
                                        </div>
                                        <div class="content-desc">
                                            <p>3 Bulan (Fase 1)</p>
                                        </div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content-title">
                                            <p>Ruang Lingkup</p>
                                        </div>
                                        <div class="content-desc">
                                            <p>Manajemen Proyek (PM), Perencanaan Konsep, Perencanaan Layout / Desain, HTML Coding, Fungsional dan Integrasi Sistem Inti, Integrasi <i>Payment Gateway</i></p>
                                        </div>
                                    </div>
                                    <div class="content-container scope-container">
                                        <div class="content-title">
                                            <p>Tim</p>
                                        </div>
                                        <div class="content-desc">
                                            <p>Pengarah Proyek (PM)</p>
                                            <p>
                                            Perencanaan Konsep
                                            </p>
                                            <p>
                                            Desainer Kreatif
                                            </p>
                                            <p>
                                            Implementasi HTML dan Animasi
                                            </p>
                                            <p>
                                            Fungsional
                                            </p>
                                            <p>
                                            Testing
                                            </p>
                                            <p>
                                            Infrastruktur
                                            </p>  	
                                        </div>
                                        <div class="content-desc">
                                            <p>Paskal</p>
                                            <p>
                                            Paskal / Irvan
                                            </p>
                                            <p>
                                            Adit
                                            </p>
                                            <p>
                                            Anggo, Nico
                                            </p>
                                            <p>
                                            Daniel, Dimas
                                            </p>
                                            <p>
                                            Winda, Edi
                                            </p>
                                            <p>
                                            Wisya
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-section">
                                    <img loading="lazy" src="/img/portfolio/update/modal-panin.jpg" alt="">
                                    <br/>
                                    <img loading="lazy" src="/img/portfolio/update/modal-panin2.jpg" alt="">
                                    <br/>
                                    <img loading="lazy" src="/img/portfolio/update/modal-panin3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade modal-section" id="modal_jba" tabindex="-1" role="dialog" aria-labelledby="modal_jba" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body aia-section">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="title-section">
                                    <p class="title">JBA – Website Perusahaan dan Layanan</p>
                                    <p class="content">
                                    Merupakan situs website yang menyediakan semua informasi yang dibutuhkan oleh pelanggan terkait lelang mobil dan motor yang dilakukan oleh JBA Indonesia. 
                                    </p>
                                    <p class="content">
                                    Berdasarkan kebutuhan dan materi yang diberikan user kami merancang website tersebut mulai dari desain, pengembangan kode, dan implementasi pada cloud server. 
                                    </p>
                                    <p class="content">
                                    Konsep pembuatan desain diarahkan untuk menguatkan kesan korporasi yang terpercaya dan profesional, dengan implementasi yang mudah digunakan pengguna, dan pengaplikasian teknologi desain responsif yang dapat dilihat dengan baik pada Smartphone, Tablet, dan Desktop. 
                                    </p>
                                    <p class="content">
                                    Untuk dapat menampilkan data-data mobil dan motor yang dilelang, website terintegrasi dengan sistem inti melalui API yang juga dirancang oleh LOGIQUE dengan hasil akhir website yang diimplementasi pada infrastruktur AWS. 
                                    </p>
                                    <p class="content">
                                    Selain pembuatan website perusahaan, LOGIQUE membantu JBA secara menyeluruh untuk pembuatan berbagai sistem dan aplikasi mobile untuk mendukung proses bisnis yang ada.
                                    </p>
                                </div>
                                <div class="content-section">
                                    <div class="content-container">
                                        <div class="content-title">
                                            <p>URL</p>
                                        </div>
                                        <div class="content-desc">
                                            <a href="https://jba.co.id/" target="_blank">
                                                <p>https://jba.co.id/</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content-title">
                                            <p>Industri</p>
                                        </div>
                                        <div class="content-desc">
                                            <p>Otomotif / Lelang</p>
                                        </div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content-title">
                                            <p>Tipe</p>
                                        </div>
                                        <div class="content-desc">
                                            <p>Website</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-section">
                                    <img loading="lazy" src="/img/portfolio/update/modal-jba1.jpg" alt="">
                                    <br />
                                    <img loading="lazy" src="/img/portfolio/update/modal-jba2.jpg" alt="">
                                    <br />
                                    <img loading="lazy" src="/img/portfolio/update/modal-jba4.jpg" alt="">
                                    <br />
                                    <img loading="lazy" src="/img/portfolio/update/modal-jba6.jpg" alt="">
                                </div>
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

        </div>

        <?php include '../footer.php';?>
    </div>   
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