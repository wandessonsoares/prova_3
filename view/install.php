<?
	$pdo = new PDO('mysql:host=127.0.0.1', 'root', '');
	$result = $pdo->exec(file_get_contents("usersimple.sql"));
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuários</title>
</head>
<body>
	<h1>Criação do Banco</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, consequuntur, aliquam, ducimus eveniet consequatur pariatur harum veritatis tempore facere nam cumque molestias delectus modi ad vero debitis quibusdam recusandae voluptatem.</p>
</body>
</html>