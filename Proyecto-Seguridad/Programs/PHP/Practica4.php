<?php
echo "<!Doctype html>
			<html>
				<head>
					<title>Practica</title>
					<meta charset='UTF-8'>
					<link rel='stylesheet' type='text/css' href='../../Styles/Home.css' >
				</head>
				<body>";
				echo "<h1>Practica 4: Dada un # de Cuenta cifrado simple </h1>";
				$no_cta="316030120";
				echo "Numero de cuenta: ".$no_cta."<br/>";
				$rev=strrev($no_cta);
				echo $rev ;
		echo    "</body>
	  	  	</html>";

?>