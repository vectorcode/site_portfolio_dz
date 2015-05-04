<?php include 'blocks/session.php' ?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Авторизация</title>
	
	<!-- favicons-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- SEO -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- CSS -->
	<link rel="stylesheet" href="bower/normalize.css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/media.css">
		<!-- qtip -->
	<link type="text/css" rel="stylesheet" href="css/jquery.qtip.min.css" />

	<!-- JS -->
	<script type="text/javascript" src="bower/modernizr/modernizr.js"></script>
</script>
</head>
<body>

	 <!--[if lt IE 8]>
            <p class="browserupgrade">Ваш браузер<strong>устарел</strong>. Пожалуйста <a href="http://browsehappy.com/">обновите</a> его.</p>
        <![endif]-->
	<!-- main-block -->
	<div class="wrapper">

		<!-- content -->	
		<section class="content-login-bl">

		
			
			
			


			

		


<?php


	if ( !empty($_GET['logout']) ) // если юзер решил выйти
	{// просто разрушаем переменные
	 unset($_SESSION['logged'], $_SESSION['login']);
	}

// сверяем данные из формы логина с нужными логином и паролем
if ( !empty($_POST['login_name']) and !empty($_POST['pass_name']) )
{
 if ( $_POST['login_name'] == 'name' and $_POST['pass_name'] == 'test' ) // это очень грубый вариант авторизации %)
 {
 // сохраняем сеансовые переменные logged = true и login с именем пользователя
 $_SESSION['logged'] = 1;
 $_SESSION['login'] = 'Admin';
 }else{ 
 	echo '<div class="block-info  bl-error wrp-bl-info">
							<div class="block-info-close bl-error"></div>
								<div class="block-info-title bl-error">Ошибка</div>
								<div class="block-info-content bl-error">Неправельный логин или пароль</div>
						</div><!-- / block-info -->';}
}

if ( !isset($_SESSION['logged']) or empty($_SESSION['logged']) ) // если в сессии не указано, что пользователь залогинен
{
 // показываем форму для ввода пароля
 
 ?>
 			<div class="login-bl">
				<div class="login-bl-title">
					Авторизируйтесь
				</div><!-- /login-bl-title-->
				<div class="login-bl-body">
					<form id="send_login" class="send_login" action="login.php"  method="post" data-ajax='false'>
						<div class="block-info  bl-error wrp-bl-info" hidden>
							<div class="block-info-close bl-error">x</div>
								<div class="block-info-title bl-error">Ошибка</div>
								<div class="block-info-content bl-error">Невозможно авторизоваться.</div>
						</div><!-- / block-info -->
						<div class="wrap-info-bl bl-success wrp-bl-info" hidden>
							<div class="block-info bl-success">
								<div class="block-info-close bl-success">x</div>
								<div class="block-info-title bl-success">Ура!</div>
								<div class="block-info-content bl-success">Вы авторизовались.</div>
							</div><!-- / block-info -->
						</div><!-- / wrap-info-bl -->
						<label for="login_name" class="lable-item">Логин</label>
						<input type="text" name="login_name" id="login_name" class="input-item add-tooltip" placeholder='Введите логин' data-errtxt='Вы не ввели Логин' data-pos="left" data-valtype="text">
						<label for="pass_name" class="lable-item">Пароль</label>
						<input type="password" name="pass_name" id="pass_name" class="input-item add-tooltip" placeholder='Введите пароль'
						data-errtxt='Вы не ввели пароль' data-pos="left" data-valtype="text">
						<div class="login-bl-btn">
							<input type="submit" class="btn btn-send" value="Войти">
						</div><!-- /login-bl-btn-->
							
					</form>
				</div><!-- /login-bl-body-->

			</div><!-- /login-bl-->
 <?php
}
else
{
 ?>
 			<div class="login-bl">
				<div class="login-bl-title">
					Вы авторизованны <?=$_SESSION['login']?>
				</div><!-- /login-bl-title-->
				<div class="login-bl-body">
				
					<div class="login-bl-btn">
						<a href="works"class="btn btn-send dbl">Страница работы</a>
					</div><!-- /login-bl-btn-->
					<div class="login-bl-btn">
						<a href="login.php?logout=1"class="btn btn-send dbl">Выйти</a>
					</div><!-- /login-bl-btn-->

				</div><!-- /login-bl-body-->
			</div><!-- /login-bl-->

 <?php
}
?>
		</section><!-- /content -->
		
		<div class="clearfix"></div>
		
	</div>	<!-- /wrapper -->
						
	<footer class="footer page-footer">
		<?php include 'blocks/footer.php';?>
	</footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bower/jquery/dist/jquery.js"><\/script>')</script>
     <!-- qtip-->
    <script src="js/jquery.qtip.min.js"></script>
    <script src="js/imagesloaded.pkg.min.js"></script>
    <script src="bower/jquery-placeholder/jquery.placeholder.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <?php include 'blocks/counters.php'; ?>
	
</body>
</html>