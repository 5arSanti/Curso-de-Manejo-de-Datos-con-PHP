<?php

    $courses = ["javascript", "php"];
    $wishes = ["php", "laravel", "javascript", "vuejs"];

    echo "<pre>";
    var_dump(array_diff($wishes, $courses));

    $arrayA = [1, 2, 3, 4, 5];
    $arrayB = [3, 4, 5, 6, 7];

    var_dump(array_diff($arrayA, $arrayB));
    

    // UNION de arrays

    $frontend = [
        "frontend" => "javascript"
    ];
    $backtend = [
        "backend" => "php", 
        "framework" => "laravel"
    ];

    echo "<pre>";
    var_dump(array_merge($frontend + $backtend));

    /**
     echo "<h1>Unión</h1>";
    echo "---------------";
    echo "<br>";

    $frontent = [
        'frontend' => 'javascript'
    ];

    $backend = [
        'backend' => 'php', 
        'framework' => 'laravel'
    ];

    echo "<pre>";
    var_dump($frontent + $backend);

    #array_merge()
    //Combina dos o más arrays
    $frontent1 = ['javascript'];
    $backend1 = ['php', 'laravel'];

    echo "<pre>";
    var_dump(array_merge($frontent1, $backend1));

    echo "<br>";
    //Ejemplo con los mismo key
    #array_merge_recursive
    //Une dos o más arrays recursivamente
    $frontent3 = [
        'a' => 'javascript'
    ];

    $backend3 = [
        'a' => 'php', 
        'b' => 'laravel'
    ];

    echo "<pre>";
    var_dump(array_merge_recursive($frontent3, $backend3));
    //Esto crea un array "a" donde mete unos elementos y otro "b" que mete los demás
    //resultado
    /* 
    array(2) {
    ["a"]=>
    array(2) {
        [0]=>
        string(10) "javascript"
        [1]=>
        string(3) "php"
    }
    ["b"]=>
    string(7) "laravel"
    }
    

    echo "<br>";
    //Ejemplo con los mismo key
    #array_combine
    //Crea un nuevo array, usando una matriz para las claves y otra para sus valores
    $courses = ['javascript', 'php', 'laravel'];
    $categories = ['frontend', 'backend', 'framework'];

    var_dump(array_combine($categories, $courses));
    */