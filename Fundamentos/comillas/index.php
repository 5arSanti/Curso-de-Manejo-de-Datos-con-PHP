<?php 
    $teacher = 'italo';
    $italo = "Profesor de PHP";

    echo "$teacher es {${$teacher}} <br>";


    function getTeacher (){
        return "teacher";
    }

    $teacher = 'Italo';
    echo "{${getTeacher()}} enseña PHP";


