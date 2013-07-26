<?php
//error_reporting(0);
include("include/database.php");
error_reporting(0);
include("session.php");

$in=$_REQUEST['c_id2'];

$c_query="select * from clients where c_id=".$in;
$c_res=mysql_query($c_query);
$c_row=mysql_fetch_array($c_res);

$c_emp="select * from emp";
$c_emp_res=mysql_query($c_emp);

echo $c_query="select * from quotation order by q_id DESC ";
$c_res1=mysql_query($c_query);
if($res=mysql_fetch_array($c_res1))
{
$c_res=$res[0];
}


?>

<?php

if(isset($_REQUEST['submit']))
{	
		$c=$c_row[0];
		$q_date=$_POST['q_date'];
		$q_name=$_POST['q_name'];
		$q_address=$_POST['q_address'];
		
		$q_mail1=$_POST['q_mail_id'];
		$q_mo=$_POST['q_mo'];
		$q_ref=$_POST['q_ref'];
		$q_sub=$_POST['q_sub'];
		$q_fax=$_POST['q_fax'];
		$q_vender=$_POST['q_vendor'];
		$trans_chrg=$_POST['t_charge'];
		$tax=$_POST['tax'];
		
		$quo="insert into quotation(c_id,q_ref_no,q_date,q_name,q_address,q_mo,q_mail,q_vendor_no,q_sub,q_fax,q_trans,q_tax) values('".$c."','".$q_ref."','".$q_date."','".$q_name."','".$q_address."','".$q_mo."','".$q_mail1."','".$q_vender."','".$q_sub."','".$q_fax."','".$trans_chrg."','".$tax."')";
		$quo_res=mysql_query($quo);
	if($_POST['dis']!=NULL)
	{
		$id=$c_res+1;
		$desc=$_POST['dis'];
		$rate=$_POST['rate'];
		$quantity=$_POST['capacity'];
		$total= $rate * $quantity;
		$quo="insert into sub_quotation(q_id,less,des,quantity,rate,amount) values('".$id."','1','".$desc."','".$quantity."','".$rate."','".$total."')";
	$quo_res1=mysql_query($quo);
		}	
	$a=$_POST['d'];
	$b = count($a);
	for($i=0; $i<$b; $i++)
	{
		$id=$c_res+1;	
		$q_d=$_POST['d'][$i];
		$q_c=$_POST['c'][$i];
		$q_q=$_POST['q'][$i];
		
		$total= $q_c * $q_q;
		
	$quo="insert into sub_quotation(q_id,less,des,quantity,rate,amount) values('".$id."','0','".$q_d."','".$q_q."','".$q_c."','".$total."')";
	$quo_res1=mysql_query($quo);
	}
	if($quo_res1)
	{
		header("location:quotation.php");
	}
	else
	{
		echo"error";
	}
	
	
}
if(isset($_REQUEST['cancel']))
{
	header("location:addquo.php");
}
?>
<html>
<head>
<title>Rajesh Electric Works</title>
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
  data += "<table class='des'><tr><td><input class='des_in' type='text' name='d["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_cap' type='text' name='c["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_q' type='text' name='q["+counter+"]' id='person_phone"+counter+"' /></td></tr></table>";
  obj.innerHTML = data;
  counter++;
  }
 </script>
  
</head>

