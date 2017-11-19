<?php
        session_start();
        $user = $_POST["userName"];
        $pass = $_POST["pass"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "users";

        $con = mysqli_connect($servername,$username,$password,$dbname);

        if(!$con)
        {
            die('connection failed'.mysqli_error());
        }

        $q = "SELECT * FROM websiteusers WHERE userName = '$user' and pass = '$pass'";
        $result = mysqli_query($con,$q);
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            $_SESSION['userName'] = $user;
        }
        else
        {
            echo "Invalid Credentials";
        }
       
        if (isset($_SESSION['userName'])){
            $user = $_SESSION['userName'];
            echo "Hi " . $user . "
            ";
            echo "This is the Members Area
            ";
            echo "<a href='logout.php'>Logout</a>";
        }
    ?>