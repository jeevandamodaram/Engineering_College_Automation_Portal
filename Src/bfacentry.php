
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
 
 setInterval('autoRefresh()', 15000); // this will reload page after every 5 secounds; Method I
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
<p align="center" style=" color:#FFFFFF; font-size:30px; font-family:'Times New Roman', Times, serif"><strong>B.Tech '&' M.Tech Faculty Details  Register / Update</strong></p>

	
</div>



<div id="top3">
</div>



<div id="top14">



 
	  <table align="center" class="myTable" width="80%" style="border-collapse: collapse">
	  
          <tr>
		  <th width="3%" style="font-size:18px;" > Sno</th>
		  <th width="30%" style="font-size:18px;" >Faculty Name </th>
		  <th width="28%" style="font-size:18px;">Education Details</th>
		  <th width="15%" style="font-size:18px;" >Designation</th>
		   <th width="15%" style="font-size:18px;" >Update</th>
		  </tr>
		</table>
		
	
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

//$fac = $arow['mfname'];
//$fid= fid $count;
//echo"$fid";  
$sql = "SELECT * FROM bfaculty WHERE fid='fs1'  ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$n = $row['fname'];
//echo "$n" ;	
//echo "$s";
echo "<form  method='post' action='bfacentry_reg.php?id=". $row["fid"] ." & mid=m". $row["fid"] ." & uid=". uniqid() ."'>";
echo "<table align='center' class='myTable' width='80%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='5%' ><p align='center' style='font-size:22px; color:#85144b'><strong> 1  </strong> </p> </td>";
echo " <td align='center' width='35%'>";
echo " <input class='text3' name='fname'  type='text' maxlength='50' placeholder=" . $n . "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td align='center' width='35%'>";
echo " <input class='text3' name='edts'  type='text' maxlength='30' placeholder=". $row["edet"] ."  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo" <td width='8%'>
		 <center><h4 style='color:#85144b'><font face='Century Gothic'>
         <select size='1' name='fdg' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
          <option value='ASST PROFESSOR'>Assistant Professor</option>
		  <option value='ASSOCIATE PROFESSOR'>Associate Professor</option>
		  <option value='PROFESSOR'>Professor</option>
         </select>
        </font></h4></center>
		</td>  ";
echo "<td  width='25%' >  <button class='button1'> Update </button> </td>";
echo"
</tr>
<tr>
</tr>
</table>
</form>";
}
?> 
		
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
//$fac = $arow['mfname'];
//$fid= fid $count;
//echo"$fid";  
$sql = "SELECT * FROM bfaculty WHERE fid='fs2' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$n = $row['fname'];

//echo "$n" ;	
//echo "$s";
echo "<form  method='post' action='bfacentry_reg.php?id=". $row["fid"] ." & mid=m". $row["fid"] ." & uid=". uniqid() ."'>";
echo "<table align='center' class='myTable' width='80%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='5%' ><p align='center' style='font-size:22px; color:#85144b'><strong>2</strong> </p> </td>";

echo " <td align='center' width='35%'>";
echo " <input class='text3' name='fname'  type='text' maxlength='50' placeholder=" . $n . "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td align='center' width='35%'>";
echo " <input class='text3' name='edts'  type='text' maxlength='30' placeholder=". $row["edet"] ."  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo" <td width='8%'>
		 <center><h4 style='color:#85144b'><font face='Century Gothic'>
         <select size='1' name='fdg' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
          <option value='ASST PROFESSOR'>Assistant Professor</option>
		  <option value='ASSOCIATE PROFESSOR'>Associate Professor</option>
		  <option value='PROFESSOR'>Professor</option>
         </select>
        </font></h4></center>
		</td>  ";





echo "<td  width='25%' >  <button class='button1'> Update </button> </td>";

