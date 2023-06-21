<?
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmmcse";

// Create connection
$aconn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$aconn) {
    die("Connection failed: " . mysqli_connect_error());
}
$asql = "SELECT * FROM bsii WHERE sem='1'  ";
$aresult = mysqli_query($aconn, $asql);
while($arow = mysqli_fetch_assoc($aresult)) {
$s1=$arow['s1'];
$s2=$arow['s2'];
$s3=$arow['s3'];
$s4=$arow['s4'];
$s5=$arow['s5'];
$s6=$arow['s6'];
$l1=$arow['l1'];
$l2=$arow['l2'];
}

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$zsql = "SELECT fname FROM bfaculty WHERE  wsi='$s1' ";
$zresult = mysqli_query($conn, $zsql);
while($zrow = mysqli_fetch_assoc($zresult)) {
$as = $zrow['fname'];
}
$bsql = "SELECT fname FROM bfaculty WHERE  wsi='$s2' ";
$bresult = mysqli_query($conn, $bsql);
while($brow = mysqli_fetch_assoc($bresult)) {
$bs = $brow['fname'];
}
$csql = "SELECT fname FROM bfaculty WHERE  wsi='$s3' ";
$cresult = mysqli_query($conn, $csql);
while($row = mysqli_fetch_assoc($cresult)) {
$cs = $row['fname'];}

$dsql = "SELECT fname FROM bfaculty WHERE  wsi='$s4' ";
$dresult = mysqli_query($conn, $dsql);
while($row = mysqli_fetch_assoc($dresult)) {
$ds = $row['fname'];}

$esql = "SELECT fname FROM bfaculty WHERE  wsi='$s5' ";
$eresult = mysqli_query($conn, $esql);
while($row = mysqli_fetch_assoc($eresult)) {
$es = $row['fname'];}

$fsql = "SELECT fname FROM bfaculty WHERE  wsi='$s6' ";
$fresult = mysqli_query($conn, $fsql);
while($row = mysqli_fetch_assoc($fresult)) {
$fs = $row['fname'];}

$gsql = "SELECT fname FROM bfaculty WHERE  wli='$l1' ";
$gresult = mysqli_query($conn, $gsql);
while($row = mysqli_fetch_assoc($gresult)) {
$gl = $row['fname'];}

$hsql = "SELECT fname FROM bfaculty WHERE  wli='$l2' ";
$hresult = mysqli_query($conn, $hsql);
while($row = mysqli_fetch_assoc($hresult)) {
$hl = $row['fname'];}
?> 