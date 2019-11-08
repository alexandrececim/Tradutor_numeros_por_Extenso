<?php

    require_once "LendoDezenaDeMilhar.php";
    /**
     * Essa classe herda as classes responsaveis de traduzir os valores numerico
     * e tambem comtem o tratamento para numeros negativos
     */
    class Extenso extends LendoDezenaDeMilhar{

        public function lerExtenso($numero){
            $traduzido = "zero";
            if($numero > 0){
                $traduzido = $this->dezenaDemilhar($numero);
            }
            //tratamento para valores negativos
            if($numero < 0){
                $numetratado = abs($numero);
                $traduzido = "menos ".$this->dezenaDemilhar($numetratado);
            }
            return $traduzido;
        }
    }
?>