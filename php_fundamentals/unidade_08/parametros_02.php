<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php

          $pessoa = array(
              'nome' => 'João', 
              'idade' => 20
          );

          foreach ($pessoa as &$value) {
              
            if (gettype($value) === 'integer') $value  += 10;
            
            echo $value . '<br>';
          }

          print_r($pessoa);
        ?>

        
     

    </body>
</html>