<? php
/*Escriba una clase Calculadora que acepte dos valores como argumentos,
 y pueda sumarlos, restarlos, multiplicarlos, 
 o dividirlos según requerimiento*/
	$op1 = $_GET['op1'];
	$op2 = $_GET['op2'];
	$operador = $_GET['operador'];
	
	if($operador == "+"){
		$resp= $op1 + $op2;
	}else if($operador == "-"){
		$resp = $op1 - $op2;
	}else if($operador == "*"){
		$resp = $op1 * $op2;
	}else if($operador == "/"){
		$resp = $op1 / $op2;
	}
	echo "La respuesta es: ".$resp;
?>