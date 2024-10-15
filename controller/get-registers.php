<?php

    include_once('../config/connection.php');

    $query = "SELECT * FROM registro";
    $result = mysqli_query($connect, $query);

    $rows = mysqli_fetch_all($result);

?>