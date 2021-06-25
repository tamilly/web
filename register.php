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
    if($_SERVER["REQUEST_METHOD"] == "POST"){ //Checks if the form has received a POST method
        $name = $_POST['name'];
        $phone = $_POST['phone'];

        echo "Name entered is: ". $name ."<br/>";
        echo "Phone entered is: ". $phone;

        $bool = true;

        $con = mysqli_connect("localhost", "root", "", "pweb");
        //check connection
        if(mysqli_connect_errno()){
            echo "Failed to connect to database: ". mysqli_connect_error();
            exit();
        }
        /*else{
            echo "that's ok, baby";
        }*/
    }
?>