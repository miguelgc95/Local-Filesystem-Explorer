<?php
<<<<<<< HEAD
$parent = urlencode($myquery);
=======

$parent = urlencode($aux);
>>>>>>> main
echo '<form id="upload-form" class="upload-form" method="post" action="./php/upload.php" enctype="multipart/form-data">' . "\n"
    . '<input type="hidden" name="path" value="'.$myquery.'">' . "\n"
    . '<input type="hidden" name="parent" value=' . $parent . '>' . "\n"
    . '<input id="upload-file" class="upload-file" type="file" name="upload">' . "\n"
    . '</form>';
