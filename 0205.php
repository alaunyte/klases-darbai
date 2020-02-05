<?php

// 2. parasykite salyga: jeigu kintamasis $a daugiau uz $b, spausdintu teksta: "a daugiau uz b"

$a = 2;
$b = 1;

if ($a > $b) {
	print "a daugiau uz b  <br><br>";
}

// 3. istaisykite klaidas, rezultate turi spausdinti zodi "Vokietija"

$salis = "de";

switch ($salis) {
	case 'ca':
		echo ("Kanada");
		break;
	case 'cr':
		echo ("Kosta Rika");
		break;
	case 'de':
		echo ("Vokietija  <br><br>");
		break;
	case 'uk':
		echo ("Didzioji Britanija");
		break;
	default;
}


// 4. Kokias operacijas atlikti su $a ir $b, kad atsispausdintu 11:

$a = "10 maisu";
$b = "1 maisas";

$result = ($a + $b);
print "$result <br><br>";


// 5. Koki kintamaji (kintamuosius) reikia istrinti ar uzkomentuoti, kad $e igytu reiksme 10:

// $a = "11";
// $b = "5";
$c = "6";
$d = 4;

$e = $d + $c;
print $e;

print ("<br><br>");



// 8. Turime kintamuosius ir reiksmes $vardas, $pavarde ir $atliginimas. parasykite salyga, jeigu egzistuoja kintamieji $vardas ir $pavarde, o $atlyginimas > 5000, spausdinti - visi duomenys yra; kitu atveju spausdinti: 


$vardas = 'Jonas';
$pavarde = 'Jonaitis';
$atlyginimas = 5000;

if (isset($vardas)&& 
isset($pavarde) && $atlyginimas>=5000) {
	print 'visi duomenys yra <br><br>';
}else{
	print $vardas . ' ' ;
	print $pavarde . ' ';
	print $atlyginimas;
}

