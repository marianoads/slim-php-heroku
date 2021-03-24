<?php 
/*
Yamakawa Mariano

Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.
*/

$array = array(  1 => rand(5,6), 2=> rand(5,6) , 3=> rand(4,6), 4=> rand(4,5), 5=> rand(4,7));

$acumulador = 0;
foreach ($array as &$valor) {
	$acumulador += $valor;
}
$promedio = $acumulador / 5;

if($promedio < 6){
	echo "El promedio es menor a 6";
}
else if($promedio < 6){
	echo "El promedio es mayor 6";
}
else{
	echo "El promedio igual a 6";
}

?>