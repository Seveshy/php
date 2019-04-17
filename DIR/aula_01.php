<?php

    $name = "images";

    if (!is_dir($name)){
       
        mkdir($name);
        echo "Diretorio $name criado com sucesso";
    } else {
        echo "Já existe o diretorio: $name";
    }


?>