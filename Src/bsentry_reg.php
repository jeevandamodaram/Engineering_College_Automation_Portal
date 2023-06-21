<?php


$table=$_GET['tb'];
$sem=$_REQUEST['sem'];
$a=$_REQUEST['s1'];
$b=$_REQUEST['s2'];
$c=$_REQUEST['s3'];
$d=$_REQUEST['s4'];
$e=$_REQUEST['s5'];
$f=$_REQUEST['s6'];
$g=$_REQUEST['L1'];
$h=$_REQUEST['L2'];

//$pid=$_POST["pid"];
//$mid=$_POST["fmid"];
//$b=$_REQUEST["marks"];
echo "$table";

echo "$a";
echo "$b";
echo "$c";
echo "$d";
echo "$e";
echo "$f";
echo "$g";
echo "$h";echo "$sem";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmmcse";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE $table SET s1 ='$a', s2 ='$b' ,s3 ='$c', s4 ='$d',s5 ='$e', s6 ='$f' ,l1 ='$g', l2 ='$h' WHERE sem='$sem' ";


if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error updating record: " . $conn->error;
}

header("location:bsentry.php");
mysqli_close($conn);
?> 




