<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    
<head>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
    
<head>
    <title>The Sound-MX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />   
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="noticias, tours, entrevistas, contacto, conciertos, eventos, boletos, DJs">
</head>

<body>
    
<contenedor>
    <cabecera>
        <center>
            <h1>The Sound-MX</h1>
            <h3>Marca promotora de musica Electronica</h3>
        </center>
    </cabecera>
    
    <div id="barra_principal">
    <barra_principal>
			<nav>
				<a href="index_soundmx.html">Home</a>
				<a href="Noticias_soundmx.html">Noticias_soundmx</a>
				<a href="Tours_soundmx.html">Tours_soundmx</a>
				<a href="Entrevistas_soundmx.html">Entrevistas_soundmx</a>
                <a href="form_soundmx.html">Contacto_soundmx</a>
			</nav>
    </barra_principal>
        
        <ADD>
<?php
      
$festival = $ubicacion = $fecha = "";
    
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $festival = val($_POST["festival"]);
    $ubicacion = val($_POST["ubicacion"]);
    $fecha = val($_POST["fecha"]);
}
    
function val($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
      
?>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" id="datos">
                <table align="center">
                    <tr>
                        <td>Festival :</td>
                        <td><input type="text" name="festival" id="festival" required="required" maxlength="30"/></td>
                    </tr>
                    <tr>
                        <td>Ubicacion :</td>
                        <td><input type="text" name="ubicacion" id="ubicacion" required="required" maxlength="50"/></td>
                    </tr>
                    <tr>
                        <td>Fecha :</td>
                        <td><input type="text" name="fecha" id="fecha" required="required" maxlength="20"/></td>
                    </tr>
                    <tr>
                        <td><input name="enviar" type="submit" value="Enviar" /></td>
                        <td><input name="resetear" type="reset" value="Resetear" /></td>
                    </tr>
                </table>
            </form>
            
<?php
echo "<h2>Festival ingresado :<br></h2>";
echo "Festival :" . $festival;
echo "<br>";
echo "Ubicacion :" . $ubicacion;
echo "<br>";
echo "Fecha :" . $fecha;
echo "<br>";
?>
            
        </ADD>
        
        <footer>
            <h4>Contacto</h4>
            <span>
                E-mail:
                <a href="mailto:prensa@thesoundmx.com"><strong>prensa@thesoundmx.com</strong></a>
            </span>
            <div>
                <a href="https://www.facebook.com/SoundMxEnt/" id="facebook">Facebook</a>
            </div>
        </footer>
        
	</div>
    
    
</contenedor>
</body>
</html>

 