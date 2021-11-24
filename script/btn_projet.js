var info=$("#projet > a > article > h1").eq(0).html();
var audio=$("#projet > a > article > h1").eq(1).html();
var tut=$("#projet > a > article > h1").eq(2).html();
var autre=$("#projet > a > article > h1").eq(3).html();
var clique="CLIQUEZ-ICI"

$("#projet a").eq(0).hover(
		function() {
        $("#projet > a > article > h1").eq(0).fadeOut("fast", function() {
        	$("#projet > a > article > h1").eq(0).fadeIn("fast").html(clique)
        }); //mouseover
    }, 
    function() {
         $("#projet > a > article > h1").eq(0).fadeOut("fast", function() {
        	$("#projet > a > article > h1").eq(0).fadeIn("fast").html(info)
        });// mouseout
    })

    $("#projet a").eq(1).hover(
		function() {
        $("#projet > a > article > h1").eq(1).fadeOut("fast", function() {
        	$("#projet > a > article > h1").eq(1).fadeIn("fast").html(clique)
        }); //mouseover
    }, 
    function() {
         $("#projet > a > article > h1").eq(1).fadeOut("fast", function() {
        	$("#projet > a > article > h1").eq(1).fadeIn("fast").html(audio)
        });// mouseout
    })

    $("#projet a").eq(2).hover(
		function() {
        $("#projet > a > article > h1").eq(2).fadeOut("fast", function() {
        	$("#projet > a > article > h1").eq(2).fadeIn("fast").html(clique)
        }); //mouseover
    }, 
    function() {
         $("#projet > a > article > h1").eq(2).fadeOut("fast", function() {
        	$("#projet > a > article > h1").eq(2).fadeIn("fast").html(tut)
        });// mouseout
    })