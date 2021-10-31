<?php

echo "Masukkan nama file: ";
$file = trim(fgets(STDIN));
echo "Masukkan password: ";
$key = trim(fgets(STDIN));
$hasil = hash_hmac('sha1',$file,$key);
echo "Hasil HASH : ".$hasil;
?>