<?php
error_reporting(0);
include("include/database.php");

$in=$_REQUEST['c_id2'];

$c_query="select * from clients where c_id=".$in;
$c_res=mysql_query($c_query);
$c_row=mysql_fetch_array($c_res);

$c_emp="select * from emp";
$c_emp_res=mysql_query($c_emp);
?>

<?php

if(isset($_REQUEST['submit']))
{	
		$c=$c_row[0];
		$q_date=$_POST['q_date'];
		$q_name=$_POST['q_name'];
		$q_address=$_POST['q_address'];
		$q_attn=$_POST['q_attn'];
		$q_mail=$_POST['q_mail'];
		$q_mo=$_POST['q_mo'];
		$q_ref=$_POST['q_ref'];
		
		$quo="insert into quotation(c_id,q_ref_no,q_date,q_name,q_address,q_attn,q_mo,q_mail) values('".$c."','".$q_ref."','".$q_date."','".$q_name."','".$q_address."','".$q_attn."','".$q_mo."','".$q_mail."')";
		$quo_res=mysql_query($quo);
		if($quo_res)
		{
			header("location:qbasic.php");
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
</head>

<body>
<div id="container">
	
    
    <div id="sub-header">
    			
                <div class="quo">
                
                
                <form name="form5" action="" method="post" enctype="multipart/form-data">
                <br />
                
                <div class="quotationI"><center>REW QUOTATION</center></div>
                <br />
                <table class="q_info">
                <tr><td class="l_form">Date:</td><td><input name="q_date" class="q_in" type="text" value="<?php  echo date("d-m-Y"); ?>"/></td></tr>
                <tr><td class="l_form">Client Name:</td>
                <td>
                <input type="text" class="q_in" name="q_name" value="<?php echo $c_row[2]?>">
				</td>
                </tr>
                <tr><td class="l_form">Address:</td><td><textarea class="q_add" name="q_address"><?php echo $c_row[4]; ?></textarea></td></tr>
                <tr><td class="l_form">Enter Ref.No:</td>
                <td>
                <input type="text" class="q_in" name="q_ref" value="">
				</td>
                </tr>
               
                </table>
                <table class="q_info2">
                <tr><td class="l_form">Email_Id:</td><td> <input type="text" class="q_in" name="q_mail" value="<?php echo $c_row[10]?>"></td></tr>
                <tr><td class="l_form">Gatepass No:</td>
                <td>
                <select class="q_add_i" name="q_attn">
				<?php
				
				$query="select *from gatepass where client_id='$c_row[0]'";
				$c_emp_res=mysql_query($query);
				while($c_row_emp=mysql_fetch_array($c_emp_res))
				{
					echo "<option>";
					echo $c_row_emp[8];
					echo "</option>";
				}
				?>
                </select>
                </td>
                </tr>
                <tr><td class="l_form">Mo No:</td><td><input name="q_mo" class="q_in" type="text" value="<?php echo $c_row[9]; ?>"/></td>
                </table>
                <br />
               
                <div class="q_button">
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
