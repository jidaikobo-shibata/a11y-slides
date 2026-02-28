<?php
include_once('inc_theme.php');
$mode = filter_input(INPUT_GET, "mode") == 'sr' ? 'srmode' : 'slidemode';
$theme = get_slide_theme();
?><!DOCTYPE html>
<html lang="ja">
<head>
<?php if ($mode == 'slidemode'):?>
	<script src="./js/jquery.js" type="text/javascript"></script>
	<script src="./js/slidy.js" type="text/javascript"></script>
	<script src="./js/jquery.inc.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" media="screen, projection, print" href="./css/slidy.css" />
<?php endif; ?>
	<link rel="stylesheet" type="text/css" media="screen, projection, print" href="./css/base.css" />
	<link rel="stylesheet" type="text/css" media="screen, projection, print" href="./css/layout.css" />
	<title>ウェブアクセシビリティ基礎</title>
</head>
<body class="<?php echo $mode . ' theme-' . $theme ?>">

<!-- slide -->
<div class="slide titlepage">
<h1><big>ウェブアクセシビリティ基礎</big></h1>
<div id="usage">
<?php if ($mode == 'slidemode'):?>
<h2 style="margin: 0;">使い方</h2>
<ul>
	<li>キーボードの左右キーでスライドを操作できます</li>
</ul>
<p><a style="color:#fff !important;" href="<?php echo build_slide_url('./index.php', 'sr', $theme); ?>">（スクリーンリーダ用に切り替え）</a></p>
<?php else: ?>
<h2 style="margin: 0;">スクリーンリーダ用について</h2>
<ul>
	<li>スライドの仕様上、h1（見出し1）が多い構造になっています。</li>
</ul>
<p><a style="color:#fff !important;" href="<?php echo build_slide_url('./index.php', null, $theme); ?>">（スライド用に切り替え）</a></p>
<?php endif; ?>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>はじめに</h1>
<div class="incremental">
	<div class="non-incremental">
		<h2 style="font-size: 80% !important;">目的</h2>
		<p style="font-size: 70% !important;">一連のスライドは、総務省の「<a href="https://www.soumu.go.jp/main_content/000945249.pdf">みんなの公共サイト運用ガイドライン（2024年度版）〔PDF〕</a>」「6.2.2. 職員研修」で求められている内容を学ぶことができる内容です。</p>
	</div>

	<div>
		<h2 style="font-size: 80% !important;">対象（「みんなの公共サイト運用ガイドライン」から抜粋）</h2>
<blockquote><p style="font-size: 70% !important;">ホームページ等の運用に関わるできるだけ多くの職員を対象に職員研修を企画し実施します。</p>
<p style="font-size: 70% !important;">例：</p>
<ul style="font-size: 70% !important;">
	<li>ホームページ管理運営担当部署の職員</li>
	<li>各部署でページを作成する職員</li>
	<li>各部署でページ公開の承認を行う職員</li>
	<li>管理職<small>（ページの公開承認には直接携わらないが、ウェブアクセシビリティ取組を業務として実施することに理解を深めてもらうために実施する）</small></li>
</ul></blockquote>
	</div>

	<div>
	 <h2 style="font-size: 80% !important;">内容（「みんなの公共サイト運用ガイドライン」から抜粋）</h2>
<blockquote><p style="font-size: 70% !important;">少なくとも、以下の 4 点について理解してもらえるように、構成と内容を検討します。1～2 時間程度かけて、ウェブアクセシビリティにテーマを特化して実施することが有効です。</p>
<p style="font-size: 70% !important;">a) インターネットを活用した広報の重要性<br />
b) 配慮の対象<br />
c) ウェブアクセシビリティの重要性<br />
d) 具体的な対応方法の紹介</p></blockquote>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>ウェブアクセシビリティとは</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>「アクセシビリティ」と「ウェブアクセシビリティ」</h1>
<div class="incremental">
	<div class="non-incremental">
		<h2>アクセシビリティ</h2>
		<p class="cmt"><strong>アクセス（到達）のしやすさ</strong>。交通などの文脈で用いられることが多い言葉でしたが、転じて、製品やサービスの利用の可否という意味でも使われるようになりました。</p>
	</div>

	<div>
		<h2>ウェブアクセシビリティ</h2>
		<p class="cmt">さまざまな条件の利用者における、<strong>ウェブコンテンツの利用可能性</strong>。</p>
	</div>
	<div style="margin-top:10px;">
		<table class="tbl">
		<tr>
			<th>ウェブコンテンツとは</th>
			<td>ブラウザでアクセスできるすべてのコンテンツ<br />普通のウェブページ、PDF、動画、音声</td>
		</tr>
		</table>
	</div>
	<p style="text-align:center;margin:40px 0 0;"><strong>高齢者や障害者だけでなく、すべての利用者がその対象であることがポイントです</strong></p>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>UX（ユーザ体験）ピラミッドにおけるアクセシビリティ</h1>
