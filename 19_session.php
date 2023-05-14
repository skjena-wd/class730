<?php
session_start();

$_SESSION['username'] = "Alpha";
$_SESSION['userphone'] = 8658000963;

echo $_SESSION['userphone'];



?>