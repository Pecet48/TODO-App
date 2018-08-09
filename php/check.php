<?php

$title = $_GET['title'];
$description = $_GET['description'];

if(strlen($title) < 10){
    echo "Tytuł za krótki, min. 10 znaków!";
} elseif(strlen($title) > 255) {
    echo "Tytuł za długi, max. 255 znaków!";
} elseif(strlen($description) > 255) {
    echo "Opis za długi, max. 255 znaków!";
} else {
    echo true;
}

?>