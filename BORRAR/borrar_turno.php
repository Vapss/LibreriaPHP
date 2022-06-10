
<head>
  <meta charset="UTF-8">
  <title>Eliminar - Libros</title>
  <link rel="icon" type="image/png" href="pss_icon.png" />
  <link rel="stylesheet" href="ostras.css">
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

<?
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="sasasasa"; // password de acceso para el usuario de la
                      // linea anterior
$db="libreria";        // Seleccionamos la base con la cual trabajar
$tabla="libros";

$conexion = @mysql_connect($dbhost, $dbusuario, $dbpassword);
if (!$conexion){
	exit('<p>No pudo realizarce la conexi�n a la base de datos.</p>');
}
if (!@mysql_select_db($db, $conexion)){
	exit ('<p>Problema al seleccionar la base de datos $db.</p>');
}

if (!$_GET /*($accion)*/){
	?>
    <html>
    <head> <meta charset="UTF-8">
    	<title>Libros</title> <link rel="stylesheet" href="dis.css">
    	<link rel="stylesheet" type="text/css" href="jamon.css">
    	</head>
    <body>
    	<header>
		<h1 id="titulo">  ELIMINAR LIBROS </h1> </header>
 		<div align="center">

	<?
	$sql = "SELECT * FROM ".$tabla;

	$resultado = @mysql_query($sql);
	if(!$resultado){
		exit('<p>Error en el Query.'.$resultado.'</p>');
	}
?>

<table align="center" cellpadding="1"><thead>
<td>ISBN</td>
    <td>NOMBRE DEL LIBRO</td>
    <td>AUTOR</td>
    <td>EDITORIAL</td>
    <td>TEMAS</td>
    <td>AÑO DE EDICION</td>
    <td>NUMERO DE EDICION</td>
    <td>NUMERO DE PAGINAS</td>
    <td>PRECIO</td>
    <td>CUBIERTA</td>
    <td>NUMERO DE EJEMPLARES</td>
 <td>ELIMINAR</td></thead>
</tr>

<?
while ($row=mysql_fetch_array($resultado)){
	echo "<tr><td>". $row["isbn"]. "</td>";
	echo "<td>". $row["titulo"]. "</td>";
	echo "<td>". $row["autor"]. "</td>";
	echo "<td>". $row["editorial"]. "</td>";
	echo "<td>". $row["temas"]. "</td>";
	echo "<td>". $row["anioEdi"]. "</td>";
	echo "<td>". $row["numEdi"]. "</td>";
	echo "<td>". $row["paginas"]. "</td>";
	echo "<td>". $row["precio"]. "</td>";
	echo "<td>". $row["cubierta"]. "</td>";
	echo "<td>". $row["numEjem"]. "</td>";
	
echo "<td><a href=".$_SERVER['PHP_SELF']."?borrar=".$row['isbn'].">Borrar</a></td></tr>";
}
?>
	</form>
	</body>
	</html>
<?
}
else {
	
if (empty($_GET['borrar'])==false)
{
$id=$_GET['borrar'];

		?>
    	<html>
    <head>
    		<link rel="stylesheet" href="dis.css">
    	<link rel="stylesheet" type="text/css" href="jamon.css"></head>

    	<body>
    		<header>
		<h1 id="titulo">  ELIMINACION</h1> </header><br><br><br><br><center>

		<?
		
		$sql="DELETE FROM ".$tabla." WHERE isbn=".$id;
		//$sql="delete from amigo where Clave_A=". $id;

		
		if(@mysql_query($sql)){

			echo "<h1>REGISTRO ELIMINADO</h1>";
		}
		else{
		 	echo mysql_errno();
			echo "<h1>ERROR</h1>";
		}
	}
}
 mysql_close($conexion); ?></center>

	</table>
	
	</body>
	</html>