<?php 
$myFile = fopen("webdictionary.txt", "r") or
die("Unable to open file!");
while (!feof($myFile)) {
    # code...
    echo fgetc($myFile);
}
fclose($myFile);
$myFile = fopen("test.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myFile, $txt);
$txt = "Goofy Goof\n";
fwrite($myFile, $txt);
fclose($myFile);
?>