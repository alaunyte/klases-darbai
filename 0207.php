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