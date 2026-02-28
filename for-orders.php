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
	<title>発注者のためのウェブアクセシビリティ基礎</title>
</head>
<body class="<?php echo $mode ?>">

<!-- slide -->
<div class="slide titlepage">
<h1><big>発注者のためのウェブアクセシビリティ基礎</big></h1>
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
<h1>アクセシブルなサイトの発注</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>仕様書の作成</h1>
<div class="incremental">
<div>
<h2>調達仕様書・提案依頼書（RFP: Request for Proposal）の作成</h2>
<ul>
	<li>「<a href="https://waic.jp/docs/jis2016/order-guidelines/">JIS X 8341-3:2016 対応発注ガイドライン</a>」をもとに作成することができる</li>
</ul>
</div>
<div>
<h2>仕様書への記載事項</h2>
<ul>
	<li>ウェブサイトが目標とする適合レベル及び対応度</li>
	<li>目標とする適合レベルよりうえの達成基準を含める場合の記述</li>
	<li>JIS X 8341-3:2016を適用する対象範囲</li>
	<li>依存するウェブコンテンツ技術のリスト</li>
	<li>試験の実施</li>
	<li>納品する成果物</li>
	<li>（参考）教育・研修の実施</li>
	<li>（参考）ユーザテストの実施</li>
</ul></div></div>
</div>

<!-- slide -->
<div class="slide">
<h1>業者選定・発注 (1)</h1>
<h2>アクセシビリティ方針がある場合</h2>
<ul>
	<li>アクセシビリティ方針の内容を実現できることを要件に含める</li>
</ul>
<div class="incremental">
	<div>
		<h3>文例</h3>
		<blockquote><p>JIS X 8341-3:2016のレベルAAに準拠すること。<br />本仕様書における「準拠」という表記は、情報通信アクセス協議会ウェブアクセシビリティ基盤委員会「<a href="https://waic.jp/docs/jis2016/compliance-guidelines/202104/">ウェブコンテンツの JIS X 8341-3:2016 対応度表記ガイドライン 2021年4月版</a>」で定められた表記による。</p><p>「準拠」の要件として、適合レベルAAの試験を行い、試験結果を作成し公開すること。</p></blockquote>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>業者選定・発注 (2)</h1>
<h2>アクセシビリティ方針がない場合</h2>
<ul>
	<li>アクセシビリティ方針の作成の支援をできることを条件に含める</li>
</ul>
<div class="incremental">
	<div>
		<h3>文例</h3>
		<blockquote><p>JIS X 8341-3:2016で求められているアクセシビリティ方針の作成を支援すること。適切な対象範囲と適合レベル及び対応度を提案し、作成したアクセシビリティ方針に沿った制作を行うこと。</p>
<p>アクセシビリティ方針の作成の際は、情報通信アクセス協議会ウェブアクセシビリティ基盤委員会が作成している「<a href="https://waic.jp/docs/jis2016/accessibility-plan-guidelines/202112/">ウェブアクセシビリティ方針策定ガイドライン</a>」を参考にすること</p></blockquote>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>業者選定・発注 (3)</h1>
<h2>試験の実施を条件に入れる</h2>
<ul>
	<li>アクセシビリティ方針で「準拠」「一部準拠」を方針としている場合は、試験を実施することを条件に含める</li>
	<li>「配慮」方針の場合は、試験の実施と公開は必須ではない</li>
	<li>アクセシビリティの試験を行うにあたって、求められる資格等はない。制作した業者が行って良いし、制作した業者が外部委託しても良い。発注者が行うことも可能<ul class="incremental"><li>資格等がないため、試験の品質は業者に依存するが、一定の品質を保つために「<a href="https://waic.jp/docs/jis2016/test-guidelines/">JIS X 8341-3:2016 試験実施ガイドライン</a>」を用いることを求めることも有為</li>
</ul>
</li>
</ul>
<div class="incremental">
	<div>
		<h3>文例</h3>
		<blockquote><p>JIS X 8341-3:2016で求められているアクセシビリティの試験を行うこと。試験は受託者自身あるいは適切な再委託先を選定し実施すること。</p></blockquote>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>アクセシブルなPDFの発注</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>アクセシブルなPDFの発注</h1>
