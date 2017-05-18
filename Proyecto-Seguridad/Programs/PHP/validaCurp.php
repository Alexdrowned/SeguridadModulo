<?php
echo "<!Doctype html>
			<html>
				<head>
					<title>Practica</title>
					<meta charset='UTF-8'>
					<link rel='stylesheet' type='text/css' href='../../Styles/Home.css' >
				</head>
				<body>";
				echo "<h1>Valida CURP</h1>";
				$curp="/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/";
				$validar="BABA000304HDFTLXA4";
				echo "Curp a validar: ".$validar."<br/>";
				if (preg_match($curp, $validar)) 
            		echo "Curp valida";
        		else 
        			echo "Curp no valida";
        echo "</body>
	  	  	</html>";
        

?>