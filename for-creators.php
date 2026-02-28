<?php $mode = filter_input(INPUT_GET, "mode") == 'sr' ? 'srmode' : 'slidemode'; ?><!DOCTYPE html>
<html lang="ja">
<head>
	<meta name="copyright" content="&#169; 2024 jidaikobo Inc." />
<?php if ($mode == 'slidemode'):?>
	<script src="./js/jquery.js" type="text/javascript"></script>
	<script src="./js/slidy.js" type="text/javascript"></script>
	<script src="./js/jquery.inc.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" media="screen, projection, print" href="./css/slidy.css" />
<?php endif; ?>
	<link rel="stylesheet" type="text/css" media="screen, projection, print" href="./css/base.css" />
	<link rel="stylesheet" type="text/css" media="screen, projection, print" href="./css/layout.css" />
	<title>ウェブサイト制作者のためのウェブアクセシビリティ基礎</title>
</head>
<body class="<?php echo $mode ?>">

<!--
適合要件も書く

あと、制作者向けなら、そもそもHTMLをちゃんと使いましょう？構造化しましょう？？、HTMLをちゃんと使うだけでそもそもだいぶアクセシブルですよ、という話が、細かい対応の話の前にあると個人的にはうれしいですが、もうそれはウェブ制作的には言ったところで仕方がなかったりするんでしょうか。
-->

<!-- slide -->
<div class="slide titlepage">
<h1><big>ウェブサイト制作者のためのウェブアクセシビリティ基礎</big></h1>
<div id="usage">
<?php if ($mode == 'slidemode'):?>
<h2 style="margin: 0;">使い方</h2>
<ul>
	<li>キーボードの左右キーでスライドを操作できます</li>
</ul>
<p><a style="color:#fff !important;" href="./for-orders.php?mode=sr">（スクリーンリーダ用に切り替え）</a></p>
<?php else: ?>
<h2 style="margin: 0;">スクリーンリーダ用について</h2>
<ul>
	<li>スライドの仕様上、h1（見出し1）が多い構造になっています。</li>
</ul>
<p><a style="color:#fff !important;" href="./for-orders.php">（スライド用に切り替え）</a></p>
<?php endif; ?>
</small>
</div>
</div>

<!-- slide -->
<?php include('inc_komarushi.php'); ?>

<!-- slide -->
<div class="slide titlepage">
<h1>発注について</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>発注主体の確認「民間の組織」</h1>
<h2>発注者が民間組織の場合</h2>
<div class="incremental">
<div>
<h3>法的な義務</h3>
<ul>
	<li>日本国内の場合、ウェブアクセシビリティについての法的な遵守義務は存在しない</li>
	<li>企業の社会的責任の意識の高まりや、合理的配慮の提供をスムーズに行うための事前的措置としてウェブアクセシビリティを意識する動きは増えている</li>
</ul>
</div>
<p class="cmt">民間の場合、スマートフォン等への対応が弱いJIS X 8341-3:2016（つまりWCAG 2.0）でなく、より多様な利用シーンを想定したWCAG 2.2を技術標準として採用することも多い</p>

<div>
<h3>グローバル企業の訴訟リスク</h3>
<ul>
	<li>民間のB2C、B2Bであれば、ウェブアクセシビリティについての法的な遵守事項は、原則、どこの国にも、存在しない様子</li>
</ul>
</div>
<p class="cmt">グローバル企業の海外向けのサイトにおいては、日本の企業でも訴訟事例は起きているので、法的拘束力はなくても、とくに米国で訴訟リスクはある（<a href="https://www.accessibility.com/search?groupId=19966467967&term=japan&type=SITE_PAGE&type=LANDING_PAGE&type=BLOG_POST&type=LISTING_PAGE">参考:Search Results: Within Digital Accessibility Lawsuits</a>）</p>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>発注主体の確認「公的機関」</h1>
<div class="incremental">
<h2>発注者が国内の公的機関の場合</h2>
<div>
<h3>実質義務</h3>
<ul>
	<li>ウェブアクセシビリティについての法的な遵守事項は存在しないが、総務省が出している「<a href="https://www.soumu.go.jp/main_sosiki/joho_tsusin/b_free/guideline.html">みんなの公共サイト運用ガイドライン</a>」の影響力が強く、実質、義務</li>
	<li>ウェブサイトの構築業務の場合は、本質的に対応が不可能だが、公的機関がウェブサービスを調達する場合は、<a href="https://www.soumu.go.jp/main_sosiki/joho_tsusin/b_free/jikohyokayoshiki.html">情報アクセシビリティ自己評価様式</a>の提出を求められることがある</li>
