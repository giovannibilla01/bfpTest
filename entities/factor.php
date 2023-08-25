<?php 
    namespace ObjectFactor;

    use ObjectFacet\Facet;

    class Factor {
        private string $name = "";
        public $facets;
        public float $score = 0;
        public float $rawScore = 0.0;
        public int $percentile = 0;
        public string $classification = "";
        public string $definition  = "";
        public string $seem = "";

        public function __construct($name, $facets, $percentileValues, $classificationReference, $definitionReference, $seemReference) {
            $this->name = $name;
            $this->facets = $facets;
            $this->score = $this->Score();
            $this->rawScore = $this->score/count($this->facets);
            $this->percentile = $this->PercentileCalculation($this->rawScore, $percentileValues);
            $this->classification = $this->RankAssignment($this->percentile, $classificationReference);
            $this->definition = $definitionReference[$this->classification];
            $this->seem = $this->SeemAssignment($seemReference);
        }

        private function Score() {
            $sum = 0.0;
            foreach ($this->facets as $facet) {
                $sum += $facet->GetRawScore();
            }
            return $sum;
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

        private function SeemAssignment($seemReference){
            $sum = 0;
            foreach ($this->facets as $facet) {
                if ($facet->GetSeem() == "Apto") {
                    $sum++;
                }
            }
            return $sum >= $seemReference ? "Apto" : "Inapto";
        }

        public function GetSeem() {
            return $this->seem;
        }
    }
?>