<h2>すこしでもデザイン性のあるPDFでアクセシビリティを確保することは困難</h2>
<ul class="incremental">
	<li>チラシ・パンフレット等を作成する際、PDFを同時に発注することがある</li>
	<li>こういったPDFのアクセシブルにすることはほとんど不可能なので、可能であれば同等の内容のHTMLを発注する（か自分で用意する）</li>
	<li>表題、見出し、地の文しかないようなシンプルなPDFの場合は、アクセシブルにすることもできる
<ul>
	<li><a href="https://support.microsoft.com/ja-jp/office/%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B7%E3%83%93%E3%83%AA%E3%83%86%E3%82%A3%E3%81%AE%E9%AB%98%E3%81%84-pdf-%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%82%92%E4%BD%9C%E6%88%90%E3%81%99%E3%82%8B-064625e0-56ea-4e16-ad71-3aa33bb4b7ed">参考: Microsoft社「アクセシビリティの高い PDF ファイルを作成する」</a></li>
	<li><a href="https://a11yc.com/city-komaru/practice/download/ecodrive_event.1201.pdf">アクセシブルなPDFの例（駒瑠市）</a></li>
</ul>
</li>
</ul>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>成果物の確認（検証と試験）</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>試験・検証 (1)</h1>
<h2>アクセシブルかどうかを確認する</h2>
<ul>
	<li>規格（JIS / WCAG）で定められた達成基準をもとに、適合しているかどうかを確認</li>
	<li>試験に必要な資格はない</li>
</ul>
<div class="incremental">
	<div>
	<h2>知識が不十分であってもアクセシビリティの品質確認は有為</h2>
	<ul>
		<li>専門的な知識があるに越したことはないが「アクセシビリティ」の観点からさらっとであっても確認を行うことはとても有為</li>
		<li>このスライドでは、試験結果の公開を伴わない品質確保のための確認行為を「検証」と呼びます</li>
	</ul>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>試験・検証 (2)</h1>
<h2>試験・検証が終わったら</h2>
<div class="incremental">
<div>
	<h3>修正を行う</h3>
	<ul>
		<li>試験結果をもとに問題のある実装について修正を行う</li>
		<li>画像の代替テキスト等、コンテンツオーナの確認が必要な作業もある</li>
	</ul>
</div>
<div>
	<h3>試験結果を公開する</h3>
<ul>
	<li>アクセシビリティ方針で対応度を「準拠」としている場合、試験結果の公開が必須（「一部準拠」の場合は、公開は義務ではないが、公開することが多い）</li>
	<li>公的機関の場合、総務省は「みんなの公共サイト運用ガイドライン」で「ウェブアクセシビリティ取組確認・評価表（<a href="https://a11yc.com/city-komaru/practice/download/hyoukahyo.pdf">サンプル（PDF）</a>）」の公開も推奨している</li>
</ul>
</div>

</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>専門的知識がなくてもできるアクセシビリティチェック</h1>
</div>

<!-- slide -->
<?php include('inc_non_interference.php'); ?>

<!-- slide -->
<div class="slide titlepage">
<h1>専門的知識がなくてもできるアクセシビリティチェック: 非干渉</h1>
</div>

<!-- slide -->
<?php include('inc_non_interference_check.php'); ?>

<!-- slide -->
<div class="slide">
<h1>自動的な音声の再生がないか確認</h1>
<h2>スクリーンリーダ利用を阻害</h2>
<p>自動的な音声の再生は視覚障害者が使うスクリーンリーダの利用を致命的に阻害することがある。<strong>最近のブラウザではデフォルトで禁止されていることが多い</strong></p>
<div class="incremental">
	<div>
	<h3>チェックポイント</h3>
	<ul>
		<li>自動再生が3秒以上続く音声がないか？</li>
		<li>簡単に一時停止、停止できるか？</li>
		<li>自動再生の音声だけ音量を変更できるか？</li>
	</ul>
	</div>
	<div>
	<h3>バリアのサンプル</h3>
	<ul>
		<li><a href="https://a11yc.com/city-komaru/practice/?preset=1.4.2-audio&wcagver=22">自動再生の音声がある駒瑠市</a>（おそらく機能しません）</li>
	</ul>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>キーボードトラップがないことを確認</h1>
