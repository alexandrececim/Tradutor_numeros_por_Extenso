<?php

require_once "LendoCasaDosDez.php";

class LendoDezena extends LendoCasaDosDez{
    
    public function dezena($valor){
        $resposta = 0;
        if($valor > 19){
            $resposta = $this->lerDezenas($valor);
        }
        if($valor < 20){
            $resposta = $this->casaDosDez($valor);
        }
        return $resposta;
    }

    private function lerDezenas($n10){
        $dezenasPorExtenso10 = 0;
        if ($n10 > 19 && $n10 <= 99 ){
                $chave = intdiv($n10,10);
                $resto = $n10 % 10;
                ($resto == 0)? $dezenasPorExtenso10 = $this->getDezenas($chave -1) : $dezenasPorExtenso10 = $this->getDezenas($chave -1)." e ".$this->casaDosDez($resto);
        }else{
            $dezenasPorExtenso10 = $this->casaDosDez(10);
        }
               
        return $dezenasPorExtenso10;
    }

}