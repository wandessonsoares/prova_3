<?
	require_once '../model/userCRUD.class.php';

	$UserCRUD = new UserCRUD();

	if (isset($_GET['id'])){
		$id = $_GET['id'];
		$user = $UserCRUD->readById($id);
	} else {
		echo 'Usuário inexistente.';
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<style>
		body{
			background: #8F9294;
		}
		img {
			width: 210px;
			height: 150px;
			border: 1px solid black;
		}
		#perfil {
			font-family: helvetica, sans-serif;
			text-align: center;
			width: 30%;
			margin: auto;
			border: 1px solid black;
			border-radius: 10px;
			background: #CFD2D4;
			padding-bottom: 10px; 
		}

	</style>
</head>
<body>

	<div class="navbar navbar-inverse">
  		<div class="navbar-inner">
    		<a class="brand" href="#">Prova 3</a>
    		<ul class="nav">
      			<li class="active"><a href="index.php">Home</a></li>
      			<li><a href="login.php">Login</a></li>
    		</ul>
  		</div>
	</div>


	<div id="perfil">
		<h2>Perfil do Usuário</h2>
		<b> Nome: </b><?= $user['name'];?><br>
		<b> Login: </b><?= $user['login']?><br>
		<b> Senha: </b><?= $user['pass'];?><br>
		<b> Email: </b><?= $user['email']?><br>
		<b> Photo_URL: </b><?= $user['urlphoto']?><br>
	</div>

	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>