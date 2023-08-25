<?php 
  namespace ObjectTest;

use DateTime;
use DateTimeZone;
use ObjectFactor\Factor;

  class Test {
      public $factors;
      public $start;
      public $termination;
      public string $name;
      public string $sex;
      public $birth;
      public string $schooling;
      public string $seem = "";

      public function __construct($factors, $start, $termination, $name, $sex, $birth, $schooling, $seemReference) {
        $this->factors = $factors;
        $this->start = new DateTime($start, new DateTimeZone('UTC'));
        $this->termination = new DateTime($termination, new DateTimeZone('UTC'));
        $this->name = $name;
        $this->sex = $sex;
        $this->birth = new DateTime($birth, new DateTimeZone('UTC'));
        $this->schooling = $schooling;
        $this->seem = $this->SeemAssignment($seemReference);
      }

      public function getDate() {
        return $this->start;
      }

      public function getDuration() {
        return $this->termination->diff($this->start);
      }

      public function getAge() {
        $dateTimeNow = new DateTime();
        $interval = $dateTimeNow->diff($this->birth);
        return $interval->y;
      }

      public function getName() {
        return $this->name;
      }

      public function getSex() {
        return $this->sex;
      }

      public function getSchooling() {
         return $this->schooling;
      }
      
      private function SeemAssignment($seemReference){
        $sum = 0;
        foreach ($this->factors as $factor) {
            if ($factor->GetSeem() == "Apto") {
                $sum++;
            }
        }
        return $sum >= $seemReference ? "Apto" : "Inapto";
      }
  }
?>