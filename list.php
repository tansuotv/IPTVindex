<?php
header('Content-Type: text/json;charset=UTF-8');
$dir=dirname(__FILE__);
$files = glob('./list/*.txt');
$result='';
foreach ($files as $file) {
        $fsize=filesize($file);
        $myfile = fopen($file, "r") or die("Unable to open file!");
        $txt= fread($myfile,$fsize);
        fclose($myfile);
        $txt=$txt."\r\n";
        $result=$result.$txt;
}
echo $result;
?>
