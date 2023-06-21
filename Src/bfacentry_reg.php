<?php
$fid=$_GET["id"];
$mfid=$_GET["mid"];
$uid=$_GET["uid"];
$a=$_REQUEST["fname"];
$b=$_REQUEST["edts"];
$c=$_REQUEST["fdg"];


//echo "$a";
//echo "$pid";
//echo "$s";
//echo "$page";

//echo "$b";

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

$asql = "UPDATE bfaculty SET ufid='$uid', fname ='$a', edet='$b', deg='$c' WHERE fid='$fid' ";
if ($conn->query($asql) === TRUE) {
    echo "success";
} else {
    echo "Error updating record: " . $conn->error;
}


$bsql = "UPDATE mfaculty SET   ufid='$uid', mfname ='$a', edet='$b', deg='$c' WHERE mfid='$mfid' ";
if ($conn->query($bsql) === TRUE) {
    echo "success";
} else {
    echo "Error updating record: " . $conn->error;
}



$csql = "UPDATE fbati SET ufid='$uid', fname ='$a'  WHERE fid='$fid'  ";
if ($conn->query($csql) === TRUE) {
    echo "success";
} else {
    echo "Error updating record: " . $conn->error;
}

$dsql = "UPDATE fbatii SET ufid='$uid',fname ='$a' WHERE fid='$fid'  ";
if ($conn->query($dsql) === TRUE) {
    echo "success";
} else {
    echo "Error updating record: " . $conn->error;
}

$esql =  "UPDATE fbatiii SET ufid='$uid',fname ='$a'  WHERE fid='$fid'  ";
if ($conn->query($esql) === TRUE) {
    echo "success";
} else {
    echo "Error updating record: " . $conn->error;
}

$fsql = "UPDATE fbatiiii SET ufid='$uid',fname ='$a' WHERE fid='$fid'  ";
if ($conn->query($fsql) === TRUE) {
    echo "success";
} else {
    echo "Error updating record: " . $conn->error;
}

$gsql = "UPDATE fmati SET ufid='$uid',mfname ='$a' WHERE mfid='$mfid'  ";
if ($conn->query($gsql) === TRUE) {
    echo "success";
} else {
    echo "Error updating record: " . $conn->error;
}

$hsql ="UPDATE fmatii SET ufid='$uid',mfname ='$a' WHERE mfid='$mfid'  ";
if ($conn->query($hsql) === TRUE) {
    echo "success";
} else {
    echo "Error updating record: " . $conn->error;
}


header("location:faculty.php ");
mysqli_close($conn);
?> 