</ul>
</div>
<h3>みんなの公共サイト運用ガイドライン（2024年度版）が求める内容</h3>
<ul>
	<li>JIS X 8341-3:2016 AA準拠（<a href="https://waic.jp/docs/jis2016/compliance-guidelines/202104/">WAIC 対応度表記ガイドライン</a>による。方針の公開、試験の実施、達成基準への適合、試験結果の公開）</li>
	<li>WCAG 2.2の達成基準の先取り（WCAG 2.2は次期JISの予定がある）</li>
	<li>「ウェブアクセシビリティ取組確認・評価結果」の作成（ガイドラインの作成、ウェブアクセシビリティ研修の実施を含む）</li>
</ul>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>発注主体の確認「公共交通機関」</h1>
<div class="incremental">
<h2>発注者が国内の公共交通機関の場合</h2>
<div>
<h3>国交省のバリアフリー整備ガイドライン</h3>
<p><a href="https://www.mlit.go.jp/sogoseisaku/barrierfree/sosei_barrierfree_mn_000001.html">国交省の「バリアフリー整備ガイドライン」</a>の「<a href="https://www.mlit.go.jp/sogoseisaku/barrierfree/content/001734098.pdf">第５部 情報提供のアクセシビリティ確保に向けたガイドライン（PDF）</a>」では、以下のようになっている</p>
</div>
<blockquote><p>「みんなの公共サイト運用ガイドライン」（総務省）では、公的機関はウェブアクセシビリティに関する日本産業規格である JIS X 8341-3:2016 の適合レベル「AA」に準拠することが求められている。そのため、公共交通事業者等のウェブサイトにおいても、レベル「AA」に準拠することを基本とする。</p></blockquote>
<div>
<h2>公共交通事業者とは</h2>
<ul>
	<li><a href="https://www.mlit.go.jp/page/kanbo01_hy_002594.html">国交省の所管法人</a></li>
	<li>鉄道事業者やバス事業者、航空運送事業者など、公共交通機関を運営する事業者</li>
</ul>
</div>

</div>
</div>

<!-- slide -->
<div class="slide">
<h1>海外の場合</h1>
<div class="incremental">
<div>
<h2>アメリカ</h2>
<ul>
	<li>アメリカの場合、米国連邦政府が調達する可能性のあるウェブサービスの場合は、法的な遵守事項がある（リハビリテーション法508条。アメリカ連邦政府が調達する情報通信技術（ICT）について、アクセシビリティの確保を求める法律。この法律の、<a href="https://www.ecfr.gov/current/title-36/chapter-XI/part-1194">連邦規則集（法律の規則や手続きを定めたもの）を参照</a>）。</li>
	<li>VPAT（Voluntary Product Accessibility Template）の提出（ウェブサービスの場合）</li>
</ul>
</div>
<div>
<h2>EU</h2>
<p>EU内（およびオーストラリア）でのEU内の公的機関が調達する情報通信技術（ICT）について、アクセシビリティの確保を求める標準規格がある（<a href="https://eur-lex.europa.eu/eli/dir/2016/2102/oj">EU指令2016/2102</a>が参照している<a href="https://www.etsi.org/deliver/etsi_en/301500_301599/301549/03.02.01_60/en_301549v030201p.pdf">EN 301 549</a>の運用において、具体的な技術標準としてWCAGを指定）。</p>
</div>
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>仕様と方針の確認</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>仕様書の確認</h1>
<div class="incremental">
<div>
<h2>調達仕様書・提案依頼書（RFP: Request for Proposal）のウェブアクセシビリティの要件</h2>
<ul>
	<li>ウェブサイトが目標とする適合レベル及び対応度</li>
	<li>目標とする適合レベルよりうえの達成基準を含める場合の記述</li>
	<li>JIS X 8341-3:2016を適用する対象範囲</li>
	<li>依存するウェブコンテンツ技術のリスト</li>
	<li>試験の実施</li>
	<li>納品する成果物</li>
	<li>（参考）教育・研修の実施</li>
	<li>（参考）ユーザテストの実施</li>
</ul></div>
<p class="cmt">ウェブアクセシビリティに関する要件は「<a href="https://waic.jp/docs/jis2016/order-guidelines/">JIS X 8341-3:2016 対応発注ガイドライン</a>」をもとに作成されることが望ましいが、そうでない場合（上記要件が記載されていない場合）、要件を個別に確認する必要がある。</p>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>要注意の仕様書</h1>
<div class="incremental">
<div>
<h2>対応内容が曖昧 (1)</h2>
<blockquote><p>ウェブアクセシビリティに対応すること</p></blockquote>
<ul>
	<li>適合レベルと対応度が明記されていない</li>
</ul></div>

