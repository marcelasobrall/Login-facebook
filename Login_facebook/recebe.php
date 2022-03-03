<?php

    $usuario = $_GET["email"];
    $senhas = $_GET["senha"];

    $resultado = $usuario =="joao@gmail.com" && $senhas == "123";
    echo $resultado
    

?>