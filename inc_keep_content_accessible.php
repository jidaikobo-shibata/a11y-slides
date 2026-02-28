<!-- slide -->
<div class="slide titlepage">
<h1>見出し</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>見出しとアクセシビリティ</h1>
<h2>適切な見出しの付与でアクセシビリティを確保する</h2>
<ul class="incremental">
	<li>文書を内容ごとに区切る際に使用するもの</li>
	<li>晴眼者にとっては、地の文と、大きさ/色/フォント/配置/装飾（つまり「見た目」）が違うことで認識される（<a href="https://a11yc.com/city-komaru/practice/fact.php?criteria=1.3.1&wcagver=22">駒瑠市+ANDIで見た目だけ「見出し」にしているサンプルを見る</a>）</li>
	<li>目が見えなくても、見出しが見出しとして理解できるようにすることが重要（<a href="https://a11yc.com/city-komaru/practice/fact.php">駒瑠市+ANDIで「見出し」を確認する</a>）</li>
	<li>スクリーンリーダでは、見出しスキップ機能が便利</li>
	<li>一定の検索エンジン対策効果が期待できる</li>
</ul>
</div>

<!-- slide -->
<div class="slide">
<h1>見出しで構造化する</h1>
<h2>「見出し」では樹形（ツリー）構造を意識すること</h2>
<div class="incremental">
<ul>
	<li><img src="./images/heading-list.png" width="200" alt="CMSの見出しの選択" style="float:right;" />見出しはHTMLとしては、h1〜h6というタグ（CMSだと「見出し1〜6」）で表現され、数字が小さいほうが大項目になる。</li>
	<li>更新担当者はh2（見出し2）から用いることが多い</li>
</ul>
<div>
<div><h2>樹形（ツリー）構造</h2>
<ul class="cmt" style="padding: 10px 50px !important;">
	<li>動物 ← &lt;h1&gt;<ul><li>哺乳類 ← &lt;h2&gt;<ul><li>ネズミ ← &lt;h3&gt;<ul><li>ハツカネズミ ← &lt;h4&gt;</li></ul></li><li>サル ← &lt;h3&gt;<ul><li>テナガザル ← &lt;h4&gt;</li><li>メガネザル ← &lt;h4&gt;</li></ul></li><li>ヒト ← &lt;h3&gt;</li></ul></li><li>鳥類 ← &lt;h2&gt;<ul><li>カラス ← &lt;h3&gt;</li></ul></li></ul></li>
</ul></div></div></div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>画像の代替テキストとは</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>画像の代替テキスト</h1>
<div class="incremental">
<div><h2>画像を言葉で説明する</h2>
<ul>
	<li>画像を見ることができない利用者に画像を説明するテキスト</li>
	<li>画像が読み込まれない環境において、画像を判断するテキスト</li>
</ul></div>
<div><h2>機械可読性（マシンリーダビリティ）</h2>
<ul>
<li>画像を理解できないプログラムに画像を説明するテキスト（SEOに有為）<p>スクリーンリーダはPCやスマートフォンの機能であり、すなわちプログラム。検索エンジンのために情報を集める機能（クローラとかロボットと言います）もプログラム。</p></li>
</ul></div>
</div>
</div>

<!-- slide -->
<div class="slide">
<h1>AIの可能性</h1>
<h2>将来的には不要になる？</h2>
<p>AIの進化は凄まじく、将来的には人の手で代替テキストを用意しなくてもいい日が来ます。</p>
<h3>GoogleのGemini（AI）による説明</h3>
<p><img src="./images/fig2-kyoto.png" alt="画像サンプル" style="width:200px;float:left;margin-right:20px;" /></p>
<ul style="margin-left:250px;">
	<li>平安時代から続く古都京都の象徴、法観寺の五重塔</li>
	<li>京都の街並みを背景にそびえ立つ五重塔</li>
	<li>青空の下、緑の木々に囲まれた五重塔</li>
</ul>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>altと代替テキストの付け方</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>altと代替テキスト</h1>

<table class="tbl">
<tr>
	<th>代替テキスト</th>
	<td>画像や動画等、視覚に依存した情報提供をしている際、その情報（コンポーネント）を説明するテキスト。コンポーネントの機能（altなど）あるいは付近で提供されいることが望ましい</td>
</tr>
<tr>
	<th>alt</th>
	<td>HTMLで画像を表示する際に使う<img>タグの属性。画像と同等の意味を持つことが求められる。代替テキストの一種</td>
</tr>
</table>

</div>

<!-- slide -->
<div class="slide">
<h1>文字を含んだ画像の場合</h1>

