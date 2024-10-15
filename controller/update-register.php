<?php

    include_once("../config/connection.php");

    $id = (int) $_POST['id'];
    $game_name = $_POST['nome'];
    $platform = $_POST['plataforma'];
    $year = $_POST['ano'];
    $genre = $_POST['genero'];
    $time_played = (int) $_POST['tempo'];

    // echo $id . $game_name. $platform . $year . $genre . $time_played;

    $update =  "UPDATE registro 
                SET nome_registro = '$game_name',
                   plataforma = '$platform',
                   ano_lancamento = '$year',
                   genero = '$genre',
                   tempo_jogado = $time_played
                WHERE id_registro = $id;";

    $query = mysqli_query($connect, $update);

    header('Location: ../views/list.php');

?>