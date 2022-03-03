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
    <header class="inicio-index2">
        <div class="col-6 fl">
            <h1 class="facebook mt-10">facebook</h1>
        </div>
        <div class="direita2 col-5 fl ">
            <h1 class="botao-entrar-index2 mt-10">Entrar</h1>
            
        </div>
        <div class="normal"></div>
    </header>    
    <main class="meio-index2 centraliza col-4 esq-4">
        <h1 class="encontrar-conta mb-5">Encontre sua conta</h1>
        <p class="mb-5">Insira seu email ou número de celular para procurar a sua conta</p>
        <form action="index.php" method="get">
            <input class=" procurar-conta mt-5 col-7 " type="email" name="telefone" placeholder="Email ou número de celular"><br>
            <input class="botao-cancelar esq-2 mt-5" type="submit" name="botao_cancelar" value="Cancelar" placeholder="Cancelar">
            <a href="index.php"><input class="botao-pesquisar mt-5" type="submit" name="botao_pesquisar" value="Pesquisar" placeholder="Pesquisar"></a>
        </form>
    </main>
</body>
</html>