<?php 
$aluno = $_REQUEST["nome"];
$nota1 = $_REQUEST["nota1"];
$nota2 = $_REQUEST["nota2"];

$media = ($nota1 + $nota2)/2;
echo"O aluno $aluno ficou com $media de média.";
?>