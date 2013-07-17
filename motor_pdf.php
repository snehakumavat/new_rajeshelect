<?php
//error_reporting(0);
include("include/database.php");
if(isset($_REQUEST['cr_id']))
{
	$id=$_REQUEST['cr_id'];
 $query="select * from certificate where crt_id='$id'";
$exe=mysql_query($query);
$motor=mysql_fetch_array($exe);
}
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rajesh Electric Works</title>
<style type="text/css">
.heading
{
	font-size:30px;
	font-family:"MS Serif", "New York", serif;
	text-align:center;
	
}
.sub_heading
{
	font-size:14px;
	font-family:"MS Serif", "New York", serif;
	text-align:center;
}
.total
{
	border-collapse:collapse;
}

.ac
{
	
	border-collapse:collapse;
}
.ac td
{
	
	width:350px;
	}
.light
{		
	width:700px;
	border-collapse:collapse;	
}
td
{
	
	height:30px;
	}
</style>
</head>
<body>

<div class="heading" > M/s. RAJESH ELECTRONIC WORKS</div>
<div class="sub_heading">Flat No. C/42,M.I.D.C.Industrial Estate,Malegaon,Tal-Sinner,Dist-Nashik-422103.<br>Ph:02551-230829,E-Mail :new.nsk@rediffmail.com
</div>

<table  align="center" class='light'  border="1" >
<tr>
<td colspan="3"> <b>M/s.:</b> <?php echo $motor[1];?></td>
</tr>
<tr><td colspan="3"> Address : <?php echo $motor[2];?></td>
</tr>
<tr>
<td><b>Your D.C.No. :</b> <?php echo $motor[3];?></td>
<td><b>Your D.C.Date. :</b> <?php echo $motor[4];?></td>
<td><b>No. : </b><?php echo $motor[5];?></td>
</tr>
<tr>
<td><b>Our D.C.No. :</b> <?php echo $motor[6];?></td>
<td><b>Our D.C.Date. :</b> <?php echo $motor[7];?></td>
<td><b>Vendor code No. :</b> <?php echo $motor[8];?></td>
</tr>
<tr>
<td><b>Contact Person:</b> <?php echo $motor[9];?></td>
<td><b>Department:</b> <?php echo $motor[10];?></td>
<td></td>
</tr>
<tr>
	<td colspan="3" align="center"  >
		<table class="total">
		<tr>
        <td width="705px" align="center"><b>AC SQ.CAGE INDUCTION MOTOR TESTING CERTIFICATE</b></td>
        </tr>
		</table>
	</td>
</tr>

<tr>
  <td colspan="3">
<table colspan="3" border="1" class="ac" >
<tr>
<td><b>Make:- </b> <?php echo $motor[11];?></td>
<td><b>Sr.No:- </b> <?php echo $motor[20];?></td>
</tr>

<tr>
<td><b>HP:- </b> <?php echo $motor[12];?></td>
<td><b>Phase:- </b> <?php echo $motor[21];?></td>
</tr>

<tr>
<td><b>Kw:- </b> <?php echo $motor[13];?></td>
<td><b>RPM:- </b> <?php echo $motor[22];?></td>
</tr>

<tr>
<td><b>Volts:- </b> <?php echo $motor[14];?></td>
<td><b>Class of Insulation:- </b> <?php echo $motor[23];?></td>
</tr>

<tr>
<td><b>No.Load Ampere:- </b> <?php echo $motor[15];?></td>
<td><b>Resistance Value:- </b> <?php echo $motor[24];?></td>
</tr>

<tr>
<td><b>Capacitor Value:- </b> <?php echo $motor[16];?></td>
<td><b>Megar Value:- </b> <?php echo $motor[25];?></td>
</tr>

<tr>
<td><b>Driving End Cover(F):- </b> <?php echo $motor[17];?></td>
<td><b>Bearing No:- </b> <?php echo $motor[26];?></td>
</tr>

<tr>
<td><b>Non Driving End Cover(B):- </b> <?php echo $motor[18];?></td>
<td><b>Bearing No:- </b> <?php echo $motor[27];?></td>
</tr>

<tr>
<td><b>Cooling Fan:- </b> <?php echo $motor[19];?></td>
<td><b>Terminal Plate:- </b> <?php echo $motor[28];?></td>
</tr>

</table>

</td></tr>
<tr>
	<td colspan="3" align="center" >
		<table class="total">
		<tr><td width="705px" align="center"><b>DC MOTOR TESTING CERTIFICATE</b></td></tr>
		</table>
	</td>
</tr>

<tr>
  <td colspan="3">
<table border="1"colspan="3" class="ac">

<tr>
<td><b>Make:- </b> <?php echo $motor[29];?></td>
<td><b>Sr.No:- </b><?php echo $motor[38];?></td>
</tr>

<tr>
<td><b>HP:- </b> <?php echo $motor[30];?></td>
<td><b>Commutator:- </b> <?php echo $motor[39];?></td>
</tr>

<tr>
<td><b>Kw:- </b> <?php echo $motor[31];?></td>
<td><b>Frame:- </b> <?php echo $motor[40];?></td>
</tr>

<tr>
<td><b>Volts:- </b> <?php echo $motor[32];?></td>
<td><b>Class of Insulation:- </b> <?php echo $motor[41];?></td>
</tr>

<tr>
<td><b>No.Load Ampere:- </b> <?php echo $motor[33];?></td>
<td><b>Motor Field Resistance :- </b> <?php echo $motor[42];?></td>
</tr>

<tr>
<td><b>Brush:- </b> <?php echo $motor[34];?></td>
<td><b>Armature Field Resistence:- </b> <?php echo $motor[43];?></td>
</tr>

<tr>
<td><b>Driving End Cover(F):- </b> <?php echo $motor[35];?></td>
<td><b>Bearing No:- </b> <?php echo $motor[44];?></td>
</tr>

<tr>
<td><b>Non Driving End Cover(B):- </b> <?php echo $motor[36];?></td>
<td><b>Bearing No:- </b> <?php echo $motor[45];?></td>
</tr>

<tr>
<td><b>Cooling Fan:- </b> <?php echo $motor[37];?></td>
<td><b>Terminal Plate:- </b> <?php echo $motor[46];?></td>
</tr>
</table>
<tr>
<td colspan="3">
<table class="total" width="710px">
<tr><td><b>Analysis of Failure : </b><?php echo $motor[47];?></td></tr>
<tr><td><b>Work Done : </b> <?php echo $motor[48];?></td></tr>
<tr><td><b>Special  Remarks : </b> <?php echo $motor[49];?></td></tr>
</table>
</td>
</tr>
<tr>
<td align="right" colspan="3"><br><br><b>FOR RAJESH ELECTRONIC WORKS</b></td>
</tr>
</table>

</body>
</html>

<?php
$htmlcontent=ob_get_clean();

include("dompdf/dompdf_config.inc.php");


  $htmlcontent = stripslashes($htmlcontent);
  $dompdf = new DOMPDF();
  $dompdf->load_html($htmlcontent);
  $dompdf->set_paper("folio", "portrait");
  $dompdf->render();
  $dompdf->stream($filename, array("Attachment" => false));	
  exit(0);
?>