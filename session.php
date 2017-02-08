<?

/*

Implementação de utilização de Session em PHP

*/

// inicializar Sessão
// obs.: sempre a inicialização da sessão deve ser a primeira linha.
session_start();


$username = "admin";
$password = "dud4#2011";

// inicializar sessão...
$_SESSION["autenticado"] = false;


if ( ($username == "admin") && ($password=="dud4#2011") )
{
	$_SESSION["autenticado"] = true;
}


if (  $_SESSION["autenticado"] )
{

	?><a href="validar_sessao.php">Validar Usuário</a><?

}
else
{
	echo "Erro de autenticação...";

}

?>