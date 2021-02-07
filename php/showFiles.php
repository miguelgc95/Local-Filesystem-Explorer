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
                $typeIcon = '<div class="icon">' . '<i class="fas fa-folder"></i>' . '</div>';
                break;
            case 'doc':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-word"></i>' . '</div>';
                break;
            case 'odt':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-word"></i>' . '</div>';
                break;
            case 'exe':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-excel"></i>' . '</div>';
                break;
            case 'svg':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-excel"></i>' . '</div>';
                break;
            case 'zip':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-archive"></i>' . '</div>';
                break;
            case 'rar':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-archive"></i>' . '</div>';
                break;
            case 'csv':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-csv"></i>' . '</div>';
                break;
            case 'jpg':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-image"></i>' . '</div>';
                break;
            case 'png':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-image"></i>' . '</div>';
                break;
            case 'txt':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-alt"></i>' . '</div>';
                break;
            case 'ppt':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-powerpoint"></i>' . '</div>';
                break;
            case 'pdf':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-pdf"></i>' . '</div>';
                break;
            case 'mp3':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-audio"></i>' . '</div>';
                break;
            case 'mp4':
                $typeIcon = '<div class="icon">' . '<i class="fas fa-file-video"></i>' . '</div>';
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
