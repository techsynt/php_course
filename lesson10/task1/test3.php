<?php
session_start();
$test2_answer = $_POST['ans'];
$_SESSION['answer2'] = $test2_answer;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>test1</title>
    </head>
    <body>
        <p> час это 60 минут ? </p>
        <form action="result.php" method="POST">
            <input type="radio" name="ans" value="yes">Да
            <input type="radio" name="ans" value="no">Нет
            <input type="submit">
            
        </form>
    </body>
</html>
