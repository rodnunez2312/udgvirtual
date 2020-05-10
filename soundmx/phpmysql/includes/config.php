<?php
//Example (MySQLi Object-oriented)    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "soundmx";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nombre = $mysqli->real_escape_string($_REQUEST['nombre']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$cel = $mysqli->real_escape_string($_REQUEST['cel']);
$texto = $mysqli->real_escape_string($_REQUEST['texto']);
 
// Attempt insert query execution
$sql = "INSERT INTO persons (nombre, email, cel, texto) VALUES ('$nombre', '$email', '$cel','$texto')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
    
    
$conn->close();
?>