<?php

$arr = array(-2,2,-4,4,-5,6,7);
function deleteNegtives($array){
	foreach($array as $i => &$element){
		if ( $element < 0 ) {
                    unset($array[$i]);
		}             
        }
        return $array;        
}
      
print_r(deleteNegtives($arr));

