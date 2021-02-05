<?php

    $rp = json_decode(file_get_contents('php://input'), true);

    $thePath = "../root/" . urldecode($rp["query"]) . "/" . $rp["newName"];

    $mybool = mkdir($thePath);

?>