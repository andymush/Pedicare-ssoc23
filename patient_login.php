<?php
    include("connect.php");

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

        $sql = "select * from users where name='" . $username . "' AND password='" . $password . "'";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($result);

        if ($row['name'] === $username && $row['password'] === $password) {
            $_SESSION["name"] = $username;
            header("location:doctors/index.html");
        } 
        else{
            echo "Incorrect username or password";
            header('refresh:1;url=sign.php');
        }

    


?>