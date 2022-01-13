var effet, nom, prenom, sonBut, i
console.log()
effet=new Audio("../BTTF.wav");
nom=$("header p").eq(0).html();
prenom=$("header p").eq(1).html();
sonBut=$("button").html()

$("header").hover(function() {
	console.log("BTTF")
	 $("header p").fadeOut(750, function() {
	 	$("header p").eq(1).css("display","none")
	 	$("header p").eq(0).css("width","100%").fadeIn(750).html("retour vers le portfolio")
	 })
}, function() {
	$("header p").fadeOut(750, function() {
	 	$("header p").fadeIn(750)
	 	$("header p").eq(1).css("display","on")
	 	$("header p").eq(0).css("width","50%").html(nom)
	 })
})

i=0
$("button").click(function() {
	if(i%2 === 0) {
		$(this).removeClass("btn-danger").addClass("btn-success").html("Sons Acceptés")
		$("header").hover(function() {
			if ($('.btn').hasClass('btn-success')) {
			effet.play()
			effet.volume=0.45
			console.log("son écouté")}
		}, function() {
			effet.pause()
			effet.currentTime=0
			console.log("son fermé")
		})
		i++;
		console.log("success")
	}
	else if(i%2 !== 0){
		$(this).removeClass("btn-success").addClass("btn-danger").html(sonBut);
		i++;
		console.log("danger")
	}
})

$("header").click(function() {
	window.open("../index.html")
	window.close()
})