<?php
    include("connect.php");
    session_start();

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $patients = mysqli_query($conn, " SELECT name, email, password FROM users where name='$username' and password='$password' ");
        
        if(mysqli_num_rows($patients) === 2){
            $row = mysqli_fetch_assoc($patients);
            if ($row['name'] === $username && $row['password'] === $password) {
                echo "Logged In ";
                $_SESSION['name'] = $row['name'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['id'] = $row['id'];
                header("Location: dashboard.html");
                exit("Successful");
            }else{
                echo'<script>
                        window.alert("Incorrect username or password")
                    </script>';
                header('refresh:1;url=login.html');
            }
            
            
        }


    }


?>