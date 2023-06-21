<?
include 'bgen2.php';
$rno=$_GET['rno'];
$stid=$_GET['stid'];
$page="gbsemd.php"
?>
<table align="center" class="myTable" width="80%" style="border-collapse: collapse">
<tr>
<th width="20%" style="font-size:14px; color:#000000">Roll Number</th>
<th width="7%" style="font-size:14px; color:#000000">S1</th>
<th width="7%" style="font-size:14px; color:#000000">S2</th>
<th width="9%" style="font-size:14px; color:#000000">S3</th>
<th width="7%" style="font-size:14px; color:#000000">S4</th>
<th width="8%" style="font-size:14px; color:#000000">S5</th>
<th width="7%" style="font-size:14px; color:#000000">S6</th>
<th width="7%" style="font-size:14px; color:#000000">L1</th>
<th width="9%" style="font-size:14px; color:#000000">L2</th>
<th width="19%" style="font-size:14px; color:#000000">Attendance</th>
</tr>
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
$sql = "SELECT * FROM midi  WHERE stid='$stid' OR rno='$rno' AND pyear='2' AND edu='b'  ";
$result = mysqli_query($conn, $sql);
 $count=1;
while($row = mysqli_fetch_array($result))
{
$is1= $row['s1'];
$is2= $row['s2'];
$is3= $row['s3'];
$is4= $row['s4'];
$is5= $row['s5'];
$is6= $row['s6'];
$il1= $row['L1'];
$il2= $row['L2'];
} 
echo"$is1"; 
echo"$is2"; 
echo"$is3"; 
echo"$is4"; 
echo"$is5"; 
echo"$is6"; 
echo"$il1"; 
echo"$il2"; 
$asql = "SELECT * FROM midii  WHERE stid='$stid' OR rno='$rno' AND pyear='2' AND edu='b'  ";
$aresult = mysqli_query($conn, $asql);
 $count=1;
while($arow = mysqli_fetch_array($aresult))
{
$iis1= $arow['s1'];
$iis2= $arow['s2'];
$iis3= $arow['s3'];
$iis4= $arow['s4'];
$iis5= $arow['s5'];
$iis6= $arow['s6'];
$iil1= $arow['L1'];
$iil2= $arow['L2'];
} 
echo"$iis1"; 
echo"$iis2"; 
echo"$iis3"; 
echo"$iis4"; 
echo"$iis5"; 
echo"$iis6"; 
echo"$iil1"; 
echo"$iil2"; 
$ms1 = (max(array($is1,$iis1,)));
$ms2 = (max(array($is2,$iis2,)));
$ms3= (max(array($is3,$iis3,)));
$ms4 = (max(array($is4,$iis4,)));
$ms5 = (max(array($is5,$iis5,)));
$ms6 = (max(array($is6,$iis6,)));
$ml1 = (max(array($il1,$iil1,)));
$ml2 = (max(array($il2,$iil2,)));

$tmt = $ms1+$ms2+$ms3+$ms4+$ms5+$ms6+$ml1+$ml2;

echo"<tr> ";
echo"<td  align='center' width='20%' style='color:#85144b' ><strong>". $rno."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>".$ms1. "</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>".$ms2."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>".$ms3."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>".$ms4."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>".$ms5."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>".$ms6."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>".$ml1."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>".$ml2."</strong></td>";
echo"</tr>";
$usql = "UPDATE mid SET m='$tmt', s1='$ms1',s2='$ms2',s3='$ms3',s4='$ms4',s5='$ms5',s6='$ms6',L1='$ml1',L2='$ml2'  WHERE stid='$stid' OR rno='$rno' AND pyear='2' AND edu='b'  ";
if ($conn->query($usql) === TRUE) {
echo"";
} else {
    echo "Error: " . $usql . "<br>" . $conn->error;
}



$psql = "SELECT * FROM mid WHERE  stid='$stid' AND pyear='2'  ";
$presult = mysqli_query($conn, $psql);
while($prow = mysqli_fetch_array($presult))
{  
$wcheck=$prow['m'];
}


if($wcheck=1){

   $dmsql="UPDATE studet SET mstatus=2 WHERE stid='$stid' AND pyear='2' AND edu='b'  ";
   if ($conn->query($dmsql) === TRUE) {
   echo"j";} 
   
} else {

  echo"herror";
}





	

//attendance


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	
$bsql = "SELECT * FROM bati  WHERE stid='$stid' OR rno='$rno' AND pyear='2' AND edu='b'  ";
$bresult = mysqli_query($conn, $bsql);
while($brow = mysqli_fetch_array($bresult))
{
$bis1= $brow['s1'];
$bis2= $brow['s2'];
$bis3= $brow['s3'];
$bis4= $brow['s4'];
$bis5= $brow['s5'];
$bis6= $brow['s6'];
$bil1= $brow['l1'];
$bil2= $brow['l2'];
} 




