<?php
	echo "<!Doctype html>
		  <html>
		  	<head>
		  		<title>Home</title>
		  		<meta charset='UTF-8' >
		  		 <link rel='stylesheet' type='text/css' href='../../Styles/Home.css' >

		  	</head>
		  	<body>";
		  echo "<h1>Practicas</h1>";
		  	for($i=1;$i<8;$i++)
		  		echo "<a href='Practica".$i.".php'>Practica ".$i."</a><br/>";
		  	echo "<a href='validaVis.php'>Validar Visa </a> <br/>";
		  	echo "<a href='validaCurp.php'>Validar CURP </a> <br/>";
		  	echo "<a href='validaVigen.php'>Cifrado de Vigenère </a> <br/>";
		  	echo "<a id='regresa' href='../../Templates/inicio.HTML'> Salir </a> ";

	  echo "</body>
	  	  </html>";

?>