<img src="./images/ux4.jpg" alt="UXピラミッド。詳しい代替テキストは以下に続ける。" style="width:100%;">
<details><summary style="text-align:right;">UXピラミッドの代替テキスト</summary>
<p>6つのレベルがあり、上3つが「快適な体験」に属する要素であり主観的で定性的なもの。土台を支える下の3つが「目的の達成」に関する要素で客観的で定量的なものとされている。</p>
<p>上から順に以下のように並んでおり、下に行くほど面積が大きくなる。</p>
<ol>
	<li><span lang="en">Level 6: MEANINGFUL</span> 価値がある・個人、社会にとって重要</li>
	<li><span lang="en">Level 5: PLEASURABLE</span> 楽しい・時間を割いてでも使いたい</li>
	<li><span lang="en">Level 4: CONVENIENT</span> 便利である・他人に勧めたくなる</li>
	<li><span lang="en">Level 3: USABLE</span> 使いやすい・ユーザーを混乱させない・無理なく見つかる</li>
	<li><span lang="en">Level 2: RELIABLE</span> 信頼できる・内容が正しい</li>
	<li><span lang="en">Level 1: FUNCTIONAL (USEFUL)</span> 機能する（使える）・アクセシブルである</li>
</ol>
</details>
<div class="incremental" style="margin-top: -20px;">
	<p class="cmt">アクセシビリティはウェブコンテンツの価値として根底にあるもの</p>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>本当の根底にあるもの - コンテンツの存在</h1>
<h2>ウェブアクセシビリティが確保できないコンテンツは削除した方がいい？</h2>
<ul class="incremental">
	<li>「このコンテンツ（動画等）がなければ、適合レベルAA準拠を達成できる」といった発想で、ウェブアクセシビリティを確保できていないコンテンツを公開しない、という考え方があります</li>
	<li>この考え方は<strong>コンテンツがウェブ上に存在するだけで誰もがアクセス可能というウェブアクセシビリティの特長を損ねてしまっています</strong>。たとえ問題のあるコンテンツであっても、削除してしまうと誰もアクセスできなくなります</li>
	<li>逆に、誰かがアクセスできれば、アクセスできない人は、アクセスできる人に尋ねることができます</li>
	<li>ウェブアクセシビリティ上の問題は、いずれ解消されることが望ましいですが、即時解消できないからといって、コンテンツを削除してしまうのは避けましょう</li>
</ul>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>ウェブアクセシビリティの場面</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>「さまざまな条件の利用者」の例1「障害と高齢」</h1>

<table class="tbl" style="margin-top:20px !important;">
<tr>
	<th style="width:8em;">視覚障害（全盲）</th>
	<td>画面を見ることができない<br />マウスを使えない</td>
</tr>
<tr>
	<th>視覚障害（ロービジョン）</th>
	<td>全体的に読みづらい・部分的に読めない・小さいものが読めない・特定の色の組み合わせが分かりづらい<br />マウスを使いづらい</td>
</tr>
<tr>
	<th>聴覚障害</th>
	<td>音声を聞くことができない</td>
</tr>
<tr>
	<th>上肢障害</th>
	<td>マウスを使いづらい</td>
</tr>
<tr>
	<th>知的障害</th>
	<td>コンテンツを理解しづらい</td>
</tr>
<tr>
	<th>注意力欠陥障害</th>
	<td>コンテンツに集中しづらい</td>
