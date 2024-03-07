<?php


$array1 = array('fname'=>'alex','lname'=>'brad','email'=>'alex@site.com','phone'=>'0132435','location'=>'new port','department'=>"CSE");

$result = array_slice($array1, 2);

echo "<pre>";
print_r($result);
echo "</pre>";