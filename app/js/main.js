(function($){
	

	$(document).ready(function() {
		// HTML5 placeholders for old browsers 
		$('input, textarea').placeholder();


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
			
		//Открытие попапа
		$('body').on('click', '.md-trigger', function(event) {
			var id = $(this).data('modal');
			$('#'+id).bPopup({
				speed: 650,
				transition: 'slideDown',
				onClose: function () {
				    formValModul.resetForm();
				}
			});
		});// end Открытие попапа

	});//end ready

})(jQuery);
