<?php
$current_dir=__DIR__;
$dir=opendir($current_dir);
echo("The files are"."<br>");
while($file=readdir(($dir))){
    echo $file."<br>";
}
closedir($dir);
?>