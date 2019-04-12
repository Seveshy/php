<?php

    header('Acess-Control-Allow-Origin:*');

    // Abrir conexao
    $conecta = mysqli_connect("localhost", "root", "123456", "andes");
    
    $selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_connect($conecta, $selecao);

    while($linha = mysqli_fetch_object($produtos)) {
?>
    <li><?php echo $linha->nomeproduto ?></li>
<?php
    }

    // Fecha conexão
    mysqli_close($conecta);
?>