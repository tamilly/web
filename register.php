<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){ //checks if the form has received a POST method
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        //trying something...
        $_SESSION["name"] = $name;
        $_SESSION["phone"] = $phone;
        //test
        echo "Name entered is: ". $name ."<br/>";
        echo "Phone entered is: ". $phone;
        //create connection
        $con = mysqli_connect("localhost", "root", "", "pweb");
        //check connection
        if(!$con){
            die("Connection failed: ". mysqli_connect_error());
        }
        /*else{
            echo "that's ok, baby";
        }*/
        $sql = "INSERT INTO users (name, phone) VALUES ('$name', '$phone')";

        if(mysqli_query($con, $sql)){
            echo "it's ok, baby <br/>";
        }else{
            echo "ERROR! Sorry :( ". $sql . "<br/>" . mysqli_error($con);
        }
        //try to get data from database
        $sql = "SELECT * FROM users";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
        //output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["phone"]. "<br>";
        }
        } else {
            echo "0 results";
        }


        //close connection
        mysqli_close($con);
    }
?>
<a href="display.php">Click here to see data </a>