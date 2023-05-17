
    <?php
    $insert = false;
    if(isset($_POST['name'])){
        $server = "localhost" ;
        $username = "root";
        $password = "";

        $con = mysqli_connect($server,$username,$password);
        if(!$con){
            die("connection to db failed due to" . mysqli_connect_error());
        }
        echo " Success connecting to db";

        $name = $_POST['name'];
        $age = $_POST['age'];
        $license = $_POST['license'];
        $aadhar = $_POST['aadhar'];
        $phone = $_POST['phone'];
    
        $sql =   "INSERT INTO `trip`.`trip` ( `name`, `age`, `license`, `aadhar`, `phone`, `dt`) VALUES (' $name', '$age', '$license', '$aadhar ', '$phone', current_timestamp());";
        echo $sql;
        if($con->query($sql) == TRUE)
        {
            echo "Successfully inserted";
            $insert = true;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }

        $con->close();
    }
    ?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent a Ride</title>
</head>
<body>
    <div class="container">
   <h3> BOOK YOUR RIDE  </h3>
   <p>Enter Driver Details to book the car</p>

    <br/>
    <form action="index.php" method="POST">
        <input type="text" name="name" id="name" placeholder="Enter your name"/> <br/>
        <input type="text" name="age" id="age" placeholder="Enter your Age"/><br/>
        <input type="text" name="license" id="license" placeholder="Enter your License Details"/><br/>
        <input type="text" name="aadhar" id="aadhar" placeholder="Enter your Aadhar No."/><br/>
        <input type="text" name="phone" id="phone" placeholder="Enter your Phone No."/><br/>
        <button class="btn" type="submit">Submit</button>

        </form>

    </div>

<?php
if($insert ==true)
{
echo "<p>Thank you for submitting</p>";
}
?>
<script src="index.js"></script>
    
</body>
</html>