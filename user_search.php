<?php

if(isset($_POST['login']) || isset($_POST['register'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$searchType = $_POST['search-type'];

	$userPOST = false;
	$passPOST = false;
	$ptsPOST = false;


	require "mysql.php";
	$mysql = new Mysql();
	$mysql->connect();
	$result = $mysql->authorization($username, $password);
	if($result->num_rows > 0){
		$result = $result->fetch_assoc();
		$userPOST = $result['login'];;
		$passPOST = $result['password'];;
		$ptsPOST = $result['score'];;
	}

	// $arquivo = fopen('users.txt', 'a+');
	// if($arquivo){
	// 	rewind($arquivo);

	// 	$allUsers = '';

	// 	while(true){
	// 		$linha = fgets($arquivo);
	// 		if($linha == null) break;

	// 		$allUsers .= $linha;
	// 	}

	// 	$allUsersArr = explode('|', $allUsers);

	// 	for($i = 0; $i < sizeof($allUsersArr); $i++){
	// 		if(preg_match('/'. $username .'/', $allUsersArr[$i])){
	// 			$user = $allUsersArr[$i];
	// 			$userArr = explode(':', $user);

	// 			$userPOST = $userArr[0];

	// 			if($userArr[1] == $password){
	// 				$passPOST = $userArr[1];
	// 				$ptsPOST = $userArr[2];
	// 			}else{
	// 				break;
	// 			}
	// 		}
	// 	}
	// 	fclose($arquivo);
	// }


}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ваши сведения уже готовы!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./styles/waiting_page.css">
</head>
<body>
	<form action="<?php echo($searchType);?>.php" method="POST">

	<main id="container">
		<section class="tips-box">
			<h2 class="title">Вам любопытно, что там?</h2>

			<section class="tip">
				<section class="tip-text">
					<h4>Plants vs. Zombies: Garden Warfare 2</h4>

					<p>Компьютерная игра в жанре шутера от третьего лица. Является продолжением игры 2014 года Plants vs. Zombies: Garden Warfare. Игра была анонсирована 15 июня 2015 года на официальной конференции Electronic Arts на Electronic Entertainment Expo 2015. Релиз состоялся 23 февраля 2016 года. Игра написана на движке Frostbite 3. Вышла на Windows, Xbox One и PlayStation 4. Также, на оригинальной Plants vs. Zombies: Garden Warfare можно сохранять свой контент на Plants vs. Zombies: Garden Warfare 2.
</p>
				</section>
			</section>
			
			<section class="continue-question">
				<p>Понравилось? Надеюсь, что да. Кстати, мы ищем информацию в нашей базе данных. Проверьте результат:</p>
			</section>

			<input type="submit" name="verify" value="Проверить" class="continue-button">

		</section>
	</main>

		<input type="hidden" name="userPOST" value="<?php echo($userPOST);?>">
		<input type="hidden" name="passPOST" value="<?php echo($passPOST);?>">
		<input type="hidden" name="ptsPOST" value="<?php echo($ptsPOST);?>">

		<input type="hidden" name="ISuser" value="<?php echo($username);?>">
		<input type="hidden" name="ISpassword" value="<?php echo($password);?>">
	</form>

</body>
</html>