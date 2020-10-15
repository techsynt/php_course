<?php 

define('MIN',10);
define('MAX',50);

$x = 11;

if (($x > MIN) && ($x < MAX)){
	echo '+';
}
elseif (($x == 10 ) || ($x == 50)){
	echo '+-';
}
else {
	echo '-';
}
?>
