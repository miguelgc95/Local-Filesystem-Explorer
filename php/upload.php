<?php

$path = urldecode($_POST['path']);
$dir = "../root$path";
$name = $_FILES['upload']['name'];
$parent = "/Local-Filesystem-Explorer/?dir=" . $_POST["parent"];

move_uploaded_file($_FILES['upload']['tmp_name'], "$dir/$name");

header('Location: '.$parent);
die();
