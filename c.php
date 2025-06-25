<?php
echo "123";
file_put_contents('abc.php',file_get_contents('123'));
sleep(5);
echo "456";
?>
