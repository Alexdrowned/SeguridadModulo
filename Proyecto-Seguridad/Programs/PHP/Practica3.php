<?php
	//Playfair
	$cadena="Elciclodelavidacontinua";
	echo "<br/>";
	//$matriz=array();
	/*for($i=0;$i<23;$i++)
		$matriz[]=$frase[$i]; */
	$matriz = str_split($cadena);
	$num = strlen($cadena);
	$a=0;

		if(6*6 != $num)
			while($a<6)
			{
				print_r($matriz[$a]);
				for($i=0;$i<$num+1;$i++)
				{	
					if($i+6+$a<=$num ) 
						printf($matriz[$i+6+$a]);
					$i=$i+5+$a;
					
				}
				echo " ";
				$a++;
			}		
?>