<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        <?php

            $data1 = new DateTime('2014-12-30');
            $data2 = new DateTime('2014-12-31');
            $intervalo = $data1->diff($data2);

        ?>

        <pre>
            <?php 

                print_r($intervalo->format('%d'))
            ?>
        </pre>
    
    <body>
    </body>
</html>