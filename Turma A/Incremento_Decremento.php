<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrementando e Decrementando em PHP</title>
</head>
<body>
    <?php
       echo "<h3>INCREMENTANDO</h3>";
       $contador = 0; // Define a variável $contador iniciando com zero 
       echo "Variável <strong>contador</strong> com inicializando: " .$contador;

       $contador+=1; // incrementando mais 12 na variável contador
       echo "<p>Valor da variável <strong>contador</strong> com incremento de $contador" . "</p>";
       
       $contador+=5; 
       echo "<p>Valor da variável <strong>contador</strong> com incremento de 5 é igual a  $contador" . "</p>";

        echo "<h3>DECREMENTANDO</h3>";
        $contador-=2;
        echo "<p>Valor da variável <strong>contador</strong> com decremento de 2 é igual a $contador" . "</p>";

    ?>
    
</body>
</html>