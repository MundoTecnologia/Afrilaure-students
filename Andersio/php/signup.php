<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastar Conta</title>
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

        <form action="index.html" method="post">

            <h1>Criar Conta</h1>
            
            <div class="campo">
                <label for="nome">Nome de usuario: </label>
                <input type="text" name="nome" id="nome">
            </div>

            <div class="campo">
                <label for="email">Digite seu email: </label>
                <input type="email" name="email" id="email">
            </div>

            
            <div class="campo">
                <label for="tel">Numero de telefone:</label>
                <input type="number" name="tel" id="tel">
            </div>

            <div class="campo">
                <label for="senha">Informe sua senha: </label>
                <input type="password" name="senha" id="senha">
            </div>

            <div class="campo">
                <button type="submit">Criar Conta</button>
            </div>

            <a href="login.html">Ja tem uma Conta ?</a>
        </form>
        
        <div class="left">
            
        </div>

    </div>
    
    <script src="../js/login"></script>
</body>
</html>