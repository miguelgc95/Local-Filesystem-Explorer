<?php

$semiPath = urldecode($_POST["semiPath"]);
$dir = "../root$semiPath";
$parent = "/Local-Filesystem-Explorer/?dir=" . $_POST["parent"];

rrmdir($dir);
function rrmdir($dir)
{
    if (is_file($dir)){
        unlink($dir);
    }elseif(is_dir($dir)){
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
}

header('Location: '.$parent);
die();
