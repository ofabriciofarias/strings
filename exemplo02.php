<?php

$nome = "fabricio farias";

echo strtoupper($nome);

$nome2 = "FABRICIO FARIAS";

echo "<br>";

echo strtolower($nome2);

echo "<br>";

echo ucwords($nome);

echo "<br>";

echo ucfirst($nome);

//Outro exemplo
$laboratorio = "LABEX";

$laboratorio = str_replace("A", "4", $laboratorio);
$laboratorio = str_replace("E", "3", $laboratorio);

echo "<br>";

echo $laboratorio;

?>