<?php
// Função para calcular e gravar a tabuada
function cal_tabuada($numero) {
    if ($numero > 0 && $numero <= 10) {
        // Abre o arquivo em modo escrita ("w" sobrescreve sempre)
        $arquivo = fopen("tabuada.txt", "w");

        // Gera a tabuada e grava no arquivo
        for ($n = 1; $n <= 10; $n++) {
            $linha = "$n x $numero = " . ($n * $numero) . "\n";
            fwrite($arquivo, $linha);
        }

        fclose($arquivo);

        // Lê o arquivo e mostra na tela
        $conteudo = file_get_contents("tabuada.txt");
        echo nl2br($conteudo); // nl2br = coloca <br> nos \n
    } else {
        echo "Digite um número entre 1 e 10";
    }
}

// Pega o número do formulário (campo chamado 'fator')
$num = $_REQUEST['fator'];

// Chama a função
cal_tabuada($num);
?>
