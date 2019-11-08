<?php
/**
 * Classe que carrega o retorne em um JSON cuja chave é 'extenso'
*/
    class ViewLido{
        public function returnoJson($frase){
            echo json_encode( array( 'extenso' => $frase ) );
        }
    }