<?php 

// $str = "hello";
// $en = utf8_encode($str);
// echo "encode = ".$en;
// echo "<hr>";
// $dn = utf8_decode($en);
// echo "decode = ".$dn;
 ?>
<?php

$str = "hello";
$salt = "1234567890";
$en = crypt($str,$salt);
echo "encode = ".$en;

echo "<hr>";
$dn = dcrypt($en,$salt);
echo "decode = ".$dn;
 ?>
