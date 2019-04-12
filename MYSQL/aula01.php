<?php
    $conn = new PDO("mysql:dbname=andes;host=localhost", "root", "123456");

    $stmt = $conn->prepare("SELECT * FROM categorias;");

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results);

    ?>