<?php	
	if(isset($_POST['UserR']));
		$userR=$_POST['UserR'];   		
	if(isset($_POST['PasswordR']));
		$pass=$_POST['PasswordR'];
	$link = mysqli_connect("localhost","root","","datos_pagina_web");
				if($link == TRUE)
				if($userR!="" && $pass!="" )
					if(preg_match("/^[a-z\d_]{1,20}$/i", $userR ) && preg_match( "/^[a-z\d_]{1,20}$/i", $pass))
					{
						$result = mysqli_query($link, "select Usuarios from datos where Usuarios=\"$userR\"");
						$row = mysqli_fetch_assoc($result);
						if($row["Usuarios"]!=$userR)
						{
							$resul = mysqli_query($link, "INSERT INTO datos (Usuarios,contra) VALUES  (\"$userR\" , \"$pass\")");
							echo "<h2>Felicidades ".$userR." Acabas de registrarte Exitosamente </h2>";
							echo "Ahora por favor regresa a la pagina anterior para que puedas iniciar sesion";
							echo "<a href='../../Templates/inicio.HTML' > Regresar </a>";
						}
						else 
						{
							echo "Error ese nombre de usuario no esta disponible,pruebe con otro";
							echo "<a href='../../Templates/inicio.HTML' > Regresar </a>";	
						}
					}
					else 
						echo "Usted introdujo caracteres no validos en usuario o contraseña" ;
				else
					echo "Usted dejo al menos un campo vacio";



?>