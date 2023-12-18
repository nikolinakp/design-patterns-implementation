<?php

    interface CarFactory{
        public function createCar(): Car;
    }

    interface Car{
        public function print(): void;
    }

    class Ferrari implements Car{
        public function print(): void {
            echo "I am Ferrari";
        }
    }

    class Audi implements Car{
        public function print(): void{
            echo"I am Audi";
        }
    }

    class FerrariFactory implements CarFactory{
        public function createCar(): Car{
            return new Ferrari();
        }
    }
    class AudiFactory implements CarFactory{
        public function createCar(): Car{
            return new Audi();
        }
    }

    //client
    $factory=new FerrariFactory();
    $car=$factory->createCar();
    $car->print();

    $factory2=new AudiFactory();
    $car2=$factory2->createCar();
    $car2->print();

?>