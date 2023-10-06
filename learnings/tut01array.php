<?php
//Sample Array
$oddno  = [0,1,3,5,7];
echo "Odd No list\n";
print_r($oddno);
echo $oddno[4];

//adding new no in array
$oddno[5] = 9;
print_r($oddno);
//delete a member
unset($oddno[2]);
print_r($oddno);
//count fn
echo count($oddno),"\n";
//reset fn
$fn = reset($oddno);
echo $fn,"\n";
//last element fn
$lastelement = end($oddno);
echo $lastelement;
//Note that we subtract one from the last index because indices are zero based in PHP 
//so we need to fix the fact that we don't count variable number zero.
$odd_numbers = [1,3,5,7,9];
$last_index = count($odd_numbers) - 1;
$last_item = $odd_numbers[$last_index];
echo $last_item;


?>