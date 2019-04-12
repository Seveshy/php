<?php

    class Pessoa{
        public $nome; //Atributo

        public function falar(){ //Método
            return "O meu nome é " . $this->nome;
            //$this serve para referênciar atributos e métodos dentro de outros métodos
        }
    }

    $daniel = new Pessoa();
    $daniel->nome = "Daniel Major";
    echo $daniel->falar();
?>