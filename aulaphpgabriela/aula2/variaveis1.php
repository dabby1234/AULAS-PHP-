<?php
//declaração de variaveis
$nome ="Pedro";
$numero;
$salario =1000.50;
$numeros = array (1,2,"3","texto");
$teste = true;

































//impressao com interpolação
echo "O nome é: {$nome} e o salario é: {$salario}";
//impressao com concatenação
echo "\nNome: ".$nome. "e o salario".$salario."\n";
//impressao com var_dumo()
var_dump($nome);

echo '<pre>';

print_r($numeros);

var_dump($teste);




?>