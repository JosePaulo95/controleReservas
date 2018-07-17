<html>
<head>
	<link href="listaReservas.css" type="text/css" rel="stylesheet" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<?php
		include 'ListaReservas.php';
		include 'banco.php';

		$list = new ListaReservas();
		 
		echo $list->show($poder);
	?>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</html> 