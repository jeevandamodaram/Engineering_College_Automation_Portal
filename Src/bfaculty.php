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
  <script>
 
 function autoRefresh()
{
	window.location = window.location.href;
}
 
 setInterval('autoRefresh()', 20000); // this will reload page after every 5 secounds; Method I
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
	<p align="center" style=" color:#FFFFFF; font-size:30px; font-family:'Times New Roman', Times, serif"><strong>Welcome to Faculty Schedule Panel Service [ FSPS ]  </strong></p>
</div>



<div id="top3">

</div>



<div id="fdtop4">

<table align="center" class="myTable" width="95%" style="border-collapse: collapse">
<tr>
<th colspan="2"><h3>B.Tech Faculty Schedule </h3></th>
<th colspan="2"><h3>I<sup>st</sup> Year [ Sub & Lab ] </h3></th>
<th colspan="2"><h3>II<sup>nd</sup> Year [ Sub & Lab ] </h3></th>
<th colspan="2"><h3>III<sup>rd</sup> Year [ Sub & Lab ] </h3></th>
<th colspan="2"><h3>IV<sup>th</sup> Year [ Sub & Lab ] </h3></th>
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

$sql = "SELECT * FROM Bfaculty ";
$result = mysqli_query($conn, $sql);
 $count=1;
while($row = mysqli_fetch_assoc($result)) {
	
//echo "$s";
echo"   <tr>"; 
echo" <td width='2%'><center><h4 style='color:#85144b'>". $count++ ."</h4></center></td>";
echo"  <td width='8%'><center><h4 style='color:#85144b;font-size:18px; '>" . $row["fname"].  "</h4></center></td>";
echo"  <td width='3%'><center><h4 style='color:#f40d3e;font-size:18px; '>". $row["qsi"]."</h4></center></td>";
echo"  <td width='3%'><center><h4 style='color:#06795a;font-size:18px;'>". $row["qli"]."</h4></center></td>";
echo"  <td width='3%'><center><h4 style='color:#f40d3e;font-size:18px;'>". $row["wsi"]."</h4></center></td>";
echo"  <td width='3%'><center><h4 style='color:#06795a;font-size:18px;'>". $row["wli"]."</h4></center></td>";
echo"  <td width='3%'><center><h4 style='color:#f40d3e;font-size:18px;'>". $row["esi"]."</h4></center></td>";
echo"  <td width='3%'><center><h4 style='color:#06795a;font-size:18px;'>". $row["eli"]."</h4></center></td>";
echo"  <td width='3%'><center><h4 style='color:#f40d3e;font-size:18px;'>". $row["rsi"]."</h4></center></td>";
echo"  <td width='3%'><center><h4 style='color:#06795a;font-size:18px;'>". $row["rli"]."</h4></center></td>";
echo"</tr>";		
}
?> 
</table>

<br><br><br><br>



</div>



<div id="afooter">
<div id="a1"><div id="a1text2" style="">KMM COLLEGES, RAMIREDDY PALLI, TIRUPATI - 517 102 .</div></div>
</div>


</body>
</html>
