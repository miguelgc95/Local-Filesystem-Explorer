<?php

$rootPath = getcwd() . "/root";
$aux = '';
$counter =0;

recursiveTree($rootPath, $aux, $counter);


function recursiveTree($dirPath, $aux, $counter){
    $counter++;
    $dirContent = scandir($dirPath);
    foreach ($dirContent as $value){
        if ($value != '.' && $value != '..') {
            if (is_dir($dirPath."/".$value)){
                echo '<div class="showedFolder" order="'.$counter.'">'
                . '<i class="fas fa-caret-right"></i>'
                . '<a class="nameFolder" href=?dir=' . urlencode("/".$aux."/".$value) . '>' . '<p>' . $value .  '</p>' . '</a>' . "\n"
                . '</div>';
                recursiveTree($dirPath."/".$value, $value, $counter);
            }else{
                echo '<div class="showedFolder" order="'.$counter.'">'
                . '<a class="nameFolder" href=?dir=' . urlencode("/".$aux."/".$value) . '>' . '<p>' . $value .  '</p>' . '</a>' . "\n"
                . '</div>';
            }
        }
    }
    $counter--;
}




//. '<a class="nameFolder" href=?dir=' . $queryParam . '>' . '<h2>' . $folder .  '</h2>' . '</a>' . "\n"