<?php 
  $valorAplic = $_REQUEST["valorAplicacao"];
  $tipoAplic = $_REQUEST["aplic"];

  if($tipoAplic == 1){
    $saldoAplic = $valorAplic * 1.03;
  }else{
    $saldoAplic = $valorAplic * 1.04;
  }
  echo"Seu saldo é $saldoAplic";

?>