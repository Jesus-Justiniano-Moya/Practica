<?php
/*Escribe una función que verifique si un número es primo o no, 
un numero primo es un numero entero mayor
 a que solo es divisible entre la unidad y el mismo numero*/
$numro=21;
$cont=0;
for ($i=1; $i <= $numro; $i++) { 
    if($numro % $i == 0){
        $cont++;
    }
}
if($cont <= 2){
    echo"El numero".$numro." es primo ";
}
else {
    echo"El numero".$numro." no es primo ";
}