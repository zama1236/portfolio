<?php

	$warning = "";
	if (isset($_GET['uncompletedStep']))
		$warning = "<div class=\"alert alert-warning fade in\" role=\"alert\">
						<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
							<span aria-hidden=\"true\">&times;</span>
						</button>
						Заполните этот шаг
					</div>";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" href="../view/user/css/bootstrap.css">
	<link rel="stylesheet" href="../view/user/css/bootstrap-glyphicons.css">
	<link rel="stylesheet" href="../view/user/css/index.css">
	<link rel="stylesheet" href="../view/user/css/profile.css">

	<script src="../view/user/js/profile.js"></script>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->  
</head>
<body>


	<div class="container-fluid row" id="header1">
		<div class="col-lg-6 col-md-6 col-sm-5 col-xs-6">
			<p>
				<img src="../view/user/img/action.pravo.svg" height="16px">
			</p>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-7 col-xs-6">
			<div class="row">
				<div class="col-lg-4 col-md-2 col-sm-0"></div>

				<div class="col-lg-8 col-md-10 col-sm-12 col-xs-6 hidden-xs">
					<a href="#">
						Версия для коммерческих организаций
					</a>

					<a href="#">
						О системе
					</a>
				</div>

			</div>
		</div>
	</div>

			
	<div class="container-fluid row" id="header2">
		<div class="col-lg-1 col-md-0 col-sm-0 col-xs-0"></div>

		<div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">

			<div class="navbar navbar-default navbar_rating">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="navbar-header row" style="min-width: 430px;">
								<div class="col-xs-10" style="min-width: 329px;">
									<a class="navbar-brand" href="http://<?php echo HOST_NAME; ?>" id="link_logo">
										<img src="../view/user/img/logo.png">
									</a>
								</div>

								<div class="col-xs-2">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
										<span class="sr-only">Открыть навигацию</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							</div>
						</div>

						<div class="col-lg-8 col-md-8 col-sm-0">
							<div class="collapse navbar-collapse" id="responsive-menu">
								<ul class="nav navbar-nav">
									<li><a href="#">ГЛАВНАЯ</a></li>
									<li><a href="#">РЕЙТИНГ</a></li>
									<li><a href="#">КАК ИСПОЛЬЗОВАТЬ</a></li>
									<li><a href="#">КОНТАКТЫ</a></li>

									<li>
										<a href="#" id="link_account">
											<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
											ЛИЧНЫЙ КАБИНЕТ
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-0 col-md-0 col-sm-0 col-xs-0"></div>
	</div>


	<div class="container-fluid" id="purple_block">
		<div class="row">
			<div class="col-lg-3 col-md-2"></div>

			<div class="col-lg-6 col-md-8">
				<h1 class="purple_block_headers">
					Вы почти в рейтинге
				</h1>

				<p class="purple_block_headers">
					JavaScript  — мультипарадигменный язык программирования. Поддерживает объектно-ориентированный, императивный и функциональный стили. JavaScript обычно используется как встраиваемый язык для программного доступа к объектам приложений. Наиболее широкое применение находит в браузерах как язык сценариев для придания интерактивности веб-страницам
				</p>

			</div>

			<div class="col-lg-3 col-md-2"></div>
		</div>



		<div class="container-fluid">
			<div class="row">
			</div>

			<div class="row">
				<div class="col-lg-1 col-md-0 col-sm-0 col-xs-0"></div>

				<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
					<div id="container_steps">

						<table border="0" class="table">
							<tr>
								<td colspan="5" style="padding: 0 30px 0 30px;">
									<div id="horizontal_line"></div>
								</td>
							</tr>

							<tr>
								<td class="row">
									<a href="/profile">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<div class="circle circle_active">
												<span>
													1
												</span>

												<p>
													АНКЕТА
												</p>
											</div>
										</div>
									</a>

									<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="height: 52px;">
										<!-- <div class="steps_line"></div> -->
									</div>
								</td>

								<td class="row">
									<a href="/skills">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<!-- <a href="http://<?php echo HOST_NAME; ?>/skills"> -->
												<div class="circle" onmouseover="stepOver(this)" onmouseout="stepOut(this)">
													<span>
														2
													</span>

													<p style="margin-left: -2px;">
														НАВЫКИ
													</p>
												</div>
											<!-- </a> -->
										</div>
									</a>

									<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="height: 52px;">
										<!-- <div class="steps_line"></div> -->
									</div>
								</td>

								<td class="row">
									<a href="/percent">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<div class="circle" style="margin-left: 0px;" onmouseover="stepOver(this)" onmouseout="stepOut(this)">
												<span>
													3
												</span>

												<p style="margin-left: -32px;">
													РАСПРЕДЕЛЕНИЕ
												</p>
											</div>
										</div>
									</a>

									<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="height: 52px;">
										<!-- <div class="steps_line" style=""></div> -->
									</div>
								</td>

								<td class="row">
									<a href="/test">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<div class="circle" onmouseover="stepOver(this)" onmouseout="stepOut(this)">
												<span>
													4
												</span>

												<p>
													ТЕСТ
												</p>
											</div>
										</div>
									</a>

									<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="height: 52px;">
										<!-- <div class="steps_line"></div> -->
									</div>
								</td>

								<td class="row">
									<a href="/essay">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="circle" onmouseover="stepOver(this)" onmouseout="stepOut(this)">
												<span>
													5
												</span>

												<p>
													ЭССЕ
												</p>
											</div>
										</div>
									</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				
				<div class="col-lg-1 col-md-0 col-sm-0 col-xs-0"></div>
			</div>

		</div>

	</div>




	<div class="container-fluid row" id="container_main">
		<div class="col-lg-2 col-md-1 col-sm-0 col-xs-0"></div>

		<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12" id="main_block">
			<h1 align="center">
				Шаг 1 из 5. Заполните анкету
			</h1>

			<?php echo $warning; ?>

			<form id="infoFrom" method="POST" action="/server/save/info/" enctype="multipart/form-data" onsubmit="return checkInputs()">

				<?php echo $_COOKIE['bitrixId']; ?> <br>
				<input type="text" name="surname" id="input_surname" placeholder="Фамилия" value="<?php echo $userInfo['surname']; ?>"> <br>
				<input type="text" name="name" id="input_name" placeholder="Имя" value="<?php echo $userInfo['name']; ?>"> <br>
				<input type="text" name="patronymic" id="input_patronymic" placeholder="Отчество" value="<?php echo $userInfo['patronymic']; ?>"> <br>
				<input type="text" name="position" id="input_position" placeholder="Должность" value="<?php echo $userInfo['position']; ?>"> <br>
				<input type="text" name="company" id="input_company" placeholder="Компания" value="<?php echo $userInfo['company']; ?>"> <br>

				<select name="experience">
					<option value="0" <?php echo ($userInfo['experience'] == 0) ? "selected" : ""; ?>>Новичок (0-3)</option>
					<option value="1" <?php echo ($userInfo['experience'] == 1) ? "selected" : ""; ?>>Профи (3-10)</option>
					<option value="2" <?php echo ($userInfo['experience'] == 2) ? "selected" : ""; ?>>Гуру (10-бесконечность)</option>
				</select>

				<br>
				
				<select name="sector">
					<?php
						$cnt = count($listSectors);

						for ($i = 0; $i < $cnt; $i++) {
							$str = ($listSectors[$i]['id'] == $userInfo['sector_id']) ? "selected" : "";

							echo "<option value=\"".$listSectors[$i]['id']."\" $str>".$listSectors[$i]['value']."</option>";
						};
					?>
				</select>

				<br>

				<ul>
					<li>
						<input type="radio" name="head" value="1" <?php echo ($userInfo['head'] == 1) ? "checked" : ""; ?>>
						<span>
							Руководитель
						</span>
					</li>

					<li>
						<input type="radio" name="head" value="0" <?php echo ($userInfo['head'] == 0) ? "checked" : ""; ?>>
						<span>
							Подчинённый
						</span>
					</li>
				</ul>

				<br>

			 	<input type="file" name="picture" id="picture">

				<!-- <input type="submit" value="Отправить"> -->
				<button>Следующий шаг</button>

			</form>
		</div>

		<div class="col-lg-2 col-md-1 col-sm-0 col-xs-0"></div>
	</div>





	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<div style="min-height: 200px;"></div>

	<div class="row" id="footer">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<img src="../view/user/img/logo.gray.png" id="footer_logo">
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 row" id="footer_info">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				&copy; Актион кадры и право, <br>
				Медиагруппа Актион-МЦФЭР, <br>
				2007 &mdash; 2019 <br>
				<b>8 800 333-01-15</b> с 9 до 18 по Москве <br>
				(звонок бесплатный)
			</div>

			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				Адрес и телефон редакции <br>
				127015, Москва, ул. Новодмитровская, <br>
				д.5А, стр.8 +7 (495) 967-86-25 <br>
				o.volkova@action-media.ru
			</div>

			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
		</div>
	</div>



	<script type="text/javascript" src="../view/user/js/jquery-3.4.1.js"></script>
	<script src="../view/user/js/bootstrap.js"></script>
  </body>
</html>