</tr>
<tr>
	<th>高齢者</th>
	<td>複合的な困難</td>
</tr>
</table>
</div>

<!-- slide -->
<div class="slide">
<h1>「さまざまな条件の利用者」の例2「障害がなくても……」</h1>
<table class="tbl" style="margin-top:20px !important;">
<tr>
	<th style="width: 10em;">メガネが壊れた<br />日光で画面が見づらい</th>
	<td>視覚障害</td>
</tr>
<tr>
	<th>周りが騒がしい<br />音声出力のない端末<br />職場なので音が出せない</th>
	<td>聴覚障害</td>
</tr>
<tr>
	<th>腕を怪我した</th>
	<td>上肢障害</td>
</tr>
<tr>
	<th>マウスが壊れた</th>
	<td>視覚障害、上肢障害</td>
</tr>
<tr>
	<th>疲労困憊</th>
	<td>注意力欠陥障害、知的障害</td>
</tr>
<tr>
	<th>高齢</th>
	<td>視覚障害、聴覚障害、上肢障害、知的障害 ほか</td>
</tr>
</table>
<!-- <p>など、類似の状況は誰にでもあり得ます。</p> -->
</div>

<!-- slide -->
<div class="slide">
<h1>障害ごとの情報取得の例</h1>

<table class="tbl" style="margin-top:20px !important;">
<tr>
	<th style="width:8em;">視覚障害（全盲）</th>
	<td>音声読み上げソフト（スクリーンリーダ）<br />音声入力ソフト、音声解説<br />キーボードの利用</td>
</tr>
<tr>
	<th>視覚障害（ロービジョン）</th>
	<td>画面拡大ソフト、コントラスト配慮、配色配慮</td>
</tr>
<tr>
	<th>聴覚障害</th>
	<td>字幕の利用、手話利用</td>
</tr>
<tr>
	<th>上肢障害</th>
	<td>キーボード及びオンスクリーンキーボードの利用<br />特殊なポインティングデバイスの利用</td>
</tr>
<tr>
	<th>知的障害</th>
	<td>平易な内容の代替コンテンツの利用</td>
</tr>
<tr>
	<th>注意力欠陥障害</th>
	<td>注意力を乱すコンテンツを避ける</td>
</tr>
<tr>
	<th>高齢者</th>
	<td>複合的な対応</td>
</tr>
</table>
</div>

<!-- slide -->
<div class="slide">
<h1>全盲視覚障害者がスクリーンリーダを利用する様子</h1>
<iframe style="width:1000px;min-height:600px;display:block;margin:20px auto 0;" src="https://www.youtube.com/embed/RLIKacI05fE?si=P_p4O4Kjgg3Z2F8o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<p style="text-align:center">YouTube 総務省動画チャンネル（@soumuchannel）より</p>
</div>

<!-- slide -->
<div class="slide">
<h1>ロービジョンの利用者がPCを利用する様子</h1>
<iframe style="width:1000px;min-height:600px;display:block;margin:20px auto 0;" src="https://www.youtube.com/embed/p80PJXMPIDY?si=P_p4O4Kjgg3Z2F8o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<p style="text-align:center">YouTube 総務省動画チャンネル（@soumuchannel）より</p>
</div>

<!-- slide -->
<div class="slide">
<h1>肢体不自由の利用者がPCを利用する様子</h1>
<video src="./movies/soumu-upper-limb-disorder.mp4" controls style="width:800px;min-height:600px;display:block;margin:20px auto 0;"></video>
<p style="text-align:center">総務省「障害者のウェブページ利用方法の紹介ビデオ」より</p>
<!-- <p style="text-align:center;font-size:80%;"><a href="https://www.youtube.com/watch?v=HXYklmUOz6A&t=150s">スマートフォン利用のサンプル（YouTubeチャンネル四肢麻痺車椅子野郎ムネ氏より）</a></p> -->
</div>

<!-- slide -->
<div class="slide">
<h1>アクセシブルなウェブサイトとは</h1>
<div class="incremental">
<div>
	<h2>ウェブサイトに支援機能を実装すること</h2>
	<ul>
		<li>文字の拡大機能をつけること</li>
		<li>背景色を変更できるようにすること</li>
		<li>読み上げ機能をつけること</li>
	</ul>
