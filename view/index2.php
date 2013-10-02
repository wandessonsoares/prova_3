<?
	require_once '../model/userCRUD.class.php';

	$userCRUD = new UserCRUD();
	$users = $userCRUD->readAll();
 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
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
		button{
			float:left;
		}
		.novo{
			margin-left: 750px;
		}
		.deslogar{
			margin-left: 30px;
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

	<? foreach ($users as $user) { ?>

		<div class="user">
			<a href="profile.php?id=<?=$user->getIdUser()?>">
	        	<img class="img-polaroid"  alt="" />
	        </a>
			<h4><?= $user->getName() ?></h4>
			<a href="edit.php?id=<?=$user->getIdUser()?>"> <i class="icon-edit"></i> </a>
			<a href="delete.php?id=<?=$user->getIdUser()?>"> <i class="icon-remove-sign"></i> </a>
		</div>

	<? } ?>

	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>