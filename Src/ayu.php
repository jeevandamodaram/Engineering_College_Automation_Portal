<?php

$page=$_GET["page"];

$cyear=date("Y");
$z=0;

//echo "$zas";
//echo "$b";
//$_POST['mark'];
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
$sql = "UPDATE studet SET pyear='2', cyear='$cyear' WHERE pyear=1 AND edu='b' ";


if ($aconn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $aconn->error;
}


$mconn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$mconn) {
    die("Connection failed: " . mysqli_connect_error());
}
$msql =  "UPDATE mid SET pyear='2', cyear='$cyear' WHERE pyear=1 AND edu='b' ";


if ($mconn->query($msql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mconn->error;
}

$miconn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$miconn) {
    die("Connection failed: " . mysqli_connect_error());
}
$misql =  "UPDATE midi SET pyear='2', cyear='$cyear' WHERE pyear=1 AND edu='b' ";

if ($miconn->query($misql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $miconn->error;
}

$miiconn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$miiconn) {
    die("Connection failed: " . mysqli_connect_error());
}
$miisql =  "UPDATE midii SET pyear='2', cyear='$cyear' WHERE pyear=1 AND edu='b' ";


if ($miiconn->query($miisql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $miiconn->error;
}

$aiconn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$aiconn) {
    die("Connection failed: " . mysqli_connect_error());
}
$aisql = "UPDATE bati SET  s1='$z', s2='$z', s3='$z', s4='$z', s5='$z', s6='$z', l1='$z', l2='$z', m1='$z', m2='$z', m3='$z', m='$z',  pyear='2', cyear='$cyear' WHERE pyear=1 AND edu='b' ;";
if ($aiconn->query($aisql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $aisql . "<br>" . $aiconn->error;
}





$dlconn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$dlconn) {
    die("Connection failed: " . mysqli_connect_error());
}
$dlsql = "UPDATE  del SET b1='1' ";
if ($dlconn->query($dlsql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $dlsql . "<br>" . $dlconn->error;
}


$adlconn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$adlconn) {
    die("Connection failed: " . mysqli_connect_error());
}
$adlsql = "UPDATE  del SET b2='0' ";
if ($adlconn->query($adlsql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $adlsql . "<br>" . $adlconn->error;
}


header("location:$page");
mysqli_close($conn);
?> 




