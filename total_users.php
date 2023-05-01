<?php
$conn = mysqli_connect("172.19.0.3", "root", "password","Redlock");
if (!$conn) {
  die("Connection failed: " . mysql_connect_error());
}

$result = $conn->query("SELECT COUNT(*) as total FROM users");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Total users: " . $row["total"];
} else {
    echo "No users found";
}
?>
