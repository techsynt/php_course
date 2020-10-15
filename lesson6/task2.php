<?php

function equation($a,$b,$c) {
	define('D', (pow($b, 2) - (4*$a*$c)));
	if (D > 0){
		$x1 = round((-$b-sqrt(D))/(2*$a), 1);
		$x2 = round((-$b+sqrt(D))/(2*$a), 1);
		$array1 = array('x1' => $x1, 'x2' => $x2);
		return $array1;
	}
	elseif (D == 0){
            $x1 = round(-$b/2*$a);
            return $x1;
	}
	else {
		return 'нету квадратных корней';
	}
}
print_r(equation(5,55,1));

?>
