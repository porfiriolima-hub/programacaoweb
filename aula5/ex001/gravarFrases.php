<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe as frases enviadas pelo formulário
    $frases = $_POST['frases']; // como "frases[]" no HTML vira um array

    // Abre (ou cria) o arquivo em modo escrita "w"
    // Se já existir, apaga o conteúdo antigo
    $arquivo = fopen("frases.txt", "w");

    // Percorre o array de frases e grava cada uma em uma linha
    foreach ($frases as $linha) {
        fwrite($arquivo, $linha . "\n");
    }

    // Fecha o arquivo
    fclose($arquivo);

    echo "As frases foram gravadas no arquivo <b>frases.txt</b> com sucesso!<br><br>";

    // Opcional: mostra um link para voltar ou ler o arquivo
    echo "<a href='index.html'>Voltar ao formulário</a> | ";
    echo "<a href='ler_frases.php'>Ler frases gravadas</a>";
} else {
    echo "Acesso inválido. Preencha o formulário primeiro.";
}
?>