echo"
</tr>
<tr>
</tr>
</table>
</form>";

}
?> 
		


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
//$fac = $arow['mfname'];
//$fid= fid $count;
//echo"$fid";  
$sql = "SELECT * FROM bfaculty WHERE fid='fs3' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$n = $row['fname'];

//echo "$n" ;	
//echo "$s";
echo "<form  method='post' action='bfacentry_reg.php?id=". $row["fid"] ." & mid=m". $row["fid"] ." & uid=". uniqid() ."'>";
echo "<table align='center' class='myTable' width='80%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='5%' ><p align='center' style='font-size:22px; color:#85144b'><strong>3</strong> </p> </td>";

echo " <td align='center' width='35%'>";
echo " <input class='text3' name='fname'  type='text' maxlength='50' placeholder=" . $n . "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td align='center' width='35%'>";
echo " <input class='text3' name='edts'  type='text' maxlength='30' placeholder=". $row["edet"] ."  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo" <td width='8%'>
		 <center><h4 style='color:#85144b'><font face='Century Gothic'>
         <select size='1' name='fdg' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
          <option value='ASST PROFESSOR'>Assistant Professor</option>
		  <option value='ASSOCIATE PROFESSOR'>Associate Professor</option>
		  <option value='PROFESSOR'>Professor</option>
         </select>
        </font></h4></center>
		</td>  ";





echo "<td  width='25%' >  <button class='button1'> Update </button> </td>";

echo"
</tr>
<tr>
</tr>
</table>
</form>";

}
?> 
		

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
//$fac = $arow['mfname'];
//$fid= fid $count;
//echo"$fid";  
$sql = "SELECT * FROM bfaculty WHERE fid='fs4' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$n = $row['fname'];

//echo "$n" ;	
//echo "$s";
echo "<form  method='post' action='bfacentry_reg.php?id=". $row["fid"] ." & mid=m". $row["fid"] ." & uid=". uniqid() ."'>";
echo "<table align='center' class='myTable' width='80%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='5%' ><p align='center' style='font-size:22px; color:#85144b'><strong>4</strong> </p> </td>";

echo " <td align='center' width='35%'>";
echo " <input class='text3' name='fname'  type='text' maxlength='50' placeholder=" . $n . "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td align='center' width='35%'>";
echo " <input class='text3' name='edts'  type='text' maxlength='30' placeholder=". $row["edet"] ."  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo" <td width='8%'>
		 <center><h4 style='color:#85144b'><font face='Century Gothic'>
         <select size='1' name='fdg' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
          <option value='ASST PROFESSOR'>Assistant Professor</option>
		  <option value='ASSOCIATE PROFESSOR'>Associate Professor</option>
		  <option value='PROFESSOR'>Professor</option>
         </select>
        </font></h4></center>
		</td>  ";





echo "<td  width='25%' >  <button class='button1'> Update </button> </td>";

echo"
</tr>
<tr>
</tr>
</table>
</form>";

}
?> 
		

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
//$fac = $arow['mfname'];
//$fid= fid $count;
//echo"$fid";  
$sql = "SELECT * FROM bfaculty WHERE fid='fs5' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$n = $row['fname'];

//echo "$n" ;	
//echo "$s";
echo "<form  method='post' action='bfacentry_reg.php?id=". $row["fid"] ." & mid=m". $row["fid"] ." & uid=". uniqid() ."'>";
echo "<table align='center' class='myTable' width='80%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='5%' ><p align='center' style='font-size:22px; color:#85144b'><strong>5</strong> </p> </td>";

echo " <td align='center' width='35%'>";
echo " <input class='text3' name='fname'  type='text' maxlength='50' placeholder=" . $n . "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td align='center' width='35%'>";
echo " <input class='text3' name='edts'  type='text' maxlength='30' placeholder=". $row["edet"] ."  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo" <td width='8%'>
		 <center><h4 style='color:#85144b'><font face='Century Gothic'>
         <select size='1' name='fdg' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
          <option value='ASST PROFESSOR'>Assistant Professor</option>
		  <option value='ASSOCIATE PROFESSOR'>Associate Professor</option>
		  <option value='PROFESSOR'>Professor</option>
         </select>
        </font></h4></center>
		</td>  ";