<div>
<h2>対応内容が曖昧 (2)</h2>
<blockquote><p>JIS X 8341-3に適合すること</p></blockquote>
<ul>
	<li>規格の改正年がない</li>
	<li>JIS X 8341-3は「適合」が難しく、「準拠」または「配慮」を方針とすることが推奨</li>
</ul></div>

<div>
<h2>対応内容が曖昧 (3)</h2>
<blockquote><p>JIS X 8341-3:2016の適合レベルAAを満たすこと</p></blockquote>
<ul>
	<li>対応度が明記されていない。「準拠」と「配慮」で対応が大きく違う</li>
</ul></div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>ウェブアクセシビリティ方針の確認</h1>
<h2>ウェブアクセシビリティ方針がない場合</h2>
<ul>
	<li>WAICが公開している「<a href="https://waic.jp/docs/jis2016/accessibility-plan-guidelines/202112/">ウェブアクセシビリティ方針策定ガイドライン</a>」をもとに、クライアントと一緒に作成をする。</li>
</ul>
<div class="incremental">
<h2>ウェブアクセシビリティ方針がある場合</h2>
<ul>
	<li>対象範囲が客観的に判断できるかどうか？</li>
	<li>適合レベル（A、AA、AAA）と対応度（配慮、準拠、一部準拠）が妥当か？</li>
	<li>追加で目標とする達成基準がある場合は、その内容</li>
</ul>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>シフトレフト</h1>
<h2>ウェブサイト構築の上流工程からアクセシビリティを意識する</h2>
<div class="incremental">
<h3>シフトレフト（Shift Left）のおすすめ</h3>
<div>
<p>一通りウェブサイトが完成してから、アクセシビリティの施策を行うのではなく、最初からアクセシビリティを意識して設計やデザインを行うことで手戻りを減らす</p>
<p style="text-align: center;"><img style="width: 100%;margin-top: 50px;" src="./images/shiftleft.jpg" alt="シフトレフトの図。左から、1マスずつ横に並んで、企画、要求定義、設計、デザイン、実装、ウェブアクセシビリティの確認、運用となっており、「ウェブアクセシビリティの確認」の内容が「ウェブアクセシビリティ試験等」となっている。図では、「ウェブアクセシビリティの確認」を左にずらす矢印の指示があり、「企画、要求定義、設計」の段階で、ウェブアクセシビリティを確認することを求めている"></p>
</div>
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>JISの「適合」とWCAGの「適合」について</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>JISの「適合」について</h1>
<h2>JIS X 8341-3:2016でのJISの適合は一般的ではない</h2>
<div class="incremental">
JIS X 8341-3:2016は、

（途中！）

</div>
</div>


<!-- slide -->
<div class="slide titlepage">
<h1>「適合要件」について</h1>
</div>

<?php include('inc_conformance_level.php') ?>

<!-- slide -->
<div class="slide">
<h1>ウェブページ全体</h1>
<h2>ウェブページ単位での適合が前提</h2>
<div class="incremental">
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>設計段階で知っておくべきこと「非干渉」</h1>
</div>

<!-- slide -->
<?php include('inc_non_interference.php'); ?>

<!-- slide -->
<div class="slide titlepage">
<h1>非干渉の達成基準を理解する</h1>
</div>

<!-- slide -->
<?php include('inc_non_interference_check.php'); ?>

<!-- slide -->
<div class="slide titlepage">
<h1>アクセシビリティを意識した設計</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>アクセシビリティを意識した設計</h1>
<h2>基本的な仕様でアクセシビリティを意識する</h2>
<ul class="incremental">
	<li>フォーカスインジケータを消さない</li>
	<li>インタラクションの動きを意識する</li>
	<li>コンテンツの配置順を意識する</li>
	<li>時間制限のあるコンテンツを作らない</li>
	<li>formにはラベルをつける</li>
	<li>固定表示した領域の実装</li>
	<li>ariaに気をつける</li>
</ul>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>サイトの共通部分（ヘッダ / フッタ）のアクセシビリティについて</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>ヘッダ / フッタの実装</h1>
<h2>共通部分のバリアは影響が大きい</h2>
<div class="incremental">
<div>
全ページにあるバリアは、全ページでバリアとして影響をおよぼす。<br />
ウェブアクセシビリティの試験を実施すると、全ページに不適合がつく可能性がある。
</div>
<div>
<h2>とくに気をつけるといいこと</h2>
<ul>
	<li>グローバルナビゲーションのキーボード操作</li>
	<li>スマートフォン時のグローバルナビゲーションのキーボード操作</li>
</ul>
</div>
</div>
</div>

<!-- slide -->
<?php include('inc_keep_content_accessible.php'); ?>

<!-- slide -->
<div class="slide titlepage">
<h1>以上です。おつかれさまでした。</h1>
</div>

</body>
</html>
