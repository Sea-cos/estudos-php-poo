<?php

final class Multiplicar {
    //criação de atributos
        private float $num1;
        private float $num2;

        // Metodo para retiriar valor do atributo e retornar para quem estiver solicitando
        public function getNum1(): float {
            return $this->num1;
        }

        //metodo para receber o valor e armazenar no atributo
        public function setNum1(float $num1): void {
            $this->num1 = $num1;
        }

        public function getNum2(): float {
            return $this->num2;
        }

        
        public function setNum2(float $num2): void {
            $this->num2 = $num2;
        }

        public function calculaMultiplicar(): float {
            return $this->num1 * $this->num2;
        }

    }
?>