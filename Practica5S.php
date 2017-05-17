<?PHP
if (empty($mensaje)) {
	echo "Escribe el mensaje a codificar";
	echo"<form action='Practica5S.php' method='GET'>";
	echo"<input type='text' name='mensaje'><input type='submit' value='Codificar'>";
}
	else {
		$mensaje=$_GET['mensaje'];
		function strToBin($mensaje)
  {
	  if(!is_string($mensaje))
		  return false;
	  $value= unpack('H*', $mensaje);
	  return bindec(base_convert($value[1], 16, 2));
  };
		$codificacion=strToBin($mensaje);/*
		---Dejo esta lìnea por si el resultado
		   tenìa que salir en binario---
		$codificacion=decbin($codificacion);*/
		echo"Su mensaje es:";echo $codificacion;
	};
	/*function strToBin($input)
  {
	  if(!is_string($input))
		  return false;
	  $value= unpack('H*', $input);
	  return bindec(base_convert($value[1], 16, 2));
  }*/

?>