<?php
error_reporting(0);
	include("include/database.php");
	$c_up=$_REQUEST['c_id2'];
	$c_qry_f="select * from gatepass where pass_id=".$c_up;
	$c_res_f=mysql_query($c_qry_f);
	$c_row=mysql_fetch_array($c_res_f);
?>
<?php
if(isset($_REQUEST['g_up']))
	{	
	
	$g_t1=$_REQUEST['gn1'];
	$g_t2=$_REQUEST['gd1'];
	$g_t3=$_REQUEST['due1'];
	$g_t4=$_REQUEST['req1'];
	$g_t5=$_REQUEST['dept'];
	$g_t6=$_REQUEST['st1'];
	$g_t7=$_REQUEST['ref1'];
	$g_t8=$_REQUEST['part1'];
	$g_t9=$_REQUEST['add1'];
	$g_t10=$_REQUEST['tran'];
	$g_t11=$_REQUEST['time'];
	$g_t12=$_REQUEST['nm1'];
	$g_t13=$_REQUEST['vno'];
	$g_t14=$_REQUEST['ip1'];
	$g_t16=$_REQUEST['quant'];
	$g_t20=$_REQUEST['amt'];
	$g_t21=$_REQUEST['remark'];
	$g_t22=$_REQUEST['nm2'];
	$g_t23=$_REQUEST['apr'];
	$g_t24=$_REQUEST['date'];		
	$g_t25=$_REQUEST['tin'];
	$g_t26=$_REQUEST['cst'];
	$g_t27=$_REQUEST['ring'];
	$g_t28=$_REQUEST['exno'];
	$g_t29=$_REQUEST['div1'];
	$g_t30=$_REQUEST['com1'];
	
	$a=$_POST['d'];
	$b = count($a);
	
	$delete="delete from material_desc where gatpas_id='$c_row[8]'";
	mysql_query($delete);
	
	for($i=1; $i<=$b; $i++)
	{
		$id=$_REQUEST['i_id'];			
		$q_d=$_POST['d'][$i];
		$q_c=$_POST['c'][$i];
		$q_q=$_POST['q'][$i];
		$q_r=$_POST['r'][$i];
		$q_a=$_POST['s'][$i];
		$total=10;
			
			
	/* $quo="UPDATE `material_desc` SET `gatpas_id`='".$g_t1."',`client_id`='".$c_up."' ,`desc_mat`='".$q_d."',`quant`='".$q_c."',`tot_qnt`='-',`unit`='".$q_r."',`rate`='".$q_q."',`amount`='".$q_a."',`tot_amt`='-' WHERE gatpas_id='$c_row[8]'"; */
	$quo="INSERT INTO `material_desc`( `gatpas_id`,`client_id`, `desc_mat`, `quant`, `tot_qnt`, `unit`, `rate`, `amount`, `tot_amt`) VALUES ('".$g_t1."','".$c_row[1]."','".$q_d."','".$q_c."','-','".$q_q."','".$q_r."','".$q_a."','".$total."')";
	mysql_query($quo);
	}
	 $result="UPDATE `gatepass` SET `client_id`='".$c_row[1]."', `tin_no`='".$g_t25."',`cst_no`='".$g_t26."',`ex_ring`='".$g_t27."'
	,`ex_no`='".$g_t28."',`ex_div`='".$g_t29."',`ex_com`='".$g_t30."',`g_no`='".$g_t1."',`g_date`='".$g_t2."',`due_date`='".$g_t3."',`req`='".$g_t4."',`dept`='".$g_t5."',`status`='".$g_t6."',`t_ref_no`='".$g_t7."' ,`p_name`='".$g_t8."',`addr`='".$g_t9."',`mode`='".$g_t10."',`time`='".$g_t11."',`t_name`='".$g_t12."',`v_no`='".$g_t13."',`issue`='".$g_t14."',`total_qnt`='-',`total_amt`='-',`remark`='".$g_t21."',`req_by`='".$g_t22."',`appr_nm`='".$g_t23."',`date_tim`='".$g_t24."' WHERE pass_id='$c_up'";
	
	$ans=mysql_query($result);
	if($ans)
	{
	header("location:view_gatepass.php?c_id3=".$c_row[1]);
	}
	else
	{
		header("location:updategatepass.php?c_id3=".$c_up);
	}	
	}
	
	if(isset($_REQUEST['can']))
	{
		header("location:view_gatepass.php?c_id3=".$c_row[1]);
	}
	
	 $des=$c_row[8];
				$query="select * from material_desc where gatpas_id='$des'";
				$res1=mysql_query($query);
			    $count=mysql_num_rows($res1);