</div>
<p class="cmt">完全に無駄とは言いませんが、<strong>これらを必要とするほとんどの利用者は自分の環境で解決しています</strong></p>
<div>
	<h2>利用者ごとの利用方法を阻害しないように作ること</h2>
	<p>スクリーンリーダ、拡大鏡、オンスクリーンキーボードなどの様々な閲覧環境で閲覧できるようにすること</p>
</div>
	<p class="cmt">「どのように構築したら、様々な閲覧環境に配慮できるのか」が<strong>WCAGやJIS</strong>といった規格に書いてあります</p>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>キーボードで操作できることの重要性</h1>
<div class="incremental">
<h2>キーボードは様々な文字の入力と操作のできる機器</h2>
<div>
	<blockquote><p>すべての機能がキーボードを用いて実現できる場合、キーボードの利用者、(キーボード入力を生成する) 音声入力、(オンスクリーンキーボードを使用する) マウス、及び出力として疑似的なキーストロークを生成する様々な支援技術により、その機能を実現できる。キーボード入力が時間に依存しない限り、この柔軟性がある、又はあまねくサポートされる、及び様々な障害のある人が操作可能な入力形態は他にはない。</p><cite style="display:block;text-align: right;">WCAG 2.0〜2.2 ガイドライン 2.1からの引用</cite></blockquote>
</div>
<p class="cmt"><strong>キーボードはコンピュータやPCを扱う上で基本的かつ最も普遍的なインターフェース。<br />支援技術が何であれ、キーボードの入出力として解釈されることがとても多い</strong></p>
<table class="tbl">
<tr>
	<th>文字の入力</th>
	<td>アルファベットのキーと、数字のキー</td>
</tr>
<tr>
	<th>選択や決定</th>
	<td>タブキー、カーソルキー等による選択。エンターキー、スペースキーによる決定</td>
</tr>
</table>
<p class="cmt"><strong>キーボードでの操作を確保することはウェブアクセシビリティの要諦</strong></p>
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>ウェブアクセシビリティに関係のある制度</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>障害者差別解消法（2016年・改正法が2024年から施行）</h1>
<h2>権利条約に批准するために制定</h2>
<p>全ての国民が、障害の有無によって分け隔てられることなく、相互に人格と個性を尊重し合いながら共生する社会の実現に向け、障害を理由とする差別の解消を推進することを目的とした法律です。障害者権利条約に批准する条件のひとつでした。日本は2014年に批准。2025年2月現在、192カ国の批准国があります。</p>
<div class="incremental">
<div>
<h3>2つのポイント</h3>
<table class="tbl" style="margin-top:20px !important;">
<tr>
	<th>差別の禁止</th>
	<td>不当な差別的扱いの禁止。<strong>行政機関、民間共に義務</strong></td>
</tr>
<tr>
	<th>合理的配慮</th>
	<td>過重な負担にならない範囲での社会的障壁の除去。これを的確に行うために「環境の整備」に努めること。<strong>行政機関は義務、民間は2024年4月から義務</strong></td>
</tr>
</table>
</div>
<p class="cmt">ウェブアクセシビリティは、差別解消法による「基本方針」のなかでは、<strong>合理的配慮をスムーズに提供するための「環境の整備（事前的改善措置）」</strong>とされています。</p>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>合理的配慮</h1>
<h2 style="margin-bottom:100px;">過重な負担にならない範囲での社会的障壁の除去（内閣府「<a href="https://www8.cao.go.jp/shougai/suishin/sabekai_leaflet.html">障害者差別解消法リーフレット</a>」から）</h2>
<div class="incremental">
<div style="width:48%;text-align:center;float:left">
<img src="./images/rational1.jpg" alt="講演会の様子の画像。スクリーンによる字幕提供や手話提供が行われており、座席に配慮がある。" />
<p>障害のある人の障害特性に応じて、座席を決める。</p>
</div>
<div style="width:48%;text-align:center;float:right">
<img src="./images/rational2.jpg" alt="車椅子利用者が電車に載る様子。乗務員が着脱可能なスロープを使って、車椅子を押している。" />
<p>段差がある場合に、スロープなどを使って補助する。</p>
</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>差別解消法における「障害者」</h1>
<h2>医学モデルと社会モデル</h2>
<ul class="incremental">
	<li>差別解消法における障害者の定義は、<strong>障害者手帳の所持者に限らない</strong></li>
	<li>「障害」は心身の不具合の問題（いわゆる「医学モデル」）でなく、社会が作り出している<strong>社会的障壁</strong>であるという考え方</li>
