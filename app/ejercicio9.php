<?php /*
Yamakawa Mariano

Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.*/

$lapiceras = array(
	"lapicera1" => array(
		"color" => "azul",
		"marca" => "bic",
		"trazo" => "fino",
		"precio" => 24
				   ),
	"lapicera2" => array(
		"color" => "verde",
		"marca" => "faber",
		"trazo" => "grueso",
		"precio" => 50
				   )

);
/*
$lapicera2 = [
"color" => "verde",
"marca" => "pen",
"trazo" => "grueso",
"precio" => 50,
];

$lapicera3 = [
"color" => "blanco",
"marca" => "parker",
"trazo" => "fino",
"precio" => 15,
];
*/

foreach ($lapiceras as $key ) {
	
	foreach ($key as $value => $lapicera1){
		echo $value.":".$lapicera1;
		echo "<br/>";
	}
}
/*
echo "<br/>Lapicera2<br/>";
foreach ($lapicera2 as $key => $value) {
	echo $key.":".$value."<br/>";
}

echo "<br/>Lapicera3<br/>";
foreach ($lapicera3 as $key => $value) {
	echo $key.":".$value."<br/>";
}
*/
?>