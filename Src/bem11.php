
<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><head>
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
	
</div>



<div id="top3">

</div>



<div id="top14">
 
	  <table align="center" class="myTable" width="80%" style="border-collapse: collapse">
	  
          <tr>
		  <th width="25%" > B.Tech  I<sup>st</sup> Year &nbsp;&nbsp;[ byear ] </th>
		  <th width="25%" >I<sup>st</sup> Semester &nbsp;&nbsp;[ Mid I ] </th>
		  <th width="23%" >Subject 1 </th>
		  <th width="27%" >Faculty Name </th>
		  </tr>
		</table>
		<br>  
	
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

$sql = "SELECT * FROM mid ";
$result = mysqli_query($conn, $sql);
 $count=1;
while($row = mysqli_fetch_assoc($result)) {
	
//echo "$s";
echo "<form  method='post' action='succes.php?rno=" . $row['rno'] ." '  >";
echo "<table align='center' class='myTable' width='80%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='5%' ><p align='center' style='font-size:20px; color:#85144b'>" . $count++ .  " </p> </td>";
echo "<td  width='40%'bgcolor='#85144b'><p align='center' style='font-size:20px; color:#FFFFFF'>" . $row["rno"].  " </p> </td>";
echo " <td width='10%'>";
echo " <input class='minput' name='marks'  type='text' maxlength='2' placeholder=". $row["midI"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";

echo "<td  width='10%' >  <button class='button1'> Update </button> </td>";

echo "<td  width='10%' ><p align='center' style='font-size:20px; color:#85144b'>" . $row["midI"].  " </p> </td>";



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
