<!DOCTYPE html>
<html>
<head>
    <title>Poli Search System</title>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="jamon.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    
    <link rel="stylesheet"  href="normalize.css">
    
    <link rel="icon" type="image/png" href="pss_icon.png" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }
        .main {
            background-image: url(sal.png);
            background-position: bottom;
            overflow: hidden;
            height: 100vh; /*PORCENTAJE DE LA PARTE DE ABAJO*/

        }

        .footer {
            height: 30vh;
            background-color: #ccc;
        }
        
        .main .title {
            
            width: 300px;
            height: 50px;
            text-align: center;
            color: #fff;
            top: calc(80vh - 45%);
            left: 50%;
            position: absolute;
            margin-left: -150px;
        }
    </style>
</head>

<body>

    <header>
        <header class="page-top">
    <div class="page-center">
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
            
            <li class="left big-nav"><a href="../LIBRERIAPHP /index1.php">Home</a></li>
            <!-- <li class="left big-nav">Bienvenido <?php echo $user->getNombre(); ?>  </li> -->
           

      
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
        

<div class="main">
    <h1 class="title">
        <!--<button class="btn btn2" type="submit" onclick="location.href='menuostia.php'">INGRESAR</button> -->

    </h1>
</div>
<h1 id="titulo">  SISTEMA DE LIBRERIA </h1> </header>
<footer class="page-footer">

    <!-- Copyright etc -->
    <div class="small-print">
        <div class="container">
            <span> | </span>
            <a href="https://es.wikipedia.org/wiki/HTML" style="text-decoration: none">HTML</a>
            <span> | </span>
            <a href="https://www.php.net/" style="text-decoration: none">PHP</a>
            <span> | </span>
            <p>Copyright © LIBRERIA 2022
            
            </p>
        </div>
    </div>   
    
</footer>
</body>
</html>
