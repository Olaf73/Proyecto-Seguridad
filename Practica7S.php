<?PHP
if (empty($mensaje)) {
echo"Escribe el mensaje a cifrar: ";
echo"<form action='Practica7S.php' method='GET'>
     <input type='text' name='mensaje'/><input type='submit'/>";
}
	else {
		$mensaje=$_GET['mensaje'];
		echo hash('sha512', $mensaje);
	};
?>