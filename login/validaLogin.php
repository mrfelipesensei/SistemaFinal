<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: view/formLogin.php");
}


?>