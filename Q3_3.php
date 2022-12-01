<?php
$myfile = fopen("A050.txt", "w") or die("Unable to open file!");
$txt = "Hi, I am Neha Shah, Roll no. A050 from batch 03 & currently pursuing MCA from MPSTME.";
fwrite($myfile, $txt);
fclose($myfile);
echo "FILE WRITTEN AND CLOSED"
?>