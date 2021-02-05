<?php

    $semiPath = urldecode($_POST["semiPath"]);
    rmdir("../root/$semiPath");
