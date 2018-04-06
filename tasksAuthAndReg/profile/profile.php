<?php
	define('KEY', true);

	include('../config.php');
	include('../bd/bd.php');

	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Профиль</title>
    <style>
        fieldset{width:400px;} ;
    </style>
</head>
<body>
 	<?php
		$id = isset($_REQUEST['id'])? $_REQUEST['id'] : '';
		$result = mysqli_query($link, "SELECT * FROM users WHERE id='$id'") or die(mysqli_error($link));

		$user = mysqli_fetch_assoc($result);

 		if(isset($_SESSION['auth']) and !empty($user) and $_SESSION['id'] == $_REQUEST['id'] or $_COOKIE['login'] == $user['login'] and $_COOKIE['key'] == $user['cookie']){

 	?>
        <fieldset>
            <legend>Личный кабинет.</legend>
            <p>Здравствуй, <?php echo isset($_SESSION['login'])? $_SESSION['login'] : $_COOKIE['login']; ?>.</p>
            <p>Сейчас <?php echo date('Y-m-d H:i:s'); ?>.</p>
            <p>Ваша дата последнего посещения: <?php echo isset($_COOKIE['datetime'])? $_COOKIE['datetime']: $user['dt']; ?></p>
            <p>Имя: <?php echo !empty($user['name'])? $user['name'] : ''; ?></p>
            <p>Фамилия: <?php echo !empty($user['surname'])? $user['surname'] : ''; ?></p>
            <p>Возраст: <?php echo !empty($user['age'])? $user['age'] : ''; ?></p>
            <p>Город: <?php echo !empty($user['city'])? $user['city'] : ''; ?></p>
			<p>Язык: <?php echo !empty($user['lang'])? $user['lang'] : ''; ?></p>
            <p><a href="<?php echo HOST; ?>/tasksAuthAndReg/profile/edit.php">Редактирование профиля</a></p>
            <p><a href="<?php echo HOST; ?>/tasksAuthAndReg/profile/change_password.php">Сменить пароль</a> или <a href="<?php echo HOST; ?>/tasksAuthAndReg/profile/delete_profile.php">Удалить аккаунт</a></p>
            <p><a href="logout.php">Выйти</a></p>
        </fieldset>
        <fieldset>
            <legend>Пользователи соц сети</legend>
            <?php 
                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 9;
                $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

                $query = "SELECT SQL_CALC_FOUND_ROWS id, login FROM users ORDER BY id LIMIT {$start}, {$perPage}";
                $sql = mysqli_query($link, $query) or die (mysqli_error($link));

                //Pages
                $sql2 = mysqli_query($link, "SELECT FOUND_ROWS() as total");
                $total = mysqli_fetch_assoc($sql2)['total'];
                $pages = ceil($total / $perPage);       
            ?>
            <table>
            <?php 
                while($row = mysqli_fetch_assoc($sql)){
            ?>
                <tr style="height: 40px;">
                    <td><a href="?id=<?php echo $row['id']; ?>" style="padding-right: 20px;"><?php echo $row['login'];?></a></td>
                    <td><a href="">Отправить сообщение</a></td>
                </tr>
            <?php
                }
            ?>
            </table>
            
                                        
            

            <div>
                <?php for($x = 1; $x <= $pages; $x++): ?>
                    <a href="?id=<?php echo $id; ?>&page=<?php echo $x; ?>&per-page=<?php echo $perPage;?>"<?php if($page === $x){ echo ' class="select"';}; ?>><?php echo $x; ?></a>
                <?php endfor; ?>
            </div>
        </fieldset>
	<?php 	
		}else{
			if(empty($user) and isset($_REQUEST['id'])){
				echo "Такого пользователя не существует!";
			}else{
	?>
		<fieldset>
            <legend>Профиль.</legend>
            <p>
            	Пользователь, <?php echo $user['login'] ?>.
            </p>
            <p>Сейчас <?php echo date('Y-m-d H:i:s'); ?>.</p>
            <p>Дата последнего посещения пользователя: <?php echo $user['dt']; ?></p>
            <p>Имя: <?php echo !empty($user['name'])? $user['name'] : 'не указано'; ?></p>
            <p>Фамилия: <?php echo !empty($user['surname'])? $user['surname'] : 'не указана'; ?></p>
            <p>Возраст: <?php echo !empty($user['age'])? $user['age'] : 'не указан'; ?></p>
            <p>Город: <?php echo !empty($user['city'])? $user['city'] : 'не указан'; ?></p>
			<p>Язык: <?php echo !empty($user['lang'])? $user['lang'] : 'не указан'; ?></p>
        </fieldset>
    <?php
    	}
    }
	?>
</body>
</html>