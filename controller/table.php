<?php 

    include_once('../partials/header.php'); 
    include_once('./get-registers.php');

?>
   
   <title>Ínicio</title>

</head>

<body>
    <header>
        <nav class="d-flex h-100 justify-content-between align-items-center navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="p-3 text-white d-flex align-items-center navbar-header">
                Bem-Vindo, Usuário
            </div>
            <a class="p-3 text-white">
                <button class="btn btn-primary"><strong>+ Adicionar registro</strong></button>
            </a>
        </nav>
    </header>
    <div class="container d-flex justify-content-center">
        <table class="mt-3">
            <tr class="text-white bg-dark">
                <th>Jogo</th>
                <th>Plataforma</th>
                <th>Ano de Lançamento</th>
                <th>Gênero</th>
                <th>Tempo Jogado</th>
            </tr>

            <?php

            foreach ($rows as $row) {

        
                echo 
                "
                <tr>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td>$row[4]</td>
                    <td>$row[5] h</td>
                </tr>
                ";
                
            }

            ?>
        
        </table>
    </div>
</body>
</html>