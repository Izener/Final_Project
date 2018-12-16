<? php
	$user = $_POST['user'];
	$password = $_POST['psw'];
	$email = $_POST['email'];

	//connect with MySQL
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link, 'utf8'); //thi language
	$sql = "use userdb";
	$result = mysqli_query($link, $sql);

	//check error
	function Emailcheck($Email)
	{
		if (ereg ("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@" .
			"[^\.\$_\'\"|[:space:]<>].+\..+[^\.\$_\'\"<>]$", $Email))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	if (Emailcheck($email)) //check e-mail
	{
		$encrypt_password=shal($psw);
		//new record
		$sql = "Insert into usertbl(user, email, password)"."value('$user', '$email', '$encrypt_password');";
		$result = mysqli_query($link, $sql);
		if ($result)
		{
			echo "Add user succesfully";
		}
		else
		{
			echo "Error, Please check data again";
		}
	}
	else  //wrong mail
	{
		echo "Invalid E-mail address";
	}
?>