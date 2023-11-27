<?php  
include('Config.php');
session_start();
$email = $_POST['email'];
$password = $_POST['senha'];


$consultauser = $conn->prepare("SELECT * FROM cadrasta_user where EMAIL = :nick");

$consultauser->bindParam(':nick', $email);
$consultauser->execute();

if ($consultauser->rowCount() > 0) {
    $user = $consultauser->fetch(PDO::FETCH_ASSOC);
    
    if ($password == $user['SENHA']) {
        echo "senha correta <br>";
         header("location: publicar.html");
    } else {
        session_destroy();
        echo "Usuário ou senha errados<br>";
        echo "<a href='login.php'>Voltar</a>";
    }
}
?>
