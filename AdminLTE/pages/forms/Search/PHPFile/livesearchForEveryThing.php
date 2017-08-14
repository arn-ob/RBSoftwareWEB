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

 $no 	= 1;
 $num_rows = mysqli_num_rows ($query);
 if($num_rows >0 ){	 	                      
		                  while ($row = mysqli_fetch_array($query))
		                  {
			
			                echo   '<tr>';
				            echo   '<td>'.$no.'</td>';
				            echo   '<td>'.$row['BillNo'].'</td>';
					        echo  '<td>'.$row['ClientName'].'</td>';
					        echo  '<td>'.$row['ClientAddress'].'</td>';
					        echo  '<td>'.$row['ClientPhn1'].'</td>';
							echo  '<td>'.$row['PrintType'].'</td>';
							echo     '<td></td>';
							echo     '<td></td>';
							echo     '<td></td>';
							echo     '<td></td>';
                          	echo     '<td>'.$row['sft'].'</td>';
                            echo     '<td>'.$row['Todaydate'].'</td>';
                            echo     '<td>'.$row['Todaytime'].'</td>';

				           echo   '   </tr>';
			
			                $no++;
		}

	}
	else{
		echo '<p>NO Result Found</p>';
	}




?>