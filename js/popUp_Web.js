$(document).ready(function() {
	$("#body-content button").click(function() {
		$("html").css("overflow","hidden");
		$.ajax({
			type:"GET",
			async:false,
			url:"templates/pop-up/popUp_Sites-Internet.php?id="+$(this).data("id"),
			success:function(rep) {
				rep=JSON.parse(rep);
				$(".titre").text(rep.titre);
				$(".lien").attr("href","templates/WEB/"+rep.titre);
				$(".lienImg").attr("src","img/web/"+rep.image);
				$("#desc").html(rep.description);
			}
		})
		$("#imgMore").fadeIn("normal",function() {
			$("html").css("overflow","hidden");
		});
	})

	function quit() {
		$("#imgMore").fadeOut();
		$("html").css("overflow-y","scroll");
	}

	$(".fa-xmark").click(quit);
	$(document).keyup(function(e) {
		if(e.key=="Escape") {
			quit();
		}
	})
})