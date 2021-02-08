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
    $folder = scandir($dir);
    $folderFiltered = array();
    echo '<br>';
    foreach($folder as $value){
        if (strpos($value, $pattern) !== false){
            array_push($folderFiltered, $value);
        }
    }
    return $folderFiltered;
}