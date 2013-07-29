<?php
error_reporting(0);
include("session.php");

include("include/database.php");
	if(isset($_REQUEST['c_id3']))
	{
	$id=$_REQUEST['c_id3'];
	$c_qry="select * from job_worksheet where job_id=".$id;	
	$c_res=mysql_query($c_qry);
	$res=mysql_fetch_array($c_res);	
	
	}
	if(isset($_REQUEST['can']))
	{
		header("location:view_worksheet.php");
	}
?>
<html>
<head>
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
	font-size:18px;
	font-family:"MS Serif", "New York", serif;
	text-align:center;
	background-color:#666;
	color:#FFF;
	margin:1px 1px 1px 1px;
	letter-spacing:4px;
}

.light
{		
	width:700px;
	border-collapse:collapse;	
	margin:4px auto;
}
.main{
	width:720px;
	height:900px;
	border-collapse:collapse;
	margin:1px auto;	
}
td
{
	height:30px;
}
	
</style>
</head>

  <body>
  <font face="Calibri" size="12px;">
        <table class="main" border="1">
         <tr><td><div class="heading"> M/s. RAJESH ELECTRIC WORKS</div></td></tr>
        <tr><td>
        	<table align="center" class='light' >
           <tr><td colspan="3"><b>Name of the Client:</b><?php echo $res[1]; ?></td></tr>
        	</table>
            <tr><td>
            <table align="center" class='light' >  
             <tr><td colspan="3"><div class="sub_heading" ><b>Motor Description</b></div></td></tr>     
            <tr>
              <td><b>Make:</b><?php echo $res[2]; ?></td>
              <td ><b>phase:</b><?php echo $res[3]; ?></td>
              <td ><b>RPM:</b><?php echo $res[4]; ?></td>
            </tr>
            <tr>
              <td >Ampere:<?php echo $res[5]; ?></td>
              <td >HP:<?php echo $res[6]; ?></td>
              <td >KW:<?php echo $res[7]; ?></td>   
            </tr>
            <tr>
  				<td >Frame:<?php echo $res[8]; ?></td>
              	<td colspan="2" >Sr.No:<?php echo $res[9]; ?></td>
            </tr>
            <tr><td colspan="3">
            Additional Details:<?php echo $res[10]; ?></td>
              </tr>
            </table> </td></tr>
        
             <tr><td>
            <table align="center" class='light' >  
             <tr><td colspan="2"><div class="sub_heading" ><b>Winding Data</b></div></td></tr> 
            <tr>
              <td>Slots:<?php echo $res[11]; ?></td>
              <td>Slots:<?php echo $res[18]; ?></td>
            </tr>
            <tr>
              <td >Coils:<?php echo $res[12]; ?></td>
              <td  >Coils:<?php echo $res[19]; ?></td>              
            </tr>
            <tr>
              <td >Pich:<?php echo $res[13]; ?></td>
              <td >Pich:"<?php echo $res[20]; ?></td>
            </tr>
            <tr>              
              <td >Turn:<?php echo $res[14]; ?></td>
              <td> Turn:<?php echo $res[21]; ?></td>
            </tr>
             <tr>              
              <td>SWG:<?php echo $res[15]; ?></td>
              <td >SWG:<?php echo $res[22]; ?></td>
            </tr>
            <tr>              
              <td >Weight of one Coil:<?php echo $res[16]; ?></td>
              <td >Weight of one Coil:<?php echo $res[23]; ?></td>
            </tr>
            <tr>              
              <td >Total:<?php echo $res[17]; ?></td>
              <td >Total:<?php echo $res[24]; ?></td>
            </tr>
            <tr  height="10px">
				<td colspan="2">Analysis of Failure:<?php echo $res[25]; ?></td>
              </tr>
            </table></td></tr>
            
             <tr><td>
            <table align="center" class='light'  >
            <tr><td colspan="3"><div class="sub_heading" ><b>Motor Testing Details</b></div></td></tr>     
            <tr>
             <td >N.L.Ampere:<?php echo $res[26]; ?></td>
 			 <td >Resistance:<?php echo $res[28]; ?></td>
             <td >Rotor Lock Current:<?php echo $res[30]; ?></td>
            </tr>
            <tr>
             <td >N.L.Ampere Y:<?php echo $res[27]; ?></td>
          	 <td >Resistance Y:"<?php echo $res[29]; ?></td>
             <td >Each Phase Current:<?php echo $res[31]; ?></td>      
            </tr>
            </table></td></tr>
            
               <tr><td>     
             <table align="center" class='light'  >  
             <tr><td colspan="3"><div class="sub_heading" ><b>Additional Work/Spare Replacement</b></div></td></tr>  
            <tr>
              <td >Air Fan:<?php echo $res[32]; ?></td>
              <td >Terminal Plate:<?php echo $res[36]; ?></td>
              <td >Oil Seal:<?php echo $res[40]; ?></td>
            </tr>
            <tr>
              <td >Fan Cover:<?php echo $res[33]; ?></td>
              <td >Terminal Box:<?php echo $res[37]; ?></td>
              <td >Water Seal:<?php echo $res[41]; ?></td>
            </tr>
            <tr>
                <td >D.E. Bearing:<?php echo $res[34]; ?></td>
                <td >N.D.E. Bearing:<?php echo $res[38]; ?></td>
             	<td >Additional:<?php echo $res[42]; ?></td>
            </tr>
            <tr>              
                <td  >Shaft Repair:<?php echo $res[35]; ?></td>
              	<td >Cover Repair:<?php echo $res[39]; ?></td>
            	<td >Stator Core Repair:<?php echo $res[43];?></td>
            </tr>      
            </table></td></tr>
           
            <tr><td>
            <table align="center" class='light'  >   
            <tr><td colspan="3"><div class="sub_heading" ><b>Additional Details</b></div></td></tr>  
            <tr>
              <td  align="">Stator Core Length:<?php echo $res[44]; ?></td>
              <td >Rotor O.D.:<?php echo $res[46]; ?></td>
              <td >Stator Dia :<?php echo $res[48]; ?></td>
            </tr>
            <tr>
          	 	<td >Rotor Core Length:<?php echo $res[45]; ?></td>
          		<td colspan="2" >Slot Dia:<?php echo $res[47]; ?></td>    
            </tr>
           </table>
           </td></tr> 
           </td>
           </tr>
           </table></font>
          
          
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