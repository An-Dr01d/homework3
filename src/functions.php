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
echo "<br/>";
echo "Функция 2<br/>";

function task2()
{
    function writeJson($show = false)
    {
        $data = [
            ["Россия", "США", "Испания", "Австралия"],
            ["Италия", "Нидерладны", "Голандия", "Франция"],
            ["Хорватия", "Черногория", "Турция", "Болгария"],
        ];
        $encoded = json_encode($data, JSON_UNESCAPED_UNICODE);
        if ($show) {
            echo $encoded;
        }
        file_put_contents('output2.json', $encoded);
    }
    writeJson(true);
function readJson()
{
    $data = file_get_contents('output2.json');
    //echo $data;
    //echo "<br/><br/>";
    //$decoded = json_decode($data, true);
    //print_r($decoded);
}
    readJson();
}
task2();