<?php
   $name = $_POST['name'];
   $emailid = $_POST['emailid'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];

   if (!empty($name) || !empty($emailid) || !empty($password) || !empty($cpassword)) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "hospital";

        //create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if(mysqli_connect_error()){
            die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else{
            $SELECT = "SELECT emailid from register where emailid = ? Limit 1";
            $INSERT = "INSERT Into register (name, emailid, password, cpassword) values(?, ?, ?, ?)";

            //prepare statement
            $stmt =$conn->prepare($SELECT);
            $stmt->bind_param("s", $emailid);
            $stmt->execute();
            $stmt->bind_result($emailid);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum==0){
               $stmt->close();

               $stmt = $conn->prepare($INSERT);
               $stmt->bind_param("ssss", $name, $emailid, $password, $cpassword);
               $stmt->execute();
               header("Location: login-patient.php");
               //echo "New record inserted successfully";
            }else{
                 ?>  
                    <script type="text/javascript"> 
                    alert("Someone already register using this email");
                    window.location = "patient_registration.php";
                     </script>
                 <?php
                 }
            $stmt->close();
            $conn->close();
        }
   }else{
    echo "All field are required";
    die();
   }
?>
