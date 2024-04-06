$('#sect_conv').css('bottom',$('footer').height()+"px")
$('#sect_direct').css('top',($(document).height()-$('#sect_direct').height()-$('footer').height())+"px")

$('footer').css('top',$(window).height()-$('footer').height()+"px")
var date, dateRep, options, horaire, h, min, sec, now, heure, minute, seconde, an, romain;
function firstLetterUC(mot) {
mot = mot.split(" ");
    for (var i = 0; i < mot.length; i++) {
        if (mot[i] != 'an') {
            mot[i] = mot[i].charAt(0).toUpperCase() + mot[i].slice(1);
        }
    }
mot = mot.join(" ");
return mot;
}
function dateWorld() {
date = new Date();
options = {weekday: "long", year: "numeric", month: "long", day: "2-digit"};
date.getSeconds()<10 ? sec="0"+date.getSeconds() : sec=date.getSeconds();
date.getMinutes()<10 ? min="0"+date.getMinutes() : min=date.getMinutes();
date.getHours()<10 ? h="0"+date.getHours() : h=date.getHours();
horaire=h+" h "+min+" : "+sec;

$(".dateW").html(firstLetterUC(date.toLocaleDateString('fr',options)));
$(".hW").html(horaire);
}
dateWorld();
setInterval(dateWorld,1000);

function dateRepublic() {
switch (date.getTimezoneOffset()) {
    case -60:
        date.setHours(date.getHours()-1);
        dateRep=dayOfDecadeName(date)+' '+dayOfMonth(date)+' '+monthName(date)+' an '+chiffreRomain(year(date));
        date.setHours(date.getHours()+1);
        break;
    
    default:
        dateRep=dayOfDecadeName(date)+' '+dayOfMonth(date)+' '+monthName(date)+' an '+chiffreRomain(year(date));
        break;
} 

now=(date.getSeconds()+date.getMinutes()*60+date.getHours()*3600)*(1/0.864);
heure=Math.floor(now/(100*100)) % 10
minute=Math.floor(now/100) % 100
seconde=Math.floor(now) % 100

heure < 10 ? heure="0"+heure : heure=heure
minute < 10 ? minute="0"+minute : minute=minute
seconde < 10 ? seconde="0"+seconde : seconde=seconde
horDec=heure+" h "+minute+" : "+seconde;

$('h1').eq(0).html("CALENDRIER RÉPUBLICAIN (an "+year(date)+')')
$(".dateR").html(firstLetterUC(dateRep));
$(".hR").html(horDec);
$(".jourR").html(firstLetterUC(dayOfYearName(date)));

if(month(date) < 4) {
    $('body').css('background-image','url("parchemin automne.png")');
}
else if(month(date) < 7) {
    $('body').css('background-image','url("parchemin hiver.png")');
}
else if(month(date) < 10) {
    $('body').css('background-image','url("parchemin printemps.png")');
}
else if(month(date) < 13) {
    $('body').css('background-image','url("parchemin été.png")');
}
else {
    $('body').css('background-image','url("parchemin.jpg")');
}
}
dateRepublic();
setInterval(dateRepublic,1000);