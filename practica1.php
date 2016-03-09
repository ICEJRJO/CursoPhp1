<?php

//este es un documento de una sola linea

/*
todo lo que escribe aqui es para comentario largo


print ("Hello");





$float = 1.234;
$float = 1.2e3;//1200
$float = 7e-10;
unset($init1);

var_dump($float);
var_dum($int4);

//Aritmetica

$sum = 1 + 1;
$res = 2 - 1.0; //resta
$mul = 4 * 3;//multiplicacion
$div = 2 / 4; //división

var_dump($res);
var_dump($div);*/

$num = 0;
$num +=1;// $sum = $sum + 1
echo $num ++;// agrega 1 a la siguiente vuelta imprime 1
echo ++$num; // nos da 3
$num-=2;
//$num /= $float;

//Strings
$num = 5;
$varString = '$num \n';
echo $varString;
$varString = " El valor de la variable num = $num \n";
echo $varString;

$otroString = " otra forma de incluir variables {$num} \n";
echo $otroString;
$otroString2 = " otra segunda forma de incluir variables $${num} \n";
echo $otroString2;

$stringMult = <<<'END'
Multi Line
string
END;

echo $stringMult."\n";

echo 'este es un '.'String'."\n";
echo 'multiples',' parametros',' en echo'. "\n";

//Constantes

define("FOO", "algo");
echo FOO . "\n";
echo " Este es el valor de la constante FOO=".FOO ."\n";
define("_FOO" ,"algo");



?>





