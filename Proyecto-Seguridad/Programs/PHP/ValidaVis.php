<?php
echo "<!Doctype html>
			<html>
				<head>
					<title>Practica</title>
					<meta charset='UTF-8'>
					<link rel='stylesheet' type='text/css' href='../../Styles/Home.css' >
				</head>
				<body>";
	   			echo "<h1>Validar una visa</h1>";
	   			$patronV ='/^((4[0-9]{12})|(4[0-9]{15})|(5[1-5][0-9]{14})|(3[47][0-9]{13})|(6011[0-9]{12}))$/';
	   			$tarjeta="4012888888881881";
	   			echo "Tarjeta visa a validar: ".$tarjeta."<br/>";
        		if (preg_match($patronV, $tarjeta)) 
            		echo "Tarjeta valida";
        		else
        			echo "Tarjeta Invalida";
        echo 	"</body>
	  	  	</html>";
        
?>