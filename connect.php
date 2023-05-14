<?php
    //host name, database username, password and database name
    $conn = mysqli_connect("localhost","root","","Pedicare"); //or die(mysqli_error($conn));

    //check connection and display error description
    if (!$conn) {
        die("Unsuccessful Connection");
    }
    // else
    // {
    //     echo "Successfull connection";
    // }

?>