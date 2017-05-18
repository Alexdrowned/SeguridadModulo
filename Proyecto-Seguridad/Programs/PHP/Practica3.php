<?php
	function PlayFair($long,$array,$Pnum,$a){
					if($Pnum*$Pnum >= $long) 
					while($a<$Pnum) 
					{
						print_r($array[$a]);
						for($i=0;$i<$long+1;$i++)
						{	
							if($i+$Pnum+$a<=$long ) 
							printf($array[$i+$Pnum+$a]);
							$i=$i+($Pnum-1)+$a;
						}
						echo " ";
						$a++;
					}			
				}

	echo "<!Doctype html>
			<html>
				<head>
					<title>Practica</title>
					<meta charset='UTF-8'>
					<link rel='stylesheet' type='text/css' href='../../Styles/Home.css' >
				</head>
				<body>";
				echo "<h1>Practica 3: PlayFair</h1>";
				$cadena="Elciclodelavidacontinua";
				echo $cadena."<br/>";
				$matriz = str_split($cadena);
				$num = strlen($cadena);
				$a=0;
				PlayFair($num,$matriz,6,$a);
		echo "</body>
	  	  	</html>";			
?>