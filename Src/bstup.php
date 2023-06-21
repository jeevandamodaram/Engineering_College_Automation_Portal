<?php
$page=$_GET["page"];
$e=$_GET["pid"];
$edu=$_GET["edu"];

$a=$_POST["sname"];
$b=$_POST["rno"];
$c=$_POST["byear"];
$d=$_POST["cyear"];




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
$sql = "INSERT INTO studet (sname, rnumber, byear , cyear ,pyear ,edu) VALUES ('$a', '$b', '$c' , '$d','$e','$edu')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$mconn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$mconn) {
    die("Connection failed: " . mysqli_connect_error());
}
$msql = "INSERT INTO mid (name, rno, pyear ,edu ) VALUES ('$a', '$b','$e','$edu');";


if ($mconn->query($msql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$miconn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$miconn) {
    die("Connection failed: " . mysqli_connect_error());
}
$misql = "INSERT INTO midi (name, rno , pyear ,edu  ) VALUES ('$a', '$b','$e','$edu');";


if ($miconn->query($misql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$miiconn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$miiconn) {
    die("Connection failed: " . mysqli_connect_error());
}
$miisql = "INSERT INTO midii (name, rno, pyear, edu) VALUES ('$a', '$b','$e','$edu');";


if ($miiconn->query($miisql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



header("location:$page");
mysqli_close($conn);
?> 




