<?php

//подключение файла классов
require_once 'classes.php';

$books = array();

//коннект к БД
$mydb = mysqli_connect('localhost', 'root', '999888', 'lesson11_db');
mysqli_set_charset($mydb, 'utf8');

//проверка на ошибки подключения к БД
if(mysqli_errno()):
    echo 'error!';
else:
    echo 'connection to DB initialized';
endif;

//запрос к БД
$query = 'SELECT * FROM `books`';
$data_from_db = mysqli_query($mydb, $query);

//обработка данных из массива БД
while ($row = mysqli_fetch_array($data_from_db)): 
    $books[] = new $row['type']($row);
endwhile;
