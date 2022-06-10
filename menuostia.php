<?
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="sasasasa"; // password de acceso para el usuario de la
                      // linea anterior
$db="pss";        // Seleccionamos la base con la cual trabajar
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

    	<head> <title>LIBRERIA</title><meta charset="UTF-8">
    	
    	<link rel="stylesheet" type="text/css" href="CSS/jamon.css">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    	<link rel="stylesheet" type="text/css" href="CSS/app.6d9c0a58.css">
    	<link rel="stylesheet" type="text/css" href="CSS/chunk-63b4102c.f0b10177.css">
    	<link rel="stylesheet" type="text/css" href="CSS/chunk-vendors.eeec13c0.css">
 <link rel="stylesheet" type="text/css" href="custom.css">
    
    <link rel="stylesheet"  href="normalize.css">
      

    	<link rel="icon" type="image/png" href="pss_icon.png" />


    	
    	
    	</head>
    	<body>

    <header>
        <header class="page-top">
    <div class="page-center"><br>
        <!-- Page logo -->
        <div class="page-logo">
            <a href="../LIBRERIAPHP/index1.php">
                <img src="/LIBRERIAPHP/images/libro-abierto.png">
            </a>
        </div>

        <!-- For future top links -->
        <div class="page-top-links">
        </div>
    </div>
</header>
<nav id="navbar" role="navigation">
    <div class="navlinks">
        <ul>
            <!-- Pages -->
            <li class="left big-nav"><a href="../LIBRERIAPHP/index1.php">Home</a></li>
      <!--       <li class="left big-nav"><a href="menuostia.php">Menu</a></li>
           
            <li class="left big-nav"><a href="https://r3dcraft.net/download.php">Download</a></li>
            <li class="left big-nav"><a href="https://r3dcraft.net/forum.php">Forum</a></li>
            <li class="left big-nav"><a href="https://r3dcraft.net/faq.php">FAQ</a></li>
            <li class="left big-nav"><a href="about.php">Acerca de</a></li>  -->
            
            <!-- Use any element to open the sidenav -->
            <li class="right dropdown" onclick="openNav()">
                <a href="javascript:void(0)" class="dropbtn ">
                    <span>☰</span>
                </a>
            </li>

               <!--         <li class="right">
                <a href="menuostia.php">Menu</a>
            </li>  -->
            
</ul>
    </div>

    <div id="mySidenav" class="sidenav" style="width: 0px;">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                
        <!-- Small view menu pages -->
        <a class="small-nav" href="../LIBRERIAPHP/index1.php">Home</a>
        <a class="small-nav" href="menuostia.php">Menu</a> 
        
        <!--  <a class="small-nav" href="faq.php">FAQ</a> -->

    </div>

    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <div class="bottom-line"></div>
</nav>


 		<div align="center"><br><br>

 			<div data-v-24e2eec2="" class="row categorias" center="center"><div data-v-24e2eec2="" class="col-sm-12 col-md-6 col-lg-3"><div data-v-24e2eec2="" class="card text-center card-gob"><div data-v-24e2eec2="" class="titulocategoria"><a data-v-24e2eec2=""  class=""><img data-v-24e2eec2="" src="IMG/MENU/01.png" alt="" class="card-img-top card-img-gob"><h4 data-v-24e2eec2="" class="card-title"> 
                        Libreria 
                                    </h4></a></div><div data-v-24e2eec2="" class="card-body"><ul data-v-24e2eec2="" class="list-unstyled"><li data-v-24e2eec2="">

                                  <a data-v-24e2eec2="" href="../LIBRERIAPHP/CONSULTAS/consulta_turno.php"  class="btn btn-categorias">Show &gt;</a></a></div></div></div>




   

    </body>

	</html>

	