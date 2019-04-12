<?php
    require_once("config.php");

    $cad = new Cadastro();

    $cad->setNome("Djalma Major");
    $cad->setNome("djalma@mail.com");
    $cad->setNome("123456");

    echo $cad;

?>