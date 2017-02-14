<?php
    class Leet {

        function stringSplit($input)
        {
            $outputArray = array();
            $inputArray = str_split($input);
            foreach($inputArray as $key => $letter) {
                if($letter == "e"){
                    array_push($outputArray, "3");
                } elseif ($letter == 'o'){
                    array_push($outputArray, "0");
                } elseif($letter == 'I'){
                    array_push($outputArray, "1");
                } elseif($key != 0 && $letter == 's'){
                    array_push($outputArray, "Z");
                } else array_push($outputArray, $letter);
            }
            return implode(",",$outputArray);
        }
    }
?>
