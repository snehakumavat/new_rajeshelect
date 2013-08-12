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
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link rel="stylesheet" href="js/jquery-ui.css" />
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker({
      showOn: "button",
      buttonImage: "images/calendar.gif",
      buttonImageOnly: true
    });
  });
  </script>
<script type="text/javascript" language="javascript">
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.fname.value == "" ) 
	{ 
	    alert ( "Please enter First Name" ); 
	    isValid = false; 
    }
	    else if ( document.form1.lname.value == "") { 
            alert ( "please enter Last Name" ); 
            isValid = false;
		}
		 else if ( document.form1.address.value == "" ) { 
            alert ( "Please enter Address" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.city.value == "" ) { 
            alert ( "Please enter City" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.pin.value == "" ) { 
            alert ( "Please enter Pincode" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.email.value == "" ) { 
            alert ( "Please enter Email Address" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.ph.value == "" ) { 
            alert ( "Please enter Phone Number" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.mo.value == "" ) { 
            alert ( "Please enter Mobile Number" ); 
            isValid = false;
    } 
    return isValid;
}
</script>
</head>

  <body>
<div id="container">
<div id="sub-header">
    <?php
        include('header.php');
		?>
    
  
    <div class="quo"> <br />
      <div class="quotation">
        <center>
          View Job Worksheet
        </center>
      </div>
      <div>
        <form name="form1" action="" method="post">
         
            <table class="q_client_s" > 
            <tr>
              <td class="l_form" colspan="2">Name of the Client:</td>
              <td><input id="cname" type="text" name="c_fname" tabindex="1" value="<?php echo $res[1]; ?>" readonly /></td>   
             <tr>            
            <td colspan="4" style="font-size:18;" align="center"> <br> Motor Description </td>
            </tr>          
            <tr>
              <td class="l_form">Make:</td>
              <td><input id="make" class="q_in" type="text" name="make" tabindex="2" value="<?php echo $res[2]; ?>" readonly /></td>
              <td class="l_form">&nbsp;&nbsp;phase:</td>
              <td><input id="phase" class="q_in" type="text" name="phase" tabindex="3" value="<?php echo $res[3]; ?>"readonly /></td>             
            </tr>
            <tr>
              <td class="l_form">RPM:</td>
              <td><input id="rpm" class="q_in" type="text" name="rpm" tabindex="4" value="<?php echo $res[4]; ?>" readonly/></td>  
              <td class="l_form" >&nbsp;&nbsp;Ampere:</td>
              <td><input id="ampere" class="q_in" type="text" name="ampere" tabindex="5" value="<?php echo $res[5]; ?>" readonly/></td>              
            </tr>
            <tr>
              <td class="l_form">HP:</td>
              <td><input id="hp" class="q_in" type="text" name="hp" tabindex="6" value="<?php echo $res[6]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;KW:</td>
              <td><input id="kw" class="q_in" type="text" name="kw" tabindex="7" value="<?php echo $res[7]; ?>" readonly/></td>
            </tr>
            <tr>
              
               <td class="l_form">Frame:</td>
              <td><input id="frame" class="q_in" type="text" name="frame" tabindex="8" value="<?php echo $res[8]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;Sr.No:</td>
              <td><input id="sr_no" class="q_in" type="text" name="sr_no" tabindex="9" value="<?php echo $res[9]; ?>" readonly/></td>
            </tr>
            <tr  height="10px">
            <td class="l_form" >Additional Details:</td>
              <td colspan="4"><textarea id="detail" class="q_add" name="detail" tabindex="10" readonly> <?php echo $res[10]; ?> </textarea></td>
              </tr>
            </table>
            
            
            
            <table class="q_clients1" >  
             <tr >
            <td colspan="4" style="font-size:18;" align="center"> Winding Data </td>
            </tr>       
            <tr>
              <td class="l_form">slots:</td>
              <td><input id="slot1" class="q_in" type="text" name="slot1" tabindex="11" value="<?php echo $res[11]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;slots:</td>
              <td><input id="slot2" class="q_in" type="text" name="slot2" tabindex="12" value="<?php echo $res[18]; ?>" readonly/></td>             
            </tr>
            <tr>
              <td class="l_form">Coils:</td>
              <td><input id="coil1" class="q_in" type="text" name="coil1" tabindex="13" value="<?php echo $res[12]; ?>" readonly/></td>  
              <td class="l_form" >&nbsp;&nbsp;Coils:</td>
              <td><input id="coil2" class="q_in" type="text" name="coil2" tabindex="14" value="<?php echo $res[19]; ?>" readonly/></td>              
            </tr>
            <tr>
              <td class="l_form">Pich:</td>
              <td><input id="pich1" class="q_in" type="text" name="pich1" tabindex="15" value="<?php echo $res[13]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;Pich:</td>
              <td><input id="pich2" class="q_in" type="text" name="pich2" tabindex="16" value="<?php echo $res[20]; ?>" readonly/></td>
            </tr>
            <tr>              
               <td class="l_form">Turn:</td>
              <td><input id="turn1" class="q_in" type="text" name="turn1" tabindex="17" value="<?php echo $res[14]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;Turn:</td>
              <td><input id="turn2" class="q_in" type="text" name="turn2" tabindex="18" value="<?php echo $res[21]; ?>" readonly/></td>
            </tr>
              <tr>              
               <td class="l_form">SWG:</td>
              <td><input id="swg1" class="q_in" type="text" name="swg1" tabindex="19" value="<?php echo $res[15]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;SWG:</td>
              <td><input id="swg2" class="q_in" type="text" name="swg2" tabindex="20" value="<?php echo $res[22]; ?>" readonly/></td>
            </tr>
            <tr>              
               <td class="l_form">Weight of one Coil:</td>
              <td><input id="w_one1" class="q_in" type="text" name="w_one1" tabindex="21" value="<?php echo $res[16]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;Weight of one &nbsp;&nbsp;Coil:</td>
              <td><input id="w_one2" class="q_in" type="text" name="w_one2" tabindex="22" value="<?php echo $res[23]; ?>" readonly/></td>
            </tr>
            <tr>              
               <td class="l_form">Total:</td>
              <td><input id="total1" class="q_in" type="text" name="total1" tabindex="23" value="<?php echo $res[17]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;Total:</td>
              <td><input id="total2" class="q_in" type="text" name="total2" tabindex="24" value="<?php echo $res[24]; ?>" readonly/></td>
            </tr>
            <tr  height="10px">
<td class="l_form" >Analysis of Failure</td>
<td colspan="4"><textarea id="failure" class="q_add" name="failure" tabindex="25" readonly><?php echo $res[25]; ?></textarea></td>
              </tr>
            </table>
             
            
            <table class="q_clients_w" >  
            <tr >
            <td colspan="4" style="font-size:18;" align="center">Motor Testing Details</td>
            </tr>       
            <tr>
              <td class="l_form">N.L.Ampere:</td>
              <td><input id="nl1" class="q_in" type="text" name="nl1" tabindex="26" value="<?php echo $res[26]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;N.L.Ampere Y:</td>
              <td><input id="nl2" class="q_in" type="text" name="nl2" tabindex="27" value="<?php echo $res[27]; ?>" readonly/></td>             </tr>
           
            <tr>
          <td class="l_form">Resistance:</td>
          <td><input id="resist1" class="q_in" type="text" name="resist1" tabindex="28" value="<?php echo $res[28]; ?>" readonly/></td>  
          <td class="l_form" >&nbsp;&nbsp;Resistance Y:</td>
          <td><input id="resist2" class="q_in" type="text" name="resist2" tabindex="29" value="<?php echo $res[29]; ?>" readonly/></td>              
            </tr>
            <tr>
          <td class="l_form">Rotor Lock Current:</td>
          <td><input id="current1" class="q_in" type="text" name="current1" tabindex="30" value="<?php echo $res[30]; ?>" readonly/></td>
          <td class="l_form">&nbsp;&nbsp;Each Phase &nbsp;&nbsp;Current:</td>
          <td><input id="current2" class="q_in" type="text" name="current2" tabindex="31" value="<?php echo $res[31]; ?>" readonly/></td>
            </tr>
            </table>
                                      
            <table class="w_clients2" >
             <tr >
            <td colspan="4" style="font-size:18;" align="center">Additional Details</td>
            </tr>         
            <tr>
              <td class="l_form" align="">Stator Core Length:</td>
              <td><input id="core1" class="q_in" type="text" name="core1" tabindex="44" value="<?php echo $res[44]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;Rotor Core &nbsp;&nbsp;Length:</td>
              <td><input id="core2" class="q_in" type="text" name="core2" tabindex="45" value="<?php echo $res[45]; ?>" readonly/></td>             </tr>
           
            <tr>
          <td class="l_form">Rotor O.D.:</td>
          <td><input id="rotor" class="q_in" type="text" name="rotor" tabindex="46" value="<?php echo $res[46]; ?>" readonly/></td>  
          <td class="l_form" >&nbsp;&nbsp; Slot Dia:</td>
          <td><input id="dia" class="q_in" type="text" name="dia" tabindex="47" value="<?php echo $res[47]; ?>" readonly/></td>              
            </tr>
            <tr>
          <td class="l_form">Stator Dia :</td>
          <td><input id="stator" class="q_in" type="text" name="stator" tabindex="48" value="<?php echo $res[48]; ?>" readonly /></td>
             </tr>
            </table>
            <table class="q_clients3" >
            <tr >
            <td colspan="4" style="font-size:18;" align="center">Additional Work/Spare Replacement</td>
            </tr>         
            <tr>
              <td class="l_form">Air Fan:</td>
              <td><input id="air" class="q_in" type="text" name="air" tabindex="32" value="<?php echo $res[32]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;Fan Cover:</td>
              <td><input id="fan" class="q_in" type="text" name="fan" tabindex="33" value="<?php echo $res[33]; ?>" readonly/></td>             
            </tr>
            <tr>
              <td class="l_form">D.E. Bearing:</td>
              <td><input id="de1" class="q_in" type="text" name="de1" tabindex="34" value="<?php echo $res[34]; ?>" readonly/></td>  
              <td class="l_form" >&nbsp;&nbsp;shaft Repair:</td>
              <td><input id="shaft" class="q_in" type="text" name="shaft" tabindex="35" value="<?php echo $res[35]; ?>" readonly/></td>              
            </tr>
            <tr>
              <td class="l_form">Terminal Plate:</td>
              <td><input id="terminal" class="q_in" type="text" name="terminal" tabindex="36" value="<?php echo $res[36]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;Terminal Box:</td>
              <td><input id="box" class="q_in" type="text" name="box" tabindex="37" value="<?php echo $res[37]; ?>" readonly/></td>
            </tr>
            <tr>              
               <td class="l_form">N.D.E. Bearing:</td>
              <td><input id="bear" class="q_in" type="text" name="bear" tabindex="38" value="<?php echo $res[38]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;cover Repair:</td>
              <td><input id="cover" class="q_in" type="text" name="cover" tabindex="39" value="<?php echo $res[39]; ?>" readonly/></td>
            </tr>
              <tr>              
               <td class="l_form">Oil Seal:</td>
              <td><input id="oil" class="q_in" type="text" name="oil" tabindex="40" value="<?php echo $res[40]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;Water Seal:</td>
              <td><input id="water" class="q_in" type="text" name="water" tabindex="41" value="<?php echo $res[41]; ?>" readonly/></td>
            </tr>
            <tr>              
               <td class="l_form">Additional:</td>
              <td><input id="add1" class="q_in" type="text" name="add1" tabindex="42" value="<?php echo $res[42]; ?>" readonly/></td>
              <td class="l_form">&nbsp;&nbsp;Stator Core &nbsp;&nbsp;Repair:</td>
              <td><input id="core" class="q_in" type="text" name="core" tabindex="43" value="<?php echo $res[43];?>" readonly/></td>
            </tr>            
            </table>
          <div class="addclients_b">
           
            <input name="can" class="formbutton" value="Back" type="submit" tabindex="50" />
          </div>
        </form>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div id="footer">
  <div class="clear"></div>
</div>
</div>
</body>
</html>
