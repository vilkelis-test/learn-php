<?php
  $page_name = "Функции";
 
 function doHello($name , $weekDayNum  ) {
    print "Привет $name! ";
 	switch ( true ) {
	case ($weekDayNum >=1 and $weekDayNum <= 5):
		print "Хорошего и продуктивного рабочего дня!" ;
		break;
	case ($weekDayNum >= 6 and $weekDayNum <= 7):
		print "Желаю вам хорошо отдохнуть в этот день!";
		break;	 
	default:
		print "$weekDayNum - Нет такого дня недели";
		break;
	}
}


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
   doHello("Степан",1);
   echo "<br>";
   doHello("Степан",6);
   echo "<br>";
   doHello("Степан",10);
?>
<div class="footer">
	<a href="/index.php">Домой</a>	
</div>
</body>
</html>