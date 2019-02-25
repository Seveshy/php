<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <?php
       
        for ( $contador = 1; $contador < 7; $contador ++) {
            if ( $contador == 7) {
                break;
            }
            echo rand(1,60) . " ";
        }
        ?>
    <body>
    </body>
</html>