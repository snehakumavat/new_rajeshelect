<?php
error_reporting(0);
include("session.php");
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
	$g_t16=$_REQUEST['tot_qnt'];
	$g_t20=$_REQUEST['tot_amt'];
	//$g_t21=$_REQUEST['remark'];
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
	
	for($i=1; $i<$b; $i++)
	{
		//$id=$_REQUEST['i_id'];			
		$q_d=$_POST['d'][$i];
		$alp=$_POST['alp'][$i];
		$rmk=$_POST['rmrk'][$i];
		$q_u=$_POST['u'][$i];
		$q_q=$_POST['q'][$i];
		$q_r=$_POST['r'][$i];
		$q_a=$_POST['a'][$i];		
	/* $quo="UPDATE `material_desc` SET `gatpas_id`='".$g_t1."',`client_id`='".$c_up."' ,`desc_mat`='".$q_d."',`quant`='".$q_c."',`tot_qnt`='-',`unit`='".$q_r."',`rate`='".$q_q."',`amount`='".$q_a."',`tot_amt`='-' WHERE gatpas_id='$c_row[8]'"; */
	 $quo="INSERT INTO `material_desc`( `gatpas_id`,`client_id`, `desc_mat`,`appl`,`remark`,`quant`,`unit`, `rate`, `amount`) VALUES ('".$g_t1."','".$c_row[1]."','".$q_d."','".$alp."','".$rmk."','".$q_q."','".$q_u."','".$q_r."','".$q_a."')";
	mysql_query($quo);
	}
	$result="UPDATE `gatepass` SET `client_id`='".$c_row[1]."', `tin_no`='".$g_t25."',`cst_no`='".$g_t26."',`ex_ring`='".$g_t27."'
	,`ex_no`='".$g_t28."',`ex_div`='".$g_t29."',`ex_com`='".$g_t30."',`g_no`='".$g_t1."',`g_date`='".$g_t2."',`due_date`='".$g_t3."',`req`='".$g_t4."',`dept`='".$g_t5."',`status`='".$g_t6."',`t_ref_no`='".$g_t7."' ,`p_name`='".$g_t8."',`addr`='".$g_t9."',`mode`='".$g_t10."',`time`='".$g_t11."',`t_name`='".$g_t12."',`v_no`='".$g_t13."',`issue`='".$g_t14."',`total_qnt`='".$g_t16."',`total_amt`='".$g_t20."',`req_by`='".$g_t22."',`appr_nm`='".$g_t23."',`date_tim`='".$g_t24."' WHERE pass_id='$c_up'";
	//exit();
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
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script>
//  *********************** addition of rate + qty =amt *************
var total = 0;
var tot_qty =0;
function getValues() {
var qty = 0;
var rate = 0;
var obj = document.getElementsByTagName("input");
      for(var i=0; i<obj.length; i++){
         if(obj[i].name == "q[]")
		 {
			 var qty = obj[i].value;
			 if(qty>0)
		     {
			 tot_qty+=(qty*1);  
			 }
		}
         if(obj[i].name == "r[]")
		 {
			 var rate = obj[i].value;
		 }
         if(obj[i].name == "a[]")
		 {
          		if(qty > 0 && rate > 0)
				{
					obj[i].value = qty*rate;
					total+=(obj[i].value*1);
				}
				else
				{
					obj[i].value = 0;
				    total+=(obj[i].value*1);
				}
          }
         	 }
        document.getElementById("tot_amt").value = total*1;
		document.getElementById("tot_qnt").value = tot_qty*1;
        total=0;
		tot_qty=0;
}
</script>
<script>
function addRow(tableID) {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
            var colCount = table.rows[0].cells.length;
            for(var i=0; i<colCount; i++) {
                var newcell = row.insertCell(i);
                newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                //alert(newcell.childNodes);
                switch(newcell.childNodes[0].type) {
                    case "text":
                            newcell.childNodes[0].value = '';
                            break;
                    case "checkbox":
                            newcell.childNodes[0].checked = false;
                            break;
                    
                }
            }
        }
		
				function deleteRow(tableID)
{
            try
                 {
                var table = document.getElementById(tableID);
                var rowCount = table.rows.length;
                    for(var i=0; i<rowCount; i++)
                        {
                        var row = table.rows[i];
                        var chkbox = row.cells[0].childNodes[0];
                        if (null != chkbox && true == chkbox.checked)
                            {
                            if (rowCount <= 1)
                                {
                                alert("Cannot delete all the rows.");
                                break;
                                }
                            table.deleteRow(i);
                            rowCount--;
                            i--;
                            }
                        }
                    } catch(e)
                        {
                        alert(e);
                        }
   getValues();
}
</script>

