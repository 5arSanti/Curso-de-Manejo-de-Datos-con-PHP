<?php

    $courses = [
        10 => "php", 
        100 => "javascript", 
        1000 => "laravel"
    ];
    krsort($courses);

    // echo "<pre>";
    // var_dump($courses);

    var_dump(array_slice($courses, 1)); //Quitar una porcion del array
    var_dump(array_chunk($courses, 2)); //Crea un nuevo array dependiendo del valor numerico. Este valo es la cantidad de valores que va a tener cada array


    // array_shift($courses) //Eliminar y retoranar el primer elemento
    // array_pop($courses) //Eliminar y retoranar el ultimo elemento
    // array_unshift() //Agrega a la primera posicion del array
    // array_push() //Agrega a la ultima posicion del array
    // array_flip() // Intercambia la key y el valor de un array complejo
