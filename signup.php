<?php
echo "test";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "bazadedate";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Conectarea la baza de date a eșuat: " . $conn->connect_error);
	}
	$email = $_POST["Email"];
	$password = $_POST["password"];
	
		$data = "$email,$password\n";
		fwrite($file, $data); 
		fclose($file);
	}
	$sql1 = "SELECT * FROM signin WHERE email = '$email' ";
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
		echo "Nume de utilizator sau email deja existente.";
		exit();
	} else {
		$sql2 = "INSERT INTO signin (email, password) VALUES ('$email', '$password')";
		if ($conn->query($sql2) === true) {
			mysqli_close($conn);
			header("Location: main.html");
			exit();
		} else {
			echo "Eroare la inserarea datelor în baza de date: " . $conn->error;
		}
	}


?>