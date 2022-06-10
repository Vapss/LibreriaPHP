<head>
  <meta charset="UTF-8">
  
   <title>Consultar Libros - LIBRERIA</title>
  <link rel="icon" type="image/png" href="/LIBRERIAPHP/images/libro-abierto.png" >

  <link rel="stylesheet" href="ostras.css">
</head>
<body>
  <header>
    <nav class="navegacion">
      <ul class="menu">
        <li><a href="../menuostia.php">Inicio</a></li>
        <li><a href="../CONSULTAS/consulta_turno.php">Consultar Libro</a></li>
        <li><a href="../BORRAR/borrar_turno.php">Eliminar Libro</a>
          <li><a href="../BUSCAR/buscar_turno.php">Buscar Libro</a>
		  <li><a href="../INSERTAR/insertar_turno.php">Insertar Libro</a></li>
		  <li><a href="../MODIFICAR/modificar_turno.php">Modificar Libro</a></li>
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
$conexion = @mysql_connect($dbhost, $dbusuario, $dbpassword);

if (!$conexion)
   {
	exit('<p>No pudo realizarce la conexi�n a la base de datos.</p>');
   }
if (!@mysql_select_db($db, $conexion))
   {
	echo mysql_errno();
	exit ('<p>Problema al seleccionar la base de datos $db.</p>');
   }

	?>
    <html>
  <head> <meta charset="UTF-8">
      <title>Libros - Search System</title> <link rel="stylesheet" href="dis.css">
      <link rel="stylesheet" type="text/css" href="jamon.css">
      </head>
      <body>

      <header>
    <h1 id="titulo">  CONSULTA LIBROS </h1> </header>
    <div align="center">
    </body>
	</html>

<?
 	echo "<br>";
 	$sql =  "Select * from libros";
	$resultado1= @ mysql_query ($sql);
	if (!$resultado1)
	{
	 exit ('error en la consulta');
    }
    ?>
    <HTML>
    <BODY>
    <div id="main-container">
        <table align="center"  > <thead>
    <tr>
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
    </tr></thead>


 <?
while ($row=mysql_fetch_array ($resultado1))
{
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
}
    echo '</table>';
    '</body>
     </html>';
 mysql_close($conexion); ?>