</ul>
<div class="incremental" style="position:relative;min-height:500px;">
<div style="position:absolute;top:0;left:0;">
	<img style="width:100%;" src="./images/models_3-1.jpg" alt="段差の前にいる車椅子利用者" />
</div>
<div style="position:absolute;top:0;left:0;">
	<img style="width:100%;" src="./images/models_3-2.jpg" alt="医学モデルによる解決の説明。リハビリや義足を付けている様子。障害は個人の心身機能によるもの本人の努力・医療で障害の克服を目指す" />
</div>
<div style="position:absolute;top:0;left:0;">
	<img style="width:100%;" src="./images/models_3-3.jpg" alt="社会モデルによる解決の説明。バスにスロープをかけたり、エレベータを用意したりする図。車椅子利用者を障害者にしているのは社会。社会的障壁を取り除くことが重要" />
</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>ウェブサイトの社会モデル的「障害者」</h1>
<h2>さまざまな利用者のことを考えないで作ったサイト</h2>
<ul class="incremental">
	<li>地図やグラフについて、テキスト（文字データ）による情報提供がなく、スクリーンリーダで読み上げることができない</li>
	<li>マウスでしか使えない設計になっており、キーボード利用者では操作できない</li>
	<li>動画に字幕が提供されておらず、聴覚障害者が動画を理解できない</li>
</ul>
<div class="incremental" style="margin-top:80px;">
	<p class="cmt"><strong>配慮のない情報提供が、障害者を作ってしまう</strong></p>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>ウェブアクセシビリティ対応は法的義務？</h1>
<div class="incremental">
	<div>
		<h2>公的機関は実質義務</h2>
		<p>法的には努力義務だが、総務省「みんなの公共サイト運用ガイドライン」に従うことになっているので、<strong>実質義務</strong>。</p>
		<blockquote><p>障害者差別解消法（平成28年4月1日施行）において、ウェブアクセシビリティを含む情報アクセシビリティは、合理的配慮を的確に行うための<strong>環境の整備</strong>と位置づけられており、事前的改善措置として計画的に推進することが求められています。<cite>（みんなの公共サイト運用ガイドライン（2016年版））</cite></p></blockquote>
	</div>
	<div>
		<h2>民間は？</h2>
		<ul>
			<li>民間事業者にとって努力義務だった<strong>「合理的配慮」</strong>が義務に（2024年4月1日から）</li>
			<li><strong>義務化されたのは「合理的配慮」であって、ウェブサイトのアクセシビリティ対応は義務とは言えない</strong></li>
			<li>もちろんウェブサイトがアクセシブルであることは、ウェブサイトの価値を高めることなのは間違いない</li>
		</ul>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>ウェブアクセシビリティの確保の仕方 1<br /><small>JIS X 8341-3とは？</small></h1>
</div>

<!-- slide -->
<div class="slide">
<h1>「ウェブアクセシビリティの確保」≒「JIS X 8341-3:2016に準拠する」</h1>
<h2>産業規格への準拠</h2>
<p><strong>日本産業規格であるJIS X 8341-3:2016の規格に<strong>準拠</strong>することで、<strong>一定の</strong>ウェブアクセシビリティを確保できます</strong></p>
<div class="incremental" style="margin-top:40px;position:relative;">
	<div>
		<h3>「適合」でなくて「準拠」？</h3>
		<p>JIS X 8341-3:2016は、第三者の認証機関が適合性の評価を行うのではなく、ウェブサイトのオーナが適合性の評価を行うため、「適合」を宣言するには「供給者適合宣言（JIS Q 17050）」が必要ですが、手間が多いので、これよりも簡易に規格への対応度を表明できる方法として、ウェブアクセシビリティ基盤委員会（WAIC）が提唱する「準拠（配慮）」を用いることが一般的です。</p>
	</div>

	<div>
		<h3>一定の？</h3>
		<p>規格は改善されます。JIS X 8341-3:2016は、スマートフォン等への配慮が弱いと言われていますが、改訂されることで、スマートフォン配慮のみでなく、より多様な環境や利用者を意識した規格になります。</p>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>一致規格であること</h1>
