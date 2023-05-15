<?php
    include("connect.php");
    // $pdo = new PDO('mysql:host=localhost;dbname=Pedicare;charset=utf8', 'root', '');
    // $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $pdo->beginTransaction();

    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $infant_name = $_POST['infant_name'];
        $infant_age = $_POST['infant_age'];
        //$userid = $_POST[''];
    }

    // $userdata = $pdo->exec("INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')");
    // $patientdata =$pdo->exec("INSERT INTO patients (name, email, password,phone, infant_name, infant_age, userid) VALUES ('$name','$email','$password','$phone','$infant_name','$infant_age','$pdo->lastInsertId())'");

    // $user_id = $pdo->lastInsertId();

    // echo $user_id;
    // $pdo->commit();

    // $patient = ;
    // if ($userdata) {
    //     
    // }
    
       

    //insert patient data into users table
    $user = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')";
    //get the id of registered patient
    //$user_id = lastInsertId();
    //echo $user_id;
    //insert patient data into patients table with the userid 
    //$patient = "INSERT INTO patients (name, email, password,phone, infant_name, infant_age) VALUES ('$name','$email','$password','$phone','$infant_name','$infant_age')";

    $userdata = $conn->query($user);
    //$patientdata = $conn->query($patient);

  
    if ($userdata) {        
        //echo "Success";
        header('refresh:0;url=doctors/index.html');
    }else{
        echo "failed!";
        header('refresh:2;url=sign.php');
    }

    $conn->close();

?>