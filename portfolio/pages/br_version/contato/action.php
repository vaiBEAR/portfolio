
    <?php

    if (isset($_POST['assunto']) && !empty($_POST['assunto']))
        $nome = addslashes($_POST['nome']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['mensagem']);

    $to = "luizgustavosoares373@gmail.com";

    $body = "Nome : " . $nome . "\n" .
        "Assunto : " . $assunto . "\n" .
        "Mensagem : " . $mensagem . "\n";

    $header = "From:luiz-demais@hotmail.com" . "\r\n" .
        "X=Mailer:PHP/" . phpversion();

    if (mail($to, $assunto, $body, $header)) {
        echo ("E-mail enviado com sucesso");
    } else {
        echo ("E-mail não pode ser enviado");
    }

    ?>