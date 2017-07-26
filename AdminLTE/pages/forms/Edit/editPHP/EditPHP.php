<?php

// This in the project

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'rbsoft'; // Database Name     

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM newdataentry';

$query = mysqli_query($conn, $sql);


if($query){
 $no 	= 1;
$row = mysqli_fetch_array($query);
echo   '<p>'.$row['BillNo'].'</p>';	                      
		                 
			               
				            echo   '<p>'.$no.'</p>';
				            echo   ''.$row['BillNo'].'';
					        echo  ''.$row['ClientName'].'';
					        echo  ''.$row['ClientAddress'].'';
					        echo  ''.$row['ClientPhn'].'';
						  
			while($row = mysqli_fetch_array($query)){

                           	echo  ''.$row['PrintType'].'';
                          	echo     ''.$row['sft'].'';
                            echo     ''.$row['PrintPrice'].'';
                            echo     ''.$row['advance'].'';
                            echo      ''.$row['due'].'';
			}
                            echo     ''.$row['intotal'].'';
                            echo     ''.$row['Todaydate'].'';
                            echo     ''.$row['Todaytime'].'';

				           
			
			                $no++;
		




}

?>