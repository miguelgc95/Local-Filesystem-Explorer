<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File system manager</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <script src="js/listeners.js" defer></script>
    <script src="js/modifyFolder.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0-0/axios.js" type="text/javascript"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"></script>
</head>
<body>
    <section class="modal-section hidden" id="modal-section"></section>
    <nav class="navbar">
        <?php
            require('./php/defineDir.php');
            require('./php/searcher.php');
        ?>
    </nav>
    <section class="wrapper">
        <aside class="wrapper-tree">
            <?php
                require('./php/newFolderButton.php');
                require('./php/uploadFileButton.php');
            ?>
            <section class="tree-section">
            <?php
                require('./php/tree.php');
            ?>
            </section>
        </aside>
        <section class="wrapper-main">
        <?php
            require('./php/showFiles.php');
        ?>
        </section>
    </section>

</body>
</html>