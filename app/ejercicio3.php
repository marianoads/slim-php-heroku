<?php 
/*
Yamakawa Mariano

Aplicación No 3 (Obtener el valor del medio)
Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”
*/

$a=3;
$b=3;
$c=4;

if($a<$b && $b < $c){
	echo $b;
}
else if($a < $c && $c < $b){
	echo $c;
}
else if($b < $a && $a < $c){
	echo $a;
}
else if($b < $c && $c < $a){
	echo $c;
}
else if($c < $a && $a < $b){
	echo $a;
}
else if($c < $b && $b < $a){
	echo $b;
}
else{
	echo "No hay valor del medio";
}

?>