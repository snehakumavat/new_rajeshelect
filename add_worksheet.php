<?php
include("include/database.php");
include("session.php");
	if(isset($_REQUEST['c_add']))
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
		
	$c_qry="INSERT INTO `job_worksheet`(`client_name`, `make`, `phase`, `rpm`, `ampere`, `hp`, `kw`, `frame`, `sr_no`, `addtional_details`, `slots`, `colis`, `pich`, `turn`, `swg`, `weight_of_coil`, `total`, `slots1`, `coils1`, `pich1`, `turn1`, `swg1`, `weight_coil1`, `total1`, `analysis_of_failure`, `n_l_ampere_d`, `n_l_ampere_y`, `resistance_d`, `resistance_y`, `rotor_lock_current`, `each_phase_current`, `air_fan`, `fan_cover`, `d_e_bearing`, `shaft_repair`, `terminal_plate`, `terminal_box`, `nde_bearing`, `cover_repair`, `oil_seal`, `water_seal`, `additonal`, `stator_core_repair`, `stator_core_length`, `rotor_core_length`, `rotor_od`,`slot_dia`,`stator_dia`) VALUES ('".$c_t1."','".$c_t3."','".$c_t4."','".$c_t6."','".$c_t7."','".$c_t8."','".$c_t9."','".$c_t10."','".$c_t11."','".$c_t12."','".$c_t13."','".$c_t15."','".$c_t17."','".$c_t19."','".$c_t21."','".$c_t23."','".$c_t25."','".$c_t14."','".$c_t16."','".$c_t18."','".$c_t20."','".$c_t22."','".$c_t24."','".$c_t26."','".$c_t27."','".$c_t28."','".$c_t29."','".$c_t30."','".$c_t31."','".$c_t32."','".$c_t33."','".$c_t34."','".$c_t35."','".$c_t36."','".$c_t37."','".$c_t38."','".$c_t39."','".$c_t40."','".$c_t41."','".$c_t41."','".$c_t43."','".$c_t44."','".$c_t45."','".$c_t46."','".$c_t47."','".$c_t48."','".$c_t49."','".$c_t50."')";
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
          Add Job Worksheet
        </center>
      </div>
      <div>
        <form name="form1" action="" method="post">
          
            <table class="q_client_s" >
            <tr>
              <td class="l_form" colspan="2">Name of the Client:</td>
              <td><input id="cname" type="text" name="c_fname" tabindex="1" /></td>
            </tr> 
            <tr>
            
            <td colspan="4" style="font-size:18;" align="center"> <br> Motor Description </td>
            </tr>        
            <tr>
              <td class="l_form">Make:</td>
              <td><input id="make" class="q_in" type="text" name="make" tabindex="2"/></td>
              <td class="l_form">&nbsp;&nbsp;phase:</td>
              <td><input id="phase" class="q_in" type="text" name="phase" tabindex="3"/></td>             
            </tr>
            <tr>
              <td class="l_form">RPM:</td>
              <td><input id="rpm" class="q_in" type="text" name="rpm" tabindex="4"/></td>  
              <td class="l_form" >&nbsp;&nbsp;Ampere:</td>
              <td><input id="ampere" class="q_in" type="text" name="ampere" tabindex="5"/></td>              
            </tr>
            <tr>
              <td class="l_form">HP:</td>
              <td><input id="hp" class="q_in" type="text" name="hp" tabindex="6"/></td>
              <td class="l_form">&nbsp;&nbsp;KW:</td>
              <td><input id="kw" class="q_in" type="text" name="kw" tabindex="7"/></td>
            </tr>
            <tr>
              
               <td class="l_form">Frame:</td>
              <td><input id="frame" class="q_in" type="text" name="frame" tabindex="8"/></td>
              <td class="l_form">&nbsp;&nbsp;Sr.No:</td>
              <td><input id="sr_no" class="q_in" type="text" name="sr_no" tabindex="9"/></td>
            </tr>
            <tr  height="10px">
            <td class="l_form" >Additional Details:</td>
              <td colspan="4"><textarea id="detail" class="q_add" name="detail" tabindex="10"> </textarea></td>
              </tr>
            </table>
            
           
            <table class="q_clients1" >  
            <tr >
            <td colspan="4" style="font-size:18;" align="center"> Winding Data </td>
            </tr>      
            <tr>
              <td class="l_form">slots:</td>
              <td><input id="slot1" class="q_in" type="text" name="slot1" tabindex="11"/></td>
              <td class="l_form">&nbsp;&nbsp;slots:</td>
              <td><input id="slot2" class="q_in" type="text" name="slot2" tabindex="12"/></td>             
            </tr>
            <tr>
              <td class="l_form">Coils:</td>
              <td><input id="coil1" class="q_in" type="text" name="coil1" tabindex="13"/></td>  
              <td class="l_form" >&nbsp;&nbsp;Coils:</td>
              <td><input id="coil2" class="q_in" type="text" name="coil2" tabindex="14"/></td>              
            </tr>
            <tr>
              <td class="l_form">Pich:</td>
              <td><input id="pich1" class="q_in" type="text" name="pich1" tabindex="15"/></td>
              <td class="l_form">&nbsp;&nbsp;Pich:</td>
              <td><input id="pich2" class="q_in" type="text" name="pich2" tabindex="16"/></td>
            </tr>
            <tr>              
               <td class="l_form">Turn:</td>
              <td><input id="turn1" class="q_in" type="text" name="turn1" tabindex="17"/></td>
              <td class="l_form">&nbsp;&nbsp;Turn:</td>
              <td><input id="turn2" class="q_in" type="text" name="turn2" tabindex="18"/></td>
            </tr>
              <tr>              
               <td class="l_form">SWG:</td>
              <td><input id="swg1" class="q_in" type="text" name="swg1" tabindex="19"/></td>
              <td class="l_form">&nbsp;&nbsp;SWG:</td>
              <td><input id="swg2" class="q_in" type="text" name="swg2" tabindex="20"/></td>
            </tr>
            <tr>              
               <td class="l_form">Weight of one Coil:</td>
              <td><input id="w_one1" class="q_in" type="text" name="w_one1" tabindex="21"/></td>
              <td class="l_form">&nbsp;&nbsp;Weight of one &nbsp;&nbsp;Coil:</td>
              <td><input id="w_one2" class="q_in" type="text" name="w_one2" tabindex="22"/></td>
            </tr>
            <tr>              
               <td class="l_form">Total:</td>
              <td><input id="total1" class="q_in" type="text" name="total1" tabindex="23"/></td>
              <td class="l_form">&nbsp;&nbsp;Total:</td>
              <td><input id="total2" class="q_in" type="text" name="total2" tabindex="24"/></td>
            </tr>
            <tr  height="10px">
