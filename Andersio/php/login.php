<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entar</title>
    <link rel="stylesheet" href="../style/login.css">
    <link rel="shortcut icon" href="../img/icons8-procurar-96.png" type="image/x-icon">
    <!--fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright&display=swap" rel="stylesheet">


    <!--fonts  -->

</head>
<body>

    <div class="container">

        <form action="login.html">

            <h1>Entar</h1>
            
            <div class="campo">
                <label for="nome">Nome de usuario ou email </label>
                <input type="text" name="nome" id="nome">
                <p id="resultado_name"></p>
            </div>

            <div class="campo">
                <label for="senha">Informe sua senha</label>
                <input type="password" name="senha" id="senha">
                <p id="resultado_senha"></p>
            </div>

            <div class="campo">
                <button onclick="logar()">Entar</button>
            </div>

            <a href="signup.html">Criar Conta ?</a>
        </form>

        <div class="left">

        </div>

    </div>
    
    <script src="../js/login.js"></script>
</body>
</html>