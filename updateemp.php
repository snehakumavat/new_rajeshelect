<?php

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
		$eu_t1=$_POST['eu_name'];
		$eu_t2=$_POST['eu_address'];
		$eu_t3=$_POST['eu_contact'];
		$eu_t4=$_POST['eu_desig'];
		
		$qry_up="update emp SET e_name='".$eu_t1."', e_add='".$eu_t2."', e_contact='".$eu_t3."', e_desig='".$eu_t4."' where e_id=".$up_e;
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
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
<div id="container">
	
    <?php
	include("header.php");
	?>
    
    <div id="sub-header">
    <div class="quo">
    	<br />
		<div class="quotation"><center>Update Employee Details</center></div>
        <div>
        <form action="" method="post">
        <table class="addemp_tab">
        <tr>
        <td class="l_form">Emp Name:</td>
        <td><input type="text" class="q_in" name="eu_name" value="<?php echo $row_up[1]; ?>"></td>
        </tr>
        <tr>
        <td valign="top" class="l_form">Address:</td>
        <td><textarea class="q_add" name="eu_address" ><?php echo $row_up[2]; ?></textarea></td>
        </tr>
        <tr>
        <td class="l_form">Contact Details:</td>
        <td><input type="text" class="q_in" name="eu_contact" value="<?php echo $row_up[3]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Designation:</td>
        <td><input type="text" class="q_in" name="eu_desig" value="<?php echo $row_up[4]; ?>"></td>
        </tr>
        
        </div>
        </table>
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
