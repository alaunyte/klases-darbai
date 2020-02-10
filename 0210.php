<?php

$skaicius1 = "As ir ";
$skaicius2 = "tu";

function plus($skaicius1, $skaicius2) {
	print $skaicius1 . $skaicius2;
}

plus($skaicius1, $skaicius2);

print "<br><br>";



// 1.uzduotis 



function input($from, $to){
	print '<select>';
	for ($x=$from; $x<=$to; $x++){
		print "<option value='$x'>" . $x . '</option>';
	}
	print '</select>';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.option-width{
			width: 100px;
			outline: none;
		}
	</style>
</head>
<body>
	<label for="cars">Choose a year:</label>
	<?php input(1990, 2020); ?>
</body>
</html>




