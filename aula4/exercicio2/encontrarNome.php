<?php 

$encontraNome = $_REQUEST['nome'];
$nomes = ["Ana", "Denilson","Pedro", "Dara", "Tainá"];

function pesquisarNome($listaNomes, $nomeParaBuscar){
    foreach ($listaNomes as $nome) {
        
        if ($nome === $nomeParaBuscar) {
            return $nome;
        }
    }
    
    return null;
}

$resultado1 = pesquisarNome($nomes, $encontraNome);

  

?>