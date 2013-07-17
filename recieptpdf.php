<?php
//error_reporting(0);
include("include/database.php");

$p=$_REQUEST['id'];
$qry="select * from reciept where i_id='$p'";
$res=mysql_query($qry);
$row=mysql_fetch_array($res);

$qry_detail="select * from sub_reciept where r_id='$row[0]'";
$res_detail=mysql_query($qry_detail);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RAJESH ELECTRIC WORKS</title>
<style type="text/css">
.light
{	
	border:2px solid #000;
	width:750px;
	height:auto;
border-collapse:collapse;
}
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
.date
{	
	margin-left:80%;
}

.report
{
	vertical-align:middle;
	width:730px;
	/*margin-top:15px;*/

	border:medium #000;
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
.tow
{
	margin-top:-80px;
	padding-top:-37px;
}
.tab2
{
	width:670px;
	margin-left:200px;
	margin-top:-125px;
	
	border-collapse:collapse;
}
 .tab2 td
 {
	 height:40px;
	 }
.tab1
{
	width:264px;
	/*height:100%*/
	border-collapse:collapse;
}
td 
{
		border:1px solid #000;
}
th
{
	
	border:1px solid #000;
}
.noborder td
{
	border:0;	
}
</style>
</head>

<body>
<br>
<br>
<table class="light">
<tr class="dat">
<td  rowspan="2" width="230px;"><b>RAJESH ELECTRIC WORKS</b></td>
<td style="font-size:11px; width:350px;">Specialist in Rewinding of: <b>*</b>Ac Servo Motors<b>*</b> DC Servo Motors<b>*</b> High Frequency Spindle Motors<b>*</b>Transformers<b>*</b> 
 Welding Generators<b>*</b> Welding Machine<b>*</b> Power Generators & Alternators<b>*</b> All types of Industrial coils etc.
 </td>
 <td> Invoice No : <?php echo $row[1]; ?></td>
 </tr>
 
 <tr>
 <td style="font-size:11px;"><b>Works:</b>Plot No. C/42, M.I.D.C. Industrial Estate, Malegaon, Tal. Sinnar, Dist. Nashik-422113.
<b>Ph. :</b>02551-230829 <b>E-mail :</b> rew.nsk@rediffmail.com</td>
 <td>Date:- <?php echo date('d-m-Y'); ?> </td>
 </tr>
 
 <tr>
 <td colspan="3">
 <table class="tab1">
 <tr>
 <td height="35px;" align="center" nowrap>DELIVERY CHALLAN</td>
 </tr>
 <tr>
  <td height="85px;"><b>M/s. </b>  <?php echo $row[4].'<br>'.$row[5];?></td>
</tr>
</table>

 <table class="tab2" >
 <tr>
 <td><b>PO NO :-</b> <?php echo $row[6]; ?></td>
  <td><b>Date :-</b> <?php echo date('d-m-Y',strtotime($row[9])); ?></td>
</tr>
<tr>
 <td><b>Your RGP No :- </b><?php echo $row[7]; ?></td>
  <td><b>Date :-</b> <?php echo date('d-m-Y',strtotime($row[10])); ?></td>
</tr>
<tr>
 <td colspan="2"><b>Vendor Code No :-</b> <?php echo $row[8]; ?></td>

</tr>
</table>

</td>
</tr>

 <tr>
 <td colspan="3">
 <table style="height:400px; width:740px;">
 <tr>
 <td >
<table class="report">    		<!-- New des table added here -->
<tr>
<th width="40px;">ITEM</th>
<th width="">DESCRIPTION</th>
<th width="90px;">QTY</th>
</tr>
<?php
$count=0;
while($row_d=mysql_fetch_array($res_detail))
{
	$count+=1;
	echo "<tr>";
	echo "<td>";
	echo $count.')';
	echo "</td>";	
	echo "<td>";
	echo $row_d[2];
	echo "</td>";
	echo "<td>";
	echo $row_d[3];
	echo "</td>";
	echo "</tr>";

}
?>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr class="noborder">
<td colspan='3'><b>Received the above goods in good Order and Condiotion</b>
</td>
</tr>
<tr class="noborder">
<td ><br><br><br><br><b>Receivers Sign & Stamp</b></td>
<td></td>
<td>For <b> Rajesh Electric Works</b><br><br><br>Authorise Signatory</td>
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