
$(document).ready(function(){
	showTodos(null);

    $(".data").click(function(){
    	var data_id = $(this).attr("id");

    	if(!$("."+data_id).is(":hidden")){
    		$(".c"+data_id).slideUp("fast");
    	}

    	$("."+data_id).slideToggle("fast");//id de data compoe a classe da oferta
    });

    $(".oferta").click(function(){
    	var oferta_id = $(this).attr("id");//id de oferta compoe a classe da cliente
    	var data_id = $(this).attr("class").split(" ")[0];
    	var str = "."+data_id+"-"+oferta_id;
    	$(str).slideToggle("fast");
    });
});
function showMes(evt, code_mes_ano) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    var reservas_mes = document.getElementById(code_mes_ano);
    if(reservas_mes){
    	reservas_mes.style.display = "block";
    	$("#"+code_mes_ano).fadeIn(100).fadeOut(100).fadeIn(100);
    	document.getElementById("mes_nenhuma_reserva").style.display = "none";
    }else{
    	document.getElementById("mes_nenhuma_reserva").style.display = "block";
    	$("#mes_nenhuma_reserva").fadeIn(100).fadeOut(100).fadeIn(100);
    }
    evt.currentTarget.className += " active";
}
function showTodos(evt) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "block";
    }
    $(".tabcontent").fadeOut(100).fadeIn(100);
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    //document.getElementById(cityName).style.display = "block";
    if(evt){
	    evt.currentTarget.className += " active";
	}else{
		tablinks = document.getElementsByClassName("tablinks");
	    tablinks[0].className += " active";
	}
}