<?php
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
		echo "Conexion correcta";
	if($user!="" && $pass!="" )
		if(preg_match("/^[a-z\d_]{1,20}$/i", $user ) && preg_match( "/^[a-z\d_]{1,20}$/i", $pass))
		{
			$result = mysqli_query($link, "select Usuarios,contra from datos where Usuarios=\"$user\" and contra=\"$pass\" ");
			$row = mysqli_fetch_assoc($result);
				if($row["Usuarios"]!="" && $row["contra"]!="" )
					printf ("\nUsuario: %s Contrasena: %s\n", $row["Usuarios"], $row["contra"]);
				else
				echo "Error no se ha encontrado ninguna coincidencia, vuelva a intentarlo";
		}
		else 
			echo "Usted introdujo caracteres no validos en usuario o contraseña" ;
	else
		echo "Usted dejo al menos un campo vacio"
?>
