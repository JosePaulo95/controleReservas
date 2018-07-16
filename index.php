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
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</html> 