<?php

    include("./class_text.php");
    include("./class_anothertext.php");
    echo "Hey <br>";
    $text = new Text();
    $textsecond = new Text2();

    echo $text->sometext . "<br>";
    echo $text->secondtext . "<br>";
    echo $textsecond->text3;

?>
