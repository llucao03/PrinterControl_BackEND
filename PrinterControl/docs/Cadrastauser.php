<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   include('Config.php');
    try {
       
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];

        $sql = "INSERT INTO cadrasta_user (PRIMEIRO_NOME, SOBRENOME, EMAIL, CELULAR, SENHA, GENERO)
        VALUES ('$firstname', '$lastname', '$email', '$number', '$password', '$gender')";

        // Executa a query SQL
        $conn->exec($sql);
        echo "Dados inseridos com sucesso!";

        header("location: obrigado.html");
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}
?>
