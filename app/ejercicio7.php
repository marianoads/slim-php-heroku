<?php 
/*
Yamakawa Mariano

Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.*/

$array = array();

for($i=0;$i<20;$i++){
	if($i % 2 != 0){
	array_push($array,$i);
	}
}


echo "<br/>MUESTRO ARRAY CON WHILE <br/>";
$i = 0;
while ( $i < 10) {
		echo "Numero impar: ".$array[$i]."<br/>";
		$i++;
}


echo "<br/>MUESTRO ARRAY CON FOREACH <br/>";
foreach ($array as $key => $value) {
	echo "Numero impar: ".$value."<br/>";
}


?>