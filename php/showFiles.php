<?php

    if(empty($_GET['dir'])) {
        $root = getcwd() . "/root";
        $folder = scandir($root);
        $aux = '';
    } else {
        $aux = urldecode($_GET['dir']);
        $dir = getcwd() . '/root'. $_GET['dir'];
        $folder = scandir($dir);
    }

    $foldercount = count($folder);
    for ($i=0; $i < $foldercount ; $i++) {
        if ($folder[$i] != '.' && $folder[$i] != '..') {
            $queryParam = urlencode($aux . '/' . $folder[$i]);

            printMain($folder[$i], $queryParam);
        }
    }

    function printMain($folder, $queryParam) {
        echo '<section class="showedFolder">'
                . '<p class="icon">' . '<i class="fas fa-folder"></i>' . '</p>' . "\n"
                . '<a class="nameFolder" href=?dir=' . $queryParam . '>' . '<h2>' . $folder .  '</h2>' . '</a>' . "\n"
                . '<p class="icon2">' . '<i class="fas fa-edit"></i>' . '</p>' . "\n"
                . '<p class="icon2">' . '<i class="fas fa-backspace"></i>' . '</p>' . "\n"
                . '</section>';
    }
?>