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
$Name = $_POST["name"];
$Email = $_POST["email"];
$Password = $_POST["password"];

$sql = "select name from login where email='$Email' and password='$Password'";
$_SESSION["lname"]=$Email;
$res=mysqli_query($conn, $sql);
$count=mysqli_num_rows($res);

if($count==1)
{
header("location:home.html");
}else{
echo "entered password is incorrect";
}


?>

</body>
</html>