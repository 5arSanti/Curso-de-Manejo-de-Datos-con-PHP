<?php 

    //Alterar
    $text = "PHP es UN LENGuaje, año 2020, programación";
    // echo strtolower($text);
    // echo "<br>";
    // echo strtoupper($text);
    // echo "<br>";
    // echo ucfirst($text);
    // echo "<br>";
    // echo lcfirst($text);


    //Reemplazar
    $slug = str_replace(" ", "-", $text);
    // echo strtolower($slug);


    //Modificacion
    $code = 39;
    // echo str_pad($code, 8, "#", STR_PAD_BOTH);


    // echo strip_tags($text);


    echo strtoupper($text) . "<br>"; //monobyte
    echo mb_strtoupper($text); //multibyte




