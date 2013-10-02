
<?
	require_once "user.class.php";
	/**
	* 
	*/
	class UserCRUD
	{
		private $pdo;

		function __construct()
		{
			$this->pdo = new PDO('mysql:dbname=usersimple;host=127.0.0.1', 'root', '');
		}

		function create($user)
		{
			$this->pdo->query("INSERT INTO `user` VALUES (null, '{$user->getName()}', '{$user->getLogin()}', '{$user->getPass()}', '{$user->getEmail()}', '{$user->getUrl()}')");
		}

		function readAll()
		{
			$pdoStmt = $this->pdo->query("SELECT * FROM `user`");
			$usersArray = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);
			$users = array();
			foreach ($usersArray as $userArray) {
				extract($userArray);
				 $users[] = new User($idUser, $name, $login, $pass, $email, $urlphoto);
			}
			return $users;
		}

		function readById($id)
		{
			$pdoStmt = $this->pdo->query("SELECT * FROM `user` WHERE `idUser` = '$id'");
			$user = $pdoStmt->fetch(); 
			return $user;
			/*extract($userArray);
			return new User($idUser, $name, $login, $pass, $email, $url_photo);*/
		}

		function delete($id){
			$this->pdo->query("DELETE FROM `user` WHERE `idUser` = '$id'");
		}

		function edit($id, $user){
			$this->pdo->query("UPDATE `user` SET `name`='{$user['name']}',`login`='{$user['login']}',`pass`='{$user['pass']}',`email`='{$user['email']}',`urlphoto`={$user['url_photo']} WHERE `idUser` = '$id'");
		}
	}
?>