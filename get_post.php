<?

/*
Obtem os dados enviados pelo metodo POST
*/
$nomeCli  = $_POST["NOM_CLI"];
$emailCli = $_POST["EMAIL_CLI"];

echo("Nome do Cliente: ".$nomeCli."<br/>E-Mail: ".$emailCli);

/*
Obtem os dados enviados pelo metodo GET
*/


?>

<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de utilização de GET/POST</title>
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