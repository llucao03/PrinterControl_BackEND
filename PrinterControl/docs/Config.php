
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); //para permitir que os erros apareçam na tela
error_reporting(E_ALL);

$username = "root";
$password = "";
    try{
        $conn = new PDO('mysql:host=localhost;dbname=printer_control', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } 
    catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
    }
?>