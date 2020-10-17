<?php
session_start();
$test3_answer = $_POST['ans'];
$answer3 = $test3_answer;
$answer2 = $_SESSION['answer2'];
$answer1 = $_SESSION['answer1'];

if(( $answer1 == 'yes') && ($answer2 == 'yes') && ($answer3 == 'yes')):
    echo 'Вы прошли тест !';
else:
    echo 'Попробуйте ещё.';
endif;

?>

