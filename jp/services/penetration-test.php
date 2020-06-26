<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description"
        content="LOGIQUEのWEBサイトセキュリティ診断サービスは、お客様のWEBサイト、E-Commerce、WEBアプリケーションの脆弱性を診断し、レポート、対策案を提案します。インドネシアの首都ジャカルタのWEB制作・システム開発会社LOGIQUEにセキュリティ対策についてご相談ください。">
    <meta name="keywords" content="">
    <meta name="author" content="Logique Digital Indonesia">
    <meta property="og:title" content="Webサイト脆弱性セキュリティテスト｜LOGIQUEデジタルインドネシア">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/jp/services/penetration-test.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
    <meta property="og:description"
        content="LOGIQUEのWEBサイトセキュリティ診断サービスは、お客様のWEBサイト、E-Commerce、WEBアプリケーションの脆弱性を診断し、レポート、対策案を提案します。Penetrationテストを行い、Webサイトへの攻撃、乗っ取り、改ざんなどから守ります。インドネシアの首都ジャカルタのWEB制作・システム開発会社LOGIQUEにセキュリティ対策についてご相談ください。">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Webサイト脆弱性セキュリティテスト｜LOGIQUEデジタルインドネシア</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="assets/css/style-pentest.css" rel="stylesheet">
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.3.0/ekko-lightbox.css">
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
</head>

