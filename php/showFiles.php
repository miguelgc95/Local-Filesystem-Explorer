<?php

if (empty($_GET['dir'])) {
    $dir = getcwd() . "/root";
    $folder = scandir($dir);
    $aux = '';
} else {
    $aux = urldecode($_GET['dir']);
    $dir = getcwd() . '/root' . $_GET['dir'];
    $folder = scandir($dir);
}

$foldercount = count($folder);
for ($i = 0; $i < $foldercount; $i++) {
    if ($folder[$i] != '.' && $folder[$i] != '..') {
        $queryParam = urlencode($aux . '/' . $folder[$i]);

        printMain($folder[$i], $queryParam, urlencode($aux));
    }
}

function printMain($folder, $queryParam, $parent)
{
    echo '<section class="showedFolder">'
        . '<p class="icon">' . '<i class="fas fa-folder"></i>' . '</p>' . "\n"
        . '<a class="nameFolder" href=?dir=' . $queryParam . '>' . '<h2>' . $folder .  '</h2>' . '</a>' . "\n"
        . '<p class="icon2">' . '<i class="fas fa-edit"></i>' . '</p>' . "\n"
        . '<form method="post" action="./php/delete-folder.php">' . "\n"
        . '<input type="hidden" name="semiPath" value=' . $queryParam . '>.' . "\n"
        . '<input type="hidden" name="parent" value=' . $parent . '>.' . "\n"
        . '<button type="submit"  class="icon2 hide-border"><i class="fas fa-backspace"></i></button>' . "\n"
        . '</form>' . "\n"
        . '</section>';
}
