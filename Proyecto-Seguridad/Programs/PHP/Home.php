<?php
	echo "<!Doctype html>
			<html>
				<head>
				</head>
				<body>";
				if(isset($_POST['User']));
					$user=$_POST['User'];
				if(isset($_POST['Password']));
					$pass=$_POST['Password'];
				/*if(isset($_POST['UserR']));
					$userR=$_POST['UserR'];   		//Para otra pagina aqui solo pondre el inicio con una cuenta ya creada
				if(isset($_POST['PasswordR']));
					$user=$_POST['PasswordR'];*/
				$link = mysqli_connect("localhost","root","","datos_pagina_web");
				if($link == TRUE)
				if($user!="" && $pass!="" )
					if(preg_match("/^[a-z\d_]{1,20}$/i", $user ) && preg_match( "/^[a-z\d_]{1,20}$/i", $pass))
					{
						$result = mysqli_query($link, "select Usuarios,contra from datos where Usuarios=\"$user\" and contra=\"$pass\"");
						$row = mysqli_fetch_assoc($result);
						if($row["Usuarios"]!="" && $row["contra"]!="" )
						{
							printf ("<h2>Bienvenido %s </h1> ", $row["Usuarios"]);
							echo "<a href='Home2.php'> Continuar </a> <br/> ";
							echo "<a href='../../Templates/inicio.HTML' > Regresar </a>";
						}
						else
							echo "Error no se ha encontrado ninguna coincidencia, vuelva a intentarlo";
					}
					else 
						echo "Usted introdujo caracteres no validos en usuario o contraseña" ;
				else
					echo "Usted dejo al menos un campo vacio";
			echo 	"</body>
				</html>";
?>
