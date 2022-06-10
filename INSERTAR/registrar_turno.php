<head>
  <meta charset="UTF-8">
    <title>Ingresar - Libro</title>
  <link rel="icon" type="image/png" href="pss_icon.png" >
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
<html>
<head>
    		<link rel="stylesheet" href="dis.css">
    	<link rel="stylesheet" type="text/css" href="jamon.css"></head>

    	<body>
    		<header>
		<h1 id="titulo">  INSERTAR</h1> </header><br><br><br><br><center><h1>

	<?php
		$server = "localhost";
		$usuario = "root";
		$contraseña = "sasasasa";
		$bd = "libreria";

		$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
			or die ("ERROR EN LA CONEXION");

			$isbn = $_POST['txtIsbn'];
			$titulo = $_POST['txtTitulo'];
			$autor = $_POST['txtAutor'];
			$editorial = $_POST['txtEditorial'];
			$temas = $_POST['txtTemas'];
			$anio = $_POST['txtAnioEdi'];
			$numEdi = $_POST['txtnumEdi'];
			$paginas = $_POST['txtPaginas'];
			$precio = $_POST['txtPrecio'];
			$cubierta = $_POST['txtCubierta'];
			$ejemplar = $_POST['txtEjemplar'];
			
			$insertar = "INSERT into libros values ('$isbn', '$titulo', '$autor', '$editorial', '$temas', '$anio', '$numEdi', '$paginas', '$precio', '$cubierta', '$ejemplar')";

			$resultado = mysqli_query($conexion, $insertar)
				or die ("ERROR AL INSERTAR DATOS");

			mysqli_close($conexion);
			echo "Datos insertados correctamente";
	?></h1></center>
</body>
</html> 