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

$Movname = $_POST["moviename"];

$sql = "select movieid from movies where moviename='$Movname'";
$_SESSION["mname"]=$Movname;
$res=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);

$count=mysqli_num_rows($res);

if($count==1)
{
header("location:book.html");

}else{
echo "insertion unsuccessful";
}

?>

</body>
</html>