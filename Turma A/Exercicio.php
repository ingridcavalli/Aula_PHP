<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <?php
      date_default_timezone_set("America/Sao_Paulo");
      // Define as variáveis para receber o dia, o mÊs e o ano 
       $dia = date("d"); // Extarir o dia da funçao date
       $mes = date("F"); // Extarir o mês da função date
       $ano = date("Y"); // Extrair o ano da função date
    
       // Exiba a data do sistema operacional
       echo "<p>Hoje é ", $dia, " " . "de ", $mes, " " . "de ",  $ano, "</p>";

       // Define as variáveis para receber a hora, minuto eo segundo
       $hora = date("h"); //Extarir a hora da função date
       $minuto = date("i"); //Extarir o minuto da função date 
       $segundo = date("s");  //Extarir o segundo da função date

       //Exiba a hora do sistema operacional 
       echo "<p>Agora são ", $hora, " " .  $minuto . " e ", $segundo, "</p";
    ?>
</body>
</html>