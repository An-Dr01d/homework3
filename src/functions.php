<?php

function task1()
{
    $lines = file("data.xml"); // Подгружаем файл и присваиваем ему переменную
    foreach ($lines as $line_num => $line) {
        switch ($line_num) { //Условия для поиска нужных строк
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

function task2($data)
{
    $encoded = json_encode($data, JSON_UNESCAPED_UNICODE); // Кодируем в формат json
    file_put_contents('output.json', $encoded); // Сохраняем в файл
    $data1 = file_get_contents('output.json'); // Подгружаем файл
    $decoded = json_decode($data1, true); // Декодируем в массив
    $random = rand(0, 1); // СОздаем условие для рандомного изменения массива
    switch ($random) {
        case "0";
            array_unshift($decoded, "КНР", "КНДР"); // Добавление новых значений в массив
        case "1";
    }
    $encoded1 = json_encode($decoded, JSON_UNESCAPED_UNICODE); // Крдируем в форма json
    file_put_contents('output2.json', $encoded1); // Сохраняем в новый файл
    $output = file_get_contents('output.json'); // Открыааем первый файл
    $output2 = file_get_contents('output2.json'); // Открываем второй файл
    $json = json_decode($output, true); // Декодируем первый файл в массив
    $json2 = json_decode($output2, true); // Декодируем второй файл в массив
    $result = array_diff($json2, $json); // Сравнимаем первый файл со вторым
    if ($result === []) // Если значение $result пустое, выводим просто сообщение
    {
        echo "Изменений не найдено";
    } else // или выводим данные, которых нет в первом массиве
    {
        echo "Найдены новые данные<br/>";
        print_r($result);
    }
}

function task3()
{
    $arr = []; // Гернерируем массив с 50 случайными числами от 1 до 100
    for ($i = 0; $i < 51; $i++) {
        $arr[] = rand($i, 100);
    }
    $rec = fopen('./test.csv', 'w'); // Создаем в файл в формате CSV
    fputcsv($rec, $arr, ';'); // Сохраняем файл
    fclose($rec);
    $open = './test.csv';
    $csv = fopen($open, "r"); // Открываем файл на чтение
    $csvdecod = fgetcsv($csv, 200, ";"); // Преобразуем в массив
    $res = $csvdecod;
    $count = 0;
    foreach ($res as $key => $value) { // Проверяем массив на соответствие условиям
        if ($value % 2 == 0) { // Если значение массива четное, выполняем сложение
            $count += $value;
        }
    }
    echo 'Сумма четных чисел = ', $count; // Выводим результат на экран
}

function task4()
{
    $page = file_get_contents('https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json'); // Парсим страницу
    $decoded = json_decode($page, true); // Декодируем полученные данные в массив
    $data = ["title", "pageid"];
    echo '<pre>';
    $result = array_shift($decoded["query"]["pages"]); // Извлекаем из массива нужные данные
    foreach ($data as $value) { // Создаем цикл для поиска ключей и значений
        echo "<br>", $value . " = " . $result[$value]; // Выводим их на экран
    }
}
