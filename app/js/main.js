
(function($){




$(document).ready(function() {

	if ($('#file-md-form') !== undefined) {//если есть форма с id #file-md-form
		formValModul.init('#file-md-form');//Передаём id формы
		inputFileCustom.init('#prj_img', '#prj_img_text');//передаём id инпута загрузки файлов и id инпута отображения имени этого файла
	};

	if ($('#send_mail') !== undefined) {//если есть форма с id #send_mail
		formValModul.init('#send_mail');//Передаём id формы
		
		$('.md-close, .md-overlay').on('click', function() {//очищаем форму от ошибок при закрытии модального окна
			formValModul.resetForm();
		});
	};

	if ($('#send_login') !== undefined) {//если есть форма с id #send_mail
		formValModul.init('#send_login');//Передаём id формы
	};
		

});//end ready

})(jQuery);