<h2>国際規格との関係</h2>
<ul class="incremental">
	<li>「任意規格の制定に当たって、国際規格が存在するとき又はその仕上がりが目前であるときは、当該国際規格又はその関連部分を基礎として用いる」（WTO/TBT協定）</li>
	<li><strong>JIS X 8341-3:2016</strong>は、国際規格である<strong>ISO/IEC 40500:2012</strong>との<strong><strong>一致規格</strong></strong></li>
	<li>ISO/IEC 40500:2012は<strong>WCAG 2.0</strong>という技術標準をそのまま採用</li>
	<li>WCAG（Web Content Accessibility Guidelines）はW3CのWAIが作成</li>
</ul>
<div class="incremental">

<p class="cmt">WCAG 2.0は2008年勧告。WCAG 2.1は2018年6月に勧告。WCAG 2.2は2023年10月5日に勧告。<br /><strong>次のJISは、WCAG 2.2と同じ内容になる見込み</strong>です。</p>

<div class="incremental" style="width:1000px;margin:40px auto 0;position:relative;min-height:300px;">
	<div style="position:absolute;top:0;">
		<img style="width:100%;" src="./images/wcag-iso-jis01.jpg" alt="WCAG 2.0（W3C）" />
	</div>
	<div style="position:absolute;top:0;">
		<img style="width:100%;" src="./images/wcag-iso-jis02.jpg" alt="ISO/IEC 40500:2012（国際標準化機構）" />
	</div>
	<div style="position:absolute;top:0;">
		<img style="width:100%;" src="./images/wcag-iso-jis03.jpg" alt="JIS X 8341-3:2016（日本産業規格）" />
	</div>
	</div>
</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>JISには何が書いてあるのか？</h1>
<h2>4つの原則と61の達成基準</h2>
<div class="incremental">
<table class="tbl">
<tr>
	<th>4つの原則</th>
	<td>知覚可能、操作可能、理解可能、堅牢</td>
</tr>
<tr>
	<th>12のガイドライン</th>
	<td>4つの原則について抽象の度合いを下げたもの。代替テキストのガイドライン等</td>
</tr>
<tr>
	<th>61の達成基準</th>
	<td>アクセシビリティ確保のための具体的な達成内容。スクリーンリーダ向けの情報提供、キーボードでの操作の確保、アクセシブルな動画の要件などウェブにおけるアクセシビリティを確保するために達成すべき基準</td>
</tr>
</table>
<div>
<h2>適合要件</h2>
<p>適合レベル、ウェブページ全体、プロセス全体、アクセシビリティ サポーテッド、非干渉についての説明</p></div>
<div>
<h2>附属書</h2>
<ul>
	<li>ウェブアクセシビリティの確保・維持・向上のプロセスに関する推奨事項（附属書JA）</li>
	<li>試験方法（附属書JB）</li>
</ul>
</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>JISを読むには</h1>
<div class="incremental">
	<div>
		<h2>一時的な閲覧</h2>
		<p>日本産業標準調査会（https://www.jisc.go.jp/）のJIS検索機能で「X8341-3」を検索したら読めます（要ユーザ登録）。</p>
	</div>
	<div>
		<h2>購入する</h2>
		<p>日本規格協会（https://www.jsa.or.jp/）で購入できます。</p>
	</div>
	<div>
		<h2>元になった文書を読む</h2>
		<p>JISのもとになった文書「WCAG」の翻訳をWAIC（https://waic.jp/）が公開しているのでここで読めます。<br />ただし、「附属書」は、元の文書にありません。JISを読む必要があります。</p>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>WAICが翻訳し公開している文書</h1>
