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

      public function GetDate() {
        return $this->start;
      }

      public function GetDuration() {
        $interval =  $this->termination->diff($this->start);
        if ($interval->h != 0) {
          return $interval->h . " Horas " . $interval->i . " Minutos " . $interval->s . " Segundos";
        } else {
          return $interval->i . " Minutos " . $interval->s . " Segundos";
        }
      }

      public function GetAge() {
        $dateTimeNow = new DateTime();
        $interval = $dateTimeNow->diff($this->birth);
        return $interval->y . " Anos";
      }

      public function GetName() {
        return $this->name;
      }

      public function GetSex() {
        return $this->sex;
      }

      public function GetSchooling() {
         return $this->schooling;
      }

      public function GetSeem() {
        return $this->seem;
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