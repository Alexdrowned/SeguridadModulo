<?php
echo "<!Doctype html>
			<html>
				<head>
					<title>Practica</title>
					<meta charset='UTF-8'/>
					 <link rel='stylesheet' type='text/css' href='../../Styles/Home.css' />
				</head>
				<body>";
				echo "<h1>Practica 2 cifrado simple</h1>";
				echo "Cadena a cifrar : CREISTE QUE ERA UN SIMPLE CIFRADO, PERO NO ERA YO DIO!!!! WRIIIIIIIIIIIIIIIIIIIII!! <br/>";
				$cambiar= array("a", "e", "i", "o", "u");
				$elemento=array("1","2","3","4","5");
				$letrasxnums=str_ireplace($cambiar, $elemento, "CREISTE QUE ERA UN SIMPLE CIFRADO, PERO NO ERA YO DIO!!!! WRIIIIIIIIIIIIIIIIIIIII!!");
				echo $letrasxnums;
				echo "</body>
			</html>";
?>