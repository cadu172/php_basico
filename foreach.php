<?php


// quarta forma
$nome = array("PAI" => "KADU172", "MAE" => "JANAINA", "FILHA" => "DUDINHA");

/*echo "<br />Pai -> ".$nome[0];
echo "<br />Mae -> ".$nome[1];
echo "<br />Filha -> ".$nome[2];*/


foreach ($nome as $key => $value) {
	echo "<br /> ".$key." : ".$value;
	# code...
}



?>