<table class="tbl" style="margin-top:20px !important;font-size:90%;">
<thead>
<tr>
<th>状況</th>
<th>画像サンプル</th>
<th>内容</th>
<th>対応</th>
</tr>
</thead>
<tr>
	<th>画像化した文字 (1)</th>
	<td style="text-align:center;"><img src="./images/fig12-kodomonohi.png" style="width:130px" alt="画像サンプル：「こどもの日」という画像化されたテキスト" /></td>
	<td>画像化された文字をaltに</td>
	<td>alt="こどもの日"</td>
</tr>
<tr>
	<th>画像化した文字 (2)</th>
	<td>（チラシ画像のテキストで情報提供している場合）</td>
	<td>altは書き起こしテキストの存在を示す。長すぎる文字列をaltに入れてはいけない</td>
	<td>付近にすべてのテキストを書き起こし（<a href="https://a11yc.com/city-komaru/practice/information-each1.php?preset=1.1.1-alt&wcagver=22">駒瑠市でNGの例をANDIで見る</a>・<a href="https://a11yc.com/city-komaru/practice/information-each1.php">駒瑠市でOKの例を見る</a>）</td>
</tr>
<tr>
	<th>アイコンなどで機能を<br />説明した文字</th>
	<td style="text-align:center;"><img src="./images/fig5-download_tex.png" style="width:80px" alt="画像サンプル：ダウンロードアイコンと補足テキストの「ダウンロード」" /></td>
	<td>機能を説明したalt</td>
	<td>alt="ダウンロード"<br />「トレイと下向き矢印」ではない</td>
</tr>
<tr>
	<th>付近に同じテキストがある</th>
	<td style="text-align:center;"><img src="./images/fig4-banner.png" style="width:130px" alt="画像サンプル：「京都きものパスポート」というバナーとその下に書かれた「京都きものパスポート」という文字" /></td>
	<td>空のalt</td>
	<td>alt=""</td>
</tr>
<tr>
	<th>文字は単なる視覚効果</th>
	<td style="text-align:center;"><img src="./images/fig3-newspaper.jpg" style="width:130px" alt="画像サンプル：英字新聞" /></td>
	<td>空のalt</td>
	<td>alt=""</td>
</tr>
</table>
</div>

<!-- slide -->
<div class="slide">
<h1>画像がボタンやリンクである場合（文字なし・文字が主たる情報ではない）</h1>

<table class="tbl" style="margin-top:20px !important;font-size:90%;">
<thead>
<tr>
<th>画像サンプル</th>
<th>内容</th>
<th>対応</th>
</tr>
</thead>
<tr>
	<td style="text-align: center;"><img src="./images/fig6-allow.png" style="width:30px" alt="画像サンプル：右向きの矢印" /></td>
	<td>機能を説明したalt</td>
	<td>文脈による。例) alt="次のページへ", alt="次の項目を表示"<br />「右向きの矢印」ではない</td>
</tr>
<tr>
	<td style="text-align: center;"><img src="./images/fig14-chirashi.jpg" style="width:130px" alt="画像サンプル：コンサートのチラシ" /></td>
	<td>リンク先を説明したalt</td>
	<td>alt="京都市少年合唱団応援チャリティコンサート" or alt="イベント詳細"</td>
</tr>
</table>
</div>

<!-- slide -->
<div class="slide">
<h1>意味がある場合（文字が主たる情報ではない）</h1>

<table class="tbl" style="margin-top:20px !important;font-size:90%;">
<thead>
<tr>
<th>状況</th>
<th>画像サンプル</th>
<th>内容</th>
<th>対応</th>
</tr>
</thead>
<tr>
	<th>グラフ</th>
	<td style="text-align: center;"><img src="./images/fig13-ipcc_graph.jpg" style="width:130px" alt="画像サンプル：ダウンロードアイコン" /></td>
	<td>グラフの概要。付近にグラフの詳細を示したデータを掲載</td>
	<td>alt="1880年から2012年にかけての地球の気温上昇のグラフ。0.85度の上昇がわかる。具体的な各年の値は以下のとおり。"（表を置く）</td>
</tr>
<tr>
	<th>地図</th>
	<td style="text-align: center;"><img src="./images/fig10-map.png" style="width:130px" alt="画像サンプル：経路図" /></td>
	<td>地図の目的。altが長くなるようなら付近に地の文で説明</td>
	<td>alt="JR■■駅から弊社までの地図。駅の北西の信号を西へXXメートル。詳細は以下"（地の文で説明）</td>
