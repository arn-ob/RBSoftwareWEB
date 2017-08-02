<?php

// This in the project

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password hy
$db_name = 'rbsoft'; // Database Name 


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$q=$_GET["q"];
$sql = 'SELECT * FROM newdataentry where BillNo="'.$q.'"';

$query = mysqli_query($conn, $sql);

$rows = mysqli_fetch_array($query);                     
		                 	
$r1 = $rows['BillNo'];
				
	echo  '<p>'.$rows['ClientName'].'</p>';
					        echo  '<p>'.$rows['ClientAddress'].'</p>';
					        echo  '<p>'.$rows['ClientPhn'].'</p>';
						  
			
                            echo     '<p>'.$rows['intotal'].'</p>';
                            echo     '<p>'.$rows['Todaydate'].'</p>';
                            echo     '<p>'.$rows['Todaytime'].'</p>';
			



while($row = mysqli_fetch_array($query)){
							echo   '<p>'.$r1.'</p>';
					        


							echo   '<tr>';
                           	echo  '<td>'.$row['PrintType'].'</td>';
                          	echo     '<td>'.$row['sft'].'</td>';
                            echo     '<td>'.$row['PrintPrice'].'</td>';
                            echo     '<td>'.$row['advance'].'</td>';
                            echo      '<td>'.$row['due'].'</td>';
							echo   '   </tr>';
			}

 
			
				
	
?>