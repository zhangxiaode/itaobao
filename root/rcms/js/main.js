$(document).ready(function(){
	$(".topMainRight li").mousemove(function(){
		$(this).children(".topMainRightBd").addClass("on");
	})
	$(".topMainRight li").mouseout(function(){
		$(this).children(".topMainRightBd").removeClass("on");
	})
	$("#banner").click(function(){
		location.href='http://www.baidu.com';
	});
	$(".headLeftHd li").click(function(){
		var index=$(this).index();
		$(".headLeftHd li").removeClass("headLeftHdOn");
		$(".headLeftHdTM").removeClass("headLeftHdTM");
		$(".headLeftBd li").removeClass("on");
		$(".headLeftBd li").eq(index).addClass("on");
		if (index == 1)
		{
			$(this).addClass("headLeftHdTM");
		}
		else {
			$(this).addClass("headLeftHdOn");
		}
	})
	$(".headLeftBdSearchInput").bind("blur",function(){
		if ($(this).val()!= "")
		{
			$(this).css("background","none");
		}
	})
	$(".headRightClose").click(function(){
		$(".headRightMain").hide();
		$(this).hide();
	})
//主题市场鼠标移上时显示隐藏窗口
	$(".mainLeftLTopList").mouseover(function(){
		var index = $(this).index();
		$(".mainLeftLTopList").css("border-color","transparent");
		$(this).css({"border-color":"#f00","border-right-color":"#fff"});
		$(".mainLeftLAlert").hide();
		$(".mainLeftLAlert").eq(index).show();
	})
	$("html").click(function(){
		$(".mainLeftLTopList").css("border-color","transparent");
		$(".mainLeftLAlert").hide();
	})
})
$(document).ready(function(){
/*主页右侧mainRight > mrBox1*/
	$(".mrBox1H li").mousemove(function(){
		index=$(this).index();
		$(".mrBox1H li").removeClass("mrB1selected").eq(index).addClass("mrB1selected");
		$(".mrBox1BList").removeClass("on").eq(index).addClass("on");
	})
	/*主页右侧mainRight > mrBox3文字滚动*/
	var rol=setInterval(roll,1000);
	function roll(){
		var mbtop=$(".mrBox3B").find("ul").css("top");
		if (mbtop=="-72px")
		{
			$(".mrBox3B").find("ul").css("top","0px");
		}
		$(".mrBox3B").find("ul").animate({top:"-=24px"});
	}
	$(".mrBox3B").mouseover(function(){
		clearInterval(rol);
	})
	$(".mrBox3B").mouseout(function(){
		rol=setInterval(roll,1000);
	})
	/*主页右侧mainRight > mrBox4*/
	$(".mrBox4top").mouseover(function(){
		var index=$(this).index();
		$(".mrBox4top").removeClass("selected").eq(index).addClass("selected");
		$(".mrBox4BdAl").removeClass("on").eq(index).addClass("on");
		$(".mrBox4Bd").addClass("on");
		$(".mrBox4top").find("a").removeClass("red");
	})
	$(".mrBox4BdAl").mouseover(function(){
		var index=$(this).index();
		$(".mrBox4top").find("a").removeClass("red");
		$(".mrBox4top").eq(index).find("a").addClass("red");
	})
	$("html").click(function(){
		$(".mrBox4Bd").removeClass("on");
		$(".mrBox4top").removeClass("selected");
	})
	$(".mrBox4BdAl1Hd").mouseover(function(){
		var index=$(this).index();
		var lef=-300*index+"px";
		$(".mrBox4BdAl1B").animate({left:lef},1000);
		$(".mrBox4BdAl1Hd").removeClass("red");
		$(this).addClass("red");
	})
	/*首页主体部分 > mainCon1*/
	var len=$(".hotRs").size()-1;
	len = len*(-69) + "px";
	$(".hotSlide").find(".prev").click(function(){
		$(".hotSlIcon").removeClass("selected");
		$(this).addClass("selected");
		if($(".hotRBox").css("top")=="0px") {
			$(".hotRBox").animate({top:len},600);
		}
		else {
			$(".hotRBox").animate({top:"+=69px"},600);
		}
	})
	$(".hotSlide").find(".next").click(function(){
		$(".hotSlIcon").removeClass("selected");
		$(this).addClass("selected");
		if($(".hotRBox").css("top")==len) {
			$(".hotRBox").animate({top:"0px"},600);
		}
		else {
			$(".hotRBox").animate({top:"-=69px"},600);
		}
	})
	/*mainCon12 Tab切换*/
	$(".tab").click(function(){
		var index=$(this).index();
		$(".tab").removeClass("selected").eq(index).addClass("selected");
		$(".mc12Pannel").removeClass("on").eq(index).addClass("on");
	})
	/*mrBox7*/
	$(".mrb7Item").hover(function(){
		$(this).children(".mrb7iHover").slideToggle(300);
	})
	/*wrap1 > channel1*/
	$(".c1ihdHover").hover(function(){
		$(this).find(".c1ihdCode").animate({top:0,opacity:1},300);
	},function(){
		$(this).find(".c1ihdCode").animate({top:"34px",opacity:0},300);
	})
})