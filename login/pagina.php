<?php

session_start();

if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];
	echo "<h1>Bienvenido: $usuarioingresado </h1>";
}
else
{
	header('location: login/login.php');
}

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: login/login.php');
}
?>

<link rel="stylesheet" href="login.css">
<body>
<form method="POST">
<input type="submit" value="Cerrar sesión" name="btncerrar" />
</form>
</body>

