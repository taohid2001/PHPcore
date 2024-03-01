<?php


$a = array('zero'=>'a','one'=>'b',array('c','d'));

$result = array_reverse($a,true);


echo "<pre>";
print_r($a);
echo "<pre/>";

echo "<pre>";
print_r($result);
echo "<pre/>";

// $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
// print_r($a);

// echo "<pre>";
// print_r(array_reverse($a));
// echo "<pre/>";

// $a=array("Volvo","XC90",array("BMW","Toyota"));
// $reverse=array_reverse($a);
// $preserve=array_reverse($a,true);

// print_r($a);
// print_r($reverse);
// echo '...';
// print_r($preserve);



