<?php include_once('../partials/header.php'); ?>

    <title>Cadastro</title>

</head>

<body class="register-bg">
    
    <div class="container-fluid d-flex flex-column vh-100 justify-content-center align-items-center">

        <div class="d-flex flex-column justify-content-center align-items-center register-card bg-dark rounded-4">

            <h1 class="text-white mb-3">Cadastro de Usuário</h1><br>
            <p class="text-white">Registre seus dados</p>

            <form class="custom-width login-form" action="../controller/insert-user.php" method="POST">
                <div class="form-floating mb-3">
                    <input class="form-control w-100" type="text" name="name" id="name" placeholder="Insira seu nome completo" required>
                    <label for="name">Nome completo</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="user" id="user" placeholder="Insira seu nome de usuário" required>
                    <label for="user">Usuário</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="email" id="email" placeholder="Insira um e-mail" required>
                    <label for="email">E-mail</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Insira uma senha" required>
                    <label for="password">Senha</label>
                </div>
                <div class="d-flex justify-content-between gap-3">
                    <button class="btn btn-primary p-3 w-50" type="reset">Limpar</button>
                    <button class="btn btn-primary p-3 w-50" type="submit">Cadastrar</button>
                </div>
            </form>

        </div>

    </div>

</body>
</html>