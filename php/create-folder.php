<?php

$rp = json_decode(file_get_contents('php://input'), true);

//echo count($rp);
foreach($rp as $key => $value){
    echo $key . " " . $value;
}
?>