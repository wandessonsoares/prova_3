<?
	require_once '../model/userCRUD.class.php';
	require_once '../model/user.class.php';

	$userCrud = new UserCRUD();
	extract($_GET);

	if(isset($submit)){
		$user = new User(null, $name, $login, $pass, $email, $url_photo);
		$userCrud->create($user);
		header("Location: index2.php");
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cradastro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<style>
		body{
			background: #8F9294;
		}
		#content {
			font-family: helvetica, sans-serif;
			text-align: center;
			width: 30%;
			margin: auto;
			border: 1px solid black;
			border-radius: 10px;
			background: #CFD2D4;
		}
		#content input:not([type=submit]), #content textarea {
			width:90%;
		}
		p{
			text-align: right;
			color: white;
			margin-top: 10px;
		}
		button{
			float:left;
		}
		.deslogar{
			margin-left: 900px;
		}
	</style>
</head>
<body>
	
	<div class="navbar navbar-inverse">
  		<div class="navbar-inner">
    		<a class="brand" href="#">Prova 3</a>
    		<ul class="nav">
      			<li class="active"><a href="index2.php">Home</a></li>
      			<li><a href="#">Login</a></li>
				<li class="deslogar">
   					<form action="index.php?logout=1" method="POST">
						<button type="submit" class="btn btn-danger">Deslogar</button>
					</form>
				</li>
    		</ul>
    		<p>Usuário: Admin</p>
  		</div>
	</div>

	<div id="content">
		<h2>Cadastrar Usuário</h2>
		<form action="">
			<fieldset>
				<input type="text" name="name" placeholder="Digite seu nome">
				<input type="text" name="login" placeholder="Digite seu login">
				<input type="password" name="pass" placeholder="Senha">
				<input type="email" name="email" placeholder="Digite seu email">
				<input type="text" name="url_photo" placeholder="URL da foto">
				<input class="btn btn-primary" type="submit" name="submit" value="Cadastrar">
			</fieldset>
		</form>
	</div>

	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>