<?php

      $cookie_name = "user";
      $cookie_value = "John Doe";
      setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/"); // 86400 = 1 day

      if(!isset($_COOKIE[$cookie_name])) {
      echo "Cookie named '" . $cookie_name . "' is not set!";
      } else {
      echo "<h3>Cookie '" . $cookie_name . "' is set!</h3>";
      echo "<h3>Value is: " . $_COOKIE[$cookie_name] . "</h3>";
      }

?>