</tr>
<tr>
	<th>組織図</th>
	<td style="text-align: center;"><img src="./images/fig9-soshikizu.jpg" style="width:130px" alt="画像サンプル：組織図" /></td>
	<td>組織図であることを説明したのちに地の文で説明</td>
	<td>alt="組織図。CEOにXX、その下にCFOのXX、COOのXXがいる。詳細は以下"（地の文で説明）</td>
</tr>
</table>
</div>

<!-- slide -->
<div class="slide">
<h1>意味がない場合（文字なし）</h1>

<table class="tbl" style="margin-top:20px !important;font-size:90%;">
<thead>
<tr>
<th>状況</th>
<th>画像サンプル</th>
<th>内容</th>
<th>対応</th>
</tr>
</thead>
<tr>
	<th>雰囲気のための画像</th>
	<td><img src="./images/fig8-machi.png" style="width:130px" alt="画像サンプル：都市のシルエット" /></td>
	<td>空のalt</td>
	<td>alt=""</td>
</tr>
</table>
</div>

<!-- slide -->
<div class="slide">
<h1>まとめ</h1>
<h2>意味のない画像</h2>
<ul>
	<li>空の代替テキスト（alt=""）にする</li>
</ul>

<h2>意味のある画像</h2>
<ul>
	<li>その「意味」が何かしらの方法で伝わるようにする。altだと長くなりすぎる場合は、表（table）や地の文で説明を行う。どうしても説明が難しい場合は、合理的配慮を行う</li>
	<li>同じ画像でも文脈によって代替テキストは変わることがある</li>
	<li>「<strong>電話で説明するように</strong>」というコツがある</li>
	<li>画像が表示されていない想定で地の文と繋げて読んでみる</li>
</ul>
</div>

<?php
// 更新担当者向けfor-editorのときだけ、SNSの話をする
if (strpos($_SERVER['SCRIPT_NAME'], 'for-editor') !== false)
{
	include('inc_usage_alt_in_tools.php');
}
?>

<!-- slide -->
<div class="slide titlepage">
<h1>リンクテキスト</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>リンクテキスト</h1>
<h2>リンクの目的が理解できるリンク文字列</h2>
<ul class="incremental">
	<li>タブキーによる操作対象の移動は、支援機器の有無に関わらず、基本的な操作</li>
	<li>視覚障害者のほとんどがタブキーによる操作対象の移動を活用している<table class="tbl">
<tr>
	<th>キーボード操作の一例（タブキー）</th>
	<td><a href="#1">リンク1</a>, <a href="#2">リンク2</a>, <a href="#3">リンク3</a></td>
</tr>
</table></li>
	<li>「こちら、ここをクリック」だけでは、リンク先が理解しづらい<ul>
	<li>総務省のサイトは<a href="https://www.soumu.go.jp/">こちら</a></li>
	<li>経産省のサイトは<a href="https://www.meti.go.jp/">こちら</a></li>
</ul>
</li>
	<li>間違いが少ないのは、<strong>リンク先ページのタイトル</strong>を用いること</li>
</ul>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>読み上げる順序</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>読み上げる順序</h1>
<h2>読み上げる順序が意味を維持すること</h2>
<ul class="incremental">
	<li>見た目だけで段組みを作ってしまう<pre>
ゴーシュは町の活動写真館で    けれどもあんまりじょうずで
セロを弾くかかりでした。      ないという評判でした。
</pre></li>
	<li>空白で文字を整形してしまう
<table class="tbl">
<caption>イ ベ ン ト 開 催 要 項</caption>
<tr>
	<th>参加費</th>
	<td>1,000円</td>
</tr>
<tr>
	<th>場　所</th>
	<td>公民館</td>
</tr>
</table>
</li>
<li>スクリーンリーダでの正しい読み上げを阻害してしまうことがあります</li>
</ul>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>ページタイトル</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>ページタイトル</h1>
<h2>スクリーンリーダにとって最初に読み上げる情報</h2>
<ul class="incremental">
	<li>音声読み上げに対する最初の情報提供。画面が切り替わったことを理解するための重要な手がかり</li>
	<li>サイト内で一意（重複がない）であることが望ましい</li>
	<li>強い検索エンジン対策効果が期待できる</li>
</ul>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>コントラストと配色</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>コントラストと配色</h1>
<h2>図と地の差</h2>
<div class="incremental">
<ul class="incremental">
	<li>弱視者への配慮だが、晴眼者にとっても有為なことが多い</li>
	<li>まずはテキストのコントラスト。見出しの色、地の文の色、強調色等、<strong>アクセシビリティに配慮したものが用意されている場合は、原則、それを使う</strong></li>
	<li>CMSの機能を使ったり、HTML/CSSの指定によって独自に色を使う場合は、色反転があることも念頭に入れて使う（原則使わないことが望ましい）</li>
	<li>グラフ等、図中のコントラストにも配慮する</li>
