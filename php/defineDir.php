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