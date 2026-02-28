$(function(){

// div.slideの直下をflexで位置合わせしたい
$('.slide').wrapInner("<div></div>");

//===h1===
$("h1").wrapInner("<span></span>");

// ===addclass===
$("tr:even").addClass("even");
$("tr:odd").addClass("odd");

//==== a.rollover img ====
$('a.rollover').hover(function(){
	var imgsrc = $(this).find('img').attr('src').replace('_df.gif','_ro.gif');
	$(this).find('img').attr('src',imgsrc);
	},function(){
	var imgsrc = $(this).find('img').attr('src').replace('_ro.gif','_df.gif');
	$(this).find('img').attr('src',imgsrc);
});

// ===captionblock===
$('img.fcr').each(function(){
	var captxt = $(this).attr('alt').replace('[/url]','</a>').replace(']','">').replace('[url=','<a class="noicon" href="');
	var capwidth = $(this).attr('width');
	capwidth=capwidth+10;
//		$(this).wrap('<span style="width:'+capwidth+'px;font-size:90%;float:right;margin:0 0 10px 10px;text-align:center;dispay:block;">');
	$(this).wrap('<div style="width:'+capwidth+'px;font-size:90%;float:right;margin:0 0 10px 10px;text-align:center;">');
	$(this).attr('alt','').after('<br />'+captxt);
});

$('img.fcl').each(function(){
	var captxt = $(this).attr('alt').replace('[/url]','</a>').replace(']','">').replace('[url=','<a class="noicon" href="');
	var capwidth = $(this).attr('width');
	capwidth=capwidth+10;
//		$(this).wrap('<span style="width:'+capwidth+'px;font-size:90%;float:left;margin:0 10px 10px 0;text-align:center;dispay:block;">');
	$(this).wrap('<div style="width:'+capwidth+'px;font-size:90%;float:left;margin:0 10px 10px 0;text-align:center;">');
	$(this).attr('alt','').after('<br />'+captxt);
});


$('img.fcc').each(function(){
	var captxt = $(this).attr('alt').replace('[/url]','</a>').replace(']','">').replace('[url=','<a class="noicon" href="');
//		$(this).wrap('<span style="text-align:center;font-size:90%;margin:0 10px 10px 0;clear:both;dispay:block;">');
	$(this).wrap('<div style="text-align:center;font-size:90%;margin:0 10px 10px 0;clear:both;">');
	$(this).attr('alt','').after('<br />'+captxt);
});

// ===lightbox===
$('a.lb').each(function(){
	$(this).lightBox();
});

});
