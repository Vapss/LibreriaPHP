

<head>
  <meta charset="UTF-8">
  
   <title>Buscar - LIBROS</title>
  <link rel="icon" type="image/png" href="pss_icon.png" >
  
  <link rel="stylesheet" href="ostras.css">
  <link rel="stylesheet" href="butt.css">
</head>
<body>
  <header>
    <nav class="navegacion">
      <ul class="menu">
        <li><a href="../menuostia.php">Inicio</a></li>
        <li><a href="../CONSULTAS/consulta_turno.php">Consultar</a></li>
        <li><a href="../BORRAR/borrar_turno.php">Eliminar</a>
          <li><a href="../BUSCAR/buscar_turno.php">Buscar</a>
      <li><a href="../INSERTAR/insertar_turno.php">Insertar</a></li>
	  <li><a href="../MODIFICAR/modificar_turno.php">Modificar</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
</body>
</html>
 <html>

    	<head> <meta charset="UTF-8">
    	<title>LIBRERIA</title> <link rel="stylesheet" href="dis.css">
    	<link rel="stylesheet" type="text/css" href="jamon.css">
    	
    	
    	
    	
    	</head>
    	<body>

    	<header>
		<h1 id="titulo">  BUSCAR LIBROS </h1> </header>
 		<div align="center">

 			
		</body>

	</html>

<?
$bd_servidor = "localhost";
$bd_usuario = "root";
$bd_contrasenya = "sasasasa";
$bd_bdname = "libreria";
$bd_tabla = "libros"; // Tabla donde se har�n las b�squedas


// Conexi�n y selecci�n de la base de datos
$link = mysql_connect($bd_servidor,$bd_usuario,$bd_contrasenya);

mysql_select_db($bd_bdname,$link);

?>

<center>

<p><form name="buscar" method="post" action="../BUSCAR/buscar_turno.php"><br>
Buscar en:
<select name="campo">

<?php

//Con este query obtendremos los campos por los cuales el usuario puede buscar

$result = mysql_query("SHOW FIELDS FROM `$bd_tabla`",$link);

while($row = mysql_fetch_row($result)) {

// en $row[0] tenemos el nombre del campo
// de esta manera no necesitamos conocer el nombre de los campos
// por lo que cualquier tabla sera reconocida

?>
<option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
<?php

}

?>
</select>
<br><br><br>
Dato a buscar: <input type="text" name="palabra"><br>
<br><button class="btn btn2" type="submit" value="Enviar" name="enviar">BUSCAR</button><br><br><br>
</form></p>
</center>


<html>
<body>
	<center>
<?

////////////////////////////
// Proceso del Formulario
///////////////////////////

if(isset($_POST['enviar'])) {

// Solo se ejecuta si se ha enviado el formulario

$query = "SELECT * from $bd_tabla WHERE `{$_POST['campo']}` LIKE '%{$_POST['palabra']}%'";

$result = mysql_query($query,$link);



$found = false; // Si el query ha devuelto algo pondr� a true esta variable

while ($row = mysql_fetch_array($result)) {

$found = true;

echo "<p>";

foreach($row as $nombre_campo => $valor_campo) {

// Tenemos que mostrar todos los campos de las filas donde se haya
// encontrado la b�squeda.


if(is_int($nombre_campo)) {

continue; //Cuando hacemos mysql_fetch_array, php genera un array
// con todos los valores guardados dos veces, uno con
// �ndice num�rico y otro con �ndice el nombre del campo.
// Solo nos interesa el del nombre del campo.

}
if($nombre_campo=='FOTO'){
    echo "<b>".$nombre_campo."</b> : <img src=".$valor_campo." width=100 height=100>"."<br>";   
}else
echo "<b>".$nombre_campo."</b> : ".$valor_campo."<br>";

}

echo "</p><br><br>";

}

if(!$found) {

echo "No se encontr� la palabra introducida";

}

}
?>

</center>
</body>
</html>
	



