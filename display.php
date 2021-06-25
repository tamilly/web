<?php
    session_start();
    echo "Data stored on sessions: ";
    print_r($_SESSION["name"]);
    echo "<br/>";
    print_r($_SESSION["phone"]);

    echo "<br/> Now let's see data stored on Database: ";

    //create connection
    $con = mysqli_connect("localhost", "root", "", "pweb");
    //check connection
    if(!$con){
        die("Connection failed: ". mysqli_connect_error());
    }
    //SQL SELECT query 
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
?>