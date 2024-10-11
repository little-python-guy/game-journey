<?php

    include_once('../config/connection.php');

    $query = "SELECT * FROM registro";
    $result = mysqli_query($connect, $query);

    // Quantidade de linhas na tabela
    $qtd = mysqli_num_rows($result);

    $rows = mysqli_fetch_all($result);

?>