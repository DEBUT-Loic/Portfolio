	var day, h, min, sec, date, decompte
	var jourJ= new Date('June 26 2021 16:00:00');
	decompte=setInterval(countdown,1000)
	countdown()
	function countdown() {
var today= new Date();
var diff = jourJ-today
var ttl=diff/1000
if (ttl>=0) {
	 day=Math.floor(diff/1000/(60*60*24))
	 h = Math.floor(diff/1000/(60*60)) % 24
	 min= Math.floor(diff/1000/60) % 60
	 sec=Math.floor(diff/1000) % 60

	 day<10 ? day="0"+day : day
	 h<10 ? h="0"+h : h
	 min<10  ? min="0"+min : min
	 sec<10 ? sec="0"+sec : sec

jourId=document.getElementById("jour")
heureId=document.getElementById("heure")
minId=document.getElementById("min")
secId=document.getElementById("sec")

	jourId.innerText=day
	heureId.innerHTML=h
	minId.innerHTML=min
	secId.innerHTML=sec

	x=document.getElementsByTagName("small")
	day<2 && day>=0? x[0].innerHTML="Jour" : x[0].innerHTML="Jours"
	h<2 && h>=0? x[1].innerHTML="Heure" : x[1].innerHTML="Heures"
	min<2 && min>=0? x[2].innerHTML="Minute" : x[2].innerHTML="Minutes"
	sec<2 && sec>=0? x[3].innerHTML="Seconde" : x[3].innerHTML="Secondes"
}
else {
	ttl=Math.abs(ttl)
	sec=ttl
}
}