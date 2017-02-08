<?php

// apresenta erros de programação na tela, serve para debug, apos o uso, desabilitar
//ini_set("error_reporting", E_ALL);

/*
	Observação: no PHP não existe declaração de variaveis e não existe a tipagem, a principio toda variável é um tipo variant, tão logo associamos um valor seu tipo será definido.

*/

$nomeCliente = ""; // inicializa uma variável do tipo string
$idadeCliente = 0; // inicializa uma variavel do tipo numerica


$nomeCliente = "Carlos Eduardo dos Santos Roberto";
$idadeCliente = 35;


// imprime o valor armazenado na tela ex.: nome do cliente
echo "Nome: " . $nomeCliente;

// imprime a informação no valor numerico.
echo "<br />Idade: " . $idadeCliente;


/*
	não existe conversão de valores na concatenação valores numericos com string, o php converte automaticamente.
	
	novo testo incluido
	
	teste
	
*/


?>