<?php 
//variaveis do formulario

$aluno = $_REQUEST['nome'];
$disciplina = $_REQUEST['disciplina'];
$nota1 = $_REQUEST['nota1'];
$nota2 = $_REQUEST['nota2'];
$nota3 = $_REQUEST['nota3'];

//criar a função
function calcula_media($n1, $n2, $n3){
  $media = ($n1 +$n2 + $n3)/3;
  return $media;
}

//execultando a função (variaveis do formulário)
$media = calcula_media($nota1, $nota2, $nota3);
echo"A média do aluno <b>$aluno:tem média $media</b> na disciplina: $disciplina"
?>