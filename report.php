<?php
error_reporting(0);
include("include/database.php");

$p=$_REQUEST['id'];
$qry="select * from invoice where i_id=".$p;
$res=mysql_query($qry);
$row=mysql_fetch_array($res);

$qry_detail="select * from sub_invoice where i_id=".$p;
$res_detail=mysql_query($qry_detail);

$qry_t="select SUM(total) from sub_invoice where i_id=".$p;
$res_t=mysql_query($qry_t);
$row_t=mysql_fetch_array($res_t);
?>
<?php

$term="select * from terms";
$term_res=mysql_query($term);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anmol Water Tank</title>
<style type="text/css">
.heading
{
	font-size:36px;
	font-family:"MS Serif", "New York", serif;
	text-decoration:underline;
}
.sub_heading
{
	font-size:20px;
	font-family:"MS Serif", "New York", serif;
}
.quotation
{
	font-size:24px;
	font-weight:bold;
	text-decoration:underline;
}
.date
{	
	margin-left:80%;
}
.description ul
{
	border:1px solid #000; 
}
.description ul li
{	
	list-style:none;
	display:inline;
	padding:20px;
}
.report
{
	width:720px;
	margin-top:15px;
}
.report td
{
		border:1px solid #000;
		text-align:center;
		height:25px;
}
.total
{
	width:720px;
}
.total td
{
	
}
.tow
{
	margin-top:-80px;
	padding-top:-37px;
}
.da
{

	margin-left:590px;
}
</style>
</head>

<body>
<br>
<br>

<div class="heading"><center>Rajesh Electic Works</center></div>
<div class="sub_heading"><center>Shop No 4, Vaibhavlakshmi Appt, Behind Prakash Petrol Pump</center></div>
<div class="sub_heading"><center>Govind Nagar, Nashik-422009</center></div>
<div class="sub_heading"><center>Ph:&nbsp;9970301010 / 9175299779</center></div>
<br><br>
<div class="quotation"><center>INVOICE</center></div>
<div class="to">
<div class="da">
Date&nbsp;:&nbsp;<label><?php echo $row[1]; ?></label>
<br>
Invoice No : <label><?php echo $row[0]; ?></label>
</div>
<div class="tow">
To
<br>
<textarea>Name&nbsp;:&nbsp;<?php echo $row[3]; ?></textarea>
<br>
Kind Attn : <label><?php echo $row[5]; ?></label>
<br>
Mob No : <label><?php echo $row[6]; ?></label>
</div>
</div>
<div class="description">
<table class="report">
<tr>
<td>Description</td>
<td>Capacity</td>
<td>Quantity</td>
<td>Rate</td>
<td>Service In Year</td>
<td>Amount</td>
</tr>
<?php
while($row_d=mysql_fetch_array($res_detail))
{
	
	echo "<tr>";
	echo "<td>";
	echo $row_d[2];
	echo "</td>";
	echo "<td>";
	echo $row_d[3];
	echo "</td>";
	echo "<td>";
	echo $row_d[4];
	echo "</td>";
	echo "<td>";
	echo $row_d[5];
	echo "</td>";
	echo "<td>";
	echo $row_d[6];
	echo "</td>";
	echo "<td>";
	echo $row_d[7];
	echo "</td>";
	echo "</tr>";
}
?>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>Total Amount:</td>
<td><?php echo $row_t[0].' /-'; ?></td>
</tr>
</table>
</div>

<br><br><br>

<div>
<u>Terms & Conditions</u>
<?php
while($row=mysql_fetch_array($term_res))
{
	echo "<br>";
	
	echo $row[0];
	echo ".";
	echo $row[1];
	
}
?>

</div>
<div>
<br>
<br>
<br><br><br><br>
Authorised Person:____________________
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
For Rajesh Electic Works
<br><br>
Name Signature and Stamp
<br><br>
By signing we accept the Rates & Terms & Conditions
</div>

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