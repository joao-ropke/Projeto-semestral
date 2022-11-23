<!doctype html>

<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Login</title>
</head>

<body>
    <section class="area-login">
        <div class="login">
            <div>
                <h1>Login</h1>
            </div>
            <form method="get" action = "consulta.php">
                <input type="text" name="nome" placeholder=" E-mail do usuario" autofocus>
                <input type="password" name="Senha" placeholder="Senha" autofocus>
                <input type="password" name="Confirmar senha" placeholder="Confirmar senha" autofocus>
                <input type="submit" value="entrar">
            </form>
            <p>Ainda não tem uma conta?<a href="cadastro.html">Criar conta</a></p>
        </div>
    </section>
</body>

</html>