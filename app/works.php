<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Мои работы -- Портфолио Кондакова Павла</title>
	
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
	<link rel="stylesheet" href="css/works.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/form.css">
		<!-- modal -->
		 <link rel="stylesheet" href="css/modal.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/modal-window.css" /> -->
	
		<!-- qtip -->
	<link type="text/css" rel="stylesheet" href="css/jquery.qtip.min.css" />
	

	<!-- JS -->
	<script type="text/javascript" src="bower/modernizr/modernizr.js"></script>
</script>
</head>
<body>
	
<?php $act_works = 'active'; ?>

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
						<div class="main-cnt-bl-title">Мои работы</div>
						<div class="main-cnt-bl-body clearfix">
							<ul class="bl-works">
								<li class="work-item">
									<figure class="work-item-fgr">
										<div class="work-item-link md-trigger" data-modal="modal-1">
										   <div class="work-item-blk-img mask-style">
							                    <img src="img/portf/site-kh.jpg" class='work-item-img'>
							                    <div class="mask">
							                        <p>Описание</p>
							                    </div>
							                </div>
										</div>
										<a href="http://kinohod.ru" target="_blank" class="work-item-link-text">kinohod.ru</a>
								    	<figcaption class="work-item-text">Киноход – это сервис покупки билетов в кино онлайн.</figcaption>
								   </figure>
								</li><!-- /work-item-->
								<li class="work-item">
									<figure class="work-item-fgr">
										<div class="work-item-link md-trigger" data-modal="modal-2">
										   <div class="work-item-blk-img mask-style">
							                    <img src="img/portf/kh-m.jpg" class='work-item-img'>
							                    <div class="mask">
							                        <p>Описание</p>
							                    </div>
							                </div>
										</div>
										<a href="http://kinohod.ru/mobile/" target="_blank" class="work-item-link-text">Мобильный сайт</a>
								    	<figcaption class="work-item-text">Мобильный сайт – проекта Киноход.</figcaption>
								   </figure>
								</li><!-- /work-item-->
								<li class="work-item">
									<figure class="work-item-fgr">
										<div class="work-item-link md-trigger" data-modal="modal-3">
										   <div class="work-item-blk-img mask-style">
							                    <img src="img/portf/vk_widjet.jpg" class='work-item-img'>
							                    <div class="mask">
							                        <p>Описание</p>
							                    </div>
							                </div>
										</div>
										<a href="http://kinohod.ru/widget/" target="_blank" class="work-item-link-text">Виджет kinohod</a>
								    	<figcaption class="work-item-text">Виджет – это созданное с нуля, одностраничное js приложение с использованием MVC архитектуры. </figcaption>
								   </figure>
								</li><!-- /work-item-->
								
								<li class="work-item">
									<figure class="work-item-fgr">
										<div class="work-item-link md-trigger" data-modal="modal-5">
										   <div class="work-item-blk-img mask-style">
							                    <img src="img/portf/pay-pg.jpg" class='work-item-img'>
							                    <div class="mask">
							                        <p>Описание</p>
							                    </div>
							                </div>
										</div>
										<a href="/doc/sber/payment_ru.html" target="_blank" class="work-item-link-text">Платёжная страница</a>
								    	<figcaption class="work-item-text">Страница создана по требованиям безопасности банка.</figcaption>
								   </figure>
								</li><!-- /work-item-->

								<li class="work-item">
									<figure class="work-item-fgr">
										<div class="work-item-link md-trigger" data-modal="modal-6">
										   <div class="work-item-blk-img mask-style">
							                    <img src="img/portf/post.jpg" class='work-item-img'>
							                    <div class="mask">
							                        <p>Описание</p>
							                    </div>
							                </div>
										</div>
										<a href="/doc/post/index.html" target="_blank" class="work-item-link-text">Письмо рассылки</a>
								    	<figcaption class="work-item-text">Письмо написано используя табличную вёрстку.</figcaption>
								   </figure>
								</li><!-- /work-item-->
								<li class="work-item">
									<figure class="work-item-fgr">
										<div class="work-item-link md-trigger" data-modal="modal-4">
										   <div class="work-item-blk-img mask-style">
							                    <img src="img/portf/widj-kons.jpg"  class='work-item-img'>
							                    <div class="mask">
							                        <p>Описание</p>
							                    </div>
							                </div>
										</div>
										<a href="http://www.mosconsv.ru/ru/bilet.aspx?id=142150" target="_blank" class="work-item-link-text">Консерватория</a>
								    	<figcaption class="work-item-text">Виджет разработан для продажи билетов на мероприятия с большими концертными залами или вообще не имеющих посадочные места.</figcaption>
								   </figure>
								</li><!-- /work-item-->
								<li class="work-item">
									<figure class="work-item-fgr">
										<div class="work-item-link md-trigger" data-modal="modal-7">
										   <div class="work-item-blk-img mask-style">
							                    <img src="img/portf/tp.jpg" class='work-item-img'>
							                    <div class="mask">
							                        <p>Описание</p>
							                    </div>
							                </div>
										</div>
										<a href="http://typeplanet.ru" target="_blank" class="work-item-link-text">Сервис типирования</a>
								    	<figcaption class="work-item-text">Typeplanet - это сервис, позволяющий проходить онлайн тест на определение типа личности по методологии MBTI.</figcaption>
								   </figure>
								</li><!-- /work-item-->

								<li class="work-item">
									<div class="add-work md-trigger" data-modal="modal-0">
										<img src="img/ico_new_site.png">
										<p>Добавить проект</p>
									</div><!-- /add-work-->
								</li><!-- /work-item-->
							
								
							</ul><!-- /bl-works -->
						</div><!-- /main-cnt-bl-body -->
					</section><!-- /main-content-block-->
					
				</article><!-- /main-content-->
				<aside>
					<?php include 'blocks/site_bar.php'; ?>
				</aside>
			</div><!-- /wrap-st-2-->
		</section><!-- /content -->
		<?php include 'blocks/mobile_links.php'; ?>
		<div class="clearfix"></div>
		
	</div><!-- /wrapper -->
						
	<footer class="footer page-footer">
			<?php include 'blocks/footer.php';?>
	</footer>




	<!-- Модальные окна-->
	<div class="blk-for-modal">
		

		<div class="md-modal" id="modal-0">
			<div class="md-content">
				<div class="file-md">
			<div class="file-md-title">
				Добавление проекта
				<div class="file-md-close b-close">x</div>
			</div>
			<div class="file-md-cont">
				<form action="add_work.php" id="file-md-form">
					<div class="block-info  bl-error wrp-bl-info" hidden>
						<div class="block-info-close bl-error">x</div>
						<div class="block-info-title bl-error">Ошибка</div>
						<div class="block-info-content bl-error">Невозможно добавить проект.</div>
					</div><!-- / block-info -->
					<div class="wrap-info-bl bl-success wrp-bl-info" hidden>
						<div class="block-info bl-success">
							<div class="block-info-close bl-success">x</div>
							<div class="block-info-title bl-success">Ура!</div>
							<div class="block-info-content bl-success">Проект успешно добавлен.</div>
						</div><!-- / block-info -->
					</div><!-- / wrap-info-bl -->
					<div class="form-item">
						<label for="prj_name" class="lable-item">Название проекта</label>
						<input type="text" name="prj_name" id="prj_name" class="input-item add-tooltip" placeholder='Введите название' data-errtxt='введите название' data-pos="left" data-valtype="text">
					</div><!-- /form-item-->
					
					<div class="form-item">
						<label for="prj_img" class="lable-item">Картинка проекта</label>
						<div class="bl-upl-img">
							<input type="text" name="prj_img_text" id="prj_img_text" class="input-item add-tooltip" placeholder='Загрузите изображение' data-errtxt='изображение' data-pos="left"  data-valtype="text">
							<div class="bl-upl-icon">
								<input type="file" name="prj_img" id="prj_img" class="input-item">
							</div>
						</div><!-- /bl-upl-img-->
					</div><!-- /form-item-->
					
					<div class="form-item">
						<label for="prj_url" class="lable-item">URL проекта</label>
						<input type="text" name="prj_url" id="prj_url" class="input-item add-tooltip" placeholder='Добавьте ссылку' data-errtxt='Ссылка на проект' data-pos="left"  data-valtype="url">
					</div><!-- /form-item-->
					
					<div class="form-item">
						<label for="prj_text" class="lable-item">Описание</label>
						<textarea  name="prj_text" id="prj_text" rows="8" class="textarea-item add-tooltip" placeholder='Пара слов о Вашем проекте'  data-errtxt='Описание проекта' data-pos="left"  data-valtype="text"></textarea>
					</div><!-- /form-item-->
					<div class="form-item">
						<input type="submit" class="btn btn-send" value="Добавить">
					</div><!-- /form-item-->
			
				</form>
			</div><!-- /file-md-cont-->
		</div><!-- /add-file-md-->
			</div>
		</div><!-- /modal-0 -->

			<!-- Модальные окна 1-->
		
		<div class="md-modal" id="modal-1">
			<div class="md-content">
				<div class="file-md">
					<div class="file-md-title">
						Сайт проекта kinohod
						<div class="md-close file-md-close b-close">x</div>
					</div>
					<div class="file-md-cont">
						<img src="img/portf/site-kh.jpg" class="portf-item-img">
						<div class="portf-item-bl-link">
							<a href="href://kinohod.ru" target="_blank" class="portf-item-link">kinohod.ru</a>
						</div>
						<div class="portf-item-text">Киноход – это сервис покупки билетов в кино онлайн. На сайте достаточно много js функциональностей начиная банерокрутиркой и заканчивая подгружаемым через iframe виджетом. В некоторые механизмы были написаны мной другие прошли через рефакторинг.</div>
					</div>
				</div>
			</div>
		
		</div><!-- /Модальные окна 1-->

		<!-- Модальные окна 2-->
		
		<div class="md-modal" id="modal-2">
			<div class="md-content">
				<div class="file-md">
					<div class="file-md-title">
						Сайт проекта kinohod
						<div class="md-close file-md-close b-close">x</div>
					</div>
					<div class="file-md-cont">
						<img src="img/portf/kh-m.jpg" class="portf-item-img">
						<div class="portf-item-bl-link">
							<a href="href://kinohod.ru" target="_blank" class="portf-item-link">kinohod.ru</a>
						</div>
						<div class="portf-item-text">Мобильный сайт – это ключ к успеху на it рынке. Трафик мобильных устройств превышает десктопный. Мной проведена большая работа по ускорению и оптимизации мобильного сайта, осуществил множество интерфейсных изменений. Сайт корректно работает на всех популярных мобильных устройствах и планшетах.</div>
					</div>
				</div>
			</div>
		
		</div><!-- /Модальные окна 2-->

		<!-- Модальные окна 3-->
		
		<div class="md-modal" id="modal-3">
			<div class="md-content">
				<div class="file-md">
					<div class="file-md-title">
						Сайт проекта kinohod
						<div class="md-close file-md-close b-close">x</div>
					</div>
					<div class="file-md-cont">
						<img src="img/portf/vk_widjet.jpg" class="portf-item-img">
						<div class="portf-item-bl-link">
							<a href="http://kinohod.ru/widget/" target="_blank" class="portf-item-link">Виджет</a><br>
							<a href="https://vk.com/app4751187_9095661" target="_blank" class="portf-item-link">Виджет встроенный в vk</a>
						</div>
						<div class="portf-item-text">Виджет – это созданное с нуля, одностраничное js приложение с использованием MVC архитектуры. Загрузка данных происходит один раз, затем данные подгружаются по мере необходимости, без перезагрузки, используя технологию Ajax (JSON). Виджет адаптирован под любую среду использования, будь то стационарный компьютер, мобильное устройство, планшет, приложение. Благодаря одностраничной архитектуре и экономии на запросах к серверу, виджет получил существенный прирост к скорости работы и снижению нагрузки на сервер, по сравнению с мобильным сайтом. Что имеет колоссальное значение в разработки высоконагруженных систем.</div>
					</div>
				</div>
			</div>
		
		</div><!-- /Модальные окна 3-->

		<!-- Модальные окна 4-->
		
		<div class="md-modal" id="modal-4">
			<div class="md-content">
				<div class="file-md">
					<div class="file-md-title">
						<div class="md-close file-md-close b-close">x</div>
						Виджет Московской консерватории
					</div>
					<div class="file-md-cont">
						<img src="img/portf/widj-kons.jpg" class="portf-item-img">
						<div class="portf-item-bl-link">
							<a href="http://citypass.kinohod.ru/api/widget/citypass/conservatory/" target="_blank" class="portf-item-link">Виджет</a><br>
							<a href="http://www.mosconsv.ru/ru/bilet.aspx?id=142150" target="_blank" class="portf-item-link">Сайт консерватории</a>
						</div>
						<div class="portf-item-text">Виджет разработан для продажи билетов на мероприятия с большими концертными залами или вообще не имеющих посадочные места. Существует возможность масштабирования схемы зала. Схема зала работает очень быстро, благодаря специально разработанной логики приложения. Все пересчёты происходят внутри js переменных, не затрагивая вёрстку страницы. После пересчёта в DOM загоняется готовый HTML. Такой механизм прекрасно работает, даже на слабых мобильных устройствах. Есть механизм валидации вводим данных.</div>
					</div>
				</div>
			</div>
		
		</div><!-- /Модальные окна 4-->

		<!-- Модальные окна 5-->
		
		<div class="md-modal" id="modal-5">
			<div class="md-content">
				<div class="file-md">
					<div class="file-md-title">
						Платёжная страница
						<div class="md-close file-md-close b-close">x</div>
					</div>
					<div class="file-md-cont">
						<img src="img/portf/pay-pg.jpg" class="portf-item-img">
						<div class="portf-item-bl-link">
							<a href="http://pavelkondakov.ru/doc/sber/payment_ru.html" target="_blank" class="portf-item-link">Платёжная страница</a><br>
						</div>
						<div class="portf-item-text">Страница создана по требованиям безопасности банка. Работает на любых устройствах, адаптируюсь под них. Есть механизмы валидации вводимых данных, проброс пользователя между полями. Вывод ошибки. На мобильных устройствах вызывается цифровая клавиатура.</div>
					</div>
				</div>
			</div>
		
		</div><!-- /Модальные окна 5-->

			<!-- Модальные окна 6-->
		
		<div class="md-modal" id="modal-6">
			<div class="md-content">
				<div class="file-md">
					<div class="file-md-title">
						Письмо рассылки
						<div class="md-close file-md-close b-close">x</div>
					</div>
					<div class="file-md-cont">
						<img src="img/portf/post.jpg" class="portf-item-img">
						<div class="portf-item-bl-link">
							<a href="/doc/post/index.html" target="_blank" class="portf-item-link">Письмо рассылки</a><br>
						</div>
						<div class="portf-item-text">Письмо написано используя табличную вёрстку. Адаптируется под устройство. Корректно работает во всех email клиентах, в том числе и Outlook. Изображения адаптированы под retina display.</div>
					</div>
				</div>
			</div>
		
		</div><!-- /Модальные окна 6-->

		<!-- Модальные окна 7-->
		
		<div class="md-modal" id="modal-7">
			<div class="md-content">
				<div class="file-md">
					<div class="file-md-title">
						<div class="md-close file-md-close b-close">x</div>
						Сервис типирования
					</div>
					<div class="file-md-cont">
						<img src="img/portf/tp.jpg" class="portf-item-img">
						<div class="portf-item-bl-link">
							<a href="http://typeplanet.ru/" target="_blank" class="portf-item-link">Сервис типирования</a><br>
						</div>
						<div class="portf-item-text">Typeplanet - это сервис, позволяющий проходить онлайн тест на определение типа личности по методологии MBTI.</div>
					</div>
				</div>
			</div>
		
		</div><!-- /Модальные окна 7-->
		
	</div><!-- /blk-for-moda -->

	
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bower/jquery/dist/jquery.js"><\/script>')</script>
    <!-- modal-->

    <!--<script src="js/modal-classie.js"></script>
    <script src="js/modalEffects.js"></script>-->
	<script src="bower/bpopup/jquery.bpopup.js"></script>
    <script src="bower/jquery-placeholder/jquery.placeholder.min.js"></script>

    <!-- qtip-->
    <script src="js/jquery.qtip.min.js"></script>
    <script src="js/imagesloaded.pkg.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <?php include 'blocks/counters.php'; ?>
	
</body>
</html>