<?php
    echo 5 + (integer) "5 lessons"; // 10
    echo "<br>";
    echo 5 + (int) "5 lessons"; // 10
    echo "<br>";
    echo 15 + (int) 10.5; // 25
    echo "<br>";
    echo (int) 10.5 + 10.5; // 20.5
    echo "<br>";
    echo (int) 10.5 + (int) 10.5; // 20
    echo "<br>";
    echo gettype((int) 10.5 + (int) 10.5); // integer