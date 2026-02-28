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
	<title>更新担当者のためのウェブアクセシビリティ基礎</title>
</head>
<body class="<?php echo $mode . ' theme-' . $theme ?>">

<!-- slide -->
<div class="slide titlepage">
<h1><big>更新担当者のためのウェブアクセシビリティ基礎</big></h1>
<div id="usage">
<?php if ($mode == 'slidemode'):?>
<h2>使い方</h2>
<ul>
	<li>キーボードの左右キーでスライドを操作できます</li>
</ul>
<p><a href="<?php echo build_slide_url('./for-editors.php', 'sr', $theme); ?>">（スクリーンリーダ用に切り替え）</a></p>
<?php else: ?>
<h2>スクリーンリーダ用について</h2>
<ul>
	<li>スライドの仕様上、h1（見出し1）が多い構造になっています。</li>
</ul>
<p><a href="<?php echo build_slide_url('./for-editors.php', null, $theme); ?>">（スライド用に切り替え）</a></p>
<?php endif; ?>
</div>
</div>

<!-- slide -->
<?php include('inc_komarushi.php'); ?>

<!-- slide -->
<div class="slide titlepage">
<h1>4つの重要な注意点（非干渉）</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>4つの重要な注意点（非干渉）</h1>
<h2>支援技術の利用を阻害し、まったくコンテンツを利用できなくなる危険性のあるバリア</h2>
<div class="cmt incremental">
<p><strong>非干渉抵触があると、いっさいコンテンツを利用できなくなる危険性がある</strong>が……</p>
<p><strong>更新担当者がこれらのバリアを作ってしまうことは少ない。<br />業者が実装してしまうことのほうが多いので、納品時に確認したほうが良い</strong></p>
</div>
<div class="incremental">
<h2>4つの非干渉</h2>
<ul>
	<li>自動的な音声の再生（音声読み上げを阻害。<strong>最近はブラウザがデフォルトで禁止をしている</strong>）</li>
	<li>自動的な動画・アニメーションの再生、コンテンツの更新（動いている箇所以外へのアクセスを阻害）<a href="https://a11yc.com/city-komaru/practice/?criteria=2.2.2">駒瑠市で確認</a></li>
	<li>キーボードフォーカスを閉じ込めてしまう実装（キーボード操作を阻害）<a href="https://a11yc.com/city-komaru/practice/?preset=2.1.2-keyboard&wcagver=22">駒瑠市で確認</a></li>
	<li>（自動再生でなくても）動画の中に閃光（発作の惹起）サンプルなし</li>
</ul></div>
</div>

<!-- slide -->
<?php include('inc_keep_content_accessible.php'); ?>

<!-- slide -->
<div class="slide titlepage">
<h1>以上です。おつかれさまでした。</h1>
</div>

</body>
</html>
