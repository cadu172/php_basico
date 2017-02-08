<?

/*
Obtem os dados enviados pelo metodo POST
*/
$nomeCli  = $_REQUEST["NOM_CLI"];
$emailCli = $_REQUEST["EMAIL_CLI"];

echo("Nome do Cliente: ".$nomeCli."<br/>E-Mail: ".$emailCli);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de utilização de REQUEST</title>
</head>
<body>
<form action="get_post.php" method="post">
<label>Nome:</label>
<input type="text" name="NOM_CLI" value="<?=$nomeCli?>" maxlength="200">
<label>E-Mail:</label>
<input type="text" name="EMAIL_CLI" value="<?=$emailCli?>" maxlength="200">
<input type="submit" name="BtnGravar">
</form>
</body>
</html>