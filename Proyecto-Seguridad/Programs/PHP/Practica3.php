<?php
	echo "<!Doctype html>
			<html>
				<head>
				</head>
				<body>";
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
				$cadena="Elciclodelavidacontinua";
				echo $cadena."<br/>";
				$matriz = str_split($cadena);
				$num = strlen($cadena);
				$a=0;
				PlayFair($num,$matriz,6,$a);
		echo "</body>
	  	  	</html>";			
?>