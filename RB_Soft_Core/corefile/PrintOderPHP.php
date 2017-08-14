 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rbsoft";

$billNo        = $_POST["BillNo"];
$ClientName    = $_POST["ClientName"];
$ClientAddress = $_POST["ClientAddress"];
$ClientPhnNo =   $_POST["ClientPhn"];
$PrintType =     $_POST["PrintType"];
$PrintHeight =   $_POST["PrintHeight"];
$PrintWide =     $_POST["PrintWide"];
$PrintQuntity =  $_POST["PrintQuantity"];
$PrintPrice =    $_POST["PrintPrice"];
$Sft =           $_POST["sft"];
$AdvancePay =    $_POST["advancePay"];
$InTotalCartPricce = $_POST["InTotalCartPricce"];
$frame =    $_POST["frame"];
$framePrice = $_POST["framePrice"];


$time = date("h:i:sa");
$date = date("Y/m/d");
$due = "ada";
$InTotalPrice =  "asdasds";

// Create connection
try{
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}



//$sql = "INSERT INTO one (name) VALUES ('$name')";

$entrysql = "INSERT INTO newdataentry (BillNo, ClientName, ClientAddress, ClientPhn, PrintType, PrintHeight, PrintWide, PrintQuantity, PrintPrice, sft, frame, frameprice, advance, due, intotal, Todaydate, Todaytime) 
                            VALUES ('$billNo', '$ClientName', '$ClientAddress', '$ClientPhnNo', '$PrintType', '$PrintHeight', '$PrintWide', '$PrintQuntity', '$PrintPrice', '$Sft', '$frame','$framePrice', '$AdvancePay', '$due', '$InTotalCartPricce', '$date', '$time')";

try{
    if ($conn->query($entrysql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "<script>alert('Error')</script>";
    }
}catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

$conn->close();
?> 