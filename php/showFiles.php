<?php

    if(empty($_GET['dir'])) {
        $root = getcwd() . "/root";
        $folder = scandir($root);
    } else {
        $aux = urldecode($_GET['dir']);
        $dir = getcwd() . '/root'. $_GET['dir'];
        $folder = scandir($dir);

    }

    $foldercount = count($folder);
    for ($i=0; $i < $foldercount ; $i++) {
        if ($folder[$i] != '.' && $folder[$i] != '..') {
            $queryParam = urlencode($aux . '/' . $folder[$i]);
            echo '<a class="nameFolder" href=?dir=' . $queryParam . '>' . '<h2>' . $folder[$i] .  '</h2>' . '</a>';
        }
    }
?>