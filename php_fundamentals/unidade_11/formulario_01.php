        <?php

            if( isset($_POST["formulario"])){
                $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Sem definição";
                $nome = isset($_POST["email"]) ? $_POST["email"] : "Sem definição";

              echo "Meu nome: " . $nome . "<br>";
              echo "Meu email: " . $email . "<br>";
            }
        ?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <form action="formulario_01.php" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome" require>
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email" require>
            
            <input type="submit" name="formulario" value="Enviar Cadastro">
        </form>
    </body>
</html>