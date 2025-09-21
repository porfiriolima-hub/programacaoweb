<?php 

$frase = $_REQUEST['addTexte'];
$arquivo = fopen("teste.txt","a");
fwrite($arquivo,"\n $frase");
fclose($arquivo);
?>