<? php 
/ * N1 Escribe una función que verifique si un número es primo o no,
 un numero primo es un numero entero mayor a que solo es divisible 
 entre la unidad y el mismo numero* /

$numero=21;
if(primo($numero)){
	echo $numero. "El numero si es primo";
} else{
	echo $numero. "El numero no es primo";
} 

function evaluar($nume){
if($nume == 1 || $nume== 2 || $nume == 3 || $nume == 5 || $nume== 7){
  return true;}
	if ($nume >= 8 ){
		if($nume %2 == 0 || $nume%3==0 || $nume%5==0){
		return true;}
		if($nume>=8){
		if($nume%2>=1 || $nume%3>=1 || $nume%5>=1){
		return true;}
			       }
			   }
	  }
	}