<?php
if (file_exists("frases.txt")) {
     //Lê todo o conteúdo do arquivo
    $conteudo = file_get_contents("frases.txt");

    // Mostra na tela
    echo "$conteudo <br>";
} else {
    echo "O arquivo frases.txt ainda não foi criado.";
}


?>
