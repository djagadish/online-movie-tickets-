<html>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    
$Name=$_POST["name"];
$Email = $_POST["email"];
$Password = $_POST["password"];
$Mob=$_POST["mobile"];
$sql = "insert into login(name,email,password,mobile) values('$Name','$Email','$Password',$Mob)";
$_SESSION["mobileno"]=$Mob;
if(mysqli_query($conn, $sql))
{
header("Location:home.html");
}



?>

</body>
</html>