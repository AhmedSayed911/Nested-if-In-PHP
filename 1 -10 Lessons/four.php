<?php
    // Data Types
    echo 1 + "2"; // 3
    echo "<br>";
    echo gettype(1 + "2"); // integer
    echo "<br>";
    echo true; // 1
    echo "<br>";
    echo true + true; // 2
    echo "<br>";
    echo gettype(true + true); // integer
    echo "<br>";
    echo 5 + "5 Lessons"; // non-numeric value
    echo gettype(5 + "5 Lessons"); // non-numeric value
    echo "<br>";
    echo gettype(10 + 15.5); // double