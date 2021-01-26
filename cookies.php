<?php
setcookie("Taima" , "tasks" ,time() +3600 , "/" , "google.com" , TRUE , TRUE);//expire after one  month
echo "<pre>";
print_r($_COOKIE);
echo "</pre>"


//delete the cookies
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);


?>