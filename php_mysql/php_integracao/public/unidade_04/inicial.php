<?php require_once("conexao.php"); ?>


<?php 

    // Consulta ao banco de dados

    $produtos =  "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena ";
    $produtos .= "FROM produtos ";
    $resultado = mysqli_query($conecta, $produtos);
        if(!$resultado) {
            die("Falha na consulta ao banco");
        }

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>

        <?php include_once("_incluir/header.php"); ?>
        
        <main>  
            
        </main>

        <?php include_once("_incluir/footer.php"); ?>


    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>