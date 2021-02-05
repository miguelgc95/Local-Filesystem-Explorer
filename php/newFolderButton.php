<?php

if(!empty($_GET['dir'])) {
    $myquery =urlencode($_GET['dir']);
}else{
    $myquery = '';
}
    echo '<input id="new-folder" type="text" query="' . $myquery . '" name="foldername" placeholder="create new folder">';

?>