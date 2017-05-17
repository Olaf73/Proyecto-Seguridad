<?PHP
if(empty($mensaje))
{
	echo"Cifrado PLAYFAIR-3";
	echo"Escribe tu mensaje: ";
	echo"<form action='Practica3S.php' method='GET'>
     <input type='text' name='mensaje'/>
     <input type='submit' value='Cifrar'/>";
}
else {
		
	$mensaje=$_GET['mensaje'];
	$arreglo = str_split($mensaje, 3);
	$limite = count($arreglo);

	foreach ($arreglo as $a => $value) {
		$nuevoArreglo = str_split($arreglo[$a]);
		$linea1 = array($nuevoArreglo[0]);
		$linea2 = array($nuevoArreglo[1]);
		$linea3 = array($nuevoArreglo[2]);
		echo $nuevoArreglo[$a];
	}
	/*for ($y=0; $y<=$limite; $y++) {
		$nuevoArreglo = str_split($arreglo[$y]);
		print_r($nuevoArreglo[$y]);
	}*/
	//$arreglo2 = array_chunk($arreglo, $limite, true);
	
	//print_r($arreglo);
	/*echo $limite;
	print_r($arreglo2);*/
};
?>