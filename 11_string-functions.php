<?php

$x = "Hello to World! Welcome to India";

$pwd = "admin@123";

echo "<h2>$x</h2>";

echo strlen("Narendra Modi");
echo "<br/>";

//1 Check the 1st Occurrence position and return the occurence index number
echo stripos($x, "Hello") . "<br>";

//2 Find the first occurrence of "to" inside "Hello to world! Welcome to India", and return the rest of the string
echo stristr($x, "to") . "<br>";

//3 Find the Index Position letter and return the entire string from that position
echo "<p>" . substr($x, 5) . "</p>";

//4 Make all the letters in the string to be Capital Letters
echo strtoupper($x) . "<br/>";

//5 Make all the letters in the string to be Lower Case
echo strtolower($x) . "<br/>";

//6 Remove characters from both sides of a string ("He" in "Hello" and "d!" in "World"):
echo trim($x, "Hdia"  ) . "<br>";

//7 Reverse the string 
echo strrev($x) . "<br/>";

//8 Encoding using sha1
echo sha1($pwd) . "<br>";

//9 Encoding using md5
echo md5($pwd) . "<br>";

// Join array elements with a string:
$arr = array('Hello', 'World!', 'Beautiful', 'Day!');
echo implode(" ", $arr) . "<br/>";

// Break a string into an array:
print_r(explode(" ", $x)) . "<br>";

print_r($_SERVER) . "<br/>" ;
echo "<br>";
echo "<h2>Unique ID : </h2>" . $_SERVER['UNIQUE_ID'] . "<br/>";
echo "<h2>HTTP_USER_AGENT : </h2>" . $_SERVER['HTTP_USER_AGENT'] . "<br/>";
?>

