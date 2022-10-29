<! DOCTYPE html>
<html lang="ru">
<head>
    <title> Привет, мир! </title>
</head>
<body>
<?php

echo 'Привет мир!<br>';

echo '<br>';
echo '<br>';
echo 'пример с дробями и степенями';
echo '<br>';
$a = 7.5;
$b = (($a ** 2 - 10 * $a + 25) / ($a ** 2 + 5 * $a)) / (($a - 5) / ($a));
echo $b;
echo '<br>';
echo '<br>';
echo 'пример с условиями';
echo '<br>';
$x = 8;
if ($x > 10) {
    echo 'Число больше 10';
} else {
    echo 'Число меньше либо равно 10';
}
echo '<br>';
echo '<br>';

echo 'пример с циклами';

echo '<br>';
echo '<br>';

$shmot = array(array("Категория" => "Шапка",
    array("Модель" => "Loco1",
        "Цена" => 100.12,
        "Размер" => 33,
        "Остаток" => 15),

    array("Модель" => "Loco2",
        "Цена" => 16.12,
        "Размер" => 36,
        "Остаток" => 5)
),
    array("Категория" => "Куртки",
        array("Модель" => "Punto1",
            "Цена" => 450.12,
            "Размер" => 66,
            "Остаток" => 3),

        array("Модель" => "Punto2",
            "Цена" => 146.12,
            "Размер" => 2,
            "Остаток" => 0)
    ),
    array("Категория" => "Ботинки",
        array("Модель" => "Noche1",
            "Цена" => 4502.2,
            "Размер" => 623,
            "Остаток" => 111),

        array("Модель" => "Noche2",
            "Цена" => 1336.12,
            "Размер" => 332,
            "Остаток" => 1)
    )
);


echo '<br>';
echo '<br>';

foreach ($shmot as $sub) { // вывод всего массива подряд
    foreach ($sub as $subsub) {
        foreach ($subsub as $elem) {
            echo ' ' . $elem;
            }
        }

    }
echo '<br>';
echo '<br>';

$poisk = "Noche2";
foreach ($shmot as $sub) {
    foreach ($sub as $subsub) {
        foreach ($subsub as $elem) {
            echo ' ';
            if ($poisk == $elem) echo 'Значение "' . $poisk . '" есть в базе!' ;
        }
    }

}




?>
</body>
</html>