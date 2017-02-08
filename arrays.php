<?php

/*
exemplos de utilização de array

*/

// primeira forma
$nome[0] = "carlos";
$nome[1] = "janaina";
$nome[2] = "duda";


echo "<br />Posição 0 -> ".$nome[0];
echo "<br />Posição 1 -> ".$nome[1];
echo "<br />Posição 2 -> ".$nome[2];

// segunda forma
// posicoes   0         1                2
$nome = array("KADU172","JANAINA.AMANDA","DUDINHA");

echo "<br />Posição 0 -> ".$nome[0];
echo "<br />Posição 1 -> ".$nome[1];
echo "<br />Posição 2 -> ".$nome[2];


// terceira forma
$nome = array(1 => "KADU172", 0 => "JANAINA", 2 => "DUDINHA");

echo "<br />Posição 0 -> ".$nome[0];
echo "<br />Posição 1 -> ".$nome[1];
echo "<br />Posição 2 -> ".$nome[2];


// quarta forma
$nome = array("PAI" => "KADU172", "MAE" => "JANAINA", "FILHA" => "DUDINHA");

echo "<br />Pai -> ".$nome["PAI"];
echo "<br />Mae -> ".$nome["MAE"];
echo "<br />Filha -> ".$nome["FILHA"];


?>
