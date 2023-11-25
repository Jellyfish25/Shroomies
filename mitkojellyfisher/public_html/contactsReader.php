<?php
    $file = fopen("contacts.txt", "r") or die("Unable to open file");
    $text = fread($file, filesize("contacts.txt"));
    echo nl2br($text);
    fclose($file);
?>