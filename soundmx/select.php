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

$sql = "SELECT id, nombre, email, texto FROM contacto_soundmx";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. " - Email: " . $row["email"].  " - Texto: " . $row["texto"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>