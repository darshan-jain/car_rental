
    <?php
    $insert = false;
    if(isset($_POST['car'])){
        $server = "localhost" ;
        $username = "root";
        $password = "";

        $con = mysqli_connect($server,$username,$password);
        if(!$con){
            die("connection to db failed due to" . mysqli_connect_error());
        }
        echo " Success connecting to db";

        $car = $_POST['car'];
        $book = $_POST['book'];
        $rtn = $_POST['rtn'];
        $location = $_POST['location'];
       
        $sql =    "INSERT INTO `trip`.`car` (`car`, `book`, `rtn`, `location`, `dt`) VALUES ('$car', '$book', '$rtn', '$location ', current_timestamp())";
        echo $sql;
        if($con->query($sql) == TRUE)
        {
            echo "Successfully inserted";
            $insert = true;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }

        $sqll = "SELECT * FROM `trip`.`car`";
        $result = $con->query($sqll);
        foreach ($result as $value){
             echo $value['car'];
            echo "<br>";
             echo $value['book'];
            echo "<br>";
            echo $value['rtn'];
            echo "<br>";
            echo $value['location'];
            echo "<br>";
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
   <p>Enter Car Details to book the car</p>

    <br/>
    <form action="car.php" method="POST">
        <input type="text" name="car" id="car" placeholder="Enter Car details"/> <br/>
        <input type="text" name="book" id="book" placeholder="Enter Booking date"/><br/>
        <input type="text" name="rtn" id="rtn" placeholder="Enter Return Date"/><br/>
        <input type="text" name="location" id="location" placeholder="Enter your Location"/><br/>
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