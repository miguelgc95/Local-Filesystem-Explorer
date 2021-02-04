<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File system manager</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <nav class="navbar">
        searcher
    </nav>
    <section class="wrapper">
        <aside class="wrapper-tree">
        </aside>
        <section class="wrapper-main">
        <?php
            require('./php/showFiles.php');
        ?>
        </section>
        <aside class="wrapper-info">
        </aside>
    </section>

</body>
</html>