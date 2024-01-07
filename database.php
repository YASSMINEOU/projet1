<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//// Create database
//$sql = "CREATE DATABASE testDb";
//if (mysqli_query($conn, $sql)) {
//echo "Database created successfully";
//} else {
//echo "Error creating database: " . mysqli_error($conn);
//}

mysqli_select_db($conn, 'signup1');
//$query = "
//CREATE TABLE testDb.Clients (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50) UNIQUE,
//password VARCHAR(80),
//reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//)
//";
//if (mysqli_query($conn, $query)) {
//echo "Table Clients created successfully";
//} else {
//echo "Error creating table: " . mysqli_error($conn);
//}

// hachage du mot de passe
//$password = password_hash("amine123456", PASSWORD_DEFAULT);
//$sql = "INSERT INTO Clients (firstname, lastname, email,password)
//VALUES ('Amine', 'Ze', 'Amineze@gmail.com','$password')";
//if (mysqli_query($conn, $sql)) {
// echo "New record created successfully";
//} else {
 //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}





?>
