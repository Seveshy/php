<?php 

    include "aula06.php";

    $resultado = somar (10, 40);
    echo $resultado;
    

    // Qual é a diferença entre include e require

    // O require obriga que o arquivo exista, e que o arquivo esteja funcionando corretamente, se ele não estiver funcionando ou não existir, ele imprime um erro faltal.
    // O include tenta funcionar mesmo que o arquivo não exista. o include também tem mais recursos. 

?>
