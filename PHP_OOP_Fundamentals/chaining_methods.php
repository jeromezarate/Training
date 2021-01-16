<?php
    class Bike {
        public $price;
        public $max_speed;
        public $miles;
        var $bikeInfo = array();

        /*----- CONSTRUCTOR -----*/
        public function __construct($price, $max_speed) {
            $this->price = $price;
            $this->max_speed = $max_speed;
            $this->miles = 0;
        }

        public function displayInfo() {
            echo "Price: {$this->price} <br>";
            echo "Max Speed: {$this->max_speed} <br>";
            echo "Miles: {$this->miles} <br><br>";
        }

        public function drive() {
            $this->miles += 10;
            return $this;
        }

        public function reverse() {
            if ($this->miles > 0) {
                $this->miles -= 5;
            }
            return $this;
        }
    }
    $bike1 = new Bike(90, 100);
    $bike1->drive()->drive()->drive()->reverse()->displayInfo();
    $bike2 = new Bike(20, 130);
    $bike2->drive()->drive()->reverse()->reverse()->displayInfo();
    $bike3 = new Bike(45,50);
    $bike3->reverse()->reverse()->reverse()->displayInfo();
?>