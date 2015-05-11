<?php session_start();


	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		include "blocks/db.php"; //подключение к DB

		if (isset($_POST['prj_name'])) {$prj_name=$_POST['prj_name']; if ($prj_name == '') {unset($prj_name);}}
		if (isset($_POST['prj_url'])) {$prj_url=$_POST['prj_url']; if ($prj_url == '') {unset($prj_url);}}
		if (isset($_POST['prj_text'])) {$prj_text=$_POST['prj_text']; if ($prj_text == '') {unset($prj_text);}}


	    // Получаем доступ к файлу
	    $file = $_FILES['prj_img'];

	    if($file['size'] == 0 || $file['size'] > 2097152){
	    	$_SESSION['status'] = "0";
	        $_SESSION['message'] = "Файл не выбран или превышает 2МБ";
	        header("Location: works.php");
	    }

	    //проверка на существование данных
	    if (isset($prj_name) && isset($prj_url) && isset($prj_text)){
	    	
	    	include "libs/smottt/wideimage/lib/WideImage/WideImage.php";
	    	
	    	$file_name = $file['name'];
	    	$file_dist = __DIR__.'/uploads/'.$file_name;
	    	
	    	if(move_uploaded_file($file['tmp_name'], $file_dist)){

	    		$result = mysql_query ("INSERT INTO works (prj_name,prj_img,prj_url,prj_text) VALUES ('$prj_name', '$file_name', '$prj_url', '$prj_text')");
	
				if ($result == 'true'){
					 //данные записанны в db
					$_SESSION['status'] = "1";
	        		$_SESSION['message'] = "Данные добавленны";
	        		header("Location: works.php");

				}else {
					//ошибка при записи в db
					$_SESSION['status'] = "0";
	        		$_SESSION['message'] = "Ошибка при добавлении данных";
	        		header("Location: works.php");
				}





	       
	    } else {
	    	$_SESSION['status'] = "0";
	        $_SESSION['message'] = "Возникла ошибка при загрузке файла на сервер";
	        header("HTTP/1.1 302 Moved Temporarily");
	        header("Location: works.php");
	    }


	    }//end проверка на существование данных

	} else {
		$_SESSION['status'] = "0";
	    $_SESSION['message'] = "У вас нет доступа на данную страницу";
	    header("HTTP/1.1 302 Moved Temporarily");
	    header("Location: works.php");
	    
	}

