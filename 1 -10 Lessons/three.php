<?php 
    echo gettype(100); // integer
    echo ("<br>");
    echo gettype(false); // boolean
    echo ("<br>");
    echo gettype(true); // boolean
    echo ("<br>");
    echo gettype("text"); // string
    echo ("<br>");
    echo gettype(-200); // integer
    echo ("<br>");
    echo gettype(98.8888); // double
    echo ("<br>");
    echo gettype(array("one" => "Eg" , "two" => "Ksa")); // array
    echo ("<br>");
    echo gettype(array("Eg" ,"Ksa")); // array
    echo ("<br>");
    echo gettype(["Eg" ,"Ksa"]); // array