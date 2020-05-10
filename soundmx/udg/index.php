<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    
<head>
    <link href="/udg/style.css"  rel="stylesheet" type="text/css"/>
    </head>

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Archivos con PHP</title>
</head>

<body>
<contenedor>
  <cabecera>
    <center>
      <T2>MANEJO DE ARCHIVOS CON PHP</T2>
    </center>
  </cabecera>
  <data>
    <?php
$nombre_fichero = "archivo.txt";

if (file_exists($nombre_fichero)) {
    
} else {
    echo "Creando archivo";
	$file = fopen("archivo.txt", "w");
	fclose($file);
}
if(!empty($_GET["delete"]))
{		
// Inicializamos nuestras variables
$i=1; //contador de línea que se está leyendo
$numlinea = $_GET["delete"]; //línea que se desea borrar
$aux = array();
 
// Abrimos el archivo
$archivo = fopen('archivo.txt','r');
 
// Hacemos un ciclo y vamos recogiendo linea por linea del archivo.
while ($linea = fgets($archivo))
{
 
  if ($i != $numlinea)  // Si la linea que deseamos eliminar no es esta 
  {
    $aux[] = $linea; // La agregamos a nuestra variable auxiliar
  }
 
  // Incrementamos nuestro contador de lineas
  $i++;
}
 
// Cerramos el archivo.
fclose($archivo);
 
// Convertimos el arreglo(array) en una cadena de texto (string) para guardarlo.
$aux = implode($aux, '');
 
// Reemplazamos el contenido del archivo con la cadena de texto (sin la linea eliminada)
file_put_contents('archivo.txt', $aux);
	
	
}
else
if(!empty($_POST["nombre"]))
{
	echo "mandaste algo";
	$file = fopen("archivo.txt", "a");
	$cadena=$_POST["nombre"]."-".$_POST["registro"];
	echo $cadena;
	fwrite($file, ($cadena) . PHP_EOL);
	fclose($file);
}
?>
    <T3>
      <center>
        <p>Ingresar un dato al archivo</p>
      </center>
    </T3>
    <ADD>
      <form action="index.php" method="post" id="datos">
        <table align="center">
          <tr>
            <td><label for="nombre">Nombre :</label></td>
            <td><input type="text" name="nombre" id="nombre" required="required"/></td>
          </tr>
          <tr>
            <td><label for="registro">Registro :</label></td>
            <td><input type="text" name="registro" id="registro" required="required"/></td>
          </tr>
          <tr>
            <td></td>
            <td><input name="enviar" type="submit" value="Enviar" /></td>
          </tr>
        </table>
      </form>
    </ADD>
    <s-table>
      <table>
        <tr>
          <td><t4>Nombre</t4></td>
          <td><t4>Registro</t4></td>
          <td><t4>Eliminar</t4></td>
        </tr>
        <?php
        $file = fopen("archivo.txt", "r");
		$CONT=0;
	while(!feof($file)) {
	$leer = explode("-",fgets($file));
	if(!empty($leer[1]))
	{
		$CONT=$CONT+1;
	echo "<tr><td>".$leer[0]."</td><td>";
	echo $leer[1]."</td>";
	echo "<td><form action='index.php' method='get'><input type='hidden' name='delete' id='delete' value=".$CONT.">
	<input type='submit' value='Eliminar' />
	 </form></td>";
	echo "</tr>";
	
	}
}
fclose($file);
?>
      </table>
    </s-table>
  </data>
</contenedor>
</body>
</html>