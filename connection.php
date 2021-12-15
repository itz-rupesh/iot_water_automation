<html>
<body>

<?php

$dbname = 'bntooes7cma9nbooyqft';
$dbuser = 'uy68kxqeuoecimow';  
$dbpass = 'dAGqT211aJ0cPlbhnBaQ'; 
$dbhost = 'bntooes7cma9nbooyqft-mysql.services.clever-cloud.com'; 
$port = 3306;
$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$port);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}
else{
    echo "Connection Success!<br><br>";
}

$water_level = $_GET["water_level"];
$motor_status = $_GET["motor_status"]; 


$query = "INSERT INTO iot_project (temperature, humidity) VALUES ('$temperature', '$humidity')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";

?>
</body>
</html>