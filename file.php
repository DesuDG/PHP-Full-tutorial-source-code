<?php
$newfile= fopen("sample.txt","r") or die("unable to open!");
$txt= "dg tube\n";
fwrite($newfile,$txt);
echo fgets($newfile, filesize("sample.txt"));
?>