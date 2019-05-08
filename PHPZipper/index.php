<?php
ini_set('display_errors', 1);
require_once ('Zipper.php');

$zipper = new testnamespace\Zipper;

$zipper->add('text.txt');
$zipper->add(array('index.php','Zipper.php'));

$zipper->store('files/zipped.zip');
