<?php include_once('../partials/header.php') ?>

    <title>Login</title>

</head>

<body class="bg-login">

    <div class="container-sm d-flex flex-column vh-100 align-items-center justify-content-center bg-login">

        <!-- COMEÇO - CARD DE LOGIN -->
        <div class="d-flex flex-column align-items-center justify-content-center rounded-4 bg-dark login-bg">

            <h1 class="text-white mb-5">Bem-Vindo !!!</h1>
            <p class="text-white">Entre com seus dados para prosseguir</p>

            <form class="custom-width login-form" action="./main-menu.php" method="POST">
                <div class="form-floating mb-5">
                    <input class="form-control w-100" type="text" name="user" id="user" placeholder="Digite seu nome de usuário" required>
                    <label for="user">Usuário</label>
                </div>
                <div class="form-floating mt-5 mb-5">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Digite sua senha" required>
                    <label for="password">Senha</label>
                </div>
                <div class="d-flex justify-content-between gap-3">
                    <button type="reset" class="btn btn-primary p-3 w-50">Limpar</button>
                    <button type="submit" class="btn btn-primary p-3 w-50">Entrar</button>
                </div>
            </form>
        </div>
        <!-- FINAL - CARD DE LOGIN -->
        
        <p class="text-white mt-3">Não possui cadastro? Faça seu registro <a href="register.php">aqui.</a></p>

    </div>

</body>
</html>