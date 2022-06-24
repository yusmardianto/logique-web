<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description"
        content="LOGIQUEはインドネシアでのデジタルマーケティングやDXをワンストップでご支援するコンサルティング会社です。ウェブサイトやITシステム、スマホアプリの制作開発、セキュリティ脆弱性検査、デジタルマーケティング運用のご支援をしています。インドネシアで10年近い経験を持ち多くのナショナルクライアントをもつ実績のある会社です。">
    <meta name="keywords" content="WEBサイト制作, ホームページ制作, ウェブシステム構築, マーケティング, SEO, メンテナンス, モバイルアプリ, デザイン, パンフレット">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="ITコンサルティング | DX | LOGIQUEデジタルINDONESIA">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/jp/logique.php">
    <meta property="og:image" content="/img/ogimg/logique-about.png">
    <meta property="og:description"
        content="LOGIQUEはインドネシアでのデジタルマーケティングやDXをワンストップでご支援するコンサルティング会社です。ウェブサイトやITシステム、スマホアプリの制作開発、セキュリティ脆弱性検査、デジタルマーケティング運用のご支援をしています。インドネシアで10年近い経験を持ち多くのナショナルクライアントをもつ実績のある会社です。">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="canonical" href="https://www.logique.co.id/jp/logique.php"/>
    <title>ITコンサルティング | インドネシアDX | LOGIQUEデジタルINDONESIA</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- <link href="../css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/css/sidebar-update.css" >
    <link rel="stylesheet" href="/css/newstyle.css" >
    <link rel="stylesheet" href="/css/style-logique.css">
    <link rel="stylesheet" href="/css/style-revamp.css">
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
            $active = 'about';
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
            $en_link = '/en/logique.php';
            $id_link = '/logique.php';
            $jp_link = '#';
            include($_SERVER['DOCUMENT_ROOT'].'/jp/header.php'); 
        ?>

        <div class="logique-update content-wrapper__">
            <section class="logique__banner --top">
                <div class="container__" style="padding:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="/jp/index.php"><span itemprop="name">ホーム</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp; 会社概要</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                    <section id="about">
                        <div class="container__" align="center">
                            <h1 class="title-index">LOGIQUEについて</h1>
                            <hr class="title__yellow-line--center">
                            <div class="row" align="left">
                                <div class="col-sm-12">
                                    <!-- <p><b>LOGIQUE</b> adalah nama yang berasal dari istilah Bahasa Indonesia “logika-ku”. Dengan menjunjung tinggi standar yang sangat logis dalam segala hal yang kami lakukan kami memberikan layanan terbaik kepada klien kami dan tanpa ragu-ragu beralih dari cara atau metode yang sudah ketinggalan zaman.</p><br>
                                    <p>Kami adalah Agile Developer dan Konsultan DX profesional yang sejak tahun 2012 telah membantu banyak klien mendigitalisasikan ide dan bisnis mereka.</p><br>
                                    <p>LOGIQUE adalah Konsultan, Pengembang Sistem, dan Agen Pemasaran Digital dengan pemahaman yang mendalam tentang pasar Indonesia serta memiliki banyak pengalaman dengan proyek-proyek Internasional.</p><br>
                                    <p>Kami memiliki grup perusahaan yakni <a href="https://www.kazokku.com/"><b>KAZOKKU</b></a> yang menyediakan layanan outsourcing IT untuk memenuhi tenaga IT profesional bagi perusahaan yang membutuhkan.</p> -->
                                    <p>LOGIQUE（ロジックと呼んでいます）という名前は、インドネシア語のLogika-kuに由来します。 慣習に囚われることなく常にロジカルに、私たちの考えに沿ったやり方で、最高のサービスを提供します。LOGIQUEはIT/DXコンサルティングから受託開発、デジタルマーケティング運用までワンストップでサービス可能な会社です。Web制作、システム開発、スマホアプリ開発が主力サービスとなっています。日本人がインドネシアのジャカルタで設立したPMA（外国資本法人) です。PMAですが、80人を超えるインドネシア人社員と、インドネシアへの深い理解をもってお客様へサービス提供しています。インドネシア展開する際の現地パートナーとしてご検討いただけます。</p><br>
                                    <p>ITスペシャリストの人材派遣サービスを提供する<a href="https://www.kazokku.com/"><b>KAZOKKU</b></a> というグループ会社があります。</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>

            <section id="principle">
                <div class="container__">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 class="title-index">LOGIQUE会社概要をダウンロード</h1>
                            <hr class="title__yellow-line">
                            <br>
                            <a class="career-section__btn" href="../download/Company_Profile_-_EN-Version.pdf">会社概要のダウンロード</a>
                        </div>

                        <div class="col-md-8">
                            <div class="principle">
                                <div class="principle__content">
                                    <p>
                                        こちらから英語のLOGIQUE会社概要をダウンロードいただけます。フォームに必要事項をご記入いただきリクエストいただきますようお願いいたします。
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="principle">
                <div class="container__">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="custombox__custom-slider">
                                <div id="profile" class="carousel slide" data-ride="carousel">
                                    <div id="imgCarousel" class="carousel-inner">
                                        <div class="item active">
                                            <img style="object-position:0 0" src="/img/slider1.jpg" alt="Web Developer LOGIQUE 1">
                                        </div>
                                        <div class="item">
                                            <img src="/img/slider5.jpg" alt="Web Developer LOGIQUE 5">
                                        </div>
                                        <div class="item">
                                            <img style="object-position:0 0" src="/img/banner-all-member.jpg" alt="logique member">
                                        </div>
                                        <div class="item">
                                            <img src="/img/slider4.jpg" alt="Web Developer LOGIQUE 4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custombox__custom-slider">
                                <div id="profile" class="carousel slide" data-ride="carousel">
                                    <div class="bg--dark">
                                        <p align="center">IT、Digitalマーケッティング関連サービスをワンストップで提供します</p>
                                    </div><br>
                                    <div>
                                        <div id="txtCarousel" class="carousel-inner">
                                            <div class="item active">
                                                <p><b>お見積のご依頼、業務提携の相談などお気軽にご連絡ください。</b></p>
                                            </div>
                                            <div class="item">
                                                <p><b>インドネシアにて7年を超える豊富な経験をもっています。</b></p>
                                            </div>
                                            <div class="item">
                                                <p><b>日系企業向けのプロジェクトも経験豊富なデザイナー、プログラマー、デジタルマーケッターが担当します。 </b></p>
                                            </div>
                                            <div class="item">
                                                <p><b>ゴールとご予算に応じて最適なソリューションをご提供します。 </b></p>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:173px">
                                            <div class="col-md-1">
                                                <div class="bg--button">
                                                    <a href="[id^=profile]" data-slide="prev">
                                                        <img src="/img/logique/arrowleft.png"/>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-1">
                                                <div class="bg--button">
                                                    <a href="[id^=profile]" data-slide="next">
                                                        <img src="/img/logique/arrowright.png"/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="principle">
                <div class="container__">
                    <h1 class="title-index"><b>LOGIQUEの特徴</b></h1>
                    <hr class="title__yellow-line">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/img/logique/Karakteristik1.png"/><br><br>
                            <p>LOGIQUEは数少ないインドネシアにベースを置く日系のWeb制作/システム受託開発会社です。豊富な実績と確かなクオリティで信頼いただいていて大手のお客様にもお取引いただいています。LOGIQUEは、お客様のご要望に応じて最適なご提案をして最大の効果をあげるサービスを提供することに努めています。 </p><br><br>
                        </div>
                        <div class="col-md-6">
                            <img src="/img/logique/Karakteristik2.png"/><br><br>
                            <p>スピードが重要な時代です。特に変化のスピードが早く変化量も大きいインドネシアにおいて、LOGIQUEはスピードとAgilityを重視しています。時にはお客様を急かしてでもプロジェクトを前へ進めていくようなつもりでお客様のビジネスを成長させていきたいと思っています。</p><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/img/logique/Karakteristik3.png"/><br><br>
                            <p>シンプルなコーポレートWEBを公開したいというご要件と、新しいWEBサービスでインドネシアのマーケットを取りに行くという案件では、予算も投下リソースもスケジュールも全て異なりますが、LOGIQUEではどちらにも対応可能です。</p><br><br>
                        </div>
                        <div class="col-md-6">
                            <img src="/img/logique/Karakteristik4.png" width="14%"/><br><br>
                            <p>ちょとした社内システムを構築したいという時に日系SIerに相談したら遅くてすごく高いという悩みを良くお聞きします。顧客管理システム、採用管理システム、日報システム、予約システムなどインドネシアにて様々なシステム開発をした実績があります。ご相談ください。</p><br><br>
                        </div>
                    </div>
                    <div align="center">
                        <a class="career-section__btn" href="/jp/portfolio.php"><b>LOGIQUEのポートフォリオをみる</b></a>
                    </div>
                </div>
            </section>

            <!-- <section id="principle">
                <div class="container__">
                    <div class="row">
                        <div class="col-md-3">
                            <h1 class="title-index">LOGIQUEの特徴</h1>
                            <hr class="title__yellow-line">
                            <br>
                            <a href="portfolio.php">
                                <div class="career-section__btn" style="text-align: center">LOGIQUEのポートフォリオをみる</div>
                            </a>
                        </div>

                        <div class="col-md-9">
                            <div class="principle">
                                <div class="principle__illus">
                                    <img src="../img/principle/bullseye.png" alt="bullseye">
                                    <img src="../img/principle/gear.png" alt="gear">
                                    <img src="../img/principle/shield.png" alt="shield">
                                    <img src="../img/principle/idea.png" alt="idea">
                                    <img src="../img/principle/maintenance.png" alt="maintenance">
                                </div>

                                <div class="principle__content">
                                    <p>LOGIQUEは数少ないインドネシアにベースを置く日系のWeb制作/システム受託開発会社です。豊富な実績と確かなクオリティで信頼いただいていて大手のお客様にもお取引いただいています。LOGIQUEは、お客様のご要望に応じて最適なご提案をして最大の効果をあげるサービスを提供することに努めています。
                                        <br><br>
                                        スピードが重要な時代です。特に変化のスピードが早く変化量も大きいインドネシアにおいて、LOGIQUEはスピードとAgilityを重視しています。時にはお客様を急かしてでもプロジェクトを前へ進めていくようなつもりでお客様のビジネスを成長させていきたいと思っています。<br><br>
                                        シンプルなコーポレートWEBを公開したいというご要件と、新しいWEBサービスでインドネシアのマーケットを取りに行くという案件では、予算も投下リソースもスケジュールも全て異なりますが、LOGIQUEではどちらにも対応可能です。<br><br>
                                        ちょとした社内システムを構築したいという時に日系SIerに相談したら遅くてすごく高いという悩みを良くお聞きします。顧客管理システム、採用管理システム、日報システム、予約システムなどインドネシアにて様々なシステム開発をした実績があります。ご相談ください。<br><br>
                                        ある時は小回りのきく小さなWeb制作会社として、場合によってはセキュリティもしっかりした信頼できるシステム開発会社として、お客様からのご期待に応じてそのスタイルを変えながら御社のパートナーとして高いValueを提供していきたいと考えています。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="bg--black" id="missionStatement">
                <div class="container__">
                    <h1 class="title-index" style="color:white"><b>LOGIQUEのミッション</b></h1>
                    <hr class="title__yellow-line"><br>
                    <div class="row" style="margin-top:-100px">
                        <div class="col-sm-6">
                            <img src="/img/logique/misi.png"/>
                        </div>
                        <div class="col-sm-6">
                            <p><b>インドネシアで戦っている企業をIT・デジタルマーケティング面でできる限り多くご支援したいと思っています。</b></p><br>
                            <p>インドネシアのWeb制作開発業界の発展に寄与し、インドネシア人のWebデベロッパーにより良い機会を与えます。</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="career-section" style="margin-top:-40px">
                <a class="career-section__btn" href="../career/">LOGIQUEの求人を確認する</a>
            </section>

            <section id="companyOverview">
                <div class="container__">
                    <h1 class="title-index" align="center"><b>LOGIQUEの概要</b></h1>
                    <hr class="title__yellow-line--center">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="company__content">
                                <li><b>会社名</b></li>
                                <li>PT. LOGIQUE Digital Indonesia</li>
                                <hr class="company__divider" style="margin-top:12px; margin-bottom:12px">
                                
                                <li><b>事業内容</b></li>
                                <li>ITコンサルティング、WEBサイト制作、システム開発運用、アプリ開発、デザイン制作</li>
                                <hr class="company__divider" style="margin-top:12px; margin-bottom:12px">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <li><b>代表者</b></li>
                                        <li>Takashi Yoshitsugu (吉次 敬)</li>
                                    </div>
                                    <div class="col-sm-6">
                                        <li><b>従業員数</b></li>
                                        <li>83名（2022年05月現在）</li>
                                    </div>
                                </div>
                                <hr class="company__divider" style="margin-top:12px; margin-bottom:12px">

                                <li><b>本社住所</b></li>
                                <li>Ad Premier Building 19th Floor, Jalan Tb. Simatupang No. 5, Pasar Minggu, Jakarta 12550, INDONESIA</li>
                                <hr class="company__divider" style="margin-top:12px; margin-bottom:12px">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <li><b>Phone</b></li>
                                        <li><img src="/img/logique/phone.png"/> +62(21) 2270 8935 / 36</li>
                                        <li><img src="/img/logique/wa.png"/> +62 811 870 321</li>
                                    </div>
                                    <div class="col-sm-6">
                                        <li><b>Email</b></li>
                                        <li><img src="/img/logique/email.png"/> info@logique.co.id</li>
                                    </div>
                                </div>
                                <hr class="company__divider" style="margin-top:12px; margin-bottom:12px">

                                <li><b>開発センター</b></li>
                                <li>Tadeus Coworking Space - 3rd floor, room 12</li>
                                <li>Karang Malang, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta</li>
                                <hr class="company__divider" style="margin-top:12px; margin-bottom:12px">

                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <img src="/img/logique/company.png"/>
                        </div> 
                    </div>
                </div>
            </section>

            <section class="bg--black" id="directorMessage">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="title-index--white">Director's Profile</h1>
                            <hr class="title__yellow-line">
                            <div class="director">
                                <div class="director__img">
                                    <br><br><img src="/img/logique/direktur.jpg" alt="Takashi Yoshitsugu" class="img-responsive" />
                                </div>
                                <div class="director__content">
                                    <hr class="title__white-line">
                                    <div>
                                        <p>1976年に山口県出身の両親の元、東京で生まれる。横浜育ち。1999年に早稲田大学理工学部経営システム工学科を卒業。株式会社日本総合研究所やコンサルティングファームなどを経て2005年よりEコマース事業、輸入商社、コンサルティング会社を起業。2012年よりインドネシアに移住し会社運営。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="title-index--white">Message</h1>
                            <hr class="title__yellow-line">
                            <p class="director__message" style="text-align: justify">LOGIQUEという名前はlogika-kuというインドネシア語が由来となっています。自分たちのロジック、思いを大事に、芯をもって事を成していきたいと思っています。東南アジア×ITという非常に変化の激しい領域にいますが、一時のトレンドや短期的な利益に惑わされず、自分たち、関係いただく皆さまの幸福度を最大化していきたいと思います。<br><br>
                            2012年からインドネシアにてWEB・SI・デジタルマーケティング領域で多くのお客様にIT・WEB活用のご支援をして参りました。お陰様で業績は順調に拡大しております。2018年4月にはジョグジャカルタに開発センターを開設しました。<br><br>
                            インドネシアの社会環境を鑑みて、リモートワークや時短勤務などのフレキシブルな勤務体系を取り入れ、効率的に幸せに働いてもらうための取組を続けています。これら当社向けに試行したこと、当社向けに開発したシステムをインドネシアの他の会社さまにも提供していくつもりです。<br><br>
                            これからも慢心せず成長していきます。当社の事業を通じて、インドネシアに貢献し、クライアントの皆さまに喜んでもらい、仲間の成長に繋がれば、これほど嬉しいことはありません。</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="principle">
                <div class="container__">
                    <h1 class="title-index"><b>LOGIQUEのIT/DXコンサルティングサービスについて</b></h1>
                    <hr class="title__yellow-line">
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <p>Webアプリ、モバイルアプリ開発、ITシステム開発運用、クラウドサーバー運用、DXコンサルティング、ITセキュリティ脆弱性検査、SEO対策、ソーシャルメディア運用、インターネット広告運用などを行っているほかに、クライアント様内製DX運用支援や関連会社を通じたITプロフェッショナルの派遣サービスを提供しています。インドネシアで豊富なコンサルティング・開発実績を保有しています。お気軽にご相談ください。</p><br><br>
                        </div>
                        <div class="col-md-7">
                            <div class="col-md-5 bg--grey" align="center">
                                <img src="/img/logique/TentangKami1.png"/>
                                <a class="career-section__btn" href="/jp/services.php"><b>See Service List</b></a>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5 bg--grey" align="center">
                                <img src="/img/logique/TentangKami2.png" width="88%"/>
                                <a class="career-section__btn" href="/jp/product.php"><b>See Product List</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding:10px; margin-right:-50px">
                        <div class="bg--gradient col-md-5">
                            <div class="row">
                                <a href="/jp/services/system-dev.php">
                                    <div class="col-md-2">
                                        <img src="/img/logique/Group311.png" style="margin-left:15px; margin-top:55px"/>
                                    </div>
                                    <div class="col-md-10"><br>
                                        <p style="font-size:16px; margin-left:0px; color:black; margin-top:25px"><b>Webアプリ/システム開発サービス</b></p>
                                        <p style="font-size:14px; margin-left:0px; color:black">Agileで柔軟にクオリティも高いシステムを開発します<div style="color: rgba(0, 0, 0, 0.001);">システムを開発します</div></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="bg--gradient col-md-5" style="margin-left:20px">
                            <div class="row">
                                <a href="/jp/services/digital-marketing/seo-service.php">
                                    <div class="col-md-2">
                                        <img src="/img/logique/Group333.png" style="margin-left:15px; margin-top:55px"/>
                                    </div>
                                    <div class="col-md-10">
                                        <p style="font-size:16px; margin-left:0px; color:black; margin-top:30px"><b>SEO対策サービス</b></p>
                                        <p style="font-size:14px; margin-left:0px; color:black">インドネシア語、英語、日本語のSEO対策、10年超の実績があります。</p><br>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding:10px; margin-right:-50px">
                        <div class="bg--gradient col-md-5">
                            <div class="row">
                                <a href="/jp/services/penetration-test.php">
                                    <div class="col-md-2">
                                        <img src="/img/logique/Group301@2x.png" style="margin-left:5px; margin-top:35px"/>
                                    </div>
                                    <div class="col-md-10"><br>
                                        <p style="font-size:16px; margin-left:-5px; color:black"><b>Web/アプリのセキュリティ脆弱性検査サービス</b></p>
                                        <p style="font-size:14px; margin-left:-5px; color:black">CEH認定資格保有者がセキュリティ脆弱性を検査してレポートするサービス</p><br>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="bg--gradient col-md-5" style="margin-left:20px">
                                <div class="row">
                                    <a href="https://kazokku.com/" target="_blank">
                                    <div class="col-md-2">
                                        <img src="/img/logique/Group125@2x.png" style="margin-left:15px; margin-top:40px"/>
                                    </div>
                                    <div class="col-md-10"><br>
                                        <p style="font-size:16px; margin-left:-5px; color:black"><b>ITエンジニアの派遣サービス（インドネシア内）</b></p>
                                        <p style="font-size:14px; margin-left:-5px; color:black">関連会社KAZOKKUが提供するTプロフェッショナル派遣サービス</p><br>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-5">
                            <h1 class="title-index" style="margin-bottom:0">お問い合わせ</h1>
                            <p>LOGIQUEのサービスについて、製品について、またインドネシアでの協業についてなど、お気軽にご連絡ください。</p>
                            <br>
                            <hr class="title__yellow-line">
                            <div align="center">
                                <img src="../img/logique/Saly-19Rev.png" style="width:60%" alt="contact"><br><br>
                                <p><b>LOGIQUE Ready to Help</b></p>
                                <a href="contact.php" class="btn btn-contact-us-black" style="width: auto">お問い合わせ</a>
                            </div>
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
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <?php include 'footer.php';?>

    </div>
</body>

</html>