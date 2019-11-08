<?php
include "../model/LendoUnidade.php";

echo "<h2>Teste da classe LendoUnidade</h2>";
echo "<h4>URL: /model/LendoUnidade.php</h4>";

//instancia a classe
$obj = new LendoUnidade();
echo "<h4>Classe foi instanciada, carregando metodo(s)...</h4>";

//verifica as funções da classe
echo "<table>";
echo "<tr><th>Metodo/function</th><th>Chave/parametro</th><th>return/action</th></tr>";
echo "<h4>Didigite no endereço do URL do browser um valor para a chave (num), que esteja entre 0 e 9</h4>";

/*Como esta classe tem acesso simples ao array, optou por somente diminuir o valor 
* para corresponde com as respctivas 'chaves'
*/
$num = $_GET['num'];
if($num > -1 && $num < 10){
    echo "<tr><td>unidade    </td><td> $num </td><td>".$obj->unidade($num) ."</td></tr>";
}else{
    echo "<tr><td>dezena    </td><td> $num  </td><td> Valor Incorreto </td></tr>";
}
echo "</table>";
echo "<br> <a href='index.html'>Voltar a lista de teste</a>";
?>

<link rel="stylesheet" href="estilo.css">