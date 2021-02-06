<?php

$parentdec = urldecode($_POST["parent"]);
$parentundec = $_POST["parent"];
$semiPath = urldecode($_POST["semiPath"]);

$dir = "../root$semiPath";

echo $parentundec;
echo "<br>";
echo $parentdec;
$parent = "..$parentundec";

echo "<br>";
echo "<br>";
echo $_SERVER["DOCUMENT_ROOT"];

$joder = "/Local-Filesystem-Explorer/?dir=" . $parentundec;

rrmdir($dir);
function rrmdir($dir)
{
    $folder = scandir($dir);
    if (count($folder)==2){
        rmdir($dir);
    }else{
        foreach($folder as $value){
            if (is_file($dir."/".$value)){
                unlink($dir."/".$value);
            }elseif (is_dir($dir."/".$value)) {
                if ($value!="." && $value!=".."){
                    echo "<br>";
                    rrmdir($dir."/".$value);
                }
            }
        }
        rmdir($dir);
    }
}

header('Location: '.$joder);
die();
