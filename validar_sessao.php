<?php

// inicializar a sessão.
session_start();


if ( $_SESSION["autenticado"]  )
{

	echo "usuário autenticado...";

}
else
{
	echo "usuário inválido...";
}

// eliminar sessão.
unset($_SESSION["autenticado"]);

?>