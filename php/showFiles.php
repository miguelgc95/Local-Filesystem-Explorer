<?php

    if(empty($_GET['dir'])) {
        $root = getcwd() . "/root";
        $folder = scandir($root);
    } else {
        $dir = getcwd() . '/root'. $_GET['dir'];
        echo $dir;
        echo '<br>';
        $folder = scandir($dir);
        echo '<br>';
    }

    $foldercount = count($folder);
    for ($i=0; $i < $foldercount ; $i++) {
        if ($folder[$i] != '.' && $folder[$i] != '..') {
            $queryParam = urlencode('/' . $folder[$i]);
            echo "<pre>";
            print_r($queryParam);
            echo "</pre>";
            echo '<a class="nameFolder" href=?dir=' . $queryParam . '>' . '<h2>' . $folder[$i] .  '</h2>' . '</a>';
        }
    }
?>