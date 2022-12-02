<?php
$file = fopen('file.txt', 'w');
$content = fread($file, filesize('file.txt'));
$noidung = 'nguyen dang duy';
print(fwrite($file, $noidung));
print($content);
