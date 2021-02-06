<?php

$semiPath = urldecode($_POST["semiPath"]);

$dir = "../root$semiPath";

rrmdir($dir);
function rrmdir($dir)
{
    $folder = scandir($dir);
    var_dump($folder);
    if (count($folder)==2){
        echo "<br>";
        echo "borro a: $dir";
        echo "<br>";
        rmdir($dir);
    }else{
        foreach($folder as $value){
            if (is_file($dir."/".$value)){
                unlink($dir."/".$value);
            }elseif (is_dir($dir."/".$value)) {
                if ($value!="." && $value!=".."){
                    echo "<br>";
                    echo "recursivo";
                    echo "<br>";
                    rrmdir($dir."/".$value);
                }
            }
        }
        rmdir($dir);
    }
}
