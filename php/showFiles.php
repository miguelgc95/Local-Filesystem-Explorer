<?php

    if(empty($_GET['dir'])) {
        $root = getcwd() . "/root";
        $folder = scandir($root);
        $aux = '';
    } else {
        /* var_dump(urldecode($_GET['dir'])); */
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
        /* echo '$folder ' . $folder;
        echo '<br>';
        echo '$queryParam' . $queryParam;
        echo '<br>'; */
        changeIcons($folder);
        echo '<section class="showedFolder">'
                . '<p class="icon">' . '<i class="fas fa-folder"></i>' . '</p>' . "\n"
                . '<a class="nameFolder" href=?dir=' . $queryParam . '>' . '<h2>' . $folder .  '</h2>' . '</a>' . "\n"
                . '<p class="icon2">' . '<i class="fas fa-edit"></i>' . '</p>' . "\n"
                . '<p class="icon2">' . '<i class="fas fa-backspace"></i>' . '</p>' . "\n"
                . '</section>';
    }

    function changeIcons($folder) {
        echo '$folder ' . $folder;
        echo '<br>';

        switch($extension) {
            case '':
                '<p class="icon">' . '<i class="fas fa-folder"></i>' . '</p>';
            case 'doc':
                '<p class="icon">' . '<i class="fas fa-file-word"></i>' . '</p>';
            case 'odt':
                '<p class="icon">' . '<i class="fas fa-file-word"></i>' . '</p>';
            case 'exe':
                '<p class="icon">' . '<i class="fas fa-file-excel"></i>' . '</p>';
            case 'svg':
                '<p class="icon">' . '<i class="fas fa-file-excel"></i>' . '</p>';
            case 'zip':
                '<p class="icon">' . '<i class="fas fa-file-archive"></i>' . '</p>';
            case 'rar':
                '<p class="icon">' . '<i class="fas fa-file-archive"></i>' . '</p>';
            case 'csv':
                '<p class="icon">' . '<i class="fas fa-file-csv"></i>' . '</p>';
            case 'jpg':
                '<p class="icon">' . '<i class="fas fa-file-image"></i>' . '</p>';
            case 'png':
                '<p class="icon">' . '<i class="fas fa-file-image"></i>' . '</p>';
            case 'txt':
                '<p class="icon">' . '<i class="fas fa-file-alt"></i>' . '</p>';
            case 'ppt':
                '<p class="icon">' . '<i class="fas fa-file-powerpoint"></i>' . '</p>';
            case 'pdf':
                '<p class="icon">' . '<i class="fas fa-file-pdf"></i>' . '</p>';
            case 'mp3':
                '<p class="icon">' . '<i class="fas fa-file-audio"></i>' . '</p>';
            case 'mp4':
                '<p class="icon">' . '<i class="fas fa-file-video"></i>' . '</p>';
        }
    }
?>