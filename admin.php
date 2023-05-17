
    <?php
    
    
        $server = "localhost" ;
        $username = "root";
        $password = "";

        $con = mysqli_connect($server,$username,$password);
        if(!$con){
            die("connection to db failed due to" . mysqli_connect_error());
        }
       

        $sqll = "SELECT * FROM `trip`.`car`";
        $result = $con->query($sqll);
        foreach ($result as $value){
             echo "Car type : ". $value['car'];
            echo "<br>";
             echo "Booking Date : ".$value['book'];
            echo "<br>";
            echo  "Return  Date : ".$value['rtn'];
            echo "<br>";
            echo  "Location  : ".$value['location'];
            echo "<br>";

      
    }
    echo "<br>";
    echo"<br>";

        echo " User Details";

        echo "<br>";
    echo"<br>";


    $sqlu = "SELECT * FROM `trip`.`trip`";
    $result = $con->query($sqlu);
    foreach ($result as $value){
         echo "Booking ID  : ". $value['sno'];
        echo "<br>";
         echo " Name : ".$value['name'];
        echo "<br>";
        echo  "Age : ".$value['age'];
        echo "<br>";
        echo  "License Details  : ".$value['license'];
        echo "<br>";
        echo  "Aadhar no  : ".$value['aadhar'];
        echo "<br>";
        echo  "Phone No : ".$value['phone'];
        echo "<br>";

  
}



    ?>
