<?php

/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 8-11-2017
 * Time: 12:03
 */

class binary
{
    public function __construct($input){
        $result = [];
        echo "decimal: " . $input . "<br>";
        while ($input > 0){
            $temp = floor($input / 2);
            array_push($result, $input - $temp * 2);
            $input = $temp;
        }
        echo "binary: ";
        for($i = count($result)-1; $i > -1; $i--){
            echo $result[$i];
        }
        echo "<br>---------------------------<br>";
    }
}

for($i = 1; $i < 101; $i++) {
    $calc = new binary($i);
}