<?php

// "1. ekrane atvaizduokite teksta 'Sios dienos data - ' ir su php atvaizduokite sios dienos data"

$string = "Sios dienos data - ";
$date = date('Y.m.d');

$result = $string . $date;

print $result . "<br><br>";

// "2. sukurti sakini is 5< zodziu. po kiekvieno zodzio yra padetas taskas. jums reikia naudojant bazines php funkcijas tuos taskus pakeistu i tarpus"

$text = "Labai. grazus. sakinys. bus. kitame. darbe. ";
$text2 = str_ireplace("." , " " , $text );

print $text2 . "<br><br>";