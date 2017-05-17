<?PHP
if (empty($cadena)) {
echo"Escribe el mensaje a cifrar: ";
echo"<form action='Practica6S.php' method='GET'>
     <input type='text' name='cadena'/>";
echo"Escribe la llave del cifrado: 
     <input type='text' name='llave'/><input type='submit'/>";
}
	else {
		$cadena=$_GET['cadena'];
		$llave=$_GET['llave'];
		function codificacion($cadena) {
			if (!is_string($cadena))
				return false;
			$a = unpack('H*', $cadena);
			$b = str_split($llave);
			$c = bindec(base_convert($a[1], 16, 2));
			return str_replace($b, $c , $a);
		}
	 $cifrado = codificacion($cadena);
	 echo"Su mensaje es: ";echo $cifrado;
	};
?>