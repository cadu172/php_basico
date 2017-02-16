<?php


/*

	Imprimir a tabuada de 1 ate 50

*/


for (  $i = 1; $i <= 50; $i++ )
{

	echo "<br >TABUADA DO ".$i." <br /> ";

	for ( $x = 1; $x <= 10; $x++  )
	{

		echo " ".$i." x ".$x." = ".($i*$x)." <br />";

	}

}



/*
	obs.:


	o comando :


	for(;;)
	{
		//code		
	}

	executa um loop nfinito, para interromper use o comando "break;"


	for(;;)
	{
		break;
	}


	código alterado para commit local e commit no github

*/


?>