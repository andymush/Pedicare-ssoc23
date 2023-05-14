<?php
    //host name, database username, password and database name
    $conn = mysqli_connect("localhost","root","","pedicare") or die(mysqli_error($conn));

    //check connection and display error description
    if ($conn->connect_error) {
        echo "Unsuccessful Connection" . $mysqli_error($conn);
    }else
    {
        echo "Successfull connection";
    }

?>