<body>
<div id="container">
	
    
    <div id="sub-header">
    			
                <div class="quo">
                
                
                <form name="form5" action="" method="post" enctype="multipart/form-data">
                <br />
                
                <div class="quotationI"><center>REW QUOTATION</center></div>
                <br />
                <table class="q_info3" height="400px;">
                <tr><td class="l_form">Date:</td><td><input name="q_date" class="q_in" type="text" value="<?php  echo date("d-m-Y"); ?>"/></td></tr>
                <tr><td class="l_form">Client Name:</td>
                <td>
                <input type="text" class="q_in" name="q_name" value="<?php echo $c_row[2]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">Address:</td><td><textarea class="q_add" name="q_address"><?php echo $c_row[4]; ?></textarea></td></tr>
                 <tr><td class="l_form">Enter Ref No:</td><td><input name="q_ref" class="q_in1" type="text" value="REW.SNR/13-14/MLL-"/></td></tr>
               <tr><td class="l_form">Enter Vendor No:</td>
               <td><input type="text" name="q_vendor" class="q_in" />
                
				</td>
                 <tr><td class="l_form">Enter Client TeleFax No:</td>
               <td>
                <input type="text" class="q_in" name="q_fax" value="">
				</td>
                </tr>
                
                </table>
                
                
                
                
                
                <table class="q_info4" >
                <tr><td class="l_form">Quotation No</td>
                <td><input name="q_no" class="q_in" type="text" value="<?php echo $c_res +1; ?>" readonly/></td></tr>
                <!--<tr><td class="l_form">Select Gatepass No:</td>
                <td> <select class="q_add_i" name="q_attn">-->               								
				<?php /*?>$query="select *from gatepass where client_id='$c_row[0]'";
				$c_emp_res=mysql_query($query);
				while($c_row_emp=mysql_fetch_array($c_emp_res))
				{
					echo "<option>";
					echo $c_row_emp[8];
					echo "</option>";
				}<?php */?>
			
            	<tr>
            	<td class="l_form">Select Service Tax:</td>
                <td> <select class="q_add_i" name="tax" style="width:250px;">
                <option value="">Select</option>
                <option value="1">value of labour is 70%</option>
                <option value="2">value of labour is 33%</option>                
                </select></td>
                </tr>
                <tr><td class="l_form">Mo No:</td><td><input name="q_mo" class="q_in" type="text" value="<?php echo $c_row[9]; ?>"/></td></tr>
                <tr>
                <td class="l_form">Email_Id:</td>
                <td>
                <input name="q_mail_id" class="q_in" type="text" value="<?php echo $c_row[10]; ?>" />
                </td>
                </tr>
                <tr><td class="l_form">Enter Quotation Subject: </td>
                <td><input name="q_sub" class="q_in2" type="text" value=""/></td></tr>
                <tr><td class="l_form">Enter Transportation Charges</td>
                <td><input name="t_charge" class="q_in" type="text" value=""  /></td></tr>
                </table>
                <br />
                <table class="des">
                <tr>
               <td class="heading">Description</td>              
                <td class="heading">Rate/Each</td>                 
                <td class="heading" >Quantity/Nos</td>               
                </tr>
                <span style="color:#00f;font-size:20px;font-weight:bold;cursor:pointer;" onClick="add_phone_field()">[+]</span>
                <tr>
                <td>
                 <input class="des_in" type="text" name="d[]" id="0"><br>
                </td>
                <td>
                 <input class="des_cap" type="text" name="c[]" id="0"><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="q[]" id="0"><br>
                </td>                               
                </tr>                
                </table>
                 <div id="phone">
                
                </div>
                 <br>
                <br>
                <font size="+2">Enter Amount to be less from original</font>
                <br>
                <table class="" align="center">
                <tr>
               <td class="heading">Description</td>              
                <td class="heading">Rate/Each</td>                 
                <td class="heading" >Quantity/Nos</td>               
                </tr>
                <tr>
                <td>                
                 <input class="des_in" type="text" name="dis" id="dis" value=""><br>
                </td>
                <td>
                 <input class="des_cap" type="text" name="rate" id="rate" value="" ><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="capacity"id="capacity"  value="" ><br>
                </td>
                </tr>       
                </table>
                
                <div class="q_button5">
                
                <input name="submit" class="formbutton" value=" Submit " type="submit" onClick="javascript:return validateMyForm();" />
                <input name="cancel" class="formbutton" value="Cancel" type="submit" />
                </div>
                
                </form>
  				</div>
                
                </div>
                
        
    
    	<div class="clear"></div>
    
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
