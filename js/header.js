$(document).ready(()=>{
	$("#navGalerie").hover(()=>{
		$("#panneauGalerie").slideToggle();
	})
	$("header > div > p").css({color:$(".cls-1").css("fill")})

	var i=0;
	var menuPc;
	var leftMenu=$("#pc").css("left");
	$(".btnMobile").click(()=>{
		if(i%2==0) {
			$("#pc").animate({left:'0'},500);
			$("section").append("<aside id=\"disable\"></aside>").css({position:"relative"});
			$("#disable").fadeIn();
			$("#flipButtonInner").css({transform:'rotate3d(0,1,0,180deg)'});
			menuPc=true;
		}
		else {
			$("#pc").animate({left:leftMenu},500);
			$("#disable").fadeOut();
			$("#flipButtonInner").css({transform:'rotate3d(0,1,0,0deg)'});
			menuPc=false;
		}
		i++;
	})

	$(window).resize(() => {
		if($("#mobile").css("display")=="flex") {
			if(menuPc) {
				$("#pc").css({left:"0px"});
				$("#disable").css("display","block");
			}
			else {
				$("#pc").css({left:"-200px"});
				$("#disable").css("display","none");
			}
		}
		else {
			$("#pc").css({left:"0px"});
			$("#disable").css("display","none");
		}
	})
})