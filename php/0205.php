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


// 10. Padidinkite masyvo elementu reiksmes 10 kartu ir atspausdinkite foreach pagalba. Tekstines lieka nepakeistos.


$a = array(10, 20, 30, 1, 1, 50, 0, 0, "jonas", "petras");

foreach ($a as $value) {
	if (is_integer($value)) {
		print $value * 10 . '<br>';
	}
}

print ("<br><br>");


// 11. Sukurtkite seno masyvo pagrindu naja masyva. Sumazinkite jo elementu kieki 2 kartus, t.y. palikite kas antra elementa ir atspausdinkite.


$a  = array(10, 20, 30, 50, 60, 70, 80);
$array = [];

$count = count($a);
for($x=0; $x<=$count; $x+=2){
	$array[] = $a[$x];
}
var_dump($array);

print "<br><br>";