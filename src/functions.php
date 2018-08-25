<?php

echo "Функция 1<br/>";
function task1()
{
    $lines = file("data.xml");
    foreach ($lines as $line_num => $line) {
        switch ($line_num) {
            case '3':
                echo "<b>Покупатель</b><br/>$line<br />";
                break;
            case '11':
            echo "<b>Billing</b><br/>$line<br />";
            break;
            case '18':
                echo "<b>Примечание к посылке</b><br/> $line<br />";
                break;
            case '21':
                echo "<b>Посылка</b><br/>$line<br />";
                break;
            case '22':
                echo "<b>Количество</b> $line<br />";
                break;
            case '27':
                echo "<b>Посылка</b><br/> $line<br />";
                break;
            case '28':
                echo "<b>Количество</b> $line<br />";
                break;
            default:
                echo "$line<br />";
        }
    }
}
task1();