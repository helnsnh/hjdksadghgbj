<?php
echo date("h:i:s") . "<br />";
file_put_contents('123.php',file_get_contents('123'));
sleep(2);
echo date('h:i:s') . "<br />";
sleep(2);
echo date('h:i:s');
?>
