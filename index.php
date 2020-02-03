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
		print 'Pirmadienis';
		break;
	case 'ANTRADIENIS':
		print 'Antradienis';
		break;
	case 'TRECIADIENIS':
		print 'Treciadienis';
		break;
	case 'KETVIRTADIENIS':
		print 'Ketvirtadienis';
		break;
	case 'PENKTADIENIS':
		print 'Penktadienis';
		break;
	case 'SESTADIENIS':
		print 'Sestadienis';
		break;
	case 'SEKMADIENIS':
		print 'Sekmadienis';
		break;
	default:
		print 'Nera tokios savaites dienos';
		break;
}