<td class="l_form" >Analysis of Failure</td>
<td colspan="4"><textarea id="failure" class="q_add" name="failure" tabindex="25"> </textarea></td>
              </tr>
            </table>
            
             <table class="q_clients_w" >  
                          <tr >
            <td colspan="4" style="font-size:18;" align="center">Motor Testing Details</td>
            </tr>      
            <tr>
              <td class="l_form">N.L.Ampere:</td>
              <td><input id="nl1" class="q_in" type="text" name="nl1" tabindex="26"/></td>
              <td class="l_form">&nbsp;&nbsp;N.L.Ampere Y:</td>
              <td><input id="nl2" class="q_in" type="text" name="nl2" tabindex="27"/></td>             </tr>
           
            <tr>
          <td class="l_form">Resistance:</td>
          <td><input id="resist1" class="q_in" type="text" name="resist1" tabindex="28"/></td>  
          <td class="l_form" >&nbsp;&nbsp;Resistance Y:</td>
          <td><input id="resist2" class="q_in" type="text" name="resist2" tabindex="29"/></td>              
            </tr>
            <tr>
          <td class="l_form">Rotor Lock Current:</td>
          <td><input id="current1" class="q_in" type="text" name="current1" tabindex="30"/></td>
          <td class="l_form">&nbsp;&nbsp;Each Phase &nbsp;&nbsp;Current:</td>
          <td><input id="current2" class="q_in" type="text" name="current2" tabindex="31"/></td>
            </tr>
            </table>
            
            
             
            
            <table class="w_clients2" > 
            <tr >
            <td colspan="4" style="font-size:18;" align="center">Additional Details</td>
            </tr>      
            <tr>
              <td class="l_form" align="">Stator Core Length:</td>
              <td><input id="core1" class="q_in" type="text" name="core1" tabindex="44"/></td>
              <td class="l_form">&nbsp;&nbsp;Rotor Core &nbsp;&nbsp;Length:</td>
              <td><input id="core2" class="q_in" type="text" name="core2" tabindex="45"/></td>             </tr>
           
            <tr>
          <td class="l_form">Rotor O.D.:</td>
          <td><input id="rotor" class="q_in" type="text" name="rotor" tabindex="46"/></td>  
          <td class="l_form" >&nbsp;&nbsp; Slot Dia:</td>
          <td><input id="dia" class="q_in" type="text" name="dia" tabindex="47"/></td>              
            </tr>
            <tr>
          <td class="l_form">Stator Dia :</td>
          <td><input id="stator" class="q_in" type="text" name="stator" tabindex="48"/></td>
             </tr>
            </table>
            
            <table class="q_clients3" >
            <tr >
            <td colspan="4" style="font-size:18;" align="center">Additional Work/Spare Replacement</td>
            </tr>        
            <tr>
              <td class="l_form">Air Fan:</td>
              <td><input id="air" class="q_in" type="text" name="air" tabindex="32"/></td>
              <td class="l_form">&nbsp;&nbsp;Fan Cover:</td>
              <td><input id="fan" class="q_in" type="text" name="fan" tabindex="33"/></td>             
            </tr>
            <tr>
              <td class="l_form">D.E. Bearing:</td>
              <td><input id="de1" class="q_in" type="text" name="de1" tabindex="34"/></td>  
              <td class="l_form" >&nbsp;&nbsp;shaft Repair:</td>
              <td><input id="shaft" class="q_in" type="text" name="shaft" tabindex="35"/></td>              
            </tr>
            <tr>
              <td class="l_form">Terminal Plate:</td>
              <td><input id="terminal" class="q_in" type="text" name="terminal" tabindex="36"/></td>
              <td class="l_form">&nbsp;&nbsp;Terminal Box:</td>
              <td><input id="box" class="q_in" type="text" name="box" tabindex="37"/></td>
            </tr>
            <tr>              
               <td class="l_form">N.D.E. Bearing:</td>
              <td><input id="bear" class="q_in" type="text" name="bear" tabindex="38"/></td>
              <td class="l_form">&nbsp;&nbsp;cover Repair:</td>
              <td><input id="cover" class="q_in" type="text" name="cover" tabindex="39"/></td>
            </tr>
              <tr>              
               <td class="l_form">Oil Seal:</td>
              <td><input id="oil" class="q_in" type="text" name="oil" tabindex="40"/></td>
              <td class="l_form">&nbsp;&nbsp;Water Seal:</td>
              <td><input id="water" class="q_in" type="text" name="water" tabindex="41"/></td>
            </tr>
            <tr>              
               <td class="l_form">Additional:</td>
              <td><input id="add1" class="q_in" type="text" name="add1" tabindex="42"/></td>
              <td class="l_form">&nbsp;&nbsp;Stator Core &nbsp;&nbsp;Repair:</td>
              <td><input id="core" class="q_in" type="text" name="core" tabindex="43"/></td>
            </tr>            
            </table>
            
          <div class="addclients_b">
            <input name="c_add" class="formbutton" value=" Add " type="submit" tabindex="49" onClick="javascript:return validateMyForm();" />
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
