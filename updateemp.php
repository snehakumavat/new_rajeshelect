<?php
error_reporting(0);
include("session.php");
include("include/database.php");
	$up_e = 0;
	$up_e=$_REQUEST['e_id2'];
	$up_qry="select * from emp where e_id=".$up_e;
	$up_res=mysql_query($up_qry);
	$row_up=mysql_fetch_array($up_res);
	
	if(isset($_REQUEST['e_can']))
	{
		header("location:employee.php");
	}
	
	if(isset($_REQUEST['e_up']))
	{	
		$up_e=$_REQUEST['e_id2'];
		$eu_id=$_POST['eu_id'];
		$eu_t1=$_POST['eu_name'];
		$eu_t2=$_POST['eu_address'];
		$eu_t3=$_POST['eu_contact'];
		$eu_t4=$_POST['eu_desig'];
		$eu_t5=$_POST['eu_doj'];
		$eu_t6=$_POST['eu_bname'];
		$eu_t7=$_POST['eu_accno'];
		$eu_t8=$_POST['eu_panno'];
		//$eu_t9=$_POST['eu_nod'];
		
		$qry_up="update emp SET e_code='".$eu_id."',e_name='".$eu_t1."', e_add='".$eu_t2."', e_contact='".$eu_t3."', e_desig='".$eu_t4."',e_doj='".$eu_t5."',e_accno='".$eu_t7."',e_bankname='".$eu_t6."',e_panno='".$eu_t8."' where e_id=".$up_e;
		$res_up=mysql_query($qry_up);
		if($res_up)
		{
			header("location:employee.php");
		}
		else
		{
			echo "error";
		}
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
</head>

<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");
	?><br />
		<div class="quotation"><center>Update Employee Details</center></div>
        <div>
        <form action="" method="post">
        <table class="addpay_tab">
         <tr>
        <td class="l_form">Employee ID:</td>
        <td><input id="eid" type="text" class="q_in" name="eu_id" value="<?php echo $row_up[1]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Emp Name:</td>
        <td><input type="text" class="q_in" name="eu_name" value="<?php echo $row_up[2]; ?>"></td>
        </tr>
        <tr>
        <td valign="top" class="l_form">Address:</td>
        <td><textarea class="q_add" name="eu_address" ><?php echo $row_up[3]; ?></textarea></td>
        </tr>
        <tr>
        <td class="l_form">Contact Details:</td>
        <td><input type="text" class="q_in" name="eu_contact" value="<?php echo $row_up[4]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Designation:</td>
        <td><input type="text" class="q_in" name="eu_desig" value="<?php echo $row_up[6]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Date of Joining:</td>
        <td><input id="doj" type="date" class="q_in" name="eu_doj" value="<?php echo $row_up[5]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Bank Name:</td>
        <td><input id="bank_name" type="text" class="q_in" name="eu_bname" value="<?php echo $row_up[8]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Bank Account No:</td>
        <td><input id="acc_no" type="text" class="q_in" name="eu_accno" value="<?php echo $row_up[7]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">PAN No:</td>
        <td><input id="pan_no" type="text" class="q_in" name="eu_panno" value="<?php echo $row_up[9]; ?>"></td>
        </tr>
             
        </table><br><br>
        <div class="addemp_b">
         <input name="e_up" class="formbutton" value=" Update " type="submit" />
         <input name="e_can" class="formbutton" value="Cancel" type="submit" />
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
