<?
	$login = "admin";
	$pass = "admin";

	if ($login == $_POST['login'] && $pass == $_POST['password']){
		
		session_start();

		$_SESSION['user'] = $_POST['login'];
		$_SESSION['logged'] = 1;
	
		header("Location: logged.php");

	} else {
		echo 'Login ou Senha invalidos';
	}
?>