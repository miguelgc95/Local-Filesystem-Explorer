<?php

echo '<form id="searcher-form" class="searcher-form" method="post" action="">' . "\n"
    . '<input type="hidden" name="query" value=' . $myquery . '>' . "\n"
    . '<input type="text" id="searcher" class="searcher" name="searcher" placeholder="searcher">' . "\n"
    . '<input type="submit" value="search">'. "\n"
    . '</form>';
