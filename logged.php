<?
	session_start();

	if ($_SESSION['logged'] == "1")
	{
		header('Location:index2.php');
	} else {
		echo "Erro";
	}

?>