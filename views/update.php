<?php

    include_once('../partials/header.php');

    $id = (int) $_POST['id'];
    $game_name = $_POST['nome'];
    $platform = $_POST['plataforma'];
    $year = $_POST['ano'];
    $genre = $_POST['genero'];
    $time_played = $_POST['tempo'];

?>

    <title>Edição de item (<?php echo $id ?>)</title>

</head>

<body>

    <div class="container-fluid d-flex vh-100 justify-content-center align-items-center edit-page">

        <div class="d-flex flex-column justify-content-center align-items-center w-auto h-auto bg-dark border border-2 border-dark rounded-4 card-padding">

            <h1 class="text-white mb-3">Atualize seu registro</h1>
            <p class="text-white mb-3">Altere as informações apresentadas</p>

            <form class="d-flex flex-column custom-width" action="../controller/update-register.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="nome" value="<?php echo $game_name ?>" required>
                    <label for="nome">Nome do jogo</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="plataforma" value="<?php echo $platform ?>" required>
                    <label for="plataforma">Plataforma</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="ano" value="<?php echo $year ?>" required>
                    <label for="ano">Ano de lançamento</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="genero" value="<?php echo $genre ?>" required>
                    <label for="genero">Gênero</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="tempo" value="<?php echo $time_played ?>" required>
                    <label for="tempo">Tempo jogado</label>
                </div>
                <button type="submit" class="btn btn-primary p-3">Atualizar</button>
            </form>

        </div>

    </div>
    

</body>

</html>
