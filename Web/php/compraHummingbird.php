<?php

    include 'conexion.php';

    session_start();

    $email = $_SESSION['email'];
    $color = $_POST['colour'];
    $orientacion = $_POST['size'];

    $query = "INSERT INTO shop_data(nombre_prod, color, orientacion, email) VALUES ('Gibson Hummingbird', '$color', '$orientacion', '$email')";

    $ejecutar = mysqli_query($conexion, $query);     

    if($ejecutar){
        echo '<script>        
        alert("Compra realizada con exito");
        window.location = "/Web_Gibson/Web/Paginas/Shop/index.php";
        </script>';
    } else {
        echo '<script>        
        alert("Intente nuevamente, Compra no realizada");
        window.location = "/Web_Gibson/Web/Paginas/Shop/HummingbirdShop.php";
        </script>';
    }

    mysqli_close($conexion);
?>