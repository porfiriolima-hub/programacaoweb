<?php 

$arquivo = fopen("teste.txt", "r");

while(!feof($arquivo)){
  $linha = fgets($arquivo);
  echo"$linha <br>";
}


?>