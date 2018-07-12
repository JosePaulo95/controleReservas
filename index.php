<html>
<head>
	<link href="listaReservas.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<?php
		include 'ListaReservas.php';
		 
		$list = new ListaReservas();
		 
		//echo $list->show();
	?>
	<div style="cursor: pointer;">
		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		  <button class="tablinks" onclick="openCity(event, 'London')"> <p class="tab_ano">2018</p><p class="tab_mes">Jul</p> </button>
		</div>

		<div id="London" class="tabcontent">
		  <h3>London</h3>
		  <p>London is the capital city of England.</p>
		</div>

		<div id="Paris" class="tabcontent">
		  <h3>Paris</h3>
		  <p>Paris is the capital of France.</p> 
		</div>

		<div id="Tokyo" class="tabcontent">
		  <h3>Tokyo</h3>
		  <p>Tokyo is the capital of Japan.</p>
		</div>

		<div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
			<div class="tab_ano_mes"><p class="tab_ano">2018</p><p class="tab_mes">Jul</p></div>
		</div>
        <div id="dt2018-07-12" class="data">
            <p>12 de julho de 2018</p>
        </div>
            <div id="oferta1" class="dt2018-07-12 oferta">
                <p>Oferta 1</p>
                <button style="display: inline-block;float: right;margin: 15px;" type="button">Confirmar viagem</button>
            </div>
                <div class="cliente cdt2018-07-12 dt2018-07-12-oferta1">
                    <p>Cliente 1</p>
                </div>
                <div class="cliente cdt2018-07-12 dt2018-07-12-oferta1">
                    <p>Cliente 2</p>
                </div>
                <div class="cliente cdt2018-07-12 dt2018-07-12-oferta1">
                    <p>Cliente 3</p>
                </div>
            <div id="oferta2" class="dt2018-07-12 oferta">
                <p>Oferta 2</p>
            </div>
                <div class="cliente cdt2018-07-12 dt2018-07-12-oferta2">
                    <p>Cliente 1</p>
                </div>
                <div class="cliente cdt2018-07-12 dt2018-07-12-oferta2">
                    <p>Cliente 2</p>
                </div>
        <div id="dt2018-07-13" class="data">
            <p>13 de julho de 2018</p>
        </div>
            <div id="oferta1" class="dt2018-07-13 oferta">
                <p>Oferta 1</p>
            </div>
                <div class="cliente cdt2018-07-13 dt2018-07-13-oferta1">
                    <p>Cliente 1</p>
                </div>
                <div class="cliente cdt2018-07-13 dt2018-07-13-oferta1">
                    <p>Cliente 2</p>
                </div>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</html> 