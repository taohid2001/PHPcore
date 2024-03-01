<?php
$a = array('a'=>'red','green','blue','white');
$b = array('black','pink','mezenda','ofwhite');

$result = array_replace_recursive($a,$b);

print_r($result);

echo "<br>";
$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
$a2=array("a"=>array("yellow"),"b"=>array("black"));
print_r(array_replace_recursive($a1,$a2));

