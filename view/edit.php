<?
	require_once '../model/UserCRUD.class.php';
	require_once '../model/user.class.php';

	$UserCRUD = new UserCRUD();
	$User     = $UserCRUD->readById($_GET['id']);
	$User     = new User(null, $User['name'], $User['login'], $User['pass'], $User['email'], $User['urlphoto']);

	extract($_POST);
	
	if ( isset($name) && isset($login) && isset($pass) && isset($email) && isset($url_photo)){

		$edited[] = null;

		$edited['name']      = (empty($name))      ?  $User->getName()     : $name;
		$edited['login']     = (empty($login))     ?  $User->getLogin()    : $login;
		$edited['pass']      = (empty($pass))      ?  $User->getPass()     : $pass;
		$edited['email']     = (empty($email))     ?  $User->getEmail()    : $email;
		$edited['url_photo'] = (empty($urlphoto))  ?  $User->getUrl()      : $urlphoto;

		$UserCRUD->edit($User->getIdUser(), $edited);
		header("Location:index.php");
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

	<style>
		body{
			background: #8F9294;
		}
		img {
				width: 140px;
    			height: 140px;
    			margin: 15px 0 0 63px;
			}

		.user{
			float: left;
			margin-left: 30px;
			height: 240px;
			width: 280px;
			border: 1px solid black;
			border-radius: 10px;
			background: #CFD2D4;
		}
		h4{
			text-align: center;
		}
		i{
			margin-right: 20px;
			float: right;
		}
		p{
			text-align: right;
			color: white;
			margin-top: 10px;
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
				<li class="novo">
					<form action="create.php">
						<button type="submit" class="btn btn-success">Novo Usuário</button>
					</form>
				</li>
				<li class="deslogar">
   					<form action="index.php?logout=1" method="POST">
						<button type="submit" class="btn btn-danger">Deslogar</button>
					</form>
				</li>
    		</ul>
    		<p>Usuário: Admin</p>
  		</div>
	</div>

	<form class="form-horizontal" action="" method="POST">
		<div class="control-group">
			<label class="control-label" for="inputName">Nome</label>
			<div class="controls">
				<input type="text" placeholder="<?= $User->getName() ?>"  name="name"/>
			</div>
		</div> 
		<div class="control-group">
			<label class="control-label" for="inputName">Login</label>
			<div class="controls">
				<input type="text" placeholder="<?= $User->getLogin() ?>"  name="login"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputName">Senha</label>
			<div class="controls">
				<input type="text" placeholder="<?= $User->getPass() ?>"  name="pass"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputName">Email</label>
			<div class="controls">
				<input type="text" placeholder="<?= $User->getEmail() ?>"  name="email"/>
			</div>
		</div> 
		<div class="control-group">
			<label class="control-label" for="inputName">URL Foto</label>
			<div class="controls">
				<input type="text" placeholder="<?= $User->getUrl() ?>"  name="url_photo"/>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary">Atualizar</button>
				<button type="submit" class="btn btn-danger">Cancelar</button>
			</div>
		</div>

	</form>
	
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>