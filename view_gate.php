<?php
error_reporting(0);
include("session.php");
	include("include/database.php");
	$c_up=$_REQUEST['c_id3'];
	$c_qry_f="select * from gatepass where pass_id='$c_up'";
	$c_res_f=mysql_query($c_qry_f);
	$c_row=mysql_fetch_array($c_res_f);
?>
<?php
	if(isset($_REQUEST['can']))
	{
		header("location:view_gatepass.php?c_id3=$c_row[1]");
	}
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
 var counter = 1;
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
<div id="sub-header">	
    <?php
	include("header.php");
	$query="select * from clients where c_id='$c_row[1]'";
	$nm=mysql_query($query);
	$cmpnm=mysql_fetch_array($nm);
	
	?>  <div class="quo"> <br />
		<div class="quotation"><center>Returnable Gate Pass</center></div>
        <div>
        <form action="" method="post">
         <table  style="margin-left:500px;"><tr><td colspan="3" align="right" style="font-size:30px;"><?php echo $cmpnm['comp_name'];?></td></tr></table>
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
        <table class="midtext1">
            <tr >
            <td colspan="3"><label class="descg">Gate Pass Details</label></td>
            </tr> 
            </table>
            
            <table class="q_clients_2" >       
            <tr>
              <td class="l_form">Gate Pass No.:</td>
              <td><input id="gn1" class="q_in" type="text" name="gn1" tabindex="7" value="<?php echo $c_row[8];?>"/></td>
              <td class="l_form">&nbsp;&nbsp;Gate Pass &nbsp;&nbsp;Date:</td>
              <td><input id="gd1" class="q_in" type="text" name="gd1" value="<?php echo date('d-m-Y',strtotime($c_row[9]));?>" tabindex="8"/></td>             </tr>
           
            <tr>
          <td class="l_form">Due Date:</td>
          <td><input id="due1" class="q_in" type="text" name="due1" value="<?php echo date('d-m-Y',strtotime($c_row[10]));?>" tabindex="9"/></td>  
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
            <table class="midtext1">
            <tr >
            <td colspan="3"><label class="descg">Party Details</label></td>
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
            
            
             <table class="midtext1">
            <tr >
            <td colspan="3"><label class="descg">Material Details</label></td>
            </tr> 
            </table>
				 <table class="des">
                <tr>
                <td class="heading" width="205">Description  Of Material.</td>                <td class="heading" width="250">Appl of Motor</td>
                <td class="heading" width="200">Remark</td>
                <td class="heading" width="200">Quantity</td>
                <td class="heading" width="200">Unit</td>
                <td class="heading" width="200">Rate</td>
                <td class="heading" width="200">Amount</td>
                </tr>
                <!--<span style="color:#00f;font-size:20px;font-weight:bold;cursor:pointer;" onClick="add_phone_field()">[+]</span>-->
                
                <?php
                 $des=$c_row[8];
				 $query="select * from material_desc where gatpas_id='$des'";
				$res1=mysql_query($query);
				if($res1)
				{
					while($res=mysql_fetch_array($res1))
					{
	
				?>
                <tr>
                <td>                
                 <input class="des_in" type="text" name="d[]" id="0" value="<?php echo $res[3];?>"><br>
                </td>
                <td>                
                 <input class="des_in" type="text" name="apl[]" id="0" value="<?php echo $res[4];?>"><br>
                </td>
                <td>                
                 <input class="des_in" type="text" name="rmrk[]" id="0" value="<?php echo $res[5];?>"><br>
                </td>                
                <td>
                 <input class="des_cap" type="text" name="q[]" id="0" value="<?php echo $res[6];?>"><br>
                </td>
                <td>
             <input class="des_q" type="text" name="u[]" value="<?php echo $res[7];?>" id="0"><br>
                </td>
                <td>
             <input class="des_r" type="text" name="r[]" value="<?php echo $res[8];?>" id="0"><br>
                </td>
                <td>
            <input class="des_ser" type="text" name="a[]" value="<?php echo $res[9];?>" id="0" readonly><br>
                </td>
                </tr> 
                <?php
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
                <td colspan="3">
                 <input class="des_in" type="text" name="total" id="tot" value='TOTAL' align="right"  readonly><br>
                </td>
               
                <td width="130">
                 <input class="des_cap" type="text" name="tot_qnt" id="tot_qnt" value="<?php echo $c_row[22];?>" readonly><br>
                </td>
                <td width="100">
                 <input class="des_r" type="text" name="" id=""  readonly><br>
                </td>
                <td width="120">
                 <input class="des_r" type="text" name="" id=""  readonly><br>
                </td>
                <td width="130">
                 <input class="des_ser" type="text" name="tot_amt" id="" value="<?php echo $c_row[23];?>" readonly><br>
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
             
            <table class="midtext1">
            <tr >
            <td colspan="3"><label class="descg">Requested By</label></td>
            </tr>
            <tr><td colspan="3" align="center"><br><input type="text" name="nm2"  class="q_in" value="<?php echo $c_row[24];?>" readonly></td></tr> 
            </table>
                      
             <table class="midtext1">
            <tr >
            <td colspan="3"><label class="descg">Authorization</label></td>
            </tr> 
            </table>

             <table style="margin-left:250px;">       
            <tr>
              <td class="l_form">Approver Name:</td>
              <td><input id="apr" class="q_in" type="text" name="apr" tabindex="28" value="<?php echo $c_row[25];?>"/></td>
              <td class="l_form">&nbsp;&nbsp;Date:</td>
              <td><input id="date" class="q_in1" type="text" name="date" value="<?php echo date('d-m-Y h:i:s',strtotime($c_row[26]));?>" tabindex="29" width="40px"/></td>             </tr>
            </table>
  
            
                
        <div class="addclients_b">         
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
