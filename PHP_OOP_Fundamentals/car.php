<?php
    class Car {
        public $price;
        public $speed;
        public $fuel;
        public $mileage;

        public function __construct($price, $speed, $fuel, $mileage) {
            $this->price = $price;
            $this->speed = $speed;
            $this->fuel = $fuel;
            $this->mileage = $mileage;
            $this->tax = $this->Tax_check($price);
            $this->Display_all();
        }

        public function Display_all() {
            echo "Price: {$this->price} <br>";
            echo "Speed: {$this->speed}mph<br>";
            echo "Fuel: {$this->fuel} <br>";
            echo "Mileage: {$this->mileage}mpg<br>";
            echo "Tax: {$this->tax} <br><br>";
        }
        public function Tax_check($price) {
            if ($price > 10000) {
                $tax = 0.15;
            }
            else {
                $tax = 0.12;
            }
            return $tax;
        }

    }
    $car1 = new Car(2000, 35, "Full", 15);
    $car2 = new Car(2000, 5, "Not Full", 155);
    $car3 = new Car(2000, 15, "Kind of Full", 55);
    $car4 = new Car(2000, 25, "Full", 25);
    $car5 = new Car(2000, 45, "Empty", 25);
    $car6 = new Car(20000000, 35, "empty", 15);
?>