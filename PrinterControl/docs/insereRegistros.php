<?php
   include('Config.php');
   try {
    $nome = $_POST["nome"];
    $fone = $_POST["fone"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $nrSerie = $_POST["nrSerie"];
    $defeito = $_POST["defeito"];
    $statusDI = $_POST["statusDI"];

   
    $sql = "INSERT INTO registros (nome, fone, marca, modelo, nrSerie, defeito, statusDI)
    VALUES ('$nome', '$fone', '$marca', '$modelo', '$nrSerie', '$defeito', '$statusDI')";
    echo 'deu certo a inserção';
   }
   catch(PDOException $e){
     echo 'ERROR: ' . $e->getMessage();
   }

  







?>

