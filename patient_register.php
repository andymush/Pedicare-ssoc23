<?php
    include("connect.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['paswword'];
    $phone = $_POST['phone'];
    $infant = $_POST['infant'];
    $infant_age = $_POST['infant_age'];
    //$userid = $_POST[''];

    //insert patient data into users table
    $query = "INSERT INTO 'users' (name, email, password) VALUES ('$name','$email','$password')";
    //get the id of registered patient
    $user_id = mysqli_insert_id($conn);
    //insert patient data into patients table with the userid 
    $patient = "INSERT INTO 'patients' (name, email, phone, infant_name, infant_age, userid) VALUES ('$name','$email','$phone','$infant','infant_age','$user_id')";

    $userdata = mysqli_query($conn,$query);
  
    if ($userdata) {
        echo'<script>
                window.alert("Success")
            </script>';
        header('refresh:1;url=dashboard.html');
    }else{
        echo'<script>
                window.alert("failed!")
            </script>';
        header('refresh:0;url=login.html');
    }


?>