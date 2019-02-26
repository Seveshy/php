<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        <?php

            // determinar timezone
            date_default_timezone_set('America/Sao_Paulo');
            $agora = getdate();

            // criar elementos

            $ano = $agora["year"];
            $mes = $agora["mon"];
            $dia = $agora["mday"];

            $dia     =   $agora["mday"];
            $minuto  =   $agora["mday"];
            $segundo =   $agora["mday"];
            

            echo $dia . "/" . "$mes" . "/" . $ano . " - " . $hora . " : " . $minuto . ":" . $segundo; 
        ?>
    
    <body>
    </body>
</html>