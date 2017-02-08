<?php


$idade = 22;


if ( $idade > 35  )
{
	echo "Tem até 35 anos...";
}
else
{
	
	if (  $idade == 35 )
	{
		echo "Tem 35 anos...";
	}
	elseif ( $idade < 35) 
	{
		echo "Menor que 35 anos...";
	}
	else
	{
		echo "Else forever...";
	}

}


?>