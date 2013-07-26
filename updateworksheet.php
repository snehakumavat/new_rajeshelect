<?php
include("include/database.php");
error_reporting(0);
include("session.php");

	if(isset($_REQUEST['c_id2']))
	{
	$id=$_REQUEST['c_id2'];
	$c_qry="select * from job_worksheet where job_id=".$id;	
	$c_res=mysql_query($c_qry);
	$res=mysql_fetch_array($c_res);		
	}
	if(isset($_REQUEST['q_up']))
	{
	$c_t1=$_POST['c_fname'];	
	$c_t3=$_POST['make'];
	$c_t4=$_POST['phase'];
	$c_t6=$_POST['rpm'];
	$c_t7=$_POST['ampere'];
	$c_t8=$_POST['hp'];
	$c_t9=$_POST['kw'];
	$c_t10=$_POST['frame'];
	$c_t11=$_POST['sr_no'];
	$c_t12=$_POST['detail'];
	$c_t13=$_POST['slot1'];
	$c_t14=$_POST['slot2'];
	$c_t15=$_POST['coil1'];
	$c_t16=$_POST['coil2'];
	$c_t17=$_POST['pich1'];
	$c_t18=$_POST['pich2'];
	$c_t19=$_POST['turn1'];
	$c_t20=$_POST['turn2'];
	$c_t21=$_POST['swg1'];
	$c_t22=$_POST['swg2'];
	$c_t23=$_POST['w_one1'];
	$c_t24=$_POST['w_one2'];
	$c_t25=$_POST['total1'];
	$c_t26=$_POST['total2'];
	$c_t27=$_POST['failure'];
	$c_t28=$_POST['nl1'];
	$c_t29=$_POST['nl2'];
	$c_t30=$_POST['resist1'];
	$c_t31=$_POST['resist2'];
	$c_t32=$_POST['current1'];
	$c_t33=$_POST['current2'];
	$c_t34=$_POST['air'];
	$c_t35=$_POST['fan'];
	$c_t36=$_POST['de1'];
	$c_t37=$_POST['shaft'];
	$c_t38=$_POST['terminal'];
	$c_t39=$_POST['box'];
	$c_t40=$_POST['bear'];
	$c_t41=$_POST['cover'];
	$c_t42=$_POST['oil'];
	$c_t43=$_POST['water'];
	$c_t44=$_POST['add1'];
	$c_t45=$_POST['core'];
	$c_t46=$_POST['core1'];
	$c_t47=$_POST['core2'];
	$c_t48=$_POST['rotor'];
	$c_t49=$_POST['dia'];
	$c_t50=$_POST['stator'];
		
	$c_qry="update `job_worksheet` set `client_name`='".$c_t1."',`make`='".$c_t3."', `phase`='".$c_t4."', `rpm`='".$c_t6."', `ampere`='".$c_t7."', `hp`='".$c_t8."', `kw`='".$c_t9."', `frame`='".$c_t10."', `sr_no`='".$c_t11."', `addtional_details`='".$c_t12."', `slots`='".$c_t13."', `colis`='".$c_t15."', `pich`='".$c_t17."', `turn`='".$c_t19."', `swg`='".$c_t21."', `weight_of_coil`='".$c_t23."', `total`='".$c_t25."', `slots1`='".$c_t14."', `coils1`='".$c_t16."', `pich1`='".$c_t18."', `turn1`='".$c_t20."', `swg1`='".$c_t22."', `weight_coil1`='".$c_t24."', `total1`='".$c_t26."', `analysis_of_failure`='".$c_t27."', `n_l_ampere_d`='".$c_t28."', `n_l_ampere_y`='".$c_t29."', `resistance_d`='".$c_t30."', `resistance_y`='".$c_t31."', `rotor_lock_current`='".$c_t32."', `each_phase_current`='".$c_t33."', `air_fan`='".$c_t34."', `fan_cover`='".$c_t35."', `d_e_bearing`='".$c_t36."', `shaft_repair`='".$c_t37."', `terminal_plate`='".$c_t38."', `terminal_box`='".$c_t39."', `nde_bearing`='".$c_t40."' , `cover_repair`='".$c_t41."', `oil_seal`='".$c_t42."', `water_seal`='".$c_t43."', `additonal`='".$c_t44."', `stator_core_repair`='".$c_t45."', `stator_core_length`='".$c_t46."', `rotor_core_length`='".$c_t47."', `rotor_od`='".$c_t48."',`slot_dia`='".$c_t49."',`stator_dia`='".$c_t50."' where job_id=".$id;
	
	$c_res=mysql_query($c_qry);	
	if($c_res)
	{
		header("location:view_worksheet.php");
	}
	else
	{
		echo "error";
	}	
	}
	if(isset($_REQUEST['can']))
	{
		header("location:view_worksheet.php");
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>M/s. Rajesh Electric Works</title>
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
        <INPUT class="formbutton" Type="button" VALUE="Back" onClick="history.go(-1);return true;">
          <table class="toptext">
            <tr>
              <td class="l_form" colspan="2">Name of the Client:</td>
              <td><input id="cname" type="text" name="c_fname" tabindex="1" value="<?php echo $res[1]; ?>" /></td>
            </tr> 
            <tr>
            <td colspan="3"><label class="desc" > Motor Description</label></td>
            </tr> 
            </table>
            <table class="q_client_s" >       
            <tr>
              <td class="l_form">Make:</td>
              <td><input id="make" class="q_in" type="text" name="make" tabindex="2" value="<?php echo $res[2]; ?>"  /></td>
              <td class="l_form">&nbsp;&nbsp;phase:</td>
              <td><input id="phase" class="q_in" type="text" name="phase" tabindex="3" value="<?php echo $res[3]; ?>" /></td>             
            </tr>
            <tr>
              <td class="l_form">RPM:</td>
              <td><input id="rpm" class="q_in" type="text" name="rpm" tabindex="4" value="<?php echo $res[4]; ?>" /></td>  
              <td class="l_form" >&nbsp;&nbsp;Ampere:</td>
              <td><input id="ampere" class="q_in" type="text" name="ampere" tabindex="5" value="<?php echo $res[5]; ?>" /></td>              
            </tr>
            <tr>
              <td class="l_form">HP:</td>
              <td><input id="hp" class="q_in" type="text" name="hp" tabindex="6" value="<?php echo $res[6]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;KW:</td>
              <td><input id="kw" class="q_in" type="text" name="kw" tabindex="7" value="<?php echo $res[7]; ?>" /></td>
            </tr>
            <tr>
              
               <td class="l_form">Frame:</td>
              <td><input id="frame" class="q_in" type="text" name="frame" tabindex="8" value="<?php echo $res[8]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;Sr.No:</td>
              <td><input id="sr_no" class="q_in" type="text" name="sr_no" tabindex="9" value="<?php echo $res[9]; ?>" /></td>
            </tr>
            <tr  height="10px">
            <td class="l_form" >Additional Details:</td>
              <td colspan="4"><textarea id="detail" class="q_add" name="detail" tabindex="10" > <?php echo $res[10]; ?> </textarea></td>
              </tr>
            </table>
            
            <table class="midtext">
            <tr >
            <td colspan="3"><label class="desc1">Winding Data</label></td>
            </tr> 
            </table>
            
            <table class="q_clients1" >       
            <tr>
              <td class="l_form">slots:</td>
              <td><input id="slot1" class="q_in" type="text" name="slot1" tabindex="11" value="<?php echo $res[11]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;slots:</td>
              <td><input id="slot2" class="q_in" type="text" name="slot2" tabindex="12" value="<?php echo $res[18]; ?>" /></td>             
            </tr>
            <tr>
              <td class="l_form">Coils:</td>
              <td><input id="coil1" class="q_in" type="text" name="coil1" tabindex="13" value="<?php echo $res[12]; ?>" /></td>  
              <td class="l_form" >&nbsp;&nbsp;Coils:</td>
              <td><input id="coil2" class="q_in" type="text" name="coil2" tabindex="14" value="<?php echo $res[19]; ?>" /></td>              
            </tr>
            <tr>
              <td class="l_form">Pich:</td>
              <td><input id="pich1" class="q_in" type="text" name="pich1" tabindex="15" value="<?php echo $res[13]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;Pich:</td>
              <td><input id="pich2" class="q_in" type="text" name="pich2" tabindex="16" value="<?php echo $res[20]; ?>" /></td>
            </tr>
            <tr>              
               <td class="l_form">Turn:</td>
              <td><input id="turn1" class="q_in" type="text" name="turn1" tabindex="17" value="<?php echo $res[14]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;Turn:</td>
              <td><input id="turn2" class="q_in" type="text" name="turn2" tabindex="18" value="<?php echo $res[21]; ?>" /></td>
            </tr>
              <tr>              
               <td class="l_form">SWG:</td>
              <td><input id="swg1" class="q_in" type="text" name="swg1" tabindex="19" value="<?php echo $res[15]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;SWG:</td>
              <td><input id="swg2" class="q_in" type="text" name="swg2" tabindex="20" value="<?php echo $res[22]; ?>" /></td>
            </tr>
            <tr>              
               <td class="l_form">Weight of one Coil:</td>
              <td><input id="w_one1" class="q_in" type="text" name="w_one1" tabindex="21" value="<?php echo $res[16]; ?>" /></td>
              <td class="l_form">Weight of one Coil:</td>
              <td><input id="w_one2" class="q_in" type="text" name="w_one2" tabindex="22" value="<?php echo $res[23]; ?>" /></td>
            </tr>
            <tr>              
               <td class="l_form">Total:</td>
              <td><input id="total1" class="q_in" type="text" name="total1" tabindex="23" value="<?php echo $res[17]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;Total:</td>
              <td><input id="total2" class="q_in" type="text" name="total2" tabindex="24" value="<?php echo $res[24]; ?>" /></td>
            </tr>
            <tr  height="10px">
<td class="l_form" >Analysis of Failure</td>
<td colspan="4"><textarea id="failure" class="q_add" name="failure" tabindex="25" ><?php echo $res[25]; ?></textarea></td>
              </tr>
            </table>
             <table class="midtext">
            <tr >
            <td colspan="3"><label class="desc">Motor Testing Details</label></td>
            </tr> 
            </table>
            
            <table class="q_clients_w" >       
            <tr>
              <td class="l_form">N.L.Ampere:</td>
              <td><input id="nl1" class="q_in" type="text" name="nl1" tabindex="26" value="<?php echo $res[26]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;N.L.Ampere Y:</td>
              <td><input id="nl2" class="q_in" type="text" name="nl2" tabindex="27" value="<?php echo $res[27]; ?>" /></td>             </tr>
           
            <tr>
          <td class="l_form">Resistance:</td>
          <td><input id="resist1" class="q_in" type="text" name="resist1" tabindex="28" value="<?php echo $res[28]; ?>" /></td>  
          <td class="l_form" >&nbsp;&nbsp;Resistance Y:</td>
          <td><input id="resist2" class="q_in" type="text" name="resist2" tabindex="29" value="<?php echo $res[29]; ?>" /></td>              
            </tr>
            <tr>
          <td class="l_form">Rotor Lock Current:</td>
          <td><input id="current1" class="q_in" type="text" name="current1" tabindex="30" value="<?php echo $res[30]; ?>" /></td>
          <td class="l_form">&nbsp;&nbsp;Each Phase &nbsp;&nbsp;Current:</td>
          <td><input id="current2" class="q_in" type="text" name="current2" tabindex="31" value="<?php echo $res[31]; ?>" /></td>
            </tr>
            </table>
            <table class="toptext1">
            <tr >
            <td colspan="3"><label class="desc2">Additional Work/Spare Replacement</label></td>
            </tr> 
            </table>
            
            <table class="q_clients3" >       
            <tr>
              <td class="l_form">Air Fan:</td>
              <td><input id="air" class="q_in" type="text" name="air" tabindex="32" value="<?php echo $res[32]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;Fan Cover:</td>
              <td><input id="fan" class="q_in" type="text" name="fan" tabindex="33" value="<?php echo $res[33]; ?>" /></td>             
            </tr>
            <tr>
              <td class="l_form">D.E. Bearing:</td>
              <td><input id="de1" class="q_in" type="text" name="de1" tabindex="34" value="<?php echo $res[34]; ?>" /></td>  
              <td class="l_form" >&nbsp;&nbsp;shaft Repair:</td>
              <td><input id="shaft" class="q_in" type="text" name="shaft" tabindex="35" value="<?php echo $res[35]; ?>" /></td>              
            </tr>
            <tr>
              <td class="l_form">Terminal Plate:</td>
              <td><input id="terminal" class="q_in" type="text" name="terminal" tabindex="36" value="<?php echo $res[36]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;Terminal Box:</td>
              <td><input id="box" class="q_in" type="text" name="box" tabindex="37" value="<?php echo $res[37]; ?>" /></td>
            </tr>
            <tr>              
               <td class="l_form">N.D.E. Bearing:</td>
              <td><input id="bear" class="q_in" type="text" name="bear" tabindex="38" value="<?php echo $res[38]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;cover Repair:</td>
              <td><input id="cover" class="q_in" type="text" name="cover" tabindex="39" value="<?php echo $res[39]; ?>" /></td>
            </tr>
              <tr>              
               <td class="l_form">Oil Seal:</td>
              <td><input id="oil" class="q_in" type="text" name="oil" tabindex="40" value="<?php echo $res[40]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;Water Seal:</td>
              <td><input id="water" class="q_in" type="text" name="water" tabindex="41" value="<?php echo $res[41]; ?>" /></td>
            </tr>
            <tr>              
               <td class="l_form">Additional:</td>
              <td><input id="add1" class="q_in" type="text" name="add1" tabindex="42" value="<?php echo $res[42]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;Stator Core &nbsp;&nbsp;Repair:</td>
              <td><input id="core" class="q_in" type="text" name="core" tabindex="43" value="<?php echo $res[43];?>" /></td>
            </tr>            
            </table> 
              <table class="midtext1">
            <tr >
            <td colspan="3"><label class="desc3">Additional Details</label></td>
            </tr> 
            </table>
            
            <table class="w_clients2" >       
            <tr>
              <td class="l_form" align="">Stator Core Length:</td>
              <td><input id="core1" class="q_in" type="text" name="core1" tabindex="44" value="<?php echo $res[44]; ?>" /></td>
              <td class="l_form">&nbsp;&nbsp;Rotor Core &nbsp;&nbsp;Length:</td>
              <td><input id="core2" class="q_in" type="text" name="core2" tabindex="45" value="<?php echo $res[45]; ?>" /></td>             </tr>
           
            <tr>
          <td class="l_form">Rotor O.D.:</td>
          <td><input id="rotor" class="q_in" type="text" name="rotor" tabindex="46" value="<?php echo $res[46]; ?>" /></td>  
          <td class="l_form" >&nbsp;&nbsp; Slot Dia:</td>
          <td><input id="dia" class="q_in" type="text" name="dia" tabindex="47" value="<?php echo $res[47]; ?>" /></td>              
            </tr>
            <tr>
          <td class="l_form">Stator Dia :</td>
          <td><input id="stator" class="q_in" type="text" name="stator" tabindex="48" value="<?php echo $res[48]; ?>"  /></td>
             </tr>
            </table>
          <div class="addclients_b">
         <input name="q_up" class="formbutton" value="Update" type="submit" tabindex="49">            
         <input name="can" class="formbutton" value="Cancel" type="submit" tabindex="50" />
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
