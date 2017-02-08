<?php

setcookie("imc",calc_IMC(103.9, 1.82),time()+3600);  // com tempo

setcookie("imc",calc_IMC(103.9, 1.82));  // somente na sessao

/*
implementando uma função em PHP

EX.: Calcular o IMC

Formula: PESO / ( ALTURA ^ 2 );

*/

function calc_IMC($p_Peso, $p_Altura)
{

	$fator_IMC = $p_Peso/($p_Altura**2);
	$ideal_IMC = 26.4*($p_Altura**2);

	if ( $fator_IMC < 20.7  )
	{
		return("Voce esta abaixo do seu peso ideal: IMC = " . $fator_IMC . "<br />Seu Peso Ideal e: " . $ideal_IMC . "kg");
	}
	elseif ( $fator_IMC>=20.7 && $fator_IMC<=26.4  )
	{
		return("Voce esta com o seu peso ideal: IMC = " . $fator_IMC . "<br />Seu Peso Ideal e: " . $ideal_IMC . "Kg.");
	}
	elseif ( $fator_IMC>=26.4 && $fator_IMC<=27.8  )
	{
		return("Voce marginalmente com o seu peso acima: IMC = " . $fator_IMC . "<br />Seu Peso Ideal e: " . $ideal_IMC . "Kg.");
	}
	elseif ( $fator_IMC>=27.8 && $fator_IMC<=31.1  )
	{
		return("Voce ACIMA do seu peso : IMC = " . $fator_IMC . "<br />Seu Peso Ideal e: " . $ideal_IMC . "Kg.");
	}

	else
	{
		return("Voce esta ACIMA do seu peso ideal: IMC = " . $fator_IMC . "<br />Seu Peso Ideal e: " . $ideal_IMC . "Kg.");
	}

}

/*echo calc_IMC(93, 1.82) . "<br />";
echo calc_IMC(103.9, 1.82) . "<br />";*/

echo $_COOKIE["imc"];

?>