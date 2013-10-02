
<?

class User
{
	private $idUser;
	private $name;
	private $login;
	private $pass;
	private $email;
	private $url_photo;

	public function __construct($idUser, $name, $login, $pass, $email, $url_photo)
	{
		$this->idUser = $idUser;
		$this->name = $name; 
		$this->login = $login;
		$this->pass = $pass;
		$this->email = $email;
		$this->url_photo = $url_photo;
	}

	public function getIdUser()
	{
		return $this->idUser;
	}

	public function setIdUser($idUser)
	{
		$this->idUser = $idUser;
		return $this;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	public function getLogin()
	{
		return $this->login;
	}

	public function setLogin($login)
	{
		$this->login = $login;
		return $this;
	}

	public function getPass()
	{
		return $this->pass;
	}

	public function setPass($pass)
	{
		$this->pass = $pass;
		return $this;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

	public function getUrl()
	{
		return $this->url_photo;
	}

	public function setUrl($url_photo)
	{
		$this->url_photo = $url_photo;
		return $this;
	}

}