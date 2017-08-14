 <?php

// Here Only store the info of Client Data and 



/* server timezone */
date_default_timezone_set("Asia/Dhaka");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rbsoft";

$billNo        = $_POST["BillNo"];
$ClientName    = $_POST["ClientName"];
$ClientAddress = $_POST["ClientAddress"];
$ClientPhnNo1 =   $_POST["ClientPhn1"];
$ClientPhnNo2 =   $_POST["ClientPhn2"];
$PrintType =     $_POST["PrintType"];
$PrintHeight =   $_POST["PrintHeight"];
$PrintWide =     $_POST["PrintWide"];
$PrintQuntity =  $_POST["PrintQuantity"];
//$PrintPrice =    $_POST["PrintPrice"];
$Sft =           $_POST["sft"];
//$AdvancePay =    $_POST["advancePay"];
//$InTotalCartPricce = $_POST["InTotalCartPricce"];
$frame =    $_POST["frame"];
//$framePrice = $_POST["framePrice"];


$time = date("h:i:sa");
$date = date("Y/m/d");
//$due = (float)$InTotalCartPricce - (float)$AdvancePay  ;
//$InTotalPrice =  "asdasds";

// Create connection

    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }




//$sql = "INSERT INTO one (name) VALUES ('$name')";

$entrysql = "INSERT INTO newdataentry (BillNo, ClientName, ClientAddress, ClientPhn1,ClientPhn2, PrintType, PrintHeight, PrintWide, PrintQuantity, sft, frame, Todaydate, Todaytime) 
                            VALUES ('$billNo', '$ClientName', '$ClientAddress', '$ClientPhnNo1', '$ClientPhnNo2', '$PrintType', '$PrintHeight', '$PrintWide', '$PrintQuntity', '$Sft', '$frame', '$date', '$time')";


    if ($conn->query($entrysql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "<script>alert('Error')</script>";
    }


$conn->close();
?> 