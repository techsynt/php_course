<?php
// POST method 

$gender = $_POST['choice'];


if($gender == 'male'):
    echo 'добрый день мистер смит';
else:
    echo 'добрый день миссис смит';
endif;
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <form action="task3.php" method="POST">
            <input type="radio" name="choice" value="male">Мужчина<br>
            <input type="radio" name="choice" value="female">Женщина<br>
            <input type="submit">
        </form>
    </body>

</html>
