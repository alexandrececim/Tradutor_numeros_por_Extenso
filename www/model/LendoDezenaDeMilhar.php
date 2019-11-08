<?php

    require_once "LendoMilhar.php";

    class LendoDezenaDeMilhar extends LendoMilhar{
        
        public function dezenaDemilhar($valor){
            $resposta = 0;
            if($valor > 9999){
                $resposta = $this->lerDezenaMilhar($valor);
            }
            if($valor < 10000){
                $resposta = $this->milhar($valor);
            }
            return $resposta;
        }
        private function lerDezenaMilhar($valor){
            $dezenaMilharPorExtenso = null;
            $dezenaMilhar = intdiv($valor, 1000);
            $milhar = ($valor % 1000);
            
            if($milhar == 0){
                $dezenaMilharPorExtenso = $this->dezena($dezenaMilhar)." mil";

            }else{
                $dezenaMilharPorExtenso = $this->dezena($dezenaMilhar)." mil e ".$this->milhar($milhar);
            }
        
            
            return $dezenaMilharPorExtenso;
        }
    }