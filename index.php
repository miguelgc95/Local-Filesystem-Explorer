<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File system manager</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="js/listeners.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0-0/axios.js" type="text/javascript"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"></script>
</head>
<body>
    <nav class="navbar">
        <?php
            require('./php/newFolderButton.php');
        ?>
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