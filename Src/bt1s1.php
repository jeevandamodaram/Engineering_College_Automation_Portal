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

	  <table align="center" class="myTable" width="60%" style="border-collapse: collapse">
	  
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


$assql = "SELECT s1 FROM bsi  WHERE sem= '1' ";
$asresult = mysqli_query($conn, $assql);
while($asrow = mysqli_fetch_assoc($asresult)) {
$s1 = $asrow['s1'];
}
$bssql = "SELECT s2 FROM bsi  WHERE sem= '1' ";
$bsresult = mysqli_query($conn, $bssql);
while($bsrow = mysqli_fetch_assoc($bsresult)) {
$s2 = $bsrow['s2'];
}

$cssql = "SELECT s3 FROM bsi  WHERE sem= '1' ";
$csresult = mysqli_query($conn, $cssql);
while($csrow = mysqli_fetch_assoc($csresult)) {
$s3 = $csrow['s3'];
}
$dssql = "SELECT s4 FROM bsi  WHERE sem= '1' ";
$dsresult = mysqli_query($conn, $dssql);
while($dsrow = mysqli_fetch_assoc($dsresult)) {
$s4 = $dsrow['s4'];
}
$essql = "SELECT s5 FROM bsi  WHERE sem= '1' ";
$esresult = mysqli_query($conn, $essql);
while($esrow = mysqli_fetch_assoc($esresult)) {
$s5 = $esrow['s5'];
}
$fssql = "SELECT s6 FROM bsi  WHERE sem= '1' ";
$fsresult = mysqli_query($conn, $fssql);
while($fsrow = mysqli_fetch_assoc($fsresult)) {
$s6 = $fsrow['s6'];
}
$gssql = "SELECT l1 FROM bsi  WHERE sem= '1' ";
$gsresult = mysqli_query($conn, $gssql);
while($gsrow = mysqli_fetch_assoc($gsresult)) {
$l1 = $gsrow['l1'];
}
$hssql = "SELECT l2 FROM bsi  WHERE sem= '1' ";
$hsresult = mysqli_query($conn, $hssql);
while($hsrow = mysqli_fetch_assoc($hsresult)) {
$l2 = $hsrow['l2'];
}






$asql = "SELECT fname FROM bfaculty WHERE  qsi='$s1' ";
$aresult = mysqli_query($conn, $asql);
while($arow = mysqli_fetch_assoc($aresult)) {
$as = $arow['fname'];

}


$bsql = "SELECT fname FROM bfaculty WHERE  qsi='$s2' ";
$bresult = mysqli_query($conn, $bsql);
while($brow = mysqli_fetch_assoc($bresult)) {
$bs = $brow['fname'];

}


$csql = "SELECT fname FROM bfaculty WHERE  qsi='$s3' ";
$cresult = mysqli_query($conn, $csql);
while($row = mysqli_fetch_assoc($cresult)) {
$cs = $row['fname'];}

$dsql = "SELECT fname FROM bfaculty WHERE  qsi='$s4' ";
$dresult = mysqli_query($conn, $dsql);
while($row = mysqli_fetch_assoc($dresult)) {
$ds = $row['fname'];}

$esql = "SELECT fname FROM bfaculty WHERE  qsi='$s5' ";
$eresult = mysqli_query($conn, $esql);
while($row = mysqli_fetch_assoc($eresult)) {
$es = $row['fname'];}

$fsql = "SELECT fname FROM bfaculty WHERE  qsi='$s6' ";
$fresult = mysqli_query($conn, $fsql);
while($row = mysqli_fetch_assoc($fresult)) {
$fs = $row['fname'];}

$gsql = "SELECT fname FROM bfaculty WHERE  qli='$l1' ";
$gresult = mysqli_query($conn, $gsql);
while($row = mysqli_fetch_assoc($gresult)) {
$gl = $row['fname'];}

$hsql = "SELECT fname FROM bfaculty WHERE  qli='$l2' ";
$hresult = mysqli_query($conn, $hsql);
while($row = mysqli_fetch_assoc($hresult)) {
$hl = $row['fname'];}
?>



