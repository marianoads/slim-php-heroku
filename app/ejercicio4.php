<?php 
/*
Yamakawa Mariano

Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.
*/

$operador = "/";
$num1 = 3;
$num2 = 0;

switch ($operador) {
	case '/':
		if($num2 == 0){
		echo "No se puede dividir por 0";
		}
		else{
		echo ($num1/$num2);	
		}
		break;
	case '+':
	echo ($num1+$num2);
	break;
	case '-':
	echo ($num1-$num2);
	break;
	case '*':
	echo ($num1*$num2);
	break;
	default:
		echo "Error de operador";
		break;
}

?>