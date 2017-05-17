<?php
	function mod ($a,$b)
	{
		$c=$a%$b;
		if($a%$b=(-$c))
			$c=(-$c)+$b;
		return $c;
	}
	$hola=mod (-13,64);
	echo"$hola";
?>