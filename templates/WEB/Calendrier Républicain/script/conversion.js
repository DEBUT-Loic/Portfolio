var dateConv, dC, noW, heurE, minutE, secondE, horDec2;

$("#input_date").keyup(function() {
    if ($(this).val() >= '1792-09-22') {
        dC=new Date($(this).val());
        dateConv=dayOfDecadeName(dC)+' '+dayOfMonth(dC)+' '+monthName(dC)+' an '+chiffreRomain(year(dC));

        $('#conversion span').html('(an '+year(dC)+')')
        $(".dateC").html(firstLetterUC(dateConv));
        $(".jourC").html(firstLetterUC(dayOfYearName(dC)));      

        dC.getSeconds()<10 ? sec="0"+dC.getSeconds() : sec=dC.getSeconds();
        dC.getMinutes()<10 ? min="0"+dC.getMinutes() : min=dC.getMinutes();
        dC.getHours()<10 ? h="0"+dC.getHours() : h=dC.getHours();
        horaire=h+" h "+min+" : "+sec;

        noW=(dC.getSeconds()+dC.getMinutes()*60+dC.getHours()*3600)*(1/0.864);
        heurE=Math.floor(noW/(100*100)) % 10
        minutE=Math.floor(noW/100) % 100
        secondE=Math.floor(noW) % 100

        heurE < 10 ? heurE="0"+heurE : heurE=heurE
        minutE < 10 ? minutE="0"+minutE : minutE=minutE
        secondE < 10 ? secondE="0"+secondE : secondE=secondE
        horDec2=heurE+" h "+minutE+" : "+secondE;

        $(".hC").html(horDec2);   
    }
})

$("#input_date").touchend(function() {
    if ($(this).val() >= '1792-09-22') {
        dC=new Date($(this).val());
        dateConv=dayOfDecadeName(dC)+' '+dayOfMonth(dC)+' '+monthName(dC)+' an '+chiffreRomain(year(dC));

        $('#conversion span').html('(an '+year(dC)+')')
        $(".dateC").html(firstLetterUC(dateConv));
        $(".jourC").html(firstLetterUC(dayOfYearName(dC)));      

        dC.getSeconds()<10 ? sec="0"+dC.getSeconds() : sec=dC.getSeconds();
        dC.getMinutes()<10 ? min="0"+dC.getMinutes() : min=dC.getMinutes();
        dC.getHours()<10 ? h="0"+dC.getHours() : h=dC.getHours();
        horaire=h+" h "+min+" : "+sec;

        noW=(dC.getSeconds()+dC.getMinutes()*60+dC.getHours()*3600)*(1/0.864);
        heurE=Math.floor(noW/(100*100)) % 10
        minutE=Math.floor(noW/100) % 100
        secondE=Math.floor(noW) % 100

        heurE < 10 ? heurE="0"+heurE : heurE=heurE
        minutE < 10 ? minutE="0"+minutE : minutE=minutE
        secondE < 10 ? secondE="0"+secondE : secondE=secondE
        horDec2=heurE+" h "+minutE+" : "+secondE;

        $(".hC").html(horDec2);   
    }
})