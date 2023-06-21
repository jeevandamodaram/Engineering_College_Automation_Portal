<? $page="bmstu.php" ?>

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
			<p align="center" style=" color:#FFFFFF; font-size:30px; font-family:'Times New Roman', Times, serif"><strong>Register & Update  M.Tech&nbsp; II<sup>nd</sup>&nbsp; Year &nbsp;Student's List   </strong></p>
</div>



<div id="top3">

</div>



<div id="fbtop4">

 <form name="mstu"   method='post' action='bmstup.php?page=<? echo" $page "; ?> & pid=2 & edu=m'  >
 <table align="center" class="myTable" width="80%" style="border-collapse: collapse">
 <tr>
 <td bgcolor="#85144b" width="4" ><center><h3 style="color:#FFFFFF"> Student Name </h3></center></td>
<td bgcolor="#85144b"><center><h3 style="color:#FFFFFF"> Roll Number </h3></center></td>
<td bgcolor="#85144b"><center><h3 style="color:#FFFFFF">Batch Year</h3></center></td>
<td bgcolor="#85144b"><center><h3 style="color:#FFFFFF"> Current Year </td>
<td bgcolor="#85144b"><center><h3 style="color:#FFFFFF">Register</h3></center></td>

</tr>

<tr> 
<td width="20%"><center><input class='text1' name='sname' type='text' maxlength='50' placeholder='student name' required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>
<td width="15%"><center><input class='text1' name='rno' type='text' maxlength='30' placeholder='Roll Number' required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>
<td width="8%"><center><h3 style="color:#85144b"><font face="Century Gothic">
<select size="1" name="byear" id="select2" style="font-weight: bold; font-family: Century Gothic; color: #85144b">
 <option value="2015 to 2017">2015 to 2017</option>
</select>
</font></h3></center></td>
<td width="8%"><center><h3 style="color:#85144b"><font face="Century Gothic">
<select size="1" name="cyear" id="select2" style="font-weight: bold; font-family: Century Gothic; color: #85144b">
<option value=" <?php echo date("Y");?> "><?php echo date("Y");?></option>

</select>
</font></h3></center></td>

<td width="4%"> <button class='button2'> Register </button></td>
</tr>
 </table>
	

</form>


<br>
<br>

<div align="center"  style="color:#85144b ; font-size:18px;"><h3>Update M.Tech&nbsp; II<sup>nd</sup>&nbsp; Year &nbsp;Student List  [ CSE ]</h3></div>



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

$sql = "SELECT * FROM studet WHERE pyear='2' AND edu='m'  ORDER BY rnumber ASC ";
$result = mysqli_query($conn, $sql);
 $count=1;
while($row = mysqli_fetch_assoc($result)) {
//echo $row['sname'];
echo"<form   method='post'  action='umstup.php?page=". $page ."  & stid=". $row['stid'] ." & pid=1 & edu=m '  >"; 

echo "<table align='center' class='myTable' width='90%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='5%' ><p align='center' style='font-size:20px; color:#85144b'>" . $count++ .  " </p> </td>";

echo " <td align='center' width='20%'> <input class='text1' name='rno'  type='text'  maxlength='20' placeholder=". $row["rnumber"]. "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo "<td align='center' width='36%' ><input class='text1' name='sname'  type='text'  placeholder='student name'  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";



echo"<td align='center' width='14%'><h3 style='color:#85144b'><font face='Century Gothic'>
<select size='1' name='byear' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
<option value='2013 - 2017'>2013 - 2017</option>
<option value='2014 - 2018'>2014 - 2018</option>
<option value='2015 - 2019'>2015 - 2019</option>
<option value='2016 - 2020'>2016 - 2020</option>
<option value='2017 - 2021'>2017 - 2021</option>
<option value='2018 - 2022'>2018 - 2022</option>
<option value='2019 - 2023'>2019 - 2023</option>
<option value='2020 - 2024'>2020 - 2024</option>
<option value='2021 - 2025'>2021 - 2025</option>
<option value='2022 - 2026'>2022 - 2026</option>
</select>
</font></h3></center></td>";

echo "<td align='center' width='12%'  style=' color:#85144b; font-size:18px'; ><strong>". $row["cyear"]. " </strong></td>";

echo "<td  width='15%' > <button class='button1'> Update </button> </td>";

echo"
</tr>
<tr>
</tr>
</table>
</form>";
echo"</form>";





}
?>

</div>



<div id="afooter">
<div id="a1"><div id="a1text2">KMM COLLEGES, RAMIREDDY PALLI, TIRUPATI - 517 102 .</div></div>
</div>


</body>
</html>
