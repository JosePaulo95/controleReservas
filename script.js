
$(document).ready(function(){
    $(".data").click(function(){
    	var data_id = $(this).attr("id");

    	if(!$("."+data_id).is(":hidden")){
    		$(".c"+data_id).slideUp("fase");
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

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}