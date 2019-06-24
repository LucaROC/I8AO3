<?php

$getal1 = 723;
$getal2 = 364;

echo <<<SOM
De som van $getal1 en $getal2 is 
SOM;
echo $getal1 + $getal2;

echo <<<VERSCHIL
<br>Het verschil tussen $getal1 en $getal2 is 
VERSCHIL;
echo $getal1 - $getal2;

echo <<<PRODUCT
<br>Het product van $getal1 en $getal2 is 
PRODUCT;
echo $getal1 * $getal2;

echo <<<QUOTIENT
<br>Het quotiënt van $getal1 en $getal2 is 
QUOTIENT;
echo $getal1 / $getal2;

echo <<<MODULUS
<br>Het quotiënt van $getal1 en $getal2 is 
MODULUS;
echo $getal1 % $getal2;

