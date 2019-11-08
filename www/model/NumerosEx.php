<?php

    /**
     * Classe mãe que carrega a extenção dos numeros
    */
    class NumerosEx{
        private $unidade =
            array("zero","um", "dois", "três", "quatro", "cinco", "seis","sete", 
                "oito", "nove");
        private $casaDosDez =
            array("dez", "onze", "doze", "treze", "quatorze", "quinze",
                "dezesseis", "dezesete", "dezoito", "dezenove");
        private $dezenas =
            array("dez", "vinte", "trinta", "quarenta", "cinquenta",
                "sessenta", "setenta", "oitenta", "noventa");
        private $centenas =
            array("cem", "duzentos", "trezentos", "quatrocentos",
                "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
        
        public function getUnidade($chave){
            return $this->unidade[$chave];
        }
        public function getCasaDosDez($chave){
            return $this->casaDosDez[$chave];
        }
        public function getDezenas($chave){
            return $this->dezenas[$chave];
        }
        public function getCentenas($chave){
            return $this->centenas[$chave];
        }
    }