<?php
  $page_name = "Массивы";
  $books = array("451° по Фаренгейту",
					"Шантарам",
					"1984",
					"Мастер и Маргарита",
					"Три товарища",
					"Портрет Дориана Грея",
					"Вино из одуванчиков",
					"Цветы для Элджернона",
					"Над пропастью во ржи",
					"Маленький принц",
					"Анна Каренина",
					"Сто лет одиночества",
					"Тень горы",
					"Атлант расправил плечи");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_name?></title>
</head>
<body>

	<h1><?php echo $page_name?></h1>
	<ol>
<?php
for ($i = 0; $i < count($books); $i++ ) {
echo "<li> $books[$i] </li>";
}
?>
</ol>
<div class="footer">
	<a href="/index.php">Домой</a>	
</div>
</body>
</html>