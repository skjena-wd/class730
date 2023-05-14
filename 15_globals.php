<?php

$GLOBALS['x'] = 10;
$GLOBALS['y'] = 20;


function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
  }

  addition();
  echo $z;
?>