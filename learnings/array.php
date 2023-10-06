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
echo count($oddno);
//reset fn
$fn = reset($oddno);
echo $fn;





?>