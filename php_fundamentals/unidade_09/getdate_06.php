<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        <?php

            $dt = new DateTime();

            $periodo = new DateInterval("P15D");

            $dt->add($periodo);

            echo "<br>";
            echo $dt->format("d/m/Y H:i:s");

        ?>
    
    <body>
    </body>
</html>