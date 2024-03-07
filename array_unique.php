<?php



$array1 = 

array(
'one'=>'dataOn',
'tow'=>'dataTw',
'three'=>'dataThree',
'four'=>'dataFour',
'one'=>'dataOne',
'tow'=>'dataTwo',
);

// similar Value ar first key ar data last key dara replace hobe

$result = array_unique($array1);

echo "<pre>";

print_r($array1);
echo "</pre>";