<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// "1. ekrane atvaizduokite teksta 'Sios dienos data - ' ir su php atvaizduokite sios dienos data"

$string = "Sios dienos data - ";
$date = date('Y.m.d');

$result = $string . $date;

print $result . "<br><br>";

// "2. sukurti sakini is 5< zodziu. po kiekvieno zodzio yra padetas taskas. jums reikia naudojant bazines php funkcijas tuos taskus pakeistu i tarpus"

$text = "Labai. grazus. sakinys. bus. kitame. darbe. ";
$text2 = str_ireplace("." , " " , $text );

print $text2 . "<br><br>";

// "3. sukurti stringa kuris susidarytu is sakynio. Turi jame egzistuoti didzioios ir mazosios raides. Panaudoti php default'ine funkcija, kuri visas stringo raides paverstu didziosiomis arba mazosiosmis"

$sentence = "Mano vardas yra Brigita";

$sentence_upper = strtoupper($sentence);
$sentence_lower = strtolower($sentence);

print $sentence_upper . "<br>";
print $sentence_lower . "<br><br>";

// "4. uzduotis switch"

$target = 'Treciadienis';

switch (strtoupper($target)) {
	case 'PIRMADIENIS':
		print 'Pirmadienis <br>';
		break;
	case 'ANTRADIENIS':
		print 'Antradienis <br>';
		break;
	case 'TRECIADIENIS':
		print 'Treciadienis <br><br>';
		break;
	case 'KETVIRTADIENIS':
		print 'Ketvirtadienis <br>';
		break;
	case 'PENKTADIENIS':
		print 'Penktadienis <br>';
		break;
	case 'SESTADIENIS':
		print 'Sestadienis <br>';
		break;
	case 'SEKMADIENIS':
		print 'Sekmadienis <br>';
		break;
	default:
		print 'Nera tokios savaites dienos <br>';
		break;
}



// "5. Sukurkite FOR cikla kuris prasidetu nuo 0, veiktu iki kol kintamasis pataps 10, ir atspausdins savo ciklo reiksme kas antra"

for ($x = 0; $x <=10; $x+=2){
	print "The number is : $x <br>";
}








