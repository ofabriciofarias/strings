<?php
/*

include tenta funcionar mesmo que o arquivo não exista,
o include é mais completo. Procura na pasta e depois procura
no diretório padrão, familiar ao C.

require obriga a existência do arquivo
e que funcione de forma correta
*/
//include "inc/exemplo04.php";
require_once "inc/exemplo04.php";
require_once "inc/exemplo04.php";

$a = 10;
$b = 25;

$resultado = somar($a, $b);

echo "<br>";

echo $resultado;

?>