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
			<div class="login-bl">
				<div class="login-bl-title">
					Авторизируйтесь
				</div><!-- /login-bl-title-->
				<div class="login-bl-body">
					<form id="send_login" class="send_login" action="">
						<label for="login_name" class="lable-item">Логин</label>
						<input type="text" name="login_name" id="login_name" class="input-item" placeholder='Введите логин'>
						<label for="pass_name" class="lable-item">Пароль</label>
						<input type="text" name="pass_name" id="pass_name" class="input-item" placeholder='Введите пароль'>
						<div class="login-bl-btn">
							<input type="submit" class="btn btn-send" value="Войти">
						</div><!-- /login-bl-btn-->
							
					</form>
				</div><!-- /login-bl-body-->

			</div><!-- /login-bl-->
		</section>
		
		<div class="clearfix"></div>
		<!-- /content -->
	</div>	<!-- /wrapper -->
						
	<footer class="footer page-footer">
		<?php include 'blocks/footer.php';?>
	</footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bower/jquery/dist/jquery.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <?php include 'blocks/counters.php'; ?>
	
</body>
</html>