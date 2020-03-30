<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $skaicius1 = "As ir ";
// $skaicius2 = "tu";

// function plus($skaicius1, $skaicius2) {
// 	print $skaicius1 . $skaicius2;
// }

// plus($skaicius1, $skaicius2);

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


<?php

$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=testine", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
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

//Funkcija tavaizduoja forma ir perteikia POST duomenis..
function form(){
	print "<form method='post'><input type=email name=email placeholder=Email></input><input type=password name=password placeholder=Password></input><button type=submit name=button>Send</button>";
	if (isset($_POST['button'])){
		if (!empty($_POST['email']) && !empty($_POST['password'])) {
			print "<br> Tavo el.pastas yra:" . $_POST['email'] . "<br> Tavo slaptazodis yra:" . $_POST['password'];
		}else{
			print "Kazkas negerai";
		}
	}
}


// function delete_user()

function delete($conn, $id){
	$sql = "DELETE FROM `users` WHERE `id` = $id";
	return $conn->query($sql);
}

//funkcija delete id

function delete_user_form($conn){
	print "<form method='POST'><input type='text' name='id' placeholder='user-id'></input><button type='submit' name='delete'>Detele</button></form>";
	
	if (isset($_POST['delete'])){
		if (!empty($_POST['id'])) {
			$id = $_POST['id'];
			$sql = "DELETE FROM `users` WHERE `id` = $id";
			print "Useris istintas ($id)";
			return $conn->query($sql);
		}else{
			print "Kazkas negerai";
		}
	}
}

//insert form

function insert_user_form($conn){
	print "<form method='post'><input type='text' name='name' placeholder='Name'></input><input type='email' name='email' placeholder=Email></input><input type='password' name='password' placeholder='Password'></input><button type='submit' name='send'>Send</button>";
	
	if (isset($_POST['send'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (\"$name\", \"$email\", \"$password\")";
			return $conn->query($sql);

		}else{
			print "Kazkas negerai";
		}
	}
}

//edit funkcija

function edit_user_form($conn){
	
	$id = $_POST['id'];
	$userId = '';
	$userName = '';
	$userEmail = '';
	$userPassword = '';
	if (isset($_POST['getUserData'])) {
		if (!empty($_POST['id'])) {
			$sql = "SELECT `id`,  `email`, `password` FROM `users` WHERE `id` = \"$id\"";
			$userArray = get($conn, $sql);

			$userId = $userArray[0]['id'];

			$userName = $userArray[0]['name'];
			$usrEmail = $userArray[0]['email'];
			$userPassword = $userArray[0]['password'];
		}else{
			print "Klaidingai ivesti duomenys";
		}
	}

	print "<form method='post'><input type='text' name='id' placeholder='User-id'></input><input type='text' name='name' placeholder='Name'></input><input type='email' name='email' placeholder=Email></input><input type='password' name='password' placeholder='Password'></input><button type='submit' name='sendUserData'>Update User Data</button><button type='submit' name='getUserData'>Get User Data</button>";

	if (isset($_POST['sendUserData'])){
		$userId = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
			$userId = $_POST['id'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$sql = "UPDATE `users` SET `name` = \"$name\", `email` = \"$email\", `password`= \"$password\" WHERE `id` = \"$id\"";

			print "duomenys atnaujinti";
			return $conn->query($sql); 
		}else{
			print "kazkas negerai";
		}
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table, th, tr,td{
			border-collapse: collapse;
			border: solid 1px black;
			padding: 5px;
			margin: 20px 2px;
		}
		input{
			width: 200px;
			padding: 10px;
			margin: 0 1px;
			border-radius: 5px;
			outline: none;
			border: solid lightgray 1px;
		}
		button{
			padding: 10px;
			background-color: linen;
			transition: 1s;
			width: 150px;
			border-radius: 5px;
			margin: 0 5px;
		}
		button:hover{
			background-color: #E8BA8D;
			transition: 1s;
		}
		.p1{
			padding: 10px 0;
		}
	</style>
</head>
<body>
	<section>
		<?php form(); ?>
	</section>
	<section>
		<?php delete_user_form($conn); ?>
	</section>
	<section class="p1">
		<?php insert_user_form($conn); ?>
	</section>
	<section>
		<?php edit_user_form($conn); ?>
	</section>
</body>
</html>


<?php




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

// gyvuneliu lentele

// $user_pet = "SELECT `name`, `email`, `pet_name` FROM `users`, `pets` WHERE `id` = `user_id`";
// table(get($conn, $user_pet));

// //gyvuneliu laimejimu lentele

// $pets_awards = "SELECT `name`, `pet_name`, `awards_name`, `win_place` FROM `pets_awards`, `pets`, `users` WHERE `id` = `user_id` AND `pets_id` = `pet_id`";
// table(get($conn, $pets_awards));


?>





