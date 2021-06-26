<?php
    //create class
    Class Person{
        public $name1;
        public $name2;

        function getName($op){
            if($op == 1){
                return $this->name1;
            }else{
                return $this->name2;
            }
        }

        function setName($op, $name){
            if($op == 1){
                $this->name1 = $name;
            }else{
                $this->name2 = $name;
            }
        }
    }

?>
<h1> Let me suggest a baby name for you </h1>
<form action="index.php" method="POST">
    Enter Name 1: <input type="text" name="name1"/>
    Enter Name 2: <input type="text" name="name2"/>
    Enter Characters Numbers: <input type="number" name="number" value="1"/>
    <input type="submit" value="Go"/>
<form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $person = new Person();
        $person->setName(1, $_POST["name1"]);
        $person->setName(0, $_POST["name2"]);
        $number = $_POST["number"];

        if($number > strlen($person->getName(1)) && $number > strlen($person->getName(2))){
            echo "Opss! Number given is too big<br/>";
        }
        else{
            
        }
    
    }
?>



    


