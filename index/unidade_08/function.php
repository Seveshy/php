<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php

       function retornarDiaria($salario, $dias){
        $real = number_format($salario/$dias,2);
        $dolar = number_format(($salario/$dias) / $cotacao,2);
        return number_format($salario/30,2);
        
       }

        $diaria_array = retornarDiaria(300,10,2.5);
        echo retornarDiaria(900);
        
       list($diaria_real, $diaria_dolar) = retornarDiaria(3000,10,2.5);
        echo "Diaria em R$" . $diaria_real . "<br>";
        echo "Diaria em US$" . $diaria_dolar . "<br>";

        ?>
     

    </body>
</html>