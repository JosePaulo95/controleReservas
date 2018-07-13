<html>
<head>
	<link href="listaReservas.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<?php
		include 'ListaReservas.php';
		
		$list = new ListaReservas();
		 
		echo $list->show();
	?>
	<div style="cursor: pointer;">
		<div id="Jul2018" class="tabcontent">
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

        <div id="Jan2019" class="tabcontent">
	        <div id="dt2019-01-12" class="data">
				<p>12 de janeiro de 2019</p>
	        </div>
            <div id="oferta1" class="dt2019-01-12 oferta">
                <p>Oferta 1</p>
                <button style="display: inline-block;float: right;margin: 15px;" type="button">Confirmar viagem</button>
            </div>
            <div class="cliente cdt2019-01-12 dt2019-01-12-oferta1">
                <p>Cliente 1</p>
            </div>
            <div class="cliente cdt2019-01-12 dt2019-01-12-oferta1">
                <p>Cliente 2</p>
            </div>
        </div>
        <div id="mes_nenhuma_reserva" class="tabcontentnull">
        	<p>
        		Companheiro, você ainda não tem reservas para este mês.
        	</p>
        </div>
        <div id="todos_nenhuma_reserva" class="tabcontentnull">
        	<p>
        		No momento, não há nenhum pedido de reserva para suas ofertas.
        	</p>
        </div>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</html> 