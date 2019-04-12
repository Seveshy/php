<?php

    // Passor 1 - Abrir connexao
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "andes";
    $conecta = mysqli_connect("localhost", "root", "andes" );

    // Passo 2 - Testar conexao
    if ( mysqli_connecterrno () ) {
        die("Conexão falhou: " . mysqli_connecterrno());
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    </body>
</html>


<?php

    mysqli_close($conecta);


?>