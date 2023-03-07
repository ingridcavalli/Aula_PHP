<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Constant em PHP</title>
</head>
<body>
    <?php
        echo "<h3 align='center'>EXEMPLO CONSTANT EM PHP</h3><hr>";
        // Definição Constant
        define("linguagem","PHP - Linguagem Dinâmica");  
        echo "<strong>Linguagem: <strong>" . linguagem;

        define("caracteristica","A característica da linguagem PHP, é que a mesma
        necessita de servidor para interpretar, ou seja <u> complicar o código</u>.");
        echo "<p>" . caracteristica . "</p>"

    ?>
</body>
</html>