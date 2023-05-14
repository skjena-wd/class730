<?php
// linear Array
$cars = ["Tiago", "Fortuner", "Honda Civic", "Hyundai Verna"];

foreach ( $cars as $car ) {
   echo "<h3>". $car . "</h3>";
}

// Associative Array
$mycars = ["TATA" => "Tiago", "Toyota" =>"Fortuner", "Honda" => "Civic", "Hyundai" => "Verna"];

foreach ($mycars as $k => $v ){
   echo "<h4>$k ==> $v</h4>";
}



?>