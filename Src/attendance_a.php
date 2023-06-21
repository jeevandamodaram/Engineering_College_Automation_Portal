<?  
$pid='1';
$edu='b';
$page="attendance_a.php";

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
$asql = "SELECT * FROM bsi WHERE sem='1'  ";
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

<style type="text/css">
.myTable { background-color:;border-collapse:collapse; }
.myTable th {padding:5px;border:1px solid #ac8f57;background-color:#85144b;color:#fff }
.myTable td {border:1px solid #ac8f57; }
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
         <ul> <li><a href="index.php">Home</a>&nbsp;</li>
		    <li><a href="mainstu.php">SDPS</a>&nbsp;</li>
			<li><a href="mainfac.php">FDPS</a>&nbsp;</li>
			<li><a href="mainsub.php">SSPS</a>&nbsp;</li>
			<li><a href="mainmks.php">IMPS</a>&nbsp;</li>
			<li><a href="mainats.php">SAPS</a>&nbsp;</li>
            
           
		</ul>	
			
     </div>

</div>


<div id="top2">
<p align="center" style=" color:#FFFFFF; font-size:30px; font-family:'Times New Roman', Times, serif"><strong>Welcome To Internal Marks Panel Service [ IMPS ]  </strong></p>
</div>



<div id="top3">

</div>

<div id="top4">
 <form>



	   <table align="center" class="myTable" width="98%" style="border-collapse: collapse">
          <tr>
<th width="10%">Roll Number</th>
<th width="8%"><? echo"$s1"; ?></th>
<th width="8%"><? echo"$s2"; ?></th>
<th width="8%"><? echo"$s3"; ?></th>
<th width="8%"><? echo"$s4"; ?></th>
<th width="8%"><? echo"$s5"; ?></th>
<th width="8%"><? echo"$s6"; ?></th>
<th width="8%"><? echo"$l1"; ?></th>
<th width="8%"><? echo"$l2"; ?></th>
<th width="10%">Attendance</th>
</tr>

</table>


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
$qsql = "SELECT * FROM bati WHERE pyear='$pid' AND edu='$edu' ";
$qresult = mysqli_query($qconn, $qsql);
while($qrow = mysqli_fetch_assoc($qresult)) {
	
//echo "$s";
echo "<form  method='post' action='atd_reg.php?rno=". $qrow['rno'] ." & pg= ".$page." & pid= ".$pid." & edu=".$edu." '>";
echo "<table align='center' class='myTable' width='98%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='10%' align='center' style='font-size:20px; color:#85144b'> " .$qrow['rno'] .  " </td>";

echo " <td width='8%'>";
echo " <input class='minput' name='s1'  type='number' min=1  maxlength='2' placeholder=". $qrow["s1"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='8%'>";
echo " <input class='minput' name='s2'  type='number' min=1  maxlength='2' placeholder=". $qrow["s2"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='8%'>";
echo " <input class='minput' name='s3'  type='number' min=1  maxlength='2' placeholder=". $qrow["s3"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='8%'>";
echo " <input class='minput' name='s4'  type='number' min=1  maxlength='2' placeholder=". $qrow["s4"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='8%'>";
echo " <input class='minput' name='s5'  type='number' min=1  maxlength='2' placeholder=". $qrow["s5"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='8%'>";
echo " <input class='minput' name='s6'  type='number' min=1  maxlength='2' placeholder=". $qrow["s6"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='8%'>";
echo " <input class='minput' name='l1'  type='number' min=1  maxlength='2' placeholder=". $qrow["l1"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='8%'>";
echo " <input class='minput' name='l2'  type='number' min=1  maxlength='2' placeholder=". $qrow["l2"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";

echo "<td  width='10%' >  <button class='button1'> Update </button> </td>";



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
