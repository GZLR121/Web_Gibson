<?php

    include 'conexion.php';

    $username = $_POST['userRegistro'];
    $email = $_POST['emailRegistro'];
    $contra = $_POST['contraRegistro'];
    $nombreCompleto = $_POST['nombreRegistro'];

    $query = "INSERT INTO user_data (username, email, contra, nombre_completo) VALUES ('$username', '$email', '$contra', '$nombreCompleto')";

    // Verificar que el correo no se repita en la bd}

    $verificar_email = mysqli_query($conexion, "SELECT * FROM user_data WHERE email = '$email'");
    if(mysqli_num_rows($verificar_email) > 0){
        echo '<script>        
        alert("El correo ya se encuentra registrado");
        window.location = "../LogIn&SingUp/index.php";
        </script>';
        exit();
    }

    // Verificar que el username no se repita en la bd

    $verificar_email = mysqli_query($conexion, "SELECT * FROM user_data WHERE username = '$username'");
    if(mysqli_num_rows($verificar_email) > 0){
        echo '<script>        
        alert("Este username ya se encuentra registrado");
        window.location = "../LogIn&SingUp/index.php";
        </script>';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);     

    if($ejecutar){
        echo '<script>        
        alert("Registro realizado con exito");
        window.location = "../LogIn&SingUp/index.php";
        </script>';
    } else {
        echo '<script>        
        alert("Intente nuevamente, usuario no registrado");
        window.location = "../LogIn&SingUp/index.php";
        </script>';
    }

    mysqli_close($conexion);
?>