<h2>翻訳文書の役割とJISとの関係</h2>
<table class="tbl">
<tr>
	<th>WCAG 2.0</th>
	<td style="line-height: 1.4;font-size:90%;">Web Content Accessibility Guidelines (WCAG) 2.0<br /><strong>いわゆる本体部分。附属書を除くとほぼJISと同じ内容。</strong><br />達成基準が列挙されている。技術非依存。抽象的。<br /><a href="https://waic.jp/docs/WCAG20/Overview.html" style="font-size: 70%;">https://waic.jp/docs/WCAG20/Overview.html</a></td>
</tr>
<tr>
	<th>WCAG 2.0 解説書</th>
	<td style="line-height: 1.4;font-size:90%;">Understanding WCAG 2.0<br />本体には含まれない。<br />WCAG 2.0の副読本であり、達成基準を解説。<br /><a href="https://waic.jp/docs/UNDERSTANDING-WCAG20/Overview.html" style="font-size: 70%;">https://waic.jp/docs/UNDERSTANDING-WCAG20/Overview.html</a></td>
</tr>
<tr>
	<th>WCAG 2.0 達成方法集</th>
	<td style="line-height: 1.4;font-size:90%;">Techniques for WCAG 2.0<br />本体には含まれない。<br />達成基準を満たす、具体的な事例を紹介している。<br /><a href="https://waic.jp/docs/WCAG-TECHS/Overview.html" style="font-size: 70%;">https://waic.jp/docs/WCAG-TECHS/Overview.html</a></td>
</tr>
</table>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>ウェブアクセシビリティの確保の仕方 2<br /><small>PDCAサイクルと方針の策定</small></h1>
</div>

<!-- slide -->
<div class="slide">
<h1>ウェブアクセシビリティを維持する大きな流れ</h1>
<h2>PDCAサイクル</h2>
<p>PDCAは、Plan（計画）→ Do（実行）→ Check（評価）→ Action（改善）のサイクルを繰り返し行うことで、継続的な事業の改善を目指す方法論。</p>

<div class="incremental" style="width:1300px;margin:40px auto 0;position:relative;min-height:400px;">
	<div style="position:absolute;top:0;">
		<img style="width:100%;" src="./images/pdca3-01.jpg" alt="Plan: ウェブアクセシビリティ方針の策定" />
	</div>
	<div style="position:absolute;top:0;">
		<img style="width:100%;" src="./images/pdca3-02.jpg" alt="Do: 制作及びサイト運営" />
	</div>
	<div style="position:absolute;top:0;">
		<img style="width:100%;" src="./images/pdca3-03.jpg" alt="Check: JIS試験（検証）" />
	</div>
	<div style="position:absolute;top:0;">
		<img style="width:100%;" src="./images/pdca3-04.jpg" alt="Act: 修正" />
	</div>
	<div style="position:absolute;top:0;">
		<img style="width:100%;" src="./images/pdca3-05.jpg" alt="Plan: ウェブアクセシビリティ方針の見直し" />
	</div>
</div>

</div>

<!-- slide -->
<div class="slide">
<h1>ウェブアクセシビリティ方針の策定</h1>
<div class="incremental">
<div>
<h2>ウェブアクセシビリティ方針とは？</h2>
<ul>
	<li>JIS X 8341-3:2016 附属書JA「1 企画」で作成が求められている文書。サイト上での公開が推奨される</li>
	<li>詳しい書き方はWAICが公開している「<a href="https://waic.jp/docs/jis2016/accessibility-plan-guidelines/">ウェブアクセシビリティ方針策定ガイドライン</a>」に従うとよい</li>
	<li>ウェブアクセシビリティを確保する<strong>「対象」</strong>と、目標とする<strong>「適合レベル（及び対応度）」</strong>を明記する</li>
	<li>対応度に関しては、WAICが公開している「<a href="https://waic.jp/docs/jis2016/compliance-guidelines/">ウェブコンテンツの JIS X 8341-3:2016 対応度表記ガイドライン</a>」に従う</li>
</ul>
</div>

<div>
	<h2>対象と適合レベル（及び対応度）</h2>
	<table class="tbl" style="margin-top:20px !important;">
	<tr>
		<th>対象</th>
		<td>URL等で指定。どういったウェブコンテンツを対象とするのかを確定する</td>
	</tr>
	<tr>
		<th>適合レベル（及び対応度）</th>
		<td>3つの適合レベル（A、AA、AAA）のうち、どの適合レベルのどの対応度(後述)を目標とするか決める</td>
	</tr>
	</table>