echo "<td  width='25%' >  <button class='button1'> Update </button> </td>";

echo"
</tr>
<tr>
</tr>
</table>
</form>";

}
?> 
		

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
//$fac = $arow['mfname'];
//$fid= fid $count;
//echo"$fid";  
$sql = "SELECT * FROM bfaculty WHERE fid='fs6' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$n = $row['fname'];

//echo "$n" ;	
//echo "$s";
echo "<form  method='post' action='bfacentry_reg.php?id=". $row["fid"] ." & mid=m". $row["fid"] ." & uid=". uniqid() ."'>";
echo "<table align='center' class='myTable' width='80%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='5%' ><p align='center' style='font-size:22px; color:#85144b'><strong>6</strong> </p> </td>";

echo " <td align='center' width='35%'>";
echo " <input class='text3' name='fname'  type='text' maxlength='50' placeholder=" . $n . "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td align='center' width='35%'>";
echo " <input class='text3' name='edts'  type='text' maxlength='30' placeholder=". $row["edet"] ."  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo" <td width='8%'>
		 <center><h4 style='color:#85144b'><font face='Century Gothic'>
         <select size='1' name='fdg' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
          <option value='ASST PROFESSOR'>Assistant Professor</option>
		  <option value='ASSOCIATE PROFESSOR'>Associate Professor</option>
		  <option value='PROFESSOR'>Professor</option>
         </select>
        </font></h4></center>
		</td>  ";





echo "<td  width='25%' >  <button class='button1'> Update </button> </td>";

echo"
</tr>
<tr>
</tr>
</table>
</form>";

}
?> 
		

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
//$fac = $arow['mfname'];
//$fid= fid $count;
//echo"$fid";  
$sql = "SELECT * FROM bfaculty WHERE fid='fs7' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$n = $row['fname'];

//echo "$n" ;	
//echo "$s";
echo "<form  method='post' action='bfacentry_reg.php?id=". $row["fid"] ." & mid=m". $row["fid"] ." & uid=". uniqid() ."'>";
echo "<table align='center' class='myTable' width='80%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='5%' ><p align='center' style='font-size:22px; color:#85144b'><strong>7</strong> </p> </td>";

echo " <td align='center' width='35%'>";
echo " <input class='text3' name='fname'  type='text' maxlength='50' placeholder=" . $n . "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td align='center' width='35%'>";
echo " <input class='text3' name='edts'  type='text' maxlength='30' placeholder=". $row["edet"] ."  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo" <td width='8%'>
		 <center><h4 style='color:#85144b'><font face='Century Gothic'>
         <select size='1' name='fdg' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
          <option value='ASST PROFESSOR'>Assistant Professor</option>
		  <option value='ASSOCIATE PROFESSOR'>Associate Professor</option>
		  <option value='PROFESSOR'>Professor</option>
         </select>
        </font></h4></center>
		</td>  ";





echo "<td  width='25%' >  <button class='button1'> Update </button> </td>";

echo"
</tr>
<tr>
</tr>
</table>
</form>";

}
?> 
		

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
//$fac = $arow['mfname'];
//$fid= fid $count;
//echo"$fid";  
$sql = "SELECT * FROM bfaculty WHERE fid='fs8' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$n = $row['fname'];

//echo "$n" ;	
//echo "$s";
echo "<form  method='post' action='bfacentry_reg.php?id=". $row["fid"] ." & mid=m". $row["fid"] ." & uid=". uniqid() ."'>";
echo "<table align='center' class='myTable' width='80%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='5%' ><p align='center' style='font-size:22px; color:#85144b'><strong>8</strong> </p> </td>";

