$(function(){
	$("#content").load("card.php?cid=1");
	
	var dt=null;
	$("#main #tit h3").mouseover(function(){
		var obj=$(this);
		dt=setTimeout(function(){
			obj.addClass("titin").siblings("h3").removeClass("titin");
			$("#content").load(obj.children("a").eq(0).attr("href"));
		}, 300)
	

	}).mouseout(function(){
		clearTimeout(dt);
	});
});
