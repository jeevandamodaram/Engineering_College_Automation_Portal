


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
<script src="js/responsiveslides.min.js"></script>
<script src="js/jquery.unslider.js"></script>
<script type="text/javascript" src="js/s3Slider.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      $("#slider1").responsiveSlides({ speed: 200});

    });
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
	   <table align="center" class="myTable" width="80%" style="border-collapse: collapse">
          <tr>
<th width="10%">Roll Number</th>
<th width="15%">Roll Number</th>
<th width="7%">S1</th>
<th width="7%">S2</th>
<th width="9%">S3</th>
<th width="7%">S4</th>
<th width="8%">S5</th>
<th width="7%">S6</th>
<th width="7%">L1</th>
<th width="9%">L2</th>
<th width="19%">Attendance</th>
</tr>

</table>
<?  
$pid=1;
$edu='b';
?>



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
echo "<form  method='post' action='attendance_reg.php?rno=" . $qrow['rno'] ." & pg= ".$page." & pid= ".$pid." & edu=".$edu." '>";
echo "<table align='center' class='myTable' width='80%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='10%' ><p align='center' style='font-size:20px; color:#85144b'>" .$qrow['rno'] .  " </p> </td>";
echo "<td  width='15%'bgcolor='#85144b'><p align='center' style='font-size:20px; color:#FFFFFF'>" . $qrow['rname'] .  " </p> </td>";
echo " <td width='5%'>";
echo " <input class='minput' name='s1'  type='number' min=1 max=30 maxlength='2' placeholder=". $qrow["s1"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='5%'>";
echo " <input class='minput' name='s2'  type='number' min=1 max=30 maxlength='2' placeholder=". $qrow["s2"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='5%'>";
echo " <input class='minput' name='s3'  type='number' min=1 max=30 maxlength='2' placeholder=". $qrow["s3"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='5%'>";
echo " <input class='minput' name='s4'  type='number' min=1 max=30 maxlength='2' placeholder=". $qrow["s4"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='5%'>";
echo " <input class='minput' name='s5'  type='number' min=1 max=30 maxlength='2' placeholder=". $qrow["s5"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='5%'>";
echo " <input class='minput' name='s6'  type='number' min=1 max=30 maxlength='2' placeholder=". $qrow["s6"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='5%'>";
echo " <input class='minput' name='l1'  type='number' min=1 max=30 maxlength='2' placeholder=". $qrow["L1"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td width='5%'>";
echo " <input class='minput' name='l2'  type='number' min=1 max=30 maxlength='2' placeholder=". $qrow["L2"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";

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
