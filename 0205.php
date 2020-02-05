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