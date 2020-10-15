<?php

$a = 5;
$b = 10;
$c = 3;
define('D', (pow($b, 2) - (4*$a*$c)));

if (D > 0) {
	echo $x1 = round((-$b-sqrt(D))/(2*$a), 1);
	echo $x2 = round((-$b+sqrt(D))/(2*$a), 1);
}
elseif (D == 0) {
	echo $x1 = round(-$b/2*$a, 1);
}
else {
	echo 'дискриминант '.D.' не имеет корей.';
}

?>

