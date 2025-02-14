<html lang="es">
    
    <head>
         
        <meta charset="utf-8">
        
        <title> Modificacion Cliente </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="css/estilo.css">
        <!-- Link hacia el archivo de estilos de bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <script src="script.js"></script>

    </head>
    
    <body class="fondo">
        <!-- Link hacia las librerias jsp de bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
           
        <div class="titulo_ME">Modificar Cliente</div>
        <!-- <div id="contenedor2"> -->

<!-- En este código queremos modificar la tabla de articulos, pero como verás no se muestra nada. -->

<?php
session_start();
include("./GestionBD/1-conexion.php");

if(isset($_REQUEST['Modificar'])){
        $DNI_Cliente=$_REQUEST['DNI_Cliente'];
        $Nombre_Cliente=$_REQUEST['Nombre_Cliente'];
        $Apellido_Cliente=$_REQUEST['Apellido_Cliente'];
        $FechaNacimiento_Cliente=$_REQUEST['FechaNacimiento_Cliente'];
        $NumTelefono_Cliente=$_REQUEST['NumTelefono_Cliente'];
        $Correo_Cliente=$_REQUEST['Correo_Cliente'];
        $TipoVia_Cliente=$_REQUEST['TipoVia_Cliente'];
        $NombreVia_Cliente=$_REQUEST['NombreVia_Cliente'];
        $NumeroVia_Cliente=$_REQUEST['NumeroVia_Cliente'];

        $Contrasena_Cliente=$_REQUEST['Contrasena_Cliente'];
    
        $sql="UPDATE Clientes SET DNI_Cliente=' ".$DNI_Cliente."', Nombre_Cliente=' ".$Nombre_Cliente." ', Apellido_Cliente='".$Apellido_Cliente."', FechaNacimiento_Cliente='".$FechaNacimiento_Cliente."', NumTelefono_Cliente='".$NumTelefono_Cliente."'Correo_Cliente=' ".$Correo_Cliente." ', TipoVia_Cliente='".$TipoVia_Cliente."', NombreVia_Cliente='".$NombreVia_Cliente."', NumeroVia_Cliente='".$NumeroVia_Cliente."',Contrasena_Cliente='".$Contrasena_Cliente."',  WHERE ID_Cliente ='".$ID_Cliente;
    }

if (isset($_REQUEST['DNI'])){ //que te envie aquí desde el boton de id, modificar 
    $DNI_Cliente=$_REQUEST['DNI'];

    $sql="SELECT * FROM Clientes WHERE DNI_Cliente= '$DNI_Cliente';";

    $resultado=mysqli_query($conn,$sql);

                //! Que estas 
                if(mysqli_num_rows($resultado)>0)
                {
                    $row = mysqli_fetch_assoc($resultado);            
                ?>

?>
<div id="contenedor_ME">
    <div id="central_ME">
        <div id="modiel">
            <div class="subtitulo_me">Modifica los datos del especialista</div>
            <form class="form_ME" action="" method="post">

            <label class="label_ME" for="ID_Cliente">ID:</label>
                <input type="text" id="ID_Cliente" readonly name="ID_Cliente" class="caja" value='<?php echo $row['ID_Cliente']?>'>

            <label class="label_ME" for="DNI_Cliente">DNI:</label>
                <input type="text" id="DNI_Cliente" name="DNI_Cliente" class="caja" required pattern="[0-9]{8}[A-Za-z]{1}" placeholder="DNI" value='<?php echo $row['DNI_Cliente']?>'>

            <label class="label_ME" for="Nombre_Cliente">Nombre:</label>
                <input type="text" id="Nombre_Cliente" name="Nombre_Cliente" class="caja" autofocus required pattern="[a-zA-Z\s]+" placeholder="Nombre" value='<?php echo $row['Nombre_Cliente']?>'>

            <label class="label_ME" for="Apellido_Cliente">Apellidos:</label>
                <input type="text" id="Apellido_Cliente" name="Apellido_Cliente" class="caja" required pattern="[a-zA-Z\s]+" placeholder="Apellidos" value='<?php echo $row['Apellido_Cliente']?>'>

            <label class="label_ME" for="FechaNacimiento_Cliente">Fecha de Nacimiento:</label>
                <input type="date" name="FechaNacimiento_Cliente" id="FechaNacimiento_Cliente" class="caja" placeholder="Fecha Nacimiento (Año - Mes - Dia)" title="Fecha Nacimiento" value='<?php echo $row['FechaNacimiento_Cliente']?>'>

            <label class="label_ME" for="NumTelefono_Cliente">Teléfono: </label>
                <input type="tel" name="NumTelefono_Cliente"  id="NumTelefono_Cliente" class="caja" required placeholder="Telefono" value='<?php echo $row['NumTelefono_Cliente']?>'>

            <label class="label_ME" for="Correo_Cliente">e-Mail:</label>
                <input type="email" name="Correo_Cliente" id="Correo_Cliente" class="caja" required placeholder="email" value='<?php echo $row['Correo_Cliente']?>'>

            <label class="label_ME" for="TipoVia_Cliente">Tipo de la via:</label>
                <input type="text" class="caja" name="TipoVia_Cliente" id="TipoVia_Cliente" placeholder="Escribe el nombre de la via" value='<?php echo $row['TipoVia_Cliente']?>'>
            
            <label class="label_ME" for="NombreVia_Cliente">Nombre de la via:</label>
                <input type="text" class="caja" name="NombreVia_Cliente" id="NombreVia_Cliente" placeholder="Escribe el nombre de la via" value='<?php echo $row['NombreVia_Cliente']?>'>

            <label class="label_ME" for="NumeroVia_Cliente">Numero de la via:</label>
                <input type="text" class="caja" name="NumeroVia_Cliente" id="NumeroVia_Cliente" placeholder="Escribe el número de la via" value='<?php echo $row['NumeroVia_Cliente']?>'>
            
            <label class="label_ME" for="Contrasena_Cliente">Contraseña:</label>
                <input type="password" name="Contrasena_Cliente" id="Contrasena_Cliente" class="caja"required placeholder="Contrasena" value='<?php echo $row['Contrasena_Cliente']?>'>
            
                <button type="submit" class="boton_ME" title="Modificar" name="Modificar">Guardar cambios</button>
            </form>
            <div class="botoooon_ME">
                <a href="GestionCli.php">Volver</a>
            </div>
        </div>
    </div>    
</div>
<?php
}else{
    echo "Cliente no encontrado: " . $sql . "<br>" .mysqli_error($conn);
}

    }

?>
</body>
</html>