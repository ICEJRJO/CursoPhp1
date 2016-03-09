<?php
//Algunas funciones de strings
//explode
$str = "Hola mundo, ya no esta nevando";
var_dump($str);
print_r(explode(" ", $str));
echo "\n";

//money_format

echo "$".money_format("%i", 1000)."\n";

//str_replace
$vocales = array("a","e","i","o","u");
$soloConsonantes = str_replace($vocales,"1","Hola mundo");
echo $soloConsonantes."\n";

$frase="you should eat fruits, vegetables and fiber every day.";
$healthy = array("fruits","vegetables", "fiber");
$yumm= array("pizza","beer","ice cream");

$nuevaFrase = str_replace($healthy,$yumm,$frase);

echo $nuevaFrase."\n";

//Hash crypt

$password = "admin123";
$hash = crypt($password,"*");
echo $password."\n";
echo "Variable encriptada : ".$hash;
echo "\n";

//md5

$str = 'apple';
if (md5($str) == '1f3870be274f6c49b3e31a0c6728957f'){
echo"bien encriptado"."\n";
}


//trim  cuando tenemos espacios en blanco

$str = "  Prueba de string con espacios     ";
echo"Con espacios = ".$str ."\n";
echo "sin espacios = ";
echo trim($str);
echo"\n";

$str = "Hello world";
$trimmed = trim($str, "Hdlr");
echo $trimmed;
echo"\n";





?>





