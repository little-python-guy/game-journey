<?php

    include_once("../config/connection.php");

    $game_name = $_POST['nome'];
    $platform = $_POST['plataforma'];
    $year = $_POST['ano'];
    $genre = $_POST['genero'];
    $time_played = $_POST['tempo'];

    $sql = "INSERT INTO registro VALUES (
            null, '$game_name', '$platform', '$year', '$genre', '$time_played')";

    $query = mysqli_query($connect, $sql);

    header("Location: ../views/list.php");

?>