<html>

<head>
	<title> CONVERTIR UN NUMERO A CUALQUIER BASE</title>
</head>

<body>

	<?php
		
	//Transforar un numero decimal a binario
	//muestra resultado en pantalla con formato 
	
	
	$num=48;
	$opcion=2;
	$resto=0;
	$octal=" ";

	switch($opcion){
		case 1:
			while($num>=1){
				$resto=$num%$opcion;
				$octal=$octal.$resto;
				$num=$num/$opcion;
			}
			//echo "$octal";
			$octalb=" ";
			$octalb=strrev($octal);
			// for($i=0;$i<strlen($binario);$i++){
	
			// $binb=substr($i, $binario);
		
			// }
			echo "$octalb";
		break;
		case 2:
			while($num>=1){
				$resto=$num%$opcion;
				$octal=$octal.$resto;
				$num=$num/$opcion;
			}
			//echo "$octal";
			$octalb=" ";
			$octalb=strrev($octal);
			// for($i=0;$i<strlen($binario);$i++){
	
			// $binb=substr($i, $binario);
		
			// }
			echo "$octalb";
		break;
		case 3:
			while($num>=1){
				$resto=$num%$opcion;
				$octal=$octal.$resto;
				$num=$num/$opcion;
			}
			//echo "$octal";
			$octalb=" ";
			$octalb=strrev($octal);
			// for($i=0;$i<strlen($binario);$i++){
	
			// $binb=substr($i, $binario);
		
			// }
			echo "$octalb";
		break;
		default;
	}
	?>
</body>
</html>