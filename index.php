<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="scripts/main.js"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <form action="" method="post">
        <h1>Formulário de utilidade</h1>
        <label for="iNome"><strong>Nome</strong></label><br>
        <input class="infoP" type="text" name="nNome" id="iNome" placeholder="Ex: Fulano da Silva" required size="40"><br>

        <label for="iEmail"><strong>E-mail</strong></label><br>
        <input class="infoP" type="email" name="nEmail" id="iEmail" placeholder="Ex: Fulano@gmail.com" required size="40"><br>

        <fieldset> 
            <legend><strong>Deseja assinar o nosso guia?</strong></legend>
            <label> <input type="radio" name="escolha" id="sim" checked>Sim</label>
            <label> <input type="radio" name="escolha" id="nao">Não</label>
        </fieldset>
        <br>

        <div class="g-recaptcha" data-sitekey="6LctN9EfAAAAAILh-h25sX8pbcbcN19sBIL_yKmh"></div><br>

        <input type="submit" name="nEnviar" id="iEnviar" value="Enviar" onclick="return valida()">
    </form>

    <?php
        if (isset($_POST['nEnviar'])){
            if (!empty($_POST['g-recaptcha-response'])){
                $url = "https://www.google.com/recaptcha/api/siteverify";
                $secret = "6LctN9EfAAAAAPyuxHQVJsjJKaAhfVz8McuMqCDz";
                $response = $_POST['g-recaptcha-response'];
                $variaveis = "secret=".$secret."&response=".$response;

                $chamada = curl_init($url);
                curl_setopt( $chamada, CURLOPT_POST, 1);
                curl_setopt( $chamada, CURLOPT_POSTFIELDS, $variaveis);
                curl_setopt( $chamada, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt( $chamada, CURLOPT_HEADER, 0);
                curl_setopt( $chamada, CURLOPT_RETURNTRANSFER, 1);
                $resposta = curl_exec($chamada);

                $resultado = json_decode($resposta);
                if($resultado->success == 1){
                    
                }
            }
        }
    ?>
</body>
</html>
