<?php

    session_start();
    session_destroy();
    header("location:../LogIn&SingUp/index.php");

?>