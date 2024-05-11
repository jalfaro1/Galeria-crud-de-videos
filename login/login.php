<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="login.css">
</head>

<body>
<div align="center">
<form method="POST">
<table>
<tr><td colspan="2" style="background-color:#33A8DB;padding-bottom:10px;"><label>Iniciar sesión &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Creado por Ing. Julio Alfaro</label></td></tr>

<tr><td rowspan="6"><img src="logo.jpg" width="200"></td><td><label>Usuario</label></td></tr>

<tr><td><input type="text" name="txtusuario" placeholder="Ingresar usuario" required /> </td></tr>

<tr><td><label>Contraseña</label></td></tr>

<tr><td><input type="password" name="txtpassword" placeholder="Ingresar password" required /> </td></tr>

<tr><td><input type="submit" name="btningresar" value="Ingresar"/></td></tr>

<tr><td><a href="#">¿Olvidaste tu contraseña?</a><br><br><a href="#">Crear una nueva cuenta </a></td></tr>

</table>
</form>
</div>
</body>

</html>

<?php

session_start();
if(isset($_SESSION['nombredelusuario']))
{
	header('location: pagina.php');
}

if(isset($_POST['btningresar']))
{
	
	$dbhost="localhost";
	$dbuser="jalfaro";
	$dbpass="leny12";
	$dbname="videodb";
	
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(!$conn)
	{
		die("No hay conexión: ".mysqli_connect_error());
	}
	
	$nombre=$_POST['txtusuario'];
	$pass=$_POST['txtpassword'];
	
	$query=mysqli_query($conn,"Select * from login where usuario = '".$nombre."' and password = '".$pass."'");
	$nr=mysqli_num_rows($query);
	
	if(!isset($_SESSION['nombredelusuario']))
	{
	if($nr == 1)
	{
	
		$_SESSION['nombredelusuario']=$nombre;
		header("location: ../index.php");
	}
	else if ($nr == 0)
	{
		echo "<script>alert('Usuario no existe');window.location= 'login.php' </script>";
	}
	}
}
?>





































