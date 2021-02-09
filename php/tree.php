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
                echo '<div class="folder-tree" me="'. $value .'" parent="'. $dirPath .'" order="'.$counter.'">'
                . '<div class="click"><i class="not-click fas fa-caret-right"></i></div>'
                . '<a href=?dir=' . urlencode("/".$aux."/".$value) . '>'. $value .  '</a>' . "\n"
                . '</div>';
                recursiveTree($dirPath."/".$value, $value, $counter);
            }
            //else{
            //    echo '<div class="folder-tree" order="'.$counter.'">'
            //    . '<div></div>'
            //    . '<span  href=?dir=' . urlencode("/".$aux."/".$value) . '><p>' . $value .  '</p></span>' . "\n"
            //    . '</div>';
            //}
        }
    }
    $counter--;
}




//. '<a class="nameFolder" href=?dir=' . $queryParam . '>' . '<h2>' . $folder .  '</h2>' . '</a>' . "\n"