<?php
  $page_name = "Форма";
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_name?></title>
</head>
<body>
	<h1><?php echo $page_name?></h1>
 
<?php 
if (!empty($_POST)) {

	$message = "Сообщение : \n " 
	. "Имя отправителя: " . $_POST['Name'] . "\n"
	. "Email отправителя: " .  $_POST['Email'] . "\n"
	. "Сообщение: \n  " . $_POST['message'];

	$headers = "From: ".$_POST['Email'];

	$resultMail = mail("site-admin@learn-php.ru", "Сообщение с сайта", $message, $headers );

	if ( $resultMail ) {
		echo "Сообщение отправлено успешно!";
	} else {
		echo "Ошибка отправки письма";
	}
}
?>
	<form action="" method="post">
  		<div>
			<input placeholder="Имя" type="text" name="name"> 
  		</div>
  		<div>
			 <input placeholder="E-mail" type="email" name="email"> 
		</div>
		<div>
 			 <textarea placeholder="Сообщение" name="message"></textarea> 
 		</div>
 		<div>
			<button type="submit">Отправить</button>
		</div>
	</form>		
<div class="footer">
	<a href="/index.php">Домой</a>	
</div>
</body>
</html>