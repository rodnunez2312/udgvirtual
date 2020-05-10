<?php
/* Attempt MySQL server connection */
$link = mysqli_connect("localhost", "root", "", "soundmx");
 
// Check connection
if($link === false){
    die("ERROR: No se puedo establecer la conexcion con la DB. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$nombre = mysqli_real_escape_string($link, $_REQUEST['nombre']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$cel = mysqli_real_escape_string($link, $_REQUEST['cel']);
$texto = mysqli_real_escape_string($link, $_REQUEST['texto']);
$timestamp = date("Y-m-d H:i:s");
 
// Attempt insert query execution
$sql = "INSERT INTO contacto_soundmx (nombre, email, cel, texto, date) VALUES ('$nombre', '$email', '$cel', '$texto', '$timestamp')";
if(mysqli_query($link, $sql)){
    echo "Forma enviada satisfactoriamente.";
} else{
    echo "ERROR: No se ejecuto el script $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>