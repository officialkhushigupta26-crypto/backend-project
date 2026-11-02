<?php

// $cookie_name="user";
// $cookie_value="product";
// $expire_time = time()+(3600);

// setcookie($cookie_name,$cookie_value,$expire_time);
// echo $cookie_name;

$cookie_name="admin";
$cookie_value="product";
$expire_time=time()+(60*60);
setcookie($cookie_name,$cookie_value,$expire_time);
echo $cookie_value;

?>