<!--
 var counter =1+<?php  ?>;
 function add_phone_field()
 {
  var obj = document.getElementById("phone");
  var data = obj.innerHTML;
  data += "<table class='des'><tr><td><input class='des_in' type='text' name='d["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_cap' type='text' name='c["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_q' type='text' name='q["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_r' type='text' name='r["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_ser' type='text' name='s["+counter+"]' id='person_phone"+counter+"' /></td></tr></table>";
  obj.innerHTML = data;
  counter++;
  }-->

</head>

<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");	
	$query="select * from clients where  c_id='$c_row[1]'";
	$nm=mysql_query($query);
	$cmpnm=mysql_fetch_array($nm);
	?><br />
     
		<div class="quotation"><center>Returnable Gate Pass</center></div>
        <div>
        <form action="" method="post">
        <!--<INPUT class="formbutton" Type="button" VALUE="Back" onClick="history.go(-1);return true;">-->
         <table  style="margin-left:500px;"></table>
        <table class="q_clients_2" > 
        <tr><td colspan="4" align="center" style="font-size:18px;"><?php echo $cmpnm['comp_name'];?></td></tr>      
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
        
            <table class="q_clients_2" > 
            <tr><td colspan="4" align="center" style="font-size:18px;">Gate Pass Details</td></tr>      
            <tr>
              <td class="l_form">Gate Pass No.:</td>
              <td><input id="gn1" class="q_in" type="text" name="gn1" tabindex="7" value="<?php echo $c_row[8];?>"/></td>
              <td class="l_form">&nbsp;&nbsp;Gate Pass &nbsp;&nbsp;Date:</td>
              <td><input id="gd1" class="q_in" type="date" name="gd1" value="<?php echo $c_row[9];?>" tabindex="8"/></td>             </tr>
           
            <tr>
          <td class="l_form">Due Date:</td>
          <td><input id="due1" class="q_in" type="date" name="due1" value="<?php echo $c_row[10];?>" tabindex="9"/></td>  
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
           
             <table class="q_clients_u" >
             <tr><td colspan="4" align="center" style="font-size:18px;">Party Details</td></tr>             
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
            <table class='request' >
            <tr><td align="left" style="font-size:18px;" >Requested By</td>
             
             <td><input type="text" name="nm2"  class="q_in" value="<?php echo $c_row[24];?>"></td></tr> 
            </table>
                      
             <table class='request'>
             <tr><td colspan="4" align="left" style="font-size:18px;">Authorization</td></tr>                              
            <tr>
              <td class="l_form">Approver Name:</td>
              <td><input id="apr" class="q_in" type="text" name="apr" tabindex="28" value="<?php echo $c_row[25];?>"/></td>
              <td class="l_form">&nbsp;&nbsp;Date:</td>
              <td><input id="date" class="q_in" type="text" name="date" value="<?php echo $c_row[26];?>" tabindex="29" width="40px"/></td>             </tr>
            </table>
  
            
             <table class="material">
             <tr><td colspan="4" align="center" style="font-size:18px;">Material Details</td></tr>
         
            <tr><td colspan="3">
            <input type="button" class="print" value="Add Row" onClick="addRow('dataTable')" >&nbsp;
<input type="button" value="Delete Row" class="print" onClick="deleteRow('dataTable')" >
				</td>
            </tr> 
            </table>
				 <table class="des">
                <tr><td width="20"></td>
               <td class="heading" width="205">Description  Of Material.</td>                <td class="heading" width="250">Appl of Motor</td>
                <td class="heading" width="200">Remark</td>
                <td class="heading" width="200">Quantity</td>
                <td class="heading" width="200">Unit</td>
                <td class="heading" width="200">Rate</td>
                <td class="heading" width="200">Amount</td>
                </tr></table>
                <!--<span style="color:#00f;font-size:18px;font-weight:bold;cursor:pointer;" onClick="add_phone_field()">[+]</span>-->
               <table class="des" id="dataTable">
<tr style="display:none;"><td style="white-space:nowrap;" width="20"><input type="checkbox" name="chk[]"/></td>
                <td  >
                 <input class="des_in" type="text" name="d[]" id="0" value="" > <br>
                </td>
                 <td  >
                 <input class="des_in" type="text" name="alp[]" id="0" value=""> <br>
                </td>
                 <td>
                 <input class="des_in" type="text" name="rmrk[]" id="0" value=""> <br>
                </td>
                <td>
                 <input class="des_cap" type="text" name="q[]" id="a[1]" value="" onKeyUp="getValues()" ><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="u[]" id="0" value="" ><br>
                </td>
                <td>
                 <input class="des_r" type="text" name="r[]" id="b[1]" value=""  onkeyup="getValues()" ><br>
                </td>
                <td>
                 <input class="des_ser" type="text" name="a[]" id="total[1]" value=""  readonly><br>
                </td> 
                             </tr> 
                <?php
               $count1=1;
				if($res1)
				{
				while($res=mysql_fetch_array($res1))
				{
					if($count>0)
					{
						
				?>
                  <tr><td style="white-space:nowrap;" width="20"><input type="checkbox" name="chk[]"/></td>
                <td  >
                 <input class="des_in" type="text" name="d[]" id="d[]" value="<?php echo $res[3];?>"><br>
                </td>
                <td  >
                 <input class="des_in" type="text" name="alp[]" id="0" value="<?php echo $res[4];?>"> <br>
                </td>
                 <td>
                 <input class="des_in" type="text" name="rmrk[]" id="0" value="<?php echo $res[5];?>"> <br>
                </td>
                <td >
                 <input class="des_cap" type="text" name="q[]" id="q[]" value="<?php echo $res[6];?>" onKeyUp="getValues()"><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="u[]" value="<?php echo $res[7];?>" id="u[]"><br>
                </td>
                <td>
                 <input class="des_r" type="text" name="r[]" value="<?php echo $res[8];?>" id="r[]" onKeyUp="getValues()"><br>
                </td>
                <td>
               <input class="des_ser" type="text" name="a[]" value="<?php echo $res[9];?>" id="a[]" readonly>
                 <br>
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
                <tr><td>&nbsp;&nbsp;&nbsp;</td>
                <td >
                 <input class="des_in" type="text" name="d[]" id="0" value="" > <br>
                </td>
                 <td  >
                 <input class="des_in" type="text" name="alp[]" id="0" value=""> <br>
                </td>
                 <td>
                 <input class="des_in" type="text" name="rmrk[]" id="0" value=""> <br>
                </td>
                <td>
                 <input class="des_cap" type="text" name="q[]" id="a[1]" value="" onKeyUp="getValues()" ><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="u[]" id="0" value="" ><br>
                </td>
                <td>
                 <input class="des_r" type="text" name="r[]" id="b[1]" value=""  onkeyup="getValues()" ><br>
                </td>
                <td>
                 <input class="des_ser" type="text" name="a[]" id="total[1]" value=""  readonly><br>
                </td> 
                             </tr>                 
                  
                <?php }
				?>                    
                
                </table>
                
                 <table class="des">
                <tr><td>&nbsp;&nbsp;&nbsp;</td>
                <td width="150" colspan="3">
                 <input class="des_in" type="text" name="total" id="tot" value='TOTAL' align="right"  readonly><br>
                </td>
                <td>
                 <input class="des_in" type="text" name="" id=""><br>
                </td>
                <td>
                 <input class="des_in" type="text" name="" id=""><br>
                </td>
                <td>
                 <input class="des_cap" type="text" name="tot_qnt" id="tot_qnt" value="<?php echo $c_row[22];?>" readonly><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="" id=""><br>
                </td>
                <td>
                 <input class="des_r" type="text" name="" id=""><br>
                </td>
                <td>
                 <input class="des_ser" type="text" name="tot_amt" id="tot_amt" value="<?php echo $c_row[23];?>" readonly><br>
                </td>
                
                </tr>
                </table>
                        
            
            
                
        <div class="addclients_b"> 
         <input name="g_up" class="formbutton" value="Update" type="submit" />        
         <input name="can" class="formbutton" value="Cancel" type="submit" />
        </div>
        
        </form>
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
