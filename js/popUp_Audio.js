$(document).ready(function() {
	$("#body-content button").click(function() {
		$("html").css("overflow","hidden");
		$.ajax({
			type:"GET",
			async:false,
			url:"templates/pop-up/popUp_Audiovisuel.php?id="+$(this).data("id"),
			success:function(rep) {
				rep=JSON.parse(rep);
				$(".titre").text(rep.titre);
				$("iframe").attr("src",rep.video);
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
		console.log(e.key)
		if(e.key=="Escape") {
			quit();
		}
	})
})