<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "admitkard");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $contact =  $_REQUEST['contact'];
        $course = $_REQUEST['course'];
        $country = $_REQUEST['country'];
        $DOB = $_REQUEST['DOB'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO data  VALUES ('$name',
            '$email','$contact','$course','$country','$DOB')";
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
    
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }


         
        // Close connection
        mysqli_close($conn);
        ?>

        <form action="data.php" method="get">
        <input type="email" placeholder="email" name="email">
        <input type="submit" Value="find user">
        </form>
    </center>
</body>
 
</html>