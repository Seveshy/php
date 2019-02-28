<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php

            $a = 10;

            // & Significa passagem de parâmetro por referência.
            
            function trocaValor(&$a) {
                $a += 50;
                return $a;
            }

            echo trocaValor($a);
            echo "<br>";
            echo $a;
        ?>

        
     

    </body>
</html>