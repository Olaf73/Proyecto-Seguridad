<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$user=$_POST['user'];
$password=$_POST['contrasenia'];
$PIMIENTA = "qwertyuiop";
$CRUDO = hash('md5', $password);
$SAL = "7300";
$contrasenia = $SAL.$CRUDO.$PIMIENTA; 

$link=mysqli_connect("localhost","root","");
mysqli_select_db("seguridad", $link);
$chequeo = mysqli_real_escape_string($resultado , $SQL);
$SQL="insert into `registros`(`nombre`,`correo`,`telefono`,`user`,`contrasenia`)
values ('$nombre','$correo','$telefono','$user','$contrasenia');";
$resultado=mysqli_query($SQL);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'/>
<link rel="stylesheet" href="style.css"/>
<title> COMPROBACIÓN </title>
<font color="black" face="agency fb">
<center><H1> REGISTRO COMPLETADO </H1></center>
</font>
</head>

<body bgcolor="#54A2A9">
<form action="PaginaPrincipal.php" method="POST">
<font color="#294345" face="arial" size: "5">
<center>
<center><p> <input type='submit' value='INICIAR SESIÓN'/> </p>
</td>
</table>
</center>
</font>

</form>
</body>
</html>