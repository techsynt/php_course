<?php
// POST method 

$myarr = $_POST;

echo min($myarr).'<br>';
echo max($myarr).'<br>';

foreach ($myarr as $i => $value){
    $sum += $value;
}
echo round($sum/count($myarr), 1 );

?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <form action="task2.php" method="POST">
            <input type="text" name="field1"><br>
            <input type="text" name="field2"><br>
            <input type="text" name="field3"><br>
            <input type="text" name="field4"><br>
            <input type="text" name="field5"><br>
            <input type="text" name="field6"><br>
            <input type="text" name="field7"><br>
            <input type="submit">
        </form>
    </body>

</html>
