<?php

$rootPath = getcwd() . "/root";
$aux = '';

recursiveTree($rootPath, $aux);


function recursiveTree($dirPath,$aux){
    $dirContent = scandir($dirPath);
    foreach ($dirContent as $value){
        if ($value != '.' && $value != '..') {
            echo '<div class="showedFolder">'
            //. $typeIcon
            . '<a class="nameFolder" href=?dir=' . urlencode("/".$aux."/".$value) . '>' . '<p>' . $value .  '</p>' . '</a>' . "\n"
            . '</div>';
            if (is_dir($dirPath."/".$value)){
                recursiveTree($dirPath."/".$value, $value);
            }
        }
    }
}




//. '<a class="nameFolder" href=?dir=' . $queryParam . '>' . '<h2>' . $folder .  '</h2>' . '</a>' . "\n"