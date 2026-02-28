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
	<title>講師について</title>
</head>
<body class="<?php echo $mode ?>">

<!-- slide -->
<div class="slide titlepage">
<h1><big>講師について</big><br />
<small>
<?php if ($mode == 'slidemode'):?>
<h2 style="margin: 0;">使い方</h2>
<ul>
	<li>キーボードの左右キーでスライドを操作できます</li>
</ul>
<p><a style="color:#fff !important;" href="./person.php?mode=sr">（スクリーンリーダ用に切り替え）</a></p>
<?php else: ?>
<h2 style="margin: 0;">スクリーンリーダ用について</h2>
<ul>
	<li>スライドの仕様上、h1（見出し1）が多い構造になっています。</li>
</ul>
<p><a style="color:#fff !important;" href="./person.php">（スライド用に切り替え）</a></p>
<?php endif; ?>
</small>
</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>講師について</h1>
<h2>柴田宣史（しばたのぶふみ）</h2>

<h3><img src="./images/jidaikobo_logo.png" alt="時代工房のロゴ" style="float: right;width:170px;">有限会社時代工房 代表取締役</h3>
<p>京都のウェブ制作会社。2004年3月創業。</p>

<h3><img src="./images/nicr_logo.svg" alt="スタジオニクロムのロゴ" style="float: right;width:170px;">株式会社スタジオニクロム 取締役</h3>
<p>京都の障害者就労支援事業所。2013年11月創業。</p>

<h3><img src="./images/waic_mark.png" alt="WAICのロゴ" style="float: right;width:170px;">ウェブアクセシビリティ基盤委員会（WAIC）作業部会1及び3委員</h3>
<p>WAICはJIS X 8341-3の普及組織。</p>
</div>

</body>
</html>
