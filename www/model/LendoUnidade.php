<?php

    require_once "NumerosEx.php";

    class LendoUnidade extends NumerosEx{
        
        public function unidade($chave){
            return $this->getUnidade($chave);
        }

    }