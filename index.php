<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="scripts/main.js"></script>
</head>
<body>
    <form action="" method="post">
        <label for="iNome">Nome: </label>
        <input type="text" name="nNome" id="iNome">

        <div class="g-recaptcha" data-sitekey="6LctN9EfAAAAAILh-h25sX8pbcbcN19sBIL_yKmh"></div><br>

        <input type="submit" name="nEnviar" value="enviar" onclick="return valida()">
    </form>

    <?php
        echo "hello world";
    ?>
</body>
</html>
