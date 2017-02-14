<?php
    class Leet {

        function stringSplit($input)
        {
            $inputArray = array();
            $outputArray = array();
            $inputArray = str_split($input);
            foreach($inputArray as $letter) {
                if($letter == "e"){
                    array_push($outputArray, "3");
                } elseif ($letter == 'o'){
                    array_push($outputArray, "0");
                } elseif($letter == 'I'){
                    array_push($outputArray, "1");
                } else array_push($outputArray, $letter);
            }
            return $outputArray;
        }
    }
?>
