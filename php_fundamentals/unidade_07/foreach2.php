<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <?php
       
        $agenda = array(
          "nome" => "José", 
          "Sobrenome" => "Silva", 
          "salario" => 1000,
          "aniversario" => "03/08/1900"
          
        );
        
            foreach ($agenda as $atributo => $valor) {
                echo $atributo . ": " . $valor . "<br>";
            }
        ?>
    <body>
    </body>
</html>