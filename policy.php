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
	<title>ウェブアクセシビリティ方針の立て方</title>
</head>
<body class="<?php echo $mode . ' theme-' . $theme ?>">

<!-- slide -->
<div class="slide titlepage">
<h1><big>ウェブアクセシビリティ方針の立て方</big></h1>
<div id="usage">
<?php if ($mode == 'slidemode'):?>
<h2 style="margin: 0;">使い方</h2>
<ul>
	<li>キーボードの左右キーでスライドを操作できます</li>
</ul>
<p><a style="color:#fff !important;" href="<?php echo build_slide_url('./policy.php', 'sr', $theme); ?>">（スクリーンリーダ用に切り替え）</a></p>
<?php else: ?>
<h2 style="margin: 0;">スクリーンリーダ用について</h2>
<ul>
	<li>スライドの仕様上、h1（見出し1）が多い構造になっています。</li>
</ul>
<p><a style="color:#fff !important;" href="<?php echo build_slide_url('./policy.php', null, $theme); ?>">（スライド用に切り替え）</a></p>
<?php endif; ?>
</small>
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>アクセシブルなサイトの発注</h1>
いくつかのサンプルを見せる
駒瑠市の変遷を見せる

</div>

<!-- slide -->
<div class="slide">
<h1>仕様書の作成</h1>
<div class="incremental">
<div>
<h2>調達仕様書・提案依頼書（RFP: Request for Proposal）の作成</h2>
<ul>
	<li>「JIS X 8341-3:2016 対応発注ガイドライン（https://waic.jp/docs/jis2016/order-guidelines/）」をもとに作成することができる</li>
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
<div class="slide titlepage">
<h1>以上です。おつかれさまでした。</h1>
</div>

</body>
</html>
