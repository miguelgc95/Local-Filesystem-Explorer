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

        $typeIcon = changeIcons($folder);

        echo '<section class="showedFolder">'
                . $typeIcon
                . '<a class="nameFolder" href=?dir=' . $queryParam . '>' . '<h2>' . $folder .  '</h2>' . '</a>' . "\n"
                . '<p class="icon2">' . '<i class="fas fa-edit"></i>' . '</p>' . "\n"
                . '<p class="icon2">' . '<i class="fas fa-backspace"></i>' . '</p>' . "\n"
                . '</section>';
    }

    function changeIcons($folder) {

        $ext = isFileOrFolder($folder);

        switch($ext) {
            case '':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-folder"></i>' . '</p>';
                break;
            case 'doc':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-word"></i>' . '</p>';
                break;
            case 'odt':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-word"></i>' . '</p>';
                break;
            case 'exe':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-excel"></i>' . '</p>';
                break;
            case 'svg':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-excel"></i>' . '</p>';
                break;
            case 'zip':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-archive"></i>' . '</p>';
                break;
            case 'rar':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-archive"></i>' . '</p>';
                break;
            case 'csv':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-csv"></i>' . '</p>';
                break;
            case 'jpg':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-image"></i>' . '</p>';
                break;
            case 'png':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-image"></i>' . '</p>';
                break;
            case 'txt':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-alt"></i>' . '</p>';
                break;
            case 'ppt':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-powerpoint"></i>' . '</p>';
                break;
            case 'pdf':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-pdf"></i>' . '</p>';
                break;
            case 'mp3':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-audio"></i>' . '</p>';
                break;
            case 'mp4':
                $typeIcon = '<p class="icon">' . '<i class="fas fa-file-video"></i>' . '</p>';
                break;
        }
        return $typeIcon;
    }

    function isFileOrFolder($folder) {

        if(str_contains($folder, '.') !== true ) {
            $extension = '';
        } else {
            $extension = pathinfo($folder, PATHINFO_EXTENSION);
        }
        return $extension;
    }
