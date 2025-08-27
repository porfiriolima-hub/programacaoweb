<?php 
$nome = $_REQUEST['nome'];
$vendas = $_REQUEST['vendas'];
$salarioF = $_REQUEST['salarioF'];

$comiss = $vendas * 0.04;
$salarioT = $comiss + $salarioF;

echo"O funcionário $nome, recebeu R$ $comiss e seu salário fixo é R$ $salarioF ficando com um total de R$ $salarioT."
?>