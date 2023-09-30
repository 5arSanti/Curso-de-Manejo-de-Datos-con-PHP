<?php
    //Simple
    $courses = [
        "JavaScript", 
        "Laravel", 
        "PHP", 
        "VUEjs"
    ];

    echo "<pre>";
    var_dump($courses);


    //Complejos
    $courses = [
        "FroneEnd" => "JavaScript", 
        "Framework" => "Laravel", 
        "BackEnd" => "PHP",
    ];


    foreach($courses as $key => $value) {
        echo "$key: $value \n";
    }


    function upper($course){
        echo strtoupper($course) . "<br>";
    }
    array_walk($courses, "upper");

    // echo "<pre>";
    // var_dump($courses);

    /**
     * array_key_exist("frontend", $courses);
     * in_array("JavaScript", $courses);
     * array_keys($courses);
     * array_values($courses);
     * 
    */