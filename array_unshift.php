<?php

$a=array("a"=>"red","b"=>"green");
array_unshift($a,array("c"=>"blue"));
print_r($a);

echo "<br/>";
$b=array("a"=>"red","b"=>"green");
array_unshift($b,"blue");
print_r($b);
echo "<br/>";
$c=array("a"=>"red","b"=>"green");
array_unshift($c,"blue","white");
print_r($c);
