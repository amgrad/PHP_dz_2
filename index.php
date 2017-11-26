<!DOCTYPE HTML>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Домашнее задание №2</title>
	</head>
	<body>
	<form action="/">
		<p>Введите число</p>
		<input type="text" name="x">
	</form>
	</body>
</html>
<?php
	
	//echo $_GET['x'];
	$x =  $_GET['x'];//rand(0,100);
	echo "Число ".$x."<br>";

	$x1 = 1;
	$x2 = 1;

	while ($x1 < $x) { //до тех пор пока число пользователя не станет больше или равно числа переменной x1
		$x3 = $x1;
		$x1 = $x1 + $x2;
		$x2 = $x3;
	}
	if($x1 > $x) {
		echo 'задуманное число НЕ входит в числовой ряд<br>';
	}
	elseif($x1 == $x) {
		echo 'задуманное число входит в числовой ряд<br>';
	}
	echo 'конец';
	//exit;

?>