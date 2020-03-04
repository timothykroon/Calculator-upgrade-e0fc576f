<?php

echo "welke operatie wil je uitvoeren? (+, -,%)" . PHP_EOL;
$ding = readline();

if($ding == '*') {
    exit("'" . $ding . "'" . "dit is geen geldige operatie");
}

echo "Eerste getal?" . PHP_EOL;
$eersteGetal = readline();
if(is_numeric($eersteGetal)){
}else{
    exit("'" . $eersteGetal . "'" . "is geen getal");
}

echo "Tweede Getal" . PHP_EOL;
$tweedeGetal = readline();
if(is_numeric($tweedeGetal)){
}else{
    exit("'" . $tweedeGetal . "'" . "is geen getal");
}

if($ding == '%') {
    $resultaat = $eersteGetal % $tweedeGetal;
}elseif($ding == '-') {
    $resultaat = $eersteGetal - $tweedeGetal;
}elseif($ding == '+') {
    $resultaat = $eersteGetal + $tweedeGetal;
}
echo $resultaat;