<tr><th colspan="10" style="font-size:20px; color:#FFFFFF"> B.Tech  I<sup>st</sup> Year[CSE ] , &nbsp;&nbsp;I<sup>st</sup> SEMESTER </th></tr>
		  

<tr> 

<td width="10%" bgcolor="#85144b"><center><h3 align="center" style="color:#fbf799"><strong><? echo "$s1"; ?>  <br/></h3>
		<h3 align="center" style="color: #93EAA3"> <? echo "$as"; ?> </strong></h3>  </center></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1s11.php"><strong>Internal  I</strong></a></p></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1s12.php"><strong>Internal  II</strong></a></p></td>

</tr>
						
<tr> 

<td width="10%" bgcolor="#85144b"><center><h3 align="center" style="color:#fbf799"><strong> <? echo"$s2"; ?> <br/></h3>
		<h3 align="center" style="color: #93EAA3">  <? echo "$bs"; ?> </strong></h3>  </center></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1s21.php"><strong>Internal  I</strong></a></p></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1s22.php"><strong>Internal  II</strong></a></p></td>

</tr>

<tr> 

<td width="10%" bgcolor="#85144b"><center><h3 align="center" style="color:#fbf799"><strong><? echo "$s3"; ?> <br/></h3>
		<h3 align="center" style="color: #93EAA3"> <? echo "$cs"; ?> </strong></h3>  </center></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1s31.php"><strong>Internal  I</strong></a></p></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1s32.php"><strong>Internal  II</strong></a></p></td>

</tr>
		
		
<tr> 

<td width="10%" bgcolor="#85144b"><center><h3 align="center" style="color:#fbf799"><strong><? echo "$s4"; ?><br/></h3>
		<h3 align="center" style="color: #93EAA3"> <? echo "$ds"; ?> </strong></h3>  </center></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1s41.php"><strong>Internal  I</strong></a></p></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1s42.php"><strong>Internal  II</strong></a></p></td>

</tr>
		
		
		
<tr> 

<td width="10%" bgcolor="#85144b"><center><h3 align="center" style="color:#fbf799"><strong><? echo "$s5"; ?><br/></h3>
		<h3 align="center" style="color: #93EAA3"> <? echo "$es"; ?> </strong></h3>  </center></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1s51.php"><strong>Internal  I</strong></a></p></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1s52.php"><strong>Internal  II</strong></a></p></td>

</tr>
		
		
<tr> 

<td width="10%" bgcolor="#85144b"><center><h3 align="center" style="color:#fbf799"><strong><? echo "$s6"; ?><br/></h3>
		<h3 align="center" style="color: #93EAA3"> <? echo "$fs"; ?> </strong></h3>  </center></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1s61.php"><strong>Internal  I</strong></a></p></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1s62.php"><strong>Internal  II</strong></a></p></td>

</tr>
				 
		
<tr> 

<td width="10%" bgcolor="#85144b"><center><h3 align="center" style="color:#fbf799"><strong><? echo "$l1"; ?><br/></h3>
		<h3 align="center" style="color: #93EAA3"> <? echo "$gl"; ?> </strong></h3>  </center></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1l11.php"><strong>Internal  I</strong></a></p></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1l12.php"><strong>Internal  II</strong></a></p></td>

</tr>
	
	<tr> 

<td width="10%" bgcolor="#85144b"><center><h3 align="center" style="color:#fbf799"><strong><? echo "$l2"; ?><br/></h3>
		<h3 align="center" style="color: #93EAA3"> <? echo "$hl"; ?> </strong></h3>  </center></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1l21.php"><strong>Internal  I</strong></a></p></td>
<td align="center" width="8%"><p style="color:#85144b;font-size:18px"><a href="bt1s1l22.php"><strong>Internal  II</strong></a></p></td>

</tr>
					
			
				
			
        </table>
		

		
		
		

	
	
		

</div>



<div id="afooter">
<div id="a1"><div id="a1text2">KMM COLLEGES, RAMIREDDY PALLI, TIRUPATI - 517 102 .</div></div>
</div>


</body>
</html>
