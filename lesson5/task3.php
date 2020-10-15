<?php

$array1 = array();
for($i = 10; $i >= 1; $i--):
	$array1[$i] = 'Кнопка '.$i;
endfor;

natsort($array1);

echo "<ul>\n";
foreach($array1 as $value){
	echo '<li><a href = "#">'.$value.'</a></li>'."\n";
}
echo '</ul>';

?>
	
