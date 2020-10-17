<?php
session_start();
$test1_answer = $_POST['ans'];
$_SESSION['answer1'] = $test1_answer;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>test1</title>
    </head>
    <body>
        <p> сутки это 24 часа ? </p>
        <form action="test3.php" method="POST">
            <input type="radio" name="ans" value="yes">Да
            <input type="radio" name="ans" value="no">Нет
            <input type="submit">
            
        </form>
    </body>
</html>
