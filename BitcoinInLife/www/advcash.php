<?php
	include('php/model.php');


	if(!(isset($_COOKIE['login'])))
		header('Location: ../error.html');

	if(isset($_COOKIE['login']) && ($_COOKIE['login'] == 'admin'))
		header('Location: admin.php');

	session_start();
	$login = '\''.$_COOKIE['login'].'\'';
	$id = '\''.$_COOKIE['id'].'\'';

	startup();

	// Если сессия закрыта, возобновляем данные о пользователе.
	if(!isset($_SESSION['email'])){
		$q = mysql_query("SELECT * FROM users WHERE login = $login");
		if ($q != null) {
			while($row = mysql_fetch_assoc($q)){
				$_SESSION['surname'] = $row['surname'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['patronymic'] = $row['patronymic'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['skype'] = $row['skype'];
				$_SESSION['advcash'] = $row['advcash'];
				$_SESSION['balance'] = $row['balance'];
				// echo "1";
			};
		} else
			header('Location: ../error.html');

		$z = mysql_query("SELECT * FROM tables WHERE id = $id");
		if($z != NULL){
			while($row = mysql_fetch_assoc($z)){
				$_SESSION['start'] = $row['start'];
				$_SESSION['main'] = $row['main'];
				$_SESSION['leader'] = $row['leader'];
				$_SESSION['vip'] = $row['vip'];
				$_SESSION['1nd'] = $row['1nd'];
				$_SESSION['2nd'] = $row['2nd'];
			};
		};
	} else {
		$q = mysql_query("SELECT * FROM users WHERE login = $login");
		if ($q != null) {
			while($row = mysql_fetch_assoc($q)){
				$_SESSION['balance'] = $row['balance'];
			};
		}
	};
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bitcoin in Life</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/account.css">
	<link rel="stylesheet" type="text/css" href="css/advcash.css">

	<script src="js/jquery-1.11.0.js"></script>
	<script src="js/clipboard.min.js"></script>
</head>
<body>

	<div id="page">
		<div id="header">
			<div id="logo">
				<a href="index.php">
					<img src="img/logo.png" width="400px">
				</a>
				<div id="text_realty">
					Недвижимость
				</div>
			</div>

			<ul id="main_menu">
				<li>
					<a href="index.php">Главная</a>
				</li>
				<li>
					<a href="about.php">О нас</a>
				</li>
				<li>
					<a href="documents.php">Документы</a>
				</li>
				<li>
					<a href="#">Новости</a>
				</li>
				<li>
					<a href="contacts.php">Контакты</a>
				</li>
			</ul>

			<div id="div_account">
				<a href="account.php" id="account"><? echo $_COOKIE['login']; ?></a>
			</div>
		</div>

		<div id="left_side_bar">
			<h2 align="center" id="text_account">Аккаунт</h2>
			<div id="user">
				Логин: <b><? echo $_COOKIE['login']; ?></b> <br>
				Баланс: <b><qwe style="font-family: times new roman;">$</qwe><? echo $_SESSION['balance']; ?></b>
			</div>
			<a href="input.money.php" id="replenish">Пополнить баланс</a> <br>
			<a href="exit.php" id="exit">Выйти</a>

			<h3 align="center">Личная ссылка</h3>


			<div id="link" data-clipboard-target="#link"><? echo "bitcoininlife.ru?link=".$_COOKIE['login']; ?></div>
				<!-- bitcoininlife.ru?link=qwertyuiopas2017 -->
			<script>
				new Clipboard('#link');
			</script>

			<p id="text_click">
				Нажмите для копирования <br>
				<!-- <qwe style="font-size: 12px;">
					(Будет доступна после активации стола)
				</qwe> -->
			</p>

			<a href="gold.ring.10.php" class="tables" id="link_gold_ring">
				Gold Ring
			</a>

			<?
				$txt_start = '';
				$txt_main = '';
				$txt_leader = '';
				$txt_vip = '';
				$txt_1nd = '';
				$txt_2nd = '';

				// if($_SESSION['start'] == 1)
				$txt_start = "href=\"start.php\" style=\"cursor: pointer;\"";

				if($_SESSION['main'] == 1)
					$txt_main = "href=\"main.php\" style=\"cursor: pointer;\"";
				if($_SESSION['leader'] == 1)
					$txt_leader = "href=\"leader.php\" style=\"cursor: pointer;\"";
				if($_SESSION['vip'] == 1)
					$txt_vip = "href=\"vip.php\" style=\"cursor: pointer;\"";
				if($_SESSION['1nd'] == 1)
					$txt_1nd = "href=\"1nd.php\" style=\"cursor: pointer;\"";
				if($_SESSION['2nd'] == 1)
					$txt_2nd = "href=\"2nd.php\" style=\"cursor: pointer;\"";
			?>
			<a <? echo $txt_start; ?> class="tables" id="link_start">
				Старт
			</a>
			<a <? echo $txt_main; ?> class="tables">
				Основной
			</a>
			<a <? echo $txt_leader; ?> class="tables">
				Лидерский
			</a>
			<a <? echo $txt_vip; ?> class="tables">
				ВИП
			</a>
			<a <? echo $txt_1nd; ?> class="tables">
				1ND
			</a>
			<a <? echo $txt_2nd; ?> class="tables">
				2ND
			</a>
		</div>

		<div id="content">
			<h2 align="center" style="margin-top: 30px; font-size: 28px;">Advanced Cash</h2>

			<p id="info">
				Для оплаты укажите сумму и нажмите "оплатить". <br>
				После этого Вы будете перенаправлены в личный кабинет Advanced Cash.
			</p>

			<form method="POST" action="https://wallet.advcash.com/sci/">
				<input type="hidden" name="ac_account_email" value="aly19741974@gmail.com">
				<input type="hidden" name="ac_sci_name" value="bitcoininlife">
				<input type="text" name="ac_amount" value="" id="count" placeholder="Сумма, $">
				<input type="hidden" name="ac_currency" value="USD">
				<input type="hidden" name="ac_order_id" value="<?=time();?>">

				<input type="hidden" name="ac_sign" value="5ee5645a16c6b3e1ffc34452633b0a087c33d3e78e9c71d0e53c73fc5f7c46f1">
				<!-- Optional Fields -->
		        <input type="hidden" name="ac_success_url" value="https://www.bitcoininlife.ru/success.php" />
		        <input type="hidden" name="ac_success_url_method" value="POST" />
		        <input type="hidden" name="ac_fail_url" value="https://www.bitcoininlife.ru/fail.php" />
		        <input type="hidden" name="ac_fail_url_method" value="POST" />
		        <input type="hidden" name="ac_status_url" value="https://www.bitcoininlife.ru/advcash.php" />
		        <input type="hidden" name="ac_status_url_method" value="POST" />

				<!-- Merchant custom fields -->
				<input type="hidden" name="operation_id" value="<?=time();?>">
				<input type="hidden" name="login" value="<? echo $_COOKIE['login']; ?>">
				<input type="submit" value="Оплатить" id="pay">
			</form>

		</div>

		<div style="height: 900px;"></div>

		<div id="footer">
			<p>
				&copy; Bitcoin in Life. Все права защищены.
			</p>
		</div>
	</div>
</body>
</html>