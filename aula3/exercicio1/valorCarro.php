<?php 

$valorInicial = $_REQUEST['preco'];
if($valorInicial<40000){
  $valorFinal = $valorInicial*1.05;
}elseif($valorInicial<70000){
  $valorFinal = $valorInicial *1.10 *1.15;
}else{
  $valorFinal = $valorInicial * 1.15 * 1.20;
}
  echo"O valor final do carro é: $valorFinal";

?>