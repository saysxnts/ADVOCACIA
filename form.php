<?php

    $nome = addslashes($_POST['nome']);
    $endereco = addslashes($_POST['endereco']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $caso = addslashes($_POST['caso']);

    $para = "guimilthegame@gmail.com";
    $assunto = "Santos & Andrade - Consulta Agendada";

    $corpo = "Nome: ".$nome."\n"."Endereço: ".$endereco."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Caso: ".$caso;

    $cabeca = "From: guilherme_oliveirass@outlook.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email");
    }

?>