$csql = "SELECT s2 FROM fbatii WHERE fname='$as' ";
$cresult = mysqli_query($conn, $csql);
while($crow = mysqli_fetch_array($cresult))
{
$fbis1= $crow['s2'];
}

$dsql = "SELECT s2 FROM fbatii WHERE fname='$bs' ";
$dresult = mysqli_query($conn, $dsql);
while($drow = mysqli_fetch_array($dresult))
{
$fbis2= $drow['s2'];
}

$esql = "SELECT s2 FROM fbatii WHERE fname='$cs' ";
$eresult = mysqli_query($conn, $esql);
while($erow = mysqli_fetch_array($eresult))
{
$fbis3= $erow['s2'];
}

$fsql = "SELECT s2 FROM fbatii WHERE fname='$ds' ";
$fresult = mysqli_query($conn, $fsql);
while($frow = mysqli_fetch_array($fresult))
{
$fbis4= $frow['s2'];
}

$gsql = "SELECT s2 FROM fbatii WHERE fname='$es' ";
$gresult = mysqli_query($conn, $gsql);
while($grow = mysqli_fetch_array($gresult))
{
$fbis5= $grow['s2'];
}

$hsql = "SELECT s2 FROM fbatii WHERE fname='$fs' ";
$hresult = mysqli_query($conn, $hsql);
while($hrow = mysqli_fetch_array($hresult))
{
$fbis6= $hrow['s2'];
}

$isql = "SELECT l2 FROM fbatii WHERE fname='$gl' ";
$iresult = mysqli_query($conn, $isql);
while($irow = mysqli_fetch_array($iresult))
{
$fbil1= $irow['l2'];
}

$zsql = "SELECT l2 FROM fbatii WHERE fname='$hl' ";
$zresult = mysqli_query($conn, $zsql);
while($zrow = mysqli_fetch_array($zresult))
{
$fbil2= $zrow['l2'];
}


$mstu = $bis1+$bis2+$bis3+$bis4+$bis5+$bis6+$bil1+$bil2;
$mfac = $fbis1+$fbis2+$fbis3+$fbis4+$fbis5+$fbis6+$fbil1+$fbil2;

$hu="100";
$atat=(($mstu)/($mfac));
$btat=(($atat)*($hu));
$tat=round($btat);
//echo"$mstu";
//echo"$mfac";
//echo"$tat";echo"%";


echo"<br>";


echo"<tr> ";
echo"<td  align='center' width='20%' style='color:#85144b' ><strong>". $rno."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>". $bis1 . "</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>". $bis2 ."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>". $bis3 ."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>". $bis4 ."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>". $bis5 ."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>". $bis6 ."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>". $bil1 ."</strong></td>";
echo"<td  align='center' width='7%' style='color:#85144b' ><strong>". $bil2 ."</strong></td>";

echo"</tr>";









$lsql = "UPDATE mid SET atd='$tat'   WHERE stid='$stid' OR rno='$rno' AND pyear='2' AND edu='b'  ";
if ($conn->query($lsql) === TRUE) {
} else {
    echo "Error: " . $lsql . "<br>" . $conn->error;
}


$ksql = "SELECT * FROM mid  WHERE stid='$stid' OR rno='$rno' AND pyear='2' AND edu='b'  ";
$kresult = mysqli_query($conn, $ksql);
while($krow = mysqli_fetch_array($kresult))
{  
$qcheck=$krow['atd'];
}


if($qcheck>=1){
   $qquery="UPDATE studet SET astatus=2 WHERE stid='$stid' AND pyear='2' AND edu='b'  ";
   if ($conn->query($qquery) === TRUE) {
   echo"";} 
   
} else {

  echo"error";
}



$pqsql = "UPDATE  stuclear SET b='1' WHERE sem='1'  ";
if ($conn->query($pqsql) === TRUE) {
} else {
    echo "Error: " . $pqsql . "<br>" . $conn->error;
}
//$amsql = "UPDATE studet SET mstatus=2 WHERE stid='$stid' OR rnumber='$rno' AND pyear='2' AND edu='b'  ";
//if ($conn->query($amsql) === TRUE) {
//   echo "New record created successfully";
//} else {
  //  echo "Error: " . $amsql . "<br>" . $conn->error;
//}


//$bmsql = "UPDATE studet SET astatus=2 WHERE stid='$stid' OR rnumber='$rno' AND pyear='2' AND edu='b'  ";
//if ($conn->query($bmsql) === TRUE) {
 //  echo "New record created successfully";
//} else {
 //   echo "Error: " . $bmsql . "<br>" . $conn->error;
//}


header("Location:$page");
		
 ?>		
		
		
    </table>
	</form>		

</body>
</html>
