<?php

$mydb = mysqli_connect('localhost', 'root', '999888', 'lesson11_db');
mysqli_set_charset($mydb, 'utf8');


if(mysqli_errno()):
    echo 'error!';
else:
    echo 'its ok';
endif;


$query = 'SELECT * FROM `news` WHERE status = 1;';

$data_from_db = mysqli_query($mydb, $query);

$count = mysqli_num_rows($data_from_db);
echo $count;
if ($count !== 0 ):
    while ($row = mysqli_fetch_array($data_from_db)):
        echo '<h1>'.$row['h1'].'</h1>';
        echo '<p>'.$row['short_content'].'</p>';
        echo "<a href = \"/news/view/{$row['id']}\">".'читать далее </a>';
    endwhile;
endif;


       
