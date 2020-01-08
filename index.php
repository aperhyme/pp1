<?php
    /** Created by PhpStorm
     * Alex Grigorenko
     * IT 328
     * 1/6/20
     * Pair Program 1
     * File URL: http://agrigorenko.greenriverdev.com/328/pp1/
     */

    // Turn on error reporting -- this is critical!
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>

    <?php
        $numbers = array(7, 9, 8, 9, 8, 8, 6);
        printArr($numbers);

        echo "The largest number in array is ".largest($numbers)."<br>";

        echo "Removes the duplicates "."<br>";

        printArr(removeDups($numbers));

        echo "New Associative Array "."<br>";
        print_r(distribution($numbers));
    ?>

</body>
</html>