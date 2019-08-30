<?php
    
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $conteudo = "\r\n"."\r\n"."Nome:".$nome."\r\n"."Sobrenome:".$sobrenome."\r\n"."Cidade:".$cidade."\r\n"."Estado:".$estado."\r\n"."E-Mail:".$email."\r\n"."Senha:".$senha;

    $arquivo = fopen("cadastro.txt", "a");

    fwrite ($arquivo, $conteudo);

    echo "$nome"; echo "<br>";
    echo "$sobrenome"; echo "<br>";
    echo "$cidade"; echo "<br>";
    echo "$estado"; echo "<br>";
    echo "$email"; echo "<br>";
    echo "$senha"; echo "<br>";

    fclose($arquivo);


?>