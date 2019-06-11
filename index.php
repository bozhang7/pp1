<?php
    /*
     * Name: Bo Zhang
     * Date: 6/10/2019
     * File URL: http://bzhang.greenriverdev.com/328/pp1/
     */

    // turns on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pair Program 1</title>
    </head>

    <body>
        <?php
            // defines an number array
            $numbers = array(7, 9, 8, 9, 8, 8, 6);

            include("functions.php");

            // calls the function
            printArr($numbers);
        ?>

    </body>
</html>

