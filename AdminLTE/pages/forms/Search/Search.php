<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'rbsoft'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM newdataentry';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	
</head>
<body>
	<h1>Table 1</h1>
	<table class="data-table">
		<caption class="title">Sales Data of Electronic Division</caption>
		<thead>
			<tr>
				<th>NO</th>
				<th>CUSTOMER</th>
				<th>ITEM</th>
				<th>DATE</th>
				<th>AMOUNT</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['BillNo'].'</td>
					<td>'.$row['ClientName'].'</td>
					<td>'.$row['ClientAddress'].'</td>
					<td>'.$row['ClientPhn'].'</td>
				</tr>';
			
			$no++;
		}?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="4">TOTAL</th>
				<th><?=number_format($total)?></th>
			</tr>
		</tfoot>
	</table>
</body>
</html>