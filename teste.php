<?php  
require_once('classesPHP/conexao.php');
require_once('classesPHP/formacao.php');

$c = new Conexao;
$f = new Formacao;
$c->conectar("db_curriculo","localhost","root", "");
	if ($_POST) {
		$f->cadastrar("informatica", $_POST['anoini'], $_POST['anofim'], "etec", "sla");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="range" name="">
		<input type="submit" value="aaaaaaaaaaaaaaaaaaaaaa">
	</form>
</body>
</html>