<?php

if (empty($_POST['searcher'])){
    if (empty($_GET['dir'])) {
        $dir = getcwd() . "/root";
        $folder = scandir($dir);
        $myquery = '';
    } else {
        $dir = getcwd() . '/root' . urldecode($_GET['dir']);
        echo $dir;
        $folder = scandir($dir);
        $myquery =$_GET['dir'];
    }
}else{
    $myquery = $_POST['query'];
    $folder = matchingSearch($myquery);
}

function matchingSearch($myquery) {
    $dir = getcwd() . '/root' . $myquery;
    echo $dir;
    $dirdec = getcwd() . '/root' . urldecode($myquery);
    $folder = scandir($dirdec);
    return $folder;
}