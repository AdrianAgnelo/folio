<?php 

    $nome = addslashes($_POST ['nome']);
    $email = addslashes($_POST ['email']);
    $telefone = addslashes($_POST ['telefone']);
    $mensagem = addslashes($_POST ['mensagem']);

    $destino = "adrianagnelo93@gmail.com";
    $assunto = "Contato portfólio";

    $body = "Nome: $nome"."\n" .
            "Email: $email"."\n" .
            "Telefone: $telefone"."\n" .
            "Mensagem: $mensagem";

    $cabecalho = "From: adrianagnelo2002@gmail.com" . "\n" . "Reply-to: $email" . "\n" . "X=Mailer:PHP/" .phpversion();

    if (mail($destino, $assunto, $body, $cabecalho)){
        echo("E-mail enviado com sucesso !");
    }else {
        echo ("O e-mail não foi enviado devido a um erro.");
    }

?>