<?php
include "../model/LendoCasaDosDez.php";

echo "<h2>Teste da classe LendoCasaDosDez</h2>";
echo "<h4>URL: /model/LendoCasaDosDez.php</h4>";

//instancia a classe
$obj = new LendoCasaDosDez();
echo "<h4>Classe foi instanciada, carregando metodo(s)...</h4>";
echo "<h4>Didigite no endereço do URL do browser um valor para a chave (num), que esteja abaixo de 19</h4>";
//verifica as funções da classe
echo "<table>";
echo "<tr><th>Metodo/function</th><th>Chave/parametro</th><th>return/action</th></tr>";

/*Como esta classe tem acesso simples ao array, optou por somente diminuir o valor 
* para corresponde com as respctivas 'chaves'
*/
$num = $_GET['num'];
if($num < 20){
    echo "<tr><td>casaDosDez    </td><td> $num </td><td>".$obj->casaDosDez($num) ."</td></tr>";
}else{
    echo "<tr><td>dezena    </td><td> $num  </td><td> Valor Incorreto </td></tr>";
}
echo "</table>";
echo "<br> <a href='index.html'>Voltar a lista de teste</a>";
?>

<link rel="stylesheet" href="estilo.css">