<h2>タブキーですべての要素にアクセスする</h2>
<p>さまざまな支援技術は<strong>最終的にはキーボードの入力を端末に伝える</strong>ように作られているが、キーボードトラップは、このキーボードによる操作を阻害する、致命的なバリア。</p>
<div class="incremental">
	<div>
	<h3>チェックポイント</h3>
	<ul>
		<li>キーボードフォーカスが閉じ込められることがない</li>
	</ul>
	</div>
	<div>
	<h3>バリアのサンプル</h3>
	<ul>
		<li><a href="https://a11yc.com/city-komaru/practice/?preset=2.1.2-keyboard&wcagver=22">キーボードトラップのサンプル</a></li>
	</ul>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>自動的な動画・アニメーションの再生、コンテンツの更新がないか確認</h1>
<h2>注意力欠陥障害のコンテンツ利用を阻害</h2>
<p>自動的に動くコンテンツは注意力に障害のある利用者のコンテンツ利用を致命的に阻害することがある。</p>
<div class="incremental">
	<div>
	<h3>チェックポイント</h3>
	<ul>
		<li>自動再生が5秒以上続く動画、アニメーション、コンテンツの更新がないか？</li>
		<li>簡単に一時停止、停止できるか？</li>
		<li>簡単に非表示にできるか？</li>
	</ul>
	</div>
	<div>
	<h3>バリアのサンプル</h3>
	<ul>
		<li><a href="https://a11yc.com/city-komaru/practice/?preset=2.2.2-pause&wcagver=22">動き続ける駒瑠市</a>（<a href="https://a11yc.com/city-komaru/practice/?preset=ok-aa&wcagver=22">動きを止められる駒瑠市</a>）</li>
	</ul>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>（自動再生でなくても）動画の中に閃光がないか確認</h1>
<h2>発作を予防する</h2>
<p>動画のなかに光過敏性発作（いわゆるてんかん）を惹き起こすようなコンテンツがないようにする。発作はすべてのコンテンツ利用可能性を奪う。</p>
<div class="incremental">
	<div>
	<h3>チェックポイント</h3>
	<ul>
		<li>閃光は、コンサート風景の光の演出や雷鳴の演出などでありえる</li>
		<li>客観的な計測は困難なので、疑惑のあるコンテンツの扱いを検討する</li>
		<li>画面を極端に拡大している利用者にとっては、部分の閃光が画面全体になっていることがあるので注意する</li>
	</ul>
	</div>
	<div>
	<h3>バリアのサンプル</h3>
	<ul>
		<li>なし</li>
	</ul>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>専門的知識がなくてもできるアクセシビリティチェック: 非干渉以外でチェックしたい項目</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>画像の代替テキストの確認</h1>
<h2>全盲の利用者にとってたいへん重要</h2>
<p>画像などの視覚的な表現は、テキストによる代替を提供することで、視覚に障害のある利用者にとって、アクセシブルになります。</p>
<div class="incremental">
	<div>
	<h3>チェックポイント</h3>
	<ul>
		<li>画像を右クリックし、「検証」を行う</li>
		<li>グラフ、組織図、地図は付近に同等のテキストが用意されているかを確認する</li>
	</ul>
	</div>
	<div>
	<h3>バリアのサンプル</h3>
	<ul>
		<li><a href="https://a11yc.com/city-komaru/practice/?preset=1.1.1-alt&wcagver=22">altの不具合の多い駒瑠市</a>（<a href="https://a11yc.com/city-komaru/practice/?preset=ok-aa&wcagver=22">解消例</a>）</li>
	</ul>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>キーボードで操作できることを確認</h1>
<h2>キーボード操作の重要性</h2>
<p>さまざまな支援技術は最終的にはキーボードの入力を端末に伝えるように作られている。キーボード操作を可能にすることはウェブアクセシビリティ確保の要諦</p>
<div class="incremental">
	<div>
	<h3>チェックポイント</h3>
	<ul>
		<li><img width="300" src="./images/focus.png" alt="フォーカスインジケータ" style="float: right;"><a href="https://a11yc.com/city-komaru/practice/?preset=ok-aa">フォーカスインジケータ</a>（選択している箇所を示す視覚的な提示）が可視である</li>
		<li>ボタン類はエンターキーなどで操作できる</li>
		<li>マウスやタップでしか操作できないコンテンツはない</li>
	</ul>
	</div>
	<div>
	<h3>バリアのサンプル</h3>
	<ul>
		<li><a href="https://a11yc.com/city-komaru/practice/?preset=2.1.1-keyboard2&wcagver=22">キーボードによる操作が難しい駒瑠市</a><p>フォーカスしただけで移動するリンク、hキーを打鍵するとトップページに戻ってしまう実装、キーボードフォーカスを受け付けないボタン（アンケートフォーム）</p></li>
	</ul>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>ページタイトルを確認</h1>
