<?php
include "../model/LendoCentena.php";

echo "<h2>Teste da classe LendoCentena</h2>";
echo "<h4>URL: /model/LendoCentena.php</h4>";

//instancia a classe
$obj = new LendoCentena();
echo "<h4>Classe foi instanciada, carregando metodo(s)...</h4>";
echo "<h4>Didigite no endereço do URL do browser um valor para a chave (num), que abaixo de 999</h4>";
//verifica as funções da classe
echo "<table>";
echo "<tr><th>Metodo/function</th><th>Chave/parametro</th><th>return/action</th></tr>";

$num = $_GET['num'];
if($num < 1000){
    echo "<tr><td>centena    </td><td> $num  </td><td>".$obj->centena($num) ."</td></tr>";
}else{
    echo "<tr><td>dezena    </td><td> $num  </td><td> Valor Incorreto </td></tr>";
}
echo "</table>";
echo "<br> <a href='index.html'>Voltar a lista de teste</a>";
?>

<link rel="stylesheet" href="estilo.css">