<?php
    //create class
    Class Person{
        public $name = "opa";
        public $age;


        function getName(){
            return $this->name;
        }
    }

    $person1 = new Person();
    $name = $person1->getName();
    echo "$name";

?>

