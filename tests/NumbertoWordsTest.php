<?php
    require_once "src/NumbertoWords.php";

    class WordsToNumberTest extends PHPUnit_Framework_TestCase
    {
        function test_one_digit()
        {
            //arrange
            $user_input = "1";
            $test_WordsToNumber = new WordsToNumber($user_input);

            //act
            $result = $test_WordsToNumber->translate();
            $desired_result = "one";

            //assert
            $this->assertEquals($desired_result, $result);
        }

        function test_two_digits()
        {
            //arrange
            $user_input = "10";
            $test_WordsToNumber = new WordsToNumber($user_input);

            //act
            $result = $test_WordsToNumber->translate();
            $desired_result = "ten";

            //assert
            $this->assertEquals($desired_result, $result);
        }

    }
 ?>
