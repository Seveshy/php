<?php

//Regras de negócios. 

$qualASuaIdade = 11;

$idadeCrianca = 12;
$idadeMaior = 10;
$idadeMelhor = 65;

    if ($qualASuaIdade < $idadeCrianca) {
        echo "Criança";
    } else if ($qualASuaIdade < $idadeMaior){
        echo "Não é criança";
    } else if ($qualASuaIdade < $idadeMelhor){
     echo "Adulto";
    } else if ($qualASuaIdade < $idadeMelhor){
        echo "Adulto";
    } else if ($qualASuaIdade < $idadeMelhor){
        echo "Adulto";
    } else {
        echo "Idoso";
    } 

    echo "<br>";

    echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade"
?>