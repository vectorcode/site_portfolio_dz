<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Контакты -- Портфолио Кондакова Павла</title>
	
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
	<link rel="stylesheet" href="css/contacts.css">
	<link rel="stylesheet" href="css/media.css">

	<!-- JS -->
	<script type="text/javascript" src="bower/modernizr/modernizr.js"></script>
</script>
</head>
<body>
<?php $act_contacts = 'active'; ?>

	 <!--[if lt IE 8]>
            <p class="browserupgrade">Ваш браузер<strong>устарел</strong>. Пожалуйста <a href="http://browsehappy.com/">обновите</a> его.</p>
        <![endif]-->
	<!-- main-block -->
	<div class="wrapper">
		<!-- header -->
		<header class="header">
			<?php include 'blocks/header.php'; ?>
		</header>
		<!-- /header -->
		<!-- content -->	
		<section class="content">
			<div class="wrap-st-2">
				<article class="main-content">
					<section class="main-cnt-bl">
						<div class="main-contact-bl-title">У вас интересный проект? Напишите мне
						</div>
						<div class='blue_line'></div>
						<div class="main-contact-bl-body clearfix">
							<form id="send_mail" class="send_mail" action="">
								<div class="block-grid clearfix">
									<div class="grid-50">
										<label for="mail_name" class="lable-item">Имя</label>
										<input type="text" name="mail_name" id="mail_name" class="input-item" placeholder='Как к Вам обращаться'>
									</div>
									<div class="grid-50">
										<label for="mail_name" class="lable-item">Email</label>
										<input type="text" name="mail_name" id="mail_name" class="input-item" placeholder='Куда мне писать'>
									</div>
								</div><!-- /block-grid -->
								<div class="block-grid clearfix">
									<label for="mail_mas" class="lable-item">Сообщение</label>
									<textarea  name="mail_mas" id="mail_mas" rows="8" class="textarea-item" placeholder='Кратко в чем суть'></textarea>
								</div><!-- /block-grid -->
								<label for="mail_capch" class="lable-item">Введите код, указанный на картинке</label>
								<div class="block-grid clearfix">
									<div class="grid-50">
										<div class="block-capcha">
											<img src="img/capch.png">
										</div>
									</div>
									<div class="grid-50">
										<input type="text" name="mail_capch" id="mail_capch" class="input-item capch-inp" placeholder='Введите код'>
									</div>
									
								</div><!-- /block-grid -->
								<div class="block-grid clearfix">
									
									<div class="grid-50">
										<input type="submit" class="btn btn-send fl-l" value="Отправить">
									</div>
									<div class="grid-50">
										<input type="reset" class="btn btn-clear fl-r" value="Очистить">
									</div>
									
								</div><!-- /block-grid -->
							</form><!-- /form send_mail-->
						</div><!-- /main-cnt-bl-body -->

					</section><!-- /main-content-block-->
					

				</article><!-- /main-content-->
				<aside>
					<?php include 'blocks/site_bar.php'; ?>
				</aside>
			</div><!-- /wrap-st-2-->
		</section>
		<div class="mobile-soc-bl" hidden>
			<ul class="soc-seti-block">
				<li class="soc-seti-item">
					<a href="" class="soc-seti-link vk" target='_blank'>Вконтакте</a>
				</li>
				<li class="soc-seti-item">
					<a href="" class="soc-seti-link tw" target='_blank'>Twitter</a>
				</li>
				<li class="soc-seti-item">
					<a href="" class="soc-seti-link fb" target='_blank'>Facebook</a>
				</li>
				<li class="soc-seti-item">
					<a href="" class="soc-seti-link gt" target='_blank'>Github</a>
				</li>
			</ul>
		</div>	<!-- /mobile-soc-bl -->	
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