<?php

    class Documento {
        private $numero;

        public function getNumero(){
    
        return $this->numero;
    }

        public function setNumero($n){
            $this->numero = $n;
        }
    }

    class CPF extends Documento {
        public function validar():bool{
    

        $numeroCPF = $this->getNumero();

            // Validar CPF

            return true;
        }
    }