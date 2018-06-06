<?php
$fil ='./test.zip';
$zip = new ZipArchive();
$zip->open($fil,ZipArchive::CREATE);
//$zip->addFromString('test.txt',"this is new text");

$zip->close();

?>