<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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



<?php

print "<br><br>";
 

// 2. uzduotis

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table, th, tr,td{
			border-collapse: collapse;
			border: solid 1px black;
		}
	</style>
</head>
<body>
	<?php form(); ?>
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=testine", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$sql = "SELECT `id`, `email`, `date` FROM `users` WHERE 1";

function get($conn, $sql){
	$stmt = $conn->query($sql);
	return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$sql = "SELECT * FROM `users`";
// var_dump(get($conn, $sql));


//lenteles funkcija

function table($data)
{
	print '<table>';
	foreach (array_keys($data[0]) as $value){
		print '<th>' . $value . '</th>';
	}
	foreach ($data as $users){
		print '<tr>';
		foreach ($users as $user) {
			print '<td>' . $user . '</td>';
		}
		print '</tr>';
	}
	print '</table';
}


//atvaizduojama lentele
table(get($conn, $sql));

//gyvuneliu lentele

$user_pet = "SELECT `name`, `email`, `pet_name` FROM `users`, `pets` WHERE `id` = `user_id`";
table(get($conn, $user_pet));

//gyvuneliu laimejimu lentele

$pets_awards = "SELECT `name`, `pet_name`, `awards_name`, `win_place` FROM `pets_awards`, `pets`, `users` WHERE `id` = `user_id` AND `pets_id` = `pet_id`";
table(get($conn, $pets_awards));




//Funkcija tavaizduoja forma ir perteikia POST duomenis..
function form(){
	print "<form method='post'><input type=email name=email placeholder=Email></input><input type=password name=password placeholder=Password></input><button type=submit name=button>Send</button>";
	if (isset($_POST['button'])){
		if (!empty($_POST['email']) && !empty($_POST['password'])) {
			print "<br> Tavo el.pastas yra:" . $_POST['email'] . "<br> Tavo slaptazodis yra:" . $_POST['password'];
		}else{
			print "<br>Kazkas negerai";
		}
	}
}

?>






