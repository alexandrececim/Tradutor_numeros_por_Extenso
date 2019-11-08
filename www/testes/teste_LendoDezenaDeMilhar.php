<?php
include "../model/LendoDezenaDeMilhar.php";

echo "<h2>Teste da classe LendoDezenaDeMilhar</h2>";
echo "<h4>URL: /model/LendoDezenaDeMilhar.php</h4>";

//instancia a classe
$obj = new LendoDezenaDeMilhar();
echo "<h4>Classe foi instanciada, carregando metodo(s)...</h4>";
echo "<h4>Didigite no endereço do URL do browser um valor para a chave (num), que seja menor que 99999</h4>";
//verifica as funções da classe
echo "<table>";
echo "<tr><th>Metodo/function</th><th>Chave/parametro</th><th>return/action</th></tr>";

$num = $_GET['num'];
if($num < 100000){
    echo "<tr><td>centena    </td><td> $num  </td><td>".$obj->dezenaDemilhar($num) ."</td></tr>";
}else{
    echo "<tr><td>dezena    </td><td> $num  </td><td> Valor Incorreto </td></tr>";
}
echo "</table>";
echo "<br> <a href='index.html'>Voltar a lista de teste</a>";
?>

<link rel="stylesheet" href="estilo.css">