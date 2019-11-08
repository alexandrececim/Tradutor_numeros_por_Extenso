<?php 

require "./controller/Controle.php";


switch( $_SERVER['REQUEST_METHOD'] ) {
    case 'GET':
        $extenso = $_GET["extenso"];
        
        //carrega o Controler
        $executaConversaoNumerica = new Controle($extenso);

        break;
    default:
    //caso o envio não seja por via POST
    echo json_encode( 'Método HTTP não permitido.' );
    break;
}

?>