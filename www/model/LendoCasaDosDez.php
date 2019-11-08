<?php

    require_once "LendoUnidade.php";

    class LendoCasaDosDez extends LendoUnidade{
        
        public function casaDosDez($chave){
            $resposta = 0;
            if($chave > 9 ){
                $resposta = $this->getCasaDosDez($chave -10);
            }
            if($chave < 10 ){
                $resposta = $this->getUnidade($chave);
            }
            return $resposta;
        }

    }