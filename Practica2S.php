<?php
echo "<form action='Practica2S.php' method='GET'>
      <center>
	  <H1>Escribe tu palabra: </H1>
	  <p><input type='text' name='mensaje'/></p>
	  <p><input type='submit' value='Codificar'/></p>
	  </form>";
	  $entrada=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
	  $salida=array('1^','2^','3^','4^','5^','6^','7^','8^','9^','10^','11^','12^','13^','14^','15^','16^','17^','18^','19^','20^','21^','22^','23^','24^','25^','26^');
	  $cadena=$_GET['mensaje'];
	  $nuevo=str_replace ($entrada,$salida,$cadena);
	  print_r($nuevo);
?>