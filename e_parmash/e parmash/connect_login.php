<?php
    $email = $_POST['emailid'];
    $password = $_POST['password'];
    
    //database cconnection here
    $con = new mysqli("localhost","root","","test");
    if($con->connect_error) {
        die("Failed to connect :".$con->connect_error);
    } else {
        $stmt = $con->prepare("SELECT * from register where emailid = ?");
        $stmt->bind_param("s", $emailid);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                echo "<h2> Login Successfully</h2>";
            }else{
                echo "<h2> Invalid email or Password</h2>";
            }
        } else{
            echo "<h2> Invalid email or password</h2>";
        }
    }
?>