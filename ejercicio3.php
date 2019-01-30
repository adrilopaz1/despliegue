<html>

<head>
	<title> DECIMAL A BINARIO </title>
</head>

<body>

	<?php
		
	//Transforar un numero decimal a binario
	//muestra resultado en pantalla con formato 
	
	
	$num=48;
	
	$resto=0;
	$binario=0;
	
	while($num>=1){
		$resto=$num%2;
		//echo " numero ".$num." ";
		$binario=$binario.$resto;
		
		$num=$num/2;
		//echo "<br>";
	}
	$binb=0;
	
	$binb=strrev($binario);
	// for($i=0;$i<strlen($binario);$i++){
	
		// $binb=substr($i, $binario);
		
	// }
	echo "$binb";
	
	
	?>
</body>
</html>