</div>

</div>
</div>

<?php include('inc_conformance_level.php') ?>

<!-- slide -->
<div class="slide titlepage">
<h1>「ウェブアクセシビリティ基礎」おわりに<br />PCとインターネットが変えた障害者の世界</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>PCとインターネットが変えた障害者の世界</h1>
<div class="incremental">
<h2>PC（デバイスとテキストデータ）がアクセシビリティを変えた</h2>
<div>
	<p>誰かの力を借りずに、あるいは点字資料の用意等の特別の配慮がなくても、情報の取得/作成ができるようになった</p>
	<table class="tbl">
	<tr>
		<th>視覚障害者</th>
		<td>スクリーンリーダによって、<strong>単独で</strong>テキストを理解し、<strong>単独で</strong>晴眼者向けのテキストを作成できるようになった</td>
	</tr>
	<tr>
		<th>聴覚障害者</th>
		<td>テキストデータであれば、聴覚に頼らず、<strong>単独で</strong>情報を得られる</td>
	</tr>
	<tr>
		<th>上肢障害者</th>
		<td>デバイス（キーボードやポインティングデバイス）を使うことによって、<strong>単独で</strong>操作/入力ができる</td>
	</tr>
	</table>
</div>

<div>
<h2>インターネットが世界を拡げた</h2>
<p>情報は、インターネットにアップするだけで、<strong>PCによって、一定のアクセシビリティが確保される</strong>。</p>
</div>

<p class="cmt"><strong>「インターネットにアップされている」というそれだけで、すでに高いアクセシビリティが確保されているといえる。</strong></p>

</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>以上です。いったんおつかれさまでした。次のページは分岐です。</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>分岐</h1>
<ul>
	<li><a href="./for-editors.php">更新担当者のためのウェブアクセシビリティ基礎</a></li>
	<li><a href="./for-orders.php">発注担当者のためのウェブアクセシビリティ基礎</a></li>
</ul>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>appendix: 閲覧者用のまとめ</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>まとめ（その1）</h1>
<ul class="incremental">
<li>ウェブアクセシビリティとは
<ul class="incremental">
	<li>高齢者・障害者を含むすべての利用者における情報の利用可能性</li>
	<li>ウェブコンテンツの価値の土台を支える概念</li>
	<li>アクセシブルでないからコンテンツを削除する、ということをしない。コンテンツがウェブ上に存在するだけで誰もがアクセス可能という特長を忘れない</li>
</ul></li>
<li>ウェブアクセシビリティの場面
<ul class="incremental">
	<li>情報へのアクセスにおける障害者の困難と乗り越え方を想像すること</li>
	<li>心身の障害がなくても、状況によっては、障害があるのと同じ状況が普遍的に存在することを知ること</li>
	<li>特別な機能の実装を検討する前に、障害者の利用を阻害しないような実装を検討すること</li>
</ul></li>
</ul>
</div>

<!-- slide -->
<div class="slide">
<h1>まとめ（その2）</h1>
<ul class="incremental">
<li>ウェブアクセシビリティに関係のある制度
<ul class="incremental">
	<li>ウェブアクセシビリティは「障害者差別解消法」では「合理的配慮をスムーズに提供するための『環境の整備』」として、公的機関は事実上義務、民間は努力義務が求められている</li>
	<li>障害者差別解消法が想定する「社会モデル」の概念を大切にする。社会の有りようで、困っている人は減らすことができる</li>
</ul></li>
<li>ウェブアクセシビリティの確保の仕方
<ul class="incremental">
	<li>JIS X 8341-3:2016にウェブアクセシビリティの確保の仕方が書いてある。WAICが翻訳している文書がJISと同等であり、周辺文書も充実している</li>
	<li>ウェブアクセシビリティ方針を立て、対象と目標を決定する</li>
	<li>PDCAサイクルをもちいて、ウェブアクセシビリティ確保を持続する</li>
</ul></li>
</ul>
</div>

</body>
</html>