<body class="wrapper wrapper--update-design">
    <style>
    .container__ {
        padding-top: 0;
        padding-bottom: 0;
    }

    .logique-nav {
        left: 0;
    }

    .breadcrumb--update-design li:not(.active) span {
        color: #f5f5f5;
    }

    .breadcrumb--update-design li:not(.active) span:hover {
        text-decoration: underline;
    }

    .title {
        background: transparent;
        padding: 0;
    }

    .tahapan .title {
        font-size: 15px;
    }

    .content-wrapper__ .--top {
        margin-top: 4em;
    }

    @media only screen and (min-width: 1024px) {
        .content-wrapper__ .--top {
            margin-bottom: 2.5em
        }
    }
    </style>

    <button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle" data-toggle="collapse"
        data-target="#myNavbar">
        <span class="icon-bar first"></span>
        <span class="icon-bar second"></span>
        <span class="icon-bar third"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <div class="backdrop-test"></div>
        <div class="logique-nav in-jp">
            <div class="margin-for-nav">
                <div class="text-center">
                    <a href="/jp/index.php">
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
                <div class="text-center">
                    <a href="/jp/portfolio.php">
                        <div class="img-portfolio"></div>
                        制作実績
                    </a>
                </div>
                <div class="text-center active">
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

    <!-- HEADER -->
    <div class="container-fluid">
        <div class="row lang-logo--update-design">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11">
                        <div class="container">
                            <ul class="list-inline">
                                <li><a href="/en/services/penetration-test.php">EN</a></li>
                                <li><a href="/layanan/penetration-test.php">ID</a></li>
                                <li class="active"><a href="#">JP</a></li>
                            </ul>
                            <a href="/jp/index.php"><img src="/../img/logo.png" alt="Logo" class="img-responsive logo--update-design" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER -->

    <div class="content-wrapper__">
        <div class="header-top">
            <section class="--top">
                <div class="container__" style="padding:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="/jp/index.php"><span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="/jp/services.php"><span itemprop="name">&nbsp;LOGIQUEのサービス</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"><span
                                            itemprop="name">&nbsp;Webセキュリティ診断（脆弱性診断・検査）</span></a>
                                    <meta itemprop="position" content="3" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container__">
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-responsive center-block top-banner" src="assets/img/img-pentest/top-banner.png" alt="Top Banner" />
                        <div class="what-is">
                            <h1 class="title" style="margin-bottom: 0;">Webサイトのセキュリティ診断サービス｜Web脆弱性テスト</h1>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-11">
                                    <p>
                                        LOGIQUEのWebサイトセキュリティ診断サービスは、お客様のWebサイト、E-Commerce、Webアプリケーションの脆弱性を診断し、セキュリティリスクをレポートします。インドネシアではまだまだWebセキュリティ意識が低いのが実状です。そのためセキュリティインシデントが頻繁に発生しています。問題が起こってからでは遅いです。定期的にセキュリティ検査を行い、サイバーセキィリティリスクの把握をする必要があります。
                                        <br>
                                        金融機関ではないから、重要な個人情報は扱ってないから、などでセキュリティ診断・対策が必要でないとお考えの企業もありますが、Webサイトが改ざんされる、踏み台にされる等で、大きな事件に関与してしまうリスクがあります。
                                        <br>
                                        簡易なWebについても、適切なセキュリティ診断をし自社Webサイトのセキュリティ脆弱性について把握しておく必要があります。Webサイトの規模に合わせた様々なセキュリティ診断を柔軟に実施します。手軽にハジメられる簡易な診断メニューも用意しておりますのでご相談ください。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br /><br />
                    </div>
                </div>
            </div>
        </div>

        <section class="target-umum-bg">
            <div class="container__">
                <div class="row">
                    <div class="col-md-7">
                        <div class="title fw-300"><span class="yellow">Webセキュリティ診断内容</span><br />把握できるWebのセキュリティリスク</div>
                        <br />
                        <ul style="color:#fff">
                            <li>12項目の診断項目について確認、レポートします。Webサイトのセキュリティレベルを素早く把握できるWebサイト脆弱性診断アセスメントサービスです。</li>
                            <li>セキュリティ診断対象Webサイトの規模（ページ数や検索機能やフォームの有無や数）により診断対象を限定する場合があります。</li>
                            <li>セキュリティ診断ツールを用いた診断を行います。網羅的な確認が可能です。</li>
                            <li>必要に応じてソース解析診断などのマニュアル診断を行います。セキュリティ上の重要事項について潜在的なリスクを発見します。</li>
                            <li>ケースごとにBlack Box, Gray Box, White Boxテストのいずれを実施するか判断します。</li>
                            <li>診断結果の報告に加えて改善方法や優先順位付けなどを提言します。</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <img src="assets/img/img-pentest/typing.png" width="100%" alt="Typing" /><br /><br />

        <section class="plus-minus-bg">
            <div class="container__">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-left lh-30">
                            <div class="text-center"><span class="title fw-300"><b>Webサイトセキュリティ診断</b>が必要な理由</span></div>
                            インドネシアにおいても、企業に対して、不正アクセス、Webサイトの改ざんをはじめとするWebサーバー、Webサイトへの攻撃が頻繁に行われています。結果として個人情報漏えい、Webサイトの改ざん、システムダウンやアクセス障害、踏み台化などの被害が起こっています。
                            <br>
                            企業のブランド価値や信頼感を伝えるためのお客様とのコミュニケーションチャネルであるWebサイトを安心してユーザーにご利用いただくために、脆弱性を払拭した安全なWebサイトを提供することは、企業の義務だと考えます。Webサイトでセキュリティ事件が発生することでブランド価値が大きく毀損するリスクがあります。
                            <br>
                            こういったリスクを取り除き、安全なWebサイトであることを維持し続けるために、Webサイトのセキュリティ脆弱性診断は必要なものです。
                        </div>
                    </div>
                    <!--<div class="clearfix"></div><br/>
				<div class="col-md-6">
					<hr/>
					<div class="each-plus-minus">
						<div class="title-each"><img src="assets/img/img-pentest/kelebihan.png" alt="Kelebihan"/>KELEBIHAN</div>
						<ul>
							<li><span>Dapat dilakukan secara cepat dengan sedikit waktu sehingga harganya murah</span></li>
							<li><span>Keterampilan yang dibutuhkan untuk melakukan teknik pengujian pentest relative lebih rendah jika dibandingkan dengan melakukan teknik pengujian menggunakan pemeriksaan source code</span></li>
							<li><span>Pengujian langsung dilakukan pada kode yang digunakan (exposed)</span></li>
						</ul>
					</div>
					<hr/>
				</div>
				<div class="col-md-6">
					<hr/>
					<div class="each-plus-minus">
						<div class="title-each"><img src="assets/img/img-pentest/kekurangan.png" alt="Kekurangan"/>KEKURANGAN</div>
						<ul>
							<li><span>Terlalu lambat jika dilakukan dalam SDLC</span></li>
							<li><span>Hanya melakukan pengujian pada dampak depannya saja</span></li>
						</ul>
					</div>
					<hr/>
				</div>	-->
                </div>
            </div>
        </section>
        <br />

        <div class="mengapa-harus">インドネシアでのサイバーセキュリティ検査については<a href="/jp/" target="_blank"><b>LOGIQUE</b></a>にご相談ください</div>
        <br />

        <section class="metode">
            <div class="container__">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <p>
                            インドネシアにて政府系機関や金融機関、自動車メーカーのWebサイトやモバイルAppのセキュリティ診断をしてきました。第一回アセスメント結果は多くのケースでショッキングな結果になることが多いです。但しそこから優先度をつけて対策をしていくことでリスクを軽減することができますし、適切に定期的な診断を続けていくことでリスクをゼロに近づけることができます。
                        </p>

                        <!--<div class="title">Metode apa yang digunakan Logique Digital Indonesia dalam melakukan pentest?</div>
					<center>Dalam melakukan pentest, Logique Digital Indonesia mempunyai 3 metode yang dapat digunakan, antara lain yaitu:</center>
					<br/>
					<div class="row row-center">
						<div class="col-sm-2">
							<img alt="Black Box" src="assets/img/img-pentest/black-box.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-10">
							<div class="subtitle fs-18"><b>Black Box Testing</b></div>
							<div>
							Merupakan pengujian yang dilakukan berdasarkan detail aplikasi, seperti tampilan aplikasi, fungsi-fungsi yang terdapat pada aplikasi, serta penyesuaian alur fungsi pada aplikasi dengan bisnis yang diinginkan oleh pelanggan. Pengujian ini dilakukan tanpa melihat dan menguji source code program yang ada pada aplikasi.
							</div>
						</div>
					</div>
					<hr/>
					<div class="row row-center">
						<div class="col-sm-2">
							<img alt="White Box" src="assets/img/img-pentest/white-box.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-10">
							<div class="subtitle fs-18"><b>White Box Testing</b></div>
							<div>
							Merupakan pengujian yang dilakukan berdasarkan detail prosedur serta alur logika dari sebuah kode program. Pada metode ini, tester akan melihat keseluruhan source code sebuah program untuk menemukan bugs dari kode program tersebut.
							</div>
						</div>
					</div>
					<hr/>
					<div class="row row-center">
						<div class="col-sm-2">
							<img alt="Grey Box" src="assets/img/img-pentest/grey-box.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-10">
							<div class="subtitle fs-18"><b>Grey Box Testing</b></div>
							<div>
							Merupakan metode pengujian yang berasal dari kombinasi Black Box dan White Box. Dimana pentester melakukan pengujian aplikasi berdasarkan spesifikasi namun menggunakan cara kerja dari dalam aplikasi tersebut alias source code program.
							</div>
						</div>
					</div>-->
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div><br /><br />
        <!--<div class="tahapan-title">
		<div class="question">
			Apa saja tahapan-tahapan yang dilakukan <b>Logique</b> dalam melakukan penetration testing?
		</div>
		<div class="answer">
			 <b>Logique Digital Indonesia </b> menggunakan standar penetration testing international sebagai acuan pelaksanaan dalam melakukan pengujian, antara lain yaitu:
		</div>
	</div>
	<br/><br/>
	<div class="tahapan">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-sm-4">
							<img alt="Step 1" src="assets/img/img-pentest/step1.png" class="img-responsive center-block"/><br/>
						</div>
						<div class="col-sm-8 text-justify">
							<div class="title"><span>1</span> <b>Pre-engagement Interactions</b></div>
							Yaitu tahapan dimana pentester Logique akan menjelaskan kegiatan apa saja yang akan dilakukan kepada pelanggan/ client, mulai dari hal pertama yang akan dilakukan hingga tujuan akhir yang akan dicapai dengan melakukan pentest ini.<br/><br/>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-sm-4">
							<img alt="Step 2" src="assets/img/img-pentest/step2.png" class="img-responsive center-block"/><br/>
						</div>
						<div class="col-sm-8 text-justify">
							<div class="title"><span>2</span> <b>Intelligence Gathering</b></div>
							Yaitu tahapan pengumpulan data informasi sebanyak-banyaknya mengenai target perusahaan yang akan dicapai dengan menggunakan berbagai metode yang telah ada.<br/><br/>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden-xs"><br/></div>
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-sm-4">
							<img alt="Step 3" src="assets/img/img-pentest/step3.png" class="img-responsive center-block"/><br/>
						</div>
						<div class="col-sm-8 text-justify">
							<div class="title"><span>3</span> <b>Threat Modelling</b></div>
							Yaitu sebuah tahapan pengujian dimana pentester akan mencari celah keamanan (<i>vulnerabilities</i>) berdasarkan data yang telah dikumpulkan pada tahapan sebelumnya. Di Logique, pada tahapan ini pentester selain mencari celah sekaligus juga menentukan celah apa yang paling efektif untuk digunakan.
							<br/><br/>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-sm-4">
							<img alt="Step 4" src="assets/img/img-pentest/step4.png" class="img-responsive center-block"/><br/>
						</div>
						<div class="col-sm-8 text-justify">
							<div class="title"><span>4</span> <b>Vulnerability Analysis</b></div>
							Yaitu tahapan dimana pentester akan melakukan kombinasi dari informasi yang telah didapatkan mengenai celah keamanan dengan melakukan serangan yang paling efektif ke aplikasi atau sistem.<br/><br/>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden-xs"><br/></div>
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-sm-4">
							<img alt="Step 5" src="assets/img/img-pentest/step5.png" class="img-responsive center-block"/><br/>
						</div>
						<div class="col-sm-8 text-justify">
							<div class="title"><span>5</span> <b>Exploitation</b></div>
							Yaitu tahapan dimana pentester melakukan penyempurnaan analisis untuk melakukan serangan yang efektif pada target yang telah ditentukan.
							<br/><br/>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-sm-4">
							<img alt="Step 6" src="assets/img/img-pentest/step6.png" class="img-responsive center-block"/><br/>
						</div>
						<div class="col-sm-8 text-justify">
							<div class="title"><span>6</span> <b>Post Exploitation</b></div>
							Yaitu tahapan dimana pentester berhasil masuk ke dalam sistem target, kemudian akan melakukan analisis menyeluruh terhadap infrastruktur yang ada serta menentukan bagian mana yang paling critical untuk perusahaan. Selain itu, di tahap ini pentester juga akan menjelaskan berbagai dampak serangan/ kerugian yang akan terjadi kepada perusahaan.
							<br/><br/>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden-xs"><br/></div>
			<div class="row">
				<div class="bg-yellow">
					<div class="row">
						<div class="col-sm-2">
							<img alt="Step 6" src="assets/img/img-pentest/report.png" class="img-responsive center-block"/>
						</div>
						<div class="col-sm-10 text-justify">
							<div class="title"><span>7</span> <b>Reporting</b></div>
							Dalam kegiatan pentest, reporting merupakan hal yang paling penting. Pada tahapan ini, seorang pentester akan membuat laporan mengenai pentesting yang sudah dilakukan, resiko yang mungkin terjadi serta membuat solusi perbaikan sistem.
						</div>
					</div>
				</div>
			</div>
			<br/><br/>
		</div>
	</div>-->

        <div class="harga">
            <div class="container__">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="title">Webサイトの簡易セキュリティ脆弱性診断サービスをお試し価格でご提供しています。</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img alt="15 juta" src="assets/img/img-pentest/15-juta.png" class="img-responsive center-block" />
                    </div>
                </div><br />
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="subtitle text-left">
                            簡易診断ではありますが、自社Webサイトにどのようなセキュリティリスクがあるのか把握されることをお奨めいたします。お気軽にご相談ください。日本語でお問い合わせいただけます。</div>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <br>
            <!-- <div class="mengapa-harus"><b></b>Logique Works 2019</div> -->
            <div class="container__">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="#sampleReport">
                            <img alt="Assesment Flow" src="assets/img/img-pentest/assesment-flow.jpg" class="img-responsive center-block">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <br />
            <div class="mengapa-harus"><a href="/en/" target="_blank"><b>LOGIQUE</b></a> Works 2019</div>
            <div class="container__">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="work-logique__table table table-striped ">
                                <thead>
                                    <tr>
                                        <th rowspan="2" scope="col">Time</th>
                                        <th rowspan="2" scope="col">Industry</th>
                                        <th rowspan="2" scope="col">Object of Assesment</th>
                                        <th colspan="3" scope="col">Found Problems (Risk Level)</th>
                                    </tr>
                                    <tr>
                                        <th class="table__head--high" scope="col">High</th>
                                        <th class="table__head--middle" scope="col">Middle</th>
                                        <th class="table__head--low" scope="col">Low</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sep - Oct 2019</td>
                                        <td>Travel</td>
                                        <td>Web app</td>
                                        <td><span class="table__round --high">5</span></td>
                                        <td><span class="table__round --middle">4</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sep - Oct 2019</td>
                                        <td>Media</td>
                                        <td>Online Media</td>
                                        <td><span class="table__round --high">8</span></td>
                                        <td><span class="table__round --middle">0</span></td>
                                        <td><span class="table__round --low">3</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sep - Oct 2019</td>
                                        <td>Entrainment</td>
                                        <td>Network infrastructure</td>
                                        <td><span class="table__round --high">4</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">1</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sep - Oct 2019</td>
                                        <td>E-commerce</td>
                                        <td>Market Place Web</td>
                                        <td><span class="table__round --high">8</span></td>
                                        <td><span class="table__round --middle">4</span></td>
                                        <td><span class="table__round --low">4</span></td>
                                    </tr>
                                    <tr>
                                        <td>Oct 2019 </td>
                                        <td>E-commerce</td>
                                        <td>PWA</td>
                                        <td><span class="table__round --high">4</span></td>
                                        <td><span class="table__round --middle">3</span></td>
                                        <td><span class="table__round --low">0</span></td>
                                    </tr>
                                    <tr>
                                        <td>Oct - Nov 2019</td>
                                        <td>Forwarding</td>
                                        <td>Website company profile</td>
                                        <td><span class="table__round --high">5</span></td>
                                        <td><span class="table__round --middle">5</span></td>
                                        <td><span class="table__round --low">3</span></td>
                                    </tr>
                                    <tr>
                                        <td>Oct - Nov 2019</td>
                                        <td>E-commerce</td>
                                        <td>Web app</td>
                                        <td><span class="table__round --high">6</span></td>
                                        <td><span class="table__round --middle">0</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Oct - Nov 2019</td>
                                        <td>E-commerce</td>
                                        <td>Web app</td>
                                        <td><span class="table__round --high">2</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">1</span></td>
                                    </tr>
                                    <tr>
                                        <td>Oct - Dec 2019</td>
                                        <td>E-commerce</td>
                                        <td>Web app</td>
                                        <td><span class="table__round --high">53</span></td>
                                        <td><span class="table__round --middle">1</span></td>
                                        <td><span class="table__round --low">0</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov - Dec 2019</td>
                                        <td>E-commerce</td>
                                        <td>Mobile app for Android</td>
                                        <td><span class="table__round --high">2</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov - Dec 2019</td>
                                        <td>E-commerce</td>
                                        <td>E-commerce</td>
                                        <td><span class="table__round --high">3</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov - Dec 2019</td>
                                        <td>E-commerce</td>
                                        <td>E-commerce</td>
                                        <td><span class="table__round --high">2</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">1</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 2019 </td>
                                        <td>Fintech</td>
                                        <td>Web app</td>
                                        <td><span class="table__round --high">1</span></td>
                                        <td><span class="table__round --middle">2</span></td>
                                        <td><span class="table__round --low">3</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 2019 </td>
                                        <td>Fintech</td>
                                        <td>Mobile app for IOS and Android</td>
                                        <td><span class="table__round --high">2</span></td>
                                        <td><span class="table__round --middle">4</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Dec 2019 </td>
                                        <td>Finance</td>
                                        <td>Corporate Web</td>
                                        <td><span class="table__round --high">2</span></td>
                                        <td><span class="table__round --middle">1</span></td>
                                        <td><span class="table__round --low">4</span></td>
                                    </tr>
                                    <tr>
                                        <td>Dec 2019 </td>
                                        <td>Automotive</td>
                                        <td>Corporate Web</td>
                                        <td><span class="table__round --high">4</span></td>
                                        <td><span class="table__round --middle">0</span></td>
                                        <td><span class="table__round --low">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Dec 2019 </td>
                                        <td>Service</td>
                                        <td>Member web</td>
                                        <td><span class="table__round --high">3</span></td>
                                        <td><span class="table__round --middle">4</span></td>
                                        <td><span class="table__round --low">3</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id=sampleReport>
            <br />
            <div class="mengapa-harus">Sample Report</div>
            <div class="container__">
                <div class="row sample-report">
                    <div class="col-sm-4">
                        <a href="assets/img/img-pentest/sample-report-sql.jpg" data-toggle="lightbox">
                            <img src="assets/img/img-pentest/sample-report-sql.jpg" class="img-responsive" alt="SQL Injection">
                            <div class="sample-report__text text-center">SQL Injection</div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="assets/img/img-pentest/sample-report-missing.jpg" data-toggle="lightbox">
                            <img src="assets/img/img-pentest/sample-report-missing.jpg" class="img-responsive" alt="Missing Authorization Mechanism">
                            <div class="sample-report__text text-center">Missing Authorization Mechanism</div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="assets/img/img-pentest/sample-report-bypass.jpg" data-toggle="lightbox">
                            <img src="assets/img/img-pentest/sample-report-bypass.jpg" class="img-responsive" alt="Bypassing Unrestricted File Upload">
                            <div class="sample-report__text text-center">Bypassing Unrestricted File Upload</div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-4" >
                        <a href="assets/img/img-pentest/sample-report-bug-finding.jpg" data-toggle="lightbox">
                            <img src="assets/img/img-pentest/sample-report-bug-finding.jpg" class="img-responsive" alt="Table Bug of Finding" style="border: solid 1px">
                            <div class="sample-report__text text-center">Table Bug of Finding</div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="assets/img/img-pentest/sample-report-local-storage.jpg" data-toggle="lightbox">
                            <img src="assets/img/img-pentest/sample-report-local-storage.jpg" class="img-responsive" alt="Unencrypted Local Storage">
                            <div class="sample-report__text text-center">Unencrypted Local Storage</div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="assets/img/img-pentest/sample-report-telnet.jpg" data-toggle="lightbox">
                            <img src="assets/img/img-pentest/sample-report-telnet.jpg" class="img-responsive" alt="Telnet Service Externally Available">
                            <div class="sample-report__text text-center">Telnet Service Externally Available</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer">
            <div class="container__">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        Webサイトセキュリティ診断サービスに関する、診断内容、レポート項目、費用、期間など詳細に関してはお気軽に日本語でお問い合わせいただければ幸いです。またSSL証明書の購入と設定に関しても良くお問い合わせいただきます。当社ではGlobalSign社のSSL証明書を扱っております。こちらまで(infoアットマークlogique.co.id）メールお送りいただくかこちらから問い合わせ送信いただきますようお願いいたします。<br /><br />
                        <a href="/jp/contact.php" target="_blank"><img alt="Form" src="assets/img/img-pentest/form-footer.png"
                                class="img-responsive center-block" /></a>
                        <br>
                        <div class="phone-contact">
                            <div>Phone : </div>
                            <b>+62(21) 2270 8935 / 36</b>
                            <br>
                            <a href="https://wa.me/+62811870321?text=Halo%20Sahabat%20LOGIQUE" target="_blank" rel="noreferrer"
                                style="vertical-align: top; color: #333"> <img src="/img/whatsapp.png" alt="WhatsApp" width="16"
                                    style="margin-right: 3px; vertical-align: sub;"> +62 811 870 321 </a>

                        </div>
                        <br>
                        Our other services:
                        <br>
                        <a target="_blank" href="/jp/services/recruitment-web-dev.php">採用サイト制作</a>
                        <div class="garis">&nbsp;&nbsp;|&nbsp;&nbsp;</div>
                        <a target="_blank" href="/jp/services/mobile-app-dev.php">モバイルアプリケーション制作 </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../footer.php'; ?>
    <script src="/js/jquery.matchHeight.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.3.0/ekko-lightbox.js"></script>

    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
</body>
<script>
$(function() {
    $('.each-plus-minus').matchHeight();
});
</script>

</html>