<?php
    var_dump((bool) ""); // false
    echo "<br>";
    var_dump((bool) array()); // false
    echo "<br>";
    var_dump((bool) []); // false
    echo "<br>";
    var_dump((bool) "0"); // false
    echo "<br>";
    var_dump((bool) 0); // false
    echo "<br>";
    var_dump((bool) "a"); // true
    echo "<br>";
    var_dump((bool) [1]); // true
    echo "<br>";
    var_dump((bool) array(1)); // true
    echo "<br>";
    var_dump((bool) 10.5); // true
    echo "<br>";
    var_dump((bool) -200); // true