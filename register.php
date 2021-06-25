<html>
    <head>
        <title>PWEB</title>
    </head>
    <body>
        <h2>Registration Page</h2>
        <a href="index.php">Click here to go back</a> <br/><br/>
        <form action="register.php" method="POST">
            Enter name: <input type="text" name="name" required="required"/> <br/>
            Enter phone: <input type="text" name="phone" required="required"/> <br/>
            <input type="submit" value="Register"/>
        </form>
    </body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){ //checks if the form has received a POST method
        $name = $_POST['name'];
        $phone = $_POST['phone'];
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

        $query = mysqli_query($con, "SELECT * FROM users");
        if($query){
            echo "Returned rows are: ". mysqli_num_rows($query);
            mysqli_free_result($query);
        }
    }
    mysqli_close($con);
?>