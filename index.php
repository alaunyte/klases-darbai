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


// "6. for foreach"


$text3 = 'Tekstas';

$names = array('8', 'Jonas', 'Marius');
$names2 = [8, 'Jonas', 'Marius'];

print_r($names);
var_dump($names2);


$people = ['vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 24, 'miestas' => 'Vilnius'];

var_dump($people);


$people2 = 
[
['vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 24, 'miestas' => 'Vilnius'],
['vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 24, 'miestas' => 'Vilnius'],
['vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 24, 'miestas' => 'Vilnius'],
];
var_dump($people2);

foreach ($names2 as $key => $value) {
	print $key . ' ' . $value;
}


// "6. uzduotis "


$cars = 
[
	[
		'brand' => 'audi',
		'model' => 'a4',
		'year' => 2002,
		'cost' => 22000,
		'country' => 
		[
			'Lithuania' => 
			[
				2011,
				2013,
				2015,
			],
			'Belgium',
			'Germany',
		],
	],
	[
		'brand' => 'bmw',
		'model' => 'e35',
		'year' => 2005,
		'cost' => 27000,
		'country' => 
		[
			'Lithuania' => 
			[
				2011,
				2013,
				2015,
			],
			'Belgium',
			'Germany',
		],
	],
	[
		'brand' => 'mb',
		'model' => 's500',
		'year' => 2009,
		'cost' => 22000,
		'country' => 
		[
			'Lithuania' => 
			[
				2011,
				2013,
				2015,
			],
			'Belgium',
			'Germany',
		],
	],
];

foreach ($cars as $value) {
	var_dump($value['country']['Lithuania']);
}

print "<br><br>";


// "7. uzduotis"

$cards = 
[
	[
		'url' => "https://s3.ap-south-1.amazonaws.com/isupportcause/uploads/overlay/isupportimg_1505799722113.png",
		'alt' => 'forest',
		'text' => 'A forest is a large area dominated by trees. Hundreds of more precise definitions of forest are used throughout the world, incorporating factors such as tree density, tree height, land use, legal standing and ecological function.'
	],
	[
		'url' => "https://www.dendropark.lt/images/uploader/tu/400x400.g/tujenis-kapoklinis-variegata-p9-1.jpg?t=566045",
		'alt' => 'forest',
		'text' => 'A forest is a large area dominated by trees. Hundreds of more precise definitions of forest are used throughout the world, incorporating factors such as tree density, tree height, land use, legal standing and ecological function.'
	],
	[
		'url' => "https://www.lrt.lt/img/2019/07/23/477875-341526-393x221.jpg",
		'alt' => 'forest',
		'text' => 'A forest is a large area dominated by trees. Hundreds of more precise definitions of forest are used throughout the world, incorporating factors such as tree density, tree height, land use, legal standing and ecological function.'
	],
];



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.cards {
			width: 30px;
			display: flex;
			align-items: center;
		}
	</style>
</head>
<body>
	<section class="cards">
		<?php foreach ($cards as $value):?>
		<div class="card">
			<img src="<?php print $value['url']; ?>" alt="<?php print $value['alt']; ?>">
			<p><?php print $value['text']; ?></p>
		</div>
	<?php endforeach; ?>
		
	</section>
</body>
</html>