</ul>
<div>
<h3>バリアのサンプル</h3>
	<ul>
		<li><a href="https://a11yc.com/city-komaru/practice/fact.php?criteria=1.4.3&wcagver=22">コントラストの問題のある駒瑠市</a>（<a href="https://a11yc.com/city-komaru/practice/fact.php?preset=ok-aa&wcagver=22">解消例</a>）<p>スライドショーの画像の文字やリンクテキストのコントラストが弱い。</p></li>
	</ul></div>
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>色、位置、かたち等への依存</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>色、位置、かたち等への依存</h1>
<h2>感覚的な特徴に依存した情報提供の問題</h2>
<div class="incremental">
<ul class="incremental">
	<li>音声のみでウェブサイトを利用している人がいることを忘れない</li>
	<li>色の違いに依存したカレンダ、グラフ等に注意
<div style="float:right;"><img src="./images/cal.jpg" alt="色に依存したカレンダ" width="400" />
<img src="./images/cal_acc.jpg" alt="色に依存していないカレンダ" width="400" /></div>
</li>
	<li>色や形を活用した情報提供の全てを禁じるわけではない</li>
</ul>
<div>
<h3>バリアのサンプル</h3>
	<ul>
		<li><a href="https://a11yc.com/city-komaru/practice/fact.php?criteria=1.3.3&wcagver=22">形への依存のある駒瑠市</a>（<a href="https://a11yc.com/city-komaru/practice/fact.php?preset=ok-aa&wcagver=22">解消例</a>）<p>「教材の貸し出し」において、形への依存がある。</p></li>
		<li><a href="https://a11yc.com/city-komaru/practice/fact.php?preset=1.4.1-color&wcagver=22">色の違いによる情報提供のある駒瑠市</a>（<a href="https://a11yc.com/city-komaru/practice/fact.php?preset=ok-aa&wcagver=22">解消例</a>）<p>「2021年度 家庭からの二酸化炭素排出量」において、色の違いへの依存がある。</p></li>
	</ul>
</div>
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>表組み</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>表組み</h1>
<h2>見出しのある表組みにする</h2>
<div class="incremental">
<ul>
	<li>適切な見出しが設定された表組みは、スクリーンリーダでの理解を飛躍的に高めます</li>
</ul>
<div>
<h3>バリアのサンプル</h3>
	<ul>
		<li><a href="https://a11yc.com/city-komaru/practice/fact.php?criteria=1.3.1&wcagver=22">見た目だけ見出しにしている表組み</a>
<ul>
	<li>ANDIで「各地の気温の上昇（見た目だけ見出し）」と「教材の貸し出し状況（構造的な見出しがある）」を確認する。</li>
</ul>

</li>
	</ul>
</div>
</div>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>リスト</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>リスト</h1>
<h2>箇条書き</h2>
<ul class="incremental">
	<li>見た目だけでリストにしてしまう<pre>
・項目1
・項目2
・項目3
</pre></li>
	<li>スクリーンリーダでの正しい読み上げを阻害してしまうことがあります</li>
</ul>
</div>

<!-- slide -->
<div class="slide titlepage">
<h1>動画について</h1>
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
<h1>PDF</h1>
</div>

<!-- slide -->
<div class="slide">
<h1>PDFについて</h1>
<h2>アクセシブルなPDFの作成は難しい</h2>
<div class="incremental">
	<ul class="incremental">
	<li>アクセシブルなPDFを作成できるアプリケーションが限られていること</li>
	<li>デザイン性の高いPDFで、アクセシビリティを確保することは現時点ではほぼ不可能であること</li>
	<li>代替コンテンツを用意する</li>
	<li>表題、見出し、地の文しかないようなシンプルなPDFの場合は、アクセシブルにすることもできる
<ul>
	<li><a href="https://support.microsoft.com/ja-jp/office/%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B7%E3%83%93%E3%83%AA%E3%83%86%E3%82%A3%E3%81%AE%E9%AB%98%E3%81%84-pdf-%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%82%92%E4%BD%9C%E6%88%90%E3%81%99%E3%82%8B-064625e0-56ea-4e16-ad71-3aa33bb4b7ed">参考: Microsoft社「アクセシビリティの高い PDF ファイルを作成する」</a></li>
	<li><a href="https://a11yc.com/city-komaru/practice/download/ecodrive_event.1201.pdf">アクセシブルなPDFの例（駒瑠市）</a></li>
</ul></li></ul>
	</div>
</div>
</div>
