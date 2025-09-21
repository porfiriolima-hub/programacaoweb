
<?php
$arquivo_json = "usuarios.json";

// Lê o arquivo JSON
if (file_exists($arquivo_json)) {
    $conteudo_json = file_get_contents($arquivo_json);
    $usuarios = json_decode($conteudo_json, true);

    // Se der erro na leitura ou arquivo vazio, cria lista vazia
    if ($usuarios === null || !is_array($usuarios)) {
        $usuarios = [];
    }
} else {
    $usuarios = [];
}

// Mostra os usuários cadastrados
if (count($usuarios) > 0) {
    echo "<h1>Lista de Usuários</h1>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Nome</th><th>E-mail</th></tr>";

    foreach ($usuarios as $u) {
        echo "<tr>";
        echo "<td>" . $u['id'] . "</td>";
        echo "<td>" . $u['nome'] . "</td>";
        echo "<td>" . $u['email'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Nenhum usuário cadastrado ainda.</p>";
}
?>



