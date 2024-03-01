<?php

$a = array(

	"one"=>'a',
	"two"=>'a',
	"three"=>'c',
	"four"=>'a');

$result = array_search("a", $a);

echo "<pre>";
print_r($result);
echo "</pre>";
echo "<br>";
$a=array("a"=>"5","b"=>5,"c"=>"5");
echo array_search(5,$a,true);