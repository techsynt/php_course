<?php
$products = array(
array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
);


function summary($arr){
	foreach($arr as $element1){
		foreach($element1 as $i => $element2){
			if($i == 'price'){
				$sum_price += $element2;
			}
			elseif($i == 'quantity'){
				$quantity_sum += $element2;
			}
		}
	}
	return array('сумма' => $sum_price, 'кол-во' => $quantity_sum);
}

print_r(summary($products));