?>

<html>
<head>
<title>Rajesh Electic Works</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<script>
 var counter =1+<?php echo $count; ?>;
 function add_phone_field()
 {
  var obj = document.getElementById("phone");
  var data = obj.innerHTML;
  data += "<table class='des'><tr><td><input class='des_in' type='text' name='d["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_cap' type='text' name='c["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_q' type='text' name='q["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_r' type='text' name='r["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_ser' type='text' name='s["+counter+"]' id='person_phone"+counter+"' /></td></tr></table>";
  obj.innerHTML = data;
  counter++;
  }
  
function total()
{
var a = document.getElementById("c[].value");
var b = document.getElementById("r[].value");
if(a.length=="")
{
a.value = 0;
}
if(b.length=="")
{
b.value = 0;
}
var f = b.value * e.value;
var d = a.value * f;
document.getElementById("total").value=d;
}
 </script>
</head>

<body>
<div id="container">
	
    <?php
	include("header.php");
	?>
    
    <div id="sub-header">
    <div class="quo">
    	<br />
		<div class="quotation"><center>Returnable Gate Pass</center></div>
        <div>
        <form action="" method="post">
        <table class="q_clients_2" >       
            <tr>
              <td class="l_form">TIN NO:</td>
              <td><input id="tin" class="q_in" type="text" name="tin" value="<?php echo $c_row[2]; ?>" tabindex="1"/></td>
              <td class="l_form">&nbsp;&nbsp; CST NO:</td>
              <td><input id="cst" class="q_in" type="text" name="cst" tabindex="2"  value="<?php echo $c_row[3];?>"/> </td>             </tr>
           
            <tr>
          <td class="l_form">Ex Ring:</td>
          <td><input id="ring" class="q_in" type="text" name="ring" tabindex="3" value="<?php echo $c_row[4];?>"/></td>  
          <td class="l_form" >&nbsp;&nbsp;Ex No.:</td>
          <td><input id="exno" class="q_in" type="text" name="exno" tabindex="4" value="<?php echo $c_row[5];?>"/></td>              
            </tr>
            <tr>
          <td class="l_form">Ex Div:</td>
          <td><input id="div1" class="q_in" type="text" name="div1" tabindex="5" value="<?php echo $c_row[6];?>"/></td>
          <td class="l_form">&nbsp;&nbsp;Ex Com:</td>
          <td><input id="com1" class="q_in" type="text" name="com1" tabindex="6" value="<?php echo $c_row[7];?>"/></td>
            </tr>
            </table>
        <table class="midtext">
            <tr >
            <td colspan="3"><label class="desc">Gate Pass Details</label></td>
            </tr> 
            </table>
            
            <table class="q_clients_2" >       
            <tr>
              <td class="l_form">Gate Pass No.:</td>
              <td><input id="gn1" class="q_in" type="text" name="gn1" tabindex="7" value="<?php echo $c_row[8];?>"/></td>
              <td class="l_form">&nbsp;&nbsp;Gate Pass &nbsp;&nbsp;Date:</td>
              <td><input id="gd1" class="q_in" type="text" name="gd1" value="<?php echo $c_row[9];?>" tabindex="8"/></td>             </tr>
           
            <tr>
          <td class="l_form">Due Date:</td>
          <td><input id="due1" class="q_in" type="text" name="due1" value="<?php echo $c_row[10];?>" tabindex="9"/></td>  
          <td class="l_form" >&nbsp;&nbsp;Requested By:</td>
          <td><input id="req1" class="q_in" type="text" name="req1" tabindex="10" value="<?php echo $c_row[11];?>"/></td>              
            </tr>
            <tr>
          <td class="l_form">Department:</td>
          <td><input id="dept" class="q_in" type="text" name="dept" tabindex="11" value="<?php echo $c_row[12];?>"/></td>
          <td class="l_form">&nbsp;&nbsp;Status:</td>
          <td><input id="st1" class="q_in" type="text" name="st1" tabindex="12" value="<?php echo $c_row[13];?>"/></td>
            </tr>
            </table>
            <table class="midtext">
            <tr >
            <td colspan="3"><label class="desc">Party Details</label></td>
            </tr> 
            </table>
             <table class="q_clients_2" >       
            <tr>
              <td class="l_form">Truck Ref No.:</td>
              <td><input id="ref1" class="q_in" type="text" name="ref1" tabindex="13" value="<?php echo $c_row[14];?>"/></td>
              <td class="l_form">&nbsp;&nbsp;Party Name:</td>
              <td><input id="part1" class="q_in" type="text" name="part1" tabindex="14" value="<?php echo $c_row[15];?>"/></td>             </tr>
           
            <tr>
          <td class="l_form">Address:</td>
          <td><textarea id="add1" class="q_add" type="text" name="add1" tabindex="15"><?php echo $c_row[16];?></textarea></td>  
          <td class="l_form" >&nbsp;&nbsp; Mode Of &nbsp;&nbsp;Transport:</td>
          <td><input id="tran" class="q_in" type="text" name="tran" tabindex="16" value="<?php echo $c_row[17];?>"/></td>              
            </tr>
            <tr>
          <td class="l_form">Time</td>
          <td><input id="time" class="q_in" type="text" value="<?php echo $c_row[18];?>" name="time" tabindex="17"/></td>
          <td class="l_form">&nbsp;&nbsp;Transport &nbsp;&nbsp;Name:</td>
          <td><input id="nm1" class="q_in" type="text" name="nm1" tabindex="18"value="<?php echo $c_row[19];?>" /></td>
            </tr>
             <tr>
          <td class="l_form">Vehicle Number:</td>
          <td><input id="vno" class="q_in" type="text" name="vno" tabindex="19" value="<?php echo $c_row[20];?>"/></td>
          <td class="l_form">&nbsp;&nbsp;Issue To &nbsp;&nbsp;Person:</td>
          <td><input id="ip1" class="q_in" type="text" name="ip1" tabindex="20" value="<?php echo $c_row[21];?>"/></td>
            </tr>
            </table>
            
            
             <table class="midtext">
            <tr >
            <td colspan="3"><label class="desc">Material Details</label></td>
            </tr> 
            </table>
				 <table class="des">
                <tr>
                <td class="heading">Description  Of Material.</td>                
                <td class="heading" >Quantity</td>
                <td class="heading">Unit</td>
                <td class="heading">Rate</td>
                <td class="heading">Amount</td>
                </tr>
                <span style="color:#00f;font-size:20px;font-weight:bold;cursor:pointer;" onClick="add_phone_field()">[+]</span>
              
                <?php
               $count1=1;
				if($res1)
				{
				while($res=mysql_fetch_array($res1))
				{
					if($count>0)
					{
						
				?>
                  <tr>
                <td>
                 <input class="des_in" type="text" name="d[<?php echo $count1; ?>]" id="d[<?php echo $count1; ?>]" value="<?php echo $res[3];?>"><br>
                </td>
                <td>
                 <input class="des_cap" type="text" name="c[<?php echo $count1; ?>]" id="c[<?php echo $count1; ?>]" value="<?php echo $res[4];?>" onBlur="total();"><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="q[<?php echo $count1; ?>]" value="<?php echo $res[6];?>" id="q[<?php echo $count1; ?>]"><br>
                </td>
                <td>
                 <input class="des_r" type="text" name="r[<?php echo $count1; ?>]" value="<?php echo $res[7];?>" id="r[<?php echo $count1; ?>]"><br>
                </td>
                <td>
                 <input class="des_ser" type="text" name="s[<?php echo $count1; ?>]" value="<?php echo $res[8];?>" id="s[<?php echo $count1; ?>]" readonly><br>
                </td>                
                                </tr>  
                                 <?php
					$count1=$count1+1;
					}
					
					$count=$count-1;
					}
				}
				else
				{
				?> 
                <tr>
                <td>                
                 <input class="des_in" type="text" name="d[]" id="0" value=""><br>
                </td>
                <td>
                 <input class="des_cap" type="text" name="c[]" id="0" value="" onBlur="total();"><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="q[]" value="" id="0"><br>
                </td>
                <td>
                 <input class="des_r" type="text" name="r[]" value="" id="0"><br>
                </td>
                <td>
                 <input class="des_ser" type="text" name="s[]" value="" id="0" readonly><br>
                </td>
                             </tr>                 
                  
                <?php }
				?>                    
                
                </table>
                <div id="phone">
                
                </div>
                 <table class="des">
                <tr>
                <td>
                 <input class="des_in" type="text" name="total" id="tot" value='TOTAL' align="right"  readonly><br>
                </td>
                <td>
                 <input class="des_cap" type="text" name="tot_qnt" id="tot_qnt" value="<?php echo $c_row[22];?>" readonly><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="" id="" value="<?php echo $c_row[23];?>" readonly><br>
                </td>
                <td>
                 <input class="des_r" type="text" name="" id="" value="<?php echo $c_row[24];?>" readonly><br>
                </td>
                <td>
                 <input class="des_ser" type="text" name="tot_amt" id="" value="<?php echo $c_row[25];?>" readonly><br>
                </td>
                
                </tr>
                </table>
             <!--<table class="q_clients4" >       
            <tr>
              <td class="l_form">Description Of Material.:</td>
              <td><input id="desc1" class="q_in" type="text" name="desc1" tabindex="21"/></td>
              <td class="l_form">&nbsp;&nbsp;Quantity:</td>
              <td><input id="quant" class="q_in" type="text" name="quant" tabindex="22"/></td>             </tr>
            <tr>
          <td class="l_form">Unit:</td>
  <td><textarea id="unit" class="q_add" type="text" name="unit" tabindex="23"></textarea></td>  
  <td class="l_form" >&nbsp;&nbsp; Rate:</td>
          <td><input id="rate" class="q_in" type="text" name="rate" tabindex="24"/></td>           </tr>
            <tr>
          
          <td class="l_form">&nbsp;&nbsp;Amount:</td>
          <td><input id="amt" class="q_in" type="text" name="amt" tabindex="25"/></td>
            </tr>
            <tr>
          <td class="l_form" >Remarks</td>
          <td colspan="3">
          <textarea id="remark" class="q_add1" name="remark" tabindex="26"> </textarea></td>
            </tr>
            <tr>
          <td class="l_form" >Requested By</td>
          <td colspan="3">
          <input type="text" id="nm2" class="q_in" name="nm2" tabindex="27" /></td>
            </tr>                        
            </table>-->
                      
             <table class="midtext">
            <tr >
            <td colspan="3"><label class="desc">Authorization</label></td>
            </tr> 
            </table>

             <table style="margin-left:250px;">       
            <tr>
              <td class="l_form">Approver Name:</td>
              <td><input id="apr" class="q_in" type="text" name="apr" tabindex="28" value="<?php echo $c_row[26];?>"/></td>
              <td class="l_form">&nbsp;&nbsp;Date:</td>
              <td><input id="date" class="q_in1" type="text" name="date" value="<?php echo $c_row[27];?>" tabindex="29" width="40px"/></td>             </tr>
            </table>
  
            
                
        <div class="addclients_b"> 
         <input name="g_up" class="formbutton" value="Update" type="submit" />        
         <input name="can" class="formbutton" value="Cancel" type="submit" />
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