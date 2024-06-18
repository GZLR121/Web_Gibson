<?php

session_start();

include 'conexion.php';

$email = $_POST['emailInicio'];
$contra = $_POST['contraInicio'];

$validarLogIng = mysqli_query($conexion, "SELECT * FROM user_data WHERE email = '$email' AND contra = '$contra'");

if (mysqli_num_rows($validarLogIng) > 0) {
    $_SESSION['email'] = $email;
    header("location:/Web_Gibson/Web/index.php");
    exit();
} else {
    echo '<script>        
    alert("Credenciales incorrectas");
    window.location = "/Web_Gibson/Web/LogIn&SingUp/index.php";
    </script>';
    exit();
}



?>