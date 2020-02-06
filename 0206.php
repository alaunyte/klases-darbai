<?php

// 1.Uzduotis. Formos pagalba $_GET metodu puslapiui perduodami 4 kintamieji: a, b, c, d. Atspausdinkite juos lenteleje ciklo pagalba. Lenteles eilutes generuojamos dinamiskai, t.y butinai ciklu. Jeigu kintamieji neivedami formoje, jie lenteleje nerodomi, t.y eilute su kintamojo reiksme nerodoma. Forma generuojama taip pat dinamiskai, t.y. ciklo pagalba. Kintamuju sarasas nurodomas masyve, t.y. gaunama galimybe lengvai papildyti nauju kintamuoju forma, aprasant ji tik masyve.




?>

<!DOCTYPE html>
<html>
<head>
	<title>Title page</title>
	<style type="text/css">
		table, th, td{
			border: solid 1px black;
			width: 400px;

		}
	</style>
</head>
<body>
	<form method="_GET">
		<input type="text" name="name" placeholder="Name">
		<input type="text" name="lastname" placeholder="Last name">
		<input type="text" name="address" placeholder="Address">
		<input type="text" name="city" placeholder="City">
		<button type="submit">Submit</button>
	</form>
	<?php
	var_dump($_GET);
	?>
	<table>
		<thead>
			<?php 
				foreach ($_GET as $key => $value) {
					if(empty($value)){
						unset($_GET[$key]);
					}else{
						print '<th>' . $key . '</th>';
					}
				}
			 ?>

		</thead>
		<tr>
			<?php 
				foreach (array_values($_GET) as $value) {
					if($value == NULL){
					unset($value);
				}else{
					print '<td>' . $value . '</td>';
				}
			}

			?>
			
		</tr>
	</table>
</body>
</html>



<?php




// 2. Is masyvo sugeneruokite lentele, lenteles eilutes turi buti spalvinamos, priklausomai nuo elemento reiksmes trijomis spalvomis : =10, <10 ir >10 variantams


$name = 
[
	'jonas' => 0,
	'petras' => 20,
	'simas' => 10,
];
 var_dump($name);

?>

<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
	<table>
		<tr>
			<?php 
				foreach ($name as $key => $value) {
					print '<th>' . $key . '</th>';
				}
					print '<tr>';

				foreach ($name as $value) {
					if ($value < 10) {
						print '<td style="background-color:linen;">' . $value . '</td>';
					} elseif ($value == 10) {
						print '<td style="background-color:purple;">' . $value . '</td>';
					} elseif ($value > 10) {
						print '<td style="background-color:powderblue;">' . $value . '</td>';
					}
				}

				print '</tr>';

			?>
		</tr>
	</table>
</body>
</html>


<?php

// 3.Masyvas sudarytas is elementu, kurie eiles  numeri arba identifikatoriu (rakta) ir reiksme.
//   $array = ['siandiena', 'rasiu', 'tave', 'batai', 'mano', 'busi',];
//   Atvaizduokite ekrane: siandiena busi.


$array = ['siandiena', 'rasiu', 'tave', 'batai', 'mano', 'busi',];


print $array[0] . " " . $array[5];


print "<br><br>";

// 4. $array1 = ['Man atrodo tu esi geras zmogus', 'Ir mielas.',];
//    $array2 = ['Tomai', 'Giedriau',];
//    atvaizduokite ekrane nenaudojant ciklo, pazymint tiesiogiai, "Giedriau. Man atrodo tu esi geras zmogus."


$array1 = ['Man atrodo tu esi geras zmogus', 'Ir mielas.',];
$array2 = ['Tomai', 'Giedriau',];

print $array2[1] . " " . $array1[0];


print "<br><br>";



// 5. Turime masyva $numbers = [0.5, 3, 7.3, 2, 7, 7.1, 9, 5.4]; Naujame masyve atrinkite naudodami atitinkamas funkcijas tik skaicius kurie turi reiksme po kablelio ne 0. Juos visus sudekite ir rezultata atvaizduokite ekrane.


$numbers = [0.5, 3, 7.3, 2, 7, 7.1, 9, 5.4];
$newNumbers = [];
$result = 0;

foreach ($numbers as $value) {
	if (is_float($value) && $value != round($value)){
		array_push($newNumbers, $value);
	}
}

foreach ($newNumbers as $value) {
	$result = $result + $value;
}

print $result;

print "<br><br>";



// 6.Sukurkite registracijos forma. Metodas POST . input laukeliai: Vardas, Hobis, Augintinis, paspaudus mygtuka 'siusti' atvaizduokite juos ekrane, zemiau formos.

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="vardas" placeholder="Vardas">
		<input type="text" name="hobis" placeholder="Hobis">
		<input type="text" name="augintinis" placeholder="Augintinis">
		<button type="submit">Siusti</button>
	</form>
	<p><?php print $_POST['vardas']; ?></p>
	<p><?php print $_POST['hobis']; ?></p>
	<p><?php print $_POST['augintinis']; ?></p>
</body>
</html>