<?php
    // defines function
    function printArr($numbers)
    {
        foreach($numbers as $number)
        {
            echo "$number<br>";
        }
    }

    // defines function
    function largest($numbers)
    {
        return max($numbers);
    }