<h2>スクリーンリーダで一番最初に読み上げる要素</h2>
<p>ページタイトルは、リンク等で移動した後、一番最初に読み上げる要素です。目の見えない人にとっては、「目的のページに移動できたかどうか」を判断する上で非常に重要です。また検索エンジン対策上、非常に重要な要素でもあります。</p>
<div class="incremental">
	<div>
	<h3>チェックポイント</h3>
	<ul>
		<li>ブラウザのタブにマウスカーソルを重ねてみる</li>
		<li>スクリーンリーダで聞いてみる</li>
	</ul>
	</div>
	<div>
	<h3>バリアのサンプル</h3>
	<ul>
		<li><a href="https://a11yc.com/city-komaru/practice/?preset=2.4.2-pagetitle">ページのタイトルが設定されていない駒瑠市</a>（<a href="https://a11yc.com/city-komaru/practice/?preset=ok-aa&wcagver=22">解消例</a>）</li>
	</ul>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>フォームのラベルの実装を確認</h1>
<h2>何を入力したらよいかわかるようにする</h2>
<p>フォームの入力欄には大抵の場合、入力内容を説明した可視の「ラベル」があります。このラベルがスクリーンリーダでも理解できることと、入力を開始しても理解できること確認します。</p>
<div class="incremental">
	<div>
	<h3>チェックポイント</h3>
	<ul>
		<li>メールフォームなどの入力欄名称（「お名前」など）をクリック（タップ）して、入力フォーカスが入力欄に移るかどうか確認</li>
		<li>入力を開始しても、なんの入力欄かわかるようにする</li>
	</ul>
	</div>
	<div>
	<h3>バリアのサンプル</h3>
	<ul>
		<li><a href="https://a11yc.com/city-komaru/practice/?criteria=3.3.2a_ng2" target="_blank">フォームとラベルが関連付けられていない駒瑠市</a>（<a href="https://a11yc.com/city-komaru/practice/?preset=ok-aa" target="_blank">解消例</a>）</li>
		<li><a href="https://a11yc.com/city-komaru/practice/?criteria=3.3.2a_ng&wcagver=22" target="_blank">入力を開始すると、ラベルがわからなくなる駒瑠市</a>（<a href="https://a11yc.com/city-komaru/practice/?preset=ok-aa" target="_blank">解消例</a>）</li>
	</ul>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>動画のキャプション・音声解説の実装を確認する</h1>
<h2>聴覚障害者向けにはキャプション、視覚障害者向けには音声解説か書き起こしテキスト</h2>
<p>キャプションは、動画を理解するのに必要な字幕です。発話以外を含むことに注意してください。音声解説は動画の企画段階から検討が必要ですが、難しい場合は、同等の内容の書き起こしテキストを用意してください。</p>
<div class="incremental">
	<div>
	<h3>チェックポイント</h3>
	<ul>
	<li>動画に「キャプション（聴覚障害者向けの字幕）」と「（視覚障害者向け）音声解説」があることを確認</li>
	<li>「キャプション」はYouTubeだととても簡単に付けられます</li>
	<li>「音声解説」はお金がかかることがあるため、難しい時には書き起こしテキストを用意する</li>
	</ul>
	</div>
	<div>
	<h3>バリアのサンプル</h3>
	<ul>
		<li><a href="https://a11yc.com/city-komaru/practice/?criteria=1.2a_ok&wcagver=22" target="_blank">妥当なキャプションと音声解説が提供されている動画のサンプル</a></li>
		<li><a href="https://a11yc.com/city-komaru/practice/?criteria=1.2a_ok3&wcagver=22" target="_blank">音声解説を提供できない代わりに書き起こしテキストを提供しているサンプル</a></li>
	</ul>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>チェックを終えて</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>改善・方針の見直し</h1>
<h2>改善計画を立てる</h2>
<ul>
	<li>業者と共に改善計画を立てるのがよい</li>
</ul>
<div class="incremental">
	<div>
	<h2>アクセシビリティ方針の見直し</h2>
	<ul>
		<li>適用範囲を拡張する</li>
		<li>より高い適合レベルを目指す</li>
	</ul>
	</div>
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>以上です。おつかれさまでした。</h1>
</div>

</body>
</html>
