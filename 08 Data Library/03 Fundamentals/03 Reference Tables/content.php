x
<?php    echo "test";   $fun = file_get_contents("http://www.quantconnect.com/services/fundamentals");   $fun = json_decode($fun);   print_r($fun);?>
