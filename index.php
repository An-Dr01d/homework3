<?php
require("src/functions.php");

echo "<b>Функция 1</b>";
task1();
echo "<br/>";
echo "<b>Функция 2</b><br/>";
echo "<br/>";
$data = [ // Создаем массив
    ["Россия", "США", "Испания", "Австралия"],
    ["Италия", "Нидерладны", "Голандия", "Франция"],
    ["Хорватия", "Черногория", "Турция", "Болгария"],
];
task2($data);
echo "<br/>";
echo "<b>Функция 3</b><br/>";
echo "<br/>";
task3();
echo "<br/>";
echo "<b>Функция 4</b><br/>";
echo "<br/>";
task4();