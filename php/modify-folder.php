<?php

$oldName = urldecode($_POST["oldName"]);
echo '$oldName ' . $oldName . '<br>';

$parent = explode( "/" , $oldName, -1);
$parent = implode("/", $parent);
$path = "/Local-Filesystem-Explorer/?dir=" . $parent;
echo '<pre>';
print_r($path);
echo '</pre>';

$dir = "../root$oldName";
echo 'dir' . $dir . '<br>';

$newFolderName = urldecode($_POST["renameFolder"]);
echo 'newFolderName ' . $newFolderName  . '<br>';

$oldName = $dir;
echo 'oldname ' . $oldName . '<br>';
$newName = "../root" . $parent . "/" . $newFolderName;
echo 'newName ' . $newName . '<br>';

rename($oldName, $newName);

header('Location: '. $path);
die();