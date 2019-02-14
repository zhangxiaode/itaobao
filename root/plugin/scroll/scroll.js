$.fn.lunbo = function (lbinit){
	//初始化参数
	var th=$(this);
	this.find(".bd").width(lbinit.sliWid);
	th.find(".bd").height(lbinit.sliHei);
	th.find(".bd").find("li").width(lbinit.sliWid);
	th.find(".bd").find("li").height(lbinit.sliHei);
	th.find(".bd").find("ul").width(lbinit.sliWid*lbinit.number);
	th.find(".bd").find("ul").height(lbinit.sliHei);
	th.find(".hd").css({"width":(lbinit.hdWid+4)*(lbinit.number)+"px","height":lbinit.hdHei+"px"});
	th.find(".hd").find("li").css({"width":lbinit.hdWid+"px","height":lbinit.hdHei+"px"});
	th.find(".hd").css({"left":((lbinit.sliWid-lbinit.hdWid*(lbinit.number))/2+'px')});
	th.find(".arrow").css({"top":(lbinit.sliHei-40)/2+'px'});
	th.find(".next").css({"left":lbinit.sliWid-46+'px'});
//下方图片控制上方图片的显示
	th.find(".hd ul li").click(function(){
		var index=$(this).index();
		th.find(".hd ul li").removeClass("selected").eq(index).addClass("selected");
		var lef = index*(-lbinit.sliWid) + "px";
		th.find(".bd ul").animate({left:lef},300);
	})
//上方按钮轮播
	th.find(".next").click(function(){
		var num=th.find(".selected").nextAll().length;
		if (num==0){
			th.find(".hd ul li").removeClass("selected").eq(0).addClass("selected");
			th.find(".bd ul").animate({left:"0"},300);
		}
		else {
			th.find(".selected").next().addClass("selected").siblings().removeClass("selected");
			th.find(".bd ul").animate({left:"-=" + lbinit.sliWid + "px"},300);
		}
	})
	th.find(".prev").click(function(){
		var num=th.find(".selected").prevAll().length;
		var len=lbinit.number-1;
		var lef=(-lbinit.sliWid)*len + "px";
		if (num==0){
			th.find(".hd ul li").removeClass("selected").eq(len).addClass("selected");
			th.find(".bd ul").animate({left:lef},300);
		}
		else {
			th.find(".selected").prev().addClass("selected").siblings().removeClass("selected");
			th.find(".bd ul").animate({left:"+=" + lbinit.sliWid + "px"},300);
		}
	})
//鼠标mouseover时停止，clearInterval;mouseout时setInterval;
	th.mouseover(function(){
		clearInterval(scr);
		th.find(".arrow").addClass("on");
	}).mouseout(function(){
		scr=setInterval(scroll,lbinit.time);
		th.find(".arrow").removeClass("on");
	});
//自动循环轮播
	var scr=setInterval(scroll,lbinit.time);
	function scroll() {
		var num=th.find(".selected").nextAll().length;
		if (num==0){
			th.find(".bd ul").animate({left:"0"},300);
			th.find(".hd ul li").removeClass("selected").eq(0).addClass("selected");
		}
		else {
			th.find(".selected").next().addClass("selected").siblings().removeClass("selected");
			th.find(".bd ul").animate({left:"-=" + lbinit.sliWid + "px"},300);
		}
	}
}