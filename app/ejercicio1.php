<?php 
/*
Yamakawa Mariano

Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.
*/
$suma = 1;
$contador = 0;
for($i=1;$suma<=1000;$i++){
	echo $suma;
	$suma +=$i;
	$contador++;
	echo "</br>";
}
echo "Cantidad numeros sumados: ", $contador;
?>