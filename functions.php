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

    // defines function
    function removeDups($numbers)
    {
        return array_unique($numbers);
    }

    // defines function
    function distribution($numbers)
    {
        $newArray = array();

        foreach($numbers as $number)
        {
            if (array_key_exists($number, $newArray)) {
                $value = $newArray[$number];
                $value = $value + 1;
                $newArray[$number] = $value;
            } else {
                $newArray[$number] = 1;
            }
        }

        return $newArray;
    }