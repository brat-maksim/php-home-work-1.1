<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Рустам</title>
	<style type="text/css">
		body {
        	font-family: sans-serif;  
        }
            
        dl {
        	display: table-row;
        }
            
        dt, dd {
        	display: table-cell;
            padding: 5px 10px;
        }        
	</style>
</head>
<body>

	<?php
	$userName = 'Рустам';
	$age = '24';
	$email = 'r-guseynov@gmail.com';
	$city = 'Санкт-Петербург';
	$about = 'Тренер по армспорту';
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
		<dd><a href="mailto:r-guseynov@gmail.com"><?= $email ?></a></dd>
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