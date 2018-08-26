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

    $data = [
        ["Россия", "США", "Испания", "Австралия"],
        ["Италия", "Нидерладны", "Голандия", "Франция"],
        ["Хорватия", "Черногория", "Турция", "Болгария"],
    ];
    $encoded = json_encode($data, JSON_UNESCAPED_UNICODE);
    file_put_contents('output.json', $encoded);


    $data1 = file_get_contents('output.json');
    $decoded = json_decode($data1, true);
    $random = rand(0, 1);
    switch ($random) {
        case "0";
            array_unshift($decoded, "КНР", "КНДР");
        case "1";
    }
    $encoded1 = json_encode($decoded, JSON_UNESCAPED_UNICODE);
    file_put_contents('output2.json', $encoded1);
    $output = file_get_contents('output.json');
    $output2 = file_get_contents('output2.json');
    $json = json_decode($output, true);
    $json2 = json_decode($output2, true);
    $result = array_diff($json2, $json);
    foreach ($result as $key => $value) ;
    {
        if ($key == false) {
            echo "Изменений не найдено";
        } else {
            echo "Найдены новые данные<br/>";
            print_r($result);
        }

    }

}

task2();