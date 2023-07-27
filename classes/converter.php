<?php
    namespace bfpTest;

    class Converter{
        public $questionsToReverse;

        function __construct($questionsToReverse)
        {
            $this->questionsToReverse = $questionsToReverse;
        }

        public function Convert($questionArray){
            for ($index = 1; $index < sizeof($questionArray); $index++){
                if (in_array($index, $this->questionsToReverse)){ //
                    switch ($questionArray[$index]) {
                    case 1:
                        $responseArray[$index] = "7";
                        break;
                    case 2:
                        $responseArray[$index] = "6";
                        break;
                    case 3:
                        $responseArray[$index] = "5";
                        break;
                    case 4:
                        $responseArray[$index] = "4";
                        break;
                    case 5:
                        $responseArray[$index] = "3";
                        break;
                    case 6:
                        $responseArray[$index] = "2";
                        break;
                    case 7:
                        $responseArray[$index] = "1";
                        break;
                    }
                } else {
                    $responseArray[$index] = $questionArray[$index];
                }
            }
            return $responseArray;
        }
    }
?>