<?php 
/*
Yamakawa Mariano

Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.
*/

$dia = date("j");
$mes = date("n");
$año = date("y");

$dia1 = date("D");
$mes1 = date("M");
$año1 = date("Y");

$estacion;
echo "--FECHA ACTUAL-- <br>  ",$dia,"/", $mes,"/", $año, "<br>";

echo $dia1,"/", $mes1,"/", $año1, "<br>";

switch	($mes){
	case 1:
	$estacion = "verano";
	break;
	case 2:
	$estacion = "verano";
	break;
	case 3:
	if($dia<21){
		$estacion = "verano";
	}
	else{
		$estacion = "otoño";
	}	
	break;
	case 4:
	$estacion = "otoño";
	break;
	case 5:
	$estacion = "otoño";
	break;
	case 6:
	if($dia<20){
	$estacion = "otoño";	
	}
	else{
	$estacion = "invierno";
	}	
	break;
	case 7:
	$estacion = "invierno";
	break;
	case 8:
	$estacion = "invierno";
	break;
	case 9:
	if($dia<21){
		$estacion = "invierno";
	}
	else{
		$estacion = "primavera";
	}	
	break;
	case 10:
	$estacion = "primavera";
	break;
	case 11:
	$estacion = "primavera";
	break;
	case 12:	
	if($dia>21){
		$estacion = "verano";
	}
	else{
		$estacion = "primavera";
	}
	break;
	default:
	break;
}

echo "La estacion actual es:",$estacion;

?>