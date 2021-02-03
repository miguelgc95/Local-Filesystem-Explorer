<?php

        // //mkdir("./root/nuevofolder");
        // $fichero = './root/gente.txt';
        // // Abre el fichero para obtener el contenido existente
        // $actual = file_get_contents($fichero);
        // // Añade una nueva persona al fichero
        // $actual .= "Miguel Gar\n";
        // // Escribe el contenido al fichero
        // file_put_contents($fichero, $actual);

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File system manager</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0-0/axios.js" type="text/javascript"></script>
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
                $path = getcwd()."/root";
                echo $path;
                echo '<br>';
                echo '<br>';
                $folder = scandir($path);
                echo "<pre>";
                print_r ($folder); //array
                echo "</pre>";

                /* $dir = $path; */

                // Abre un directorio conocido, y procede a leer el contenido
                /* if (is_dir($dir)) {
                    if ($dh = opendir($dir)) {
                        while (($file = readdir($dh)) !== false) {
                            echo "nombre archivo: $file : tipo archivo: " . filetype($dir . $file) . "<br>";
                        }
                        closedir($dh);
                    }
                } */

                $foldercount = count($folder);
                /* echo $foldercount; */
                for ($i=0; $i < $foldercount ; $i++) {
                    if ($folder[$i] != '.' && $folder[$i] != '..') {
                        /* print_r($folder[$i]); */
                        echo '<a class="nameFolder" href=./root/' . $folder[$i].'>' . '<h2>' . $folder[$i] .  '</h2>' . '</a>';
                        //echo '<a class="nameFolder" href='. $path . '/' . $folder[$i] . '>' . '<h2>' . $folder[$i] .  '</h2>' . '</a>';
                        //echo '<p>' . $path . '/' . $folder[$i] . '</p>';
                    }
                }

            ?>
        </section>
        <aside class="wrapper-info">
        </aside>
    </section>

    <script>
        axios.get(url)
        .then()
        .catch(error => {
        console.log("error", error);
    })
    </script>
</body>
</html>