<h1>Дмитриев Артём Вадимович. Вариант 4.</h1>

<h2>Задание 4</h2>
<?php
$L = range(1, 7);
$Y = range(10, 50, 10);

echo "Элементы массива L: [";
$z = 0;
foreach ($L as $l_element) {
    if (array_search($l_element, $L) != 6) {
        echo "$l_element; ";
    } else {
        echo "$l_element].".PHP_EOL;
    }
    $z += pow($l_element, 2) / ($l_element + 1);
}

$component = 0;
echo "Элементы массива Y: [";
foreach ($Y as $y_element) {
    if (array_search($y_element, $Y) != 4) {
        echo "$y_element; ";
    } else {
        echo "$y_element].".PHP_EOL;
    }
    $component += pow($y_element, 3);
}

$z -= $L[0] * $L[6] * $component;

echo "z = $z".PHP_EOL;
?>

<h2>Задание 5</h2>
<?php
function factorial(int $num): int
{
    $result = 1;
    for ($i = 2; $i <= $num; ++$i) {
        $result *= $i;
    }
    return $result;
}

$x = 2;
$a = 10;

$Y = (pow($x, 4) + pow($x, 7) / factorial(2) + pow($x, 10) / factorial(3)
        + pow($x, 13) / factorial(4)) * 5 * $a;
echo "x = $x.".PHP_EOL."a = $a.".PHP_EOL."Y = $Y".PHP_EOL;
?>

<h2>Задание 6</h2>
<?php
function print_data($arr): void
{
    echo "data = [";
    foreach ($arr as $element) {
        if (array_search($element, $arr) != count($arr) - 1) {
            echo "$element; ";
        } else {
            echo "$element].".PHP_EOL;
        }
    }
}

$data = range(1, 24);
print_data($data);
echo "data[10] = 0 & data[20] = 0.".PHP_EOL;
$data[10] = 0;
$data[20] = 0;
echo "insert 0 in ";
print_data($data);
$flag = false;
for ($i = 0; $i < count($data); ++$i) {
    if ($data[$i] == 0 && $flag) {
        break;
    }
    if ($data[$i] == 0 && !$flag) {
        $flag = true;
    }
    if ($flag && $data[$i] != 0) {
        $data[$i] = 1;
    }
}
echo "modified ";
print_data($data);
?>
