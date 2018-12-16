<? php 
	$user = $_POST['user'];
	$pass = $_POST['psw'];

	//connect with mysql
	$link = mysqli_connect("localhost", "root");
	mysql_set_charset($link, 'utf8');
	$sql = "use userdb";
	$result = mysqli_query($link, $sql);
	$encrypted_mypassword=shal($psw);

	$sql = "SELECT count(*) FROM usertbl WHERE user='$user' AND ".
				"password = '$encrypted_mypassword'";
	$result=mysqli_query($link, $sql);
	$row = mysqli_fetch_row($result);
	if ($row[0] == 1)
	{
		echo "Username and Password Correct <p>";

		$sql = "SELECT * FROM usertbl WHERE user='$user' AND ".
				"password= '$ebcrypted_myoassword'";
		$result=mysqli_query($link, $sql);
		$row = mysqli_fetch_array($result);
		echo "Username: ".$row['user']."<br>";
		echo "E-mail: ".$row['email']."<br>";
	}
	else
	{
		echo "Username or Password Incorrect";
	}
?>