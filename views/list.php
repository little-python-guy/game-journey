<?php 

    include_once('../partials/header.php'); 
    include_once('../controller/get-registers.php');

?>
   
   <title>Ínicio</title>

</head>

<body>
    <header>
        <nav class="d-flex h-100 p-3 justify-content-between align-items-center navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="text-white d-flex align-items-center navbar-header">
                <strong>Bem-Vindo, Usuário</strong>
            </div>
            <button class="btn btn-success p-3" data-bs-toggle="modal" data-bs-target="#modal-insercao">
                <strong>+ Adicionar registro</strong>
            </button>

            <!-- MODAL DE INSERÇÃO DE REGISTRO -->
            <div class="modal fade" id="modal-insercao">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Cabeçalho do modal -->
                        <div class="modal-header">
                            <h4 class="modal-title">Cadastrar novo registro</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form id="insert-register-form" action="../controller/insert-register.php" method="POST">
                        
                            <!-- Corpo do modal -->
                            <div class="modal-body">
                                <!-- Nome -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome do jogo">
                                    <label for="nome">Nome do jogo</label>
                                </div>

                                <!-- Plataforma -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="plataforma" id="plataforma" class="form-control" placeholder="Digite a plataforma">
                                    <label for="plataforma">Plataforma</label>
                                </div>

                                <!-- Ano de Lançamento -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="ano" id="ano" class="form-control" placeholder="Digite o ano de lançamento">
                                    <label for="ano">Ano de Lançamento</label>
                                </div>

                                <!-- Gênero -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="genero" id="genero" class="form-control" placeholder="Digite o gênero">
                                    <label for="genero">Gênero Principal</label>
                                </div>

                                <!-- Tempo Jogado -->
                                <div class="form-floating">
                                    <input type="text" name="tempo" id="tempo" class="form-control" placeholder="Horas de jogo">
                                    <label for="tempo">Tempo Jogado (em horas)</label>
                                </div>
                            </div>

                            <!-- Rodapé do modal -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" form="insert-register-form">Adicionar</button>
                                <button type="reset" class="btn btn-primary" form="insert-register-form">Limpar</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </nav>
    </header>

    <!-- Tabela de registros -->
    <div class="container d-flex justify-content-center">
        <table class="mt-3">
            <tr class="text-white bg-dark">
                <th>#</th>
                <th>Jogo</th>
                <th>Plataforma</th>
                <th>Ano de Lançamento</th>
                <th>Gênero</th>
                <th>Tempo Jogado</th>
                <th>Ações</th>
            </tr>

            <?php

            foreach ($rows as $row) {

                $id = (int) $row[0];
                
                echo 
                "
                <tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td>$row[4]</td>
                    <td>$row[5] h</td>
                    <td>
                        <form id='teste' action='update.php' method='POST'>
                            <input type='hidden' name='id' value='$row[0]'>
                            <input type='hidden' name='nome' value='$row[1]'>
                            <input type='hidden' name='plataforma' value='$row[2]'>
                            <input type='hidden' name='ano' value='$row[3]'>
                            <input type='hidden' name='genero' value='$row[4]'>
                            <input type='hidden' name='tempo' value='$row[5]'>
                            <button type='submit' class='btn btn-primary'>Editar</button>
                        </form>
                    </td>
                </tr>";

            }

            ?>
        
        </table>
    </div>

</body>
</html>
