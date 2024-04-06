$(document).ready(()=>{
	setTimeout(()=>{
		$("html").css("overflow-y","visible");
	},2500)
	$("a:not(.except)").click(function() {
		$("html").css("overflow-y","hidden");
		$(this).each(()=>{
			let url=$(this).attr("href");
			$(this).removeAttr("href");

			$("#eLoad").css({visibility:'visible'});
			$("#endA").animate({top:"0"});
			$("#endB").delay(500).animate({right:"0"});
			$("#endC").delay(1500).animate({left:"0"});
			$("#endD").delay(1000).animate({bottom:"0"});

			setTimeout(()=>{
				window.location.href=url;
			},2000)
		})
	})
})