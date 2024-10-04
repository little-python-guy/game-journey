<?php  

    include_once('../config/connection.php');

    $name = $_POST['name'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // FAZENDO A INSERÇÃO NO BANCO DE DADOS
    $sql = "INSERT INTO usuario VALUES (
            null, '$name', '$email', '$user', '$password');";

    $res = mysqli_query($connect, $sql);

    $connect->close();

    header('Location: ../views/login.php'); 
    
?>