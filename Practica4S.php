<?PHP
if (empty($cuenta)){
	echo"<form action='Practica4S.php' method='GET'>
	     <center> <p>Escribe tu número de cuenta: </p>
	     <p> <input type='text' name='cuenta'/> </p>
         <p> <input type='submit' value='Cifrar'/> </p>";		 
}
else {
	$cuenta = $_GET['cuenta'];
	$cifrada = strrev($cuenta);
	
	echo"Cifrado: $cifrada";
	
}
?>