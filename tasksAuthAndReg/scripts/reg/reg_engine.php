<?php 
	if(!defined('KEY')){
		header("HTTP/1.1 404 Not Found");
		exit(file_get_contents('../../404.html'));
	}
	if(isset($_REQUEST['submit']) and !empty($_REQUEST['login']) and !empty($_REQUEST['password']) and !empty($_REQUEST['password_confirm']) and !empty($_REQUEST['name']) and !empty($_REQUEST['age']) and !empty($_REQUEST['email']) and checkLenght($_REQUEST['password_confirm'], 6, 12) and checkLenght($_REQUEST['password'], 6, 12) and !empty($_REQUEST['lang']))
	{
		$login = $_REQUEST['login'];
		$password = $_REQUEST['password'];
		$password_confirm = $_REQUEST['password_confirm'];

		$name = $_REQUEST['name'];
		$surname = $_REQUEST['surname'];
		$age = $_REQUEST['age'];
		$email = $_REQUEST['email'];
		$city = $_REQUEST['city'];
		$lang = $_REQUEST['lang'];
		$dt = date('Y-m-d H:i:s');

		if($password == $password_confirm){
			$is_login_free = mysqli_query($link, "SELECT * FROM users WHERE login='$login'") or die(mysqli_error($link));
			if(mysqli_num_rows($is_login_free) == 0){
				$salt = generateSalt();
				$verification_code = md5($salt);
				$saltedPassword = generateSaltedPassword($login, $password, $salt);
				mysqli_query($link, "INSERT INTO users SET login='".$login."', password='".$saltedPassword."', name='".$name."', surname='".$surname."', age='".$age."', email='".$email."', city='".$city."', lang='".$lang."', dt='".$dt."', salt='".$salt."', verification_code='".$verification_code."'") or die (mysqli_error($link)." INSERT REGISTATION");
				
				// Письмо для активации
				$url = HOST.'tasksAuthAndReg/index.php?mode=reg&login='.$login.'&verification_code='.$verification_code;
				$to = $_REQUEST['email'];
				$title = 'Регистрация на http://social-net.ru';
				$message = 'Для активации Вашего аккаунта<br> пройдите по ссылке <a href="'.$url.'">'.$url.'</a>';

				mail($to, MAIL_AUTOR, $title, $message);

				echo "Регистрация прошла успешно!";

				// Сброс параметров
				header('Location:'.HOST.'tasksAuthAndReg/index.php?mode=reg&status=ok');
				exit;
			}else{
				echo "Данный логин уже занят кем-то!";
			}
		}else{
			echo "Пароли не совпадают!";
		}
	}else if(isset($_REQUEST['submit'])){
		echo "Обязательные и дополнительные<br> поля не заполнены, или заполнены с ошибкой.";
	}
	//Удачная регистрация
	if(isset($_GET['status']) and $_GET['status'] == 'ok'){
		echo "<b>Вы успешно зарегистрировались! <br>Письмо с активацией отправленно на ваш e-mail!</b>";
	}

	if(isset($_GET['verification_code']) and isset($_GET['login'])){
		$login = $_GET['login'];
		$verification_code = $_GET['verification_code'];
		$result = mysqli_query($link, "SELECT * FROM users WHERE verification_code='$verification_code' and login='$login'") or die(mysqli_error($link));

		if(mysqli_num_rows($result) == 0){
			echo "Ключ активации неверен!";
		}else{
			$row = mysqli_fetch_assoc($result);
			$email = $row['email'];

			mysqli_query($link, "UPDATE users SET verification = '1' WHERE login='$login'");

			$title = "Ваш аккаут на http://social-net.ru Успешно активирован!";
			$message = "Поздравляю вас, ваш аккаут на http://social-net.ru успешно активирован!";
			mail($email, MAIL_AUTOR, $title, $message);

			header('Location:'.HOST.'tasksAuthAndReg/index.php?mode=reg&active=ok');
			exit;
		}
	}

	if(isset($_GET['active']) and $_GET['active'] == 'ok'){
		echo "<b>Ваш аккаут на <br> http://social-net.ru <br> Успешно активирован!</b>";
	}
?>