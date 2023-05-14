<?php

$passmark = 60;

switch ($passmark) {
   case 10 :
   echo "<h3>You have failed</h3>";
   break;

   case 30 :
      echo "<h3>You have passed</h3>";
      break;
   
   case 60 :
      echo "<h3>You have got distinction</h3>";
      break;

   default :
      echo "<h3>Value not understood</h3>";   
}





?>