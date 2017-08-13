<html>
<head>
<script src="../PrintReq/jquery-1.9.1.js"></script>
<script>
    function showResultByName(str) {

      if (str.length == 0) {
        document.getElementById("livesearch").innerHTML = "";
        return;
      }
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
      } else {  // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }

      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("livesearch").innerHTML = this.responseText;
        }
      }
      xmlhttp.open("GET", "getResult.php?q=" + str, true);
      xmlhttp.send();
    }

  </script>

<head>

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

$q = false;
if (isset($_GET['q']))
{
   $q = $_GET['q'];
}




$sql = 'SELECT * FROM newdataentry where ClientName="'. $q .'"';

$query = mysqli_query($conn, $sql);

 //$no 	= 0;
		                      
		                  while ($row = mysqli_fetch_array($query))
		                  {
                            echo  '<div class="form-group">';
                            echo '<label for="exampleInputEmail1">Name</label>';

                            echo '<input value='.$row['BillNo'].'>';
                            echo '<input value='.$row['ClientName'].'>';
                            echo "<a href='record.php?id=" . $row['BillNo'] . "'>Edit</a>";
			            //     echo   '<tr>';
				        //     echo   '<td>'.$no.'</td>';
				        //     echo   '<td>'.$row['BillNo'].'</td>';
					    //     echo  '<td>'.$row['ClientName'].'</td>';
					    //     echo  '<td>'.$row['ClientAddress'].'</td>';
					    //     echo  '<td>'.$row['ClientPhn'].'</td>';
                        //    	echo  '<td>'.$row['PrintType'].'</td>';
                        //   	echo     '<td>'.$row['sft'].'</td>';
                        //     echo     '<td>'.$row['PrintPrice'].'</td>';
                        //     echo     '<td>'.$row['advance'].'</td>';
                        //     echo      '<td>'.$row['due'].'</td>';
                        //     echo     '<td>'.$row['intotal'].'</td>';
                        //     echo     '<td>'.$row['Todaydate'].'</td>';
                        //     echo     '<td>'.$row['Todaytime'].'</td>';

				        //    echo   '   </tr>';
			
			               // $no++;
		}






?>

<body>

<input type="text" onkeyup="showResultByName(this.value)" class="input-control" />

<div id="livesearch">

</div>
</body>




</html>