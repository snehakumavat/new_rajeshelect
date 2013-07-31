<?php
include("include/database.php");
error_reporting(0);
include("session.php");
$in=$_REQUEST['c_id1'];

$c_query="select * from clients where c_id='$in'";
$c_res=mysql_query($c_query);
$c_row=mysql_fetch_array($c_res);

$c_query2="select g_no from gatepass where client_id='$c_row[0]'";
$c_res2=mysql_query($c_query2);
$gate=mysql_result($c_res2,0);


$c_query1="select * from invoice order by i_id DESC";
$c_res1=mysql_query($c_query1);
if($c_row1=mysql_fetch_array($c_res1))
{
	$count=$c_row1[0];
	}

 
?>

<?php


if(isset($_REQUEST['submit']))
{	
		$c=$in;
		$q_date=date('Y-m-d',strtotime($_POST['q_date']));
		$q_name=$_POST['q_name'];
		$q_address=$_POST['q_address'];
		$po=$_POST['po_no'];				
		$rgp=$_POST['rgp'];
		$dc=$_POST['dc'];
		$v1=$_POST['vendr'];
		$t1=$_POST['tin_no'];
		$d1=date('Y-m-d',strtotime($_POST['date1']));
		$d2=date('Y-m-d',strtotime($_POST['date2']));

		$add="INSERT INTO `invoice`(`q_date`,`gatepass_no`,`c_id`,`c_comp`, `q_name`, `q_address`,`q_mo`, `po_no`, `rgp_no`, `dc_no`, `code_no`, `tin_no`, `date1`, `date2`,`given`) VALUES ('".$q_date."','".$gate."','".$c."','".$c_row[3]."','".$q_name."','".$q_address."','".$c_row[9]."','".$po."','".$rgp."','".$dc."','".$v1."','".$t1."','".$d1."','".$d2."','".$_POST['given']."')";
		$query=mysql_query($add);
	
		$a=$_POST['d'];
		$b = count($a);
		for($i=0; $i<$b; $i++)
		{
			$id=$_REQUEST['invoice'];
			$c=$c_row[3];
			$d=$c_row[1];	
			$q_d=$_POST['d'][$i];
			$q_q=$_POST['q'][$i];
			$q_r=$_POST['r'][$i];
			$total=$q_q * $q_r ;
				
		$quo="insert into sub_invoice(i_id,des,quantity,rate,total) values('".$id."','".$q_d."','".$q_q."','".$q_r."','".$total."')";
		$quo_res=mysql_query($quo);
		
		
		
		if($quo_res)
		{
			header("location:invoicedetails.php");
		}
		else
		{
			echo"error";
		}
		}
		
}
if(isset($_REQUEST['cancel']))
{
	header("location:invoicedetails.php");
}
?>
<html>
<head>
<title>Rajesh Electric Wires</title>
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
  data += "<table class='des'><tr><td><input class='des_in' type='text' name='d["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_q' type='text' name='q["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_r' type='text' name='r["+counter+"]' id='person_phone"+counter+"' /></td></tr></table>";
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
                
                <div class="quotationI"><center>REW TAX INVOICE</center></div>
                <br />
                <table class="q_info3" height="300px">
                <tr><td class="l_form">Date:</td><td><input name="q_date" class="q_in" type="date" value="<?php  echo date("Y-m-d"); ?>"/></td></tr>
                <tr><td class="l_form">Gatepass No:</td>
                <td>
                <input type="text" class="q_in" name="g_no" value="<?php echo $gate; ?>" readonly>
				</td>
                </tr>
                <tr><td class="l_form">Client Name:</td>
                <td>
                <input type="text" class="q_in" name="q_name" value="<?php echo $c_row[2]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">Address:</td><td><textarea class="q_add" name="q_address"><?php echo $c_row[4]; ?></textarea></td></tr>
                <tr><td class="l_form">PO No:</td>
                <td>
                <input type="text" class="q_in" name="po_no" >
				</td>
                </tr>
                <tr><td class="l_form">Your RGP No:</td>
                <td>
                <input type="text" class="q_in" name="rgp" >
				</td></tr>
                </table>
                <table class="q_info5">
                <tr><td class="l_form">Invoice No</td>
                <td><input name="invoice" class="q_in" type="text" value="<?php echo $count+1; ?>" readonly /></td></tr>
                <tr><td class="l_form">Our DC No:</td>
                <td>
                <input type="text" class="q_in" name="dc" >
				</td></tr>
                 <tr><td class="l_form">Vendor Code No:</td>
                <td>
                <input type="text" name="vendr" class="q_in">
                				</td></tr>
                 <tr><td class="l_form">Consignee Vat / Tin No:</td>
                <td>
                <input type="text" class="q_in" name="tin_no" >
				</td></tr>
                 <tr><td class="l_form">Date:</td>
                <td>
                <input type="date" class="q_in" name="date1" value="<?php echo date('Y-m-d'); ?>" >
				</td></tr>
                <tr><td class="l_form">Date:</td>
                <td>
                <input type="date" class="q_in" name="date2" value="<?php echo date('Y-m-d'); ?>" >
				</td></tr>
                <tr>
                <td class="l_form">Invoice given to Client:</td>
                <td><select name="given">
                <option value="0">Select</option>
                <option value="1">Yes</option>
                <option value="2">No</option>
              </select>
              	</td>
                </tr>
                </table>
                <br />
                <table class="des">
                <tr>
                <td class="heading">DESCRIPTION</td>
                <td class="heading" >QTY</td>
                <td class="heading">RATE/EACH</td>
                
                </tr>
                <span style="color:#00f;font-size:20px;font-weight:bold;cursor:pointer;" onClick="add_phone_field()">[+]</span>
                <tr>
                <td>
                 <input class="des_in" type="text" name="d[]" id="0"><br>
                </td>                
                <td>
                 <input class="des_q" type="text" name="q[]" id="0"><br>
                </td>
                <td>
                 <input class="des_r" type="text" name="r[]" id="0"><br>
                </td>
                               
                </tr>
                
                </table>
                 <div id="phone">
                
                </div>
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
