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
$Sft =           $_POST["sft"];
$TotalSft =  $_POST["totalSft"];
$frame =    $_POST["frame"];
$partyName = $_POST["partyName"];
$fileName = $_POST["filename"];
$PrintStatus = $_POST["PrintStatus"];


$time = date("h:i:sa");
$date = date("Y/m/d");
// For Bill Record
$dateEn = date("Ymd");
$timeEn = date("hi");
//$due = (float)$InTotalCartPricce - (float)$AdvancePay  ;
//$InTotalPrice =  "asdasds";

$EntrybillNo = $billNo. "" .$timeEn ."". $dateEn;

// Create connection

    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }




//$sql = "INSERT INTO one (name) VALUES ('$name')";

//$entrysql = "INSERT INTO newdataentry (BillNo, ClientName, ClientAddress, ClientPhn1,ClientPhn2, PrintType, PrintHeight, PrintWide, PrintQuantity, sft, frame, Todaydate, Todaytime) 
 //                           VALUES ('$EntrybillNo', '$ClientName', '$ClientAddress', '$ClientPhnNo1', '$ClientPhnNo2', '$PrintType', '$PrintHeight', '$PrintWide', '$PrintQuntity', '$Sft', '$frame', '$date', '$time')";

$clientDetailsInsertSQL = "INSERT INTO clientdetails (name, address, phoneNo1, phoneNo2,BillNo, PartyName, CreatedTime, CreatedDate) 
                            VALUES ('$ClientName', '$ClientAddress', '$TotalSft', '$ClientPhnNo2', '$EntrybillNo', '$partyName', '$date', '$time')";
 
 
$PrintDetailsSQL = "INSERT INTO printdetails (BillNo, PrintType, wide, height, sft, quantity, Frame, CreatedTime, CreatedDate, FileName) 
                        VALUES ('$EntrybillNo', '$PrintType', '$PrintWide', '$PrintHeight', '$Sft','$PrintQuntity', '$frame', '$time', '$date', '$fileName')";

$printStatusSQL  = "INSERT INTO printstatus (BilNo, ClientName, FileName, sft , quantity, CreatedDate, CreatedTime, Status) 
                    VALUES ('$EntrybillNo', '$ClientName', '$fileName', '$Sft', '$PrintQuntity', '$date', '$time', '$PrintStatus')";

$printSummary = "";   

// Storing Data
if ($conn->query($clientDetailsInsertSQL) === TRUE) 
   {
        if ($conn->query($PrintDetailsSQL) === TRUE) {

            if ($conn->query($printStatusSQL) === TRUE) {

                echo "Data Entry Done";

            }
        }
   } else {
       echo "<script>alert('Error')</script>";
   }
    


   


$conn->close();
?> 