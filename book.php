<html>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online";

// Create connection-10
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$Th_name = $_POST["thname"];
$time='11:00am';
$movnam=$_SESSION["mname"];

$sql = "insert into theatres(theatrename,timings,movienamet) values('$Th_name','$time','$movnam')";
$_SESSION["thname"]=$Th_name;
$_SESSION["showtime"]=$time;

if(mysqli_query($conn, $sql))
{
header("location:seats.html");

}else{
echo "insertion unsuccessful";
}

?>

</body>
</html>