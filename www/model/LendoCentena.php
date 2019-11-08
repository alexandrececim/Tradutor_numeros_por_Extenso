<?php

    require_once "LendoDezena.php";

    class LendoCentena extends LendoDezena{
        
        public function centena($valor){
            $resposta = 0;
            if($valor > 99){
                $resposta = $this->lerCentena($valor);
            }
            if($valor < 99){
                $resposta =$this->dezena($valor);
                }
                return $resposta;
        }

        private function lerCentena($n100){
            $centenaPorExtenso10 = "Null";
            switch ($n100){
                case ($n100 > 99 && $n100 < 110):
                    $chave = ($n100 -100);
                    ($chave == 0)? $centenaPorExtenso10 = $this->getCentenas(0) : $centenaPorExtenso10 = "cento e ".$this->unidade($chave);
                    break;
                case ($n100 > 109 && $n100 <= 999 ):
                    $chave = intdiv($n100,100);
                    $resto = $n100 % 100;
                    if($chave == 1 && $resto != 0){
                        ($resto >= 1 && $resto <20)? $centenaPorExtenso10 = "cento e ".$this->dezena($resto) : $centenaPorExtenso10 = "cento e ".$this->dezena($resto);
                    }else{
                        ($resto >= 1 && $resto < 10 )? $centenaPorExtenso10 = $this->getCentenas($chave -1)." e ".$this->unidade($resto) : $centenaPorExtenso10 = $this->getCentenas($chave -1)." e ".$this->dezena($resto);
                    }
                    if($resto == 0) $centenaPorExtenso10 = $this->getCentenas($chave -1);
                    break;
                
            }
            
            return $centenaPorExtenso10;
        }
    }