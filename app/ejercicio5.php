<?php 
/*
Yamakawa Mariano

Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres” 
*/
$strNumero ="";
$numero = 49;
$decena = str_split($numero);

switch ($decena[0]) {
	case '2':
		if($decena[1] == 0){
			$strNumero = "veinte";
		}
		else{
			$strNumero = "veinti ";
		}
		break;
		case '3':
		if($decena[1] == 0){
			$strNumero = "treinta";
		}
		else{
			$strNumero = "treinta y ";
		}
		break;
		case '4':
		if($decena[1] == 0){
			$strNumero = "cuarenta";
		}
		else{
			$strNumero = "cuarenta y ";
		}
		break;
		case '5':
		if($decena[1] == 0){
			$strNumero = "cincuenta";
		}
		else{
			$strNumero = "cincuenta y ";
		}
		break;
		case '6':
		if($decena[1] == 0){
			$strNumero = "sesenta";
		}
		else{
			$strNumero = "sesenta y  ";
		}
		break;
	
	default:
		$strNumero = "Elija un numero entre 20 y 60";
		break;
}

switch ($decena[1]) {
	case '1':
		$strNumero .= "uno";
		break;
		case '2':
		$strNumero .= "dos";
		break;
		case '3':
		$strNumero .= "tres";
		break;
		case '4':
		$strNumero .= "cuatro";
		break;
		case '5':
		$strNumero .= "cinco";
		break;
		case '6':
		$strNumero .= "seis";
		break;
		case '7':
		$strNumero .= "siete";
		break;
		case '8':
		$strNumero .= "ocho";
		break;
		case '9':
		$strNumero .= "nueve";
		break;
	
}

echo $strNumero;
?>