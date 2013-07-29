<?php
error_reporting(0);
include("session.php");
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

</style>
</head>
<body>

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
   $canvas = $dompdf->get_canvas();
  $font = Font_Metrics::get_font("", "bold");
  $canvas->page_text(50,850, "RAJESH ELECTRIC WORKS", $font, 6, array(0,0,0));
  $canvas->page_text(500,850, "PAGE: {PAGE_NUM} OF {PAGE_COUNT}", $font, 8, array(0,0,0));

  $dompdf->stream($filename, array("Attachment" => false));	
  exit(0);
?>