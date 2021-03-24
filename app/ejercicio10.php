<?php /*
Yamakawa Mariano

Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.*/

$arrayAsociativo = 
	array(
	"lapicera1" => array(
		"color" => "azul",
		"marca" => "bic",
		"trazo" => "fino",
		"precio" => 24,
	),
	"lapicera2" => array(
		"color" => "verde",
		"marca" => "pen",
		"trazo" => "grueso",
		"precio" => 50,
	),
	"lapicera3" => array(
		"color" => "blanco",
		"marca" => "parker",
		"trazo" => "fino",
		"precio" => 15,
	)
		);

var_dump($arrayAsociativo["lapicera1"]);
echo "<br/>";
var_dump($arrayAsociativo["lapicera2"]);
echo "<br/>";
var_dump($arrayAsociativo["lapicera3"]);
echo "<br/>";

//------------------------------------------------------------------------------//

$arrayIndexado = array(
	array(
		"color" => "azul",
		"marca" => "bic",
		"trazo" => "fino",
		"precio" => 24,
	),
	array(
		"color" => "verde",
		"marca" => "pen",
		"trazo" => "grueso",
		"precio" => 50,
	),
	array(
		"color" => "blanco",
		"marca" => "parker",
		"trazo" => "fino",
		"precio" => 15,			
	)

);

var_dump($arrayIndexado[0]);
echo "<br/>";
var_dump($arrayIndexado[1]);
echo "<br/>";
var_dump($arrayIndexado[2]);
echo "<br/>";

?>