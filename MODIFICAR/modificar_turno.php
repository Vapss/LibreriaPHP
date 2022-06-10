
<head>
  <meta charset="UTF-8">
  <title>Modificar - Libros</title>
  <link rel="icon" type="image/png" href="pss_icon.png" >
  <link rel="stylesheet" href="ostras.css">
</head>
<body>
  <header>
    <nav class="navegacion">
      <ul class="menu">
        <li><a href="../menuostia.php">Inicio</a></li>
        <!-- CAMBIAR LAS DIRECCIONES-->
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

// CAMBIAR EL NOMBRE DE LA TABLA
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
      <title>PSS</title> <link rel="stylesheet" href="dis.css">
      <link rel="stylesheet" type="text/css" href="jamon.css">
      </head>
      <body>

      <header>
      	<!-- 1: CAMBIARLE NOMBRE A LA TABLA -->
    <h1 id="titulo">  MODIFICAR LIBROS </h1> </header>
    <div align="center">
    </body>
	</html>

	<?
	$sql = "SELECT * FROM ".$tabla;

	$resultado = @mysql_query($sql);
	if(!$resultado){
		exit('<p>Error en el Query.'.$resultado.'</p>');
	}
?>

<br><br>

<HTML>
    <BODY>
    <div id="main-container">
        <table align="center"  > <thead>
<!-- 2: MODIFICAR COLUMNAS DE LA TABLA -->
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
<th>EDITAR</th>

</tr> </thead>

<!-- 3: CAMBIAR LOS VALORES EXACTOS COMO SQL DE LA TABLA -->
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
									// 4. CAMBIAR LA CLAVE PRIMARIA
	echo "<td><a href=".$_SERVER['PHP_SELF']."?cambiar=".$row['isbn'].">Editar</a></td></tr>";
}
?>
	</table>
	</div>
	</body>
	</html>
<?
}
if (empty($_GET['cambiar'])==false)
{
$id=$_GET['cambiar'];
								// 5. CAMBIAR CLAVE PRIMARIA
		$sql = "SELECT * FROM ".$tabla." WHERE isbn=".$id;
		$registro = @mysql_query($sql);
	if(!$registro){
		echo "Error ".mysql_errno();
		exit('<p>No se pudo obtener los detalles del registro.</p>');
	}
	$registro = mysql_fetch_array($registro);
	
	?>

	<html>
    <head> <meta charset="UTF-8">
      <title>PSS</title> <link rel="stylesheet" href="dis.css">
      <link rel="stylesheet" type="text/css" href="jamon.css">
      </head>
      <body>

      <header>
      	<!-- 1: CAMBIARLE NOMBRE A LA TABLA -->
    <h1 id="titulo">  CAMBIO DE DATOS DEL LIBRO </h1> </header>
    <div align="center">
    </body>
	</html>

	<html>
    	

	<div align="center">					<!-- 6: CAMBIAR EL NOMBRE AL DEL PHP ACTUAL -->
	<form action="<?php echo $_SERVER['PHP_self'];?>" method="post" name="modificar_turno.php">
<!-- 7. CAMBIAR LOS NOMBRES Y LOS VALORES COMO EN SQL -->
	<p>			
	<input type="hidden" align="LEFT" name="isbn" value="<?php echo $registro['isbn'];?>" /><p>
		<br><h2>Modifique los datos con cuidado y al terminar presione GUARDAR<br> </h2>
<br><br>
	<p>NOMBRE:
	<input type="text" align="LEFT" name="titulo" value="<?php echo $registro['titulo'];?>"/><p><br><br>
	<p>AUTOR:
	<input type="text" align="LEFT" name="autor" value="<?php echo $registro['autor'];?>"/><p><br><br>
	<p>EDITORIAL:
	<input type="text" align="LEFT" name="editorial" value="<?php echo $registro['editorial'];?>"/><p><br><br>
	<p>TEMAS:
	<input type="text" align="LEFT" name="temas" value="<?php echo $registro['temas'];?>"/><p><br><br>
	<p>AÑO DE EDICION:
	<input type="text" align="LEFT" name="anioEdi" value="<?php echo $registro['anioEdi'];?>"/><p><br><br>
	<p>NUMERO DE EDICION:
	<input type="text" align="LEFT" name="numEdi" value="<?php echo $registro['numEdi'];?>"/><p><br><br>
	<p>NUMERO DE PAGINAS:
	<input type="text" align="LEFT" name="paginas" value="<?php echo $registro['paginas'];?>"/><p><br><br>
	<p>PRECIO:
	<input type="text" align="LEFT" name="precio" value="<?php echo $registro['precio'];?>"/><p><br><br>
	<p>CUBIERTA:
	<input type="text" align="LEFT" name="cubierta" value="<?php echo $registro['cubierta'];?>"/><p><br><br>
	<p>NUMERO DE EJEMPLARES:
	<input type="text" align="LEFT" name="numEjem" value="<?php echo $registro['numEjem'];?>"/><p><br><br>

	

	
	<input type="submit" align="center" value=" 	 	GUARDAR  	 	" name="actualizar">
	</form></div>
	<!-- 8: CAMBIAR AL NOMBRE DEL PHP ACUTAL--><br><br>
	<div align="center"><p><a href="modificar_turno.php">Volver</a></p></div>
	 

	</body>
	</html>
<?PHP
}

if($_POST){

	

 	//CAMBIAR LOS VALORES COMO EN SQL
 	// SI NECESITAS MAS VARIABLES SUBS, SOLO CONTINUA EL ABECEDARIO
$subs_A = utf8_decode($_POST['isbn']);
$subs_B = utf8_decode($_POST['titulo']);
$subs_C = utf8_decode($_POST['autor']);
$subs_D = utf8_decode($_POST['editorial']);
$subs_E = utf8_decode($_POST['temas']);
$subs_F = utf8_decode($_POST['anioEdi']);
$subs_G = utf8_decode($_POST['numEdi']);
$subs_H = utf8_decode($_POST['paginas']);
$subs_I = utf8_decode($_POST['precio']);
$subs_J = utf8_decode($_POST['cubierta']);
$subs_K = utf8_decode($_POST['numEjem']);



		$sql="UPDATE ".$tabla." SET
		titulo='$subs_B'
		,autor='$subs_C'
		,editorial='$subs_D'
		,temas='$subs_E'
		,anioEdi='$subs_F'
		,numEdi='$subs_G'
		,paginas='$subs_H'
		,precio='$subs_I'
		,cubierta='$subs_J'
		,numEjem='$subs_K'
		WHERE isbn=".$id;

		

		if(@mysql_query($sql)){
			echo '<script>alert("Registro Actualizado.");</script>';
		}
		else{
			echo "<p>Error al actualizar el registro.</p>";
			echo mysql_errno();
			if (mysql_errno()==1452){
				echo "existe una restricci�n";
			}
		}
	
	echo '</body></html>';

}
 mysql_close($conexion); ?>