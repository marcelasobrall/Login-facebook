<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="estilo/padrao.css">
    <link rel="stylesheet" href="estilo/reset.css">
    <title>Login Facebook</title>
</head>
<body>
    <div class="col-5 fl mt-10 esq-1 ">
        <h1 class="facebook">facebook</h1>
        <p class=" paragrafo mt-10">O Facebook ajuda você a se<br> conectar 
            e compartilhar com<br> as pessoas que fazem<br>
            parte da sua vida.
        </p>
    </div>
    <div class=" col-5 dir-1 fl mt-10">
        <form action="recebe.php" method="get">
            <input class=" cadastro-index mt-5 col-4" type="text" name="email" placeholder="Email ou telefone"><br>
            <input class=" cadastro-index mt-5 col-4" type="password" name="senha" placeholder="Senha"><br>
            <input class=" cadastro-index botao-entrar mt-5 col-4" type="submit" name="botao" value="Entrar" placeholder="Entrar"><br>
            <a href="index2.php">Esqueceu a senha?</a><br>
        </form>
        <form action="index3.php" method="get">
            <input class=" cadastro-index nova-conta mt-5 col-4" type="submit" name="botao2" value="Criar nova conta" placeholder="Criar nova conta">
            <p class="mt-5">Criar uma Página para uma celebridade, banda ou empresa</p>
        </form>

    </div>
</body>
</html>