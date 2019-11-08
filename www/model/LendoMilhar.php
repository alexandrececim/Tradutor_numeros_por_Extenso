<?php

    require_once "LendoCentena.php";

    class LendoMilhar extends LendoCentena{
        
        public function milhar($valor){
            $resposta = 0;
            if($valor > 999){
                $resposta = $this->lerMilhar($valor);
            }
            if($valor < 1000){
                $resposta = $this->centena($valor);
            }
            return $resposta;
        }

        private function lerMilhar($nMil){
            
            $milharPorExtenso10 = "Null";
            $chave = intdiv($nMil,1000);
            $centena = ($nMil / 100) % 10;
            $dezena = $nMil % 100;
            
            if($dezena >= 10 && $centena < 1){
                ($dezena == 0 )? $milharPorExtenso10 = $this->unidade($chave)." mil" : $milharPorExtenso10 = $this->unidade($chave)." mil e ". $this->dezena($dezena);
            }
            if($dezena < 10 && $centena < 1){
                $milharPorExtenso10 = $this->unidade($chave)." mil e ". $this->unidade($dezena);
            }
            if($dezena >= 10 && $centena > 0){
                ($dezena == 0 )? $milharPorExtenso10 = $this->unidade($chave)." mil e ".$this->centena($centena*100) : $milharPorExtenso10 = $this->unidade($chave)." mil e ". $this->centena($centena*100+$dezena);
            }
            if($dezena < 10 && $centena > 0){
                ($dezena == 0 )? $milharPorExtenso10 = $this->unidade($chave)." mil e ".$this->centena($centena*100) : $milharPorExtenso10 = $this->unidade($chave)." mil e ". $this->centena($centena*100+$dezena);
            }
            if($dezena == 0 && $centena == 0) { 
                $milharPorExtenso10 = $this->unidade($chave)." mil";
            }
                    
            return $milharPorExtenso10;
        }
    }