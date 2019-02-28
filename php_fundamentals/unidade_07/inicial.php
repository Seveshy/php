<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <?php
       
       $contador = 1;
       while ( $contador <= 10) {
    
        $sorteio = rand(1,60);
        echo $sorteio . " ";
        $contador = $contador + 1;
    }
        ?>
    <body>
    </body>
</html>