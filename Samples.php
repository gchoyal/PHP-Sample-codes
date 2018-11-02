<?php 

// MySQL Storage Engine – How to Convert MyISAM to InnoDB 

$servername = "localhost";
$username = "jewishch_jcm";
$password = "M[.9S,D]w{Wu";
$dbname = "jewishch_jcm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'jewishch_jcm' AND ENGINE = 'MyISAM'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
		

		$tbl = $row['TABLE_NAME'];
        $sql = "ALTER TABLE `$tbl` ENGINE=INNODB";
        $conn->query($sql);
	
    }
} else {
    echo "0 results";
}
$conn->close();

die();
