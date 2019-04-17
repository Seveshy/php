<?php

    abstract class Animal {
        public function falar(){
            return "Som";
        }

    public function mover(){
        return "Anda";
        
        }
    }

    class Cachorro extends Animal {
        public function falar(){
            return "Late";
        }
    }

    $pluto = new Cachorro();

    echo $pluto->falar() . "<br/>";
    echo $pluto->mover() . "<br/>";