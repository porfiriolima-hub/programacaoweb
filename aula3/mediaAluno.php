<?php 
$aluno = $_REQUEST['nome'];
$nota1 = $_REQUEST['nota1'];
$nota2 = $_REQUEST['nota2'];
$disciplina = $_REQUEST['disciplina'];

$media = ($nota1 + $nota2)/2;
echo"<h1>Resultado Final:</h1>";
echo"O aluno $aluno ficou com $media de média na disciplina: $disciplina.";
?>