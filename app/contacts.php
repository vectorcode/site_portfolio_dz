<?php include 'blocks/session.php' ?>
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
	<link rel="stylesheet" href="css/contacts.css">
	<link rel="stylesheet" href="css/media.css">

		<!-- qtip -->
	<link type="text/css" rel="stylesheet" href="css/jquery.qtip.min.css" />

	<!-- JS -->
	<script type="text/javascript" src="bower/modernizr/modernizr.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
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
							<form id="send_mail" class="send_mail" action="sendmail.php">
								<div class="block-info  bl-error wrp-bl-info" hidden>
									<div class="block-info-close bl-error">x</div>
									<div class="block-info-title bl-error">Ошибка</div>
									<div class="block-info-content bl-error">Невозможно отправить сообщение.</div>
								</div><!-- / block-info -->
									<div class="wrap-info-bl bl-success wrp-bl-info" hidden>
										<div class="block-info bl-success">
											<div class="block-info-close bl-success">x</div>
											<div class="block-info-title bl-success">Ура!</div>
											<div class="block-info-content bl-success">Сообщение отправленно.</div>
										</div><!-- / block-info -->
									</div><!-- / wrap-info-bl -->

								<div class="block-grid clearfix">
									<div class="grid-50">
										<label for="mail_name" class="lable-item">Имя</label>
										<input type="text" name="mail_name" id="mail_name" class="input-item add-tooltip" placeholder='Как к Вам обращаться' data-errtxt='Вы не ввели имя' data-pos="left" data-valtype="text">
									</div>
									<div class="grid-50">
										<label for="mail_email" class="lable-item">Email</label>
										<input type="text" name="mail_email" id="mail_email" class="input-item add-tooltip" placeholder='Куда мне писать' data-errtxt='Вы не ввели email' data-pos="right" data-valtype="email">
									</div>
								</div><!-- /block-grid -->
								<div class="block-grid clearfix">
									<label for="mail_mas" class="lable-item">Сообщение</label>
									<textarea  name="mail_mas" id="mail_mas" rows="8" class="textarea-item add-tooltip" placeholder='Кратко в чем суть' data-errtxt='Ваш вопрос' data-pos="left" data-valtype="text"></textarea>
								</div><!-- /block-grid -->
								<!-- <label for="mail_capch" class="lable-item">Введите код, указанный на картинке</label> -->
							
								<div class="block-grid clearfix">
									<!-- <div class="grid-50">
										<div class="block-capcha">
											<img src="img/capch.png">
										</div>
									</div>
									<div class="grid-50">
										<input type="text" name="mail_capch" id="mail_capch" class="input-item capch-inp add-tooltip" placeholder='Введите код' data-errtxt='Вы не ввели код' value='1' data-pos="right" data-valtype="text">
									</div> -->
									
									<div class="g-recaptcha" data-sitekey="6LfYNgYTAAAAAAiwXhE_5oJzZKKkRCHDcqjZy8o-"></div>
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
		<?php include 'blocks/mobile_links.php'; ?>
		<div class="clearfix"></div>
		<!-- /content -->
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