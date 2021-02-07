<?php
$parent = urlencode($aux);
echo '<form id="upload-form" method="post" action="./php/upload.php" enctype="multipart/form-data">' . "\n"
    . '<input type="hidden" name="path" value="'.$myquery.'">' . "\n"
    . '<input type="hidden" name="parent" value=' . $parent . '>' . "\n"
    . '<input id="upload-file" type="file" name="upload">' . "\n"
    . '</form>';
