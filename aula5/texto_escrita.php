<?php 
$arquivo = fopen("teste.txt","w");
fwrite($arquivo,"Olá Mundo");
fclose($arquivo);

?>