<?php

    //Valores
    // function greet($name) {
    //     return "Hola, $name";
    // }

    // echo greet("Santi");    


    //Referencias
    $course = "PHP";
    function path(&$course){
        $course = "Laravel";
        echo $course;
    }

    path($course);
    echo $course;


    //Predeterminado
    function greet($name = "Italo") {
        return $name;
    }
    echo greet();