echo " <td align='center' width='35%'>";
echo " <input class='text3' name='fname'  type='text' maxlength='50' placeholder=" . $n . "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td align='center' width='35%'>";
echo " <input class='text3' name='edts'  type='text' maxlength='30' placeholder=". $row["edet"] ."  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo" <td width='8%'>
		 <center><h4 style='color:#85144b'><font face='Century Gothic'>
         <select size='1' name='fdg' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
          <option value='ASST PROFESSOR'>Assistant Professor</option>
		  <option value='ASSOCIATE PROFESSOR'>Associate Professor</option>
		  <option value='PROFESSOR'>Professor</option>
         </select>
        </font></h4></center>
		</td>  ";





echo "<td  width='25%' >  <button class='button1'> Update </button> </td>";

echo"
</tr>
<tr>
</tr>
</table>
</form>";

}
?> 
		

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
//$fac = $arow['mfname'];
//$fid= fid $count;
//echo"$fid";  
$sql = "SELECT * FROM bfaculty WHERE fid='fs9' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$n = $row['fname'];

//echo "$n" ;	
//echo "$s";
echo "<form  method='post' action='bfacentry_reg.php?id=". $row["fid"] ." & mid=m". $row["fid"] ." & uid=". uniqid() ."'>";
echo "<table align='center' class='myTable' width='80%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='5%' ><p align='center' style='font-size:22px; color:#85144b'><strong>9</strong> </p> </td>";

echo " <td align='center' width='35%'>";
echo " <input class='text3' name='fname'  type='text' maxlength='50' placeholder=" . $n . "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td align='center' width='35%'>";
echo " <input class='text3' name='edts'  type='text' maxlength='30' placeholder=". $row["edet"] ."  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo" <td width='8%'>
		 <center><h4 style='color:#85144b'><font face='Century Gothic'>
         <select size='1' name='fdg' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
          <option value='ASST PROFESSOR'>Assistant Professor</option>
		  <option value='ASSOCIATE PROFESSOR'>Associate Professor</option>
		  <option value='PROFESSOR'>Professor</option>
         </select>
        </font></h4></center>
		</td>  ";





echo "<td  width='25%' >  <button class='button1'> Update </button> </td>";

echo"
</tr>
<tr>
</tr>
</table>
</form>";

}
?> 
		

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
//$fac = $arow['mfname'];
//$fid= fid $count;
//echo"$fid";  
$sql = "SELECT * FROM bfaculty WHERE fid='fs10' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$n = $row['fname'];

//echo "$n" ;	
//echo "$s";
echo "<form  method='post' action='bfacentry_reg.php?id=". $row["fid"] ." & mid=m". $row["fid"] ." & uid=". uniqid() ."'>";
echo "<table align='center' class='myTable' width='80%' style='border-collapse: collapse'>";
//$s=$row['midI']; 
//}
echo "<tr>"; 
echo "<td  width='5%' ><p align='center' style='font-size:22px; color:#85144b'><strong>10</strong> </p> </td>";

echo " <td align='center' width='35%'>";
echo " <input class='text3' name='fname'  type='text' maxlength='50' placeholder=" . $n . "  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";
echo " <td align='center' width='35%'>";
echo " <input class='text3' name='edts'  type='text' maxlength='30' placeholder=". $row["edet"] ."  required style='font-weight: bold; font-family: Century Gothic; color: #85144b' /></td>";


echo" <td width='8%'>
		 <center><h4 style='color:#85144b'><font face='Century Gothic'>
         <select size='1' name='fdg' id='select2' style='font-weight: bold; font-family: Century Gothic; color: #85144b'>
          <option value='ASST PROFESSOR'>Assistant Professor</option>
		  <option value='ASSOCIATE PROFESSOR'>Associate Professor</option>
		  <option value='PROFESSOR'>Professor</option>
         </select>
        </font></h4></center>
		</td>  ";





echo "<td  width='25%' >  <button class='button1'> Update </button> </td>";

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
