<?php
    require_once "src/Leet.php";

    class LeetTest extends PHPUnit_Framework_TestCase
    {

        function test_stringSplit()
        {
            $test_Leet = new Leet;
            $input = 'hello';

            $result = $test_Leet->stringSplit($input);
            $this->assertEquals(["h","e","l","l","o"], $result);
        }
    }
?>
