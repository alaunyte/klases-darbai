<?php

// failo prijungimas

$file = 'text2.txt';
$fo = fopen($file, 'a') or die("can't open file");
fwrite($fo, implode(", ", $_POST) . "\n");
fclose($fo);


$file1 = file($file);

$array = [];
foreach ($file1 as $user) {
	$naujas = explode(", ", $user);
	array_pop($naujas);
	array_push($array, $naujas);
}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.form{
			display: flex;
			flex-direction: column;
			width: 300px;
		}
		.input{
			margin: 10px;
			padding: 10px;
			outline: none;
		}
		.table, td{
			border: solid 1px black;
			border-collapse: collapse;
			width: 300px;
			padding: 5px;
		}
	</style>
</head>
<body>
	<section>
		<form class="form" method="POST">
			<input class="input" type="text" name="name" placeholder="Name">
			<input class="input" type="text" name="lastname" placeholder="Last name">
			<button class="input" type="submit" name="send">Send</button>
		</form>
	</section>
	<section>
		<table class="table">
			<?php foreach ($array as $user): ?>
				<tr>
					<?php foreach ($user as $info): ?>
						<td><?php print $info ?></td>
					<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
		</table>
	</section>
</body>
</html>



<?php 

// 2.uzduotis

print "<br><br>";


$dezesDydis = 24;

$kiekIsgeriauPerMenesi = 0;

$penktadienis = rand(4,6);
$sestadienis = rand(1,2);
$sekmadienis = 0;



for ($savaitesNr = 1; $savaitesNr <= 4; $savaitesNr++) {
    $kiekIsgeriau = 0;
    for ($x = 1; $x <= 4; $x++) {
        $pirmadienisKetvirtadienis = rand(1, 3);
        $kiekIsgeriau += $pirmadienisKetvirtadienis;
    }
    $kiekIsgeriauPerPirmaSavaite = $kiekIsgeriau + $penktadienis + $sestadienis + $sekmadienis;
    $kiekIsgeriauPerMenesi += $kiekIsgeriauPerPirmaSavaite;
}
print $kiekIsgeriauPerMenesi;
print "<br><br>";

$fullBox = floor($kiekIsgeriauPerMenesi / 24);
print $fullBox . "<br>";

$balance = ($kiekIsgeriauPerMenesi / 24 - $fullBox)*24;
print $balance;

print "<br><br>";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.align{
			display: flex;
			flex-wrap: wrap;
		}
		.bottleBox{
			background-image: url("https://lh3.googleusercontent.com/proxy/I8gewkoQeQZ3QDvYx02sbTjvIeq-uMD4kB3P8fdk5iXp-OBPtD0-t-Ajx4PgZAGOxHjdYIeh8pqBf0413symp5gSC4HNmljELiWBdXY4AP5nziTdviExBgh7HXKNSvM");
			background-size: cover;
			width: 150px;
			height: 100px;
			margin: 5px;
		}
		.bottle{
			background-image: url("https://thebrewhut.com/wp-content/uploads/2019/02/12-oz-Bottles.jpg");
			background-size: cover;
			width: 100px;
			height: 100px;


		}
	</style>
</head>
<body>
	<section class="align">
		<?php for ($x=1; $x <= $fullBox; $x++): ?>
			 <div class="bottleBox"></div>
		<?php endfor; ?>
		<?php for ($x=1; $x <= $balance; $x++): ?>
			<div class="bottle"></div>
		<?php endfor; ?>
	</section>
</body>
</html>