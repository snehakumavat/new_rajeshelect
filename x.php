<?php
error_reporting(0);
include("session.php");
include("include/database.php");
include('converter.php');
//$p=$_REQUEST['id'];

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

<tr>
<td colspan="3"> M/s.<br></td>
</tr>
<tr><td colspan="3"> Add.</td></tr>
<tr><td>Your D.C.No. :</td>
<td width="144">Your D.C.Date. :</td>
<td width="288">No. :</td>
</tr>
<tr><td>Our D.C.No. :</td>
<td>Our D.C.Date. :</td>
<td>Vendor code No. :</td>
</tr>
<tr><td >Contact Person:</td>
<td>Department:</td>
<td>hk</td>
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