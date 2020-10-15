<?php

$arr1 = array('a','b','c','d','e', 'element' => 'f');
$arr2 = array('a','b','c','d','e');

unset($arr2[0]);

print($arr1[2]);
print($arr2[2]);

echo '<pre>';
print_r($arr1);
echo '</pre>';


echo '<pre>';
print_r($arr2);
echo '</pre>';

print_r(count($arr1));
print_r(count($arr2));