<html>

<head>
	<title> CONVERTIR UN NUMERO A LA BASE </title>
</head>

<body>

	<?php
		
	//Transforar un numero decimal a binario
	//muestra resultado en pantalla con formato 
	
	
	$num=48;
	
	$resto=0;
	$octal=" ";
	
	while($num>=1){
		$resto=$num%3;
		$octal=$octal.$resto;
		$num=$num/3;
	}
	//echo "$octal";
	$octalb=" ";
	
	$octalb=strrev($octal);
	// for($i=0;$i<strlen($binario);$i++){
	
		// $binb=substr($i, $binario);
		
	// }
	echo "$octalb";
	
	
	?>
</body>
</html>