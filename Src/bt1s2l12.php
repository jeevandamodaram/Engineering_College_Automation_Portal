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


//$sub="ADSA"; 
$edu="b";
$pid="1";
$m="midii";
$l1="l1";
$page="bt1s2l12.php";

$ssql = "SELECT l1 FROM bsi  WHERE sem= '2' ";
$sresult = mysqli_query($conn, $ssql);
while($brow = mysqli_fetch_assoc($sresult)) {
$sub = $brow['l1'];
}



$fsql = "SELECT fname FROM bfaculty  WHERE qli='$sub' ";
$fresult = mysqli_query($conn, $fsql);
while($arow = mysqli_fetch_assoc($fresult)) {
$fac = $arow['fname'];
}





//echo "$s1";

?>
<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><head>
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
 
 setInterval('autoRefresh()', 5000); // this will reload page after every 5 secounds; Method I
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

      <div id="navigation"><ul>
		 	<li><a href="index.php">Home</a>&nbsp;</li>
		    <li><a href="mainstu.php">SDPS</a>&nbsp;</li>
			<li><a href="mainfac.php">FDPS</a>&nbsp;</li>
			<li><a href="mainsub.php">SSPS</a>&nbsp;</li>
			<li><a href="mainmks.php">IMPS</a>&nbsp;</li>
			<li><a href="mainats.php">SAPS</a>&nbsp;</li>
         </ul>	</div>

</div>


<div id="top2">
	
</div>



<div id="top3">

</div>



<div id="top14">
 
	  <table align="center" class="myTable" width="80%" style="border-collapse: collapse">
	  
          <tr>
		  <th width="25%" > B.Tech  I<sup>st</sup> Year &nbsp;&nbsp;</th>
		  <th width="25%" >II<sup>nd</sup> Semester &nbsp;&nbsp;[ MID 1 ] </th>
		  <th width="23%" ><? echo "$sub"; ?> </th>
		  <th width="27%" ><? echo "$fac"; ?> </th>
		  </tr>
		</table>
		<br>  
	
		 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmmcse";

// Create connection
$qconn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$qconn) {
    die("Connection failed: " . mysqli_connect_error());
}
$count=1;
$qsql = "SELECT * FROM $m WHERE pyear='$pid' AND edu='$edu'  ORDER BY rno ASC ";
$qresult = mysqli_query($qconn, $qsql);
while($qrow = mysqli_fetch_assoc($qresult)) {
	
//echo "$s";
echo "<form  method='post' action='succes.php?stid=". $qrow['stid'] ."   &    rno=" . $qrow['rno'] ." & sub= ".$l1."  & pg= ".$page." & pid= ".$pid." & fmid=".$m." '>";
echo "<table align='center' class='myTable' width='80%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='5%' ><p align='center' style='font-size:20px; color:#85144b'>" . $count++ .  " </p> </td>";
echo "<td  width='40%'bgcolor='#85144b'><p align='center' style='font-size:20px; color:#FFFFFF'>" . $qrow["rno"].  " </p> </td>";
echo " <td width='10%'>";
echo " <input class='minput' name='marks'  type='number' min=1 max=50 maxlength='2' placeholder=". $qrow["L1"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";

echo "<td  width='10%' >  <button class='button1'> Update </button> </td>";

echo "<td  width='10%' ><p align='center' style='font-size:20px; color:#85144b'>" . $qrow["L1"].  " </p> </td>";



echo"
</tr>
<tr>
</tr>
</table>
</form>";

}
?> 
		

	
	
		

</div>



<div id="afooter">
<div id="a1"><div id="a1text2">KMM COLLEGES, RAMIREDDY PALLI, TIRUPATI - 517 102 .</div></div>
</div>


</body>
</html>
