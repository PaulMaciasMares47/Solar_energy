<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, contraseña) 
              VALUES('$nombre_completo', '$correo', '$contraseña')";

    $ejecutar = mysqli_query($conexion, $query);
    if($ejecutar){
       
        echo "
        <script>
            alert('Usuario almacenado exitosamente');
            window.location = '../index.php';
        </script>";
    
    }
?>