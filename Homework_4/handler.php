<?php
include 'Car.php';

function alert(string $msg) : void {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

function onSave() : void {
    $brand = $_POST['brand'] == null ? "Brand" : $_POST['brand'];
    $model = $_POST['model'] == null ? "Model" : $_POST['model'];
    $color = $_POST['color'] == null ? "Color" : $_POST['color'];
    $hp = $_POST['hp'] == null ? 0 : $_POST['hp'];
    $year = $_POST['year'] == null ? 0 : $_POST['year'];
    $car = new Car($brand, $model, $color, $hp, $year);

    $file = fopen("log.txt", "a") or die("Ошибка открытия файла!");
    fwrite($file, $car);
    alert("Успешная запись!");
    fclose($file);
}

function onLoad() : void {
    $filename = "log.txt";
    $file = fopen($filename, "r") or die("Ошибка открытия файла!");
    if (filesize($filename) == 0) {
        alert("Ошибка! Файл пуст.");
    } else {
        while (!feof($file)) {
            $line = fgets($file);
            echo "$line<br>";
        }
    }
    fclose($file);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        onSave();
    } else {
        onLoad();
    }
}

