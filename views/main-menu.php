<?php 

    include_once("../config/connection.php");

    session_start();

    if (isset($_POST['user'])) {

        $user = $_POST['user'];
        $password = $_POST['password'];
    
        // OBTENDO DADOS DA CONSULTA
        $sql = "SELECT * FROM usuario WHERE login = '$user'";
        $result = mysqli_query($connect, $sql);
        $data = mysqli_fetch_assoc($result);

        // VALIDAÇÃO DO USUÁRIO - Nome de usuário e senha
        $valid_user = $data && ($user == $data['login'] && ($password == $data['senha']));

        if ($valid_user) {

            $_SESSION['session_user'] = [$user, $password];
            echo "<br>" . $data['nome_usuario'] . " " . $data['login'] . " " . $data['senha'];

        } else {

            echo "<br> USUÁRIO ou SENHA incorretos!";

        }

    } else if (!isset($_SESSION['session_user'])) {

        header('Location: login.php');

    }


?>