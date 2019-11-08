<?php
include "../model/LendoDezena.php";

echo "<h2>Teste da classe LendoDezena</h2>";
echo "<h4>URL: /model/LendoDezena.php</h4>";

//instancia a classe
$obj = new LendoDezena();
echo "<h4>Classe foi instanciada, carregando metodo(s)...</h4>";
echo "<h4>Didigite no endereço do URL do browser um valor para a chave (num), que esteja abaixo de 99</h4>";

//verifica as funções da classe
echo "<table>";
echo "<tr><th>Metodo/function</th><th>Chave/parametro</th><th>return/action</th></tr>";

$num = $_GET['num'];
if($num < 100){
    echo "<tr><td>dezena    </td><td> $num  </td><td>".$obj->dezena($num) ."</td></tr>";
}else{
    echo "<tr><td>dezena    </td><td> $num  </td><td> Valor Incorreto </td></tr>";
}


echo "</table>";
echo "<br> <a href='index.html'>Voltar a lista de teste</a>";
?>

<link rel="stylesheet" href="estilo.css">