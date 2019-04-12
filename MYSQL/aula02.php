<?php

    $conn = newPDO("mysql:host=local;dbname=andes", "root", "123456");

    $stmt = $conn->prepare("INSERT INTO categorias (nomecategoria) VALUES(:PRODUTO)");

    $login = "Jose";
    

    $stmt->bindParam(":LOGIN", $login);
    

    $stmt->execute();
    echo "Inserido OK!";




?>