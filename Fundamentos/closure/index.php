<?php

    // $greet = function ($name) { //Variable que requiere logica
    //     return "Hola $name";
    // };

    // echo $greet("Santi");


    function greet(Closure $lang, $name){
        return $lang($name);
    }

    $es = function ($name) {
        return "Hola, $name";
    };

    $en = function ($name) {
        return "Hi, $name";
    };

    echo greet($en, "Santi");