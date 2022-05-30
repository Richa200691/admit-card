<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "admitkard");
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         $email=$_REQUEST['email'];
        // Performing insert query execution
        // here our table name is college
        $sql = "SELECT * FROM DATA WHERE email='$email'";
        $data=mysqli_query($conn, $sql);

        if($data){
            $row=mysqli_fetch_assoc($data);
            echo "<b>Name</b> - ".$row['name']."<br><b>Email</b> - ".$row['email']."<br><b>Contact No.</b> - ".$row['contact']."<br><b>Course Level</b> - ".$row['course']."<br><b>Country Preferences</b> - ".$row['country']."<br><b>DOB</b> - ".$row['DOB'];
        } else{
            echo "User not found!";
        }


         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>