<?php
session_start();
if (isset($_POST["send"])) {
	$name = htmlspecialchars($_POST["name"]);
	$from = htmlspecialchars($_POST["from"]);
	$tell = htmlspecialchars($_POST["tell"]);
	$message = htmlspecialchars($_POST["message"]);

	$to = htmlspecialchars('mari.kurtasova@bk.ru');
	$subject = htmlspecialchars('review');


	$_SESSION["name"] = $name;
	$_SESSION["from"] = $from;
	$_SESSION["tell"] = $tell;
	$_SESSION["message"] = $message;


	$error_name = "";
	$error_from = "";
	$error_tell = "";
	$error_message = "";
	$error = false;

	if ($from == "" || !preg_match("/@/", $from)) {
		$error_from = "Введите корректный email";
		$error = true;
	}

	if (strlen($name) == 0) {
		$error_name = "Введите ваше имя";
		$error = true;
	}

	if (strlen($tell) == 0) {
		$error_tell = "Введите номер телефона";
		$error = true;
	}

	if (strlen($message) == 0) {
		$error_message = "Введите cообщение";
		$error = true;
	}

	if (!$error) {
		$subject = "=?utf-8?B?".base64_encode($subject)."?=";
		$headers = "From: $from\r\nReaply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
		mail($to, $subject, $message, $headers);
		header("Location: success.php");
		exit;

	}


}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="top"></div>

<header>
	<div id="logo">
		<h4>МАКСИМ КОРСАКОВ</h4>
		<p>Персональный коуч</p>
		<img src="icon/menu.png" class="item_hide">
	</div>
	<nav>
		<ul>
			<li><a href="#logo">Главная</a></li>
			<li><a href="#about">Обо мне</a></li>
			<li><a href="#services">Услуги</a></li>
			<li><a href="#feedback">Контакты</a></li>
		</ul>
	</nav>
</header>

<div id="banner">
	<p>УСПЕХ — ЭТО НАУКА, ЕСЛИ У ВАС ЕСТЬ УСЛОВИЯ, ВЫ ПОЛУЧИТЕ</p>
	<h1>РЕЗУЛЬТАТ</h1>
	<input type="submit" name="" value="Записаться">
</div>

<div id="about">
	<div id="inf">
		<hr>
		<h1>МАКСИМ <br>КОРСАКОВ</h1>
		<p>Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе.</p>

 		<p>Здесь будет удачно смотреться текст о вашей компании и услугах. Используйте эту возможность, чтобы выгодно представить себя и свою компанию клиентам.</p>
 		<a href="">Контакты</a>
	</div>
	<div id="img"></div>
</div>


<div id="services">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Москва')">Личностный рост</button>
  <button class="tablinks" onclick="openCity(event, 'Берлин')">Корьерный рост</button>

</div>


<div id="Москва" class="tabcontent">
	<div class="srv_11">
  		<div class="item_srv">
			<h1>Короративная жизнь</h1>
			<p>1 ч.</p>
			<p>700₽</p>
			<a href="">Записаться</a>
		</div>

		<div class="item_srv">
			<h1>Короративная жизнь</h1>
			<p>1 ч.</p>
			<p>700₽</p>
			<a href="">Записаться</a>
		</div>

		<div class="item_srv">
			<h1>Короративная жизнь</h1>
			<p>1 ч.</p>
			<p>700₽</p>
			<a href="">Записаться</a>
		</div>
	</div>
</div>

<div id="Берлин" class="tabcontent">
	<div class="srv_12">
  		<div class="item_srv">
			<h1>Личная жизнь</h1>
			<p>1 ч.</p>
			<p>700₽</p>
			<a href="">Записаться</a>
		</div>
		<div class="item_srv">
			<h1>Короративная жизнь</h1>
			<p>1 ч.</p>
			<p>700₽</p>
			<a href="">Записаться</a>
		</div>
		<div class="item_srv">
			<h1>Короративная жизнь</h1>
			<p>1 ч.</p>
			<p>700₽</p>
			<a href="">Записаться</a>
		</div>
	</div>
</div>

</div>


<div id="feedback">
	<div id="feedback_inf">
		<hr>
		<h1>СВЯЖИТЕСЬ <br> СО МНОЙ</h1>
		<p>ул. Арбат, 1a, Москва, Россия</p>
		<p>Телефон: +7(495) 000-00-00</p>
		<p>Факс: +7(945) 000-00-00</p>
		<p>info@mysite.ru</p>
		<ul>
			<li><a href=""><img src="https://static.wixstatic.com/media/c75715fd5e2f4f788c067a22b53f2277.png/v1/fill/w_25,h_25,al_c,q_85,usm_0.66_1.00_0.01/c75715fd5e2f4f788c067a22b53f2277.webp"></a></li>
			<li><a href=""><img src="https://static.wixstatic.com/media/0fdef751204647a3bbd7eaa2827ed4f9.png/v1/fill/w_25,h_25,al_c,q_85,usm_0.66_1.00_0.01/0fdef751204647a3bbd7eaa2827ed4f9.webp"></a></li>
			<li><a href=""><img src="https://static.wixstatic.com/media/c7d035ba85f6486680c2facedecdcf4d.png/v1/fill/w_25,h_25,al_c,q_85,usm_0.66_1.00_0.01/c7d035ba85f6486680c2facedecdcf4d.webp"></a></li>
			<li><a href=""><img src="https://static.wixstatic.com/media/01c3aff52f2a4dffa526d7a9843d46ea.png/v1/fill/w_25,h_25,al_c,q_85,usm_0.66_1.00_0.01/01c3aff52f2a4dffa526d7a9843d46ea.webp"></a></li>
			<li><a href=""><img src="https://static.wixstatic.com/media/78aa2057f0cb42fbbaffcbc36280a64a.png/v1/fill/w_25,h_25,al_c,q_85,usm_0.66_1.00_0.01/78aa2057f0cb42fbbaffcbc36280a64a.webp"></a></li>
		</ul>
	</div>
	<div id="feedback_form">
	
		

	<form name="fb" action="" method="post">
		<input type="text" name="name" value="<?=$_SESSION["name"]?>">
		<span style="color: red"><?=$error_name?></span>
		<input type="text" name="from" value="<?=$_SESSION["from"]?>">
		<span style="color: red"><?=$error_from?></span>
		<input type="text" name="tell" value="<?=$_SESSION["tell"]?>">
		<span style="color: red"><?=$error_tell?></span>
		<textarea name="message"><?=$_SESSION["message"]?></textarea>
		<span style="color: red"><?=$error_message?></span>
		<input type="submit" name="send" value="Отправить">
	</form>
	</div>
</div>

<footer><p>© 2020 Персональный коуч</p>
<a href="" ><img src="https://image.flaticon.com/icons/png/512/25/25223.png"></a>
</footer>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>