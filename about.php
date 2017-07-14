

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Рустам</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<?php
	$userName = 'Рустам';
	$age = '24';
	$email = 'r-guseynov@gmail.com';
	$city = 'Санкт-Петербург';
	$about = 'Тренер по армспорту';
	echo $userName;
	?>

	<h1>Страница пользователя Рустам</h1>	
	<dl>
		<dt>Имя</dt>
		<dd><?= $userName ?></dd>
	</dl>
	<dl>
		<dt>Возраст</dt>
		<dd><?= $age ?></dd>
	</dl>
	<dl>
		<dt>Адрес электронной почты</dt>
		<dd>
			<a href="mailto:r-guseynov@gmail.com"></a><?= $email ?>
		</dd>
	</dl>
	<dl>
		<dt>Город</dt>
		<dd><?= $city ?></dd>
	</dl>
	<dl>
		<dt>О себе</dt>
		<dd><?= $about ?></dd>
	</dl>	
</body>
</html>