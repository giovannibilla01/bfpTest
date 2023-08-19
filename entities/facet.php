<?php
    namespace ObjectFacet;

    class Facet {
        private string $id = "";
        private string $name = "";
        public int $score = 0;
        public float $rawScore = 0.0;
        public int $percentile = 0;
        public string $classification = "";
        public string $definition  = "";
        public string $seem = "";

        public function __construct($id, $name, $questionArray, $requiredQuestions, $percentileValues, $classificationReference, $definitionReference, $seemReference) {
            $this->id = $id;
            $this->name = $name;

            $this->score = $this->Score($questionArray, $requiredQuestions);
            $this->rawScore = $this->Average($this->score, $requiredQuestions);
            $this->percentile = $this->PercentileCalculation($this->rawScore, $percentileValues);
            $this->classification = $this->RankAssignment($this->percentile, $classificationReference);
            $this->definition = $definitionReference[$this->classification];
            $this->seem = $this->SeemAssignment($this->percentile, $seemReference);
        }

        private function Score($questionArray, $requiredQuestions){
            $score = 0;
            for ($index = 1; $index < sizeof($questionArray); $index++){
                if (in_array($index, $requiredQuestions)){
                    $score =+ $questionArray[$index];
                }
            }
            return $score;
        }

        private function Average($score, $requiredQuestions){
            return $score / sizeof($requiredQuestions);
        }

        private function PercentileCalculation($rawScore, $percentileValues){
            for ($index = 5; $index <= 95; $index += 5){
                if ($rawScore <= $percentileValues[$index]){
                    return $index;
                }
            }
        }

        private function RankAssignment($percentile, $classificationReference){
            foreach ($classificationReference as $value){
                if ($percentile < $value[1]){
                    return $value[2];
                }
            }
        }

        private function SeemAssignment($percentile, $seemReference){
            switch ($seemReference['operation']) {
                case "between":
                    if ($percentile >= $seemReference['value'][1] && $percentile <= $seemReference['value'][2]) {
                        return "Apto";
                    } else {
                        return "Inapto";
                    }
                    break;
                case "less":
                    if ($percentile <= $seemReference['value'][1]) {
                        return "Apto";
                    } else {
                        return "Inapto";
                    }
                    break;
                case "greater":
                    if ($percentile >= $seemReference['value'][1]) {
                        return "Apto";
                    } else {
                        return "Inapto";
                    }
                    break;
            }
        }
    }
?>