<?php

    if(empty($_GET['dir'])) {
        $root = getcwd() . "/root";
        $folder = scandir($root);
    } else {
        $dir = getcwd() . '/root'. $_GET['dir'];
        /* echo $dir; */
        echo '<br>';
        $folder = scandir($dir);
        echo '<br>';
    }

    $foldercount = count($folder);
    for ($i=0; $i < $foldercount ; $i++) {
        if ($folder[$i] != '.' && $folder[$i] != '..') {
            $queryParam = urlencode('/' . $folder[$i]);
            /* echo "<pre>";
            print_r($queryParam);
            echo "</pre>"; */


            /* echo $folder[$i]; */
            /* echo '<br>'; */
            printMain($folder[$i]);


            echo '<a class="nameFolder" href=?dir=' . $queryParam . '>' . '<h2>' . $folder[$i] .  '</h2>' . '</a>';
        }
    }

    function printMain($folder) {
        /* echo $folder; */
        echo '<section class="showedFolder">'
                . '<p class="icon">' . '<i class="fas fa-folder"></i>' . '</p>' . "\n"
                . '<h2 class="nameFolder">' . $folder . '</h2>' . "\n"
                . '<p class="icon2">' . '<i class="fas fa-edit"></i>' . '</p>' . "\n"
                . '<p class="icon2">' . '<i class="fas fa-backspace"></i>' . '</p>' . "\n"
                . '</section>';
    }
?>