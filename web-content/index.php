<!DOCTYPE html>
<html>
<head>
	<title>Redlock Users</title>
</head>
<body>
	<h1>Redlock Users</h1>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jabatan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Connect to database
			$conn = mysqli_connect("172.19.0.3", "root", "password","Redlock");
			if (!$conn) {
			  die("Connection failed: " . mysql_connect_error());
			}

			// Get users from database
			$result = $conn->query("SELECT * FROM users");

			// Loop through users and display them in the table
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			        echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["Nama"] . "</td><td>" . $row["Alamat"] . "</td><td>" . $row["Jabatan"] . "</td></tr>";
			    }
			} else {
			    echo "<tr><td colspan='4'>No users found</td></tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>