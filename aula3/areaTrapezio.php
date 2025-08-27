<?php 
$bmaior = $_REQUEST["bmaior"];
$bmenor = $_REQUEST["bmenor"];
$altura = $_REQUEST["altura"];

$areaTrap = ($bmaior + $bmenor)* $altura/2;

echo"A área do Trapézio é $areaTrap."
?>