<?php 
	if(!defined('KEY')){
		header("HTTP/1.1 404 Not Found");
		exit(file_get_contents('../../404.html'));
	}

	if(!empty($_REQUEST['a_login']) and !empty($_REQUEST['a_password']) and isset($_REQUEST['submit']))
	{
		$login = $_REQUEST['a_login'];
		$password = $_REQUEST['a_password'];

		$result = mysqli_query($link, "SELECT * FROM users WHERE login='$login'") or die (mysqli_error($link));

		$user = mysqli_fetch_assoc($result);

		if(!empty($user))
		{
			$salt = $user['salt'];
			$saltedPassword = generateSaltedPassword($login, $password, $salt);

			if($user['password'] == $saltedPassword)
			{
				$_SESSION['auth'] = true;
				$_SESSION['id'] = $user['id'];
				$_SESSION['login'] = $user['login'];

				header('Location:'. HOST .'?mode=auth');
				exit;

				if(!empty($_REQUEST['remember']) and $_REQUEST['remember'] == 1)
				{
					$key = generateSalt($login, $password, $salt);

					setcookie('login', $user['login'], time()+60*60*24*30);
					setcookie('key', $key, time()+60*60*24*30);
					setcookie('datetime', date('Y-m-d H:i:s'), time()+60*60*24*30);

					$query = "UPDATE users SET cookie='$key' WHERE login='$login'";
					mysqli_query($link, $query) or die(mysqli_error($link));
				}
			}
			else
			{
				echo "Неправильный логин или пароль!";
			}
		}
		else
		{
			echo "Неправильный логин или пароль!";
		}
	}else
	{
		echo "Введены не все поля!";
	}

	
?>