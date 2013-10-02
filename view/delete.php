<?
	require_once '../model/userCRUD.class.php';
	require_once '../model/user.class.php';

	if(isset($_GET['id'])){

				extract($_GET);
				$UserCRUD = new UserCRUD();
				var_dump($id);
				$UserCRUD->delete($id);
				header('Location:index2.php');
			}
?>