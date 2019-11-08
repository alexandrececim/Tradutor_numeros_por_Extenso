<?php
define('UNIDADE', ["um", "dois", "três", "quatro", "cinco", "seis","sete", "oito", "nove"]);
define('CASADOS10', ["dez", "onze", "doze", "treze", "quatorze", "quinze","dezesseis", "dezesete", "dezoito", "dezenove"]);
define('DEZENAS', ["dez", "vinte", "trinta", "quarenta", "cinquenta","sessenta", "setenta", "oitenta", "noventa"]);
define('CENTENA', ["cem", "duzentos", "trezentos", "quatrocentos","quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos"]);


class teste2{
         

 public function lerExtenso($numero=0){
            $numeroPorExtenso = "zero";
           
            if($numero){
                                              
                switch ($numero){
                    case ($numero > 0 && $numero <10):
                        echo "$numero <br>";
                        $numeroPorExtenso = UNIDADE[$numero -1];
                        break;
                    case ($numero > 9 && $numero <= 99):
                        $numeroPorExtenso = $this->lerDezenas($numero);
                        break;
                    case ($numero > 99 && $numero <= 999 ):
                        $numeroPorExtenso = $this->lerCentena($numero);
                        break;
                    case ($numero > 999 && $numero <= 9999 ):
                        $numeroPorExtenso = $this->lerMilhar($numero);
                        break;
                    case ($numero > 9999 && $numero <= 99999 ):
                        $numeroPorExtenso = $this->lerDezenaMilhar($numero);
                        break;
                }
                return $numeroPorExtenso;
            }
        }

    private function lerDezenas($n10){
        $dezenasPorExtenso10 = "Null";
        switch ($n10){
            case ($n10 > 9 && $n10 <= 19):
                 
                $dezenasPorExtenso10 = CASADOS10[$n10 -10];
                break;
            case ($n10 > 19 && $n10 <= 99 ):
                $chave = intdiv($n10,10);
                $resto = $n10 % 10;
                
                ($resto == 0)? $dezenasPorExtenso10 = DEZENAS[$chave -1] : $dezenasPorExtenso10 = DEZENAS[$chave -1]." e ".UNIDADE[$resto -1];
                break;
            default:
                $dezenasPorExtenso10 = DEZENAS[1];
                break;
        }
        
        return $dezenasPorExtenso10;
    }

    private function lerCentena($n100){
        $centenaPorExtenso10 = "Null";
        switch ($n100){
            case ($n100 > 99 && $n100 < 110):
                $chave = ($n100 -100);
                ($chave == 0)? $centenaPorExtenso10 = CENTENA[0] : $centenaPorExtenso10 = "cento e ".UNIDADE[$chave -1];
                break;
            case ($n100 > 109 && $n100 <= 999 ):
                $chave = intdiv($n100,100);
                $resto = $n100 % 100;
                if($chave == 1 && $resto != 0){
                    ($resto >= 1 && $resto <20)? $centenaPorExtenso10 = "cento e ".$this->lerDezenas($resto) : $centenaPorExtenso10 = "cento e ".$this->lerDezenas($resto);
                }else{
                    ($resto >= 1 && $resto < 10 )? $centenaPorExtenso10 = CENTENA[$chave -1]." e ".UNIDADE[$resto -1] : $centenaPorExtenso10 = CENTENA[$chave -1]." e ".$this->lerDezenas($resto);
                }
                if($resto == 0) $centenaPorExtenso10 = CENTENA[$chave -1];
                break;
            
        }
        
        return $centenaPorExtenso10;
    }

    private function lerMilhar($nMil){
        $milharPorExtenso10 = "Null";
        $chave = intdiv($nMil,1000);
        $centena = ($nMil / 100) % 10;
        $dezena = $nMil % 100;

        if($dezena == 0 && $centena == 0) { 
            $milharPorExtenso10 = UNIDADE[$chave -1]." mil";
        }
        if($dezena >= 10 && $centena < 1){
            ($dezena == 0 )? $milharPorExtenso10 = UNIDADE[$chave -1]." mil" : $milharPorExtenso10 = UNIDADE[$chave -1]." mil e ". $this->lerDezenas($dezena);
        }
        if($dezena < 10 && $centena < 1){
            $milharPorExtenso10 = UNIDADE[$chave -1]." mil e ". UNIDADE[$dezena -1];
        }
        if($dezena >= 10 && $centena > 0){
            ($dezena == 0 )? $milharPorExtenso10 = UNIDADE[$chave -1]." mil e ".$this->lerCentena($centena*100) : $milharPorExtenso10 = UNIDADE[$chave -1]." mil e ". $this->lerCentena($centena*100+$dezena);
        }
        if($dezena < 10 && $centena > 0){
            ($dezena == 0 )? $milharPorExtenso10 = UNIDADE[$chave -1]." mil e ".$this->lerCentena($centena*100) : $milharPorExtenso10 = UNIDADE[$chave -1]." mil e ". $this->lerCentena($centena*100+$dezena);
        }
                
        return $milharPorExtenso10;
    }

    private function lerDezenaMilhar($milharDesena){
        $dezenaMilharPorExtenso = null;
        $dezenaMilhar = intdiv($milharDesena,10000);
        $milhar = $milharDesena % 10000;
        echo "<br>milhar: ".$milhar." | dezenaMilhar: ".$dezenaMilhar;

        switch ($milhar){
            case($milhar < 1):
                $dezenaMilharPorExtenso = DEZENAS[$dezenaMilhar -1]." mil";
                break;
       
            case($milhar < 1000):
                $dezenaMilharPorExtenso = DEZENAS[$dezenaMilhar -1]." ".$this->lerMilhar($milhar);
                break;
            case( $milhar > 1000):
                $dezenaMilharPorExtenso = DEZENAS[$dezenaMilhar -1]." e ".$this->lerMilhar($milhar);
                break;
        }
        return $dezenaMilharPorExtenso;
    }

    

}
$imprime = neW teste2();
$valor = $_GET["valor"];
echo "<h1>".$imprime->lerExtenso($valor)."</h1>";