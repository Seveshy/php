<?php 

// Passo 1 - Abrir conexao 

$servidor = "localhost";
$usuario = "root";
$senha = "123456";
$banco = "andes";
$conecta = mysqli_connect($servidor, $usuario, $senha, $banco);

// Passo 2 - Testar conexao 

if ( mysqli_connect_errno() ) {
    die("Conexao falhou: " . mysqli_connect_errno());
}
?>

<?php

// Passo 3 - Abrir consulta ao banco de dados

$consulta_categorias = "SELECT nomeproduto";
$consulta_categorias = " FROM produtos"; 

$categorias = mysqli_query($conecta, $consulta_categorias);

if ( !$categorias ) {
    die("Falha na consulta ao banco.");
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

        <ul>
            <?php
            // Passo 4 - Listagem de dados

            while ($registro = mysqli_fetch_assoc($categorias) ) {
           
            ?>
                <li><?php echo $registro["nomeproduto"] ?></li>
             <?php    
            }

            ?>
        </ul>


        <?php
        // Passo - Liberar dados da memoria

        mysqli_free_result($categorias);
    
        ?>    
    </body>
</html>

    <?php

    // Passo 6 - Fechar conexao 

    mysqli_close($conecta);