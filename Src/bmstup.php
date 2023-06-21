<?php
$stid=uniqid();
$page=$_GET["page"];
$e=$_GET["pid"];
$edu=$_GET["edu"];
$a=$_POST["sname"];
$b=$_POST["rno"];
$c=$_POST["byear"];
$d=$_POST["cyear"];
$z='0';




//echo "$zas";
//echo "$b";
//$_POST['mark'];
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
$sql = "INSERT INTO studet (stid, sname, rnumber, byear , cyear ,pyear ,edu) VALUES ('$stid', '$a', '$b', '$c' , '$d','$e','$edu')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$asql = "INSERT INTO mid (stid, rno, name,cyear, pyear ,edu ) VALUES ('$stid','$b', '$a','$d' ,'$e','$edu')";
if ($conn->query($asql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $asql . "<br>" . $conn->error;
}

$bsql = "INSERT INTO midi (stid, rno, name,cyear, pyear ,edu ) VALUES ('$stid','$b', '$a','$d' ,'$e','$edu')";
if ($conn->query($bsql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $bsql . "<br>" . $conn->error;
}

$csql = "INSERT INTO midii (stid, rno, name,cyear, pyear ,edu ) VALUES ('$stid','$b', '$a','$d' ,'$e','$edu')";
if ($conn->query($csql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $csql . "<br>" . $conn->error;
}

$dsql = "UPDATE  del SET m2='0' ";
if ($conn->query($dsql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $dsql . "<br>" . $conn->error;
}


$aiconn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$aiconn) {
    die("Connection failed: " . mysqli_connect_error());
}
$aisql = "INSERT INTO mati (stid, rno, sname, s1, s2, s3, s4, s5, s6, l1, l2, m1, m2, m3, m, pyear, edu,cyear) VALUES ('$stid','$b', '$a','$z','$z','$z','$z','$z','$z','$z','$z','$z','$z','$z','$z','$e','$edu','$d' )";
if ($aiconn->query($aisql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $aisql . "<br>" . $aiconn->error;
}


header("location:$page");
mysqli_close($conn);
?> 




