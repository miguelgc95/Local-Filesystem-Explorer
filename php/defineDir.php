<?php

if (empty($_POST['searcher'])){
    if (empty($_GET['dir'])) {
        $dir = getcwd() . "/root";
        $folder = scandir($dir);
        $myquery = '';
    } else {
        $dir = getcwd() . '/root' . urldecode($_GET['dir']);
        $folder = scandir($dir);
        $myquery =$_GET['dir'];
    }
}else{
    $myquery = $_POST['query'];
    $pattern = $_POST['searcher'];
    $folder = matchingSearch($myquery, $pattern);
}

function matchingSearch($myquery, $pattern) {
    $dir = getcwd() . '/root' . $myquery;

    $folderFiltered = array();
    $folderFiltered = recursiveSearch($dir, $pattern, $folderFiltered);

    return $folderFiltered;
}

function recursiveSearch($dir, $pattern, $folderFiltered){
    $folder = scandir($dir);
    foreach($folder as $value){
        if (is_dir($dir . "/" . $value)){
            if ($value != "." && $value != ".."){
                $folderFiltered = recursiveSearch($dir. "/" . $value, $pattern, $folderFiltered);
            }
        }
        if (strpos($value, $pattern) !== false){
            array_push($folderFiltered, $value);
        }
    }
    return $folderFiltered;
}
