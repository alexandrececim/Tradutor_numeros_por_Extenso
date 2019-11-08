<?php
include "../model/NumerosEx.php";

echo "<h2>Teste da classe NumerosExp</h2>";
echo "<h4>URL: /model/NumerosExp.php</h4>";

//instancia a classe
$obj = new NumerosEx();
echo "<h4>Classe foi instanciada, carregando metodo(s)...</h4>";
//verifica as funções da classe
echo "<table>";
echo "<tr><th>Metodo/function</th><th>Chave/parametro</th><th>return/action</th></tr>";
echo "<tr><td>Unidade    </td><td> chave[7] = </td><td>".$obj->getUnidade(7) ."</td></tr>";
echo "<tr><td>CasaDosDez </td><td> chave[1] = </td><td>".$obj->getCasaDosDez(1) ."</td></tr>";
echo "<tr><td>Dezenas    </td><td> chave[0] = </td><td>".$obj->getDezenas(0) ."</td></tr>";
echo "<tr><td>Centenas   </td><td> chave[3] = </td><td>".$obj->getCentenas(3) ."</td></tr>";
echo "</table>";

echo "<br> <a href='javascript: history.go(-1)'>Voltar a lista de teste</a>";
?>
<link rel="stylesheet" href="estilo.css">