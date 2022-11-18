<h1>Дмитриев Артём Вадимович. Вариант 4.</h1>

<h2>Задание 1</h2>
<?php
	$a = 10;
	$b = 20;
	$j = 30;
	$x = 40;
	
	$z = sqrt(pow(($j - $a), 2)) / (($a - $b) * $j);
	$k = (pow($a, 2) - pow($b, 2)) / ($x * $z * ($a + $b));
	
	echo "a = $a;<br>b = $b;<br>j = $j;<br>x = $x;<br><br>z = $z;<br>k = $k;";
?>

<h2>Задание 2</h2>
<?php
	$n = 10;
	$d = 20;
	
	$x = pow(($n + $d), 2) / 0.75;
	
	$a = 0;
	$b = 0;
	
	if ($x < 1 || $x >= 5) {
		$a = ($n + $d) * $x;
		$b = pow($n, 2) * $x - $d;
	} else {
		$a = pow($x, 2) - $n * $d;
		$b = pow($x, 2) - $n / $d;
	}	

	echo "n = $n;<br>d = $d;<br><br>x = $x;<br>a = $a;<br>b = $b;";
?>

<h2>Задание 3</h2>
<?php
	$data = array("Иванов", "Петров", "Сидоров", "Дмитриев");
	$flag = False;
	
	echo "Фамилии: [";
	foreach ($data as $surname) {
		if (array_search($surname, $data) != 3) {
			echo "$surname; ";
		} else {
			echo "$surname].";
		}
		if ($surname == "Иванов") {
			$flag = True;
		}
	}
	if ($flag == True) {
		echo "<br>Фамилия Иванов есть в списке.";
	} else {
		echo "<br>Фамилии Иванов нет в списке.";
	}
?>
