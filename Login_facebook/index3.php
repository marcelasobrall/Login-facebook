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
    <main class="meio-index3 col-5 esq-3">
        <div class="espaco-cadastro">
            <h1 class="cadastrar-se mb-5">Cadastre-se</h1>
            <p class=" mb-5">É rápido e fácil</p>
            <form action="recebe3.php" method="get">
                <input class="col-5 fl mt-5 espacamento" type="text" name="nome" placeholder="Nome">
                <input class="col-5 fl espaco mt-5 espacamento" type="text" name="sobrenome" placeholder="Sobrenome">
                <input class="col-10 mt-10 espacamento" type="text" name="email" placeholder="Celular ou Email"><br>
                <input class="col-10 mt-10 espacamento" type="password" name="senha" placeholder="Nova senha"><br>
                <input class="col-10 mt-5 mb-10 espacamento" name="nascimento" type="date" placeholder="Data de nascimento"><br>
                <input type="radio" name="sexo" value="H">Homem
                <input type="radio" name="sexo" value="M">Mulher
                <input type="radio" name="sexo" id="P">Personalizado<br>
                <input class="esq-2 botao-cadastrar col-6 mt-10" type="submit" name="botao3" value="Cadastrar-se">
            </form>
        </div>
        </main>
 
</body>
</html>