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
            $this->rawScore = round($this->Average($this->score, $requiredQuestions), 2);
            $this->percentile = $this->PercentileCalculation($this->rawScore, $percentileValues);
            $this->classification = $this->RankAssignment($this->percentile, $classificationReference);
            $this->definition = $definitionReference[$this->classification];
            $this->seem = $this->SeemAssignment($this->percentile, $seemReference);
        }

        private function Score($questionArray, $requiredQuestions){
            $score = 0;
            for ($index = 0; $index <= count($questionArray); $index++){
                if (in_array($index, $requiredQuestions)){
                    $score += $questionArray[$index];
                }
            }
            return $score;
        }

        private function Average($score, $requiredQuestions){
            return $score / count($requiredQuestions);
        }

        private function PercentileCalculation($rawScore, $percentileValues){
            for ($index = 5; $index <= 95; $index += 5){
                if ($rawScore <= $percentileValues[$index]){
                    return $index;
                }
            }
            return 100;
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

        public function GetScore() {
            return $this->score;
        }

        public function GetRawScore() {
            return $this->rawScore;
        }

        public function GetSeem() {
            return $this->seem;
        }

        public function Table() {
            echo "
                <tr>
                    <th>$this->id - $this->name</th>
                    <td>$this->score</td>
                    <td>$this->rawScore</td>
                    <td>$this->percentile</td>
                    <td>$this->classification</td>
                    <td>$this->seem</td>
                </tr>
            ";
            if (!$this->definition == null && !$this->definition == "") {
                echo "
                    <tr>
                        <td colspan='6'>
                ";
                if (strlen($this->definition) <= 190) {
                    echo $this->definition;
                } else {
                    $definitionSlices = str_split($this->definition, 190);
                    echo $definitionSlices[0];
                    $editedName = str_replace(" ", "", $this->name);
                    echo "<span class='concealableMoreSpan' id='$editedName'>";
                    foreach ($definitionSlices as $key => $slice) {
                        if ($key != 0) {
                            echo $slice;
                        }
                    }
                    echo "</span>";
                    echo "<span class='concealableButtonSpan' id='$editedName-button' onclick='activeMoreSpan($editedName)'> Ler Mais</span>";
                }
                echo "
                        </td>
                    </tr>
                ";
            } else {
                echo "
                    <tr class='hiddenRow'>
                        <td colspan='6'>
                            &nbsp;
                        </td>
                    </tr>
                ";
            }
        }

        public function Chart() {
            echo "['$this->id - $this->name',  $this->percentile],";
        }
    }
?>