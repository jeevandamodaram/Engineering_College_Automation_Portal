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
<p align="center" style=" color:#FFFFFF; font-size:30px; font-family:'Times New Roman', Times, serif"><strong>B.tech [ CSE ] Semester Subjects & Lab Details Panel [ BSSPS ]   </strong></p>
</div>



<div id="top3">

</div>



<div id="bsetop4">

<div align="center" style="font-size:22px; color:#85144b"><strong>NOTE ::- Enter values in capital letters only.</strong></div>
<br>

	   <table align="center" class="myTable" width="95%" style="border-collapse: collapse">
          <tr>
<th width="12%">B.Tech</th>
<th width="9%">SEMESTER</th>
<th width="10%">S1</th>
<th width="10%">S2</th>
<th width="10%">S3</th>
<th width="10%">S4</th>
<th width="10%">S5</th>
<th width="10%">S6</th>
<th width="10%">L1</th>
<th width="10%">L2</th>

</tr>
</table>

 <?php

$asql = "SELECT * FROM bsi WHERE sem=1 ";
$aresult = mysqli_query($conn, $asql);
 
while($arow = mysqli_fetch_assoc($aresult)) {

echo"<form method='post' action='bsentry_reg.php? tb=bsi  '>";
echo"<table align='center' class='myTable' width='95%' style='border-collapse: collapse'>";
echo"<tr>"; 
echo"<td  align='center' width='12%' ><button class='button4'> I<sup>st</sup> YEAR </button></td>";
echo"<td align='center' width='9%'><h4 style='color:#85144b'><font face='Century Gothic'>
             <select size='1' name='sem' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
               <option value='1'> SEM 1</option>
               
             </select>
           </font></h4></td>";


echo"<td align='center' width='10%'><input class='text1' name='s1' type='text' maxlength='5' placeholder=".$arow["s1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s2' type='text' maxlength='5' placeholder=".$arow["s2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s3' type='text' maxlength='5' placeholder=".$arow["s3"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s4' type='text' maxlength='5' placeholder=".$arow["s4"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s5' type='text' maxlength='5' placeholder=".$arow["s5"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s6' type='text' maxlength='5' placeholder=".$arow["s6"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L1' type='text' maxlength='5' placeholder=".$arow["l1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L2' type='text' maxlength='5' placeholder=".$arow["l2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo"</tr>
</table>
</form>";	
} ?>

 <?php

$bsql = "SELECT * FROM bsi WHERE sem=2 ";
$bresult = mysqli_query($conn, $bsql);
while($brow = mysqli_fetch_assoc($bresult)) {

echo"<form method='post' action='bsentry_reg.php? tb=bsi  '>";
echo"<table align='center' class='myTable' width='95%' style='border-collapse: collapse'>";
echo"<tr>"; 
echo"<td  align='center' width='12%' ><button class='button4'> I<sup>st</sup> YEAR </button></td>";
echo"<td align='center' width='9%'><h4 style='color:#85144b'><font face='Century Gothic'>
             <select size='1' name='sem' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
              
               <option value='2'>SEM 2</option>
             </select>
           </font></h4></td>";


echo"<td align='center' width='10%'><input class='text1' name='s1' type='text' maxlength='5' placeholder=".$brow["s1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s2' type='text' maxlength='5' placeholder=".$brow["s2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s3' type='text' maxlength='5' placeholder=".$brow["s3"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s4' type='text' maxlength='5' placeholder=".$brow["s4"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s5' type='text' maxlength='5' placeholder=".$brow["s5"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s6' type='text' maxlength='5' placeholder=".$brow["s6"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L1' type='text' maxlength='5' placeholder=".$brow["l1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L2' type='text' maxlength='5' placeholder=".$brow["l2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo"</tr>
</table>
</form>";	
} ?>
<br>


<?php

$csql = "SELECT * FROM bsii WHERE sem=1 ";
$cresult = mysqli_query($conn, $csql);
while($crow = mysqli_fetch_assoc($cresult)) {

echo"<form method='post' action='bsentry_reg.php? tb=bsii  '>";
echo"<table align='center' class='myTable' width='95%' style='border-collapse: collapse'>";
echo"<tr>"; 
echo"<td  align='center' width='12%' ><button class='button4'> II<sup>nd</sup> YEAR </button></td>";
echo"<td align='center' width='9%'><h4 style='color:#85144b'><font face='Century Gothic'>
             <select size='1' name='sem' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
              
               <option value='1'>SEM 1</option>
             </select>
           </font></h4></td>";


echo"<td align='center' width='10%'><input class='text1' name='s1' type='text' maxlength='5' placeholder=".$crow["s1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s2' type='text' maxlength='5' placeholder=".$crow["s2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s3' type='text' maxlength='5' placeholder=".$crow["s3"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s4' type='text' maxlength='5' placeholder=".$crow["s4"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s5' type='text' maxlength='5' placeholder=".$crow["s5"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s6' type='text' maxlength='5' placeholder=".$crow["s6"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L1' type='text' maxlength='5' placeholder=".$crow["l1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L2' type='text' maxlength='5' placeholder=".$crow["l2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo"</tr>
</table>
</form>";	
} 

$dsql = "SELECT * FROM bsii WHERE sem=2 ";
$dresult = mysqli_query($conn, $dsql);
while($drow = mysqli_fetch_assoc($dresult)) {

echo"<form method='post' action='bsentry_reg.php? tb=bsii  '>";
echo"<table align='center' class='myTable' width='95%' style='border-collapse: collapse'>";
echo"<tr>"; 
echo"<td  align='center' width='12%' ><button class='button4'> II<sup>nd</sup> YEAR </button></td>";
echo"<td align='center' width='9%'><h4 style='color:#85144b'><font face='Century Gothic'>
             <select size='1' name='sem' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
              
               <option value='2'>SEM 2</option>
             </select>
           </font></h4></td>";


echo"<td align='center' width='10%'><input class='text1' name='s1' type='text' maxlength='5' placeholder=".$drow["s1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s2' type='text' maxlength='5' placeholder=".$drow["s2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s3' type='text' maxlength='5' placeholder=".$drow["s3"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s4' type='text' maxlength='5' placeholder=".$drow["s4"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s5' type='text' maxlength='5' placeholder=".$drow["s5"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s6' type='text' maxlength='5' placeholder=".$drow["s6"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L1' type='text' maxlength='5' placeholder=".$drow["l1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L2' type='text' maxlength='5' placeholder=".$drow["l2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo"</tr>
</table>
</form>";	
} ?>


<br>


<?php

$esql = "SELECT * FROM bsiii WHERE sem=1 ";
$eresult = mysqli_query($conn, $esql);
while($erow = mysqli_fetch_assoc($eresult)) {

echo"<form method='post' action='bsentry_reg.php? tb=bsiii  '>";
echo"<table align='center' class='myTable' width='95%' style='border-collapse: collapse'>";
echo"<tr>"; 
echo"<td  align='center' width='12%' ><button class='button4'> III<sup>rd</sup> YEAR </button></td>";
echo"<td align='center' width='9%'><h4 style='color:#85144b'><font face='Century Gothic'>
             <select size='1' name='sem' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
              
               <option value='1'>SEM 1</option>
             </select>
           </font></h4></td>";


echo"<td align='center' width='10%'><input class='text1' name='s1' type='text' maxlength='5' placeholder=".$erow["s1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s2' type='text' maxlength='5' placeholder=".$erow["s2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s3' type='text' maxlength='5' placeholder=".$erow["s3"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s4' type='text' maxlength='5' placeholder=".$erow["s4"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s5' type='text' maxlength='5' placeholder=".$erow["s5"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s6' type='text' maxlength='5' placeholder=".$erow["s6"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L1' type='text' maxlength='5' placeholder=".$erow["l1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L2' type='text' maxlength='5' placeholder=".$erow["l2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo"</tr>
</table>
</form>";	
} 

$fsql = "SELECT * FROM bsiii WHERE sem=2 ";
$fresult = mysqli_query($conn, $fsql);
while($frow = mysqli_fetch_assoc($fresult)) {

echo"<form method='post' action='bsentry_reg.php? tb=bsiii  '>";
echo"<table align='center' class='myTable' width='95%' style='border-collapse: collapse'>";
echo"<tr>"; 
echo"<td  align='center' width='12%' ><button class='button4'> III<sup>rd</sup> YEAR </button></td>";
echo"<td align='center' width='9%'><h4 style='color:#85144b'><font face='Century Gothic'>
             <select size='1' name='sem' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
              
               <option value='2'>SEM 2</option>
             </select>
           </font></h4></td>";


echo"<td align='center' width='10%'><input class='text1' name='s1' type='text' maxlength='5' placeholder=".$frow["s1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s2' type='text' maxlength='5' placeholder=".$frow["s2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s3' type='text' maxlength='5' placeholder=".$frow["s3"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s4' type='text' maxlength='5' placeholder=".$frow["s4"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s5' type='text' maxlength='5' placeholder=".$frow["s5"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s6' type='text' maxlength='5' placeholder=".$frow["s6"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L1' type='text' maxlength='5' placeholder=".$frow["l1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L2' type='text' maxlength='5' placeholder=".$frow["l2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo"</tr>
</table>
</form>";	
} ?>


<br>


<?php

$gsql = "SELECT * FROM bsiiii WHERE sem=1 ";
$gresult = mysqli_query($conn, $gsql);
while($grow = mysqli_fetch_assoc($gresult)) {

echo"<form method='post' action='bsentry_reg.php? tb=bsiiii  '>";
echo"<table align='center' class='myTable' width='95%' style='border-collapse: collapse'>";
echo"<tr>"; 
echo"<td  align='center' width='12%' ><button class='button4'> IV<sup>th</sup> YEAR </button></td>";
echo"<td align='center' width='9%'><h4 style='color:#85144b'><font face='Century Gothic'>
             <select size='1' name='sem' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
              
               <option value='1'>SEM 1</option>
             </select>
           </font></h4></td>";


echo"<td align='center' width='10%'><input class='text1' name='s1' type='text' maxlength='5' placeholder=".$grow["s1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s2' type='text' maxlength='5' placeholder=".$grow["s2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s3' type='text' maxlength='5' placeholder=".$grow["s3"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s4' type='text' maxlength='5' placeholder=".$grow["s4"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s5' type='text' maxlength='5' placeholder=".$grow["s5"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s6' type='text' maxlength='5' placeholder=".$grow["s6"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L1' type='text' maxlength='5' placeholder=".$grow["l1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L2' type='text' maxlength='5' placeholder=".$grow["l2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo"</tr>
</table>
</form>";	
} 

$hsql = "SELECT * FROM bsiiii WHERE sem=2 ";
$hresult = mysqli_query($conn, $hsql);
while($hrow = mysqli_fetch_assoc($hresult)) {

echo"<form method='post' action='bsentry_reg.php? tb=bsiiii  '>";
echo"<table align='center' class='myTable' width='95%' style='border-collapse: collapse'>";
echo"<tr>"; 
echo"<td  align='center' width='12%' ><button class='button4'> IV<sup>th</sup> YEAR </button></td>";
echo"<td align='center' width='9%'><h4 style='color:#85144b'><font face='Century Gothic'>
             <select size='1' name='sem' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
              
               <option value='2'>SEM 2</option>
             </select>
           </font></h4></td>";


echo"<td align='center' width='10%'><input class='text1' name='s1' type='text' maxlength='5' placeholder=".$hrow["s1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s2' type='text' maxlength='5' placeholder=".$hrow["s2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s3' type='text' maxlength='5' placeholder=".$hrow["s3"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s4' type='text' maxlength='5' placeholder=".$hrow["s4"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s5' type='text' maxlength='5' placeholder=".$hrow["s5"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='s6' type='text' maxlength='5' placeholder=".$hrow["s6"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L1' type='text' maxlength='5' placeholder=".$hrow["l1"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo"<td align='center' width='10%'><input class='text1' name='L2' type='text' maxlength='5' placeholder=".$hrow["l2"]." required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo"</tr>
</table>
</form>";	
} ?>


<br>
<br>




</div>

<div id="afooter">
<div id="a1"><div id="a1text2">KMM COLLEGES, RAMIREDDY PALLI, TIRUPATI - 517 102 .</div></div>
</div>

</body>
</html>
