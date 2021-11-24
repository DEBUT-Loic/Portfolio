$(document).ready(function(){
$("#send-btn").click(function(){
$("#contact-form").attr('action','mailto:debut.loic@hotmail.com?subject='+$('#name').val()+" / "+$('#obj').val()+'&body='+$("#message").val());
});
});