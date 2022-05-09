<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <form action="" method="post">
        <label for="iNome">Nome: </label>
        oi
        <input type="text" name="nNome" id="iNome">

        <div class="g-recaptcha" data-sitekey="6LctN9EfAAAAAILh-h25sX8pbcbcN19sBIL_yKmh"></div><br>

        <input type="submit" name="nEnviar" value="ENVIAR" onclick="return valida()">
    </form>

    <script type="text/javascript">
        function valida() {
            if (grecaptcha.getResponse() == "") {
                alert("Você precisa marcar a caixa de validação");
                return false;
            }
        }
    </script>

    <?php
    if (isset($_POST['ENVIAR']))
        print_r($_POST);
    ?>
</body>
</html>