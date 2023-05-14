<?php 

// ARITHMETIC OPERATORS = ADDITION, SUB, MULTIPLIY, DIV, MODULUS, EXPONENT, INCREMENT, DECREMENT
$a = 10; 
$b = 3;

$c = $a + $b;
$sub = $a - $b;
$mult = $a * $b ;
$div = $a/$b;
$mod = $a%$b;
$exp = $a ** $b;
$a++;
++$a;
$b--;
--$b;

echo "<p><b>Addition Arithmetic operation of 10 and 3 is : "  . $c . "</b></p>";
echo "<p><b>Subtraction Arithmetic operation of 10 and 3 is : "  . $sub . "</b></p>";
echo "<p><b>Multiplication Arithmetic operation of 10 and 3 is : "  . $mult . "</b></p>";
echo "<p><b>Division Arithmetic operation of 10 and 3 is : "  . $div . "</b></p>";
echo "<p><b>Addition Arithmetic operation of 10 and 3 is : "  . $mod . "</b></p>";
echo "<p><b>Exponentiation Arithmetic operation of 10 and 3 is : "  . $exp . "</b></p>";
echo "<p><b>Increment operation of 10++ is : "  . $a . "</b></p>";
echo "<p><b>Decrement operation of b  is : "  . $b . "</b></p>";







?>