<?php

$fileIsUploaded = true;

if($fileIsUploaded) {
  echo "U'r file uploaded<br/>";
}


$isInt = is_int(1);
if ($isInt) {
  echo "Yep<br/>";
}

var_dump(is_int('alex'));
