<?php
    //create class
    Class Person{
        public $name = "Mr Spock";
        public $age = 42;


        function getName(){
            echo "$this->name";
        }
    }

    $person1 = new Person();
    $person1->getName();
?>

