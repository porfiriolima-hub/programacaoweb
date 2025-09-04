<?php 
function cal_tabuada($numero){
  if($numero >0 && $numero<=10){
      for($n = 1;$n<=10;$n++){
        echo"$n x $numero =" . ($n * $numero) . "<br>";
    }} 
  else{
      echo"Digite um número entre 1 e 10";
    }
  }




$num = $_REQUEST['fator'];

cal_tabuada($num)  
?>