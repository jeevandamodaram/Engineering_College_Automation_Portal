<? $page="bt1.php"; ?>
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
.myTable th { background-color:#85144b;color:#fff }
.myTable td, .myTable th { padding:5px;border:1px solid #ac8f57; }
</style>
    
 <script>
 function autoRefresh()
{
	window.location = window.location.href;
}
 
 setInterval('autoRefresh()', 1000); // this will reload page after every 5 secounds; Method I
</script>

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
		<p align="center" style=" color:#FFFFFF; font-size:30px; font-family:'Times New Roman', Times, serif"><strong>B.Tech&nbsp; I<sup>st</sup>&nbsp; Year &nbsp;Student List  [ Cse ]  </strong></p>
</div>



<div id="top3">

</div>



<div id="fbtop4">



<form name="bstu"   method="post" action="ubstup.php"  >
<table align="center" class="myTable" width="90%" style="border-collapse: collapse">
<tr>
<td bgcolor="#85144b" width="2%"><center><h4 style="color:#FFFFFF"> Sno </h4></center></td>
<td bgcolor="#85144b" width="25%"><center><h4 style="color:#FFFFFF"> Student Name </h4></center></td>
<td bgcolor="#85144b" width="20%"><center><h4 style="color:#FFFFFF"> Roll Number </h4></center></td>
<td bgcolor="#85144b" width="10%"><center><h4 style="color:#FFFFFF"> Batch Year </h4></center></td>
<td bgcolor="#85144b" width="10%"><center><h4 style="color:#FFFFFF"> Current Year </h4></center></td>
<td bgcolor="#85144b" width="10%"><center><h4 style="color:#FFFFFF"> PYID</h4></center></td>
<td bgcolor="#85144b" width="5%"><center><h4 style="color:#FFFFFF"> Delete</h4></center></td>

</tr>

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

$sql = "SELECT * FROM studet WHERE pyear='1' AND edu='b' ORDER BY rnumber ASC ";
$result = mysqli_query($conn, $sql);
 $count=1;
while($row = mysqli_fetch_assoc($result)) {


echo"<tr> ";

echo"<td style='color:#85144b'; align='center' width='4%'><strong>".$count++."</strong></td>";
echo"<td width='25%' style=' color:#85144b; font-size:18px'; ><center><strong>". $row["sname"] ." </strong></td>";
echo"<td width='20%' style=' color:#85144b; font-size:18px'; ><center><strong>". $row["rnumber"] ." </strong></td>";
echo"<td width='15%' style=' color:#85144b; font-size:18px'; ><center><strong>". $row["byear"] ." </strong></td>";
echo"<td width='15%' style=' color:#85144b; font-size:18px'; ><center><strong>". $row["cyear"] ." </strong></td>";
echo"<td width='10%' style=' color:#85144b; font-size:18px'; ><center><strong>". $row["pyear"] ." </strong></td>";
echo"<td align='center' width='5%'><a href='delete.php?stid=". $row["stid"] ." & pyear=". $row["pyear"] ." & edu=". $row["edu"] ." & page=".$page."'><img  src='img/del.png' width='60%' height='10%' alt='Delete'></a> </td>";

echo"</tr>";

}
?>

</table>
</form>

</div>



<div id="afooter">
<div id="a1"><div id="a1text2">KMM COLLEGES, RAMIREDDY PALLI, TIRUPATI - 517 102 .</div></div>
</div>


</body>
</html>
