<?php

$a = "Jasmine";
$b = "Champa";
$c = "Lotus";

// 1 Array() function
$flowers = array("Jasmine", "Champa", "Lotus");

$flowers2 = ["rose", "hibiscus", "marigold"];

$flowers3 = [$a, $b, $c];

// 2 array_merge() function
$all_flowers = array_merge($flowers, $flowers2);

print_r($all_flowers);
echo "<br/>";


//3 sort() 
sort($all_flowers);
print_r($all_flowers);

echo "<br/>";
rsort($flowers);
print_r($flowers);

echo "<br/>";

$prices = [100, 50, 200, 3999, 24, 15];
rsort($prices);
print_r($prices);
echo "<br/>";

//4 count()
echo count($all_flowers) . "<br/>";
echo count($prices) . "<br/>";

// 5 push()
$colors = ["Red", "Green", "Blue"];
array_push($colors, "Purple", "Yellow", "Black");
print_r($colors);

echo "<br>";

// 6 pop()
array_pop($colors);
print_r($colors);

// 7 current, next

echo "<h3>" . current($colors) . "</h3>";
echo next($colors) . "<br/>";

// 8 pos($arr) : Output the value of the current element in an array:
echo pos($colors);
echo "<br>";

// 9
$my_arr = ["a" => "html", "b" => "css", "c" => "js"];

print_r(array_reverse($my_arr));
echo "<br>";

echo array_search("css", $my_arr);

?>