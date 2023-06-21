<?
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


$msql = "SELECT fname FROM mfaculty WHERE mfid='mfs1' ";
$mresult = mysqli_query($conn, $msql);
while($mrow = mysqli_fetch_assoc($mresult)) {
$mas1 = $mrow['fname'];
}
echo "$mas1";
?>