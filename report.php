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

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rajesh Electric Works</title>
<style type="text/css">
.light
{	
	border:2px solid #000;
	width:750px;
	height:auto;

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
	vertical-align:middle;
	width:720px;
	margin-top:15px;
}
td 
{
		border:1px solid #000;
}
th
{
	
	border:1px solid #000;
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
	margin-top:-130px;
}
.tab1
{
	width:250px;
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
 <td> Invoice No : <?php echo $row[0]; ?></td>
 </tr>
 
 <tr>
 <td style="font-size:11px;"><b>Works:</b>Plot No. C/42, M.I.D.C. Industrial Estate, Malegaon, Tal. Sinnar, Dist. Nashik-422113.
<b>Ph. :</b>02551-230829 <b>E-mail :</b> rew.nsk@rediffmail.com</td>
 <td>Date:- <?php echo date('Y-m-d'); ?> </td>
 </tr>
 
 <tr>
 <td colspan="3">
 <table class="tab1">
 <tr>
 <td align="center">TAX INVOICE</td>
 </tr>
 <tr>
  <td height="100px">m/s <?php echo $row[4].'<br>'.$row[3].'<br>'.$row[5];?></td>
</tr>
</table>

 <table class="tab2" >
 <tr>
 <td>PO NO :- <?php echo $row[7]; ?></td>
  <td>Date :- <?php echo $row[12]; ?></td>
</tr>
<tr>
 <td>Your RGP No :- <?php echo $row[8]; ?></td>
  <td>Date :- <?php echo $row[12]; ?></td>
</tr>
<tr>
 <td>Our DC No :- <?php echo $row[9]; ?></td>
  <td>Date :- <?php echo $row[13]; ?></td>
</tr>
<tr>
 <td colspan="2">Vendor Code No :- <?php echo $row[10]; ?></td>

</tr>
<tr>
 <td colspan="2">Consignee Vat / Tin No :- <?php echo $row[11]; ?></td>
</tr>
</table>

</td>
</tr>

 <tr>
 <td colspan="3">
<div class="description">
<table class="report">    		<!-- New des table added here -->
<tr>
<th>DESCRIPTION</th>
<th>QTY</th>
<th>RATE/EACH</th>
<th>AMOUNT</th>
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
	
	echo "</tr>";
}
?>
<tr>
<td>&nbsp;</td>
<td colspan="2">SUB TOTAL:</td>
<td><?php echo $row_t[0].' /-'; ?></td>
</tr>
<tr>
<td>
<font size="-1">
<b><u>SERVICE TAX @ 12% ON LABOUR CHARGES ONLY<br> (A)</u>Value of the <u>LABOUR</u> is <u>33%</u> of the<u>SUB TOTAL</u> i.e. <u>Rs. <?php echo round ($plus * 0.33,00).'.00';?></u> <br>
<u>(B) VAT </u>@<u> 5%</u>on<u><b>(R/M)</b>Which is <u><b>67%</b></u>of the <u><b>SUB TOTAL</b></u> i.e. <u>Rs. <?php echo $plus * .67; ?></u></font>
</td>
<td colspan="2" style="text-align:right;">Services Tax 12% on <?php echo $per33.'/-';?></td>
<td><?php echo $serv_tax; ?></td>
</tr>
<tr>
<td></td>
<td colspan="2" style="text-align:right;">E.Cess @2%</td>
<td><?php echo $e_cess;?></td>
</tr>
<tr>
<td></td>
<td colspan="2" style="text-align:right;">She.Cess @1%</td>
<td><?php echo $she_cess;?></td>
</tr>
<tr>
<td></td>
<td colspan="2" style="text-align:right;">VAT 05% on <?php $plus.'./-'; ?> </td>
<td><?php echo $vat;?></td>
</tr>
<tr>
<td><font size="-2">VAT TIN NO.27900789615 V w.e.f. 27/08/2010 & CST TIN NO. 27900789615 C w.e.f. 27/08/2010</font></td>
<td colspan="2" style="text-align:right;">Transportation Charges</td>
<td><?php echo $row[12]; ?></td>
</tr>
<tr>
<td><font size="-2">Service Tax NO. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PAN NO. :-AMEPM1485H </font></td>
<td colspan="2" style="text-align:right; font-weight:800; "> GRAND TOTAL:-</td>
<td><?php echo round($g_total,2) ;?></td>

</td>
</tr>
</table>
</div>
</td>
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