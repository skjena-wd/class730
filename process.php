<?php

$name = $_GET['cf_name'];
$mail = $_GET['cf_mail'];
$phone = $_GET['cf_phone'];

echo "<h3>Hello Mr. " . $name . "  Thanks for your response.  We got got your phone as " . $phone . " and your mail as " . $mail . "</h3>";




?>

<style>
h3 {
    width: 500px;
    text-align: center;
    margin: 100px auto;
    font-size: 24px;
}
</style>