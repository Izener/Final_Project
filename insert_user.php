<? php
	$user = $_POST['user'];
	$pass = $_POST['password'];
	$email = $_POST['email'];

	//connect with MySQL
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link, 'utf8'); //thi language
	$sql = "userdb";
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
		$encrypted_password=shal($password);
		//new record
		$sql = "Insert into usertbl(user, email, password)"."values('$user', '$email', '$encrypted_password');";
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