<? 

$page="ay.php"

 ?>

<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
               <title>Department of Computer Science & Engineering | KMMIT CSE, TIRUPATI</title>
      <link rel="stylesheet" href="css/cse.css" />
	  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <script>
 
 function autoRefresh()
{
	window.location = window.location.href;
}
 
 setInterval('autoRefresh()', 3000); // this will reload page after every 5 secounds; Method I
</script>
<style type="text/css">
.myTable { background-color:;border-collapse:collapse; }
.myTable th { background-color:#85144b;color:#fff }
.myTable td, .myTable th { padding:5px;border:1px solid #ac8f57; }
</style>
    
</head>
    
<body>


<div id="top">
	<div id="toptext">KMM COLLEGES, RAMIREDDY PALLI, TIRUPATI - 517 102 .</div>
</div>


<div id="top1">
	<div id="logo"><img src="img/logo.gif" width="100px" height="80px" alt="logo"></div>
	<div id="logotext1">KMM College of Engineering.<br>Department of Computer Science & Engineering.</div>

      <div id="navigation">
        <ul>	<li><a href="admin.php">Admin Panel  </a>&nbsp;</li>
		   
         </ul>	
			
     </div>

</div>


<div id="top2">
			<p align="center" style=" color:#FFFFFF; font-size:30px; font-family:'Times New Roman', Times, serif"><strong> Update B.Tech I<sup>st</sup> Year Students as II<sup>nd</sup> Year Student   </strong></p>
</div>



<div id="top3">

</div>

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

$sql = "SELECT b2 FROM del WHERE did='d12'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$fac = $row['b2'];
}

//echo"$fac";

if($fac==0){
 $print = "<div style='color:red'>B.tech II <sup>nd</sup> Year Student Details Are Not Yet Updated.</div>";
}else if ($fac==1){
$print = "<div style='color:Green'>B.tech II <sup>nd</sup> Year Student Details Are Updated Successfully.</div>";
}
else{
$print = "ERROR";
}

?>

<div id="fbtop4">
<p align="center" style=" color:#85144b; font-size:25px; font-family:'Times New Roman', Times, serif"><strong>Note ::- Make Sure B.Tech&nbsp; II<sup>nd</sup>&nbsp; Year &nbsp;Student's List Is Updated Successfully.</strong></p>

<table align='center' class='myTable' width='60%' style='border-collapse: collapse'>
<tr>
<td align="center" style="font-size:24px"><p><strong><? echo"$print"; ?> </strong></p></td>
</tr>
</table>
<br><br>
	
<?php



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

$sql = "SELECT b1 FROM del WHERE did='d12'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$fac = $row['b1'];
}

//echo"$fac";

if($fac==0){
 $print = "<div style='color:red'>Not Yet Updated</div>";
}else if ($fac==1){
$print = "<div style='color:Green'>Success</div>";
}
else{
$print = "ERROR";
}





echo "<form  method='post' action='ayu.php?page=".$page."'>";
echo "<table align='center' class='myTable' width='70%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo"<td align='center' width='50%' style='font-size:22px; color:#85144b'  width='80%'><strong>Update I<sup>st</sup> Year Students as II<sup>nd</sup> Year Students </strong> </td>";
echo "<td  width='22%' >  <button class='button1'> Update All </button> </td>";
echo "<td  width='22%' align='center' style=' font-size:23px'><strong>".$print."</strong></td>";
echo"
</tr>
<tr>
</tr>
</table>
</form>";


?>

<br><br>

<p align="center" style=" color:#85144b; font-size:25px; font-family:'Times New Roman', Times, serif"><strong>After Update of &nbsp; I<sup>st</sup> Year Students as II<sup>nd</sup> Year Student . Now continue to  </strong></p>

<p align="center" style=" color:#85144b; font-size:25px; font-family:'Times New Roman', Times, serif"><strong>ADD Newly Joined I<sup>st</sup> Year Students <a href="index.php">Click here </a>.</strong></p>


</div>



<div id="afooter">
<div id="a1"><div id="a1text2">KMM COLLEGES, RAMIREDDY PALLI, TIRUPATI - 517 102 .</div></div>
</div>


</body>
</html>
