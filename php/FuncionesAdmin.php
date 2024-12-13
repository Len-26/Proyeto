<!-- CONEXION -->
<?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $database = "coaching";
        $password = "";
        
        /*
        $servername = "localhost";
        $username = "sea";
        $database = "coaching";
        $password = "Pr0j3cts3@";
        */
        
        // Creamos la conexion y seleccionamos la base de datos
        $conn = mysqli_connect($servername, $username, $password,$database);
        // Check connection
        if (!$conn) {
            die("Conexion fallida: " . mysqli_connect_error());
        }      
    ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opciones de Gestión</title>
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="../css/FuncionesAdmin.css">

        <!-- Link favicon -->
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
        
        <!-- Fuentes y estilos -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

<!-- Header -->
<div id="header">
    <div class="logo">
        <img src="img/logo.png" alt="COACHING SL">
    </div>
    <nav>
        <ul>
            <li><a href="Inicio.php"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="ComoTrabajamos.php"><i class="fa fa-briefcase"></i> ¿Quiénes somos?</a></li>
            <li><a href="Contacto.php"><i class="fa fa-phone-square"></i> Puesta en contacto</a></li>
            <li><a href="ListadoEspecialistas.php"><i class="fa fa-address-book"></i> Especialistas</a></li>
            <li><a href="Calendario.html"><i class="fa fa-calendar"></i> Calendario</a></li>
        </ul>
    </nav>
</div>

<!--Cajas de opciones -->
<div id="management-section">
    <h2>Opciones de Gestión</h2>
    <div class="options">

        <!-- Card 1 -->
        <div class="card">
            <i class="fas fa-user-plus"></i>
            <h3>Alta de Especialistas</h3>
            <p>Registra y habilita especialistas para que puedan formar parte del sistema.</p>
            <a href="Registro_Espe.php" class="btn">Nuevo Registro</a>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <i class="fas fa-user-tie"></i>
            <h3>Gestionar Especialistas</h3>
            <p>Administra y revisa los especialistas registrados en el sistema.</p>
            <a href="GestionEspe.php" class="btn">Ir a Especialistas</a>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <i class="fas fa-address-book"></i>
            <h3>Gestionar Clientes</h3>
            <p>Administra y gestiona los datos de los clientes de manera efectiva.</p>
            <a href="GestionCli.php" class="btn">Ir a Clientes</a>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    Todos los derechos reservados | Coaching SL Copyright © 2024
</footer>

<!-- Link a JavaScript -->
<script src="../JS/traducciones.js"></script>

</body>
</html>
